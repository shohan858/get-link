<?php

namespace App\Http\Controllers;

use App\Models\BudgetModel;
use Illuminate\Http\Request;

class budgetController extends Controller
{
    public function index() {
        $data = BudgetModel::all();
        return view('budget')->with('data', $data);
    }
}
