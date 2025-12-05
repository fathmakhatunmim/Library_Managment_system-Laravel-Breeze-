<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IssueBook extends Model
{
    use HasFactory;

    protected $table = 'issuebook'; // আপনার table name অনুযায়ী পরিবর্তন করুন

    protected $fillable = [
        'name',
        'bookname',
        'Issuedate',
        'Returndate',
        'quantity'
    ];
}
