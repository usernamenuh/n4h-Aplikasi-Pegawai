<?php

namespace Database\Seeders;

use App\Models\pegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Faker = Faker::create('id_ID');
        for ($i = 0; $i < 50; $i++) {
        pegawai::create([
            'name' => $Faker->name,
            'email' => $Faker->email,
            'jabatan' => $Faker->jobTitle,
            'alamat' => $Faker->address,
            'jenis_kelamin' => $Faker->randomElement(['Laki-Laki', 'Perempuan']),
        ]);
    }
}
}
