<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Setting;
use App\Models\Preparation;
use Illuminate\Http\Request;

class SettingsController extends Controller
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
            $settings = Preparation::where('nom', 'LIKE', "%$keyword%")
                ->orWhere('intitule', 'LIKE', "%$keyword%")
                ->orderBy('nom')->paginate($perPage);
        } else {
            $settings = Preparation::orderBy('nom')->paginate($perPage);
        }

        return view('admin.settings.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.settings.create');
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
                'intitule' => 'required',
                'ecole' => 'required',
                'photo' => 'required',
                'ville' => 'required',
                'duree' => 'required',
                'type_cours' => 'required'
            ]
        );

        $requestData = $request->all();

        Preparation::create($requestData);

        return redirect('admin/settings')->with('flash_message', ' DTS ajouté!');
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
        $setting = Preparation::findOrFail($id);

        return view('admin.settings.show', compact('setting'));
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
        $setting = Preparation::findOrFail($id);

        return view('admin.settings.edit', compact('setting'));
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
                'intitule' => 'required',
                'ecole' => 'required',
                'photo' => 'required',
                'ville' => 'required',
                'duree' => 'required',
                'type_cours' => 'required'
            ]
        );
        $requestData = $request->all();

        $setting = Preparation::findOrFail($id);
        $setting->update($requestData);

        return redirect('admin/settings')->with('flash_message', 'DTS modifié!');
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
        Preparation::destroy($id);

        return redirect('admin/settings')->with('flash_message', 'DTS supprimé!');
    }
}
