<?php

namespace eTrack\Controllers\API;

use eTrack\Controllers\BaseController;
use eTrack\Models\Faculty;
use Response;

class FacultyController extends BaseController {

    private $defaultFields = array('code', 'name');

    public function __construct()
    {
        $this->beforeFilter('auth.basic');
        $this->beforeFilter('api.role.admin');
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Response::json(Faculty::all($this->defaultFields));
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
	 * @param  string $id
	 * @return Response
	 */
	public function show($id)
	{
        return Response::json(Faculty::select($this->defaultFields)
                ->where('code', '=', $id)->firstOrFail()
        );
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
