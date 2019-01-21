<?php
//sidan ska bara gå att begära via PUT,  den ska kolla efter ett födelsedatum i PUT datan, det finns ingen inbyggd $_PUT men ni kan skapa den själva genom att köra denna raden längst upp i filen:parse_str(file_get_contents("php://input"), $_PUT);räkna ut vilket horoskop födelsedatumet tillhör och uppdaterade det sparade horoskopet som finns i $_SESSION och skriva ut true.

//Om inget horoskop finns i $_SESSION ska sidan inte uppdatera något och skriva ut false.

    parse_str(file_get_contents("php://input"), $_PUT);
    
    session_start();
    require "./addHoroscope.php";
    if($_SERVER['REQUEST_METHOD'] == 'PUT'){
        
        if(isset($_SESSION["horoskop"])) {
            session_unset();
            $_SESSION["horoskop"] = $personNummer;
        }
    }
