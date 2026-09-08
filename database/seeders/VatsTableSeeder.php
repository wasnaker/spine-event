<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VatsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vats')->delete();
        
        \DB::table('vats')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ulid' => '01m1xs5zjemfj8p7nsmg6408zy',
                'npwp' => '01.001.001.001-001.001',
                'name' => 'PT Citra Buana - Plant Jawa Tengah',
                'created_at' => '2026-09-07 11:13:46',
                'updated_at' => '2026-09-07 15:59:11',
            ),
            1 => 
            array (
                'id' => 2,
                'ulid' => '01m1xs5zk9tdrxnpw1rwwr1ec6',
                'npwp' => '01.001.001.001-002.001',
                'name' => 'PT Cipta Karya Mandala - Cabang Jawa Barat',
                'created_at' => '2026-09-07 11:13:46',
                'updated_at' => '2026-09-07 11:13:46',
            ),
            2 => 
            array (
                'id' => 3,
                'ulid' => '01m1xs940spnt3060nt1kx6q2c',
                'npwp' => '01.001.001.001-003.001',
                'name' => 'PT Cipta Karya - Cabang Jawa Barat',
                'created_at' => '2026-09-07 11:15:28',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            3 => 
            array (
                'id' => 4,
                'ulid' => '01m1xs9411ybp52m7rxv0p7han',
                'npwp' => '01.001.001.001-004.001',
                'name' => 'PT Cipta Karya - Plant Jawa Tengah',
                'created_at' => '2026-09-07 11:15:28',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            4 => 
            array (
                'id' => 5,
                'ulid' => '01m1xs941aknyjzmkr6dpwg1yg',
                'npwp' => '02.002.002.002-002.002',
                'name' => 'PT Delta Mandiri - Plant DI Yogyakarta',
                'created_at' => '2026-09-07 11:15:28',
                'updated_at' => '2026-09-07 15:59:11',
            ),
            5 => 
            array (
                'id' => 6,
                'ulid' => '01m1xs941qcd3vjxheyntrd5fe',
                'npwp' => '02.002.002.002-003.002',
                'name' => 'PT Nusantara Sejahtera - Cabang Jawa Tengah',
                'created_at' => '2026-09-07 11:15:28',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            6 => 
            array (
                'id' => 7,
                'ulid' => '01m1xs9420ym8r261vqrpgyq4q',
                'npwp' => '02.002.002.002-004.002',
                'name' => 'PT Nusantara Sejahtera - Plant DI Yogyakarta',
                'created_at' => '2026-09-07 11:15:28',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            7 => 
            array (
                'id' => 8,
                'ulid' => '01m1xs9428nn2vvtx70qejrj5y',
                'npwp' => '03.003.003.003-003.003',
                'name' => 'PT Garuda Perkasa - Plant Jawa Timur',
                'created_at' => '2026-09-07 11:15:28',
                'updated_at' => '2026-09-07 15:59:11',
            ),
            8 => 
            array (
                'id' => 9,
                'ulid' => '01m1xs942j4224trtct1jqyy3d',
                'npwp' => '03.003.003.003-002.003',
                'name' => 'PT Bina Marga Mandala - Cabang DI Yogyakarta',
                'created_at' => '2026-09-07 11:15:28',
                'updated_at' => '2026-09-07 11:15:28',
            ),
            9 => 
            array (
                'id' => 10,
                'ulid' => '01m1xs9432713mkmer51jm66jq',
                'npwp' => '03.003.003.003-004.003',
                'name' => 'PT Jaya Abadi - Plant Jawa Timur',
                'created_at' => '2026-09-07 11:15:28',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            10 => 
            array (
                'id' => 11,
                'ulid' => '01m1xs943dh6h5n27a02dxgy16',
                'npwp' => '04.004.004.004-004.004',
                'name' => 'PT Karya Bahari - Plant DKI Jakarta',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 15:59:11',
            ),
            11 => 
            array (
                'id' => 12,
                'ulid' => '01m1xs943trw1gvyaf91dsyndf',
                'npwp' => '04.004.004.004-002.004',
                'name' => 'PT Jaya Abadi Mandala - Cabang Jawa Timur',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 11:15:29',
            ),
            12 => 
            array (
                'id' => 13,
                'ulid' => '01m1xs944aq98pg1890tfg6654',
                'npwp' => '04.004.004.004-003.004',
                'name' => 'PT Bina Marga - Cabang Sumatera Selatan',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            13 => 
            array (
                'id' => 14,
                'ulid' => '01m1xs9451jc1wp1fq7e2tzdx8',
                'npwp' => '05.005.005.005-005.005',
                'name' => 'PT Lestari Nusantara - Plant Jawa Barat',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 15:59:11',
            ),
            14 => 
            array (
                'id' => 15,
                'ulid' => '01m1xs945er43qxefyfrmq89jm',
                'npwp' => '05.005.005.005-002.005',
                'name' => 'PT Mulia Bersama Mandala - Cabang Banten',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 11:15:29',
            ),
            15 => 
            array (
                'id' => 16,
                'ulid' => '01m1xs945xyq0ne3r9jwf1eb1h',
                'npwp' => '05.005.005.005-003.005',
                'name' => 'PT Sinar Mas - Cabang Banten',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            16 => 
            array (
                'id' => 17,
                'ulid' => '01m1xs9469t53x45g0e1j4ehwy',
                'npwp' => '05.005.005.005-004.005',
                'name' => 'PT Sinar Mas - Plant Bali',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            17 => 
            array (
                'id' => 18,
                'ulid' => '01m1xs946nrsjrvtfsneh5t063',
                'npwp' => '06.006.006.006-006.006',
                'name' => 'PT Surya Pratama - Plant Jawa Tengah',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 15:59:11',
            ),
            18 => 
            array (
                'id' => 19,
                'ulid' => '01m1xs947561z3r25hshysfktx',
                'npwp' => '06.006.006.006-002.006',
                'name' => 'PT Sinar Mas Mandala - Cabang Bali',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 11:15:29',
            ),
            19 => 
            array (
                'id' => 20,
                'ulid' => '01m1xs947kzsr75pk8jx75vzy5',
                'npwp' => '06.006.006.006-003.006',
                'name' => 'PT Mulia Bersama - Cabang Bali',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            20 => 
            array (
                'id' => 21,
                'ulid' => '01m1xs9482fge2p4fmenjtbbpn',
                'npwp' => '06.006.006.006-004.006',
                'name' => 'PT Mulia Bersama - Plant Sumatera Utara',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            21 => 
            array (
                'id' => 22,
                'ulid' => '01m1xs948jq2hndeam4zgpshm9',
                'npwp' => '07.007.007.007-007.007',
                'name' => 'PT Nusa Indah - Plant DI Yogyakarta',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 15:59:11',
            ),
            22 => 
            array (
                'id' => 23,
                'ulid' => '01m1xs948yw7w26tr8hkmexymw',
                'npwp' => '07.007.007.007-002.007',
                'name' => 'PT Bumi Persada Mandala - Cabang Sumatera Utara',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 11:15:29',
            ),
            23 => 
            array (
                'id' => 24,
                'ulid' => '01m1xs949a0rqn02vqz4k96je1',
                'npwp' => '07.007.007.007-003.007',
                'name' => 'PT Bumi Persada - Cabang Sumatera Utara',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            24 => 
            array (
                'id' => 25,
                'ulid' => '01m1xs949q07xg9eq2hn2ncxs8',
                'npwp' => '07.007.007.007-004.007',
                'name' => 'PT Bumi Persada - Plant Riau',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            25 => 
            array (
                'id' => 26,
                'ulid' => '01m1xs94a450afpd10m6wscv65',
                'npwp' => '08.008.008.008-008.008',
                'name' => 'PT Pilar Sejahtera - Plant Jawa Timur',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 15:59:11',
            ),
            26 => 
            array (
                'id' => 27,
                'ulid' => '01m1xs94afj10n50xcs9wrepxw',
                'npwp' => '08.008.008.008-002.008',
                'name' => 'PT Prima Utama Mandala - Cabang Riau',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 11:15:29',
            ),
            27 => 
            array (
                'id' => 28,
                'ulid' => '01m1xs94axj28sf0952rwg146f',
                'npwp' => '08.008.008.008-003.008',
                'name' => 'PT Prima Utama - Cabang Riau',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            28 => 
            array (
                'id' => 29,
                'ulid' => '01m1xs94bd8xy3vnew8sdshj63',
                'npwp' => '08.008.008.008-004.008',
                'name' => 'PT Prima Utama - Plant Sulawesi Selatan',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            29 => 
            array (
                'id' => 30,
                'ulid' => '01m1xs94bsyx7zq5ysr7cqw5hz',
                'npwp' => '09.009.009.009-009.009',
                'name' => 'PT Rajawali Nusantara - Plant DKI Jakarta',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 15:59:11',
            ),
            30 => 
            array (
                'id' => 31,
                'ulid' => '01m1xs94c4khhwgzzx7artwdex',
                'npwp' => '09.009.009.009-002.009',
                'name' => 'PT Indah Kiat Mandala - Cabang Sulawesi Selatan',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 11:15:29',
            ),
            31 => 
            array (
                'id' => 32,
                'ulid' => '01m1xs94chdd17hafhhcs90mea',
                'npwp' => '09.009.009.009-003.009',
                'name' => 'PT Indah Kiat - Cabang Sulawesi Selatan',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            32 => 
            array (
                'id' => 33,
                'ulid' => '01m1xs94cvkf00trfzhrqf4tmz',
                'npwp' => '09.009.009.009-004.009',
                'name' => 'PT Indah Kiat - Plant DKI Jakarta',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            33 => 
            array (
                'id' => 34,
                'ulid' => '01m1xs94d8c1rw98gv6kdh8qkv',
                'npwp' => '10.010.010.010-010.010',
                'name' => 'PT Tunas Karya - Plant Jawa Barat',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 15:59:11',
            ),
            34 => 
            array (
                'id' => 35,
                'ulid' => '01m1xs94dj8rk0epbnphcyyk3w',
                'npwp' => '10.010.010.010-002.010',
                'name' => 'PT Surya Gemilang Mandala - Cabang DKI Jakarta',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 11:15:29',
            ),
            35 => 
            array (
                'id' => 36,
                'ulid' => '01m1xs94dxpbmxtevc451v4smd',
                'npwp' => '10.010.010.010-003.010',
                'name' => 'PT Surya Gemilang - Cabang DKI Jakarta',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            36 => 
            array (
                'id' => 37,
                'ulid' => '01m1xs94e8b8ms7xp71nhkjan8',
                'npwp' => '10.010.010.010-004.010',
                'name' => 'PT Surya Gemilang - Plant Jawa Barat',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            37 => 
            array (
                'id' => 38,
                'ulid' => '01m1xs94epyz8nyqfp52va73bb',
                'npwp' => '11.011.011.011-011.011',
                'name' => 'PT Kencana Tunggal',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            38 => 
            array (
                'id' => 39,
                'ulid' => '01m1xs94f1de2f3kxe15y0z05h',
                'npwp' => '11.011.011.011-002.011',
                'name' => 'PT Kencana Tunggal Mandala - Cabang Jawa Barat',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 11:15:29',
            ),
            39 => 
            array (
                'id' => 40,
                'ulid' => '01m1xs94fd40v37v5n2ht3bf4y',
                'npwp' => '11.011.011.011-003.011',
                'name' => 'PT Kencana Tunggal - Cabang Jawa Barat',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            40 => 
            array (
                'id' => 41,
                'ulid' => '01m1xs94fr24057s9rs84a7eey',
                'npwp' => '11.011.011.011-004.011',
                'name' => 'PT Kencana Tunggal - Plant Jawa Tengah',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            41 => 
            array (
                'id' => 42,
                'ulid' => '01m1xs94g1nbmt7gy4y5hd81n4',
                'npwp' => '12.012.012.012-012.012',
                'name' => 'PT Harapan Jaya',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            42 => 
            array (
                'id' => 43,
                'ulid' => '01m1xs94ge5wrq46cbp5afrvnp',
                'npwp' => '12.012.012.012-002.012',
                'name' => 'PT Harapan Jaya Mandala - Cabang Jawa Tengah',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 11:15:29',
            ),
            43 => 
            array (
                'id' => 44,
                'ulid' => '01m1xs94gsqwtja7a1jgtkzwcx',
                'npwp' => '12.012.012.012-003.012',
                'name' => 'PT Harapan Jaya - Cabang Jawa Tengah',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            44 => 
            array (
                'id' => 45,
                'ulid' => '01m1xs94h5j6e8mhgzqwy9yhxc',
                'npwp' => '12.012.012.012-004.012',
                'name' => 'PT Harapan Jaya - Plant DI Yogyakarta',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            45 => 
            array (
                'id' => 46,
                'ulid' => '01m1xs94hk6kr8rt6m7sdnh2qj',
                'npwp' => '13.013.013.013-013.013',
                'name' => 'PT Berkah Mandiri',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:12:00',
            ),
            46 => 
            array (
                'id' => 47,
                'ulid' => '01m1xs94hw2ct0j00s4758x6rx',
                'npwp' => '13.013.013.013-002.013',
                'name' => 'PT Berkah Mandiri Mandala - Cabang DI Yogyakarta',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 11:15:29',
            ),
            47 => 
            array (
                'id' => 48,
                'ulid' => '01m1xs94j4q1r1a13tw42f8qd7',
                'npwp' => '13.013.013.013-003.013',
                'name' => 'PT Berkah Mandiri - Cabang DI Yogyakarta',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:12:00',
            ),
            48 => 
            array (
                'id' => 49,
                'ulid' => '01m1xs94jc3n0dnkc8qs5zpvt3',
                'npwp' => '13.013.013.013-004.013',
                'name' => 'PT Berkah Mandiri - Plant Jawa Timur',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:12:00',
            ),
            49 => 
            array (
                'id' => 50,
                'ulid' => '01m1xs94jns310hn6zssfvzzv3',
                'npwp' => '14.014.014.014-014.014',
                'name' => 'PT Cahaya Nusantara',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:12:00',
            ),
            50 => 
            array (
                'id' => 51,
                'ulid' => '01m1xs94rfk1q0z5yxjs34xzay',
                'npwp' => '14.014.014.014-002.014',
                'name' => 'PT Cahaya Nusantara Mandala - Cabang Jawa Timur',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 11:15:29',
            ),
            51 => 
            array (
                'id' => 52,
                'ulid' => '01m1xs94rwdgcm51fd8p8jx70g',
                'npwp' => '14.014.014.014-003.014',
                'name' => 'PT Cahaya Nusantara - Cabang Sumatera Selatan',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:12:00',
            ),
            52 => 
            array (
                'id' => 53,
                'ulid' => '01m1xs94x0nszv2wm8sy4hf0fs',
                'npwp' => '14.014.014.014-004.014',
                'name' => 'PT Cahaya Nusantara - Plant Sumatera Selatan',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:12:00',
            ),
            53 => 
            array (
                'id' => 54,
                'ulid' => '01m1xs94xd598sgn65d7xg695h',
                'npwp' => '15.015.015.015-015.015',
                'name' => 'PT Sentosa Abadi',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:12:00',
            ),
            54 => 
            array (
                'id' => 55,
                'ulid' => '01m1xs94xt37x2w52717bnw3az',
                'npwp' => '15.015.015.015-002.015',
                'name' => 'PT Sentosa Abadi Mandala - Cabang Banten',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 11:15:29',
            ),
            55 => 
            array (
                'id' => 56,
                'ulid' => '01m1xs94y7fy7n1nhcj85hndzm',
                'npwp' => '15.015.015.015-003.015',
                'name' => 'PT Sentosa Abadi - Cabang Banten',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:12:00',
            ),
            56 => 
            array (
                'id' => 57,
                'ulid' => '01m1xs94ymg8hvykndf29pysq7',
                'npwp' => '15.015.015.015-004.015',
                'name' => 'PT Sentosa Abadi - Plant Bali',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:12:00',
            ),
            57 => 
            array (
                'id' => 58,
                'ulid' => '01m1xs94z19tnsyb4454ana7mp',
                'npwp' => '16.016.016.016-016.016',
                'name' => 'PT Mitra Sejati',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:12:00',
            ),
            58 => 
            array (
                'id' => 59,
                'ulid' => '01m1xs94zdaxpdga87b71p8eab',
                'npwp' => '16.016.016.016-002.016',
                'name' => 'PT Mitra Sejati Mandala - Cabang Bali',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 11:15:29',
            ),
            59 => 
            array (
                'id' => 60,
                'ulid' => '01m1xs94zve9cn8eh347czpk5z',
                'npwp' => '16.016.016.016-003.016',
                'name' => 'PT Mitra Sejati - Cabang Bali',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:12:00',
            ),
            60 => 
            array (
                'id' => 61,
                'ulid' => '01m1xs9509sardx0q3marejk1f',
                'npwp' => '16.016.016.016-004.016',
                'name' => 'PT Mitra Sejati - Plant Sumatera Utara',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:12:00',
            ),
            61 => 
            array (
                'id' => 62,
                'ulid' => '01m1xs950prqmqxx04r02ha0z5',
                'npwp' => '17.017.017.017-017.017',
                'name' => 'PT Wijaya Karya',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:12:00',
            ),
            62 => 
            array (
                'id' => 63,
                'ulid' => '01m1xs95133vjrhrqxzdemv505',
                'npwp' => '17.017.017.017-002.017',
                'name' => 'PT Prasetya Utama Mandala - Cabang Sumatera Utara',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 11:15:29',
            ),
            63 => 
            array (
                'id' => 64,
                'ulid' => '01m1xs951hcjwega72ntg3vr79',
                'npwp' => '17.017.017.017-003.017',
                'name' => 'PT Wijaya Karya - Cabang Sumatera Utara',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:12:00',
            ),
            64 => 
            array (
                'id' => 65,
                'ulid' => '01m1xs951x2ywmgb8hcy2s2vxz',
                'npwp' => '17.017.017.017-004.017',
                'name' => 'PT Wijaya Karya - Plant Riau',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:12:00',
            ),
            65 => 
            array (
                'id' => 66,
                'ulid' => '01m1xs9529pgn30yd9fmwght5m',
                'npwp' => '18.018.018.018-018.018',
                'name' => 'PT Prasetya Utama',
                'created_at' => '2026-09-07 11:15:29',
                'updated_at' => '2026-09-07 12:12:00',
            ),
            66 => 
            array (
                'id' => 67,
                'ulid' => '01m1xs952tkk3y9r7rgzpad4w3',
                'npwp' => '18.018.018.018-002.018',
                'name' => 'PT Wijaya Karya Mandala - Cabang Riau',
                'created_at' => '2026-09-07 11:15:30',
                'updated_at' => '2026-09-07 11:15:30',
            ),
            67 => 
            array (
                'id' => 68,
                'ulid' => '01m1xs953bch9z1k18ma93xw9x',
                'npwp' => '18.018.018.018-003.018',
                'name' => 'PT Prasetya Utama - Cabang Riau',
                'created_at' => '2026-09-07 11:15:30',
                'updated_at' => '2026-09-07 12:12:00',
            ),
            68 => 
            array (
                'id' => 69,
                'ulid' => '01m1xs9542836mevrzv5c1ma5j',
                'npwp' => '18.018.018.018-004.018',
                'name' => 'PT Prasetya Utama - Plant Sulawesi Selatan',
                'created_at' => '2026-09-07 11:15:30',
                'updated_at' => '2026-09-07 12:12:00',
            ),
            69 => 
            array (
                'id' => 70,
                'ulid' => '01m1xs954n80csty09t085497c',
                'npwp' => '19.019.019.019-019.019',
                'name' => 'PT Bhakti Nusantara',
                'created_at' => '2026-09-07 11:15:30',
                'updated_at' => '2026-09-07 12:12:00',
            ),
            70 => 
            array (
                'id' => 71,
                'ulid' => '01m1xs95583ytpcgf76s0n70fe',
                'npwp' => '19.019.019.019-002.019',
                'name' => 'PT Bhakti Nusantara Mandala - Cabang Sulawesi Selatan',
                'created_at' => '2026-09-07 11:15:30',
                'updated_at' => '2026-09-07 11:15:30',
            ),
            71 => 
            array (
                'id' => 72,
                'ulid' => '01m1xs955w9k2dfrq6y00xw8dr',
                'npwp' => '19.019.019.019-003.019',
                'name' => 'PT Bhakti Nusantara - Cabang Sulawesi Selatan',
                'created_at' => '2026-09-07 11:15:30',
                'updated_at' => '2026-09-07 12:12:01',
            ),
            72 => 
            array (
                'id' => 73,
                'ulid' => '01m1xs956fak7vz3gx0mdwza83',
                'npwp' => '19.019.019.019-004.019',
                'name' => 'PT Bhakti Nusantara - Plant DKI Jakarta',
                'created_at' => '2026-09-07 11:15:30',
                'updated_at' => '2026-09-07 12:12:01',
            ),
            73 => 
            array (
                'id' => 74,
                'ulid' => '01m1xs956ztxt8t4d7vddyrrkd',
                'npwp' => '20.020.020.020-020.020',
                'name' => 'PT Sukses Mandiri',
                'created_at' => '2026-09-07 11:15:30',
                'updated_at' => '2026-09-07 12:12:01',
            ),
            74 => 
            array (
                'id' => 75,
                'ulid' => '01m1xs957k71n3q0ntphehjp5s',
                'npwp' => '20.020.020.020-002.020',
                'name' => 'PT Sukses Mandiri Mandala - Cabang DKI Jakarta',
                'created_at' => '2026-09-07 11:15:30',
                'updated_at' => '2026-09-07 11:15:30',
            ),
            75 => 
            array (
                'id' => 76,
                'ulid' => '01m1xs95879hvqwwzn4h5v5kdx',
                'npwp' => '20.020.020.020-003.020',
                'name' => 'PT Sukses Mandiri - Cabang DKI Jakarta',
                'created_at' => '2026-09-07 11:15:30',
                'updated_at' => '2026-09-07 12:12:01',
            ),
            76 => 
            array (
                'id' => 77,
                'ulid' => '01m1xs958vt639mhae8s68g151',
                'npwp' => '20.020.020.020-004.020',
                'name' => 'PT Sukses Mandiri - Plant Jawa Barat',
                'created_at' => '2026-09-07 11:15:30',
                'updated_at' => '2026-09-07 12:12:01',
            ),
            77 => 
            array (
                'id' => 78,
                'ulid' => '01m1xvv6jdf7455e5k9h55zvmr',
                'npwp' => '20.021.020.021-020.020',
                'name' => 'PT Karunia Abadi',
                'created_at' => '2026-09-07 12:00:18',
                'updated_at' => '2026-09-07 12:12:01',
            ),
            78 => 
            array (
                'id' => 79,
                'ulid' => '01m1xvv892k82dtkbq3n3xc9ck',
                'npwp' => '01.001.001.001-005.001',
                'name' => 'PT Cipta Karya - Site DI Yogyakarta',
                'created_at' => '2026-09-07 12:00:20',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            79 => 
            array (
                'id' => 80,
                'ulid' => '01m1xvv8hysrpvy5n6m8jj15rz',
                'npwp' => '02.002.002.002-005.002',
                'name' => 'PT Nusantara Sejahtera - Site Jawa Timur',
                'created_at' => '2026-09-07 12:00:20',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            80 => 
            array (
                'id' => 81,
                'ulid' => '01m1xvvaeznhmdq9tngaxn399z',
                'npwp' => '03.003.003.003-005.003',
                'name' => 'PT Jaya Abadi - Site Banten',
                'created_at' => '2026-09-07 12:00:22',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            81 => 
            array (
                'id' => 82,
                'ulid' => '01m1xvvb3bj90b9qphxv3dak6j',
                'npwp' => '04.004.004.004-005.004',
                'name' => 'PT Bina Marga - Site Sumatera Selatan',
                'created_at' => '2026-09-07 12:00:23',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            82 => 
            array (
                'id' => 83,
                'ulid' => '01m1xvvd5z6rfy3jm6nkspp61e',
                'npwp' => '06.006.006.006-005.006',
                'name' => 'PT Mulia Bersama - Site Riau',
                'created_at' => '2026-09-07 12:00:25',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            83 => 
            array (
                'id' => 84,
                'ulid' => '01m1xvvffn771r47rg0fyd394t',
                'npwp' => '07.007.007.007-005.007',
                'name' => 'PT Bumi Persada - Site Sulawesi Selatan',
                'created_at' => '2026-09-07 12:00:27',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            84 => 
            array (
                'id' => 85,
                'ulid' => '01m1xvvfvx9se2kdxtgb497thg',
                'npwp' => '08.008.008.008-005.008',
                'name' => 'PT Prima Utama - Site DKI Jakarta',
                'created_at' => '2026-09-07 12:00:28',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            85 => 
            array (
                'id' => 86,
                'ulid' => '01m1xvvhchmcye0pkmadaghy4h',
                'npwp' => '09.009.009.009-005.009',
                'name' => 'PT Indah Kiat - Site Jawa Barat',
                'created_at' => '2026-09-07 12:00:29',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            86 => 
            array (
                'id' => 87,
                'ulid' => '01m1xvvhyawbjm41x9qyc78svy',
                'npwp' => '10.010.010.010-005.010',
                'name' => 'PT Surya Gemilang - Site Jawa Tengah',
                'created_at' => '2026-09-07 12:00:30',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            87 => 
            array (
                'id' => 88,
                'ulid' => '01m1xvvm5v4xg96v1azgm6b76b',
                'npwp' => '11.011.011.011-005.011',
                'name' => 'PT Kencana Tunggal - Site DI Yogyakarta',
                'created_at' => '2026-09-07 12:00:32',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            88 => 
            array (
                'id' => 89,
                'ulid' => '01m1xvvmk1v9gxsw0c5zfs9fpw',
                'npwp' => '12.012.012.012-005.012',
                'name' => 'PT Harapan Jaya - Site Jawa Timur',
                'created_at' => '2026-09-07 12:00:32',
                'updated_at' => '2026-09-07 12:11:59',
            ),
            89 => 
            array (
                'id' => 90,
                'ulid' => '01m1xvvp9jkrmbj71ph3antcta',
                'npwp' => '13.013.013.013-005.013',
                'name' => 'PT Berkah Mandiri - Site Banten',
                'created_at' => '2026-09-07 12:00:34',
                'updated_at' => '2026-09-07 12:12:00',
            ),
            90 => 
            array (
                'id' => 91,
                'ulid' => '01m1xvvpjn80fmreg9zh0q28r5',
                'npwp' => '14.014.014.014-005.014',
                'name' => 'PT Cahaya Nusantara - Site Sumatera Selatan',
                'created_at' => '2026-09-07 12:00:34',
                'updated_at' => '2026-09-07 12:12:00',
            ),
            91 => 
            array (
                'id' => 92,
                'ulid' => '01m1xvvr1y80jyx7x9b8mccb1x',
                'npwp' => '15.015.015.015-005.015',
                'name' => 'PT Sentosa Abadi - Site Sumatera Utara',
                'created_at' => '2026-09-07 12:00:36',
                'updated_at' => '2026-09-07 12:12:00',
            ),
            92 => 
            array (
                'id' => 93,
                'ulid' => '01m1xvvrav737s69rjk2cbqdzy',
                'npwp' => '16.016.016.016-005.016',
                'name' => 'PT Mitra Sejati - Site Riau',
                'created_at' => '2026-09-07 12:00:36',
                'updated_at' => '2026-09-07 12:12:00',
            ),
            93 => 
            array (
                'id' => 94,
                'ulid' => '01m1xvvtmdrqh8s0e477ergyze',
                'npwp' => '17.017.017.017-005.017',
                'name' => 'PT Wijaya Karya - Site Sulawesi Selatan',
                'created_at' => '2026-09-07 12:00:39',
                'updated_at' => '2026-09-07 12:12:00',
            ),
            94 => 
            array (
                'id' => 95,
                'ulid' => '01m1xvvv3vh2e4h8r2xrwgn4g4',
                'npwp' => '18.018.018.018-005.018',
                'name' => 'PT Prasetya Utama - Site DKI Jakarta',
                'created_at' => '2026-09-07 12:00:39',
                'updated_at' => '2026-09-07 12:12:00',
            ),
            95 => 
            array (
                'id' => 96,
                'ulid' => '01m1xvvxcwz7aszsrkmhm429fr',
                'npwp' => '19.019.019.019-005.019',
                'name' => 'PT Bhakti Nusantara - Site Jawa Barat',
                'created_at' => '2026-09-07 12:00:41',
                'updated_at' => '2026-09-07 12:12:01',
            ),
            96 => 
            array (
                'id' => 97,
                'ulid' => '01m1xvvxny2dq96gz5rszmdw0q',
                'npwp' => '20.020.020.020-005.020',
                'name' => 'PT Sukses Mandiri - Site Jawa Tengah',
                'created_at' => '2026-09-07 12:00:42',
                'updated_at' => '2026-09-07 12:12:01',
            ),
            97 => 
            array (
                'id' => 98,
                'ulid' => '01m1y3dr5vpp8n22x0xgvhs1qe',
                'npwp' => '31.825.001.5-045.000',
                'name' => 'PT Jaya Mitra Survey Indonesia',
                'created_at' => '2026-09-07 14:12:46',
                'updated_at' => '2026-09-07 14:12:46',
            ),
            98 => 
            array (
                'id' => 99,
                'ulid' => '01m1y3dsafv9h7ggwktk0d6ta5',
                'npwp' => '32.746.203.1-425.000',
                'name' => 'PT Citra Bangun Mandiri Sejahtera',
                'created_at' => '2026-09-07 14:12:47',
                'updated_at' => '2026-09-07 14:12:47',
            ),
            99 => 
            array (
                'id' => 100,
                'ulid' => '01m1y3dted534261h2z9r3cn9w',
                'npwp' => '33.512.908.4-513.000',
                'name' => 'PT Karya Utama Teknik Nusantara',
                'created_at' => '2026-09-07 14:12:48',
                'updated_at' => '2026-09-07 14:12:48',
            ),
            100 => 
            array (
                'id' => 101,
                'ulid' => '01m1y3dwax0jmd9f62beaaev09',
                'npwp' => '34.234.567.8-542.000',
                'name' => 'PT Adhi Karya Surveyor Pratama',
                'created_at' => '2026-09-07 14:12:50',
                'updated_at' => '2026-09-07 14:12:50',
            ),
            101 => 
            array (
                'id' => 102,
                'ulid' => '01m1y3dxr2zasws9y6q0erpg9h',
                'npwp' => '35.908.112.6-652.000',
                'name' => 'PT Sinar Bumi Konsultan Indonesia',
                'created_at' => '2026-09-07 14:12:52',
                'updated_at' => '2026-09-07 14:12:52',
            ),
            102 => 
            array (
                'id' => 103,
                'ulid' => '01m1y3dyw0ajbm9tkfmjkay618',
                'npwp' => '36.654.321.9-405.000',
                'name' => 'PT Mitra Solusi Bangun Perkasa',
                'created_at' => '2026-09-07 14:12:53',
                'updated_at' => '2026-09-07 14:12:53',
            ),
            103 => 
            array (
                'id' => 104,
                'ulid' => '01m1y3dzzzgyk0qe0ddt249vbx',
                'npwp' => '51.445.789.2-905.000',
                'name' => 'PT Bali Survey Utama Lestari',
                'created_at' => '2026-09-07 14:12:54',
                'updated_at' => '2026-09-07 14:12:54',
            ),
            104 => 
            array (
                'id' => 105,
                'ulid' => '01m1y3e13xymz9a0qmnesvm9k4',
                'npwp' => '12.390.214.7-124.000',
                'name' => 'PT Sumatera Jasa Ukur Sejahtera',
                'created_at' => '2026-09-07 14:12:55',
                'updated_at' => '2026-09-07 14:12:55',
            ),
            105 => 
            array (
                'id' => 106,
                'ulid' => '01m1y3e28j56pm4naywjjmfwjy',
                'npwp' => '14.780.345.3-322.000',
                'name' => 'PT Riau Andalan Survey Mandiri',
                'created_at' => '2026-09-07 14:12:56',
                'updated_at' => '2026-09-07 14:12:56',
            ),
            106 => 
            array (
                'id' => 107,
                'ulid' => '01m1y3e3cfzvxnb0gz4k7mhh0d',
                'npwp' => '73.256.890.8-908.000',
                'name' => 'PT Sulawesi Mitra Survey Bersama',
                'created_at' => '2026-09-07 14:12:57',
                'updated_at' => '2026-09-07 14:12:57',
            ),
            107 => 
            array (
                'id' => 108,
                'ulid' => '01m1z29y7evqrc36pa524n5kwk',
                'npwp' => '51.001.001.001-051.051',
                'name' => 'PT Citra Buana - Plant Jawa Tengah',
                'created_at' => '2026-09-07 23:12:27',
                'updated_at' => '2026-09-07 23:23:47',
            ),
            108 => 
            array (
                'id' => 109,
                'ulid' => '01m1z29zc70nktjew4kf1rt383',
                'npwp' => '52.002.002.002-052.052',
                'name' => 'PT Delta Mandiri - Plant DI Yogyakarta',
                'created_at' => '2026-09-07 23:12:28',
                'updated_at' => '2026-09-07 23:23:49',
            ),
            109 => 
            array (
                'id' => 110,
                'ulid' => '01m1z2a1dh42c0qmcttnxb9nj9',
                'npwp' => '53.003.003.003-053.053',
                'name' => 'PT Garuda Perkasa - Plant Jawa Timur',
                'created_at' => '2026-09-07 23:12:30',
                'updated_at' => '2026-09-07 23:23:51',
            ),
            110 => 
            array (
                'id' => 111,
                'ulid' => '01m1z2a337scmxnqk9j0k1kgnd',
                'npwp' => '54.004.004.004-054.054',
                'name' => 'PT Karya Bahari - Plant DKI Jakarta',
                'created_at' => '2026-09-07 23:12:32',
                'updated_at' => '2026-09-07 23:23:52',
            ),
            111 => 
            array (
                'id' => 112,
                'ulid' => '01m1z2a46sav22va0y8ydwsf75',
                'npwp' => '55.005.005.005-055.055',
                'name' => 'PT Lestari Nusantara - Plant Jawa Barat',
                'created_at' => '2026-09-07 23:12:33',
                'updated_at' => '2026-09-07 23:23:54',
            ),
            112 => 
            array (
                'id' => 113,
                'ulid' => '01m1z2a5ab7pv7ygd470tch9kh',
                'npwp' => '56.006.006.006-056.056',
                'name' => 'PT Surya Pratama - Plant Jawa Tengah',
                'created_at' => '2026-09-07 23:12:34',
                'updated_at' => '2026-09-07 23:23:55',
            ),
            113 => 
            array (
                'id' => 114,
                'ulid' => '01m1z2a6dt6fsbwsa0prtsa5xs',
                'npwp' => '57.007.007.007-057.057',
                'name' => 'PT Nusa Indah - Plant DI Yogyakarta',
                'created_at' => '2026-09-07 23:12:35',
                'updated_at' => '2026-09-07 23:23:56',
            ),
            114 => 
            array (
                'id' => 115,
                'ulid' => '01m1z2a7hfbnktxhdqdxcrgz71',
                'npwp' => '58.008.008.008-058.058',
                'name' => 'PT Pilar Sejahtera - Plant Jawa Timur',
                'created_at' => '2026-09-07 23:12:36',
                'updated_at' => '2026-09-07 23:23:58',
            ),
            115 => 
            array (
                'id' => 116,
                'ulid' => '01m1z2a8n93bvw3p1znn0mbyfy',
                'npwp' => '59.009.009.009-059.059',
                'name' => 'PT Rajawali Nusantara - Plant DKI Jakarta',
                'created_at' => '2026-09-07 23:12:38',
                'updated_at' => '2026-09-07 23:23:59',
            ),
            116 => 
            array (
                'id' => 117,
                'ulid' => '01m1z2a9sg1rjpbnrxf5egc6ex',
                'npwp' => '60.010.010.010-060.060',
                'name' => 'PT Tunas Karya - Plant Jawa Barat',
                'created_at' => '2026-09-07 23:12:39',
                'updated_at' => '2026-09-07 23:24:00',
            ),
        ));
        
        
    }
}