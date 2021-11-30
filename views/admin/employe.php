<!-- insertion d'un employe -->
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Formulaire d'ajout employé</h4>
        <hr>
        <form action="" method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Prenom</label>
                        <input type="text" name="prenom"  class="form-control" placeholder="" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text" name="nom"  class="form-control" placeholder="" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Telephone</label>
                        <input type="text" name="tel"  class="form-control" placeholder="" required pattern="^[0-9]+$">
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Adresse</label>
                        <input type="text" name="adresse"  class="form-control" placeholder="" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Ville</label>
                        <input type="text" name="ville"  class="form-control" placeholder="" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Code Postal</label>
                        <input type="text" name="codePostal"  class="form-control" placeholder="" required pattern="^[0-9]{5}$">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Province</label>
                        <input type="text" name="province"  class="form-control" placeholder="" required>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Type</label>
                        <select class="form-control" name="type" required>
                        <option value="employe">employe</option>
                        <option value="admin">admin</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Code Employé</label>
                        <input type="text" name="code"  class="form-control" placeholder="" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Courriel</label>
                        <input type="email" name="courriel"  class="form-control" placeholder="" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Mot de passe</label>
                        <input type="password" name="mdp"  class="form-control" placeholder="" required>
                    </div>
                </div>
            </div>
                
            <button class="btn btn-success btm-sm btn-rounded" name="ajouter">Ajouter</button>
        </form>
    </div>
</div>
    <!-- liste des employes -->

<div class="card">
    <div class="card-body">
        <h4 class="card-title">Liste des employes et admins</h4>
        <hr>
    </div>
</div>
    


