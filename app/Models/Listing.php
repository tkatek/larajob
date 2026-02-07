<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    // هذه الدالة تستقبل أمر البحث وتقوم بفلترة النتائج
    public function scopeFilter($query, array $filters)
    {
        // 1. إذا كان هناك بحث عن "tag"
        if($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . $filters['tag'] . '%');
        }

        // 2. إذا كان هناك بحث نصي "search"
        if($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . $filters['search'] . '%')
                  ->orWhere('description', 'like', '%' . $filters['search'] . '%')
                  ->orWhere('tags', 'like', '%' . $filters['search'] . '%');
        }
    }
}
