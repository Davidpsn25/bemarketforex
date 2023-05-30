@vite(['resources/sass/app.scss',    'resources/js/app.js'])

    @csrf
<section class="vh-100" style="background-color: #1417ea;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100 ">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px; ">
            <div class="card-body p-md-5">
              <div class="row justify-content-center ">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                  
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Forgot your password</p>
                  <div class="mb-4 text-sm text-gray-600">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>
                <x-auth-session-status class="mb-4" :status="session('status')" />
                  <form class="mx-1 mx-md-4">
                         
                    <!-- Email Address -->
        
                    <form method="POST" action="{{ route('password.email') }}">
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <!--<input type="email" id="form3Example3c" class="form-control" />-->
                        <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        <x-input-label for="email" :value="__('Email')" />
                      </div>
                    </div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <x-primary-button class="btn btn-primary btn-lg">
                        {{ __('Email Password Reset Link') }}
                    </x-primary-button>
                    </div>
  
                  </form>
  
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
       

    