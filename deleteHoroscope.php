<?php
//sidan ska bara gå att begära via DELETE,  den ska ta bort det sparade horoskopet i $_SESSION och echo:a true. Om inget finns sparat ska den echo:a false.


session_start();
if (isset($_SESSION['horoscope'])) {
    unset($_SESSION['horoscope']);
    echo 'true';
} else {
    echo 'false';
}
