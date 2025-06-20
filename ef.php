<?php
if(isset($_POST['submit'])){
    // Fetch form data
    $name=$_POST['name'];
    $email=$_POST['email'];
   
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $country=$_POST['country'];
    $zipcode=$_POST['zip'];
    $phone_number=$_POST['phone'];
    $password=$_POST['password'];
    $cpassword=$_POST['confirm_password'];
    
    $check_query = mysqli_query($con, "SELECT * FROM csa WHERE name='$name'");
    if(mysqli_num_rows($check_query) > 0){
        echo "Username already exists";
    } else {
        
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $cpassword=password_hash($cpassword,PASSWORD_DEFAULT);
        
        // Insert user data into the database
        $insert_query = "UPDATE csa SET name='$name',email='$email',password='$password_hash',confirm_password='$cpassword',dob='$dob',gender='$gender',address='$address', city='$city', state='$state', country='$country', zip_code='$zipcode', phone_number='$phone_number' WHERE sl_no=$id";
        if(mysqli_query($con, $insert_query)){
            echo "Updated Successfully";
          //  header('location:getdata.php');
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }
    // Close database connection
    mysqli_close($con);
}
?>