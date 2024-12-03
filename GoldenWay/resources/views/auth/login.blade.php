
    

<div class='login'>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Guest Layout with Form -->
    <x-guest-layout>
        <div class="form-container">
            <div class="flex justify-center">
                <!--Logo with golden color -->
                 <x-application-logo class="w-10 h-10 sm:w-16 sm:h-16 golden-logo" />
            </div> 
            

<!-- Form Topic -->
<h1 class="form-topic">Log In</h1>
            <form method="POST" action="{{ route('login') }}" id="formcontent">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="golden-text" />
                    <x-text-input id="email" class="block mt-1 w-full golden-input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" class="golden-text" />
                    <x-text-input id="password" class="block mt-1 w-full golden-input" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                        <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-primary-button class="ms-3 golden-button">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </x-guest-layout>
</div>


<style>
.login {
    background-image: url('images/loginbg.jpg');
    background-size: cover;
    background-position: center;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 1rem;
}

.form-container {
    background: linear-gradient(178.6deg, rgb(20, 36, 50) 11.8%, rgb(124, 143, 161) 83.8%);    /* Golden color with transparency */
    
    padding: 4rem;
    max-width: 400px;
    width: 100%;
    height: auto;
    position: absolute;
    bottom: 4rem;
    right: 4rem;
    top: 4rem;
    display: flex;
    flex-direction: column;
    border-radius: 8px;
    
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

/* Add golden color filter to logo */
.golden-logo {
    filter: brightness(0) saturate(100%) invert(54%) sepia(91%) saturate(2500%) hue-rotate(347deg) brightness(101%) contrast(101%);
    
}


/* Golden text color for labels */
.golden-text {
    /* color: #FFD700; Golden color */
    filter: brightness(0) saturate(100%) invert(54%) sepia(91%) saturate(2500%) hue-rotate(347deg) brightness(101%) contrast(101%);

}

/* Golden text color for input */
.golden-input {
    color: #FFD700; /* Golden color */
    border-color: #FFD700; /* Golden border */
}

/* Golden background color for button */
.golden-button {
  background-color: #D2691E; /* Set the base background color */
  color: #000000; /* Default text color is black */
  border: 2px solid #000000; /* Default border color is black */
  padding: 10px 20px; /* Add some padding for better button appearance */
  font-size: 16px; /* Adjust text size */
  border-radius: 8px; /* Rounded corners for the button */
  cursor: pointer; /* Change cursor to pointer on hover */
  transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
}

.golden-button:hover {
  background-color: black; /* Change background to black on hover */
  color: #D2691E; /* Change text color to gold on hover */
  border-color: #D2691E; /* Change border color to gold on hover */
  
}




/* Responsive Design for Smaller Screens */
@media screen and (max-width: 600px) {
    .form-container {
        max-width: 90%;
        margin: 0;
    }
    .login {
        padding: 0 10px;
    }
}

.form-topic {
    
    text-align: center;
    font-size: 2rem; /* Larger font size for the topic */
    font-weight: bold; /* Make it bold */
    margin-bottom: 2rem; /* Add space below the heading */
    color: #FFFFFF; /* White color for the text */
    font-family: 'Apple Chancery', cursive; /* Set font to Apple Chancery */

    /* filter: brightness(0) saturate(100%) invert(54%) sepia(91%) saturate(2500%) hue-rotate(347deg) brightness(101%) contrast(101%); */
}
</style>
