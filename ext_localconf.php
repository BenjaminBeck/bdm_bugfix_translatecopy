<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}


call_user_func(function() {
	global $GLOBALS;
	$class = 'BDM\BdmBugfixTranslatecopy\Hooks\DataHandler\FixLanguageAfterTranslateCopy'; 
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass'][] = $class;
});

