<?php
// the page should only be requested via DELETE, it should delete the saved horoscope in $ _SESSION and echo: a true. If nothing is saved, it should echo false.

include "horoscopes.php";
session_start();
if($_SERVER['REQUEST_METHOD'] === 'DELETE'){

    if (isset($_SESSION['horoscope'])) {
        unset($_SESSION['horoscope']);
        echo 'true';
    } else {
        echo 'false';
    }
}

