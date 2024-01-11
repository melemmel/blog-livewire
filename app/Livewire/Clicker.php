<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Clicker extends Component
{
    use WithPagination;
    // public function handleClick(){
    //     dump("clicked");
    // }

    // public $title_hello = "Jessa Mae"; // Othe method

    #[Rule('required|min:2|max:50')]
    public $name = '';

    #[Rule('required|email|unique:users')]
    public $email = '';

    #[Rule('required|min:5')]
    public $password = '';

    public function createNewUser()
    {

        // $validated = $this->validate([ // First Way
        //     'name' => 'required|min:2|max:50',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:5',
        // ]);
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);

        $this->reset(['name', 'email', 'password']);

        request()->session()->flash('message','User created successfully!');
    }

    public function render()
    {
        $title = "Hello"; // Other method

        $users = User::paginate(5);

        return view('livewire.clicker', [
            'title' => $title,
            'users' => $users
        ]);
    }
}
