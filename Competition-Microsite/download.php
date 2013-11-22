<?php
session_start();

if ((!isset($_REQUEST['key'])) || ($_REQUEST['key'] != 'PUBLICIS4COMP')) {
    die('Invalid access from: '.$_SERVER['SERVER_ADDR']);
}
define('PUBLICISCOMP', 'PUBLICIS4COMP');
include 'db.php';

$select = "SELECT * FROM comp_entries ORDER BY id ASC";
$export = mysql_query($select);
$fields = mysql_num_fields($export);
$data = '';

while ($row = mysql_fetch_assoc($export)) {
    $line = '';

    $value = CleanUpValues("'".$row['id']);
    $line .= $value;

    $value = CleanUpValues("'".$row['answer']);
    $line .= $value;

    $value = CleanUpValues("'".$row['name']);
    $line .= $value;

    $value = CleanUpValues("'".$row['email']);
    $line .= $value;

    $value = CleanUpValues("'".$row['telephone']);
    $line .= $value;

    $value = CleanUpValues("'".$row['timestamp']);
    $line .= $value;

    $data .= trim($line) . "\n";
}

$data = str_replace("\r", "", $data);
$datestamp = date("Ymdhis");

header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=entries_" . $datestamp . ".xls");
header("Pragma: no-cache");
header("Expires: 0");

print $data;
exit;

function CleanUpValues($value) {
    if ((!isset($value)) OR ($value == "")) {
        $value = "\t";
    } else {
        $value = str_replace('"', '""', $value);
        $value = '"' . $value . '"' . "\t";
    }
    return $value;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Download Competition Entries</title>
    </head>
    <body>
    </body>
</html>
