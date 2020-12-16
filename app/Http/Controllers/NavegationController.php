<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavegationController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Metodo para renderizar la plantilla de la primera seccion
     */
    public function KnowAbout()
    {
        return view('know_about', [
            'menu' => 'know-about'
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Metodo para renderizar la plantilla de la segunda seccion
     */
    public function BenefitsAlternation()
    {
        return view('benefits_alternation', [
            'menu' => 'benefits-alternation'
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Metodo para renderizar la plantilla de la tercera seccion
     */
    public function ExploreYourFeelings()
    {
        return view('explore_your_feelings', [
            'menu' => 'explore_your_feelings'
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Metodo para renderizar la plantilla de la cuarta seccion
     */
    public function EvaluateWhatKnows()
    {
        return view('evaluate-what-knows', [
            'menu' => 'evaluate-what-knows'
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Metodo para renderizar la plantilla de la quinta seccion
     */
    public function MessagesRemember()
    {
        return view('messages-to-remember', [
            'menu' => 'messages-to-remember'
        ]);
    }
}
