<?php

namespace App\Http\Controllers\Moderator;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index' , 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $vacancy = Vacancy::where('name', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('time', 'LIKE', "%$keyword%")
                ->orWhere('salary', 'LIKE', "%$keyword%")
                ->orWhere('location', 'LIKE', "%$keyword%")
                ->orWhere('points', 'LIKE', "%$keyword%")
                ->orWhere('company_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $vacancy = Vacancy::latest()->paginate($perPage);
        }

        $page = "Darba piedāvājumi";

        return view('moderator.vacancy.index', compact('vacancy' , 'page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('moderator.vacancy.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'name' => 'required|min:3'
		]);
        $requestData = $request->all();
        
        Vacancy::create($requestData);

        return redirect('moderator/vacancy')->with('flash_message', 'Vacancy added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $vacancy = Vacancy::findOrFail($id);

        $page = "Darba sludinājums";

        return view('moderator.vacancy.show', compact('vacancy' , 'page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $vacancy = Vacancy::findOrFail($id);

        return view('moderator.vacancy.edit', compact('vacancy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'name' => 'required|min:3'
		]);
        $requestData = $request->all();
        
        $vacancy = Vacancy::findOrFail($id);
        $vacancy->update($requestData);

        return redirect('moderator/vacancy')->with('flash_message', 'Vacancy updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Vacancy::destroy($id);

        return redirect('moderator/vacancy')->with('flash_message', 'Vacancy deleted!');
    }
}
