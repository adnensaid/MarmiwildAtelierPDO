<?php
require_once 'config.php';
require __DIR__.'/src/models/recipe-model.php';

/* $recipes = getAllRecipes();
$title = "";
$description = "";
if ($_SERVER["REQUEST_METHOD"] === 'POST') {
  if (!empty($_POST['title']) && !empty($_POST['description'])) {

    $connection = createConnection();
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $query = "INSERT INTO recipe (title, description) VALUES (:title, :description)";
    $statement = $connection->prepare($query);
    $statement->bindValue(':title', $title, \PDO::PARAM_STR);
    $statement->bindValue(':description', $description, \PDO::PARAM_STR);
    $statement->execute();    

  }
  if (empty($errors)) {
      //saveRecipe($recipe);
      header('Location: /');
  }
} */
if ($_SERVER["REQUEST_METHOD"] === 'POST') {
  if (!empty($_POST['title']) && !empty($_POST['description']) ) {
    trim($_POST['title']);
    trim($_POST['description']);
  }
  if (empty($errors)) {
      saveRecipe($_POST);
      header('Location: /');
  }
}

require __DIR__ . '/src/views/form.php';