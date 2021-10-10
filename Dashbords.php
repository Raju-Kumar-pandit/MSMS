<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <style>
        .div1{
            width: 100%;
            height: 50px;
            background: gray;
            text-align: center;
            box-sizing: border-box;
            line-height: 50px;
        }
        .div2{
            background:lightgray;
        }
        .div2 li{
            display:inline-block;
        }
        .div2 li a{
            display: block;
            padding:10px 13px;
            text-decoration:none;
            font-size: 20px;
            background:white;
            border-radius:10px;
        }
        .div2 ul{
            margin: 0px;
            padding: 0px;
        }
        .div2 a:hover{
            background:green;
            border-radius:10px;
            color:white;
        }
        .div5{
            width: 100%;
            height: 50px;
            background: gray;
            margin: 5px;
            padding:10px;
            text-align:center;
            box-sizing: border-box;
            clear:both;
        }
        .div4{
            width:1282px;
            border: 1px solid blue;
            float:right;
            min-height: 500px;
            padding:10px;
            box-sizing:border-box;
        }
        .div6{
            width:200px;
            float:left;
            box-sizing:border-box;
            background:lightgray;
            min-height: 500px;
            border: 1px solid black;
            padding:10px;
        }
    </style>
</head>
<body>
    <div class="grid_container">
        <div class="div1">Header</div>
        <div class="div2">
            <ul>
                <li><a href="#">Dashbord</a></li>
                <li><a href="#">Company</a></li>
                <li><a href="#">Admin</a></li>
                <li><a href="#">Staff</a></li>
                <li><a href="#">Customer</a></li>
                <li>
                <form action="" method="post">
                <input type="search" name="search" id="search" placeholder="Search">
                <input type="button" value="Search">
            </form>
                </li>
            </ul>

        </div>
        <div class="div6">
            <ul>
                <li><a href="#">Dashbord</a></li>
                <li><a href="#">Company</a></li>
                <li><a href="#">Admin</a></li>
                <li><a href="#">Staff</a></li>
                <li><a href="#">Customer</a></li>
            </ul>
        </div>
        <div class="div4">
            <?php
            include 'Staff.php';
            ?>
        </div>

        <div class="div5">Footer</div>
    </div>
</body>
</html>



