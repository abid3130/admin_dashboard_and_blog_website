<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayouts extends Component
{
     public $titles;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($titles = null)
    {
        $this->title = $titles;
        }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.app-layouts');
    }
}
