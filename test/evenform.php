<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    function test(){
        echo "hello";
    }
?>
    <form action="" method="post">
        <input type="button" value="onclick" onclick="testAJAX()">
        <p id="test_para"></p>
    </form>
    <script>
    function testAJAX() {
        

        var xmlhttp = new XMLHttpRequest();
        
        xmlhttp.onreadystatechange = function() {
            //if(this.readyState == 4 && this.status == 200) {
            //alert(this.responseText);
            document.getElementById("test_para").innerHTML = this.responseText;
            //}
        }
        xmlhttp.open("GET", "TestAjax.php", true)
        
        xmlhttp.send();
        alert("Hello");
    }
    </script>
</body>
</html>