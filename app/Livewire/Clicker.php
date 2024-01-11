<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{
    // public function handleClick(){
    //     dump("clicked");
    // }
    
    public $title_hello = "Jessa Mae"; // Othe method

    public function createNewUser(){
        User::create([
            'name' => 'John Doe1',
            'email' => 'john12@example.com',
            'password' => '123'
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
