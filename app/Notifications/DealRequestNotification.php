<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class DealRequestNotification extends Notification
{
    use Queueable;
    public $name;
    public $email;
    public $phone;
    public $organization;
    public $description;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($name, $email, $phone, $organization, $description)
    {
        //
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->organization = $organization;
        $this->description = $description;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $url = route('dashboard');
        return (new MailMessage)
                    ->greeting('Hello there!')
                    ->line('This is a deal request message for '.env('APP_NAME'))
                    ->line('The message was sent from '.$this->name. ', with email address '.$this->email. ', and phone number '. $this->phone)
                    ->line('Below is the details of the message: ')
                    ->line($this->description)
                    ->action('Go to Dashboard', $url)
                    ->line('Goodluck with the Business!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
