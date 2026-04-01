<?php
namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        // Filter tanggal (default hari ini)
        $start_date = $request->start_date ? Carbon::parse($request->start_date)->startOfDay() : Carbon::today();
        $end_date = $request->end_date ? Carbon::parse($request->end_date)->endOfDay() : Carbon::today();

        $sales = Order::where('status', 'selesai')
                      ->whereBetween('created_at', [$start_date, $end_date])
                      ->get();

        $total_revenue = $sales->sum('total_price');
        $total_orders = $sales->count();

        return view('reports.index', compact('sales', 'total_revenue', 'total_orders', 'start_date', 'end_date'));
    }
}
?>