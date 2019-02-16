<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Photography;
use App\Http\Requests\CreatePhotographyRequest;
use App\Http\Requests\UpdatePhotographyRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\Settings;


class PhotographyController extends Controller {

	/**
	 * Display a listing of photography
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $photography = Photography::with("settings")->get();

		return view('admin.photography.index', compact('photography'));
	}

	/**
	 * Show the form for creating a new photography
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    $settings = Settings::pluck("value", "id")->prepend('Please select', 0);

	    
	    return view('admin.photography.create', compact("settings"));
	}

	/**
	 * Store a newly created photography in storage.
	 *
     * @param CreatePhotographyRequest|Request $request
	 */
	public function store(CreatePhotographyRequest $request)
	{
	    $request = $this->saveFiles($request);
		Photography::create($request->all());

		return redirect()->route(config('quickadmin.route').'.photography.index');
	}

	/**
	 * Show the form for editing the specified photography.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$photography = Photography::find($id);
	    $settings = Settings::pluck("value", "id")->prepend('Please select', 0);

	    
		return view('admin.photography.edit', compact('photography', "settings"));
	}

	/**
	 * Update the specified photography in storage.
     * @param UpdatePhotographyRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdatePhotographyRequest $request)
	{
		$photography = Photography::findOrFail($id);

        $request = $this->saveFiles($request);

		$photography->update($request->all());

		return redirect()->route(config('quickadmin.route').'.photography.index');
	}

	/**
	 * Remove the specified photography from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Photography::destroy($id);

		return redirect()->route(config('quickadmin.route').'.photography.index');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            Photography::destroy($toDelete);
        } else {
            Photography::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.photography.index');
    }

}
