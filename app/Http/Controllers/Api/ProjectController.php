<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Auth;

class ProjectController extends Controller
{
    public function index()
    {
        $team = auth()->user()->team_id ? auth()->user()->team_id : auth()->user()->id;
        $projects = Project::orderBy('created_at', 'desc')->where('created_by', $team)->get();
        return response()->json($projects->toArray());
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team = auth()->user()->team_id ? auth()->user()->team_id : auth()->user()->id;
        $project = new Project();

        $project->collection = $request->has('collection') ? $request->input('collection') : null;
        $project->total_nft = $request->input('total_nft');
        $project->nft_url = $request->input('nft_url');
        $project->meta = $request->input('meta');
        $project->created_by = $team;
        if ($project->save()) {
            return response()->json(
                [
                    'status' => true,
                    'project'   => $project,
                    'message' => 'project saved successfully.'
                ]
            );
        } else {
            return response()->json(
                [
                    'status'  => false,
                    'message' => 'Oops, the project could not be saved.',
                ]
            );
        }

    }
}
