<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
@yield('style')
<style>
        body {
            background-color: #1E1E2C;
        }
    </style>
    
<body>
<nav class="navbar navbar-expand navbar-dark" style="background-color: #805BA5">
    <h1 class="navbar-brand mb-0">BEEFLIX♡</h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
        <li class="nav-item" style="padding-right:10px">
            <a href="{{ URL::previous() }}" class="btn btn-outline-light my-2 my-sm-0">Go Back</a>
        </li>
        <li class="nav-item" style="padding-right:10px">
            <a href="/" class="btn btn-outline-light my-2 my-sm-0" role="button">View all movies</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" style= "color: white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Movie Categories
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="/genre/1">Drama</a>
            <a class="dropdown-item" href="/genre/2">Kids</a>
            <a class="dropdown-item" href="/genre/3">TV Show</a>
            </div>
        </li>
    </ul>
  </div>
</nav>
@yield('content')

</body>
</html>