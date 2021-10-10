<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  .div1{
      background:dodgerblue;
      height: 50px;
      text-align: center;
      color:white;
    font-size:20px;
    padding-top: 10px;
    box-sizing: border-box;
  }
  .div2{
    margin-top:0px;
  }
  .div2 ul{
      background:blue;
      height:50px;
      margin:0px;
  
  }
  .div2  ul li{
    float: left;
    line-height:none;
    list-style-type: none;
    padding-top:10px;
    margin-left: 5px;
  }
  .div2 ul li a{
    text-decoration: none;
    padding: 5px;
    margin:5px;
    color:white;
    font-size:20px;
  }
  .div3{
      width: 20%;
      height:560px;
      float: left;
      clear:both;
      background:#9ad692;
  }

  .div3 ul li{
    position:relative;
    line-height:none;
    list-style-type: none;
    padding-top:10px;
    margin-left: 5px;
  }
  .div3 ul li a{
    text-decoration: none;
    display: block;
    padding: 5px;
    margin:5px;
    color:white;
    font-size:20px;
    background: gray;
  }
   ul li a:hover .drop{
    display:block;
  }
  .div3 ul li a:hover{
    background: red;
    border-radius: 10px;
  }
  .div4{
      width: 80%;
      float:left;
      background: #8ded80;
      box-sizing: border-box;
  }
  .div5{
      background:dodgerblue;
      clear:both;
      height: 50px;
      text-align: center;
      color:white;
    font-size:20px;
    padding-top: 10px;
    box-sizing: border-box;
  }
  form{
    background: lightgray;
    width: 80%;
    margin:50px;
    padding:20px;
    box-sizing: border-box;
    box-shadow:5px 5px 5px 6px white;
    border-radius: 10px;
    box-sizing: border-box;
  }
  .drop{
    position:absolute;
    display: none;
  }
  .drop a{
    text-decoration:none;
    display:block;
  }
  label{
    font-size:18px;
  }
  input{
    font-size:18px;
    margin:2px;
    width: 300px;
  }
  table{
    width:100%;
  }
  td{
    padding:10px;
  }
  .heading{
    width: 80%;
  }
  </style>
</head>
<body>
  <div class="div1">header</div>
  <div class="div2">
    <ul class="div22">
      <li>
        <a href="">Home</a>
      </li>
      <li>
        <a href="">User</a>
      </li>
      <li>
        <a href="">Contact Us</a>
      </li>
      <li>
        <a href="">About Us</a>
      </li>
      <li>
        <a href="">Service</a>
        <div class="drop">
          <ul>
            <li>
              <a href="#">Car repaire</a>
            </li>
            <li>
              <a href="#">Car colour</a>
            </li>
            <li>
              <a href="#">Car washing</a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
  <div class="div3"><ul>
      <li>
        <a href="">Home</a>
      </li>
      <li>
        <a href="">User</a>
      </li>
      <li>
        <a href="">Contact Us</a>
      </li>
      <li>
        <a href="">About Us</a>
      </li>
    </ul>
  </div>
  <div class="div4">
  <form action="" method="post">
  <h3>Bio Data and Resume</h3>
  <table>
    <tr class="heading">
      
      <td colspan="2">
        <label for="heading">Heading</label><br>
        <input type="text" name="heading" id="heading"><hr>
      </td>
    </tr>
    <tr>
      <td>
        <label for="">Name</label><br>
        <input type="text" name="Name" id="Name">
      </td>
      <td>
        <label for="village">Village Name</label><br>
        <input type="text" name="village" id="village"><br>
      </td>
    </tr>
    <tr>
      <td>
        <label for="">polish station</label><br>
        <input type="text" name="station" id="staton"><br>
      </td>
      <td>
        <label for="postoffice">post Office</label><br>
        <input type="text" name="office" id="office"><br>
      </td>
    </tr>
    <tr>
      <td>
        <label for="district">District</label><br>
        <input type="text" name="district" id="district"><br>
      </td>
      <td>
        <label for="state">State</label><br>
        <input type="text" name="state" id="state"><br>
      </td>
    </tr>
    <tr>
      <td>
        <label for="pin">Pin Code</label><br>
        <input type="text" name="code" id="code">
      </td>
      <td>
        <label for="mobile">Mobile No.</label><br>
        <input type="number" name="mobile" id="mobile">
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <label for="email">Email ID</label><br>
        <input type="email" name="email" id="email"><hr>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <h3>Carear Objective</h3><hr>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <textarea name="objective" id="objective" cols="90" rows="10"></textarea><hr>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <h3>Educational Qualification </h3><hr>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <textarea name="Qualification" id="Qualification" cols="90" rows="10"></textarea><hr>
      </td>
    </tr>
    <tr>
      <td colspan=2>
        <h3>Technical Skills</h3><hr>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <textarea name="skills" id="skills" cols="90" rows="10"></textarea><hr>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <h3>Work Experience</h3><hr>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <textarea name="work" id="work" cols="90" rows="10"></textarea><hr>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <h3>Strenghts</h3><hr>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <textarea name="strenght" id="strenght" cols="90" rows="10"></textarea><hr>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <h3>Hobies</h3><hr>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <textarea name="hobies" id="hobies" cols="90" rows="10"></textarea><hr>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <h3>Personal Details</h3><hr>
      </td>
    </tr>
    <tr>
      <td>
        <label for="names">Name</label><br>
        <input type="text" name="names" id="names">
      </td>
      <td>
        <label for="father">Father's Name</label><br>
        <input type="text" name="father" id="father">
      </td>
    </tr>
    <tr>
      <td>
        <label for="Date">Date of Birth</label><br>
        <input type="date" name="date" id="date">
      </td>
      <td>
        <label for="sex">Sex</label><br>
        <input type="text" name="sex" id="sex">
      </td>
    </tr>
    <tr>
      <td>
        <label for="religion">Religion</label><br>
        <select name="religion" id="religion">
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </td>
      <td>
        <label for="status">Marital Status</label><br>
      <select name="status" id="status">
        <option value="married">Married</option>
        <option value="unmarried">Unmarried</option>
      </select>
      </td>
    </tr>
    <tr>
      <td>
        <input type="submit" value="Create">
      </td>
      <td>
        <input type="reset" value="Reset">
      </td>
    </tr>
    <tr>
      
    </tr>
  </table>
  
  
  </form>
  </div>
  
  <div class="div5">footer</div>
</body>
</html>