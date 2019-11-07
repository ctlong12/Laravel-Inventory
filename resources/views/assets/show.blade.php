<DOCTYPE html>
    
<main>
    @extends('layouts.app')
    @section('content')
    <html>
        <head>
            <title>Asset {{ $asset->name }}</title>
        </head>
        <body>
        <hr style = "padding-bottom: 100px; background-color: clear;">         

          <div class="row featurette" style = "background-color: white">
                <div class="col-md-7" style="padding-left: 100px; padding-top: 50px">
                <br/>   
                <h3 class="featurette-heading">{{ $asset->name }}</h3>
                <p class="lead"> Description: {{ $asset->description }}</p>
                <p class="lead">Owner: {{ $asset->person->fname }} {{ $asset->person->lname }}</p>
                <h5>Date Purchased: {{ $asset->purchased }}</h5>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="https://i.ibb.co/wYpQh5d/mountain.jpg" alt="Generic placeholder image">
            </div>
          </div>
        <hr class="featurette-divider" style = "margin-top: 75px;">     
            <div class="btn-group">
                <td><button onclick="location.href=''" method="get" type="button" style="margin-left: 78px" class="btn btn-lg btn-outline-secondary">Back</td>
            </div>
        
        </body>      
    </html>
    @endsection
</main>

    
