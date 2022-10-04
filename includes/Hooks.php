<?php
/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 *
 * @file
 */

namespace MediaWiki\Extension\BoilerPlate;

// components, internal mediawiki framework

use Parser;

class Hooks {

	/**
	 * @see https://www.mediawiki.org/wiki/Manual:Hooks/BeforePageDisplay
	 * @param \OutputPage $out
	 * @param \Skin $skin
	 */
	public function onBeforePageDisplay( $out, $skin ): void {
		$config = $out->getConfig();
		// check for $wgBoilerPlateVandalizeEachPage on LocalSettings.php
		if ( $config->get( 'BoilerPlateVandalizeEachPage' ) ) {
			// simulate here
			//  $blockResult = $this->getBlockChainData();
			// $parser->setFunctionHook( 'pkc', [ self::class, 'renderExample' ] );
			// var_dump('here2'); die();
			
			// $out->addHTML( \Html::element( 'p', [], $blockResult ) );
			// $out->addModules( 'oojs-ui-core' );
		}
	}

	public function onParserFirstCallInit( $parser ): void {

		try {
			$parser->setFunctionHook( 'pkc', [ self::class, 'renderExample' ] );
		} catch ( MWException $e ) {
			wfLogWarning( $e->getMessage() );
		}

	}

	// Render the output of {{#example:}}.
	public static function renderExample( Parser $parser, $method = '', $param1 = '', $param2 = '', $param3 = '') {

		// The input parameters are wikitext with templates expanded.
		// The output should be wikitext too.

		$opkc_method = new pkc_web_three_method();

		switch( $method ) {
			case 'eth_blockNumber':
				$output = $opkc_method->eth_blockNumber();
				break;

			case 'eth_gasPrice':
				$output = $opkc_method->eth_gasPrice();
				break;

			case 'eth_getTransactionCount':
				$output = $opkc_method->eth_getTransactionCount();
				break;

			case 'eth_getBalance':
				$output = $opkc_method->eth_getBalance();
				break;

			case 'eth_getStorageAt':
				$output = $opkc_method->eth_getStorageAt();
				break;

			case 'eth_getCode':
				$output = $opkc_method->eth_getCode();
				break;

			case 'eth_signTransaction':
				$output = $opkc_method->eth_signTransaction();
				break;				

			case 'eth_getTransactionReceipt':
				$output = $opkc_method->eth_getTransactionReceipt();
				break;					

			case 'eth_getLogs':
				$output = $opkc_method->eth_getLogs();
				break;	

		}

		// $output = "method is $method and param1 = $param1 and param2 = $param2 and param3 = $param3";
		return $output;
	 }

	 public function onArticlePurge( $wikiPage ): void {

	}

	public function getBlockChainData(){
		// simulate API call here
		return "123ABC";
	}
}

class pkc_web_three_method {
	function __construct()
	{

	}

	function eth_blockNumber($public_key = ''){
		// perform call here
		$output = 'You are calling method eth_blockNumber';
		return $output;
	}

	function eth_gasPrice(){
		// perform call here
		$output = 'You are calling method eth_gasPrice';
		return $output;		
	}

	function eth_getTransactionCount(){
		// perform call here
		$output = 'You are calling method eth_getTransactionCount';
		return $output;		
	}
	
	function eth_getBalance(){
		// perform call here
		$output = 'You are calling method eth_getBalance';
		return $output;		
	}	

	function eth_getStorageAt(){
		// perform call here
		$output = 'You are calling method eth_getStorageAt';
		return $output;		
	}

	function eth_signTransaction(){
		// perform call here
		$output = 'You are calling method eth_signTransaction';
		return $output;		
	}
	
	function eth_getTransactionReceipt(){
		// perform call here
		$output = 'You are calling method eth_getTransactionReceipt';
		return $output;		
	}
	
	function eth_getLogs(){
		// perform call here
		$output = 'You are calling method eth_getLogs';
		return $output;		
	}	

}
