


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
        

    <div class="container ">
  <div class="row align-items-end">
    <div class="col s12">
    <h1>Modifier un etudiant</h1>
    <hr>
    
    @if (session('success'))
    <div class="alert alert-success">{{session('success')}}<div>
    
    @endif

    <ul>
        @foreach ($errors->all() as $error)
                <il class="alert alert-danger">{{$error}}</il>
        @endforeach
    </ul>

    <form action="/update/traitement" method="POST">
        @csrf

        <input type="text" name="id style="display:none;" value="{{$etudiants->id}}">
  <div class="mb-3">
    <label for="Nom" class="form-label">Nom</label>
    <input type="text" class="form-control" id="Nom" name="nom" value="{{$etudiants->nom}}">
  </div>  
  
  <div class="mb-3">
    <label for="Nom" class="form-label">Prenom</label>
    <input type="text" class="form-control" id="Prenom" name="prenom" value="{{$etudiants->prenom}}">
  </div> 

  <div class="mb-3">
    <label for="Nom" class="form-label">Classe</label>
    <input type="text" class="form-control" id="Nom" name="classe" value="{{$etudiants->classe}}">
  </div> 
  
  <button type="submit" class="btn btn-primary">Modifier un etudiant</button>
</form>
<br>
     <a href="/liste" class="btn btn-danger">Liste des etudiants</a>
 </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
