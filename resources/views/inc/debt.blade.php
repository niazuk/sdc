<div class="banner_bottom">
	<img src="images/commercial_debt_collection.jpg" class="img-responsive" alt="" width="100%">
	<div class="centered">
		<h3>Submit Your Debt</h3>
		<p> Submit your debt online, email or by post.
			</p>		
	</div>
	<div class="container">
		<div class="mail_form">
			<br>
			<h3 class="tittle-w3ls contact_send">Debt Details</h3>
			<p>We understand that each case can be different and there can be many routes to follow in order to collect a debt. For a free no obligation appraisal please fill out the following form.</p>
			<div class="inner_sec_info_wthree_agile">
				<?php
					echo Form::open(['action' => 'SubmitDebtFormController@store']);
					echo Form::hidden('mail_id', 'debtform');
		            echo '<div class="row">';
						echo '<div class="col-sm-3">';
						echo '</div>';
						echo '<div class="col-sm-6">';

							echo '<div class="row">';
								echo '<div class="col-sm-12">';
									echo 'Fields marked with a <span style="color: red">*</span> are required <br>';
									echo Form::label('due_date', 'Debt Due Date ');           
						            echo Form::date('due_date', null, array('class' => 'foo'));
						            echo '<br/><br/>';
					            echo '</div>';
					        echo '</div>';

					        echo '<div class="row">';
								echo '<div class="col-sm-12">';									
									echo Form::label('debt_type', 'Debt Type '); 
									echo Form::select('debt_type', ['incoice' => 'Over due invoice', 'verbal' => 'Verbal Agreement', 'written' => 'Written Agreement'], 'invoice', array('class' => 'foo'));				
									echo '<br/><br/>';
					            echo '</div>';
					        echo '</div>';

					        echo '<div class="row">';
								echo '<div class="col-sm-12">';									
									echo Form::label('amount', 'Initial Amount ');           
						            echo Form::number('amount', null, array('class' => 'foo'));
						            echo '<br/><br/>';
					            echo '</div>';
					        echo '</div>';
					      

					        echo '<div class="row">';
								echo '<div class="col-sm-12">';									
									echo Form::label('stage', 'Current stage of the debt', array('class' => 'foo')); 
									echo '<div class="row">';
										echo '<div class="col-sm-6"></div>';
									 	echo '<div class="col-sm-6">';        
						            	echo Form::radio('stage', 'Late in paying',true).'Late in paying<br>';
										echo Form::radio('stage', 'Have CCJ', false).'Do you have CCJ';
						            echo '<br/><br/></div></div>';
					            echo '</div>';
					        echo '</div>';

					        echo '<div class="row">';
							echo '<div class="col-sm-12">';
									echo Form::label('details', 'Additional Information');				
						            echo Form::textarea('details', null, array('class' => 'foo_area' ));
						        echo '</div>';
				            echo '</div>';

							echo '<div class="row">';
								echo '<div class="col-sm-12">';									
									echo Form::label('c_name', 'Your Name '); echo '<span style="color: red">*</span>';		           
						            echo Form::text('c_name', null, array('class' => 'foo','required' => 'required' ));
						            echo '<br/><br/>';
					            echo '</div>';
					        echo '</div>';
				            
				            echo '<div class="row">';
								echo '<div class="col-sm-12">';	
						            echo Form::label('c_company', 'Your Company');	            	          
						            echo Form::text('c_company', null, array('class' => 'foo' ));
						            echo '<br/><br/>';
				            	echo '</div>';
					        echo '</div>';

					        echo '<div class="row">';
								echo '<div class="col-sm-12">';	
						            echo Form::label('c_email', 'Your Email ');echo '<span style="color: red">*</span>';                      
						            echo Form::email('c_email', null, array('class' => 'foo','required' => 'required' ));
						            echo '<br/><br/>';
				            	echo '</div>';
					        echo '</div>';
				     
				            echo '<div class="row">';
								echo '<div class="col-sm-12">';			    
						            echo Form::label('c_phone', 'Your Contact number');	        	         
						            echo Form::number('c_phone', null, array('class' => 'foo' ));
						            echo '<br/><br/>';
				            	echo '</div>';
				            echo '</div>';

				            echo '<div class="row">';
								echo '<div class="col-sm-12">';									
									echo Form::label('d_name', 'Debtor Name '); echo '<span style="color: red">*</span>';		           
						            echo Form::text('d_name', null, array('class' => 'foo','required' => 'required' ));
						            echo '<br/><br/>';
					            echo '</div>';
					        echo '</div>';
				            
				            echo '<div class="row">';
								echo '<div class="col-sm-12">';	
						            echo Form::label('d_company', 'Debtor Company');	            	          
						            echo Form::text('d_company', null, array('class' => 'foo' ));
						            echo '<br/><br/>';
				            	echo '</div>';
					        echo '</div>';

					        echo '<div class="row">';
								echo '<div class="col-sm-12">';	
						            echo Form::label('d_email', 'Debtor Email ');                      
						            echo Form::email('d_email', null, array('class' => 'foo'));
						            echo '<br/><br/>';
				            	echo '</div>';
					        echo '</div>';
				     
				            echo '<div class="row">';
								echo '<div class="col-sm-12">';			    
						            echo Form::label('d_phone', 'Debtor Contact number');	        	         
						            echo Form::number('d_phone', null, array('class' => 'foo' ));
						            echo '<br/><br/>';
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