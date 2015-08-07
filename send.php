
 

 <?php
 $txt = isset($_POST["txt"])? $_POST["txt"] : $_GET["txt"] ;

 print_r($txt);
 $to = "narbelys@gmail.com";
 $subject = "New Message";
 $headers = "From: narbelys@gmail.com";
 mail($to, $subject, $txt, $headers);
?>