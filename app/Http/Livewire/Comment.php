<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comment extends Component
{
    public $name;
    public $email;
    public $phone;
    public $msg;

    public function submit()
    {
        $this->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'msg'=>'required'
        ]);
        sleep(1);
        $this->resetForm();
        return back()->with('success','Success na');
        // dd($this->name);
    }

    private function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->msg = '';
    }

    public function render()
    {
        return view('livewire.comment');
    }
}
