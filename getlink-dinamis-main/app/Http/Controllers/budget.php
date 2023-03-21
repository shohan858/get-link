<?php

namespace App\Http\Controllers;
use App\Models\BudgetModel;
use Illuminate\Http\Request;


class budget extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $budget = BudgetModel::all();
        return response()->json([
            'message' => 'success',
            'data' => $budget,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $budget = new BudgetModel();
        $budget->value = $request->value;
     

        $budget->save();
        return response()->json([
            'message' => 'success',
            'value' => $budget,
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $budget = BudgetModel::find($id);
        if (!$budget) {
            return response()->json([
                'message' => 'not found',
            ], 404);
        }

        $budget->value = $request->value;
      

        $budget->update();

        $budget->update();
        return response()->json([
            'message' => 'success',
            'data' => $budget,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $budget = BudgetModel::find($id);
        if (!$budget) {
            return response()->json([
                'message' => 'not found',
            ], 404);
        }
        $budget->delete();
        return response()->json([
            'message' => 'success',
        ], 200);
    }
}
