<?php
require('models/model.php');


/**
 * homeView
 * HOME PAGE AND SEND RAND RECIPES CONTROLLER
 * @return void
 */
function homeView(){
    $RandRecipe = new Recette();
    $RandRecipe = $RandRecipe->daysRecipe();

    $RandRecipe2 = new Recette();
    $RandRecipe2 = $RandRecipe2->daysRecipe2();


    $RandRecipe3 = new Recette();
    $RandRecipe3 = $RandRecipe3->daysRecipe3();
    require('views/home.php');
}

/**
 * recipes
 * RECIPES PAGE CONTROLLER
 * @return void
 */
function recipes(){
    $allRecipe = new Recette();
    $allRecipe = $allRecipe->recettes();
    require('views/recipes.php');
}

/**
 * singleRecipe
 * SINGLE RECIPES PAGE CONTROLLER
 * @return void
 */
function singleRecipe(){
    $recipe = new Recette();
    $recipe = $recipe->recipe($_GET['recipeID']);

    $ingredient = new Recette();
    $ingredient = $ingredient->ingredient($_GET['recipeID']);

    $tquantity = new Recette();
    $tquantity = $tquantity->tquantity($_GET['recipeID']);

    $bquantity = new Recette();
    $bquantity = $bquantity->bquantity($_GET['recipeID']);

    $qid = new Recette();
    $qid = $qid->qid($_GET['recipeID']);

    $change = new Recette();
    $change = $change->change();

    $directive = new Recette();
    $directive = $directive->directive($_GET['recipeID']);

    $service = new Recette();
    $service = $service->service($_GET['recipeID']);

    $slike = new Recette();
    $slike = $slike->likke($_GET['recipeID']);

    $dislike = new Recette();
    $dislike = $dislike->dislikke($_GET['recipeID']);
    
    require('views/recipe.php');
}

/**
 * randRecipe
 * RECIPEDAY PAGE CONTROLLER
 * @return void
 */
function randRecipe(){
    $RandRecipe = new Recette();
    $RandRecipe = $RandRecipe->daysRecipe();

    $RandRecipe2 = new Recette();
    $RandRecipe2 = $RandRecipe2->daysRecipe2();


    $RandRecipe3 = new Recette();
    $RandRecipe3 = $RandRecipe3->daysRecipe3();

    require('views/recipesday.php');
}

/**
 * search
 * SEARCH PAGE CONTROLLER
 * @return void
 */
function search(){
    $search = new Recette();
    $search = $search->searchR();
    require('views/selectrecipe.php');
}

/**
 * searchRR
 * SEARCH PAGE 2 CONTROLLER
 * @return void
 */
function searchRR(){
    $searchine = new Recette();
    $searchine = $searchine->searchI();
    require('views/selectrecipes.php');
}

/**
 * admin
 * ADMIN PAGE CONTROLLER
 * @return void
 */
function admin(){
    $ajouterI=new Recette();
    $ajouterI=$ajouterI->ajouterI();

    $ajouterR=new Recette();
    $ajouterR=$ajouterR->ajouterR();

    $modifierI=new Recette();
    $modifierI=$modifierI->modifierI();

    $ajouterD=new Recette();
    $ajouterD=$ajouterD->ajouterD();
    
    $modifierD=new Recette();
    $modifierD=$modifierD->modifierD();

    $modifierR=new Recette();
    $modifierR=$modifierR->modifierR();

    $allRecipe = new Recette();
    $allRecipe = $allRecipe->recettes();

    $supprimerI = new Recette();
    $supprimerI = $supprimerI->supprimerI();

    $supprimerR = new Recette();
    $supprimerR = $supprimerR->supprimerR();
    
    $supprimerD = new Recette();
    $supprimerD = $supprimerD->supprimerD();
    require ('views/admin.php');
}

