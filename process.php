<?php
session_start(); // session starts here.

if(isset($_POST['submit'])){
    $email = $_POST['email'];

    echo "<h4>Welcome ". $email ."</h4>";
}
if (isset($_POST['login'])){
    $email    = $_POST['email'];
   
    echo "<h4>Welcome ". $email ."</h4>";
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
            'text': 'user logged in',
            'type': 'Success',
        })
    });

</script>