<?php

namespace App\Contracts\Dao\Student;

use Illuminate\Http\Request;

/**
 * Interface for Data Accessing Object of Student
 */
interface StudentDaoInterface
{
    /**
     * To save student
     * @param Request $request request with inputs
     * @return Object $student saved student
     */
    public function saveStudent(Request $request);

    /**
     * To get student list
     * @return $studentList
     */
    public function getStudentList();

    /**
     * To delete student by id
     * @param string $id Student id
     * @param string $deletedUserId deleted user id
     * @return string $message message success or not
     */
    public function deleteStudentById($id);

    /**
     * To update student by id
     * @param Request $request request with inputs
     * @param string $id student id
     * @return Object $student student Object
     */
    public function updatedStudentById(Request $request, $id);
/**To Search from DB */
    public function searchFromDB(Request $request);
}
