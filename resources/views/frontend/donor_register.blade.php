@extends('layout.app')


@section('content')

   @include('partial.flash_messages')


	<div class="section_service_main">
	    <div class="section_service_2">
	        <h1 class="service_text">Become a Doner</h1>
	    </div>
		<div class="lets_touch_main">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-6">
	                    <div class="input_main">
	                        <div class="container">
		                          <form method="POST" action="{{route('donor.register.store')}}" >
		                          	@csrf
		                          	<input type="hidden" name="email" value="{{$user_email}}">
		                          	<span class="text-danger">{{ $errors->first('email') }}</span>
		                            <div class="form-group">
		                              <input type="text" class="email-bt" placeholder="Name" name="name" value="{{old('name')}}">
		                               <span class="text-danger">{{ $errors->first('name') }}</span>
		                            </div>
		                            <div class="form-group">
		                              <input type="text" class="email-bt" placeholder="address" name="address" value="{{old('address')}}">
		                               <span class="text-danger">{{ $errors->first('address') }}</span>
		                            </div>
									<div class="form-group">
		                              <input type="number" class="email-bt" placeholder="Phone Number" name="phone" value="{{old('phone')}}">
		                               <span class="text-danger">{{ $errors->first('phone') }}</span>
		                            </div>
									<div class="form-group">
										<select name="blood_group" class="cars">
											<option selected="selected" disabled="disabled">Select Blood Group</option>
										    <option value="A+">A+</option>
										    <option value="A-">A-</option>
										    <option value="AB+">AB+</option>
										    <option value="AB-">AB-</option>
											<option value="B+">B+</option>
											<option value="B-">B-</option>
											<option value="O+">O+</option>
											<option value="O-">O-</option>
										</select>
		                               <span class="text-danger">{{ $errors->first('blood_group') }}</span>
									</div>

									<div class="send_btn">
			                        	<button  type="submit" class="main_bt">Register</button>
			                        </div>
		                          </form>
	                        </div>
	                       
	                    </div>
	                </div>

	            </div>
	        </div>
    	</div>
	</div>



@endsection


@section('script')
    <!--     <script
          src="https://code.jquery.com/jquery-3.4.1.min.js"
          integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
          crossorigin="anonymous"></script> -->

      <script type="text/javascript">
         $(document).ready(function(){
           
             // $(".alert-success").fadeTo(5000000 , 500000).slideUp(500000, function(){
             //     $(".alert-success").slideUp(50000);
             // });
             // $(".alert-success").fadeTo(5000 , 500).slideUp(500, function(){
             //     $(".alert-success").slideUp(500);
             // });
             // $(".alert-danger").fadeTo(5000 , 500).slideUp(500, function(){
             //     $(".alert-danger").slideUp(500);
             // });

         });
      </script>

      
@endsection

