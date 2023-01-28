<?php

namespace App\View\Components;

use App\Models\setting;
use Illuminate\View\Component;
use App\Models\social;

class Header extends Component
{

    public $setting;
    public $social;

    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->setting = setting::first();
        $this->social = social::get();

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header');
    }
}
