@extends('layouts.front')

@section('title', 'Training Drone | Pusat Pelatihan & Sertifikasi Pilot Drone Profesional Indonesia')
@section('meta_description', 'Lembaga pelatihan dan sertifikasi resmi Pilot Drone Profesional, Pemetaan Fotogrametri RTK/PPK, Inspeksi Industri & Drone Sprayer Pertanian.') Kelas I & II, Drone Pemetaan & Inspeksian, Drone Pertanian, dan Spesialis Pemetaan & Fotogrametri berlisensi resmi Sertifikasi Resmi.')

@section('content')

    <!-- HERO SLIDER SECTION (TANPA FOTO - HIGH-TECH FLIGHT TELEMETRY HUD) -->
    <section class="gas-hero-wrapper" style="background: radial-gradient(circle at 80% 20%, rgba(245, 158, 11, 0.22) 0%, transparent 45%), radial-gradient(circle at 10% 80%, rgba(217, 119, 6, 0.25) 0%, transparent 50%), #0a192f; color: #ffffff; padding: 60px 0 70px; position: relative; overflow: hidden;">
        <!-- Background Grid Pattern -->
        <div style="position: absolute; inset: 0; background-image: linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px); background-size: 36px 36px; pointer-events: none;"></div>

        <div class="container" style="position: relative; z-index: 2;">
            
            <!-- Hero Slider Container -->
            <div class="hero-slider-container" id="heroSlider" style="position: relative; min-height: 480px;">
                
                <!-- SLIDE 1: Remote Pilot Drone Profesional & Lisensi Resmi -->
                <div class="hero-slide active" data-slide="1" style="display: block; transition: all 0.5s ease;">
                    <div style="display: grid; grid-template-columns: 1.15fr 0.85fr; gap: 40px; align-items: center;">
                        <div>
                            <div class="hero-badge" style="background: rgba(245, 158, 11, 0.18); border: 1px solid rgba(251, 191, 36, 0.45); color: #fbbf24; font-size: 0.78rem; font-weight: 800; padding: 6px 16px; border-radius: 30px; display: inline-flex; align-items: center; gap: 8px; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 0.5px;">
                                <i class="bi bi-patch-check-fill"></i> Lisensi Remote Pilot Resmi & Standar Aviasi Sipil
                            </div>

                            <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 18px; color: #ffffff; letter-spacing: -0.5px;">
                                Training & Sertifikasi Resmi <span style="background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Remote Pilot Drone Profesional</span>
                            </h1>

                            <p style="font-size: 1.02rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 28px; max-width: 620px;">
                                Penuhi kualifikasi kompetensi hukum penerbang drone sipil dan industri berstandar nasional. Kuasai regulasi ruang udara, batasan ketinggian KKOP, navigasi manual ATTI mode tanpa GPS, pre-flight inspection checklist, dan mitigasi darurat failsafe Return-to-Home.
                            </p>

                            <div style="display: flex; flex-wrap: wrap; gap: 14px; margin-bottom: 32px;">
                                <a href="https://api.whatsapp.com/send?phone=6281399810272&text={{ urlencode('Halo Admin Pusat Training Drone, saya ingin konsultasi pendaftaran resmi sertifikasi Remote Pilot Drone Profesional.') }}" target="_blank" class="btn-primary-green" style="box-shadow: 0 4px 18px rgba(245, 158, 11, 0.45);">
                                    <i class="bi bi-whatsapp"></i> Hotline Utama: 0813-9981-0272
                                </a>
                                <a href="#program" class="btn-outline-white" style="border: 1px solid rgba(255,255,255,0.25); background: rgba(255,255,255,0.06);">
                                    <i class="bi bi-grid-fill"></i> 6 Program Training Drone
                                </a>
                            </div>

                            <div style="display: flex; align-items: center; gap: 24px; color: #94a3b8; font-size: 0.85rem; flex-wrap: wrap;">
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <i class="bi bi-check-circle-fill" style="color: #fbbf24;"></i> Lisensi Remote Pilot Sah
                                </div>
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <i class="bi bi-check-circle-fill" style="color: #fbbf24;"></i> Bimbingan Instruktur Senior
                                </div>
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <i class="bi bi-check-circle-fill" style="color: #fbbf24;"></i> Praktik Terbang Lapangan Nyata
                                </div>
                            </div>
                        </div>

                        <!-- SIMULATED UAV FLIGHT TELEMETRY HUD -->
                        <div>
                            <div style="background: linear-gradient(145deg, #0f2347 0%, #0a192f 100%); border: 2px solid rgba(251, 191, 36, 0.35); border-radius: 20px; padding: 24px; box-shadow: 0 20px 40px rgba(0,0,0,0.45), inset 0 1px 0 rgba(255,255,255,0.1); position: relative;">
                                <!-- Top Status Bar -->
                                <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid rgba(255,255,255,0.12); padding-bottom: 12px; margin-bottom: 18px;">
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <span style="display: inline-block; width: 10px; height: 10px; background: #f59e0b; border-radius: 50%; box-shadow: 0 0 10px #f59e0b; animation: pulse 2s infinite;"></span>
                                        <span style="font-size: 0.78rem; font-weight: 800; color: #fde68a; text-transform: uppercase; letter-spacing: 0.8px;">UAV FLIGHT TELEMETRY HUD</span>
                                    </div>
                                    <span style="font-size: 0.72rem; background: rgba(245, 158, 11, 0.2); color: #fbbf24; padding: 3px 10px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.35); font-weight: 700;">AIRSPACE CLEAR • GPS LOCK (21 SATS)</span>
                                </div>

                                <!-- Metric Cards Grid -->
                                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 14px; margin-bottom: 18px;">
                                    <div style="background: rgba(15, 35, 71, 0.45); border: 1px solid rgba(251, 191, 36, 0.25); border-radius: 12px; padding: 14px;">
                                        <div style="font-size: 0.72rem; color: #94a3b8; text-transform: uppercase; margin-bottom: 4px;">Ketinggian (Altitude)</div>
                                        <div style="font-size: 1.6rem; font-weight: 800; color: #fbbf24;">85.0 <span style="font-size: 0.85rem; font-weight: 600; color: #cbd5e1;">m AGL</span></div>
                                        <div style="font-size: 0.68rem; color: #fde68a; margin-top: 2px;">Batas Maksimum: 120 m AGL</div>
                                    </div>

                                    <div style="background: rgba(15, 35, 71, 0.45); border: 1px solid rgba(251, 191, 36, 0.25); border-radius: 12px; padding: 14px;">
                                        <div style="font-size: 0.72rem; color: #94a3b8; text-transform: uppercase; margin-bottom: 4px;">Kecepatan (Ground Speed)</div>
                                        <div style="font-size: 1.6rem; font-weight: 800; color: #f59e0b;">14.2 <span style="font-size: 0.85rem; font-weight: 600; color: #cbd5e1;">m/s</span></div>
                                        <div style="font-size: 0.68rem; color: #fde68a; margin-top: 2px;">Kondisi Angin: 3.2 m/s Tenang</div>
                                    </div>

                                    <div style="background: rgba(15, 35, 71, 0.45); border: 1px solid rgba(251, 191, 36, 0.25); border-radius: 12px; padding: 14px;">
                                        <div style="font-size: 0.72rem; color: #94a3b8; text-transform: uppercase; margin-bottom: 4px;">Daya Baterai LiPo</div>
                                        <div style="font-size: 1.6rem; font-weight: 800; color: #38bdf8;">88% <span style="font-size: 0.85rem; font-weight: 600; color: #cbd5e1;">22.8V</span></div>
                                        <div style="font-size: 0.68rem; color: #bae6fd; margin-top: 2px;">Sel Delta: 0.01V Sangat Seimbang</div>
                                    </div>

                                    <div style="background: rgba(15, 35, 71, 0.45); border: 1px solid rgba(251, 191, 36, 0.25); border-radius: 12px; padding: 14px;">
                                        <div style="font-size: 0.72rem; color: #94a3b8; text-transform: uppercase; margin-bottom: 4px;">Jarak Home Point</div>
                                        <div style="font-size: 1.6rem; font-weight: 800; color: #f59e0b;">1.45 <span style="font-size: 0.85rem; font-weight: 600; color: #cbd5e1;">km</span></div>
                                        <div style="font-size: 0.68rem; color: #fde68a; margin-top: 2px;">Kualitas Sinyal: 99% HD Link</div>
                                    </div>
                                </div>

                                <!-- Lower Status Highlights -->
                                <div style="background: rgba(15, 23, 42, 0.5); border-radius: 10px; padding: 12px 14px; display: flex; justify-content: space-between; align-items: center; font-size: 0.78rem;">
                                    <span style="color: #94a3b8;"><i class="bi bi-shield-check text-success"></i> Sistem Proteksi Otomatis:</span>
                                    <span style="font-weight: 700; color: #fbbf24;">FAILSAFE RTH AKTIF &bull; SENSOR 360° ON</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SLIDE 2: Drone Pemetaan, Fotogrametri & Survei 3D -->
                <div class="hero-slide" data-slide="2" style="display: none; transition: all 0.5s ease;">
                    <div style="display: grid; grid-template-columns: 1.15fr 0.85fr; gap: 40px; align-items: center;">
                        <div>
                            <div class="hero-badge" style="background: rgba(56, 189, 248, 0.18); border: 1px solid rgba(56, 189, 248, 0.45); color: #38bdf8; font-size: 0.78rem; font-weight: 800; padding: 6px 16px; border-radius: 30px; display: inline-flex; align-items: center; gap: 8px; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 0.5px;">
                                <i class="bi bi-geo-alt-fill"></i> Spesialis Pemetaan & Fotogrametri Udara Presisi
                            </div>

                            <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 18px; color: #ffffff; letter-spacing: -0.5px;">
                                Training <span style="background: linear-gradient(135deg, #38bdf8 0%, #f59e0b 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Drone Pemetaan & Fotogrametri</span> Survei Topografi 3D
                            </h1>

                            <p style="font-size: 1.02rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 28px; max-width: 620px;">
                                Tingkatkan kompetensi pemetaan geospasial presisi tinggi mengacu pada standar fotogrametri udara dan GIS. Membekali peserta keahlian kalkulasi GSD, pengukuran GCP/ICP GNSS RTK Geodetik, pengolahan ortofoto resolusi tinggi, Digital Surface Model (DSM), dan kontur rekayasa sipil.
                            </p>

                            <div style="display: flex; flex-wrap: wrap; gap: 14px; margin-bottom: 32px;">
                                <a href="https://api.whatsapp.com/send?phone=6281399810272&text={{ urlencode('Halo Admin Training Drone, saya ingin konsultasi pendaftaran Training Drone Pemetaan dan Fotogrametri Udara.') }}" target="_blank" class="btn-primary-green" style="box-shadow: 0 4px 18px rgba(245, 158, 11, 0.45);">
                                    <i class="bi bi-whatsapp"></i> Hotline Pemetaan: 0813-9981-0272
                                </a>
                                <a href="{{ route('program.detail', 'training-drone-pemetaan-survei-udara-fotogrametri') }}" class="btn-outline-white" style="border: 1px solid rgba(255,255,255,0.25); background: rgba(255,255,255,0.06);">
                                    <i class="bi bi-file-earmark-text"></i> Silabus Pemetaan
                                </a>
                            </div>

                            <div style="display: flex; align-items: center; gap: 24px; color: #94a3b8; font-size: 0.85rem; flex-wrap: wrap;">
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <i class="bi bi-check-circle-fill" style="color: #38bdf8;"></i> Akurasi Sub-Sentimeter
                                </div>
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <i class="bi bi-check-circle-fill" style="color: #38bdf8;"></i> Integrasi GNSS RTK/PPK
                                </div>
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <i class="bi bi-check-circle-fill" style="color: #38bdf8;"></i> Olah Data Pix4D & Metashape
                                </div>
                            </div>
                        </div>

                        <!-- SIMULATED PHOTOGRAMMETRY HUD -->
                        <div>
                            <div style="background: linear-gradient(145deg, #0a1e38 0%, #0a192f 100%); border: 2px solid rgba(56, 189, 248, 0.35); border-radius: 20px; padding: 24px; box-shadow: 0 20px 40px rgba(0,0,0,0.45), inset 0 1px 0 rgba(255,255,255,0.1); position: relative;">
                                <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid rgba(255,255,255,0.12); padding-bottom: 12px; margin-bottom: 18px;">
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <span style="display: inline-block; width: 10px; height: 10px; background: #38bdf8; border-radius: 50%; box-shadow: 0 0 10px #38bdf8; animation: pulse 2s infinite;"></span>
                                        <span style="font-size: 0.78rem; font-weight: 800; color: #bae6fd; text-transform: uppercase; letter-spacing: 0.8px;">AERIAL MAPPING & PHOTOGRAMMETRY HUD</span>
                                    </div>
                                    <span style="font-size: 0.72rem; background: rgba(56, 189, 248, 0.2); color: #38bdf8; padding: 3px 10px; border-radius: 12px; border: 1px solid rgba(56, 189, 248, 0.35); font-weight: 700;">GRID MISSION &bull; RTK FIX</span>
                                </div>

                                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 14px; margin-bottom: 18px;">
                                    <div style="background: rgba(10, 30, 56, 0.5); border: 1px solid rgba(56, 189, 248, 0.25); border-radius: 12px; padding: 14px;">
                                        <div style="font-size: 0.72rem; color: #94a3b8; text-transform: uppercase; margin-bottom: 4px;">Ground Sampling Distance</div>
                                        <div style="font-size: 1.6rem; font-weight: 800; color: #38bdf8;">1.85 <span style="font-size: 0.85rem; font-weight: 600; color: #cbd5e1;">cm/px</span></div>
                                        <div style="font-size: 0.68rem; color: #bae6fd; margin-top: 2px;">Sensor 45MP Full Frame</div>
                                    </div>

                                    <div style="background: rgba(10, 30, 56, 0.5); border: 1px solid rgba(56, 189, 248, 0.25); border-radius: 12px; padding: 14px;">
                                        <div style="font-size: 0.72rem; color: #94a3b8; text-transform: uppercase; margin-bottom: 4px;">Pertampalan Foto (Overlap)</div>
                                        <div style="font-size: 1.6rem; font-weight: 800; color: #fbbf24;">80% / 70%</div>
                                        <div style="font-size: 0.68rem; color: #fde68a; margin-top: 2px;">Shutter 1/1200s &bull; ISO 100</div>
                                    </div>

                                    <div style="background: rgba(10, 30, 56, 0.5); border: 1px solid rgba(56, 189, 248, 0.25); border-radius: 12px; padding: 14px;">
                                        <div style="font-size: 0.72rem; color: #94a3b8; text-transform: uppercase; margin-bottom: 4px;">Titik Kontrol Tanah (GCP)</div>
                                        <div style="font-size: 1.6rem; font-weight: 800; color: #f59e0b;">18 <span style="font-size: 0.85rem; font-weight: 600; color: #cbd5e1;">Points</span></div>
                                        <div style="font-size: 0.68rem; color: #fde68a; margin-top: 2px;">Akurasi RMSE: 1.2 cm Geodetik</div>
                                    </div>

                                    <div style="background: rgba(10, 30, 56, 0.5); border: 1px solid rgba(56, 189, 248, 0.25); border-radius: 12px; padding: 14px;">
                                        <div style="font-size: 0.72rem; color: #94a3b8; text-transform: uppercase; margin-bottom: 4px;">Luas Cakupan Misi</div>
                                        <div style="font-size: 1.6rem; font-weight: 800; color: #38bdf8;">240 <span style="font-size: 0.85rem; font-weight: 600; color: #cbd5e1;">Hektar</span></div>
                                        <div style="font-size: 0.68rem; color: #bae6fd; margin-top: 2px;">1.420 Citra Foto Geotagged</div>
                                    </div>
                                </div>

                                <div style="background: rgba(15, 23, 42, 0.5); border-radius: 10px; padding: 12px 14px; display: flex; justify-content: space-between; align-items: center; font-size: 0.78rem;">
                                    <span style="color: #94a3b8;"><i class="bi bi-layers-fill text-info"></i> Keluaran Peta:</span>
                                    <span style="font-weight: 700; color: #38bdf8;">TRUE ORTHOMOSAIC &bull; DSM &bull; KONTUR 3D</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SLIDE 3: Inspeksi Termal Industri & Drone Pertanian -->
                <div class="hero-slide" data-slide="3" style="display: none; transition: all 0.5s ease;">
                    <div style="display: grid; grid-template-columns: 1.15fr 0.85fr; gap: 40px; align-items: center;">
                        <div>
                            <div class="hero-badge" style="background: rgba(245, 158, 11, 0.18); border: 1px solid rgba(245, 158, 11, 0.45); color: #fbbf24; font-size: 0.78rem; font-weight: 800; padding: 6px 16px; border-radius: 30px; display: inline-flex; align-items: center; gap: 8px; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 0.5px;">
                                <i class="bi bi-shield-check"></i> Inspeksi Termal Industri & Pertanian Presisi
                            </div>

                            <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 18px; color: #ffffff; letter-spacing: -0.5px;">
                                Training <span style="background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Inspeksi Termal Industri</span> & Drone Sprayer Pertanian
                            </h1>

                            <p style="font-size: 1.02rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 28px; max-width: 620px;">
                                Inspeksi non-kontak pada infrastruktur kritis: menara transmisi listrik SUTET, flare stack kilang, dan panel surya menggunakan sensor termal radiometrik, serta pengoperasian drone sprayer kapasitas 20-50 Liter untuk perkebunan kelapa sawit presisi.
                            </p>

                            <div style="display: flex; flex-wrap: wrap; gap: 14px; margin-bottom: 32px;">
                                <a href="https://api.whatsapp.com/send?phone=6281399810272&text={{ urlencode('Halo Admin Training Drone, saya ingin konsultasi pendaftaran pelatihan Drone Inspeksi Industri dan Sprayer Pertanian.') }}" target="_blank" class="btn-primary-green" style="box-shadow: 0 4px 18px rgba(245, 158, 11, 0.45);">
                                    <i class="bi bi-whatsapp"></i> Hotline Inspeksi & Sprayer: 0813-9981-0272
                                </a>
                                <a href="{{ route('program.detail', 'training-drone-inspeksi-industri-infrastruktur') }}" class="btn-outline-white" style="border: 1px solid rgba(255,255,255,0.25); background: rgba(255,255,255,0.06);">
                                    <i class="bi bi-file-earmark-text"></i> Silabus Inspeksi
                                </a>
                            </div>

                            <div style="display: flex; align-items: center; gap: 24px; color: #94a3b8; font-size: 0.85rem; flex-wrap: wrap;">
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <i class="bi bi-check-circle-fill" style="color: #fbbf24;"></i> Kamera Termal Radiometrik
                                </div>
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <i class="bi bi-check-circle-fill" style="color: #fbbf24;"></i> Analisis Hotspot Listrik
                                </div>
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <i class="bi bi-check-circle-fill" style="color: #fbbf24;"></i> Sprayer Sawit Kapasitas Besar
                                </div>
                            </div>
                        </div>

                        <!-- SIMULATED THERMAL & SPRAYER HUD -->
                        <div>
                            <div style="background: linear-gradient(145deg, #2a1e06 0%, #0a192f 100%); border: 2px solid rgba(245, 158, 11, 0.35); border-radius: 20px; padding: 24px; box-shadow: 0 20px 40px rgba(0,0,0,0.45), inset 0 1px 0 rgba(255,255,255,0.1); position: relative;">
                                <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid rgba(255,255,255,0.12); padding-bottom: 12px; margin-bottom: 18px;">
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <span style="display: inline-block; width: 10px; height: 10px; background: #fbbf24; border-radius: 50%; box-shadow: 0 0 10px #fbbf24; animation: pulse 2s infinite;"></span>
                                        <span style="font-size: 0.78rem; font-weight: 800; color: #fde68a; text-transform: uppercase; letter-spacing: 0.8px;">THERMAL RADIOMETRIC & SPRAYER HUD</span>
                                    </div>
                                    <span style="font-size: 0.72rem; background: rgba(245, 158, 11, 0.2); color: #fbbf24; padding: 3px 10px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.35); font-weight: 700;">INFRARED THERMOGRAPHY</span>
                                </div>

                                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 14px; margin-bottom: 18px;">
                                    <div style="background: rgba(42, 30, 6, 0.5); border: 1px solid rgba(245, 158, 11, 0.25); border-radius: 12px; padding: 14px;">
                                        <div style="font-size: 0.72rem; color: #94a3b8; text-transform: uppercase; margin-bottom: 4px;">Titik Suhu Target</div>
                                        <div style="font-size: 1.6rem; font-weight: 800; color: #fbbf24;">78.4 <span style="font-size: 0.85rem; font-weight: 600; color: #cbd5e1;">°C</span></div>
                                        <div style="font-size: 0.68rem; color: #fde68a; margin-top: 2px;">Delta T: +34°C Hotspot SUTET</div>
                                    </div>

                                    <div style="background: rgba(42, 30, 6, 0.5); border: 1px solid rgba(245, 158, 11, 0.25); border-radius: 12px; padding: 14px;">
                                        <div style="font-size: 0.72rem; color: #94a3b8; text-transform: uppercase; margin-bottom: 4px;">Kamera Optical Zoom</div>
                                        <div style="font-size: 1.6rem; font-weight: 800; color: #38bdf8;">40x <span style="font-size: 0.85rem; font-weight: 600; color: #cbd5e1;">Zoom</span></div>
                                        <div style="font-size: 0.68rem; color: #bae6fd; margin-top: 2px;">Jarak Aman: 25 m dari Konduktor</div>
                                    </div>

                                    <div style="background: rgba(42, 30, 6, 0.5); border: 1px solid rgba(245, 158, 11, 0.25); border-radius: 12px; padding: 14px;">
                                        <div style="font-size: 0.72rem; color: #94a3b8; text-transform: uppercase; margin-bottom: 4px;">Kapasitas Drone Sprayer</div>
                                        <div style="font-size: 1.6rem; font-weight: 800; color: #f59e0b;">30 <span style="font-size: 0.85rem; font-weight: 600; color: #cbd5e1;">Liter</span></div>
                                        <div style="font-size: 0.68rem; color: #fde68a; margin-top: 2px;">Nosel Sentrifugal &bull; 25 L/Ha</div>
                                    </div>

                                    <div style="background: rgba(42, 30, 6, 0.5); border: 1px solid rgba(245, 158, 11, 0.25); border-radius: 12px; padding: 14px;">
                                        <div style="font-size: 0.72rem; color: #94a3b8; text-transform: uppercase; margin-bottom: 4px;">Indeks Vegetasi (NDVI)</div>
                                        <div style="font-size: 1.6rem; font-weight: 800; color: #fbbf24;">0.78 <span style="font-size: 0.85rem; font-weight: 600; color: #cbd5e1;">(Sehat)</span></div>
                                        <div style="font-size: 0.68rem; color: #fde68a; margin-top: 2px;">Sensor Multispektral 4-Band</div>
                                    </div>
                                </div>

                                <div style="background: rgba(15, 23, 42, 0.5); border-radius: 10px; padding: 12px 14px; display: flex; justify-content: space-between; align-items: center; font-size: 0.78rem;">
                                    <span style="color: #94a3b8;"><i class="bi bi-shield-check text-warning"></i> Audit Integritas Aset:</span>
                                    <span style="font-weight: 700; color: #fbbf24;">DETEKSI DINI KERUSAKAN &bull; ZERO WORKING-AT-HEIGHT</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Slider Control Navigation & Indicators -->
            <div style="display: flex; align-items: center; justify-content: space-between; margin-top: 36px; padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.1); flex-wrap: wrap; gap: 16px;">
                <div style="display: flex; align-items: center; gap: 10px;">
                    <button type="button" id="heroPrevBtn" aria-label="Slide Sebelumnya" style="width: 42px; height: 42px; border-radius: 50%; background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.2); color: #ffffff; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.2s ease;">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <button type="button" id="heroNextBtn" aria-label="Slide Berikutnya" style="width: 42px; height: 42px; border-radius: 50%; background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.2); color: #ffffff; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.2s ease;">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                    <span style="font-size: 0.85rem; color: #94a3b8; margin-left: 6px;" id="heroSlideIndicator">Modul 1 dari 3</span>
                </div>

                <!-- Interactive Tab Chips -->
                <div style="display: flex; align-items: center; gap: 10px; flex-wrap: wrap;">
                    <button type="button" class="hero-chip active" data-target-slide="1" style="background: rgba(245, 158, 11, 0.2); border: 1px solid #f59e0b; color: #fbbf24; padding: 7px 16px; border-radius: 20px; font-size: 0.82rem; font-weight: 700; cursor: pointer; transition: all 0.2s ease;">
                        1. Pilot Drone & Remote Pilot License
                    </button>
                    <button type="button" class="hero-chip" data-target-slide="2" style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.15); color: #cbd5e1; padding: 7px 16px; border-radius: 20px; font-size: 0.82rem; font-weight: 700; cursor: pointer; transition: all 0.2s ease;">
                        2. Pemetaan & Fotogrametri 3D
                    </button>
                    <button type="button" class="hero-chip" data-target-slide="3" style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.15); color: #cbd5e1; padding: 7px 16px; border-radius: 20px; font-size: 0.82rem; font-weight: 700; cursor: pointer; transition: all 0.2s ease;">
                        3. Inspeksi Termal & Drone Sprayer
                    </button>
                </div>
            </div>

        </div>
    </section>

    <!-- KEUNGGULAN KAMI (SLIDER / CAROUSEL INTERAKTIF & KEREN) -->
    <section class="section-py" style="background: #f8fafc; border-bottom: 1px solid #e2e8f0; position: relative;">
        <div class="container">
            <div class="section-header" style="text-align: center; margin-bottom: 38px;">
                <span class="section-tag" style="background: #fef3c7; color: #d97706; border: 1px solid #fde68a;">Keunggulan Kompetitif Lembaga</span>
                <h2 class="section-title">Mengapa Memilih Training Drone Bersama Kami?</h2>
                <p class="section-desc" style="max-width: 760px; margin: 0 auto;">
                    Dedikasi profesional kami terbukti dalam mencetak ribuan pilot drone dan inspektur drone pemetaan berdaya saing tinggi dengan rekam jejak Zero Accident di seluruh Indonesia.
                </p>
            </div>

            <!-- Keunggulan Carousel Wrapper -->
            <div style="position: relative;">
                <div id="keunggulanSlider" style="display: flex; gap: 20px; overflow-x: auto; scroll-snap-type: x mandatory; scrollbar-width: none; -ms-overflow-style: none; padding-bottom: 16px;">
                    
                    <!-- Card 1 -->
                    <div style="flex: 0 0 360px; scroll-snap-align: start; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 26px; box-shadow: 0 4px 15px rgba(0,0,0,0.03); transition: all 0.3s ease; display: flex; flex-direction: column;">
                        <div style="width: 52px; height: 52px; background: #fef3c7; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #d97706; font-size: 1.5rem; margin-bottom: 18px; border: 1px solid #fde68a;">
                            <i class="bi bi-person-workspace"></i>
                        </div>
                        <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin-bottom: 10px;">Instruktur Pilot Drone Berlisensi Resmi</h3>
                        <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin-bottom: 0;">
                            Dibimbing langsung oleh instruktur pilot drone senior bersertifikasi resmi, praktisi geospasial fotogrametri, dan inspektur termal industri dengan pengalaman terbang ratusan jam operasional.
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div style="flex: 0 0 360px; scroll-snap-align: start; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 26px; box-shadow: 0 4px 15px rgba(0,0,0,0.03); transition: all 0.3s ease; display: flex; flex-direction: column;">
                        <div style="width: 52px; height: 52px; background: #fef3c7; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #d97706; font-size: 1.5rem; margin-bottom: 18px; border: 1px solid #fde68a;">
                            <i class="bi bi-droplet-half"></i>
                        </div>
                        <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin-bottom: 10px;">Armada Drone Industri Lengkap & Terbuka</h3>
                        <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin-bottom: 0;">
                            Praktik langsung menggunakan unit drone multirotor modern, fixed-wing, drone sprayer kapasitas besar 16-30 liter, dan drone berkamera termal radiometrik di lapangan terbang luas dan aman.
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div style="flex: 0 0 360px; scroll-snap-align: start; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 26px; box-shadow: 0 4px 15px rgba(0,0,0,0.03); transition: all 0.3s ease; display: flex; flex-direction: column;">
                        <div style="width: 52px; height: 52px; background: #fef3c7; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #d97706; font-size: 1.5rem; margin-bottom: 18px; border: 1px solid #fde68a;">
                            <i class="bi bi-broadcast-pin"></i>
                        </div>
                        <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin-bottom: 10px;">Teknologi GNSS Geodetik RTK/PPK Presisi</h3>
                        <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin-bottom: 0;">
                            Kuasai integrasi GNSS Geodetik Base & Rover, pemasangan GCP & ICP sub-sentimeter, dan olah data fotogrametri ortofoto, DSM/DEM, kontur, serta volume tambang di Pix4D dan Agisoft.
                        </p>
                    </div>

                    <!-- Card 4 -->
                    <div style="flex: 0 0 360px; scroll-snap-align: start; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 26px; box-shadow: 0 4px 15px rgba(0,0,0,0.03); transition: all 0.3s ease; display: flex; flex-direction: column;">
                        <div style="width: 52px; height: 52px; background: #fef3c7; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #d97706; font-size: 1.5rem; margin-bottom: 18px; border: 1px solid #fde68a;">
                            <i class="bi bi-patch-check-fill"></i>
                        </div>
                        <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin-bottom: 10px;">Sertifikat Kompetensi & Remote Pilot Card</h3>
                        <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin-bottom: 0;">
                            Lulusan berhak mendapatkan Sertifikat Kompetensi Pilot Drone Resmi, Kartu Lisensi Remote Pilot, dan portofolio jam terbang yang diakui luas oleh industri pertambangan, energi, dan konstruksi.
                        </p>
                    </div>

                    <!-- Card 5 -->
                    <div style="flex: 0 0 360px; scroll-snap-align: start; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 26px; box-shadow: 0 4px 15px rgba(0,0,0,0.03); transition: all 0.3s ease; display: flex; flex-direction: column;">
                        <div style="width: 52px; height: 52px; background: #fef3c7; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #d97706; font-size: 1.5rem; margin-bottom: 18px; border: 1px solid #fde68a;">
                            <i class="bi bi-sliders"></i>
                        </div>
                        <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin-bottom: 10px;">Inspeksi Termal & Audit Integritas Aset</h3>
                        <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin-bottom: 0;">
                            Kuasai teknik deteksi hotspot kelistrikan menara SUTET, solar panel fotovoltaik, flare stack migas, serta pembacaan radiometrik inframerah FLIR untuk audit aset berisiko tinggi.
                        </p>
                    </div>

                    <!-- Card 6 -->
                    <div style="flex: 0 0 360px; scroll-snap-align: start; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 26px; box-shadow: 0 4px 15px rgba(0,0,0,0.03); transition: all 0.3s ease; display: flex; flex-direction: column;">
                        <div style="width: 52px; height: 52px; background: #fef3c7; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #d97706; font-size: 1.5rem; margin-bottom: 18px; border: 1px solid #fde68a;">
                            <i class="bi bi-building"></i>
                        </div>
                        <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin-bottom: 10px;">Layanan In-House Training ke 38 Provinsi</h3>
                        <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin-bottom: 0;">
                            Kami siap menyelenggarakan pelatihan in-house pilot drone langsung di site tambang, perkebunan kelapa sawit, atau fasilitas industri perusahaan Anda di 38 provinsi Indonesia.
                        </p>
                    </div>

                </div>

                <!-- Keunggulan Navigation Controls -->
                <div style="display: flex; justify-content: center; align-items: center; gap: 12px; margin-top: 24px;">
                    <button type="button" id="keunggulanPrev" aria-label="Geser Kiri" style="width: 38px; height: 38px; border-radius: 50%; background: #ffffff; border: 1px solid #cbd5e1; color: #334155; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.2s ease; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <div style="display: flex; gap: 6px;" id="keunggulanDots">
                        <span style="width: 22px; height: 6px; background: #f59e0b; border-radius: 4px; display: inline-block;"></span>
                        <span style="width: 6px; height: 6px; background: #cbd5e1; border-radius: 50%; display: inline-block;"></span>
                        <span style="width: 6px; height: 6px; background: #cbd5e1; border-radius: 50%; display: inline-block;"></span>
                    </div>
                    <button type="button" id="keunggulanNext" aria-label="Geser Kanan" style="width: 38px; height: 38px; border-radius: 50%; background: #ffffff; border: 1px solid #cbd5e1; color: #334155; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.2s ease; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- 6 PROGRAM UTAMA (CMS DYNAMIC) -->
    <section class="section-py" id="program">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Skema Pelatihan & Sertifikasi Sertifikasi Resmi</span>
                <h2 class="section-title">6 Program Unggulan Pelatihan Drone & Sertifikasi Pilot UAV</h2>
                <p class="section-desc">
                    Pilihan kurikulum terakreditasi resmi untuk meningkatkan kualifikasi pilot drone komersial, surveyor geospasial, inspektur aset termal, dan operator sprayer pertanian berstandar industri nasional.
                </p>
            </div>

            <div class="programs-grid" style="margin-bottom: 40px;">
                @foreach($programs as $prog)
                    @php
                        $progObj = (object)$prog;
                        $progDetailUrl = route('program.detail', $progObj->slug);
                    @endphp
                    <div class="program-card">
                        <div class="program-img-wrapper">
                            <img src="{{ $progObj->image ?? 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?w=800&auto=format&fit=crop&q=80' }}" alt="{{ $progObj->title }}" class="program-img" loading="lazy">
                            <span class="program-badge">{{ $progObj->badge ?? 'Sertifikasi Resmi' }}</span>
                        </div>

                        <div class="program-body">
                            <div class="program-level">{{ $progObj->level_name ?? 'Sertifikasi Sertifikasi Resmi' }}</div>
                            <h3 class="program-title">
                                <a href="{{ $progDetailUrl }}">{{ $progObj->title }}</a>
                            </h3>
                            <p class="program-desc">
                                {{ Str::limit($progObj->short_description ?? ($progObj->full_description ?? ''), 130) }}
                            </p>

                            <div class="program-meta">
                                <div><i class="bi bi-clock" style="color: #f59e0b;"></i> {{ $progObj->duration ?? '4-5 Hari' }}</div>
                                <div><i class="bi bi-patch-check" style="color: #f59e0b;"></i> SIO Sertifikasi Resmi</div>
                            </div>

                            <div class="program-footer-btn">
                                <a href="{{ $progDetailUrl }}" class="btn-primary-green" style="width: 100%; justify-content: center; font-size: 0.84rem; padding: 10px 14px;">
                                    <i class="bi bi-arrow-right-circle-fill"></i> Detail Silabus & Pendaftaran
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div style="text-align: center;">
                <a href="{{ route('programs') }}" class="btn-primary-green" style="padding: 12px 28px; font-size: 0.92rem;">
                    <i class="bi bi-collection"></i> Lihat Seluruh 6 Program & Silabus Lengkap
                </a>
            </div>
        </div>
    </section>

    <!-- 3 ARTIKEL TERBARU (DILIMIT 3 CARD) -->
    <section class="section-py" style="background: #f8fafc; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
        <div class="container">
            <div class="section-header" style="display: flex; justify-content: space-between; align-items: flex-end; flex-wrap: wrap; gap: 20px; text-align: left;">
                <div>
                    <span class="section-tag">Pusat Edukasi & Regulasi</span>
                    <h2 class="section-title" style="margin-bottom: 0;">Artikel & Panduan Teknis Drone Terbaru</h2>
                </div>
                <a href="{{ route('articles') }}" class="btn-outline-white" style="background: #ffffff; color: #d97706; border: 1px solid #fde68a; font-weight: 700;">
                    Lihat Semua Artikel Daerah <i class="bi bi-arrow-right"></i>
                </a>
            </div>

            <div class="articles-grid">
                @foreach($articles as $art)
                    @php
                        $artObj = (object)$art;
                        $artUrl = route('article.detail', $artObj->slug);
                    @endphp
                    <div class="article-card">
                        <div class="article-img-wrapper" style="position: relative; height: 210px; overflow: hidden; background: #0f172a;">
                            <img src="{{ $artObj->featured_image ?? 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?w=800&auto=format&fit=crop&q=80' }}" alt="{{ $artObj->title }}" class="article-img" style="width: 100%; height: 100%; object-fit: cover;" loading="lazy">
                            <span class="article-badge" style="position: absolute; top: 12px; left: 12px; background: rgba(15, 35, 71, 0.9); color: #fde68a; font-size: 0.72rem; font-weight: 800; padding: 4px 10px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.4);">
                                {{ $artObj->category ?? 'Training Drone' }}
                            </span>
                        </div>

                        <div class="article-body" style="padding: 22px;">
                            <div style="font-size: 0.76rem; color: #64748b; margin-bottom: 8px; display: flex; align-items: center; gap: 8px;">
                                <span><i class="bi bi-person-fill" style="color: #f59e0b;"></i> {{ $artObj->author ?? 'Instruktur Drone' }}</span>
                                <span>&bull;</span>
                                <span><i class="bi bi-clock"></i> {{ $artObj->read_time ?? 35 }} Menit</span>
                            </div>

                            <h3 class="article-title" style="font-size: 1.05rem; font-weight: 800; line-height: 1.4; margin-bottom: 10px;">
                                <a href="{{ $artUrl }}" style="color: #0f172a;">{{ $artObj->title }}</a>
                            </h3>

                            <p class="article-excerpt" style="font-size: 0.86rem; color: #64748b; line-height: 1.6; margin-bottom: 18px;">
                                {{ Str::limit(strip_tags($artObj->excerpt ?? ($artObj->content ?? '')), 130) }}
                            </p>

                            <div style="border-top: 1px solid #f1f5f9; padding-top: 14px; display: flex; justify-content: space-between; align-items: center;">
                                <span style="font-size: 0.78rem; font-weight: 700; color: #f59e0b;">
                                    <i class="bi bi-file-earmark-text-fill"></i> Panduan Lengkap
                                </span>
                                <a href="{{ $artUrl }}" style="font-size: 0.84rem; font-weight: 700; color: #d97706; display: flex; align-items: center; gap: 4px;">
                                    Baca Lengkap <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- STATISTIK (DIBIKIN KEREN DENGAN GLOW HIJAU MUDA) -->
    <section class="section-py" style="background: linear-gradient(135deg, #0a192f 0%, #0f2347 100%); color: #ffffff; position: relative;">
        <div class="container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 24px;">
                @foreach($statistics as $stat)
                    <div style="background: rgba(255,255,255,0.05); border: 1px solid rgba(251, 191, 36, 0.2); border-radius: 18px; padding: 28px 22px; text-align: center; position: relative; overflow: hidden; backdrop-filter: blur(8px);">
                        <div style="width: 56px; height: 56px; background: rgba(245, 158, 11, 0.18); border-radius: 14px; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; color: #fbbf24; font-size: 1.6rem; border: 1px solid rgba(251, 191, 36, 0.35);">
                            <i class="bi {{ $stat->icon ?? 'bi-bar-chart-fill' }}"></i>
                        </div>
                        <div style="font-size: 2.6rem; font-weight: 800; color: #fbbf24; line-height: 1; margin-bottom: 8px; letter-spacing: -1px;">
                            {{ $stat->value }}
                        </div>
                        <h4 style="font-size: 1.05rem; font-weight: 700; color: #ffffff; margin-bottom: 6px;">{{ $stat->label }}</h4>
                        <p style="font-size: 0.82rem; color: #94a3b8; line-height: 1.5; margin: 0;">{{ $stat->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- OUR PARTNER / KLIEN PERUSAHAAN -->
    <section class="section-py" style="background: #ffffff; border-bottom: 1px solid #e2e8f0;">
        <div class="container">
            <div class="section-header" style="text-align: center; margin-bottom: 34px;">
                <span class="section-tag">Kepercayaan Industri Nasional</span>
                <h2 class="section-title">Dipercaya Berbagai Sektor Industri Strategis Indonesia</h2>
                <p class="section-desc" style="max-width: 720px; margin: 0 auto;">
                    Alumni dan kemitraan in-house training kami mencakup pembangkit listrik, kilang minyak dan gas, pabrik petrokimia, pabrik kelapa sawit, hingga industri manufaktur berat:
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 16px;">
                @foreach($partners as $partner)
                    <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 18px 16px; text-align: center; transition: all 0.25s ease;">
                        <div style="font-size: 1rem; font-weight: 800; color: #0f172a; margin-bottom: 4px;">{{ $partner['name'] }}</div>
                        <div style="font-size: 0.74rem; color: #d97706; font-weight: 600;">{{ $partner['role'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- KREDIBILITAS & PENGALAMAN (DIBIKIN KEREN DENGAN BADGE DAN JAMINAN) -->
    <section class="section-py" style="background: #f8fafc; border-bottom: 1px solid #e2e8f0;">
        <div class="container">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center;">
                <div>
                    <span class="section-tag" style="background: #fef3c7; color: #d97706; border: 1px solid #fde68a;">Kredibilitas & Legalitas Penerbangan</span>
                    <h2 class="section-title" style="text-align: left;">Jaminan Standar Kompetensi & Legalitas Sertifikasi Pilot Drone Resmi</h2>
                    <p style="font-size: 0.95rem; color: #475569; line-height: 1.7; margin-bottom: 22px;">
                        Lembaga Training Drone Indonesia berdedikasi menyelenggarakan pembinaan berstandar aviasi nirawak dan regulasi ruang udara nasional guna menjamin seluruh operasional penerbangan berjalan secara legal, aman, dan berintegritas tinggi.
                    </p>

                    <div style="display: flex; flex-direction: column; gap: 16px; margin-bottom: 28px;">
                        <div style="display: flex; gap: 14px; align-items: flex-start;">
                            <div style="width: 38px; height: 38px; background: #fef3c7; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #d97706; font-size: 1.2rem; flex-shrink: 0; border: 1px solid #fde68a;">
                                <i class="bi bi-shield-lock-fill"></i>
                            </div>
                            <div>
                                <h4 style="font-size: 0.98rem; font-weight: 700; color: #0f172a; margin-bottom: 3px;">Kepatuhan Regulasi Ruang Udara & Batasan Ketinggian KKOP 120 Meter</h4>
                                <p style="font-size: 0.84rem; color: #64748b; line-height: 1.5; margin: 0;">Seluruh silabus disusun presisi mengacu pada ketentuan keselamatan penerbangan sipil nasional untuk menjamin kepatuhan audit K3 industri.</p>
                            </div>
                        </div>

                        <div style="display: flex; gap: 14px; align-items: flex-start;">
                            <div style="width: 38px; height: 38px; background: #fef3c7; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #d97706; font-size: 1.2rem; flex-shrink: 0; border: 1px solid #fde68a;">
                                <i class="bi bi-qr-code-scan"></i>
                            </div>
                            <div>
                                <h4 style="font-size: 0.98rem; font-weight: 700; color: #0f172a; margin-bottom: 3px;">Kartu Lisensi Remote Pilot & Sertifikat Berbarcode Online</h4>
                                <p style="font-size: 0.84rem; color: #64748b; line-height: 1.5; margin: 0;">Dapat diverifikasi secara mandiri oleh tim HRD, kontraktor, maupun auditor keselamatan melalui database sertifikasi resmi.</p>
                            </div>
                        </div>

                        <div style="display: flex; gap: 14px; align-items: flex-start;">
                            <div style="width: 38px; height: 38px; background: #fef3c7; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #d97706; font-size: 1.2rem; flex-shrink: 0; border: 1px solid #fde68a;">
                                <i class="bi bi-award-fill"></i>
                            </div>
                            <div>
                                <h4 style="font-size: 0.98rem; font-weight: 700; color: #0f172a; margin-bottom: 3px;">Instruktur Berpengalaman Ratusan Jam Terbang & Spesialis Geospasial</h4>
                                <p style="font-size: 0.84rem; color: #64748b; line-height: 1.5; margin: 0;">Pengajar kami memegang kualifikasi pilot drone komersial dan praktisi survei pemetaan serta inspeksi industri senior.</p>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('about') }}" class="btn-primary-green" style="background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);">
                        <i class="bi bi-info-circle-fill"></i> Profil Lengkap & Sejarah Lembaga
                    </a>
                </div>

                <!-- Showcase Credibility Card -->
                <div>
                    <div style="background: #ffffff; border: 2px solid #fde68a; border-radius: 20px; padding: 32px; box-shadow: 0 16px 36px -4px rgba(245, 158, 11, 0.12);">
                        <div style="display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid #e2e8f0; padding-bottom: 16px; margin-bottom: 20px;">
                            <div style="display: flex; align-items: center; gap: 10px;">
                                <i class="bi bi-patch-check-fill" style="color: #f59e0b; font-size: 1.8rem;"></i>
                                <div>
                                    <h4 style="font-size: 1.05rem; font-weight: 800; color: #0f172a; margin: 0;">AKREDITASI & KELAYAKAN RESMI</h4>
                                    <span style="font-size: 0.76rem; color: #64748b;">KODE SERTIFIKASI: UAV-PILOT-CERT/2026</span>
                                </div>
                            </div>
                            <span style="background: #fef3c7; color: #d97706; font-size: 0.75rem; font-weight: 800; padding: 4px 12px; border-radius: 20px; border: 1px solid #fde68a;">TERVERIFIKASI</span>
                        </div>

                        <div style="display: flex; flex-direction: column; gap: 12px; font-size: 0.88rem; color: #334155;">
                            <div style="display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px dashed #e2e8f0;">
                                <span style="color: #64748b;">Regulasi Ruang Udara:</span>
                                <strong style="color: #0f172a;">Standar Keselamatan Aviasi Sipil</strong>
                            </div>
                            <div style="display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px dashed #e2e8f0;">
                                <span style="color: #64748b;">Batas Ketinggian Maksimum:</span>
                                <strong style="color: #0f172a;">120 Meter AGL (Bebas Izin)</strong>
                            </div>
                            <div style="display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px dashed #e2e8f0;">
                                <span style="color: #64748b;">Standar Uji Kompetensi:</span>
                                <strong style="color: #0f172a;">Teori Aviasi, Simulasi & Praktik ATTI</strong>
                            </div>
                            <div style="display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px dashed #e2e8f0;">
                                <span style="color: #64748b;">Masa Berlaku Lisensi:</span>
                                <strong style="color: #d97706;">Terdaftar & Dapat Diperpanjang</strong>
                            </div>
                            <div style="display: flex; justify-content: space-between; padding: 8px 0;">
                                <span style="color: #64748b;">Jangkauan Layanan:</span>
                                <strong style="color: #0f172a;">38 Provinsi Seluruh Indonesia</strong>
                            </div>
                        </div>

                        <div style="margin-top: 24px; padding: 14px; background: #fef3c7; border-radius: 12px; text-align: center;">
                            <span style="font-size: 0.82rem; color: #b45309; font-weight: 700;">
                                <i class="bi bi-telephone-fill me-1"></i> Konsultasi Lisensi Cepat WA: 0813-9981-0272
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DIREKTORI WILAYAH 38 PROVINSI, KABUPATEN/KOTA & KECAMATAN LENGKAP -->
    <style>
        .wilayah-section-wrap {
            background: #ffffff;
            border-bottom: 1px solid #e2e8f0;
        }
        .island-tab-btn {
            padding: 8px 18px;
            border-radius: 30px;
            font-size: 0.82rem;
            font-weight: 700;
            border: 1px solid #cbd5e1;
            background: #f8fafc;
            color: #475569;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        .island-tab-btn:hover {
            border-color: #f59e0b;
            color: #d97706;
            background: #fef3c7;
        }
        .island-tab-btn.active {
            background: #f59e0b;
            border-color: #f59e0b;
            color: #ffffff;
            box-shadow: 0 4px 12px rgba(245, 158, 11, 0.3);
        }
        .home-province-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.25s ease;
            box-shadow: 0 2px 6px rgba(0,0,0,0.02);
            margin-bottom: 16px;
        }
        .home-province-card:hover {
            border-color: #cbd5e1;
            box-shadow: 0 4px 16px rgba(0,0,0,0.05);
        }
        .prov-header-toggle {
            padding: 14px 18px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
            background: #f8fafc;
            border-bottom: 1px solid transparent;
            flex-wrap: wrap;
            gap: 10px;
            transition: background 0.2s ease;
        }
        .prov-header-toggle.is-open {
            background: #fef3c7;
            border-bottom-color: #fde68a;
        }
        .prov-preview-bar {
            padding: 8px 18px;
            background: #ffffff;
            border-bottom: 1px solid #f1f5f9;
            font-size: 0.77rem;
            color: #64748b;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 6px;
        }
        .prov-preview-tag {
            background: #f1f5f9;
            color: #334155;
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 0.73rem;
            font-weight: 600;
        }
        .prov-drawer-body {
            padding: 18px;
            background: #ffffff;
            border-top: 1px solid #e2e8f0;
        }
        .kabkot-card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 12px;
        }
        .home-kabkot-box {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 12px 14px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: all 0.2s ease;
        }
        .home-kabkot-box:hover {
            background: #ffffff;
            border-color: #cbd5e1;
            box-shadow: 0 4px 12px rgba(0,0,0,0.04);
        }
        .home-kec-pill {
            font-size: 0.72rem;
            color: #334155;
            background: #ffffff;
            border: 1px solid #cbd5e1;
            padding: 2px 7px;
            border-radius: 4px;
            text-decoration: none;
            transition: all 0.15s ease;
            display: inline-block;
        }
        .home-kec-pill:hover {
            border-color: #f59e0b;
            color: #d97706;
            background: #fef3c7;
        }
    </style>

    <section class="section-py wilayah-section-wrap" id="wilayah">
        <div class="container">
            <div class="section-header" style="text-align: center; margin-bottom: 32px;">
                <span class="section-tag">Jangkauan Layanan 38 Provinsi • 514 Kab/Kota • Seluruh Kecamatan</span>
                <h2 class="section-title">Direktori Wilayah Pelatihan Drone Seluruh Indonesia</h2>
                <p class="section-desc" style="max-width: 840px; margin: 0 auto;">
                    Kami menyelenggarakan pelatihan reguler maupun in-house training sertifikasi Sertifikasi Resmi di seluruh 38 provinsi di Indonesia hingga ke tingkat kabupaten, kota, dan kecamatan. Klik pada nama wilayah untuk melihat jadwal, kuota, dan artikel teknis spesifik di daerah Anda:
                </p>
            </div>

            @php
                // Build lightweight structure for Cascading Explorer & Live Search
                $regionsExplorerData = [];
                foreach($provinces as $pSlug => $pr) {
                    $kabkotItems = [];
                    foreach($pr['kabkot'] as $kk) {
                        $kabkotItems[] = [
                            'name' => $kk['name'],
                            'slug' => $kk['slug'],
                            'kecamatan' => $kk['kecamatan'] ?? [],
                        ];
                    }
                    $regionsExplorerData[$pr['slug']] = [
                        'name' => $pr['name'],
                        'slug' => $pr['slug'],
                        'island' => $pr['island'],
                        'total_kabkot' => $pr['total_kabkot'],
                        'kabkot' => $kabkotItems,
                    ];
                }

                $islands = [
                    'Sumatera' => ['Aceh', 'Sumatera Utara', 'Sumatera Barat', 'Riau', 'Kepulauan Riau', 'Jambi', 'Sumatera Selatan', 'Kepulauan Bangka Belitung', 'Bengkulu', 'Lampung'],
                    'Jawa' => ['DKI Jakarta', 'Jawa Barat', 'Banten', 'Jawa Tengah', 'DI Yogyakarta', 'Jawa Timur'],
                    'Bali & Nusa Tenggara' => ['Bali', 'Nusa Tenggara Barat', 'Nusa Tenggara Timur'],
                    'Kalimantan' => ['Kalimantan Barat', 'Kalimantan Tengah', 'Kalimantan Selatan', 'Kalimantan Timur', 'Kalimantan Utara'],
                    'Sulawesi' => ['Sulawesi Utara', 'Gorontalo', 'Sulawesi Tengah', 'Sulawesi Barat', 'Sulawesi Selatan', 'Sulawesi Tenggara'],
                    'Maluku & Papua' => ['Maluku', 'Maluku Utara', 'Papua', 'Papua Barat', 'Papua Selatan', 'Papua Tengah', 'Papua Pegunungan', 'Papua Barat Daya']
                ];

                // Showcase top provinces open by default so visitors immediately see Kab/Kot and Kecamatan
                $defaultOpenProvinces = [
                    'Aceh', 'Sumatera Utara', 'DKI Jakarta', 'Jawa Barat', 'Bali', 'Kalimantan Timur', 'Sulawesi Selatan', 'Papua'
                ];
            @endphp

            <!-- 1. KOTAK SELEKSI CEPAT TINGKAT PROVINSI, KABKOT & KECAMATAN -->
            <div style="background: linear-gradient(135deg, #0a192f 0%, #0f2347 100%); border-radius: 18px; padding: 26px 28px; margin-bottom: 34px; box-shadow: 0 16px 36px -10px rgba(15, 35, 71, 0.25); color: #ffffff; border: 1px solid rgba(251, 191, 36, 0.3);">
                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 18px; flex-wrap: wrap; gap: 12px;">
                    <div>
                        <div style="font-size: 0.76rem; font-weight: 800; color: #fbbf24; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 4px;">
                            <i class="bi bi-compass-fill"></i> Fitur Eksplorasi Interaktif
                        </div>
                        <h3 style="font-size: 1.25rem; font-weight: 800; color: #ffffff; margin: 0;">
                            Pencarian Cepat Tingkat Provinsi, Kota & Kecamatan
                        </h3>
                    </div>
                    <span style="font-size: 0.78rem; background: rgba(245, 158, 11, 0.2); color: #fde68a; padding: 4px 14px; border-radius: 20px; border: 1px solid rgba(251, 191, 36, 0.35); font-weight: 700;">
                        <i class="bi bi-lightning-charge-fill" style="color: #f59e0b;"></i> Langsung ke Halaman Wilayah
                    </span>
                </div>

                <!-- 3-Dropdown Grid -->
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)) 160px; gap: 12px; align-items: end; margin-bottom: 18px;">
                    <div>
                        <label style="font-size: 0.78rem; font-weight: 700; color: #cbd5e1; margin-bottom: 6px; display: block;">1. Pilih Provinsi:</label>
                        <select id="homeProvSelect" class="form-control" style="background: #ffffff; color: #0f172a; padding: 11px 14px; border-radius: 8px; font-weight: 600; font-size: 0.88rem; width: 100%; border: none;">
                            <option value="">-- Pilih Provinsi --</option>
                            @foreach($provinces as $p)
                                <option value="{{ $p['slug'] }}">{{ $p['name'] }} ({{ $p['total_kabkot'] }} Wilayah)</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label style="font-size: 0.78rem; font-weight: 700; color: #cbd5e1; margin-bottom: 6px; display: block;">2. Pilih Kabupaten / Kota:</label>
                        <select id="homeKabkotSelect" class="form-control" style="background: #ffffff; color: #0f172a; padding: 11px 14px; border-radius: 8px; font-weight: 600; font-size: 0.88rem; width: 100%; border: none;" disabled>
                            <option value="">-- Pilih Kabupaten / Kota --</option>
                        </select>
                    </div>

                    <div>
                        <label style="font-size: 0.78rem; font-weight: 700; color: #cbd5e1; margin-bottom: 6px; display: block;">3. Pilih Kecamatan:</label>
                        <select id="homeKecamatanSelect" class="form-control" style="background: #ffffff; color: #0f172a; padding: 11px 14px; border-radius: 8px; font-weight: 600; font-size: 0.88rem; width: 100%; border: none;" disabled>
                            <option value="">-- Pilih Kecamatan --</option>
                        </select>
                    </div>

                    <div>
                        <button type="button" id="homeGoRegionBtn" class="btn-primary-green" style="width: 100%; justify-content: center; padding: 12px 16px; font-size: 0.88rem; box-shadow: 0 4px 16px rgba(245, 158, 11, 0.45); white-space: nowrap;">
                            <i class="bi bi-box-arrow-up-right"></i> Buka Wilayah
                        </button>
                    </div>
                </div>

                <!-- Live Keyword Search Filter -->
                <div style="position: relative;">
                    <i class="bi bi-search" style="position: absolute; left: 16px; top: 50%; transform: translateY(-50%); color: #94a3b8;"></i>
                    <input type="text" id="homeLiveRegionSearch" class="form-control" placeholder="Atau ketik nama Kota, Kabupaten, atau Kecamatan (misal: Bandung, Karawang, Cikarang, Surabaya, Medan, Balikpapan)..." style="background: rgba(255,255,255,0.96); color: #0f172a; padding: 11px 16px 11px 42px; border-radius: 8px; font-size: 0.88rem; width: 100%; border: none;">
                    
                    <!-- Search Results Popup Box -->
                    <div id="homeSearchResultsBox" style="display: none; position: absolute; left: 0; right: 0; top: 105%; background: #ffffff; border-radius: 12px; box-shadow: 0 14px 35px rgba(0,0,0,0.25); z-index: 100; max-height: 320px; overflow-y: auto; padding: 10px; border: 1px solid #cbd5e1;">
                        <!-- Rendered by JS -->
                    </div>
                </div>
            </div>

            <!-- 2. ISLAND FILTER TABS & GLOBAL CONTROLS -->
            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 24px; flex-wrap: wrap; gap: 12px;">
                <div style="display: flex; flex-wrap: wrap; gap: 8px;" id="islandFilterTabs">
                    <button type="button" class="island-tab-btn active" data-island="all">
                        Semua Pulau (38)
                    </button>
                    @foreach($islands as $iName => $pList)
                        <button type="button" class="island-tab-btn" data-island="{{ Str::slug($iName) }}">
                            {{ $iName }} ({{ count($pList) }})
                        </button>
                    @endforeach
                </div>

                <div style="display: flex; gap: 8px;">
                    <button type="button" id="btnExpandAllProvs" style="font-size: 0.78rem; font-weight: 700; color: #d97706; background: #fef3c7; border: 1px solid #fde68a; padding: 7px 14px; border-radius: 6px; cursor: pointer;">
                        <i class="bi bi-arrows-expand"></i> Buka Semua Kab/Kota & Kec
                    </button>
                    <button type="button" id="btnCollapseAllProvs" style="font-size: 0.78rem; font-weight: 700; color: #64748b; background: #f1f5f9; border: 1px solid #cbd5e1; padding: 7px 14px; border-radius: 6px; cursor: pointer;">
                        <i class="bi bi-arrows-collapse"></i> Tutup Semua
                    </button>
                </div>
            </div>

            <!-- 3. ISLAND GROUPED PROVINCES WITH KAB/KOT & KECAMATAN DETAILS -->
            @foreach($islands as $islandName => $provNames)
                <div class="island-group-block" data-island="{{ Str::slug($islandName) }}" style="margin-bottom: 34px;">
                    <h3 style="font-size: 1.18rem; font-weight: 800; color: #0f172a; margin-bottom: 14px; display: flex; align-items: center; gap: 8px; border-bottom: 2px solid #f1f5f9; padding-bottom: 8px;">
                        <i class="bi bi-geo-alt-fill" style="color: #f59e0b;"></i> Wilayah {{ $islandName }}
                    </h3>

                    <div style="display: flex; flex-direction: column; gap: 14px;">
                        @foreach($provNames as $pName)
                            @php
                                $provObj = null;
                                foreach($provinces as $pr) {
                                    if(strtolower(trim($pr['name'])) === strtolower(trim($pName))) {
                                        $provObj = $pr;
                                        break;
                                    }
                                }
                                $isOpen = in_array($pName, $defaultOpenProvinces);
                            @endphp
                            @if($provObj)
                                <div class="home-province-card">
                                    <!-- Card Header (Click to toggle accordion) -->
                                    <div class="prov-header-toggle {{ $isOpen ? 'is-open' : '' }}">
                                        <div style="display: flex; align-items: center; gap: 10px;">
                                            <div style="width: 34px; height: 34px; background: #fef3c7; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #d97706; font-size: 0.95rem;">
                                                <i class="bi bi-map-fill"></i>
                                            </div>
                                            <div>
                                                <span style="font-size: 0.98rem; font-weight: 800; color: #0f172a;">{{ $provObj['name'] }}</span>
                                                <span class="badge" style="font-size: 0.74rem; font-weight: 700; color: #d97706; background: #fef3c7; padding: 3px 8px; border-radius: 12px; margin-left: 6px; border: 1px solid #fde68a;">
                                                    {{ $provObj['total_kabkot'] }} Kab/Kota • Tingkat Kecamatan
                                                </span>
                                            </div>
                                        </div>

                                        <div style="display: flex; align-items: center; gap: 10px;">
                                            <a href="{{ url('/wilayah/' . $provObj['slug']) }}" class="btn-sm" style="font-size: 0.78rem; font-weight: 700; color: #d97706; background: #ffffff; border: 1px solid #fde68a; padding: 5px 12px; border-radius: 6px; text-decoration: none; display: inline-flex; align-items: center; gap: 4px;" onclick="event.stopPropagation();">
                                                <span>Buka Provinsi</span> <i class="bi bi-box-arrow-up-right"></i>
                                            </a>
                                            <button type="button" class="btn-toggle-icon" style="background: none; border: none; font-size: 0.86rem; color: #64748b; cursor: pointer; display: flex; align-items: center; gap: 4px;">
                                                <span class="toggle-text" style="font-size: 0.76rem; font-weight: 700; color: {{ $isOpen ? '#d97706' : '#64748b' }};">{{ $isOpen ? 'Sembunyikan' : 'Lihat Kab/Kot & Kec' }}</span>
                                                <i class="bi bi-chevron-down toggle-chevron" style="transition: transform 0.25s ease; transform: {{ $isOpen ? 'rotate(180deg)' : 'rotate(0deg)' }};"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Quick Preview Bar (Visible directly on card) -->
                                    <div class="prov-preview-bar">
                                        <span style="font-weight: 700; color: #b45309; display: flex; align-items: center; gap: 4px;">
                                            <i class="bi bi-pin-map-fill"></i> Cakupan:
                                        </span>
                                        @foreach(array_slice($provObj['kabkot'], 0, 6) as $kkPre)
                                            <span class="prov-preview-tag">{{ $kkPre['name'] }}</span>
                                        @endforeach
                                        @if(count($provObj['kabkot']) > 6)
                                            <span style="font-size: 0.72rem; color: #d97706; font-weight: 700;">+{{ count($provObj['kabkot']) - 6 }} Kab/Kota lainnya</span>
                                        @endif
                                    </div>

                                    <!-- Card Body (Kabupaten & Kecamatan) -->
                                    <div class="prov-drawer-body" style="display: {{ $isOpen ? 'block' : 'none' }};">
                                        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 14px; flex-wrap: wrap; gap: 8px;">
                                            <div style="font-size: 0.84rem; font-weight: 800; color: #1e293b;">
                                                <i class="bi bi-buildings" style="color: #f59e0b; margin-right: 6px;"></i> Daftar Lengkap Kabupaten, Kota, & Kecamatan di {{ $provObj['name'] }}:
                                            </div>
                                            <a href="{{ url('/wilayah/' . $provObj['slug']) }}" style="font-size: 0.78rem; color: #d97706; font-weight: 700; text-decoration: none;">
                                                Buka Direktori Lengkap {{ $provObj['name'] }} &rarr;
                                            </a>
                                        </div>

                                        <!-- Grid of Kab/Kot Cards with Kecamatan Pills -->
                                        <div class="kabkot-card-grid">
                                            @foreach($provObj['kabkot'] as $kk)
                                                @php
                                                    $kkKecList = $kk['kecamatan'] ?? [];
                                                    $kabkotUrl = url('/wilayah/' . $provObj['slug'] . '/' . $kk['slug']);
                                                @endphp
                                                <div class="home-kabkot-box">
                                                    <div>
                                                        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 8px;">
                                                            <a href="{{ $kabkotUrl }}" style="font-size: 0.88rem; font-weight: 800; color: #0f172a; text-decoration: none; display: flex; align-items: center; gap: 6px;" title="Lihat pelatihan Drone di {{ $kk['name'] }}">
                                                                <i class="bi bi-geo-alt-fill" style="color: #f59e0b;"></i> {{ $kk['name'] }}
                                                            </a>
                                                            <span style="font-size: 0.68rem; font-weight: 700; color: #b45309; background: #fef3c7; padding: 2px 6px; border-radius: 4px; border: 1px solid #fde68a;">
                                                                {{ count($kkKecList) }} Kec
                                                            </span>
                                                        </div>

                                                        <!-- Kecamatan Pills -->
                                                        <div style="display: flex; flex-wrap: wrap; gap: 4px; margin-bottom: 10px;">
                                                            @foreach($kkKecList as $kec)
                                                                @php
                                                                    $kecSlug = Str::slug($kec);
                                                                    $kecUrl = url('/wilayah/' . $provObj['slug'] . '/' . $kk['slug'] . '/' . $kecSlug);
                                                                @endphp
                                                                <a href="{{ $kecUrl }}" class="home-kec-pill" title="Pelatihan Drone Kecamatan {{ $kec }}, {{ $kk['name'] }}">
                                                                    {{ $kec }}
                                                                </a>
                                                            @endforeach
                                                        </div>
                                                    </div>

                                                    <div style="border-top: 1px dashed #e2e8f0; padding-top: 8px; margin-top: 6px;">
                                                        <a href="{{ $kabkotUrl }}" style="font-size: 0.76rem; font-weight: 700; color: #d97706; text-decoration: none; display: flex; align-items: center; justify-content: space-between;">
                                                            <span>Lihat Jadwal & Direktori Panduan {{ $kk['name'] }}</span>
                                                            <i class="bi bi-chevron-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- FAQ (FREQUENTLY ASKED QUESTIONS) -->
    <section class="section-py" style="background: #f8fafc;">
        <div class="container" style="max-width: 900px;">
            <div class="section-header" style="text-align: center; margin-bottom: 36px;">
                <span class="section-tag">FAQ & Panduan Registrasi</span>
                <h2 class="section-title">Pertanyaan yang Sering Diajukan Seputar Training Drone</h2>
                <p class="section-desc">
                    Pertanyaan umum mengenai persyaratan sertifikasi, lisensi SIO Sertifikasi Resmi, perbedaan Kelas I dan Kelas II, hingga jadwal batch terdekat:
                </p>
            </div>

            <div style="display: flex; flex-direction: column; gap: 14px;">
                @foreach($faqs as $faq)
                    <div class="faq-item" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; overflow: hidden; transition: all 0.25s ease;">
                        <div class="faq-question" style="padding: 18px 22px; font-weight: 700; color: #0f172a; font-size: 0.98rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                            <span>{{ $faq->question }}</span>
                            <i class="bi bi-chevron-down" style="color: #d97706; font-size: 0.9rem; transition: transform 0.25s ease;"></i>
                        </div>
                        <div class="faq-answer" style="padding: 0 22px 18px; color: #64748b; font-size: 0.88rem; line-height: 1.7; display: none;">
                            <p style="margin: 0;">{{ $faq->answer }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div style="margin-top: 36px; text-align: center; background: #ffffff; border: 1px solid #fde68a; border-radius: 16px; padding: 24px;">
                <h4 style="font-size: 1.05rem; font-weight: 800; color: #0f172a; margin-bottom: 6px;">Masih Ada Pertanyaan Teknis Seputar Drone?</h4>
                <p style="font-size: 0.86rem; color: #64748b; margin-bottom: 16px;">Tim instruktur dan konsultan sertifikasi kami siap menjawab pertanyaan Anda 24/7 melalui sambungan WhatsApp resmi.</p>
                <a href="{{ $waLink }}" target="_blank" class="btn-primary-green" style="padding: 10px 24px; font-size: 0.88rem;">
                    <i class="bi bi-whatsapp"></i> Chat Konsultan Utama: 0813-9981-0272
                </a>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
    // HERO SLIDER CONTROLS (AUTOPLAY & MANUAL CONTROLS)
    (function() {
        let currentSlide = 1;
        const totalSlides = 3;
        const slides = document.querySelectorAll('.hero-slide');
        const chips = document.querySelectorAll('.hero-chip');
        const indicator = document.getElementById('heroSlideIndicator');
        const prevBtn = document.getElementById('heroPrevBtn');
        const nextBtn = document.getElementById('heroNextBtn');
        let autoPlayTimer = null;

        function showSlide(index) {
            currentSlide = index;
            slides.forEach(slide => {
                if (parseInt(slide.getAttribute('data-slide')) === index) {
                    slide.style.display = 'block';
                    slide.classList.add('active');
                } else {
                    slide.style.display = 'none';
                    slide.classList.remove('active');
                }
            });

            chips.forEach(chip => {
                if (parseInt(chip.getAttribute('data-target-slide')) === index) {
                    chip.style.background = 'rgba(245, 158, 11, 0.2)';
                    chip.style.borderColor = '#f59e0b';
                    chip.style.color = '#fbbf24';
                } else {
                    chip.style.background = 'rgba(255,255,255,0.06)';
                    chip.style.borderColor = 'rgba(255,255,255,0.15)';
                    chip.style.color = '#cbd5e1';
                }
            });

            if (indicator) {
                indicator.textContent = `Modul ${index} dari ${totalSlides}`;
            }
        }

        function nextSlide() {
            let next = currentSlide + 1;
            if (next > totalSlides) next = 1;
            showSlide(next);
        }

        function prevSlide() {
            let prev = currentSlide - 1;
            if (prev < 1) prev = totalSlides;
            showSlide(prev);
        }

        if (nextBtn) nextBtn.addEventListener('click', () => { nextSlide(); resetAutoplay(); });
        if (prevBtn) prevBtn.addEventListener('click', () => { prevSlide(); resetAutoplay(); });

        chips.forEach(chip => {
            chip.addEventListener('click', () => {
                const target = parseInt(chip.getAttribute('data-target-slide'));
                showSlide(target);
                resetAutoplay();
            });
        });

        function resetAutoplay() {
            clearInterval(autoPlayTimer);
            autoPlayTimer = setInterval(nextSlide, 7000);
        }

        autoPlayTimer = setInterval(nextSlide, 7000);

        // KEUNGGULAN CAROUSEL HORIZONTAL SCROLL
        const keunggulanSlider = document.getElementById('keunggulanSlider');
        const keunggulanPrev = document.getElementById('keunggulanPrev');
        const keunggulanNext = document.getElementById('keunggulanNext');

        if (keunggulanSlider && keunggulanPrev && keunggulanNext) {
            keunggulanNext.addEventListener('click', () => {
                keunggulanSlider.scrollBy({ left: 380, behavior: 'smooth' });
            });
            keunggulanPrev.addEventListener('click', () => {
                keunggulanSlider.scrollBy({ left: -380, behavior: 'smooth' });
            });
        }

        // FAQ ACCORDION TOGGLE
        document.querySelectorAll('.faq-item').forEach(item => {
            const question = item.querySelector('.faq-question');
            const answer = item.querySelector('.faq-answer');
            const icon = question.querySelector('i');

            question.addEventListener('click', () => {
                const isOpen = answer.style.display === 'block';
                // Close all others
                document.querySelectorAll('.faq-answer').forEach(a => a.style.display = 'none');
                document.querySelectorAll('.faq-question i').forEach(ic => ic.style.transform = 'rotate(0deg)');

                if (!isOpen) {
                    answer.style.display = 'block';
                    icon.style.transform = 'rotate(180deg)';
                }
            });
        });

        // ==========================================
        // HOME DIREKTORI WILAYAH ACCORDION & EXPLORER
        // ==========================================
        const regionsData = @json($regionsExplorerData ?? []);

        // 1. Accordion Toggle for Province Cards
        document.querySelectorAll('.prov-header-toggle').forEach(header => {
            header.addEventListener('click', function(e) {
                if (e.target.closest('a')) return;

                const card = this.closest('.home-province-card');
                const drawer = card.querySelector('.prov-drawer-body');
                const chevron = card.querySelector('.toggle-chevron');
                const toggleText = card.querySelector('.toggle-text');
                const isOpen = drawer.style.display === 'block';

                if (isOpen) {
                    drawer.style.display = 'none';
                    if (chevron) chevron.style.transform = 'rotate(0deg)';
                    if (toggleText) {
                        toggleText.textContent = 'Lihat Kab/Kot & Kec';
                        toggleText.style.color = '#64748b';
                    }
                    this.classList.remove('is-open');
                } else {
                    drawer.style.display = 'block';
                    if (chevron) chevron.style.transform = 'rotate(180deg)';
                    if (toggleText) {
                        toggleText.textContent = 'Sembunyikan';
                        toggleText.style.color = '#d97706';
                    }
                    this.classList.add('is-open');
                }
            });
        });

        // 2. Expand All & Collapse All
        const btnExpandAll = document.getElementById('btnExpandAllProvs');
        const btnCollapseAll = document.getElementById('btnCollapseAllProvs');

        if (btnExpandAll) {
            btnExpandAll.addEventListener('click', () => {
                document.querySelectorAll('.prov-drawer-body').forEach(d => d.style.display = 'block');
                document.querySelectorAll('.toggle-chevron').forEach(c => c.style.transform = 'rotate(180deg)');
                document.querySelectorAll('.toggle-text').forEach(t => {
                    t.textContent = 'Sembunyikan';
                    t.style.color = '#d97706';
                });
                document.querySelectorAll('.prov-header-toggle').forEach(h => h.classList.add('is-open'));
            });
        }
        if (btnCollapseAll) {
            btnCollapseAll.addEventListener('click', () => {
                document.querySelectorAll('.prov-drawer-body').forEach(d => d.style.display = 'none');
                document.querySelectorAll('.toggle-chevron').forEach(c => c.style.transform = 'rotate(0deg)');
                document.querySelectorAll('.toggle-text').forEach(t => {
                    t.textContent = 'Lihat Kab/Kot & Kec';
                    t.style.color = '#64748b';
                });
                document.querySelectorAll('.prov-header-toggle').forEach(h => h.classList.remove('is-open'));
            });
        }

        // 3. Island Filter Tabs
        const islandTabs = document.querySelectorAll('.island-tab-btn');
        const islandGroups = document.querySelectorAll('.island-group-block');

        islandTabs.forEach(tab => {
            tab.addEventListener('click', function() {
                islandTabs.forEach(t => {
                    t.style.background = '#f8fafc';
                    t.style.borderColor = '#cbd5e1';
                    t.style.color = '#475569';
                    t.classList.remove('active');
                });
                this.style.background = '#f59e0b';
                this.style.borderColor = '#f59e0b';
                this.style.color = '#ffffff';
                this.classList.add('active');

                const targetIsland = this.getAttribute('data-island');
                islandGroups.forEach(grp => {
                    if (targetIsland === 'all' || grp.getAttribute('data-island') === targetIsland) {
                        grp.style.display = 'block';
                    } else {
                        grp.style.display = 'none';
                    }
                });
            });
        });

        // Helper slugify
        function slugify(text) {
            return text.toString().toLowerCase()
                .replace(/\s+/g, '-')
                .replace(/[^\w\-]+/g, '')
                .replace(/\-\-+/g, '-')
                .replace(/^-+/, '')
                .replace(/-+$/, '');
        }

        // 4. Cascading Selectors (Prov -> Kabkot -> Kecamatan)
        const homeProvSelect = document.getElementById('homeProvSelect');
        const homeKabkotSelect = document.getElementById('homeKabkotSelect');
        const homeKecamatanSelect = document.getElementById('homeKecamatanSelect');
        const homeGoBtn = document.getElementById('homeGoRegionBtn');

        if (homeProvSelect && homeKabkotSelect && homeKecamatanSelect && homeGoBtn) {
            homeProvSelect.addEventListener('change', function() {
                const pSlug = this.value;
                homeKabkotSelect.innerHTML = '<option value="">-- Pilih Kabupaten / Kota --</option>';
                homeKecamatanSelect.innerHTML = '<option value="">-- Pilih Kecamatan --</option>';
                homeKecamatanSelect.disabled = true;

                if (!pSlug || !regionsData[pSlug]) {
                    homeKabkotSelect.disabled = true;
                    return;
                }

                homeKabkotSelect.disabled = false;
                const kabkots = regionsData[pSlug].kabkot || [];
                kabkots.forEach(k => {
                    const opt = document.createElement('option');
                    opt.value = k.slug;
                    opt.textContent = k.name;
                    homeKabkotSelect.appendChild(opt);
                });
            });

            homeKabkotSelect.addEventListener('change', function() {
                const pSlug = homeProvSelect.value;
                const kSlug = this.value;
                homeKecamatanSelect.innerHTML = '<option value="">-- Pilih Kecamatan --</option>';

                if (!kSlug || !regionsData[pSlug]) {
                    homeKecamatanSelect.disabled = true;
                    return;
                }

                const kabkot = (regionsData[pSlug].kabkot || []).find(k => k.slug === kSlug);
                if (!kabkot || !kabkot.kecamatan || kabkot.kecamatan.length === 0) {
                    homeKecamatanSelect.disabled = true;
                    return;
                }

                homeKecamatanSelect.disabled = false;
                kabkot.kecamatan.forEach(kc => {
                    const kcName = typeof kc === 'string' ? kc : kc.name;
                    const kcSlug = typeof kc === 'string' ? slugify(kc) : kc.slug;
                    const opt = document.createElement('option');
                    opt.value = kcSlug;
                    opt.textContent = 'Kec. ' + kcName;
                    homeKecamatanSelect.appendChild(opt);
                });
            });

            homeGoBtn.addEventListener('click', function() {
                const pSlug = homeProvSelect.value;
                const kSlug = homeKabkotSelect.value;
                const kcSlug = homeKecamatanSelect.value;

                if (!pSlug) {
                    alert('Silakan pilih provinsi terlebih dahulu.');
                    return;
                }

                if (kcSlug) {
                    window.location.href = `/wilayah/${pSlug}/${kSlug}/${kcSlug}`;
                } else if (kSlug) {
                    window.location.href = `/wilayah/${pSlug}/${kSlug}`;
                } else {
                    window.location.href = `/wilayah/${pSlug}`;
                }
            });
        }

        // 5. Live Search Input
        const liveSearchInput = document.getElementById('homeLiveRegionSearch');
        const searchResultsBox = document.getElementById('homeSearchResultsBox');

        if (liveSearchInput && searchResultsBox) {
            liveSearchInput.addEventListener('input', function() {
                const q = this.value.toLowerCase().trim();
                if (q.length < 2) {
                    searchResultsBox.style.display = 'none';
                    searchResultsBox.innerHTML = '';
                    return;
                }

                let matches = [];
                Object.values(regionsData).forEach(p => {
                    (p.kabkot || []).forEach(k => {
                        if (k.name.toLowerCase().includes(q)) {
                            matches.push({
                                type: 'Kabupaten/Kota',
                                label: k.name + ' (' + p.name + ')',
                                url: `/wilayah/${p.slug}/${k.slug}`,
                                badge: 'Kab/Kot'
                            });
                        }
                        (k.kecamatan || []).forEach(kc => {
                            const kcName = typeof kc === 'string' ? kc : kc.name;
                            const kcSlug = typeof kc === 'string' ? slugify(kc) : kc.slug;
                            if (kcName.toLowerCase().includes(q)) {
                                matches.push({
                                    type: 'Kecamatan',
                                    label: 'Kec. ' + kcName + ', ' + k.name + ' (' + p.name + ')',
                                    url: `/wilayah/${p.slug}/${k.slug}/${kcSlug}`,
                                    badge: 'Kecamatan'
                                });
                            }
                        });
                    });
                });

                if (matches.length === 0) {
                    searchResultsBox.innerHTML = '<div style="padding: 12px; color: #64748b; font-size: 0.85rem; text-align: center;">Tidak ada wilayah yang cocok dengan "' + q + '"</div>';
                    searchResultsBox.style.display = 'block';
                    return;
                }

                let html = '<div style="font-size: 0.74rem; font-weight: 700; color: #d97706; padding: 6px 10px; border-bottom: 1px solid #f1f5f9;">Ditemukan ' + matches.length + ' wilayah terkait:</div>';
                matches.slice(0, 15).forEach(m => {
                    html += `
                        <a href="${m.url}" style="padding: 9px 12px; display: flex; align-items: center; justify-content: space-between; text-decoration: none; color: #1e293b; font-size: 0.84rem; border-bottom: 1px solid #f8fafc; transition: background 0.15s ease;">
                            <span><i class="bi bi-geo-alt-fill" style="color: #f59e0b; margin-right: 6px;"></i> ${m.label}</span>
                            <span style="font-size: 0.7rem; font-weight: 700; color: #d97706; background: #fef3c7; padding: 2px 6px; border-radius: 4px;">${m.badge}</span>
                        </a>
                    `;
                });
                if (matches.length > 15) {
                    html += '<div style="padding: 8px; text-align: center; font-size: 0.75rem; color: #64748b;">...dan ' + (matches.length - 15) + ' wilayah lainnya.</div>';
                }

                searchResultsBox.innerHTML = html;
                searchResultsBox.style.display = 'block';
            });

            // Close on click outside
            document.addEventListener('click', function(e) {
                if (!e.target.closest('#homeLiveRegionSearch') && !e.target.closest('#homeSearchResultsBox')) {
                    searchResultsBox.style.display = 'none';
                }
            });
        }
    })();
</script>
@endpush
