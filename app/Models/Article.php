<?php

namespace App\Models;

use App\Traits\ModelHelpers;
use App\Traits\HasAuthor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory, HasAuthor, ModelHelpers;

    const TABLE = 'articles';
    protected $table = self::TABLE; //protected means only this class and its children can access this property
    protected $fillable = [
        'title',
        'slug',
        'body',
        'author_id',
    ];

    public function id(): string
    {
        return $this->id;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function slug(): string
    {
        return $this->slug;
    }

    public function body(): string
    {
        return $this->body;
    }
}
