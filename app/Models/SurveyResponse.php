<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyResponse extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function surveys ()
    {
        return $this->belongsTo(Survey::class);
    }
}
