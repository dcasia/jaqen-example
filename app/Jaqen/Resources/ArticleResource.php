<?php

namespace App\Jaqen\Resources;

use App\Models\Article;
use DigitalCreative\Jaqen\Services\ResourceManager\AbstractResource;
use Illuminate\Database\Eloquent\Model;

class ArticleResource extends AbstractResource
{
    public function model(): Model
    {
        return new Article();
    }
}
