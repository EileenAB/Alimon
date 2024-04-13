@extends('sitio.layout.principal') @section('content')

<section style="background-image: linear-gradient(to bottom, #dbc4ff, #a88ef9)">
    <div 
        class="container-fluid d-flex align-items-center flex-column img-fondo">
        <img src="{{ asset('assets/IMG/banner_blog.png') }}" alt="Portada" class="img-fluid">
    </div>
    <div
        class="container-fluid d-flex align-items-center flex-column img-background"
        style="background-image: url('{{
            asset('assets/SVG/img_blog/fondo/fondo_fin.svg')
        }}');"
    >
        <!-- Noticias -->
        <div class="py-5">
            <div class="container">
                <div
                    class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2"
                >
                    <div class="col">
                        <div data-aos="zoom-in" class="bbc-card">
                            <a href="{{ route('sitio.projectnews') }}">
                                <div class="poster-image">
                                    <img
                                        src="{{
                                            asset(
                                                'assets/SVG/img_blog/noticias/Saul_alimon-01.svg'
                                            )
                                        }}"
                                        class="d-block"
                                        alt="..."
                                        style="width: 100%"
                                    />
                                </div>
                                <div class="card posts-text">
                                    <h3 class="tittle-principal">Alimon</h3>
                                    <p class="text">
                                        Nuevo proyecto de la empresa Shadow
                                        Corporation...
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col">
                        <div data-aos="zoom-in" class="bbc-card">
                            <a href="{{ route('sitio.newswins') }}">
                                <div class="poster-image">
                                    <img
                                        src="{{
                                            asset(
                                                'assets/SVG/img_blog/noticias/ALIMON_MEDALLA-01.svg'
                                            )
                                        }}"
                                        class="d-block"
                                        alt="..."
                                        style="width: 100%"
                                    />
                                </div>
                                <div class="card posts-text">
                                    <h3 class="tittle-principal">
                                        Alimon triunfa
                                    </h3>
                                    <p class="text">
                                        Alimon de Shadow Corporation gana en
                                        Expo-Ciencias...
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col">
                        <div data-aos="zoom-in" class="bbc-card">
                            <a href="{{ route('sitio.newcharacters') }}">
                                <div class="poster-image">
                                    <img
                                        src="{{
                                            asset(
                                                'assets/SVG/img_blog/noticias/TODOS_PERSONAJES_NUEVOS-01.svg'
                                            )
                                        }}"
                                        class="d-block"
                                        alt="..."
                                        style="width: 100%"
                                    />
                                </div>
                                <div class="card posts-text">
                                    <h3 class="tittle-principal">
                                        Equipo Alimon
                                    </h3>
                                    <p class="text">
                                        El equipo de Alimon inspira nuevos
                                        personajes...
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col">
                        <div data-aos="zoom-in" class="bbc-card">
                            <a href="{{ route('sitio.nutritionnews') }}">
                                <div class="poster-image">
                                    <img
                                        src="{{
                                            asset(
                                                'assets/SVG/img_blog/noticias/LIMON Y SANDIA-01.svg'
                                            )
                                        }}"
                                        class="d-block"
                                        alt="..."
                                        style="width: 100%"
                                    />
                                </div>
                                <div class="card posts-text">
                                    <h3
                                        class="tittle-principal text-align-center"
                                    >
                                        Colaboración
                                    </h3>
                                    <p class="text">
                                        Maximiliano Paniagua y Alimon se unen
                                        por la alimentación saludable
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recipes -->
        <div class="container">
            <div class="row text-center align-items-center">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <img
                        data-aos="flip-down"
                        src="{{
                            asset(
                                'assets/IMG/RECIPES/titulo_recipes-01.png'
                            )
                        }}"
                        alt=""
                        class="img_tr"
                    />
                    <br />
                </div>
                <div class="col-12">
                    <div data-aos="zoom-in" class="recipe-text">
                        <p>
                            Plan de alimentación para niños de 7 años en
                            adelante. <br />Incluye 1450 kcal diarias con 55g de
                            proteína, 51.5g de grasas y 187g de carbohidratos
                            para un desarrollo saludable.
                        </p>
                    </div>
                </div>
                <!-- Desayuno -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="text-black">
                        <img
                            data-aos="slide-up"
                            class="card-img"
                            src="{{
                                asset(
                                    'assets/IMG/RECIPES/RECIPES_Mesa de trabajo 1.png'
                                )
                            }}"
                            alt="Card image"
                        />
                        <img
                            src="{{
                                asset(
                                    'assets/SVG/img_blog/icon/icon_desayuno_Mesa de trabajo 1.svg'
                                )
                            }}"
                            width="25%"
                            alt=""
                            class="mx-auto d-block"
                        />
                    </div>
                </div>
                <!-- Comida -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="text-black">
                        <img
                            data-aos="slide-up"
                            class="card-img"
                            src="{{
                                asset(
                                    'assets/IMG/RECIPES/RECIPES-02.png'
                                )
                            }}"
                            alt="Card image"
                        />
                        <img
                            src="{{
                                asset(
                                    'assets/SVG/img_blog/icon/icon_comida-02.svg'
                                )
                            }}"
                            width="25%"
                            alt=""
                            class="mx-auto d-block"
                        />
                    </div>
                </div>
                <!-- Cena -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="text-black">
                        <img
                            data-aos="slide-up"
                            class="card-img"
                            src="{{
                                asset('assets/IMG/RECIPES/RECIPES-03.png')
                            }}"
                            alt="Card image"
                        />
                        <img
                            src="{{
                                asset('assets/SVG/img_blog/icon/icon_cena.svg')
                            }}"
                            width="25%"
                            alt=""
                            class="mx-auto d-block"
                        />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div data-aos="zoom-in" class="box-nutri">
                        <p class="h3 tittle-en">Nutricionista</p>
                        <img
                            src="{{
                                asset(
                                    'assets/SVG/img_blog/recipes/SANDIA nutricionista.svg'
                                )
                            }}"
                            width="60%"
                            alt="Personaje del nutricionista"
                        />
                        <p class="h3 tittle-nutri">Maximiliano Paniagua</p>
                        <p class="nutri-box">
                            Una alimentación saludable es clave para un
                            crecimiento fuerte y una mente alerta.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br />
</section>
@endsection
