
<?php
// page should only be able to request via GET, it should check if a horoscope is saved in $ _SESSION and in that case print it in the output. Otherwise, the page will not print anything.

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    if (isset($_SESSION["horoskop"])) {
        echo json_encode(array($_SESSION["horoskop"]));
    }
}