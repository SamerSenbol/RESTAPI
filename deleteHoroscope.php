<?php
// the page should only be requested via DELETE, it should delete the saved horoscope in $ _SESSION and echo: a true. If nothing is saved, it should echo false.


session_start();
if (isset($_SESSION['user_date'])) {
    session_destroy('user_date');
    //unset($_SESSION['user_date']);
    echo 'true';
} else {
    echo 'false';
}
