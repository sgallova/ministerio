<html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <title>
        @yield('title')
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/template.css') }}">
    @stack('plugin-css')
</head>
<body>
<header class="flex rd-element-align-center">
    <img src="images/logomin.png" alt="">
</header>
<section class="rd-container">
    <div class="rd-element rd-s-100 rd-l-50">
        <div class="rd-container-row">
            <div class="rd-element rd-s-100 rd-l-30 rd-element-align-center flex">
                <img src="images/icono-encabezado.png" alt="">
            </div>
            <div class="rd-element rd-s-100 rd-l-70">
                <div class="rd-container-col">
                    <h2 class="text-color-red">AYUDA PARA LA TOMA INFORMADA DE DECISIONES POR PARTE DE LA FAMILIA</h2>
                    <h2 class="text-color-blue-bold">REGRESO A LAS INSTITUCIONES EDUCATIVAS DURANTE LA PANDEMIA COVID-19</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="rd-element rd-s-100 rd-l-50">
        <p>
            La asistencia de los niños, niñas, adolescentes y jóvenes a las instituciones educativas durante la pandemia por COVID-19 es una decisión que requiere información confiable.
            Esta ayuda, lo guiará a través de una serie pasos para ayudarlos a usted y a su familia a preparase para tomar esta importante decisión.
        </p>
        <p class="t-right text-color-blue-bold">Fecha de elaboración: noviembre 2020</p>
    </div>
</section>
<section id="navs" class="bg-color-blue-blod">
    <div class="rd-container">
        <div class="rd-element rd-s-100">
            <h3 class="t-center text-color-blue-ligth">
                ¿Qué debo saber para el retorno de mi hijo a la institución educativa?
            </h3>
        </div>
        <div class="rd-element-row rd-s-100 rd-l-80 container-all-section-nav">
            <div class="rd-element rd-s-100 rd-l-20">
                <a href="{{ route('know-about') }}">
                    <div class="container-section-nav {{ $menu == 'know-about' ? 'active' : '' }}">
                        <div class="section-number">
                            <h4>1</h4>
                        </div>
                        <div class="section-text">
                            <p>Conozca Sobre<br>el COVID-19</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="rd-element rd-s-100 rd-l-20">
                <a href="{{ route('benefits-alternation') }}">
                    <div class="container-section-nav {{ $menu == 'benefits-alternation' ? 'active' : '' }}">
                        <div class="section-number">
                            <h4>2</h4>
                        </div>
                        <div class="section-text">
                            <p>Beneficios de<br>la alternancia</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="rd-element rd-s-100 rd-l-20">
                <a href="{{ route('explore-your-feelings') }}">
                    <div class="container-section-nav {{ $menu == 'explore_your_feelings' ? 'active' : '' }}">
                        <div class="section-number">
                            <h4>3</h4>
                        </div>
                        <div class="section-text">
                            <p>Explore sus<br>sentimientos</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="rd-element rd-s-100 rd-l-20">
                <a href="{{ route('evaluate-what-knows') }}">
                    <div class="container-section-nav {{ $menu == 'evaluate-what-knows' ? 'active' : '' }}">
                        <div class="section-number">
                            <h4>4</h4>
                        </div>
                        <div class="section-text">
                            <p>Evalúe lo que<br>sabe</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="rd-element rd-s-100 rd-l-20">
                <a href="{{ route('messages-to-remember') }}">
                    <div class="container-section-nav {{ $menu == 'messages-to-remember' ? 'active' : '' }}">
                        <div class="section-number">
                            <h4>5</h4>
                        </div>
                        <div class="section-text">
                            <p>Mensajes para<br>recordar</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@yield('content')
<footer class="bg-color-blue-ligth">
    <div class="rd-container full">
        <div class="rd-element rd-s-100 rd-l-50 rd-element-align-self">
            <img src="images/logomin-udea.png" alt="">
        </div>
        <div class="rd-element rd-s-100 rd-l-50 redes-img">
            <div class="rd-container rd-element-justify-flex-end">
                <div class="rd-element rd-s-100 rd-l-30">
                    <div class="rd-container no-padding">
                        <div class="rd-element rd-s-100 rd-l-50 t-right">
                            <a href="">
                                <img src="images/rs-fb.png" alt="">
                            </a>
                        </div>
                        <div class="rd-element rd-s-100 rd-l-50">
                            <a href="">
                                <img src="images/rs-yt.png" alt="">
                            </a>
                        </div>
                        <div class="rd-element rd-s-100 rd-l-50 t-right">
                            <a href="">
                                <img src="images/rs-ins.png" alt="">
                            </a>
                        </div>
                        <div class="rd-element rd-s-100 rd-l-50 ">
                            <a href="">
                                <img src="images/rs-twi.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="rd-element rd-s-100 rd-l-40 rd-element-align-self">
                    <p class="text-color-blue-bold">
                        <b>Fecha de elaboración:</b>
                        Noviembre 2020
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
@stack('plugin-js')
</body>
</html>
