<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        /*
        |--------------------------------------------------------------------------
        | Stock Filters
        |--------------------------------------------------------------------------
        */
        if ($request->stock_status === 'in_stock') {
            $query->where('status', '>', 0);
        }

        if ($request->stock_status === 'out_of_stock') {
            $query->where('status', '=', 0);
        }

        if ($request->stock_status === 'sold_out') {
            $query->where('status', 1);
        }

        /*
        |--------------------------------------------------------------------------
        | Monthly Filter
        |--------------------------------------------------------------------------
        */
        if ($request->filled('month')) {
            $date = Carbon::createFromFormat('Y-m', $request->month);
            $query->whereMonth('created_at', $date->month)
                  ->whereYear('created_at', $date->year);
        }

        /*
        |--------------------------------------------------------------------------
        | Custom Date Range Filter
        |--------------------------------------------------------------------------
        */
        if ($request->filled('from_date') && $request->filled('to_date')) {
            $query->whereBetween('created_at', [
                $request->from_date,
                $request->to_date
            ]);
        }

        $products = $query->latest()->paginate(20);

        return view('admin.reports.index', compact('products'));
    }
}
