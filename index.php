<?
include (dirname(__FILE__) . "/initialize.php");

$u = isset($_SESSION['user'])?$_SESSION['user']:false;
if($u){
    print "<strong>{$u->username}</strong>欢迎光临" . session_id();
}else
    header("Location: account.php");
?>
