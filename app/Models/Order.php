<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    public $fillable = [
        "first_name",
        "last_name",
        "company_name",
        "address",
        "city",
        "area",
        "phone",
        "email",
        "payment_method",
        "order_notice"];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
