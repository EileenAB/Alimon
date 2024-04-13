@extends('sitio.layout.principal') @section('content')
<section class="" >
    <section>
        <div class="container-fluid" style="background-color: #c2e183">
            <br />
            <div class="row d-flex justify-content-center">
                <img
                    class="img-fluid"
                    src="{{ asset('assets/SVG/intro.svg') }}"
                    alt=""
                    style="width: 90%; height: auto"
                />
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div
                class="row d-flex justify-content-center"
                style="
                    background: linear-gradient(
                        180deg,
                        #c2e183 0%,
                        #b5d576 13.86%,
                        #a9cb6b 13.92%,
                        #9dc15f 14.18%
                    );
                "
            >
                <div class="row align-items-center">
                    <div class="col-md-6" style="margin-top: 2em">
                        <div data-aos="fade-down" class="">
                            <h1
                                class="d-flex justify-content-center tit tit-mob tit-lg"
                            >
                                ¿Qué es Alimón?
                            </h1>
                            <p  class="inicio inicio-lg inicio-mov">
                                Alimón, app de nutrición para niños, proporciona
                                una plataforma interactiva y educativa con
                                información nutricional, recetas, consejos y
                                juegos, promoviendo hábitos saludables de forma
                                divertida.
                            </p>
                        </div>
                    </div>
                    <div  class="col-md-6">
                        <img
                            src="{{ asset('assets/SVG/fh.svg') }}"
                            class="img-fluid"
                            alt="..."
                            style="width: 70%; height: auto"
                        />
                    </div>
                </div>
                <!-- <img
                    class="img-fluid"
                    src="{{ asset('assets/SVG/prot.svg') }}"
                    alt=""
                    style="width: 70%; height: auto"
                /> -->
            </div>
        </div>
    </section>

    <!-- CARDS -->

    <section style="background-color: #ddd8d8; ">
        <div class="container">
            <br>
            <br>
            <h1  data-aos="zoom-in" data-aos="zoom-in" class="d-flex justify-content-center title-1 title-1-mob">
                ¡Jugando y aprendiendo!
            </h1>
            <br>
            <div
                class="row d-flex justify-content-center row-cols-2 row-cols-lg-4 g-2 g-lg-3"
            >

        
                <div class="col">
                    <div data-aos="zoom-in" class="p-3 cards cards-mobile">
                        <img
                            class="img-fluid"
                            src="{{ asset('assets/SVG/CARDS/card1.svg') }}"
                            alt=""
                            style="width: 100%; height: auto"
                        />
                    </div>
                </div>
                <div class="col">
                    <div data-aos="zoom-in" class="p-3 cards">
                        <img
                            class="img-fluid"
                            src="{{ asset('assets/SVG/CARDS/card2.svg') }}"
                            alt=""
                            style="width: 100%; height: auto"
                        />
                    </div>
                </div>
                <div class="col">
                    <div data-aos="zoom-in" class="p-3 cards">
                        <img
                            class="img-fluid"
                            src="{{ asset('assets/SVG/CARDS/card3.svg') }}"
                            alt=""
                            style="width: 100%; height: auto"
                        />
                    </div>
                </div>
                <div class="col">
                    <div data-aos="zoom-in" class="p-3 cards">
                        <img
                            class="img-fluid"
                            src="{{ asset('assets/SVG/CARDS/card4.svg') }}"
                            alt=""
                            style="width: 100%; height: auto"
                        />
                    </div>
                </div>
            </div>
            <br> <br>
        </div>

        <!-- <div class="container-fluid">
            <div
                class="row d-flex justify-content-center"
                style="background-color: #ffffff"
            >
                <img
                    class="img-fluid"
                    src="{{ asset('assets/SVG/cards.svg') }}"
                    alt=""
                    style="width: 70%; height: auto"
                />
            </div>
        </div> -->
    </section>
    <section data-aos="fade style="background-color: #ddd8d8">


        <!-- QUIENES SOMOS  -->
       
        <div
            class="containe-lg section-qs section-qs-mb"
            style="background-color: #ffb53e"
        >
            <h1 class="d-flex justify-content-center title-1 title-1-mob">
                ¿QUIENES SOMOS?
            </h1>
            <br />
            <br />
            <div class="row align-items-center">
                <div class="col-md-6 mar-pro">
                    <img
                        src="{{ asset('assets/IMG/nosotros1.png') }}"
                        data-aos="fade"
                        class="img-fluid animation"
                        alt="..."
                        style="width: 90%; height: auto"
                    />
                </div>
                <div data-aos="zoom-in" class="col-md-6 cajita mobile">
                    <div  class="caja cajs">
                        <p class="int text texto-mob text-lg">
                            Alimón es una marca comprometida con el
                            <strong style="color: #ff553e">bienestar</strong>
                            y la
                            <strong style="color: #ff553e">salud</strong> de los
                            niños mexicanos. Surgió en respuesta al alarmante
                            problema de la
                            <strong style="color: #ff553e"
                                >mala alimentación infantil</strong
                            >
                            en el país, con la convicción de que la creatividad
                            y la innovación pueden generar un cambio social
                            positivo. Nos dedicamos a desarrollar
                            <strong style="color: #ff553e"
                                >soluciones educativas y tecnológicas</strong
                            >
                            que promuevan hábitos alimenticios saludables desde
                            una edad temprana, involucrando activamente a los
                            niños y a sus familias en este proceso de
                            <strong style="color: #ff553e"
                                >transformación.</strong
                            >
                        </p>
                    </div>
                </div>

                <!-- MISION  -->
                <div class="row align-items-center">
                    <div
                    data-aos="zoom-in"
                        class="col-md-6 cajita2 mobile"
                        style="margin-top: 2em"
                    >
                        <div class="caja cajs">
                            <h1 class="d-flex justify-content-center title">
                                MISIÓN
                            </h1>
                            <p class="int text texto-mob text-lg">
                                Nos proponemos
                                <strong style="color: #ff553e"
                                    >impulsar la salud y el bienestar</strong
                                >
                                de la infancia en México a través de una
                                <strong style="color: #ff553e"
                                    >plataforma interactiva y educativa</strong
                                >. Nuestro objetivo es inculcar prácticas
                                alimenticias sanas desde temprana edad,
                                capacitando a los niños y sus familias para que
                                realicen
                                <strong style="color: #ff553e"
                                    >elecciones nutricionales informadas</strong
                                >. Esta misión busca generar un cambio
                                significativo en la
                                <strong style="color: #ff553e"
                                    >salud comunitaria</strong
                                >
                                y forjar un futuro más saludable para nuestra
                                sociedad.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img
                            src="{{ asset('assets/IMG/mision1.png') }}"
                            data-aos="fade"
                            class="img-fluid img-dsc animation"
                            alt="..."
                            style="width: 90%; height: auto"
                        />
                    </div>
                </div>

                <!-- VISION  -->
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img
                            src="{{ asset('assets/IMG/vision1.png') }}"
                            data-aos="fade"
                            class="img-fluid animation"
                            alt="..."
                            style="width: 90%; height: auto"
                        />
                    </div>
                    <div
                        data-aos="zoom-in"
                        class="col-md-6 cajita2 mobile"
                        style="margin-top: 2em"
                    >
                        <div class="caja cajs">
                            <h1 class="d-flex justify-content-center title">
                                VISIÓN
                            </h1>
                            <p class="int text texto-mob text-lg">
                                Nuestra visión en Alimon es ser líderes en la
                                promoción de
                                <strong style="color: #ff553e"
                                    >hábitos alimenticios saludables</strong
                                >
                                entre los niños y las familias en México, siendo
                                reconocidos como una herramienta efectiva y
                                confiable para mejorar la
                                <strong style="color: #ff553e"
                                    >salud y el bienestar</strong
                                >
                                de las generaciones futuras. Nos comprometemos a
                                seguir innovando y colaborando con
                                <strong style="color: #ff553e"
                                    >expertos en salud y educación</strong
                                >
                                para ofrecer soluciones significativas y
                                sostenibles.
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <br /><br /><br />
            <h1 class="d-flex justify-content-center title">EQUIPO</h1>
            <br />


            <div class="row row-cols-3 row-cols-lg-3 g-2 g-lg-3 text-center">
                <!-- ALEXIA -->
                <div class="col color-caj color-caj-mob">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modalPatricia">
                        <img data-aos="zoom-in" src="{{ asset('assets/SVG/EQUIPO_PERSONAJES/ARANDANO.svg') }}" class="img-fluid" alt="Patricia" style="width: 300px; height: auto"/>
                        <h1 class="title title-movb">Alexia Patricia</h1>
                    </button>

                    <!-- Modal Patricia -->
                    <div class="modal fade" id="modalPatricia" tabindex="-1" aria-labelledby="modalPatriciaLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalPatriciaLabel"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                </div>
                                <div class="modal-body" style="background-color: #DDEBF7;">
                                    <img src="{{ asset('assets/SVG/EQUIPO_PERSONAJES/ARANDANO.svg') }}" class="img-fluid" alt="Patricia" style="width: 300px; height: auto"/>
                                     <h1 class="title title-movb">Alexia Patricia</h1>
                                     <p class="int text texto-mob text-lg">
                                        ¡Hola! Mi nombre es <strong style="color: rgb(35, 114, 198);">Alexia Patricia</strong>. 
                                        Adoro jugar <strong style="color: rgb(35, 114, 198);">videojuegos</strong>, 
                                        <strong style="color: rgb(35, 114, 198);">pintar</strong>, 
                                        <strong style="color: rgb(35, 114, 198);">dibujar</strong>, y también disfruto mucho 
                                        <strong style="color: rgb(35, 114, 198);">dormir</strong>. Sin embargo, en Alimon,
                                         desempeño un rol crucial como encargada de 
                                         <strong style="color: rgb(35, 114, 198);">administrar</strong> las tareas de los integrantes,
                                          así como de llevar la <strong style="color: rgb(35, 114, 198);">programación</strong> y
                                           <strong style="color: rgb(35, 114, 198);">administración</strong> de 
                                           <strong style="color: rgb(35, 114, 198);">Unity</strong> para el juego.</p>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- JENNI -->
                <div class="col color-caj color-caj-mob">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modalJenni">
                        <img data-aos="zoom-in" src="{{ asset('assets/SVG/EQUIPO_PERSONAJES/ELOTE.svg') }}" class="img-fluid" alt="Jenni" style="width: 300px; height: auto"/>
                        <h1 class="title title-movb">Jennifer Eileen</h1>
                    </button>

                    <!-- Modal Jenni -->
                    <div class="modal fade" id="modalJenni" tabindex="-1" aria-labelledby="modalJenniLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalJenniLabel"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                </div>
                                <div class="modal-body" style="background-color: #BEE3F8;">
                                    <img src="{{ asset('assets/SVG/EQUIPO_PERSONAJES/ELOTE.svg') }}" class="img-fluid" alt="Jenni" style="width: 300px; height: auto"/>
                                    <h1 class="title title-movb">Jennifer Eileen</h1>
                                    <p class="int text texto-mob text-lg">
                                        Hola, soy Eileen. En mi tiempo libre, me apasiona jugar videojuegos y ver series;
                                         sin embargo, en este proyecto, despliego mis habilidades como encargada de la
                                        <strong style="color: rgb(35, 114, 198);">Base de Datos</strong> y el <strong style="color: rgb(35, 114, 198);">Backend</strong>. 
                                        Mi entusiasmo por la tecnología y mi dedicación hacia la eficiencia impulsan mi desempeño en esta posición.</p>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- LUIS -->
                <div class="col color-caj color-caj-mob">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modalLuis">
                        <img data-aos="zoom-in" src="{{ asset('assets/SVG/EQUIPO_PERSONAJES/LICHIE.svg') }}" class="img-fluid" alt="Luis" style="width: 300px; height: auto"/>
                        <h1 class="title title-movb">Alberto Castillo</h1>
                    </button>

                    <!-- Modal Luis -->
                    <div class="modal fade" id="modalLuis" tabindex="-1" aria-labelledby="modalLuisLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalLuisLabel"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                </div>
                                <div class="modal-body" style="background-color: #C6F6D5;">
                                    <img src="{{ asset('assets/SVG/EQUIPO_PERSONAJES/LICHIE.svg') }}" class="img-fluid" alt="Luis" style="width: 300px; height: auto"/>
                        <h1 class="title title-movb">Alberto Castillo</h1>
                        <p class="int text texto-mob text-lg">
                            ¡Hola! Mi nombre es 
                            <strong style="color: rgb(35, 114, 198);">Alberto Castillo</strong>. 
                            Me apasiona <strong style="color: rgb(35, 114, 198);">la fotografía</strong> 
                            y mantenerme activo yendo al <strong style="color: rgb(35, 114, 198);">gimnasio</strong>. 
                            Sin embargo, en Alimón, tengo la crucial responsabilidad de liderar el departamento de 
                            <strong style="color: rgb(35, 114, 198);">Diseño UX/UI</strong>.
                        </p>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- LEILANI -->
                <div class="col color-caj color-caj-mob">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modalLeilani">
                        <img data-aos="zoom-in" src="{{ asset('assets/SVG/EQUIPO_PERSONAJES/FRESA.svg') }}" class="img-fluid" alt="Leilani" style="width: 300px; height: auto"/>
                        <h1 class="title title-movb">Sara Leilani</h1>
                    </button>

                    <!-- Modal Leilani -->
                    <div class="modal fade" id="modalLeilani" tabindex="-1" aria-labelledby="modalLeilaniLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalLeilaniLabel"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                </div>
                                <div class="modal-body" style="background-color: #BEE3F8;">
                                    <img src="{{ asset('assets/SVG/EQUIPO_PERSONAJES/FRESA.svg') }}" class="img-fluid" alt="Leilani" style="width: 300px; height: auto"/>
                                    <h1 class="title title-movb">Sara Leilani</h1>
                                    <p class="int text texto-mob text-lg">
                                        ¡Hola! Soy <strong style="color: rgb(35, 114, 198);">Leilani</strong>
                                        y soy la encargada de darle vida a todos los personajes de Alimón 🥰. 
                                        Me encargo del <strong style="color: rgb(35, 114, 198);">diseño 2D</strong> 
                                        y mi parte favorita es <strong style="color: rgb(35, 114, 198);">modelar mis personajes en 3D
                                        </strong>.
                                    </p>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ARANTZA -->
                <div class="col color-caj color-caj-mob">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modalArantza">
                        <img data-aos="zoom-in" src="{{ asset('assets/SVG/EQUIPO_PERSONAJES/MANDARINA.svg') }}" class="img-fluid" alt="Arantza" style="width: 300px; height: auto"/>
                        <h1 class="title title-movb">Mariam Vazques</h1>
                    </button>

                    <!-- Modal Leilani -->
                    <div class="modal fade" id="modalArantza" tabindex="-1" aria-labelledby="modalArantzaLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalArantzaLabel"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                </div>
                                <div class="modal-body" style="background-color: #BEE3F8;">
                                    <img src="{{ asset('assets/SVG/EQUIPO_PERSONAJES/MANDARINA.svg') }}" class="img-fluid" alt="Arantza" style="width: 300px; height: auto"/>
                                        <h1 class="title title-movb">Mariam Vazques</h1>
                                        <p class="int text texto-mob text-lg">
                                            Hola, mi nombre es Mariam Vásquez, fanática a más no poder de
                                             <strong style="color: rgb(35, 114, 198);">Kenia OS</strong>, 
                                             soy algo extrovertida y me encanta el chisme. En alimon soy la encargada del 
                                             departamento de <strong style="color: rgb(35, 114, 198);">marketing</strong>.
                                            </p>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ANA -->
                <div  class="col color-caj color-caj-mob">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modalAna">
                        <img data-aos="zoom-in" src="{{ asset('assets/SVG/EQUIPO_PERSONAJES/ACEITUNA.svg') }}" class="img-fluid" alt="Ana" style="width: 300px; height: auto"/>
                        <h1 class="title title-movb">Ana Lizeth</h1>
                    </button>

                    <!-- Modal Leilani -->
                    <div class="modal fade" id="modalAna" tabindex="-1" aria-labelledby="modalAnaLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalAnaLabel"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                </div>
                                <div class="modal-body" style="background-color: #BEE3F8;">
                                    <img src="{{ asset('assets/SVG/EQUIPO_PERSONAJES/ACEITUNA.svg') }}" class="img-fluid" alt="Ana" style="width: 300px; height: auto"/>
                                    <h1 class="title title-movb">Ana Lizeth</h1>
                                    <p class="int text texto-mob text-lg">
                                        Hola, mi nombre es <strong style="color: rgb(35, 114, 198);">Lizeth Cruz</strong>. 
                                        Me gusta jugar <strong style="color: rgb(35, 114, 198);">videojuegos</strong>, 
                                        <strong style="color: rgb(35, 114, 198);">leer</strong> y adoro a los 
                                        <strong style="color: rgb(35, 114, 198);">gatitos</strong>. 
                                        Pero en el equipo de Alimón, soy la encargada del departamento de 
                                        <strong style="color: rgb(35, 114, 198);">modelado 3D</strong>.
                                    </p>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            <br /><br /><br />
        </div>


    </section>
</section>
@endsection
