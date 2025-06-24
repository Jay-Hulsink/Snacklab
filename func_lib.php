<?php
require 'connection.php';
require 'itemcard.php';

function getAllRecipes(PDO $connect)
{
    $recipes = [];
    $qry = $connect->prepare("SELECT recipeTitle, shortRecipeDescription, id FROM recipes");
    $qry->execute(); 
    $items = $qry->fetchAll(PDO::FETCH_ASSOC);
    foreach ($items as $item) {
        $card = new recipeCard($item['recipeTitle'], $item['shortRecipeDescription'], $item['id']);        
        $recipes[] = $card->data;
    }
    return $recipes;
}



?>
