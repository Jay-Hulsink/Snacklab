<?php

require_once 'connection.php';

?>
<!doctype html>
<html>
    <head>
        <title>
            Snacklab - Home
        </title>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <nav class="navbar col-12">
                <img class="img-fluid object-fit-scale col-1" style="max-width: 100%; height: 10vh;" src="menuIcon.png" alt="menuIcon" type='button' data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas">
            </div>
            <h1 class="col-7" style="align-content:flex-start;">SnackLab</h1>
            <div class="col-4 d-flex flex-row-reverse justify-self-end justify-content-around">
                <img src="settingsIcon.png" class="img-fluid object-fit-scale col-2" alt="settingsIcon">
                <img src="userIcon.png" class="img-fluid object-fit-scale col-2" alt="userIcon">
                
            </div>
        </nav>
        <div class="offcanvas offcanvas-start mw-50 col-11" id="offcanvas">
            <div class="offcanvas-header col-11" style="border-bottom: #a3a3a3 solid 1px;">    
                <h5 class="offcanvas-title col-9">Explorer</h5>
                <button type="button" class="btn-close bg-light text-reset col-3" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body col-12 w-100">
                <p class="col-12 w-75">ik ruik u van hier</p>
                <ul>
                    <li><a>groups</a></li>
                </ul>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</html>