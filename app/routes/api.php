<?php
//if(!defined("SPECIALCONSTANT")) die("Acceso denegado");

/*$app->get("/inmueble/", function() use($app)
{
});*/

$app->get("/christian08", function() use($app)
{
	try{
    	$app->render('crear-inmueble.php');
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
		$nom_us = $app->request->post("nom_us");
		$dni = $app->request->post("dni");
		$ver = 0;
		$pub = 0;
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
			$dbh = $connection->prepare("INSERT INTO inmuebles VALUES(null, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), ?,?,?,?)");
			$dbh->bindParam(1, $tip_ven);
			$dbh->bindParam(2, $tip_inm);
			$dbh->bindParam(3, $ubi);
			$dbh->bindParam(4, $are);
			$dbh->bindParam(5, $cel1);
			$dbh->bindParam(6, $cel2);
			$dbh->bindParam(7, $tit);
			$dbh->bindParam(8, $nom_img_post);
			$dbh->bindParam(9, $ver);
			$dbh->bindParam(10, $nom_us);
			$dbh->bindParam(11, $dni);
			$dbh->bindParam(12, $pub);
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
