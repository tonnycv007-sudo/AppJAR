<?php
  $appName = "Napp-JAR";
  $fecha = date("d/m/Y H:i");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title><?= $appName ?> | Bienvenido</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, Helvetica, sans-serif;
    }

    body {
      min-height: 100vh;
      background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
      display: flex;
      justify-content: center;
      align-items: center;
      color: #fff;
    }

    .card {
      background: rgba(0, 0, 0, 0.45);
      backdrop-filter: blur(6px);
      padding: 40px;
      border-radius: 16px;
      max-width: 500px;
      width: 90%;
      text-align: center;
      box-shadow: 0 10px 30px rgba(0,0,0,0.4);
    }

    h1 {
      font-size: 2rem;
      margin-bottom: 10px;
      color: #4dd0e1;
    }

    p {
      margin: 10px 0;
      font-size: 1rem;
      line-height: 1.5;
      color: #e0f7fa;
    }

    .badge {
      display: inline-block;
      margin-top: 15px;
      padding: 8px 14px;
      background: #4dd0e1;
      color: #00363a;
      border-radius: 20px;
      font-weight: bold;
      font-size: 0.9rem;
    }

    .footer {
      margin-top: 25px;
      font-size: 0.8rem;
      color: #b2ebf2;
      opacity: 0.8;
    }
  </style>
</head>
<body>

  <div class="card">
    <h1>🚀 <?= $appName ?></h1>

    <p>
      Tu aplicación ya está desplegada correctamente en <strong>Microsoft Azure</strong>.
    </p>

    <p>
      Este es tu primer paso hacia un sistema web funcional.
      A partir de aquí puedes integrar tu backend, base de datos y lógica de negocio.
    </p>

    <div class="badge">Deploy exitoso ✅</div>

    <div class="footer">
      Última actualización: <?= $fecha ?><br>
      Hecho por: <strong>Tonny</strong>
    </div>
  </div>

</body>
</html>