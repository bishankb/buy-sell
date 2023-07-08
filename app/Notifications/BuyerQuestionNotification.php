<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class BuyerQuestionNotification extends Notification
{
    use Queueable;
    public $sellerData = [];

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->sellerData = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->greeting('Dear ' . $this->sellerData['seller_name'].',')
            ->subject($this->sellerData['buyer_name']. ' Asked Question In Your Product on '.env('APP_URL'))
            ->line('Greetings from '.env('APP_URL').'!')
            ->line($this->sellerData['buyer_name'].' has asked question for your product ' .
                $this->sellerData['product_title'])
            ->line('Question : '.$this->sellerData['question'])
            ->action('Click this link to reply', $this->sellerData['url'])
            ->line('Thank you for your Interest.');
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
            'message'      => $this->sellerData['buyer_name']. ' asked question for '. $this->sellerData['product_title'],
            'url'          => $this->sellerData['url'],
            'question_id'  => $this->sellerData['question_id'],
            'seller_type'  => $this->sellerData['seller_type'],
            'product_slug' => $this->sellerData['product_slug']
        ];
    }
}
