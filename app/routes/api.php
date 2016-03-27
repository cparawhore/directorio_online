<?php
//if(!defined("SPECIALCONSTANT")) die("Acceso denegado");

/*$app->get("/inmueble/", function() use($app)
{#!8ogWwTDR!ez8HoC-LS4l6Db3ffwJ0GzZahYFX6dGGLx3wGEcFcKA
});*/

$app->get('/eventos', function () use ($app){
    try{
		$connection = getConnection();
		$dbh = $connection->prepare("SELECT *,fec_evento - curdate() as diferencia FROM eventos WHERE fec_evento - curdate() >= 0");
		$dbh->execute();
		$inmuebles = $dbh->fetchAll();
		$connection = null;
    	$app->render('eventos.php', array('inmuebles'=> $inmuebles));
	}
	catch(PDOException $e)
	{
		echo "Error: " . $e->getMessage();
	}
});

$app->get("/8ogWwTDR!ez8HoC-LS4l6Db3ffwJ0GzZahYFX6dGGLx3wGEcFcKA", function() use($app)
{
	try{
		/*if(!isset($_SESSION["user"])){
			ob_start();
	    header("Location:/"); echo 'asdsa';
	    exit();}*/
	    if(!isset($_SESSION["token"])){
	    		$app->render('login.php');
	    }
	else{
	    if($_SESSION["token"] == '9ho1DTBL!ez8HoC-LS4lxNcBMMUtcsTZahYFX6dGGJCWNiwlMWAo')
    	{
	    	$app->render('crear-inmueble.php');echo $_SESSION["token"];
	    }
    }
	}
	catch(PDOException $e)
	{
		echo "Error: " . $e->getMessage();
	}
});

$app->post("/8ogWwTDR!ez8HoC-LS4l6Db3ffwJ0GzZahYFX6dGGLx3wGEcFcKA", function() use($app)
{
	try{
		session_start();
		$user = $app->request->post("use");
		$pass = md5($app->request->post("password"));
		$connection = getConnection();
		$dbh = $connection->prepare("SELECT pass FROM acmin WHERE user='".$user."'");
		$dbh->execute();
		$data = $dbh->fetchAll();
		if(isset($data[0]) && $data[0]["pass"] == $pass){
			$_SESSION["token"] = '9ho1DTBL!ez8HoC-LS4lxNcBMMUtcsTZahYFX6dGGJCWNiwlMWAo';
			ob_start();
			header("Location:/christian08"); 
	    	exit();
		}
		else{
			ob_start();header("Location:/");exit();
		}
	}
	catch(PDOException $e)
	{
		echo "Error: " . $e->getMessage();
	}
});

$app->get("/christian08", function() use($app)
{
	try{
		session_start();
		if(isset($_SESSION["token"])){
			if($_SESSION["token"] == '9ho1DTBL!ez8HoC-LS4lxNcBMMUtcsTZahYFX6dGGJCWNiwlMWAo'){
    			$app->render('crear-inmueble.php');
    		}
    	}
    	else{
    		ob_start();header("Location:/");exit();
    	}
	}
	catch(PDOException $e)
	{
		echo "Error: " . $e->getMessage();
	}
});

$app->get("/logout", function() use($app)
{
	try{
		session_start();
		session_destroy();ob_start();header("Location:/");exit();
	}
	catch(PDOException $e)
	{
		echo "Error: " . $e->getMessage();
	}
});

$app->post("/christian08", function() use($app)
{
	try{
		$mensajes = array();
		$tit = $app->request->post("tit");
		$tip_ven = $app->request->post("tip_ven");
		$tip_inm = $app->request->post("tip_inm");
		$ubi = $app->request->post("ubi");
		$are = $app->request->post("are");
		$cel1 = $app->request->post("cel1");
		$cel2 = $app->request->post("cel2");
		$ver = 0;
		$pub = 1;
		$nom_img = rand(0, 9).rand(0, 9) . $_FILES['img']['name'];
		$nom_img_post = $nom_img;
		if($tit == '' || $tip_ven == '' || $tip_inm == '') $mensajes[] = "Falta llenar los datos mas importantes";
		if ($_FILES["img"]["error"] > 0){
			$mensajes[] = "Al parecer usted no ha subido ninguna imagen";
		} else {
			//ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
			//y que el tamano del archivo no exceda los 100kb
			$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
			$limite_kb = 1000;
		
			if (in_array($_FILES['img']['type'], $permitidos) && $_FILES['img']['size'] <= $limite_kb * 1024){
				//esta es la ruta donde copiaremos la imagen
				//recuerden que deben crear un directorio con este mismo nombre
				//en el mismo lugar donde se encuentra el archivo subir.php
				$ruta = "img/inmuebles/temp/".$nom_img;
				//comprovamos si este archivo existe para no volverlo a copiar.
				//pero si quieren pueden obviar esto si no es necesario.
				//o pueden darle otro nombre para que no sobreescriba el actual.
				if (!file_exists($ruta)){
					//aqui movemos el archivo desde la ruta temporal a nuestra ruta
					//usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
					//almacenara true o false
					$resultado = @move_uploaded_file($_FILES["img"]["tmp_name"], $ruta);
					if ($resultado){
						$mensajes[] = "El archivo ha sido subido exitosamente";
					} else {
						$mensajes[] = "Ocurrio un error al mover el archivo a: ".$ruta;
					}
				} else {
					$mensajes[] = $_FILES['img']['name'] . ", este archivo existe. Este error es raro, que estas haciendo?";
				}
			} else {
				$mensajes[] = "Archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
			}
			}
			$connection = getConnection();
			$dbh = $connection->prepare("INSERT INTO inmuebles (tipo, tipo_in, ubicacion, area, cel, cel2, titulo,imagen, created_at, verificado, enabled) VALUES(?, ?, ?, ?, ?, ?, ?, ?, NOW(), ?,?)");
			$dbh->bindParam(1, $tip_ven);
			$dbh->bindParam(2, $tip_inm);
			$dbh->bindParam(3, $ubi);
			$dbh->bindParam(4, $are);
			$dbh->bindParam(5, $cel1);
			$dbh->bindParam(6, $cel2);
			$dbh->bindParam(7, $tit);
			$dbh->bindParam(8, $nom_img_post);
			$dbh->bindParam(9, $ver);
			$dbh->bindParam(10, $pub);
			$dbh->execute();
			//$bookId = $connection->lastInsertId();
			$connection = null;
			$app->render("crear-inmueble.php", array('mensajes'=> $mensajes));
		//$app->render('crear-inmueble.php');
	}
	catch(PDOException $e)
	{
		echo "Error: " . $e->getMessage();
	}
});



$app->get('/page/:id', function ($id) use ($app){
    try{
		$connection = getConnection();
		$desde = $id*8;
		$dbh = $connection->prepare("SELECT * FROM inmuebles LIMIT ".$desde.",8");// WHERE enabled=1 AND curdate() - created_at < 60 LIMIT 8");
		$count = $connection->prepare("SELECT COUNT(*) FROM inmuebles");
		$dbh->execute();
		$count->execute();
		$inmuebles = $dbh->fetchAll();
		$numero = $count->fetch();
		$connection = null;
    	$app->render('inmueble.php', array('inmuebles'=> $inmuebles , 'var'=> $numero[0]));
	}
	catch(PDOException $e)
	{
		echo "Error: " . $e->getMessage();
	}
});
