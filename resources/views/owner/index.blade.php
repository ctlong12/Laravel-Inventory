<!DOCTYPE html>

<main>
    @extends('layouts.app')
    @section('content') 
    @if(count($assets) > 0)

            @foreach($assets as $asset)
                <div class="album py-5 bg-light">
                    <div class="container" style = "float: left">
                        <div class="row" >
                            <div class="col-md-4" >
                              <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="https://i.ibb.co/wYpQh5d/mountain.jpg" alt="Card image cap">
                                <div class="card-body">
                                  <h1>{{ $asset->name}}</h1>
                                  <h5>Owner: {{ $asset->person->fname }} {{ $asset->person->lname }}</h5>
                                  <p class="card-text">{{ $asset->description }}</p>
                                  <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <td><button onclick="location.href='{{ route('assets.show', $asset->id) }}'" method="post" type="button" class="btn btn-sm btn-outline-secondary">View</td>
                                    </div>
                                    <small class="text-muted"><td>Purchased: {{ $asset->purchased}}</td> </small>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>               
            @endforeach
    @else
        <div class="alert alert-info" role="alert" style ="margin-top: 100px; margin-left: 150px; margin-right: 150px;" >
            <h4 class="alert-heading">Why is nobody using this!</h4>
            <p>It looks like there are currently no assets available to anyone!</p>
            <hr>
            <p class="mb-0">To create an asset, first create a person to assign to that asset!</p>
        </div>
    @endif
</main>
@endsection