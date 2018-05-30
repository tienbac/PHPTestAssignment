<?php

use Illuminate\Database\Seeder;

class StudentClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_classes')->insert([
            'studentRoll' => 'D00479',
            'classId' => 'T1707M',
            'createdAt' =>'30/05/2018',
            'status' => 1,
        ]);
        DB::table('student_classes')->insert([
            'studentRoll' => 'D00453',
            'classId' => 'T1707M',
            'createdAt' =>'30/05/2018',
            'status' => 1,
        ]);
        DB::table('student_classes')->insert([
            'studentRoll' => 'D00454',
            'classId' => 'T1707M',
            'createdAt' =>'30/05/2018',
            'status' => 1,
        ]);
        DB::table('student_classes')->insert([
            'studentRoll' => 'D00480',
            'classId' => 'T1707M',
            'createdAt' =>'30/05/2018',
            'status' => 1,
        ]);
        DB::table('student_classes')->insert([
            'studentRoll' => 'D00481',
            'classId' => 'T1707M',
            'createdAt' =>'30/05/2018',
            'status' => 1,
        ]);
        DB::table('student_classes')->insert([
            'studentRoll' => 'D00482',
            'classId' => 'T1707M',
            'createdAt' =>'30/05/2018',
            'status' => 1,
        ]);
        DB::table('student_classes')->insert([
            'studentRoll' => 'D00483',
            'classId' => 'T1707M',
            'createdAt' =>'30/05/2018',
            'status' => 1,
        ]);
        DB::table('student_classes')->insert([
            'studentRoll' => 'D00484',
            'classId' => 'T1707M',
            'createdAt' =>'30/05/2018',
            'status' => 1,
        ]);
        DB::table('student_classes')->insert([
            'studentRoll' => 'D00485',
            'classId' => 'T1707M',
            'createdAt' =>'30/05/2018',
            'status' => 1,
        ]);
        DB::table('student_classes')->insert([
            'studentRoll' => 'D00486',
            'classId' => 'T1707M',
            'createdAt' =>'30/05/2018',
            'status' => 1,
        ]);
        DB::table('student_classes')->insert([
            'studentRoll' => 'D00496',
            'classId' => 'T1707M',
            'createdAt' =>'30/05/2018',
            'status' => 1,
        ]);
    }
}
