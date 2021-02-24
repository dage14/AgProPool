@extends('layouts.app')

@section('content')
<style>
.sticky-top{
    top:80px;
}
.card{
    margin-bottom : 30px;
}
.card-footer{
    padding: 0;
}
</style>
<div class="row">
    <div class="col-3">
    <div class="sticky-top">
    <ul class="list-group" id="list-group">
 
    <li class="list-group-item">
    Item
    </li>
    </ul>
    </div>
    </div>
    <div class="col">
    <div class="row">
@foreach($crops as $crop)
<div class="col">
    <div class="card" style="width: 15rem;">
        <img src="{{ $crop->imgurl}}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">{{$crop->name}}</h5>
         
         
        </div>
        <div class="card-footer">
        <a  href="#" class="btn btn-primary btn-block crop-button" data-filter="{{$crop->id}}" data-name="{{$crop->name}}">Add + </a>
        </div>
      </div>
</div>
@endforeach
</div>
    </div>
</div>

<script>
$(".crop-button").click(function(){
    var name=  $(this).attr('data-name');
    var id = $(this).attr('data-filter');
    
    var quantity=0;c=0;
    $('.item_id').each(function(){
    if($(this).val() == id )
{
    $(".item_quantity").get(c).value=( parseInt($(".item_quantity").get(c).value)+1) ;
    quantity=1;
}
});
if(quantity == 0){
    $('#list-group').append('<li class="list-group-item">'+ name +'<input type="text" name="item_quantity[]" onclick="this.value=null"   value="1" class="form-control item_quantity" /><input type="hidden" name="item_id[]"  value="'+ id +'" class="form-control item_id" readonly /></li>');
    }
});
</script>

@endsection