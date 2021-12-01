    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <b><h3 class="text-center pb-2">Faire une réservation</h3></b>
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
                        <label for="">Date Réservation</label>
                        <input type="date" name="datepret" value="">
                    </div>
                    <button name="login" class="btn btn-outline-success btn-sm btn-rounded"> Valider </button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Liste des réservatins</h4>
                </br>
                <div class="table-respnsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($dcument as $dc): ?>
                                <tr>
                                    <td><?= $dc-> ?></td>
                                    <td><?= $dc-> ?></td>
                                    <td><?= $dc-> ?></td>
                                    <td><?= $dc-> ?></td>
                                    <td><?= $dc-> ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

