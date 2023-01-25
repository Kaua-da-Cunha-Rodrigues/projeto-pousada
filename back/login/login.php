<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        body#login{
            background-color: #F4EEE5;
        }
        body#login form{ 
            background-color: rgba(0, 0, 0, 0.8);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15%;
            color: #fff;
        }
        body#login input{
            max-width: 100%;
            padding: 15px;
            border: none;
            border-radius: 5px;
            outline: none;
            font-size: 15px;
            margin-bottom: 15px;
        }
        body#login input[type=submit]{
            background-color: green;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            font-weight: bold;
        }
        body#login input[type=submit]:hover{
            background-color: darkgreen;
            cursor: pointer;
        }
    </style>
</head>
<body id="login">
    
    <form action="verifica.php" method="post">
        <h2>Nome:</h2> 
        <input type="text" name="nome"><br>
        <h2>Senha:</h2> 
        <input type="text" name="senha"><br>
        <input type="submit" value="Entrar">
    </form>


</body>
</html>