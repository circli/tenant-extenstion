<?php declare(strict_types=1);

namespace Circli\TenantExtension;

interface TenantRepository
{
	/**
	 * @return Tenant[]
	 */
	public function findAll();

	public function findById(TenantId $id): Tenant;

	public function haveTenant(): bool;
}
