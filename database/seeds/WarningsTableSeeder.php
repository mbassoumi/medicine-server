<?php

use Illuminate\Database\Seeder;

class WarningsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('warnings')->delete();
        
        \DB::table('warnings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'medicine_id' => 1,
                'warning' => 'حساسية',
                'context_text' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'medicine_id' => 1,
                'warning' => 'حامل,مرضعه"',
                'context_text' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'medicine_id' => 1,
                'warning' => 'خلل في وظيفة الجهاز التنفسي والاوعية الدموية',
                'context_text' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'medicine_id' => 1,
                'warning' => 'خلل في الكبد والكلى ',
                'context_text' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'medicine_id' => 1,
                'warning' => 'القرحة',
                'context_text' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'medicine_id' => 2,
                'warning' => 'مرض في الكبد والكلية ',
                'context_text' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'medicine_id' => 2,
                'warning' => 'الادمان على الكحول',
                'context_text' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'medicine_id' => 2,
                'warning' => 'اليرقان',
                'context_text' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'medicine_id' => 2,
                'warning' => 'حامل,مرضعه"',
                'context_text' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'medicine_id' => 2,
                'warning' => 'هذا الدواء مخصص لدى الكبار والاطفال فوق عمر 6 سنوات',
                'context_text' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'medicine_id' => 3,
                'warning' => 'خلل في الكبد والكلى ',
                'context_text' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'medicine_id' => 3,
                'warning' => 'اذا كنت تشرب الكحول',
                'context_text' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'medicine_id' => 3,
                'warning' => 'حامل,مرضعه"',
                'context_text' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'medicine_id' => 4,
                'warning' => 'الازمات',
                'context_text' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'medicine_id' => 4,
                'warning' => 'ضغط الدم',
                'context_text' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'medicine_id' => 4,
                'warning' => 'زرقة العين',
                'context_text' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'medicine_id' => 4,
                'warning' => 'تضخم غدة البرواسات.',
                'context_text' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'medicine_id' => 6,
                'warning' => 'امراض الجهاز الهضمي',
                'context_text' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'medicine_id' => 6,
                'warning' => 'التهاب القولون',
                'context_text' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'medicine_id' => 6,
                'warning' => 'حامل,مرضعه"',
                'context_text' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'medicine_id' => 6,
                'warning' => 'الاستعمال المتكرر للمضاد الحيوي قد يؤدي لظهور تلوثات لبكتيريا غير حساسة',
                'context_text' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'medicine_id' => 5,
                'warning' => 'لا تبتلع المحلول',
                'context_text' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'medicine_id' => 5,
                'warning' => 'لا تستخدم العبة اذا كان الغطاء مكسور',
                'context_text' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'medicine_id' => 5,
                'warning' => 'لا تستخدمها بعد انتهاء الصلاحية',
                'context_text' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'medicine_id' => 5,
                'warning' => 'اغلاق العبوة جيدا بعد الاستعمال',
                'context_text' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}