<?php
session_start();

if (!isset($_SESSION["authenticated"])) {
  $_SESSION["authenticated"] = false;
}

if (!isset($_SESSION["admin_authenticated"])) {
  $_SESSION["admin_authenticated"] = false;
}

$selected_page = "home"

?>

<html>

<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" type="text/css" href="media/homeselectors.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="media/homeselectors.js"></script>
  <title id="home">Programming Playlists</title>
</head>

<body>
  <?php require_once "structure/structure.php"; ?>
  <div class="main">
    <?php if ($_SESSION["admin_authenticated"]) { ?>
      <div class="authenticated">Admin Authenticated</div>
      <br />
    <?php } ?>
    <?php if ($_SESSION["authenticated"]) { ?>
      <div class="authenticated">Welcome <?= htmlspecialchars($_SESSION["username"]) ?>!</div>
    <?php } ?>
    <!-- Congratulations! You found an EASTER EGG! The first 3 teachers to find this hidden comment must give Jared 10 points of extra credit. Shhh! That is all. -->
    <?php require_once "media/homeselectors.php"; ?>
  </div>
</body>
<?php require_once "structure/footer.php"; ?>

</html>