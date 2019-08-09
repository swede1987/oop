<?php
namespace App\Webstore;

class User
{
    public function __construct($fio, $email, $gender=NULL, $age=NULL, $phone=NULL)
    {
        $this->fio = $fio;
        $this->email = $email;
        $this->gender=$gender;
        $this->age=$age;
        $this->phone=$phone;
    }

    public static function send($fio, $chanel, $message)
    {
        echo "Уведомление клиенту: " . $fio . " на " . $chanel . " : " . $message . "<br />";
    }

    public function notifyOnEmail($message)
    {
        $email = "email (" . $this->email . ")";
        $fio = $this->fio;
        User::send($fio, $email, $message);
    }

    public function notifyOnPhone($message)
    {
        $phoneUser = $this->phone;

        if ($phoneUser != NULL) {
            $phone = "телефон (" . $this->phone . ")";
            $fio = $this->fio;
            User::send($fio, $phone, $message);
        }
    }

    public function notify($message)
    {
        if (($this->age === NULL) || ($this->age < 18)) {
            User::censor($message);
        }
    }

    public static function censor($message)
    {
        echo $message;
    }
    
    
}