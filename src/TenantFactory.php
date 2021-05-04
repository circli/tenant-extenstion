<?php declare(strict_types=1);

namespace Circli\TenantExtension;

interface TenantFactory
{
	/**
	 * @return Tenant[]
	 */
	public function getAllTenants(): array;

	public function configureById(TenantId $tenantId): Tenant;

	public function configureTenant(Tenant $tenant): void;

	public function getCurrentTenant(): Tenant;

	public function createTenantId(string $tenant): TenantId;
}
