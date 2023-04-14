
<html>

<body>
	
	<form name="myForm" method="POST">
		<fieldset style="width:200px">
			<legend>Gender</legend>	
			<input id="gender" type="radio" name="gender" value="male"> Male
			<input id="gender" type="radio" name="gender" value="female"> Female
			<input id="gender" type="radio" name="gender" value="other"> Other 
		</fieldset> <br>
		
		<input type="submit" name="submit" value="Submit" onclick="validate()";>
	</form>
    <h1 id=head1>Gender</h1>
	
	<script>
		function validate(){
            
			let n = document.myForm.gender.value;
			
			if(n == ""){
				alert("At least one of them has to be selected");
				
			}
			else{
				document.getElementById('head1').innerHTML = document.getElementById('gender').value ;
			}		
		}
	</script>
</body>
</html>