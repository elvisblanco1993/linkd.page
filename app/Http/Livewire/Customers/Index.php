<?php

namespace App\Http\Livewire\Customers;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.customers.index', [
            'users' => User::orderBy('created_at', 'DESC')->paginate(25)
        ]);
    }
}
