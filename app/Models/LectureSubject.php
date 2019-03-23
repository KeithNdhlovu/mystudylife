<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LectureSubject extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'lecture_subjects';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lecture_id',
        'subject_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'lecture_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
