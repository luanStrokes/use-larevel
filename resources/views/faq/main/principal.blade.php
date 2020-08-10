<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - UseRH</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('style_album.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    
    <link rel="icon" type="image/png" href="{{URL::asset('assets/img/favicon-use.png')}}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{URL::asset('assets/img/favicon-use.png')}}" sizes="32x32">
</head>
<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
        <div class="inner">
        <a href="/estudo/public"><h3 class="masthead-brand">FAQ - UseRH</h3></a>
        <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link {{ (Route::current()->getName() === 'faq.company' ? 'active' : '') }}" href="{{ route('faq.company') }}">Empresa</a>
            <a class="nav-link {{ (Route::current()->getName() === 'faq.teacher' ? 'active' : '') }}" href="{{ route('faq.teacher') }}">Professor</a>
            <a class="nav-link {{ (Route::current()->getName() === 'faq.student' ? 'active' : '') }}" href="{{ route('faq.student') }}">Aluno</a>
        </nav>
        </div>
    </header>
    
    <main role="main" >
    
        @yield('content')
        
</body>

<footer class="mastfoot mt-auto">
    <div class="inner">
        <p>Suporte <a href="https://userh.com.br/" target="_blank" style="color: rgba(255, 255, 255, .5)">UseRH</a><br>{{ date('Y') }}</p>
    </div>
</footer>

    <script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
    showDivs(slideIndex += n);
    }

    function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    x[slideIndex-1].style.display = "block";  
    }
    </script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script type="text/javascript" src="ajax.php/i18n/pt_BR/js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js.map"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js.map"></script>

    <script type="text/javascript">
        getConfig().resolve({"html_thread":true,"lang":"pt_BR","short_lang":"pt","has_rtl":false,"primary_language":"pt-BR","secondary_languages":[]});
    </script>

    <!--chat - BLiP-->
    <script src="https://unpkg.com/blip-chat-widget" type="text/javascript"></script>
    
    <script>
        (function () {
            window.onload = function () {
                new BlipChat()
                .withAppKey('c3Vwb3J0ZXVzZXJoOjliM2Y1MGFlLTYxNWItNGNkNS1iMTFjLTgxODk0ZDkyNjQzNQ==')
                .withButton({"color":"#514f9d","icon":""})
                .withCustomCommonUrl('https://chat.blip.ai')
                .build();
            }
        })();
    </script>

</html>