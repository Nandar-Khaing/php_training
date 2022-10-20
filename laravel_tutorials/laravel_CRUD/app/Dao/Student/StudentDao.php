<?php

namespace App\Dao\Student;

use App\Contracts\Dao\Student\StudentDaoInterface;
use App\Models\Student;
use Facade\Ignition\Tabs\Tab;
use Illuminate\Http\Request;
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
    public function searchFromDB(Request $request)
    {
        $search_text = request('query');
        $start_date = request('start_date');
        $end_date = request('end_date');

        $query= DB::table('students')
            ->orWhereRaw("students.name LIKE '%$search_text%'")
            ->orWhereRaw("email LIKE '%$search_text%'")
            ->orWhereRaw("address LIKE '%$search_text%'")
            ->orWhereRaw("age LIKE '%$search_text%'");
        if ($start_date && $end_date) {
            $query = DB::table('students')->orWhereRaw("created_at >= '$start_date' AND created_at <= '$end_date'");
        }
        $students = $query->select(DB::raw('*,students.name AS name,majors.name as major_name'))
        ->join('majors','students.major_id','=','majors.id')->paginate(5);
      return $students;
    }
}
