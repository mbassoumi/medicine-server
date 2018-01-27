<?php

use Illuminate\Database\Seeder;

class UsesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('uses')->delete();
        
        \DB::table('uses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'medicine_id' => 1,
                'use_for' => 'مضاد لالتهابات الاتيروئيدي في أمراض الروماتيزيم: 3-4 مرات في اليوم',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'medicine_id' => 1,
                'use_for' => 'مسكن للآلام وخافض للحرارة: 3-4 مرات في اليوم',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'medicine_id' => 1,
                'use_for' => 'معالجة آلام عسر الطمث الأولي: 3-4 مرات في اليوم',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'medicine_id' => 2,
            'use_for' => 'مسكن للالام :(1-2) قرص كل 4-5 ساعات',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'medicine_id' => 2,
            'use_for' => 'خافض للسخونه :(1-2) قرص كل 4-5 ساعات',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'medicine_id' => 3,
                'use_for' => 'الصداع ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'medicine_id' => 3,
                'use_for' => 'الشقيقة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'medicine_id' => 3,
                'use_for' => 'الم الاسنان',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'medicine_id' => 3,
                'use_for' => 'التهاب الحلق',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'medicine_id' => 3,
                'use_for' => 'الم العضلات والروماتيزم',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'medicine_id' => 3,
                'use_for' => 'الم الاعصاب',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'medicine_id' => 3,
                'use_for' => 'الم الدورة الشهرية ويخفض الحرارة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'medicine_id' => 4,
                'use_for' => 'مضاد للحساسية : 1كبسولة كل 12ساعة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'medicine_id' => 4,
                'use_for' => 'مضاد للاحتقان : 1كبسولة كل 12ساعة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'medicine_id' => 6,
                'use_for' => 'لمعالجة التلوثات التي تسببها ميكروبات حساسة: 1 جرعة كل يوم',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'medicine_id' => 5,
                'use_for' => 'قطرة ملطفة للعين: وضع 2 نقطة في العينين ثم قم بفتح وغلق عينيك عدة مرات لغسيلها',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}