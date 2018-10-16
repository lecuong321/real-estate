<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');                 
            $table->integer('user_id')->length(11);
            $table->integer('city_id')->length(11)->default(0);
            $table->integer('featured_property')->length(1)->default(0);
            $table->string('property_name'); 
            $table->string('property_slug')->nullable();
            $table->string('property_type');
            $table->string('property_purpose'); 
            $table->string('sale_price')->nullable(); 
            $table->string('rent_price')->nullable(); 
            $table->text('address');
            $table->string('map_latitude');
            $table->string('map_longitude');
            $table->string('bathrooms');
            $table->string('bedrooms');
            $table->string('area')->nullable();
            $table->longtext('description')->nullable();
            $table->text('property_features')->nullable();            
            $table->string('featured_image');
            $table->string('property_images1')->nullable();
            $table->string('property_images2')->nullable();
            $table->string('property_images3')->nullable();
            $table->string('property_images4')->nullable();
            $table->string('property_images5')->nullable(); 
            $table->integer('status')->length(1)->default(1);          
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
        Schema::dropIfExists('properties');
    }
}
