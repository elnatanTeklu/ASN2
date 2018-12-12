<?php
require_once('check.php');

//This function returns True if auth level = '3'
//Otherwise it returns False
function CheckAccess()
{
    $result = (isset($_SESSION['SESS_AUTH_LEVEL']) &&  $_SESSION['SESS_AUTH_LEVEL'] == 3 );

    if(!$result)
    {
        header('WWW-Authenticate: Basic realm=“Test restricted area”');
        header('HTTP/1.0 401 Unauthorized');
        return false;
    }
    else
    {
        header("location: admin.php");
    }
}
?>