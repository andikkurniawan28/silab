<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Station;
use App\Models\Sample;
use App\Models\Sampling;
use App\Models\Register;
use App\Models\Post;
use App\Models\Program;

class HomeController extends Controller
{
    public function index()
    {
        $stations = Station::all();
        return view('welcome', compact('stations'));
    }

    public function showStation($title, $id)
    {
        $stations = Station::all();
        $samples = Sample::where('station_id', $id)->get();
        foreach($samples as $sample)
        {
            $barcode[$sample->id] = Sampling::serveByStation($sample->id);
        }

        return view('home.show_station', compact('stations' ,'title', 'samples', 'barcode'));
    }

    public function showMethod($id, $method_id, $sample_name)
    {
        $stations = Station::all();
        $samples = Sampling::serveByMethod($id);
        return view('home.show_method', compact('stations', 'samples', 'method_id', 'sample_name'));
    }

    public function dailyReport()
    {
        $registers = Register::all();
        $posts = Post::all();
        $programs = Program::all();
        $stations = Station::all();
        return view('report.index', compact('stations', 'registers', 'posts', 'programs'));
    }

    public function coaReport()
    {
        $stations = Station::all();
        return view('coa.index', compact('stations'));
    }
}
