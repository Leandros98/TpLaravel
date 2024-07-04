<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;

class HomeAdminController extends Controller
{
    public function index()
    {
        $totalProperties = Property::count();
        $soldProperties = Property::where('sold', true)->count();
        $unsoldProperties = Property::where('sold', false)->count();
        $propertyStats = [
            'total_properties' => $totalProperties,
            'sold_properties' => $soldProperties,
            'unsold_properties' => $unsoldProperties,
            'sold_percentage' => round(($soldProperties / $totalProperties) * 100, 2),
            'unsold_percentage' => round(($unsoldProperties / $totalProperties) * 100, 2),
        ];
      

        return view('admin.homeAdmin', [
            'totalProperties' => $totalProperties,
            'soldProperties' => $soldProperties,
            'unsoldProperties' => $unsoldProperties,
            'propertyStats'=>$propertyStats
        ]);
    }
}
