<?php

namespace PhpCleanArchitecture\InterfaceAdapters;

/**
 * The error presenter is responsible for formating errors for presentation
 * 
 * @package PhpCleanArchitecture\InterfaceAdapters;
 */
interface ErrorPresenter
{

    /**
     * Format
     *
     * @param \Throwable $throwable
     * @return ViewModel
     */
    public function presentError(\Throwable $throwable): ViewModel;
    
}
