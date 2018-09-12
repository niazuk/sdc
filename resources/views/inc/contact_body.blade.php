<div class="banner_bottom">
	<div class="container">
		
		<div class="mail_form">
			<br>
			<h3 class="tittle-w3ls">Contact Us</h3>
			<div class="inner_sec_info_wthree_agile">
				<?php
									
					echo Form::open(['action' => 'CallbackController@store']);
					echo '<div class="row">';
					echo '<div class="col-sm-4">';					           
		            echo Form::text('name', null, array('placeholder'=>'Your Name','class' => 'foo' ));
		            echo '<br/>';
		            echo '</div>';
		            
		            echo '<div class="col-sm-4">';		            	          
		            echo Form::text('email_id', null, array('placeholder'=>'Email','class' => 'foo' ));
		            echo '<br/>';
		            echo '</div>';
		     
		            echo '<div class="col-sm-4">';		            	         
		            echo Form::text('phone_no', null, array('placeholder'=>'Phone No','class' => 'foo' ));
		            echo '<br/>';
		            echo '</div>';
		            echo '</div>';

		            echo '<div class="row">';
					echo '<div class="col-sm-12">';
					echo '<br/>';			
		            echo Form::textarea('message', null, array('placeholder'=>'Your message here....' ));
		            echo '</div>';
		            echo '</div>';
		            
		            echo Form::submit('SEND NOW');
			        echo Form::close();
			    ?>	

			</div>
		</div>
	</div>
</div>