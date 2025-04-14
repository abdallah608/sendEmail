<?php
namespace App\Jobs;

use App\Mail\CustomerEmail;
use App\Models\EmailLog;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Bus\Dispatchable;

class SendCustomerEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function handle()
    {
        try {
            Mail::to($this->email)->send(new CustomerEmail());

            EmailLog::create([
                'customer_email' => $this->email,
                'status' => 'sent',
                'sent_at' => now(),
            ]);
        } catch (\Exception $e) {
            EmailLog::create([
                'customer_email' => $this->email,
                'status' => 'failed',
                'sent_at' => now(),
            ]);
        }
    }
}
