<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script
    src="https://code.jquery.com/jquery-3.4.0.min.js"
    integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script>
        $(document).ready(function(){
            $("form").submit(function(event){
                event.preventDefault();
                var name = $("#mail-name").val();
                var email = $("#mail-email").val();
                var gender = $("#mail-gender").val();
                var message = $("#mail-message").val();
                var submit = $("#mail-submit").val();
                $(".error-message").load("mail.php" , {
                    name : name,
                    email : email,
                    gender : gender,
                    message : message,
                    submit : submit
                });
            });
        });
    </script>


</head>
<body>

<form action="mail.php" method="POST">
<input id="mail-name" type="text" class="form-control" name="name" placeholder="enter your full name"><br>
<input id="mail-email" type="text" class="form-control" name="email" placeholder="enter your email"><br>
<select id="mail-gender" name="gender" class="form-control">
    <option value="" selected>select gender</option>
    <option value="male">Male</option>
    <option value="female">Female</option>
</select><br>

<textarea id="mail-message"  class="form-control" name="message" placeholder="write your message"></textarea><br>

<button id="mail-submit" type="submit" name="submit" class="btn btn-dark" >Send E-mail</button>
<p class="error-message"></p>
</form>
    
</body>
</html>