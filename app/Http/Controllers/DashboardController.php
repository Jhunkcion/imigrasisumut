<?php
namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
{
    // Ambil data visitor per bulan (tahun ini)
    $visitors = DB::table('visitors')
        ->select(DB::raw('MONTH(visited_at) as month'), DB::raw('count(*) as total'))
        ->whereYear('visited_at', date('Y'))
        ->groupBy(DB::raw('MONTH(visited_at)'))
        ->orderBy('month')
        ->get();

    // Inisialisasi 12 bulan default (0 semua)
    $monthlyVisitors = array_fill(1, 12, 0);

    foreach ($visitors as $v) {
        $monthlyVisitors[$v->month] = $v->total;
    }

    // Buat label dan data untuk grafik
    $labels = [];
    $data = [];

    for ($i = 1; $i <= 12; $i++) {
        $labels[] = Carbon::create()->month($i)->format('F');
        $data[] = $monthlyVisitors[$i];
    }

    // Kompilasi semua data dashboard
    $dataDashboard = [
        'draft'         => Berita::where('status', 'DRAFT')->count(),
        'publish'       => Berita::where('status', 'PUBLISH')->count(),
        'totalVisitors' => DB::table('visitors')->count(),
        'todayVisitors' => DB::table('visitors')
            ->whereDate('visited_at', today())
            ->count(),
        'chartLabels'   => $labels,
        'chartData'     => $data,
    ];

    // Kirim ke view
    return view('dashboards.index', ['data' => $dataDashboard]);
}

public function getTrafficData(Request $request)
{
    $range = $request->query('range', 'month');
    $labels = [];
    $data = [];

    if ($range == 'day') {
        $start = now()->subDays(6);
        $visitors = DB::table('visitors')
            ->select(DB::raw('DATE(visited_at) as date'), DB::raw('count(*) as total'))
            ->whereBetween('visited_at', [$start, now()])
            ->groupBy(DB::raw('DATE(visited_at)'))
            ->orderBy('date')
            ->get();

        foreach ($visitors as $v) {
            $labels[] = Carbon::parse($v->date)->format('d M');
            $data[] = $v->total;
        }
    } elseif ($range == 'week') {
        $start = now()->subWeeks(5);
        $visitors = DB::table('visitors')
            ->select(DB::raw('YEARWEEK(visited_at, 1) as week'), DB::raw('count(*) as total'))
            ->whereBetween('visited_at', [$start, now()])
            ->groupBy('week')
            ->orderBy('week')
            ->get();

        foreach ($visitors as $v) {
            $weekLabel = 'Minggu ke-' . substr($v->week, -2);
            $labels[] = $weekLabel;
            $data[] = $v->total;
        }
    } else {
        $monthly = array_fill(1, 12, 0);
        $visitors = DB::table('visitors')
            ->select(DB::raw('MONTH(visited_at) as month'), DB::raw('count(*) as total'))
            ->whereYear('visited_at', date('Y'))
            ->groupBy(DB::raw('MONTH(visited_at)'))
            ->orderBy('month')
            ->get();

        foreach ($visitors as $v) {
            $monthly[$v->month] = $v->total;
        }

        for ($i = 1; $i <= 12; $i++) {
            $labels[] = Carbon::create()->month($i)->format('F');
            $data[] = $monthly[$i];
        }
    }

    return response()->json([
        'labels' => $labels,
        'data' => $data
    ]);
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
