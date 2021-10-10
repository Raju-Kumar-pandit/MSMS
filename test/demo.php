<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instascan</title>
    <script type="text/javascript" src="instascan.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
    <style>
        .container{
            width:500px;
            height:500px;
            padding: 0;
            border: 2px solid red;
            border-radius:10px;
        }
        #preview{
           width:500px;
           height: 500px;
           border:1px solid black;
           border-radius: 20px;
           margin:0;
        }
        .box{
            margin:20px
        }
        input{
            width:30%;
            height: 20px;
        }
        .button{
            width: 200px;
            height: 50px;
        }
        </style>
</head>
<body>
    
    <div class="container">
        <video id="preview" ></video>
    </div>
    <div class="box">
        <input type="button" value="Open Scaner" id="start" class="button" onclick="qrcodescaner()"><br><br>
        <label for="text">Scan Qr code</label>
        <input type="text" name="text" id="text" placeholder="Scan qr code">
    </div>  
    <div class="btn-group btn-group-toggle mb-5" data-toggle="buttons">
        <label class="btn btn-primary active">
        <input type="radio" name="options" value="1" autocomplete="off" checked> Front Camera
        </label>
        <label class="btn btn-secondary">
        <input type="radio" name="options" value="2" autocomplete="off"> Back Camera
        </label>
    </div>

<script type="text/javascript">
    function qrcodescaner(){
    var scanner = new Instascan.Scanner({ video: document.getElementById('preview')});
    scanner.addListener('scan',function(content){
        var text = CryptoJS.AES.encrypt('my message',content );
        document.getElementById("text").value=text;
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