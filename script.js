getHoroscope();

function addHoroscope()   {
  console.log('user_date'); 
var formData = new FormData();

formData.append('user_date', document.getElementById("user_date").value);

fetch('addHoroscope.php', {
  method: 'POST',
  body: formData
  }).then((response)=>{
    return response.json()
  }).then((result) => {
    getHoroscope();
    console.log(result);
  }).catch((error) => {
    console.error('Error:', error)
  });
}

function getHoroscope(){
  fetch("./viewHoroscope.php", {
    method:'GET'
    
  }).then((response) => {
    
    return response.json()
    
  }).then((result)=>{
    document.getElementById("HoroscopeSign").innerHTML = result;
  }).catch((error) => {
    console.error('Error:', error)
  }); 
}

function deleteHoroscope() {
fetch('deleteHoroscope.php', {
  method: 'DELETE',
})
.then(response => response.json())

.catch(error => console.error('Error:', error));
location.reload();
}

function updateHoroscope() {
fetch('updateHoroscope.php', {
  method: 'PUT'
})
.then(response => response.json())
.then(response => { 
})
.catch(error => console.error('Error:', error));
} 

//https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API/Using_Fetch



