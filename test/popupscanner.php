<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pop Up Scanner</title>
    <script type="text/javascript" src="instascan.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .test{
            width: 100vw;
            height: 100vh;
            background: lightblue;
            padding: 20px 0;
        }
        .container{
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); 
        }
        .box{
            background-color: #fefefe;
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; 
        }
        #preview{
            width: 50%;
            height: 50%;
            border: 1px solid red;
            margin: auto;
        }
    </style>
</head>
<body>
<div class="test">
    <button onclick="scanner()">Pop Up Scanner</button>
    <div class="container" id="mod">
        <div class="box" >
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem facilis cum necessitatibus voluptatem corrupti, quaerat aperiam, reprehenderit nulla doloribus sint inventore qui similique laboriosam error blanditiis. Harum quod quaerat eum magnam. Consequatur laboriosam incidunt est obcaecati esse impedit hic eaque eligendi minus? Dolor praesentium, nam quasi blanditiis eveniet suscipit quis.</p>
            <video src="" id="preview"></video>
        </div>
    </div>
    <div class="">
        <label for="text">Scan Qr code</label>
        <input type="text" name="text" id="text" placeholder="Scan qr code">
    </div>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem libero architecto quae distinctio neque atque officia consequatur molestiae illum eveniet. Qui vitae doloremque totam sit modi eligendi culpa omnis laborum, animi aliquam. Amet, magni vero explicabo qui fugit ex, illum expedita illo incidunt molestiae iste tempore vel dignissimos, sequi ut?</p>
</div>

<script>
    function scanner(){
        var pop = document.getElementById('mod');
        pop.style.display = "block";
        var scanner = new Instascan.Scanner({ video: document.getElementById('preview')});
        scanner.addListener('scan',function(content){
        var text = CryptoJS.AES.encrypt('my message',content );
        document.getElementById("text").value=text;
        document.getElementById("mod").style.display="none"

    });
    Instascan.Camera.getCameras().then(function (cameras){
        if(cameras.length>0){
            scanner.start(cameras[0]);
            $('[name="options"]').on('change',function(){
                if($(this).val()==1){
                    if(cameras[0]!=""){
                        scanner.start(cameras[0]);
                    }else{
                        alert('No Front camera found!');
                   }
                }else if($(this).val()==2){
                    if(cameras[1]!=""){
                        scanner.start(cameras[1]);
                    }else{
                        alert('No Back camera found!');
                    }
                }
            });
        }else{
            console.error('No cameras found.');
            alert('No cameras found.');
        }
    }).catch(function(e){
        console.error(e);
        alert("raju" + e);
    });
    }
</script>
</body>
</html>