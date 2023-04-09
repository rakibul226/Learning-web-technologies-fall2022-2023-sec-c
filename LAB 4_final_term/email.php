

<html>

<body>

<h1 id=head1>Email</h1>

 Email:<input id= 'email' type="email" name="email" value="">
 <input type="submit" name="submit" value="Submit" onclick="getEmail()">
		
		
	<script>
		
        function getEmail(){
			let email = document.getElementById('email').value;
			
			if(email  != ""){
				document.getElementById('head1').innerHTML = email;
			}else{
				alert('null value');
			}
		}
	</script>
</body>
</html>
