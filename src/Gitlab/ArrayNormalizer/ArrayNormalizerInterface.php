<?php

namespace App\Gitlab\ArrayNormalizer;

use App\Gitlab\Exception\NormalizationException;

/**
 * Normalizes arrays.
 *
 * @author Florian Voutzinos <florian@voutzinos.com>
 */
interface ArrayNormalizerInterface
{
    /**
     * Normalizes the array.
     *
     * @throws NormalizationException
     *
     * @return array The normalized array
     */
    public function normalize(array $data): array;
}
