<?php

use Mail;

class EmailService
{
    public $dataToSendEmail;

    /**
     * Email validation
     *
     * @param [String] $email
     * @return Bolean
     */
    static public function emailValidation($email)
    {
        if (!strpos($email, '@')) {
            return false;
        }

        return true;;
    }

    /**
     * Prepare data to send email
     *
     * @param [String] $name
     * @param [String] $email
     * @return void
     */
    static public function sendEmailNewRegister($name, $email)
    {
        $dataToSendEmail = [
            'name'    => $name,
            'email'   => $email,
            'subject' => 'Bem Vindo.',
            'message' => 'Parabéns! Você está cadastrado.'
        ];

        self::sendEmail($dataToSendEmail);
    }

    /**
     * Send any email
     *
     * @param [Array] $dataToSendEmail
     * @return void
     */
    public function sendEmail($dataToSendEmail)
    {
        Mail::send('templates.email.send',
        [
            'name'     => $dataToSendEmail['name'],
            'messages' => $dataToSendEmail['message'],
        ],
        function ($mail) use ($dataToSendEmail) {
            $mail->from('exemple.noreply@richard.com', 'Richard Pinheiro');
            $mail->to($dataToSendEmail['email'], $dataToSendEmail['name']);
            $mail->subject($dataToSendEmail['subject']);
        });
    }
}