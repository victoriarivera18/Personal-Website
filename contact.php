<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['textarea'];


    if (($name=="")||($visitor_email=="")||($message=="")){
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";  
    }else{
        $email_subject = "New Inquiry from Personal website";
        $email_body = "User Name: $name.\n".
                        "User Email: $email.\n".
                            "User Message: $message.\n";

        $to = "victoriaeugenia2018@gmail.com";
        mail($to, $email_subject, $email_body);
        header('Location: contact-form-thankyou.html');
        
    }
?>