<?php

namespace eTrack\Controllers;

use eTrack\Models\Faculty;
use Response;
use View;
use Input;

class FacultyController extends BaseController {

    private $defaultFields = array('code', 'name');

    public function __construct()
    {
        $this->beforeFilter('auth');
        $this->beforeFilter('admin');
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$faculties = Faculty::paginate(15);

        return View::make('faculty.index', array('faculties' => $faculties, 'pageTitle' => 'Faculties'));
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
    
    public function batchAction()
    {
        switch (Input::get('batch_action'))
        {
            case 'delete':
                return $this->batchDelete();
                break;
            default:
                App::abort(500);
        }
    }

    private function batchDelete()
    {
        $selectedRecords = Input::get('record');

        if (! Input::get('confirmation'))
        {
            $faculties = Faculty::whereIn('code', $selectedRecords)->get();

            if (count($faculties) == 1) {
                $facultySpelling = "faculty";
            } else {
                $facultySpelling = "faculties";
            }

            return View::make('faculty.delete',array('faculties' => $faculties,
                                                     'facultySpelling' => $facultySpelling));
        }

        try {
            Faculty::whereIn('code', $selectedRecords)->delete();
            return Redirect::back()->with('message', 'Deleted faculties successfully');
        } catch (\Exception $ex) {
            return Redirect::back()->with('error', 'Unable to delete selected faculties');
        }
    }


}
