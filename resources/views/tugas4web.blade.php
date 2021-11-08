<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery Animated</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
        $("#login").click(function(){
            $(".box").animate({
                left: '75%',
                padding: '40px',
                width: '300px',
                background:'white'
            });
            $("#signup_form").css("visibility","hidden");
            $("#login_form").css("visibility","visible");
        });
        $("#signup").click(function(){
            $(".box").animate({
                left: '25%',
                padding: '40px',
                width: '300px'
            });
            $("#login_form").css("visibility","hidden");
            $("#signup_form").css("visibility","visible");
        });
        });
    </script>
</head>
<body>
    <style>
        body{
            margin: 0;
            padding: 0;
            font: sans-serif;
            background: #35495e;
        }
        .box{
            width: 300px;
            padding: 40px;
            height: 350px;
            margin-top: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #191919;
            text-align: center;
        }
        #login_form,#signup_form{
            position: absolute;
            transform: translate(-50%,-50%);
            top: 50%;
            left: 50%;
        }
        #login_form input, #signup_form input{
            border: 0;
            background: none;
            display: block;
            margin: 2px auto;
            text-align: center;
            border: 3px solid #3498db;
            padding: 14px 10px;
            width: 200px;
            outline: none;
            color: white;
            border-radius: 24px;

        }
        #login_form button, #signup_form button{
            border: 0;
            background: none;
            display: block;
            margin: 2px auto;
            text-align: center;
            border: 3px solid #2ecc71;
            padding: 14px 40px;
            outline: none;
            color: white;
            border-radius: 24px;
            cursor: pointer;
        }
        #login_form button:hover, #signup_form button:hover{
            background-color: #2ecc71;
        }
        button{
            background-color: #f1f3f2;
            border-radius: 5px;
            border: 0;
            margin-top: 2px;
            text-align: center;
            border: 3px solid #2ecc71;
            padding: 12px 20px;
            outline: none;
            color: rgb(20, 2, 2);
            cursor: pointer;
        }
    </style>
    <center>
        <button id ="login" >Login</button>
        <button id ="signup">Sign Up</button>
    </center>
    <div class="box">
		<div id="login_form" style="visibility: hidden;">
            <h1 style="color: azure;">LOGIN</h1>
			<input type="text" name="user" placeholder="Username" autocomplete="off" autofocus><br>
			<input type="password" name="pass" placeholder="Password" autofocus><br>
			<button name="login">Login</button>
        </div>
        <div id="signup_form" style="visibility: hidden;">
            <h1 style="color: azure;">SIGN UP</h1>
			<input type="text" placeholder="Full Name" autocomplete="off" autofocus><br>
			<input type="text" placeholder="User Name" autofocus><br>
            <input type="text" placeholder="Password" autofocus><br>
			<button name="login">Sign Up</button>
        </div>
	</div>
</body>
</html>
