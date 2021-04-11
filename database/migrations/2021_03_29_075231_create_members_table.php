<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string ('first_name',);
            $table->string ('last_name',);
            $table->date('dob',);
            $table->string('address',);
            $table->string('gender',);
            $table->integer('voter_id',);
            $table->integer('phon_no',);
            $table->string('email',);
            $table->string('account_no',);
            $table->string('branch',);
            $table->text('image',)->nullable();
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
        Schema::dropIfExists('members');
    }
}
