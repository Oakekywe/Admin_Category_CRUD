<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    {{-- <link rel="stylesheet" href="{{asset('css/styles.css')}}"> --}}
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>
<body style="background: #F5F5F5">
    {{-- Navigation --}}
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" style="background: #42A5F5">
    <!-- Container wrapper -->
    <div class="container-fluid">
        
        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="{{route('index')}}">
            <img src="{{asset("images/logo.png")}}" height="30" loading="lazy"/>
        </a>
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link white-text" href="{{route('index')}}">Dashboard</a>
            </li>
            <li class="nav-item">
            <a class="nav-link white-text" href="{{route('categoryList')}}">Category List</a>
            </li>
            <li class="nav-item">
            <a class="nav-link white-text" href="{{route('userProfile')}}">My Profile</a>
            </li>
        </ul>
        <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center">
               
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link white-text" href="{{route('logout')}}">Log Out</a>
            </li>
        </ul>
        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <ul class="list-group mt-2">
                    <li class="list-group-item">
                        <a href="{{route('index')}}">Dashboard</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{route('userProfile')}}">My Profile</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{route('categoryList')}}">Category List</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{route('addCategory')}}">Add Category</a>
                    </li>
                    
                </ul>
            </div>
            <div class="col-md-8 mt-1">
                @yield('content')
            </div>
        </div>
    </div>

    

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>      
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
</body>
</html>