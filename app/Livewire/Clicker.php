<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{
    // public function handleClick(){
    //     dump("clicked");
    // }
    
    // public $title_hello = "Jessa Mae"; // Othe method
    
    public $name;
    public $email;
    public $password;

    public function createNewUser(){
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);
    }
    public function render()
    {
        $title = "Hello"; // Other method

        $users = User::all();

        return view('livewire.clicker',[
            'title' => $title,
            'users' => $users
        ]);
    }
}
