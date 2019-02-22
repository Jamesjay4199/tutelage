<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/*
 * A Foreign Key Management Migration
 */
class AddForeignKeys extends Migration
{
    /**
     * Add all foreign Indexes here
     * 
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('lga_id')->references('id')->on('states');
        });

        Schema::table('lgas', function (Blueprint $table) {
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
        });

        Schema::table('courses', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });

        Schema::table('reviews', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('tutor_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('user_course', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
        });

        Schema::table('user_role', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('courses')->onDelete('cascade');
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('prices', function (Blueprint $table) {
            $table->foreign('tutor_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('kycs', function (Blueprint $table) {
            $table->foreign('tutor_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('questions', function (Blueprint $table) {
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
        });

        Schema::table('options', function (Blueprint $table) {
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
        });

        Schema::table('results', function (Blueprint $table) {
            $table->foreign('tutor_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
        });
    }

    /**
     * Remove all the foreign indexes previously added
     * 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_state_id_foreign');
            $table->dropForeign('users_lga_id_foreign');
        });

        Schema::table('lgas', function (Blueprint $table) {
            $table->dropForeign('lgas_state_foreign');
        });

        Schema::table('courses', function (Blueprint $table) {
            $table->dropForeign('courses_category_id_foreign');
        });

        Schema::table('reviews', function (Blueprint $table) {
            $table->dropForeign('reviews_user_id_foreign');
            $table->dropForeign('reviews_tutor_id_foreign');
        });

        Schema::table('user_course', function (Blueprint $table) {
            $table->dropForeign('user_course_user_id_foreign');
            $table->dropForeign('user_course_course_id_foreign');
        });

        Schema::table('user_role', function (Blueprint $table) {
            $table->dropForeign('user_role_user_id_foreign');
            $table->dropForeign('user_role_role_id_foreign');
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign('posts_user_id_foreign');
        });

        Schema::table('prices', function (Blueprint $table) {
            $table->dropForeign('prices_tutor_id_foreign');
        });

        Schema::table('kycs', function (Blueprint $table) {
            $table->dropForeign('kycs_tutor_id_foreign');
        });

        Schema::table('questions', function (Blueprint $table) {
            $table->dropForeign('questions_course_id_foreign');
        });

        Schema::table('options', function (Blueprint $table) {
            $table->dropForeign('options_question_id_foreign');
        });
        
        Schema::table('results', function (Blueprint $table) {
            $table->dropForeign('results_tutor_id_foreign');
            $table->dropForeign('results_course_id_foreign');
        });
    }
}
