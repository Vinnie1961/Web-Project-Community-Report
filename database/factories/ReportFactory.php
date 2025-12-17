<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Report;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Report>
 */
class ReportFactory extends Factory
{

    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $index = 0;
        static $index2 = 0;
        static $index3 = 0;
        static $index4 = 0;


        $titles = [
            'Street Pothole',
            'Scattered Garbage',
            'Leaky bus stop roof',
            'Overfilling gutter'
        ];

        $descriptions = [
            'I hit this pothole earlier today, making my bike swerve dangerously. please fix!',
            'Some garbage truck must of had a leak or something, and scattered garbage all over! 
            They havent bothered coming back to collect it :(',
            'With rainy season coming, this leak ends up wetting half the bench at this bus stop.',
            'Rain from overnight nearly flooded this gutter. That usually doesnt happen.'
        ];

        $locations = [
            'Tomang',
            'Jalan Muhammad',
            'Ujung jalan Cideng',
            'Gang Petak Serani IV'
        ];

        $date_times = [
            '2025-04-03',
            '2025-07-13',
            '2025-09-23',
            '2025-03-20'
        ];

        $images = [
            'images/pothole',
            'images/street',
            'images/busstop',
            'images/gutter'
        ];

        return [
            'title' => $titles[$index++ % count($titles)],
            'description' => $descriptions[$index2++ % count($descriptions)],
            'location' => $locations[$index3++ % count($locations)],
            'date_time' => $date_times[$index4++ % count($date_times)],
            'image' => 'placeholder',
            'status'=> 'Unaddressed',
            
        ];
    }
}
