<x-guest-layout>
    <div id="page-content">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Create an Account</h1></div>
      		</div>
		</div>
        <!--End Page Title-->

        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
                    <x-jet-validation-errors class="mb-4" />
                	<div class="mb-4">
                       <form method="POST" action="{{ route('register') }}" accept-charset="UTF-8" class="contact-form">
                           @csrf
                          <div class="row">
	                          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input type="text" name="name" placeholder="Enter your full name" id="name" :value="old('name')" required autofocus autocomplete="name">
                                </div>
                               </div>
                               <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" placeholder="someuser" id="username" :value="old('username')" required autofocus autocomplete="username">
                                </div>
                               </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" placeholder="someone@example.com" id="email" class="" autocorrect="off" autocapitalize="off" autofocus :value="old('email')" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" placeholder="********" id="password" class="" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input type="password" name="password_confirmation" placeholder="********" id="password_confirmation" class="" required autocomplete="new-password">
                                </div>
                            </div>
                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group form-check">
                                    <input type="checkbox" name="terms" id="terms" class="form-check-input" >
                                    <label for="terms">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </label>
                                </div>
                            </div>
                            @endif
                            <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                <input type="submit" class="btn mb-3" value="Register">
                                <p class="mb-4">
                                    @if (Route::has('login'))
									   <a href="{{ route('login') }}">Already registered?</a>
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
