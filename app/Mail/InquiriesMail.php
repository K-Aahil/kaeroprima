<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InquiriesMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;
    protected $data_product;

    public function __construct($data, $data_product) {
        $this->data = $data;
        $this->data_product = $data_product;
    }

    public function build() {
        $data = $this->data;
        $data_product = $this->data_product;

        return $this->subject('Product Inquiries')
            ->view('inquiries-mail', ['data' => $data, 'data_product' => $data_product]);
    }
}
