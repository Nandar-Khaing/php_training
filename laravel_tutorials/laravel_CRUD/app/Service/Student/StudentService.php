<?php

namespace App\Service\Student;

use App\Contracts\Dao\Student\StudentDaoInterface;
use App\Contracts\Service\Student\StudentServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

/**
 * Service class for post.
 */
class StudentService implements StudentServiceInterface
{
  /**
   * post dao
   */
  private $studentDao;
  /**
   * Class Constructor
   * @param PostDaoInterface
   * @return
   */
  public function __construct(StudentDaoInterface $studentDao)
  {
    $this->studentDao = $studentDao;
  }

  /**
   * To save post
   * @param Request $request request with inputs
   * @return Object $post saved post
   */
  public function saveStudent(Request $request)
  {
    return $this->studentDao->saveStudent($request);
  }

  /**
   * To get post list
   * @return array $postList Post list
   */
  public function getStudentList()
  {
    return $this->studentDao->getStudentList();
  }

  /**
   * To delete post by id
   * @param string $id post id
   * @param string $deletedUserId deleted user id
   * @return string $message message success or not
   */
  public function deleteStudentById($id)
  {
    return $this->studentDao->deleteStudentById($id);
  }

  

  /**
   * To update post by id
   * @param Request $request request with inputs
   * @param string $id Post id
   * @return Object $post Post Object
   */
  public function updatedStudentById(Request $request, $id)
  {
    return $this->studentDao->updatedStudentById($request, $id);
  }

  /**
   * To upload csv file for post
   * @param array $validated Validated values
   * @param string $uploadedUserId uploaded user id
   * @return array $content Message and Status of CSV Uploaded or not
   */
  
}

