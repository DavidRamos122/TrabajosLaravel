<?php

namespace App\Http\Controllers;

use App\Models\Aprendices;
use App\Models\Areas;
use App\Models\Courses;
use App\Models\Courses_teachers;
use App\Models\Teachers;
use App\Models\Training_centers;
use Illuminate\Http\Request;

class ConsultasController extends Controller
{
    public function consultas(){

    //Computadores identificados por id asignados  Aprendiices

    // $aprendices = new Aprendices();
    // $aprendices = Aprendices::find(2);
    // return $aprendices->computers;

    //Nombre de los aprendices identificado por id cursos 

    // $courses = new Courses();
    // $courses = Courses::find(3);
    // return $courses->aprendices;

    //cursos y disponibles identificados por id triningCenter 

    // $training_center = new Training_centers();
    // $training_center = Training_centers::find(1);
    // return $training_center ->courses;

    //cursos y disponibles identificados por id Areas

    // $areas = new Areas();
    // $areas= Areas::find(1);
    // return $areas->courses;

    //cursos en los que esta cada teacher identificados por su propio id

    // $teachers = new Teachers();
    // $teachers= Teachers::find(1);
    // return $teachers->courses_teachers;

    //Nombre y correo de cada teacher identificado por el id de courses_trachers 

    // $courses_teachers = new Courses_teachers();
    // $courses_teachers = Courses_teachers::find(2);
    // return $courses_teachers -> teachers;
    
    }
}
