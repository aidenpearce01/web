<?php
if (isset($_GET['a'])) {
    return $_GET['a'] == "true" ? exec('mkdir test') : exec('rmdir test');
} elseif (isset($_GET['b'])) {
    return $_GET['b'] == "true" ? exec('mkdir test1') : exec('rmdir test1');
//if (isset($_GET['b'] === 'true')) {
//    exec('mkdir test1') : exec('rmdir test1')
//}
?>