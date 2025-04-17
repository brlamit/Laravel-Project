<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TourPackageController extends Controller
{
    public function index()
    {
        $packages = DB::table('tbltourpackages')
                    ->orderBy('Creationdate', 'desc')
                    ->paginate(10); // Paginate with 10 items per page
    
        return view('tourpackages.index', compact('packages'));
    }

    public function create()
    {
        return view('tourpackages.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'PackageName' => 'required|string|max:200',
            'PackageType' => 'required|string|max:150',
            'PackageLocation' => 'required|string|max:100',
            'PackagePrice' => 'required|integer|min:0',
            'PackageFetures' => 'required|string|max:255',
            'PackageDetails' => 'required|string',
            'PackageImage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Store image
        $imagePath = $request->file('PackageImage')->store('package-images', 'public');

        DB::table('tbltourpackages')->insert([
            'PackageName' => $validated['PackageName'],
            'PackageType' => $validated['PackageType'],
            'PackageLocation' => $validated['PackageLocation'],
            'PackagePrice' => $validated['PackagePrice'],
            'PackageFetures' => $validated['PackageFetures'],
            'PackageDetails' => $validated['PackageDetails'],
            'PackageImage' => $imagePath,
            'Creationdate' => now(),
        ]);

        return redirect()->route('tourpackages.index')
                         ->with('success', 'Package created successfully!');
    }
}