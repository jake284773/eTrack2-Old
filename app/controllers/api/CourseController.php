<?php

namespace eTrack\Controllers\API;

use eTrack\Controllers\BaseController;
use eTrack\Models\Course;
use Response;

class CourseController extends BaseController {

    /**
     * The fields to display when listing the resource.
     *
     * @var array
     */
    private $defaultFields = array(
        'code', 'name', 'level', 'status', 'pathway',
        'start_date', 'end_date'
    );

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $courses = Course::all($this->defaultFields);
        return Response::json($courses);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
