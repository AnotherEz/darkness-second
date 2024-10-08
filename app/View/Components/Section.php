<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Section extends Component
{
    public $title;
    public $route;

    public function __construct($title, $route)
    {
        $this->title = $title;
        $this->route = $route;
    }

    public function render()
    {
        return view('components.section');
    }
}
