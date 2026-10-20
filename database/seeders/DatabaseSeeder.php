<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Setting;
use App\Models\Statistic;
use App\Models\HeroSlide;
use App\Models\Program;
use App\Models\Article;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Services\DroneSchemeService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        // 1. Super Admin User
        User::updateOrCreate(
            ['email' => 'admin@trainingdrone.id'],
            [
                'name' => 'Administrator Training Drone Indonesia',
                'password' => Hash::make('admin123'),
                'email_verified_at' => now(),
            ]
        );

        // 2. Settings
        $settings = [
            'site_name' => 'Training Drone Indonesia',
            'site_tagline' => 'Pusat Pembinaan & Sertifikasi Resmi Pilot Drone Profesional, Pemetaan Fotogrametri, Inspeksi Industri & Pertanian',
            'company_name' => 'Lembaga Pelatihan & Pengembangan Pilot Drone Indonesia',
            'license_info' => 'Sertifikasi Resmi Pilot Drone & Standar Keselamatan Penerbangan Nasional',
            'whatsapp' => '081399810272', // Main WA Utama (Highlighted)
            'whatsapp_detail_1' => '08118500177',
            'whatsapp_detail_2' => '081399810272',
            'whatsapp_detail_3' => '087894580806',
            'whatsapp_detail_4' => '087894580649',
            'email' => 'kontak@trainingdrone.my.id',
            'email_secondary' => 'info@trainingdrone.my.id',
            'phone' => '081399810272',
            'address' => 'Gedung Pusat Diklat Dirgantara & Teknologi UAV Indonesia, Jakarta',
            'maps_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126920.28298835848!2d106.759478!3d-6.2297465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e498c0a531%3A0x7d87f7b2c0e86b0a!2sJakarta%2C%20Indonesia!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid',
            'office_hours' => 'Senin - Jumat: 08.00 - 17.00 WIB | Hotline Layanan Konsultasi Pilot Drone WA: 24 Jam',
            'hero_title' => 'Pusat Training & Sertifikasi Resmi Pilot Drone Profesional Indonesia',
            'hero_description' => 'Mencetak Remote Pilot Berlisensi Sah, Surveyor Pemetaan Fotogrametri RTK/PPK, Inspektur Aset Industri, dan Operator Drone Pertanian yang kompeten, taat regulasi ruang udara, dan unggul di era industri modern.',
            'about_history' => 'Didirikan oleh para instruktur penerbangan nirawak senior, insinyur geospasial, dan praktisi industri teknologi kedirgantaraan, Lembaga Training Drone Indonesia berdedikasi membangun ekosistem penerbang drone yang aman, legal, dan berdaya saing tinggi. Kami telah melatih dan meluluskan ribuan pilot drone profesional di seluruh 38 provinsi di Indonesia untuk berbagai sektor strategis, mulai dari pemetaan topografi, inspeksi fasilitas energi, monitoring perkebunan presisi, hingga sinematografi komersial.',
            'about_vision' => 'Menjadi pusat unggulan nasional dan rujukan utama dalam pendidikan, pelatihan, standarisasi kompetensi, dan sertifikasi pilot drone profesional di Indonesia yang berdaya saing global.',
            'about_mission' => "1. Menyelenggarakan pelatihan dan sertifikasi kompetensi pilot drone berlisensi resmi dengan standar keselamatan penerbangan tertinggi.\\n2. Mengedukasi operator mengenai etika terbang, regulasi ruang udara, batasan ketinggian KKOP, dan mitigasi risiko operasional.\\n3. Membekali peserta dengan keterampilan praktis tingkat lanjut: fotogrametri udara presisi tinggi, inspeksi termal, sensor LiDAR, aplikasi drone semprot pertanian, dan sinematografi kreatif.\\n4. Mendorong pemanfaatan teknologi drone untuk efisiensi industri nasional menuju terwujudnya Zero Accident di udara dan darat.",
            'floating_wa_text' => 'Halo Admin Utama Training Drone, saya ingin konsultasi pendaftaran pelatihan dan sertifikasi Pilot Drone Profesional.'
        ];

        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        // 3. Statistics
        $statistics = [
            [
                'key' => 'alumni_drone',
                'label' => 'Alumni Pilot Drone Berlisensi',
                'value' => '12.500+',
                'icon' => 'bi-people-fill',
                'description' => 'Pilot Multirotor, Surveyor Fotogrametri & Inspektur Industri',
                'sort_order' => 1
            ],
            [
                'key' => 'sertifikasi_sah',
                'label' => 'Sertifikasi Resmi Standar Nasional',
                'value' => '100%',
                'icon' => 'bi-patch-check-fill',
                'description' => 'Terakreditasi Lisensi Remote Pilot & Standar Kompetensi Profesi',
                'sort_order' => 2
            ],
            [
                'key' => 'jangkauan_provinsi',
                'label' => 'Jangkauan Wilayah Layanan',
                'value' => '38',
                'icon' => 'bi-geo-alt-fill',
                'description' => 'Provinsi di Seluruh Wilayah Indonesia',
                'sort_order' => 3
            ],
            [
                'key' => 'kelulusan_evaluasi',
                'label' => 'Tingkat Kelulusan Evaluasi',
                'value' => '99.2%',
                'icon' => 'bi-trophy-fill',
                'description' => 'Metode Teori Aviasi & Praktik Terbang Terbimbing Aplikatif',
                'sort_order' => 4
            ]
        ];

        foreach ($statistics as $stat) {
            Statistic::updateOrCreate(['key' => $stat['key']], $stat);
        }

        // 4. Programs Seeding from DroneSchemeService
        $programs = DroneSchemeService::getMasterPrograms();
        foreach ($programs as $index => $prog) {
            Program::updateOrCreate(
                ['slug' => $prog['slug']],
                [
                    'title' => $prog['title'],
                    'level_name' => $prog['category'] ?? 'Sertifikasi Pilot Drone Resmi',
                    'badge' => $prog['badge'] ?? 'Sertifikasi Pilot Drone Resmi',
                    'duration' => $prog['duration'] ?? '3-4 Hari',
                    'certification_body' => 'Badan Sertifikasi Profesi & Standar Industri Nasional',
                    'target_audience' => $prog['target_audience'] ?? [],
                    'requirements' => $prog['requirements'] ?? [],
                    'curriculum' => $prog['curriculum'] ?? [],
                    'short_description' => $prog['description'] ?? '',
                    'full_description' => $prog['overview'] ?? ($prog['description'] ?? ''),
                    'image' => $prog['image'] ?? 'https://images.unsplash.com/photo-1527977966376-1c8408f9f108?w=800&auto=format&fit=crop&q=80',
                    'is_active' => true,
                    'sort_order' => $index + 1
                ]
            );
        }

        // 5. Featured Articles (Homepage 3 cards)
        $articles = [
            [
                'title' => 'Training Drone: Regulasi Ruang Udara Batas Ketinggian Maksimum dan Zonasi Keselamatan Terbang',
                'slug' => 'training-drone-regulasi-ruang-udara-batas-ketinggian-maksimum-zonasi-keselamatan-terbang',
                'category' => 'Regulasi & Ruang Udara',
                'author' => 'Instruktur Senior Aviasi Nirawak',
                'read_time' => 35,
                'views_count' => 2850,
                'is_featured' => true,
                'is_published' => true,
                'featured_image' => 'https://images.unsplash.com/photo-1527977966376-1c8408f9f108?w=800&auto=format&fit=crop&q=80',
                'excerpt' => 'Panduan komprehensif kepatuhan regulasi ruang udara, batasan ketinggian terbang 120 meter AGL, zonasi KKOP, pemahaman NOTAM, dan etika keselamatan pilot drone profesional.',
                'content' => DroneSchemeService::generateDeepArticle('Training Drone: Regulasi Ruang Udara Batas Ketinggian Maksimum dan Zonasi Keselamatan Terbang', 'Indonesia', 7200)['content']
            ],
            [
                'title' => 'Training Drone: Prosedur Pengukuran Ground Control Point GCP dan Fotogrametri Udara Presisi',
                'slug' => 'training-drone-prosedur-pengukuran-ground-control-point-gcp-fotogrametri-udara-presisi',
                'category' => 'Pemetaan & Fotogrametri',
                'author' => 'Spesialis Survei Geospasial & UAV',
                'read_time' => 32,
                'views_count' => 2410,
                'is_featured' => true,
                'is_published' => true,
                'featured_image' => 'https://images.unsplash.com/photo-1508614589041-895b88991e3e?w=800&auto=format&fit=crop&q=80',
                'excerpt' => 'Metodologi pengukuran GCP dan ICP dengan GNSS RTK Geodetik, kalkulasi GSD, serta pengolahan ortofoto, DSM/DEM, dan kontur 3D skala sub-sentimeter.',
                'content' => DroneSchemeService::generateDeepArticle('Training Drone: Prosedur Pengukuran Ground Control Point GCP dan Fotogrametri Udara Presisi', 'Indonesia', 7200)['content']
            ],
            [
                'title' => 'Training Drone: Inspeksi Visual dan Radiometrik Termal pada Menara Transmisi Listrik SUTET',
                'slug' => 'training-drone-inspeksi-visual-radiometrik-termal-menara-transmisi-listrik-sutet',
                'category' => 'Inspeksi Aset Industri',
                'author' => 'Lead Inspector Termografi UAV',
                'read_time' => 38,
                'views_count' => 3120,
                'is_featured' => true,
                'is_published' => true,
                'featured_image' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?w=800&auto=format&fit=crop&q=80',
                'excerpt' => 'Prosedur inspeksi drone radiometrik termal dan optical zoom jarak jauh pada insulator listrik bertegangan tinggi, flare stack kilang, dan analisis hotspot.',
                'content' => DroneSchemeService::generateDeepArticle('Training Drone: Inspeksi Visual dan Radiometrik Termal pada Menara Transmisi Listrik SUTET', 'Indonesia', 7200)['content']
            ]
        ];

        foreach ($articles as $art) {
            Article::updateOrCreate(['slug' => $art['slug']], $art);
        }

        // 6. FAQs
        $faqs = [
            [
                'question' => 'Mengapa pilot drone profesional wajib memiliki sertifikasi dan lisensi resmi?',
                'answer' => 'Menerbangkan drone di ruang udara publik membawa tanggung jawab hukum dan keselamatan operasional. Sertifikasi resmi membuktikan bahwa pilot memiliki kompetensi aerodinamika, pemahaman regulasi ruang udara, kemampuan terbang manual dalam mode ATTI (non-GPS), serta kepatuhan pada prosedur keselamatan untuk mencegah insiden fly-away atau tabrakan di udara.',
                'sort_order' => 1
            ],
            [
                'question' => 'Apakah pemula yang belum pernah menerbangkan drone dapat mengikuti pelatihan ini?',
                'answer' => 'Tentu bisa. Program Basic Remote Pilot License kami dirancang dengan kurikulum bertahap mulai dari pengenalan anatomi wahana, simulasi komputer aviasi, hingga praktik terbang langsung di lapangan terbuka dengan pendampingan instruktur berpengalaman.',
                'sort_order' => 2
            ],
            [
                'question' => 'Berapa batasan ketinggian terbang maksimum drone yang diizinkan tanpa izin khusus?',
                'answer' => 'Sesuai standar keselamatan penerbangan ruang udara nasional, batas ketinggian terbang maksimum drone sipil adalah 120 meter (400 kaki) di atas permukaan tanah (Above Ground Level - AGL). Penerbangan melebihi ketinggian tersebut memerlukan pengajuan izin pemanfaatan ruang udara dan penerbitan NOTAM resmi.',
                'sort_order' => 3
            ],
            [
                'question' => 'Sertifikat dan kartu kompetensi apa saja yang didapatkan setelah lulus evaluasi?',
                'answer' => 'Peserta yang dinyatakan lulus evaluasi teori dan uji praktik lapangan akan memperoleh Sertifikat Kompetensi Pilot Drone Resmi Nasional, Kartu Lisensi Remote Pilot ber-barcode verifikasi online, serta Surat Tanda Tamat Pendidikan & Pelatihan (STTPP) yang diakui oleh berbagai industri.',
                'sort_order' => 4
            ],
            [
                'question' => 'Apakah lembaga ini melayani In-House Training untuk perusahaan di lokasi proyek?',
                'answer' => 'Ya, kami melayani penyelenggaraan In-House Training di seluruh wilayah Indonesia (38 provinsi). Pelatihan dapat disesuaikan dengan jenis armada drone perusahaan dan kebutuhan spesifik proyek Anda (pemetaan tambang, monitoring perkebunan kelapa sawit, inspeksi transmisi listrik, atau konstruksi jalan tol).',
                'sort_order' => 5
            ]
        ];

        foreach ($faqs as $faq) {
            Faq::updateOrCreate(['question' => $faq['question']], $faq);
        }

        Schema::enableForeignKeyConstraints();
    }
}
