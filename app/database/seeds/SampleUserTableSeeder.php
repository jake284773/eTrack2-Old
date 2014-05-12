<?php

/*
 * This file is part of the eTrack web application.
 *
 * (c) City College Plymouth
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class SampleUserTableSeeder extends Seeder
{

    public function run()
    {
        $date = new DateTime;

        DB::table('user')->insert(
            array(
                array(
                    'user_id' => '11400235',
                    'password' => 'GWB82eZRPXHsZD75bKazcFZy',
                    'full_name' => 'Carol Green',
                    'email' => '11400235@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11400922',
                    'password' => 'HLWQVzRLVyrPnvPwvLBGTxuc',
                    'full_name' => 'Laura Miller',
                    'email' => '11400922@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11401181',
                    'password' => 'eFgAFsVDbyrhfGJ7uF3ycXzE',
                    'full_name' => 'Karen Martin',
                    'email' => '11401181@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11401358',
                    'password' => 'wJ3KaA6sh96v4CKYshZKGqmp',
                    'full_name' => 'David Roberts',
                    'email' => '11401358@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11401452',
                    'password' => 'Bts8LAQbZEW3SsCFZVBJgMVe',
                    'full_name' => 'Sarah Garcia',
                    'email' => '11401452@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11401587',
                    'password' => 'Fs3WtnNK4FyTMpuEWf9bHLqd',
                    'full_name' => 'Deborah Perez',
                    'email' => '11401587@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11401854',
                    'password' => 'XxAhrPh2YWgsxvxAzpmR9YC8',
                    'full_name' => 'Jeff Nelson',
                    'email' => '11401854@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11401947',
                    'password' => 'X7SRScuz9FTfHxwt2Z9zmJrT',
                    'full_name' => 'James Smith',
                    'email' => '11401947@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11402039',
                    'password' => 'dH7VnVxZbVEdpMM2madNrgHG',
                    'full_name' => 'George Phillips',
                    'email' => '11402039@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11402054',
                    'password' => 'qZgHcR4VBUWE6BTaMXpsjpTU',
                    'full_name' => 'Michael Robinson',
                    'email' => '11402054@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11402494',
                    'password' => 'HRJRJhbUAj7UhPE8XvqHYvFz',
                    'full_name' => 'John Wong',
                    'email' => '11402494@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11403162',
                    'password' => 'rnSREzT8eAfZD4TeRVaN4d2M',
                    'full_name' => 'Daniel Campbell',
                    'email' => '11403162@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11403190',
                    'password' => 'xn6RqKcFrHvx5vNHnTdymcUa',
                    'full_name' => 'Helen Mitchell',
                    'email' => '11403190@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11403418',
                    'password' => 'vH4vSQum2V6BSAJ4MKVjNuR5',
                    'full_name' => 'Christopher Brown',
                    'email' => '11403418@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11403452',
                    'password' => 'w8Yk9pzHkHUT4EKZuuAZhp2d',
                    'full_name' => 'Donald Scott',
                    'email' => '11403452@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11403620',
                    'password' => 'FqzRX5T7RJwPr8YVZEvbSGaE',
                    'full_name' => 'Susan Wright',
                    'email' => '11403620@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11403727',
                    'password' => 'gX9yuCqLVT95ph4ESCR5Ghc7',
                    'full_name' => 'Michelle Taylor',
                    'email' => '11403727@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11403811',
                    'password' => 'v6AhE3QBxWL5Fu4P5vS2vbNY',
                    'full_name' => 'Betty Walker',
                    'email' => '11403811@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11403870',
                    'password' => 'Va2uBmnzdDFkbevu67EvDqmp',
                    'full_name' => 'Steven King',
                    'email' => '11403870@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11403879',
                    'password' => 'sYb6qbZA9AKqeFKBjhz96PkQ',
                    'full_name' => 'Elizabeth Carter',
                    'email' => '11403879@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11403916',
                    'password' => 'kTg2nf2GbgXPBymzWUSvCWAQ',
                    'full_name' => 'Nancy Jones',
                    'email' => '11403916@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11404399',
                    'password' => 'PcKWDw2NGd9mr8pn8fckr75D',
                    'full_name' => 'Jason Anderson',
                    'email' => '11404399@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11404775',
                    'password' => 'GUdNbBnmShngM9KfxHRWbgka',
                    'full_name' => 'Paul Jackson',
                    'email' => '11404775@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11405136',
                    'password' => 'NCJa6vWLBfwcNbWMWBGf4NSz',
                    'full_name' => 'Anthony Williams',
                    'email' => '11405136@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11405524',
                    'password' => 'vVUA5GJXwgd9mn4EWBhEcndZ',
                    'full_name' => 'Ronald Lee',
                    'email' => '11405524@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11405539',
                    'password' => 'tVQBzNC6uHX5kaaj3rmLZLmt',
                    'full_name' => 'Kenneth Stewart',
                    'email' => '11405539@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11405618',
                    'password' => 'CF4PPPrTQxZVKTdNEBEK5Hqh',
                    'full_name' => 'Ruth Sanchez',
                    'email' => '11405618@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11405634',
                    'password' => 'z7cfENb8gNabG4yG7rtpNeu2',
                    'full_name' => 'Barbara Martinez',
                    'email' => '11405634@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11405672',
                    'password' => 'gMuCY29SgmBLNEap53kkVGVx',
                    'full_name' => 'Mark Clark',
                    'email' => '11405672@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11405747',
                    'password' => 'xMQ7FNcMbWbdqFWxsLd9Auk2',
                    'full_name' => 'Donna Roogers',
                    'email' => '11405747@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11405775',
                    'password' => 'qNYqrXbLkZKPHxZkvq3CMXSf',
                    'full_name' => 'William Young',
                    'email' => '11405775@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11405900',
                    'password' => '4ujauWvukJd3mKdvvS3aAbxy',
                    'full_name' => 'Patricia Thompson',
                    'email' => '11405900@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11406235',
                    'password' => 'eTGRcznST7XEjNZESWpwXQV2',
                    'full_name' => 'Robert Moore',
                    'email' => '11406235@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11406267',
                    'password' => 'SVyWF8kxpHHUrAZyckJXYEMP',
                    'full_name' => 'Kimberly Allen',
                    'email' => '11406267@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11406291',
                    'password' => 'CYYqhLukuEsguxpQPrRYs7tb',
                    'full_name' => 'Joseph Baker',
                    'email' => '11406291@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11406496',
                    'password' => 'TqdqMQB3ngF25BFbBCJNY3cS',
                    'full_name' => 'Richard Evans',
                    'email' => '11406496@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11407008',
                    'password' => 'yp3u4XCKCASUcPAbnkjtgjLm',
                    'full_name' => 'Sandra Collins',
                    'email' => '11407008@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11407323',
                    'password' => '9UJPY3aLbmXWQsdTz6Pk8S5H',
                    'full_name' => 'Maria Morris',
                    'email' => '11407323@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11407519',
                    'password' => 'uDLzzMt8gayDGV4CwwK5GgCy',
                    'full_name' => 'Jennifer Parker',
                    'email' => '11407519@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11407856',
                    'password' => 'URCv63ALL64Gx7MQnEqrLXRN',
                    'full_name' => 'Mary Wilson',
                    'email' => '11407856@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11407867',
                    'password' => 'xJyuU3zb4guHTZnCAjpwZaKM',
                    'full_name' => 'Edward Adams',
                    'email' => '11407867@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11407923',
                    'password' => 'AWb6FqAGMmgEZbzVHgATKDcw',
                    'full_name' => 'Charles Carter',
                    'email' => '11407923@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11409241',
                    'password' => 'EE3jEvA7kVcy6ca9bPAGuqbe',
                    'full_name' => 'Linda Harris',
                    'email' => '11409241@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11409737',
                    'password' => 'hBjQTANBykgyuJp5QwwZ4wCg',
                    'full_name' => 'Kevin White',
                    'email' => '11409737@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '11409772',
                    'password' => 'x3Gs2pP7cVduQ8DHCFbqa3dN',
                    'full_name' => 'Lisa Patel',
                    'email' => '11409772@student.examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000001',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Dale Hayes',
                    'email' => '12000001@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000002',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Molly Haynes',
                    'email' => '12000002@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000003',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Mildred Gray',
                    'email' => '12000003@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000004',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Gerald Chapman',
                    'email' => '12000004@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000005',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Irma Webb',
                    'email' => '12000005@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000006',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Shelly Hardy',
                    'email' => '12000006@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000007',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Max Byrd',
                    'email' => '12000007@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000008',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Josefina Foster',
                    'email' => '12000008@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000009',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Evan Thomas',
                    'email' => '12000009@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000010',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Alicia Colon',
                    'email' => '12000010@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000011',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Johnathan Banks',
                    'email' => '12000011@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000012',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lindsey Pearson',
                    'email' => '12000012@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000013',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ollie Stephens',
                    'email' => '12000013@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000014',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Pearl Norman',
                    'email' => '12000014@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000015',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Elsa Collins',
                    'email' => '12000015@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000016',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Georgia Cummings',
                    'email' => '12000016@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000017',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Tanya Simpson',
                    'email' => '12000017@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000018',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Hilda Richardson',
                    'email' => '12000018@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000019',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Marguerite Harvey',
                    'email' => '12000019@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000020',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Hope Mcdonald',
                    'email' => '12000020@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000021',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Marcia Johnson',
                    'email' => '12000021@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000022',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Neal Cole',
                    'email' => '12000022@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000023',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Joey Sims',
                    'email' => '12000023@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000024',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Stanley Rivera',
                    'email' => '12000024@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000025',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Maggie Walsh',
                    'email' => '12000025@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000026',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Nellie Peterson',
                    'email' => '12000026@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000027',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Gregory Chandler',
                    'email' => '12000027@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000028',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Emilio Warner',
                    'email' => '12000028@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000029',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Leah Robinson',
                    'email' => '12000029@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000030',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jeff Nguyen',
                    'email' => '12000030@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000031',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jackie Mcbride',
                    'email' => '12000031@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000032',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Kenneth Yates',
                    'email' => '12000032@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000033',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lynn Wise',
                    'email' => '12000033@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000034',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Adrienne Swanson',
                    'email' => '12000034@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000035',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Latoya Morgan',
                    'email' => '12000035@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000036',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Sherman Barrett',
                    'email' => '12000036@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000037',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Paul Mclaughlin',
                    'email' => '12000037@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000038',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Nettie Jennings',
                    'email' => '12000038@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000039',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Wayne Barker',
                    'email' => '12000039@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000040',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Elmer Torres',
                    'email' => '12000040@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000041',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Arthur Harris',
                    'email' => '12000041@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000042',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jeannette Scott',
                    'email' => '12000042@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000043',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Krystal Lawrence',
                    'email' => '12000043@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000044',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Dewey Garza',
                    'email' => '12000044@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000045',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Christopher Doyle',
                    'email' => '12000045@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000046',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Danny Roy',
                    'email' => '12000046@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000047',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Harry French',
                    'email' => '12000047@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000048',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Rosemary Saunders',
                    'email' => '12000048@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000049',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jeremy Potter',
                    'email' => '12000049@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000050',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Kim Ramsey',
                    'email' => '12000050@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000051',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Erik Buchanan',
                    'email' => '12000051@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000052',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Madeline Martinez',
                    'email' => '12000052@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000053',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Nancy Santos',
                    'email' => '12000053@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000054',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Teri Ingram',
                    'email' => '12000054@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000055',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Monique Armstrong',
                    'email' => '12000055@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000056',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Don Reeves',
                    'email' => '12000056@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000057',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Dora Craig',
                    'email' => '12000057@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000058',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Minnie Mcdaniel',
                    'email' => '12000058@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000059',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Elisa Hicks',
                    'email' => '12000059@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000060',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Joan Schwartz',
                    'email' => '12000060@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000061',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Alex Lawson',
                    'email' => '12000061@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000062',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ralph Walton',
                    'email' => '12000062@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000063',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Dana Stevens',
                    'email' => '12000063@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000064',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Dwight Estrada',
                    'email' => '12000064@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000065',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Bob Morrison',
                    'email' => '12000065@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000066',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Mattie Wilson',
                    'email' => '12000066@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000067',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Denise Mills',
                    'email' => '12000067@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000068',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Kent Crawford',
                    'email' => '12000068@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000069',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Margie Paul',
                    'email' => '12000069@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000070',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ignacio Fowler',
                    'email' => '12000070@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000071',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Eva Black',
                    'email' => '12000071@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000072',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Kelley Lynch',
                    'email' => '12000072@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000073',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Gertrude Cruz',
                    'email' => '12000073@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000074',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Brent Munoz',
                    'email' => '12000074@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000075',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lauren Patrick',
                    'email' => '12000075@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000076',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Kari Garcia',
                    'email' => '12000076@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000077',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lowell Delgado',
                    'email' => '12000077@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000078',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Sara Maxwell',
                    'email' => '12000078@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000079',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Isabel Park',
                    'email' => '12000079@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000080',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Darrin Jacobs',
                    'email' => '12000080@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000081',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Rex Rios',
                    'email' => '12000081@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000082',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Blanche Oliver',
                    'email' => '12000082@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000083',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Levi Waters',
                    'email' => '12000083@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000084',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Bethany Flowers',
                    'email' => '12000084@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000085',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Shannon Watson',
                    'email' => '12000085@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000086',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Marcus Roberson',
                    'email' => '12000086@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000087',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Dallas Rice',
                    'email' => '12000087@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000088',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Bennie Nichols',
                    'email' => '12000088@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000089',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Richard Palmer',
                    'email' => '12000089@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000090',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ada Ballard',
                    'email' => '12000090@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000091',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Marilyn Webster',
                    'email' => '12000091@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000092',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Harriet Stewart',
                    'email' => '12000092@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000093',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Penny Manning',
                    'email' => '12000093@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000094',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Elias Bowers',
                    'email' => '12000094@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000095',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Janice Flores',
                    'email' => '12000095@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000096',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Leticia Mitchell',
                    'email' => '12000096@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000097',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ashley Willis',
                    'email' => '12000097@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000098',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Shelley Drake',
                    'email' => '12000098@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000099',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ron Steele',
                    'email' => '12000099@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000100',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Arlene Davis',
                    'email' => '12000100@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000101',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Mercedes Stevens',
                    'email' => '12000101@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000102',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ida Singleton',
                    'email' => '12000102@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000103',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Laurence Malone',
                    'email' => '12000103@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000104',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Rudolph Oliver',
                    'email' => '12000104@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000105',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Leland Obrien',
                    'email' => '12000105@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000106',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Salvatore Castro',
                    'email' => '12000106@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000107',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jody Pearson',
                    'email' => '12000107@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000108',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Nora Holmes',
                    'email' => '12000108@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000109',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Stanley Delgado',
                    'email' => '12000109@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000110',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Barbara Steele',
                    'email' => '12000110@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000111',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Mae Gomez',
                    'email' => '12000111@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000112',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Steven Brown',
                    'email' => '12000112@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000113',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Shawn Padilla',
                    'email' => '12000113@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000114',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Eduardo Williamson',
                    'email' => '12000114@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000115',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Essie Barnett',
                    'email' => '12000115@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000116',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Leona Bell',
                    'email' => '12000116@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000117',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Suzanne Mcgee',
                    'email' => '12000117@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000118',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Mike Clayton',
                    'email' => '12000118@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000119',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ira Allen',
                    'email' => '12000119@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000120',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lora Keller',
                    'email' => '12000120@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000121',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lionel Newton',
                    'email' => '12000121@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000122',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Dianna Murray',
                    'email' => '12000122@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000123',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Dean Robinson',
                    'email' => '12000123@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000124',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Victoria Sutton',
                    'email' => '12000124@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000125',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Constance Gonzales',
                    'email' => '12000125@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000126',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Nicole Warner',
                    'email' => '12000126@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000127',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Kent Bryan',
                    'email' => '12000127@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000128',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lillie Quinn',
                    'email' => '12000128@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000129',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Zachary Hanson',
                    'email' => '12000129@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000130',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Doug Ramos',
                    'email' => '12000130@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000131',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Elena Clark',
                    'email' => '12000131@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000132',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Luis Martinez',
                    'email' => '12000132@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000133',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Clifford Grant',
                    'email' => '12000133@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000134',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Antonio Barker',
                    'email' => '12000134@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000135',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Shelly Vargas',
                    'email' => '12000135@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000136',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Stacy Watts',
                    'email' => '12000136@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000137',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ivan Walsh',
                    'email' => '12000137@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000138',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Earl Clarke',
                    'email' => '12000138@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000139',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Sherri Warren',
                    'email' => '12000139@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000140',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Viola Gill',
                    'email' => '12000140@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000141',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Terri Moreno',
                    'email' => '12000141@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000142',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Willie Ramirez',
                    'email' => '12000142@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000143',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Bennie Hernandez',
                    'email' => '12000143@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000144',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Tim Nguyen',
                    'email' => '12000144@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000145',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Rebecca Meyer',
                    'email' => '12000145@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000146',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Marie Glover',
                    'email' => '12000146@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000147',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Chester Holt',
                    'email' => '12000147@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000148',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Vernon Evans',
                    'email' => '12000148@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000149',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Walter Fuller',
                    'email' => '12000149@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000150',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Catherine Gutierrez',
                    'email' => '12000150@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000151',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Patti Bryant',
                    'email' => '12000151@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000152',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Elias Park',
                    'email' => '12000152@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000153',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Sheila Hicks',
                    'email' => '12000153@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000154',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Merle White',
                    'email' => '12000154@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000155',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Isabel Wright',
                    'email' => '12000155@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000156',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ismael Kim',
                    'email' => '12000156@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000157',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Leroy Elliott',
                    'email' => '12000157@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000158',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Claude Adkins',
                    'email' => '12000158@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000159',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Claudia Taylor',
                    'email' => '12000159@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000160',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Rosemary Jensen',
                    'email' => '12000160@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000161',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Delbert Ortega',
                    'email' => '12000161@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000162',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Bobby Harris',
                    'email' => '12000162@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000163',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Eunice Price',
                    'email' => '12000163@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000164',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Norma Diaz',
                    'email' => '12000164@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000165',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ray Pittman',
                    'email' => '12000165@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000166',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ed Webster',
                    'email' => '12000166@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000167',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lena Graham',
                    'email' => '12000167@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000168',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Thelma Blake',
                    'email' => '12000168@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000169',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Bert Zimmerman',
                    'email' => '12000169@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000170',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Alison Potter',
                    'email' => '12000170@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000171',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Van Norton',
                    'email' => '12000171@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000172',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jose James',
                    'email' => '12000172@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000173',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Christie Flowers',
                    'email' => '12000173@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000174',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Robyn Reese',
                    'email' => '12000174@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000175',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Daryl Mason',
                    'email' => '12000175@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000176',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Melvin Alvarado',
                    'email' => '12000176@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000177',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Gina Morales',
                    'email' => '12000177@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000178',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Seth Brock',
                    'email' => '12000178@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000179',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Evan Norris',
                    'email' => '12000179@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000180',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Juana Lindsey',
                    'email' => '12000180@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000181',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Teresa Frank',
                    'email' => '12000181@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000182',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jeannette Harrington',
                    'email' => '12000182@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000183',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Terrence Lopez',
                    'email' => '12000183@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000184',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Wade Woods',
                    'email' => '12000184@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000185',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Carmen Lynch',
                    'email' => '12000185@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000186',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Maryann Mann',
                    'email' => '12000186@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000187',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Noah Shelton',
                    'email' => '12000187@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000188',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Larry Barber',
                    'email' => '12000188@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000189',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Winifred Freeman',
                    'email' => '12000189@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000190',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Joanna Riley',
                    'email' => '12000190@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000191',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Mattie Reid',
                    'email' => '12000191@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000192',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Agnes Bowman',
                    'email' => '12000192@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000193',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Greg Marshall',
                    'email' => '12000193@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000194',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Tamara Rodriguez',
                    'email' => '12000194@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000195',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Pauline Sparks',
                    'email' => '12000195@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000196',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ella Lucas',
                    'email' => '12000196@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000197',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Laura Valdez',
                    'email' => '12000197@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000198',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lillian Porter',
                    'email' => '12000198@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000199',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Darlene Curtis',
                    'email' => '12000199@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000200',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Anita Hubbard',
                    'email' => '12000200@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000201',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Otis Olson',
                    'email' => '12000201@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000202',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Boyd Ingram',
                    'email' => '12000202@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000203',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Samuel Yates',
                    'email' => '12000203@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000204',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Hazel Dunn',
                    'email' => '12000204@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000205',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Constance Rowe',
                    'email' => '12000205@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000206',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Aubrey Fuller',
                    'email' => '12000206@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000207',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Delia Stevenson',
                    'email' => '12000207@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000208',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jamie Logan',
                    'email' => '12000208@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000209',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Celia Hines',
                    'email' => '12000209@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000210',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Stanley Reyes',
                    'email' => '12000210@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000211',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Orlando Smith',
                    'email' => '12000211@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000212',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Arthur Mann',
                    'email' => '12000212@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000213',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Kenny Conner',
                    'email' => '12000213@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000214',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Woodrow Gill',
                    'email' => '12000214@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000215',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Johnnie Harrison',
                    'email' => '12000215@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000216',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Miriam Hunter',
                    'email' => '12000216@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000217',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Elias Daniel',
                    'email' => '12000217@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000218',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lionel Webb',
                    'email' => '12000218@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000219',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Angela Gonzalez',
                    'email' => '12000219@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000220',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Devin Henderson',
                    'email' => '12000220@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000221',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Sheldon Rivera',
                    'email' => '12000221@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000222',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Sandra Sharp',
                    'email' => '12000222@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000223',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jaime Tran',
                    'email' => '12000223@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000224',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jessica Hopkins',
                    'email' => '12000224@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000225',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Teri Myers',
                    'email' => '12000225@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000226',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Francisco Berry',
                    'email' => '12000226@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000227',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Florence Flores',
                    'email' => '12000227@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000228',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Frank Price',
                    'email' => '12000228@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000229',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Cecilia Pearson',
                    'email' => '12000229@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000230',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Patti Sullivan',
                    'email' => '12000230@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000231',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Aaron Edwards',
                    'email' => '12000231@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000232',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Tyrone Love',
                    'email' => '12000232@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000233',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lee Simpson',
                    'email' => '12000233@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000234',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Terrell Mccoy',
                    'email' => '12000234@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000235',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Faye Cain',
                    'email' => '12000235@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000236',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Julius Weber',
                    'email' => '12000236@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000237',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Wendell Carroll',
                    'email' => '12000237@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000238',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Blanca Davis',
                    'email' => '12000238@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000239',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Deanna Chandler',
                    'email' => '12000239@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000240',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Perry Moore',
                    'email' => '12000240@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000241',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jermaine Leonard',
                    'email' => '12000241@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000242',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Elizabeth Barker',
                    'email' => '12000242@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000243',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lena Poole',
                    'email' => '12000243@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000244',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Elmer Gibbs',
                    'email' => '12000244@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000245',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Sophie Elliott',
                    'email' => '12000245@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000246',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Gertrude Parks',
                    'email' => '12000246@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000247',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Salvatore Becker',
                    'email' => '12000247@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000248',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Freddie Sparks',
                    'email' => '12000248@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000249',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Melinda Wise',
                    'email' => '12000249@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000250',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Megan Steele',
                    'email' => '12000250@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000251',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Delores Phelps',
                    'email' => '12000251@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000252',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Michael Matthews',
                    'email' => '12000252@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000253',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Winifred Ortega',
                    'email' => '12000253@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000254',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Laurence Hernandez',
                    'email' => '12000254@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000255',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Spencer Alexander',
                    'email' => '12000255@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000256',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Percy Zimmerman',
                    'email' => '12000256@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000257',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Nick Roberson',
                    'email' => '12000257@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000258',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Marcus Fletcher',
                    'email' => '12000258@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000259',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Tony Martinez',
                    'email' => '12000259@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000260',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Carlton Houston',
                    'email' => '12000260@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000261',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Faith Hammond',
                    'email' => '12000261@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000262',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Krista Park',
                    'email' => '12000262@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000263',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Priscilla Stephens',
                    'email' => '12000263@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000264',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Wesley Allen',
                    'email' => '12000264@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000265',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Merle Mason',
                    'email' => '12000265@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000266',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Daisy Santiago',
                    'email' => '12000266@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000267',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Vickie Craig',
                    'email' => '12000267@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000268',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Dianna Taylor',
                    'email' => '12000268@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000269',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Everett Patrick',
                    'email' => '12000269@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000270',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Frankie Lowe',
                    'email' => '12000270@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000271',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Oliver Haynes',
                    'email' => '12000271@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000272',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Darla Silva',
                    'email' => '12000272@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000273',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ryan Snyder',
                    'email' => '12000273@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000274',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Armando Hicks',
                    'email' => '12000274@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000275',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jean Drake',
                    'email' => '12000275@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000276',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Minnie Russell',
                    'email' => '12000276@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000277',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Keith Stevens',
                    'email' => '12000277@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000278',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Janet Williamson',
                    'email' => '12000278@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000279',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Terry Shelton',
                    'email' => '12000279@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000280',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Gwen Doyle',
                    'email' => '12000280@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000281',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ricky Christensen',
                    'email' => '12000281@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000282',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Andy Powers',
                    'email' => '12000282@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000283',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Martha Caldwell',
                    'email' => '12000283@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000284',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Herman Burns',
                    'email' => '12000284@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000285',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Francis Jennings',
                    'email' => '12000285@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000286',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Iris Morrison',
                    'email' => '12000286@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000287',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ashley Lawrence',
                    'email' => '12000287@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000288',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ronald Owen',
                    'email' => '12000288@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000289',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jan Soto',
                    'email' => '12000289@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000290',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Rodney Horton',
                    'email' => '12000290@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000291',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Tabitha Garza',
                    'email' => '12000291@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000292',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Dixie Sanders',
                    'email' => '12000292@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000293',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lynne Blair',
                    'email' => '12000293@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000294',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Morris Walsh',
                    'email' => '12000294@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000295',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Natalie Fowler',
                    'email' => '12000295@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000296',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Dale Perkins',
                    'email' => '12000296@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000297',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Pearl Mckenzie',
                    'email' => '12000297@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000298',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Wade Vega',
                    'email' => '12000298@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000299',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Bryan Clayton',
                    'email' => '12000299@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000300',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Cameron Mills',
                    'email' => '12000300@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000301',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Otis Olson',
                    'email' => '12000301@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000302',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Boyd Ingram',
                    'email' => '12000302@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000303',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Samuel Yates',
                    'email' => '12000303@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000304',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Hazel Dunn',
                    'email' => '12000304@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000305',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Constance Rowe',
                    'email' => '12000305@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000306',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Aubrey Fuller',
                    'email' => '12000306@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000307',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Delia Stevenson',
                    'email' => '12000307@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000308',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jamie Logan',
                    'email' => '12000308@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000309',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Celia Hines',
                    'email' => '12000309@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000310',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Stanley Reyes',
                    'email' => '12000310@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000311',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Orlando Smith',
                    'email' => '12000311@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000312',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Arthur Mann',
                    'email' => '12000312@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000313',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Kenny Conner',
                    'email' => '12000313@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000314',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Woodrow Gill',
                    'email' => '12000314@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000315',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Johnnie Harrison',
                    'email' => '12000315@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000316',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Miriam Hunter',
                    'email' => '12000316@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000317',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Elias Daniel',
                    'email' => '12000317@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000318',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lionel Webb',
                    'email' => '12000318@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000319',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Angela Gonzalez',
                    'email' => '12000319@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000320',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Devin Henderson',
                    'email' => '12000320@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000321',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Sheldon Rivera',
                    'email' => '12000321@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000322',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Sandra Sharp',
                    'email' => '12000322@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000323',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jaime Tran',
                    'email' => '12000323@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000324',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jessica Hopkins',
                    'email' => '12000324@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000325',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Teri Myers',
                    'email' => '12000325@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000326',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Francisco Berry',
                    'email' => '12000326@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000327',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Florence Flores',
                    'email' => '12000327@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000328',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Frank Price',
                    'email' => '12000328@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000329',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Cecilia Pearson',
                    'email' => '12000329@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000330',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Patti Sullivan',
                    'email' => '12000330@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000331',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Aaron Edwards',
                    'email' => '12000331@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000332',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Tyrone Love',
                    'email' => '12000332@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000333',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lee Simpson',
                    'email' => '12000333@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000334',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Terrell Mccoy',
                    'email' => '12000334@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000335',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Faye Cain',
                    'email' => '12000335@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000336',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Julius Weber',
                    'email' => '12000336@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000337',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Wendell Carroll',
                    'email' => '12000337@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000338',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Blanca Davis',
                    'email' => '12000338@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000339',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Deanna Chandler',
                    'email' => '12000339@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000340',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Perry Moore',
                    'email' => '12000340@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000341',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jermaine Leonard',
                    'email' => '12000341@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000342',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Elizabeth Barker',
                    'email' => '12000342@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000343',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lena Poole',
                    'email' => '12000343@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000344',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Elmer Gibbs',
                    'email' => '12000344@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000345',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Sophie Elliott',
                    'email' => '12000345@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000346',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Gertrude Parks',
                    'email' => '12000346@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000347',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Salvatore Becker',
                    'email' => '12000347@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000348',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Freddie Sparks',
                    'email' => '12000348@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000349',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Melinda Wise',
                    'email' => '12000349@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000350',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Megan Steele',
                    'email' => '12000350@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000351',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Delores Phelps',
                    'email' => '12000351@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000352',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Michael Matthews',
                    'email' => '12000352@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000353',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Winifred Ortega',
                    'email' => '12000353@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000354',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Laurence Hernandez',
                    'email' => '12000354@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000355',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Spencer Alexander',
                    'email' => '12000355@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000356',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Percy Zimmerman',
                    'email' => '12000356@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000357',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Nick Roberson',
                    'email' => '12000357@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000358',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Marcus Fletcher',
                    'email' => '12000358@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000359',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Tony Martinez',
                    'email' => '12000359@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000360',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Carlton Houston',
                    'email' => '12000360@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000361',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Faith Hammond',
                    'email' => '12000361@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000362',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Krista Park',
                    'email' => '12000362@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000363',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Priscilla Stephens',
                    'email' => '12000363@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000364',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Wesley Allen',
                    'email' => '12000364@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000365',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Merle Mason',
                    'email' => '12000365@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000366',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Daisy Santiago',
                    'email' => '12000366@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000367',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Vickie Craig',
                    'email' => '12000367@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000368',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Dianna Taylor',
                    'email' => '12000368@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000369',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Everett Patrick',
                    'email' => '12000369@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000370',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Frankie Lowe',
                    'email' => '12000370@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000371',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Oliver Haynes',
                    'email' => '12000371@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000372',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Darla Silva',
                    'email' => '12000372@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000373',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ryan Snyder',
                    'email' => '12000373@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000374',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Armando Hicks',
                    'email' => '12000374@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000375',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jean Drake',
                    'email' => '12000375@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000376',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Minnie Russell',
                    'email' => '12000376@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000377',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Keith Stevens',
                    'email' => '12000377@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000378',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Janet Williamson',
                    'email' => '12000378@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000379',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Terry Shelton',
                    'email' => '12000379@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000380',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Gwen Doyle',
                    'email' => '12000380@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000381',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ricky Christensen',
                    'email' => '12000381@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000382',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Andy Powers',
                    'email' => '12000382@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000383',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Martha Caldwell',
                    'email' => '12000383@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000384',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Herman Burns',
                    'email' => '12000384@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000385',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Francis Jennings',
                    'email' => '12000385@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000386',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Iris Morrison',
                    'email' => '12000386@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000387',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ashley Lawrence',
                    'email' => '12000387@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000388',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ronald Owen',
                    'email' => '12000388@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000389',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jan Soto',
                    'email' => '12000389@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000390',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Rodney Horton',
                    'email' => '12000390@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000391',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Tabitha Garza',
                    'email' => '12000391@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000392',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Dixie Sanders',
                    'email' => '12000392@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000393',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lynne Blair',
                    'email' => '12000393@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000394',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Morris Walsh',
                    'email' => '12000394@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000395',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Natalie Fowler',
                    'email' => '12000395@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000396',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Dale Perkins',
                    'email' => '12000396@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000397',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Pearl Mckenzie',
                    'email' => '12000397@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000398',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Wade Vega',
                    'email' => '12000398@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000399',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Bryan Clayton',
                    'email' => '12000399@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000400',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Cameron Mills',
                    'email' => '12000400@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000401',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Maxine Kelly',
                    'email' => '12000401@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000402',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Katie Burns',
                    'email' => '12000402@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000403',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ginger Ruiz',
                    'email' => '12000403@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000404',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Gail Sanchez',
                    'email' => '12000404@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000405',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Olga Ferguson',
                    'email' => '12000405@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000406',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Leigh Williams',
                    'email' => '12000406@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000407',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Faith Ford',
                    'email' => '12000407@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000408',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Stanley Marshall',
                    'email' => '12000408@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000409',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Theodore Carpenter',
                    'email' => '12000409@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000410',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Alicia Thomas',
                    'email' => '12000410@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000411',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Celia Freeman',
                    'email' => '12000411@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000412',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ida Williamson',
                    'email' => '12000412@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000413',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Roxanne Jensen',
                    'email' => '12000413@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000414',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Latoya Clark',
                    'email' => '12000414@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000415',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Carla Baker',
                    'email' => '12000415@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000416',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Teri Ward',
                    'email' => '12000416@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000417',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Melba Rose',
                    'email' => '12000417@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000418',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Melissa Perry',
                    'email' => '12000418@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000419',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jackie Potter',
                    'email' => '12000419@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000420',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Saul Buchanan',
                    'email' => '12000420@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000421',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Sadie Boone',
                    'email' => '12000421@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000422',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Todd Murray',
                    'email' => '12000422@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000423',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jackie Vaughn',
                    'email' => '12000423@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000424',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Javier Anderson',
                    'email' => '12000424@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000425',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Edwin Stevenson',
                    'email' => '12000425@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000426',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lynn Edwards',
                    'email' => '12000426@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000427',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Brad Salazar',
                    'email' => '12000427@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000428',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Doreen Reid',
                    'email' => '12000428@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000429',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Austin Hunter',
                    'email' => '12000429@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000430',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Patty Becker',
                    'email' => '12000430@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000431',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Terence Glover',
                    'email' => '12000431@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000432',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Rick Poole',
                    'email' => '12000432@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000433',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Carrie Guerrero',
                    'email' => '12000433@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000434',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Elaine Sutton',
                    'email' => '12000434@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000435',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Cody Coleman',
                    'email' => '12000435@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000436',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Rudy Lloyd',
                    'email' => '12000436@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000437',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Marcus Stevens',
                    'email' => '12000437@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000438',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Janie Padilla',
                    'email' => '12000438@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000439',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lena Wallace',
                    'email' => '12000439@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000440',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Janet Holloway',
                    'email' => '12000440@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000441',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Sophie Cain',
                    'email' => '12000441@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000442',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Patrick Chandler',
                    'email' => '12000442@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000443',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Mitchell Schwartz',
                    'email' => '12000443@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000444',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Beatrice Hampton',
                    'email' => '12000444@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000445',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Teresa Greer',
                    'email' => '12000445@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000446',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lydia Nguyen',
                    'email' => '12000446@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000447',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Debra Taylor',
                    'email' => '12000447@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000448',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Scott Bennett',
                    'email' => '12000448@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000449',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Rudolph Banks',
                    'email' => '12000449@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000450',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Cathy Paul',
                    'email' => '12000450@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000451',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lorenzo Barber',
                    'email' => '12000451@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000452',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Douglas Gibson',
                    'email' => '12000452@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000453',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Troy Green',
                    'email' => '12000453@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000454',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Eric Turner',
                    'email' => '12000454@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000455',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Hubert Wise',
                    'email' => '12000455@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000456',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Nora Simon',
                    'email' => '12000456@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000457',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Shelly Duncan',
                    'email' => '12000457@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000458',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Leticia Patrick',
                    'email' => '12000458@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000459',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lloyd Mcguire',
                    'email' => '12000459@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000460',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Brooke Little',
                    'email' => '12000460@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000461',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ivan Stewart',
                    'email' => '12000461@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000462',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ethel Clayton',
                    'email' => '12000462@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000463',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Trevor Erickson',
                    'email' => '12000463@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000464',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Clara Dennis',
                    'email' => '12000464@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000465',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Tony Andrews',
                    'email' => '12000465@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000466',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Guillermo Carroll',
                    'email' => '12000466@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000467',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Darrel Sullivan',
                    'email' => '12000467@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000468',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Van Perez',
                    'email' => '12000468@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000469',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Virginia Rice',
                    'email' => '12000469@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000470',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Kyle Summers',
                    'email' => '12000470@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000471',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Leona Burgess',
                    'email' => '12000471@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000472',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Stephanie Schmidt',
                    'email' => '12000472@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000473',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jean Fox',
                    'email' => '12000473@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000474',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Roberta Rowe',
                    'email' => '12000474@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000475',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Caroline Romero',
                    'email' => '12000475@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000476',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Marcia Morales',
                    'email' => '12000476@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000477',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Alex Cunningham',
                    'email' => '12000477@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000478',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Gina Kennedy',
                    'email' => '12000478@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000479',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Marlene Dixon',
                    'email' => '12000479@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000480',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Pamela Marsh',
                    'email' => '12000480@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000481',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Glenda Snyder',
                    'email' => '12000481@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000482',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Antonio Lyons',
                    'email' => '12000482@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000483',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Madeline Bryan',
                    'email' => '12000483@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000484',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Marie Craig',
                    'email' => '12000484@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000485',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lyle Reeves',
                    'email' => '12000485@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000486',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Carroll Cruz',
                    'email' => '12000486@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000487',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Sara Olson',
                    'email' => '12000487@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000488',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Virgil Collier',
                    'email' => '12000488@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000489',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Candice Hardy',
                    'email' => '12000489@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000490',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Toni Townsend',
                    'email' => '12000490@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000491',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Shelia Floyd',
                    'email' => '12000491@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000492',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Cory Bridges',
                    'email' => '12000492@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000493',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Willie Mann',
                    'email' => '12000493@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000494',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Dixie Stone',
                    'email' => '12000494@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000495',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Tommy Moss',
                    'email' => '12000495@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000496',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Mona Bradley',
                    'email' => '12000496@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000497',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lucas Hill',
                    'email' => '12000497@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000498',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Steve Doyle',
                    'email' => '12000498@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000499',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Tara Chambers',
                    'email' => '12000499@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000500',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lillie Griffith',
                    'email' => '12000500@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000501',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Darrin Brady',
                    'email' => '12000501@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000502',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Charlie Sims',
                    'email' => '12000502@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000503',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Mable Paul',
                    'email' => '12000503@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000504',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Flora Nash',
                    'email' => '12000504@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000505',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Hattie Harvey',
                    'email' => '12000505@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000506',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Toby Rogers',
                    'email' => '12000506@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000507',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Elizabeth Jackson',
                    'email' => '12000507@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000508',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Cassandra Reid',
                    'email' => '12000508@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000509',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Rudolph Alvarez',
                    'email' => '12000509@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000510',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Gilberto Barker',
                    'email' => '12000510@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000511',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Beverly Elliott',
                    'email' => '12000511@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000512',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lowell Sparks',
                    'email' => '12000512@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000513',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Guillermo Swanson',
                    'email' => '12000513@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000514',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Irvin Moody',
                    'email' => '12000514@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000515',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Hugo Medina',
                    'email' => '12000515@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000516',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Dianne Schwartz',
                    'email' => '12000516@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000517',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lawrence Buchanan',
                    'email' => '12000517@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000518',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Kent Ferguson',
                    'email' => '12000518@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000519',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Timothy Horton',
                    'email' => '12000519@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000520',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Krystal Hodges',
                    'email' => '12000520@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000521',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jimmie Benson',
                    'email' => '12000521@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000522',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jane Goodman',
                    'email' => '12000522@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000523',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Wilbur Davis',
                    'email' => '12000523@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000524',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Kathleen Vargas',
                    'email' => '12000524@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000525',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Craig Stephens',
                    'email' => '12000525@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000526',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Daniel Patrick',
                    'email' => '12000526@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000527',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lucille Riley',
                    'email' => '12000527@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000528',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Rose Barrett',
                    'email' => '12000528@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000529',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Douglas Garner',
                    'email' => '12000529@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000530',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jana Bell',
                    'email' => '12000530@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000531',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Kate Lucas',
                    'email' => '12000531@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000532',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Brandon Rowe',
                    'email' => '12000532@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000533',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Marvin Sutton',
                    'email' => '12000533@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000534',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Hector Beck',
                    'email' => '12000534@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000535',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jacquelyn Bryant',
                    'email' => '12000535@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000536',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Eleanor Fowler',
                    'email' => '12000536@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000537',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Josephine Griffin',
                    'email' => '12000537@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000538',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Mike Maxwell',
                    'email' => '12000538@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000539',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Shari Moore',
                    'email' => '12000539@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000540',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Micheal Kelly',
                    'email' => '12000540@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000541',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Melvin Glover',
                    'email' => '12000541@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000542',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Edwin Carpenter',
                    'email' => '12000542@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000543',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Willie Wong',
                    'email' => '12000543@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000544',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Olga Curry',
                    'email' => '12000544@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000545',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Bridget Blake',
                    'email' => '12000545@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000546',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lindsey Sandoval',
                    'email' => '12000546@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000547',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Pamela Gonzalez',
                    'email' => '12000547@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000548',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Dustin Reeves',
                    'email' => '12000548@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000549',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Johnnie Little',
                    'email' => '12000549@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000550',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Maureen Ball',
                    'email' => '12000550@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000551',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Santiago Gross',
                    'email' => '12000551@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000552',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Nathan Blair',
                    'email' => '12000552@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000553',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lynette Oliver',
                    'email' => '12000553@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000554',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Marilyn Massey',
                    'email' => '12000554@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000555',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Harriet Maldonado',
                    'email' => '12000555@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000556',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lynda Bryan',
                    'email' => '12000556@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000557',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ernest Fields',
                    'email' => '12000557@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000558',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Clinton Pope',
                    'email' => '12000558@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000559',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Taylor Martinez',
                    'email' => '12000559@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000560',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Conrad Foster',
                    'email' => '12000560@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000561',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ashley Cole',
                    'email' => '12000561@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000562',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jamie Mathis',
                    'email' => '12000562@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000563',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Megan Rodgers',
                    'email' => '12000563@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000564',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Elias Owens',
                    'email' => '12000564@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000565',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Francis Mann',
                    'email' => '12000565@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000566',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Clifton Gomez',
                    'email' => '12000566@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000567',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Marcella Reese',
                    'email' => '12000567@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000568',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ricky Dunn',
                    'email' => '12000568@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000569',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Dwight Phillips',
                    'email' => '12000569@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000570',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Emilio Russell',
                    'email' => '12000570@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000571',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Beatrice Myers',
                    'email' => '12000571@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000572',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Doug Sullivan',
                    'email' => '12000572@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000573',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Thomas Robbins',
                    'email' => '12000573@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000574',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Christine Harrison',
                    'email' => '12000574@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000575',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Danielle Norton',
                    'email' => '12000575@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000576',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Andre Lee',
                    'email' => '12000576@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000577',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Anne Henry',
                    'email' => '12000577@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000578',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Irving Harmon',
                    'email' => '12000578@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000579',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Kevin Gardner',
                    'email' => '12000579@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000580',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Alexis Mckenzie',
                    'email' => '12000580@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000581',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Gary Morris',
                    'email' => '12000581@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000582',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jan Tyler',
                    'email' => '12000582@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000583',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ernesto Jensen',
                    'email' => '12000583@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000584',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Velma Baker',
                    'email' => '12000584@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000585',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Boyd Carroll',
                    'email' => '12000585@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000586',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Raquel Farmer',
                    'email' => '12000586@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000587',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Naomi Strickland',
                    'email' => '12000587@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000588',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Benjamin Joseph',
                    'email' => '12000588@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000589',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lester Holt',
                    'email' => '12000589@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000590',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Travis Daniel',
                    'email' => '12000590@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000591',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Levi Simpson',
                    'email' => '12000591@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000592',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Theodore Frank',
                    'email' => '12000592@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000593',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Gwen Hale',
                    'email' => '12000593@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000594',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Melissa Roberts',
                    'email' => '12000594@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000595',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Joey Cook',
                    'email' => '12000595@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000596',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Dorothy Curtis',
                    'email' => '12000596@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000597',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Corey Cooper',
                    'email' => '12000597@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000598',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Dawn Estrada',
                    'email' => '12000598@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000599',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Richard Santiago',
                    'email' => '12000599@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000600',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Alicia Burgess',
                    'email' => '12000600@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000601',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Leigh Vaughn',
                    'email' => '12000601@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000602',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Theodore Tucker',
                    'email' => '12000602@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000603',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Moses Hudson',
                    'email' => '12000603@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000604',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Miguel Lucas',
                    'email' => '12000604@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000605',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Guadalupe Kim',
                    'email' => '12000605@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000606',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ruth Nunez',
                    'email' => '12000606@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000607',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lillian Stokes',
                    'email' => '12000607@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000608',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Beulah Nash',
                    'email' => '12000608@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000609',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Bessie Cook',
                    'email' => '12000609@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000610',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Eugene Little',
                    'email' => '12000610@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000611',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'April Potter',
                    'email' => '12000611@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000612',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Wm Howard',
                    'email' => '12000612@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000613',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Shannon Wallace',
                    'email' => '12000613@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000614',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Courtney Riley',
                    'email' => '12000614@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000615',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Beverly Steele',
                    'email' => '12000615@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000616',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jimmy Schultz',
                    'email' => '12000616@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000617',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Colleen Jennings',
                    'email' => '12000617@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000618',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jacquelyn Burton',
                    'email' => '12000618@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000619',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lucy Brewer',
                    'email' => '12000619@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000620',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Roger King',
                    'email' => '12000620@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000621',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Salvatore Holt',
                    'email' => '12000621@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000622',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Kathleen Watts',
                    'email' => '12000622@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000623',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Rafael Lawson',
                    'email' => '12000623@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000624',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Nathaniel Ryan',
                    'email' => '12000624@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000625',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Christian Becker',
                    'email' => '12000625@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000626',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Dana Hernandez',
                    'email' => '12000626@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000627',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Stanley Meyer',
                    'email' => '12000627@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000628',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Glen James',
                    'email' => '12000628@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000629',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Gerard Aguilar',
                    'email' => '12000629@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000630',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Darla Rodgers',
                    'email' => '12000630@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000631',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Janie Soto',
                    'email' => '12000631@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000632',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Sheila Gibbs',
                    'email' => '12000632@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000633',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Dennis Klein',
                    'email' => '12000633@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000634',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Dallas Austin',
                    'email' => '12000634@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000635',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Marta Wright',
                    'email' => '12000635@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000636',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Faith Ortiz',
                    'email' => '12000636@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000637',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Brad Figueroa',
                    'email' => '12000637@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000638',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Catherine Guerrero',
                    'email' => '12000638@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000639',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Scott Paul',
                    'email' => '12000639@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000640',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Terence Bush',
                    'email' => '12000640@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000641',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Gene Griffith',
                    'email' => '12000641@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000642',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Karen Sharp',
                    'email' => '12000642@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000643',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Raquel Jacobs',
                    'email' => '12000643@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000644',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Sandy Berry',
                    'email' => '12000644@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000645',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Mindy Hampton',
                    'email' => '12000645@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000646',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Leslie Thornton',
                    'email' => '12000646@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000647',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Irene Bishop',
                    'email' => '12000647@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000648',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Byron Bass',
                    'email' => '12000648@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000649',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Naomi Barrett',
                    'email' => '12000649@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000650',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Genevieve Patterson',
                    'email' => '12000650@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000651',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jody Leonard',
                    'email' => '12000651@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000652',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ramiro Freeman',
                    'email' => '12000652@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000653',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Julius Sanchez',
                    'email' => '12000653@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000654',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Melody Fisher',
                    'email' => '12000654@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000655',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Sherry Fowler',
                    'email' => '12000655@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000656',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Walter Parsons',
                    'email' => '12000656@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000657',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Clara Howell',
                    'email' => '12000657@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000658',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Wilson Stanley',
                    'email' => '12000658@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000659',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Pat Robinson',
                    'email' => '12000659@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000660',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Rita Francis',
                    'email' => '12000660@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000661',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Vernon Guzman',
                    'email' => '12000661@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000662',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Alfredo Kennedy',
                    'email' => '12000662@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000663',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Julian Clark',
                    'email' => '12000663@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000664',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Joanne Stevenson',
                    'email' => '12000664@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000665',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Laverne Mckinney',
                    'email' => '12000665@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000666',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Garry Holmes',
                    'email' => '12000666@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000667',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Andrea Daniels',
                    'email' => '12000667@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000668',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Brent Christensen',
                    'email' => '12000668@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000669',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Karla Valdez',
                    'email' => '12000669@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000670',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Guadalupe Ford',
                    'email' => '12000670@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000671',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Hannah Wood',
                    'email' => '12000671@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000672',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Clifton Erickson',
                    'email' => '12000672@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000673',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Bryan Rios',
                    'email' => '12000673@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000674',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Gordon Martinez',
                    'email' => '12000674@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000675',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Terrell Ballard',
                    'email' => '12000675@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000676',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Linda Morrison',
                    'email' => '12000676@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000677',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Loren Hunter',
                    'email' => '12000677@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000678',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Shannon Silva',
                    'email' => '12000678@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000679',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lowell Williamson',
                    'email' => '12000679@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000680',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ryan Ward',
                    'email' => '12000680@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000681',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jay Jones',
                    'email' => '12000681@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000682',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Mark Cain',
                    'email' => '12000682@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000683',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Willis Conner',
                    'email' => '12000683@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000684',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Donald Jenkins',
                    'email' => '12000684@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000685',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jaime French',
                    'email' => '12000685@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000686',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Laurence Andrews',
                    'email' => '12000686@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000687',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jamie Medina',
                    'email' => '12000687@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000688',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Tiffany Sutton',
                    'email' => '12000688@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000689',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Eleanor Willis',
                    'email' => '12000689@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000690',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lela Hayes',
                    'email' => '12000690@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000691',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Peggy Perkins',
                    'email' => '12000691@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000692',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Melissa Hopkins',
                    'email' => '12000692@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000693',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Anita Mcdonald',
                    'email' => '12000693@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000694',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Maria Malone',
                    'email' => '12000694@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000695',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jon Mcguire',
                    'email' => '12000695@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000696',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Neil Saunders',
                    'email' => '12000696@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000697',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Penny Harmon',
                    'email' => '12000697@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000698',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Mack Schneider',
                    'email' => '12000698@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000699',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Gregg Clarke',
                    'email' => '12000699@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000700',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Joseph Ferguson',
                    'email' => '12000700@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000701',
                    'password' => 'X7SRScuz9FTfHxwt2Z9zmJrT',
                    'full_name' => 'James Smith',
                    'email' => '12000701@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000702',
                    'password' => 'vH4vSQum2V6BSAJ4MKVjNuR5',
                    'full_name' => 'Christopher Brown',
                    'email' => '12000702@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000703',
                    'password' => 'vVUA5GJXwgd9mn4EWBhEcndZ',
                    'full_name' => 'Ronald Lee',
                    'email' => '12000703@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000704',
                    'password' => 'URCv63ALL64Gx7MQnEqrLXRN',
                    'full_name' => 'Mary Wilson',
                    'email' => '12000704@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000705',
                    'password' => 'x3Gs2pP7cVduQ8DHCFbqa3dN',
                    'full_name' => 'Lisa Patel',
                    'email' => '12000705@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000706',
                    'password' => 'gX9yuCqLVT95ph4ESCR5Ghc7',
                    'full_name' => 'Michelle Taylor',
                    'email' => '12000706@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000707',
                    'password' => 'HRJRJhbUAj7UhPE8XvqHYvFz',
                    'full_name' => 'John Wong',
                    'email' => '12000707@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000708',
                    'password' => 'rnSREzT8eAfZD4TeRVaN4d2M',
                    'full_name' => 'Daniel Campbell',
                    'email' => '12000708@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000709',
                    'password' => 'NCJa6vWLBfwcNbWMWBGf4NSz',
                    'full_name' => 'Anthony Williams',
                    'email' => '12000709@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000710',
                    'password' => '4ujauWvukJd3mKdvvS3aAbxy',
                    'full_name' => 'Patricia Thompson',
                    'email' => '12000710@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000711',
                    'password' => 'kTg2nf2GbgXPBymzWUSvCWAQ',
                    'full_name' => 'Nancy Jones',
                    'email' => '12000711@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000712',
                    'password' => 'HLWQVzRLVyrPnvPwvLBGTxuc',
                    'full_name' => 'Laura Miller',
                    'email' => '12000712@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000713',
                    'password' => 'eTGRcznST7XEjNZESWpwXQV2',
                    'full_name' => 'Robert Moore',
                    'email' => '12000713@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000714',
                    'password' => 'GUdNbBnmShngM9KfxHRWbgka',
                    'full_name' => 'Paul Jackson',
                    'email' => '12000714@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000715',
                    'password' => 'hBjQTANBykgyuJp5QwwZ4wCg',
                    'full_name' => 'Kevin White',
                    'email' => '12000715@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000716',
                    'password' => 'EE3jEvA7kVcy6ca9bPAGuqbe',
                    'full_name' => 'Linda Harris',
                    'email' => '12000716@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000717',
                    'password' => 'eFgAFsVDbyrhfGJ7uF3ycXzE',
                    'full_name' => 'Karen Martin',
                    'email' => '12000717@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000718',
                    'password' => 'Bts8LAQbZEW3SsCFZVBJgMVe',
                    'full_name' => 'Sarah Garcia',
                    'email' => '12000718@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000719',
                    'password' => 'qZgHcR4VBUWE6BTaMXpsjpTU',
                    'full_name' => 'Michael Robinson',
                    'email' => '12000719@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000720',
                    'password' => 'gMuCY29SgmBLNEap53kkVGVx',
                    'full_name' => 'Mark Clark',
                    'email' => '12000720@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000721',
                    'password' => 'PcKWDw2NGd9mr8pn8fckr75D',
                    'full_name' => 'Jason Anderson',
                    'email' => '12000721@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000722',
                    'password' => 'z7cfENb8gNabG4yG7rtpNeu2',
                    'full_name' => 'Barbara Martinez',
                    'email' => '12000722@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000723',
                    'password' => 'v6AhE3QBxWL5Fu4P5vS2vbNY',
                    'full_name' => 'Betty Walker',
                    'email' => '12000723@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000724',
                    'password' => 'SVyWF8kxpHHUrAZyckJXYEMP',
                    'full_name' => 'Kimberly Allen',
                    'email' => '12000724@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000725',
                    'password' => 'qNYqrXbLkZKPHxZkvq3CMXSf',
                    'full_name' => 'William Young',
                    'email' => '12000725@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000726',
                    'password' => 'w8Yk9pzHkHUT4EKZuuAZhp2d',
                    'full_name' => 'Donald Scott',
                    'email' => '12000726@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000727',
                    'password' => 'XxAhrPh2YWgsxvxAzpmR9YC8',
                    'full_name' => 'Jeff Nelson',
                    'email' => '12000727@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000728',
                    'password' => 'sYb6qbZA9AKqeFKBjhz96PkQ',
                    'full_name' => 'Elizabeth Carter',
                    'email' => '12000728@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000729',
                    'password' => 'xn6RqKcFrHvx5vNHnTdymcUa',
                    'full_name' => 'Helen Mitchell',
                    'email' => '12000729@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000730',
                    'password' => 'Fs3WtnNK4FyTMpuEWf9bHLqd',
                    'full_name' => 'Deborah Perez',
                    'email' => '12000730@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000731',
                    'password' => 'wJ3KaA6sh96v4CKYshZKGqmp',
                    'full_name' => 'David Roberts',
                    'email' => '12000731@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000732',
                    'password' => 'dH7VnVxZbVEdpMM2madNrgHG',
                    'full_name' => 'George Phillips',
                    'email' => '12000732@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000733',
                    'password' => 'uDLzzMt8gayDGV4CwwK5GgCy',
                    'full_name' => 'Jennifer Parker',
                    'email' => '12000733@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000734',
                    'password' => 'yp3u4XCKCASUcPAbnkjtgjLm',
                    'full_name' => 'Sandra Collins',
                    'email' => '12000734@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000735',
                    'password' => 'TqdqMQB3ngF25BFbBCJNY3cS',
                    'full_name' => 'Richard Evans',
                    'email' => '12000735@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000736',
                    'password' => 'tVQBzNC6uHX5kaaj3rmLZLmt',
                    'full_name' => 'Kenneth Stewart',
                    'email' => '12000736@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000737',
                    'password' => '9UJPY3aLbmXWQsdTz6Pk8S5H',
                    'full_name' => 'Maria Morris',
                    'email' => '12000737@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000738',
                    'password' => 'xMQ7FNcMbWbdqFWxsLd9Auk2',
                    'full_name' => 'Donna Roogers',
                    'email' => '12000738@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000739',
                    'password' => 'AWb6FqAGMmgEZbzVHgATKDcw',
                    'full_name' => 'Charles Carter',
                    'email' => '12000739@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000740',
                    'password' => 'Va2uBmnzdDFkbevu67EvDqmp',
                    'full_name' => 'Steven King',
                    'email' => '12000740@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000741',
                    'password' => 'FqzRX5T7RJwPr8YVZEvbSGaE',
                    'full_name' => 'Susan Wright',
                    'email' => '12000741@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000742',
                    'password' => 'GWB82eZRPXHsZD75bKazcFZy',
                    'full_name' => 'Carol Green',
                    'email' => '12000742@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000743',
                    'password' => 'CYYqhLukuEsguxpQPrRYs7tb',
                    'full_name' => 'Joseph Baker',
                    'email' => '12000743@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000744',
                    'password' => 'xJyuU3zb4guHTZnCAjpwZaKM',
                    'full_name' => 'Edward Adams',
                    'email' => '12000744@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000745',
                    'password' => 'CF4PPPrTQxZVKTdNEBEK5Hqh',
                    'full_name' => 'Ruth Sanchez',
                    'email' => '12000745@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000746',
                    'password' => 'TQwrNAF5GCvg7PPGK2wNmcnp',
                    'full_name' => 'David Johnson',
                    'email' => '12000746@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000747',
                    'password' => 'WK3TcB6wpDewmSQLhdSF6FRm',
                    'full_name' => 'George Wright',
                    'email' => '12000747@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000748',
                    'password' => '2CXrNBbBt5Cmb59PkSJSuExa',
                    'full_name' => 'Jennifer Barron',
                    'email' => '12000748@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000749',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Sandra Newell',
                    'email' => '12000749@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000750',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Dale Hayes',
                    'email' => '12000750@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000751',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Molly Haynes',
                    'email' => '12000751@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000752',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Mildred Gray',
                    'email' => '12000752@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000753',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Gerald Chapman',
                    'email' => '12000753@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000754',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Irma Webb',
                    'email' => '12000754@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000755',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Shelly Hardy',
                    'email' => '12000755@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000756',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Max Byrd',
                    'email' => '12000756@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000757',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Josefina Foster',
                    'email' => '12000757@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000758',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Evan Thomas',
                    'email' => '12000758@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000759',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Alicia Colon',
                    'email' => '12000759@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000760',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Johnathan Banks',
                    'email' => '12000760@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000761',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lindsey Pearson',
                    'email' => '12000761@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000762',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ollie Stephens',
                    'email' => '12000762@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000763',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Pearl Norman',
                    'email' => '12000763@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000764',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Elsa Collins',
                    'email' => '12000764@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000765',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Georgia Cummings',
                    'email' => '12000765@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000766',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Tanya Simpson',
                    'email' => '12000766@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000767',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Hilda Richardson',
                    'email' => '12000767@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000768',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Marguerite Harvey',
                    'email' => '12000768@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000769',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Hope Mcdonald',
                    'email' => '12000769@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000770',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Marcia Johnson',
                    'email' => '12000770@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000771',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Neal Cole',
                    'email' => '12000771@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000772',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Joey Sims',
                    'email' => '12000772@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000773',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Stanley Rivera',
                    'email' => '12000773@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000774',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Maggie Walsh',
                    'email' => '12000774@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000775',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Nellie Peterson',
                    'email' => '12000775@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000776',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Gregory Chandler',
                    'email' => '12000776@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000777',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Emilio Warner',
                    'email' => '12000777@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000778',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Leah Robinson',
                    'email' => '12000778@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000779',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jeff Nguyen',
                    'email' => '12000779@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000780',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jackie Mcbride',
                    'email' => '12000780@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000781',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Kenneth Yates',
                    'email' => '12000781@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000782',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lynn Wise',
                    'email' => '12000782@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000783',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Adrienne Swanson',
                    'email' => '12000783@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000784',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Latoya Morgan',
                    'email' => '12000784@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000785',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Sherman Barrett',
                    'email' => '12000785@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000786',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Paul Mclaughlin',
                    'email' => '12000786@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000787',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Nettie Jennings',
                    'email' => '12000787@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000788',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Wayne Barker',
                    'email' => '12000788@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000789',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Elmer Torres',
                    'email' => '12000789@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000790',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Arthur Harris',
                    'email' => '12000790@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000791',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jeannette Scott',
                    'email' => '12000791@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000792',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Krystal Lawrence',
                    'email' => '12000792@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000793',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Dewey Garza',
                    'email' => '12000793@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000794',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Christopher Doyle',
                    'email' => '12000794@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000795',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Danny Roy',
                    'email' => '12000795@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000796',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Harry French',
                    'email' => '12000796@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000797',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Rosemary Saunders',
                    'email' => '12000797@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000798',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jeremy Potter',
                    'email' => '12000798@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000799',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Kim Ramsey',
                    'email' => '12000799@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000800',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Erik Buchanan',
                    'email' => '12000800@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000801',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Madeline Martinez',
                    'email' => '12000801@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000802',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Nancy Santos',
                    'email' => '12000802@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000803',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Teri Ingram',
                    'email' => '12000803@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000804',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Monique Armstrong',
                    'email' => '12000804@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000805',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Don Reeves',
                    'email' => '12000805@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000806',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Dora Craig',
                    'email' => '12000806@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000807',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Minnie Mcdaniel',
                    'email' => '12000807@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000808',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Elisa Hicks',
                    'email' => '12000808@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000809',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Joan Schwartz',
                    'email' => '12000809@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000810',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Alex Lawson',
                    'email' => '12000810@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000811',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ralph Walton',
                    'email' => '12000811@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000812',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Dana Stevens',
                    'email' => '12000812@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000813',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Dwight Estrada',
                    'email' => '12000813@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000814',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Bob Morrison',
                    'email' => '12000814@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000815',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Mattie Wilson',
                    'email' => '12000815@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000816',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Denise Mills',
                    'email' => '12000816@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000817',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Kent Crawford',
                    'email' => '12000817@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000818',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Margie Paul',
                    'email' => '12000818@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000819',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ignacio Fowler',
                    'email' => '12000819@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000820',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Eva Black',
                    'email' => '12000820@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000821',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Kelley Lynch',
                    'email' => '12000821@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000822',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Gertrude Cruz',
                    'email' => '12000822@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000823',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Brent Munoz',
                    'email' => '12000823@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000824',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lauren Patrick',
                    'email' => '12000824@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000825',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Kari Garcia',
                    'email' => '12000825@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000826',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lowell Delgado',
                    'email' => '12000826@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000827',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Sara Maxwell',
                    'email' => '12000827@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000828',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Isabel Park',
                    'email' => '12000828@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000829',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Darrin Jacobs',
                    'email' => '12000829@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000830',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Rex Rios',
                    'email' => '12000830@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000831',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Blanche Oliver',
                    'email' => '12000831@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000832',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Levi Waters',
                    'email' => '12000832@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000833',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Bethany Flowers',
                    'email' => '12000833@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000834',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Shannon Watson',
                    'email' => '12000834@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000835',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Marcus Roberson',
                    'email' => '12000835@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000836',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Dallas Rice',
                    'email' => '12000836@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000837',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Bennie Nichols',
                    'email' => '12000837@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000838',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Richard Palmer',
                    'email' => '12000838@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000839',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ada Ballard',
                    'email' => '12000839@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000840',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Marilyn Webster',
                    'email' => '12000840@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000841',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Harriet Stewart',
                    'email' => '12000841@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000842',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Penny Manning',
                    'email' => '12000842@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000843',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Elias Bowers',
                    'email' => '12000843@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000844',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Janice Flores',
                    'email' => '12000844@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000845',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Leticia Mitchell',
                    'email' => '12000845@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000846',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ashley Willis',
                    'email' => '12000846@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000847',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Shelley Drake',
                    'email' => '12000847@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000848',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ron Steele',
                    'email' => '12000848@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000849',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Arlene Davis',
                    'email' => '12000849@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000850',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Mercedes Stevens',
                    'email' => '12000850@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000851',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ida Singleton',
                    'email' => '12000851@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000852',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Laurence Malone',
                    'email' => '12000852@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000853',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Rudolph Oliver',
                    'email' => '12000853@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000854',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Leland Obrien',
                    'email' => '12000854@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000855',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Salvatore Castro',
                    'email' => '12000855@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000856',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jody Pearson',
                    'email' => '12000856@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000857',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Nora Holmes',
                    'email' => '12000857@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000858',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Stanley Delgado',
                    'email' => '12000858@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000859',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Barbara Steele',
                    'email' => '12000859@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000860',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Mae Gomez',
                    'email' => '12000860@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000861',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Steven Brown',
                    'email' => '12000861@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000862',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Shawn Padilla',
                    'email' => '12000862@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000863',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Eduardo Williamson',
                    'email' => '12000863@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000864',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Essie Barnett',
                    'email' => '12000864@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000865',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Leona Bell',
                    'email' => '12000865@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000866',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Suzanne Mcgee',
                    'email' => '12000866@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000867',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Mike Clayton',
                    'email' => '12000867@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000868',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ira Allen',
                    'email' => '12000868@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000869',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lora Keller',
                    'email' => '12000869@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000870',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lionel Newton',
                    'email' => '12000870@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000871',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Dianna Murray',
                    'email' => '12000871@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000872',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Dean Robinson',
                    'email' => '12000872@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000873',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Victoria Sutton',
                    'email' => '12000873@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000874',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Constance Gonzales',
                    'email' => '12000874@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000875',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Nicole Warner',
                    'email' => '12000875@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000876',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Kent Bryan',
                    'email' => '12000876@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000877',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lillie Quinn',
                    'email' => '12000877@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000878',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Zachary Hanson',
                    'email' => '12000878@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000879',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Doug Ramos',
                    'email' => '12000879@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000880',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Elena Clark',
                    'email' => '12000880@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000881',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Luis Martinez',
                    'email' => '12000881@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000882',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Clifford Grant',
                    'email' => '12000882@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000883',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Antonio Barker',
                    'email' => '12000883@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000884',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Shelly Vargas',
                    'email' => '12000884@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000885',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Stacy Watts',
                    'email' => '12000885@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000886',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ivan Walsh',
                    'email' => '12000886@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000887',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Earl Clarke',
                    'email' => '12000887@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000888',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Sherri Warren',
                    'email' => '12000888@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000889',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Viola Gill',
                    'email' => '12000889@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000890',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Terri Moreno',
                    'email' => '12000890@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000891',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Willie Ramirez',
                    'email' => '12000891@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000892',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Bennie Hernandez',
                    'email' => '12000892@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000893',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Tim Nguyen',
                    'email' => '12000893@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000894',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Rebecca Meyer',
                    'email' => '12000894@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000895',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Marie Glover',
                    'email' => '12000895@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000896',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Chester Holt',
                    'email' => '12000896@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000897',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Vernon Evans',
                    'email' => '12000897@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000898',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Walter Fuller',
                    'email' => '12000898@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000899',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Catherine Gutierrez',
                    'email' => '12000899@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000900',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Patti Bryant',
                    'email' => '12000900@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000901',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Elias Park',
                    'email' => '12000901@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000902',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Sheila Hicks',
                    'email' => '12000902@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000903',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Merle White',
                    'email' => '12000903@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000904',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Isabel Wright',
                    'email' => '12000904@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000905',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ismael Kim',
                    'email' => '12000905@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000906',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Leroy Elliott',
                    'email' => '12000906@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000907',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Claude Adkins',
                    'email' => '12000907@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000908',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Claudia Taylor',
                    'email' => '12000908@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000909',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Rosemary Jensen',
                    'email' => '12000909@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000910',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Delbert Ortega',
                    'email' => '12000910@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000911',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Bobby Harris',
                    'email' => '12000911@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000912',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Eunice Price',
                    'email' => '12000912@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000913',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Norma Diaz',
                    'email' => '12000913@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000914',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ray Pittman',
                    'email' => '12000914@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000915',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ed Webster',
                    'email' => '12000915@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000916',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lena Graham',
                    'email' => '12000916@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000917',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Thelma Blake',
                    'email' => '12000917@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000918',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Bert Zimmerman',
                    'email' => '12000918@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000919',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Alison Potter',
                    'email' => '12000919@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000920',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Van Norton',
                    'email' => '12000920@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000921',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jose James',
                    'email' => '12000921@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000922',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Christie Flowers',
                    'email' => '12000922@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000923',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Robyn Reese',
                    'email' => '12000923@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000924',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Daryl Mason',
                    'email' => '12000924@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000925',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Melvin Alvarado',
                    'email' => '12000925@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000926',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Gina Morales',
                    'email' => '12000926@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000927',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Seth Brock',
                    'email' => '12000927@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000928',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Evan Norris',
                    'email' => '12000928@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000929',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Juana Lindsey',
                    'email' => '12000929@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000930',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Teresa Frank',
                    'email' => '12000930@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000931',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Jeannette Harrington',
                    'email' => '12000931@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000932',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Terrence Lopez',
                    'email' => '12000932@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000933',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Wade Woods',
                    'email' => '12000933@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000934',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Carmen Lynch',
                    'email' => '12000934@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000935',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Maryann Mann',
                    'email' => '12000935@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000936',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Noah Shelton',
                    'email' => '12000936@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000937',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Larry Barber',
                    'email' => '12000937@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000938',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Winifred Freeman',
                    'email' => '12000938@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000939',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Joanna Riley',
                    'email' => '12000939@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000940',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Mattie Reid',
                    'email' => '12000940@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000941',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Agnes Bowman',
                    'email' => '12000941@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000942',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Greg Marshall',
                    'email' => '12000942@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000943',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Tamara Rodriguez',
                    'email' => '12000943@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000944',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Pauline Sparks',
                    'email' => '12000944@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000945',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Ella Lucas',
                    'email' => '12000945@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000946',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Laura Valdez',
                    'email' => '12000946@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000947',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Lillian Porter',
                    'email' => '12000947@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000948',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Darlene Curtis',
                    'email' => '12000948@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000949',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Anita Hubbard',
                    'email' => '12000949@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000950',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Otis Olson',
                    'email' => '12000950@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000951',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Boyd Ingram',
                    'email' => '12000951@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000952',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Samuel Yates',
                    'email' => '12000952@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000953',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Hazel Dunn',
                    'email' => '12000953@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000954',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Constance Rowe',
                    'email' => '12000954@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => '12000955',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Aubrey Fuller',
                    'email' => '12000955@examplecollege.ac.uk',
                    'role' => 'Student',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => 'jbarron',
                    'password' => '2CXrNBbBt5Cmb59PkSJSuExa',
                    'full_name' => 'Jennifer Barron',
                    'email' => 'jbarron@examplecollege.ac.uk',
                    'role' => 'Tutor',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => 'snewell',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'Sandra Newell',
                    'email' => 'snewell@examplecollege.ac.uk',
                    'role' => 'Tutor',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => 'gwright',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'George Wright',
                    'email' => 'gwright@examplecollege.ac.uk',
                    'role' => 'Course Organiser',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'user_id' => 'djohnson',
                    'password' => '5ntAUguhGyDvrEqee9wU3QYy',
                    'full_name' => 'David Johnson',
                    'email' => 'djohnson@examplecollege.ac.uk',
                    'role' => 'Course Organiser',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
            )
        );
    }

}