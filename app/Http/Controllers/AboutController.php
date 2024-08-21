<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index(): View
    {
        $abouts = About::all();
        return view ('abouts.index')->with('abouts', $abouts);
    }

 
    public function create(): View
    {
        return view('abouts.create');
    }

  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        About::create($input);
        return redirect('about')->with('flash_message', 'About Addedd!');
    }

    public function show(string $id): View
    {
        $about = About::find($id);
        return view('abouts.show')->with('abouts', $about);
    }

    public function edit(string $id): View
    {
        $about = About::find($id);
        return view('abouts.edit')->with('abouts', $about);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $about = About::find($id);
        $input = $request->all();
        $about->update($input);
        return redirect('about')->with('flash_message', 'about Updated!');  
    }

    
    public function destroy(string $id): RedirectResponse
    {
        About::destroy($id);
        return redirect('about')->with('flash_message', 'About deleted!'); 
    }
}
