<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kensakun;    // 追加　　　　　※ここを追加入力する

class KensakunsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kensakuns = Kensakun::all();

        return view('kensakuns.index', [
            'kensakuns' => $kensakuns,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kensakun = new Kensakun;

        return view('kensakuns.create', [
            'kensakun' => $kensakun,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'sex' => 'required|max:5',   // 追加
            'content' => 'required|max:20',
            'birth' => 'required|max:20',   // 追加
            'age' => 'required|max:3',   // 追加
            'hobby' => 'required|max:20',   // 追加
            'adl' => 'required|max:30',   // 追加
        ]);
        
        $kensakun = new Kensakun;
        $kensakun->room = $request->room;    // 追加
        $kensakun->sex = $request->sex;    // 追加
        $kensakun->content = $request->content;
        $kensakun->birth = $request->birth;    // 追加
        $kensakun->age = $request->age;    // 追加
        $kensakun->hobby = $request->hobby;    // 追加
        $kensakun->adl = $request->adl;    // 追加
        $kensakun->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kensakun = Kensakun::find($id);

        return view('kensakuns.show', [
            'kensakun' => $kensakun,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kensakun = Kensakun::find($id);

        return view('kensakuns.edit', [
            'kensakun' => $kensakun,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'room' => 'required|max:5',   // 追加
            'sex' => 'required|max:5',   // 追加
            'content' => 'required|max:20',
            'birth' => 'required|max:20',   // 追加
            'age' => 'required|max:3',   // 追加
            'hobby' => 'required|max:20',   // 追加
            'adl' => 'required|max:30',   // 追加
        ]);
        
        $kensakun = Kensakun::find($id);
        $kensakun->room = $request->room;    // 追加
        $kensakun->sex = $request->sex;    // 追加
        $kensakun->content = $request->content;
        $kensakun->birth = $request->birth;    // 追加
        $kensakun->age = $request->age;    // 追加
        $kensakun->hobby = $request->hobby;    // 追加
        $kensakun->adl = $request->adl;    // 追加
        $kensakun->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kensakun = Kensakun::find($id);
        $kensakun->delete();

        return redirect('/');
    }
}
