<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Login extends Component
{
    public $username, $password;

    protected $rules = [
        'username' => 'required|exists:users,username', // Check if the username exists in the database
        'password' => 'required|min:8'
    ];

    // Real-time validation when input is updated
    public function updated($propertyName)
    {
        // Validate each field individually as the user types
        $this->validateOnly($propertyName);
    }

    public function login()
    {
        // Validate the inputs
        $this->validate();

        // Check if the user exists in the database
        $user = User::where('username', $this->username)->first();

        if ($user) {
            // Verify the password
            if (Hash::check($this->password, $user->password)) {
                // Log the user in
                Auth::login($user);

                // Redirect to dashboard on success
                return redirect()->route('dashboard-owner');
                
            } else {
                // Incorrect password
                $this->addError('password', 'The provided password is incorrect.');
            }
        } else {
            // Username does not exist (though this should be caught by the validation rule)
            $this->addError('username', 'This username does not exist.');
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
