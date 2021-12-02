@extends('layout');

@section('container')

    <div class="row justify-content-between">
        <div class="col-7 bg-warning">
            Fiction
        </div>
        <div class="col-4 bg-warning">
            Category
        </div>

        <div class="row">
            <div class="col-4 mt-3">
              Title
            </div>
            <div class="col-4 mt-3">
              Author
            </div>
        </div> <br><br> <br>
        <div class="row bg-light">

            <div class="col-sm-4">Title 3</div> 
            <div class="col-sm-4">Author 3</div> 
        </div>
        <div class="row bg-light">

            <div class="col-sm-4">Title 4</div> 
            <div class="col-sm-4">Author 4</div> 
        </div>
        <div class="row bg-light">

            <div class="col-sm-4">Title 5</div> 
            <div class="col-sm-4">Author 5</div> 
        </div>
        
    
    </div>
@endsection