<?php

/*
 * This file is part of the eTrack web application.
 *
 * (c) City College Plymouth
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class UnitTableSeeder extends Seeder
{
    public function run()
    {
        $date = new DateTime;

        /*
         * BTEC Nationals (2010)
         * Business Units
         */
        DB::table('unit')->insert(
            array(
                array(
                    'code' => 'Y/502/5408',
                    'name' => 'The Business Environment',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'D/502/5409',
                    'name' => 'Business Resources',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'Y/502/5411',
                    'name' => 'Introduction to Marketing',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'H/502/5413',
                    'name' => 'Business Communication',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'M/502/5415',
                    'name' => 'Business Accounting',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'T/502/5416',
                    'name' => 'Financial Accounting',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'J/502/5419',
                    'name' => 'Management Accounting',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'F/502/5421',
                    'name' => 'Accounting Systems',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'Y/502/5425',
                    'name' => 'Creative Product Promotion',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'H/502/5427',
                    'name' => 'Market Research in Business',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'K/502/5431',
                    'name' => 'Relationship Marketing',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'M/502/5432',
                    'name' => 'Internet Marketing in Business',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'A/502/5434',
                    'name' => 'Recruitment and Selection in Business',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'L/502/5437',
                    'name' => 'Aspects of Employment Law',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'H/502/5444',
                    'name' => 'Development Planning for a Career in Business',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'K/502/5445',
                    'name' => 'Human Resource Management in Business',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'A/502/5448',
                    'name' => 'Training in the Business Workplace',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'F/502/5449',
                    'name' => 'Managing a Business Event',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'T/502/5450',
                    'name' => 'Developing Teams in Business',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'A/502/5451',
                    'name' => 'Managing Physical Resources in a Business Environment',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'F/502/5452',
                    'name' => 'Aspects of Contract and Business Law',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'J/502/5453',
                    'name' => 'Aspects of Civil Liability for Business',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'L/502/5454',
                    'name' => 'Aspects of the Legal System and Law-making Process',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'R/502/5455',
                    'name' => 'Aspects of Criminal Law Relating to Business',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'Y/502/5456',
                    'name' => 'Supporting Business Activities',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'D/502/5457',
                    'name' => 'Managing Business Information',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'H/502/5458',
                    'name' => 'Understanding Health and Safety in the Business Workplace',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'K/502/5459',
                    'name' => 'Business Project Management',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'J/502/5503',
                    'name' => 'Understanding Retailing',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'L/502/5504',
                    'name' => 'Visual Merchandising in Retail',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'R/502/5505',
                    'name' => 'Fashion Retailing',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'Y/502/5506',
                    'name' => 'Food Retailing',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'L/502/5485',
                    'name' => 'The Impact of Communications Technology on Business',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'Y/502/5490',
                    'name' => 'Website Design Strategy',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'K/502/5493',
                    'name' => 'Supply Chain and Stock Management',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'Y/502/5487',
                    'name' => 'Starting a Small Business',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'A/502/5496',
                    'name' => 'Understanding Business Ethics',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'T/502/5500',
                    'name' => 'Business and the Economic Environment',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'F/502/5502',
                    'name' => 'International Business',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'D/502/5507',
                    'name' => 'Computer Applications for Financial Management',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'K/502/5509',
                    'name' => 'Business Markets and the Economy',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'H/600/8606',
                    'name' => 'Quality Management Systems in Logistics',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'Y/600/8599',
                    'name' => 'Transport Planning',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'F/600/8600',
                    'name' => 'Operational Management of Road Transport',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'Y/600/8604',
                    'name' => 'Transport Systems and the Environment',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'K/600/8607',
                    'name' => 'Supply Chain Organisation',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 15.3,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
            )
        );

        /*
         * BTEC Nationals (2010
         * Engineering Units
         */
        DB::table('unit')->insert(
            array(
                array(
                    'code' => 'T/600/0249',
                    'name' => 'Health and Safety in the Engineering Workplace',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 12,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'M/600/0251',
                    'name' => 'Communications for Engineering Technicians',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 12,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'T/600/0252',
                    'name' => 'Engineering Project',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 12,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'A/600/0253',
                    'name' => 'Mathematics for Engineering Technicians',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 12,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'F/600/0254',
                    'name' => 'Mechanical Principles and Applications',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 12,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'J/600/0255',
                    'name' => 'Electrical and Electronic Principles',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 12,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'R/600/0257',
                    'name' => 'Business Operations in Engineering',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 12,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'Y/600/0258',
                    'name' => 'Engineering Design',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 12,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'D/600/0259',
                    'name' => 'Commercial Aspects of Engineering Organisations',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 12,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'R/600/0260',
                    'name' => 'Properties and Applications of Engineering Materials',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 12,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
            )
        );

        /*
         * BTEC Nationals (2010)
         * IT Units
         */
        DB::table('unit')->insert(
            array(
                array(
                    'code' => 'F/601/7233',
                    'name' => 'Communication and Employability Skills for IT',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'M/601/7261',
                    'name' => 'Computer Systems',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'H/601/7256',
                    'name' => 'Information Systems',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'K/601/7260',
                    'name' => 'Impact of the Use of IT on Business Systems',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'K/601/7663',
                    'name' => 'Managing Networks',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'L/601/6585',
                    'name' => 'Software Design and Development',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'T/601/7312',
                    'name' => 'Organisational Systems Security',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'A/601/7313',
                    'name' => 'e-Commerce',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'R/601/7320',
                    'name' => 'Computer Networks',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'F/601/7264',
                    'name' => 'Communication Technologies',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'F/601/7278',
                    'name' => 'Systems Analysis and Design',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'J/601/7279',
                    'name' => 'IT Technical Support',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'A/601/7280',
                    'name' => 'IT Systems Troubleshooting and Repair',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'F/601/7281',
                    'name' => 'Event Driven Programming',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'J/601/7282',
                    'name' => 'Object Oriented Programming',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'L/601/7283',
                    'name' => 'Procedural Programming',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'Y/601/7321',
                    'name' => 'Project Planning with IT',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'J/601/6617',
                    'name' => 'Database Design',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'J/601/2003',
                    'name' => 'Computer Systems Architecture',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'Y/601/7660',
                    'name' => 'Client Side Customisation of Web Pages',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'H/601/7323',
                    'name' => 'Data Analysis and Design',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'K/601/7324',
                    'name' => 'Developing Computer Games',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'T/601/7326',
                    'name' => 'Human Computer Interaction',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'A/601/7327',
                    'name' => 'Controlling Systems Using IT',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'J/601/7329',
                    'name' => 'Maintaining Computer Systems',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'L/601/7655',
                    'name' => 'Mathematics for IT Practitioners',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'A/601/0443',
                    'name' => 'Web Server Scripting',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'Y/601/6623',
                    'name' => 'Website Production',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'H/601/7290',
                    'name' => 'Installing and Upgrading Software',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'M/601/6630',
                    'name' => 'Digital Graphics',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'D/601/7658',
                    'name' => 'Computer Animation',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'J/601/7332',
                    'name' => 'Networked Systems Security',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                // Units excluded as they are included in the business subject sector.
                // array('code' => 'Y/502/5456', 'name' => 'Supporting Business Activity', 'credit_value' => 10, 'glh' => 60, 'level' => 3, 'subject_sector_id' => 18, 'created_at' => $date, 'updated_at' => $date),
                //
                // array('code' => 'D/502/5409', 'name' => 'Business Resources', 'credit_value' => 10, 'glh' => 60, 'level' => 3, 'subject_sector_id' => 18, 'created_at' => $date, 'updated_at' => $date),
                array(
                    'code' => 'F/600/6622',
                    'name' => 'Digital Graphics for Interactive Media',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 48,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'L/600/6610',
                    'name' => 'Computer Game Platforms and Technologies',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 48,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'J/502/5663',
                    'name' => '2D Animation Production',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 48,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'T/502/5769',
                    'name' => 'Interactive Media Authoring',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 48,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'A/502/5661',
                    'name' => 'Web Animation for Interactive Media',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 48,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'H/502/5671',
                    'name' => 'Computer Game Design',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 48,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'K/600/6601',
                    'name' => '3D Modelling',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 48,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'Y/601/6637',
                    'name' => 'Spreadsheet Modelling',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'code' => 'T/601/0439',
                    'name' => 'Multimedia Design',
                    'credit_value' => 10,
                    'glh' => 60,
                    'level' => 3,
                    'subject_sector_id' => 18,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
            )
        );
    }
}