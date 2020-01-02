<div class="content">
  <div class="page-title">
    <h3>Add Lead</h3>
  </div>
  <div class=" col-md-5 custom-form">
    <label for=""> Event Name</label>
    <input class="form-control" id="name" type="text" name="" value="">
    <br>
    <br>
    <label for=""> Company Name</label>
    <input class="form-control" id="designation" type="text" name="" value="">
    <br>
    <br>
    <label for=""> Contact Person</label>
    <input class="form-control" id="designation" type="text" name="" value="">
    <br>
    <br>
    <label for=""> Phone</label>
    <input class="form-control" id="offno" type="text" name="" value="">
    <br>
    <br>
    <label for=""> Call Made On</label>
    <input class="form-control" id="dob" type="date" name="" value="">
    <br>
    <br>
    <label for=""> Follow Up Date</label>
    <input class="form-control" id="dob" type="date" name="" value="">
    <br>
    <br>
    <label  for=""> Status</label>
    <input class="form-control" id="email" type="email" name="" value="">
    <br>
    <br>
    <label  for=""> Remark</label>
    <input class="form-control" id="email" type="email" name="" value="">
    <br>
    <br>
    <label  for=""> Upload Call Recording</label>
    <input id="email" type="file" name="" value="">
    <br>
    <br>
    <label  for=""> Upload Chat Conversation</label>
    <input id="email" type="file" name="" value="">
    <br>
    <br>
    <button onclick="loadDoc()" type="button" name="button">Add Lead</button>
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
