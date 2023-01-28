<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\setting;

class Layout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $setting;

    public function __construct()
    {
        //
        $this->setting = setting::first();

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout');
    }
}
