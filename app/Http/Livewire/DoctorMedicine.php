<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\pharmacy;
use Livewire\Component;

class DoctorMedicine extends Component
{

    public $categories;
    public $pharmacies;
    public $selectedState = NULL;
    public function mount()
    {
        $this->categories = Category::all();
        $this->pharmacies = collect();
    }

    public function render()
    {
        return view('livewire.doctor-medicine');
    }
    public function updatedSelected($categories)
    {
        if (!is_null($categories)) {
            $this->pharmacies = pharmacy::where('category_id', $categories)->get();
        }
    }
}
