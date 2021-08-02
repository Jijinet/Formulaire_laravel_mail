
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElectroMarkt</title>

    @include('components.libraries')
  
</head>

<body>
 @include('components.navbar')

<div class="container">
    <div class="row">

    <div class="col-6 col-sm-4 mx-auto">
    <h2 class="py-3 text-center">Formulaire</h2>
    <form method='POST' action="/ajouter">
     {{ csrf_field() }}
        <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Sujet</label>
              <input type="text" class="form-control" name="sujet" id="exampleFormControlInput1" placeholder="sujet" required>
            </div>
            <div class="mb-3">
        
              <label for="exampleFormControlInput2" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="exampleFormControlInput2" placeholder="email" required>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea3" class="form-label">Description</label>
              <textarea class="form-control" name="description" id="exampleFormControlTextarea3" maxlength="200" rows="3" placeholder="description"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Enregistrer</button>
        @if(session('message'))
            <p class="text-success">{{session('message')}}</p>
        @endif
    </form>
    
    </div>

        
    </div>
</div>



</body>

</html>