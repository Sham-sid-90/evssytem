<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Free Version -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <title>Authantication System</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
               <i class="fas fa-lock"></i>  Authantication System
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                <?php 
                      session_start();
                              if(!empty($_SESSION['user'])){
                      ?>
                  <a class="nav-link active" href="home.php" title="Home">
                        <i class="fas fa-home"></i>Home
                    </a>
                    <a class="nav-link active" href="actions/logout.php" title="Home">
                        <i class="fas fa-sign-out-alt"></i>Logout
                    </a>
                    <?php } else { ?>
                    <a class="nav-link" href="index.php" title="Login">
                        <i class="fas fa-sign-in-alt"></i>Login
                    </a>
                    <a class="nav-link" href="register.php" title="Register">
                        <i class="fas fa-user-plus"></i> Register
                    </a>
                  <?php }?>
                </div>
            </div>
        </div>
    </nav>