<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy 8/3</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300;400;700&family=Inconsolata:wght@300;400&family=Luxurious+Roman&family=Montserrat:wght@200&family=Neonderthaw&family=Open+Sans:wght@300&family=Rubik&display=swap" rel="stylesheet">
    <meta name="author" content="Codeconvey" />

    <link rel="stylesheet" href="{{ asset('/css/card/css-template1.css') }}" />

</head>

<body>



    <header>
       
        <center><h2>{{ $data[0]->value }}</h2></center>

             
    </header>

    <section>
        <div class="rt-container">
           
                <div class="Scriptcontent">

                    <!-- 3D Image Slideshow HTML -->
                    <section class="slideshow">
                        <div class="content">
                            <div class="slider-content">
                                @for ($i = 1 ; $i < count($data) ; $i++)
                                    <figure class="shadow"><img src="{{ asset("/images/cards/" . $data[$i]->value) }}"></figure>
                                @endfor
                            </div>
                        </div>
                    </section>
                    <!-- End 3D Image Slideshow HTML -->

                </div>
            </div>
        </div>
    </section>

 <audio autoplay>
        <source src="VybeBeatz - Gorgeous.mp3" type="audio/mp3">
      </audio>

    <!-- Analytics -->

</body>

</html>
