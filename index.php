<?php

require 'connection.php';
require 'func_lib.php';
$recipes;

$selectedTab = ['active', '', '', ''];
if (isset($_GET['view'])) {
    switch ($_GET['view']) {
        case 'new-group':
            $selectedTab = ['', 'active', '', ''];
            break;
    }
}
// try {
//     $recipes = getAllRecipes($connect);
//     foreach ($recipes as $recipe) {
//         echo $recipe;
//     }
// } catch (Exception $e) {
//     echo $e->getMessage();
// }

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
        <nav class="navbar col-12 sticky-top">
                <img class="img-fluid object-fit-scale col-1" style="max-width: 100%; height: 10vh;" src="menuIcon.png" alt="menuIcon" type='button' data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas">
            </div>
            <h1 class="col-7" style="align-content:flex-start;">SnackLab</h1>
            <div class="col-4 d-flex flex-row-reverse justify-self-end justify-content-around">
                <img src="settingsIcon.png" class="img-fluid object-fit-scale col-2" alt="settingsIcon">
                <img src="userIcon.png" class="img-fluid object-fit-scale col-2" alt="userIcon">
            </div>
        </nav>
            <ul class="nav nav-tabs mb-4">
                <li class="nav-item">
                    <a class="nav-link <?=$selectedTab[0]?>" aria-current="page" href="index.php?view=group-recipes">Recipes from my groups</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?=$selectedTab[1]?>" href="index.php?view=new-group">new group</a>
                </li>
            </ul>
        <?php 
                require 'explorer.html';
                if (isset($_GET['view']) && $_GET['view'] == 'new-group') {
                    ?>
                    <div class="container d-flex flex-direction-row text-center border border">
                        <div class="col-6 border border-start-0">
                            <h2>create group</h2>
                            <form class="col-12">
                                <input type="text" placeholder="group password">
                                <input type="text" placeholder="group name">
                                <input type="submit" value="Create">
                            </form>
                        </div>
                        <div class="col-6 border border-end-0">
                            <h2>Join group</h2>
                            <form class="col-12">
                                <input type="text" placeholder="group password">
                                <input type="text" placeholder="group name">
                                <input type="submit" value="Join">
                            </form>                    
                        </div>
                    </div>  
                    <?php

                }
                ?> <div class="container-fluid col-12 d-flex flex-direction-row flex-wrap">   

                <?php

                if (!isset($_GET['view']) || $_GET['view'] == 'group-recipes') {
                        $recipes = getAllRecipes($connect);
                        foreach ($recipes as $recipe) {
                            echo $recipe;
                        }
                        foreach ($recipes as $recipe) {
                            echo $recipe;
                        }


                }
        ?>
                    </div>
        <div>
            <!-- <?=$recipes?> -->
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</html>