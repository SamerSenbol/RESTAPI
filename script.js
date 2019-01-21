function addHoroscope()   {
    // hämta upp datum ifrån input
    // Skapa formdata av datum
    // fetch med method POST, och body formdata
 
    var day = document.getElementById("day").value
    console.log(day)
 
    var month = document.getElementById("month").value
    console.log(month)
 
    var data = new FormData();
    data.append("action", "addHoroscope");
    data.append("day", day);
    data.append("month", month);
    fetch("./addHoroscope.php", {
        method: "POST",
        body: data
    }).then((response)=> {
        return response.json()
    }).then((result) => {
        // Printa ut svaret på skärmen
        console.log(result)
    })
 }

////////////////////////////////////////////////////////////////////////////////
function viewHoroscope() {
    $.ajax({
        url: "./viewHoroscope.php",
        method: "GET",
        cache: false,
        success: function(html) {
            $("#results").append(html);
        }
        
    })
    }
    
function addHoroscope() {
    $.ajax({
        url: "./addHoroscope.php",
        method: "POST",
        cache: false,
        success: function(html) {
            $("#results").append(html);
        }
    })
}

function updateHoroscope() {
    $.ajax({
        url: "./updateHoroscope.php",
        method: "PUT",
        cache: false,
        success: function(html) {
            $("#results").append(html);
        }
    })
}

function deleteHoroscope() {
    $.ajax({
        url: "./deleteHoroscope.php",
        method: "DELETE",
        cache: false,
        success: function(html) {
            $("#results").append(html);
        }
    })
}






    