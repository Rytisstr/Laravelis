<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Clothes;

class ClothesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clothes::create([
            'drabuzis' => 'kelnes',
            'spalva' => 'juoda',
            'dydis' => 'm',
            'prekes_zenklas' => 'abibas'
        ]);
        Clothes::create([
            'drabuzis' => 'maike',
            'spalva' => 'balta',
            'dydis' => 's',
            'prekes_zenklas' => 'hugo'
        ]);
        Clothes::create([
            'drabuzis' => 'svarkas',
            'spalva' => 'geltona',
            'dydis' => 'xxl',
            'prekes_zenklas' => 'boss'
        ]);
        Clothes::create([
            'drabuzis' => 'striuke',
            'spalva' => 'zalia',
            'dydis' => 'xl',
            'prekes_zenklas' => 'steelseries'
        ]);
        Clothes::create([
            'drabuzis' => 'marskiniai',
            'spalva' => 'melyna',
            'dydis' => 'l',
            'prekes_zenklas' => 'niker'
        ]);
    }
}
