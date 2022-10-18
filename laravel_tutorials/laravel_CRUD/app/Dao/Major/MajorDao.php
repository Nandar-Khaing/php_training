<?php

namespace App\Dao\Major;



use App\Models\Major;
use App\Contracts\Dao\Major\MajorDaoInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Data accessing object for major
 */
class MajorDao implements MajorDaoInterface
{
  /**
   * To save major
   * @param Request $request request with inputs
   * @return Object $major saved major
   */
  public function saveMajor(Request $request)
  {
    $major = new Major();
    $major->id = $request->id;
    $major->name = $request->name;
    $major->save();
    $majors = Major::all();
    return $majors;
  }
  public function getMajorList()
  {
    $majors = Major::all();
    return $majors;
  }
 public function updatedMajorById(Request $request, $id)
 {
      $major = Major::find($id);
       $major->name = $request->name;
       $major->update();
       $majors = Major::all();
       return $majors;
 }
 public function deleteMajorById($id)
 {
  $major = Major::find($id);
  $major->delete();
  $majors = Major::all();
  return $majors;
 }
}