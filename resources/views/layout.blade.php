<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurant App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-light bg-primary text-white">
            <div class="container-lg bg-gray">
              <a class="navbar-brand text-white" href="/">Restaurant</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ">
                  <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
                  
                  <a class="nav-link text-white" href="#">Search</a>
                  
                  @if (session('login'))
                  <a class="nav-link text-white" href="/list">List</a>
                  <a class="nav-link text-white" href="/add">Add</a>
                  <a class="nav-link text-white" href="/logout">LogOut</a>
                
                  
                  @else
                  <a class="nav-link text-white" href="/login">Login</a>
                  <a class="nav-link text-white" href="/register">Register</a>
                  @endif
                </div>
              </div>
            </div>
          </nav>
    </header>
    <div class="container-fluid bg-white" style="height:83vh">
        @yield('content')
    </div>
    <footer class="bg-primary" style="height:10vh; ">
        footer 
    </footer>

</body>
</html>