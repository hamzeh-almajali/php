<?php include_once('config.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

    <div class = "container d-flex justify-content-center align-items-center" style = "height: 100vh;">
        <div class = "col-md-6">
            <a href = "index.php"><i class = "fas fa-arrow-left"></i></a>
            <h2 class = "text-center">Sign Up</h2>
            <p class="text-center">Create an account now!</p>
            <form action="" method="POST">
                <div class = "form-group">
                    <label for = "email">first:Name</label>
                    <input type = "text" class = "form-control" id = "email" placeholder = "firstname" name="first" required>
                </div>
                <div class = "form-group">
                    <label for = "email">Middle:Name</label>
                    <input type = "text" class = "form-control" id = "email" placeholder = "Middlename" name="middle" required>
                </div>
                <div class = "form-group">
                    <label for = "email">Last:Name</label>
                    <input type = "text" class = "form-control" id = "email" placeholder = "Lastname" name="last" required>
                </div>
                <div class = "form-group">
                    <label for = "email">Family</label>
                    <input type = "text" class = "form-control" id = "email" placeholder = "firstname" name="family" required>
                </div>
                <div class = "form-group">
                    <label for = "email">Email</label>
                    <input type = "text" class = "form-control" id = "email" placeholder = "Enter your email" name="email" required>
                </div>
                <div class = "form-group">
                    <label for = "email">phone</label>
                    <input type = "number" class = "form-control" id = "email" placeholder = "Enter your email" name="phone" required>
                </div>
                <div class = "form-group">
                    <label for = "email">Date</label>
                    <input type = "date" class = "form-control" id = "email" placeholder = "Enter your email" name="date" required>
                </div>
                <div class = "form-group">
                    <label for = "password">Password</label>
                    <input type = "password" class = "form-control" id = "password" placeholder = "Enter your password" name="password" required>
                </div>
                <div class = "form-group">
                    <label for = "confirm_password">Confirm Password</label>
                    <input type = "password" class = "form-control" id = "confirm_password" placeholder = "Confirm your password" name="cpassword" required>
                </div>
                <button type = "submit" class = "btn btn-primary col-12">Sign Up</button>
            </form>
            <div class = "text-center mt-3">
                <a href = "login.php">Already have an account? Login here</a>
            </div>
        </div>
    
</body>
</html>
<?php 
function validname($name){
    $pattern = '/^[a-zA-Z]+$/';
    return preg_match($pattern, $name);

}
function validemail($email){
$pattern ='/^[a-zA-Z]+$/';
return preg_match($pattern, $email);
}
function validpass($pass){
    $pattern ='/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';
    return preg_match($pattern, $pass);
}
function validphone($phone){
    $pattern = '/^\d{14}$/';
    return preg_match($pattern, $phone);
}
if ($_SERVER["REQUEST_METHOD"] ==='POST'){
$fname =$_POST['first'];
$lname =$_POST['last'];
$mname =$_POST['middle'];
$faname =$_POST['family'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$date =$_POST['date'];
$password =$_POST['password'];
$cpassword =$_POST['password'];



if($password !== $cpassword){
    echo 'your confirm password not the same <br>' ;
}else{
    $pass=$password;
}
if (!(validname($fname) && validname($lname) && validname($mname) && validname($faname))){
echo 'write your name correct with only latters <br>';
}else{
    $fullname = $fname.$mname.$lname.$faname;
};
if (!validphone($phone)){
    echo 'phone must have 14 digits <br>';
}else{
    $mobile=$phone;
}
if (validemail($email)){
    echo "enter a valid email <br>";
}else{
    $emaill =$email;
}
if(!empty($mobile) && !empty($fullname) && !empty($emaill) && !empty($pass)){
    $q="INSERT INTO users (name , phone ,email, password, permeation,date ) VALUES ('$fullname','$mobile','$emaill','$pass','2','$date')";
// $res=query($q);
header ("Location: admin.php");
}else{
    echo "something wrong happend send 100$ to fix it <br> ";
}

}

?>