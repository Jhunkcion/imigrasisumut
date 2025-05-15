<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritas = \App\Berita::paginate(10);
        return view('news.index', ['beritas'=>$beritas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \Validator::make($request->all(),[
            'name'          => 'required|min:2|max:20|unique:beritas',
            'description'   => 'required',
            'image'         => 'required',
        ])->validate();

        $new_berita = new \App\Berita;
        $new_berita->name         = strtoupper($request->get('name'));
        $new_berita->description  = $request->get('description');
        $new_berita->create_by    = \Auth::user()->id;
        $new_berita->slug         = \Str::slug($request->get('name'), '-');

        if($request->file('image')){
            // $image_path = $request->file('image')->store('Berita_image', 'public');
            $nama_file = time()."_".$request->file('image')->getClientOriginalName();
            $image_path = $request->file('image')->move('Berita_image', $nama_file);
            $new_berita->image = $nama_file;
        }

        $new_berita->save();
        return redirect()->route('beritas.index')->with('success', 'Berita successfully created');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Berita  $Berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $Berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = \App\Berita::findOrFail($id);
        return view('news.edit', ['berita'=>$berita]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $berita = \App\Berita::findOrFail($id);

        \Validator::make($request->all(),[
            'name'          => 'required|min:2|max:20',
            'description'   => 'required',
            'slug'          => 'required',
        ])->validate();
        
        $berita->name         = $request->get('name');
        $berita->description  = $request->get('description');
        $berita->slug         = $request->get('slug');
        

        if($request->file('image')){
            // ebook
            // if($Berita->image && file_exists(storage_path('app/public/'.$Berita->image))){
            //     \Storage::delete('public/'.$Berita->image);
            // }
            // $new_image = $request->file('image')->store('Berita_image', 'public');
            
            if($berita->image){
                File::delete('berita_image/'.$berita->image);
            }
            // $new_image = $request->file('image')->store('Berita_image', 'public');
            $nama_file = time()."_".$request->file('image')->getClientOriginalName();
            $new_image = $request->file('image')->move('berita_image', $nama_file);

            $berita->image = $nama_file;
        }

        $berita->update_by    = \Auth::user()->id;
        $berita->slug         = \Str::slug($request->get('name'));

        $berita->save();

        return redirect()->route('beritas.index')->with('success', 'Berita successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = \App\Berita::findOrFail($id);
        $berita->articles()->sync([]);
        if($berita->image){
            File::delete('berita_image/'.$berita->image);
        }
        $berita->forceDelete();

        return redirect()->route('beritas.index')->with('success', 'Berita successfully deleted.');
    }

    public function restore($id){
        $berita = \App\Berita::withTrashed()->findOrFail($id);
        $berita->restore();
    }

    public function deletePermanent($id){
        $berita = \App\Berita::withTrashed()->findOrFail($id);
        $berita->articles()->sync([]);

        // if($berita->image && file_exist(storage_path('app/public/'.$berita->image))){
        //     \Storage::delete('public/'.$berita->image);
        // }
        if($berita->image){
            File::delete('berita_image/'.$berita->image);
        }
        $berita->forceDelete();

        return redirect()->route('beritas.index')->with('success', 'berita successfully deleted.');
    }



    // ajax select2
    public function ajaxSearch(Request $request)
    {
        $keyword = $request->get('q');
        $beritas = \App\Berita::where('name', 'Like', "%$keyword%")->get();
        return $beritas;
    }

}
