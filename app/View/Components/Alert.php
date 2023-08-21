<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\User;

class Alert extends Component
{
    public $type;
    /**
     * Create a new component instance.
     */
    public function __construct($type)
    {
        $this->type = $type;
    }
    public function getUser(){
      return User::first()->email;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
