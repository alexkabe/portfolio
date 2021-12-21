
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json *");
header("Access-Control-Allow-Headers: content-type");

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);


var_dump($request);

            $name = $request->name;
            $email = $request->email;
            $subject = "Hi, Mr Alex Kabe Kabe \n Message from contact form on ad website".$request->subject;
            $message =  $request->message;
            $to = "alexkabekabe@gmail.com"
            
            $body = "This is automated email from your website with the following message\n\n"
            "Name of the person: ".$name.
            "\n\n Email".$email.
            "\n\n Message".$message;
            $headers = 'From: ' .$email . "\r\n".'Reply-To: ' . $to. "\r\n".'X-Mailer: PHP/' . phpversion();
            
            
            if (mail($to, $subject, $body, $headers)) 
            {
                echo("<p>Email successfully sent</p>");
            }
            else 
            {
                echo("<p>Email delivery failed</p>");
            }
            
         