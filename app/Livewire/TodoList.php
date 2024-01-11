<?php

namespace App\Livewire;

use App\Models\Todo;
use Exception;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class TodoList extends Component
{

    use WithPagination;


    #[Rule('required|min:3|max:50')]
    public $name;

    public $search;

    public $editTodoID;

    #[Rule('required|min:3|max:50')]
    public $editTodoName;

    public function create()
    {
        // validate
        // create the todo
        // clear the input
        // send the flash message
        // dump('Hello World');

        $validated = $this->validateOnly('name');

        Todo::create($validated);

        $this->reset('name');

        session()->flash('message', 'Name created successfully!');

        $this->resetPage();
    }

    // public function delete(Todo $todo)
    // {
    //     $todo->delete();
    // }
    public function delete($todoID)
    {
        try {
            Todo::findOrFail($todoID)->delete();
        } catch (Exception $e) {
            session()->flash('error', 'Failed to delete todo!');
        }
    }

    public function toggle($todoID)
    {
        $todo = Todo::find($todoID);
        $todo->completed = !$todo->completed;
        $todo->save();
    }

    public function edit($todoID)
    {
        $this->editTodoID = $todoID;
        $this->editTodoName = Todo::find($todoID)->name;
    }

    public function cancelEdit()
    {
        $this->reset('editTodoID', 'editTodoName');
    }

    public function update()
    {
        $this->validateOnly('editTodoName');

        Todo::find($this->editTodoID)->update(
            [
                'name' => $this->editTodoName
            ]
        );

        $this->cancelEdit();
    }

    public function render()
    {
        return view('livewire.todo-list', [
            'todos' => Todo::latest()->where('name', 'like', "%{$this->search}%")->paginate(5),
        ]);
    }
}
