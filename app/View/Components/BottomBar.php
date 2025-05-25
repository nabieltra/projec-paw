<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BottomBar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $bar_items = [
            'home' => ['icons.home', '/home'],
            'chat' => ['icons.chat', '/chats'],
            'appointment' => ['icons.calendar', '/appointments'],
            'certificate' => ['icons.book', '/certificates'],
            'location' => ['icons.location', '/locations'],
        ];
        return view('components.bottom-bar', ['bar_items' => $bar_items]);
    }
}
