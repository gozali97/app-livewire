<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserEdit extends Component
{

    public $user_id;
    public $name;
    public $email;
    public function mount($user){
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
    }
    public function render()
    {
        return view('livewire.user-edit');
    }

    public function update(){
        $this->validate([
            'name' => 'required|string|min:6',
            'email' => 'required|email|unique:users,email,'.$this->user_id,
        ]);

        User::where('id', $this->user_id)->update([
            'name' =>  $this->name,
            'email' =>  $this->email,
        ]);
        $this->name = '';
        $this->email = '';

        return redirect()->route('app.index')->with('success','Berhasil memperbarui user');
    }
}
