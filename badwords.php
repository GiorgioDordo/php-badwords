<!-- Prendo i valori dal form di index.php -->
<?php
$phrase = $_GET["testoInsulto"];
$badword = $_GET["testoCensura"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="container p-3" method="GET">
        <div class="border border-black border-3 rounded-4 p-2 row mb-3">
            <!-- stampo la frase inserita in index.php -->
            <h1>
                Il paragrafo è: <?php echo $phrase; ?>
                La lunghezza del paragrafo è: <?php echo strlen($phrase);?>
            </h1>
        </div>
        <div class="border border-black border-3 rounded-4 p-2 row mb-3">
            <!-- modifico la badword e stampo la frase -->
            <h1>
                Il paragrafo è: <?php $phrase;echo str_ireplace($badword, "***", $phrase); ?>
                La lunghezza del paragrafo è: <?php echo strlen($phrase);?>
            </h1>
        </div>
    </main>
</body>

</html>