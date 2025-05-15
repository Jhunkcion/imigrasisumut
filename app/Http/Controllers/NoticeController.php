<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = \App\Notice::paginate(10);
        return view('notices.index', ['notices'=>$notices]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notices.create');
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
            'name'          => 'required|min:2|max:20|unique:notices',
            'description'   => 'required',
            'image'         => 'required',
        ])->validate();

        $new_notice = new \App\Notice;
        $new_notice->name         = strtoupper($request->get('name'));
        $new_notice->description  = $request->get('description');
        $new_notice->create_by    = \Auth::user()->id;
        $new_notice->slug         = \Str::slug($request->get('name'), '-');

        if($request->file('image')){
            // $image_path = $request->file('image')->store('notice_image', 'public');
            $nama_file = time()."_".$request->file('image')->getClientOriginalName();
            $image_path = $request->file('image')->move('notice_image', $nama_file);
            $new_notice->image = $nama_file;
        }

        $new_notice->save();
        return redirect()->route('notices.index')->with('success', 'Pengumuman Dibuat');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
   public function show(Notice $notice)
  {
    return view('notices.show', compact('notice'));
  }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notice = \App\Notice::findOrFail($id);
        return view('notices.edit', ['notice'=>$notice]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $notice = \App\Notice::findOrFail($id);

        \Validator::make($request->all(),[
            'name'          => 'required|min:2|max:20',
            'description'   => 'required',
            'slug'          => 'required',
        ])->validate();
        
        $notice->name         = $request->get('name');
        $notice->description  = $request->get('description');
        $notice->slug         = $request->get('slug');
        

        if($request->file('image')){
            // ebook
            // if($notice->image && file_exists(storage_path('app/public/'.$notice->image))){
            //     \Storage::delete('public/'.$notice->image);
            // }
            // $new_image = $request->file('image')->store('notice_image', 'public');
            
            if($notice->image){
                File::delete('notice_image/'.$notice->image);
            }
            // $new_image = $request->file('image')->store('notice_image', 'public');
            $nama_file = time()."_".$request->file('image')->getClientOriginalName();
            $new_image = $request->file('image')->move('notice_image', $nama_file);

            $notice->image = $nama_file;
        }

        $notice->update_by    = \Auth::user()->id;
        $notice->slug         = \Str::slug($request->get('name'));

        $notice->save();

        return redirect()->route('notices.index')->with('success', 'Pengumuman Diedit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice = \App\Notice::findOrFail($id);
        // $notice->articles()->sync([]);
        if($notice->image){
            File::delete('notice_image/'.$notice->image);
        }
        $notice->forceDelete();

        return redirect()->route('notices.index')->with('success', 'Pengumuman Dihapus.');
    }

    public function restore($id){
        $notice = \App\Notice::withTrashed()->findOrFail($id);
        $notice->restore();
    }

    public function deletePermanent($id){
        $notice = \App\Notice::withTrashed()->findOrFail($id);
        $notice->articles()->sync([]);

        // if($notice->image && file_exist(storage_path('app/public/'.$notice->image))){
        //     \Storage::delete('public/'.$notice->image);
        // }
        if($notice->image){
            File::delete('notice_image/'.$notice->image);
        }
        $notice->forceDelete();

        return redirect()->route('notices.index')->with('success', 'Pengumuman Dihapus.');
    }



    // ajax select2
    public function ajaxSearch(Request $request)
    {
        $keyword = $request->get('q');
        $notices = \App\notice::where('name', 'Like', "%$keyword%")->get();
        return $notices;
    }
    

}
