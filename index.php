<?php

echo("server_script_filename");
echo "\r\n";
echo(_SERVER["SCRIPT_FILENAME"]);

echo("dir_dirname_file");
echo "\r\n";
echo(dirname(dirname(__FILE__)));

echo("server_php_self");
echo "\r\n";
echo(dirname($_SERVER['PHP_SELF']));



echo("dir_file");
echo "\r\n";
echo(dirname(__FILE__));



$base_url = str_replace($DOCUMENT_ROOT, "", 
dirname($PHP_SELF));
echo("base_url");
echo "\r\n";
echo($base_url);

echo("php_self");
echo "\r\n";
echo(dirname($PHP_SELF));


echo("document_root");
echo "\r\n";
echo($DOCUMENT_ROOT);

?>