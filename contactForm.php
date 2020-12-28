<?php
    if(isset($_POST['contactName']) && isset($_POST['contactEmail']) && isset($_POST['contactSubject']) && isset($_POST['contactMessae'])) {
        $data = $_POST['contactName'] . '-' . $_POST['contactEmail'] . $_POST['contactSubject'] . '-' . $_POST['contactMessae'] . "\r\n";
        $ret = file_put_contents('contactData.txt', $data, FILE_APPEND | LOCK_EX);
    }
?>