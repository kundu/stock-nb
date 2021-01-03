<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormFieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('form_fields')->insert([
            [
                'name' => 'Product Name',
                'type' => 'text',
                'value'=> null
            ],
            [
                'name' => 'Product ID',
                'type' => 'text',
                'value'=> null
            ],
            [
                'name' => 'Product Type',
                'type' => 'select',
                'value' => json_encode('Perishable, Non-perishable')
            ],
            [
                'name' => 'Product Details',
                'type' => 'textarea',
                'value'=> null
            ],
            [
                'name' => 'Product Expiry Date',
                'type' => 'date',
                'value'=> null
            ],
            [
                'name' => 'Product Status',
                'type' => 'select',
                'value' => json_encode('Available, Not available, Broken, Under repair')
            ],
            [
                'name' => 'Product Quantity',
                'type' => 'number',
                'value'=> null
            ],
            [
                'name' => 'Bill No',
                'type' => 'text',
                'value'=> null
            ],
            [
                'name' => 'Serial Key',
                'type' => 'text',
                'value'=> null
            ],
            [
                'name' => 'Serial',
                'type' => 'text',
                'value'=> null
            ],
            [
                'name' => 'Warranty',
                'type' => 'select',
                'value' => json_encode('6 Month, 1 Year, 2 Year, 3 Year, 4 Year, 5 Year')
            ]
        ]);
    }
}
