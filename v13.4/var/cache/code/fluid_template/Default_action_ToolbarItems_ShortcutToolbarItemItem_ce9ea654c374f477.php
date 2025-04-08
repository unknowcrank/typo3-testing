<?php
class Default_action_ToolbarItems_ShortcutToolbarItemItem_ce9ea654c374f477 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
));
    }
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$array3 = [
'0' => '@typo3/backend/toolbar/shortcut-menu.js',
];

$array4 = [
'bookmark.delete' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.bookmarksDelete',
'bookmark.confirmDelete' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.confirmBookmarksDelete',
'bookmark.savedTitle' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.bookmarkSavedTitle',
'bookmark.savedMessage' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.bookmarkSavedMessage',
'bookmark.alreadyExistsTitle' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.bookmarkAlreadyExistsTitle',
'bookmark.alreadyExistsMessage' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.bookmarkAlreadyExistsMessage',
'bookmark.failedTitle' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.bookmarkFailedTitle',
'bookmark.failedMessage' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.bookmarkFailedMessage',
];

$arguments1 = [
'pageTitle' => '',
'includeCssFiles' => NULL,
'includeJsFiles' => NULL,
'addInlineSettings' => NULL,
'includeJavaScriptModules' => $array3,
'addJsInlineLabels' => $array4,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2)]);

$output0 .= '
<span class="toolbar-item-icon" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};

$arguments5 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.bookmarks',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments5, $renderingContext, $renderChildrenClosure6)]);

$output0 .= '">
    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};

$arguments7 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'title' => NULL,
'identifier' => 'apps-toolbar-menu-shortcut',
'alternativeMarkupIdentifier' => 'inline',
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments7, $renderingContext, $renderChildrenClosure8);

$output0 .= '
</span>
<span class="toolbar-item-title">
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
return NULL;
};

$arguments9 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.bookmarks',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments9, $renderingContext, $renderChildrenClosure10)]);

$output0 .= '
</span>

';

    return $output0;
}

}

#