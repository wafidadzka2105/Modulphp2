<?php
if(isset($HTTP_COOKIE_VAR["cookie_no_induk"]))
{
    echo ("isi data <b>" . $HTTP_COOKIE_VAR["cookie_no_induk"] . "</b><br>");
    echo ("Click <a href=\"cookie_destroy.php\">next</a>untuk menghapus id !");
}else
{
    header("Location: cookie.php");
    exit;
}
?>