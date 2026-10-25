<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?> - CodeIgniter 4</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f6f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .card {
            background: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, .1);
            max-width: 560px;
            text-align: center;
        }
        .card h1 {
            color: #dd4814;
            margin-bottom: 16px;
        }
        .card p { line-height: 1.6; margin-bottom: 8px; }
        .card .date { color: #777; font-size: .9em; }
    </style>
</head>
<body>
    <div class="card">
        <h1><?= esc($title) ?></h1>
        <p><?= esc($message) ?></p>
        <p class="date">Fecha de la petici&oacute;n: <?= esc($date) ?></p>
        <p class="date">Renderizado con <strong>View Renderer</strong> (app/Views/home.php)</p>
    </div>
</body>
</html>
