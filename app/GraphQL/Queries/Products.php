<?php

namespace App\GraphQL\Queries;

use App\Models\Product;

class Products
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        $category = $args['category'];
        if(!empty($category)){
            return Product::whereHas('category', function($query) use ($category) {
                $query->where('title', $category);
            })->get();
        }

        return Product::all();
    }
}
