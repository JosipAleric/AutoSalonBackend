<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = ['brand', 'model', 'price', 'year', 'mileage', 'drivetrain', 'fuel_type', 'power', 'engine', 'image_path', 'inventory_status'];
}
