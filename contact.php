 
     <?php
// define variables and set to empty values
$name = $email = $subject = $message= "";
#si la requête est methode
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        #traite les variable
       $name = test_input($_POST["name"]);
       $email = test_input($_POST["email"]);
       $message = test_input($_POST["message"]);
       $subject = test_input($_POST["subject"]);
         #si le nom contient des caractères bizzares ou l'email est invalide ou la variable message et subject est vide
       if (preg_match("/^[a-zA-Z ]*$/",$name) and filter_var($email, FILTER_VALIDATE_EMAIL) and !empty($message)and !empty($subject)) {
           $code;
        #contenu de l'email
         $to="abdeli12.ai@gmail.com";
         $content="Nom :$name\n";
         $content.="Email:$email\n";
         $content.="Message :\n\n$message\n";
         #entete de l'email
         $header="Name :$name <$email>";
        #envoie de l'email
         $envoye= mail($to,$subject,$content,$header);
          $code=http_response_code(200);
         echo  $code;
             }
             else{

         $code=http_response_code(400);
         echo $code;
          
         }
        
       
     }
        

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

