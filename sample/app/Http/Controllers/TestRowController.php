<?php

namespace App\Http\Controllers;

use App\Models\TestRow;
use Illuminate\Http\Request;

class TestRowController extends Controller
{
    public $viewDir ='testRow';
    public $pageLimit = 5;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $testRow=TestRow::select('id','name','comment')->orderBy('updated_at','desc');
        $testRows = $testRow->paginate($this->pageLimit); //DB결과 객체형

        return view($this->viewDir.'.index',[
            'title'=>'index',
            'testRows'=>$testRows,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $testRow = new TestRow();
        return view($this->viewDir.'.form',[
            'title'=>'create',
            'action'=>'create',
            'testRow'=>$testRow,
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
        $testRow = new testRow();
        $testRow->name = $request->post('name',null);
        $testRow->comment = $request->post('comment',null);
        if(!$testRow->name || !$testRow->comment){
            abort('400','잘못된 입력입니다.');
        }
        $testRow->save();
        if(!$testRow->id){
            abort('400','저장 오류');
        }
        // return redirect()->route('testRow.show', ['testRow' => $testRow->id]);
        return redirect()->route('testRow.show', ['testRow' => $testRow]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TestRow  $testRow
     * @return \Illuminate\Http\Response
     */
    public function show(TestRow $testRow)
    {
        return view($this->viewDir.'.show',[
            'title'=>'show',
            'testRow'=>$testRow,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TestRow  $testRow
     * @return \Illuminate\Http\Response
     */
    public function edit(TestRow $testRow)
    {
        return view($this->viewDir.'.form',[
            'title'=>'create',
            'action'=>'create',
            'testRow'=>$testRow,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TestRow  $testRow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestRow $testRow)
    {
        $testRow->name = $request->post('name',null);
        $testRow->comment = $request->post('comment',null);
        if(!$testRow->name || !$testRow->comment){
            abort('400','잘못된 입력입니다.');
        }
        $testRow->save();
        if(!$testRow->id){
            abort('400','저장 오류');
        }
        // return redirect()->route('testRow.show', ['testRow' => $testRow->id]);
        return redirect()->route('testRow.show', ['testRow' => $testRow]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestRow  $testRow
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestRow $testRow)
    {
        $testRow->delete();
        return redirect()->route('testRow.index');
    }
    /**
     * 테스트용으로 추가한 test 메소드
     * 
     * @return \Illuminate\Http\Response
     */
    public function page()
    {
        // return response("TEST PAGE");
        return "TEST PAGE";
    }

    /**
     * 테스트용으로 추가한 count 메소드 (JSON 예제)
     * 
     * @return \Illuminate\Http\Response
     */
    public function count()
    {
        // return response("TEST PAGE");
        $json = [
            'count'=>TestRow::count()
        ];
        return response()->json($json);
    }
    
}
