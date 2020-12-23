@extends('layouts.app')
@push('plugin-css')
    <link rel="stylesheet" href="{{ asset('css/range-agreement-desagreement.css') }}">
@endpush
@section('content')
    <section class="container-question">
        <div class="rd-container">
            <div class="rd-element rd-s-100">
                <h1 class="text-color-blue-bold title">Explore sus<br>sentimientos</h1>
            </div>
            <div class="rd-element rd-s-100">
                <p>Manifieste su acuerdo o desacuerdo con las siguientes afirmaciones según el siguiente rango: Muy en desacuerdo…. Indiferente…. Muy de acuerdo.</p>
            </div>
            <div class="rd-element rd-s-100">
                <h2 class="text-color-blue-bold title-300-2em">¿Qué es lo que más le importa?</h2>
            </div>
        </div>
    </section>
    <div class="rd-container">
        <div class="rd-element rd-s-100 t-center">
            <h2 class="text-color-blue-bold title-300-2em">Condiciones de bioseguridad</h2>
        </div>
    </div>
    @foreach(__('conditions.biosecurity_conditions') as $condition)
        <x-range-agreement-disagreement question="{{ $condition }}" />
    @endforeach
    <div class="rd-container">
        <div class="rd-element rd-s-100 t-center">
            <h2 class="text-color-blue-bold title-300-2em">Condiciones de aprendizaje y estudio</h2>
        </div>
    </div>
    @foreach(__('conditions.learning_study_conditions') as $condition)
        <x-range-agreement-disagreement question="{{ $condition }}" />
    @endforeach
    <div class="rd-container">
        <div class="rd-element rd-s-100 t-center">
            <h2 class="text-color-blue-bold title-300-2em">Condiciones de trabajo de los padres o cuidadores</h2>
        </div>
    </div>
    @foreach(__('conditions.working_conditions_parents_caregivers') as $condition)
        <x-range-agreement-disagreement question="{{ $condition }}" />
    @endforeach
    <div class="rd-container">
        <div class="rd-element rd-s-100 t-center title-400-2em">
            <h2 class="text-color-blue-bold title-300-2em">Condiciones del hogar</h2>
        </div>
    </div>
    @foreach(__('conditions.home_conditions') as $condition)
        <x-range-agreement-disagreement question="{{ $condition }}" />
    @endforeach

    <section class="bg-color-blue-blod full margin-top-2-5em">
        <div class="rd-container">
            <div class="rd-element rd-s-100 t-center flex rd-element-align-center rd-element-justify-center">
                <p class="text-color-blue-ligth">
                    <a class="next-sub next-two" href="{{ route('benefits-alternation') }}">
                    </a>
                    <a class="next-sub next-four" href="{{ route('evaluate-what-knows') }}">
                    </a>
                </p>
            </div>
        </div>
    </section>
@endsection
@push('plugin-js')
    <script src="{{ asset('js/range_agreement_desagreement.js') }}"></script>
@endpush
