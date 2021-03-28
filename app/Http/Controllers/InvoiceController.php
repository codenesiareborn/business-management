<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(Invoice $invoice)
    {
        $data['invoice'] = $invoice->all();
        return view('user/invoice/invoice', compact('data'));
    }
    public function create()
    {
        return view('user/invoice/create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
                            'company_id' => 'integer|required',
                            'product_id' => 'integer|required',
                            'mitra_id' => 'integer|required',
                            'no' => 'required',
                            'date_invoice' => 'required',
                            'sales_person' => 'required',
                            'terms' => 'max:1',
                            'currency' => 'integer',
                            'due_date' => 'required',
                            'disccount' => 'required',
                            'tax' => 'required',
                            'total' => 'required',
                            'date' => 'required',
                            'information' => 'required',
                            'terms_condition' => 'required',
                            'termin_invoice' => 'required',
                            'status' => 'required',
                        ]);
        Invoice::create($validatedData);
        return redirect()->route('invoice');

    }
    public function show(Invoice $invoice)
    {
        //
    }
    public function edit(Invoice $invoice, $id)
    {
        $data['current']    = [
            'id' => $id
        ];
        $data['invoice']    = $invoice->all();
        return view('user/invoice/edit', compact('data'));
    }
    public function update(Request $request, Invoice $invoice, $id)
    {
        $validatedData = $request->validate([
                    'company_id' => 'integer|required',
                    'product_id' => 'integer|required',
                    'mitra_id' => 'integer|required',
                    'no' => 'required',
                    'date_invoice' => 'required',
                    'sales_person' => 'required',
                    'terms' => 'max:1',
                    'currency' => 'integer',
                    'due_date' => 'required',
                    'disccount' => 'required',
                    'tax' => 'required',
                    'total' => 'required',
                    'date' => 'required',
                    'information' => 'required',
                    'terms_condition' => 'required',
                    'termin_invoice' => 'required',
                    'status' => 'required',
                ]);
        $invoice->find($id)->update($validatedData);
        return redirect()->route('invoice');
    }
    public function destroy(Invoice $invoice, $id)
    {
        $invoice->destroy($id);
        return redirect()->route('invoice');
    }
}
