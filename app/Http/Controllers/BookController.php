<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\ModelBook;
use App\Models\User;
use App\Http\Requests\BookRequest;
use \Carbon\Carbon;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book=ModelBook::paginate();
        return view('index',compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        return view('create',compact('users'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        $cad=ModelBook::create([
           'title'=>$request->title,
           'description'=>$request->description,
           'date'=>Carbon::createFromFormat('d/m/Y', $request->date)->toDateString(),
           'id_user'=>$request->id_user
        ]);
        if($cad){
            return redirect('books');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book=ModelBook::find($id);
        return view('show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book=ModelBook::find($id);
        $users=User::all();
        return view('create',compact('book','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request, $id)
    {
        ModelBook::where(['id'=>$id])->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'date'=>Carbon::createFromFormat('d/m/Y', $request->date )->toDateString(),
            'id_user'=>$request->id_user
        ]);
        return redirect('books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=ModelBook::destroy($id);
    return($del)?"sim":"não";
    }
}
