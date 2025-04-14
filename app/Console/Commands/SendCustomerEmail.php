<?php

namespace App\Console\Commands;

use App\Jobs\SendCustomerEmailJob;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Models\Customer;
use App\Models\EmailLog;
use App\Mail\CustomerEmail;
use Carbon\Carbon;

class SendCustomerEmail extends Command
{
    protected $signature = 'email:send-customer';
    protected $description = 'Send queued emails to customers';

    public function handle()
    {
        $customers = Customer::all();

        foreach ($customers as $customer) {
            SendCustomerEmailJob::dispatch($customer->email);


            EmailLog::create([
                'customer_email' => $customer->email,
                'status' => 'queued',
                'sent_at' => Carbon::now(),
            ]);

            $this->info("Email queued for: {$customer->email}");
        }

        return 0;
    }
}

