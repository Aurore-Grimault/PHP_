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
                        <a class="btn btn-outline-secondary w-50" role="button" href="./index.php"> Home </a> 
                        <?php if(isset($table)) include_once './includes/ul.inc.php'; ?>
                    </nav>

                    <section class="col-md-9 mt-3">
                        <a class="btn btn-primary" role="button" href="index.php?add"> Ajouter des données </a> 
                        <?php echo $_GET["add"]?>
                        <?php if (isset($_GET["add"])) include_once './includes/form.inc.html' ; ?> 
                    </section>

                </div>   
       
        </div>
    
        
        <footer id="pied_de_page">
            <?php include_once './includes/footer.inc.html'; ?>
        </footer>
        
    </body>
         
   
</html>