<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Str;

use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $adding_files = [
            'https://marketsveta.su/product_base/xml/100615.xml', //     606 731
            'https://marketsveta.su/product_base/xml/100620.xml', //   2 469 895
            'https://marketsveta.su/product_base/xml/100626.xml', //   3 032 275
            'https://marketsveta.su/product_base/xml/100629.xml', //   1 936 683
            'https://marketsveta.su/product_base/xml/100632.xml', //   3 118 881
            'https://marketsveta.su/product_base/xml/100634.xml', //   3 861 021
            'https://marketsveta.su/product_base/xml/100648.xml', //   3 051 037
            'https://marketsveta.su/product_base/xml/100652.xml', //   1 308 528
            'https://marketsveta.su/product_base/xml/100659.xml', //   4 522 201
            'https://marketsveta.su/product_base/xml/100661.xml', //     695 495
            'https://marketsveta.su/product_base/xml/100667.xml', //   5 494 017
            'https://marketsveta.su/product_base/xml/100673.xml', //   1 283 539
            'https://marketsveta.su/product_base/xml/100676.xml', //      31 551
            'https://marketsveta.su/product_base/xml/100678.xml', //     992 661
            'https://marketsveta.su/product_base/xml/100679.xml', //      29 155
            'https://marketsveta.su/product_base/xml/100684.xml', //   3 606 311
            'https://marketsveta.su/product_base/xml/100693.xml', //   2 306 778
            'https://marketsveta.su/product_base/xml/100696.xml', //   6 670 244
            'https://marketsveta.su/product_base/xml/100699.xml', //      34 950
            'https://marketsveta.su/product_base/xml/100701.xml', //      62 982
            'https://marketsveta.su/product_base/xml/100711.xml', //   2 573 432
            'https://marketsveta.su/product_base/xml/100713.xml', //     922 093
            'https://marketsveta.su/product_base/xml/100715.xml', //      55 987
            'https://marketsveta.su/product_base/xml/100725.xml', //     939 107
            'https://marketsveta.su/product_base/xml/100726.xml', //      31 864
            'https://marketsveta.su/product_base/xml/100727.xml', //     241 216
            'https://marketsveta.su/product_base/xml/100729.xml', //   2 970 414
            'https://marketsveta.su/product_base/xml/100731.xml', //     559 568
            'https://marketsveta.su/product_base/xml/100735.xml', //     219 331
            'https://marketsveta.su/product_base/xml/100741.xml', //   3 819 246
            'https://marketsveta.su/product_base/xml/100745.xml', //   5 127 783
            'https://marketsveta.su/product_base/xml/100752.xml', //     553 345
            'https://marketsveta.su/product_base/xml/100753.xml', //      55 981
            'https://marketsveta.su/product_base/xml/100758.xml', //   5 166 192
            'https://marketsveta.su/product_base/xml/100766.xml', //     500 944
            'https://marketsveta.su/product_base/xml/100767.xml', //   1 645 283
            'https://marketsveta.su/product_base/xml/100774.xml', //   3 563 059
            'https://marketsveta.su/product_base/xml/100775.xml', //   3 041 317
            'https://marketsveta.su/product_base/xml/100777.xml', //     536 423
            'https://marketsveta.su/product_base/xml/100778.xml', //   2 092 608
            'https://marketsveta.su/product_base/xml/100795.xml', //   2 437 153
            'https://marketsveta.su/product_base/xml/100798.xml', //     379 254
            'https://marketsveta.su/product_base/xml/100808.xml', //   6 193 307
            'https://marketsveta.su/product_base/xml/100810.xml', //   4 034 229
            'https://marketsveta.su/product_base/xml/100814.xml', //   5 620 842
            'https://marketsveta.su/product_base/xml/100816.xml', //   3 350 630
            'https://marketsveta.su/product_base/xml/100817.xml', //     838 448
            'https://marketsveta.su/product_base/xml/100821.xml', //      36 702
            'https://marketsveta.su/product_base/xml/100825.xml', //      33 933
            'https://marketsveta.su/product_base/xml/100830.xml', //   1 226 216
            'https://marketsveta.su/product_base/xml/119047.xml', //     812 543
            'https://marketsveta.su/product_base/xml/119048.xml', //   2 390 236
            'https://marketsveta.su/product_base/xml/119167.xml', //   1 040 344
            'https://marketsveta.su/product_base/xml/119385.xml', //   2 250 354
            'https://marketsveta.su/product_base/xml/119929.xml', //   1 374 343
            'https://marketsveta.su/product_base/xml/123473.xml', //   2 913 899
            'https://marketsveta.su/product_base/xml/123663.xml', //      37 390
            'https://marketsveta.su/product_base/xml/123759.xml', //   4 303 239
            'https://marketsveta.su/product_base/xml/123773.xml', //   1 879 911
            'https://marketsveta.su/product_base/xml/125845.xml', //     181 197
            'https://marketsveta.su/product_base/xml/127107.xml', //     241 155
            'https://marketsveta.su/product_base/xml/127750.xml', //     545 046
            'https://marketsveta.su/product_base/xml/128329.xml', //     264 688
            'https://marketsveta.su/product_base/xml/128936.xml', //   1 671 962
            'https://marketsveta.su/product_base/xml/129972.xml', //      71 409
            'https://marketsveta.su/product_base/xml/130078.xml', //     390 634
            'https://marketsveta.su/product_base/xml/130612.xml', //      44 973
            'https://marketsveta.su/product_base/xml/130784.xml', //   2 437 478
            'https://marketsveta.su/product_base/xml/131128.xml', //     262 642
            'https://marketsveta.su/product_base/xml/133838.xml', //     889 233
            'https://marketsveta.su/product_base/xml/133873.xml', //   2 824 516
            'https://marketsveta.su/product_base/xml/134543.xml', //      97 628
            'https://marketsveta.su/product_base/xml/134571.xml', //   1 534 519
            'https://marketsveta.su/product_base/xml/134823.xml', //   1 648 314
            'https://marketsveta.su/product_base/xml/135914.xml', //      40 432
            'https://marketsveta.su/product_base/xml/135915.xml', //   2 595 301
            'https://marketsveta.su/product_base/xml/136690.xml', //     420 966
            'https://marketsveta.su/product_base/xml/138237.xml', //     324 393
            'https://marketsveta.su/product_base/xml/138961.xml', //     149 487
            'https://marketsveta.su/product_base/xml/141496.xml', //     370 322
            'https://marketsveta.su/product_base/xml/141653.xml', //   2 352 246
            'https://marketsveta.su/product_base/xml/141778.xml', //      29 155
            'https://marketsveta.su/product_base/xml/141789.xml', //   1 392 648
            'https://marketsveta.su/product_base/xml/141866.xml', //     269 838
            'https://marketsveta.su/product_base/xml/142003.xml', //     539 558
            'https://marketsveta.su/product_base/xml/142306.xml', //   1 920 209
            'https://marketsveta.su/product_base/xml/143862.xml', //   1 172 352
            'https://marketsveta.su/product_base/xml/173331.xml', //     830 595
            'https://marketsveta.su/product_base/xml/173350.xml', //   1 801 517
            'https://marketsveta.su/product_base/xml/174371.xml', //   1 643 906
            'https://marketsveta.su/product_base/xml/175470.xml', //     517 662
            'https://marketsveta.su/product_base/xml/179924.xml', //     695 520
            'https://marketsveta.su/product_base/xml/189208.xml', //   1 829 097

            'https://marketsveta.su/product_base/xml/100625-1.xml',
            'https://marketsveta.su/product_base/xml/100625-2.xml',
            'https://marketsveta.su/product_base/xml/100625-3.xml',
            'https://marketsveta.su/product_base/xml/100625-4.xml',
            'https://marketsveta.su/product_base/xml/100625-5.xml',
            'https://marketsveta.su/product_base/xml/100625-6.xml',
            'https://marketsveta.su/product_base/xml/100625-7.xml',
            'https://marketsveta.su/product_base/xml/100625-8.xml',
            'https://marketsveta.su/product_base/xml/100625-9.xml',
            'https://marketsveta.su/product_base/xml/100625-10.xml',
            'https://marketsveta.su/product_base/xml/100625-11.xml',

            'https://marketsveta.su/product_base/xml/100759-1.xml',
            'https://marketsveta.su/product_base/xml/100759-2.xml',
            'https://marketsveta.su/product_base/xml/100759-3.xml',
            'https://marketsveta.su/product_base/xml/100759-4.xml',
            'https://marketsveta.su/product_base/xml/100759-5.xml',
            'https://marketsveta.su/product_base/xml/100759-6.xml',

            'https://marketsveta.su/product_base/xml/100782-1.xml',
            'https://marketsveta.su/product_base/xml/100782-2.xml',
            'https://marketsveta.su/product_base/xml/100782-3.xml',
            // 'https://marketsveta.su/product_base/xml/100782-4.xml',

            'https://marketsveta.su/product_base/xml/100802-1.xml',
            'https://marketsveta.su/product_base/xml/100802-2.xml',
            'https://marketsveta.su/product_base/xml/100802-3.xml',
            'https://marketsveta.su/product_base/xml/100802-4.xml',
        ];

            for ($i=0; $i<count($adding_files); $i++ ) {
                add_tovar_in_file($adding_files[$i], false);
            }


    }
}
