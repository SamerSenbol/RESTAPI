
<?php
//sidan ska bara gå att begära via GET, den ska kolla om ett horoskop finns sparat i $_SESSION och i så fall skriva ut det i output. Annars ska sidan inte skriva ut någonting.

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    if (isset($_SESSION["horoskop"])) {
        echo json_encode(array($_SESSION["horoskop"]));
    }
}