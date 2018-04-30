<?php
if (isset($_GET['a'])) {
    return $_GET['a'] == "true" ? exec('mkdir test') : exec('rmdir test');
}
//if (isset($_GET['b'] === 'true')) {
//    exec('mkdir test1') : exec('rmdir test1')
//}
?>