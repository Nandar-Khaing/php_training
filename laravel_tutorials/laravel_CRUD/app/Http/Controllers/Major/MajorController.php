<?php

namespace App\Http\Controllers\Major;

use App\Contracts\Service\Major\MajorServiceInterface;
use App\Http\Controllers\Controller;
use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    private $majorInterface;
    public function __construct(MajorServiceInterface $majorInterface)
    {
        $this->majorInterface = $majorInterface;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $majors = $this->majorInterface->getMajorList();
        return view('majors.index', ['majors' => $majors]);
    }

    public function showCreateForm()
    {
        return view('majors.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $majors = $this->majorInterface->saveMajor($request);
        return view('majors.index', ['majors' => $majors]);
    }

    public function showEditForm($id)
    {
        $major = Major::find($id);
        return view('majors.edit', ['major' => $major]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $majors = $this->majorInterface->updatedMajorById($request, $id);
        return view('majors.index', ['majors' => $majors]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $majors = $this->majorInterface->deleteMajorById($id);
        return view('majors.index', ['majors' => $majors]);
        // return redirect()->route('Home');
    }
}
