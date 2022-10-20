<?php

namespace App\Contracts\Service\Major;

use Illuminate\Http\Request;

/**
 * Interface for Data Accessing Object of Post
 */
interface MajorServiceInterface
{
    /**
     * To save post
     * @param Request $request request with inputs
     * @return Object $post saved post
     */
    public function saveMajor(Request $request);

    /**
     * To get post list
     * @return $postList
     */
    public function getMajorList();

    /**
     * To delete post by id
     * @param string $id post id
     * @param string $deletedUserId deleted user id
     * @return string $message message success or not
     */
    public function deleteMajorById($id);

    /**
     * To update post by id
     * @param Request $request request with inputs
     * @param string $id Post id
     * @return Object $post Post Object
     */
    public function updatedMajorById(Request $request, $id);

}
