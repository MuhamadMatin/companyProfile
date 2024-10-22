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

    #[Url()]
    public $category = '';

    #[On('search')]
    public function updateSearch($search)
    {
        $this->search = $search;
        $this->resetPage();
    }

    #[On('category')]
    public function updateCategory($category)
    {
        $this->category = $category;
        $this->resetPage();
    }

    public function resetAll()
    {
        $this->reset('search');
        $this->reset('category');
        $this->resetPage();
        $this->dispatch('resetAll');
    }

    #[Computed()]
    public function products()
    {
        return Product::where('name', 'like', '%' . $this->search . '%')
            ->when($this->category, function ($query) {
                return $query->where('category_id', $this->category);
            })
            ->paginate(20);
    }

    public function render()
    {
        return view('livewire.product-list');
    }
}
