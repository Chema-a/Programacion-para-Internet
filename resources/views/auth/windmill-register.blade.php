<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crear Cuenta</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('css/tailwind.output.css')}}" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="{{asset('js/init-alpine.js')}}"></script>
  </head>
  <body>
  {{--('ir a menu principal')--}}
  <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
  <aside
        class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0"
      >
        <div class="py-4 text-gray-500 dark:text-gray-400">
          <a
            class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
            href="/"
          >
            Danza Aptitude
          </a>
          </div>
    </aside>
    </header>
  {{--('')--}}
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
      <div
        class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800"
      >
        <div class="flex flex-col overflow-y-auto md:flex-row">
          <div class="h-32 md:h-auto md:w-1/2">
            <img
              aria-hidden="true"
              class="object-cover w-full h-full dark:hidden"
              src="{{asset('images/danzaAptitude.jpg')}}"
              alt="Office"
            />
            <img
              aria-hidden="true"
              class="hidden object-cover w-full h-full dark:block"
              src="{{asset('images/danzaAptitude.jpg')}}"
              alt="Office"
            />
          </div>
          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
              <h1
                class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200"
              >
                Crear una cuenta
              </h1>

              <form method="POST" action="{{ route('register') }}">
              @csrf

              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">{{ __('Name') }}</span>
                <input
                  type="text"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Jane Doe"
                  id="name"  name="name" 
                  value="{{old('name')}}"
                />
                @error('nombre')
                <span class="text-xs text-red-600 dark:text-red-400">{{$message}}</span>
                @enderror

              </label>

              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">{{ __('Email') }}</span>
                <input
                type="email"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="JaneDoe@example.com"
                  id="email"  
                  name="email" 
                  value="{{old('email')}}"
                />
                @error('email')
                <span class="text-xs text-red-600 dark:text-red-400">{{$message}}</span>
                @enderror
                <input type="hidden" name="first_login" id="first_login" value="1">

              </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">{{ __('Registrator Code') }}</span>
                <input 
                  type="text"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Yn72C"
                  id="registrator_code"  name="registrator_code" 
                  value="{{old('registrator_code')}}"
                />
                @error('registrator_code')
                <span class="text-xs text-red-600 dark:text-red-400">{{$message}}</span>
                @enderror

              </label>

              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">{{ __('Password') }}</span>
                <input 
                type="password"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="***************"
                  id="password"  name="password" 
                  value="{{ old('registrator_code')}}" 
                />
                @error('password')
                <span class="text-xs text-red-600 dark:text-red-400">{{$message}}</span>
                @enderror
              </label>

              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">{{ __('Confirm Password') }}w</span>
                <input 
                type="password"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="***************"
                  id="password_confirmation"  name="password_confirmation" 
                  
                />
                @error('password')
                <span class="text-xs text-red-600 dark:text-red-400">{{$message}}</span>
                @enderror
              </label>

              <div class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" align="center">
                  <span class="text-gray-700 dark:text-gray-400"> Tipo de cuenta </span>
                    <br>
                    <input type="radio" id="type" name="type" value="1" >   Estudiante
                    <br>
                    <input type="radio" id="type" name="type" value="2" >   Maestro
              </div>
              @error('type')
              <span class="text-xs text-red-600 dark:text-red-400">{{$message}}</span>
              @enderror

              
<!--

                <label class="block mt-4 text-sm">
                  <span class="text-gray-700 dark:text-gray-400"> Fecha de nacimiento </span>
                  <input id="birthday" type="date" name="birthday" :value="old('birthday')" required
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="date"
                />
                <label class="block mt-4 text-sm">
                  <span class="text-gray-700 dark:text-gray-400"> Condición </span>
                  <input id="condition" type="text" name="condition" :value="old('condition')" required
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    placeholder="CDC"
                    type="text"
                />
              <div class="flex mt-6 text-sm">
                <label class="flex items-center dark:text-gray-400">
                  <input
                    type="checkbox"
                    class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  />
                  <span class="ml-2">
                    I agree to the
                    <span class="underline">privacy policy</span>
                  </span>
                </label>
              </div>
-->
              <!-- You should use a button here, as the anchor is only used for the example  -->
              <br>
              <button
                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"              >
              {{ __('Register') }}
              </button>
            </form>
              <hr class="my-8" />
              <p class="mt-4">
                <a
                  class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                  href="/login"
                >
                  ¿Ya tienes una cuenta? Login
                </a>
              </p>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
