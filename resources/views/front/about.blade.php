@extends('layouts.front')

@section('title', 'Tentang Kami | Sejarah, Visi, Misi & Kredibilitas Training Drone Indonesia')
@section('meta_description', 'Profil lengkap, sejarah pendirian, visi, misi, dan kredibilitas pembinaan Pilot Drone Profesional, Pemetaan Fotogrametri RTK, Inspeksi Industri & Pertanian Presisi.')

@section('content')

    <!-- HERO ABOUT -->
    <section class="hero-section" style="padding: 56px 0 50px;">
        <div class="container">
            <div class="hero-badge">
                <i class="bi bi-airplane-engines"></i>
                Pusat Pelatihan & Sertifikasi Pilot Drone Profesional Nasional
            </div>

            <h1 class="hero-title" style="font-size: 2.35rem;">
                Membangun Keunggulan <span>Penerbangan Drone & Teknologi Geospasial</span> di Seluruh Indonesia
            </h1>

            <p class="hero-lead" style="max-width: 820px;">
                Mendedikasikan diri untuk meningkatkan standar kompetensi pilot drone, penguasaan regulasi ruang udara, fotogrametri presisi tinggi, inspeksi termal aset industri, serta adopsi drone sprayer modern berstandar keselamatan penerbangan zero accident.
            </p>
        </div>
    </section>

    <!-- SEJARAH, VISI & MISI SECTION -->
    <section class="section-py">
        <div class="container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 36px; margin-bottom: 56px; align-items: center;">
                <div>
                    <span class="section-tag" style="background: #fef3c7; color: #d97706; font-size: 0.76rem; font-weight: 800; padding: 4px 12px; border-radius: 20px; text-transform: uppercase;">Sejarah Kami</span>
                    <h2 class="section-title" style="font-size: 1.85rem; margin: 10px 0 18px;">
                        Pelopor Pembinaan Pilot Drone & Aplikasi UAV Industri di Indonesia
                    </h2>
                    <p style="font-size: 0.92rem; color: #475569; line-height: 1.7; margin-bottom: 14px;">
                        Pemanfaatan sistem pesawat udara tanpa awak (Unmanned Aerial Vehicle / UAV) telah berkembang pesat dari sekadar fotografi udara menjadi instrumen krusial dalam pemetaan topografi, inspeksi aset bertegangan tinggi, perkebunan presisi, hingga mitigasi bencana di seluruh penjuru Indonesia.
                    </p>
                    <p style="font-size: 0.92rem; color: #475569; line-height: 1.7; margin-bottom: 20px;">
                        Didirikan oleh para praktisi aviasi nirawak senior, surveyor geospasial, dan tenaga ahli thermography industri, <strong>Training Drone Indonesia</strong> hadir menjawab kebutuhan sertifikasi pilot drone profesional yang bertanggung jawab, patuh hukum ruang udara, dan mampu mengolah data hasil penerbangan menjadi informasi bisnis bernilai tinggi.
                    </p>
                    <div style="display: flex; gap: 18px; flex-wrap: wrap;">
                        <div style="background: #fef3c7; border-left: 4px solid #f59e0b; padding: 12px 18px; border-radius: 0 8px 8px 0;">
                            <div style="font-size: 1.3rem; font-weight: 800; color: #0f172a;">100%</div>
                            <div style="font-size: 0.78rem; color: #b45309; font-weight: 600;">Sertifikat Resmi & Remote Pilot Card</div>
                        </div>
                        <div style="background: #fef3c7; border-left: 4px solid #f59e0b; padding: 12px 18px; border-radius: 0 8px 8px 0;">
                            <div style="font-size: 1.3rem; font-weight: 800; color: #0f172a;">38</div>
                            <div style="font-size: 0.78rem; color: #b45309; font-weight: 600;">Provinsi Jangkauan Layanan</div>
                        </div>
                        <div style="background: #fef3c7; border-left: 4px solid #f59e0b; padding: 12px 18px; border-radius: 0 8px 8px 0;">
                            <div style="font-size: 1.3rem; font-weight: 800; color: #0f172a;">8.500+</div>
                            <div style="font-size: 0.78rem; color: #b45309; font-weight: 600;">Alumni Pilot & Surveyor Drone</div>
                        </div>
                    </div>
                </div>

                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: var(--radius-xl); padding: 32px; box-shadow: 0 8px 24px rgba(0,0,0,0.04);">
                    <div style="margin-bottom: 28px;">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 12px;">
                            <div style="width: 38px; height: 38px; background: #fef3c7; color: #d97706; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 1.25rem;">
                                <i class="bi bi-eye-fill"></i>
                            </div>
                            <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0;">Visi Lembaga</h3>
                        </div>
                        <p style="font-size: 0.9rem; color: #475569; line-height: 1.65; margin: 0;">
                            Menjadi pusat pelatihan, sertifikasi pilot drone, dan pengembangan teknologi nirawak nomor satu di Indonesia yang terpercaya, profesional, serta unggul dalam mengintegrasikan regulasi ruang udara dan inovasi geospasial modern.
                        </p>
                    </div>

                    <div style="border-top: 1px solid #f1f5f9; padding-top: 24px;">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 12px;">
                            <div style="width: 38px; height: 38px; background: #fef3c7; color: #d97706; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 1.25rem;">
                                <i class="bi bi-bullseye"></i>
                            </div>
                            <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0;">Misi Lembaga</h3>
                        </div>
                        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 10px; font-size: 0.88rem; color: #475569;">
                            <li style="display: flex; align-items: flex-start; gap: 8px;">
                                <i class="bi bi-check-circle-fill" style="color: #f59e0b; font-size: 1rem; margin-top: 2px;"></i>
                                <span>Menyelenggarakan sertifikasi kompetensi pilot drone resmi dengan instruktur bersertifikasi dan berpengalaman ratusan jam terbang.</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 8px;">
                                <i class="bi bi-check-circle-fill" style="color: #f59e0b; font-size: 1rem; margin-top: 2px;"></i>
                                <span>Menyediakan modul praktikum mutakhir: navigasi manual ATTI, pengukuran GNSS RTK Geodetik, pemrosesan fotogrametri 3D, radiometri inframerah termal, dan kalibrasi sprayer perkebunan.</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 8px;">
                                <i class="bi bi-check-circle-fill" style="color: #f59e0b; font-size: 1rem; margin-top: 2px;"></i>
                                <span>Membina budaya keselamatan penerbangan tanpa kompromi (zero incident) serta kepatuhan zona Kawasan Keselamatan Operasi Penerbangan (KKOP).</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 8px;">
                                <i class="bi bi-check-circle-fill" style="color: #f59e0b; font-size: 1rem; margin-top: 2px;"></i>
                                <span>Memperluas kemitraan strategis dengan sektor pertambangan, energi terbarukan, agrikultur, infrastruktur BUMN, dan swasta di 38 provinsi di Indonesia.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- LEGALITAS & AKREDITASI -->
            <div style="background: linear-gradient(145deg, #0a192f 0%, #0f2347 100%); color: #ffffff; border-radius: 20px; padding: 36px 32px; border: 1px solid rgba(245, 158, 11, 0.3); box-shadow: 0 12px 32px rgba(10, 25, 47, 0.4);">
                <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px;">
                    <div>
                        <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(245, 158, 11, 0.2); border: 1px solid rgba(251, 191, 36, 0.3); color: #fde68a; font-size: 0.74rem; font-weight: 800; padding: 4px 12px; border-radius: 20px; text-transform: uppercase; margin-bottom: 12px;">
                            <i class="bi bi-patch-check-fill"></i> Standar Penerbangan & Kredibilitas Resmi
                        </div>
                        <h3 style="font-size: 1.45rem; font-weight: 800; margin-bottom: 8px; color: #ffffff;">Standar Operasional & Kepatuhan Aviasi</h3>
                        <p style="font-size: 0.88rem; color: #fde68a; max-width: 680px; margin: 0; line-height: 1.6;">
                            Seluruh program pembinaan mengacu pada Standar Kompetensi Kerja Nasional Pilot Drone, Regulasi Ruang Udara Sipil, Zonasi KKOP, serta kaidah pengoperasian sistem pesawat udara tanpa awak (RPAS) profesional.
                        </p>
                    </div>
                    <div>
                        <a href="https://api.whatsapp.com/send?phone=6281399810272&text=Halo%20Admin%20Training%20Drone,%20saya%20ingin%20konsultasi%20jadwal%20dan%20pendaftaran%20sertifikasi%20pilot%20drone." target="_blank" class="btn-primary-green" style="font-size: 0.88rem; padding: 12px 22px;">
                            <i class="bi bi-whatsapp"></i> Hubungi Hotline Resmi
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
