<?php declare(strict_types = 1);

namespace PHPStan\Generics;

class GenericsIntegrationTest extends \PHPStan\Testing\LevelsTestCase
{

	public function dataTopics(): array
	{
		return [
			['functions'],
			['invalidReturn'],
			['pick'],
			['varyingAcceptor'],
			['classes'],
			['variance'],
			['bug2577'],
			['bug2620'],
			['bug2622'],
			['bug2627'],
		];
	}

	public function getDataPath(): string
	{
		return __DIR__ . '/data';
	}

	public function getPhpStanExecutablePath(): string
	{
		return __DIR__ . '/../../../bin/phpstan';
	}

	public function getPhpStanConfigPath(): string
	{
		return __DIR__ . '/generics.neon';
	}

}
