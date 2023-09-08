
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
        

    <div class="container text-center">
  <div class="row align-items-end">
    <div class="col s12">
    <h1>CRUD LARAVEL</h1>
    <hr>
    <a href="/ajouter" class="btn btn-primary">Ajouter un etudiant</a>
    <hr>

    @if (session('success'))
        <div class="alert alert-success">{{session('success')}}<div>
    @endif
    <table class="table">
         <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Prenom</th>
                <th>Classe</th>
                <th>Actions</th>
           </tr>
        </thead>
        <tbody>
          @foreach($etudiants as $etudiant)
            <tr>
                <td>{{$etudiant->id}}</td>
                <td>{{$etudiant->nom}}</td>
                <td>{{$etudiant->prenom}}</td>
                <td>{{$etudiant->classe}}</td>
                <td>
                    <a href="/update-etudiant/{{$etudiant->id}}" class="btn btn-info">Update</a>
                    <a href="/delete-etudiant/{{$etudiant->id}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
          @endforeach

            

            
        </tbody>

    </table>
    </div>
    
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
