<?php
session_start(); // session starts here.

if (isset($_POST['register'])){
    $firstname    = $_POST['firstname'];
    $lastname     = $_POST['lastname'];
    $email        = $_POST['email'];
    $password     = $_POST['password'];
   
    echo $firstname . " " . $lastname . " " . $email . " " . $password;
}
?>
<form><p><a href='Home.php'>Home</a></p></form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $(function(){
        $('#register').click(function(e){

            var valid = this.form.checkvalidity();
            if(valid){
                e.preventDefault();
                alert('true');
            }else{
                alert('false');
            }

            var firstname     = $('#firstname').val();
            var lastname      = $('#lastname').val();
            var email         = $('#email').val();
            var phonenumber   = $('#phonenumber').val();
            var password      = $('#password').val();
            
             });
             swal.fire({
            'title': 'success!',
            'text': 'account successfully created',
            'type': 'Success',
        })
    });

</script>