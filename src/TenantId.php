<?php declare(strict_types=1);

namespace Circli\TenantExtension;

interface TenantId
{
	public function toString(): string;
}
