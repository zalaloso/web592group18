<?php
 // ÊÇè ¹µÑ§é¤Óè àÃÂÕ¡ãª§éÓ¹ UserService ¢Í§ Google
 use google\appengine\api\users\User;
 use google\appengine\api\users\UserService;
 global $user;

 $user = UserService::getCurrentUser();
 if($user){
 $url = UserService::createLogoutUrl('/main.php');
 echo "Login as <br>".$user->getNickname();
 echo "<br><a href='$url'>Logout</a>";
 }else{
 $url = UserService::createLoginUrl('/shop.php');
 echo "<a href='$url'>Login or Register</a>";
 }
?>