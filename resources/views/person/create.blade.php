
<!DOCTYPE html>
<html>
    <head>
        <title>Inventory</title>
    </head>
    <body>
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul><br/>
        @endif 
        
        
        <form method="post" action="{{ route('person.store') }}">
            @csrf
            First Name: <input type="text" name="fname"><br/>
            Last Name: <input type="text" name="lname"><br/>
            Date of Birth: <input type="date" name="birthDate"><br/>
            Email: <input type="text" name="email"><br/>

            <button type="submit" >ADD PERSON </button>
                        
            
        </form>
       
        
    </body>
</html>

