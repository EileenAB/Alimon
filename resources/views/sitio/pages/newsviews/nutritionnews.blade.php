@extends('sitio.layout.principal') @section('content')
<section style="background-color: #FCEEAC;">
    
        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="news-box">
                            <h1 class="news-titulo">¡Alimon y Maximiliano Paniagua: Alianza Saludable para niños y familias!</h1>
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
                        <img src="{{ asset('assets/SVG/img_blog/noticias/LIMON Y SANDIA-01.svg') }}" class="borde-img1" alt="...">
                        <br>
                    </div>
                    <div>
                        <p class="news-text color-text">Alimon y el nutricionista Maximiliano Paniagua se unen para ofrecer recursos educativos y prácticos que promuevan hábitos alimenticios saludables en niños y familias.
                            </p>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <img src="{{ asset('assets/SVG/img_blog/recipes/SANDIA nutricionista.svg') }}" alt="" class="borde-img">
                        <br> <br>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <p class="news-text color-text"> Juntos, Alimon y Maximiliano Paniagua trabajarán en la creación de contenido innovador, incluyendo recetas saludables y consejos prácticos, diseñados específicamente 
                            para promover hábitos alimenticios saludables desde una edad temprana. 
                        </p>
                        <br>
                    </div>
                    
                    <div>
                            <br>
                        <p class="ulti-text"> <strong>
                        ¡Una alianza poderosa por el bienestar!
                            </strong></p>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
