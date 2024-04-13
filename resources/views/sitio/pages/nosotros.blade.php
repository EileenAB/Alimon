@extends('sitio.layout.principal') @section('content')
<body
    style="
        background: linear-gradient(
            162deg,
            #ffdb8e 15.37%,
            #ffe49a 22.88%,
            #6cd3ea 54.05%,
            #e998dc 94.49%
        );
    "
>
    <section>
        <br /><br /><br /><br /><br /><br />
        <h1 class="d-flex justify-content-center title">¿QUIENES SOMOS?</h1>
        <!-- QUIENES SOMOS  -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img
                        src="{{ asset('assets/IMG/nosotros1.png') }}"
                        class="img-fluid"
                        alt="..."
                        style="width: 90%; height: auto"
                    />
                </div>
                <div class="col-md-6">
                    <p class="int">
                        Alimón es una marca comprometida con el bienestar y la
                        salud de los niños mexicanos. Surgió en respuesta al
                        alarmante problema de la mala alimentación infantil en
                        el país, con la convicción de que la creatividad y la
                        innovación pueden generar un cambio social positivo. Nos
                        dedicamos a desarrollar soluciones educativas y
                        tecnológicas que promuevan hábitos alimenticios
                        saludables desde una edad temprana, involucrando
                        activamente a los niños y a sus familias en este proceso
                        de transformación.
                    </p>
                </div>
                <!-- MISION  -->
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1 class="d-flex justify-content-center title">
                            MISIÓN
                        </h1>
                        <p class="int">
                            En Alimon, nuestra misión es contribuir a la salud y
                            el bienestar de los niños mexicanos al proporcionar
                            una plataforma interactiva y educativa que promueva
                            hábitos alimenticios saludables desde una edad
                            temprana. Nos esforzamos por empoderar a los niños y
                            a sus familias para que tomen decisiones informadas
                            sobre su alimentación, creando así un impacto
                            positivo en la salud pública y en el futuro de
                            nuestra sociedad.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img
                            src="{{ asset('assets/IMG/mision1.png') }}"
                            class="img-fluid"
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
                            class="img-fluid"
                            alt="..."
                            style="width: 90%; height: auto"
                        />
                    </div>
                    <div class="col-md-6">
                        <h1 class="d-flex justify-content-center title">
                            VISIÓN
                        </h1>
                        <p class="int">
                            Nuestra visión en Alimon es ser líderes en la
                            promoción de hábitos alimenticios saludables entre
                            los niños y las familias en México, siendo
                            reconocidos como una herramienta efectiva y
                            confiable para mejorar la salud y el bienestar de
                            las generaciones futuras. Nos comprometemos a seguir
                            innovando y colaborando con expertos en salud y
                            educación para ofrecer soluciones significativas y
                            sostenibles.
                        </p>
                    </div>
                </div>
            </div>
            <br /><br /><br />
            <h1 class="d-flex justify-content-center title">EQUIPO</h1>
            <br />
            <div class="row row-cols-3 row-cols-lg-3 g-2 g-lg-3 text-center">
                <div class="col">
                    <img
                        src="{{ asset('assets/IMG/img-integrantes.jpeg') }}"
                        class="img-fluid"
                        alt="..."
                        style="width: 300px; height: auto"
                    />
                    <h1 class="title">Alexia Patricia</h1>
                </div>
                <div class="col">
                    <img
                        src="{{ asset('assets/IMG/img-integrantes.jpeg') }}"
                        class="img-fluid"
                        alt="..."
                        style="width: 300px; height: auto"
                    />
                    <h1 class="title">Jennifer Eileen</h1>
                </div>
                <div class="col">
                    <img
                        src="{{ asset('assets/IMG/img-integrantes.jpeg') }}"
                        class="img-fluid"
                        alt="..."
                        style="width: 300px; height: auto"
                    />
                    <h1 class="title">Mariam Arantza</h1>
                </div>
                <div class="col">
                    <img
                        src="{{ asset('assets/IMG/img-integrantes.jpeg') }}"
                        class="img-fluid"
                        alt="..."
                        style="width: 300px; height: auto"
                    />
                    <h1 class="title">Alberto Castillo</h1>
                </div>
                <div class="col">
                    <img
                        src="{{ asset('assets/IMG/img-integrantes.jpeg') }}"
                        class="img-fluid"
                        alt="..."
                        style="width: 300px; height: auto"
                    />
                    <h1 class="title">Sara Leilani</h1>
                </div>
                <div class="col">
                    <img
                        src="{{ asset('assets/IMG/img-integrantes.jpeg') }}"
                        class="img-fluid"
                        alt="..."
                        style="width: 300px; height: auto"
                    />
                    <h1 class="title">Ana Lizeth</h1>
                </div>
            </div>
            <br /><br /><br />
        </div>
    </section>
</body>

@endsection
