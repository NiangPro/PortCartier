<h2>Accueil Membre</h2>
<div class="row">
      <div class="col-12">
      <table class="table table-striped" id="myTable">
          <thead>
          <tr>
              <th>Code Document</th>
              <th>Titre (mm)</th>
              <th>Auteur</th>
              <th>Année Publication</th>
              <th>Catégorie</th>
              <th>Type</th>
              <th>Genre</th>
              <th>Description</th>
          </tr>
        </thead>
        <tbody>
          @foreach($releves as $rel)
          <tr>
            <td>{{$rel->date}}</td>
            <td>{{$rel->quantite}}</td>
            <td>{{$rel->temperature}} °C</td>
            <td>{{$rel->region}}</td>
            <td>{{$rel->station->nom}}</td>
            <td>
              <a href="{{route('editreleve',['id'=> $rel->id])}}" class="btn btn-outline-info btn-sm"><i class="fa fa-edit"></i></a>
              <a href="{{route('deletereleve',['id'=> $rel->id])}}" class="btn btn-outline-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer?')"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
      </div>