<?php
namespace App\Repositories;

use App\DTO\ProductData;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class EloquentProductRepository implements ProductRepositoryInterface
{
    public function create(ProductData $data): Model|Builder
    {
        return Product::query()->create([
            'name' => $data->name,
            'description' => $data->description,
            'price' => $data->price,
            'stock_quantity' => $data->stockQuantity,
            'image' => $data->image,
            'category_id' => $data->categoryId,
        ]);
    }
}
