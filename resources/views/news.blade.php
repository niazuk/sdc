@include('inc.header')
<div class="mobile_page">
		<div class="logo">
		<img class="desktop" src="images/about_us.png">
		<img class="mobile" src="images/about_us_mobile.jpg">
		</div>		
		<div class="centered_about">
			<h1 style="text-align: center;">News</h1>	
		</div>
		<div class="container">
			<div class="row">

			</div>
			<div class="row">
				<div class="col-sm-9 col-md-9 technology-left">
					<div class="business">
						<div class=" blog-grid2">
							<div class="tech-btm">
							<h4>Top stories of the week </h4>
							<div class="blog-grids">
								<div class="blog-grid-left">
									<a href="/news1"><img src="images/news1_square.jpg" class="img-responsive" alt=""/></a>
								</div>
								<div class="blog-grid-right">

									<h5><a href="/news1">Barristers call in debt collectors to chase up fees</a> </h5>
									<p>Hundreds of barristers have used a debt collection service to chase up solicitors' firms over unpaid fees, Independent.ie has learned.
									<a href="/news1">Read More...</a></p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="blog-grids">
								<div class="blog-grid-left">
									<a href="/news2"><img src="images/news2_square.jpg" class="img-responsive" alt=""/></a>
								</div>
								<div class="blog-grid-right">

									<h5><a href="/news2">When Should Freelancers Use a Collections Agency?</a> </h5>
									<p>Freelance work is becoming more common, with many pursuing it as a full-time career. But with the nature of this industry, there can be downsides, some as serious as not getting paid for your work.
									<a href="/news2">Read More...</a></p>
								</div>
								<div class="clearfix"> </div>
							</div>							
						</div>
						</div>			
					</div>
				</div>
				<!-- technology-right -->
				<div class="col-sm-3 col-md-3 technology-right-1">
					<div class="blo-top">
						<div class="tech-btm">
							<img src="images/slide1.jpg" class="img-responsive" alt="" />
						</div>
					</div>
					<div class="blo-top">
						<div class="tech-btm">
							<h4>REQUEST A CALLBACK</h4>
							<div class="name">
<!--								@isset($request_update)
							    	{{$request_update}}
							    @endisset
-->								<?php
//									$request_update = '';
									echo Form::open(['action' => 'CallbackController@store']);
									echo Form::hidden('mail_id', 'callback');
									echo Form::label('name', 'Your Name:');
						            echo '<br/>';
						            echo Form::text('name');
						            echo '<br/>';
						            
						            echo Form::label('email_id', 'E-Mail:');
						            echo '<br/>';
						            echo Form::text('email_id');
						            echo '<br/>';
						     
						            echo Form::label('phone_no', 'Telephone:');
						            echo '<br/>';
						            echo Form::text('phone_no');
						            echo '<br/>';
						            echo Form::hidden('message', 'Callback me');
						            echo '<br/>';
						            echo Form::submit('SEND NOW');
							        echo Form::close();
							    ?>						
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>					
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
@include('inc.how_it_works')
@include('inc.footer')