<?
$REALPATH = dirname(__FILE__);
include("$REALPATH/lib/smarty.php");
include("$REALPATH/lib/authenticate.php");

$render = new Render();

$render->display('login.tpl');
?>
