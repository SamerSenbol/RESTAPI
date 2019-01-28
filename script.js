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


function deleteHoroscope()   {
  //console.log('user_date'); 
  //var formData = new FormData();

//formData.append('user_date', document.getElementById("user_date").value);

fetch('deleteHoroscope.php', {
  method: 'DELETE',
  //body: formData
})
.then(response => response.json())
.then(response => {
 

  //$('#table-id').append('<tr><td>'+response.firas+'</td></tr>');


})
.catch(error => console.error('Error:', error));
 }


function updateHoroscope()   {
  //console.log('user_date'); 
  //var formData = new FormData();

//formData.append('user_date', document.getElementById("user_date").value);

fetch('updateHoroscope.php', {
  method: 'PUT',
  //body: formData
})
.then(response => response.json())
.then(response => {
 

  //$('#table-id').append('<tr><td>'+response.firas+'</td></tr>');


})
.catch(error => console.error('Error:', error));
 }


 //https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API/Using_Fetch
 //https://www.w3schools.com/jquery/html_append.asp