<!DOCTYPE html>
<html lang="fr">
    <div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
<div class="content">
</div>
    <head>
        <title> Recrutech | Find Your Tech Future </title>
        <link href="style.cs" type="text/css" rel="stylesheet" media="screen"/>
        <meta charset="utf-8">
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Zilla+Slab+Highlight">
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Lexend">
              <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Open+Sans">    
              <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab+Highlight:wght@700&display=swap" rel="stylesheet">  
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<div class="div1">
<header>
        
        <input type="checkbox" class="checkBtn" />
        <ol>
            <a href="#">
                <li>Job List</li>
            </a>
            <a href="#">
                <li>Publish an Ad</li>
            </a>
            <a href="#">
                <li>Company Reviews</li>
            
            </a>
            <a href="#">
                <li>Login</li>
            </a>
			
        </ol>
    </div>
</header>
<body>



<div class="container">
    <div class="header">
        <h3>Annonce</h3>        
    </div>


    <form method="post" action="articlebdd.php" class="forms" autocomplete="off">
<input type="text" name="titre" class="titre" placeholder="Titre de l'annonce" required></br>
<textarea name="contenu" class="contenu" placeholder="Contenu de l'annonce" required> </textarea>

<div class="button">
    <input type="submit" name="submit" class="submit">
</div>

</form>
</div>










    
 
</body>
<footer>
    
</footer>
<script>document.querySelectorAll(".truncated").forEach(function(current) {

    current.addEventListener("click", function(e) {
      current.classList.remove("truncated");
    }, false);

  });</script>
</html>