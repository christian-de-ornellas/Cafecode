<?php
ob_start();
session_start();
session_destroy();
echo"<p style='color: #666; float: left;'>Obrigado e volte sempre!</p><img src='../public/icons/animado/facebook.gif' style='width:20px; float: right; position:absolute;'/>";
header('Refresh: 3; url=../index');
exit;

