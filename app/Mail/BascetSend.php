<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BascetSend extends Mailable
{
    use Queueable, SerializesModels;

    protected $formData;
    protected $orderId;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($formData, $orderId)
    {
        $this->formData = $formData;
        $this->orderId = $orderId;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("carta-sveta@yandex.ru","Karta-sveta")
            ->subject("Заказ с сайта")
            ->replyTo('info@asmi-studio.ru', 'Магазин')
            ->view('mail.bascetmail')
            ->with([
            "formData" => $this->formData,
            "orderId" => $this->orderId
        ]);
    }
}
