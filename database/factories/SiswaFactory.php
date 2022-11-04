<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $kelas = [10,11,12];
        $bca = ['A','B','C','D'];
        $kelaz = fake()->numerify('KLS-'.fake()->randomElement($kelas)).fake()->randomElement($bca);
        $jurusan = [
            'RPL' => 'RPL',
            'MM' => 'MULTIMEDIA',
            'OTM' => 'OTOMOTIF',
            'TKJ' => 'TKJ',
            'BRC' => 'BROADCAST'
        ];


        return [
            'nis' => fake()->randomKey($jurusan).$kelaz,
            'nisn' => fake()->randomNumber(4, true).$kelaz,
            'nama' => fake()->name(),
            'kelas' => fake()->randomElement($kelas).fake()->randomElement($bca),
            'jurusan' => fake()->randomKey($jurusan)
        ];
    }
}
