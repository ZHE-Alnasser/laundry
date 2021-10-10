<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            // company information
            ['name' => 'company_name', 'value' => ''],
            ['name' => 'company_address_1', 'value' => ''],
            ['name' => 'company_address_2', 'value' => ''],
            ['name' => 'company_phone', 'value' => ''],
            ['name' => 'company_mobile', 'value' => ''],
            ['name' => 'company_website', 'value' => ''],
            ['name' => 'company_email', 'value' => ''],
            ['name' => 'vat_number', 'value' => ''],
            ['name' => 'vat_rate', 'value' => ''],
            ['name' => 'logo', 'value' => ''],
//           Time Frame
            ['name' => 'time_frame_name', 'value' => ''],
            ['name' => 'time_frame_description', 'value' => ''],

            // General Information
            ['name' => 'vat_is_included', 'value' => true],
            ['name' => 'vat_percentage', 'value' => '15'],
            ['name' => 'enable_hint', 'value' => true], // used with question mark beside every input to give hint
            ['name' => 'backup_location', 'value' => ''],
//            ['name' => 'auto_tag_the_most_paid_users', 'value' => true],
//            ['name' => 'auto_tag_the_most_bought_items', 'value' => true],
            ['name' => 'language', 'value' => 'ar'], //['ar', 'en']
            ['name' => 'date_format', 'value' => 'dd-mm-y'], //12/30/2000, 30-12-2000
            ['name'=>'theme' ,'value'=> ''], // sky, violet flower, grass
            ['name' => 'currency', 'value' => 'ريال'],
            ['name' => 'allow_selling_out_of_stock', 'value' => true],
            ['name' => 'timezone', 'value' => 'Asia/Riyadh'],
            // invoice
            ['name' => 'footer_text', 'value' => ''],
            ['name' => 'header_text', 'value' => ''],
            ['name' => 'show_invoice_barcode', 'value' => true],

            // integrations
            ['name' => 'mail_host', 'value' => ''],
            ['name' => 'mail_username', 'value' => ''],
            ['name' => 'mail_password', 'value' => ''],
            ['name' => 'mail_from_address', 'value' => ''],
            ['name' => 'mail_from_name', 'value' => ''],
            ['name' => 'mail_encryption', 'value' => ''],
            ['name' => 'sms_gateway', 'value' => ''],
            ['name' => 'sms_user_name', 'value' => ''],
            ['name' => 'sms_password', 'value' => ''],
        ];

//            'barcode_type' => ['ean8' => 'EAN 8', 'ean13' => 'EAN 13', 'code128' => 'Code 128', 'CODABAR' => 'CODABAR', 'typemsi' => 'TYPE MSI'],

//        ];
        \DB::table('settings')->insert($items);
    }
}
