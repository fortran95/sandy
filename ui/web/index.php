<?
$REALPATH = dirname(__FILE__);
include("$REALPATH/lib/smarty.php");

$render = new Render();

$render->display('login.tpl');
?>
