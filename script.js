function addHoroscope()   {
   console.log('user_date'); 
var formData = new FormData();

formData.append('user_date', document.getElementById("user_date").value);

fetch('addHoroscope.php', {
  method: 'POST',
  body: formData
})
.then(response => response.json())
.then(response => {
 

    $('#table-id').append('<tr><td>'+response.firas+'</td></tr>');


})
.catch(error => console.error('Error:', error));
 }





    