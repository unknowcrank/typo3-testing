<?php
return array (
  'typo3/cms-frontend/content-length-headers' => 'TYPO3\\CMS\\Frontend\\Middleware\\ContentLengthResponseHeader',
  'typo3/cms-frontend/shortcut-and-mountpoint-redirect' => 'TYPO3\\CMS\\Frontend\\Middleware\\ShortcutAndMountPointRedirect',
  'typo3/cms-core/response-propagation' => 'TYPO3\\CMS\\Core\\Middleware\\ResponsePropagation',
  'typo3/cms-frontend/output-compression' => 'TYPO3\\CMS\\Frontend\\Middleware\\OutputCompression',
  'typo3/cms-frontend/csp-headers' => 'TYPO3\\CMS\\Frontend\\Middleware\\ContentSecurityPolicyHeaders',
  'typo3/cms-frontend/prepare-tsfe-rendering' => 'TYPO3\\CMS\\Frontend\\Middleware\\PrepareTypoScriptFrontendRendering',
  'typo3/cms-core/cache-timout' => 'TYPO3\\CMS\\Frontend\\Middleware\\CacheTimeout',
  'typo3/cms-frontend/tsfe' => 'TYPO3\\CMS\\Frontend\\Middleware\\TypoScriptFrontendInitialization',
  'typo3/cms-frontend/page-argument-validator' => 'TYPO3\\CMS\\Frontend\\Middleware\\PageArgumentValidator',
  'typo3/cms-frontend/preview-simulator' => 'TYPO3\\CMS\\Frontend\\Middleware\\PreviewSimulator',
  'typo3/cms-frontend/page-resolver' => 'TYPO3\\CMS\\Frontend\\Middleware\\PageResolver',
  'typo3/cms-frontend/static-route-resolver' => 'TYPO3\\CMS\\Frontend\\Middleware\\StaticRouteResolver',
  'typo3/cms-frontend/csp-report' => 'TYPO3\\CMS\\Frontend\\Middleware\\ContentSecurityPolicyReporter',
  'typo3/cms-frontend/base-redirect-resolver' => 'TYPO3\\CMS\\Frontend\\Middleware\\SiteBaseRedirectResolver',
  'typo3/cms-frontend/authentication' => 'TYPO3\\CMS\\Frontend\\Middleware\\FrontendUserAuthenticator',
  'typo3/cms-frontend/backend-user-authentication' => 'TYPO3\\CMS\\Frontend\\Middleware\\BackendUserAuthenticator',
  'typo3/cms-core/request-token-middleware' => 'TYPO3\\CMS\\Core\\Middleware\\RequestTokenMiddleware',
  'typo3/cms-frontend/maintenance-mode' => 'TYPO3\\CMS\\Frontend\\Middleware\\MaintenanceMode',
  'typo3/cms-frontend/eid' => 'TYPO3\\CMS\\Frontend\\Middleware\\EidHandler',
  'typo3/cms-frontend/site' => 'TYPO3\\CMS\\Frontend\\Middleware\\SiteResolver',
  'typo3/cms-core/cache-tags-attribute' => 'TYPO3\\CMS\\Core\\Middleware\\CacheDataCollectorAttribute',
  'typo3/cms-core/normalized-params-attribute' => 'TYPO3\\CMS\\Core\\Middleware\\NormalizedParamsAttribute',
  'typo3/cms-frontend/timetracker' => 'TYPO3\\CMS\\Frontend\\Middleware\\TimeTrackerInitialization',
);
#