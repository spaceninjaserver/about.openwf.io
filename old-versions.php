<?php
$ext = (!empty($_DYNSTAT) ? ".html" : (substr($_SERVER["SERVER_SOFTWARE"] ?? "", 0, 3) == "PHP" ? ".php" : ""));
?>
<script>location.pathname="versions<?=$ext;?>";</script>