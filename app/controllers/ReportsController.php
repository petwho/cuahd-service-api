<?php

class ReportsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /reports
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /reports/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /reports
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /reports
	 *
	 * @return Response
	 */
	public function importDataFromExcelFile()
	{
		// validate file exists
		if (!isset($input['filepath']) || !file_exists($input['filepath'])) {
			return Response::json(['message' => 'Invalid file path or file does not exist'], 400);
		}

		
		$excelFile = new ExcelFile;

		$excelFile->filepath = $input['filepath'];

		$excelFile->save();

		return Response::json(['message' => 'file data is being processing'], 200);
	}

	/**
	 * Display the specified resource.
	 * GET /reports/{id}
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
	 * GET /reports/{id}/edit
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
	 * PUT /reports/{id}
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
	 * DELETE /reports/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}