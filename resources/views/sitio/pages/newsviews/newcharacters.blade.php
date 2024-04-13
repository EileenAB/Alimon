@extends('sitio.layout.principal') @section('content')
<section style="background-color: #fceeac">
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="news-box">
                        <h1 class="news-titulo">
                            ¡Personajes de Alimon: Representación del Equipo de
                            Shadow Corporation!
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div
        class="container-fluid d-flex align-items-center flex-column img-background-news"
        style="background-image: url('{{
            asset('assets/SVG/img_blog/fondo/fondo_news_01.svg')
        }}');"
    >
        <div class="container">
            <div class="row text-center align-items-center">
                <div
                    class="container-fluid d-flex align-items-center flex-column"
                >
                    <img
                        src="{{
                            asset(
                                'assets/SVG/img_blog/noticias/TODOS_PERSONAJES_NUEVOS-01.svg'
                            )
                        }}"
                        class="borde-img1"
                        alt="..."
                    />
                    <br />
                </div>
                <div>
                    <p class="news-text color-text">
                        En un anuncio lleno de emoción, Shadow Corporation ha
                        revelado los entrañables personajes de su innovador
                        proyecto, Alimon. Estos coloridos protagonistas no solo
                        encarnan la esencia del proyecto, sino que también
                        representan el ingenio y la dedicación del equipo de
                        Shadow Corporation.
                    </p>
                </div>

                <div class="col-xs-2 col-sm-3 col-md-4 col-lg-4">
                    <img
                        src="{{
                            asset('assets/SVG/EQUIPO_PERSONAJES/ACEITUNA.svg')
                        }}"
                        alt=""
                        class="borde-img"
                    />
                    <br />
                    <br />
                </div>
                <div class="col-xs-2 col-sm-3 col-md-4 col-lg-4">
                    <img
                        src="{{
                            asset('assets/SVG/EQUIPO_PERSONAJES/ARANDANO.svg')
                        }}"
                        alt=""
                        class="borde-img"
                    />
                    <br />
                    <br />
                </div>
                <div class="col-xs-2 col-sm-3 col-md-4 col-lg-4">
                    <img
                        src="{{
                            asset('assets/SVG/EQUIPO_PERSONAJES/ELOTE.svg')
                        }}"
                        alt=""
                        class="borde-img"
                    />
                    <br />
                    <br />
                </div>
                <div class="col-xs-2 col-sm-3 col-md-4 col-lg-4">
                    <img
                        src="{{
                            asset('assets/SVG/EQUIPO_PERSONAJES/LICHIE.svg')
                        }}"
                        alt=""
                        class="borde-img"
                    />
                    <br />
                    <br />
                </div>
                <div class="col-xs-2 col-sm-3 col-md-4 col-lg-4">
                    <img
                        src="{{
                            asset('assets/SVG/EQUIPO_PERSONAJES/MANDARINA.svg')
                        }}"
                        alt=""
                        class="borde-img"
                    />
                    <br />
                    <br />
                </div>
                <div class="col-xs-2 col-sm-3 col-md-4 col-lg-4">
                    <img
                        src="{{
                            asset('assets/SVG/EQUIPO_PERSONAJES/FRESA.svg')
                        }}"
                        alt=""
                        class="borde-img"
                    />
                    <br />
                    <br />
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p class="news-text color-text" style="width=70%">
                        Con rasgos distintivos y encantadores, los nuevos
                        personajes prometen llevar la magia de Alimon a nuevos
                        horizontes.
                    </p>
                    <br />
                </div>

                <div>
                    <br />
                    <p class="ulti-text">
                        <strong> ¡Viva la magia de Alimon! </strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
