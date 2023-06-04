<div class="page-loader">
  <div class="loader">Loading...</div>
</div>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo BASEURL; ?>"><img class="logo-img" src="<?php echo BASEURL; ?>public/images/logo.svg"></a>
    </div>
    <div class="collapse navbar-collapse" id="custom-collapse">
      <ul class="nav navbar-nav navbar-right">
        <?php if (isset($_SESSION['user'])) : ?>
          <li>
            <a class="btn btn-circle" href="<?php echo BASEURL; ?>pages/logout/">
              <i class="icon-play"></i> - Logout
            </a>
          </li>
          <li>
            <a class="btn btn-circle" href="<?php echo BASEURL; ?>pages/dashboard/">
              <i class="icon-play"></i> > Dashboard
            </a>
          </li>
        <?php else : ?>
          <li>
            <a class="btn btn-circle" href="<?php echo BASEURL; ?>pages/login/">
              <i class="icon-play"></i> > Login
            </a>
          </li>
          <li>
            <a class="btn btn-circle" href="<?php echo BASEURL; ?>pages/register/">
              <i class="icon-play"></i> + Seja parceiro
            </a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>