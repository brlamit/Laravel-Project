<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class TourPackageController extends Controller
{
    public function index()
    {
        $packages = DB::table('tbltourpackages')
                    ->orderBy('Creationdate', 'desc')
                    ->get();
    
        return view('tourpackages.index', compact('packages'));
    }

    public function create()
    {
        return view('tourpackages.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'PackageName' => 'required|string|max:200',
            'PackageType' => 'required|string|max:150',
            'PackageLocation' => 'required|string|max:100',
            'PackagePrice' => 'required|integer',
            'PackageFetures' => 'required|string|max:255',
            'PackageDetails' => 'required|string',
            'PackageImage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            // Handle file upload
            $imagePath = $request->file('PackageImage')->store('package-images', 'public');
            
            // Insert into database with all required fields including timestamps
            DB::table('tbltourpackages')->create([
                'PackageName' => $validated['PackageName'],
                'PackageType' => $validated['PackageType'],
                'PackageLocation' => $validated['PackageLocation'],
                'PackagePrice' => $validated['PackagePrice'],
                'PackageFetures' => $validated['PackageFetures'],
                'PackageDetails' => $validated['PackageDetails'],
                'PackageImage' => $imagePath,
                'Creationdate' => now(), // Explicitly set creation date
                'UpdationDate' => null,  // Explicitly set update date to null
            ]);

            return redirect()->route('tourpackages.index')
                           ->with('success', 'Package added successfully!');

        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Failed to store package: ' . $e->getMessage());
            
            return back()->withInput()
                       ->with('error', 'Failed to add package. Please try again.');
        }
    }
}