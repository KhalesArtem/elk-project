<?php
namespace App\Repositories;

use App\DTO\ProductData;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

interface ProductRepositoryInterface
{
    public function create(ProductData $data): Builder|Model;
}
