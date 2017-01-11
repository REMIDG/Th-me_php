<?php echo $_SESSION['username']; ?>

<nav class="navbar navbar-default navbar-fixed-top <?php echo "theme".$_SESSION['username']; ?>">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="#"><img

        <?php

        if ( isset($_SESSION['username']) ) {
          echo 'class="profil'.$_SESSION['username'].'"';
          echo 'src="img/'.$_SESSION['username'].'.jpg"';
        }else{
          echo 'class="profilPhoto" src="img/avatar.png"';
        }


        ?>

        alt="photo de profil"></a>

      <a class="navbar-brand" href="#">52 Semaines pour Voyager !</a>
    </div>



    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

<?php

  if (isset($_SESSION['username']) ) {
    echo '<form action="_index.php" method="post" class="navbar-form navbar-right"><button type="submit" class="btn btn-default">Déconnexion</button></form>
    <a class="navbar-brand navbar-right" href="#">&nbsp Bonjour '.$_SESSION['username'].'</a>';
  }else {
    include('formConnection.php');
  }

 ?>

      <ul class="nav navbar-nav navbar-right">
        <li class="colorWhite"><a  href="#">Mes Futurs Voyages</a></li>
        <li class="dropdown ">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Historique <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Général</a></li>
            <li><a href="#">Maps</a></li>
            <li><a href="#">Friends</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Partenaires</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
