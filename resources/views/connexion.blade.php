
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <h1><center><u>Formulaire de connexion</u></center></h1>
    </br>
    <form action="/connexion" method="post" class="section">

        <div align="center">
            <label class="label">Adresse e-mail</label>
            <div class="control">
                <input class="input-group-text" type="email" name="email" value="">
            </div>
        </div>

        <div align="center">
            <label class="label">Mot de passe</label>
            <div class="control">
                <input class="input-group-text" type="password" name="password">
            </div>
        </div>
    </br>
        <div align="center">
            <div class="control">
                <a href="/pagePrincipale" class="btn btn-outline-info">Connexion</a>
                <a href="/inscription" class="btn btn-outline-info">S'inscrire</a>
                {{-- <button class="btn btn-outline-info" type="submit" formaction="/inscription">S'inscrire</button> --}}
            </div>
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
