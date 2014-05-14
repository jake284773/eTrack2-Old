<?php

namespace eTrack\Controllers;

use eTrack\Models\Faculty;
use eTrack\Services\Validation\FacultyValidator;
use Response;
use Redirect;
use View;
use Input;
use App;


class FacultyController extends BaseController {

    private $facultyValidator;

    public function __construct(FacultyValidator $facultyValidator)
    {
        $this->beforeFilter('auth');
        $this->beforeFilter('admin');

        $this->facultyValidator = $facultyValidator;
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
		return View::make('faculty.create', array('pageTitle' => 'Create a new faculty'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = array(
            'faculty_code' => Input::get('faculty_code'),
            'faculty_name' => Input::get('faculty_name')
        );

        if (! $this->facultyValidator->isValid($input))
        {
            return Redirect::back()
                ->withErrors($this->facultyValidator->errors());
        }

        $faculty = new Faculty();
        $faculty->code = Input::get('faculty_code');
        $faculty->name = Input::get('faculty_name');
        $faculty->save();

        return Redirect::route('faculty.index')
            ->with('info', 'Successfully created new faculty');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  string $id
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
            return Redirect::back()->with('message', 'Deleted '.$facultySpelling.' successfully');
        } catch (\Exception $ex) {
            return Redirect::back()->with('error', 'Unable to delete selected faculties');
        }
    }


}
