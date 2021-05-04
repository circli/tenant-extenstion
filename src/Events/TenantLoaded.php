<?php declare(strict_types=1);

namespace Circli\TenantExtension\Events;

use Circli\TenantExtension\Tenant;

final class TenantLoaded
{
	public function __construct(
		private Tenant $tenant,
	) {}

	public function getTenant(): Tenant
	{
		return $this->tenant;
	}
}
