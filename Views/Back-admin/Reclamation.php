<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'\projet-web\config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'\projet-web\Model\reclamation.php';
require_once $_SERVER['DOCUMENT_ROOT'].'\projet-web\Controller\reclamationController.php';
$reclamation = null;
$reclamationC = new reclamationC();
$listeReclamation = $reclamationC->afficherReclamation();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Reclamations</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body id="reportsPage">
    <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
        <a class="navbar-brand" href="index.html">
          <h1 class="tm-site-title mb-0">Product Admin</h1>
        </a>
        <button
          class="navbar-toggler ml-auto mr-0"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars tm-nav-icon"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto h-100">
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <i class="fas fa-tachometer-alt"></i> Dashboard
                <span class="sr-only">(current)</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link active" href="reclamation.php">
                <i class="fas fa-address-book"></i> Reclamations
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="evaluation.php">
                <i class="fas fa-address-book"></i> Evaluation
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="accounts.html">
                <i class="far fa-user"></i> Accounts
              </a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="fas fa-cog"></i>
                <span> Settings <i class="fas fa-angle-down"></i> </span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Billing</a>
                <a class="dropdown-item" href="#">Customize</a>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link d-block" href="login.html">
                Admin, <b>Logout</b>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container mt-4">
      <div class="row tm-content-row">
        <div class="col-sm-15 col-md-12 col-lg-10 col-xl-12 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-big tm-product-table">
                <thead>
                  <tr>
               
                    <th scope="col">Titre du reclamation</th>
                    <th scope="col">Nom d'immuteur</th>
                    <th scope="col">Nom du recepteur</th>
                    <th scope="col">Contenue</th>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                    <?php foreach($listeReclamation as $reclamation) { ?>
                  <tr>
                    <a hidden><?php echo $reclamation['id']; ?></a>
                    <td class="tm-product-name"><?php echo $reclamation["titre"] ?></td>
                    <td><?php echo $reclamation["nom_immuteur"] ?></td>
                    <td><?php echo $reclamation["nom_recepteur"] ?></td>
                    <td><?php echo $reclamation["contenue"] ?></td>
                    <td>
                      <a href="deleteReclamation.php?id=<?php echo $reclamation['id']; ?>" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                    <td>
                      <a href="modifyReclamation.php?id=<?php echo $reclamation['id']; ?>" class="tm-product-delete-link">
                        <i class="fas fa-cogs"></i>
                      </a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- table container -->
            <a
              href="addreclamation.php"
              class="btn btn-primary btn-block text-uppercase mb-3">Ajouter une reclamation</a>
              <a
              href="reclamationtri.php"
              class="btn btn-primary btn-block text-uppercase mb-3">Afficher les reclamation triées</a>
          </div>
        </div>
      </div>
    </div>
    <footer class="tm-footer row tm-mt-small">
      <div class="col-12 font-weight-light">
        <p class="text-center text-white mb-0 px-4 small">
          Copyright &copy; <b>2018</b> All rights reserved. 
          
          Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
        </p>
      </div>
    </footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $(".tm-product-name").on("click", function() {
          window.location.href = "edit-product.html";
        });
      });
    </script>
  </body>
</html>