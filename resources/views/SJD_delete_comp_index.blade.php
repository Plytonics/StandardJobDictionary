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
				var ajaxurl = 'SJD_get_employer.php',
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
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Delete</b></div>    
            <div style = "margin:30px">
            
                <form action="SJD_get_employer.php" method="post">
                <label>Job Title:  </label><input type="text" name="jobtitle"><br>
				
                <input type="submit" name="DeleteBT" value="Delete" /><br />
                </form>
				<br />
				<a href="SJD_employer_index.html">Company Index</a>
                
            <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
            
            </div>    
         </div>    
      </div>
   </body>
</html>