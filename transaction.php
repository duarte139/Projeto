	<?php

	$conn = new PDO ("mysql:dbname=dbphp7;host=localhost", "root", "");

	$conn->begintransaction();

	$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

	$id = "2";



	$stmt->execute(array($id));

	//$conn->rollback();
	$conn->commit();

	echo "Succesfully";


	?>