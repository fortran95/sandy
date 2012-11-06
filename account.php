<?
include (dirname(__FILE__) . "/initialize.php");
$show = isset($_GET['show'])?$_GET['show']:'';
$show = strtolower(trim($show));
$action = isset($_POST['action'])?$_POST['action']:'';
$action = strtolower(trim($action));

switch($action){
    case 'login':
        $username = isset($_POST['username'])?$_POST['username']:'';
        $password = isset($_POST['password'])?$_POST['password']:'';
        $um = new UserManager();
        $ret = $um->authenticate($username,$password);
        if(false !== $ret){
            $_SESSION['user'] = $ret;
            $render->assign('success',$_SESSION['user']->username);
        } else {
            $render->assign('error','1');
        }
        $show = 'login';
        break;
}

switch($show){
    case 'reg':
        $render->display('reg.tpl');
        break;
    default:
        $render->display('login.tpl');
}
?>
