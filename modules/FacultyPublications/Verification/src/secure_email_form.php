<!DOCTYPE html>
<html>
    <head>
        <title>verification form</title>
        <link href="../css/elements.css" rel="stylesheet">
        <link href="../css/internal_css.css" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </head>
    <!-- Body Starts Here -->
    <body >
        <div class="container">
         <!-- Feedback Form Starts Here -->
            <div id="feedback">
             <!-- Heading Of The Form -->
                <div class="head">
                    <h3>Verification form</h3>
                </div>
                <!-- Feedback Form -->
                <form action="#" id="form" method="POST" name="form">
                    <input name="vname" placeholder="Your Name" type="text" value=" " required>
                    <input name="vemail" placeholder="Email" type="text" value=" " >
                    <input name="sub" placeholder="Subject" type="text" value=" " required>

                    <label>Your Suggestion</label>
                    <textarea name="msg" placeholder="Type your text here..."></textarea>
                    <!--input id="send" name="submit" type="submit" value="Send Feedback"-->
                    <button type="submit" id="send" name="submit">Send</button>
                </form>
                <h3>
                    <?php
                        if(isset($_POST["submit"])){
                        $email=$_POST['vemail'];
                        // Sanitize E-mail Address
                        $email =filter_var($email, FILTER_SANITIZE_EMAIL);
                        // Validate E-mail Address
                        $email= filter_var($email, FILTER_VALIDATE_EMAIL);
                        if (!$email){
                        echo " ";
                        }
                        else{
                        
                        $subject = $_POST['sub'];
                        $message = $_POST['msg'];
                        $headers = 'From:' ."00shreyakale@gmail.com"."rn"; // Sender's Email
                        $headers .= 'Cc:'. "00shreyakale@gmail.com" . "rn"; // Carbon copy to Sender
                        // Message lines should not exceed 70 characters (PHP rule), so wrap it
                        $message = wordwrap($message, 70);
                        // Send Mail By PHP Mail Function
                        mail($email, $subject, $message, $headers);
                        echo "Your mail has been sent successfuly ! Thank you for your feedback";
                        }
                        
                        }
                    ?>
                </h3>
            </div>
         <!-- Feedback Form Ends Here -->
        </div>
    </body>
    <!-- Body Ends Here -->
</html>
