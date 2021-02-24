@extends('layouts.app')

@section('content')

<div class="row">
<div class="col-md-6">
    <form action="{{ route('farmers.store') }}" method="post">
    @csrf
        <div class="row">
        <div class="form-group col-md-6">
            <label for="fname">Name</label>
            <input  name="fname" id="fname" type="text" class="form-control" required>
           
            
        </div>
        <div class="form-group col-md-6">
            <label for="phone">Phone</label>
            <input name="phone" id="phone" type="text" class="form-control" required>
           
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="village">Village</label>
            <select id="village" name="village" type="text" class="form-control" required>
                <option value="East Village">East Village</option>
                <option value="North Village">North Village</option>
                <option value="South Village">South Village</option>
                <option value="West Village">West Village</option>
            </select>
           
        </div>
        <div class="form-group col-md-6">
            <label for="age">Age</label>
            <input name="age" id="age" type="number" class="form-control" required>
           
        </div>
    </div>
        <div class="form-group">
            <label for="gender">Gender</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio"   name="gender" id="male" value="Male">
            <label class="form-check-label" for="male">Male</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio"   name="gender" id="female" value="Female">
            <label class="form-check-label" for="female">Female</label>
        </div>
          
        <div class="form-group">
            <label for="imageUrl">Image URL</label>
            <input id="imageUrl"  name="imageUrl" type="text" class="form-control" required url>
           
        </div>
    
        <button class="btn btn-primary">Save</button>
    </form>
</div>
<div class="col-md-6">
    <div class="card" style="width: 18rem;">
        <img src="" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title" id="farmer"></h5>
          <p class="card-text phone" ></p>
          <p class="card-text age" ></p>
       
        </div>
      </div>
</div>
</div>
<script>
$( "#fname" ).keyup(function(e) {

  var name = $(this).val();
   $(".card-title").text(name);
});

$( "#phone" ).keyup(function(e) {

var name = $(this).val();
 $(".phone").text(name);
});


$( "#age" ).keyup(function(e) {

var name = $(this).val();
 $(".age").text(name);
});


$("#imageUrl").keyup(function(){
          var inputVal = $(this).val();
          $(".card-img-top").attr("src", inputVal);
     });


</script>



@endsection