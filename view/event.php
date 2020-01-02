<div class="content">
  <div class="page-title">
    <h3>Add New Event</h3>
  </div>
  <div class=" col-md-5 custom-form">
    <label for=""> Event Name</label>
    <input class="form-control" id="name" type="text" name="" value="">
    <br>
    <br>
    <label for=""> Event Date </label>
    <input class="form-control" id="dob" type="date" name="" value="">
    <br>
    <br>
    <label for=""> Location</label>
    <textarea class="form-control" id="address" name="address" rows="8" cols="80"></textarea>
    <br>
    <br>
    <button onclick="loadDoc()" type="button" name="button">Add Event</button>
  </div>
</div>
<script type="text/javascript">
function loadDoc() {
  const name = document.getElementById('name').value;
  const designation = document.getElementById('designation').value;
  const dob = document.getElementById('dob').value;
  const offno = document.getElementById('offno').value;
  const persno = document.getElementById('persno').value;
  const address = document.getElementById('address').value;
  const email = document.getElementById('email').value;

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('name').value="";
      document.getElementById('designation').value="";
      document.getElementById('dob').value="";
      document.getElementById('offno').value="";
      document.getElementById('persno').value="";
      document.getElementById('address').value="";
      document.getElementById('email').value="";
      if(this.responseText=="1"){
        alert("New Employee Added");
      }
    }
  };
  xhttp.open("GET", "route.php?name="+name+"&designation="+designation+"&dob="+dob+"&offno="+offno+"&persno="+persno+"&address="+address+"&email="+email, true);
  xhttp.send();
}
</script>
