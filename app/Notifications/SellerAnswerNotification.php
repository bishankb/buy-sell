<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class SellerAnswerNotification extends Notification
{
    use Queueable;
    public $buyerData = [];

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->buyerData = $data;
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
            ->greeting('Dear ' . $this->buyerData['buyer_name'].',')
            ->subject($this->buyerData['seller_name']. ' Replied Your Query In The Product on '.env('APP_URL'))
            ->line('Greetings from '.env('APP_URL').'!')
            ->line($this->buyerData['seller_name'].' has replied  your query for the product ' .
                $this->buyerData['product_title'])
            ->line('Your Question : ' . $this->buyerData['question'])
            ->action('Click this view the answer', route('your-question.view-reply', $this->buyerData['question_id']))
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
            'message'      =>$this->buyerData['seller_name']. ' replied your query for '. $this->buyerData['product_title'],
            'url'          => route('your-question.view-reply', $this->buyerData['question_id']),
            'question_id'  => $this->buyerData['question_id'],
            'seller_type'  => $this->buyerData['seller_type'],
            'product_slug' => $this->buyerData['product_slug'],
        ];
    }
}
