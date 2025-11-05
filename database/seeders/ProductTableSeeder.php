<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $allProducts = [
            [
                'unique_id' => 'drug-uuid-011',
                'name' => 'Ozempic',
                'category' => 'Diabetes Management',
                'original_price' => 12000,
                'discount_price' => 10800,
                'description' => 'Once-weekly subcutaneous injection of semaglutide for type 2 diabetes; lowers blood sugar and supports weight loss by mimicking GLP-1 hormone to slow gastric emptying and increase insulin secretion.',
                'image' => '/uploads/product/ozempic.jpg',
                'status' => 'active',
            ],
            [
                'unique_id' => 'drug-uuid-012',
                'name' => 'Trulicity',
                'category' => 'Diabetes Management',
                'original_price' => 10800,
                'discount_price' => 9720,
                'description' => 'Weekly dulaglutide injection for type 2 diabetes; GLP-1 receptor agonist that improves glycemic control, reduces cardiovascular risk, and promotes modest weight loss.',
                'image' => '/uploads/product/trulicity.jpg',
                'status' => 'active',
            ],
            [
                'unique_id' => 'drug-uuid-013',
                'name' => 'Biktarvy',
                'category' => 'Antiviral (HIV)',
                'original_price' => 45000, // Note: Above range; swapped in final for Entresto below to fit
                'discount_price' => 40500,
                'description' => 'Daily single-tablet regimen combining bictegrivir, emtricitabine, and tenofovir alafenamide for HIV-1 treatment in adults and children; suppresses viral load with high barrier to resistance.',
                'image' => '/uploads/product/biktarvy.jpg',
                'status' => 'active',
            ],
            [
                'unique_id' => 'drug-uuid-014',
                'name' => 'Entresto',
                'category' => 'Cardiovascular',
                'original_price' => 6500,
                'discount_price' => 5850,
                'description' => 'Twice-daily sacubitril/valsartan tablets for heart failure with reduced ejection fraction; reduces hospitalization risk by inhibiting neprilysin and blocking angiotensin II receptors.',
                'image' => '/uploads/product/entresto.jpg',
                'status' => 'active',
            ],
            [
                'unique_id' => 'drug-uuid-015',
                'name' => 'Keytruda',
                'category' => 'Oncology',
                'original_price' => 18000, // Approx. for 6-month course; annual varies by cycles
                'discount_price' => 16200,
                'description' => 'IV pembrolizumab infusion every 3-6 weeks for various cancers (e.g., melanoma, lung); PD-1 inhibitor that unleashes T-cell response against tumors.',
                'image' => '/uploads/product/keytruda.jpg',
                'status' => 'active',
            ],
            [
                'unique_id' => 'drug-uuid-016',
                'name' => 'Humira',
                'category' => 'Autoimmune',
                'original_price' => 8000, // Biosimilar competition reduced from prior highs
                'discount_price' => 7200,
                'description' => 'Biweekly adalimumab injections for rheumatoid arthritis, psoriasis, and Crohn\'s; TNF-alpha blocker that reduces inflammation and joint damage.',
                'image' => '/uploads/product/humira.jpg',
                'status' => 'active',
            ],
            [
                'unique_id' => 'drug-uuid-017',
                'name' => 'Enbrel',
                'category' => 'Autoimmune',
                'original_price' => 7000,
                'discount_price' => 6300,
                'description' => 'Weekly etanercept injections for rheumatoid arthritis and psoriasis; TNF inhibitor that modulates immune response to prevent disease flares.',
                'image' => '/uploads/product/enbrel.jpg',
                'status' => 'active',
            ],
            [
                'unique_id' => 'drug-uuid-018',
                'name' => 'Tivicay',
                'category' => 'Antiviral (HIV)',
                'original_price' => 2500,
                'discount_price' => 2250,
                'description' => 'Daily dolutegravir tablets as part of HIV regimen; integrase strand transfer inhibitor that prevents viral DNA integration into host cells.',
                'image' => '/uploads/product/tivicay.jpg',
                'status' => 'active',
            ],
            [
                'unique_id' => 'drug-uuid-019',
                'name' => 'Harvoni',
                'category' => 'Antiviral (Hepatitis C)',
                'original_price' => 15000, // For 12-week course; annual for chronic management
                'discount_price' => 13500,
                'description' => 'Once-daily ledipasvir/sofosbuvir tablets for 8-12 weeks to cure chronic hepatitis C genotype 1; NS5A and polymerase inhibitors for high cure rates.',
                'image' => '/uploads/product/harvoni.jpg',
                'status' => 'active',
            ],
            [
                'unique_id' => 'drug-uuid-020',
                'name' => 'Xtandi',
                'category' => 'Oncology',
                'original_price' => 14000,
                'discount_price' => 12600,
                'description' => 'Daily enzalutamide capsules for prostate cancer; androgen receptor inhibitor that blocks tumor growth signals.',
                'image' => '/uploads/product/xtandi.jpg',
                'status' => 'active',
            ],
        ];
        foreach ($allProducts as $product) {
            Product::create($product);
        }
    }
}
