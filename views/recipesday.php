<?php $title = 'Les recettes du jours'; ?>

<?php ob_start(); ?>



<section class="best-receipe-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Les recettes du jours</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Best Receipe Area -->
               

                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-receipe-area mb-30">
                        <img src="<?=$RandRecipe['img_recette'] ?>" alt="">
                        <div class="receipe-content">
                            <a href="<?='?recipeID='.$RandRecipe['Id_recette'] ?>">
                                <h5><?=$RandRecipe['Name_recette'] ?></h5>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-receipe-area mb-30">
                        <img src="<?=$RandRecipe2['img_recette'] ?>" alt="">
                        <div class="receipe-content">
                            <a href="<?='?recipeID='.$RandRecipe2['Id_recette'] ?>">
                                <h5><?=$RandRecipe2['Name_recette'] ?></h5>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-receipe-area mb-30">
                        <img src="<?=$RandRecipe3['img_recette'] ?>" alt="">
                        <div class="receipe-content">
                            <a href="<?='?recipeID='.$RandRecipe3['Id_recette'] ?>">
                                <h5><?=$RandRecipe3['Name_recette'] ?></h5>
                            </a>
                        </div>
                    </div>
                </div>

               
            </div>
        </div>
</section>



<?php $content = ob_get_clean(); ?>

<?php require('templates/template.php'); ?>