
<!-- insertion d'un employe -->
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Formulaire d'ajout document</h4>
        <hr>
        <form action="" method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Code du document</label>
                        <input type="text" name="codeDoc" value="<?= get_input('codeDoc')?>"  class="form-control" placeholder="" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Titre</label>
                        <input type="text" name="titre" value="<?= get_input('titre')?>"  class="form-control" placeholder="" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Auteur</label>
                        <input type="text" name="auteur" value="<?= get_input('auteur')?>"  class="form-control" placeholder="" required>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Année de publication</label>
                        <input type="number" min="1900" max="2022" step="1" value="2001" name="anneePub" value="<?= get_input('anneePub')?>"  class="form-control" placeholder="" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Catégorie</label>
                        <select class="form-control" name="categorie" required>
                        <option value="Roman">Roman</option>
                        <option value="Bande dessinée">Bande dessinée</option>
                        <option value="Jeux vidéo">Jeux vidéo</option>
                        <option value="DVD">DVD</option>
                        <option value="CD">CD</option>
                        <option value="Blu-ray">Blu-ray</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Type</label>
                        <select class="form-control" name="type" required>
                        <option value="Enfant">Enfant</option>
                        <option value="Ado">Ado</option>
                        <option value="Adulte">Adulte</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Genre</label>
                        <select class="form-control" name="genre" required>
                            <option value="Comédie">Comédie</option>
                            <option value="Drame">Drame</option>
                            <option value="Horreur">Horreur</option>
                            <option value="Sci-fi">Sci-fi</option>
                            <option value="Documentaire">Documentaire</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="row">
                
                <div class="col-md-8">
                    <div class="form-group">
                      <label for="">Description</label>
                      <textarea class="form-control" name="description"  rows="1"><?= nl2br(get_input('description')) ?></textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">ISBN (<span class="text-danger">Obligatoire pour Roman</span>)</label>
                        <input type="text" name="isbn" value="<?= get_input('isbn')?>"  class="form-control" placeholder="">
                    </div>
                </div>
            </div>
                
            <button type="submit" class="btn btn-success btm-sm btn-rounded" name="addDocument">Ajouter</button>
        </form>
    </div>
</div>
    <!-- liste des employes -->

<div class="card">
    <div class="card-body">
        <h4 class="card-title">Liste des documents</h4>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>code</th>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Année</th>
                    <th>Catégorie</th>
                    <th>Type</th>
                    <th>Genre</th>
                    <th>Description</th>
                    <th>ISBN</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($documents as $doc): ?>
                        <tr>
                            <td><?= $doc->codeDoc ?></td>
                            <td><?= $doc->titre ?></td>
                            <td><?= $doc->auteur ?></td>
                            <td><?= $doc->anneePub ?></td>
                            <td><?= $doc->categorie ?></td>
                            <td><?= $doc->type ?></td>
                            <td><?= $doc->genre ?></td>
                            <td><?= $doc->description ?></td>
                            <td><?= $doc->isbn ?></td>
                            
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
    
