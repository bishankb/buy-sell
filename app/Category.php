<?php

namespace App;

use App\BaseModel;

class Category extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'category_for', 'slug', 'status', 'created_by', 'updated_by'
    ];

    public function subCategories()
    {
    	return $this->hasMany(SubCategory::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('title', 'like', '%' . $search . '%')
                    ->OrWhereHas('createdBy', function ($r) use ($search) {
                        $r->where('name', 'like', '%' . $search . '%');
                    })
                    ->OrWhereHas('updatedBy', function ($r) use ($search) {
                        $r->where('name', 'like', '%' . $search . '%');
                    });
    }
}
