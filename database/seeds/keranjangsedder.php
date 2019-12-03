<?php

use Illuminate\Database\Seeder;

class keranjangsedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keranjangs')->delete();
        //
    }
}
