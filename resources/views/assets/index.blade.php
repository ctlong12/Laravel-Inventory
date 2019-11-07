<!DOCTYPE html>

<main>
    @extends('layouts.app')
    @section('content')
    
    @if(count($assets) > 0)
          
    <h1 style=" margin-left: 25px; margin-top: 50px; padding-bottom: 25px;">Your Dashboard</h1>
        @foreach ($assets as $asset)
            <div class="col-md-6" style = "float: left">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        
      
                    <h3 class="mb-0">
                        <a class="text-dark" href="{{$asset->id}}">{{$asset->name}}</a>
                    </h3>
                                          
                    <div class="mb-1 text-muted">Purchased: {{$asset->created_at}}</div>
                        <p class="card-text mb-auto"> {{$asset->description}}</p>
                   
                        <div class="btn-group">
                        <td><button onclick="location.href='{{ route('assets.edit', $asset->id)}}'" method="get" type="button" class="btn btn-lg btn-outline-secondary">Edit</td>
                        </div>
                        <div class="btn-group">
                        <td><button onclick="location.href='{{ route('assets.show', $asset->id)}}'" method="get" type="button" style="margin-top: 8px" class="btn btn-lg btn-outline-secondary">View</td>
                        </div>
        </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="https://i.ibb.co/0YbXKLy/mountain.jpg" alt="Card image cap">
                </div>
            </div>
        @endforeach
    @else
        <div class="alert alert-info" role="alert" style ="margin-top: 100px; margin-left: 150px; margin-right: 150px;" >
            <h4 class="alert-heading">Oops!</h4>
            <p>It looks like there are currently no assets available, why not create one?</p>
            <hr>
            <p class="mb-0">To create an asset, first create a person to assign to that asset!</p>
        </div>
    @endif
</main>
@endsection