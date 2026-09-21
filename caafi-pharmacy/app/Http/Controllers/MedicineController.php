<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\Category;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicines = Medicine::all();
        return view ("medicines.index", compact("medicines"));

    
    }

    /**
     * Show the form for creating a new resource.
     */
    
    
       public function create()
{
    $categories = Category::orderBy('name')->get();

    return view('medicines.create', compact('categories'));
}

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'nullable|exists:categories,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'quantity' => 'required|integer|min:0',
            'expiry_date' => 'required|date',
        ]);
        Medicine::create($validated);
        return redirect()->route('medicines.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      $medicine = Medicine::findOrFail($id); 
      return view('medicines.show', compact('medicine'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $medicine = Medicine::findOrFail($id); 
        return view('medicines.edit', compact('medicine'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $medicine = Medicine::findOrFail($id); 
        $validated = $request->validate([ 
            'name' => 'required|string|max:255',
            'description' => 'nullable|string', 
            'quantity' => 'required|integer|min:0', 
            'expiry_date' => 'required|date', ]); 
            $medicine->update($validated); 
            return redirect() ->route('medicines.index') ->with('success', 'Medicine updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $medicine = Medicine::findOrFail($id);
          $medicine->delete();
         return redirect() ->route('medicines.index') ->with('success', 
        'Medicine deleted successfully.');
    }
}
