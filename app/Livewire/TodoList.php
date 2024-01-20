<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\TodoItem;
class TodoList extends Component
{
    public $todos;
    public string $todoText='';

    public function mount(){
        $this->selectTodo();
    }
    public function render()
    {
        return view('livewire.todo-list');
    }

    public function addTodo(){
        $todo=new TodoItem();
        $todo->todo=$this->todoText;
        $todo->completed=false;
        $todo->save();
        $this->todoText=" ";
        $this->selectTodo();
    }

    public function toggleTodo($id){
        $todo=TodoItem::where("id",$id)->first();
        if(!$todo){
            return ;
        }
        $todo->completed=!$todo->completed;
        $todo->save();
        $this->selectTodo();
    }

    public function deleteTodo($id){
        $todo=TodoItem::where("id",$id)->first();
        if(!$todo){
            return ;
        }
        $todo->delete();
        $this->selectTodo();
    }

    public function selectTodo(){
        $this->todos=TodoItem::orderBy("created_at","desc")->get();
    }
}
