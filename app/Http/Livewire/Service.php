<?php

namespace App\Http\Livewire;

use App\Models\Service_categories;
use Livewire\Component;

class Service extends Component
{
    public $orderServices = [];
    public $allServices = [];

    public function mount(){
        $this->allServices = Service_categories::all();
        $this->orderServices = [
            ['service_categories_id' => '']
        ];
    }

    public function addService(){
        $this->orderServices[] = ['service_categories_id' => ''];
    }

    public function removeService($index){
        unset($this->orderServices[$index]);
        $this->orderServices = array_values($this->orderServices);
    }

    public function render()
    {
        return view('livewire.service');
    }
}
