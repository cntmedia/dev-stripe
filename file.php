<?
/*
echo(dirname(__FILE__) . '/Stripe.php') . "\n";
echo(getcwd() . "\n");
echo(dirname ( realpath ( __FILE__ ) ) );

function get_file_dir() {
    global $argv;
    $dir = dirname(getcwd() . '/' . $argv[0]);
    $curDir = getcwd();
    chdir($dir);
    $dir = getcwd();
    chdir($curDir);
    return $dir;
}

include get_file_dir() . '/include.php';
// or even..
//chdir(get_file_dir());
//include './include.php';

*/

include('/app/include.php');


?>