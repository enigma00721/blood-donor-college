@extends('layout.app')

@section('content')

@include('partial.flash_messages')
	    <!--banner start -->
	    <div class="banner-main">
	    	<div class="container">
	           <div id="main_slider" class="carousel slide" data-ride="carousel">
	           <!-- The slideshow -->
	            <div class="carousel-inner">
	                <div class="carousel-item active">
	        		    <div class="titlepage-h1">
	            	        <h1 class="bnner_title">Welcome To Online Blood Banking <br>
	            	        <span style="color: #ff0000">Get any blood group blood very easily.</span></h1>
	            	        <p class="long_text">A new way to experience blood banking</p>
	        		    </div>
	                </div>
	            </div>
	            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
	                <i class="fa fa-angle-left"></i>
	            </a>
	            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="prev">
	                <i class="fa fa-angle-right"></i>
	            </a>
	            </div>
	        </div>
	    </div>
	    <!--banner end -->

	    <!--services start -->
	    <div class="services_main">
	    	<div class="container">
	    		<div class="creative_taital">
	    			<h1 class="creative_text">Why should we donate blood?</h1>
	    			<p style="color: #050000; text-align: justify;">Blood itself is a form of life. Its is precious thus can save life of a person. We encourage people to donate blood in their nearby or be a part of chain where you can save someone's life.
														Some of the facts about donating Blood :
													<br>* One single donation can save upto 3 lives. Blood components can be used to save three lives.
													<br>* We cannot manufacture blood in factories thus donation is only way to meet the need of blood.
												  <br>* There is only limited numbers of people who can donate.
												<br>	As per fact blood donation also have benefits to the donor's body. It helps to reduce the risk of cancer and damaging vital organs like liver and pancreas. Additionally, it reduces obesity and improves cardiovascular health.
													 Donting blood has all the benefits that a person can have. It improves physical helath and on top helps other people. Donating blood also stabalises our emotional health. It reduces stress and removes negative feelings.
												 </p>

	    		</div>
	    		    <div class="section_service_2">
	    		    	<h1 class="service_text">Healthy Tips for Donation</h1>
	    		    </div>
	    		    <div class="service_main">
	    		    	<div class="container">
	    		    		<div class="row">
	    		    			<div class="col-md-6">
	    		    				<div class="written_text">

	    		    					<h1 class="written_text">Before Donation</h1>
	    		    					<p>1. Get plenty of sleep.
													<br> 2. Try to eat healty foods and avoide fatty foods.
												  <br> 3. Drink plenty of water.
													<br> 4. Make sure you are fit both physically and mentally.  </p>
	    		    				</div>
	    		    			</div>
	    		    			<div class="col-md-6">
	    		    				<div class="written_text">

	    		    					<h1 class="written_text">After Donation</h1>
	    		    					<p>1. Dont perform any heavy exercises for the rest of day.
													<br> 2. Drink extra fluid substances for next two days.
													<br> 3. Eat food that provide Vitamine B and iron.
													<br> 4. Do not masterbathe.
											 </p>
	    		    				</div>
	    		    			</div>
	    		    		</div>
	    		    	</div>
	    		    </div>

	    	</div>
		</div>
	    <!--services end -->

	    <!--quote_section start -->
	    <div class="quote_section">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-md-6">
	    				<h1 class="quote_text">Request Blood</h1>
	    				<p class="loan_text">Are you in emmergency and seek blood? Here you can request your need blood group. </p>
	    			</div>
	    		    <div class="col-md-6">
	    			    <div class="quote_btn">
	    			        <button  type="button" class="main_bt"><a href="{{route('find.blood')}}">find blood</a></button>
	    		        </div>
	    		    </div>
	    		</div>
	    	</div>
	    </div>

	    <!--quote_section end -->
	    <!--touch_section start -->

	    <div class="touch_section">
	        <div class="container">
	            <h1 class="touch_text">Feedback</h1>
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

