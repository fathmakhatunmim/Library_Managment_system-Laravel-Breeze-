<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewBook extends Model
{
    use HasFactory;

    protected $table = 'reviewbook'; // আপনার table name অনুযায়ী পরিবর্তন করুন

    protected $fillable = [
        'book_name',
        'isbn_edition',
        'category',
        'review'
    ];
}
