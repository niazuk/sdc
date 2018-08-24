<br>
<br>
<br>
<br>
<br>
<div class="services-breadcrumb">
		<div class="inner_breadcrumb">

			<ul class="short">
				<li><a href="/">Home</a><span>|</span></li>
				<li>About</li>
			</ul>
		</div>
	</div>
	<!--//banner_info-->
	<!-- /inner_content -->
	<div class="banner_bottom">
		<div class="container">
			<div class="col-md-9 technology-left">
				<div class="business">
					<div class=" blog-grid2">
						<img src="images/banner4.jpg" class="img-responsive" alt="">
						<div class="blog-text">
							<h5>SIMPLE BEGINNINGS</h5>
							<p>SDC has grown from a North West debt collection company to become a national and international operation. Soon after start up Sage Debt Collection were offering various debt collection services to businesses and individuals throughout the UK before then looking internationally. Expansion came very quickly as a result of market demands. </p>		
							<br>
							<h5>OUR VISION</h5>	
							<p>Here at SDC we believe everyone deserves to get paid. We appreciate however that this doesn’t always happen. This is where debt recovery is required.</p>

							<p>We believe having an efficient, professional debt recovery service is essential to improve cash flow; ensuring you are being paid for goods and services you have provided.</p>

							<p>With years of combined experience, you know you are in safe hands with SDC. Just as you are experts in your chosen field, we are experts in ours. The millions of pounds we have collected for our clients is testament to that. We can help put money back in your pocket, allowing you to focus your time on what's important to you.</p>

							<p>We only need a few simple details to start your journey to better financial security. Just fill in our quick form and one of our expert consultants will call you back as soon as possible.</p>	
							<br>
							<h5>SUCCESSFUL DEBT COLLECTION</h5>	
							<p>SDC delivers successful debt collections to clients seeking peak performance in this challenging and competitive industry. We do so by providing innovative, tailored and standard credit management solutions.</p>

							<p>Guaranteed productivity is enabled through our advanced debt recovery strategies, application knowledge and experience, advanced systems technology, in-house specialists and results driven ethic.</p>

							<p>Our aim is to provide superior and cost effective services. We always ensure client's objectives are our main focus. We offer this all with the ability for you to see your progress.</p>

							<p>We have a pioneering client portal which allows you real time updates about when we have been chasing your debt and how. This includes calls, texts, emails, letters and home visits. With expert IT systems in place paired with our approved collection strategies, we are the go to agency for all areas of debt recovery.</p>		
						</div>
					</div>			
				</div>
			</div>
			<!-- technology-right -->
			<div class="col-md-3 technology-right-1">
				<div class="blo-top">
					<div class="tech-btm">
						<img src="images/banner1.jpg" class="img-responsive" alt="" />
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
			<div class="clearfix"></div>
		</div>
	</div>