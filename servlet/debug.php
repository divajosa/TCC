<?php
include_once "../util/Globais.php";
foreach ($_SESSION as $key => $value) {
    print($key.' - '.$value.'<br>');
};

foreach ($_COOKIE as $key => $value) {
    print($key.' - '.$value.'<br>');
};

?>