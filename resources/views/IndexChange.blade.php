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
				var ajaxurl = 'SJD_get_DB.php',
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
         <div style = "width:800px; border: solid 1px #228B22; " align = "left">
            <div style = "background-color:#228B22; color:#FFFFFF; padding:3px;"><b>Login</b></div>    
            <div style = "margin:30px">
            
                <form action="SJD_get_DB.php" method="post">
                <label>First Name:  </label><input type="text" name="firstname">
        
                <label>Last Name: </label><input type="text" name="lastname"><br /><br />
        
                <label>User ID: </label><input type="text" name="userid"><br /><br />
        
                <label>Skill: </label><input type="text" name="skill"><br /><br />
        
                <label>Skill Proficiency: </label><input type="text" name="skillpro"><br /><br />
				
                <input type="submit" name="SubmitBT" value="Submit" /><br />
				<input type="submit" name="ChangeBT" value="Change" /><br />
				<input type="submit" name="DeleteBT" value="Remove" /><br />
                </form>
				<br />
				<form action="MainPage.html">
                <input type="submit" value="Back" />
				</form>
                
            <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
            
            </div>    
         </div>    
      </div>
   </body>
</html>
