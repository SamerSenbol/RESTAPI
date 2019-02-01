
<?php
// page should only be able to request via POST, it should check for a date of birth in $ _POST, figure out which horoscope the date of birth is and save it in $ _SESSION.

// If a horoscope is already saved, it should not be overwritten. If the horoscope could not be calculated, nothing should be saved.

// The page should not use echo or write any output except true or false, depending on whether the horoscope was saved.
session_start();
include "horoscopes.php";

if($_SERVER["REQUEST_METHOD"]=="POST")  {
  
   if( isset($_POST["user_date"])) {

      $data = explode('-', $_POST['user_date']);
      $mmdd = $data[1] . '-' . $data[2];
      $result = '';
      
      foreach ($horoscope as $horo => $dates) {
            if ($mmdd >= $dates['start'] && $mmdd <= $dates['end']) {
            $result = $horo;
            $_SESSION["horoscope"] = $horo;

            break;
         }
      }
      echo json_encode(true);
      exit;
   } else {
      echo json_encode(false); 
      exit;
   }
}