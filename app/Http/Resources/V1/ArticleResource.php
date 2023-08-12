<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    public static $wrap = 'article';
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'type' => 'articles',
            'id' => $this->id,
            'attributes' => [
                'title' => $this->title,
                'slug' => $this->slug,
                'content' => $this->content,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
            ],
            'relationships' => [
                'author' => AuthorResource::make($this->author()),
            ],
            'links' => [
                'self' => route('articles.show', $this->id()),
                'related' => route('articles.show', $this->slug()),
            ],
        ];
    }

    public function with($request): array
    {
        return [
            'status' => 'success',
        ];
    }

    public function withResponse($request, $response): void
    {
        $response->header('Accept', 'application/json');
    }
}
