<?
function getUserFingerprint(){
    global $_SERVER;
    $s1 = isset($_SERVER['HTTP_USER_AGENT'])?$_SERVER['HTTP_USER_AGENT']:'';
    $s2 = isset($_SERVER['REMOTE_ADDR'])?$_SERVER['REMOTE_ADDR']:'';

}
?>
