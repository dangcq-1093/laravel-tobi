<?php

namespace App\Http\Controllers\Admin;

use App\Models\Section;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
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
            $query->orderBy('order', 'asc');
        }])->type('impact')->first();

        return view('dashboard', compact('banner', 'summary', 'descriptionSection', 'progress', 'outcome', 'impact'));
    }

    public function updateBanner(Request $request, $id)
    {
        $banner = Section::with('description')->findOrFail($id);
        if ($banner) {
            $banner->update([
                'title' => $request->title,
            ]);
            $banner->description()->update([
                'content' => $request->description['content'],
            ]);
        }

        return response()->json([
            'message'  => "Updated Successful!",
        ], 200);
    }

    public function updateSummary(Request $request, $id)
    {
        $summary = Section::with('description')->findOrFail($id);
        if ($summary) {
            $summary->description()->update([
                'content' => $request->content,
            ]);
        }

        return response()->json([
            'message'  => "Updated Successful!",
        ], 200);
    }

    public function updateDescription(Request $request, $id)
    {
        $description = Section::with(['cards.descriptions', 'cards' => function ($query) {
            $query->orderBy('order', 'asc');
        }])->findOrFail($id);
        if ($description) {
            foreach ($description->cards as $index => $card) {
                $card->update([
                    'title' => $request->card[$index]['title'],
                ]);
                foreach($card->descriptions as $key => $description) {
                    $description->update([
                        'content' => $request->card[$index]['values'][$key],
                    ]);
                }
            }
        }

        return response()->json([
            'message'  => "Updated Successful!",
        ], 200);
    }

    public function updateProgress(Request $request, $id)
    {
        $progress = Section::with(['cards.descriptions', 'cards' => function ($query) {
            $query->orderBy('order', 'asc');
        }])->findOrFail($id);
        if ($progress) {
            foreach ($progress->cards as $index => $card) {
                $card->update([
                    'title' => $request->card[$index]['title'],
                    'note' => $request->card[$index]['note'],
                ]);
                $card->descriptions->first()->update([
                    'content' => $request->card[$index]['content'],
                ]);
            }
        }

        return response()->json([
            'message'  => "Updated Successful!",
        ], 200);
    }
    
    public function updateOutcome(Request $request, $id)
    {
        $outcome = Section::with(['cards.descriptions', 'cards' => function ($query) {
            $query->orderBy('order', 'asc');
        }])->findOrFail($id);
        if ($outcome) {
            foreach ($outcome->cards as $index => $card) {
                $card->update([
                    'title' => $request->card[$index]['title'],
                ]);
                foreach ($card->descriptions as $key => $description) {
                    $description->update([
                        'content' => $request->card[$index]['content'][$key],
                    ]);
                }
            }
        }
        

        return response()->json([
            'message'  => "Updated Successful!",
        ], 200);
    }
    
    public function updateImpact(Request $request, $id)
    {
        $impact = Section::with(['description', 'cards.descriptions', 'cards' => function ($query) {
            $query->orderBy('order', 'asc');
        }])->findOrFail($id);
        if ($impact) {
            $impact->description()->update([
                'content' => $request->content,
            ]);
            foreach ($impact->cards as $index => $card) {
                $card->update([
                    'title' => $request->card[$index]['title'],
                ]);
                $card->descriptions->first()->update([
                    'content' => $request->card[$index]['content'],
                ]);
            }
        }

        return response()->json([
            'message'  => "Updated Successful!",
        ], 200);
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('home');
    }
}
