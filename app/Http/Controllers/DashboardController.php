<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Student;
use App\Nonteaching;
use App\Classes;
use App\Subject;
use App\Bog;
use App\fee;

class DashboardController extends Controller
{
    public function index(){
        $teachers_count=Teacher::count();
        $students_count=Student::count();
        $nonteaching_count=Nonteaching::count();
        $classes_count=Classes::count();
        $subjects_count=Subject::count();
        $bogs_count=Bog::count();
        $fees_count=fee::count();

        return view('dashboard/index',compact('teachers_count','students_count',
        'nonteaching_count','classes_count','subjects_count','bogs_count','fees_count'));
    }
}
