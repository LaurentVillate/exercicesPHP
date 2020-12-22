<!Doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>php télécharger un fichier</title>
</head>
<body>
<?php 
    var_dump($_POST);
    ?>
        <form action="upload.php" method="post" enctype="multipart/form-data">
          <input type="file" name="fichier">  
          <input type="submit">
    </body>
</html>

