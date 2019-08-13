<?php
namespace App\CustomerNotify;

class User
{
    public $fio;
    public $email;
    public $gender;
    public $age;
    public $phone;

    public function __construct($fio, $email, $gender = null, $age = null, $phone = null)
    {
        $this->fio = $fio;
        $this->email = $email;
        $this->gender = $gender;
        $this->age = $age;
        $this->phone = $phone;
    }

    public function send($chanel, $message)
    {
        echo "Уведомление клиенту: " . $this->fio . " на " . $chanel . " : " . $message . "<br />";
    }

    public function notifyOnEmail($message)
    {
        $email = "email (" . $this->email . ")";
        $this->send($email, $message);
    }

    public function notifyOnPhone($message)
    {
            $phone = "телефон (" . $this->phone . ")";
            $this->send($phone, $message);
    }

    public function notify($message)
    {
        if (($this->age === null) || ($this->age < 18)) {
            $this->censor($message);
        }
        $this->notifyOnPhone("Сообщение на телефон");
        $this->notifyOnEmail("Сообщение на почту");
    }

    public function censor($message)
    {
        echo $message;
    }
    
    
}