<?php

namespace App\Http\Controllers\Student;

use App\Contracts\Service\Student\StudentServiceInterface;
use App\Exports\StudentExport;
use App\Http\Controllers\Controller;
use App\Imports\StudentImport;
use App\Models\Student;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    private $studentInterface;
    public function __construct(StudentServiceInterface $studentInterface)
    {
        $this->studentInterface = $studentInterface;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = $this->studentInterface->getStudentList();
        return view('students.index', ['students' => $students]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showCreateForm()
    {
        return view('students.create');
    }

    public function create(Request $request)
    {
        $students = $this->studentInterface->saveStudent($request);
        return view('students.index', ['students' => $students]);
    }

    public function showEditForm($id)
    {
        $student = Student::find($id);
        return view('students.edit', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $students = $this->studentInterface->updatedStudentById($request, $id);
        return view('students.index', ['students' => $students]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $students = $this->studentInterface->deleteStudentById($id);
        return view('students.index', ['students' => $students]);
        // return redirect()->route('Home');
    }
/**Search
 * @param
 * @return searched students
 */
    public function search(Request $request)
    {
        $students = $this->studentInterface->searchFromDB($request);
       return view('students.index', ["students" => $students]);
    }
    //Import
    public function importCSV()
    {
        Excel::import(new StudentImport, request()->file('file'));
        return back();
    }
    //Export
    public function exportCSV()
    {
        return Excel::download(new StudentExport, 'student.xlsx');
    }

}
