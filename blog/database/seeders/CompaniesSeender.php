<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CompaniesSeender extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <= 1000000  ; $i++) { 
            DB::table('companies')->insert(
                ['company_name' => 'Nguyễn Văn A', 'company_web' => 'aaaaa', 
                'company_address' => '34/5', 'company_code' => 'bbbb', 'company_phone' => '01234']
            );
        }
    }
}