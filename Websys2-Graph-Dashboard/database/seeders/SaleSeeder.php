<?php

namespace Database\Seeders;

use App\Models\Sale;
use Illuminate\Database\Seeder;

class SaleSeeder extends Seeder
{
    public function run(): void
    {
        $sales = [
            ['amount' => 1200.50, 'sale_date' => '2026-01-15'],
            ['amount' => 850.00, 'sale_date' => '2026-01-22'],
            ['amount' => 2100.75, 'sale_date' => '2026-02-05'],
            ['amount' => 950.00, 'sale_date' => '2026-02-18'],
            ['amount' => 1750.25, 'sale_date' => '2026-03-10'],
            ['amount' => 3200.00, 'sale_date' => '2026-03-25'],
            ['amount' => 1500.00, 'sale_date' => '2026-04-03'],
            ['amount' => 2800.50, 'sale_date' => '2026-04-19'],
            ['amount' => 1950.00, 'sale_date' => '2026-05-02'],
            ['amount' => 1100.75, 'sale_date' => '2026-05-11'],
        ];
        foreach ($sales as $sale) {
            Sale::create($sale);
        }
    }
}
