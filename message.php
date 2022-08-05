<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailheader = "From:".$name."<".$email.">/r/n";
    $recipient = "stephen.rr94@gmail.com";
    mail($recipient, $mailheader, $message)
    or die("Error");

    echo '
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>Welcome</title>
            <link rel="stylesheet" href="styling.css" />
            <script src="functionality.js"></script>
            <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
            />
            </head>
            <body>
            <div class="messageConfirmation">
                <h1>Thank you for contacting me. I will get<br> back to you as soon as possible!</h1>
                <p class="return">Return to <a style="color: aqua" href="Index.html">Homepage</a></p>
        </body>
        </html> '
?>