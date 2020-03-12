<?php

namespace App\Console\Commands;

use App\Coin;
use Illuminate\Console\Command;

class GetCryptoPrice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'GetCryptoPrice';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {


        $ch = curl_init('https://min-api.cryptocompare.com/data/pricemulti?fsyms=BTC,ETH&tsyms=USD');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, 'YourScript/0.1 (contact@email)');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: ApiKey ' . env('CRYPTO_API_KEY')
        ));
        $data = curl_exec($ch);
        $json=json_decode($data,true);
        var_dump($json['BTC']);
        foreach ($json as $item => $array){
           $coin =  Coin::where('name',$item)->first();
           $coin->price = $array['USD'];
           $coin->save();
        }


//        \Log::info("done!");
    }
}
