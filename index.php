<?
echo("server_script_filename"."\n");
echo(_SERVER["SCRIPT_FILENAME"]);
echo("dir_dirname_file"."\n");
echo(dirname(dirname(__FILE__)));
echo("server_php_self"."\n");
echo(dirname($_SERVER['PHP_SELF']));
echo("dir_file"."\n");
echo(dirname(__FILE__));


$base_url = str_replace($DOCUMENT_ROOT, "", 
dirname($PHP_SELF));
echo("base_url"."\n");
echo($base_url);
echo("php_self"."\n");
echo(dirname($PHP_SELF));
echo("document_root"."\n");
echo($DOCUMENT_ROOT);

?>