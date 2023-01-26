<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- css do bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- javascript do bootstrap-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700;900&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Sofia+Sans:wght@300;600;800;900&display=swap');
        *{
            --cor0: #283b45;
            --cor1: #366370;
            --cor2: #c2c7bf;
            --cor3: #f4eee5;

            --fonte-padrao: 'Merriweather', serif;
            --fonte-destaque: 'Sofia Sans', sans-serif;
        }
        body{
            background-color: #f4eee5;
            font-family: var(--fonte-padrao);
        }
        h1{
            color: #283b45;
            font-family: var(--fonte-destaque);
        }
        form input[type=text],input[type=date], input[type=number], select{
            margin: 0 0 10px 0;
        }
        input[type=submit]{
            margin: 10px 0;
            padding: 5px;
            color: white;
            font-weight: bold;
            font-family: var(--fonte-destaque);
            font-size: 1.2em;
            cursor: pointer;
            background-color: green; 
            border: none;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">  <!-- Essa classe abre aqui, porém só será fechado no rodape.php-->
</body>
</html>