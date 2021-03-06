<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Headers
        DB::table('headers')->insert([
            'tag_name' => 'name',
            'value' => 'shiva',
        ]);
        DB::table('headers')->insert([
            'tag_name' => 'email',
            'value' => 'abc@abc.com',
        ]);

        //sections
        DB::table('sections')->insert([
            'name' => 'Headers',
            'type' => 'Headers',
            'short_name' => 'Headers',
        ]);
        DB::table('sections')->insert([
            'name' => 'Career Highlights',
            'type' => 'single',
            'short_name' => 'CH',
        ]);
        DB::table('sections')->insert([
            'name' => 'Career Achievements',
            'type' => 'single',
            'short_name' => 'CA', 
        ]);
        DB::table('sections')->insert([
            'name' => 'Professional Experience',
            'type' => 'projects',
            'short_name' => 'PA',  
        ]);
        DB::table('sections')->insert([
            'name' => 'Education Qualification',
            'type' => 'Educations',
            'short_name' => 'EQ',  
        ]);
        DB::table('sections')->insert([
            'name' => 'Technical Skills',
            'type' => 'Another',
            'short_name' => 'Technical',     
        ]);

        //projects
        DB::table('projects')->insert([
            'name' => 'Orbit Remit',
            'desc' => 'Money Transfer Company',
            'duration' => 'Oct 2015 to Present',
            'clients' => '',
            'outsourced' => '',
            'short_name' => 'Orbit',  
        ]);

        DB::table('projects')->insert([
            'name' => 'FishPond Limited',
            'desc' => 'It is No. 1 company in NZ',
            'duration' => 'Oct 2012 to Spet 2014',
            'clients' => '',
            'outsourced' => '',
            'short_name' => 'FishPond',  
        ]);

        //Education
        DB::table('educations')->insert([
            'course_name' => 'PG. DIploma',
            'uni_name' => 'Unitec',
            'year' => 'Oct 2014 to Nov. 2015',
            'percentage_marks' => '89%',
        ]);

        //tech_types
        DB::table('tech_types')->insert([
            'name' => 'ReactJS',
        ]);

       

        //epitome_types
        DB::table('epitome_types')->insert([
            'name' => 'MYREACTJS_RESUME',
        ]);

        //tech_content
        DB::table('tech_content')->insert([
            'tech_types_id' => 1,
            'content' => '5 Years Of experience in the React JS and Developed many modules',
            'section_id' => 2,
            'project_id' => 0,
        ]);
        DB::table('tech_content')->insert([
            'tech_types_id' => 1,
            'content' => '5000 Years Of experience in the React JS and Developed many modules',
            'section_id' => 3,
            'project_id' => 0,
        ]);
        DB::table('tech_content')->insert([
            'tech_types_id' => 1,
            'content' => 'Section 1 and prject 1  Years Of experience in the React JS and Developed many modules',
            'section_id' => 4,
            'project_id' => 1,
        ]);

        DB::table('tech_content')->insert([
            'tech_types_id' => 1,
            'content' => 'Section 1 and prject 2  Years Of experience in the React JS and Developed many modules',
            'section_id' => 4,
            'project_id' => 2,
        ]);

         //template_types
        DB::table('template_types')->insert([
            'name' => 'My REACTJS with extra Modules ',
        ]);

        //template_content
        //template_content -- Headers
        DB::table('template_content')->insert([
            'template_types_id' => 1,
            'tech_content_id' => 0,
            'section_id' => 1,
            'project_id' => 0,
            'tech_types_id' => 0,
            'education_id' => 0,
            'header_id' => 1,
        ]);
        DB::table('template_content')->insert([
            'template_types_id' => 1,
            'tech_content_id' => 0,
            'section_id' => 1,
            'project_id' => 0,
            'tech_types_id' => 0,
            'education_id' => 0,
            'header_id' => 2,
        ]);

        //template_content -- Education
        DB::table('template_content')->insert([
            'template_types_id' => 1,
            'tech_content_id' => 0,
            'section_id' => 5,
            'project_id' => 0,
            'tech_types_id' => 0,
            'education_id' => 1,
            'header_id' => 0,
        ]);

        //template_content -- CH
        DB::table('template_content')->insert([
            'template_types_id' => 1,
            'tech_content_id' => 1,
            'section_id' => 2,
            'project_id' => 0,
            'tech_types_id' => 1,
            'education_id' => 0,
            'header_id' => 0,
        ]);

        //template_content -- CA
        DB::table('template_content')->insert([
            'template_types_id' => 1,
            'tech_content_id' => 2,
            'section_id' => 3,
            'project_id' => 0,
            'tech_types_id' => 1,
            'education_id' => 0,
            'header_id' => 0,
        ]);

        //template_content -- Orbit
        DB::table('template_content')->insert([
            'template_types_id' => 1,
            'tech_content_id' => 3,
            'section_id' => 4,
            'project_id' => 1,
            'tech_types_id' => 1,
            'education_id' => 0,
            'header_id' => 0,
        ]);

        //template_content -- Fish
        DB::table('template_content')->insert([
            'template_types_id' => 1,
            'tech_content_id' => 4,
            'section_id' => 4,
            'project_id' => 2,
            'tech_types_id' => 1,
            'education_id' => 0,
            'header_id' => 0,
        ]);

    }
}
