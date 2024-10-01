{{-- Because she competes with no one, no one can compete with her. --}}
@section('title', 'Login Page')
@section('body-class', 'login-page bg-body-secondary')

<div class="login-box">
    <div class="login-logo"><a href="#"><b>Admin</b>LTE</a></div>

    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form wire:submit.prevent="login">

                <!-- Username Input -->

                <div class="input-group has-validation mb-3">

                    <input wire:model.lazy="username" type="text"
                        class="form-control @error('username') is-invalid @enderror" placeholder="Username"
                        style="border-top-left-radius: 6px; border-bottom-left-radius: 6; border-top-right-radius: 0px; border-bottom-right-radius: 0;"
                        aria-describedby="inputGroupPrepend">
                    <span class="input-group-text">
                        <span class="bi bi-person" id="inputGroupPrepend"></span>
                    </span>
                    @error('username') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
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


                <!-- Invalid credentials error -->

                @if (session()->has('error'))
                <div class="alert alert-danger text-center" role="alert">
                    {{ session('error') }}
                </div>
                @endif
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Sign In</button>
                </div>
            </form>
            <p></p>
            <p class="mb-0">
                <a href="#" class="text-center">I forgot my password</a>
            </p>
            <p class="mb-0">
                <a wire:navigate href="register" class="text-center">Register a new membership</a>
                
            </p>
        </div>
    </div>
</div>