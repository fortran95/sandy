<?
include (dirname(__FILE__) . "/initialize.php");

$u = isset($_SESSION['user'])?$_SESSION['user']:false;
if($u){
    printf("%s", $u->getUsername());
    print "<strong>{$u->username}</strong>欢迎光临" . session_id();
    print_r($u);
}else
    header("Location: account.php");
?>
