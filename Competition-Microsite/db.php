<?php if(!defined('PUBLICISCOMP') || PUBLICISCOMP!=='PUBLICIS4COMP')exit('No direct script access allowed');

// local testing
$db_host = 'localhost';
$db_name = 'comp_database';
$db_usr = 'root';
$db_pass = 'root';

// live version
// $db_host = '';
// $db_name = '';
// $db_usr = '';
// $db_pass = '';

$db = mysql_connect($db_host, $db_usr, $db_pass) or die(mysql_error());
mysql_select_db($db_name,$db);

?>