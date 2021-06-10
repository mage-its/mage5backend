<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::enableForeignKeyConstraints();
        Schema::create('emails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('from_email', 100)->default('[]');
            $table->string('from_name', 100)->default('[]');
            $table->json('to');
            $table->json('cc')->nullable();
            $table->json('bcc')->nullable();
            $table->json('view_data')->nullable();
            $table->boolean('use_template')->default(false);
            $table->unsignedBigInteger('email_template_id')->nullable();
            $table->text('content')->nullable();
            $table->timestamp('send_at')->nullable();
            $table->timestamp('scheduled_at')->nullable();
            $table->enum('status', ['failed', 'success']);
            $table->timestamps();

            $table->foreign('email_template_id')
                ->references('id')
                ->on('email_templates')
                ->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emails');
    }
}
