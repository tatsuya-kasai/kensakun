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
        $aaa = new Kensakun;
        $aaa->content = $request->content;
        $aaa->save();

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
        $kensakun = Kensakun::find($id);
        $kensakun->content = $request->content;
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
