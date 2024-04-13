@extends('sitio.layout.principal') @section('content')

<section  style="background-color: #FCEEAC;">
        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="news-box">
                            <h1 class="news-titulo">¡Victoria en Expo-Ciencias para Shadow Corporation y su Proyecto Alimon!</h1>
                        </div>  
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid d-flex align-items-center flex-column img-background-news" 
            style="background-image: url('{{ asset('assets/SVG/img_blog/fondo/fondo_news.svg') }}');">

            <div class="container">
                <div class="row text-center align-items-center">
                    <div class="container-fluid d-flex align-items-center flex-column">
                        <img src="{{ asset('assets/SVG/img_blog/noticias/ALIMON_MEDALLA-01.svg') }}" class="borde-img" alt="...">
                        <br>
                    </div>
                    <div>
                        <p class="ulti-text color-text">
                        Shadow Corporation ha logrado una victoria destacada en Expo-Ciencias con su más reciente innovación, "Alimon". 
                            </p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                        <img src="{{ asset('assets/IMG/noticia1.jpeg') }}" alt="" class="borde-img1">
                        <br> <br>
                    </div>  
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                        <img src="{{ asset('assets/IMG/gana_expo.jpg') }}" alt="" class="borde-img1">
                        <br> <br>
                    </div>  
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <p class="news-text color-text">
                        Este proyecto, diseñado para promover hábitos alimenticios saludables en niños y familias, cautivó a los jueces y se alzó como el 
                        claro ganador entre una serie de proyectos competitivos.
                        </p>
                        <br>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
                        <p class="news-text color-text">Este logro marca el comienzo de una nueva era de salud y bienestar, donde la innovación y el compromiso 
                            se unen para crear un mundo más saludable para todos.</p>
                            <br>
                    </div>
                    <div>
                        <p class="ulti-text"> <strong>
                                ¡Arriba Shadow Corporation y "Alimon"!
                                </strong></p>
                    </div>
                </div>
            </div>
        </div>

</section>
@endsection
