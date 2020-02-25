<?php
namespace Abs\ServiceInvoicePkg\Database\Seeds;

use App\Permission;
use Illuminate\Database\Seeder;

class ServiceInvoicePermissionSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$permissions = [
			//MASTER > SERVICE ITEM CATEGORIES
			3000 => [
				'display_order' => 10,
				'parent_id' => 2,
				'name' => 'service-item-categories',
				'display_name' => 'Service Item Categories',
			],
			3001 => [
				'display_order' => 1,
				'parent_id' => 3000,
				'name' => 'add-service-item-category',
				'display_name' => 'Add',
			],
			3002 => [
				'display_order' => 2,
				'parent_id' => 3000,
				'name' => 'edit-service-item-category',
				'display_name' => 'Edit',
			],
			3003 => [
				'display_order' => 3,
				'parent_id' => 3000,
				'name' => 'delete-service-item-category',
				'display_name' => 'Delete',
			],

			//MASTER > SERVICE ITEMS
			3020 => [
				'display_order' => 11,
				'parent_id' => 2,
				'name' => 'service-items',
				'display_name' => 'Service Items',
			],
			3021 => [
				'display_order' => 1,
				'parent_id' => 3020,
				'name' => 'add-service-item',
				'display_name' => 'Add',
			],
			3022 => [
				'display_order' => 2,
				'parent_id' => 3020,
				'name' => 'edit-service-item',
				'display_name' => 'Edit',
			],
			3023 => [
				'display_order' => 3,
				'parent_id' => 3020,
				'name' => 'delete-service-item',
				'display_name' => 'Delete',
			],

			//MASTER > SERVICE INVOICE
			3040 => [
				'display_order' => 12,
				'parent_id' => NULL,
				'name' => 'service-invoices',
				'display_name' => 'Service Invoices',
			],
			3041 => [
				'display_order' => 1,
				'parent_id' => 3040,
				'name' => 'add-service-invoice',
				'display_name' => 'Add',
			],
			3042 => [
				'display_order' => 2,
				'parent_id' => 3040,
				'name' => 'edit-service-invoice',
				'display_name' => 'Edit',
			],
			3043 => [
				'display_order' => 3,
				'parent_id' => 3040,
				'name' => 'delete-service-invoice',
				'display_name' => 'Delete',
			],

			3044 => [
				'display_order' => 3,
				'parent_id' => 3040,
				'name' => 'create-service-invoice-for-all-outlets',
				'display_name' => 'Created for All Outlets',
			],
			3045 => [
				'display_order' => 4,
				'parent_id' => 3040,
				'name' => 'create-cn',
				'display_name' => 'Create CN',
			],
			3046 => [
				'display_order' => 5,
				'parent_id' => 3040,
				'name' => 'create-dn',
				'display_name' => 'Create DN',
			],
			3047 => [
				'display_order' => 6,
				'parent_id' => 3040,
				'name' => 'view-all-cn-dn',
				'display_name' => 'View All',
			],
			3048 => [
				'display_order' => 7,
				'parent_id' => 3040,
				'name' => 'view-own-cn-dn',
				'display_name' => 'View Own Only',
			],
			3049 => [
				'display_order' => 8,
				'parent_id' => 3040,
				'name' => 'view-outlet-based-cn-dn',
				'display_name' => 'View Outlet Based',
			],
			3050 => [
				'display_order' => 9,
				'parent_id' => 3040,
				'name' => 'import-cn-dn',
				'display_name' => 'Import',
			],

		];

		foreach ($permissions as $permission_id => $permsion) {
			$permission = Permission::firstOrNew([
				'id' => $permission_id,
			]);
			$permission->fill($permsion);
			$permission->save();
		}
		//$this->call(RoleSeeder::class);

	}
}