<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tourpackage extends Model
{
    use HasFactory;

    protected $table = 'tbltourpackages'; // Specify the table name if different from the model name

    protected $fillable = [
        'PackageName',
        'PackageType',
        'PackageLocation',
        'PackagePrice',
        'PackageFetures',
        'PackageDetails',
        'PackageImage',
        'Creationdate',
        'UpdationDate',
    ];

    public $timestamps = false; // Disable automatic timestamps if not needed
}
//             Log::error('Error storing package: ' . $e->getMessage());