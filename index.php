<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Pagina Dinamica - PHP</title>
</head>
<body>

  <h1>Pagina Dinamica</h1>

  <h2>Header</h2>
  <header>
    <?php include("template/header.php"); ?>
  </header>

  <section>
    <h2>Imagenes Dinamica</h2>
    <?php include("template/images.php"); ?>
  </section>

  <h2>Footer</h2>
  <footer>
    <?php include("template/footer.php"); ?>
  </footer>
</body>
</html>