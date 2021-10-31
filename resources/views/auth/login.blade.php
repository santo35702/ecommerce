<x-guest-layout>
    <div id="page-content">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Login</h1></div>
      		</div>
		</div>
        <!--End Page Title-->

        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
                    <x-jet-validation-errors class="mb-4" />

                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
                	<div class="mb-4">
                       <form method="POST" action="{{ route('login') }}" accept-charset="UTF-8" class="contact-form">
                           @csrf
                          <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" placeholder="someone@example.com" id="email" class="" autocorrect="off" autocapitalize="off" :value="old('email')" required autofocus>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" placeholder="********" id="password" class="" required autocomplete="current-password">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group form-check">
                                    <input type="checkbox" name="remember" id="remember_me" class="form-check-input" >
                                    <label for="remember_me">Remember me</label>
                                </div>
                            </div>
                            <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                <input type="submit" class="btn mb-3" value="Log in">
                                <p class="mb-4">
                                    @if (Route::has('password.request'))
									   <a href="{{ route('password.request') }}">Forgot your password?</a> &nbsp; | &nbsp;
                                    @endif
                                    @if (Route::has('register'))
								       <a href="{{ route('register') }}">Create account</a>
                                    @endif
                                </p>
                            </div>
                         </div>
                     </form>
                    </div>
               	</div>
            </div>
        </div>

    </div>
</x-guest-layout>
