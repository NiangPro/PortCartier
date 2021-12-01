<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center pb-3">Faire un prêt</h3>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Code Membre</label>
                        <input type="text" name="code" id="" class="form-control" placeholder="Entrez votre code" required>
                    </div>
                    <div class="form-group">
                        <label for="">Code Document</label>
                        <input type="text" name="code" id="" class="form-control" placeholder="Entre le code document" required>
                    </div>
                    <div class="form-group">
                        <label for="">Date Prêt</label>
                        <input type="date" name="datepret" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Date Retour</label>
                        <input type="date" name="dateretour" value="">
                    </div>
                        <button name="login" class="btn btn-outline-success btn-sm btn-rounded"> Valider </button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Liste des prêts</h4>
                </br>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Auteur</th>
                                <th>Type</th>
                                <th>Genre</th>
                                <th>Date Prêt</th>
                                <th>Date Retour </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Le reflet du passé</td>
                                <td>Gallas Diop</td>
                                <td>Roman</td>
                                <td>Ado</td>
                                <td>10/11/2021</td>
                                <td>20/11/2021</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>