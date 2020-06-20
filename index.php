<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="controllers/controllerForm.php" method="post" id="form">
        <textarea name="texto" id="texto" rows="40"></textarea>
        <input type="submit" value="Salvar">
    </form>


    <br><br>

    <h2>Dados do banco </h2><br>
    
    <?php
    include("class/ClassInsert.php");
    $objIns = new ClassInsert();
    $view = $objIns->view();
    foreach ($view as $views) {
        echo $views['texto'];
    }
    ?>

    <script src="js/ckeditor/ckeditor.js"></script>
    <script src="js/ckfinder/ckfinder.js"></script>
    <script>
        CKFinder.setupCKEditor();
        CKEDITOR.replace('texto');
    </script>
</body>

</html>