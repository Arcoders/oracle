#!/usr/bin/php-cgi
<?php
$conn = oci_connect('u1939659', 'ohlzikr', 'oracleps');
 require('anyco_ui.inc');
 ui_print_header('Departments');
 ui_print_footer(date('Y-m-d H:i:s'));
 oci_close($conn);
?>