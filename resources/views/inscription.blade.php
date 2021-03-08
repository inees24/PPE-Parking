<html>
   <head>
      <title>Page d'inscription</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2><u>Inscription</u></h2>
         <br /><br />
<<<<<<< Updated upstream
         <form action="" method="post" class="section">
=======
<<<<<<< HEAD
         <form action="/inscriptionexe" method="post" class="section">
            @csrf

=======
         <form action="" method="post" class="section">
>>>>>>> c91371c73d9628172e4197edb6205b8fbfdacaa2
>>>>>>> Stashed changes
            <div align="center">
                <label class="label">Nom :</label>
                <div class="control">
                    <input class="input-group-text" type="Nom" name="Nom" value="">
                </div>
            </div>
            <div align="center">
                <label class="label">Prenom :</label>
                <div class="control">
                    <input class="input-group-text" type="Prenom" name="Prenom" value="">
                </div>
            </div>
            <div align="center">
                <label class="label">Numéro de téléphone :</label>
                <div class="control">
                    <input class="input-group-text" type="Tel" name="Tel" value="">
                </div>
            </div>
            <div align="center">
                <label class="label">Adresse :</label>
                <div class="control">
                    <input class="input-group-text" type="Adresse" name="Adresse" value="">
                </div>
            </div>
            <div align="center">
                <label class="label">Mail :</label>
                <div class="control">
                    <input class="input-group-text" type="Mail" name="Mail">
                </div>

                    <p class="help is-danger"></p>
            </div>
            <div align="center">
                <label class="label">Confirmation du mail :</label>
                <div class="control">
                    <input class="input-group-text" type="Mail2" name="Mail2" value="">
                </div>
            </div>

            <div align="center">
                <label class="label">Mot de passe :</label>
                <div class="control">
                    <input class="input-group-text" type="mdp" name="mdp">
                </div>

                    <p class="help is-danger"></p>
            </div>
            <div align="center">
                <label class="label">Confirmation du mot de passe :</label>
                <div class="control">
                    <input class="input-group-text" type="mdp2" name="mdp2" value="">
                </div>
            </div>

        </br>
            <div align="center">
                <div class="control">

                    <button class="btn btn-outline-info" type="submit">Je m'inscris</button>
                </div>
            </div>

         </form>
		 <?php
			if(isset($erreur))
			{
			echo '<font color ="red">' .$erreur. '</font>';
			}
		 ?>
      </div>
   </body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
