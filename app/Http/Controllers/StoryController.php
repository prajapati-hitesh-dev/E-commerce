<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stories = Story::latest()->paginate(12);
        return view('stories', compact('stories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('share-story');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'city' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'impact_savings_inr' => 'nullable|integer|min:0',
        ]);

        $story = Story::create([
            'name' => $validated['name'],
            'city' => $validated['city'] ?? null,
            'email' => $validated['email'] ?? null,
            'title' => $validated['title'],
            'content' => $validated['content'],
            'impact_savings_inr' => $validated['impact_savings_inr'] ?? 0,
            'impact_points' => 0,
        ]);

        return redirect()->route('stories')->with('success', 'Thank you for sharing your story!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Story $story)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Story $story)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Story $story)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Story $story)
    {
        //
    }
}
