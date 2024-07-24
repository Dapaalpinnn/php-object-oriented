<?php 

// Covariance => Mengoveride return function yang di parent dengan return value yang lebih spesifik

abstract class SocialMedia 
{
    public string $name;
    public string $message;
    public abstract function notice();
}

class WhatsApp extends SocialMedia 
{
    public function notice()
    {
        echo
        <<<string
        WhatsApp
        Admin: $this->name
        Message: $this->message
        string;
    }
}

class Facebook extends SocialMedia
{
    public function notice()
    {
        echo
        <<<string
        Facebook
        Admin: $this->name
        Message: $this->message
        string;
    }
}

class Messenger extends SocialMedia
{
    public function notice()
    {
        echo
        <<<string
        Messenger
        Admin: $this->name
        Message: $this->message
        string;
    }
}

// Covariance

interface Message{
    public function toNotice(string $name, string $message) :SocialMedia;
}

class WhatsAppMessage implements Message
{
    public function toNotice(string $name, string $message): WhatsApp
    {
        $whatsapp = new WhatsApp();
        $whatsapp->name = $name;
        $whatsapp->message = $message;
        return $whatsapp;
    }
}

class FacebookMessage implements Message
{
    public function toNotice(string $name, string $message): Facebook
    {
        $facebook = new Facebook();
        $facebook->name = $name;
        $facebook->message = $message;
        return $facebook;
    }
}

class MessengerMessage implements Message
{
    public function toNotice(string $name, string $message): Messenger
    {
        $messenger = new Messenger();
        $messenger->name = $name;
        $messenger->message = $message;
        return $messenger;
    }
}



$whatsapp_message = new WhatsAppMessage();
$whatsapp = $whatsapp_message->toNotice(name: "Admin", message: "Welcome to our WhatsApp");
print_r($whatsapp);

$facebook_message = new FacebookMessage();
$facebook = $facebook_message->toNotice(name: "Admin", message: "Welcome to our Facebook");
print_r($facebook);

$messenger_message = new MessengerMessage();
$messenger = $messenger_message->toNotice(name: "Admin", message: "Welcome to our Messenger");
print_r($messenger);

?>