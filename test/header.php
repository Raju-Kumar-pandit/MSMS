<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="rang.css">
    <title>Document</title>
<style>
    #nav{
    position: relative;
    width: 700px;
    margin: 0px;
}
ul{
    margin: 0px;
    position: relative;
    float: left;
}
ul li{
    display:inline;
    margin:0px;
    padding:0px;
    float:left;
    position:relative;
}
ul li a{
    padding:10px 25px;
    display:inline-block;
    text-decoration:none;
    background:gray;
    color: white;
}
ul li:hover>a{
    background:lightgray;
}
ul li:hover>ul{
    visibility:visible;

}
ul ul,ul ul li ul{
    list-style-type:none;
    margin:0px;
    padding:0px;
    visibility:hidden;
    position:absolute;
    width:180px;
}
ul ul{
    top:39px;
    left:0px;
}
ul ul li ul{
    top:0px;
    left:181px;
}
ul ul li a{
    padding:7px 15px;
    text-decoration:none;
    display:inline-block;
    float:left;
    width:150px;

}
</style>
</head>
<body>
    <nav id="nav">
        <ul>
            <li><a href="#">Home1</a></li>
            <li><a href="#">Home1</a>
                <ul>
                    <li><a href="#">Home2</a></li>
                    <li><a href="#">Home2</a></li>
                    <li><a href="#">Home2</a>
                        <ul>
                            <li><a href="#">Home4</a></li>
                            <li><a href="#">Home4</a></li>
                            <li><a href="#">Home4</a></li>
                            <li><a href="#">Home4</a></li>
                            <li><a href="#">Home4</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Home2</a></li>
                    <li><a href="#">Home2</a>
                        <ul>
                            <li><a href="#">Home2</a></li>
                            <li><a href="#">Home2</a></li>
                            <li><a href="#">Home2</a></li>
                            <li><a href="#">Home2</a></li>
                            <li><a href="#">Home2</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">Home1</a></li>
            <li><a href="#">Home1</a>
                <ul>
                    <li><a href="#">Home3</a></li>
                    <li><a href="#">Home3</a></li>
                    <li><a href="#">Home3</a></li>
                    <li><a href="#">Home3</a></li>
                    <li><a href="#">Home3</a></li>
                </ul>
            </li>
            <li><a href="#">Home1</a></li>
            <li><a href="#">Home1</a></li>
        </ul>
    </nav>
</body>
</html>