<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>


<section id="tabelas">
  <div id="adcimg">
    &nbsp;
  </div>
  <div id="bannertexto">
    <b class="ml2">OFERTA POR TEMPO LIMITADO!</b>
  </div>
  <div id="clockdiv">
    <div>
      <div>
        <span class="days">0</span>
      </div>
      <span class="hours">00</span>
      <div class="smalltext">Horas</div>
    </div><span class="doispontos">:</span>
    <div>
      <span class="minutes">00</span>
      <div class="smalltext">Minutos</div>
    </div><span class="doispontos">:</span>
    <div>
      <span class="seconds">30</span>
      <div class="smalltext">Segundos</div>
    </div>
  </div>
  <div id="imgmockup">
    <img src="img/prod2.png" class="img-fluid" />
  </div>
  <div id="btbanner" class="col-md-12 d-flex justify-content-center">
    <button type="button" class="btn btn-success btn-lg btn3d" style="text-transform: uppercase; color: #FFF;background-color:#58C00D;border:0">
      <a href="https://equipesaudeviva.com.br/oficial/" target="_blank" style="text-decoration: none; color: #FFF; line-height: 1em">
        <b>CLIQUE AQUI<br>PARA APROVEITAR</b>
      </a>
    </button>
  </div>
</section>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,600;1,700;1,800&display=swap');


  #imgmockup {
    text-align: center;
  }

  #imgmockup img {
    width: 90%;
  }

  #btbanner {
    padding: 15px;
    margin-bottom: 20px;
  }

  #adcimg {
    margin-top: 20px;
    margin-left: 0;
    margin-right: 0;
    padding: 0;
    text-align: center;
  }

  #adcimg img {
    width: 100%;
  }

  #tabelas {
    font-family: 'Poppins', sans-serif;
    background-color: #D5F2D5;
  }

  #tabelas h2 {
    color: #58C00D;
  }

  #tabelas h3 {
    font-style: normal;
  }

  #tabelas h2 b {
    font-weight: 800;
    color: #58C00D;
  }

  .days {
    display: none !important;
  }

  .hours {
    text-align: center;
  }

  .minutes {
    text-align: center;
  }

  .seconds {
    text-align: center;
  }

  #bannertexto {
    display: block;
    text-align: center;
    color: #58C00D;
    font-size: 30px;
    width: 100%;
    max-width: 100%;
    padding-top: 25px;
    margin-left: 0;
    margin-right: auto;
    margin-top: 5px;
    line-height: 0.9em;
  }

  #clockdiv {
    display: block;
    font-weight: 100;
    text-align: center;
    font-size: 30px;
    width: 100%;
    max-width: 100%;
    margin-left: 0;
    margin-right: auto;
    margin-top: 15px;
    margin-bottom: 50px;
  }

  #clockdiv>div {
    padding: 0px;
    background: rgba(255, 255, 255, 0);
    display: inline-block;
  }

  #clockdiv div>span {
    display: inline-block;
    font-size: 54px;
    color: #58C00D;
    font-weight: 700;
    width: 80px;
    line-height: 1em;
  }

  .smalltext {
    font-size: 9px;
    color: #58C00D;
    font-weight: 400;
    text-align: center;
    text-transform: uppercase;
  }

  .doispontos {
    font-size: 30px;
    color: #58C00D;
    font-weight: 500;
    vertical-align: top;
    line-height: 2em;
    text-align: center;
    margin-right: -8px;
  }
</style>

<script>
  // Wrap every letter in a span
  var textWrapper = document.querySelector('.ml2');
  textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

  anime.timeline({
      loop: true
    })
    .add({
      targets: '.ml2 .letter',
      scale: [4, 1],
      opacity: [0, 1],
      translateZ: 0,
      easing: "easeOutExpo",
      duration: 950,
      delay: (el, i) => 70 * i
    }).add({
      targets: '.ml2',
      opacity: 0,
      duration: 1000,
      easing: "easeOutExpo",
      delay: 1000
    });


  function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
      'total': t,
      'days': days,
      'hours': hours,
      'minutes': minutes,
      'seconds': seconds
    };
  }

  function initializeClock(id, endtime) {
    var clock = document.getElementById(id);
    var daysSpan = clock.querySelector('.days');
    var hoursSpan = clock.querySelector('.hours');
    var minutesSpan = clock.querySelector('.minutes');
    var secondsSpan = clock.querySelector('.seconds');

    function updateClock() {
      var t = getTimeRemaining(endtime);

      daysSpan.innerHTML = t.days;
      hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
      minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
      secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

      if (t.total <= 0) {
        clearInterval(timeinterval);
      }
    }

    updateClock();
    var timeinterval = setInterval(updateClock, 1000);
  }

  var deadline = new Date(Date.parse(new Date()) + 01 * 01 * 20 * 60 * 1000);

  initializeClock('clockdiv', deadline);
</script>