<?
$now = new DateTime();
echo "github synced to heroku -- ";
echo $now->format('Y-m-d H:i:s');
echo $now->getTimestamp();
?>