<?php

use Illuminate\Database\Seeder;

class SideEffectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('side_effects')->delete();
        
        \DB::table('side_effects')->insert(array (
            0 => 
            array (
                'id' => 1,
                'medicine_id' => 1,
                'side_effects' => 'اسهال',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'medicine_id' => 1,
                'side_effects' => ' غثيان',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'medicine_id' => 1,
                'side_effects' => 'نعاس',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'medicine_id' => 1,
                'side_effects' => 'صداع متوسط',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'medicine_id' => 1,
                'side_effects' => 'مغص',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'medicine_id' => 2,
                'side_effects' => 'دوار',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'medicine_id' => 2,
                'side_effects' => 'طفح جلدي',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'medicine_id' => 2,
                'side_effects' => 'حكة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'medicine_id' => 2,
                'side_effects' => 'صعوبة التنفس',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'medicine_id' => 3,
                'side_effects' => 'طفح جلدي',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'medicine_id' => 3,
                'side_effects' => 'ارق',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'medicine_id' => 3,
                'side_effects' => 'عدم الراحة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'medicine_id' => 3,
                'side_effects' => 'غثيان وقيء',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'medicine_id' => 4,
                'side_effects' => 'جفاف الفم',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'medicine_id' => 4,
                'side_effects' => 'الغثيان',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'medicine_id' => 4,
                'side_effects' => 'الصداع',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'medicine_id' => 4,
                'side_effects' => 'الدوخان',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'medicine_id' => 5,
                'side_effects' => 'الالم',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'medicine_id' => 5,
                'side_effects' => 'تصلب',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'medicine_id' => 5,
                'side_effects' => 'التهاب وريدي',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'medicine_id' => 5,
                'side_effects' => 'غثيان',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'medicine_id' => 5,
                'side_effects' => 'قيء',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'medicine_id' => 5,
                'side_effects' => 'الم في الراس او الدوخة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'medicine_id' => 6,
                'side_effects' => 'حكة في العين',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'medicine_id' => 6,
                'side_effects' => 'احمرار العين',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}