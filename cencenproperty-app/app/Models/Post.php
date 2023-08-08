<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

    protected $with = [
        'user',
    ];

    protected $guarded = [
        'id',
    ];

    public function scopeFilter(Builder $query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title','like','%'.$search.'%')
                    ->orWhere('description','like','%'.$search.'%');
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
