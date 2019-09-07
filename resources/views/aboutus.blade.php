@extends('Includes.layoutfull')
<link rel="stylesheet" href="{{ asset('css/aos.css') }}"/>
<body>
<style>
    .card {
        border: 0px !important;
        min-height: 20rem;
    }
    /*#history::after {*/
    /*    content: "";*/
    /*    position: absolute;*/
    /*    top: 0px;*/
    /*    left: 0px;*/
    /*    width: 100%;*/
    /*    height: 100%;*/
    /*    z-index: 99;*/
    /*    !*background-image: url(https://portalfalanordeste.com/images/noticias/18224/1195217465.jpg);*!*/
    /*    background-size: cover;*/
    /*    opacity: 0.2;*/
    /*    border-radius: 10px*/
    /*}*/
    #mission::after {
        content: "";
        position: absolute;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
        z-index: 99;
        background-image: url(https://geniusmarketing.com.br/macrofrio/wp-content/uploads/2018/01/icone-missao.png);
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        opacity: 0.1;
        border-radius: 10px
    }
    #vision::after {
        content: "";
        position: absolute;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
        z-index: 99;
        background-image: url(https://geniusmarketing.com.br/macrofrio/wp-content/uploads/2018/01/icone-visao.png);
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        opacity: 0.1;
        border-radius: 10px
    }
    #values::after {
        content: "";
        position: absolute;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
        z-index: 99;
        background-image: url(https://geniusmarketing.com.br/macrofrio/wp-content/uploads/2018/01/icone-valores.png);
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        opacity: 0.1;
        border-radius: 10px
    }
</style>
@section('content')
    <section class="banner-area" id="home">
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-start">
                <div class="banner-content col-lg-7">
                    <h1>
                        Sobre nós<br>
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class='col-12 mt-5' data-aos="fade-right">
                <div class='card' id='history'>
                    <div class='card-header text-center' style='border:0px;background-color:transparent;'>
                        <h1>História da Empresa</h1>
                    </div>
                    <div class='card-body text-center'>
                        <h5>
                            Fundada em 2019, o LeCremè tem como foco a produção de chocolates com fortes características brasileiras, disseminando a doçura nacional ao exterior.
                            <br><br>A empresa fez uma parceria com o mercado de cacau suíço, proporcionando maior qualidade aos nossos produtos.
                            <br>Toda a nossa mercadoria é produzida no Rio de Janeiro, mais precisamente na cidade de Porto Real, situada na Rod. Presidente Dutra.
                            <br>Através dos nossos fornecedores localizados no Espírito Santo do Pinhal/SP e Suíça, mantemos um forte desenvolvimento na fabricação dos chocolates, na qual possuem um toque especial de café.
                        </h5>
                    </div>
                </div>
            </div>
            <div class='col-md-4 col-lg-4 col-sm-12 mt-5' data-aos="fade-left">
                <div class='card' id='mission'>
                    <div class='card-header text-center' style='border:0px;background-color:transparent;'>
                        <h1>Missão</h1>
                    </div>
                    <div class='card-body text-center'>
                        <h5>
                            Proporcionar as pessoas experimento memorável e sublime em nossos produtos e serviços, sendo referência em gestão do negócio de chocolate.
                        </h5>
                    </div>
                </div>
            </div>
            <div class='col-md-4 col-lg-4 col-sm-12 mt-5' data-aos="fade-up"
                 data-aos-anchor-placement="top-bottom">
                <div class='card' id='vision'>
                    <div class='card-header text-center' style='border:0px;background-color:transparent;'>
                        <h1>Visão</h1>
                    </div>
                    <div class='card-body text-center'>
                        <h5>
                            Ser a melhor e maior rede de chocolates sofisticados no mundo, oferecendo aos clientes e parceiros uma relação permanente, com foco no desenvolvimento rentável, responsabilidade socioambiental e confiabilidade.
                        </h5>
                    </div>
                </div>
            </div>
            <div class='col-md-4 col-lg-4 col-sm-12 mt-5' data-aos="fade-up-left">
                <div class='card' id='values'>
                    <div class='card-header text-center' style='border:0px;background-color:transparent;'>
                        <h1>Valores</h1>
                    </div>
                    <div class='card-body text-center'>
                        <h5>
                            Paixão, Inovação, Sustentabilidade e Respeito.
                        </h5>
                    </div>
                </div>
            </div>
            <div class='col-12 mt-5' data-aos="flip-left">
                <div class='card' id='etical'>
                    <div class='card-header text-center' style='border:0px;background-color:transparent;'>
                        <h1>Ética</h1>
                    </div>
                    <div class='card-body text-left'>
                        <h5>
                            Em nossa caminhada, adotamos quatro valores fundamentais, porém não ficamos somente nisso. Nossa empresa acredita e luta pela integridade e fidelidade de cada um de nossos clientes e parceiros, tendo nossos princípios vivos em nosso dia a dia.
                            <br>
                            <br> Nossa empresa segue padrões éticos descritos no Código de Conduta Clientes/Parceiros. E para sempre melhor atendê-los, temos uma página em nosso site para casos de denúncias ou sugestões, na barra “sobre” encontrará “reclame aqui”, gerenciado por funcionários externos para garantir o anonimato e segurança daqueles que mandarem uma mensagem.
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
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
</body>
