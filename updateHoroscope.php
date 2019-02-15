<?php
// page should only be able to request via PUT, it should check for a date of birth in the PUT data, there is no built-in $ _PUT but you can create it yourself by running this row at the top of the file: parse_str (file_get_contents ("php: // input "), $ _PUT), calculate which horoscope the date of birth belongs and updated the saved horoscope contained in $ _SESSION and print true.

// If no horoscope is in $ _SESSION, the page should not update anything and print false.

    parse_str(file_get_contents("php://input"), $_PUT);
    session_start();

    include "horoscopes.php";
    
    if($_SERVER['REQUEST_METHOD'] == 'PUT'){
        if(isset($_SESSION['horoscope'])&&($_PUT["Personnummer"])){

        $data = explode('-', $_PUT['Personnummer']);
        $mmdd = $data[1] . '-' . $data[2];
        $result = '';

        foreach($horoscope as $horo => $dates) {
            if ($mmdd >= $dates['start'] && $mmdd <= $dates['end']) {
               $result = $horo;
               $_SESSION["horoscope"] = $horo;
               break;
            }
        }
         echo json_encode(true);
         exit;
        }
    }

