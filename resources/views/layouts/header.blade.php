    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">PedagoManager</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/dashboard/index">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Link 1e</a></li>
            <li><a href="#">Link 2e</a></li>
            <li><a href="#">Link 3e</a></li>
           @if( !is_logged() )
            <li><a href="/auth/login">Login</a></li>
           @else
            <li><a href="/auth/logout">Logout</a></li>
           @endif
           <li><a href="#"><strong style="color:green;"><?= current_user() ?></strong></a></li>
           <li><a href="#"><strong style="color:green;"><?= current_user_role() ?></strong></a></li>
          </ul>
        </div>
      </div>
    </nav>

    