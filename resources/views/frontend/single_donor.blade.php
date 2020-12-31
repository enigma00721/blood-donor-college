@extends('layout.app')

@section('css')
<style type="text/css">
	
ul{
    display: flex;
    flex-direction: row;
}
ul li{
	text-align: center;
	flex-grow: 1;
	color:white;
}
</style>
@endsection

@section('content')

@include('partial.flash_messages')

	<div class="contact_main">
	<!--touch_section start -->

		<div class="touch_section">
		    <div class="container">
		        <h1 class="touch_text">Blood Donor Profile </h1>
		    </div>
		</div>

		<div class="lets_touch_main">
		    <div class="container">
		        <div class="row">
		            <div class="col-12">
		                	<ul>
		                		<li>Name: {{$donor->name}} </li>
		                		<li>Email: {{$donor->email}} </li>
		                		<li>Phone: {{$donor->phone}} </li>
		                		<li>Address: {{$donor->address}} </li>
		                		<li>BloodGroup: {{$donor->blood_group}} </li>
		                	</ul>
					</div>
		        </div>
		    </div>
		</div>
	</div>

	 <!--touch_section start -->

	    <div class="touch_section">
	        <div class="container">
	            <h1 class="touch_text">Send Message</h1>
	        </div>
	    </div>

	    <div class="lets_touch_main">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-6">
	                    <div class="input_main">
	                       <div class="container">
	                          <form action="{{route('feedback.submit')}}" method="post">
	                          	@csrf
	                          	<input type="hidden" name="user_id" value="{{$user_id}}">
	                            <div class="form-group">
	                              <input type="text" class="email-bt" placeholder="Name" name="name" value="{{old('name')}}" required="required">
	                            </div>
	                            <div class="form-group">
	                              <input type="text" class="email-bt" placeholder="Email" name="email" value="{{old('name')}}" required="required">
	                            </div>
                                <div class="form-group">
                                  <textarea class="massage-bt" placeholder="Feedback" rows="5" name="feedback" name="text" required="required">{{old('feedback')}}</textarea>
                                </div>
	                            <div class="send_btn">
			                    	<button  type="submit" class="main_bt">Send</button>
			                    </div>
	                          </form>
	                       </div>
	                      
	                    </div>
	                </div>
	                <div class="col-md-6">
	                    <div class="row">
	                        <div class="col-12">
	                            <li class="last"><a href="#"><img src="{{asset('images/becomeadoner.jpg')}}" alt="icon"></a></li>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>

	    <!--touch_section end -->

@endsection
