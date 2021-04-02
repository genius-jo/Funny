<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Funny Join</title>
    <style>
        body{
            margin: 0;
        }
        .joinBox{
            border-radius: 10px;
            position: absolute;
            top:20%;
            left:10%;
            margin-top: 1%;
            width: 400px;
            height: 520px;
            background-color:rgba(204,204,204,0.8); /*opacity set to 0.5.*/
            text-align: center;
        }
        .join_btn{
            background-color: #f5c44f;
            border:none;
            color:white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            margin: 4px 2px;
            border-radius: 15px;
        }
        #log_img{
            width: 100%;
            height: 100%;
            margin: 0;
        }
        .join{
            border: none;
            padding: 10px;
            width: 200px;
            border-radius: 30px;
        }
    </style>
</head>
<body>
<img src="img/join.jpg" id="log_img">
<div class="joinBox">
<form method='get' action='join_action.php'>
    <h2 style="text-align: center;">Funny Join</h2>
    <p>ID:  <input class="join" name="id" type="text"></p> <br/>
    <p>PW:<input class="join" name="pw" type="password"></p> <br/>
    <p>Name: <input class="join" type = "text" name = "name"></p> <br/>
    <p>Phone: <input class="join" type = "text" name = "phone"></p> <br/>
    <input type="submit" class="join_btn" value="Join">
</form>
</div>
</body>

</html>