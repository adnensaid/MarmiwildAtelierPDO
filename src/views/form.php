<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>form</title>
    </head>
    <body>
      <form action="add.php" method="post">
        <div>
          <label for="title">title</label>
          <input type="text" name="title">
        </div>
        <div>
          <label for="description">description</label>
          <input type="text" name="description">
        </div>
        <button class="btn btn-primary" type="submit">Envoyer</button>
      </form>
    </body>
</html>