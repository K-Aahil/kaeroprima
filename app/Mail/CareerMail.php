<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CareerMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;
    protected $data_job;

    public function __construct($data, $data_job) {
        $this->data = $data;
        $this->data_job = $data_job;
    }

    public function build() {
        $data = $this->data;
        $data_job = $this->data_job;

        return $this->subject('Applicant')
            ->view('career-mail', ['data' => $data, 'data_job' => $data_job]);
    }
}
