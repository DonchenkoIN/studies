<?php

namespace App\Console\Commands;

use App\Models\Balance;
use App\Models\Product;
use App\Models\Role;
use App\Models\Sklad;
use App\Models\User;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $balance = new Balance();
        $balance->value = 11;
        $balance->rezerv = 0;
        $balance->prim = '';
        $balance->sklad_id =3;
        $balance->product_id =1;

        $balance->save();
    }
}
