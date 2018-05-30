<?php

use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            'classId' => 'T1707M',
            'createdAt' => '30/05/2018',
            'classStatus' => 1,
        ]);
        DB::table('classes')->insert([
            'classId' => 'T1708M',
            'createdAt' => '30/05/2018',
            'classStatus' => 1,
        ]);
        DB::table('classes')->insert([
            'classId' => 'T1709M',
            'createdAt' => '30/05/2018',
            'classStatus' => 1,
        ]);
        DB::table('classes')->insert([
            'classId' => 'T1710M',
            'createdAt' => '30/05/2018',
            'classStatus' => 0,
        ]);
        DB::table('classes')->insert([
            'classId' => 'T1711M',
            'createdAt' => '30/05/2018',
            'classStatus' => 0,
        ]);
    }
}
