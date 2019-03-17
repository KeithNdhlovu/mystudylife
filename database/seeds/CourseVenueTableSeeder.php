<?php

use App\Models\Venue;
use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseVenueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Create Test Venues
            $venues = collect([]);

            $ven_1 = new \StdClass;
            $ven_1->name = 'Van Schaik';
            $ven_1->location = 'Van Schaik Bookstore SOSHANGUVE (TUT)';
            $ven_1->latitude = '-25.540262';
            $ven_1->longitude = '28.0948731';
            $venues->push($ven_1);


            $ven_2 = new \StdClass;
            $ven_2->name = 'Gencor Hall (TUT)';
            $ven_2->location = 'Gencor Hall (TUT)';
            $ven_2->latitude = '-25.541965';
            $ven_2->longitude = '28.095794';
            $venues->push($ven_2);

            $ven_3 = new \StdClass;
            $ven_3->name = 'Building 10-G01';
            $ven_3->location = 'Building 10-G01';
            $ven_3->latitude = '-25.539561';
            $ven_3->longitude = '28.095686';
            $venues->push($ven_3);

            foreach($venues as $venue) {
                Venue::create([
                    'name' => $venue->name,
                    'location' => $venue->location,
                    'latitude' => $venue->latitude,
                    'longitude' => $venue->longitude,
                ]);
            }

        // End Create Test Venues

        // Create Courses
            $courses = collect(['DSO-301BT', 'SSF-101AT', 'PGG-301BT', 'DSY-301BT']);
            $theLab = Venue::where('name', $ven_3->name)->first();

            foreach($courses as $course) {
                Course::create([
                    'name' => $course,
                    'code' => $course,
                    'venue_id' => $theLab->id,
                ]);
            }
        // End Create Courses
    }
}
