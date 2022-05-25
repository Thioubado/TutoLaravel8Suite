<?php

/**
 * (c) Boosteur.com v1.02 - 2022.
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// si il y"a un message d'erreur, il faut faire php artisan migrate:fresh

class CreateGroupesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$arr = [
			'un'   => 1,
			'deux' => 2,
		];

		Schema::create('groupes', function (Blueprint $table) {
			$table->id();
			$table->string('nom');
			$table->string('prenom');
			$table->string('address');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('groupes');
	}
}
