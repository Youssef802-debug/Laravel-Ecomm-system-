<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
    #[Scope]
    protected function active(Builder $query): void
    {
        $query->where('is_active', 1);
    }
}
