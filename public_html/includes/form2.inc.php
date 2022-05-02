<form method="post" action="index.php">
    
    <div class="row">
        <section class="card col-md-7 mx-auto my-1">    
            <div class="form-group">
                <label for="inputLarge" class="form-label mt-4"></label>

                <div class="form-floating">
                    <input class="form-control" type="text" placeholder="Prénom" name="first_name" id="first_name" placeholder="choisir" required> </input>
                    <label for="first_name">Prénom</label>
                </div>
                <br>

                <div class="form-floating">
                <input class="form-control" type="text" placeholder="Nom" name="last_name" id="last_name" placeholder="choisir" required> </input>
                    <label for="second_name">Nom</label>
                </div>

                <div class="form-group">
                    <label for="Age" class="form-label mt-4">Âge (18 à 70 ans)</label>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="user_age" id="user_age" min="18" max="70" placeholder="choisir" required> </input>
                    
                </div>
                <br>

                <div class="form-group">
                    <div class="input-group-text ">
                        <label for="formFile" class="form-label">Taille (1,26m à 3m) </label>  
                        <input id="meters" class="form-control" type="number" name="user_taille" step="0.01" min="1.26" max="3.00" placeholder="choisir" required> </input>
                        <div class="input-group-text">m</div>
                    </div>
                        
                </div>
                <br>

                <div class="form-group"> 
                        <input type="radio" value="femme" class="form-check-input" name="user_sex" required> </input>
                        <label class="form-check-label" for="Femme" >Femme</label>
                   
                        <input type="radio" value="homme" class="form-check-input" name="user_sex" required> </input>
                        <label class="form-check-label" for="Homme" >Homme</label>
                </div>
                <br>
            </div>
        </section>



        <section class="card col-md-4 mx-auto my-1">
            <div>Connaissances</div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="html">
                <label class="form-check-label" for="flexCheckDefault">
                    HTML5
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="" name="css">
                <label class="form-check-label" for="flexCheckChecked">
                    CSS3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="" name="Javascript">
                <label class="form-check-label" for="flexCheckChecked">
                    JavaScript
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="" name="php">
                <label class="form-check-label" for="flexCheckChecked">
                    PHP
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="" name="MySQL">
                <label class="form-check-label" for="flexCheckChecked">
                    MySQL
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="" name="Bootsrap">
                <label class="form-check-label" for="flexCheckChecked">
                    Bootstrap
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="" name="Symfony">
                <label class="form-check-label" for="flexCheckChecked">
                    Symfony
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="" name="React">
                <label class="form-check-label" for="flexCheckChecked">
                    React
                </label>
            </div>
            <br>

            <div>
                <label for="color">Couleur préférée</label>
                <br>
                <input type="color" id="color" name="color" require></input>
            </div>
            <br>

            <div>
                <label for="date"> Date de naissance</label>
                <br>
                <input type="date" id="date" name="birthday" require></input>
            </div>

        </section>

        <section class="card col-md-11 mx-auto my-1">
                            
                <!-- <input type="hidden" name="MAX_FILE_SIZE" value="20000" /> </input> -->
                <label for="formFile" class="form-label">joindre une image (jpg ou png)</label>
                <input class="form-control" type="file" id="formFile" name="picture">
                <input type="hidden" name="picture" value="20000" title="Permitted bytes per file." />
             

               
        </section>

    </div>  

    <button name="enregistrer_données2" type="submit" class="btn btn-primary">Enregistrer les données </button>

</form>







