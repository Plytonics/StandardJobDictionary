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
         <div style = "width:720px; border: solid 1px #228B22; " align = "left">
            <div style = "background-color:#228B22; color:#FFFFFF; padding:3px;"><b>Job Creation</b></div>    
            <div style = "margin:30px">
            
                <form action="SJD_get_employer.php" method="post">
                <label>Job Title:  </label><input type="text" name="jobtitle"><br /><br />
        
                <label>Degree Requirement: </label><input type="text" name="degree"><br /><br />
        
                <label>Requires reliable transport?: </label><input type="text" name="transport"><br /><br />
        
                <label>Can be worked remotely?: </label><input type="text" name="remote"><br /><br />
        
                <label>Work Address: </label><input type="text" name="workaddress"><br /><br />
				
				<label>Preferred Employment Status: </label><input type="text" name="preferstatus"><br /><br />
				
				<label>Job Type: </label><input type="text" name="jobtype"><br /><br />
				
				<label>Salary: </label><input type="text" name="salary"><br /><br />
				
				<label>Responsibility: </label><input type="text" name="task"><br /><br />
				
				<label>Skill Required: </label><input type="text" name="skillreq"><br /><br />
				
				<label>Skill Proficiency required: </label><input type="text" name="skillreqpro"><br /><br />
				
				<label>Language: </label><input type="text" name="langreq"><br /><br />
				
				<label>Language Proficiency required: </label><input type="text" name="langreqpro"><br /><br />
				
				<label>Job Summary: </label><input type="text" name="summary"><br /><br />
				
                <input type="submit" name="SubmitBT" value="Submit" /><br />
				<input type="submit" name="ChangeBT" value="Change" /><br />
				<input type="submit" name="ArcivBT" value="Arciving" /><br />
                </form>
				<br />
				<form action="SJD_get_Dash.html">
                <input type="submit" value="Back" />
				</form>
                
            <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
            
            </div>    
         </div>    
      </div>
   </body>
</html>