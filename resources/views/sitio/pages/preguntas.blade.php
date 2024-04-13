@extends('sitio.layout.principal') @section('content')
<body style="background-color: #8feed6">
    <section>
        <br /><br />
        <!-- <img
            class="img-fluid"
            src="{{ asset('assets/IMG/fondo2.jpg') }}"
            alt=""
        /> -->

        <div class="row-cols-auto d-flex justify-content-center">
            <div class="col-12">
                <img
                    class="img-fluid limon"
                    src="{{ asset('assets/SVG/limondudoso.svg') }}"
                    alt=""
                />
            </div>
        </div>
        <form method="POST" action="{{ route('/enviar-correo') }}">
            <div class="container-fluid">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 p-md-5 pd-sm-1 lab-col lab-col-mob">
                        <!-- TU NOMBRE  -->
                        @csrf
                        <div class="mb-3 col-12">
                            <label
                                for="exampleFormControlTextarea1"
                                class="form-label texto-label texto-label-mob"
                                >Tu nombre:</label
                            >
                            <input 
                                type="text" 
                                name="nombre"
                                id="nombre"
                                class="form-control"
                                style="background-color: #ffa94d"
                                rows="1"
                            ></input>
                            <div id="emailHelp" class="form-text">
                                Escribe tu nombre.
                            </div>
                        </div>
                        <!-- TU EMAIL  -->
                        <div class="mb-3 col-12">
                            <label
                                for="exampleInputEmail1"
                                class="form-label texto-label texto-label-mob"
                                >Correo:</label
                            >
                            <input
                                type="email"
                                name="email"
                                style="background-color: #ffa94d"
                                class="form-control"
                                id="email"
                                aria-describedby="emailHelp"
                            />
                            <div id="emailHelp" class="form-text">
                                Escribe tu correo electrónico.
                            </div>
                        </div>
                        <!-- TU DUDA  -->
                        <div class="mb-3 col-12">
                            <label
                                for="exampleFormControlTextarea1"
                                class="form-label texto-label texto-label-mob"
                                >Escribe tu duda:</label
                            >
                            <textarea
                                class="form-control"
                                style="background-color: #ffa94d"
                                id="pregunta"
                                name="pregunta"
                                rows="3"
                            ></textarea>
                        </div>
                        <div class="d-flex justify-content-center ">
                            <button type="submit" class="d-flex justify-content-center " style="background-color: transparent;  border: none; padding: 0;"
                            ><img
                                class="btn-env-pre btn-env-pre-mob"
                                src="{{ asset('assets/SVG/BTN/ENVIAR.svg') }}"
                                alt=""
                        /></button>
                        </div>
                        <br>
                        @if(session('success'))
                        <h1 class="d-flex justify-content-center title title-movb">{{ session('success') }}</h1>
                        @endif
                        <!-- <button type="submit" class="btn btn-primary">
                            Submit
                        </button> -->
                    </div>
                </div>
            </div>
        </form>
        

        <div class="row-cols-auto">
            <div class="col-12 d-flex justify-content-center">
                <img
                    class="img-fluid cebolla cebolla-mob"
                    src="{{ asset('assets/SVG/cb-lloro.svg') }}"
                    alt=""
                />
            </div>
        </div>
        <!-- <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <img
                    class="img-fluid cebolla cebolla-mob"
                    src="{{ asset('assets/SVG/cb-lloro.svg') }}"
                    alt=""
                />
            </div>
        </div> -->
    
    </section>
</body>

@endsection

