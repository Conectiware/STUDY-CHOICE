<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Formation;
use Illuminate\Http\Request;

class PagesController extends Controller
{
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
            $pages = Formation::where('nom', 'LIKE', "%$keyword%")
                ->orWhere('intitule', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $pages = Formation::latest()->paginate($perPage);
        }

        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.pages.create');
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
            'nom' => 'required',
            'intitule' => 'required',
            'date_debut' => 'required',
            'duree' => 'required',
            'type_cours' => 'required'
        ]);
        $requestData = $request->all();
        
        Formation::create($requestData);

        return redirect('admin/pages')->with('flash_message', 'Formation ajoutée!');
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
        $page = Formation::findOrFail($id);

        return view('admin.pages.show', compact('page'));
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
        $page = Formation::findOrFail($id);

        return view('admin.pages.edit', compact('page'));
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
            'nom' => 'required',
            'intitule' => 'required',
            'date_debut' => 'required',
            'duree' => 'required',
            'type_cours' => 'required'
        ]);
        $requestData = $request->all();
        
        $page = Formation::findOrFail($id);
        $page->update($requestData);

        return redirect('admin/pages')->with('flash_message', 'Formation modifiée!');
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
        Formation::destroy($id);

        return redirect('admin/pages')->with('flash_message', 'Page deleted!');
    }
}
