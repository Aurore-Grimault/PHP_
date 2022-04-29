<?php session_start();
    if(isset($_SESSION['table'])) $table = $_SESSION['table']; 
?>

<!DOCTYPE html>
<html lang="fr">
    <?php include_once './includes/head.inc.html'; 
    ?>
       
    <body>
        <?php include_once './includes/header.inc.html'; 
        ?>

        <div class="container">
                <div class="row">
                    <nav class="col-md-3 mt-3">
                        <a class="btn btn-outline-secondary w-100" role="button" href="./index.php"> Home </a> 
                        <?php if(isset($table)) include_once './includes/ul.inc.php'; 
                        ?>
                    </nav>

                    <section class="col-md-9 mt-3">
        
                        <?php if (isset($_GET["add"])) {include_once './includes/form.inc.html';}

                            elseif (isset($_POST['enregistrer_données'])) {
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

                                $_SESSION['table'] = $table;
                                echo '<p class="alert-success text-center py-3"> Données sauvegardées </p>';
                            } 
                                                        
                            else {echo '<a class="btn btn-primary" role="button" href="./index.php?add"> Ajouter des données </a>';
                            } 
                        ?> 

                        <?php if (isset($_GET['debugging'])) {
                                echo '<h2 class=text-center> Débogage </h2> <br>';
                                echo '<h3 class="fs-6">===> Lecture du tableau à l\'aide de la fonction print_r</h3><br>';
                                print "<pre>";
                                print_r($table);
                                print "</pre>";
                            }
                            
                            elseif(isset($_GET['del'])) {session_destroy();
                                echo '<p class="alert-success text-center py-3"> Données supprimées </p>';
                            }

                            elseif (isset($_GET['concatenation'])) {
                                echo '<h2 class=text-center> Concaténation </h2> <br>';
                                echo '<h3 class="fs-6">===> Construction d\'une phrase avec le contenu du tableau </h3><br>';
                                echo $table ['civility'];
                                echo $table ['first_name'];
                                echo $table ['last_name'];
                                echo $table ['age'];
                                echo $table ['size'];

                                // echo '<p>';
                                // echo ($table['civility'] == 'women') ? 'Mme ' : 'Mr ';
                                // echo $table['first_name'].' '.$table['last_name'];
                                // echo '<br />J\'ai '.$table['age'].' ans et je mesure '.$table['size'].'m.</p>';
                                
                                echo '<h3 class="fs-6">===> Construction d\'une phrase après MAJ du tableau </h3><br>';
                                echo $table ['civility'];
                                echo $table ['first_name'] = ucfirst($table['first_name']);
                                echo $table ['last_name'] = strtoupper($table ['last_name']);
                                echo $table ['age'];
                                echo $table ['size'];

                                echo '<h3 class="fs-6">===> Affichage d\'une virgule à la place du point pour la taille</h3><br>';
                                echo $table ['civility'];
                                echo $table ['first_name'];
                                echo $table ['last_name'];
                                echo $table ['age'];
                                echo $table['size'] = str_replace('.', ',', $table['size']);
                            }

                            elseif (isset($_GET['loop'])) {
                                echo '<h2 class=text-center> Boucle </h2> <br>';
                                echo '<h3 class="fs-6">===> Lecture du tableau à l\'aide d\'une boucle foreach</h3><br>';

                                foreach ($table as $cle => $valeur) {
                                echo '<div>La clé </div>' . $cle . ' contient la valeur ' . $valeur . "\n";
                                }

                            }
                      
                            elseif (isset($_GET['function'])) {
                                echo '<h2 class=text-center> Fonction </h2> <br>';
                                echo '<h3 class="fs-6">===> J\'utilise ma fonction readTable()</h3><br>';

                                function readtable() {
                                    $table = $_SESSION['table']; 
                                    foreach ($table as $cle => $valeur) {
                                    echo 'La clé ' . $cle . ' contient la valeur ' . $valeur . "\n";
                                    }
                                }
                                readtable();
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