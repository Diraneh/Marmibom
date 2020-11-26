<?php ob_start(); ?>

<section style=" margin-left:200px; margin-top:200px; opacity:0px; cursor:default;">

    <div class="container">

        <div id="buttonAdmin" class="row">

            <div class="col-xs-4 col-4">

                <!-- Button to Open the Modal -->
                <button id="Supprimer" type="button" class="btn btn-danger" data-toggle="modal"
                    data-target="#myyyyModal">
                    Supprimer
                </button>

                <!-- The Modal -->
                <div class="modal" id="myyyyModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">SUPPRIMER</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body" id="sup">
                                <div class="container-fluid">


                                    <div class="d-flex form-group flex-column">
                                                <div class="col-12">
                                                    <h4 style="color:#ba3753;" class="modal-title">Recettes</h4>
                                                    <form action="" method='POST' style="display:flex; flex-wrap:wrap;">

                                                        <input type="text" placeholder="Id Recette" name="idRecette"
                                                            style="width:100% !important;">
                                                        <button style="background:#ba3753!important;" type="submit"
                                                            value="supprimerR" name="action"
                                                            class="btn btn-primary">Supprimer</button>
                                                    </form>
                                                </div>

                                                <div class="col-12">
                                                    <h4 style="color:#ba3753;" class="modal-title">Ingrédients</h4>
                                                    <form action="" method='POST' style="display:flex; flex-wrap:wrap;">

                                                        <input type="text" placeholder="Id Ingrédient" name="idIngredient"
                                                            style="width:100% !important;">
                                                        <button style="background:#ba3753!important;" type="submit"
                                                            value="supprimerI" name="action"
                                                            class="btn btn-primary">Supprimer</button>
                                                    </form>
                                                </div>

                                                <div class="col-12">
                                                    <h4 style="color:#ba3753;" class="modal-title">Directive</h4>
                                                    <form action="" method='POST' style="display:flex; flex-wrap:wrap;">

                                                        <input type="text" placeholder="Id Directive" name="idDirective"
                                                            style="width:100% !important;">
                                                        <button style="background:#ba3753!important;" type="submit"
                                                            value="supprimerD" name="action"
                                                            class="btn btn-primary">Supprimer</button>
                                                    </form>
                                                </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-4 col-4">


                <!-- Button to Open the Modal -->
                <button id="Modifier" type="button" class="btn btn-success" data-toggle="modal" data-target="#myyModal">
                    Modifier
                </button>

                <!-- The Modal -->
                <div class="modal" id="myyModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Modifier</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body" id="sup">
                                <div class="container-fluid">
                                    <div class="row">

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <div class="d-flex form-group flex-column">
                                                <div class="col-12">
                                                    <h4 style="color:#ba3753;" class="modal-title">Recette</h4>
                                                    <form action="" method='POST' style="display:flex; flex-wrap:wrap;">

                                                        <input type="text" placeholder="Id Recette" name="idRecette"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="Id ingrédient"
                                                            name="idIngredient" style="width:50% !important;">
                                                        <input type="text" placeholder="Name" name="name"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="Time" name="time"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="Number" name="number"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="Level" name="level"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="Cost" name="cost"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="public/img/bg-img/votre image"
                                                            name="imgrecette" style="width:50% !important;">
                                                        <input type="text" placeholder="Description" name="description"
                                                            style="width:100% !important;">



                                                        <button style="background:#ba3753!important;" type="submit"
                                                            value="modifierR" name="action"
                                                            class="btn btn-primary">Enregistrer</button>
                                                    </form>
                                                </div>

                                                <div class="col-12">
                                                    <h4 style="color:#ba3753;" class="modal-title">Ingrédients</h4>
                                                    <form action="" method='POST' style="display:flex; flex-wrap:wrap;">

                                                        <input type="text" placeholder="Id Recette" name="idIngredient"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="Service" name="Service"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="Quantity" name="Quantity"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="ingredient" name="ingredient"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="Quantity2" name="Quantity2"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="ingredient2" name="ingredient2"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="Quantity3" name="Quantity3"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="ingredient3" name="ingredient3"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="Quantity4" name="Quantity4"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="ingredient4" name="ingredient4"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="Quantity5" name="Quantity5"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="ingredient5" name="ingredient5"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="Quantity6" name="Quantity6"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="ingredient6" name="ingredient6"
                                                            style="width:50% !important;">

                                                        <button style="background:#ba3753!important;" type="submit"
                                                            value="modifierI" name="action"
                                                            class="btn btn-primary">Enregistrer</button>
                                                    </form>
                                                </div>

                                                <div class="col-12">
                                                    <h4 style="color:#ba3753;" class="modal-title">Directive</h4>
                                                    <form action="" method='POST' style="display:flex; flex-wrap:wrap;">

                                                        <input type="text" placeholder="Id Directive" name="idDirective"
                                                            style="width:100% !important;">
                                                        <input type="text" placeholder="Directive 1" name="dir1"
                                                            style="width:100% !important;">
                                                        <input type="text" placeholder="Directive 2" name="dir2"
                                                            style="width:100% !important;">
                                                        <input type="text" placeholder="Directive 3" name="dir3"
                                                            style="width:100% !important;">
                                                        <input type="text" placeholder="Directive 4" name="dir4"
                                                            style="width:100% !important;">
                                                        <input type="text" placeholder="Directive 5" name="dir5"
                                                            style="width:100% !important;">
                                                        <input type="text" placeholder="Directive 6" name="dir6"
                                                            style="width:100% !important;">
                                                        <input type="text" placeholder="Directive 7" name="dir7"
                                                            style="width:100% !important;">
                                                        <input type="text" placeholder="Directive 8" name="dir8"
                                                            style="width:100% !important;">
                                                        <input type="text" placeholder="Directive 9" name="dir9"
                                                            style="width:100% !important;">
                                                        <input type="text" placeholder="Directive 10" name="dir10"
                                                            style="width:100% !important;">

                                                        <button style="background:#ba3753!important;" type="submit"
                                                            value="modifierD" name="action"
                                                            class="btn btn-primary">Enregistrer</button>
                                                    </form>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-4 col-4">
                <!-- Button to Open the Modal -->
                <button id="Modifier" type="button" class="btn btn-primary" data-toggle="modal" data-target="#mModal">
                    Ajouter
                </button>
                <!-- The Modal -->
                <div class="modal" id="mModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Ajouter</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body" id="sup">
                                <div class="container-fluid">
                                    <div class="row">
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <div class="d-flex form-group flex-column">
                                                <div class="col-12">
                                                    <h4 style="color:#ba3753;" class="modal-title">Recette</h4>
                                                    <form action="" method='POST' style="display:flex; flex-wrap:wrap;">

                                                        <input type="text" placeholder="Id Recette" name="Idrecette"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="Id Ingredient"
                                                            name="IdIngredient" style="width:50% !important;">
                                                        <input type="text" placeholder="Name recette" name="Namerecette"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="time recette" name="timerecette"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="number recette"
                                                            name="numberrecette" style="width:50% !important;">
                                                        <input type="text" placeholder="level recette"
                                                            name="levelrecette" style="width:50% !important;">
                                                        <input type="text" placeholder="cost recette" name="costrecette"
                                                            style="width:50% !important;">
                                                        <input type="number" hidden name="like" value="1"
                                                            style="width:50% !important;">
                                                        <input type="number" hidden name="dislike" value="1"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="public/img/bg-img/votre image"
                                                            name="imgrecette" style="width:50% !important;">
                                                        <input type="text" placeholder="description recette"
                                                            name="descriptionrecette" style="width:100% !important;">

                                                        <button style="background:#ba3753!important;" type="submit"
                                                            value="ajouterrecip" name="actionn"
                                                            class="btn btn-primary">Enregistrer</button>
                                                    </form>
                                                </div>

                                                <div class="col-12">
                                                    <h4 style="color:#ba3753;" class="modal-title">Ingrédients</h4>
                                                    <form action="" method='POST' style="display:flex; flex-wrap:wrap;">

                                                        <input type="text" placeholder="Id Recette" name="idIngredient"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="Service" name="Service"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="Quantity" name="Quantity"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="ingredient" name="ingredient"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="Quantity2" name="Quantity2"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="ingredient2" name="ingredient2"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="Quantity3" name="Quantity3"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="ingredient3" name="ingredient3"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="Quantity4" name="Quantity4"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="ingredient4" name="ingredient4"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="Quantity5" name="Quantity5"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="ingredient5" name="ingredient5"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="Quantity6" name="Quantity6"
                                                            style="width:50% !important;">
                                                        <input type="text" placeholder="ingredient6" name="ingredient6"
                                                            style="width:50% !important;">

                                                        <button style="background:#ba3753!important;" type="submit"
                                                            value="ajouterI" name="action"
                                                            class="btn btn-primary">Enregistrer</button>
                                                    </form>
                                                </div>                                               

                                                <div class="col-12">
                                                    <h4 style="color:#ba3753;" class="modal-title">Directive</h4>
                                                    <form action="" method='POST' style="display:flex; flex-wrap:wrap;">

                                                        <input type="text" placeholder="Id directive" name="idDir"
                                                            style="width:100% !important;">
                                                        <input type="text" placeholder="Directive 1" name="dir1"
                                                            style="width:100% !important;">
                                                        <input type="text" placeholder="Directive 2" name="dir2"
                                                            style="width:100% !important;">
                                                        <input type="text" placeholder="Directive 3" name="dir3"
                                                            style="width:100% !important;">
                                                        <input type="text" placeholder="Directive 4" name="dir4"
                                                            style="width:100% !important;">
                                                        <input type="text" placeholder="Directive 5" name="dir5"
                                                            style="width:100% !important;">
                                                        <input type="text" placeholder="Directive 6" name="dir6"
                                                            style="width:100% !important;">
                                                        <input type="text" placeholder="Directive 7" name="dir7"
                                                            style="width:100% !important;">
                                                        <input type="text" placeholder="Directive 8" name="dir8"
                                                            style="width:100% !important;">
                                                        <input type="text" placeholder="Directive 9" name="dir9"
                                                            style="width:100% !important;">
                                                        <input type="text" placeholder="Directive 10" name="dir10"
                                                            style="width:100% !important;">


                                                        <button style="background:#ba3753!important;" type="submit"
                                                            value="ajouterD" name="action"
                                                            class="btn btn-primary">Enregistrer</button>
                                                    </form>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>


<section id="tableauR">
    <h4>
        Liste des recettes :
    </h4>
    <table class="steelBlueCols">
        <thead>

            <tr>
                <th>ID Recette</th>
                <th>Nom Recette</th>
                <th>Lien Recette</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php foreach($allRecipe as $result){ ?>
                <td><?=$result['Id_recette'] ?></td>
                <td><?=$result['Name_recette'] ?></td>
                <td><a target="_blank" style="color:white" href=<?='?recipeID='.$result['Id_recette'] ?>> Voir ici</a></td>
            </tr>

            <?php } ?>
        </tbody>
        </tr>
    </table>
</section>





<?php $title = "Admin"; ?>
<?php $content = ob_get_clean(); ?>

<?php require('templates/template.php'); ?>