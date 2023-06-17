<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class detailItem extends Component
{
    public $items; 
    public $cards;
    /**
     * Create a new component instance.
     */
    public function __construct($cards, $items)
    {
        $this->items = $items;
        $this->cards = $cards;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.detailItem');
    }
}
