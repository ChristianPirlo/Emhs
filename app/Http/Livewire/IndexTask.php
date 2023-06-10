<?php

namespace App\Http\Livewire;
use App\Task;
use Livewire\Component;

class IndexTask extends Component
{
    protected $listeners = [
        'IndexTask'
    ];
    public function render()
    {
        $task = Task::orderby('id','desc')->paginate(10);
        return view('livewire.index-task', ['task' => $task]);
    }

    public function IndexTask($task){

    }
}
