<?php declare(strict_types=1);

namespace Circli\TenantExtension;

interface Tenant
{
	public function getId(): TenantId;
}
