<html>
  <head>
    <title>Formulaire en symfony</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <header class="container-fluid bg-dark text-light">
      <div class="row">
        <div class="col d-flex justify-content-around align-items-center py-3">
          <a href="index.php" >Formulaires</a>
          <a href="exercice.php"> Entrainement</a>
          <a href="FormType.php"> FormTypePHP</a>
          <a href="FormTwig.php"> Form.html.twig</a>
        </div>
      </div>
    </header>
    <main class="container">
      <div class="row">
        <div class="col">
        <h1>Exercice D'entrainement</h1>
          <p>
            Vous êtes un développeur Full-stack Symfony dans une agence web avec un personnel limité et vous récupérer une applicationweb qui nécessite une connexion et ou les formulaires n'ont pas été créés avec les entités.
            <h4>Question n° 1 ?</h4>
            <p>
              Définissez une classe "UserType" , User ayant un email, un nom , un mot de passe, et un mot de passe de confirmation. <br>
              Attribuez à chaque champ la classe "form-control" parce que vous utlisez bootstrap ainsi qu'un label.
          </p>
         c
          <p>Voir fichier : FormType.php</p>
          <br>
           <h4>Question n° 2 ?</h4>
          <p>
            Votre collègue du front-end ne peut pas vous donnez un coup de main , vous allez maintenant devoir créer un formulaire dans un fichier Twig. Le titre sera "Inscrivez-vous", il aura pour classes CSS "d-flex justify-content-center" , ainsi que toutes les div que vous créereez. Les champs auront pour classe "my-3" et un placeholder. Le bouton quant à lui possèdera les classes "btn btn-success mt-3".
          </p>
           <h4>Solution n° 2</h4>
          <p>Voir fichier "Form.html.twig"</p>

        </div>
      </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </body>
</html>