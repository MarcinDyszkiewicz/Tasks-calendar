<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use PhpParser\Node\Stmt\Return_;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();

        Return view('index', ['tasks'=>$tasks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function taskCreate()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function taskStore(Request $request)
    {
        $task = Task::create($request->all());

        return Response::json($task);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function taskShow($task_id)
    {
        $task = Task::find($task_id);

        return Response::json($task);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function taskEdit($id)
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
    public function taskUpdate(Request $request, $task_id)
    {
        $task = Task::find($task_id);

        $task->task = $request->task;
        $task->description = $request->description;
        $task->date = $request->date;

        $task->save();
        return Response::json($task);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function taskDestroy($task_id)
    {
        $task = Task::destroy($task_id);

        return Response::json($task);
    }
}
