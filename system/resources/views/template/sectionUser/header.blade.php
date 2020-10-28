<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><strong>TOLEKTRO</strong> Shop</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url('berandaUser')}}">Beranda</a></li>
                <li><a href="{{url('kategoriUser')}}">Kategori</a></li>
                <li><a href="{{url('produkUser')}}">Produk Unggulan</a></li>
                <li><a href="{{url('loginUser')}}">Login</a></li>
                <li><a href="{{url('registerUser')}}">Register</a></li>



            </ul>
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" placeholder="Enter Keyword Here ..." class="form-control">
                </div>
                &nbsp;
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>