<form method="post" action="index.php">
    
    <p class="h1 text-center">Ajouter plus de données</p>


    <div class="row">
        <section class="card col-md-7 mx-auto my-1">    
            <div class="form-group">
                <label for="inputLarge" class="form-label mt-4"></label>

                <div class="form-floating col-sm-4">
                    <input class="form-control" type="text" placeholder="Prénom" name="first_name" id="first_name" placeholder="choisir" required> </input>
                    <label for="first_name">Prénom</label>
                </div>
                <br>

                <div class="form-floating col-sm-4">
                <input class="form-control" type="text" placeholder="Nom" name="last_name" id="last_name" placeholder="choisir" required> </input>
                    <label for="second_name">Nom</label>
                </div>

                <div class="col-sm-4">
                    <label for="Age" class="form-label mt-4">Âge (18 à 70 ans)</label>
                </div>
                <div class="col-sm-4">
                    <input type="number" class="form-control" name="user_age" id="user_age" min="18" max="70" placeholder="choisir" required> </input>
                    
                </div>
                <br>

                <div class="col-sm-4">
                    <div class="input-group-text ">
                        <label for="formFile" class="form-label">Taille (1,26m à 3m) </label>  
                        <input id="meters" class="form-control" type="number" name="user_taille" step="0.01" min="1.26" max="3.00" placeholder="choisir" required> </input>
                        <div class="input-group-text">m</div>
                    </div>
                        
                </div>
                <br>

                <div class="col-sm-4"> 
                        <input type="radio" value="femme" class="form-check-input" name="user_sex" required> </input>
                        <label class="form-check-label" for="Femme" >Femme</label>
                   
                        <input type="radio" value="homme" class="form-check-input" name="user_sex" required> </input>
                        <label class="form-check-label" for="Homme" >Homme</label>
                </div>
                <br>
            </div>
        </section>



        <section class="card col-md-4 mx-auto my-1">
            <p>Connaissances</p>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    HTML
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                <label class="form-check-label" for="flexCheckChecked">
                    CSS
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                <label class="form-check-label" for="flexCheckChecked">
                    Javascript
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                <label class="form-check-label" for="flexCheckChecked">
                    PHP
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                <label class="form-check-label" for="flexCheckChecked">
                    MySQL
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                <label class="form-check-label" for="flexCheckChecked">
                    Bootstrap
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                <label class="form-check-label" for="flexCheckChecked">
                    Symfony
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                <label class="form-check-label" for="flexCheckChecked">
                    React
                </label>
            </div>
            <br>

            <div>
                <label for="color">Couleur préférée</label>
                <input type="color" id="color"></input>
            </div>
            <br>

            <div>
                <label for="date"> Date de naissance</label>
                <input type="date" id="date"></input>
            </div>

        </section>


        <section class="card col-md-11 mx-auto my-1">
        </section>

    <button name="enregistrer_données" type="submit" class="btn btn-primary">Enregistrer les données </button>

</form>







