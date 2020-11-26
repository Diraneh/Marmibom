<?php $title = 'Home'; ?>

<?php ob_start(); ?>

 <!-- ##### Hero Area Start ##### -->
 <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image:url(<?=$RandRecipe['img_recette'] ?>)">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <h2 data-animation="fadeInUp" data-delay="300ms"><?=$RandRecipe['Name_recette'] ?></h2>
                                <p data-animation="fadeInUp" data-delay="700ms"><?=$RandRecipe['description_recette'] ?></p>
                                <a href="<?='?recipeID='.$RandRecipe['Id_recette'] ?>" class="btn delicious-btn" data-animation="fadeInUp" data-delay="1000ms">Voir la recette</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image:url(<?=$RandRecipe2['img_recette'] ?>)">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <h2 data-animation="fadeInUp" data-delay="300ms"><?=$RandRecipe2['Name_recette'] ?></h2>
                                <p data-animation="fadeInUp" data-delay="700ms"><?=$RandRecipe2['description_recette'] ?></p>
                                <a href="<?='?recipeID='.$RandRecipe2['Id_recette'] ?>" class="btn delicious-btn" data-animation="fadeInUp" data-delay="1000ms">Voir la recette</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image:url(<?=$RandRecipe3['img_recette'] ?>)">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <h2 data-animation="fadeInUp" data-delay="300ms"><?=$RandRecipe3['Name_recette'] ?></h2>
                                <p data-animation="fadeInUp" data-delay="700ms"><?=$RandRecipe3['description_recette'] ?></p>
                                <a href="<?='?recipeID='.$RandRecipe3['Id_recette'] ?>" class="btn delicious-btn" data-animation="fadeInUp" data-delay="1000ms">Voir la recette</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->
    <section class="best-receipe-area" style="margin-top:50px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Que cuisiner ce soir ?</h3>
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
    <!-- ##### CTA Area Start ##### -->
    <section class="cta-area bg-img bg-overlay" style="background-image: url(public/img/bg-img/bg4.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Cta Content -->
                    <div class="cta-content text-center">
                        <h2>Toutes nos recettes sont faites et pensées pour vous..</h2>
                        <p>Avec un large choix de recettes, nous vous ferons découvrir dans ce blog des repas original, peu coûteuse et plutôt simple à préparer, pour votre plus grand bonheur et celui de votre porte-monnaie.</p>
                        <a href="<?='?recipes'?>" class="btn delicious-btn">Découvrir toutes nos recettes</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### CTA Area End ##### -->

    <?php $content = ob_get_clean(); ?>

<?php require('templates/template.php'); ?>