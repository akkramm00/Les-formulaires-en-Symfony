       <html>
  <head>
    <title>PHP Test</title>
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
        <div class="col d-flex">

          {% block body %}
          <div class="d-flex justify-content-center">
           <h1 class="d-flex justify-content-center">Inscrivez-vous</h1>
            <div class="d-flex justify-content-center">
              <div class="d-flex-column justify-content-center align-items-center ">
              {{ form_start(form) }}
                <p>{{ form_row(form.username, {'attr':{'class': 'my-3', 'placeholder': 'username'}}) }}</p>
                <p>{{ form_row(form.email, {'attr':{'class': 'my-3', 'placeholder': 'email'}}) )}}</p>
                <p>{{ form_row(form.password, {'attr':{'class': 'my-3', 'placeholder': 'mot de passe'}}) )}}</p>
                <p>{{ form_row(form.confirm.password, {'attr':{'class': 'my-3', 'placeholder': 'mot de passe': ''}}) )}}</p>
                <button type="submit" class="btn btn-success mt-3">Inscription</button>
              {{ form_end(form) }}
              </div>
            </div>
          </div>
          {% endblock %}
        </div>
      </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </body>
</html>