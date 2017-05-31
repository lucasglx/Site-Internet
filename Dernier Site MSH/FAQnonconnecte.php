<html>

  <head>

    <meta charset="UTF-8" />
    <link rel="stylesheet" href="FAQ.css" />
    <title>Foire aux questions</title>

  </head>

    <body>

        <div class="topnav"><hr color="gold">
            <img src="img/logo.png" class="logo" alt="logo"><br>
            <ul>
            <a class="active" href="#fr/en">Fr/En</a>
            <a href="Page%20d'accueil.php">Accueil</a>
            <a href="Qui%20sommes%20nous%20nonconnecte.php">Qui sommes nous ?</a>
            <a href="Contactnonconnecte.php">Contact</a>
            <a href="FAQnonconnecte.php">FAQ</a>
            </ul>
        </div>
        
        <div class="foireauxquestions">
            <h1 style="text-align: center">FAQ</h1><br>
        </div>
            
        <fieldset>
        <dl>
            <dt><B><p style="font-size:20">Question 1</B> : Comment retrouver l'identifiant et le mot de passe de mon compte ?</p></dt>
            <dd>&hellip; blablabla &hellip;</dd>
            <dt><B><p style="font-size:20">Question 2</B> : Comment installer mes capteurs?</p></dt>
            <dd>&hellip; blablabla &hellip;</dd>
            <dt><B><p style="font-size:20">Question 3</B> : Comment trouver les numéros de série de mes capteurs?</p></dt>
            <dd>&hellip; blablabla &hellip;</dd>
            <dt><B><p style="font-size:20">Question 4</B> : Où tester les produits MySmartHouse?</p></dt>
            <dd>&hellip; blablabla &hellip;</dd></p>
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