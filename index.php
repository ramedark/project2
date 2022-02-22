<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>PDO Proeftoets</title>
  </head>
  <body>
    <main class="container">
    <form class="border-bottom border-dark p-2">
      <div class="row text-center">
        <div class="col-12">
          <h1>Toevoegen aan Magazijn:</h1>
        </div>
    </div>
    <div class="row">
      <div class="col-3">
      </div>
      <div class="col-6">

      <div class="mb-3">
            <label for="inputArtikel" class="form-label">Artikel:</label>
            <input class="form-control" type="text" name="Artikel" id="inputArtikel">
        </div>
        
        <form action="./create.php" method="post">
        <label for="inputCategorie" class="form-label">Categorie</label>
          <div class="input-group mb-3">
            <select class="custom-select" id="inputCategorie">
                <option selected>Kies een categorie:</option>
                <option value="1">Elektronica</option>
                <option value="2">Speelgoed</option>
                <option value="3">Kleding</option>
                <option value="4">Shampoo</option>
                <option value="5"></option>
                <option value="6"></option>

            </select>
        </div>

        <div class="form-outline mb-3">
        <label class="form-label" for="typeNumber">Aantal</label>
        <input type="number" id="typeNumber" class="form-control" />
        </div>

      <div class="mb-3">
      <a class="form-control btn btn-primary" type="sumbit" href="./create.php">Verstuur</a>
     
      </div>
    </main>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="./js/app.js"></script>
  </body>
</html>