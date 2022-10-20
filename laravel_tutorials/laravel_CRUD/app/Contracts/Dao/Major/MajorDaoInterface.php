<?php

namespace App\Contracts\Dao\Major;

use Illuminate\Http\Request;

/**
 * Interface for Data Accessing Object of Major
 */
interface MajorDaoInterface
{
    /**
     * To save major
     * @param Request $request request with inputs
     * @return Object $major saved major
     */
    public function saveMajor(Request $request);

    /**
     * To get major list
     * @return $majorList
     */
    public function getMajorList();

    /**
     * To delete major by id
     * @param string $id major id
     * @param string $deletedUserId deleted user id
     * @return string $message message success or not
     */
    public function deleteMajorById($id);

    /**
     * To get major by id
     * @param string $id major id
     * @return Object $major major object
     */

    /**
     * To update major by id
     * @param Request $request request with inputs
     * @param string $id Major id
     * @return Object $major major Object
     */
    public function updatedMajorById(Request $request, $id);

}
