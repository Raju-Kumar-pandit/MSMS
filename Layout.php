<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .table{
    width: 100%;
    

}

.column {
    width: 10%;
    height: 40px;
    font-size: 20px;
    padding-top: 5px;
}
.input{

width:100%;
height: 40px;
text-align: center;
text-transform: capitalize;
font-size: 18px;
}
.button{
    width: 20%;
    font-size: 18px;
    height: 40px;
    margin-left: 40%;
    margin-right: 40%;
}
.inputamount{
    width: 20%;
    height: 40px;
    text-align: center;
    text-transform: capitalize;
    font-size: 18px;
    margin-right: 0%;
    margin-left: 80%;
}
.Item{
    height: 40px;
    font-size: 20px;
    padding-top: 5px;
}
/* ----------admin, staff ,customer, supplier----------*/
.inputs{
    width: 40%;
    height: 40px;
    text-align: center;
    text-transform: capitalize;
    font-size: 18px;

}
.emails{
    width: 40%;
    height: 40px;
    text-align: center;
    font-size: 18px;
    text-transform: lowercase;
}

/*---------Header Part css---------*/
.header{
    width: 100%;
    margin: 0px;
    padding: 0px;
    
}
.h{
    text-align: center;
    text-transform: capitalize;
    width: 100%;
}
/*--------- drop down menu-----------*/
ul{
    list-style-type: none;
    background-color: lightgray;
    overflow: hidden;
    border-radius: 5px;
    padding: 0%;
}
ul li{
    float: left;
    font-size: 20px;
    width: 6%;
    line-height: 50px;
    text-align: center;
}
ul li:hover{
    background-color: burlywood;
}
ul li a{
    text-decoration: none;

    font-size: 20px;
}
ul li ul li{
    text-decoration: none;
    padding: 10px;
    font-size: 20px;
    width: 50%;
    height: 100%;
}
ul li ul {
    position: absolute;
    display: none;
}
ul li:hover > ul{
    background-color: burlywood;
    display: block;
}
/*------footer Part css-------------*/
.footer{
    background-color: lightgray;
    text-align: center;
    padding: 5px;
    border-radius: 5px;
}
/* -----Show Table Data ------*/
.rows {
    width: 6%;
    height: 40px;
    font-size: 20px;
    padding-top: 5px;
}
.tables{
    border-collapse: collapse;
    width: 100%;
}
.thtd{
    text-align: center;
    padding: 8px;
    height: 40px;
    font-size: 18px;

    
}
.thtd:nth-child(even){
    background-color: burlywood;
}
.th{
    background-color: green;
    color: white;
}

/*---------Create Account and login ------------*/

.lform{
    width: 100%;
}
.lfieldset{
    width: 40%;
    font-size: 20px;
    margin-left: 30%;
    margin-right: 30%;
    border-radius: 5px;
}
.linput{
    width: 100%;
    height: 5%;
    font-size: 20px;
}
    .modal { 
    display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
    </style>
</head>
<body>
<table class="table">
    <tr>
        <th  class="column">Name</th>
        <td class="column"><input type="text" name="Name" id="Name" class="inputs" ></td>
    </tr>
    <tr>
        <th>Name</th>
        <td class="column"><input type="text" name="Name" id="Name" class="inputs" ></td>
    </tr>
    <tr>
        <th>Name</th>
        <td class="column"><input type="text" name="Name" id="Name" class="inputs" required ></td>
    </tr>
    <tr>
        <th>create</th>
        <td class="column">
            <button id="myBtn" class="inputs">Open Modal</button>

            <!-- The Modal -->
            <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <div>
                    <form action="" method="POST">
                        <table class="table">
                            <tr>
                                <th class="column">Name</th>
                                <td class="column"><input type="text" name="Name" id="Name" class="input"></td>
                            </tr>
                        </table>
                        <table class="table">
                            <tr>
                                <td class="column"><input type="submit" value="Submit" name="Submit" class="button"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div> 
            </div>
        </td>
    </tr>
    <tr>
    <th class="column">Name</th>
    <td class="column"><input type="text" name="Name" id="Name" class="inputs" ></td>
    </tr>
    <tr>
        <th>Name</th>
        <td class="column"><input type="text" name="Name" id="Name" class="inputs"></td>
    </tr>
    <tr>
        <th>Name</th>
        <td class="column"><input type="text" name="Name" id="Name" class="inputs" ></td>
    </tr>
    <tr>
        <th>Name</th>
        <td class="column"><input type="text" name="Name" id="Name" class="inputs" ></td>
    </tr>
</table>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>
