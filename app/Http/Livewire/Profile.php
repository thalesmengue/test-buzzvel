<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\View\View;
use Livewire\Component;

class Profile extends Component
{
    public User $user;
    public function mount(string $name): void
    {
        $this->user = User::where('name', $name)->firstOrFail();
    }
    public function render(): View
    {
        return view('livewire.profile');
    }
}
