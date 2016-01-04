<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
                <a class="navbar-brand" href="{{URL::action('AdminController@index')}}">
                    <img src="http://localhost/img/logo201.png" class="logo" alt="Logo">
                </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active" style="margin-right: 20px">{!! HTML::link('/logout','Logout') !!}</li>
            </ul>
        </div>

    </div>
</nav>