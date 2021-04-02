<!DOCTYPE>

<html>
<head>
    <meta charset='utf-8'>
    <title>Funny_Login</title>
    <style>
        body{
            margin: 0;
        }
        .loginBox{
            border-radius: 10px;
            position: absolute;
            top:40%;
            left:10%;
            margin-top: 1%;
            width: 400px;
            height: 330px;
            background-color:rgba(204,204,204,0.8); /*opacity set to 0.5.*/
            text-align: center;
        }
        .log_btn{
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
        .log{
            border: none;
            padding: 10px;
            width: 200px;
            border-radius: 30px;
        }
    </style>
</head>

<body>
<img src="img/login.jpg" id="log_img">
<div class="loginBox">
    
    <h2 style="text-align: center;">Funny LOGIN</h2>
    <form method='get' action='login_action.php'>
        <p>ID:  <input class="log" name="id" type="text"></p>
        <p>PW:<input class="log" name="pw" type="password"></p>
        <input type="submit" class="log_btn" value="Sign In">
    </form>
    <button class="log_btn" onclick="location.href='join.php'">Sign Up</button>
</div>

</body>

</html>
