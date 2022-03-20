<?php

    namespace notification;

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    class email
    {
        private $mail = \stdClass::class;

        public function __construct()
        {
            $this->mail = new PHPMailer(true);
            $this->mail->SMTPDebug = 2;
            $this->mail->isSMTP();
            $this->mail->Host = '';
            $this->mail->SMTPAuth = true;
            $this->mail->Username = '';
            $this->mail->Password = '';
            $this->mail->SMTPSecure = '';
            $this->mail->Port = 587;
            $this->mail->CharSet = 'utf-8';
            $this->mail->setLanguage('br');
            $this->mail->isHTML(true);
            $this->mail->setFrom('','');
        }

        public function sendEmail($subject, $body, $replyEmail, $replyName, $addressEmail, $addressName)
        {
            $this->mail->Subject = (string)$subject;
            $this->mail->Body = $body;

            $this->mail->addReplyTo($replyEmail, $replyName);
            $this->mail->addAddress($addressEmail, $addressName);

            try {
                $this->mail->send();

            } catch (Exception $e) {
                echo "Erro ao enviar o e-mail: {$this->mail->ErrorInfo} {$e->getMessage()}";
            }
        }
    }