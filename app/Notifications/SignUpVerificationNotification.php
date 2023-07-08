<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\User;
use Illuminate\Support\Facades\Log;

class SignupVerificationNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public $user;

    /**
     * Create a new notification instance.
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $url = url("/email-verify/{$this->user->verification_token}");

        return (new MailMessage())
                    ->greeting('Dear ' . $this->user['name'].',')
                    ->line('We are glad for your registration in our site.')
                    ->subject('Confirmation Mail from '.env('APP_NAME'))        
                    ->line('This email is sent to verify your account.')
                    ->action('Click here to Activate', $url)
                    ->line('Thank you for being our partner.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'message'=>'Welcome '.$this->user['name'].' to '.env('APP_NAME'),
            'url'=>''
        ];
    }
}
