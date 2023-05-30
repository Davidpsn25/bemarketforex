@vite(['resources/sass/app.scss',    'resources/js/app.js'])
<form method="POST" action="{{ route('login') }}">
    @csrf
<section class="vh-100" style="background-color: #1417ea;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100 ">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px; ">
            <div class="card-body p-md-5">
              <div class="row justify-content-center ">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                  
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>
  
                  <form class="mx-1 mx-md-4">
                         
                       
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <x-input-label for="password" :value="__('Password')" />
                      <div class="form-outline flex-fill mb-0">
                            <x-text-input id="password" class="form-control"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        
                        <x-input-label for="password" :value="__('Password')" />
                        
                      </div>
                    </div>
  
                      
                    
                    
                    <!-- Remember Me -->
                      <div class="block mt-4">
                      <label for="remember_me" class="inline-flex items-center">
                      <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                      <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                      </label>
                      </div>
                    <!--<div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="button" class="btn btn-primary btn-lg">Register</button>
                    </div>-->
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <div class="flex justify-end mt-4">
                        <x-primary-button>
                            {{ __('Confirm') }}
                        </x-primary-button>
                    </div>
                  
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
       

    