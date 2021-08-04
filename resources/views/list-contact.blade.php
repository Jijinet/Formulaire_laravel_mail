
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste Contacts</title>

    @include('components.libraries')
  
</head>

<body>
 @include('components.navbar')

<div class="container">
    <div class="row">

    <div class="col-6 col-sm-4 ">
    <h2 class="py-3 text-center">Formulaire</h2>
   
    
    </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Sujet</th>
            <th scope="col">Email</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
        @foreach ( $contacts as  $contact)

          <tr>
            <td>{{$contact->sujet}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->description}}</td>

          </tr>
            
        @endforeach
        
   
        </tbody>
      </table>

        
    </div>
</div>



</body>

</html>