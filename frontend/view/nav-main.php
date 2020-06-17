<nav class="navbar navbar-expand-lg navbar">
  <a class="navbar-brand" href="#">
    <div class="box">
      <img class="img-logo mr-1"src="img/depot-favicon.png" alt="">
      <span class="font-logo">DEPOT</span>
    </div>
  </a>  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon font"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">

    </ul>

    <form class="form-inline my-3 my-lg-0">
      <input class="form-control" type="text" placeholder="Search">
      <button class="btn btn-primary btn-45" type="submit">Search</button>
    </form>

    <?php
    require_once '../backend/process-check-login.php';
      navbarIsLogin();
    ?>

  </div>
</nav>
