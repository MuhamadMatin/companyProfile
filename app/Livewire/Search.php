<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Search extends Component
{
    public $search = '';

    public function updatedSearch()
    {
        $this->dispatch('search', search: $this->search);
    }

    #[On('resetAll')]
    public function resetSearch()
    {
        $this->search = '';
    }

    public function render()
    {
        return view('livewire.search');
    }
}
