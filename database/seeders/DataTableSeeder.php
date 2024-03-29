<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data')->delete();
        
        \DB::table('data')->insert(array (
            0 => 
            array (
                'id' => 1,
                'smartphone' => 'OPPO A95',
                'cpu' => 2.0,
                'ram' => 8,
                'storage' => 128,
                'layar' => 6.4,
                'baterai' => 5000,
                'harga' => 2798000,
                'image' => 'smartphone-image/EfthdGHm8yptXQb37jgZQNz2rBgEzKLHaH6Qqph9.jpg',
                'created_at' => '2022-06-06 11:43:05',
                'updated_at' => '2022-09-04 08:00:08',
            ),
            1 => 
            array (
                'id' => 2,
                'smartphone' => 'OPPO A76',
                'cpu' => 2.4,
                'ram' => 6,
                'storage' => 128,
                'layar' => 6.5,
                'baterai' => 5000,
                'harga' => 2679000,
                'image' => 'smartphone-image/9muJl9Xu8VpJvf459TtKOPJykf6Lrc7XbwubzShV.jpg',
                'created_at' => '2022-06-06 11:43:05',
                'updated_at' => '2022-09-04 08:00:21',
            ),
            2 => 
            array (
                'id' => 3,
                'smartphone' => 'OPPO A12',
                'cpu' => 2.35,
                'ram' => 4,
                'storage' => 64,
                'layar' => 6.22,
                'baterai' => 4230,
                'harga' => 1259000,
                'image' => 'smartphone-image/6Ljq7YNKuDfqv2gQKem0Wdmgbv5WN1JGRvlw4c7u.jpg',
                'created_at' => '2022-06-06 11:43:05',
                'updated_at' => '2022-09-04 08:00:28',
            ),
            3 => 
            array (
                'id' => 4,
            'smartphone' => 'OPPO A9 (2020)',
                'cpu' => 2.0,
                'ram' => 4,
                'storage' => 128,
                'layar' => 6.5,
                'baterai' => 5000,
                'harga' => 3599000,
                'image' => 'smartphone-image/imvWD2raXnDwEHTzP7f0WR6swWYIVmvkaFsUimh8.jpg',
                'created_at' => '2022-06-06 11:43:05',
                'updated_at' => '2022-09-04 08:01:31',
            ),
            4 => 
            array (
                'id' => 5,
                'smartphone' => 'OPPO Reno5',
                'cpu' => 2.4,
                'ram' => 8,
                'storage' => 128,
                'layar' => 6.43,
                'baterai' => 4310,
                'harga' => 3200000,
                'image' => 'smartphone-image/iEsAUX1ke9t2RGtA7SwLl4L5F5MDI5IObJ8kQ2jj.jpg',
                'created_at' => '2022-06-06 11:43:05',
                'updated_at' => '2022-09-04 08:00:45',
            ),
            5 => 
            array (
                'id' => 6,
                'smartphone' => 'OPPO A92',
                'cpu' => 2.0,
                'ram' => 6,
                'storage' => 128,
                'layar' => 6.5,
                'baterai' => 5000,
                'harga' => 2775000,
                'image' => 'smartphone-image/5jJtPnEtWbcRGECMXpnDXsTdcqnf27isiSGizaPu.jpg',
                'created_at' => '2022-08-18 05:09:00',
                'updated_at' => '2022-09-04 08:00:52',
            ),
            6 => 
            array (
                'id' => 7,
            'smartphone' => 'OPPO A31 (2020)',
                'cpu' => 2.3,
                'ram' => 4,
                'storage' => 128,
                'layar' => 6.5,
                'baterai' => 4320,
                'harga' => 1849000,
                'image' => 'smartphone-image/G8b8JtuhBaCmQxqBJIg3alaBHyCzKLomxxZOKOob.jpg',
                'created_at' => '2022-08-18 05:21:26',
                'updated_at' => '2022-09-04 08:01:10',
            ),
            7 => 
            array (
                'id' => 8,
                'smartphone' => 'Samsung Galaxy A03',
                'cpu' => 1.6,
                'ram' => 4,
                'storage' => 64,
                'layar' => 6.5,
                'baterai' => 5000,
                'harga' => 1259000,
                'image' => 'smartphone-image/A2nSgkkPzF8Jppj96BvKCcbTSjona0w8g9Q71OcV.jpg',
                'created_at' => '2022-08-18 05:23:43',
                'updated_at' => '2022-09-04 08:01:48',
            ),
            8 => 
            array (
                'id' => 9,
                'smartphone' => 'Samsung Galaxy A13',
                'cpu' => 2.2,
                'ram' => 4,
                'storage' => 128,
                'layar' => 6.6,
                'baterai' => 5000,
                'harga' => 2365000,
                'image' => 'smartphone-image/oTu5bjGaoF673BtTiyCrIZrFtU3AarMlSy2MOgtz.jpg',
                'created_at' => '2022-08-18 05:24:30',
                'updated_at' => '2022-09-04 08:01:56',
            ),
            9 => 
            array (
                'id' => 10,
                'smartphone' => 'Samsung Galaxy A12',
                'cpu' => 2.3,
                'ram' => 4,
                'storage' => 64,
                'layar' => 6.5,
                'baterai' => 5000,
                'harga' => 2149000,
                'image' => 'smartphone-image/B8a92G6WYRtEpa8q20p6BAmXMWLKzfrKYa5xrjak.jpg',
                'created_at' => '2022-08-18 05:25:13',
                'updated_at' => '2022-09-04 08:02:05',
            ),
            10 => 
            array (
                'id' => 11,
                'smartphone' => 'Samsung Galaxy A32 5G',
                'cpu' => 2.0,
                'ram' => 8,
                'storage' => 128,
                'layar' => 6.5,
                'baterai' => 5000,
                'harga' => 3800000,
                'image' => 'smartphone-image/sPDs2ogdvEI1S32SD6Y1tt2G9JC1tz5BexjIHe5m.jpg',
                'created_at' => '2022-08-18 05:25:50',
                'updated_at' => '2022-09-04 08:02:16',
            ),
            11 => 
            array (
                'id' => 12,
                'smartphone' => 'Samsung Galaxy M12',
                'cpu' => 2.0,
                'ram' => 4,
                'storage' => 64,
                'layar' => 6.5,
                'baterai' => 5000,
                'harga' => 1639000,
                'image' => 'smartphone-image/im3Egub6nefCyGQunXFA3cx3Q5oouZO68nVcblgX.jpg',
                'created_at' => '2022-08-18 05:26:49',
                'updated_at' => '2022-09-04 08:02:25',
            ),
            12 => 
            array (
                'id' => 13,
                'smartphone' => 'Samsung Galaxy A52s 5G',
                'cpu' => 2.4,
                'ram' => 8,
                'storage' => 256,
                'layar' => 6.5,
                'baterai' => 4500,
                'harga' => 5700000,
                'image' => 'smartphone-image/6ot0WAHFaIKGLa3Y6dq5wcT5nu8w5YzCSmbYtcCP.jpg',
                'created_at' => '2022-08-18 05:32:47',
                'updated_at' => '2022-09-04 08:02:48',
            ),
            13 => 
            array (
                'id' => 14,
                'smartphone' => 'Samsung Galaxy M22',
                'cpu' => 2.0,
                'ram' => 6,
                'storage' => 128,
                'layar' => 6.4,
                'baterai' => 5000,
                'harga' => 2595000,
                'image' => 'smartphone-image/oFFqcz6pUlNQLjhmVgmxqtJMjjxJZLY7MXN1iHfX.jpg',
                'created_at' => '2022-08-18 05:34:40',
                'updated_at' => '2022-09-04 08:02:59',
            ),
            14 => 
            array (
                'id' => 15,
                'smartphone' => 'Realme 8',
                'cpu' => 2.05,
                'ram' => 8,
                'storage' => 128,
                'layar' => 6.4,
                'baterai' => 5000,
                'harga' => 2838000,
                'image' => 'smartphone-image/HBw0YyAsYfFuAI8f5hdnhL30enQHbAuCEq7upBBg.jpg',
                'created_at' => '2022-08-18 05:35:42',
                'updated_at' => '2022-09-04 08:03:18',
            ),
            15 => 
            array (
                'id' => 16,
                'smartphone' => 'Realme 8i',
                'cpu' => 2.05,
                'ram' => 6,
                'storage' => 128,
                'layar' => 6.6,
                'baterai' => 5000,
                'harga' => 2538000,
                'image' => 'smartphone-image/3P8KTEeos21Y32VetQEa2rpp22sTNhlZVpF2lRat.jpg',
                'created_at' => '2022-08-18 05:36:23',
                'updated_at' => '2022-09-04 08:03:26',
            ),
            16 => 
            array (
                'id' => 17,
                'smartphone' => 'Realme Narzo 50i',
                'cpu' => 2.0,
                'ram' => 4,
                'storage' => 64,
                'layar' => 6.5,
                'baterai' => 5000,
                'harga' => 1525000,
                'image' => 'smartphone-image/zNCicDxReAAP8nudOonzLCOegMzN8FtCtbDga1V3.jpg',
                'created_at' => '2022-08-18 05:36:57',
                'updated_at' => '2022-09-04 08:03:35',
            ),
            17 => 
            array (
                'id' => 18,
                'smartphone' => 'Realme 5i',
                'cpu' => 2.0,
                'ram' => 4,
                'storage' => 64,
                'layar' => 6.52,
                'baterai' => 5000,
                'harga' => 1899000,
                'image' => 'smartphone-image/QOWNaC87dEN0QdzdhggApvvRMx7TfMZa3xXQsydd.jpg',
                'created_at' => '2022-08-18 05:37:35',
                'updated_at' => '2022-09-04 08:03:43',
            ),
            18 => 
            array (
                'id' => 19,
                'smartphone' => 'Realme 9 Pro',
                'cpu' => 2.2,
                'ram' => 8,
                'storage' => 128,
                'layar' => 6.6,
                'baterai' => 5000,
                'harga' => 3500000,
                'image' => 'smartphone-image/bruPxW9jgYkOefn393OkQuVIjpJI5qq5SsUiQrY4.jpg',
                'created_at' => '2022-08-18 05:38:18',
                'updated_at' => '2022-09-04 08:03:54',
            ),
            19 => 
            array (
                'id' => 20,
                'smartphone' => 'Realme C25s',
                'cpu' => 2.0,
                'ram' => 4,
                'storage' => 128,
                'layar' => 6.5,
                'baterai' => 6000,
                'harga' => 1679900,
                'image' => 'smartphone-image/dS7vbjOT2TaWVm02bdeXpUnSVBdZdM9nJN8B9BXb.jpg',
                'created_at' => '2022-08-18 05:39:08',
                'updated_at' => '2022-09-04 08:04:04',
            ),
            20 => 
            array (
                'id' => 21,
                'smartphone' => 'Realme 7i',
                'cpu' => 2.0,
                'ram' => 8,
                'storage' => 128,
                'layar' => 6.5,
                'baterai' => 5000,
                'harga' => 2119900,
                'image' => 'smartphone-image/jB0wkkLOBsldSbJGaPijU248uFcC62ax5C1Z5lNh.jpg',
                'created_at' => '2022-08-18 05:39:52',
                'updated_at' => '2022-09-04 08:04:16',
            ),
            21 => 
            array (
                'id' => 22,
            'smartphone' => 'Vivo Y21 (2021)',
                'cpu' => 2.35,
                'ram' => 4,
                'storage' => 64,
                'layar' => 6.51,
                'baterai' => 5000,
                'harga' => 1499000,
                'image' => 'smartphone-image/cLZzHZRxtqcNmawoaVz4VzJoFbV7Az7KqE43A7dd.jpg',
                'created_at' => '2022-08-18 05:40:44',
                'updated_at' => '2022-09-04 08:04:30',
            ),
            22 => 
            array (
                'id' => 23,
                'smartphone' => 'Vivo Y15s',
                'cpu' => 2.3,
                'ram' => 3,
                'storage' => 32,
                'layar' => 6.51,
                'baterai' => 5000,
                'harga' => 1499000,
                'image' => 'smartphone-image/Ni1meNj1YeTwDJOKjZ7aqlCPBjJ1mXhEMS8xZJwk.jpg',
                'created_at' => '2022-08-18 05:41:21',
                'updated_at' => '2022-09-04 08:04:44',
            ),
            23 => 
            array (
                'id' => 24,
            'smartphone' => 'Vivo Y20 (2021)',
                'cpu' => 2.35,
                'ram' => 4,
                'storage' => 64,
                'layar' => 6.51,
                'baterai' => 5000,
                'harga' => 1799000,
                'image' => 'smartphone-image/Hg6fgaescOgIl690pLxPQ2Nppyp6yIrSK9IWLiEv.jpg',
                'created_at' => '2022-08-18 05:41:56',
                'updated_at' => '2022-09-04 08:05:08',
            ),
            24 => 
            array (
                'id' => 25,
                'smartphone' => 'Vivo Y33s',
                'cpu' => 2.0,
                'ram' => 8,
                'storage' => 128,
                'layar' => 6.58,
                'baterai' => 5000,
                'harga' => 2849000,
                'image' => 'smartphone-image/Vfpx8AMPRYzlQ7ddlawQkbTXxtehVvurlaP5GLEH.jpg',
                'created_at' => '2022-08-18 05:42:54',
                'updated_at' => '2022-09-04 08:05:17',
            ),
            25 => 
            array (
                'id' => 26,
                'smartphone' => 'Vivo Y12s',
                'cpu' => 2.35,
                'ram' => 3,
                'storage' => 32,
                'layar' => 6.51,
                'baterai' => 5000,
                'harga' => 1499000,
                'image' => 'smartphone-image/2QMhftSY6EDmUsCeRQLDzJLAqAPPBu9fnfESsYGD.jpg',
                'created_at' => '2022-08-18 05:43:26',
                'updated_at' => '2022-09-04 08:05:26',
            ),
            26 => 
            array (
                'id' => 27,
                'smartphone' => 'Vivo V20',
                'cpu' => 2.3,
                'ram' => 8,
                'storage' => 128,
                'layar' => 6.44,
                'baterai' => 4000,
                'harga' => 2249900,
                'image' => 'smartphone-image/tCnwRBdzLpfwA5Yi1lNOjmfsm3kRlPVZy3H7dfPj.jpg',
                'created_at' => '2022-08-18 05:44:09',
                'updated_at' => '2022-09-04 08:05:37',
            ),
            27 => 
            array (
                'id' => 28,
                'smartphone' => 'Vivo Y20s',
                'cpu' => 1.8,
                'ram' => 8,
                'storage' => 128,
                'layar' => 6.51,
                'baterai' => 5000,
                'harga' => 2700000,
                'image' => 'smartphone-image/zOvhKYR67PLVLShsjGcD7mpFDj2LjBJS0zJ9N8PO.jpg',
                'created_at' => '2022-08-18 05:44:41',
                'updated_at' => '2022-09-04 08:05:46',
            ),
            28 => 
            array (
                'id' => 29,
                'smartphone' => 'Xiaomi Redmi 10',
                'cpu' => 2.0,
                'ram' => 6,
                'storage' => 128,
                'layar' => 6.5,
                'baterai' => 5000,
                'harga' => 2000000,
                'image' => 'smartphone-image/yIsSKMJKS5uaTNc4ETysFtUADb55Jgsedn7lwm12.jpg',
                'created_at' => '2022-08-18 05:45:18',
                'updated_at' => '2022-09-04 08:06:02',
            ),
            29 => 
            array (
                'id' => 30,
                'smartphone' => 'Xiaomi Redmi Note 10',
                'cpu' => 2.2,
                'ram' => 4,
                'storage' => 64,
                'layar' => 6.43,
                'baterai' => 5000,
                'harga' => 2250000,
                'image' => 'smartphone-image/xVAI4t8nkL2gLVgw5W3lDw3uKx8NWlXwvIqPI5DO.jpg',
                'created_at' => '2022-08-18 05:46:01',
                'updated_at' => '2022-09-04 08:06:17',
            ),
            30 => 
            array (
                'id' => 31,
                'smartphone' => 'Xiaomi Redmi Note 11',
                'cpu' => 2.4,
                'ram' => 6,
                'storage' => 128,
                'layar' => 6.43,
                'baterai' => 5000,
                'harga' => 2750000,
                'image' => 'smartphone-image/LwlMKsocHIidQyL6c2GpCVqcLI9nTyc3xtmwymxn.jpg',
                'created_at' => '2022-08-18 05:46:44',
                'updated_at' => '2022-09-04 08:07:19',
            ),
            31 => 
            array (
                'id' => 32,
                'smartphone' => 'Xiaomi Redmi 10',
                'cpu' => 2.0,
                'ram' => 4,
                'storage' => 64,
                'layar' => 6.5,
                'baterai' => 5000,
                'harga' => 2100000,
                'image' => 'smartphone-image/plZcFfgNOILWRfqRqHE2TYW2hcN1gUYe00TBWetb.jpg',
                'created_at' => '2022-08-18 06:14:25',
                'updated_at' => '2022-09-04 08:07:31',
            ),
            32 => 
            array (
                'id' => 33,
                'smartphone' => 'Xiaomi Redmi Note 10S',
                'cpu' => 2.05,
                'ram' => 8,
                'storage' => 128,
                'layar' => 6.43,
                'baterai' => 5000,
                'harga' => 2889000,
                'image' => 'smartphone-image/15WsLHdOvxj0X8PT3WaPLcbplEGnV1ziCDJ4vd6W.jpg',
                'created_at' => '2022-08-18 06:15:46',
                'updated_at' => '2022-09-04 08:07:43',
            ),
            33 => 
            array (
                'id' => 34,
                'smartphone' => 'Xiaomi Redmi Note 10 5G',
                'cpu' => 2.2,
                'ram' => 8,
                'storage' => 128,
                'layar' => 6.5,
                'baterai' => 5000,
                'harga' => 2850000,
                'image' => 'smartphone-image/PnECoAStOSeWvb6ieMRJlPPNrfcjxylqfe0VnLSP.jpg',
                'created_at' => '2022-08-18 06:18:03',
                'updated_at' => '2022-09-04 08:07:53',
            ),
            34 => 
            array (
                'id' => 35,
                'smartphone' => 'Xiaomi Redmi Note 11 Pro',
                'cpu' => 2.05,
                'ram' => 8,
                'storage' => 128,
                'layar' => 6.67,
                'baterai' => 5000,
                'harga' => 3799000,
                'image' => 'smartphone-image/k20xFPFC47JpRPoevDWr1cdgsVZ5oFbnaQZuv0aQ.jpg',
                'created_at' => '2022-08-18 06:20:13',
                'updated_at' => '2022-09-04 08:08:04',
            ),
            35 => 
            array (
                'id' => 36,
                'smartphone' => 'Infinix Hot 11S NFC',
                'cpu' => 2.0,
                'ram' => 6,
                'storage' => 128,
                'layar' => 6.78,
                'baterai' => 5000,
                'harga' => 2155000,
                'image' => 'smartphone-image/BuX1HfGWHAOiT0XAgm3vbKqj7Sta0Tbf1Vga2uip.jpg',
                'created_at' => '2022-08-18 06:20:55',
                'updated_at' => '2022-09-04 08:08:19',
            ),
            36 => 
            array (
                'id' => 37,
                'smartphone' => 'Infinix Note 11 NFC',
                'cpu' => 2.0,
                'ram' => 6,
                'storage' => 128,
                'layar' => 6.7,
                'baterai' => 5000,
                'harga' => 2320000,
                'image' => 'smartphone-image/LnvsVVkVD1wyGO4OSIRMYPn0JpU5hzMYkuXtOxY2.jpg',
                'created_at' => '2022-08-18 06:21:37',
                'updated_at' => '2022-09-04 08:08:35',
            ),
            37 => 
            array (
                'id' => 38,
                'smartphone' => 'Infinix Hot 10 Play',
                'cpu' => 2.0,
                'ram' => 4,
                'storage' => 64,
                'layar' => 6.82,
                'baterai' => 6000,
                'harga' => 1799000,
                'image' => 'smartphone-image/RAY5BL0GWtgMpgBxN9W9Q5zHNtcQehwblzBJzvrK.jpg',
                'created_at' => '2022-08-18 06:22:15',
                'updated_at' => '2022-09-04 08:08:51',
            ),
            38 => 
            array (
                'id' => 39,
                'smartphone' => 'Infinix Hot 11 Play',
                'cpu' => 2.3,
                'ram' => 4,
                'storage' => 64,
                'layar' => 6.8,
                'baterai' => 6000,
                'harga' => 1599000,
                'image' => 'smartphone-image/RMSt44S9lC6bo6HT8bBBe1DNwHE0NyDmpQZvGkvO.jpg',
                'created_at' => '2022-08-18 06:22:44',
                'updated_at' => '2022-09-04 08:09:11',
            ),
            39 => 
            array (
                'id' => 40,
                'smartphone' => 'Infinix Smart 6',
                'cpu' => 1.6,
                'ram' => 3,
                'storage' => 64,
                'layar' => 6.6,
                'baterai' => 5000,
                'harga' => 1385000,
                'image' => 'smartphone-image/nIo9sUkkBFRzboQw0IeYREh7xc3LgWpG5elbgOfV.jpg',
                'created_at' => '2022-08-18 06:23:23',
                'updated_at' => '2022-09-04 08:09:22',
            ),
            40 => 
            array (
                'id' => 41,
                'smartphone' => 'Infinix Hot 10',
                'cpu' => 2.0,
                'ram' => 6,
                'storage' => 128,
                'layar' => 6.78,
                'baterai' => 5200,
                'harga' => 2199000,
                'image' => 'smartphone-image/VecJ1X9fkV5wnZnf8KA2CsBdreXFwjD6cFNFd1te.jpg',
                'created_at' => '2022-08-18 06:23:54',
                'updated_at' => '2022-09-04 08:09:38',
            ),
            41 => 
            array (
                'id' => 42,
                'smartphone' => 'Infinix Note 10 Pro NFC',
                'cpu' => 2.05,
                'ram' => 8,
                'storage' => 128,
                'layar' => 6.95,
                'baterai' => 5000,
                'harga' => 2615000,
                'image' => 'smartphone-image/L26erLdt5v4kuOt87lnTjjabCtKusLNjfDZjkuEP.jpg',
                'created_at' => '2022-08-18 06:24:40',
                'updated_at' => '2022-09-04 08:10:01',
            ),
            42 => 
            array (
                'id' => 43,
                'smartphone' => 'Infinix Hot 10s',
                'cpu' => 2.0,
                'ram' => 6,
                'storage' => 128,
                'layar' => 6.82,
                'baterai' => 6000,
                'harga' => 2125000,
                'image' => 'smartphone-image/z2mkKOEZoT2iWVYlCFEBcbZAbuUh7spv6sIKm2gE.jpg',
                'created_at' => '2022-08-18 06:25:14',
                'updated_at' => '2022-09-04 08:11:38',
            ),
            43 => 
            array (
                'id' => 44,
                'smartphone' => 'POCO X3 NFC',
                'cpu' => 2.3,
                'ram' => 8,
                'storage' => 128,
                'layar' => 6.67,
                'baterai' => 5160,
                'harga' => 3250000,
                'image' => 'smartphone-image/YHpKBdzDaWEjZ2HZhCb4EkX5mnvqH8kDXGloNyFz.jpg',
                'created_at' => '2022-08-18 06:27:34',
                'updated_at' => '2022-09-04 08:11:48',
            ),
            44 => 
            array (
                'id' => 45,
                'smartphone' => 'POCO M3 Pro 5G',
                'cpu' => 2.2,
                'ram' => 6,
                'storage' => 128,
                'layar' => 6.5,
                'baterai' => 5000,
                'harga' => 2780000,
                'image' => 'smartphone-image/yYU70vlZf8lLtzhnkf4DDVkgEwstVjeVNrNwT7zS.jpg',
                'created_at' => '2022-08-18 06:28:43',
                'updated_at' => '2022-09-04 08:11:57',
            ),
            45 => 
            array (
                'id' => 46,
                'smartphone' => 'POCO X3 GT',
                'cpu' => 2.6,
                'ram' => 8,
                'storage' => 256,
                'layar' => 6.6,
                'baterai' => 5000,
                'harga' => 4475000,
                'image' => 'smartphone-image/pnEUP5aIiRRymVzJxboxPddkslHjeGwbgYz1MfxE.jpg',
                'created_at' => '2022-08-18 06:29:12',
                'updated_at' => '2022-09-04 08:12:05',
            ),
            46 => 
            array (
                'id' => 47,
                'smartphone' => 'POCO M4 Pro',
                'cpu' => 2.05,
                'ram' => 6,
                'storage' => 128,
                'layar' => 6.43,
                'baterai' => 5000,
                'harga' => 3250000,
                'image' => 'smartphone-image/HpPyTRcN8w59EpVSPiwiw7Lgm8r2PqblAVMU2DKz.jpg',
                'created_at' => '2022-08-18 06:29:45',
                'updated_at' => '2022-09-04 08:12:14',
            ),
            47 => 
            array (
                'id' => 48,
                'smartphone' => 'POCO X3 Pro',
                'cpu' => 2.96,
                'ram' => 8,
                'storage' => 256,
                'layar' => 6.67,
                'baterai' => 5160,
                'harga' => 3865000,
                'image' => 'smartphone-image/Q7feFJox4pdBkw0dfVisAgyFtBd1CzoCUhqNN4qZ.jpg',
                'created_at' => '2022-08-18 06:30:29',
                'updated_at' => '2022-09-04 08:12:33',
            ),
            48 => 
            array (
                'id' => 49,
                'smartphone' => 'POCO M3',
                'cpu' => 2.0,
                'ram' => 6,
                'storage' => 128,
                'layar' => 6.53,
                'baterai' => 6000,
                'harga' => 2499000,
                'image' => 'smartphone-image/9DtPpRNmvYRqY3HTaIpeakS85HySOaJ6MieNxIyx.jpg',
                'created_at' => '2022-08-18 06:31:51',
                'updated_at' => '2022-09-04 08:12:43',
            ),
            49 => 
            array (
                'id' => 50,
                'smartphone' => 'POCO F3',
                'cpu' => 3.2,
                'ram' => 8,
                'storage' => 256,
                'layar' => 6.67,
                'baterai' => 4520,
                'harga' => 5220000,
                'image' => 'smartphone-image/54HQp5agf9cgQ7dBiCjB8dh4x2QAc8q9tP1KU5lC.jpg',
                'created_at' => '2022-08-18 06:32:52',
                'updated_at' => '2022-09-04 08:12:50',
            ),
        ));
        
        
    }
}