<?
/*
 *  Config file for Sandy the microblogging system.
 *
 *  This also includes all necessary libraries in reasonable ways.
 *  Other pages may include this file only and get everything done.
 */
/********************   BELOW CAN BE MODIFIED MANUALLY  *********************/
# Database Configuration
$_database_credentials = array(
    'type'      =>'mysql',
    'server'    =>'localhost',
    'user'      =>'test',
    'password'  =>'test',
    'dbname'    =>'sandy',
);

/* xxx xxx xxx xxx xxx xxx xxx xxx xxx xxx xxx xxx xxx xxx xxx xxx xxx xxx   */
/* DO NOT modify anything below, ONLY when you are sure of its consequences! */
/* xxx xxx xxx xxx xxx xxx xxx xxx xxx xxx xxx xxx xxx xxx xxx xxx xxx xxx   */

$basepath = dirname(__FILE__);
include("$basepath/class/database.php");

switch($_database_credentials['type']){
    case 'mysql':
        $database = new MySQL($_database_credentials['server'],
                              $_database_credentials['user'],
                              $_database_credentials['password'],
                              $_database_credentials['dbname']);
        break;
}

include("$basepath/lib/security.php");

include("$basepath/class/user.php");
include("$basepath/class/usermanager.php");

include("$basepath/lib/smarty.php");
include("$basepath/lib/authenticate.php");

session_start();

if(session_id() != ''){
    # TODO validate given sessionID + IP + BrowserType + ..., if pass, start session, or destroy.
} else {
    session_start();
    # TODO record validating info
}
?>
