<?php

declare( strict_types=1 );

namespace MediaWiki\Extension\BoilerPlate;

use Config;
use ConfigException;
use InvalidArgumentException;
use MediaWiki\MediaWikiServices;
use Parser;
use PPFrame;
use RuntimeException;

class PKCInterface {
	/**
	 * @var Parser|null
	 */
	private $parser;

	/**
	 * @var array
	 */
	private $args;

	/**
	 * @var Config
	 */
	private $config;

	/**
	 * Temporary storage for the current service object.
	 *
	 * @var AbstractEmbedService
	 */
	private $service;

	/**
	 * Description Parameter
	 *
	 * @var string
	 */
	private $description;

	/**
	 * Alignment Parameter
	 *
	 * @var string
	 */
	private $alignment = false;

	/**
	 * Alignment Parameter
	 *
	 * @var string
	 */
	private $vAlignment = false;

	/**
	 * Container Parameter
	 *
	 * @var string
	 */
	private $container = false;

    /**
	 * Creates a new BoilerPlate instance
	 *
	 * @param Parser|null $parser
	 * @param array $args
	 * @param bool $fromTag
	 */
	public function __construct( ?Parser $parser, array $args, bool $fromTag = false ) {
		$this->parser = $parser;
		$this->args = $this->parseArgs( $args, $fromTag );
		//$this->config = MediaWikiServices::getInstance()->getConfigFactory()->makeConfig( 'EmbedVideo' );
	}

    public static function parsePKC(Parser $parser, PPFrame $frame, array $args, bool $fromTag = false ): array {
        // $expandedArgs = [];

        // foreach ( $args as $key => $arg ) {
		// 	$value = trim( $frame->expand( $arg ) );
		// 	if ( $fromTag === true ) {
		// 		$expandedArgs[$key] = $value;
		// 	} else {
		// 		$expandedArgs[] = $value;
		// 	}
		// }

        // var_dump($this->send_6709()); die();
        var_dump('here'); die();

    }

	/**
	 * Outputs the iframe or error message
	 *
	 * @return array
	 */
	public function output(): array {

        return ['test-abcd'=>'output-abcd1234'];
	}

}