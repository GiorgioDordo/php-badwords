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
    <header class="mb-5">
        <div class="container">
            <h1 class="text-center">INSULTATORE</h1>
        </div>
    </header>

    <main class="container border border-1 rounded p-3" method="GET">
        <form action="badwords.php">
            <div class="row">
                <div class="col-6 mb-3">
                    <label for="insulto" class="form-label">Dedica un insulto:</label>
                    <input type="input" class="form-control" id="insulto" name="insulto" placeholder="Zumbo è una vrenzola">
                </div>

                <div class="col-6 mb-3">
                    <label for="censura" class="form-label">Inserisci la parola da censurare:</label>
                    <input type="input" class="form-control" id="censura" name="censura" placeholder="vrenzola">
                </div>

                <div class="d-flex gap-2 justify-content-center">
                    <button type="button" class="btn btn-primary btn-invio">Invia</button>
                    <button type="reset" class="btn btn-danger btn-invio">Reset</button>
                </div>
            </div>
        </main>
    </form>
</body>

</html>