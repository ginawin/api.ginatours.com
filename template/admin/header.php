<div id="main-menu">
    <nav class="navbar bg-menu navbar-expand">
        <img src="asset/common/img/logo.png" id="sbt-logo" class="img-responsive ">
        <div class="collapse navbar-collapse ul-main-menu" >
          <ul class="navbar-nav mr-auto ">
            <li class="nav-item active">
              <a class="nav-link" href="<?=Router::getUrl(array("module"=>"stm_module","controller"=>"AdminModule","action"=>"index"))?>">Module <span class="sr-only">(current)</span></a>
            </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?=Router::getUrl(array("module"=>"stm_permission","controller"=>"AdminPermission","action"=>"index"))?>">Permission</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=Router::getUrl(array("module"=>"stm_booking","controller"=>"AdminBooking","action"=>"index"))?>">Booking</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=Router::getUrl(array("module"=>"stm_user","controller"=>"AdminUserClient","action"=>"index"))?>">User Client</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=Router::getUrl(array("module"=>"stm_user","controller"=>"AdminUser","action"=>"index"))?>">User Admin</a>
            </li>
          </ul>
          <div class="form-inline group-login">
            <a href="?p=login">Admin information</a>
          </div>
        </div>
    </nav>
 </div>