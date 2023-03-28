<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\Index;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class IndexTest extends TestCase
{
    Use RefreshDatabase;

    /** @test */
    public function it_renders_the_component_correctly(): void
    {
        Livewire::test(Index::class)
            ->assertStatus(200)
            ->assertSeeHtml('<input type="text" name="name" id="name" wire:model="name"
                                   class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                   placeholder="username">')
            ->assertSeeHtml('<input type="text" name="linkedin" id="linkedin" wire:model="linkedin"
                                   class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                   placeholder="www.example.com">')
            ->assertSeeHtml('<input type="text" name="github" id="github" wire:model="github"
                                   class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                   placeholder="www.example.com">');
    }

    /** @test */
    public function can_create_a_profile(): void
    {
        Livewire::test(Index::class)
            ->set('name', 'thalinho')
            ->set('github', 'https://github.com/thalinho')
            ->set('linkedin', 'https://linkedin.com/in/thalinho')
            ->call('generate')
            ->assertSee('Hello thalinho')
            ->assertSee('Scan the QR Code below to access your profile')
            ->assertStatus(200);
    }

    /** @test */
    public function can_not_create_a_profile_with_invalid_data(): void
    {
        Livewire::test(Index::class)
            ->set('name', 'th')
            ->set('github', 'github')
            ->set('linkedin', 'linkedin')
            ->call('generate')
            ->assertHasErrors(['name', 'github', 'linkedin']);
    }
}
