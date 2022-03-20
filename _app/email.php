<?php

    namespace notification;

    use PHPMailer\PHPMailer\PHPMailer;

    class email
    {

        public function __construct()
        {
            $email = new PHPMailer;
        }

        public function sendEmail()
        {
            echo "E-mail enviado!";
        }
    }