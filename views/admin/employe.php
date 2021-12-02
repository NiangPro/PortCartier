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
                        <input type="text" name="prenom" value="<?= get_input('prenom')?>"  class="form-control" placeholder="" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text" name="nom" value="<?= get_input('nom')?>"  class="form-control" placeholder="" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Telephone</label>
                        <input type="text" name="tel" value="<?= get_input('tel')?>"  class="form-control" placeholder="" required pattern="^[0-9]+$">
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Adresse</label>
                        <input type="text" name="adresse" value="<?= get_input('adresse')?>"  class="form-control" placeholder="" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Ville</label>
                        <input type="text" name="ville" value="<?= get_input('ville')?>"  class="form-control" placeholder="" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Code Postal</label>
                        <input type="text" name="codePostal" value="<?= get_input('codePostal')?>"  class="form-control" placeholder="" required pattern="^[0-9]{5}$">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Province</label>
                        <input type="text" name="province" value="<?= get_input('province')?>"  class="form-control" placeholder="" required>
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
                        <input type="text" name="code" value="<?= get_input('code')?>"  class="form-control" placeholder="" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Courriel</label>
                        <input type="email" name="courriel" value="<?= get_input('courriel')?>"  class="form-control" placeholder="" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Mot de passe</label>
                        <input type="password" name="mdp"  class="form-control" placeholder="" required>
                    </div>
                </div>
            </div>
                
            <button type="submit" class="btn btn-success btm-sm btn-rounded" name="addEmploye">Ajouter</button>
        </form>
    </div>
</div>
    <!-- liste des employes -->

<div class="card">
    <div class="card-body">
        <h4 class="card-title">Liste des employes et admins</h4>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>code</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Telephone</th>
                    <th>Adresse</th>
                    <th>Courriel</th>
                    <th>Type</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($employes as $em): ?>
                        <tr>
                            <td><?= $em->code ?></td>
                            <td><?= $em->prenom ?></td>
                            <td><?= $em->nom ?></td>
                            <td><?= $em->tel ?></td>
                            <td><?= $em->adresse ?></td>
                            <td><?= $em->courriel ?></td>
                            <td><?= $em->type ?></td>
                            
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
    


