<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class FeaturedProductNotification extends Notification
{
    use Queueable;
    public $featuredProduct = [];

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->featuredProduct = $data;
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
            ->greeting('Dear ' . $this->featuredProduct['seller_name'].',')
            ->subject(' Your product has been marked as featured. '.env('APP_URL'))
            ->line('Greetings from '.env('APP_URL').'!')
            ->line('Your Product '.$this->featuredProduct['product_title'].'  has been marked as featured. ')
            ->action('Click this link to view your product', route('product.show', $this->featuredProduct['product_slug']))
            ->line('Thank you for being our partner.');
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
            'message'      => 'Your Product '.$this->featuredProduct['product_title'].'  has been marked as featured. ',
            'url'          => route('product.show', $this->featuredProduct['product_slug']),
            'product_slug' => $this->featuredProduct['product_slug']
        ];
    }
}
