<?php
//mysql_connect("localhost", "username", "password") or die("could not connect");
//mysql_select_db("mydb") or die("could not find db");


?>
<!DOCTYPE HTML>
<html>
<!-- SJD_index -->
	<head>	
		<script>
		
		$(document).ready(function()
		{
			$('.button').click(function()
			{
				var clickBtnValue = $(this).val();
				var ajaxurl = 'Admin_Interface.php',
				data =  {'action': clickBtnValue};
						$.post(ajaxurl, data, function (response){
						// Response div goes here.
						alert("action performed successfully");
						});
			});
		});
		
		</script>
	</head>
	
    <body bgcolor = "#FFFFFF">
    
       
        <div align = "center">
         <div style = "width:1200px; border: solid 1px #228B22; " align = "left">
            <div style = "background-color:#228B22; color:#FFFFFF; padding:3px;"><b>Admin</b></div>    
            <div style = "margin:30px">
			
				<div align = "center">
				<form action="Admin_Interface.php?go" method="post" id="searchform">
				<input type="text" name="search" placeholder="Search for user..."/>
				<input type="submit" name="submit" value="search"/>
				</form>
                </form>
				</div>
				
				<?php 
				if(isset($_POST['submit'])){ 
	  if(isset($_GET['go'])){ 
	  if(preg_match("/^[  a-zA-Z]+/", $_POST['search'])){ 
	  $search=$_POST['search']; 
	  //connect  to the database 
	  $servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mydb";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	}
	  //-query  the database table 
	  //$sql ="SELECT * FROM `userinfo` WHERE firstname LIKE '%" . $search .  "%' OR lastname LIKE '%" . $search ."%'";
	  $sql="SELECT firstname, lastname FROM userinfo WHERE firstname LIKE '%" . $search .  "%' OR lastname LIKE '%" . $search ."%'";
	  
	  //-run  the query against the mysql query function 
	  $result = mysql_query($sql) or die("could not search!"); 
	  
	  //-create  while loop and loop through result set 
	  while($row=mysql_fetch_array($result)){ 
	          $Firstname1  =$row['firstname'];  
	  //-display the result of the array 
	  echo "<ul>\n"; 
	  echo "<li>" . "<a  href=\"search.php?id=$ID\">"   .$firstname1 . "</a></li>\n"; 
	  echo "</ul>"; 
	  } 
	  } 
	  else{ 
	  echo  "<p>Please enter a search query</p>"; 
	  } 
	  } 
	  } 
				?>
			<p>
			</p>
			
			<div align = "center">	
		    <div style = "width:600px; height: 500px; border: solid 1px #000000; " align = "left">
            <div style = "background-color:#228B22; color:#FFFFFF; padding:0px;"><b></b></div>    
            <div style = "margin:30px">
			
			
			
			
			</div>
			</div>
			</div>
			
			
			
			<div align = "left">
			<div style = "width:200px; border: solid 1px #000000; " align = "left">
            <div style = "background-color:#228B22; color:#FFFFFF; padding:0px;"><b></b></div>    
            <div style = "margin:20px">
			

				<form action="SJD_get_DB.php" method="post">
                <label>User ID:  </label><input type="text" name="userid"><br>
                <input type="submit" name="DeleteBT" value="Delete" /><br />
                </form>
			</div>
			</div>
			</div>
				
				
                
				
				
            <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
		    
			
			<div align = "center">
			<div id="piechart"></div>
			<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
			<script type="text/javascript">
			// Load google charts
			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);

			// Draw the chart and set the chart values
			function drawChart() {
			  var data = google.visualization.arrayToDataTable([
			  ['Task', 'Hours per Day'],
			  ['Engineering', 8],
			  ['Health', 2],
			  ['Manufacturing', 4],
			  ['Finance', 2],
			  ['Energy', 8]
			]);

			  // Optional; add a title and set the width and height of the chart
			  var options = {'Title':'Job listings', 'width':550, 'height':400};

			  // Display the chart inside the <div> element with id="piechart"
			  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
			  chart.draw(data, options);
			}
			</script>
			</div>
						
			
			
			<form action="MainPage.html">
            <input type="submit" value="Back" />
		    </form>
			</div>  
            </div>    
         </div>    
      </div>	  
	  
	  
	  
   </body>
</html>
