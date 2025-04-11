<?php
namespace App\Jobs;

use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CreateProduct implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    public $datos;

    public function __construct(array $datos)
    {
        $this->datos = $datos;
    }

    public function handle()
    {
        Product::create($this->datos);
    }
}