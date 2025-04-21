<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Interview extends Model
{
    use HasFactory;

    protected $fillable = ['cv_review_id', 'status', 'interview_date'];

    // علاقة مع CVReview
    public function cvReview() {
        return $this->belongsTo(CVReview::class, 'cv_review_id');
    }

    // علاقة مع User
    public function user() {
        return $this->belongsTo(User::class); // يفترض أن الـ Interview يحتوي على عمود `user_id`
    }

    protected $table = "interviews";
    protected $guarded = [];
}
