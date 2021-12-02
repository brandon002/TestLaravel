@extends('layout');

@section('container')

    <div class="row justify-content-between">
        <div class="col-7 bg-warning">
            Book List
        </div>
        <div class="col-4 bg-warning">
            Category
        </div>

        
    </div>
    <div class="row">
        <div class="col-4 mt-3">
          Title
        </div>
        <div class="col-4 mt-3">
          Author
        </div>
        <div class="col-3 mt-3">
          <a href="/fiction">Fiction</a> <br> <br>
          <a href="/science">Science</a> <br> <br>
          <a href="/computer">Computer</a> <br> <br>
        </div> 
    </div>
@endsection