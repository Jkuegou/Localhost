<?php

namespace App\Http\Livewire\Admin\Auth;

use Livewire\Component;

use Livewire\Attributes\Layout;


class Login extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.admin.auth.login');
    }
}


