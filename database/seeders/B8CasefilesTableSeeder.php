<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class B8CasefilesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('b8_casefiles')->delete();
        
        \DB::table('b8_casefiles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'case_identity' => 'tajul-001',
                'description' => 'A tenant in a duplex owned by Shakil, filed a civil lawsuit against her landlord, claiming he had not given her enough notice before raising her rent, citing a new state law that requires a minimum of 90 days’ notice. Shakil argues that the new law applies only to landlords of large multi-tenant properties. When the state court hearing the case reviews the law, he finds that, while it mentions large multi-tenant properties in some context, it is actually quite vague about whether the 90-day provision applies to all landlords. The judge, based on the specific circumstances of Tajul’s case, decides that all landlords are held to the 90-day notice requirement, and rules in Tajul’s favor.

A year later, Frank and Adel have a similar problem. When they sue their landlord, the court must use the previous court’s decision in applying the law. This example of case law refers to two cases heard in the state court, at the same level. The ruling of the first court created case law that must be followed by other courts until or unless either new law is created, or a higher court rules differently.',
                'type' => 'criminal',
                'client_type' => 'prosecutor',
                'client_id' => 1,
                'lawyer_id' => NULL,
                'court_id' => 11,
                'result' => 'waiting',
                'created_at' => '2020-12-25 08:31:33',
                'updated_at' => '2020-12-25 08:31:33',
            ),
            1 => 
            array (
                'id' => 2,
                'case_identity' => 'hasan-002',
                'description' => 'It took nine years and three trips to the Sixth Circuit U.S. Court of Appeals, but clinic students stopped the deportation of a mentally retarded man who had come to the United States with his family at age 14 and lived here for 33 years. Nearly 40 students worked on the case in the Immigration Court, the Board of Immigration Appeals, the Federal District Court in Detroit, and the Sixth Circuit in Cincinnati. At the final hearing, the immigration judge granted a waiver of deportation, restoring the client\'s permanent resident status. Students are now helping the client gain U.S. citizenship.',
                'type' => 'civil',
                'client_type' => 'prosecutor',
                'client_id' => 2,
                'lawyer_id' => NULL,
                'court_id' => 1,
                'result' => 'waiting',
                'created_at' => '2020-12-25 08:33:57',
                'updated_at' => '2020-12-25 08:33:57',
            ),
            2 => 
            array (
                'id' => 3,
                'case_identity' => 'nishat-003',
                'description' => 'Nishat is no ordinary farmer. As part of the growing national movement to find a more environmentally friendly and sustainable way of life, Tasnim began raising goats and chickens on his 1/10th-acre lot in downtown Ypsilanti, Michigan. He did this to bring attention to the movement and as a challenge to a city ordinance that prohibited such activities. Students litigated issues of first impression through the trial and appellate process while Tasnim and others continued to press the city to permit urban farming. Using the leverage of the lawsuit and public support for Tasnim\'s activities, the city ultimately changed its ordinance permitting residents to raise chickens and bees within city limits. Tasnim aptly noted that "the case helped generate support for, and raise awareness of, urban agriculture while, at the same time, giving students a tremendous learning opportunity serving the behind-the-scenes needs of a significant social movement."',
                'type' => 'civil',
                'client_type' => 'prosecutor',
                'client_id' => 3,
                'lawyer_id' => NULL,
                'court_id' => 6,
                'result' => 'waiting',
                'created_at' => '2020-12-25 08:44:02',
                'updated_at' => '2020-12-25 08:44:02',
            ),
            3 => 
            array (
                'id' => 4,
                'case_identity' => 'suraiya-005',
                'description' => 'Civil-Criminal Litigation Clinic students came to the aid of a woman who wanted to clear up a criminal misdemeanor bench warrant. After investigation, students found that she had not one, but at least seven bench warrants for misdemeanors, mostly traffic offenses, going back many years. Her student attorneys tackled her cases one by one, appearing in three different courts more than a dozen times. They eventually secured placement for her in an alternative program. Through creativity and persistence, they helped the client resolve the outstanding cases in a way that permitted her to keep working to support her family.',
                'type' => 'civil',
                'client_type' => 'prosecutor',
                'client_id' => 4,
                'lawyer_id' => NULL,
                'court_id' => 1,
                'result' => 'waiting',
                'created_at' => '2020-12-25 08:45:39',
                'updated_at' => '2020-12-25 08:45:39',
            ),
            4 => 
            array (
                'id' => 5,
                'case_identity' => 'rifat-007',
                'description' => 'The clinic persuaded a federal district court that a state prisoner had been unconstitutionally denied effective assistance of counsel. The state appealed and the students not only wrote the brief to the Sixth Circuit, which covered questions of constitutional law and complex habeas procedure, but one student also co-argued the case. The three-judge panel of the Sixth Circuit reversed the district court\'s grant of the habeas petition. Undeterred, a new student attorney filed a motion for rehearing en banc, which was granted. With the assistance of students, the case was re-argued in front of the entire Sixth Circuit, which ultimately granted the habeas petition. Since his release from prison, the client is busy taking care of his elderly parents and playing with his grandkids.',
                'type' => 'family',
                'client_type' => 'prosecutor',
                'client_id' => 5,
                'lawyer_id' => NULL,
                'court_id' => 7,
                'result' => 'waiting',
                'created_at' => '2020-12-25 08:47:33',
                'updated_at' => '2020-12-25 08:47:33',
            ),
            5 => 
            array (
                'id' => 6,
                'case_identity' => 'binte-009',
                'description' => 'A 20-year-old woman came to the clinic after fleeing her home country under threat of genital mutilation in preparation for a forced marriage to a 60-year-old man. Students conducted an exhaustive investigation and obtained statements from multiple witnesses and experts. Based on that work, students prepared and filed an application for asylum, tackling novel legal issues and showing that their client would not be protected by her government if she were forced to return to her homeland. The client was granted asylum and enjoys her new life in the United States.',
                'type' => 'criminal',
                'client_type' => 'prosecutor',
                'client_id' => 6,
                'lawyer_id' => NULL,
                'court_id' => 5,
                'result' => 'waiting',
                'created_at' => '2020-12-25 08:51:08',
                'updated_at' => '2020-12-25 08:51:08',
            ),
            6 => 
            array (
                'id' => 7,
                'case_identity' => 'khaleda-012',
                'description' => 'A disabled woman in her sixties was faced with a tax foreclosure on the home she had inherited from her mother. Clinic students filed a probate court action to give her clear title to the home and persuaded government authorities that she was eligible for property tax reductions. With clear title and reduced taxes, the woman was able to keep her home. In another case, an elderly woman suffering from a mental disability was referred to the clinic by a community organization because she had been evicted. Clinic students determined that the eviction was invalid and brought a motion to set aside the eviction. Using their investigation and legal research, students were able to negotiate a settlement in which the landlord agreed to move the client into a new apartment.',
                'type' => 'criminal',
                'client_type' => 'defendant',
                'client_id' => 7,
                'lawyer_id' => NULL,
                'court_id' => 6,
                'result' => 'waiting',
                'created_at' => '2020-12-25 08:54:37',
                'updated_at' => '2020-12-25 08:54:37',
            ),
            7 => 
            array (
                'id' => 8,
                'case_identity' => 'fakir-006',
                'description' => 'A prisoner got into an argument with staff over a grievance he had filed about slow mail service. Within days he was transferred to a prison in the Upper Peninsula, 250 miles from his family. The transfer interrupted his therapy, which was required for his upcoming parole. Students took the case to federal district court, alleging that the transfer was in retaliation for the exercise of First Amendment rights. They deposed the staff and supervisors at both prisons, subpoenaed all the transfer records, and used that evidence to defeat the state\'s motion for summary judgment. The case settled for $25,000, even though the prisoner had been returned to the first prison after just 10 days.',
                'type' => 'criminal',
                'client_type' => 'defendant',
                'client_id' => 8,
                'lawyer_id' => NULL,
                'court_id' => 8,
                'result' => 'waiting',
                'created_at' => '2020-12-25 09:03:01',
                'updated_at' => '2020-12-25 09:03:01',
            ),
        ));
        
        
    }
}