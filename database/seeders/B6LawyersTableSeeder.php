<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class B6LawyersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('b6_lawyers')->delete();
        
        \DB::table('b6_lawyers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'profile_bio' => 'Mr. Sakib Sikder is a seasoned commercial & corporate counsel having over 13 years of legal experiences. He developed his core expertise on Commercial, Indirect Taxation and Company Law. Later on his carrier, Mr. Sakib developed expertise on telecommunication laws, intellectual property laws, indirect tax litigations, merger & acquisitions and regulatory licensing. Mr. Sakib is currently working for foreign and local investors on number of Greenfield projects.

Mr. Sakib has vast expertise in conducting litigations before the High Court Division, Customs and VAT Appellate Tribunal & Labour Tribunals in Bangladesh. He also participates in hearing before Magistrate Courts and District Courts in Bangladesh.

Mr. Sakib is a Member of the Lincoln’s Inn & an Advocate of the Supreme Court of Bangladesh. Mr. Sakib completed his LL.M in International Business Law from City University of London & LL.B (Hons) from University of London. He has also undertaken number of professional courses including PGDL in Professional Studies from City University of London; Rethinking International Taxation from Leiden University, Sweden and Finance from Non Finance Professional from University of California, Irvine. Mr. Sakib is an Associate of Chartered Institute of Arbitrators, UK.',
                'user_id' => 13,
                'court_id' => NULL,
                'type' => 'advocate',
                'specialties_id' => 8,
                'member_id' => 2200,
                'ratings' => 0,
                'reviews' => 0,
                'cases' => 0,
                'admin_approval' => 0,
                'nid_front' => 'nid_front.png',
                'nid_back' => 'nid_back.png',
                'success_rate' => 0.0,
                'created_at' => '2020-12-24 17:13:21',
                'updated_at' => '2020-12-24 18:04:44',
            ),
            1 => 
            array (
                'id' => 2,
            'profile_bio' => 'Afrin Ahmed is an Advocate having 13 years of professional experience in corporate legal field. She has completed her Diploma-in-Law from University of London and did her LL.B (Hons.) from University of Wolverhampton, UK. In her professional life, she has worked in Juris Counsel with Advocate Tawfique Nawaz as well as a Legal Associate in Syed Ishtiaq Ahmed and Associates in her early career. She was the Senior Legal Counsel at Bangladesh International Arbitration Center (BIAC) for 6 years which is a project funded by IFC (World Bank). She was involved in policy making, International & local training arrangements & administration, facilitation of arbitration and mediation and communication & PR with stakeholders including Government, Corporate & International Organizations.

In addition to that during her 2 years at Rancon Group, she was involved in providing legal opinions & advice, strategies & planning, company policy making, evaluating processes & finding gaps, monitoring and ensuring compliance and managing legal team in their 13 SBUs. She is an Associate Member of the Chartered Institute of Arbitrators (CIArb), U.K. She get appointed as the International Consultant of Kunming International Commercial Arbitration Service Centre, Kunming, China in 2019. She is currently holding the position as a Partner at Jural Acuity, a renowned Law Firm situated in Banani, Dhaka, Bangladesh. Apart from her the legal practice she provides trainings in various institutions and took part in seminars on ADR. She facilitates ADR for Bangladesh International Arbitration Centre (BIAC) and Bangladesh Employers’ Federation (BEF). She also trained high officials of KAFCO (Karnaphuli Fertilizer Company Limited) in Chottogram, Dhaka International University, Bhuiyan Academy, Bangladesh Security Exchange Commission (BSEC), South East University, Daffodil University, Eastern University, London College of Legal Studies (LCLS- South) and many more.

She was born in UK and worked in the Administration Department at the National Health Service (NHS) in her early career.',
                'user_id' => 14,
                'court_id' => NULL,
                'type' => 'advocate',
                'specialties_id' => 2,
                'member_id' => 3133,
                'ratings' => 0,
                'reviews' => 0,
                'cases' => 0,
                'admin_approval' => 0,
                'nid_front' => 'nid_front.png',
                'nid_back' => 'nid_back.png',
                'success_rate' => 0.0,
                'created_at' => '2020-12-24 17:41:14',
                'updated_at' => '2020-12-24 18:12:36',
            ),
            2 => 
            array (
                'id' => 3,
                'profile_bio' => 'Mr. Saifullah has extensive knowledge in commercial laws and corporate practice. He regularly assists the chamber in drafting commercial agreements, dealing with corporate clients and providing opinion on complex commercial issues including dispute settlement, contractual issues and debt recovery for foreign clients.  He has also keen interest on dealing with international trade and customs related disputes.',
                'user_id' => 15,
                'court_id' => NULL,
                'type' => 'barrister',
                'specialties_id' => 12,
                'member_id' => 1000,
                'ratings' => 0,
                'reviews' => 0,
                'cases' => 0,
                'admin_approval' => 0,
                'nid_front' => 'nid_front.png',
                'nid_back' => 'nid_back.png',
                'success_rate' => 0.0,
                'created_at' => '2020-12-24 17:46:04',
                'updated_at' => '2020-12-24 17:54:37',
            ),
            3 => 
            array (
                'id' => 4,
                'profile_bio' => 'Mr. Molla has more than 8 years of professional experiences including practice, teaching and research. He is an enrolled Advocate of the Dhaka Judge Court. He is skilled in criminal cases, civil suits and litigation in lower court, tribunals, revenue authority, land administration authority and registration authority. He has also extensive knowledge in property vetting and land documentation. Mr. Sabuj is currently conducting a number of Civil and Criminal cases  for the Chamber.',
                'user_id' => 16,
                'court_id' => NULL,
                'type' => 'advocate',
                'specialties_id' => 1,
                'member_id' => 5555,
                'ratings' => 0,
                'reviews' => 0,
                'cases' => 0,
                'admin_approval' => 0,
                'nid_front' => 'nid_front.png',
                'nid_back' => 'nid_back.png',
                'success_rate' => 0.0,
                'created_at' => '2020-12-24 18:18:21',
                'updated_at' => '2020-12-24 18:22:11',
            ),
            4 => 
            array (
                'id' => 5,
            'profile_bio' => 'Mr. Iqbal has completed his LL.B. (Hons.) and LL.M accordingly in the year 2017 and 2019. Now he is working as an associate in Jural Acuity. His major responsibilities include providing legal opinions and obtaining regulatory approvals such as works in BIDA, RJSC, IRC, Tax certificates etc. He has also gathered experience regarding Trademark and Patent registration.',
                'user_id' => 17,
                'court_id' => NULL,
                'type' => 'advocate',
                'specialties_id' => 12,
                'member_id' => 7777,
                'ratings' => 0,
                'reviews' => 0,
                'cases' => 0,
                'admin_approval' => 0,
                'nid_front' => 'nid_front.png',
                'nid_back' => 'nid_back.png',
                'success_rate' => 0.0,
                'created_at' => '2020-12-24 18:27:06',
                'updated_at' => '2020-12-24 18:32:37',
            ),
            5 => 
            array (
                'id' => 6,
            'profile_bio' => 'Mr. Rasel Miah has completed his LL.B. (Hons.) in 2018.He has joined the chamber as an associate. His major responsibilities, Include providing legal opinions and obtaining regulatory approvals such as works in BIDA, RJSC, IRC, Tax certificates etc. He has also gathered experience regarding property vetting, conducting property investigation and registration formalities.',
                'user_id' => 18,
                'court_id' => NULL,
                'type' => 'advocate',
                'specialties_id' => 12,
                'member_id' => 9595,
                'ratings' => 0,
                'reviews' => 0,
                'cases' => 0,
                'admin_approval' => 0,
                'nid_front' => 'nid_front.png',
                'nid_back' => 'nid_back.png',
                'success_rate' => 0.0,
                'created_at' => '2020-12-24 18:37:19',
                'updated_at' => '2020-12-24 18:46:05',
            ),
            6 => 
            array (
                'id' => 7,
                'profile_bio' => 'Ms. Ashrafun Nahar completed her LL.M in 2014. She is
a practicing Advocate in Dhaka District Court and
Magistrate Court. She has started her carrier with a Senior
Advocate practicing Civil laws in the District Court, where
she gathered her experience in Drafting and Civil
Litigation. She has also handled a number of Criminal and
family related cases. She joined Jural Acuity in 2019 and is
currently looking after drafting and litigation management
for the firm.',
                'user_id' => 19,
                'court_id' => NULL,
                'type' => 'advocate',
                'specialties_id' => 7,
                'member_id' => 6666,
                'ratings' => 0,
                'reviews' => 0,
                'cases' => 0,
                'admin_approval' => 0,
                'nid_front' => 'nid_front.png',
                'nid_back' => 'nid_back.png',
                'success_rate' => 0.0,
                'created_at' => '2020-12-24 18:50:26',
                'updated_at' => '2020-12-24 18:53:40',
            ),
            7 => 
            array (
                'id' => 8,
                'profile_bio' => 'Mr. Mujibul Haque vital role for the company in relation to managing the work relating to work permit  & renewal, E Visa, PI Visa, On Arrival Visa, VIP Protocol.  Branch Office Registration, SB /NSI Clearance, Security Clearance, Visa renewals License Registrations and Renewal etc. Mr. Mujib also works closely with the firm in order to collect property related search reports including Khatians, Parchas, Mutation Records, Lease Deed, Registration Documents for the Company',
                'user_id' => 20,
                'court_id' => NULL,
                'type' => 'advocate',
                'specialties_id' => 8,
                'member_id' => 8568,
                'ratings' => 0,
                'reviews' => 0,
                'cases' => 0,
                'admin_approval' => 0,
                'nid_front' => 'nid_front.png',
                'nid_back' => 'nid_back.png',
                'success_rate' => 0.0,
                'created_at' => '2020-12-24 18:58:05',
                'updated_at' => '2020-12-24 19:02:31',
            ),
            8 => 
            array (
                'id' => 9,
                'profile_bio' => NULL,
                'user_id' => 21,
                'court_id' => NULL,
                'type' => NULL,
                'specialties_id' => NULL,
                'member_id' => NULL,
                'ratings' => 0,
                'reviews' => 0,
                'cases' => 0,
                'admin_approval' => 0,
                'nid_front' => 'nid_front.png',
                'nid_back' => 'nid_back.png',
                'success_rate' => 0.0,
                'created_at' => '2020-12-24 19:07:41',
                'updated_at' => '2020-12-24 19:07:41',
            ),
            9 => 
            array (
                'id' => 10,
                'profile_bio' => 'Advocate Rahman is a young and talented lawyer with expertise in trial courts & service matters. He was offered partnership based on his long list of clientelle and expertise in handling company set-up and licensing related issues in addition to his trial excellence. Mr. Rahman had completed his LLB form the reputed Stamford University. At present, he assists in managing the firm\'s case load and being in charge of trial court cases and lower court advocacy.


He advises several local and international companies on Intellectual Property and brand protection matters.



Mr. Rahman is also an expert on family matter litigations & mediations. Apart from his regular work, Mr. Rahman also takes part in pro-bono employment tribunal litigations.',
                'user_id' => 22,
                'court_id' => NULL,
                'type' => 'advocate',
                'specialties_id' => 10,
                'member_id' => 2,
                'ratings' => 0,
                'reviews' => 0,
                'cases' => 0,
                'admin_approval' => 0,
                'nid_front' => 'nid_front.png',
                'nid_back' => 'nid_back.png',
                'success_rate' => 0.0,
                'created_at' => '2020-12-24 19:30:20',
                'updated_at' => '2020-12-24 19:35:27',
            ),
        ));
        
        
    }
}