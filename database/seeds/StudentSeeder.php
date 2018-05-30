<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'rollnumber'=> 'D00479',
            'studentName' => 'Phạm Tiến Bắc'
        ]);
        DB::table('students')->insert([
            'rollnumber'=> 'D00453',
            'studentName' => 'Đinh Văn Nam'
        ]);
        DB::table('students')->insert([
            'rollnumber'=> 'D00454',
            'studentName' => 'Đào Minh Tùng'
        ]);
        DB::table('students')->insert([
            'rollnumber'=> 'D00496',
            'studentName' => 'Hoàng Thanh Sơn'
        ]);
        DB::table('students')->insert([
            'rollnumber'=> 'D00480',
            'studentName' => 'Đỗ Văn Hoàng'
        ]);
        DB::table('students')->insert([
            'rollnumber'=> 'D00481',
            'studentName' => 'Nghiêm Phú Huy'
        ]);
        DB::table('students')->insert([
            'rollnumber'=> 'D00482',
            'studentName' => 'Đặng Đình Sĩ'
        ]);
        DB::table('students')->insert([
            'rollnumber'=> 'D00483',
            'studentName' => 'Phạm Văn Huy'
        ]);
        DB::table('students')->insert([
            'rollnumber'=> 'D00484',
            'studentName' => 'Đào Bá Lộc'
        ]);
        DB::table('students')->insert([
            'rollnumber'=> 'D00485',
            'studentName' => 'Nguyễn Quốc Anh'
        ]);
        DB::table('students')->insert([
            'rollnumber'=> 'D00486',
            'studentName' => 'Vũ Trần Hoàng'
        ]);
    }
}
