<div id="main-menu">
    <nav class="navbar bg-menu navbar-expand">
      <img src="asset/common/img/logo.png" id="sbt-logo" class="img-responsive ">
      <div class="collapse navbar-collapse ul-main-menu" >
        <ul class="navbar-nav mr-auto ">
          <li class="nav-item active">
            <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?p=module_list">Module</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
        <div class="form-inline group-login">
          <a href="<?=Router::getUrl(array("module"=>"mch_user","controller"=>"User","action" => "login"))?>">Login</a>
          / 
          <a href="<?=Router::getUrl(array("module"=>"mch_user","controller"=>"User","action" => "register"))?>">Register</a>
        </div>
      </div>
    </nav>
 </div>