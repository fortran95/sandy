<?
include (dirname(__FILE__) . "/initialize.php");

$u = isset($_SESSION['user'])?$_SESSION['user']:false;
if($u){
#    print "<strong>{$u->username}</strong>欢迎光临" . session_id();
    $render->assign('user',array(
                            'name'=>$u->username,
                           ));
    $render->display('index.tpl');
}else
    header("Location: account.php");
?>
