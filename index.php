<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benvenuto</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            /* Sfondo blu oscuro */
            background-color: #001f3f; 
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Roboto', sans-serif;
            color: white;
            overflow: hidden;
        }

        h1 {
            /* Dimensione testo 50px */
            font-size: 50px;
            margin: 0;
            text-align: center;
            font-weight: 700;
        }
    </style>
</head>
<body>

    <?php
        // Puoi inserire logica PHP qui se necessario
        $messaggio = "Benvenuto in cielo!";
        echo "<h1>$messaggio</h1>";
    ?>

</body>
</html>