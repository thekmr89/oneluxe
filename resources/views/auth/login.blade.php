
       


<style>
    <style>
    nav{
        display:none;
    }
  #app{ max-width:700px;
    width: 100%;
}
    body {
  margin: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background-color: ##282c37;
  color: #fff;
  background-color:#e6d1cc;
 /* background-image: url("https://www.farandbeyond.in/images/little-inspirations/Inspirational%20Adventures.webp");*/
 /* opacity: 0.8;*/
 /*background-repeat: no-repeat;*/
 /*width:100%;*/
 /*object-fit: cover;*/
}
form{
    overflow:hidden;
}
.container {
  width: 100%;
  max-width: 450px;
  margin:auto;
  opacity: 0.9;
}

.card {
  background-color:#5f698c!important;
  padding: 20px!important;
  border-radius: 8px!important;
  /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1)!important; */
}

h2 {
  text-align: center;
  color: #61dafb;
}

form {
  display: flex;
  flex-direction: column;
}

label {
  margin-bottom: 6px;
}

input {
  padding: 10px;
  margin-bottom: 12px;
  border: 1px solid #61dafb;
  border-radius: 4px;
  transition: border-color 0.3s ease-in-out;
  outline: none;
  color: #282c37;
}

input:focus {
  border-color: #90caf9;
}

button {
 background-color: #d59f19;
    color: #ffffff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
    font-size: 16px;
}


button:hover {
  background-color:#fdc31a;
  /*color:#e4b02c;*/
  /*border:1px solid #fdc31a;*/
  /*border-radius: 4px;*/
  
}

.logo-1{
    display: inline-block;
    width: 100%;
    margin: auto;
    text-align: center;
    padding-bottom:20px;
}
.copy{
    display: flex;
    justify-content: space-between;
    align-items: center;
    text-align: center;
    font-size: 0.9rem;
}
.copy a{
    color:white;
}
.copy a:hover{
    color:yellow;
}
.btn1{
    width: 100%;
    /*background: #68b69c;*/
    margin-top: 20px;
    margin-bottom: 20px;
    text-align: center;
    height: auto;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}
.btn1 a{
    display: inline-block;
    padding-top: 11px;
    padding-bottom: 11px;
    width: 100%;
    text-decoration: none;
    font-size: 16px;
    color: white;
}
.btn1 a:hover {
  background-color:#d59f19;
}
.min-h-screen{
    display:none;
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="container">
                <div class="card">
                    <a href="{{route('home')}}" class="logo-1"><img src="{{asset('images/logo/Oneluxe_Logo.png')}}" alt="travel logo" style="width:50%;
    height: auto;"></a>
                    <!--<h2>Travelforexpo Login</h2>-->
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <label for="email"></label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('Email Address') }}">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    <label for="password"></label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}" >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                    <button type="submit" class="btn btn-primary">
                              {{ __('Log in') }}
                                </button>

                                @if (Route::has('password.request'))
                                <div class="btn1">
                                    <a class="btn btn-primary"  href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                                @endif
                    </form>
                    <div class="copy">
                        © {{ now()->year }} Oneluxe. All Rights Reserved.  <a  target="_blank" href="https://bitgaintech.com/" title="Technology Partner">bitGain-Tech</a>
                    </div>
                </div>
                </div>
<x-guest-layout style="display:none"> 
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                    autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('password.request') }}">
                        Forgot your password?
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
</div>
    </div>
</div>