<?php
class partial_Media_Rendering_Image_eaa3e7ecd2e79558 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): ?string {
        return (string)'';
    }
    public function hasLayout(): bool {
        return false;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): void {
        $renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'ce' => 
  array (
    0 => 'TYPO3\\CMS\\FluidStyledContent\\ViewHelpers',
  ),
));
    }
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'additionalConfig' => [],
'cropVariant' => 'default',
'fileExtension' => NULL,
'file' => $renderingContext->getVariableProvider()->getByPath('file'),
'width' => $renderingContext->getVariableProvider()->getByPath('dimensions.width'),
'height' => $renderingContext->getVariableProvider()->getByPath('dimensions.height'),
'loading' => $renderingContext->getVariableProvider()->getByPath('settings.media.lazyLoading'),
'decoding' => $renderingContext->getVariableProvider()->getByPath('settings.media.imageDecoding'),
'class' => 'image-embed-item',
'alt' => $renderingContext->getVariableProvider()->getByPath('file.alternative'),
'title' => $renderingContext->getVariableProvider()->getByPath('file.title'),
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2);

$output0 .= '

';

    return $output0;
}

}

#