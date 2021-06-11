<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Antrian</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="?halaman=depan">Beranda</a>
      </li>
      <?php if (checkLogin()) { ?>
        <li class="nav-item">
            <a class="nav-link" href="?halaman=antrian-tiket">Antrian</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="?halaman=logout">Logout</a>
        </li>
        <?php } else { ?>
        <li class="nav-item">
            <a class="nav-link" href="?halaman=login">Login</a>
        </li>
        <?php } ?>
    </ul>
  </div>
</nav>

