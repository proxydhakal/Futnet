@extends('layout.app')


@section('content')
 <header>
  <div class="overlay">
    
  </div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="/assets/futnett.mp4" type="video/mp4">
  </video>
  <div class="container h-100">
    <div class="d-flex text-center h-100">
      <div class="my-auto w-100 text-white">
        <h1 class="display-3" id="mybutton">FUTNET</h1>
        <h2 class="ml2">Talk with your Feet,Play With your Heart</h2>
       <h1 class="ml6">
  <span class="text-wrapper">
    <span class="letters">Find Your opponent on Single Click</span>
  </span>
  <i class="fas fa-mouse-pointer"></i>
</h1>

      </div>
      </div>
    </div>
  </div>
</header>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script>
    $(document).ready(function() {
      $('#mybutton').hide().delay(3000).fadeIn(2200);
});
    $('.ml2').each(function(){
  $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
});
    $('.ml6 .letters').each(function(){
  $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
});

anime.timeline({loop: true})
  .add({
    targets: '.ml6 .letter',
    translateY: ["1.1em", 0],
    translateZ: 0,
    duration: 750,
    delay: function(el, i) {
      return 50 * i;
    }
  }).add({
    targets: '.ml6',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });

anime.timeline({loop: true})
  .add({
    targets: '.ml2 .letter',
    scale: [4,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 950,
    delay: function(el, i) {
      return 70*i;
    }
  }).add({
    targets: '.ml2',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
    </script>

<style type="text/css">
  header {
  position: relative;
  background-color: black;
  height: 75vh;
  min-height: 25rem;
  width: 100%;
  overflow: hidden;
}

header video {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: 0;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}

header .container {
  position: relative;
  z-index: 2;
}

header .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: black;
  opacity: 0.5;
  z-index: 1;
}

@media (pointer: coarse) and (hover: none) {
  header {
    background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
  }
  header video {
    display: none;
  }
}
</style>
@endsection
