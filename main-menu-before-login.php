<header class="header">
    <!-- Navbar -->
    <nav class="navbar navbar-default inverse-theme" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./">anyX</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group append-right-1">
                        <input type="text" class="form-control" placeholder="Search">
                        <button class="glyphicon glyphicon-search"></button>
                    </div>
                    <div class="form-group">
                        <a class="text-uppercase" href="">Browse</a>
                    </div>
                </form>

                <ul class="nav navbar-nav navbar-right">
                    <?php if($page == "register") echo '<li class="qifhavea">Already have an anyX account?</li>';?>
                    <?php if($page != "register") echo '<li><a href="registering.php">Register</a></li>';?>
                    <li><a href="sign-in.php">Sign In</a></li>
                    <li><a href="#">?</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav><!-- /Navbar -->
</header>