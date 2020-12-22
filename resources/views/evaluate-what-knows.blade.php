@extends('layouts.app')

@section('content')
    <section class="container-question">
        <div class="rd-container">
            <div class="rd-element rd-s-100">
                <h1 class="text-color-blue-bold title">Evalúe lo que Sabes</h1>
            </div>
            <div class="rd-element rd-s-100">
                <h2 class="text-color-blue-bold title-300-2em">Los hechos</h2>
            </div>
        </div>
        <div class="rd-container">
            @foreach(__('facts') as $fact)
                <div class="rd-element rd-s-100 rd-l-1-3">
                    <div class="container-twitter fact">
                        {{ $fact['question'] }}
                        <label for="fact-{{ $loop->index }}-yes">
                            <input type="radio" name="fact-{{ $loop->index }}" data-content="fact-{{ $loop->index }}" data-content-display="fact-yes-{{ $loop->index }}" id="fact-{{ $loop->index }}-yes">Sí
                        </label>
                        <label for="fact-{{ $loop->index }}-not">
                            <input type="radio" name="fact-{{ $loop->index }}" data-content="fact-{{ $loop->index }}" data-content-display="fact-not-{{ $loop->index }}" id="fact-{{ $loop->index }}-not">No
                        </label>
                        <label for="fact-{{ $loop->index }}-sure">
                            <input type="radio" name="fact-{{ $loop->index }}" data-content="fact-{{ $loop->index }}" data-content-display="fact-sure-{{ $loop->index }}" id="fact-{{ $loop->index }}-sure">No estoy seguro
                        </label>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="rd-container">
            @foreach(__('facts') as $fact)
                <div class="rd-element rd-s-100 rd-l-1-3">
                    <div id="fact-{{ $loop->index }}" class="container-twitter fact response none">
                        <div id="fact-yes-{{ $loop->index }}" class="fact-yes t-center none">
                            @if ($fact['correct'] == 'yes')
                                <img src="images/retro-correcto.png" alt="">
                            @else
                                <img src="images/retro-incorrecto.png" alt="">
                            @endif
                            <p class="t-center">
                                {!! $fact['yes'] !!}
                            </p>
                        </div>
                        <div id="fact-not-{{ $loop->index }}" class="fact-no t-center none">
                            @if ($fact['correct'] == 'not')
                                <img src="images/retro-correcto.png" alt="">
                            @else
                                <img src="images/retro-incorrecto.png" alt="">
                            @endif
                            <p class="t-center">
                                {!! $fact['not'] !!}
                            </p>
                        </div>
                        <div id="fact-sure-{{ $loop->index }}" class="fact-sure t-center none">
                            <img src="images/retro-duda.png" alt="">
                            <p class="t-center">
                                {!! $fact['not_sure'] !!}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section class="bg-color-blue-blod full">
        <div class="rd-container">
            <div class="rd-element rd-s-100 t-center flex rd-element-align-center rd-element-justify-center">
                <p class="text-color-blue-ligth">
                    <a href="{{ route('explore-your-feelings') }}">
                        <img src="images/nav-foot-3.png" alt="">
                    </a>
                    <a href="{{ route('messages-to-remember') }}">
                        <img src="images/nav-foot-5.png" alt="">
                    </a>
                </p>
            </div>
        </div>
    </section>
@endsection
@push('plugin-js')
    <script src="{{ asset('js/evaluate_what_knows.js') }}"></script>
@endpush
