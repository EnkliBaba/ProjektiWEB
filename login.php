
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bodyy">
    <div class="container1">
    
    
    <?php
if (isset($_POST['login'])) {
    
    $email = $_POST['login_email'];
    $password = $_POST['login_password'];


    if (empty($email) || empty($password)) {
        echo "<div class='alert alert-danger'>Please fill in all fields.</div>";
    } else {
    
        require_once "db.php";

       
        $sql = "SELECT * FROM login WHERE email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($user = mysqli_fetch_assoc($result)) {
           
            if (password_verify($password, $user['password'])) {
               
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_email'] = $user['email'];
                header("Location: index.php"); 
                exit();
            } else {
                echo "<div class='alert alert-danger'>Incorrect password. Please try again.</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Email not found. Please try again.</div>";
        }
    }
}
?>


        <!-- Login Form -->
        <div id="login-form">
            <h2>Login</h2>
            <form method="post" action="login.php">
                <div class="form-group">
                    <label for="login-email">Email</label>
                    <input type="email" id="login-email" name="login_email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="login-password">Password</label>
                    <input type="password" id="login-password" name="login_password" placeholder="Enter your password">
                </div>
                <button class="btn" type="submit" name="login">Login</button>
            </form>
            <div class="toggle-link" onclick="toggleForms()">Don't have an account? Register</div>
            <label for="">Don't want to log in?</label><a href="index.php" class="homepage"> You can go to our homepage</a>
        </div>

        <!-- Register Form -->

        <?php

class UserRegistration {
    private $name;
    private $email;
    private $password;
    private $errors = [];
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function registerUser($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;

        $this->validateInputs();
        $this->checkEmailExistence();

        if (count($this->errors) > 0) {
            foreach ($this->errors as $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
        } else {
            $this->insertUser();
        }
    }

    private function validateInputs() {
        if (empty($this->name) || empty($this->email) || empty($this->password)) {
            $this->errors[] = "All fields are required";
        }

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $this->errors[] = "Email is not valid";
        }

        if (strlen($this->password) < 8) {
            $this->errors[] = "Password must be at least 8 characters long";
        }
    }

    private function checkEmailExistence() {
        $sql = "SELECT * FROM register WHERE email = ?";
        $stmt = mysqli_prepare($this->conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $this->email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            $this->errors[] = "Email already exists";
        }
    }

    private function insertUser() {
        $passwordHash = password_hash($this->password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO register (Name, Email, Password) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($this->conn, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sss", $this->name, $this->email, $passwordHash);
            mysqli_stmt_execute($stmt);
           // echo "<div class='alert alert-success'>You are registered successfully.</div>"; 
        } else {
            die("Something went wrong");
        }
    }
}



if (isset($_POST["register"])) {
    require_once "db.php"; 

    $userRegistration = new UserRegistration($conn);
    $userRegistration->registerUser($_POST["register_name"], $_POST["register_email"], $_POST["register_password"]);
}
?>

        <div id="register-form" style="display: none;">
            <h2>Register</h2>
            <form method="post" action="">
                <div class="form-group">
                    <label for="register-name">Name</label>
                    <input type="text" id="register-name" name="register_name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="register-email">Email</label>
                    <input type="email" id="register-email" name="register_email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="register-password">Password</label>
                    <input type="password" id="register-password" name="register_password" placeholder="Enter your password">
                </div>
                <button class="btn" type="submit" name="register">Register</button>
            </form>
            <div class="toggle-link" onclick="toggleForms()">Already have an account? Login</div>
            <label for="">Don't want to log in?</label><a href="index.php" class="homepage"> You can go to our homepage</a>
        </div>
    </div>

    <script>
       
        function toggleForms() {
            const loginForm = document.getElementById('login-form');
            const registerForm = document.getElementById('register-form');

            
            if (loginForm.style.display === 'none') {
                loginForm.style.display = 'block';
                registerForm.style.display = 'none';
            } else {
                loginForm.style.display = 'none';
                registerForm.style.display = 'block';
            }
        }
    </script>

    

    </body>
    </html>
