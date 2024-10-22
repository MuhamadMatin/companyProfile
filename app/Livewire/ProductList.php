<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;

class ProductList extends Component
{

    use WithPagination;

    #[Url()]
    public $search = '';

    #[On('search')]
    public function updateSearch($search)
    {
        $this->search = $search;
        $this->resetPage();
    }

    public function resetAll()
    {
        $this->reset('search');
        $this->resetPage();
        $this->dispatch('resetAll');
    }

    #[Computed()]
    public function products()
    {
        return Product::where('name', 'like', '%' . $this->search . '%')
            ->paginate(20);
    }

    public function render()
    {
        return view('livewire.product-list');
    }
}
