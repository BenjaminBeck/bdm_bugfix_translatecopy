<?php

namespace BDM\BdmBugfixTranslatecopy\Hooks\DataHandler;

/***************************************************************
 *  Copyright notice
 *  (c) 2016 Benjamin Beck <BenjaminBeck@gmx.de>, beck digitale medien
 *  All rights reserved
 ***************************************************************/

/**
 * Fixes a bug where inline relational records do not get the correct language after a
 * translate > copy action (the new wizzard thing..).
 *
 * @package BDM\BdmBugfixTranslatecopy
 * @author  Benjamin Beck <beck@beck-digitale-medien.de>
 */
class FixLanguageAfterTranslateCopy{

	public function processCmdmap_postProcess($command, $table, $id, $value, $DataHandler, $pasteUpdate, &$pasteDatamap){

		if(is_array($pasteUpdate)){
			$insertedTables = $DataHandler->copyMappingArray;
			foreach($insertedTables as $tabelName => $idMapArray){
				foreach($idMapArray as $originalUid => $insertedUid){
					foreach($pasteUpdate as $overrideFieldName => $overrideFieldValue){

						$pasteDatamap[$tabelName][$insertedUid][$overrideFieldName] = $overrideFieldValue;

					}
				}

			}
		}

	}

}
