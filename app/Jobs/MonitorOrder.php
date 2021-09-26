<?php

namespace App\Jobs;

use App\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class MonitorOrder implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 4;

    public $order;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if($this->order->is_paid) {
            return;
        }

        if ($this->order->created_at->diffInMinutes() > 3) {
            $this->order->markDeclined();
            return;
        }

        // send email notificatioin
        logger()->info('Order gonna delete');

        $this->release(now()->addMinutes(1));

    }
}
