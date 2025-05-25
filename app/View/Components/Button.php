<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    /**
     * Create a new component instance.
     */

    public function __construct(
        public bool $inverse = false,
        public string $class = "",
        public string $onclick = "",
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $bgColor = $this->inverse ? 'bg-white' : 'bg-[#338C8B]';
        $fgColor = $this->inverse ? 'text-[#338C8B]' : 'text-white';
        $hoverColor = $this->inverse ? 'bg-[#D9D9D9]' : 'bg-[#45BFBD]';

        return view('components.button', ['bg_color' => $bgColor, 'fg_color' => $fgColor, 'hover_color' => $hoverColor]);
    }
}
