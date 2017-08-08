<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">{{config('app.name', 'ADVPROJECT')}}</a>
        
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="nav-item"><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/careers">Careers</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/login"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="/register"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>