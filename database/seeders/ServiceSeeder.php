<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Service::create([
            'name'=>"degradé",
            'prix'=>"50",
        ]);
        \App\Models\Service::create([
            'name'=>"teint",
            'prix'=>"100",
        ]);
        \App\Models\Service::create([
            'name'=>"simple",
            'prix'=>"40",
        ]);
    }

}
