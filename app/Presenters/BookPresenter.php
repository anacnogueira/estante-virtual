<?php

namespace Estante\Presenters;

use Estante\Transformers\BookTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class BookPresenter
 *
 * @package namespace Estante\Presenters;
 */
class BookPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new BookTransformer();
    }
}
