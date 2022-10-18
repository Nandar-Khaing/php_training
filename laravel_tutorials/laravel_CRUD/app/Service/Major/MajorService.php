<?php

namespace App\Service\Major;

use App\Contracts\Dao\Major\MajorDaoInterface;
use App\Dao\Major\MajorDao;
use App\Contracts\Service\Major\MajorServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

/**
 * Service class for post.
 */
class MajorService implements MajorServiceInterface 
{
  /**
   * post dao
   */
  private $majorDao;
  /**
   * Class Constructor
   * @param PostDaoInterface
   * @return
   */
  public function __construct(MajorDaoInterface $majorDao)
  {
    $this->majorDao = $majorDao;
  }

  /**
   * To save post
   * @param Request $request request with inputs
   * @return Object $post saved post
   */
  public function saveMajor(Request $request)
  {
    return $this->majorDao->saveMajor($request);
  }

  /**
   * To get post list
   * @return array $postList Post list
   */
  public function getMajorList()
  {
    return $this->majorDao->getMajorList();
  }

  /**
   * To delete post by id
   * @param string $id post id
   * @param string $deletedUserId deleted user id
   * @return string $message message success or not
   */
  public function deleteMajorById($id)
  {
    return $this->majorDao->deleteMajorById($id);
  }

  

  /**
   * To update post by id
   * @param Request $request request with inputs
   * @param string $id Post id
   * @return Object $post Post Object
   */
  public function updatedMajorById(Request $request, $id)
  {
    return $this->majorDao->updatedMajorById($request, $id);
  }

  /**
   * To upload csv file for post
   * @param array $validated Validated values
   * @param string $uploadedUserId uploaded user id
   * @return array $content Message and Status of CSV Uploaded or not
   */
  
}

