<?PHP require_once("oraculo.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Oráculo</title>
    <link rel="stylesheet" href="stilo.css">
</head>
<body>

   <div class="imagem">
   <label id="saida" for=""><h4><?PHP echo "$resposta";?></h4></label>
             <div class="form">
             
               <form action="index.php" method="post">
                   <input type="text" name="pergunta" placeholder="Faça a sua pergunta" id="input_text">
                   <br><br>
                 <input type="submit" value="Perguntar" id="btn" >
               </form>  
            </div>
   </div>
    
</body>
</html>