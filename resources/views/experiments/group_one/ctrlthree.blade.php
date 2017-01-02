@extends ('layouts.app')

@section('content')
<div class="row plast">
  <h1> If you would be in an on-line store and you would like to buy water, which one would you choose? </h1>
  <form action="ctrlthreeinsert" methood="get">
    <div class="bottle col-sm-4"><button value="bottle 1"><img src="images/bottle1.jpg" class="bottle" alt="slika"></button></div>
    <div class="bottle col-sm-4"><button value="bottle 2"><img src="images/bottle2.jpg" class="bottle" alt="slika"></button></div>
    <div class="bottle col-sm-4"><button value="bottle 3"><img src="images/bottle3.jpg" class="bottle" alt="slika"></button></div>
  </div>
  <div class="row plast">
    <div class="bottle col-sm-3"><button value="bottle 4"><img src="images/bottle4.jpg" class="bottle" alt="slika"></button></div>
    <div class="bottle col-sm-3"><button value="bottle 5"><img src="images/bottle5.jpg" class="bottle" alt="slika"></button></div>
    <div class="bottle col-sm-3"><button value="bottle 6"><img src="images/bottle6.jpg" class="bottle" alt="slika"></button></div>
    <div class="bottle col-sm-3"><button value="bottle 7"><img src="images/bottle7.jpg" class="bottle" alt="slika"></button></div>
  </form>
  Na strani je prikazanih 7 nebrendiranih plastenk/steklenic navadne vode, vsaka od teh pa je opisana z vsemi možnimi kombinacijami spodnjih atributov – izločeni sta kombinaciji (nizek izgled, nizka kakovost, visoka cena // visok izgled, visoka kakovost, nizka cena), zaradi česar jih ostane 7: 
  <br />
    <ul>
      <li>IZGLED (visok, srednja, nizka) </li>
      <li>CENA (visoka, srednja, nizka) </li>
      <li>KAKOVOST (visoka, srednja, nizka) </li>
    </ul>  
  <div class="title" id="decisionsthree">

  </div>
</div>
<script src="js/decisionsone.js"></script>
@endsection