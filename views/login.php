<<<<<<< HEAD
<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="verification.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
    </body>
</html>
=======
<?php require_once("views/includes/_errors.php") ?>
<div class="container col-md-3 mt-5 pt-5">
    <div class="card">
        <div class="card-body">
            <h3 class="text-center pb-3">Connexion</h3>
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Code</label>
                    <input type="text" name="code" id="" class="form-control" placeholder="Entrer le code" required>
                </div>
                <div class="form-group">
                    <label for="">Mot de passe</label>
                    <input type="password" name="mdp" id="" class="form-control" placeholder="Entrer le mot de passe" required>
                </div>
                <button name="login" class="btn btn-outline-success btn-sm btn-rounded">Se connecter</button>
            </form>
        </div>
    </div>
    
</div>

>>>>>>> niangpro
