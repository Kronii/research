@extends ('layouts.app')

@section('content')
<div class="row plast">
  <h1> Please divide 100 points between the products, according to the probability of your product choice – You can split points between different products as you like (100 points at one product means that you would choose only this product and none of the others). </h1>
  <form id="ctrlfivedivideinsert" method="get">
    <div class="bottle col-sm-4"><img src="images/bottle1.jpg" class="bottle" alt="slika">
    <input type="number" id="bottle1" value="0">
    </div>
    <div class="bottle col-sm-4"><img src="images/bottle2.jpg" class="bottle" alt="slika">
    <input type="number" id="bottle2" value="0">
    </div>
    <div class="bottle col-sm-4"><img src="images/bottle3.jpg" class="bottle" alt="slika">
    <input type="number" id="bottle3" value="0">
    </div>
  </div>
  <div class="row plast">
    <div class="bottle col-sm-3"><img src="images/bottle4.jpg" class="bottle" alt="slika">
    <input type="number" id="bottle4" value="0">
    </div>
    <div class="bottle col-sm-3"><img src="images/bottle5.jpg" class="bottle" alt="slika">
    <input type="number" id="bottle5" value="0">
    </div>
    <div class="bottle col-sm-3"><img src="images/bottle6.jpg" class="bottle" alt="slika">
    <input type="number" id="bottle6" value="0">
    </div>
    <div class="bottle col-sm-3"><img src="images/bottle7.jpg" class="bottle" alt="slika">
    <input type="number" id="bottle7" value="0">
    </div>
    <input type="submit" value="Submit" class="col-md-12">
  </form>
</div>
<script src="js/checkifhundred.js"></script>
@endsection