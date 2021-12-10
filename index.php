<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>AJAX projeto 100</title>
</head>
<body>
    <div class="" id="resposta"></div>

    <button onclick="executarReq()">Send Request</button>

    <script>
        function executarReq(){
            //$("#resposta").text("teste");
            $.ajax({
                type: 'GET',
                url: 'resposta.php',
                success: function(data){
                    //SUCESSO
                    console.log(data);
                },
                error: function(){
                    //ERRO
                    console.log("ERRO");
                }
            })
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    
</body>
</html>