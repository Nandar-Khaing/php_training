<?php

namespace App\Dao\Student;

use App\Models\Student;
use App\Contracts\Dao\Student\StudentDaoInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Data accessing object for student
 */
class StudentDao implements StudentDaoInterface
{
  /**
   * To save student
   * @param Request $request request with inputs
   * @return Object $student saved student
   */
  public function saveStudent(Request $request)
  {
    $student = new Student();
    $student->name = $request->name;
    $student->email = $request->email;
    $student->address = $request->address;
    $student->ph_no = $request->ph_no;
    $student->age = $request->age;
    $student->major_id = $request->major_id;
    $student->save();
    $students = Student::all();
    return $students;
  }
  public function getStudentList()
  {
    $students = Student::all();
    return $students;
  }
 public function updatedStudentById(Request $request, $id)
 {
  $student = Student::find($id);
  $student->name = $request->name;
  $student->email = $request->email;
  $student->address = $request->address;
  $student->ph_no = $request->ph_no;
  $student->age = $request->age;
       $student->major_id = $request->major_id;
       $student->update();
       $students = Student::all();
       return $students;
 }
 public function deleteStudentById($id)
 {
  $student = Student::find($id);
  $student->delete();
  $students = Student::all();
  return $students;
 }
}