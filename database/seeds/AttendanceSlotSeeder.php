<?php

use Illuminate\Database\Seeder;

class AttendanceSlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attendance_slots')->insert([
            'classId' => 'T1707M',
            'slotId' => 1,
            'subjectId' => 'PHP',
            'attendanceTime' => '30/05/2018'
        ]);
        DB::table('attendance_slots')->insert([
            'classId' => 'T1708M',
            'slotId' => 1,
            'subjectId' => 'JAVA',
            'attendanceTime' => '30/05/2018'
        ]);
        DB::table('attendance_slots')->insert([
            'classId' => 'T1709M',
            'slotId' => 1,
            'subjectId' => 'C Sharp',
            'attendanceTime' => '30/05/2018'
        ]);
    }
}
