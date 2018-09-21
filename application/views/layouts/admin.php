<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fundación Salvando Sueños</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/styles-admin.css">
</head>
<body>
    <div class="container-fluid container-auth">
        <!-- Header -->
        <?php  include_once APPPATH. 'views/templates/header-admin.php'; ?>
        <!-- Nav -->
        <?php  include_once APPPATH. 'views/templates/nav-admin.php'; ?>
        
        <?= $content_for_layout; ?>

        <!-- Footer -->
        <?php  include_once APPPATH. 'views/templates/footer-admin.php'; ?>
    </div>

    <!-- Scripts -->
    <script src="../public/js/jquery-3.2.1.slim.min.js"></script>
    <script src="../public/js/popper.min.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/scripts-admin.js"></script>
</body>
</html>