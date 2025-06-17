<?php




?>
<!doctype html>
<head>
    <title>
        Snacklab - Home
    </title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="container-fluid col-12">
        <img src="menuIcon.png" alt="menuIcon" type='button' class="offcanvas-toggle" data-bs-toggle="offcanvas" data-bs-target="#offcanvas">

        </div>
        <h1 class="col-6 col-lg-8">SnackLab</h1>
        <div class="col-4 col-lg-2 d-flex flex-row-reverse justify-self-end justify-content-around">
            <img src="settingsIcon.png" alt="settingsIcon">
            <img src="userIcon.png" alt="userIcon">
            
        </div>
    </nav>
    <div class="offcanvas offcanvas-start col-1 col-lg-2 bg-primary" id="#offcanvas">
        <div>    
            <h5 class="offcanvas-title">Offcanvas</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            Content for the offcanvas goes here. You can place just about any Bootstrap component or custom elements here.
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>