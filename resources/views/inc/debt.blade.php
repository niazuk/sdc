<div class="banner_bottom">
	<img src="images/commercial_debt_collection.jpg" class="img-responsive" alt="" width="100%">
	<div class="centered">
		<h3>Submit Your Debt</h3>
				
	</div>
	<div class="container">
		<h3>Debt Details</h3>
		<p>We understand that each case can be different and there can be many routes to follow in order to collect a debt. For a free no obligation appraisal please fill out the following form.</p>
		<div class="row">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4">
				<?php
					$request_update = '';
					echo Form::open(['action' => 'CallbackController@store']);
					
					echo Form::label('name', 'Date Due:');
		            
		            echo Form::date('name');
		            echo '<br/>';
		            
		            echo Form::label('email_id', 'E-Mail:');
		           
		            echo Form::text('email_id');
		            echo '<br/>';
		     
		            echo Form::label('phone_no', 'Telephone:');
		           
		            echo Form::text('phone_no');
		            echo '<br/>';
		            
		            echo Form::submit('SEND NOW');
			        echo Form::close();
			    ?>	
			</div>
			<div class="col-sm-4">
			</div>
		</div>	
	</div>				
</div>							    