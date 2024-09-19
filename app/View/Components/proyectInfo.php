<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProjectInfo extends Component
{
    public $description;
    public $link;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($description, $link)
    {
        $this->description = $description;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.project-info');
    }
}
