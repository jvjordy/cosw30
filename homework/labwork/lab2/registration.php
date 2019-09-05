<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Registration Form </title>
        </head>
        <body>
            <h1>Registration Form </h1>
            <form action = "process_registration.php" method = "POST">
            
                 <label for = "first_name"> First Name: </label>
                <input type = "text" id="first_name" name="first_name" required><br>
                
                 <label for = "last_name"> Last Name: </label>
                <input type = "text" id="last_name" name="last_name" required><br>
                
                <label for ="email">Email Address: </label>
                <input type = "email" name ="email" id="email" required><br>
                
                <label for="password"> Password:</label>
                <input type ="password" name = "password" id = "password" required><br>
                
                   <label for="confirm_password"> Confirm Password:</label>
                <input type ="password" name = "confirm_password" id = "confirm_password" required><br>
        
                <button> Register </button>
                
                
            </form>
            
            
        </body>
        </html>