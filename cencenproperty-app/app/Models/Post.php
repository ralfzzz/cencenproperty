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
            // @dd($search);
            return $query->where('title','like','%'.$search.'%')
                    ->orWhere('description','like','%'.$search.'%');
        });
    }

    public function scopeFilterAll(Builder $query, array $filters)
    {
        // dd($filters);
        $query->when($filters[0] ?? false, function($query, $filters){
            // $search = ($filters['search'] == null)?'NULL':$filters['search'];
            // $locations = ($filters['locations'] == null)?'NULL':$filters['locations'];
            // $furnishing = ($filters['furnishing'] == null)?'NULL':$filters['furnishing'];
            $search = $filters['search'];
            $locations = $filters['location'];
            $furnishing = $filters['furnishing'];
            
            if ($locations) {
                // @dd($locations);
                return $query->where('title','like','%'.$search.'%')
                        ->where('description','like','%'.$search.'%')
                        ->where('furniture_electronics','like','%'.$furnishing.'%')
                        ->where('address','like','%'.$locations.'%')
                        ->orWhere('kota_kabupaten','like','%'.$locations.'%')
                        ->orWhere('located_near','like','%'.$locations.'%');
            } else {
                return $query->where('title','like','%'.$search.'%')
                        ->where('description','like','%'.$search.'%')
                        ->where('furniture_electronics','like','%'.$furnishing.'%')
                        ->where('address','like','%'.$locations.'%')
                        ->where('kota_kabupaten','like','%'.$locations.'%')
                        ->where('located_near','like','%'.$locations.'%');
                // @dd($furnishing);
            }

        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
