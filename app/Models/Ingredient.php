<?php

namespace App\Models;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ingredient extends Model
{
    use HasFactory;

    /**
     * The roles that belong to the Ingredient
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function recipes(): BelongsToMany
    {
        return $this->belongsToMany(Recipe::class)->withPivot(['amount', 'unit']);
    }
}
