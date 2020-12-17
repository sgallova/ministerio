@extends('layouts.app')
@push('plugin-css')
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
@endpush
@section('content')
    <section class="container-question">
        <div class="rd-container">
            <div class="rd-element rd-s-100">
                <h1 class="text-color-blue-bold">CONOZCA LA EVIDENCIA</h1>
            </div>
        </div>
        <div class="rd-container container-all-section-evidences">
            <div class="rd-element rd-s-100 rd-l-25">
                <div class="container-evidence">
                    <p>
                        La infección por COVID-19 es menos común en los niños que en los adultos.
                        En los niños la infección suele ser más leve y se presentan más casos sin síntomas.
                        <br />
                        De 100 personas que se infectan por COVID-19, solo 2 son niños
                    </p>
                </div>
            </div>
            <div class="rd-element rd-s-100 rd-l-25">
                <div class="container-evidence">
                    <p>
                        La posibilidad de que un niño transmita la infección por COVID-19 a otras personas parece ser igual o incluso menor en comparación a los adultos.
                        Los niños no son súper-transmisores como se creía al inicio de la pandemia.
                    </p>
                </div>
            </div>
            <div class="rd-element rd-s-100 rd-l-25">
                <div class="container-evidence">
                    <p>
                        Las secretarías de educación y de salud evalúan rutinariamente el comportamiento del COVID-19 en la región y en la institución,
                        y con base en ello toman decisiones sobre la apertura o cierre de las instituciones educativas.
                    </p>
                </div>
            </div>
            <div class="rd-element rd-s-100 rd-l-25">
                <div class="container-evidence">
                    <p>
                        Para tener jornadas escolares seguras, las instituciones educativas requieren seguir el protocolo de bioseguridad tanto por los niños, niñas, adolescentes y jóvenes, como por todos los adultos que entran en contacto con ella.
                        La institución educativa es un espacio para apropiar y promover prácticas de cuidado y autocuidado.
                    </p>
                </div>
            </div>
        </div>
        <div class="rd-container">
            <div class="rd-element rd-s-100">
                <h2 class="text-color-blue-bold">PREGUNTAS FRECUENTES</h2>
            </div>
        </div>
        <div class="rd-container">
            <div class="rd-element rd-s-100 rd-l-20">
                <div class="container-frequent-question" data-modal="modal-1">
                    <p>{!! __('frequent_questions.first_question') !!}</p>
                </div>
            </div>
            <div class="rd-element rd-s-100 rd-l-20">
                <div class="container-frequent-question" data-modal="modal-2">
                    <p>{!! __('frequent_questions.second_question') !!}</p>
                </div>
            </div>
            <div class="rd-element rd-s-100 rd-l-20">
                <div class="container-frequent-question" data-modal="modal-3">
                    <p>{!! __('frequent_questions.third_question') !!}</p>
                </div>
            </div>
            <div class="rd-element rd-s-100 rd-l-20">
                <div class="container-frequent-question" data-modal="modal-4">
                    <p>{!! __('frequent_questions.fourth_question') !!}</p>
                </div>
            </div>
            <div class="rd-element rd-s-100 rd-l-20">
                <div class="container-frequent-question" data-modal="modal-5">
                    <p>{!! __('frequent_questions.fifth_question') !!}</p>
                </div>
            </div>
            <div class="rd-element rd-s-100 rd-l-20">
                <div class="container-frequent-question" data-modal="modal-6">
                    <p>{!! __('frequent_questions.sixth_question') !!}</p>
                </div>
            </div>
            <div class="rd-element rd-s-100 rd-l-20">
                <div class="container-frequent-question" data-modal="modal-7">
                    <p>{!! __('frequent_questions.seventh_question') !!}</p>
                </div>
            </div>
            <div class="rd-element rd-s-100 rd-l-20">
                <div class="container-frequent-question" data-modal="modal-8">
                    <p>{!! __('frequent_questions.eighth_question') !!}</p>
                </div>
            </div>
            <div class="rd-element rd-s-100 rd-l-20">
                <div class="container-frequent-question" data-modal="modal-9">
                    <p>{!! __('frequent_questions.ninth_question') !!}</p>
                </div>
            </div>
            <div class="rd-element rd-s-100 rd-l-20">
                <div class="container-frequent-question" data-modal="modal-10">
                    <p>{!! __('frequent_questions.tenth_question') !!}</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        @include('components.modals')
    </section>
    <section class="bg-color-blue-blod full">
        <div class="rd-container">
            <div class="rd-element rd-s-100 t-center flex rd-element-align-center rd-element-justify-center">
                <p class="text-color-blue-ligth">Ir al Siguiente Tema <a href="{{ route('benefits-alternation') }}"><img src="images/nav-foot-2.png" alt=""></a></p>
            </div>
        </div>
    </section>
@endsection
@push('plugin-js')
    <script src="{{ asset('js/know_about.js') }}"></script>
@endpush
