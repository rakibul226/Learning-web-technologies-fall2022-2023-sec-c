<!-- <html>
    Name
    <input type="text" name="name" >
    <input type="submit" value="submit" onclick="f2()">
</html>

<script>

function f2(){
                let username = document.getElementsByTagName('input')[0].value;
                //alert(username);

                if(username == ""){
                 let obj = document.getElementsByTagName('p')[0];   
                console.log('test');
                
                
                }else{
                    console.log('test2');
                }
            }

</script> -->



<!DOCTYPE html>
<html>
<head>
	<title>JS Example</title>
	<style>

	</style>
</head>
<body>

	
    <h1 id="h2">Name</h1>
	
	<input type="text" name="name" value="" onkeyup="getNames()" /><br><br>
    <input type="submit" name="submit" value="Submit" onclick="getName()">
	<script>
        function getName()
        {
			let name = document.getElementsByTagName('input')[0].value;
			if(name == ""){
				alert('Null value');
			        }
            else if(name.length<2 ){
                    alert('Contains at least two words');
                    }
            else if( name=="~"|| name=='!' || name=='@' || name =='#' || name=='$' || name=='%' || name=='^' || name=='&' || name=='*' || name=='()'|| name=='/' ){
                    alert('Can contain a-z or A-Z or dot(.) or dash(-)');
                    }
            else if(name>='0' && name<='9'){
                    alert('Must be starts with letter');
                    }
                    
            else{
				//document.getElementBy('head1').innerHTML = name;
                document.getElementById('h2').innerHTML = name;
			}
		}
	</script>
 </body>
</html>