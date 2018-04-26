<?php

namespace PhpCleanArchitecture\InterfaceAdapters;

use PhpCleanArchitecture\BusinessRules\ResponseModel;

/**
 * The presenter accepts data from response model and format them for presentation.
 * The presenter send the produced result to the view model.
 *
 * @package PhpCleanArchitecture\InterfaceAdapters
 */
interface Presenter
{

    /**
     * Format response model to presentable view model
     *
     * @param ResponseModel $responseModel
     * @return ViewModel
     */
    public function present(ResponseModel $responseModel): ViewModel;

}
