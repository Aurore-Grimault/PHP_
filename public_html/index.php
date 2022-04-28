<?php session_start();
    if(isset($_SESSION['table'])) $table = $_SESSION['table']; 
?>

<!DOCTYPE html>
<html lang="fr">
    <?php include_once './includes/head.inc.html'; ?>
       
    <body>
        <?php include_once './includes/header.inc.html'; ?>

        <div class="container">
                <div class="row">
                    <nav class="col-md-3 mt-3">
                        <a class="btn btn-outline-secondary w-100" role="button" href="./index.php"> Home </a> 
                        <?php if(isset($table)) include_once './includes/ul.inc.php'; ?>
                    </nav>

                    <section class="col-md-9 mt-3">
        
                        <?php if (isset($_GET["add"])) {include_once './includes/form.inc.html';}

                            elseif (isset($_POST['enregistrer'])) {
                                $first_name = $_POST['first_name'];
                                $last_name = $_POST['last_name'];
                                $user_age = $_POST['user_age'];
                                $user_taille = $_POST['user_taille'];
                                $user_sex = $_POST['user_sex'];
                                $table = array(
                                    "first_name" => $first_name,
                                    "last_name" => $last_name,
                                    "age" => $user_age,
                                    "size" => $user_taille,
                                    "civility" => $user_sex,
                                );

                                $_SESSION["table"] = $table;
                                echo '<p class="alert-success text-center py-3"> Données sauvegardées </p>';
                            } 
                                                        
                            else {echo '<a class="btn btn-primary" role="button" href="./index.php?add"> Ajouter des données </a>';
                            } 
                        ?> 
                         
                    </section>

                </div>   
       
        </div>
        
        <footer id="pied_de_page">
            <?php include_once './includes/footer.inc.html'; ?>
        </footer>
        
    </body>
         
   
</html>