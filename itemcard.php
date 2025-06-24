<?php

class recipeCard
{
    public $data;
    public function __construct($title, $shortDescription, $recipeId)
    {
        $this->data = '<div class="card col-lg-2 col-1">
            <div class="card-body">
            <h5 class="card-title">' . $title . '</h5>
            <p class="card-text">' . $shortDescription . '</p>
            <a href="' . $recipeId . '" class="btn btn-primary">View Recipe</a>
            </div></div>';
    }
}



?>