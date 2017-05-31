<html>

  <head>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#btn").click(function(){
                $("ol").append(" <li>Ajouter un capteur</li>");
                });
            });
        </script>
      
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="definitiondescapteurs.css" />
    <title>MySmartHouse</title>
      
      
  </head>

    <body>

    <div class="topnav"><hr color="gold">
            <img src="img/logo.png" class="logo" alt="logo"><br>
            <ul>
            <a class="active" href="#fr/en">Fr/En</a>
            <a href="Page%20d'accueil.html">Accueil</a>
            <a href="Qui%20sommes%20nous.html">Qui sommes nous ?</a>
            <a href="Contact.html">Contact</a>
            <a href="FAQ.html">FAQ</a>
            </ul>
        </div>

            <h1 style="text-align:center">DEFINISSEZ VOS CAPTEURS</h1>
        
        
        <fieldset>
        
                <h2>
                    Pièce 1 :
                </h2>
                
                <br>

                <form action="/action_page.php">Numéro des capteurs de température :
                    <input type="number">
                    <button id="btn">Ajouter un capteur</button>
                </form>
            
                <br>
            
                <form action="/action_page.php">Nombre de capteurs de luminosité :
                    <input type="number" name="quantity" min="0" max="50">
                    <input type="submit">
                </form>
            
                <br>
            
                <form action="/action_page.php">Nombre de caméras :
                    <input type="number" name="quantity" min="0" max="50">
                    <input type="submit">
                </form>
            
                <br>
            
                <form action="/action_page.php">Nombre de capteurs d'humidité :
                    <input type="number" name="quantity" min="0" max="50">
                    <input type="submit">
                </form>
            
                <br>
            
                <form action="/action_page.php">Nombre de détecteur de mouvements :
                    <input type="number" name="quantity" min="0" max="50">
                    <input type="submit">
                </form>
            
            
                <form>
                    <input type="button" value="Annuler" onclick="history.go(-1)" />
                </form>
                    
                    <a href="D%C3%A9finition%20des%20capteurs.html"><input type="submit" value="Ajouter une pièce"/></a>
                    <a href="encore à faire"><input type="submit" value="Continuer"/></a>
            </fieldset>