<?php

namespace App\View\Components;

use Illuminate\View\Component;

class RangeAgreementDisagreement extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    /**
     *  Pregunta que sale es la plantilla
     * @var string
     */
    public $question;

    public function __construct(string $question)
    {
        $this->question = $question;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.range-agreement-disagreement');
    }
}
