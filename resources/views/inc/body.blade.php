<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #0B3559;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
 
  position: fixed;
  bottom: 23px;
  right: 28px;
  height:80px;
  width: 80px;
  border-radius:50%;
  z-index: 9;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>

<button class="shadow-lg open-button" onclick="openForm()" style="font-size:10px;">HOST A MATCH</button>

<div class="form-popup" id="myForm">
  <form action="addPost" method="POST" class="form-container">
    @csrf
    <h1>Input Details</h1>
<hr>
    <div class="form-group">
    <label for="exampleFormControlSelect1"><b>SELECT VENUE/AREA:</b></label>
    <select class="form-control" id="exampleFormControlSelect1" name="venue">
      <option>Dhanyantari Futsal</option>
      <option>United Futsal</option>
      <option>City Futsal</option>
      <option>Samakhushi Futsal</option>
      <option>Kickoff Futsal</option>
    </select>
  </div>
  <div class="form-group">
    <label for="psw"><b>PICK DATE:</b></label>
    <input type="date" placeholder="" name="date" required>
  </div>
  <div class="form-group">
    <label for="psw"><b>SET TIME:</b></label>
    <select class="form-control" id="psw" name="time">
      <option>MORNING(5 AM to 10 AM)</option>
      <option>DAY(10 AM to 4 PM)</option>
      <option>EVENING(4PM to 8PM</option>
      
    </select>
  </div>
   <div class="form-group">
    <label for="psw"><b>Location:</b></label>
    <input type="text" placeholder="" name="location" required>
  </div>
    <button type="submit" class="btn" id="add">Confirm</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}
</script>