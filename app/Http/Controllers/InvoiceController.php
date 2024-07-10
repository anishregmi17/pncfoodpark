<?php
// app/Http/Controllers/InvoiceController.php
namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\FoodOrdering;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();
        return view('invoices.index', compact('invoices'));
    }

    public function create()
    {
        $foodOrderings = FoodOrdering::all();
        return view('invoices.create', compact('foodOrderings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'food_ordering_id' => 'required|exists:food_orderings,id',
            'amount' => 'required|numeric',
            'status' => 'required',
        ]);

        Invoice::create($request->all());
        return redirect()->route('invoices.index');
    }

    public function show(Invoice $invoice)
    {
        return view('invoices.show', compact('invoice'));
    }

    public function edit(Invoice $invoice)
    {
        $foodOrderings = FoodOrdering::all();
        return view('invoices.edit', compact('invoice', 'foodOrderings'));
    }

    public function update(Request $request, Invoice $invoice)
    {
        $request->validate([
            'food_ordering_id' => 'required|exists:food_orderings,id',
            'amount' => 'required|numeric',
            'status' => 'required',
        ]);

        $invoice->update($request->all());
        return redirect()->route('invoices.index');
    }

    public function destroy(Invoice $invoice)
    {
        $invoice->delete();
        return redirect()->route('invoices.index');
    }
}
