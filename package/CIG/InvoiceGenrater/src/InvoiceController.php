<?php

namespace Cig\Invoicegenrater;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    public function index(Request $request)
    {
        $data =  'controller';
        /*
        pass view name with namespace
        */
       return view('Invoicegenrater::index');
    }
    public function create(Request $request)
    {
        return view('invoice.add');
    }
}
