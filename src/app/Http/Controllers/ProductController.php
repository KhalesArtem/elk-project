<?php
namespace App\Http\Controllers;

use App\DTO\ProductData;
use App\Http\Requests\ProductRequest;
use App\Repositories\ProductRepositoryInterface;

class ProductController extends Controller
{
    private ProductRepositoryInterface $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function store(ProductRequest $request)
    {
        $productData = new ProductData(
            name: $request->name,
            description: $request->description,
            price: $request->price,
            stockQuantity: $request->stock_quantity,
            image: $request->image,
            categoryId: $request->category_id
        );

        return $this->productRepository->create($productData);
    }
}
