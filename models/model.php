<?php
require_once('public/connect.php');

class Recette extends Databases{
    
    /**
     * recettes
     * SELECT ALL RECIPES METHOD
     * @return void
     */
    public function recettes(){
        $recette = $this->connect()->prepare('SELECT * FROM recette');
        $recette->execute();
        $result = $recette->fetchALL(PDO::FETCH_ASSOC);
        return $result;
     }
    
    /**
     * recipe
     * SELECT A RECIPE BY ID METHOD
     * @param  mixed $recipeID
     * @return void
     */
    public function recipe($recipeID){
        $recette = $this->connect()->prepare('SELECT * FROM recette WHERE id_recette='.$recipeID.'');
        $recette->execute();
        $result = $recette->fetch(PDO::FETCH_ASSOC);
        return $result;
     }
     
     /**
      * daysRecipe
      * SELECT RAND RECIPE METHOD 1
      * @return void
      */
     public function daysRecipe(){
        $recette = $this->connect()->prepare('SELECT * FROM recette ORDER BY RAND()
        LIMIT 6');
        $recette->execute();
        $result = $recette->fetch(PDO::FETCH_ASSOC);
        return $result;
     }
     
     /**
      * daysRecipe2
      * SELECT RAND RECIPE METHOD 2 
      * @return void
      */
     public function daysRecipe2(){
        $recette = $this->connect()->prepare('SELECT * FROM recette ORDER BY RAND()
        LIMIT 6');
        $recette->execute();
        $result = $recette->fetch(PDO::FETCH_ASSOC);
        return $result;
     }
     
     /**
      * daysRecipe3
      * SELECT RAND RECIPE METHOD 3
      * @return void
      */
     public function daysRecipe3(){
        $recette = $this->connect()->prepare('SELECT * FROM recette ORDER BY RAND()
        LIMIT 6');
        $recette->execute();
        $result = $recette->fetch(PDO::FETCH_ASSOC);
        return $result;
     }
          
     /**
      * ingredient
      * SELECT ALL INGREDIENT BY RECIPE ID METHOD
      * @param  mixed $recipeID
      * @return void
      */
     public function ingredient($recipeID){
        $recette = $this->connect()->prepare('SELECT ing1_ingredient, ing2_ingredient, ing3_ingredient, ing4_ingredient, ing5_ingredient,
        ing6_ingredient, ing7_ingredient, ing8_ingredient, ing9_ingredient, ing10_ingredient
        FROM ingredient WHERE id_recette_ingredient='.$recipeID.'');
        $recette->execute();
        $result = $recette->fetch(PDO::FETCH_ASSOC);
        return $result;
     }
          
     /**
      * tquantity
      * SELECT TOTAL QUANTITY OF INGREDIENT BY RECIPE ID METHOD
      * @param  mixed $recipeID
      * @return void
      */
     public function tquantity($recipeID){
        $recette = $this->connect()->prepare('SELECT tqty1, tqty2, tqty3, tqty4, tqty5,
        tqty6
        FROM ingredient WHERE id_recette_ingredient='.$recipeID.'');
        $recette->execute();
        $result = $recette->fetch(PDO::FETCH_ASSOC);
        return $result;
     }
          
     /**
      * qid
      * SELECT ID OF INGREDIENT TABLE METHOD
      * @param  mixed $recipeID
      * @return void
      */
     public function qid($recipeID){
        $recette = $this->connect()->prepare('SELECT id_recette_ingredient
        FROM ingredient WHERE id_recette_ingredient='.$recipeID.'');
        $recette->execute();
        $result = $recette->fetch(PDO::FETCH_ASSOC);
        return $result;
     }
          
     /**
      * bquantity
      * SELECT INITIAL QUANTITY OF INGREDIENT BY ID METHOD
      * @param  mixed $recipeID
      * @return void
      */
     public function bquantity($recipeID){
        $recette = $this->connect()->prepare('SELECT qty1, qty2, qty3, qty4, qty5, qty6
        FROM ingredient WHERE id_recette_ingredient='.$recipeID.'');
        $recette->execute();
        $result = $recette->fetch(PDO::FETCH_ASSOC);
        return $result;       
     }
     
     /**
      * service
      * SELECT SRV (NUMBER OF PEOPLE) BY ID METHOD
      * @param  mixed $recipeID
      * @return void
      */
     public function service($recipeID){
        $recette = $this->connect()->prepare('SELECT srv
        FROM ingredient WHERE id_recette_ingredient='.$recipeID.'');
        $recette->execute();
        $result = $recette->fetch(PDO::FETCH_ASSOC);
        return $result;
     }
          
     /**
      * change
      * UPDATE QUANTITY OF INGREDIENT BY SRV NUMBER METHOD
      * @return void
      */
     public function change(){
        if(isset($_POST['action']) && $_POST['action']=="ajouter" && !empty($_POST['srv']) && !empty($_POST['srv'])) {
        $srv = $_POST['srv'];
        $qid = $_POST['qid'];
        $bqty = $_POST['bqty'];
        $bqty2 = $_POST['bqty2'];
        $bqty3 = $_POST['bqty3'];
        $bqty4 = $_POST['bqty4'];
        $bqty5 = $_POST['bqty5'];
        $bqty6 = $_POST['bqty6'];

        $delai=0.1;
         
        $tqty = $srv * $bqty;
        $tqty2 = $srv * $bqty2;
        $tqty3 = $srv * $bqty3;
        $tqty4 = $srv * $bqty4;
        $tqty5 = $srv * $bqty5;
        $tqty6 = $srv * $bqty6;

            
        $change = $this->connect()->prepare('UPDATE ingredient SET srv = :srv, tqty1 = :tqty1, tqty2 = :tqty2, tqty3 = :tqty3,
        tqty4 = :tqty4, tqty5 = :tqty5, tqty6 = :tqty6 
        
        WHERE id_recette_ingredient =:id');
        $change->bindParam(':id', $qid, PDO::PARAM_STR);
        $change->bindParam(':srv', $srv, PDO::PARAM_STR);
        $change->bindParam(':tqty1', $tqty, PDO::PARAM_STR);
        $change->bindParam(':tqty2', $tqty2, PDO::PARAM_STR);
        $change->bindParam(':tqty3', $tqty3, PDO::PARAM_STR);
        $change->bindParam(':tqty4', $tqty4, PDO::PARAM_STR);
        $change->bindParam(':tqty5', $tqty5, PDO::PARAM_STR);
        $change->bindParam(':tqty6', $tqty6, PDO::PARAM_STR);                            
        $change = $change->execute();        
        $change= header("Refresh:$delai;");
        return $change;       
      }
    }
     
     /**
      * directive
      * SELECT DIRECTIVE BY ID METHOD
      * @param  mixed $recipeID
      * @return void
      */
     public function directive($recipeID){
        $recette = $this->connect()->prepare('SELECT dir1_directive, dir2_directive, dir3_directive, dir4_directive, dir5_directive,
        dir6_directive, dir7_directive, dir8_directive, dir9_directive, dir10_directive FROM directive WHERE Id_recette_directive='.$recipeID.'');
        $recette->execute();
        $result = $recette->fetch(PDO::FETCH_ASSOC);
        return $result;
     }
     
     /**
      * searchR
      * SEARCH BAR METHOD
      * @return void
      */
     public function searchR(){
      $recherche = isset($_POST['Recette']) ? $_POST['Recette'] : '';
      $ilike = isset($_POST['ilike']) ? $_POST['ilike'] : '';
      $idontlike = isset($_POST['idontlike']) ? $_POST['idontlike'] : '';
         if($recherche && $ilike && $idontlike){
            $q = $this->connect()->prepare(
            "SELECT Name_recette,img_recette,Id_recette,ing1_ingredient,ing2_ingredient, 
            ing3_ingredient,ing4_ingredient,ing5_ingredient,ing6_ingredient FROM ingredient
            INNER JOIN recette ON recette.Id_Ingredient = ingredient.Id_recette_ingredient
            WHERE Name_recette LIKE '%$recherche%'
            OR ing1_ingredient LIKE '%$ilike%' OR ing2_ingredient LIKE '%$ilike%'
            OR ing3_ingredient LIKE '%$ilike%' OR ing4_ingredient LIKE '%$ilike%'
            OR ing5_ingredient LIKE '%$ilike%' OR ing6_ingredient LIKE '%$ilike%'
            AND ing1_ingredient NOT LIKE '%$idontlike%' AND ing2_ingredient NOT LIKE '%$idontlike%'
            AND ing3_ingredient NOT LIKE '%$idontlike%' AND ing4_ingredient NOT LIKE '%$idontlike%'
            AND ing5_ingredient NOT LIKE '%$idontlike%' AND ing6_ingredient NOT LIKE '%$idontlike%'
            LIMIT 10");
            $q->execute();
            $q = $q->fetchALL(PDO::FETCH_ASSOC);
            return $q;
         }else if($recherche && $ilike && empty($_POST['idontlike'])){
            $q = $this->connect()->prepare(
               "SELECT Name_recette,img_recette,Id_recette,ing1_ingredient,ing2_ingredient, 
               ing3_ingredient,ing4_ingredient,ing5_ingredient,ing6_ingredient FROM ingredient
               INNER JOIN recette ON recette.Id_Ingredient = ingredient.Id_recette_ingredient
               WHERE Name_recette LIKE '%$recherche%'
               OR ing1_ingredient LIKE '%$ilike%' OR ing2_ingredient LIKE '%$ilike%'
               OR ing3_ingredient LIKE '%$ilike%' OR ing4_ingredient LIKE '%$ilike%'
               OR ing5_ingredient LIKE '%$ilike%' OR ing6_ingredient LIKE '%$ilike%'
               LIMIT 10");
               $q->execute();
               $q = $q->fetchALL(PDO::FETCH_ASSOC);
               return $q;
         }else if($recherche && empty($_POST['ilike']) && $idontlike){
            $q = $this->connect()->prepare(
               "SELECT Name_recette,img_recette,Id_recette,ing1_ingredient,ing2_ingredient, 
               ing3_ingredient,ing4_ingredient,ing5_ingredient,ing6_ingredient FROM ingredient
               INNER JOIN recette ON recette.Id_Ingredient = ingredient.Id_recette_ingredient
               WHERE Name_recette LIKE '%$recherche%'
               AND ing1_ingredient NOT LIKE '%$idontlike%' AND ing2_ingredient NOT LIKE '%$idontlike%'
               AND ing3_ingredient NOT LIKE '%$idontlike%' AND ing4_ingredient NOT LIKE '%$idontlike%'
               AND ing5_ingredient NOT LIKE '%$idontlike%' AND ing6_ingredient NOT LIKE '%$idontlike%'
               LIMIT 10");
               $q->execute();
               $q = $q->fetchALL(PDO::FETCH_ASSOC);
               return $q;
         }else if($recherche && empty($_POST['ilike']) && empty($_POST['idontlike'])){
            $q = $this->connect()->prepare(
               "SELECT Name_recette,img_recette,Id_recette,ing1_ingredient,ing2_ingredient, 
               ing3_ingredient,ing4_ingredient,ing5_ingredient,ing6_ingredient FROM ingredient
               INNER JOIN recette ON recette.Id_Ingredient = ingredient.Id_recette_ingredient
               WHERE Name_recette LIKE '%$recherche%'
               LIMIT 10");
               $q->execute();
               $q = $q->fetchALL(PDO::FETCH_ASSOC);
               return $q;
         }else if(empty($_POST['recherche']) && empty($_POST['ilike']) && $idontlike){
            $q = $this->connect()->prepare(
               "SELECT Name_recette,img_recette,Id_recette,ing1_ingredient,ing2_ingredient, 
               ing3_ingredient,ing4_ingredient,ing5_ingredient,ing6_ingredient FROM ingredient
               INNER JOIN recette ON recette.Id_Ingredient = ingredient.Id_recette_ingredient
               WHERE Name_recette LIKE '%$recherche%'
               AND ing1_ingredient NOT LIKE '%$idontlike%' AND ing2_ingredient NOT LIKE '%$idontlike%'
               AND ing3_ingredient NOT LIKE '%$idontlike%' AND ing4_ingredient NOT LIKE '%$idontlike%'
               AND ing5_ingredient NOT LIKE '%$idontlike%' AND ing6_ingredient NOT LIKE '%$idontlike%'
               LIMIT 10");
               $q->execute();
               $q = $q->fetchALL(PDO::FETCH_ASSOC);
               return $q;
         }             
      }
    
    /**
     * searchI
     * SEARCH BY INGREDIENT METHOD
     * @return void
     */
    public function searchI(){
      $Ingredient1 = isset($_POST['Ingredient1']) ? $_POST['Ingredient1'] : '';
      $Ingredient2 = isset($_POST['Ingredient2']) ? $_POST['Ingredient2'] : '';
      $Ingredient3 = isset($_POST['Ingredient3']) ? $_POST['Ingredient3'] : '';

      if($Ingredient1 && $Ingredient2 && $Ingredient3){
         $q = $this->connect()->prepare(
            "SELECT Name_recette,img_recette,Id_recette,ing1_ingredient,ing2_ingredient, 
            ing3_ingredient,ing4_ingredient,ing5_ingredient,ing6_ingredient FROM ingredient
            INNER JOIN recette ON recette.Id_Ingredient = ingredient.Id_recette_ingredient
            WHERE
            ing1_ingredient LIKE '%$Ingredient1%' OR ing2_ingredient LIKE '%$Ingredient1%'
            OR ing3_ingredient LIKE '%$Ingredient1%' OR ing4_ingredient LIKE '%$Ingredient1%'
            OR ing5_ingredient LIKE '%$Ingredient1%' OR ing6_ingredient LIKE '%$Ingredient1%'
            OR ing1_ingredient LIKE '%$Ingredient2%' OR ing2_ingredient LIKE '%$Ingredient2%'
            OR ing3_ingredient LIKE '%$Ingredient2%' OR ing4_ingredient LIKE '%$Ingredient2%'
            OR ing5_ingredient LIKE '%$Ingredient2%' OR ing6_ingredient LIKE '%$Ingredient2%'
            OR ing1_ingredient LIKE '%$Ingredient3%' OR ing2_ingredient LIKE '%$Ingredient3%'
            OR ing3_ingredient LIKE '%$Ingredient3%' OR ing4_ingredient LIKE '%$Ingredient3%'
            OR ing5_ingredient LIKE '%$Ingredient3%' OR ing6_ingredient LIKE '%$Ingredient3%'
            LIMIT 10");
            $q->execute();
            $q = $q->fetchALL(PDO::FETCH_ASSOC);
            return $q;
      }else if($Ingredient1 && $Ingredient2 && empty($_POST['Ingredient3'])){
         $q = $this->connect()->prepare(
            "SELECT Name_recette,img_recette,Id_recette,ing1_ingredient,ing2_ingredient, 
            ing3_ingredient,ing4_ingredient,ing5_ingredient,ing6_ingredient FROM ingredient
            INNER JOIN recette ON recette.Id_Ingredient = ingredient.Id_recette_ingredient
            WHERE
            ing1_ingredient LIKE '%$Ingredient1%' OR ing2_ingredient LIKE '%$Ingredient1%'
            OR ing3_ingredient LIKE '%$Ingredient1%' OR ing4_ingredient LIKE '%$Ingredient1%'
            OR ing5_ingredient LIKE '%$Ingredient1%' OR ing6_ingredient LIKE '%$Ingredient1%'
            OR ing1_ingredient LIKE '%$Ingredient2%' OR ing2_ingredient LIKE '%$Ingredient2%'
            OR ing3_ingredient LIKE '%$Ingredient2%' OR ing4_ingredient LIKE '%$Ingredient2%'
            OR ing5_ingredient LIKE '%$Ingredient2%' OR ing6_ingredient LIKE '%$Ingredient2%'
            LIMIT 10");
            $q->execute();
            $q = $q->fetchALL(PDO::FETCH_ASSOC);
            return $q;
      }else if($Ingredient1 && empty($_POST['Ingredient2']) && empty($_POST['Ingredient3'])){
         $q = $this->connect()->prepare(
            "SELECT Name_recette,img_recette,Id_recette,ing1_ingredient,ing2_ingredient, 
            ing3_ingredient,ing4_ingredient,ing5_ingredient,ing6_ingredient FROM ingredient
            INNER JOIN recette ON recette.Id_Ingredient = ingredient.Id_recette_ingredient
            WHERE
            ing1_ingredient LIKE '%$Ingredient1%' OR ing2_ingredient LIKE '%$Ingredient1%'
            OR ing3_ingredient LIKE '%$Ingredient1%' OR ing4_ingredient LIKE '%$Ingredient1%'
            OR ing5_ingredient LIKE '%$Ingredient1%' OR ing6_ingredient LIKE '%$Ingredient1%'
            LIMIT 10");
            $q->execute();
            $q = $q->fetchALL(PDO::FETCH_ASSOC);
            return $q;
      }else if(empty($_POST['Ingredient1']) && $Ingredient2 && empty($_POST['Ingredient3'])){
         $q = $this->connect()->prepare(
            "SELECT Name_recette,img_recette,Id_recette,ing1_ingredient,ing2_ingredient, 
            ing3_ingredient,ing4_ingredient,ing5_ingredient,ing6_ingredient FROM ingredient
            INNER JOIN recette ON recette.Id_Ingredient = ingredient.Id_recette_ingredient
            WHERE
            ing1_ingredient LIKE '%$Ingredient2%' OR ing2_ingredient LIKE '%$Ingredient2%'
            OR ing3_ingredient LIKE '%$Ingredient2%' OR ing4_ingredient LIKE '%$Ingredient2%'
            OR ing5_ingredient LIKE '%$Ingredient2%' OR ing6_ingredient LIKE '%$Ingredient2%'
            LIMIT 10");
            $q->execute();
            $q = $q->fetchALL(PDO::FETCH_ASSOC);
            return $q;
      }else if(empty($_POST['Ingredient1']) && empty($_POST['Ingredient2']) && $Ingredient3){
         $q = $this->connect()->prepare(
            "SELECT Name_recette,img_recette,Id_recette,ing1_ingredient,ing2_ingredient, 
            ing3_ingredient,ing4_ingredient,ing5_ingredient,ing6_ingredient FROM ingredient
            INNER JOIN recette ON recette.Id_Ingredient = ingredient.Id_recette_ingredient
            WHERE
            ing1_ingredient LIKE '%$Ingredient3%' OR ing2_ingredient LIKE '%$Ingredient3%'
            OR ing3_ingredient LIKE '%$Ingredient3%' OR ing4_ingredient LIKE '%$Ingredient3%'
            OR ing5_ingredient LIKE '%$Ingredient3%' OR ing6_ingredient LIKE '%$Ingredient3%'
            LIMIT 10");
            $q->execute();
            $q = $q->fetchALL(PDO::FETCH_ASSOC);
            return $q;
      }else{

      }
   }
      
      /**
       * likke
       * INCREMENTE LIKE
       * @param  mixed $recipeID
       * @return void
       */
      public function likke($recipeID){   
         if(isset($_POST['like']) && $_POST['like']=="1"){
            $delai = 0.1;
            $recette = $this->connect()->prepare('UPDATE recette SET likes = likes + 1 WHERE Id_recette ='.$recipeID.'');
            $recette->execute();
            $recette = header("Refresh:$delai;");                 
            return $recette;
            }
      }

            /**
       * likke
       * INCREMENTE DISLIKE
       * @param  mixed $recipeID
       * @return void
       */
      public function dislikke($recipeID){   
         if(isset($_POST['dislike']) && $_POST['dislike']=="1"){
            $delai = 0.1;
            $recette = $this->connect()->prepare('UPDATE recette SET dislikes = dislikes + 1 WHERE Id_recette ='.$recipeID.'');
            $recette->execute();
            $recette = header("Refresh:$delai;");                 
            return $recette;
            }
      }

      
      /**
       * ajouterI
       * ADDING INGREDIENT METHOD
       * @return void
       */
      public function ajouterI(){

         if(isset($_POST['action']) && $_POST['action']=="ajouterI" && !empty($_POST['idIngredient'])){
         
         $ajouter = $this->connect()->prepare('INSERT INTO ingredient(
         Id_recette_ingredient,
         srv,
         ing1_ingredient,
         ing2_ingredient,
         ing3_ingredient,
         ing4_ingredient,
         ing5_ingredient,
         ing6_ingredient,
         qty1,
         qty2,
         qty3,
         qty4,
         qty5,
         qty6
         )
         VALUES(:id,:srv,:ing1_ingredient,:ing2_ingredient,:ing3_ingredient,:ing4_ingredient,:ing5_ingredient,:ing6_ingredient,:qty1,:qty2,:qty3,:qty4,:qty5,:qty6)');
         $ajouter->bindParam(':id', $_POST['idIngredient'],
         PDO::PARAM_STR);
         $ajouter->bindParam(':srv', $_POST['Service'],
         PDO::PARAM_STR);
         $ajouter->bindParam(':ing1_ingredient', $_POST['ingredient'],
         PDO::PARAM_STR);

         $ajouter->bindParam(':ing2_ingredient', $_POST['ingredient2'],
         PDO::PARAM_STR);

         $ajouter->bindParam(':ing3_ingredient', $_POST['ingredient3'],
         PDO::PARAM_STR);

         $ajouter->bindParam(':ing4_ingredient', $_POST['ingredient4'],
         PDO::PARAM_STR);

         $ajouter->bindParam(':ing5_ingredient', $_POST['ingredient5'],
         PDO::PARAM_STR);

         $ajouter->bindParam(':ing6_ingredient', $_POST['ingredient6'],
         PDO::PARAM_STR);

         $ajouter->bindParam(':qty1', $_POST['Quantity'],
         PDO::PARAM_STR);

         $ajouter->bindParam(':qty2', $_POST['Quantity2'],
         PDO::PARAM_STR);

         $ajouter->bindParam(':qty3', $_POST['Quantity3'],
         PDO::PARAM_STR);

         $ajouter->bindParam(':qty4', $_POST['Quantity4'],
         PDO::PARAM_STR);

         $ajouter->bindParam(':qty5', $_POST['Quantity5'],
         PDO::PARAM_STR);

         $ajouter->bindParam(':qty6', $_POST['Quantity6'],
         PDO::PARAM_STR);

         $ajouter=$ajouter->execute();
         
         return $ajouter;
         
      }
   }

   
   /**
    * ajouterR
    * ADDING RECIPE METHOD
    * @return void
    */
   public function ajouterR(){
      
      if(isset($_POST['actionn']) && $_POST['actionn']=="ajouterrecip" && !empty($_POST['Idrecette']) && !empty($_POST['Namerecette']) && !empty($_POST['timerecette'])
      && !empty($_POST['numberrecette']) && !empty($_POST['levelrecette']) && !empty($_POST['costrecette'])
      && !empty($_POST['descriptionrecette']) && !empty($_POST['IdIngredient']) && !empty($_POST['imgrecette']) && !empty($_POST['like']) && !empty($_POST['dislike'])){
   
      $ajouter = $this->connect()->prepare('INSERT INTO recette(
      Id_recette,
      Name_recette,
      img_recette,
      time_recette,
      number_recette,
      level_recette,
      cost_recette,
      description_recette,
      Id_Ingredient,
      likes,
      dislikes
      )
      VALUES(:Id_recette,:Name_recette,:img_recette,:time_recette,:number_recette,:level_recette,:cost_recette,:description_recette,:Id_Ingredient,:likes,:dislikes)');
     
      $ajouter->bindParam(':Id_recette', $_POST['Idrecette'],
      PDO::PARAM_STR);
      $ajouter->bindParam(':Name_recette', $_POST['Namerecette'],
      PDO::PARAM_STR);
      $ajouter->bindParam(':time_recette', $_POST['timerecette'],
      PDO::PARAM_STR);
      
      $ajouter->bindParam(':number_recette', $_POST['numberrecette'],
      PDO::PARAM_STR);
      
      $ajouter->bindParam(':level_recette', $_POST['levelrecette'],
      PDO::PARAM_STR);
      
      $ajouter->bindParam(':cost_recette', $_POST['costrecette'],
      PDO::PARAM_STR);
      
      $ajouter->bindParam(':Id_Ingredient', $_POST['IdIngredient'],
      PDO::PARAM_STR);
     
      $ajouter->bindParam(':img_recette', $_POST['imgrecette'],
      PDO::PARAM_STR);
      
      $ajouter->bindParam(':description_recette', $_POST['descriptionrecette'],
      PDO::PARAM_STR);

      $ajouter->bindParam(':likes', $_POST['like'],
      PDO::PARAM_STR);

      $ajouter->bindParam(':dislikes', $_POST['dislike'],
      PDO::PARAM_STR);
      
      $ajouter = $ajouter->execute();
      return $ajouter; 

      
      }
      
      }
      
      /**
       * ajouterD
       * ADDING DIRECTIVE METHOD
       * @return void
       */
      public function ajouterD(){
      
         if(isset($_POST['action']) && $_POST['action']=="ajouterD" && !empty($_POST['idDir'])
         ){
      
         $ajouter = $this->connect()->prepare('INSERT INTO directive(
         Id_recette_directive,
         dir1_directive,
         dir2_directive,
         dir3_directive,
         dir4_directive,
         dir5_directive,
         dir6_directive,
         dir7_directive,
         dir8_directive,
         dir9_directive,
         dir10_directive
         )
         VALUES(:id,:dir1,:dir2,:dir3,:dir4,:dir5,:dir6,:dir7,:dir8,:dir9,:dir10)');
        
         $ajouter->bindParam(':id', $_POST['idDir'],
         PDO::PARAM_STR);
         $ajouter->bindParam(':dir1', $_POST['dir1'],
         PDO::PARAM_STR);
         $ajouter->bindParam(':dir2', $_POST['dir2'],
         PDO::PARAM_STR);
         
         $ajouter->bindParam(':dir3', $_POST['dir3'],
         PDO::PARAM_STR);
         
         $ajouter->bindParam(':dir4', $_POST['dir4'],
         PDO::PARAM_STR);
         
         $ajouter->bindParam(':dir5', $_POST['dir5'],
         PDO::PARAM_STR);
         
         $ajouter->bindParam(':dir6', $_POST['dir6'],
         PDO::PARAM_STR);
        
         $ajouter->bindParam(':dir7', $_POST['dir7'],
         PDO::PARAM_STR);
         
         $ajouter->bindParam(':dir8', $_POST['dir8'],
         PDO::PARAM_STR);
   
         $ajouter->bindParam(':dir9', $_POST['dir9'],
         PDO::PARAM_STR);
   
         $ajouter->bindParam(':dir10', $_POST['dir10'],
         PDO::PARAM_STR);
         
         $ajouter = $ajouter->execute();
         return $ajouter; 
   
         
         }
         
         }
   
   /**
    * modifierI
    * UPDATE INGREDIENT METHOD
    * @return void
    */
   public function modifierI(){

      if(isset($_POST['action']) && $_POST['action']=="modifierI"){
      
      $modifier = $this->connect()->prepare('UPDATE ingredient SET
      Id_recette_ingredient = :id,
      srv = :srv,
      ing1_ingredient = :ing1,
      ing2_ingredient = :ing2,
      ing3_ingredient = :ing3,
      ing4_ingredient = :ing4,
      ing5_ingredient = :ing5,
      ing6_ingredient = :ing6,
      qty1 = :qty1,
      qty2 = :qty2,
      qty3 = :qty3,
      qty4 = :qty4,
      qty5 = :qty5,
      qty6 = :qty6
      WHERE Id_recette_ingredient =:id
      ');
      $modifier->bindParam(':id', $_POST['idIngredient'], PDO::PARAM_STR);
      $modifier->bindParam(':srv', $_POST['Service'], PDO::PARAM_STR);
      $modifier->bindParam(':ing1', $_POST['ingredient'], PDO::PARAM_STR);
      $modifier->bindParam(':ing2', $_POST['ingredient2'], PDO::PARAM_STR);
      $modifier->bindParam(':ing3', $_POST['ingredient3'], PDO::PARAM_STR);
      $modifier->bindParam(':ing4', $_POST['ingredient4'], PDO::PARAM_STR);
      $modifier->bindParam(':ing5', $_POST['ingredient5'], PDO::PARAM_STR);
      $modifier->bindParam(':ing6', $_POST['ingredient6'], PDO::PARAM_STR);
      $modifier->bindParam(':qty1', $_POST['Quantity'], PDO::PARAM_STR);
      $modifier->bindParam(':qty2', $_POST['Quantity2'], PDO::PARAM_STR);
      $modifier->bindParam(':qty3', $_POST['Quantity3'], PDO::PARAM_STR);
      $modifier->bindParam(':qty4', $_POST['Quantity4'], PDO::PARAM_STR);
      $modifier->bindParam(':qty5', $_POST['Quantity5'], PDO::PARAM_STR);
      $modifier->bindParam(':qty6', $_POST['Quantity6'], PDO::PARAM_STR);
      $modifier = $modifier->execute();
      return $modifier;
   }
 }
 
 /**
  * modifierD
  * UPTADE DIRECTIVE METHOD
  * @return void
  */
 public function modifierD(){

   if(isset($_POST['action']) && $_POST['action']=="modifierD"){
   
   $modifier = $this->connect()->prepare('UPDATE directive SET
   Id_recette_directive  = :id,
   dir1_directive = :dir1,
   dir2_directive = :dir2,
   dir3_directive = :dir3,
   dir4_directive = :dir4,
   dir5_directive = :dir5,
   dir6_directive = :dir6,
   dir7_directive = :dir7,
   dir8_directive = :dir8,
   dir9_directive = :dir9,
   dir10_directive = :dir10
   
   WHERE Id_recette_directive =:id
   ');
   $modifier->bindParam(':id', $_POST['idDirective'], PDO::PARAM_STR);
   $modifier->bindParam(':dir1', $_POST['dir1'], PDO::PARAM_STR);
   $modifier->bindParam(':dir2', $_POST['dir2'], PDO::PARAM_STR);
   $modifier->bindParam(':dir3', $_POST['dir3'], PDO::PARAM_STR);
   $modifier->bindParam(':dir4', $_POST['dir4'], PDO::PARAM_STR);
   $modifier->bindParam(':dir5', $_POST['dir5'], PDO::PARAM_STR);
   $modifier->bindParam(':dir6', $_POST['dir6'], PDO::PARAM_STR);
   $modifier->bindParam(':dir7', $_POST['dir7'], PDO::PARAM_STR);
   $modifier->bindParam(':dir8', $_POST['dir8'], PDO::PARAM_STR);
   $modifier->bindParam(':dir9', $_POST['dir9'], PDO::PARAM_STR);
   $modifier->bindParam(':dir10', $_POST['dir10'], PDO::PARAM_STR);

   $modifier = $modifier->execute();
   return $modifier;
}
}

/**
 * modifierR
 * UPDATE RECIPE METHOD
 * @return void
 */
public function modifierR(){

   if(isset($_POST['action']) && $_POST['action']=="modifierR"){
   
   $modifier = $this->connect()->prepare('UPDATE recette SET
   Id_recette   = :id,
   Name_recette = :namer,
   time_recette = :timer,
   number_recette = :num,
   level_recette = :lvl,
   cost_recette = :cost,
   description_recette = :descr,
   Id_Ingredient = :idi,
   img_recette = :img
 
   WHERE Id_recette =:id
   ');
   $modifier->bindParam(':id', $_POST['idRecette'], PDO::PARAM_STR);
   $modifier->bindParam(':namer', $_POST['name'], PDO::PARAM_STR);
   $modifier->bindParam(':timer', $_POST['time'], PDO::PARAM_STR);
   $modifier->bindParam(':num', $_POST['number'], PDO::PARAM_STR);
   $modifier->bindParam(':lvl', $_POST['level'], PDO::PARAM_STR);
   $modifier->bindParam(':cost', $_POST['cost'], PDO::PARAM_STR);
   $modifier->bindParam(':descr', $_POST['description'], PDO::PARAM_STR);
   $modifier->bindParam(':idi', $_POST['idIngredient'], PDO::PARAM_STR);
   $modifier->bindParam(':img', $_POST['imgrecette'], PDO::PARAM_STR);

   $modifier = $modifier->execute();
   return $modifier;
}
}

/**
 * supprimerI
 * DELETE INGREDIENT METHOD
 * @return void
 */
public function supprimerI(){
   if(isset($_POST['action']) && $_POST['action']=="supprimerI"){
   $supprimer = $this->connect()->prepare('DELETE FROM ingredient WHERE Id_recette_ingredient =:id');
            $supprimer->bindParam(':id', $_POST['idIngredient'], 
            PDO::PARAM_STR);
            $supprimer = $supprimer->execute();
            return $supprimer;
   }
}

/**
 * supprimerR
 * DELETE RECIPE METHOD
 * @return void
 */
public function supprimerR(){
   if(isset($_POST['action']) && $_POST['action']=="supprimerR"){
   $supprimer = $this->connect()->prepare('DELETE FROM recette WHERE Id_recette =:id');
            $supprimer->bindParam(':id', $_POST['idRecette'], 
            PDO::PARAM_STR);
            $supprimer = $supprimer->execute();
            return $supprimer;
   }
}

/**
 * supprimerD
 * DELETE DIRECTIVE METHOD
 * @return void
 */
public function supprimerD(){
   if(isset($_POST['action']) && $_POST['action']=="supprimerD"){
   $supprimer = $this->connect()->prepare('DELETE FROM directive WHERE Id_recette_directive =:id');
            $supprimer->bindParam(':id', $_POST['idDirective'], 
            PDO::PARAM_STR);
            $supprimer = $supprimer->execute();
            return $supprimer;
   }
}
}