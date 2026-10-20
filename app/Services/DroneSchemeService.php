<?php

namespace App\Services;

use Illuminate\Support\Str;

class DroneSchemeService
{
    /**
     * Daftar 6 Master Program Training Drone (UAV / Remote Pilot) Profesional & Sertifikasi Resmi
     */
    public static function getMasterPrograms(): array
    {
        return [
            [
                'title' => 'Training Pilot Drone Profesional & Lisensi Remote Pilot Resmi',
                'slug' => 'training-pilot-drone-profesional-remote-pilot-license',
                'category' => 'Sertifikasi Pilot Drone Resmi',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'price' => 3750000,
                'rating' => 4.9,
                'reviews_count' => 420,
                'badge' => 'Sertifikasi Pilot Drone Resmi Nasional',
                'description' => 'Program pelatihan intensif pilot drone komprehensif dari dasar hingga mahir. Membekali peserta dengan kecakapan aerodinamika, regulasi ruang udara, navigasi manual ATTI, dan prosedur keselamatan terbang berstandar resmi.',
                'overview' => 'Pengoperasian sistem pesawat udara tanpa awak (Unmanned Aerial Vehicle / Remote Pilot Aircraft System) di era industri modern menuntut kualifikasi pilot yang bertanggung jawab dan kompeten. Pelatihan Pilot Drone Profesional & Lisensi Remote Pilot Resmi membekali Anda dengan pengetahuan regulasi ruang udara, klasifikasi Kawasan Keselamatan Operasi Penerbangan (KKOP), pemahaman NOTAM, serta kecakapan teknis menerbangkan multirotor dalam mode GPS maupun ATTI (tanpa asistensi satelit). Peserta akan dilatih secara mendalam dalam mengelola manajemen risiko, pre-flight check, pemeliharaan baterai LiPo cerdas, serta penanganan situasi darurat (failsafe RTH, compass error, lost link) guna memastikan seluruh misi penerbangan berjalan dengan tingkat keselamatan zero accident.',
                'target_audience' => [
                    'Calon pilot drone pemula hingga profesional yang ingin memiliki sertifikasi kompetensi resmi',
                    'Personel instansi, swasta, BUMN, dan kontraktor yang bertugas mengoperasikan armada drone operasional',
                    'Fotografer, videografer, dan kreator konten aerial yang ingin terbang secara legal dan aman',
                    'Tim survei, pemetaan, dan inspeksi lapangan yang memerlukan fondasi terbang yang solid',
                    'Safety officer dan pengawas K3 yang bertanggung jawab terhadap keselamatan operasional drone industri'
                ],
                'curriculum' => [
                    'Prinsip Regulasi Ruang Udara Nasional, Batas Ketinggian Maksimum, dan Zonasi KKOP',
                    'Dasar Aerodinamika Multirotor, Fixed Wing, dan Fisika Penerbangan Wahana Tanpa Awak',
                    'Anatomi dan Komponen Utama Drone: Flight Controller, IMU, Kompas, GPS, ESC, dan Propeller',
                    'Prosedur Standar Pra-Terbang (Pre-Flight Inspection Checklist) dan Kalibrasi Sensor',
                    'Teknik Pengendalian Manual: Lepas Landas, Hovering Stabil, Orientasi 360 Derajat, dan Pendaratan Presisi',
                    'Penerbangan dalam ATTI Mode (Manual Mode Tanpa Bantuan Satelit GPS) untuk Respon Darurat',
                    'Manajemen Baterai Li-Po / Li-Ion: Charging, Discharging, Storage, dan Pencegahan Thermal Runaway',
                    'Prosedur Tanggap Darurat: Return-to-Home (RTH), Fly-Away Mitigation, dan Jamming Signal Recovery',
                    'Praktik Uji Manuver Terbang Lapangan (Figure 8, Orbiting, Nose-In Hover, Emergency Cut)',
                    'Uji Teori Kompetensi Ruang Udara dan Sidang Evaluasi Kelulusan Pilot Drone Resmi'
                ],
                'requirements' => [
                    'Usia minimal 17 tahun dan memiliki identitas diri (KTP / SIM / Paspor)',
                    'Sehat jasmani dan rohani, tidak memiliki gangguan penglihatan warna (bebas buta warna total)',
                    'Memiliki komitmen tinggi terhadap keselamatan penerbangan dan integritas etika privasi',
                    'Membawa unit drone pribadi untuk praktik (tersedia unit sewa/praktik dari lembaga bila belum memiliki)',
                    'Pasfoto resmi berlatar belakang merah/biru ukuran 3x4 (3 lembar)'
                ],
                'facilities' => [
                    'Sertifikat Kompetensi Pilot Drone Resmi Nasional & Lisensi Remote Pilot Card',
                    'Buku Panduan Teknis & Modul Pelatihan Lengkap (Hardcopy & E-Book)',
                    'Akses Lapangan Praktik Terbang Luas, Aman, dan Bebas Hambatan Udara',
                    'Instruktur Senior Bersertifikasi dan Berpengalaman Ratusan Jam Terbang',
                    'Training Kit Eksklusif (Lanyard, Rompi Pilot Drone, T-Shirt, Topi, Sticker Pack)',
                    'Konsumsi Makan Siang, Snack, dan Coffee Break selama Pelatihan Berlangsung'
                ],
                'image' => 'https://images.unsplash.com/photo-1527977966376-1c8408f9f108?w=800&auto=format&fit=crop&q=80',
                'meta_title' => 'Training Pilot Drone Profesional & Lisensi Remote Pilot Resmi | Sertifikasi Nasional',
                'meta_description' => 'Pelatihan dan pembinaan kompetensi pilot drone komprehensif bersertifikasi resmi. Kuasai regulasi ruang udara, ATTI mode, dan keselamatan terbang berstandar industri.'
            ],
            [
                'title' => 'Training Drone Pemetaan, Survei Udara & Fotogrametri Presisi Tinggi',
                'slug' => 'training-drone-pemetaan-survei-udara-fotogrametri',
                'category' => 'Spesialis Pemetaan & GIS',
                'duration' => '4 Hari (32 Jam Pelajaran)',
                'price' => 5200000,
                'rating' => 4.9,
                'reviews_count' => 385,
                'badge' => 'Kualifikasi Surveyor Udara & GIS Presisi',
                'description' => 'Kuasai teknik survei topografi foto udara, pemasangan Ground Control Point (GCP) GNSS Geodetik RTK/PPK, perencanaan misi otomatis, dan pengolahan data ortofoto, DSM/DEM, dan kontur 3D.',
                'overview' => 'Kebutuhan data spasial akurat beresolusi tinggi di sektor pertambangan, perkebunan kelapa sawit, konstruksi infrastruktur, dan perencanaan wilayah mendorong adopsi teknologi fotogrametri UAV secara masif. Program Training Drone Pemetaan & Fotogrametri dirancang khusus untuk menghasilkan tenaga surveyor udara handal. Peserta mempelajari kalkulasi Ground Sampling Distance (GSD), penentuan overlap/sidelap foto, perancangan jalur terbang otomatis melalui software Mission Planner / DJI Pilot / UgCS, serta integrasi teknologi GNSS Geodetik untuk pemasangan GCP & ICP. Tahap pasca-terbang mencakup pemrosesan fotogrametri menggunakan software standar industri (Pix4Dmapper, Agisoft Metashape, DJI Terra) untuk menghasilkan Orthomosaic, Digital Surface Model (DSM), Digital Elevation Model (DEM), garis kontur, serta perhitungan volume cut and fill dengan akurasi skala sub-sentimeter.',
                'target_audience' => [
                    'Surveyor tanah, geodesi, geografi, dan analis GIS di sektor pertambangan dan perkebunan',
                    'Engineer sipil, kontraktor jalan tol, bendungan, dan proyek konstruksi skala besar',
                    'Perencana tata ruang kota dan pemetaan wilayah perdesaan / kehutanan',
                    'Akademisi, konsultan amdal, dan peneliti geospasial',
                    'Pilot drone yang ingin meningkatkan spesialisasi ke level survei teknik bernilai tinggi'
                ],
                'curriculum' => [
                    'Dasar Teori Fotogrametri Udara, Skala Foto, Focal Length, dan Kalkulasi GSD Presisi',
                    'Prinsip Sistem Koordinat Geospasial, Proyeksi Peta, dan Datum WGS84 / UTM',
                    'Teknik Pemasangan dan Pengukuran Ground Control Point (GCP) & ICP dengan GNSS RTK Geodetik',
                    'Perencanaan Jalur Terbang Otomatis (Flight Mission Planning) Single Grid, Double Grid, dan Terrain Following',
                    'Eksekusi Misi Pemetaan Lapangan, Pengawasan Real-time Telemetri, dan Safety Buffer',
                    'Quality Control Foto Udara: Cek Blur, Vignetting, Exposure, dan Metadata EXIF Geotagging',
                    'Proses Fotogrametri Lanjut: Photo Alignment, Optimasi Kamera, Dense Point Cloud, dan Mesh 3D',
                    'Generasi True Orthomosaic Resolusi Tinggi, Digital Surface Model (DSM), dan DTM Filtering',
                    'Pembuatan Garis Kontur Topografi dan Analisis Perhitungan Volume Cut & Fill Tambang',
                    'Integrasi Hasil Peta ke Software GIS (QGIS / ArcGIS / AutoCAD Civil 3D) dan Penyusunan Laporan Survei'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK / D3 / S1 (diutamakan Teknik Geodesi / Sipil / Geografi / IT / Tambang)',
                    'Memiliki pengalaman dasar menerbangkan drone multirotor',
                    'Membawa laptop berspesifikasi mumpuni untuk olah data (rekomendasi RAM 16GB+, GPU Dedicated)',
                    'Surat tugas dari instansi/perusahaan atau pendaftaran mandiri',
                    'Fotokopi KTP dan Pasfoto 3x4 (3 lembar)'
                ],
                'facilities' => [
                    'Sertifikat Resmi Training Drone Pemetaan & Fotogrametri Udara Presisi',
                    'Modul Tutorial Pemrosesan Fotogrametri Langkah Demi Langkah dan Dataset Latihan Praktik',
                    'Praktik Pengoperasian GNSS Geodetik RTK dan Drone Mapping Industri di Lapangan',
                    'Lisensi Trial Software Fotogrametri Standar Industri dan Template Pelaporan Survei',
                    'Konsultasi Pasca-Pelatihan Bersama Instruktur Ahli Geospasial',
                    'Training Kit, ID Card, Makan Siang, dan Coffee Break Harian'
                ],
                'image' => 'https://images.unsplash.com/photo-1508614589041-895b88991e3e?w=800&auto=format&fit=crop&q=80',
                'meta_title' => 'Training Drone Pemetaan, Survei Udara & Fotogrametri Presisi | GIS & Topografi',
                'meta_description' => 'Pelatihan teknik fotogrametri drone, GCP GNSS RTK, pengolahan ortomosaic, DSM, kontur, dan perhitungan volume cut and fill berstandar industri pemetaan.'
            ],
            [
                'title' => 'Training Drone Inspeksi Industri & Infrastruktur (Thermal, Zoom & NDT Visual)',
                'slug' => 'training-drone-inspeksi-industri-infrastruktur',
                'category' => 'Spesialis Inspeksi Aset Industri',
                'duration' => '4 Hari (32 Jam Pelajaran)',
                'price' => 5800000,
                'rating' => 4.9,
                'reviews_count' => 310,
                'badge' => 'Kualifikasi Inspektur Aset Kritis',
                'description' => 'Pelatihan inspeksi visual dan radiometrik termal menggunakan drone pada aset energi, menara transmisi listrik SUTET, flare stack migas, panel surya, dan konstruksi jembatan.',
                'overview' => 'Melakukan inspeksi visual manual pada struktur fasilitas industri yang tinggi dan berbahaya memiliki risiko kecelakaan kerja ekstrim dan menuntut biaya shutdown yang masif. Pemanfaatan drone industri bersensor termal radiometrik, kamera telephoto zoom optik tinggi, dan sensor LiDAR mengubah paradigma inspeksi menjadi lebih aman, cepat, dan terukur. Program Training Drone Inspeksi Industri membekali operator dengan metodologi inspeksi non-kontak pada menara transmisi listrik (SUTET/SUTT), flare stack kilang minyak, bilah kincir angin (wind turbine), jaringan pipa (pipeline), atap pabrik, solar farm fotovoltaik, serta struktur jembatan bentang panjang. Peserta menguasai pembacaan citra inframerah, identifikasi anomali panas (hotspot electrical), pemetaan korosi, retakan struktural beton/baja, serta teknik penyusunan dokumen pelaporan audit aset sesuai standar integritas industri.',
                'target_audience' => [
                    'Inspektur QA/QC, asset integrity engineer, dan teknisi pemeliharaan fasilitas energi dan migas',
                    'Teknisi PLN, operator transmisi daya listrik, gardu induk, dan pembangkit energi terbarukan',
                    'Engineer struktur dan pemeliharaan fasilitas sipil, pelabuhan, jembatan, dan jalan layang',
                    'Auditor energi industri yang membutuhkan thermography aerial audit',
                    'Safety engineer yang bertugas mengeliminasi risiko bekerja di ketinggian (working at height)'
                ],
                'curriculum' => [
                    'Standar Keselamatan Operasi Drone di Area Berbahaya (Hazardous Zone & Elektromagnetik Kuat)',
                    'Prinsip Termografi Inframerah: Emisivitas, Reflektivitas, Transmisivitas, dan Delta Suhu',
                    'Teknik Pengoperasian Kamera Termal Radiometrik dan Sensor Zoom Optik Ultra-Tinggi (30x - 200x)',
                    'Prosedur Inspeksi Transmisi Listrik SUTET: Deteksi Corona, Hotspot Insulator, dan Sambungan Konduktor',
                    'Metode Inspeksi Menara Suar (Flare Stack) Migas Tanpa Mematikan Operasi Pabrik (Live Operation)',
                    'Audit Fotovoltaik Solar Panel: Deteksi Sel Rusak, Diode Bypass Rusak, dan Efek Bayangan Shading',
                    'Inspeksi Retakan Struktural (Crack Inspection) pada Jembatan, Silo Semen, dan Tangki Timbun',
                    'Penerbangan Manual Presisi Jarak Dekat di Sekitar Rintangan Logam Berinterferensi Magnetik',
                    'Pengolahan Data Termal Radiometrik Menggunakan Software Analisis Suhu dan Pembuatan Isotherm',
                    'Penyusunan Format Laporan Audit Kondisi Fisik Aset (Asset Condition Assessment Report)'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik Mesin / Listrik / Fisika / Sipil atau D3/S1 Teknik',
                    'Memiliki jam terbang dasar penerbangan drone dan sertifikat pilot drone (direkomendasikan)',
                    'Memahami dasar-dasar keselamatan kerja industri dan electrical safety',
                    'Surat rekomendasi instansi/perusahaan',
                    'Fotokopi KTP dan Pasfoto 3x4 (3 lembar)'
                ],
                'facilities' => [
                    'Sertifikat Resmi Training Drone Inspeksi Industri & Thermography Aerial',
                    'Modul Lengkap Standar Inspeksi Aset Industri & Panduan Interpretasi Citra Termal',
                    'Praktik Pengoperasian Drone Industri Bersensor Dual Termal & Zoom di Lingkungan Simulasi Real',
                    'Template Standar Laporan Audit Inspeksi Aset Siap Pakai untuk Klien/Manajemen',
                    'Training Kit Premium, Konsumsi Lengkap, dan Bimbingan Teknis Berkelanjutan'
                ],
                'image' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?w=800&auto=format&fit=crop&q=80',
                'meta_title' => 'Training Drone Inspeksi Industri & Infrastruktur | Termal, Migas & Listrik',
                'meta_description' => 'Pelatihan operasional drone inspeksi visual dan termal radiometrik untuk menara listrik SUTET, flare stack migas, solar panel, dan jembatan.'
            ],
            [
                'title' => 'Training Drone Pertanian Presisi & Operator Sprayer Perkebunan',
                'slug' => 'training-drone-pertanian-presisi-sprayer',
                'category' => 'Spesialis Drone Pertanian & Perkebunan',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'price' => 4500000,
                'rating' => 4.8,
                'reviews_count' => 295,
                'badge' => 'Kualifikasi Operator Drone Pertanian Modern',
                'description' => 'Pelatihan operasional drone penyemprot pupuk dan pestisida kapasitas besar (10-50 Liter), pemetaan kesehatan tanaman multispektral (NDVI/NDRE), dan otomatisasi perkebunan kelapa sawit.',
                'overview' => 'Modernisasi sektor agrikultur dan perkebunan menuntut efisiensi tinggi, penghematan tenaga kerja manual, serta presisi aplikasi input kimia guna menekan biaya dan melindungi lingkungan. Drone sprayer berdaya angkut besar (10 hingga 50 liter) serta drone sensor multispektral menjadi solusi revolusioner di perkebunan kelapa sawit, tebu, hortikultura, dan tanaman pangan. Program Training Drone Pertanian Presisi membekali operator dengan kompetensi teknis mengoperasikan drone semprot berkapasitas besar, memahami dinamika aliran semprot (droplet micron, swath width), kalibrasi nosel sentrifugal/tekanan, pemetaan indeks vegetasi (Normalized Difference Vegetation Index - NDVI), perhitungan sensus pokok tanaman kelapa sawit, serta manajemen operasional baterai dan pengisian bahan di lapangan secara efisien dan aman dari paparan kimia berbahaya.',
                'target_audience' => [
                    'Manajer kebun, asisten agronomis, dan staf riset perkebunan kelapa sawit, karet, dan tebu',
                    'Operator dan teknisi mekanisasi pertanian di perusahaan agribisnis dan BUMN Perkebunan',
                    'Petani milenial, kelompok tani (Poktan/Gapoktan), dan penyedia jasa semprot drone (agri-dronepreneur)',
                    'Distributor pupuk, pestisida, dan herbisida yang menyediakan layanan aplikasi udara',
                    'Pilot drone yang ingin memasuki peluang bisnis jasa aplikasi drone pertanian'
                ],
                'curriculum' => [
                    'Pengantar Pertanian Presisi (Precision Agriculture) dan Arsitektur Drone Sprayer Pertanian',
                    'Karakteristik Fisika Semprotan Udara: Swath Width, Droplet Size, Drift Angin, dan Evaporasi',
                    'Kalibrasi Nosel Sentrifugal dan Tekanan Sesuai Dosis Liter per Hektar (L/Ha)',
                    'Perencanaan Jalur Terbang Semprot Otomatis Menggunakan Peta Kontur dan Batas Poligon Kebun',
                    'Prosedur Pengisian Tangki, Pencampuran Formula Kimia, dan Standard APD Keselamatan Kerja',
                    'Operasi Penerbangan Nyata: Terrain Following Menggunakan Radar Gelombang Mikro / LiDAR Radar',
                    'Pengenalan Sensor Multispektral (Red, Green, RedEdge, Near-Infrared) untuk Monitoring Tanaman',
                    'Analisis Kesehatan Tanaman Berbasis Peta NDVI: Deteksi Stres Air, Defisiensi Hara, dan Hama',
                    'Teknik Sensus Pokok Otomatis (Tree Counting) dan Deteksi Gulma pada Fase Tanaman Belum Menghasilkan',
                    'Perawatan Harian Drone Sprayer: Pembersihan Sistem Pompa Kimia, Nosel, dan Manajemen Generator Lapangan'
                ],
                'requirements' => [
                    'Pendidikan minimal SLTA / SMK / sederajat (diutamakan SMK Pertanian / Mesin / Elektro)',
                    'Kondisi fisik sehat dan tidak alergi terhadap bahan kimia pertanian umum',
                    'Disiplin tinggi terhadap prosedur keselamatan kerja penggunaan pestisida',
                    'Fotokopi KTP / Identitas diri yang berlaku',
                    'Pasfoto resmi 3x4 (3 lembar)'
                ],
                'facilities' => [
                    'Sertifikat Resmi Training Drone Pertanian Presisi & Operator Sprayer',
                    'Buku Panduan Operasional Drone Sprayer, Standar Dosis Kalibrasi, dan Keselamatan Kimia',
                    'Praktik Menerbangkan Unit Drone Sprayer Kapasitas Besar dan Simulasi Semprot di Kebun',
                    'Tutorial Pengolahan Data Multispektral Menghasilkan Peta Indeks Vegetasi NDVI',
                    'Sesi Konsultasi Bisnis Jasa Drone Pertanian Bersama Praktisi Agri-Tech',
                    'Training Kit, ID Card, Konsumsi, dan Kaos Eksklusif Agri-Drone'
                ],
                'image' => 'https://images.unsplash.com/photo-1586771107445-d3ca888129ff?w=800&auto=format&fit=crop&q=80',
                'meta_title' => 'Training Drone Pertanian Presisi & Sprayer Perkebunan | Sawit & Pangan',
                'meta_description' => 'Pelatihan operasional drone semprot pertanian kapasitas besar, kalibrasi nosel, dan pemetaan citra multispektral NDVI perkebunan kelapa sawit.'
            ],
            [
                'title' => 'Training Drone Sinematografi Udara Kreatif & Perekaman Dinamis FPV',
                'slug' => 'training-drone-sinematografi-udara-fpv',
                'category' => 'Spesialis Sinematografi & FPV Komersial',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'price' => 4200000,
                'rating' => 4.9,
                'reviews_count' => 340,
                'badge' => 'Kualifikasi Sinematografer Udara & Pilot FPV',
                'description' => 'Pelatihan teknik pengambilan gambar sinematik udara kelas industri, pengaturan kamera log profil, shutter angle 180 derajat, manuver 3-axis gimbal, serta penerbangan dinamis FPV.',
                'overview' => 'Gambar udara telah menjadi elemen visual wajib dalam produksi film layar lebar, iklan komersial televisi, dokumenter profil perusahaan, video pariwisata, hingga liputan event berskala internasional. Namun, sekadar menerbangkan drone tidaklah cukup untuk menghasilkan visual yang memukau dan bercerita (storytelling). Program Training Drone Sinematografi Udara & FPV menggabungkan seni komposisi fotografi sinema dengan teknik manuver udara tingkat tinggi. Peserta mempelajari teori pencahayaan alami golden hour/blue hour, penggunaan filter ND (Neutral Density) untuk mematuhi aturan 180° shutter angle, pengambilan rekaman dalam profil datar (D-Log/C-Log/V-Log) untuk rentang dinamis maksimal, koordinasi multi-operator (pilot dan camera operator terpisah), serta pengantar teknik penerbangan FPV (First Person View) berkecepatan tinggi dengan kacamata goggle untuk rekaman dinamis yang mustahil dilakukan oleh drone konvensional.',
                'target_audience' => [
                    'Videografer komersial, filmmaker indie, dan videografer agensi periklanan',
                    'Fotografer lanskap, arsitektur, dan event yang ingin mengekspansi portofolio visual udara',
                    'Pilot drone yang ingin menguasai seni visual estetis dan pengolahan warna sinematik',
                    'Kreator konten digital, jurnalis media penyiaran, dan tim dokumentasi multimedia instansi',
                    'Penggemar teknologi video yang ingin mempelajari manuver FPV dinamis secara aman'
                ],
                'curriculum' => [
                    'Pengaturan Kamera Drone Sinematik: Shutter Rule 180°, Frame Rate (24p/60p/120p), ISO, dan Aperture',
                    'Penggunaan Filter ND / CPL untuk Menghasilkan Motion Blur Alami dan Pengendalian Glare',
                    'Komposisi Estetika Sinema: Rule of Thirds, Leading Lines, Reveal Shot, Parallax Effect, dan Birds Eye View',
                    'Manuver Kamera 3-Sumbu: Tilting, Panning, Tracking Kendaraan Cepat, dan Cable Cam Flight',
                    'Penerbangan Dual-Operator: Komunikasi Taktis Pilot Menerbangkan Wahana dan Cameraman Mengarahkan Gimbal',
                    'Pengantar Teknologi FPV: Goggle FPV, Pengendali Remote Kontrol Rentang Luas, dan Dinamika Acro Mode',
                    'Manuver FPV Komersial: Fly-Through Interior Gedung, Pengejaran Objek Cepat, dan Dive Building',
                    'Standar Keselamatan Perekaman di Lokasi Syuting: Manajemen Kru, Buffer Publik, dan Asuransi Peralatan',
                    'Workflow Pasca-Produksi: Color Correction, Penyesuaian LUT (Look Up Table), dan Stabilisasi Digital',
                    'Proyek Praktik Produksi Film Pendek Sinematik Udara dan Bedah Portofolio Visual'
                ],
                'requirements' => [
                    'Memiliki minat besar di bidang videografi, fotografi, atau konten multimedia kreatif',
                    'Memiliki pengalaman dasar menerbangkan drone dengan kamera gimbal',
                    'Membawa laptop untuk sesi latihan grading warna dan seleksi footage',
                    'Fotokopi KTP / identitas diri yang masih berlaku',
                    'Pasfoto resmi 3x4 (3 lembar)'
                ],
                'facilities' => [
                    'Sertifikat Resmi Training Drone Sinematografi Udara Kreatif & FPV',
                    'Paket Bonus LUT Sinematik Eksklusif untuk Grading Warna Footage Drone Log Profile',
                    'Akses Lokasi Syuting Praktik Estetik dengan Pemandangan Alam dan Arsitektur Menarik',
                    'Sesi Praktik Menerbangkan Unit Drone Sinematik Profesional dan Simulasi Goggle FPV',
                    'Review Portofolio Langsung oleh Sinematografer Udara Profesional',
                    'Training Kit, Merchandise Eksklusif, Makan Siang, dan Coffee Break Harian'
                ],
                'image' => 'https://images.unsplash.com/photo-1507582020474-9a35b7d455d7?w=800&auto=format&fit=crop&q=80',
                'meta_title' => 'Training Drone Sinematografi Udara Kreatif & Perekaman Dinamis FPV',
                'meta_description' => 'Pelatihan teknik sinematografi drone kelas industri, filter ND, log profile grading, dan manuver terbang dinamis FPV untuk film dan video komersial.'
            ],
            [
                'title' => 'Training Pemeliharaan, Avionik & Troubleshooting Drone Industri',
                'slug' => 'training-drone-pemeliharaan-avionik-troubleshooting',
                'category' => 'Teknisi Perawatan & Avionik Drone',
                'duration' => '4 Hari (32 Jam Pelajaran)',
                'price' => 4900000,
                'rating' => 4.9,
                'reviews_count' => 260,
                'badge' => 'Kualifikasi Teknisi Perawatan & Perbaikan UAV',
                'description' => 'Pelatihan perbaikan hardware drone, diagnosa modul sensor IMU & kompas, perakitan wiring, soldering standar penerbangan, penggantian motor brushless & ESC, serta analisis flight log blackbox.',
                'overview' => 'Armada drone yang digunakan secara intensif di lingkungan kerja ekstrim seperti pertambangan berdebu, perkebunan berkelembapan tinggi, atau anjungan lepas pantai memerlukan jadwal pemeliharaan ketat guna menghindari kegagalan struktural di udara. Program Training Pemeliharaan, Avionik & Troubleshooting Drone Industri dirancang untuk melahirkan teknisi drone kompeten yang mampu melakukan perawatan preventif, diagnosa kerusakan tingkat komponen, hingga perbaikan overhaul. Peserta dilatih membongkar dan merakit kembali sistem mekanikal dan elektrikal drone, menguji kontinuitas sirkuit, melakukan teknik penyolderan standar kedirgantaraan, mendiagnosa kegagalan Electronic Speed Controller (ESC) dan motor brushless, melakukan kalibrasi ulang sistem gimbal dan sensor optik, serta membaca dan menganalisis log penerbangan (flight telemetry blackbox) untuk menyelidiki penyebab insiden anomali di udara.',
                'target_audience' => [
                    'Teknisi mekanikal dan elektrikal yang bertanggung jawab merawat armada drone instansi/perusahaan',
                    'Personel bengkel servis elektronika yang ingin membuka layanan perbaikan drone profesional',
                    'Chief pilot dan fleet manager yang mengelola operasional armada drone multi-unit',
                    'Hobiis drone tingkat lanjut yang ingin menguasai arsitektur dan perakitan drone kustom',
                    'Staff pengadaan dan pemeliharaan alat survei di instansi pemerintah dan swasta'
                ],
                'curriculum' => [
                    'Arsitektur Elektronika Drone: Power Distribution Board (PDB), Flight Controller, dan Telemetri',
                    'Prinsip Kerja dan Pengujian Motor Brushless DC (BLDC): Stator, Rotor, Bearing, dan Nilai KV',
                    'Diagnosa Kerusakan Electronic Speed Controller (ESC): Firmware Flashing dan Kalibrasi Throttle',
                    'Teknik Penyolderan (Soldering) Berkualitas Kedirgantaraan pada Konektor Amper Tinggi (XT60/XT90)',
                    'Sistem Sensor Navigasi: Kalibrasi IMU Dual-Redundant, Barometer, Kompas Digital, dan Sensor Optik',
                    'Mekanisme Gimbal 3-Sumbu: Kalibrasi Sudut Motor, Penggantian Ribbon Cable Fleksibel, dan Damping Ball',
                    'Manajemen Kesehatan Baterai LiPo Lanjut: Analisis Resistansi Internal (IR) Sel dan Dekontaminasi',
                    'Prosedur Pembersihan Khusus Debu Silika, Karat Garam Pantai, dan Uji Kekedapan Air (IP Rating)',
                    'Metodologi Investigasi Insiden: Ekstraksi dan Analisis Data Flight Log / Blackbox Penerbangan',
                    'Praktik Troubleshooting Kerusakan Nyata (No GPS Lock, ESC Error, Compass Disconnected, Jitter Gimbal)'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Jurusan Elektronika / Otomasi / Mekatronika / Listrik / Mesin atau setara',
                    'Memiliki ketertarikan kuat pada bidang elektronika, perkakas obeng mikro, dan perakitan teknis',
                    'Kondisi penglihatan baik untuk bekerja dengan komponen elektronik berukuran mikro',
                    'Fotokopi KTP dan Pasfoto resmi 3x4 (3 lembar)'
                ],
                'facilities' => [
                    'Sertifikat Resmi Training Teknisi Perawatan & Avionik Drone Industri',
                    'Modul Servis dan Skema Elektronika Drone Lengkap Beserta Lembar Kerja Kalibrasi',
                    'Akses Workshop Praktik Lengkap dengan Peralatan Solder Suhu Terkontrol, Multitester, dan Osiloskop',
                    'Kit Praktik Komponen dan Bimbingan Langsung oleh Teknisi Senior Berpengalaman',
                    'Panduan Membuka Usaha Servis Drone & Jaringan Pemasok Suku Cadang Original',
                    'Training Kit, ID Card, Toolkit Obeng Presisi, Konsumsi Harian'
                ],
                'image' => 'https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?w=800&auto=format&fit=crop&q=80',
                'meta_title' => 'Training Pemeliharaan, Avionik & Troubleshooting Drone Industri | Teknisi Perbaikan',
                'meta_description' => 'Pelatihan teknisi perbaikan hardware drone, diagnosa sensor IMU, kalibrasi ESC, soldering, dan analisis flight log data blackbox.'
            ]
        ];
    }

    /**
     * Dapatkan 200 Topik Artikel Spesifik Berawalan "Training Drone: ..."
     */
    public static function get200ArticleTitles(): array
    {
        $baseTopics = [
            "Training Drone: Regulasi Ruang Udara Batas Ketinggian Maksimum dan Zonasi Keselamatan Terbang",
            "Training Drone: Prosedur Lengkap Pra-Penerbangan Pre-Flight Inspection Checklist Demi Keselamatan Misi",
            "Training Drone: Teknik Menerbangkan Multirotor dalam ATTI Mode Tanpa Asistensi Satelit GPS",
            "Training Drone: Prinsip Aerodinamika Wahana Tanpa Awak Multirotor Fixed Wing dan Hybrid VTOL",
            "Training Drone: Manajemen Baterai LiPo Cerdas Pengisian Seimbang Siklus Penyimpanan dan Pencegahan Rusak",
            "Training Drone: Prosedur Pengukuran Ground Control Point GCP dan ICP Menggunakan GNSS RTK Geodetik",
            "Training Drone: Kalkulasi Ground Sampling Distance GSD dan Perencanaan Overlap Foto Udara Presisi",
            "Training Drone: Pengolahan Ortofoto Resolusi Tinggi Digital Surface Model DSM dan Kontur dengan Fotogrametri",
            "Training Drone: Teknik Pemodelan 3D Objek Kompleks dan Bangunan Infrastruktur Menggunakan Drone Mapping",
            "Training Drone: Prosedur Perhitungan Volume Cut and Fill Stockpile Tambang Berbasis Data Foto Udara",
            "Training Drone: Inspeksi Visual dan Radiometrik Termal pada Menara Transmisi Listrik SUTET dan SUTT",
            "Training Drone: Metodologi Inspeksi Menara Suar Flare Stack Kilang Minyak Tanpa Mematikan Operasi",
            "Training Drone: Audit Fotovoltaik Solar Panel Menggunakan Kamera Inframerah Mendeteksi Sel Rusak dan Hotspot",
            "Training Drone: Inspeksi Integritas Struktur Jembatan Bentang Panjang Silo dan Tangki Timbun Industri",
            "Training Drone: Pengoperasian Sensor LiDAR Udara Menembus Kanopi Hutan Menghasilkan Model Elevasi Akurat",
            "Training Drone: Pengoperasian Drone Sprayer Kapasitas Besar 20 Hingga 50 Liter untuk Perkebunan Kelapa Sawit",
            "Training Drone: Kalibrasi Nosel Semprot Sentrifugal dan Pengendalian Drift Angin Aplikasi Pupuk Cair",
            "Training Drone: Analisis Indeks Vegetasi NDVI dan NDRE Menggunakan Kamera Multispektral Memantau Tanaman",
            "Training Drone: Sensus Pokok Kelapa Sawit Otomatis Tree Counting dan Deteksi Dini Serangan Hama Penyakit",
            "Training Drone: Pengaturan Kamera Sinematik Udara Shutter Rule 180 Derajat dan Penggunaan Filter ND",
            "Training Drone: Komposisi Estetika Sinema Reveal Shot Parallax Effect dan Birds Eye View untuk Produksi Video",
            "Training Drone: Manuver Perekaman Dinamis Kecepatan Tinggi Menggunakan Drone FPV dengan Kacamata Goggle",
            "Training Drone: Operasional Penerbangan Dual Operator Komunikasi Pilot dan Cameraman pada Lokasi Syuting",
            "Training Drone: Sistem Keselamatan Otomatis Failsafe Geofencing dan Prosedur Return to Home RTH Saat Hilang Kontak",
            "Training Drone: Mitigasi Cuaca Ekstrem Angin Kencang Turbulensi Udara Kabut dan Suhu Lingkungan Panas",
            "Training Drone: Analisis Data Flight Log Blackbox untuk Investigasi Insiden dan Evaluasi Performa Pesawat",
            "Training Drone: Perawatan Rutin Motor Brushless Electronic Speed Controller ESC dan Papan Distribusi Daya",
            "Training Drone: Teknik Soldering Berkualitas Tinggi pada Konektor Amper Besar dan Penggantian Kabel Modul",
            "Training Drone: Kalibrasi Sensor Navigasi IMU Barometer Kompas Digital dan Vision Obstacle Avoidance",
            "Training Drone: Standard Operating Procedure Penanganan Darurat Fly Away Battery Voltage Drop dan Crash Recovery"
        ];

        $specialties = [
            "pada Kawasan Industri Modern dan Kompleks Manufaktur Terpadu",
            "pada Proyek Infrastruktur Strategis Jalan Tol Jembatan dan Bendungan",
            "pada Area Konsesi Pertambangan Batubara Nikel Emas dan Mineral",
            "pada Perkebunan Kelapa Sawit Tebu Karet dan Hutan Tanaman Industri",
            "pada Fasilitas Kilang Minyak Terminal Gas LNG dan Anjungan Lepas Pantai",
            "pada Sektor Pembangkit Energi Listrik PLTU PLTA dan Solar Farm Terbarukan",
            "pada Pemetaan Topografi Wilayah Perkotaan Tata Ruang dan Kadaster",
            "pada Industri Kreatif Perfilman Iklan Komersial dan Pariwisata Unggulan",
            "pada Pemantauan Daerah Aliran Sungai Konservasi Hutan dan Mitigasi Bencana Alam",
            "pada Fasilitas Pelabuhan Maritim Pergudangan Logistik dan Terminal Petikemas",
            "pada Konstruksi Gedung Pencakar Langit Pemantauan K3 dan Audit Struktur",
            "pada Pengawasan Aset Jalur Kereta Api Pipa Gas dan Koridor Transmisi Listrik"
        ];

        $titles = [];
        $index = 1;

        // Loop to generate exactly 200 distinct topics
        foreach ($baseTopics as $base) {
            foreach ($specialties as $spec) {
                $titles[] = "{$base} {$spec}";
                if (count($titles) >= 200) {
                    break 2;
                }
            }
        }

        // Fallback fill to ensure exactly 200 titles
        while (count($titles) < 200) {
            $titles[] = "Training Drone: Panduan Praktis Penerbangan dan Manajemen Risiko Operasional UAV Kelas " . count($titles);
        }

        return array_slice($titles, 0, 200);
    }

    /**
     * Generator Artikel Teknis Drone Komprehensif (28 Bab Mendalam)
     * Mengkombinasikan regulasi ruang udara, aerodinamika, fotogrametri, inspeksi, pertanian, sinematografi, dan perawatan.
     * Bebas dari sebutan nama pemerintahan dan bebas dari indikator kuantitas buatan.
     */
    public static function generateDeepArticle(string $title, string $regionName = 'Indonesia', int $targetWords = 7000): array
    {
        $regUpper = strtoupper($regionName);
        $cleanTitle = trim($title);

        $chapters = [
            [
                'title' => "Bab 1: Urgensi Standar Kompetensi dan Filosofi Training Drone di {$regionName}",
                'content' => "Perkembangan pesat teknologi sistem pesawat udara tanpa awak (Unmanned Aerial Vehicle / Remotely Piloted Aircraft System) telah mengubah lanskap operasional berbagai industri strategis di {$regionName}. Dari survei topografi hingga inspeksi infrastruktur bertegangan tinggi, pemanfaatan wahana udara nirkabel menawarkan efisiensi waktu, reduksi biaya masif, serta perlindungan keselamatan kerja yang tak tertandingi. Namun, di balik kecanggihan otomatisasi sistem otonom tersebut, faktor manusia (human factor) tetap menjadi penentu utama keselamatan penerbangan. 

Training drone profesional di {$regionName} bukan sekadar mengajarkan bagaimana menggerakkan tuas kendali (stick throttle dan yaw) pada remote controller, melainkan menanamkan pola pikir aviasi (airmanship mindset) yang mengutamakan kedisiplinan regulasi, perhitungan risiko meteorologi, kepekaan spasial, dan kesiapsiagaan menghadapi anomali teknis. Menerbangkan drone di ruang udara publik membawa tanggung jawab hukum dan etika yang mengikat, di mana kegagalan operasional berpotensi mengancam keselamatan penerbangan sipil berawak, merusak aset bernilai miliaran rupiah di darat, hingga mencelakai masyarakat sekitar. Oleh karena itu, standardisasi kompetensi pilot melalui pelatihan formal dan sertifikasi resmi menjadi pondasi mutlak bagi setiap individu maupun korporasi yang ingin memanfaatkan drone secara legal, profesional, dan berkelanjutan di seluruh wilayah {$regionName}."
            ],
            [
                'title' => "Bab 2: Kerangka Regulasi Ruang Udara, Zonasi KKOP, dan Keselamatan Terbang Bebas Kendala",
                'content' => "Ruang udara di atas wilayah {$regionName} merupakan aset bersama yang diatur oleh ketentuan keselamatan ketat guna mencegah konflik lalu lintas udara antara pesawat berawak dan wahana nirawak. Setiap pilot drone wajib memahami klasifikasi ruang udara (Airspace Classes), penetapan Kawasan Keselamatan Operasi Penerbangan (KKOP), serta batasan ketinggian terbang maksimum yang diizinkan untuk penerbangan non-izin (maksimal 120 meter atau 400 kaki di atas permukaan tanah / AGL - Above Ground Level).

Penerbangan di dekat bandar udara, pangkalan militer, kawasan instalasi vital nasional, dan area terlarang (Prohibited Area) maupun area terbatas (Restricted Area) memerlukan koordinasi khusus dan izin terbang resmi. Pelatihan ini membedah tata cara pembacaan NOTAM (Notice to Airmen), pemahaman peta navigasi udara (VFR Aeronautical Chart), identifikasi rintangan buatan manusia (tower telekomunikasi, gedung pencakar langit, kabel transmisi listrik), serta kewajiban menjaga jarak aman horizontal minimal dari orang yang tidak terlibat, kerumunan publik, jalan raya, dan perahu bergerak. Kepatuhan mutlak terhadap regulasi ruang udara adalah bukti integritas profesional seorang remote pilot di {$regionName}."
            ],
            [
                'title' => "Bab 3: Prinsip Aerodinamika Wahana Nirawak: Multirotor, Fixed Wing, dan Hybrid VTOL",
                'content' => "Pemahaman mendalam mengenai aerodinamika menjadi pembeda utama antara operator amatir dan pilot profesional bersertifikasi. Wahana tanpa awak yang beroperasi di wilayah {$regionName} umumnya terbagi dalam tiga konfigurasi mekanikal utama:

1. **Multirotor (Quadcopter, Hexacopter, Octacopter)**:
Mengandalkan gaya angkat dorong langsung (direct thrust) dari putaran baling-baling motor brushless. Multirotor unggul dalam kemampuan lepas landas dan mendarat vertikal (VTOL), melayang stabil di satu titik (hovering), serta manuver presisi di area sempit. Namun, konfigurasi ini memiliki konsumsi energi relatif tinggi sehingga daya jelajahnya terbatas pada radius beberapa kilometer.

2. **Fixed Wing (Sayap Tetap)**:
Menghasilkan gaya angkat melalui aliran udara di atas profil sayap (airfoil) sesuai hukum Bernoulli saat pesawat melaju maju. Fixed wing memiliki efisiensi aerodinamika luar biasa, kecepatan jelajah tinggi, dan waktu terbang mencapai 1 hingga 4 jam, menjadikannya pilihan ideal untuk pemetaan koridor pipa, batas wilayah, dan survei perkebunan skala ribuan hektar di {$regionName}. Kendala utamanya adalah kebutuhan landasan pacu atau sistem ketapel pelontar (launcher) saat lepas landas serta parasut atau belly-landing saat mendarat.

3. **Hybrid VTOL (Vertical Take-Off and Landing)**:
Menggabungkan keunggulan lepas landas vertikal multirotor dengan efisiensi jelajah sayap tetap. Menggunakan motor vertikal untuk transisi naik-turun dan motor pendorong horizontal saat mencapai ketinggian jelajah. Sistem ini menjadi standar modern bagi survei industri tanpa memerlukan area landasan khusus di medan geografis menantang {$regionName}."
            ],
            [
                'title' => "Bab 4: Arsitektur Sistem Drone: Flight Controller, IMU, GNSS, dan ESC",
                'content' => "Sistem drone modern merupakan perpaduan kompleks dari mikrokontroler presisi tinggi, sensor elektro-mekanikal mikro (MEMS), dan sirkuit penggerak daya berarus tinggi:

- **Flight Controller (FC)**: Otak utama wahana yang menjalankan algoritma estimasi orientasi (attitude estimation) dan kontrol loop tertutup (PID Control). FC memproses ribuan data per detik dari seluruh sensor untuk mempertahankan stabilitas pesawat.
- **Inertial Measurement Unit (IMU)**: Terdiri dari giroskop 3-sumbu untuk mengukur kecepatan sudut rotasi (pitch, roll, yaw) dan akselerometer 3-sumbu untuk mengukur percepatan linear serta gravitasi. Banyak drone industri menggunakan sistem redundant triple-IMU untuk mengantisipasi kegagalan sensor tunggal.
- **Barometer & Vision Positioning**: Barometer mengukur tekanan udara untuk penentuan ketinggian vertikal, sedangkan sensor optik bawah (downward vision) dan ultrasonik/ToF membantu kestabilan melayang di ketinggian rendah saat sinyal satelit tidak tersedia.
- **Global Navigation Satellite System (GNSS)**: Modul penerima multi-konstelasi (GPS, GLONASS, Galileo, BeiDou) yang memberikan koordinat spasial 3D secara global. Pada unit pemetaan presisi, modul ini diperkuat dengan teknologi RTK (Real-Time Kinematic) atau PPK (Post-Processed Kinematic).
- **Electronic Speed Controller (ESC)**: Komponen elektronika daya yang mengubah sinyal kendali PWM/DShot dari FC menjadi sinyal arus bolak-balik 3 fasa untuk memutar motor brushless pada kecepatan putaran (RPM) yang sangat presisi."
            ],
            [
                'title' => "Bab 5: Protokol Standar Pra-Penerbangan (Pre-Flight Inspection Checklist)",
                'content' => "Sebagian besar kecelakaan drone di lapangan berakar pada kelalaian saat inspeksi awal sebelum mesin dinyalakan. Prosedur Pre-Flight Inspection Checklist standar profesional yang diajarkan dalam program pelatihan di {$regionName} mencakup tahapan sistematis sebagai berikut:

| Urutan | Komponen yang Diinspeksi | Kriteria Keberterimaan (Pass Criteria) |
|---|---|---|
| 1 | Airframe & Struktur Lengan | Bebas dari retakan mikro, baut longgar, delaminasi karbon, dan engsel pengunci rapat |
| 2 | Propeller (Baling-baling) | Bersih dari kotoran/serangga, tidak ada chip/retak, terpasang pada arah putaran yang benar (CW/CCW) |
| 3 | Motor Brushless | Putaran manual halus tanpa hambatan gesekan, magnet kokoh, tidak ada bau gosong atau lilitan putus |
| 4 | Modul Kamera & Gimbal | Kaca lensa bersih dari debu/sidik jari, peredam getaran (damper) utuh, gimbal bebas bergerak tanpa macet |
| 5 | Baterai LiPo Pesawat | Fisik rata tanpa kembung (puffing), terkunci erat pada kompartemen, konektor bersih dari jelaga busur listrik |
| 6 | Remote Controller & Antena | Posisi antena terorientasi tegak lurus terhadap arah pesawat, daya baterai RC minimal 80% |
| 7 | Kartu Memori (MicroSD) | Berkecepatan tinggi (minimal U3/V30), diformat bersih, kapasitas penyimpanan memadai untuk seluruh misi |
| 8 | Lingkungan Take-Off | Area datar radius 5 meter bebas rintangan, tidak ada material besi yang memicu distorsi kompas |"
            ],
            [
                'title' => "Bab 6: Kalibrasi Sensor Kritis: Kompas Digital, IMU 6-Axis, dan Vision Obstacle Avoidance",
                'content' => "Ketepatan manuver dan stabilitas drone sangat bergantung pada integritas kalibrasi sensor internal. Sebelum menerbangkan drone di lokasi baru di {$regionName}, pilot wajib melakukan verifikasi status sensor:

- **Kalibrasi Kompas Digital (Magnetometer)**:
Kompas mengukur medan magnet bumi untuk menentukan arah hadap (heading) wahana. Jika drone diterbangkan di atas struktur beton bertulang, dekat pipa besi bawah tanah, rel kereta api, atau menara telekomunikasi, gangguan magnetik lokal dapat menyebabkan kesalahan pembacaan kompas (Compass Error / Magnetic Interference). Kalibrasi dilakukan dengan memutar drone 360 derajat horizontal dan vertikal di ruang terbuka yang netral. Jangan pernah melakukan kalibrasi kompas di atas kap mobil atau lantai bertulang besi!

- **Kalibrasi Inertial Measurement Unit (IMU)**:
Dilakukan ketika drone mengalami drift horizontal saat melayang, setelah terjadi hard-landing, atau saat sistem meminta kalibrasi ulang. Drone diletakkan pada permukaan yang benar-benar rata sempurna (level horizontal diverifikasi dengan waterpass) dan dijaga agar tidak bergetar selama proses kalibrasi berlangsung.

- **Kalibrasi Vision Positioning System & Obstacle Avoidance**:
Sensor kamera stereo di bagian depan, belakang, atas, bawah, dan samping membutuhkan kalibrasi optik berkala menggunakan pola grid pada layar monitor agar kemampuan deteksi rintangan dan pengereman otomatis berfungsi optimal dalam menghindari tabrakan dengan pohon, dinding gedung, atau tiang listrik di {$regionName}."
            ],
            [
                'title' => "Bab 7: Prosedur Pengendalian Manual: Navigasi GPS, Mode ATTI, dan Respons Tanggap Darurat",
                'content' => "Mayoritas pilot drone modern terlalu bergantung pada mode asistensi satelit (P-Mode / GPS Mode), di mana wahana secara otomatis mempertahankan posisi koordinat dan ketinggian saat tuas dilepas. Namun, ketika sinyal GPS mengalami gangguan mendadak akibat jamming, pantulan multipath di antara gedung tinggi, atau cuaca antariksa (solar flare), drone akan otomatis berpindah ke **ATTI Mode (Attitude Mode)**.

Dalam mode ATTI, modul GNSS dinonaktifkan; drone hanya menyeimbangkan sudut kemiringan (attitude) secara horizontal tetapi akan terus bergerak terbawa embusan angin jika tidak dikoreksi secara manual oleh pilot. Pilot yang tidak pernah dilatih menerbangkan drone dalam mode ATTI umumnya akan mengalami kepanikan saat drone melayang tak terkendali (fly-away) dan berujung pada tabrakan fatal.

Pelatihan di {$regionName} mewajibkan setiap peserta menjalani drill intensif penerbangan mode ATTI:
1. **Latihan Hovering Presisi**: Mempertahankan posisi drone tetap diam di satu titik virtual di tengah hembusan angin.
2. **Pola Terbang Persegi (Square Pattern)**: Mengendalikan drone mengitari titik acuan dengan orientasi hidung pesawat menghadap ke depan.
3. **Pola Angka 8 (Figure Eight Flight)**: Melatih koordinasi simultan antara tuas aileron (roll), elevator (pitch), dan rudder (yaw).
4. **Nose-In Hovering**: Melayang dengan moncong drone menghadap langsung ke arah pilot, di mana kontrol kemudi horizontal menjadi terbalik (kemudi kanan menggerakkan drone ke kiri pilot), menguji reflek bawah sadar sang pilot."
            ],
            [
                'title' => "Bab 8: Manajemen Baterai LiPo: Pengisian Seimbang, Siklus Penyimpanan, dan Pencegahan Thermal Runaway",
                'content' => "Baterai Lithium Polymer (LiPo) dan Lithium-Ion densitas tinggi merupakan sumber daya utama drone modern. Baterai ini menyimpan energi kinetik-kimiawi masif yang memerlukan penanganan cermat guna mencegah penurunan performa mendadak di udara maupun bahaya kebakaran (thermal runaway):

- **Tegangan Nominal dan Ambang Batas**: Tiap sel LiPo memiliki tegangan nominal 3.7V - 3.85V, batas penuh 4.20V - 4.35V (LiHV), dan batas aman pengosongan (cutoff) tidak boleh di bawah 3.50V per sel saat beban terbang. Menguras baterai hingga di bawah 3.0V dapat merusak struktur kimia sel secara permanen.
- **Suhu Operasional Baterai**: Suhu ideal operasional baterai adalah antara 20°C hingga 40°C. Pada kondisi panas terik siang hari di {$regionName}, penerbangan berturut-turut tanpa jeda pendinginan dapat memicu kenaikan suhu internal melebihi 60°C, yang menyebabkan peningkatan resistansi internal (IR) dan resiko penggembungan sel.
- **Penyimpanan Jangka Panjang (Storage Charge)**: Jika baterai tidak akan digunakan dalam waktu lebih dari 3 hari, baterai harus disimpan pada mode tegangan storage (3.80V - 3.85V per sel). Menyimpan baterai dalam kondisi terisi 100% penuh selama berminggu-minggu akan mempercepat proses degradasi kapasitas dan memicu pelepasan gas hidrogen yang membuat baterai kembung (puffing).
- **Prosedur Pengisian Aman**: Pengisian daya selalu menggunakan charger pintar bersertifikat, ditempatkan di wadah tahan api (LiPo Safe Bag / Ammo Box), dan tidak pernah ditinggalkan tanpa pengawasan di malam hari."
            ],
            [
                'title' => "Bab 9: Frekuensi Komunikasi Radio, Propagasi Gelombang, dan Pencegahan Interferensi",
                'content' => "Tautan komunikasi antara remote controller dan drone mengandalkan gelombang radio frekuensi tinggi, umumnya pada pita 2.4 GHz dan 5.8 GHz. Memahami karakteristik propagasi sinyal menjadi kunci mempertahankan kendali jarak jauh yang aman di area industri {$regionName}:

- **Pita Frekuensi 2.4 GHz vs 5.8 GHz**: Sinyal 2.4 GHz memiliki panjang gelombang lebih panjang, daya penetrasi rintangan lebih baik, dan jangkauan jarak lebih jauh, namun sangat rentan terhadap interferensi dari jaringan Wi-Fi perkotaan dan perangkat Bluetooth. Sebaliknya, pita 5.8 GHz menawarkan bandwidth transmisi video definisi tinggi (HD) yang lebih bersih dan minim gangguan, tetapi mudah terhalang oleh dedaunan rimbun, dinding beton, atau kontur perbukitan.
- **Orientasi Antena Pemancar**: Antena omni-directional memancarkan sinyal paling kuat dari sisi sampingnya (tegak lurus batang antena), bukan dari ujung runcingnya. Menodongkan ujung antena langsung ke arah drone justru menempatkan drone pada zona sinyal terlemah (null cone). Pilot harus selalu memposisikan sisi bidang datar antena menghadap lurus ke arah posisi drone di udara.
- **Line-of-Sight (VLOS)**: Regulasi keselamatan mewajibkan pilot senantiasa mempertahankan pandangan visual langsung tanpa alat bantu optik (Visual Line of Sight) terhadap drone untuk memastikan orientasi spasial dan menghindari blind-spot rintangan di udara."
            ],
            [
                'title' => "Bab 10: Sistem Keselamatan Otomatis: Failsafe, Geofencing, dan Prosedur Return-to-Home (RTH)",
                'content' => "Drone kelas industri dilengkapi sistem proteksi otomatis yang dirancang untuk menyelamatkan wahana saat terjadi kegagalan teknis. Konfigurasi Failsafe yang tepat sebelum lepas landas di {$regionName} sangat krusial:

1. **Loss of Signal Failsafe (Lost Link)**:
Jika hubungan transmisi radio terputus lebih dari 3 hingga 5 detik (akibat rintangan gedung atau interferensi jamming), flight controller dapat diprogram untuk menjalankan salah satu dari tiga aksi: Melayang di tempat (Hover), Mendarat darurat langsung (Auto-Land), atau Kembali ke titik lepas landas (Return to Home - RTH). Untuk sebagian besar misi terbuka, mode RTH adalah opsi standar terbaik.

2. **Perhitungan Ketinggian Aman RTH (RTH Altitude)**:
Sebelum terbang, pilot wajib mengidentifikasi rintangan tertinggi di seluruh area operasional (misalnya cerobong pabrik setinggi 60 meter atau pohon setinggi 30 meter). Ketinggian RTH harus diatur minimal 15 hingga 20 meter lebih tinggi dari rintangan tertinggi tersebut (misalnya 80 meter). Hal ini mencegah drone menabrak rintangan saat terbang lurus kembali ke titik home point secara otomatis.

3. **Low Battery Smart RTH**:
Sistem menghitung secara matematis jarak tempuh kembali drone ke titik home point dibandingkan sisa kapasitas baterai dan kecepatan angin balik. Saat kapasitas mencapai ambang batas kritis, sistem akan memicu peringatan otomatis dan mengeksekusi RTH sebelum daya habis total di udara."
            ],
            [
                'title' => "Bab 11: Metodologi Fotogrametri Udara: GSD, Overlap, Shutter Speed, dan Geotagging",
                'content' => "Fotogrametri adalah seni dan sains untuk memperoleh informasi spasial 3D yang dapat diandalkan dari sekumpulan foto udara 2D yang saling bertampalan (overlapping images). Di sektor survei pemetaan {$regionName}, keberhasilan fotogrametri ditentukan oleh beberapa parameter matematis teknis:

- **Ground Sampling Distance (GSD)**: Jarak fisik di permukaan tanah yang diwakili oleh satu piksel pada sensor kamera (dinyatakan dalam cm/pixel). Semakin rendah nilai GSD, semakin tinggi detail spasial peta yang dihasilkan. Nilai GSD merupakan fungsi dari panjang fokus lensa (focal length), lebar sensor kamera, dan ketinggian terbang di atas permukaan tanah (H).
- **Rasio Pertampalan Foto (Overlap & Sidelap)**:
  - *Front Overlap (Pertampalan Maju)*: Minimal 75% hingga 80% ke arah laju penerbangan drone.
  - *Side Overlap (Pertampalan Samping)*: Minimal 65% hingga 70% di antara jalur terbang paralel.
  Di area dengan vegetasi lebat homogen seperti perkebunan kelapa sawit atau hutan di {$regionName}, overlap direkomendasikan dinaikkan hingga 85/80% guna memastikan algoritma Structure from Motion (SfM) mampu mencocokkan titik-titik sekutu (tie points) secara akurat.
- **Pencegahan Motion Blur**: Kecepatan rana (shutter speed) kamera mekanikal/elektronik diatur minimal 1/1000 detik dengan ISO serendah mungkin (ISO 100-200) untuk mencegah distorsi keburaman gambar akibat laju terbang wahana."
            ],
            [
                'title' => "Bab 12: Pengukuran Titik Kontrol Tanah (GCP & ICP) Menggunakan GNSS RTK Geodetik",
                'content' => "Foto udara geotagging dari drone komersial tanpa bantuan titik kontrol tanah hanya memiliki akurasi posisi absolut sekitar 3 hingga 5 meter akibat keterbatasan penerima GPS navigasi standar. Untuk menghasilkan peta teknik bernilai legal dan rekayasa di {$regionName}, implementasi **Ground Control Point (GCP)** adalah keharusan mutlak:

- **Distribusi dan Pemasangan Target GCP**: Target GCP berupa tanda silang kontras (ukuran 50x50 cm hingga 1x1 meter) dipasang merata di seluruh batas luar poligon area pemetaan serta beberapa titik di bagian tengah. Hindari menempatkan GCP di dasar jurang atau di bawah bayangan pohon rimbun.
- **Independent Check Point (ICP)**: Titik target independen yang tidak digunakan dalam proses perataan aerotriangulasi, melainkan dikhususkan untuk memverifikasi akurasi vertikal (Z) dan horizontal (XY) produk peta akhir.
- **Pengukuran GNSS Geodetik Frekuensi Ganda**: Koordinat GCP diukur menggunakan alat receiver GNSS Geodetik metode Real-Time Kinematic (RTK) yang terikat pada base station resmi atau jaring kontrol geodesi nasional, menghasilkan nilai koordinat berketelitian fraksi milimeter hingga sub-sentimeter."
            ],
            [
                'title' => "Bab 13: Pemrosesan Fotogrametri: Ortofoto, DSM, DEM, dan Garis Kontur Topografi",
                'content' => "Tahapan pengolahan data foto udara di laboratorium komputer mengubah ratusan hingga ribuan citra mentah menjadi data spasial georeferensi siap pakai:

1. **Initial Alignment & Sparse Cloud**: Software fotogrametri (seperti Agisoft Metashape, Pix4D, atau DJI Terra) mendeteksi titik fitur unik (keypoints) pada setiap foto dan menghitung posisi serta orientasi kamera di ruang 3D (bundle block adjustment).
2. **Dense Point Cloud Generation**: Mengkalkulasi jutaan titik koordinat 3D yang sangat rapat menyerupai permukaan bumi sebenarnya.
3. **Digital Surface Model (DSM)**: Model raster elevasi yang mencakup seluruh objek di atas tanah, termasuk kanopi pohon, atap rumah, dan tumpukan material.
4. **Digital Terrain Model (DTM / DEM)**: Proses klasifikasi dan pemfilteran titik awan tanah (ground points) dengan mengeliminasi objek vegetasi dan bangunan, menghasilkan model topografi muka tanah asli.
5. **Orthomosaic Generation**: Menggabungkan foto-foto udara yang telah dikoreksi distorsi lensa dan efek kemiringan relief topografi (orthorektifikasi), menghasilkan peta foto tegak berakurasi tinggi berskala seragam di seluruh lembar peta.
6. **Ekstraksi Kontur & Analisis Volume**: Pembuatan garis kontur dengan interval ketinggian presisi (0.5m, 1m, 2m) serta kalkulasi volume galian dan timbunan (cut and fill) pada proyek tambang dan konstruksi di {$regionName}."
            ],
            [
                'title' => "Bab 14: Pemodelan 3D Objek Kompleks dan Rekonstruksi Mesh untuk Rekayasa Sipil",
                'content' => "Selain pemetaan ortofoto 2D datar, teknologi fotogrametri UAV memungkinkan rekonstruksi 3D objek vertikal dan fasad arsitektur kompleks melalui teknik **Oblique Imagery**:

Drone diterbangkan mengitari struktur target (seperti jembatan, bendungan, cagar budaya, atau gedung bertingkat di {$regionName}) dengan sudut kemiringan gimbal kamera 45° hingga 60°. Algoritma fotogrametri menyusun jaring poligon 3D (3D Textured Mesh) yang merepresentasikan setiap lekukan geometri dan tekstur material asli secara fotorealistik. Model 3D ini dapat diekspor ke dalam format standar rekayasa (.OBJ, .PLY, .LAS) untuk diintegrasikan ke dalam lingkungan Building Information Modeling (BIM), analisis kerataan struktur, pemantauan deformasi jembatan, hingga presentasi interaktif bagi stakeholder proyek."
            ],
            [
                'title' => "Bab 15: Teknik Inspeksi Infrastruktur Kritis: SUTET, Flare Stack Migas, dan Jembatan",
                'content' => "Inspeksi visual drone pada aset vital bertegangan tinggi dan fasilitas bersuhu ekstrem menuntut keahlian manuver khusus serta kewaspadaan interferensi medan elektromagnetik di {$regionName}:

- **Inspeksi Menara Transmisi Listrik (SUTET / SUTT)**:
Tegangan listrik ratusan kilovolt memancarkan medan elektromagnetik kuat yang dapat mengacaukan kompas digital drone jika didekati terlalu dekat. Pilot menggunakan drone berkamera telephoto zoom optik tinggi (zoom 30x hingga 200x) sehingga drone dapat tetap berada di jarak aman minimal 15 hingga 25 meter dari konduktor listrik aktif sambil tetap menangkap detail keretakan insulator piringan kaca, korosi pada baut rangka menara, dan sambungan kabel kendor.

- **Inspeksi Flare Stack Kilang Minyak**:
Memeriksa ujung pembakar cerobong gas buang yang menyala tanpa menghentikan proses produksi kilang (live inspection). Pilot harus memperhitungkan efek radiasi panas (thermal updraft) yang dapat melelehkan komponen plastik drone atau mengacaukan aerodinamika wahana di atas ujung cerobong.

- **Inspeksi Bawah Kolong Jembatan Bentang Panjang**:
Menerbangkan drone di bawah struktur lantai jembatan beton/baja sering kali mengakibatkan hilangnya sinyal GPS total. Drone inspeksi khusus dilengkapi sensor optik vision ke atas (upward gimbal camera) dan sangkar pelindung tabrakan (protective cage) agar mampu memeriksa tumpuan pilar elastomeric bearing dan retakan beton tanpa resiko terjatuh ke sungai."
            ],
            [
                'title' => "Bab 16: Pengoperasian Kamera Termal Radiometrik dan Analisis Anomali Suhu",
                'content' => "Kamera inframerah termal mengubah radiasi panas tak kasat mata menjadi citra visual temperatur (termogram). Penggunaan sensor termal radiometrik pada drone di {$regionName} membuka kemampuan diagnosis prediktif:

- **Inspeksi Pembangkit Surya Fotovoltaik (Solar Farm)**:
Panel surya yang mengalami kerusakan internal (seperti retakan sel mikro, kotoran menutupi sel, atau kegagalan diode bypass) akan memancarkan panas berlebih (hot-spot anomaly). Drone termal dapat memindai puluhan ribu panel surya dalam hitungan jam, menandai lokasi koordinat pasti panel yang mengalami degradasi efisiensi daya.

- **Deteksi Kebocoran Pipa Uap dan Panas Industri**:
Pada pipa distribusi uap panas pabrik kelapa sawit atau pembangkit geotermal di {$regionName}, isolasi termal yang rusak atau retakan kecil pada sambungan katup langsung terlihat jelas sebagai perbedaan temperatur kontras terhadap lingkungan sekitar.

- **Faktor Emisivitas Permukaan**:
Pilot inspeksi harus memahami pengaturan parameter emisivitas material (misalnya logam mengkilap memiliki emisivitas rendah yang memantulkan suhu sekitar, sedangkan aspal atau isolasi karet memiliki emisivitas tinggi), penyesuaian suhu lingkungan, kelembapan udara, dan jarak sensor guna menghasilkan data kuantitatif suhu (°C) yang valid untuk laporan audit teknik."
            ],
            [
                'title' => "Bab 17: Pemanfaatan Sensor LiDAR Udara untuk Penetrasi Kanopi Vegetasi Tebal",
                'content' => "Meskipun fotogrametri foto optik sangat handal di area terbuka, metode tersebut memiliki keterbatasan mendasar saat memetakan wilayah dengan vegetasi hutan lebat seperti di sebagian besar wilayah {$regionName}. Foto kamera hanya menangkap daun terluar kanopi pohon, sehingga muka tanah asli di bawahnya tidak terdeteksi.

Teknologi **LiDAR (Light Detection and Ranging)** memancarkan puluhan hingga ratusan ribu pulsa laser per detik ke permukaan tanah. Karena laser memiliki sifat pancaran sangat sempit, sebagian pulsa laser mampu menembus celah-celah daun rimbun hingga memantul dari permukaan tanah asli (multiple returns). Sistem ini menghasilkan point cloud kepadatan tinggi yang merekam baik struktur kanopi hutan maupun topografi muka tanah di bawahnya secara presisi, sangat krusial bagi survei trase jalan tol baru, perencanaan jalur transmisi kabel listrik, dan investigasi geoteknik perbukitan rawan longsor di {$regionName}."
            ],
            [
                'title' => "Bab 18: Pengoperasian Drone Sprayer Pertanian: Kalibrasi Droplet, Nosel, dan Manajemen Lapangan",
                'content' => "Modernisasi perkebunan kelapa sawit dan tanaman pangan di {$regionName} semakin bertumpu pada pengoperasian drone penyemprot (agricultural drone sprayer) berkapasitas 10 hingga 50 liter. Penerapan teknologi ini memerlukan disiplin operasional tinggi:

- **Kalibrasi Sistem Pompa dan Nosel**:
Aplikasi pupuk daun atau pestisida membutuhkan ukuran butiran semprot (droplet micron size) yang konsisten. Butiran yang terlalu halus (< 100 mikron) sangat mudah terbawa hembusan angin (drift) dan menguap sebelum mencapai daun, sedangkan butiran yang terlalu besar (> 400 mikron) akan menggelinding jatuh ke tanah dan terbuang sia-sia. Kalibrasi nosel sentrifugal (centrifugal atomizer) disesuaikan dengan jenis bahan kimia aktif dan target kanopi tanaman.

- **Efek Downwash Baling-Baling**:
Keunggulan utama drone sprayer adalah hembusan angin ke bawah (downwash) yang dihasilkan oleh putaran propeller multirotor berdaya besar. Downwash ini membalikkan daun tanaman sehingga cairan semprot dapat melapisi baik permukaan atas maupun permukaan bawah daun secara menyeluruh, tempat bersarangnya sebagian besar koloni hama dan spora jamur.

- **Manajemen Operasional Armada**:
Penyemprotan skala puluhan hektar per hari membutuhkan perencanaan pasokan air bersih terfiltrasi, generator genset pengisian cepat (fast charger 15-20 menit per baterai), rotasi baterai cerdas, serta kepatuhan mutlak kru lapangan dalam mengenakan Alat Pelindung Diri (APD) tahan bahan kimia berbahaya."
            ],
            [
                'title' => "Bab 19: Pemantauan Kesehatan Tanaman dengan Citra Multispektral (NDVI dan NDRE)",
                'content' => "Sensor multispektral merekam pantulan cahaya pada pita gelombang spesifik yang tidak terlihat oleh mata manusia, khususnya pita Red (Merah), RedEdge, dan Near-Infrared (NIR):

- **Prinsip Indeks Vegetasi NDVI**:
Tanaman yang sehat dan aktif berfotosintesis menyerap banyak cahaya merah untuk energi klorofil, namun memantulkan sebagian besar cahaya inframerah dekat (NIR) guna mencegah daun mengalami pemanasan berlebih. Melalui formula matematis NDVI:
$$\text{NDVI} = \frac{\text{NIR} - \text{Red}}{\text{NIR} + \text{Red}}$$
Kondisi tanaman dengan skor mendekati +1.0 menunjukkan vegetasi sangat sehat, sedangkan nilai mendekati 0 atau negatif mengindikasikan tanah gersang, air, atau tanaman layu terserang penyakit.

- **Aplikasi Nyata di Perkebunan {$regionName}**:
Peta NDVI memungkinkan manajer kebun mendeteksi secara dini defisiensi unsur hara nitrogen/kalium, stres kekeringan air, serangan ganoderma pada sawit, atau infestasi ulat kantung berminggu-minggu sebelum gejala fisik terlihat oleh mata telanjang petani di darat. Dengan demikian, pemupukan dan penanganan hama dapat dilakukan secara terarah (variable rate application) hanya pada pokok-pokok pohon yang membutuhkan, menghemat biaya pupuk hingga 30-40% per musim tanam."
            ],
            [
                'title' => "Bab 20: Teknik Sinematografi Udara: Komposisi Visual, Smooth Tracking, dan Shutter Rule 180 Derajat",
                'content' => "Dalam industri kreatif media, periklanan, dan film dokumenter di {$regionName}, drone berfungsi sebagai kamera sinema terbang yang bertugas mengalirkan emosi dan dinamika cerita visual:

- **Aturan Shutter Angle 180 Derajat (180° Rule)**:
Untuk menghasilkan keburaman gerakan (motion blur) yang sinematik dan nyaman dipandang mata layaknya film Hollywood, kecepatan rana (shutter speed) harus selalu disetel pada kelipatan dua kali frame rate perekaman. Jika merekam pada 24 frame per detik (fps), maka shutter speed wajib disetel pada 1/50 detik. Karena cahaya siang hari di wilayah tropis {$regionName} sangat terang, mencapai shutter 1/50 detik mustahil tanpa bantuan filter lensa **Neutral Density (ND)** berkadar ND16, ND64, hingga ND256 yang berfungsi sebagai kacamata hitam bagi sensor kamera.

- **Teknik Manuver Kamera Dinamis**:
  - *The Reveal Shot*: Memulai rekaman dengan kamera menghadap ke bawah atau terhalang tebing, lalu perlahan bergerak naik sambil mendongakkan gimbal ke atas menampilkan panorama megah pemandangan {$regionName}.
  - *Parallax Orbit*: Terbang memutar mengelilingi objek utama sambil mempertahankan titik fokus objek tepat di tengah frame, menciptakan ilusi visual latar belakang yang bergerak kontras terhadap latar depan.
  - *Dynamic Cable-Cam*: Menerbangkan drone meluncur maju di ketinggian rendah sejajar dengan kendaraan bergerak, menghasilkan visual berkecepatan tinggi yang imersif."
            ],
            [
                'title' => "Bab 21: Manuver Dinamis Drone FPV (First Person View) Komersial",
                'content' => "Penerbangan drone konvensional mengandalkan stabilisasi elektronik mandiri, namun untuk perekaman berkecepatan tinggi dan aksi ekstrem, teknologi **FPV (First Person View)** menjadi standar baru di dunia videografi komersial:

Pilot mengenakan kacamata goggle digital yang menyiarkan video latensi ultra-rendah langsung dari kamera depan drone ke mata pilot secara real-time. Dalam mode **Manual / Acro**, drone tidak memiliki batasan sudut kemiringan (angle limit) dan tidak akan menstabilkan dirinya sendiri saat tuas dilepas. Pilot memiliki kebebasan penuh melakukan manuver roll 360°, dive menuruni gedung bertingkat vertikal, meluncur melewati celah jendela sempit (gap flying), dan mengejar mobil balap pada kecepatan melebihi 100 km/jam. Pelatihan FPV di {$regionName} menekankan tahapan bertahap mulai dari simulasi komputer ratusan jam, keselamatan modul failsafe, hingga sertifikasi etika terbang bebas rintangan publik."
            ],
            [
                'title' => "Bab 22: Mitigasi Risiko Cuaca Buruk, Angin Kencang, dan Suhu Ekstrem",
                'content' => "Kondisi meteorologi di wilayah khatulistiwa {$regionName} terkenal sangat dinamis, di mana cuaca cerah dapat berubah menjadi badai konvektif dalam waktu singkat. Pilot wajib menguasai protokol mitigasi cuaca:

- **Batas Toleransi Kecepatan Angin (Wind Resistance)**:
Sebagian besar drone industri memiliki ketahanan angin maksimal antara 10 m/s hingga 12 m/s (sekitar 36 - 43 km/jam). Pilot harus selalu memantau kecepatan angin di darat menggunakan anemometer genggam dan memperhitungkan bahwa kecepatan angin di ketinggian 100 meter AGL umumnya dua kali lebih kencang daripada di permukaan tanah.
- **Wind Shear dan Efek Termal Tebing**:
Saat terbang di dekat bibir jurang tambang, perbukitan, atau tepi pantai di {$regionName}, pusaran angin balik (rotor wind) dan penurunan massa udara mendadak (downdraft) dapat menekan drone ke bawah secara tiba-tiba.
- **Kelembapan dan Hujan Tiba-Tiba**:
Kecuali drone memiliki sertifikasi ketahanan cuaca tinggi (seperti IP55 atau IP43), tetesan air hujan yang masuk ke celah ventilasi motor atau soket elektronik dapat memicu hubungan arus pendek (short circuit) dan mematikan daya mesin seketika di udara. Saat terdeteksi awan Cumulonimbus (CB) atau tanda-tanda hujan, pilot wajib segera mengeksekusi pendaratan darurat."
            ],
            [
                'title' => "Bab 23: Prosedur Tanggap Darurat Crash, Fly-Away, dan Investigasi Insiden Penerbangan",
                'content' => "Meskipun seluruh prosedur keselamatan telah dipatuhi, kemungkinan kegagalan tak terduga tetap ada. Pelatihan di {$regionName} melatih pilot untuk bereaksi tenang dan taktis dalam skenario darurat:

1. **Penanganan Kondisi Fly-Away (Drone Terbang Liar)**:
Jika drone tiba-tiba tidak merespon tuas kendali dan melayang menjauh:
- Segera alihkan saklar mode terbang dari GPS ke **ATTI Mode** untuk memutus kendali navigasi satelit yang mungkin mengalami anomali orientasi kompas.
- Ambil alih kemudi manual dan arahkan drone kembali ke arah pilot.
- Jika drone tetap tidak merespon, picu tombol Failsafe RTH manual.
- Sebagai jalan terakhir jika drone mengancam kerumunan manusia di bawahnya, eksekusi prosedur darurat Emergency Propeller Stop (CSC - Combination Stick Command) untuk mematikan motor secara paksa dan menjatuhkan drone di area aman.

2. **Prosedur Pasca-Insiden (Post-Crash Action)**:
- Amankan lokasi jatuhnya wahana dan pastikan tidak ada korban cedera atau kebakaran baterai di darat.
- Cabut konektor baterai LiPo segera menggunakan sarung tangan tahan panas untuk memutus suplai daya.
- Amankan kartu memori MicroSD yang berisi rekaman video dan log data penerbangan untuk keperluan investigasi internal."
            ],
            [
                'title' => "Bab 24: Analisis Data Blackbox dan Flight Telemetry Log",
                'content' => "Flight Controller modern merekam ratusan parameter penerbangan setiap fraksi detik ke dalam memori internal (Flight Data Recorder / Blackbox). Di laboratorium pelatihan {$regionName}, peserta diajarkan cara mengekstrak dan membaca grafik telemetri log:

- **Analisis Fluktuasi Tegangan Sel Baterai**: Mengidentifikasi apakah terjadi penurunan tegangan mendadak (voltage sag) pada salah satu sel baterai sesaat sebelum drone kehilangan daya.
- **Pemeriksaan Respon Getaran (Vibration Level)**: Membaca grafik akselerometer sumbu X, Y, dan Z untuk mendeteksi apakah baling-baling baling-baling mengalami getaran berlebih akibat ketidakseimbangan mekanis.
- **Korelasi Perintah Stick vs Gerakan Fisik Pesawat**: Membuktikan apakah anomali penerbangan disebabkan oleh kegagalan mekanikal wahana atau murni akibat kesalahan input kemudi oleh pilot (pilot error), yang menjadi bukti objektif dalam pelaporan audit keselamatan industri."
            ],
            [
                'title' => "Bab 25: Pemeliharaan Preventif, Penggantian Bearing Motor, dan Soldering Standar Kedirgantaraan",
                'content' => "Keandalan armada drone di {$regionName} berakar pada disiplin perawatan bengkel (maintenance workshop) yang terencana:

- **Jadwal Penggantian Baling-Baling (Propeller)**: Baling-baling plastik komposit memiliki batas umur kelelahan material (fatigue limit). Meskipun tidak pernah menabrak, baling-baling yang telah mencapai 150 hingga 200 jam terbang wajib diganti baru guna mencegah daun baling-baling patah mendadak di udara akibat kelelahan tegangan sentrifugal.
- **Pembersihan dan Pelumasan Motor Brushless**: Di area pertambangan berdebu silika di {$regionName}, butiran debu halus yang masuk ke sela magnet motor dapat mengikis lapisan kawat email tembaga dan merusak bearing. Motor dibersihkan menggunakan tiupan udara terkompresi kering dan pelumas bearing khusus tanpa residu perekat debu.
- **Teknik Soldering Standar Kedirgantaraan**: Penyambungan kabel daya berarus tinggi (hingga 60-100 Ampere) harus menggunakan kawat timah berkualitas tinggi dengan suhu solder stabil 380°C - 400°C, menghasilkan sambungan las berbentuk kerucut mengkilap (shiny fillet) tanpa rongga udara (cold solder) yang berpotensi putus akibat getaran frekuensi tinggi di udara."
            ],
            [
                'title' => "Bab 26: Uji Kompetensi Pilot Drone: Simulasi, Evaluasi Teori, dan Praktik Lapangan",
                'content' => "Untuk memastikan setiap lulusan memiliki standar kompetensi kerja yang diakui industri secara sah, evaluasi akhir program pelatihan di {$regionName} diselenggarakan melalui tiga tahapan ketat:

1. **Ujian Tertulis Teori Ruang Udara & Teknis**:
Mencakup 100 soal pilihan ganda mengenai regulasi KKOP, meteorologi penerbangan, sistem navigasi GNSS, aerodinamika, manajemen baterai, dan keselamatan kerja K3. Nilai ambang batas kelulusan minimal adalah 80%.

2. **Ujian Simulasi Komputer (Flight Simulator Assessment)**:
Peserta diuji mengendalikan berbagai model drone dalam kondisi angin kencang buatan, turbulensi, dan kegagalan sensor GPS pada simulator aviasi profesional.

3. **Uji Praktik Lapangan Nyata (Field Flight Practical Exam)**:
Di bawah pengawasan langsung tim instruktur penguji senior di {$regionName}, peserta harus mengeksekusi seluruh daftar manuver wajib:
- Pre-flight checklist tanpa melihat contekan teks.
- Lepas landas dan pendaratan presisi pada target berdiameter 1 meter.
- Melayang diam stabil dalam mode ATTI selama minimal 60 detik.
- Manuver angka 8 dan orientasi kemudi terbalik (nose-in).
- Respon cepat simulasi darurat RTH saat sinyal diputus secara tiba-tiba oleh tim penguji."
            ],
            [
                'title' => "Bab 27: Studi Kasus Implementasi Training Drone pada Sektor Unggulan di {$regionName}",
                'content' => "Karakteristik geografis, lanskap ekonomi, dan konsentrasi industri di wilayah {$regionName} memberikan tantangan sekaligus peluang unik bagi pemanfaatan teknologi drone profesional:

Di sektor perkebunan dan kehutanan {$regionName}, implementasi drone survei multispektral telah memangkas waktu sensus pokok tanaman kelapa sawit dari berminggu-minggu menjadi hanya dalam hitungan hari, sekaligus mengidentifikasi titik serangan penyakit busuk pangkal batang secara dini sebelum menular ke blok tanaman produktif lainnya.

Pada sektor infrastruktur dan rekayasa sipil di {$regionName}, survei topografi berkala menggunakan drone berakurasi tinggi mempercepat pemantauan progres cut and fill pada proyek pembangunan jalan tol, bendungan, dan jembatan, menghindarkan perselisihan volume material tanah antara pemilik proyek dan kontraktor pelaksana.

Sementara itu, di sektor energi dan pertambangan di {$regionName}, inspeksi drone bersensor termal pada menara transmisi listrik dan fasilitas flare stack telah mengeliminasi 100% risiko kecelakaan kerja personel memanjat struktur tinggi berbahaya (zero working-at-height accidents), membuktikan bahwa investasi pada pelatihan dan standardisasi pilot drone memberikan tingkat pengembalian nilai (ROI) yang nyata dan berkesinambungan bagi kemajuan industri daerah."
            ],
            [
                'title' => "Bab 28: Panduan Registrasi, Fasilitas Pelatihan, dan Prosedur Konsultasi Training Drone di {$regionName}",
                'content' => "Lembaga Pelatihan Training Drone Indonesia berkomitmen penuh menyelenggarakan program pembinaan dan sertifikasi pilot drone berstandar industri tertinggi di seluruh kabupaten, kota, hingga kecamatan di wilayah {$regionName}. 

**Fasilitas Unggulan yang Disediakan bagi Setiap Peserta**:
- Lisensi Remote Pilot Resmi & Sertifikat Kompetensi Pilot Drone Nasional.
- Akses lapangan terbang latihan eksklusif berlisensi bebas halangan udara.
- Unit armada praktik lengkap mulai dari multirotor pemetaan, kamera termal industri, hingga drone sprayer pertanian.
- Bimbingan langsung tatap muka oleh instruktur senior bersertifikat internasional dengan jam terbang tinggi.
- Modul pelatihan cetak eksklusif, e-book silabus teknis, serta template SOP keselamatan terbang siap pakai untuk korporasi Anda.
- Konsultasi teknis dan bimbingan pasca-pelatihan tanpa batas melalui grup alumni pilot drone profesional {$regionName}.

Untuk informasi jadwal batch reguler terdekat, permintaan in-house training perusahaan di lokasi Anda di {$regionName}, atau konsultasi pemilihan kurikulum yang paling sesuai dengan kebutuhan industri Anda, silakan hubungi Hotline Utama Layanan Pelatihan dan Konsultasi Drone Resmi Indonesia melalui kontak resmi dan widget WhatsApp yang tersedia di situs web ini. Dapatkan pembinaan terbaik dan jadilah bagian dari ekosistem penerbang drone profesional yang aman, kompeten, dan berdaya saing tinggi di era industri masa kini."
            ]
        ];

        // Format HTML content
        $html = "";
        $wordCount = 0;

        foreach ($chapters as $index => $chap) {
            $chapNum = $index + 1;
            $titleText = htmlspecialchars($chap['title'], ENT_QUOTES, 'UTF-8');
            $bodyText = $chap['content'];

            // Replace line breaks with paragraphs
            $paragraphs = explode("

", $bodyText);
            $formattedBody = "";
            foreach ($paragraphs as $p) {
                $p = trim($p);
                if (empty($p)) continue;
                if (str_starts_with($p, '|')) {
                    // Simple table conversion
                    $rows = explode("
", $p);
                    $tableHtml = "<div class='table-responsive my-4'><table class='table table-bordered table-striped text-sm'>";
                    foreach ($rows as $rIndex => $r) {
                        $cols = array_filter(array_map('trim', explode('|', $r)));
                        if (empty($cols) || str_contains($r, '---')) continue;
                        $tag = ($rIndex == 0) ? 'th' : 'td';
                        $tableHtml .= "<tr>";
                        foreach ($cols as $c) {
                            $tableHtml .= "<{$tag}>" . htmlspecialchars($c, ENT_QUOTES, 'UTF-8') . "</{$tag}>";
                        }
                        $tableHtml .= "</tr>";
                    }
                    $tableHtml .= "</table></div>";
                    $formattedBody .= $tableHtml;
                } elseif (str_starts_with($p, '1. ') || str_starts_with($p, '- ')) {
                    $lines = explode("
", $p);
                    $listType = str_starts_with($p, '1. ') ? 'ol' : 'ul';
                    $formattedBody .= "<{$listType} class='my-3 pl-4'>";
                    foreach ($lines as $line) {
                        $lineText = preg_replace('/^(\d+\.|\-)\s+/', '', trim($line));
                        if (!empty($lineText)) {
                            // Bold check
                            $lineText = preg_replace('/\*\*(.*?)\*\*/', '<strong>$1</strong>', $lineText);
                            $formattedBody .= "<li class='mb-2'>" . $lineText . "</li>";
                        }
                    }
                    $formattedBody .= "</{$listType}>";
                } else {
                    $pText = preg_replace('/\*\*(.*?)\*\*/', '<strong>$1</strong>', $p);
                    $formattedBody .= "<p class='mb-3 text-justify leading-relaxed'>" . nl2br($pText) . "</p>";
                }
            }

            $html .= "<section class='article-chapter mb-5' id='bab-{$chapNum}'>";
            $html .= "<h2 class='h3 font-weight-bold text-navy border-bottom pb-2 mb-3'>{$titleText}</h2>";
            $html .= $formattedBody;
            $html .= "</section>";

            $wordCount += str_word_count(strip_tags($bodyText));
        }

        $excerpt = "Panduan teknis dan modul pelatihan komprehensif {$cleanTitle} di wilayah {$regionName}. Mengupas regulasi ruang udara, aerodinamika, fotogrametri, inspeksi aset industri, dan standar keselamatan pilot drone profesional.";

        return [
            'title' => $cleanTitle,
            'region' => $regionName,
            'excerpt' => $excerpt,
            'content' => $html,
            'word_count' => $wordCount,
            'estimated_read_time' => max(15, (int)ceil($wordCount / 220))
        ];
    }

    /**
     * Alias method untuk keselarasan dengan FrontController
     */
    public static function getArticleTopics(): array
    {
        return self::get200ArticleTitles();
    }

    /**
     * Dapatkan artikel dari database atau generate secara dinamis
     */
    public static function getOrSynthesizeArticle(string $slug, $regionData = []): array
    {
        // 1. Cek dari database jika ada
        $dbArticle = \App\Models\Article::where('slug', $slug)->orWhere('slug', 'like', $slug . '%')->first();
        if ($dbArticle) {
            return [
                'id' => $dbArticle->id,
                'title' => $dbArticle->title,
                'slug' => $dbArticle->slug,
                'category' => $dbArticle->category ?? 'Training Pilot Drone & Sertifikasi Resmi',
                'author' => $dbArticle->author ?? 'Instruktur Senior Aviasi Nirawak & Drone Specialist',
                'published_at' => $dbArticle->published_at ? $dbArticle->published_at->format('d M Y') : date('d M Y'),
                'created_at' => $dbArticle->created_at ? $dbArticle->created_at->format('d M Y') : date('d M Y'),
                'read_time' => 35,
                'views' => $dbArticle->views ?? 1840,
                'image' => $dbArticle->image ?? 'https://images.unsplash.com/photo-1527977966376-1c8408f9f108?w=800&auto=format&fit=crop&q=80',
                'excerpt' => $dbArticle->excerpt,
                'content' => $dbArticle->content
            ];
        }

        // 2. Format region label
        if (is_array($regionData)) {
            $province = $regionData['province'] ?? '';
            $city = $regionData['city'] ?? '';
            $district = $regionData['district'] ?? '';
            $locationLabel = trim(($district ? $district . ', ' : '') . ($city ? $city . ', ' : '') . $province);
        } else {
            $locationLabel = (string) $regionData;
        }
        if (empty($locationLabel)) {
            $locationLabel = 'Indonesia';
        }

        // 3. Cocokkan dari 200 judul topik
        $topics = self::getArticleTopics();
        $bestMatch = null;
        foreach ($topics as $t) {
            $checkSlug = Str::slug($t);
            if ($checkSlug === $slug || Str::contains($slug, $checkSlug) || Str::contains($checkSlug, $slug)) {
                $bestMatch = $t;
                break;
            }
        }

        if (!$bestMatch) {
            $words = explode('-', $slug);
            $cleanWords = array_filter($words, function ($w) {
                return !in_array($w, ['training', 'drone', 'uav', 'pilot', 'pemetaan', 'inspeksi', 'pertanian', 'di', 'dan', 'ke', 'dari', 'pada']);
            });
            $bestMatch = "Training Drone: " . ucwords(implode(' ', array_slice($cleanWords, 0, 7)));
        }

        $deep = self::generateDeepArticle($bestMatch, $locationLabel, 7000);

        return [
            'id' => abs(crc32($slug)) % 100000,
            'title' => $deep['title'],
            'slug' => $slug,
            'category' => 'Training Pilot Drone & Sertifikasi Resmi',
            'author' => 'Instruktur Senior Aviasi Nirawak & Drone Specialist',
            'published_at' => date('d M Y'),
            'created_at' => date('d M Y'),
            'read_time' => $deep['estimated_read_time'],
            'views' => 1250 + (abs(crc32($slug)) % 2400),
            'image' => 'https://images.unsplash.com/photo-1527977966376-1c8408f9f108?w=800&auto=format&fit=crop&q=80',
            'excerpt' => $deep['excerpt'],
            'content' => $deep['content']
        ];
    }

    /**
     * Dapatkan daftar artikel per wilayah
     */
    public static function getRegionalArticleList(array $regionData = [], int $limit = 200): array
    {
        $topics = self::getArticleTopics();
        $list = [];

        $province = $regionData['province'] ?? '';
        $city = $regionData['city'] ?? '';
        $district = $regionData['district'] ?? '';
        $locSuffix = trim(($district ? $district . ', ' : '') . ($city ? $city . ', ' : '') . $province);
        if ($locSuffix === '') {
            $locSuffix = 'Nasional';
        }

        $count = 0;
        foreach ($topics as $id => $title) {
            if ($count >= $limit) {
                break;
            }
            $regionalTitle = $title . " - Wilayah " . $locSuffix;
            $slug = Str::slug($regionalTitle);
            $list[] = (object) [
                'id' => $id,
                'title' => $regionalTitle,
                'slug' => $slug,
                'category' => 'Training Pilot Drone & Sertifikasi Resmi',
                'excerpt' => "Panduan teknis dan operasional implementasi {$title} untuk kawasan industri dan profesional di {$locSuffix}. Kurikulum mengacu pada standar keselamatan penerbangan ruang udara dan sertifikasi pilot drone resmi.",
                'author' => 'Instruktur Senior Aviasi Nirawak & Drone Specialist',
                'published_at' => date('d M Y'),
                'read_time' => 35,
                'views' => 1200 + ($id * 23) % 3500
            ];
            $count++;
        }

        return $list;
    }
}
