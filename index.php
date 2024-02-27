<?php 
include_once __DIR__ . '/functions.php';
// alert
$response = '';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["password_length"])) {
    $response = PasswordGenerata($_POST["password_length"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>php-strong-password-generator</title>
</head>
<body>
    <?php if ( isset($response) ): ?>
        <?php if ($response) : ?>
            <div class="alert alert-success" role="alert">
                Password creata!
            </div>
            <?php else : ?>
                <div class="alert alert-danger" role="alert">
                    Password non creata!
                </div>
        <?php endif; ?>
    <?php endif; ?>

    <div class="text-center bg-primary-subtle pb-3">
        <h1>Strong Password Generator</h1>
        <h2>Genera una password sicura</h2>

        <!-- Form per la generazione della password -->
        <div class=" text-center bg-success-subtle" style="width: 70%; margin: 0 auto;">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <!-- Campo per specificare la lunghezza della password -->
                <label for="password_length">Lunghezza Password:</label>
                <input type="number" id="password_length" name="password_length" min="1" max="15">
                
                <button type="submit" class="btn btn-primary">Genera Password</button>
            </form>
            <!-- Visualizzazione della password generata -->
            <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["password_length"])): ?>
                <h2>La tua password sicura:</h2>
                <p><?php echo PasswordGenerata($_POST["password_length"]); ?></p>
            <?php endif; ?>
        </div>
        
    </div>
</body>
</html>
