<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Program;
use App\Models\Article;
use App\Models\Faq;
use App\Models\Statistic;
use App\Models\HeroSlide;
use App\Models\Testimonial;
use App\Models\ContactMessage;
use App\Services\RegionService;
use App\Services\DroneSchemeService;
use Illuminate\Support\Str;

class FrontController extends Controller
{
    /**
     * Build dynamic main WhatsApp link
     */
    protected function getWaLink(?string $regionName = null, ?string $programName = null): string
    {
        $phone = Setting::get('whatsapp', '081399810272');
        $phone = preg_replace('/[^0-9]/', '', $phone);
        if (str_starts_with($phone, '0')) {
            $phone = '62' . substr($phone, 1);
        }

        $template = Setting::get('whatsapp_template', 'Halo Admin Utama Training Drone, saya ingin konsultasi pendaftaran pelatihan dan sertifikasi Pilot Drone Profesional untuk wilayah {region}. Mohon info jadwal terbaru dan persyaratannya.');
        
        $regionText = $regionName ?? 'Nasional';
        $programText = $programName ? " program {$programName}" : '';

        $message = str_replace(
            ['{region}', '{program}'],
            [$regionText, $programText],
            $template
        );

        return "https://api.whatsapp.com/send?phone={$phone}&text=" . urlencode($message);
    }

    /**
     * Get the 4 official WhatsApp hotlines
     * 1. 081399810272 (Main Hotline Utama - Highlighted)
     * 2. 08118500177
     * 3. 087894580806
     * 4. 087894580649
     */
    protected function get4WaHotlines(?string $regionName = null, ?string $programTitle = null): array
    {
        $regionText = $regionName ?: 'Indonesia';
        $progText = $programTitle ? " program {$programTitle}" : ' Pelatihan Pilot Drone Profesional';

        $raw1 = Setting::get('whatsapp', '081399810272');
        $raw2 = Setting::get('whatsapp_detail_1', '08118500177');
        $raw3 = Setting::get('whatsapp_detail_3', '087894580806');
        $raw4 = Setting::get('whatsapp_detail_4', '087894580649');

        $clean1 = '62' . substr(preg_replace('/[^0-9]/', '', $raw1), 1);
        $clean2 = '62' . substr(preg_replace('/[^0-9]/', '', $raw2), 1);
        $clean3 = '62' . substr(preg_replace('/[^0-9]/', '', $raw3), 1);
        $clean4 = '62' . substr(preg_replace('/[^0-9]/', '', $raw4), 1);

        $msg1 = "Halo Admin Pusat Training Drone, saya ingin info pendaftaran{$progText} di wilayah {$regionText}.";
        $msg2 = "Halo CS Pelatihan Drone (Hotline 2), mohon info jadwal batch terdekat dan kuota kelas di {$regionText}.";
        $msg3 = "Halo Tim Instruktur Drone (Hotline 3), saya ingin konsultasi silabus materi sertifikasi pilot drone & pemetaan fotogrametri di {$regionText}.";
        $msg4 = "Halo Divisi Kerjasama In-House Training Drone (Hotline 4), kami bermaksud mengajukan proposal pelatihan in-house operator drone di perusahaan kami di {$regionText}.";

        return [
            [
                'number' => $raw1,
                'clean' => $clean1,
                'title' => 'Hotline Utama (Pendaftaran & Batch)',
                'badge' => '24/7 Fast Response',
                'desc' => 'Layanan informasi jadwal, pendaftaran reguler & konfirmasi kuota kelas terdekat.',
                'url' => "https://api.whatsapp.com/send?phone={$clean1}&text=" . urlencode($msg1),
                'icon' => 'bi-whatsapp',
                'is_primary' => true,
            ],
            [
                'number' => $raw2,
                'clean' => $clean2,
                'title' => 'Hotline 2 (Layanan Jadwal & Sertifikasi)',
                'badge' => 'Konsultan Resmi',
                'desc' => 'Bantuan proses registrasi, info sertifikasi pilot drone resmi & kualifikasi industri.',
                'url' => "https://api.whatsapp.com/send?phone={$clean2}&text=" . urlencode($msg2),
                'icon' => 'bi-headset',
                'is_primary' => false,
            ],
            [
                'number' => $raw3,
                'clean' => $clean3,
                'title' => 'Hotline 3 (Silabus & Teknis Pilot Drone / Pemetaan)',
                'badge' => 'Tim Instruktur',
                'desc' => 'Konsultasi kurikulum teknis, fotogrametri RTK/PPK, sensor termal, dan kalibrasi sensor.',
                'url' => "https://api.whatsapp.com/send?phone={$clean3}&text=" . urlencode($msg3),
                'icon' => 'bi-patch-check-fill',
                'is_primary' => false,
            ],
            [
                'number' => $raw4,
                'clean' => $clean4,
                'title' => 'Hotline 4 (In-House & Corporate Training)',
                'badge' => 'Khusus Perusahaan',
                'desc' => 'Pengajuan proposal resmi in-house training dan sertifikasi armada drone korporasi.',
                'url' => "https://api.whatsapp.com/send?phone={$clean4}&text=" . urlencode($msg4),
                'icon' => 'bi-building-fill',
                'is_primary' => false,
            ],
        ];
    }

    /**
     * 1. Homepage / Beranda
     */
    public function index()
    {
        $programs = Program::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        // 3 Cards Limited Articles
        $articles = Article::where('is_published', true)
            ->orderBy('is_featured', 'desc')
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        $statistics = Statistic::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $heroSlides = HeroSlide::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $testimonials = Testimonial::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $faqs = Faq::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $provinces = RegionService::getAllProvinces();
        $waLink = $this->getWaLink('Nasional');
        $waNumbers = $this->get4WaHotlines('Indonesia');

        $partners = [
            ['name' => 'PT Pertamina (Persero)', 'role' => 'Inspeksi Aset Flare Stack & Koridor Pipa Migas'],
            ['name' => 'PT PLN (Persero)', 'role' => 'Inspeksi Transmisi Listrik SUTET & Gardu Induk'],
            ['name' => 'PT Freeport Indonesia', 'role' => 'Pemetaan Geospasial Tambang & Stockpile'],
            ['name' => 'PT Vale Indonesia Tbk', 'role' => 'Pemantauan Topografi & Reklamasi Tambang'],
            ['name' => 'PT Astra Agro Lestari Tbk', 'role' => 'Pemetaan Perkebunan Kelapa Sawit & Sensus Pokok'],
            ['name' => 'PT Sinarmas Forestry', 'role' => 'Monitoring Hutan Tanaman Industri & Deteksi Hotspot'],
            ['name' => 'PT Wijaya Karya (Persero) Tbk', 'role' => 'Pemantauan Progres Konstruksi & Pemodelan 3D'],
            ['name' => 'PT Waskita Karya (Persero) Tbk', 'role' => 'Survei Fotogrametri Trase Jalan Tol & Jembatan'],
            ['name' => 'PT Sucofindo (Persero)', 'role' => 'Verifikasi Inspeksi Aset & Survei Udara'],
            ['name' => 'PT Surveyor Indonesia', 'role' => 'Audit Teknis Infrastruktur & Monitoring Lingkungan'],
        ];

        return view('front.index', compact(
            'programs',
            'articles',
            'statistics',
            'heroSlides',
            'testimonials',
            'faqs',
            'provinces',
            'partners',
            'waLink',
            'waNumbers'
        ));
    }

    /**
     * 2. Tentang Kami
     */
    public function about()
    {
        $statistics = Statistic::where('is_active', true)->orderBy('sort_order')->get();
        $testimonials = Testimonial::where('is_active', true)->orderBy('sort_order')->get();
        $waLink = $this->getWaLink('Indonesia');
        $waNumbers = $this->get4WaHotlines('Indonesia');

        return view('front.about', compact('statistics', 'testimonials', 'waLink', 'waNumbers'));
    }

    /**
     * 3. Program Pelatihan (Daftar Program)
     */
    public function programs()
    {
        $programs = Program::where('is_active', true)->orderBy('sort_order')->get();
        $provinces = RegionService::getAllProvinces();
        $waLink = $this->getWaLink('Indonesia');
        $waNumbers = $this->get4WaHotlines('Indonesia');

        return view('front.programs', compact('programs', 'provinces', 'waLink', 'waNumbers'));
    }

    /**
     * Program Detail
     */
    public function programDetail($slug)
    {
        $program = Program::where('slug', $slug)->firstOrFail();
        $provinces = RegionService::getAllProvinces();
        $waLink = $this->getWaLink('Indonesia', $program->title);
        $waNumbers = $this->get4WaHotlines('Indonesia', $program->title);

        $otherPrograms = Program::where('is_active', true)
            ->where('id', '!=', $program->id)
            ->get();

        return view('front.program-detail', compact('program', 'provinces', 'otherPrograms', 'waLink', 'waNumbers'));
    }

    /**
     * 4. Wilayah: Provinsi
     */
    public function wilayahProvinsi($provinceSlug)
    {
        $province = RegionService::findProvince($provinceSlug);
        if (!$province) {
            abort(404, 'Provinsi tidak ditemukan.');
        }

        $regionName = $province['name'];
        $regionalArticles = DroneSchemeService::getRegionalArticleList([
            'province' => $province['name'],
            'city' => '',
            'district' => ''
        ], 200);

        $programs = Program::where('is_active', true)->get();
        $waLink = $this->getWaLink($province['name']);
        $waNumbers = $this->get4WaHotlines($province['name']);
        $mapUrl = RegionService::getMapUrl('Provinsi ' . $province['name'] . ', Indonesia');

        $articles = $regionalArticles;
        $mapsUrl = $mapUrl;

        return view('front.wilayah-provinsi', compact(
            'province',
            'articles',
            'regionalArticles',
            'programs',
            'waLink',
            'waNumbers',
            'mapUrl',
            'mapsUrl'
        ));
    }

    /**
     * 5. Wilayah: Kab/Kota
     */
    public function wilayahKabkot($provinceSlug, $kabkotSlug)
    {
        $kabkotData = RegionService::findKabkot($provinceSlug, $kabkotSlug);
        if (!$kabkotData) {
            abort(404, 'Kabupaten/Kota tidak ditemukan.');
        }

        $regionName = $kabkotData['name'] . ', ' . $kabkotData['province']['name'];
        $regionalArticles = DroneSchemeService::getRegionalArticleList([
            'province' => $kabkotData['province']['name'],
            'city' => $kabkotData['name'],
            'district' => ''
        ], 200);

        $programs = Program::where('is_active', true)->get();
        $waLink = $this->getWaLink($regionName);
        $waNumbers = $this->get4WaHotlines($regionName);
        $mapUrl = RegionService::getMapUrl($regionName);

        $province = $kabkotData['province'];
        $kabkotName = $kabkotData['name'];
        $articles = $regionalArticles;
        $mapsUrl = $mapUrl;
        $kecamatanList = $kabkotData['kecamatan'] ?? [];

        return view('front.wilayah-kabkot', compact(
            'kabkotData',
            'province',
            'kabkotName',
            'kabkotSlug',
            'kecamatanList',
            'articles',
            'regionalArticles',
            'programs',
            'waLink',
            'waNumbers',
            'mapUrl',
            'mapsUrl'
        ));
    }

    /**
     * 6. Wilayah: Kecamatan
     */
    public function wilayahKecamatan($provinceSlug, $kabkotSlug, $kecamatanSlug)
    {
        $kecamatanData = RegionService::findKecamatan($provinceSlug, $kabkotSlug, $kecamatanSlug);
        if (!$kecamatanData) {
            abort(404, 'Kecamatan tidak ditemukan.');
        }

        $regionName = 'Kecamatan ' . $kecamatanData['name'] . ', ' . $kecamatanData['kabkot']['name'] . ', ' . $kecamatanData['province']['name'];
        $regionalArticles = DroneSchemeService::getRegionalArticleList([
            'province' => $kecamatanData['province']['name'],
            'city' => $kecamatanData['kabkot']['name'],
            'district' => 'Kecamatan ' . $kecamatanData['name']
        ], 200);

        $programs = Program::where('is_active', true)->get();
        $waLink = $this->getWaLink($regionName);
        $waNumbers = $this->get4WaHotlines($regionName);
        $mapUrl = RegionService::getMapUrl($regionName);

        $kabkotData = RegionService::findKabkot($provinceSlug, $kabkotSlug);
        $kecamatanList = $kabkotData['kecamatan'] ?? [];

        return view('front.wilayah-kecamatan', compact(
            'kecamatanData',
            'kecamatanList',
            'regionalArticles',
            'programs',
            'waLink',
            'waNumbers',
            'mapUrl'
        ));
    }

    /**
     * 7. Program + Region Dynamic Route
     */
    public function programRegion($p1, $p2 = null, $p3 = null, $p4 = null)
    {
        $provinceSlug = null;
        $kabkotSlug = null;
        $kecamatanSlug = null;
        $programSlug = null;

        if ($p4 !== null) {
            // 4 parameters: province, kabkot, kecamatan, program
            $provinceSlug = $p1;
            $kabkotSlug = $p2;
            $kecamatanSlug = $p3;
            $programSlug = $p4;
        } elseif ($p3 !== null) {
            // 3 parameters: province, kabkot, program
            $provinceSlug = $p1;
            $kabkotSlug = $p2;
            $programSlug = $p3;
        } elseif ($p2 !== null) {
            // 2 parameters: province, program
            $provinceSlug = $p1;
            $programSlug = $p2;
        }

        $program = Program::where('slug', $programSlug)->first();
        if (!$program) {
            // Fallback: get first active program or find slug
            $program = Program::first();
        }

        $regionName = 'Indonesia';
        $locationLabel = 'Tingkat Nasional';
        $province = null;
        $kabkot = null;
        $kecamatan = null;

        if ($provinceSlug) {
            $province = RegionService::findProvince($provinceSlug);
            if ($province) {
                $regionName = 'Provinsi ' . $province['name'];
                $locationLabel = $regionName;
            }
        }

        if ($kabkotSlug && $provinceSlug) {
            $kabkot = RegionService::findKabkot($provinceSlug, $kabkotSlug);
            if ($kabkot) {
                $regionName = $kabkot['name'] . ', ' . ($province['name'] ?? '');
                $locationLabel = $regionName;
            }
        }

        if ($kecamatanSlug && $kabkotSlug && $provinceSlug) {
            $kecamatan = RegionService::findKecamatan($provinceSlug, $kabkotSlug, $kecamatanSlug);
            if ($kecamatan) {
                $regionName = 'Kecamatan ' . $kecamatan['name'] . ', ' . ($kabkot['name'] ?? '');
                $locationLabel = $regionName;
            }
        }

        $kecamatanList = [];
        $kabkotList = [];
        if ($kabkot && isset($kabkot['kecamatan'])) {
            $kecamatanList = $kabkot['kecamatan'];
        } elseif ($province && isset($province['kabkot'])) {
            $kabkotList = $province['kabkot'];
        }

        $regionalArticles = DroneSchemeService::getRegionalArticleList([
            'province' => $province['name'] ?? '',
            'city' => $kabkot['name'] ?? '',
            'district' => $kecamatan['name'] ?? ''
        ], 200);

        $waLink = $this->getWaLink($regionName, $program ? $program->title : 'Drone');
        $waNumbers = $this->get4WaHotlines($regionName, $program ? $program->title : 'Drone');
        $mapUrl = RegionService::getMapUrl($regionName);

        return view('front.program-region-detail', compact(
            'program',
            'province',
            'kabkot',
            'kecamatan',
            'kabkotSlug',
            'provinceSlug',
            'kecamatanList',
            'kabkotList',
            'regionName',
            'locationLabel',
            'regionalArticles',
            'waLink',
            'waNumbers',
            'mapUrl'
        ));
    }

    /**
     * 8. Artikel: Index
     */
    public function articles(Request $request)
    {
        $search = $request->input('q');
        $query = Article::where('is_published', true);

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%")
                  ->orWhere('excerpt', 'like', "%{$search}%");
            });
        }

        $featuredArticles = (clone $query)->where('is_featured', true)->latest()->limit(3)->get();
        $articles = $query->latest()->paginate(9)->withQueryString();

        $topics = DroneSchemeService::getArticleTopics();
        $provinces = RegionService::getAllProvinces();
        $waLink = $this->getWaLink('Nasional');
        $waNumbers = $this->get4WaHotlines('Indonesia');

        return view('front.articles', compact('articles', 'featuredArticles', 'topics', 'provinces', 'search', 'waLink', 'waNumbers'));
    }

    /**
     * 9. Artikel: Detail (Panduan Lengkap Synthesizer)
     */
    public function articleDetail($slug)
    {
        $rawArticle = DroneSchemeService::getOrSynthesizeArticle($slug);
        if (!$rawArticle) {
            abort(404, 'Artikel tidak ditemukan.');
        }
        $article = is_array($rawArticle) ? (object)$rawArticle : $rawArticle;

        $regionName = $article->city ?? ($article->province ?? 'Indonesia');
        $relatedArticles = Article::where('is_published', true)
            ->where('id', '!=', $article->id ?? 0)
            ->latest()
            ->limit(3)
            ->get();

        $programs = Program::where('is_active', true)->get();
        $provinces = RegionService::getAllProvinces();
        $waLink = $this->getWaLink($regionName, $article->title);
        $waNumbers = $this->get4WaHotlines($regionName, $article->title);

        return view('front.article-detail', compact(
            'article',
            'relatedArticles',
            'programs',
            'provinces',
            'waLink',
            'waNumbers'
        ));
    }

    /**
     * 10. Kontak
     */
    public function contact()
    {
        $programs = Program::where('is_active', true)->orderBy('sort_order', 'asc')->get();
        $waLink = $this->getWaLink('Indonesia');
        $waNumbers = $this->get4WaHotlines('Indonesia');
        $mapsEmbed = Setting::get('maps_embed', '');

        return view('front.contact', compact('programs', 'waLink', 'waNumbers', 'mapsEmbed'));
    }

    /**
     * Kirim Pesan Kontak
     */
    public function sendMessage(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'phone' => 'required|string|max:20',
            'subject' => 'nullable|string|max:200',
            'message' => 'required|string|max:2000',
        ]);

        ContactMessage::create($request->all());

        return redirect()->back()->with('success', 'Pesan Anda berhasil dikirim. Tim Konsultan Training Drone akan segera menghubungi Anda!');
    }
}
