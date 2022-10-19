<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<style>
    
  
  
</style>
{{-- NAV BAR HOMEEE --}}
<body>
    <nav class="navbar navbar-expand-sm navbar-expand-md navbar-expand-lg" style="background-color: #ff9e03;">
        <div class="container-fluid">
            <a class="navbar-brand " href="/public/home">G.I.M</a>
            <button class="navbar-toggler" style="background-color: #7e6060;" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active textoblanco" aria-current="page" href="/public/home">Pagina principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link textoblanco" href="#">Consultas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link textoblanco" href="#">Reportes</a>
                    </li>
                    <li class="nav-item dropdown">
                        
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content-card')
    @yield('content-registrominero')
</body>
<footer>
   
</footer>

</html>
