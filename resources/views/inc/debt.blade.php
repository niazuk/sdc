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
					
					echo Form::label('debt_date', 'Date Due:');
		            
		            echo Form::date('debt_date');
		            echo '<br/>';
		            echo '<br/>';
		            
		            echo Form::label('debt_type', 'Debt Type:');
		           
		            echo Form::select('debt_type', ['incoice' => 'Invoice', 'tenancy' => 'Tenancy Agreement', 'verbal' => 'Verbal Agreement', 'written' => 'Written Agreement'], 'invoice');
		            echo '<br/>';
		     		echo '<br/>';
		            echo Form::label('initial_amount', 'Initial Amount:');
		           
		            echo Form::number('initial_amount');
		            echo '<br/>';
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