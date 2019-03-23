<?php

use App\Models\Venue;
use App\Models\Course;
use App\Models\Subject;
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
            $course = Course::whereCode('NDCY03')->first();
            
            if(!$course) {
                $course = new Course;
                $course->name = 'NATIONAL DIPLOMA: ENGINEERING: COMPUTER SYSTEMS';
                $course->code = 'NDCY03';
                $course->save();
            }

            // Link corresponding subjects
                $theLab = Venue::whereName($ven_3->name)->first();
                $subject = Subject::whereCode('COS101T')->first();
                
                if (!$subject) {

                    $subject = new Subject;
                    $subject->name = 'Communication Skills I';
                    $subject->code = 'COS101T';
                    $subject->semester = 1;
                    $subject->course_id = $course->id;
                    $subject->venue_id = $theLab->id;
                    $subject->save();
                }

                $subject = Subject::whereCode('CSK101T')->first();
                if (!$subject) {

                    $subject = new Subject;
                    $subject->name = 'Computer Skills I';
                    $subject->code = 'CSK101T';
                    $subject->semester = 1;
                    $subject->course_id = $course->id;
                    $subject->venue_id = $theLab->id;
                    $subject->save();
                }

                $subject = Subject::whereCode('DSY131C')->first();
                if (!$subject) {

                    $subject = new Subject;
                    $subject->name = 'Digital Systems I';
                    $subject->code = 'DSY131C';
                    $subject->semester = 1;
                    $subject->course_id = $course->id;
                    $subject->venue_id = $theLab->id;
                    $subject->save();
                }

                $subject = Subject::whereCode('EEN111C')->first();
                if (!$subject) {

                    $subject = new Subject;
                    $subject->name = 'Electrical Engineering I';
                    $subject->code = 'EEN111C';
                    $subject->semester = 1;
                    $subject->course_id = $course->id;
                    $subject->venue_id = $theLab->id;
                    $subject->save();
                }

                $subject = Subject::whereCode('ELC111B')->first();
                if (!$subject) {
                    
                    $subject = new Subject;
                    $subject->name = 'Electronics I';
                    $subject->code = 'ELC111B';
                    $subject->semester = 1;
                    $subject->course_id = $course->id;
                    $subject->venue_id = $theLab->id;
                    $subject->save();
                }

                $subject = Subject::whereCode('MAT141F')->first();
                if (!$subject) {
                    
                    $subject = new Subject;
                    $subject->name = 'Mathematics I';
                    $subject->code = 'MAT141F';
                    $subject->semester = 1;
                    $subject->course_id = $course->id;
                    $subject->venue_id = $theLab->id;
                    $subject->save();
                }

                $subject = Subject::whereCode('PGG111T')->first();
                if (!$subject) {
                    
                    $subject = new Subject;
                    $subject->name = 'Programming I';
                    $subject->code = 'PGG111T';
                    $subject->semester = 1;
                    $subject->course_id = $course->id;
                    $subject->venue_id = $theLab->id;
                    $subject->save();
                }
            // End linking subjects
        // End Create Courses
    }
}
