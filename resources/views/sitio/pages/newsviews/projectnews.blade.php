@extends('sitio.layout.principal') @section('content')

<section  style="background-color: #FCEEAC;">
    
        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="news-box">
                            <h1 class="news-titulo">¡Shadow Corporation empieza a trabajar en proyecto "Alimon": Una Innovadora Experiencia Culinaria para Familias!</h1>
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
                        <img src="{{ asset('assets/SVG/img_blog/noticias/Saul_alimon-01.svg') }}" class="borde-img" alt="...">
                        <br>
                    </div>
                    <div>
                        <p class="news-text color-text">
                            En una emocionante revelación, Shadow Corporation ha anunciado el lanzamiento de su nuevo proyecto, "Alimon", diseñado especialmente 
                            para niños y padres. Este proyecto promete transformar la experiencia culinaria familiar al combinar diversión y aprendizaje sobre alimentación saludable.
                            </p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <img src="{{ asset('assets/IMG/icono_alimon.png') }}" alt="" class="borde-img">
                        <br> <br>
                    </div>  
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <p class="news-text color-text">
                        "Alimon" tiene como objetivo principal promover hábitos alimenticios saludables desde la infancia, ofreciendo a las familias una forma interactiva y entretenida 
                            de explorar el mundo de la comida. 
                            <br> Con una mascota virtual encantadora y actividades interactivas, este proyecto busca involucrar a los niños en el proceso de 
                            preparación de alimentos de manera educativa y divertida.
                        </p>
                        <br>
                    </div>
                    <div>
                        <p class="news-text color-text"> Este emocionante proyecto promete cambiar la forma en que las familias disfrutan y aprenden sobre la comida, invitándolas a descubrir juntas el placer de una 
                            alimentación saludable.</p>
                            <br>
                        <p class="ulti-text"> <strong>
                            ¡No te lo pierdas!
                            </strong></p>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection

