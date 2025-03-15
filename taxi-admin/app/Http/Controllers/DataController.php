<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Models\Data;
use Illuminate\Support\Facades\Log;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filters = request()->only('search','min_date','max_date','type');
        $data = Data::query()->filter($filters)->get();
        $vehicles = Vehicle::get()->toArray();
        $vehicleList = array_map(function($v){
            $item = $v['numberPlate'];
            return $item;
        }, $vehicles);

        return view('data.index', ['data' => $data, 'vehicles' => $vehicleList]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Data $data)
    {   
        Log::info($data);
        return view('record.create',['data'=> $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Data::where('id', $id)->first();
        return view('data.show', compact('item'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
