<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topics = \App\Topic::all();
        $supervisors = \App\Supervisor::all();
        $files = \App\SharedDocuments::all();

        return view('home')
            ->withTopics($topics)
            ->withSupervisors($supervisors)
            ->withFiles($files);
    }

    public function selectTopic(Request $request)
    {
        $request->validate([
            'topic' => 'required',
            'supervisor' => 'required',
        ]);
        \DB::table('users')
                ->where('id', \Auth::user()->id)
                ->update([
                    'topic_id' => $request->topic,
                    'supervisor_id' => $request->supervisor
                ]);

        return redirect()->back();
    }

    public function uploadFile(Request $request)
    {
        $path = $request->file('file')->store('documents');

        $newDocument = new \App\SharedDocuments();
        $newDocument->supervisor = false;
        $newDocument->student = true;
        $newDocument->user_id = \Auth::user()->id;
        $newDocument->supervisor_id = \Auth::user()->supervisor->id;
        $newDocument->original_name = $request->file('file')->getClientOriginalName();
        $newDocument->path = $path;

        $newDocument->save();

        return redirect()->back();
    }

    public function deleteFile($id)
    {
        \App\SharedDocuments::find($id)->delete();

        return redirect()->back();
    }

    public function downloadFile($id)
    {
        $path = \App\SharedDocuments::find($id)->path;
        $original_name = \App\SharedDocuments::find($id)->original_name;

        return \Storage::download($path, $original_name);
    }
}
