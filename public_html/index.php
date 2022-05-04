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
        
                        <?php if (isset($_GET["add"])) {include_once './includes/form.inc.html';
                            }
                       

                            elseif (isset($_POST['enregistrer_données'])) {
                                $first_name = $_POST['first_name'];
                                $last_name = $_POST['last_name'];
                                $user_age = $_POST['user_age'];
                                $user_taille = $_POST['user_taille'];
                                $user_sex = $_POST['user_sex'];
                                $table = array(
                                    'first_name' => $first_name,
                                    'last_name' => $last_name,
                                    'age' => $user_age,
                                    'size' => $user_taille,
                                    'civility' => $user_sex,
                                );

                                $_SESSION['table'] = $table;
                                echo '<p class="alert-success text-center py-3"> Données sauvegardées </p>';
                            } 

                            // <!-- //Débogage -->
                             // <!-- //La fonction echo est pratique mais insuffisante dans certains cas. Elle ne peut pas afficher un tableau ni les caractéristiques d'un objet. Pour ça, "print_r" est plus avancé. Cette fonction affichera la valeur pour un entier, une chaine ou un réel et vous présentera de façon structurée un tableau ou un objet. 
                            // L'élément HTML <pre> représente du texte préformaté, généralement écrit avec une police à chasse fixe. Le texte est affiché tel quel, les espaces utilisés dans le document HTML seront retranscrits.-->

                            elseif (isset($_GET['debugging'])) {
                                echo '<h2 class=text-center> Débogage </h2> <br>';
                                echo '<h3 class="fs-6">===> Lecture du tableau à l\'aide de la fonction print_r()</h3><br>';
                                print "<pre>";
                                print_r(array_filter($table));
                                print "</pre>";
                            }
                            
                            //Supprimer les données
                            elseif(isset($_GET['del'])) {session_destroy();
                                echo '<p class="alert-success text-center py-3"> Données supprimées </p>';
                            }
                                
                            //concaténation
                            elseif (isset($_GET['concatenation'])) {
                                echo '<h2 class=text-center> Concaténation </h2> <br>';
                                echo '<h3 class="fs-6">===> Construction d\'une phrase avec le contenu du tableau </h3>';
                                echo '<p>';
                                $civility=($table['civility'] == 'femme') ? 'Mme ' : 'Mr ';
                                echo $civility .$table ['first_name']. ' ' .$table ['last_name'];
                                echo '<br> J\'ai '.$table['age'].' ans et je mesure '.$table['size'].' mètres.','</p>', '<br>';
                     
                                echo '<h3 class="fs-6">===> Construction d\'une phrase après MAJ du tableau </h3>';
                                echo '<p>';
                                $civility=($table['civility'] == 'femme') ? 'Mme ' : 'Mr ';
                                echo $civility .$table ['first_name']= ucfirst($table['first_name']). ' ' .$table ['last_name']= strtoupper($table ['last_name']);
                                echo '<br> J\'ai '.$table['age'].' ans et je mesure '.$table['size'].' mètres.','</p>','<br>';

                                echo '<h3 class="fs-6">===> Affichage d\'une virgule à la place du point pour la taille</h3>';
                                echo '<p>';
                                $civility=($table['civility'] == 'femme') ? 'Mme ' : 'Mr ';
                                echo $civility .$table ['first_name'];
                                echo '<br> J\'ai '.$table['age'].' ans et je mesure '.$table['size']= str_replace('.', ',', $table['size']).' mètres.','</p>', '<br>';
                            }

                            //Boucle
                            elseif (isset($_GET['loop'])) {
                                echo '<h2 class=text-center> Boucle </h2> <br>';
                                echo '<h3 class="fs-6">===> Lecture du tableau à l\'aide d\'une boucle foreach</h3>';
                                $num=0;
                                foreach ($table as $cle => $valeur) {
                                    echo 'A la ligne n°' . $num . ' correspond la clé ' . $cle . ' et contient ' . $valeur . '<br>'; $num ++ ;
                                    
                                }
                                echo '<br>';
                     
                            }

                            //Fonction
                            elseif (isset($_GET['function'])) {
                                echo '<h2 class=text-center> Fonction </h2> <br>';
                                echo '<h3 class="fs-6">===> J\'utilise ma fonction readTable()</h3> ';

                                function readtable() {
                                    $table = $_SESSION['table']; 
                                    $num=0;
                                    foreach ($table as $cle => $valeur) {
                                        echo 'A la ligne n°' . $num . ' correspond la clé ' . $cle . ' et contient ' . $valeur . '<br>'; $num ++ ;
                                    }
                                    echo '<br>';
                            
                                }
                                readtable(); //si pas fermée le texte n'apparaît pas.
                            }

                            else {echo '<a class="btn btn-primary" role="button" href="./index.php?add">  Ajouter des données </a>';
                            } 
                            
                        ?>

                        <!-- //2ème bouton -->
                        <?php echo '<a class="btn btn-secondary" type="submit" role="button" href="./index.php?addmore">Ajouter plus de données</a>';
                        ?>

                        <?php if (isset($_GET["addmore"])) {echo '<h2 class=text-center> Ajouter plus de données </h2>';include_once './includes/form2.inc.php';}
                         
                            elseif (isset($_POST['enregistrer_données2'])) {
                                $first_name = $_POST['first_name'];
                                $last_name = $_POST['last_name'];
                                $user_age = $_POST['user_age'];
                                $user_taille = $_POST['user_taille'];
                                $user_sex = $_POST['user_sex'];
                                $html = $_POST['html'];
                                $css = $_POST['css'];
                                $Javascript = $_POST['Javascript'];
                                $php = $_POST['php'];
                                $MySQL = $_POST['MySQL'];
                                $Bootstrap = $_POST['Bootstrap'];
                                $Symfony = $_POST['Symfony'];
                                $React = $_POST['React'];
                                $color = $_POST['color'];
                                $birthday = $_POST['birthday'];
                                $picture = $_FILES['picture'];
                                            
                                $table = array(
                                    'first_name' => $first_name,
                                    'last_name' => $last_name,
                                    'age' => $user_age,
                                    'size' => $user_taille,
                                    'civility' => $user_sex,
                                    'connnaissances' => $html, $css, $Javascript, $php, $MySQL, $Bootstrap, $Symfony, $React,
                                    'color' => $color,
                                    'birthday' => $birthday,
                                    'picture' => $_FILES,
                                );


                                if ($_FILES['picture']['size'] > 2000000) {
                                    echo '<p class="alert-danger text-center py-3"> La taille de l\'image doit être inférieure à 2Mo </p>';
                                    
                                    if ($_FILES['picture']['type'] != 'image/png' && $_FILES['picture']['type'] != 'image/jpeg' && $_FILES['picture']['type'] != 'image/jpg') {
                                        echo '<p class="alert-danger text-center py-3"> Extension ' .$_FILES['picture']['type']  .' non prise en charge </p>';
                                    } 
                     
                                    if(isset($_FILES['picture'])) {
                                        $dossier = './upload';
                                        $fichier = $_FILES['picture']['name'];
                                    }

                                    if (move_uploaded_file($_FILES['picture']['tmp_name'], $dossier . $fichier)){ 
                                        echo '<p class="alert-success text-center py-3">Téléchargement effectué avec succès !</p>';
                                    } else {                                        
                                        echo '<p class="alert-danger text-center py-3"> Aucun fichier n\'a été téléchargé </p>';
                                    }

                                 
                                }  
                                else { $_SESSION['table'] = $table;
                                        echo '<p class="alert-success text-center py-3"> Données sauvegardées </p>';
                                }    
                                            
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