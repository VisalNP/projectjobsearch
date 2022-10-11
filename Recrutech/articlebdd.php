<?php
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    session_start();
    $conn = new PDO("mysql:host=$servername;dbname=job_advertisements", "$username", "$password");

    if (isset($_POST['submit'])){
        $titre=$_POST['titre'];
        $contenu=$_POST['contenu'];

    if (!empty($titre) && !empty($contenu)){

        $insertion = "INSERT INTO annonce_1(titre, contenu) VALUES('$titre', '$contenu')";
        $conn->exec($insertion);
        echo "Bien joué, l'annonce a bien été publié";
    }

    else {

        echo "Veuillez remplir tous les champs.";
    }







}

?>