<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function users ()
    {
        return $this->belongsTo(User::class);
    }

    public function questionnaires ()
    {
        return $this->belongsTo(Questionnaire::class);
    }

    public function responses ()
    {
        return $this->hasMany(SurveyResponse::class);
    }
}
