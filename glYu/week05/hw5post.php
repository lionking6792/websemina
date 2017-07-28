<?php

$content = shell_exec("ls");
echo json_encode($content);

?>