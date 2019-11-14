<?php
// Add the database connection
include 'database.php';


/*
*   CHECK IF THE FORM HAS BEEN SUBMITTED AND INSERT
*   NEW USER INTO THE DATABASE
*/
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $error = [];

        if(empty($_POST['first_name'])) {
        $error[0] = 'First name is required';
    } else {
        $first_name = trim($_POST['first_name']);
    }
     if(empty($_POST['last_name'])) {
        $error[1] = 'Last name is required';
    } else {
        $last_name = trim($_POST['last_name']);
    }
     if(empty($_POST['email'])) {
        $error[2] = 'Email is required';
    } else {
        $email = trim($_POST['email']);
    }

    if(!empty($_POST['password'])) {
        if($_POST['password'] != $_POST['confirm_password']) {
            $error[3] = 'The passwords did not match. Try again';
        } else {
            $password = trim($_POST['password']);
        }
    } else {
        $error[4] = 'Please enter a password!';
    }

    if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($password) ) {
        $insert_query = "INSERT INTO USER_VERVUURT (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password')";

        if ($result = mysqli_query($connection, $insert_query)) {
        echo 'New user added to database';
    } else {
        echo 'Error entering new user';
    }
    }

}


/*
*   QUERY THE DATABASE AND STORE ALL USERS INTO A VARIABLE
*/
// Create your query
$query = 'SELECT * FROM USER_VERVUURT';

// Run your query
$result = mysqli_query($connection, $query);

// Check if the database returned anything
if($result) {
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        // Output the results
      //  print_r($rows);
} else {
    // Output an error
    echo "The table cannot be generated";
}
?>

<!doctype html>
<html>
<head>
    <title>My First CRUD</title>
</head>
<body>
    <h1>Create a New User</h1>
    <form action="crud.php" method="POST">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" value="<?php if(isset($_POST['first_name'])) echo $_POST['first_name']; ?>"> <br>

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" value="<?php if(isset($_POST['last_name'])) echo $_POST['last_name']; ?>"> <br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];  ?>"> <br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password"><br>

        <!--Add a second password input so the user has to retype their password -->
         <label for="confirm_password">Confirm Password</label>
         <input type="password" id="confirm_password" name="confirm_password"><br>

        <button>Register</button>
        
    </form>

    <h2>Output a List of Users</h2>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>

        <?php
        foreach($rows as $row) {
           echo '<tr>
                <td>'.$row['first_name'].'</td>
                <td>'.$row['last_name'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row['password'].'</td>
                <td><a href = "update.php?id='.$row['user_id'].'">Edit</a></td>
            </tr>';
        }
        ?>
        </tbody>
    </table>
</body>
</html>
