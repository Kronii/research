@extends ('layouts.app')

@section('content')
<div class="row plast">
  <h1> If you would be in an on-line store and you would like to buy water, which one would you choose? </h1>
  <form action="ctrloneinsert" methood="get">
    <div class="bottle col-sm-4"><button value="bottle 1"><img src="images/bottle.jpg" class="bottle" alt="slika"></button></div>
    <div class="bottle col-sm-4"><button value="bottle 2"><img src="images/bottle.jpg" class="bottle" alt="slika"></button></div>
    <div class="bottle col-sm-4"><button value="bottle 3"><img src="images/bottle.jpg" class="bottle" alt="slika"></button></div>
  </div>
  <div class="row plast">
    <div class="bottle col-sm-3"><button value="bottle 4"><img src="images/bottle.jpg" class="bottle" alt="slika"></button></div>
    <div class="bottle col-sm-3"><button value="bottle 5"><img src="images/bottle.jpg" class="bottle" alt="slika"></button></div>
    <div class="bottle col-sm-3"><button value="bottle 6"><img src="images/bottle.jpg" class="bottle" alt="slika"></button></div>
    <div class="bottle col-sm-3"><button value="bottle 7"><img src="images/bottle.jpg" class="bottle" alt="slika"></button></div>
  </form>
</div>
@endsection