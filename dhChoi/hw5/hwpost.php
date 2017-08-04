<?php

$result = shell_exec("ls");
echo json_encode($result);

?>