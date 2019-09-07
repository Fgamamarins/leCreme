<style>
    /*#mobile-nav-toggle {*/
    /*    left:70%!important;*/
    /*}*/
</style>
<header id="header" id="home">
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="{{ route('index') }}">
                    <img src="img/logolecreme.png" alt="" title="LeCremè"/>
                </a>
            </div>
            <nav id="nav-menu-container" class='text-right'>
                <ul class="nav-menu">
                    <li>
                        <a href="{{ route('index') }}">Página Inicial</a>
                    </li>
                    <li>
                        <a href="{{ route('index', '#home') }}">Início</a>
                    </li>
                    <li>
                        <a href="{{ route('index', '#about') }}">Sobre</a>
                    </li>
                    <li>
                        <a href="{{ route('index', '#chocolate') }}">Chocolate</a>
                    </li>
                    <li>
                        <a href="{{ route('aboutus') }}">Sobre nós</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!--Navbar -->
{{--<nav class="navbar navbar-expand-sm navbar-fixed-top fixed-top bg-dark navbar-dark" style='background-color: transparent!important'>--}}
{{--    <div id="logo">--}}
{{--        <a href="{{ route('index') }}">--}}
{{--            <img src="img/logolecreme.png" alt="" title="LeCremè"/>--}}
{{--        </a>--}}
{{--    </div>--}}
{{--    <ul class="navbar-nav text-left">--}}
{{--        <li class="nav-item dropdown">--}}
{{--            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">--}}
{{--                Dropdown link--}}
{{--            </a>--}}
{{--            <div class="dropdown-menu">--}}
{{--                <a class="dropdown-item" href="#">Link 1</a>--}}
{{--                <a class="dropdown-item" href="#">Link 2</a>--}}
{{--                <a class="dropdown-item" href="#">Link 3</a>--}}
{{--            </div>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--</nav>--}}
{{--<div class="topnav">--}}
{{--    <a href="#home" class="active">Logo</a>--}}
{{--    <div id="myLinks">--}}
{{--        <a href="#news">News</a>--}}
{{--        <a href="#contact">Contact</a>--}}
{{--        <a href="#about">About</a>--}}
{{--    </div>--}}
{{--    <a href="javascript:void(0);" class="icon" onclick="myFunction()">--}}
{{--        <i class="fa fa-bars"></i>--}}
{{--    </a>--}}
{{--</div>--}}