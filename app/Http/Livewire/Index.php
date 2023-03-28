<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\View\View;
use Livewire\Component;
use SimpleSoftwareIO\QrCode\Generator;

class Index extends Component
{
    public string $name;
    public string $github;
    public string $linkedin;
    public string $qrcode;

    protected array $rules = [
        'name' => ['required', 'min:3', 'string', 'unique:users,name'],
        'github' => ['required', 'url'],
        'linkedin' => ['required', 'url']
    ];

    public function generate(): void
    {
        $this->validate();

        $generator = new Generator();
        $this->qrcode = base64_encode($generator->size(250)->format('png')->generate(config('app.url') . '/' . $this->name));

        User::query()->create([
            'name' => $this->name,
            'github' => $this->github,
            'linkedin' => $this->linkedin,
            'qr_code' => $this->qrcode
        ]);
    }

    public function render(): View
    {
        return view('livewire.index');
    }
}
