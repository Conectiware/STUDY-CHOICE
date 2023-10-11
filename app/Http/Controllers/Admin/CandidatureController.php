<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Candidature;

class CandidatureController extends Controller
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
            $candidatures = Candidature::where('nom', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orderBy('nom')->paginate($perPage);
        } else {
            $candidatures = Candidature::orderBy('nom')->paginate($perPage);
        }

        return view('admin.candidatures.index', compact('candidatures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.candidatures.create');
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
        $this->validate(
            $request,
            [
                'nom' => 'required',
                'naissance' => 'required',
                'email' => 'required',
                'tel' => 'required',
                'genre' => 'required',
                'document' => 'required',
                'num_doc' => 'required',
                'direction' => 'required',
                'pays_del' => 'required',
                'date_del' => 'required',
                'date_exp' => 'required',
                'residence' => 'required',
                'adresse' => 'required',
                'province' => 'required',
                'bp' => 'required',
                'pere' => 'required',
                'mere' => 'required',
                'prof_pere' => 'required',
                'prof_mere' => 'required'
            ]
        );

        $requestData = $request->all();

        Candidature::create($requestData);

        return redirect('admin/candidatures')->with('flash_message', ' Candidature ajoutée!');
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
        $candidatures = Candidature::findOrFail($id);

        return view('admin.candidatures.show', compact('candidatures'));
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
        $candidatures = Candidature::findOrFail($id);

        return view('admin.candidatures.edit', compact('candidatures'));
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
        $this->validate(
            $request,
            [
                'nom' => 'required',
                'naissance' => 'required',
                'email' => 'required',
                'tel' => 'required',
                'genre' => 'required',
                'document' => 'required',
                'num_doc' => 'required',
                'direction' => 'required',
                'pays_del' => 'required',
                'date_del' => 'required',
                'date_exp' => 'required',
                'residence' => 'required',
                'adresse' => 'required',
                'province' => 'required',
                'bp' => 'required',
                'pere' => 'required',
                'mere' => 'required',
                'prof_pere' => 'required',
                'prof_mere' => 'required'
            ]
        );
        $requestData = $request->all();

        $candidatures = Candidature::findOrFail($id);
        $candidatures->update($requestData);

        return redirect('admin/candidatures')->with('flash_message', 'candidatures modifié!');
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
        Candidature::destroy($id);

        return redirect('admin/candidatures')->with('flash_message', 'Candidature supprimé!');
    }
}
