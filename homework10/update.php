<?php
// Add the database connection
include ('database.php');
/*
*   CHECK IF THE URL HAS A $_GET VARIABLE CALLED ID
*/
if(isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    // redirect to crud.php
header('Location: crud.php');
exit;
}

/*
*   AFTER SUBMITTING THE UPDATE FORM, UPDATE THE INFO
*   IN THE DATABASE


  Validate the inputs (check if they're empty)
    

     if(failed condition) {
         $errors[] = 'Error Message';

     }
*/

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];

    if(empty($_POST['first_name'])) {
        $error[0] = 'Please fill this field out.';
    } else {
        $first_name = trim($_POST['first_name']);
    }

    if(empty($_POST['last_name'])) {
        $error[0] = 'Please fill this field out.';
    } else {
        $last_name = trim($_POST['last_name']);
    }

    if(empty($_POST['email'])) {
        $error[0] = 'Please fill this field out.';
    } else {
        $email = trim($_POST['email']);
    }

    if(!empty($_POST['password'])) {
        if($_POST['password'] != $_POST['confirm_password']) {
            $error[2] = 'The passwords did not match, Try again.';
        } else {
            $password = trim($_POST['password']);
        }
    } else {
        $error[1] = 'Please enter a password';
    }

  if(empty($update_msg)) {
   
    // If they aren't empty, create and run your query
    $update_query = "UPDATE USER_VERVUURT
                     SET first_name = '$first_name',
                         last_name = '$last_name',
                         email = '$email',
                         password = '$password',
                     WHERE user_id = $id";

                     if($result = mysqli_query($connection, $update_query)) {
                header('Location: crud.php');
                exit;
        } else {
            echo 'There seems to be a problem with updating your information. Please try again.'; 
        }

  }
    // Check if the database returned anything
        // If the UPDATE query was successful, redirect to
        // the crud.php page
        // Else, output an error message
}

/*
*   QUERY THE DATABASE FOR THE USER THAT HAS THE GET ID
*/

// Create your query
$query = "SELECT * FROM USER_VERVUURT WHERE user_id = $id";

// Run your query
$result = mysqli_query($connection, $query);

// Check if the database returned anything
if($result) {
    // If the database query was successful, store
    // the users information into a variable
    $user = mysqli_fetch_assoc($result);
    $first_name = $user['first_name'];
    $last_name = $user['last_name'];
    $email = $user['email'];
    $password = $user['password'];

} else {
    // Output an error message
      echo '<p>There is an error with generating the user.</p>';

}

?>

<!doctype html>
<html>
<head>
    <title>The CRUD</title>
</head>
<body>
    <h1>Update User</h1>

    <form action="update.php?id= <?php echo $id; ?>" method="POST">

        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" value = "<?php echo $first_name; ?>"><br>

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" value = "<?php echo $last_name; ?>"><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value = "<?php echo $email; ?>"><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" value = "<?php echo $password; ?>"><br>

        <label for="confirm_password">Confirm Password</label>
        <input type="password" id="confirm_password" name="confirm_password" value="<?php echo $password;  ?>"><br>

        <button>Update User</button>

        
            <?php
                if(isset($error[0])) {
                    echo '<p>' . $error[0] . '</p>';
                }
                if(isset($error[2])) {
                    echo '<p>' . $error[2] . '</p>';
                }
            ?>



    </form>
</body>
</html>