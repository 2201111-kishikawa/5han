<?php
class Session{
    public function SessionSet($email,$password){
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
    }
}
?>
