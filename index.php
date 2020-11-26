<?php
require('controllers/controller.php');

if (isset($_GET['recipeID'])) {
    echo singleRecipe();
            }else if(isset($_GET['recipes'])) {
                echo recipes();
                    }else if(isset($_GET['dayRecipes'])) {
                        echo randRecipe();
                            }else if(isset($_GET['home'])){
                                echo homeView();
                                    } else if (isset($_POST['selectrecipe'])) { 
                                        echo search();
                                            }else if (isset($_POST['selectrecipes'])){
                                                echo searchRR();
                                                }else if (isset($_GET['admin'])){
                                                    echo admin();
                                                    }else{
                                                        echo homeView();
                                                        }
require_once ('templates/template.php');