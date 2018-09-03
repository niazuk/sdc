

	<!--//banner_info-->
	<!-- /inner_content -->
	<div class="banner_bottom">
		<img src="images/about_us.png" class="img-responsive" alt="" width="100%">
		<div class="container">
			<div class="row">

			</div>
			<div class="row">
				<div class="col-md-9 technology-left">
					<div class="business">
						<div class=" blog-grid2">
							
							<div class="blog-text">
								<h5>Our Vision</h5>
								<p>To provide high quality, cost effective service to all businesses whilst remaining several steps of competition. </p>		
								<br>
								<h5>Our Mission</h5>	
								<p>At SDC we are committed to changing the face of debt collection providing a unique personable and high touch service. </p>	
								<br>
								<h5>Our Philosophy</h5>	
								<p>To attract, select and help to retain the best talent for our loyal client base. We aim to make it happen by being the very best at what we do, offering a value for money service delivered in the unique SDC way.</p>	
								<h5>Our Values</h5>	
								<p>We promise to deliver a service underpinned by our values;<br>
								•	Demonstrating Passion for Success <br>
								•	Uphold the highest standards of personal and professional Ethics, Honesty and Trust<br>
								•	Going the Extra Mile<br>
								•	Offering Long term commitment to our clients<br>
								•	Striving for continuous improvement<br>
								•	Bing responsive to your needs<br>
								•	Make it happen by being the very best at what we do
								</p>			
							</div>
						</div>			
					</div>
				</div>
				<!-- technology-right -->
				<div class="col-md-3 technology-right-1">
					<div class="blo-top">
						<div class="tech-btm">
							<img src="images/slide1.jpg" class="img-responsive" alt="" />
						</div>
					</div>
					<div class="blo-top">
						<div class="tech-btm">
							<h4>REQUEST A CALLBACK</h4>
							<div class="name">
								@isset($request_update)
							    	{{$request_update}}
							    @endisset
								<?php
									$request_update = '';
									echo Form::open(['action' => 'CallbackController@store']);
									
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
						            
						            echo Form::submit('SEND NOW');
							        echo Form::close();
							    ?>						
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="blo-top1">
						<div class="tech-btm">
							<h4>Top stories of the week </h4>
							<div class="blog-grids">
								<div class="blog-grid-left">
									<a href="single.html"><img src="images/g6.jpg" class="img-responsive" alt=""/></a>
								</div>
								<div class="blog-grid-right">

									<h5><a href="single.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="blog-grids">
								<div class="blog-grid-left">
									<a href="single.html"><img src="images/g7.jpg" class="img-responsive" alt=""/></a>
								</div>
								<div class="blog-grid-right">

									<h5><a href="single.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="blog-grids">
								<div class="blog-grid-left">
									<a href="single.html"><img src="images/g3.jpg" class="img-responsive" alt=""/></a>
								</div>
								<div class="blog-grid-right">

									<h5><a href="single.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="blog-grids">
								<div class="blog-grid-left">
									<a href="single.html"><img src="images/g5.jpg" class="img-responsive" alt=""/></a>
								</div>
								<div class="blog-grid-right">

									<h5><a href="single.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="blog-grids">
								<div class="blog-grid-left">
									<a href="single.html"><img src="images/g1.jpg" class="img-responsive" alt=""/></a>
								</div>
								<div class="blog-grid-right">

									<h5><a href="single.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>