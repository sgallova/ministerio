@extends('layouts.app')

@section('content')
    <section class="container-question">
        <div class="rd-container">
            <div class="rd-element rd-s-100">
                <h1 class="text-color-blue-bold">Evalúa lo que Sabes</h1>
            </div>
            <div class="rd-element rd-s-100">
                <h2 class="text-color-blue-bold">Los hechos</h2>
            </div>
        </div>
        <div class="rd-container">
            @foreach(__('facts') as $fact)
                <div class="rd-element rd-s-100 rd-l-30">
                    <div class="container-twitter fact">
                        {{ $fact['question'] }}
                        <label for="fact-{{ $loop->index }}-yes">
                            <input type="radio" name="fact-{{ $loop->index }}" value="1" id="fact-{{ $loop->index }}-yes">Sí
                        </label>
                        <label for="fact-{{ $loop->index }}-not">
                            <input type="radio" name="fact-{{ $loop->index }}" value="0" id="fact-{{ $loop->index }}-not">No
                        </label>
                        <label for="fact-{{ $loop->index }}-sure">
                            <input type="radio" name="fact-{{ $loop->index }}" value="3" id="fact-{{ $loop->index }}-sure">No estoy seguro
                        </label>
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
                    <a href="{{ route('evaluate-what-knows') }}">
                        <img src="images/nav-foot-5.png" alt="">
                    </a>
                </p>
            </div>
        </div>
    </section>
@endsection
