<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new Status();
//        $status->id = 0;
        $status->name = 'Dang hoat dong';
        $status->save();


        $status = new Status();
//        $status->id = 1;
        $status->name = 'Ngung hoat dong';
        $status->save();
    }
}
