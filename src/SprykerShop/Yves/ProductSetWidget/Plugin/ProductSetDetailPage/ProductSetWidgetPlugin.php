<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\ProductSetWidget\Plugin\ProductSetDetailPage;

use Generated\Shared\Transfer\ProductSetDataStorageTransfer;
use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;
use SprykerShop\Yves\ProductSetDetailPage\Dependency\ProductSetWidget\ProductSetWidgetPluginInterface;

/**
 * @deprecated Use organism('product-set-details', 'ProductSetWidget') instead.
 */
class ProductSetWidgetPlugin extends AbstractWidgetPlugin implements ProductSetWidgetPluginInterface
{
    /**
     * {@inheritDoc}
     *
     * @param array<\Generated\Shared\Transfer\ProductViewTransfer> $productViewTransfers
     */
    public function initialize(ProductSetDataStorageTransfer $productSetDataStorageTransfer, array $productViewTransfers): void
    {
        $this
            ->addParameter('productSet', $productSetDataStorageTransfer)
            ->addParameter('productViews', $productViewTransfers);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     */
    public static function getName(): string
    {
        return static::NAME;
    }

    /**
     * {@inheritDoc}
     *
     * @api
     */
    public static function getTemplate(): string
    {
        return '@ProductSetWidget/views/product-set-page/product-set-page.twig';
    }
}
