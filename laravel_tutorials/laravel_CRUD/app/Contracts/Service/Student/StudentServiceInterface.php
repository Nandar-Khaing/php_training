<?php

namespace App\Contracts\Service\Student;

use Illuminate\Http\Request;

/**
 * Interface for Data Accessing Object of Post
 */
interface StudentServiceInterface
{
  /**
   * To save post
   * @param Request $request request with inputs
   * @return Object $post saved post
   */
  public function saveStudent(Request $request);

  /**
   * To get post list
   * @return $postList
   */
  public function getStudentList();

  /**
   * To delete post by id
   * @param string $id post id
   * @param string $deletedUserId deleted user id
   * @return string $message message success or not
   */
  public function deleteStudentById($id);



  /**
   * To update post by id
   * @param Request $request request with inputs
   * @param string $id Post id
   * @return Object $post Post Object
   */
  public function updatedStudentById(Request $request, $id);

}