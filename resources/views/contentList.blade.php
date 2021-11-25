@section('List') 
@show

@section('audioPlayer')
<!-- audio player-->
<h4 id="title"></h4 >
  <div class="music-container" id="music-container">
    <div class="music-info">
      <div class="img-container">
        <img src="/img/Full-Speed.jpg" alt="music-cover" id="cover">
      </div>
    </div>
    <div class="progress-container" id="progress-container">
      <div class="progress" id="progress"></div>
    </div>
    <audio src="/music/Full-Speed.mp3" id="audio"></audio>
    <div class="navigation">
      <button id="prev" class="action-btn">
        <i class="fas fa-backward"></i>
      </button>
      <button id="play" class="action-btn action-btn-big">
        <i class="fas fa-play"></i>
      </button>
      <button id="next" class="action-btn">
        <i class="fas fa-forward"></i>
      </button>
      <div class="slidecontainer">
        <input type="range" min="0" max="100" value="0" class="slider" id="myRange">
        <input type="range" min="0" max="100" value="100" class="slider" id="myVol">
      </div>
    </div>
  </div>
    <script src="js/app.js"></script>
    <script src="https://kit.fontawesome.com/1509855ead.js" crossorigin="anonymous"></script>
    <!--js//boostrap-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <!--gasp animation script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js" integrity="sha512-eP6ippJojIKXKO8EPLtsUMS+/sAGHGo1UN/38swqZa1ypfcD4I0V/ac5G3VzaHfDaklFmQLEs51lhkkVaqg60Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ==" crossorigin="anonymous" ></script>
@show




