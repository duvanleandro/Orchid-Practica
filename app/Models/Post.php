<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
use Orchid\Filters\Filterable;
use Orchid\Filters\HttpFilter;
use Orchid\Attachment\Attachable;

class Post extends Model
{
    use HasFactory, AsSource, Filterable, Attachable;

    protected $fillable = [
        'title',
        'content',
    ];
}
