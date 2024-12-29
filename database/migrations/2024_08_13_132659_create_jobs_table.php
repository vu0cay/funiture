<?php

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Employer::class);
            $table->string('title');
            $table->string('salary');
            $table->string('location');
            $table->string('schedule')->default('Full Time');
            $table->string('url',5000);
            $table->string('img_url')->nullable();
            $table->boolean('featured');
            $table->timestamps();
        });

        Job::create([
            'employer_id' => 1,
            'title' => 'Kệ treo quần áo',
            'salary' => fake()->randomElement(["10,000,000 VND", "50,000,000 VND"]),
            'location' => 'Remote',
            'schedule' => 'Full time',
            'url' => 'https://shopee.vn/K%E1%BB%87-%C4%91%E1%BB%B1ng-%C4%91%E1%BB%93-%C4%91a-n%C4%83ng-3-t%E1%BA%A7ng-k%E1%BB%87-4-t%E1%BA%A7ng-c%C3%B3-b%C3%A1nh-xe-%C4%91%E1%BA%A9y-chuy%C3%AAn-d%E1%BB%A5ng-cho-spa-ph%C3%B2ng-t%E1%BA%AFm-b%E1%BA%BFp-ch%E1%BA%A5t-li%E1%BB%87u-inox-cao-c%E1%BA%A5p-i.859686.24872807141?sp_atk=84d218e0-84d6-4430-b9db-833b05c7d800&xptdk=84d218e0-84d6-4430-b9db-833b05c7d800',
            'img_url' => 'https://down-vn.img.susercontent.com/file/vn-11134207-7ras8-m4aduhediovke9.webp',
            'featured' => false
        ]);
        
        Job::create([
            'employer_id' => 2,
            'title' => 'Kệ chia 4 ngăn đựng sách bằng Acrylic',
            'salary' => fake()->randomElement(["10,000,000 VND", "50,000,000 VND"]),
            'location' => 'Remote',
            'schedule' => 'Full time',
            'img_url' => 'https://down-vn.img.susercontent.com/file/15ea52882a18792f77d8d573abfd60c1.webp',
            'url' => 'https://shopee.vn/K%E1%BB%87-chia-4-ng%C4%83n-%C4%91%E1%BB%B1ng-s%C3%A1ch-b%E1%BA%B1ng-Acrylic-d%C3%A0y-d%E1%BA%B7n-%C4%91%C6%A1n-gi%E1%BA%A3n-%C4%91%E1%BA%B9p-m%E1%BA%AFt-32x14.4x12.8cm-i.126828504.19985502605?sp_atk=9902ce55-d14a-4774-bb73-7cd240154147&xptdk=9902ce55-d14a-4774-bb73-7cd240154147',
            'featured' => true
        ]);

        Job::create([
            'employer_id' => 3,
            'title' => 'Licer LED Cảm biến chuyển động đa năng',
            'salary' => fake()->randomElement(["10,000,000 VND", "50,000,000 VND"]),
            'location' => 'Remote',
            'schedule' => 'Full time',
            'img_url' => 'https://down-vn.img.susercontent.com/file/cn-11134207-7r98o-lno4fgdl10nv41.webp',
            'url' => 'https://shopee.vn/Licer-LED-C%E1%BA%A3m-bi%E1%BA%BFn-chuy%E1%BB%83n-%C4%91%E1%BB%99ng-%C4%91a-n%C4%83ng-%C4%90%C3%A8n-t%C6%B0%E1%BB%9Dng-%C4%90%C3%A8n-pha-USB-c%C3%B3-th%E1%BB%83-s%E1%BA%A1c-l%E1%BA%A1i-3-m%C3%A0u-%C4%90%C3%A8n-b%C3%A0n-%C4%91i%E1%BB%81u-khi%E1%BB%83n-t%E1%BB%AB-xa-l%C3%A0m-m%E1%BB%9D-v%C3%B4-c%E1%BA%A5p-cho-ph%C3%B2ng-ng%E1%BB%A7-h%C3%A0nh-lang-B%E1%BB%A9c-tranh-t%C6%B0%E1%BB%9Dng-ph%C3%B2ng-kh%C3%A1ch-i.196261835.24417986261?sp_atk=948cd15d-aac0-4a86-bb3b-63e2d2f633c1&xptdk=948cd15d-aac0-4a86-bb3b-63e2d2f633c1',
            'featured' => true
        ]);

        Job::create([
            'employer_id' => 4,
            'title' => 'Đèn led chạy bằng pin trang trí 1m',
            'salary' => fake()->randomElement(["10,000,000 VND", "50,000,000 VND"]),
            'location' => 'Remote',
            'schedule' => 'Full time',
            'img_url' => 'https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-lpgiv0mm1uu35f.webp',
            'url' => 'https://shopee.vn/%C4%90%C3%A8n-led-%C4%91om-%C4%91%C3%B3m-ch%E1%BA%A1y-b%E1%BA%B1ng-pin-trang-tr%C3%AD-1m-i.413866448.22388720223?sp_atk=559c8ca8-afaa-43dc-bfa0-bda8ab6d22c9&xptdk=559c8ca8-afaa-43dc-bfa0-bda8ab6d22c9',
            'featured' => true
        ]);

        Job::create([
            'employer_id' => 5,
            'title' => 'Robot hút bụi mini',
            'salary' => fake()->randomElement(["10,000,000 VND", "50,000,000 VND"]),
            'location' => 'Remote',
            'schedule' => 'Full time',
            'img_url' => 'https://down-vn.img.susercontent.com/file/cn-11134207-7r98o-lzraevfiq6pf5f.webp',
            'url' => 'https://shopee.vn/Robot-h%C3%BAt-b%E1%BB%A5i-mini-JIASHI-th%C3%B4ng-minh-%C4%91a-n%C4%83ng-cho-gia-%C4%91%C3%ACnh-i.619003211.16458342439?sp_atk=772439ba-19d7-4a2f-891d-4e49094b6ac0&xptdk=772439ba-19d7-4a2f-891d-4e49094b6ac0',
            'featured' => true
        ]);
        Job::create([
            'employer_id' => 6,
            'title' => 'Kệ Gỗ [4 màu] Kệ Sách Tổ Ong',
            'salary' => fake()->randomElement(["10,000,000 VND", "50,000,000 VND"]),
            'location' => 'Remote',
            'schedule' => 'Full time',
            'img_url' => 'https://down-vn.img.susercontent.com/file/sg-11134201-7rd5g-lw37o5j51xqu25.webp',
            'url' => 'https://shopee.vn/K%E1%BB%87-G%E1%BB%97-4-m%C3%A0u-K%E1%BB%87-S%C3%A1ch-T%E1%BB%95-Ong-8-%C3%94-Di%E1%BB%87n-T%C3%ADch-L%E1%BB%9Bn-V%E1%BB%ABa-Decor-V%E1%BB%ABa-%C4%90%E1%BB%B1ng-S%C3%A1ch-i.1134802526.27151687973?sp_atk=26f904ed-c5d7-4c5a-b794-63988630e723&xptdk=26f904ed-c5d7-4c5a-b794-63988630e723',
            'featured' => true
        ]);
        
        Job::create([
            'employer_id' => 7,
            'title' => 'Kệ Để Máy Tính - Kệ Để Laptop',
            'salary' => fake()->randomElement(["10,000,000 VND", "50,000,000 VND"]),
            'location' => 'Remote',
            'schedule' => 'Full time',
            'img_url' => 'https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-lz1h1pe17ux9c7.webp',
            'url' => 'https://shopee.vn/%F0%9F%9A%9B-MI%E1%BB%84N-PH%C3%8D-SHIP%F0%9F%86%93-K%E1%BB%87-%C4%90%E1%BB%83-M%C3%A1y-T%C3%ADnh-K%E1%BB%87-%C4%90%E1%BB%83-Laptop-L%E1%BA%AFp-Gh%C3%A9p-Ti%E1%BB%87n-%C3%8Dch-i.490935020.11719279916?sp_atk=d3faa8d8-62db-4684-89ea-eb33f91bdc5d&xptdk=d3faa8d8-62db-4684-89ea-eb33f91bdc5d',
            'featured' => false
        ]);


        Job::create([
            'employer_id' => 8,
            'title' => 'Kệ Để Sách - Kệ Sách Tổ Ong',
            'salary' => fake()->randomElement(["10,000,000 VND", "50,000,000 VND"]),
            'location' => 'Remote',
            'schedule' => 'Full time',
            'img_url' => 'https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-luyxj3dvv8ytea.webp',
            'url' => 'https://shopee.vn/K%E1%BB%87-%C4%90%E1%BB%83-S%C3%A1ch-K%E1%BB%87-S%C3%A1ch-T%E1%BB%95-Ong-Nhi%E1%BB%81u-%C3%94-Di%E1%BB%87n-T%C3%ADch-L%E1%BB%9Bn-V%E1%BB%ABa-Decor-V%E1%BB%ABa-%C4%90%E1%BB%B1ng-S%C3%A1ch-i.287149494.25023842283?sp_atk=5af38317-b516-4fde-8a19-da2a11d4e06f&xptdk=5af38317-b516-4fde-8a19-da2a11d4e06f',
            'featured' => false
        ]);


        Job::create([
            'employer_id' => 9,
            'title' => 'Bàn học gấp gọn ngồi bệt',
            'salary' => fake()->randomElement(["10,000,000 VND", "50,000,000 VND"]),
            'location' => 'Remote',
            'schedule' => 'Full time',
            'img_url' => 'https://down-vn.img.susercontent.com/file/vn-11134207-7qukw-lfbymqb4txtwd5.webp',
            'url' => 'https://shopee.vn/B%C3%A0n-h%E1%BB%8Dc-g%E1%BA%A5p-g%E1%BB%8Dn-ng%E1%BB%93i-b%E1%BB%87t-B%C3%A0n-40x60-nhi%E1%BB%81u-m%C3%A0u-s%E1%BA%AFc-ch%C3%A2n-nh%E1%BB%B1a-c%E1%BB%A9ng-si%C3%AAu-ch%E1%BA%AFc-ch%E1%BA%AFn-i.105788415.22837159117?sp_atk=0e205bf0-720b-45eb-9eaa-c6f59e753870&xptdk=0e205bf0-720b-45eb-9eaa-c6f59e753870',
            'featured' => false
        ]);

        Job::create([
            'employer_id' => 10,
            'title' => 'Kệ đựng đồ đa năng 3 tầng, kệ 4 tầng có bánh xe',
            'salary' => fake()->randomElement(["10,000,000 VND", "50,000,000 VND"]),
            'location' => 'Remote',
            'schedule' => 'Full time',
            'img_url' => 'https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-lttyspi44rv17f.webp',
            'url' => 'https://shopee.vn/K%E1%BB%87-%C4%91%E1%BB%B1ng-%C4%91%E1%BB%93-%C4%91a-n%C4%83ng-3-t%E1%BA%A7ng-k%E1%BB%87-4-t%E1%BA%A7ng-c%C3%B3-b%C3%A1nh-xe-%C4%91%E1%BA%A9y-chuy%C3%AAn-d%E1%BB%A5ng-cho-spa-ph%C3%B2ng-t%E1%BA%AFm-b%E1%BA%BFp-ch%E1%BA%A5t-li%E1%BB%87u-inox-cao-c%E1%BA%A5p-i.859686.24872807141?sp_atk=c668a098-7b0d-4e3b-81a3-62647cd04400&xptdk=c668a098-7b0d-4e3b-81a3-62647cd04400',
            'featured' => false
        ]);
        
        
        // Job::create([
        //     'employer_id' => 3,
        //     'title' => 'Kệ chia 4 ngăn đựng sách bằng Acrylic',
        //     'salary' => fake()->randomElement(["10,000,000 VND", "50,000,000 VND"]),
        //     'location' => 'Remote',
        //     'schedule' => 'Full time',
        //     'img_url' => 'https://down-vn.img.susercontent.com/file/15ea52882a18792f77d8d573abfd60c1.webp',
        //     'url' => 'https://shopee.vn/K%E1%BB%87-chia-4-ng%C4%83n-%C4%91%E1%BB%B1ng-s%C3%A1ch-b%E1%BA%B1ng-Acrylic-d%C3%A0y-d%E1%BA%B7n-%C4%91%C6%A1n-gi%E1%BA%A3n-%C4%91%E1%BA%B9p-m%E1%BA%AFt-32x14.4x12.8cm-i.126828504.19985502605?sp_atk=9902ce55-d14a-4774-bb73-7cd240154147&xptdk=9902ce55-d14a-4774-bb73-7cd240154147',
        //     'featured' => true
        // ]);
        // Job::create([
        //     'employer_id' => 3,
        //     'title' => 'Kệ chia 4 ngăn đựng sách bằng Acrylic',
        //     'salary' => fake()->randomElement(["10,000,000 VND", "50,000,000 VND"]),
        //     'location' => 'Remote',
        //     'schedule' => 'Full time',
        //     'img_url' => 'https://down-vn.img.susercontent.com/file/15ea52882a18792f77d8d573abfd60c1.webp',
        //     'url' => 'https://shopee.vn/K%E1%BB%87-chia-4-ng%C4%83n-%C4%91%E1%BB%B1ng-s%C3%A1ch-b%E1%BA%B1ng-Acrylic-d%C3%A0y-d%E1%BA%B7n-%C4%91%C6%A1n-gi%E1%BA%A3n-%C4%91%E1%BA%B9p-m%E1%BA%AFt-32x14.4x12.8cm-i.126828504.19985502605?sp_atk=9902ce55-d14a-4774-bb73-7cd240154147&xptdk=9902ce55-d14a-4774-bb73-7cd240154147',
        //     'featured' => true
        // ]);
        // Job::create([
        //     'employer_id' => 3,
        //     'title' => 'Kệ chia 4 ngăn đựng sách bằng Acrylic',
        //     'salary' => fake()->randomElement(["10,000,000 VND", "50,000,000 VND"]),
        //     'location' => 'Remote',
        //     'schedule' => 'Full time',
        //     'img_url' => 'https://down-vn.img.susercontent.com/file/15ea52882a18792f77d8d573abfd60c1.webp',
        //     'url' => 'https://shopee.vn/K%E1%BB%87-chia-4-ng%C4%83n-%C4%91%E1%BB%B1ng-s%C3%A1ch-b%E1%BA%B1ng-Acrylic-d%C3%A0y-d%E1%BA%B7n-%C4%91%C6%A1n-gi%E1%BA%A3n-%C4%91%E1%BA%B9p-m%E1%BA%AFt-32x14.4x12.8cm-i.126828504.19985502605?sp_atk=9902ce55-d14a-4774-bb73-7cd240154147&xptdk=9902ce55-d14a-4774-bb73-7cd240154147',
        //     'featured' => true
        // ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
