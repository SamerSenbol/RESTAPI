
<?php
//sidan ska bara gå att begära via POST,  den ska kolla efter ett födelsedatum i $_POST, räkna ut vilket horoskop födelsedatumet tillhör och spara det i $_SESSION.

//Om ett horoskop redan finns sparat ska det inte skrivas över. Om det inte gick att räkna ut horoskopet ska ingenting sparas.

//Sidan ska inte använda echo eller skriva någon output förutom true eller false, beroende på om horoskopet sparades.


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
            $_SESSION[$mmdd] = $horo;

            break;
         }
      }
      echo json_encode(array("firas"=>$result));
      exit;
   }
}