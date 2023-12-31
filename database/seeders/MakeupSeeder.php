<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MakeupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("makeups")->insert([
            [
                'name' => 'Hanasui Serum Cushion',
                'desc' => 'Hanasui Serum Cushion adalah cushion yang mengandung kombinasi Niacinamide, Sodium Hyaluronate, Vitamin E, dan Ekstrak Aloe Vera yang memberikan manfaat perawatan kulit dan coverage wajah.',
                'price' => 'Rp 76.500',
                'image' => 'assets/img/01.png'
            ],
            [
                'name' => 'Hanasui Perfect Stay Foundation',
                'desc' => 'Hanasui Perfect Stay Foundation tersedia dalam 18 pilihan warna dengan tekstur liquid foundation.',
                'price' => 'Rp 50.000',
                'image' => 'assets/img/02.png'
            ],
            [
                'name' => 'Hanasui Tintdorable Lip Stain',
                'desc' => 'Hanasui Tintdorable Lip Stain adalah lip tint dengan tekstur aqua jelly yang ringan, membuat bibir tampak cerah alami, tetap lembap dan warna yang tahan lama.',
                'price' => 'Rp 21.000',
                'image' => 'assets/img/03.png'
            ],
            [
                'name' => 'Hanasui Perfect Fit Setting Powder',
                'desc' => 'Hanasui Perfect Fit Setting Powder adalah finishing powder berbentuk bedak tabur yang halus, ringan, dan mudah menyatu di wajah serta dapat diaplikasikan untuk mengatur riasan yang membuat makeup menempel dengan baik.',
                'price' => 'Rp 40.500',
                'image' => 'assets/img/04.png'
            ],
            [
                'name' => 'Hanasui Perfect Cheek Blush & Go',
                'desc' => 'Hanasui Perfect Cheek Blush & Go Powder adalah perona pipi yang praktis dan siap pakai dengan cepat menyatu pada kulit untuk membuat pipi merona alami, menghasilkan tampilan glowing yang natural dan wajah tampak cerah sepanjang hari.',
                'price' => 'Rp 35.500',
                'image' => 'assets/img/05.png'
            ],
            [
                'name' => 'Hanasui Glazedorable Vinyl Stain',
                'desc' => 'Hanasui Glazedorable Vinyl Stain dengan Vibrant Colour Technology yang memberikan kilau di bibir hanya dengan sekali swipe. Mengandung Hyaluronic Acid, Shea Butter, dan Squalane untuk hidrasi dan kelembaban pada bibir.',
                'price' => 'Rp 40.000',
                'image' => 'assets/img/06.png'
            ],
        ]);
    }
}
