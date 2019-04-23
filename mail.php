<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $message = $_POST['message'];

    $errorEmpty = false;
    $errorEmail = false;
    $emptyName = false;
    $emptyEmail = false;
    $emptyGender = false;
    $emptyMessage = false;

   if(empty($name)){
        echo "<span class='form-error'>enter you name please</span>";
        $emptyName = true;
    }elseif(empty($email)){
        echo "<span class='form-error'>enter your Email please</span>";
        $emptyEmail = true;
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<span class='form-error'> enter a valid e-mail address!</span>";
        $errorEmail = true;
    }elseif(empty($gender)){
        echo "<span class='form-error'>select your gender</span>";
        $emptyGender = true;
    }elseif(empty($message)){
        echo "<span class='form-error'>Write a message to be sent!</span>";
        $emptyMessage = true;
    }elseif(empty($name) || empty($email) || empty($message)) {
        echo "<span class='form-error'> Fill in all fields</span>";
        $errorEmpty = true;
    }else{
        echo "<span class='form-success'>E-mail was sent successfully</span>";
    }
}
?>

<script>

$("#mail-name, #mail-email, #mail-gender, #mail-message").removeClass("input-error");

var errorEmpty = "<?php echo $errorEmpty; ?>";
var errorEmail = "<?php echo $errorEmail; ?>";
var emptyName = "<?php echo $emptyName; ?>";
var emptyEmail = "<?php echo $emptyEmail; ?>";
var emptyGender = "<?php echo $emptyGender; ?>";
var emptyMessage = "<?php echo $emptyMessage; ?>";

if(errorEmpty == true) {
    $("#mail-name, #mail-email, #mail-gender, #mail-message").addClass("input-error");
}
if(emptyName == true) {
    $("#mail-name").addClass("input-error");
}
if(emptyEmail == true) {
    $("#mail-email").addClass("input-error");
}
if(emptyGender == true) {
    $("#mail-gender").addClass("input-error");
}
if(emptyMessage == true) {
    $("#mail-message").addClass("input-error");
}
if(errorEmail == true) {
    $("#mail-email").addClass("input-error");
}
if(errorEmpty && errorEmail == false){
    $("#mail-name , #mail-email , #mail-gender , #mail-message").val("");
}


</script>