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
         <div style = "width:300px; border: solid 1px #228B22; " align = "left">
            <div style = "background-color:#228B22; color:#FFFFFF; padding:3px;"><b>Harvest </b></div>    
            <div style = "margin:30px">
            
				<form action="https://job.app/templates">
                <input type="submit" value="open ended" />
				</form>
				
				<form action="https://job.app/templates">
                <input type="submit" value="Single Choice" />
				</form>
				
				<form action="https://job.app/templates">
                <input type="submit" value="Multi Choice" />
				</form>
				
				<form action="https://job.app/templates">
                <input type="submit" value="Yes/No" />
				</form>
				
				</form>
				<br />
				<form action="https://job.app/employer">
                <input type="submit" value="Back" />
				</form>
				
            <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
            
            </div>    
         </div>    
      </div>
   </body>
</html>