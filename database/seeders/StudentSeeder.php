<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $json=File::get(path:'database/Json/students.json');
        $students=collect(json_decode($json));
        $students->each(function($student1){
            student::create([
                'created_at' => $student1->created_at,
                'updated_at' => $student1->updated_at,
                'student_name' => $student1->student_name,/*column name */
                'email' => $student1 -> email,
                'address' => $student1->address,
        'parents_name' => $student1 -> parents_name
        ]);
    });
}
}

        
        // $students=collect([
        
        //     ['student_name' => 'Ayushi',
        //     'email' => 'jain.ayushi93@yahoo.in',
        //      'address'=>'surat',
        //     'parents_name'=>'pushpa'
        //     ],
        //     [
        //     'student_name' => 'Ayush',
        //     'email' => 'jain.ayush093@yahoo.in',
        //     'address'=>'mumbai',
        //     'parents_name'=>'amrit'

        //     ],

        // ]);
        // $students->each(function($student1){
        //     student::insert($student1);

        //});
        // student::create([
        //     'student_name' => 'Yahoo',
        //     'email' => 'yahoo@gmail.com',
        //     'address'=>'mumbai',
        //     'parents_name'=>'pushpa'
        // ]);
    

