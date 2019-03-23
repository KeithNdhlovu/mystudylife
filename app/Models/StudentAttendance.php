<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentAttendance extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'student_attendances';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'student_id',
        'subject_id',
        'checkin_time',
        'checkout_time',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
