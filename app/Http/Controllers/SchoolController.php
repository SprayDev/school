<?php

namespace App\Http\Controllers;

use App\Http\Requests\SchoolPostRequest;
use Response;
use Illuminate\Http\Request;
use App\Models\School;

class SchoolController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::paginate(1);

        $schools->withPath('/schools');

        return view('pages.school.index')->withSchools($schools);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pages.school.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SchoolPostRequest $request)
    {
        $params = $request->except([
            '_token',
            'logo'
        ]);
        $logo = $request->file('logo');
        $filename = md5(time().$logo->getClientOriginalName()).'.jpg';
        $logo->move(storage_path('app/public/schools'),$filename);
        $params['logo'] = 'app/public/schools/'.$filename;
        School::create($params);

        return Response::make( [
            'success' => true
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
