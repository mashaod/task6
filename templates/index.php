<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <!-- First Band-->
	  <p style="text-align:center">--Task 6--</p>
	 <!--<div class="row">-->
	  <div class="col-md-6">
	    <div class="thumbnail">
	      <img src="img/1.jpg" alt="...">
	      <div class="caption">
		<h3><?php echo $firstBandName; ?></h3>
		<p><?php echo $firstBandGenre; ?></p>
		<div class="panel panel-default">
  		<!-- Default panel contents -->
  		<div class="panel-heading">Background information</div>

  		<!-- Table -->
  		<table class="table">
   		<tr>
    			<th>Members</th>
    			<th>MusType</th>
    			<th>Instruments</th>
   		</tr>
		<?php
		foreach ($firstBandTeam as $musician)
		{
		?>
			<tr>
				<td>
					<?php 
						echo "<b>" . $musician["name"] . "</b>";  
						foreach ($musician["nameBands"] as $nameBand => $genre)
						{
							echo "<p>" . $nameBand . ": <i>" . $genre . "</i>" . "</p>";
						}

					?>
				</td>
				<td>
					<?php echo $musician["type"]; ?>
				</td>
				<td>
					<?php 
						foreach ($musician["instruments"] as $instrument => $type)
						{
							echo "<p>" . $type . ": <i>" . $instrument. "</i>" . "</p>";	
						}
					?>
				</td>
			</tr>
		<?		
		}
		?>
  		</table>
		</div>
	      </div>
	    </div>
	  </div>
	<!--</div>-->
	  
  <!-- Second Band-->	  
	 <!-- <div class="row"> -->
	  <div class="col-sm-6 col-md-6">
	    <div class="thumbnail">
	      <img src="img/2.jpg" alt="...">
	      <div class="caption">
		<h3><?php echo $secondBandName; ?></h3>
		<p><?php echo $secondBandGenre; ?></p>
		<div class="panel panel-default">
  		<!-- Default panel contents -->
  		<div class="panel-heading">Background information</div>

  		<!-- Table -->
  		<table class="table">
   		<tr>
    			<th>Members</th>
    			<th>MusType</th>
    			<th>Instruments</th>
   		</tr>
		<?php
		foreach ($secondBandTeam as $musician)
		{
		?>
			<tr>
				<td>
					<?php 
						echo "<b>" . $musician["name"] . "</b>";  
						foreach ($musician["nameBands"] as $nameBand => $genre)
						{
							echo "<p>" . $nameBand . ": <i>" . $genre . "</i>" . "</p>";
						}

					?>
				</td>
				<td>
					<?php echo $musician["type"]; ?>
				</td>
				<td>
					<?php 
						foreach ($musician["instruments"] as $instrument => $type)
						{
							echo "<p>" . $type . ": <i>" . $instrument. "</i>" . "</p>";	
						}
					?>
				</td>
			</tr>
		<?		
		}
		?>
  		</table>
		</div>
	      </div>
	    </div>
	  </div>
	<!--</div>-->
  </body>
</html>
