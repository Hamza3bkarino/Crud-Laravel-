<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if(session('error'))
    <script>alert("{{ session('error') }}")</script>
@endif
    <form class='form' action="logged" method='post'>
        @csrf
        <h2>Se connecter</h2>
        <br>
        <br>
        <label for="Login">Login : </label>
        <input type="text" name='Login' id='Login' placeholder='Saisir votre login'>
        <br>
        <br>
        <label for="password">Password : </label>
        <input type="text" name="password" id="password" placeholder='Saisir votre password'>
        <br>
        <br>
        <button type="submit">connecter</button>
    </form>
    <style>
        .form{
            width: 40%;
            padding-left:20px;
            padding-bottom:20px;
            text-align:center;
            font-family:math;
            font-size:18px;
            margin:80px auto;
        }
        h2{
            padding-top:20px;
            margin-left:100px;
        }
        label{
        
        }
        input,button{
            width: 70%;
            font-size:20px;
            font-family:math;
            padding:10px 4px 10px 10px;
            border-radius:5px;
            border:1px solid black;
        }
        #Login{
            margin-left:40px;
        }
        #password{
            margin-left:10px;
        }
        button{
            margin-left:94px;
            border:none;
            font-weight:bolder;
            background: black;
            color: white;
            cursor: pointer;
        }
    </style>
</body>
</html>