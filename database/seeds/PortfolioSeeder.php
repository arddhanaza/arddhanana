<?php

use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolio')->insert([
            'title' => 'EDE Lab Logo',
            'type' => 'branding/ Logo/ design',
            'description' => 'lorem ipsum dolor sit amet, blasd a,ads,f a,df,a d,fa ,fadfdas fd',
            'image' => 'group3.png',
            'link' => '',
        ]);
    }
}
