<?
/*
 *  Config file for Sandy the microblogging system.
 *
 *  This also includes all necessary libraries in reasonable ways.
 *  Other pages may include this file only and get everything done.
 */
/******************************************************************************/
/*
 * Security configuration
 *
 * Make below unique. Long and random please.
 */
$_unique_key = 'l3Ih6Tf0Fs9Or8Uv0Dn8Hb4Is4Py8Qi2Vi7Jk7Ng7Pk8Bk3Fk3Wi3Rm4It2n';


/*
 * Database configuration
 *
 * This instructs how our system connects to the database.
 * > For MySQL connection, use:
 *      'type'=>'mysql',
 *   And supply 'server', 'user', 'password', 'dbname' respectively as
 *   database server, user name, password, and the database Sandy should use.
 */
$_database_credentials = array(
    'type'      =>'mysql',
    'server'    =>'localhost',
    'user'      =>'test',
    'password'  =>'test',
    'dbname'    =>'sandy',
);
?>
