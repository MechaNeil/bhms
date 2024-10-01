<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Register extends Component
{
    public $username;
    public $email;
    public $password;
    public $password_confirmation;


    // Validation rules
    protected function rules()
    {
        return [
            'email' => 'required|email|unique:users',
            'username' => 'required|unique:users|max:255',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
        ];
    }

    // Custom validation messages
    protected $messages = [
        'email.required' => 'Your email is required to proceed.',
        'email.email' => 'Please enter a valid email address.',
        'email.unique' => 'The email is already registered. Please use a different one.',
        'username.required' => 'Username is a must.',
        'username.unique' => 'This username has already been taken. Choose another.',
        'username.max' => 'The username cannot exceed 255 characters.',
        'password.required' => 'You need to create a password.',
        'password.min' => 'The password must have at least 8 characters.',
        'password_confirmation.same' => 'Password and confirmation do not match.',
        'password_confirmation.required' => 'Please confirm your password.',
    ];

    // Real-time validation for individual fields
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
        // Re-validate the whole form if password or password_confirmation is updated
        // if (in_array($propertyName, ['password', 'password_confirmation'])) {
        //     $this->validate();
        // }
    }

    // Store the user in the database
    public function storeUser()
    {
        $this->validate(); // Validate all fields

        // Create the user
        $user = User::create([
            'username' => $this->username,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        // Log the user in and redirect
        Auth::login($user);
        return redirect()->route('dashboard-owner');
    }

    // Render the view
    public function render()
    {
        return view('livewire.auth.register');
    }
}
