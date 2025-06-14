<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\bagian;

class BagianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bagian = ['produksi', 'penjualan', 'pengembangan', 'keuangan', 'pemasaran', 'keamanan', 'pengembangan', 'keuangan', 'pemasaran', 'keamanan'];

        foreach ($bagian as $b) {
            bagian::create([
                'name' => $b
            ]);
        }
    }
}
