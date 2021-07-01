<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('profile_id')->constrained('profiles');
            $table->foreignId('product_ad_id')->nullable()->constrained('product_ads');
            $table->foreignId('keyword_id')->nullable()->constrained('keywords');
            $table->foreignId('campaign_id')->nullable()->constrained('campaigns');
            $table->date('report_date');
            $table->string('asin')->charset('utf8')->collation('utf8_unicode_ci')->nullable();
            $table->integer('impressions');
            $table->decimal('averageImpressionPosition',8,2);
            $table->decimal('cost',8,2);
            $table->decimal('currency',8,2)->nullable();
            $table->decimal('units1d',8,2)->nullable();
            $table->decimal('units7d',8,2)->nullable();
            $table->decimal('units14d',8,2)->nullable();
            $table->decimal('units30d',8,2)->nullable();
            $table->decimal('sales1d',8,2);
            $table->decimal('sales14d',8,2)->nullable();
            $table->decimal('sales30d',8,2);
            $table->decimal('sales1dSameSKU',8,2);
            $table->decimal('sales7dSameSKU',8,2);
            $table->decimal('sales14dSameSKU',8,2)->nullable();
            $table->decimal('sales30dSameSKU',8,2);
            $table->decimal('conversions1d',8,2);
            $table->decimal('conversions7d',8,2);
            $table->decimal('conversions14d',8,2)->nullable();
            $table->decimal('conversions30d',8,2);
            $table->decimal('conversions1dSameSKU',8,2);
            $table->decimal('conversions7dSameSKU',8,2);
            $table->decimal('conversions14dSameSKU',8,2)->nullable();
            $table->decimal('conversions30dSameSKU',8,2);
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
        Schema::dropIfExists('reports');
    }
}
