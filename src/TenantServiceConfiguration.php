<?php declare(strict_types=1);

namespace Circli\TenantExtension;

/**
 * @template T
 */
interface TenantServiceConfiguration
{
	/**
	 * @param array<string, mixed> $config
	 * @return T
	 */
	public function configure(array $config);
}
