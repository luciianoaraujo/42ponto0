<div class="page-loader">
        <div class="loader">Loading...</div>
    </div>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo BASEURL;?>"><img class="logo-img" src="<?php echo BASEURL;?>public/images/logo.svg"></a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
            
              
            
              <?php if(isset($_SESSION['user'])): ?>
                        <a class="btn btn-border-w mt-5 btn-circle" href="<?php echo BASEURL; ?>pages/logout/">
                          <i class="icon-play"></i> > Logout
                        </a>
              <?php else: ?>
                        <a class="btn btn-border-w mt-5 btn-circle" href="<?php echo BASEURL; ?>pages/login/">
                          <i class="icon-play"></i> > Login
                        </a>
                        <a class="btn btn-border-w mt-5 btn-circle" href="<?php echo BASEURL; ?>pages/register/"> <i class="icon-play"></i> + Seja parceiro </a>
              <?php endif; ?>
            </ul>
          </div>
        </div>
    </nav>



