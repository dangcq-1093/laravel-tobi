<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\FileUpload;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $file = FileUpload::first();
        $banner = Section::with('description')->type('banner')->first();
        $summary = Section::with('description')->type('summary')->first();
        $descriptionSection = Section::with(['cards.descriptions', 'cards' => function ($query) {
            $query->orderBy('order', 'asc');
        }])->type('description')->first();
        $progress = Section::with(['cards.descriptions', 'cards' => function ($query) {
            $query->orderBy('order', 'asc');
        }])->type('progress')->first();
        $outcome = Section::with(['cards.descriptions', 'cards' => function ($query) {
            $query->orderBy('order', 'asc');
        }])->type('outcome')->first();
        $impact = Section::with(['description', 'cards.descriptions', 'cards' => function ($query) {
            $query->orderBy('order', 'asc');
        }])->type('impact')->first();

        return view('layouts.app', compact('banner', 'summary', 'descriptionSection', 'progress', 'outcome', 'impact', 'file'));
    }

    public function test()
    {
        $banner = Section::with('description')->type('banner')->first();
        $summary = Section::with('description')->type('summary')->first();
        $descriptionSection = Section::with(['cards.descriptions', 'cards' => function ($query) {
            $query->orderBy('order', 'asc');
        }])->type('description')->first();
        $progress = Section::with(['cards.descriptions', 'cards' => function ($query) {
            $query->orderBy('order', 'asc');
        }])->type('progress')->first();
        $outcome = Section::with(['cards.descriptions', 'cards' => function ($query) {
            $query->orderBy('order', 'asc');
        }])->type('outcome')->first();
        $impact = Section::with(['description', 'cards.descriptions', 'cards' => function ($query) {
            $query->orderBy('order', 'desc');
        }])->type('impact')->first();
        dd($banner->toArray(), $summary->toArray(), $descriptionSection->toArray(), $progress->toArray(), $outcome->toArray(), $impact->toArray());
        return view('layouts.app', compact('banner', 'summary', 'description', 'progress', 'outcome', 'impact'));
    }
}
