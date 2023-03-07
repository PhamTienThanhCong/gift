<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data[0] }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300;400;700&family=Inconsolata:wght@300;400&family=Luxurious+Roman&family=Montserrat:wght@200&family=Neonderthaw&family=Open+Sans:wght@300&family=Rubik&display=swap" rel="stylesheet">
    <meta name="author" content="Codeconvey" />

    <link rel="stylesheet" href="{{ asset('/css/card/css-template1.css') }}" />

</head>

<style>
    body{
        height: 100vh;
        overflow: hidden;
    }
</style>

<body>



    <header style="padding-top: 20px">
       
        <center><h2>{{ $data[1] }}</h2></center>

             
    </header>

    <section>
        <div class="rt-container">
           
                <div class="Scriptcontent">

                    <!-- 3D Image Slideshow HTML -->
                    <section class="slideshow">
                        <div class="content">
                            <div class="slider-content">
                                @for ($i = 2 ; $i < count($data) - 1 ; $i++)
                                    <figure class="shadow"><img src="{{ asset("/images/cards/" . $data[$i]) }}"></figure>
                                @endfor
                            </div>
                        </div>
                    </section>
                    <!-- End 3D Image Slideshow HTML -->

                </div>
            </div>
        </div>
    </section>

    <audio id="myAudio" autoplay>
        <source src="{{ $data[count($data) - 1] }}" type="audio/mp3">
    </audio>

    <!-- Analytics -->

</body>
</html>
