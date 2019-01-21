
<?php
//sidan ska bara gå att begära via POST,  den ska kolla efter ett födelsedatum i $_POST, räkna ut vilket horoskop födelsedatumet tillhör och spara det i $_SESSION.

//Om ett horoskop redan finns sparat ska det inte skrivas över. Om det inte gick att räkna ut horoskopet ska ingenting sparas.

//Sidan ska inte använda echo eller skriva någon output förutom true eller false, beroende på om horoskopet sparades.




session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")  {
   if(isset($_POST["action"]) && $_POST["action"] == "addHoroscope" && isset($_POST["day"]) && isset($_POST["month"])) {

       $day = $_POST["day"];
       $month = $_POST["month"];

        json_encode(array("status"=>true));
   }
}