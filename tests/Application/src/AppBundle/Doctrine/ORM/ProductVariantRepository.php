<?php

declare(strict_types=1);

namespace AppBundle\Doctrine\ORM;

use Setono\SyliusBulkDiscountPlugin\Doctrine\ORM\ProductVariantRepositoryTrait;
use Setono\SyliusBulkDiscountPlugin\Repository\ProductVariantRepositoryInterface;
use Sylius\Bundle\CoreBundle\Doctrine\ORM\ProductVariantRepository as BaseProductVariantRepository;

class ProductVariantRepository extends BaseProductVariantRepository implements ProductVariantRepositoryInterface
{
    use ProductVariantRepositoryTrait;
}
