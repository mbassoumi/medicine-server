<?php

use Illuminate\Database\Seeder;

class MedicinesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('medicines')->delete();
        
        \DB::table('medicines')->insert(array (
            0 => 
            array (
                'id' => 1,
                'barcode' => '6251586065004',
                'name' => 'Trufen',
                'use' => 'ليس للمضغ,يبلع مع كاس ماء ويتناول مع او بعد الطعام',
                'store' => 'في مكان جاف على درجة حرارة 15-30م',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'barcode' => '7290000800028',
                'name' => 'Acamol',
                'use' => 'لا يجوز المضغ او السحق يجب بلع الدواء مع كوب ماء',
                'store' => 'في مكان جاف على درجة حرارة 15-30م',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'barcode' => '6251604002271',
                'name' => 'Paramol',
                'use' => 'يجب بلع القرص مع الماء',
                'store' => 'في مكان جاف على درجة حرارة 15-30م',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'barcode' => '6251581220200',
                'name' => 'DECONGEX',
                'use' => 'يجب تناوله بعد الاكل مع كوب من الماء',
                'store' => ' يحفظ في درجة حرارة الغرفة اقل من 30درجة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'barcode' => '5050474104556',
                'name' => 'blink',
                'use' => 'وضع 2 نقطة في العينين ثم قم بفتح وغلق عينيك عدة مرات لغسيلها',
            'store' => 'في درجة حرارة بين (5-25)درجة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'barcode' => '6251586001231',
                'name' => 'Tixon',
                'use' => 'الحقن العضلي او الحقن الوريدي',
                'store' => 'يحفظ في درجة حرارة الغرفة ول 24ساعة في الثلاجة وبعيدا عن ايدي الاطفال والضوء',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}