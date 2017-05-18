<html>

  <head>

    <meta charset="UTF-8" />
    <link rel="stylesheet" href="main.css" />
    <title>Foire aux questions</title>

  </head>

    <body>

        <div class="topnav">
            <a class="active" href="#fr/en">Fr/En</a>
            <a href="Page%20d'accueil.php">Accueil</a>
            <a href="Qui%20sommes%20nous%20nonconnecte.php">Qui sommes nous ?</a>
            <a href="Contactnonconnecte.php">Contact</a>
            <a href="FAQnonconnecte.php">FAQ</a>
        </div>
        
        <div class="foireauxquestions">
            <p><img src= "img/logomysmarthousepetit.png" class="logoentreprisefaq" alt="Logo entreprise"  /></p>
            <h1>FAQ</h1>
        </div>
            
        <fieldset>
                <legend>Foire aux questions</legend>
        

        <dl>
            <dt>Question 1 : Comment retrouver l'identifiant et le mot de passe de mon compte ?</dt>
            <dd>&hellip; blablabla &hellip;</dd>
            <dt>Question 2 : Comment installer mes capteurs?</dt>
            <dd>&hellip; blablabla &hellip;</dd>
            <dt>Question 3 : Comment trouver les numéros de série de mes capteurs?</dt>
            <dd>&hellip; blablabla &hellip;</dd>
            <dt>Question 4 : Où tester les produits MySmartHouse?</dt>
            <dd>&hellip; blablabla &hellip;</dd>
        </dl>


        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
        <script type="text/javascript">

        $(document).ready(function() {

            $("dd").hide();
            $("dt").css("cursor", "pointer");
            $("dt").click(function() {
        
            if($(this).next().is(":visible") == false) {
                $("dd").slideUp();
                $(this).next().slideDown();
            }
            });
        });

    </script>
        </fieldset>
    </body>
</html>