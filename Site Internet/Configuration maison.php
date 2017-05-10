<html>

  <head>

    <meta charset="UTF-8" />
    <link rel="stylesheet" href="main.css" />
    <title>MySmartHouse</title>

  </head>

    <body>

        <div class="topnav">
            <a class="active" href="#fr/en">Fr/En</a>
            <a href="Page%20d'accueil.html">Accueil</a>
            <a href="Qui%20sommes%20nous.html">Qui sommes nous ?</a>
            <a href="Contact.html">Contact</a>
            <a href="FAQ.html">FAQ</a>
        </div>


        
         
        <div class="configurationmaison">
               <img src= "logomysmarthousepetit.png" class="logoentreprise" alt="Logo entreprise"  />
            <h1>Configuration de la maison</h1>
        </div>
        
        <fieldset>
                <legend>Configuration de la maison</legend>
        
                <p>
                    <label for="size">Superficie :
                    </label>
                    <input type="phone" name="size" id="size" placeholder="142m2" autofocus required />
                </p>
                
                <p>
                    <label for="number of total rooms">Nombre de pièces :
                    </label>
                    <input type="phone" name="number of total rooms" id="number of total rooms" required />
                </p>
            
                <p>
                    <label for="number of rooms">Nombre de chambres :
                    </label>
                    <input type="phone" name="number of rooms" id="number of rooms" required />
                </p>
            
                <p>
                    <label for="number of kitchens">Nombre de cuisines :
                    </label>
                    <input type="phone" name="number of kitchens" id="number of kitchens" required />
                </p>
            
                <p>
                    <label for="number of living rooms">Nombre de salons :
                    </label>
                    <input type="phone" name="number of living rooms" id="number of living rooms" required />
                </p>
                
                <p>
                    <label for="number of offices">Nombre de bureaux :
                    </label>
                    <input type="phone" name="number of offices" id="number of offices" required />
                </p>
                
                <p>
                    <label for="number of bathrooms">Nombre de salles de bain :
                    </label>
                    <input type="phone" name="number of bathrooms" id="number of bathrooms" required />
                </p>
            
                <p>
                    <label for="number of garages">Nombre de garages :
                    </label>
                    <input type="phone" name="number of garages" id="number of garages" required />
                </p>
            
                <form>
                    <input type="button" value="Annuler" onclick="history.go(-1)" />
                    </form>
                    
                    <a href="Configuration%20maison.html"><input type="submit" value="Continuer"/></a>
            </fieldset>