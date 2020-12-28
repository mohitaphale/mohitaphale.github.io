<?php
    if(isset($_POST['contactName']) && isset($_POST['contactEmail']) && isset($_POST['contactSubject']) && isset($_POST['contactMessae'])) {
        $data = $_POST['contactName'] . '-' . $_POST['contactEmail'] . $_POST['contactSubject'] . '-' . $_POST['contactMessae'] . "\r\n";
        $ret = file_put_contents('contactData.txt', $data, FILE_APPEND | LOCK_EX);
        if($ret === false) {
            die('There was an error writing this file');
        }
        else {
            echo "$ret bytes written to file";
        }
    }
    else {
    die('no post data to process');
    }
?>