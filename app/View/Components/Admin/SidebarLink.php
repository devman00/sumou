<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SidebarLink extends Component
{
    /**
     * Create a new component instance.
     */
    
    public $hasDropdown; 
    public $title; 
    public $link; 
    public $icon;
    public $isChildren;
    public $activeLink;

    public function __construct($hasDropdown=false, $title, $link='/', $icon='', $isChildren=false, $activeLink='')
    {
        $this->hasDropdown = $hasDropdown;
        $this->title = $title;
        $this->link = $link;
        $this->icon = $icon;
        $this->isChildren = $isChildren;
        $this->activeLink = $activeLink;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.sidebar-link');
    }
}
