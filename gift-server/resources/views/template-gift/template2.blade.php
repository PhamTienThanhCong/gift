<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $data[0] }}</title>
    <link rel="stylesheet" href="{{ asset("/template/css/index.css") }}" />
    <!-- import jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  </head>
  <body>
    <div class="parent">
      <canvas id="canvas"></canvas>
      <section class="above-fold">
        <div class="wrap-present">
          <div class="present-box" id="present">
            <div class="present">
              <div class="img-wrap" id="present-image"></div>
            </div>
            <div class="side front"></div>
            <div class="side back"></div>
            <div class="side left"></div>
            <div class="side right"></div>
            <div class="side top">
              <span class="to">
                <span class="name" id="nametag"> </span>
              </span>
            </div>
            <div class="side bottom"></div>
          </div>
        </div>
        <p class="info-text" style="font-size: 20px;">Ấn để mở nhé</p>
      </section>

      <div id="card">
        <h4 class="title-card">💘little coder💘</h4>

        <img
          src="{{ asset("/images/cards/$data[5]") }}"
          class="honey"
        />

        <h4 class="content-card">
          Happy Birthday Make A Wish. Dear brother, hope you receive everything
          you wish for this year. You deserve the best! Thanks for being such a
          great brother.💘
        </h4>
      </div>
    </div>
    <audio autoplay loop  id="playAudio">
      <source src="{{ $data[6] }}">
    </audio>
  </body>
  <script>
    const nameGirl = "{{ $data[1] }}";
    const giftUrl = '#';
    const eventName = '{{ $data[2] }}';
    const titleCard = '{{ $data[3] }}';
    const contentCard = '{{ $data[4] }}';

    const giftImage = '{{ asset("/images/cards/$data[5]") }}';
    const base64 = '';
    const giftImageBase64 = "data:image/png;base64, " + base64;
  </script>
  <script src="{{ asset('template/js/present.js') }}"></script>
  <script>
    
  </script>
</html>
