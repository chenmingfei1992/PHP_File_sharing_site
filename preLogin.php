

<!DOCTYPE html>
<head><title>Input username and password</title></head>
<body>
<form action="check.php" method="POST">

	<p>
		<label for="username">Username:</label>
		<input type="text" name="username" id="username" />
	</p>

        <p>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" />
        </p>
        	
        <p>
		<input type="submit" value="submit"" />
		<input type="reset" />

                </form>


     		<form action = "signUp.php" method = "POST">
               <p>
  		<label for="username">Sign Up here !:</label> <br /> 
                 <input name = "field1" type = "text" size="20"/>
                
         	</p>
               
             <p>
                       <input name = "field2" type = "password" size="20"/>
             </p>  
              <input type = "submit" name = "submit" value = "save data"/>
                 
              </form>




</body>
</html>
