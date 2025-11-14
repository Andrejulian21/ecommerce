<?php

namespace Database\Factories;

use App\Models\brand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class brandFactory extends Factory
{

    protected $model = brand::class;
    public function definition(): array
    {
        $brands = [
            'Apple', 
            'Samsung', 
            'Sony', 
            'LG', 
            'Dell', 
            'HP', 
            'Lenovo', 
            'Asus', 
            'Acer', 
            'Microsoft',
            'Google',
            'Huawei',
            'Xiaomi',
            'OnePlus',
            'Nokia',
            'Motorola',
            'Panasonic',
            'Toshiba',
            'Vivo',
            'Oppo'];
        
        return [
            'name'=> $this->faker->randomElement($brands)
        ];
    }
}
