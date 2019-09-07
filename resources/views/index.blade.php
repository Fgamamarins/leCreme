@extends('Includes.layoutfull')
<link rel="stylesheet" href="{{ asset('css/aos.css') }}"/>
@section('content')
    <body>
    <section class="banner-area" id="home">
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-start">
                <div class="banner-content col-lg-7">
                    <h1>
                        LeCremè<br>
                    </h1>
                    <span class='text-white'>
							Não somos apenas uma empresa que produz chocolates. Somos pessoas
encantadas pelo que construímos ao longo do ano. Isso é demonstrado na qualidade de
nossos produtos, no método empregado de fabricação e na distribuição. Tudo o que que
fazemos tem um toque humano, uma sofisticação artesanal. Porque o que importa para
Lecremè, é o amor posto em cada chocolate.
							</span>
                    <br>
                </div>
            </div>
        </div>
    </section>
    <div data-aos="flip-up">
        <section class="video-sec-area pb-100 pt-40" id="about">
            <div class="container">
                <div class="row justify-content-start align-items-center">
                    <div class="col-lg-6 video-right justify-content-center align-items-center d-flex">
                        <div class="overlay"></div>
                    </div>
                    <div class="col-lg-6 video-left">
                        <h6>NOSSA FÁBRICA</h6>
                        <br>
                        <p>
                            Com intuito de levar uma nova onda de sabores<br> e doçura, o LeCreme te oferece uma nova<br> evolução do chocolate, com nossas raízes<br> brasileiras e a sofisticação advinda da suíça
                        </p>
                        <img class="img-fluid" src="img/signature.png" alt="">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="menu-area section-gap" id="chocolate">
        <div class="container">
            <div data-aos="fade-up">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-10">
                        <div class="title text-center">
                            <h1 class="mb-10">Os Mais Desejados</h1>
                            <p>Características que inspiram cada trufa, bombom ou tablete que você compra.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4" data-aos="fade-down">
                    <div class="single-menu">
                        <a href="img/lecreme2.png" class="img-pop-home">
                            <img class="img-fluid" src="img/lecreme2.png" alt="">
                        </a>
                        <hr>
                        <div class="title-div justify-content-between d-flex">
                            <h4>Trufa Lecoffee</h4>
                            <p class="price float-right">
                                R$49,00
                                <small class='text-muted'>kg</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-down">
                    <div class="single-menu">
                        <a href="img/lecreme1.png" class="img-pop-home">
                            <img class="img-fluid" src="img/lecreme1.png" alt="">
                        </a>
                        <hr>
                        <div class="title-div justify-content-between d-flex">
                            <h4>Fondue Lecremè</h4>
                            <p class="price float-right">
                                R$49,00
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-down">
                    <div class="single-menu">
                        <a href="img/g4.jpg" class="img-pop-home">
                            <img class="img-fluid" src="img/g4.jpg" alt="">
                        </a>
                        <hr>
                        <div class="title-div justify-content-between d-flex">
                            <h4>Cafézao</h4>
                            <p class="price float-right">
                                R$49,00
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-left">
                    <div class="single-menu">
                        <a href="img/g3.png" class="img-pop-home">
                            <img class="img-fluid" src="img/g3.png" alt="">
                        </a>
                        <hr>
                        <div class="title-div justify-content-between d-flex">
                            <h4>Tablete Suíço</h4>
                            <p class="price float-right">
                                R$49,90
                                <small class='text-muted'>120gr</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-left">
                    <div class="single-menu">
                        <a href="img/lecreme3.png" class="img-pop-home">
                            <img class="img-fluid" src="img/lecreme3.png" alt="">
                        </a>
                        <hr>
                        <div class="title-div justify-content-between d-flex">
                            <h4>Nutlè</h4>
                            <p class="price float-right">
                                R$49,85
                                <small class='text-muted'>un</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-left">
                    <div class="single-menu">
                        <a href="img/lecreme10.png" class="img-pop-home">
                            <img class="img-fluid" src="img/lecreme10.png" alt="">
                        </a>
                        <hr>
                        <div class="title-div justify-content-between d-flex">
                            <h4>Cacau 40</h4>
                            <p class="price float-right">
                                R$9,90
                                <small class='text-muted'>100gr</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="review-area section-gap" id="review" style='background-color: #1A0B0A;'>
        <div class="container" data-aos="zoom-in">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">Chocolate feito especialmente para você!</h1>
                        <p>Características que inspiram cada trufa, bombom ou tablete que você compra.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 single-review">
                    <img src="https://scontent.fstu3-1.fna.fbcdn.net/v/t1.0-9/62497004_2441587442597762_180337125479153664_n.jpg?_nc_cat=101&_nc_oc=AQmObqFycv1o0TmvxvLvRt6u37zqlUki8WVSHGQTVlHzsDz4_MV0lVQi97xy0Jr0SuE&_nc_ht=scontent.fstu3-1.fna&oh=0ca441500a0b7a3b81f4b917036ac793&oe=5DCD720D"
                         alt=""
                         class='rounded-circle'
                         style='width: 100px;'
                    >
                    <div class="title d-flex flex-row">
                        <h4>Fausto Corporation</h4>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                    </div>
                    <p>
                        Chocolate mó bonzão, qnd eu comi fiquei com tanta energia que EU SAI CORRENDO IGUAL UM LOCO MALUCO. Nota maxima adorei amei.
                    </p>
                </div>
                <div class="col-lg-6 col-md-6 single-review">
                    <img src="https://scontent.fstu3-1.fna.fbcdn.net/v/t1.0-9/20429928_1419273208155758_1519216147679723446_n.jpg?_nc_cat=110&_nc_oc=AQltQMXEPaDywz3OxHihC0NgDVW9P0QFpXradl7WZtLG3z31evcEuYBCPcJV13yMPMU&_nc_ht=scontent.fstu3-1.fna&oh=99b6a1c40ebff44d87a16b68252795f1&oe=5DE11C9C"
                         alt=""
                         class='rounded-circle'
                         style='width: 100px;'
                    >
                    <div class="title d-flex flex-row">
                        <h4>Wilson Enterprise</h4>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                    </div>
                    <p>
                        EU QUERO CASAR COM A WALESKA NO FINAL DO ANO TODOS CONVIDADOS UMA FOLIA LOKA VAI ACONTECER. <br>
                </div>
            </div>
        </div>
    </section>
    </body>
@endsection
<script src="{{ asset('js/aos.js') }}"></script>
<script>
    window.onload = function () {
        AOS.refresh();
        AOS.init({
            easing: 'ease-in-out-sine'
        });
    }
</script>