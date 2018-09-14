<div class="banner_bottom contact_bg">
	<div class="container">
		
		<div class="mail_form">
			<br>
			<h3 class="tittle-w3ls contact_send">Contact</h3>
			<div class="inner_sec_info_wthree_agile">
				<?php
									
					echo Form::open(['action' => 'ContactFormController@store']);
					echo Form::hidden('mail_id', 'contactform');
					echo '<div class="row">';
						echo '<div class="col-sm-3">';
						echo '</div>';
						echo '<div class="col-sm-6">';	
							echo '<div class="row">';
								echo '<div class="col-sm-12">';
									echo 'Fields marked with a <span style="color: red">*</span> are required <br>';
									echo Form::label('name', 'Your Name '); echo '<span style="color: red">*</span>';			           
						            echo Form::text('name', null, array('class' => 'foo','required' => 'required' ));
						            echo '<br/><br/>';
					            echo '</div>';
					        echo '</div>';
				            
				            echo '<div class="row">';
								echo '<div class="col-sm-12">';	
						            echo Form::label('company', 'Company');	            	          
						            echo Form::text('company', null, array('class' => 'foo' ));
						            echo '<br/><br/>';
				            	echo '</div>';
					        echo '</div>';

					        echo '<div class="row">';
								echo '<div class="col-sm-12">';	
						            echo Form::label('email', 'Email ');echo '<span style="color: red">*</span>';                      
						            echo Form::email('email', null, array('class' => 'foo','required' => 'required' ));
						            echo '<br/><br/>';
				            	echo '</div>';
					        echo '</div>';
				     
				            echo '<div class="row">';
								echo '<div class="col-sm-12">';			    
						            echo Form::label('phone', 'Contact number');	        	         
						            echo Form::number('phone', null, array('class' => 'foo' ));
						            echo '<br/><br/>';
				            	echo '</div>';
				            echo '</div>';

				            echo '<div class="row">';
								echo '<div class="col-sm-12">';	
						            echo Form::label('reference_no', 'Client reference number');	            	          
						            echo Form::text('reference_no', null, array('class' => 'foo' ));
						            echo '<br/><br/>';
				            	echo '</div>';
					        echo '</div>';

				            echo '<div class="row">';
							echo '<div class="col-sm-12">';
									echo Form::label('enquiries', 'Enquiry details ');				
						            echo Form::textarea('enquiries', null, array('class' => 'foo_area' ));
						        echo '</div>';
				            echo '</div>';
			            echo '</div>';
			            echo '<div class="col-sm-3">';
						echo '</div>';

		            echo '</div>';
		            echo '<div class="row">';
						echo '<div class="col-sm-12">';	
							echo '<div class="contact_send">';					
								echo '<span>Your details will not be passed on to third parties.</span><br/>';
			            		echo Form::submit('SEND');
		            		echo '</div>';
		            	echo '</div>';
		            echo '</div>';
			        echo Form::close();
			    ?>	

			</div>
		</div>
	</div>
</div>