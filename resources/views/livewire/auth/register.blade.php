{{-- I want my files to be organize so that it is easy to navigate -> MN --}}
@section('title', 'Register Page')
@section('body-class', 'register-page bg-body-secondary')

<div class="register-box">
    <div class="register-logo"><a href="#"><b>Admin</b>LTE</a></div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="register-box-msg">Register a new membership</p>

            <!-- Livewire Form -->
            <form wire:submit.prevent="storeUser">

                <!-- Username Input -->
                <div class="input-group has-validation mb-3">
                    <input wire:model.lazy="username" type="text"
                        class="form-control @error('username') is-invalid @enderror" placeholder="Username"
                        style="border-top-left-radius: 6px; border-bottom-left-radius: 6; border-top-right-radius: 0px; border-bottom-right-radius: 0;"
                        aria-describedby="inputGroupPrepend">
                    <div class="input-group-text"><span class="bi bi-person"></span></div>
                    @error('username') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                </div>

                <!-- Email Input -->
                <div class="input-group has-validation mb-3">
                    <input wire:model.lazy="email" type="email"
                        class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                        style="border-top-left-radius: 6px; border-bottom-left-radius: 6; border-top-right-radius: 0px; border-bottom-right-radius: 0;"
                        aria-describedby="inputGroupPrepend">
                    <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                    @error('email') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                </div>

                <!-- Password Input -->
                <div class="input-group has-validation mb-3">
                    <input wire:model.lazy="password" type="password"
                        class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                        style="border-top-left-radius: 6px; border-bottom-left-radius: 6; border-top-right-radius: 0px; border-bottom-right-radius: 0;"
                        aria-describedby="inputGroupPrepend">
                    <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                    @error('password') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                </div>

                <!-- Password Confirmation Input -->
                <div class="input-group has-validation mb-3">
                    <input wire:model.lazy="password_confirmation" type="password"
                        class="form-control @error('password_confirmation') is-invalid @enderror"
                        placeholder="Confirm Password"
                        style="border-top-left-radius: 6px; border-bottom-left-radius: 6; border-top-right-radius: 0px; border-bottom-right-radius: 0;"
                        aria-describedby="inputGroupPrepend">
                    <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                    @error('password_confirmation') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                </div>

                <!-- Submit Button -->
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>

            <p></p>
            <p class="mb-0">
                <a wire:navigate href="login"class="text-center">I already have a membership</a>
            </p>
        </div>
    </div>
</div>