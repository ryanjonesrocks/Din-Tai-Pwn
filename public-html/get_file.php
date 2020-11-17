<!-- Path Traversal -->
<!-- http://localhost:8080/get_file.php?file=/etc/passwd -->
<?php
$myfile = $_GET['file'];
include($myfile);
?>