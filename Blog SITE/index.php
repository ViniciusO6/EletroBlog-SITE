<?php

include_once("helpers/url.php");
include_once("data/posts.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $BASE_URL ?>/style.css">
    <title>ELETROBLOG | HOME</title>
</head>
<body>

    <div id="header">

        <div id="NomeLogo">
            <h1>Eletro<span id="color">Blog</span></h1>
        </div>

        <div id="navigation">
            <a href="">HOME</a>|
            <a href="">NOTICIAS</a>|
            <a href="">ELETRONICOS</a>|
            <a href="">CONTATO</a>

        </div>
    </div>


    
<?php  if(isset($posts)):  ?>

    <?php  foreach($posts as $post):?>
        <div id="content">
            <div class="noticia">
                <h1><?= $post['title']  ?></h1>
                <p>Data de publicação: <?= $post['date']  ?></p>
                <img src="<?= $BASE_URL ?>/imagens/<?= $post['img']  ?>" alt="">
                <p><?= $post['description']  ?></p>

                <br><a href="">Ler mais</a>
            </div>
    </div>

    <?php endforeach; ?>


<?php endif; ?>


    
 
           
        

    
          <div id="footer">
        <h2>Todos os direitos reservados</h2>
         
    </div>
    </div>

  


   
</body>
</html>