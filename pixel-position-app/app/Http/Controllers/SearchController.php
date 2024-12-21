<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(): Factory|View|Application
    {
        $jobs = Job::query()
            ->with(['employer', 'tags'])
            ->where('title', 'LIKE', '%'.request('q').'%')
            ->get();

        return view('results', ['jobs' => $jobs]);
    }
}
