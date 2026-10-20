@extends('layouts.front')

@section('title', ($program->title ?? 'Program Pelatihan') . ' | Training Drone Sertifikasi Resmi & Lisensi SIO Sertifikasi Resmi')
@section('meta_description', Str::limit($program->short_description ?? ($program->full_description ?? ''), 160))

@section('content')

    <!-- HERO PROGRAM DETAIL -->
    <section class="hero-section" style="padding: 50px 0 46px; text-align: left;">
        <div class="container">
            <div style="font-size: 0.82rem; color: #fde68a; margin-bottom: 18px; display: flex; align-items: center; gap: 8px; flex-wrap: wrap;">
                <a href="{{ route('home') }}" style="color: #cbd5e1;"><i class="bi bi-house-door"></i> Beranda</a>
                <span>/</span>
                <a href="{{ route('programs') }}" style="color: #cbd5e1;">Program Pelatihan</a>
                <span>/</span>
                <span style="color: #ffffff; font-weight: 700;">{{ $program->title }}</span>
            </div>

            <div class="hero-badge">
                <i class="bi bi-shield-check"></i>
                {{ $program->level_name ?? 'Sertifikasi Sertifikasi Resmi Pilot Drone' }}
            </div>

            <h1 class="hero-title" style="margin-left: 0; font-size: 2.35rem; margin-bottom: 14px;">
                {{ $program->title }}
            </h1>

            <p class="hero-lead" style="margin-left: 0; max-width: 860px; margin-bottom: 24px;">
                {{ $program->short_description ?? $program->full_description }}
            </p>

            <div class="hero-cta" style="justify-content: flex-start; margin-bottom: 0;">
                <a href="{{ $waLink }}" target="_blank" class="btn-primary-green">
                    <i class="bi bi-whatsapp"></i>
                    Konsultasi & Daftar: 081399810272
                </a>
                <a href="#wilayah-daerah" class="btn-outline-white">
                    <i class="bi bi-geo-alt-fill"></i>
                    Pilih Wilayah Pelatihan (38 Provinsi)
                </a>
            </div>
        </div>
    </section>

    <!-- CONTENT WRAPPER -->
    <section class="section-py">
        <div class="container">
            <div class="content-sidebar-grid" style="margin-bottom: 48px;">
                
                <!-- Main Content -->
                <div>
                    <!-- Deskripsi Lengkap -->
                    <div class="article-content-card" style="margin-bottom: 28px;">
                        <h2 style="font-size: 1.4rem; font-weight: 800; color: #0f172a; margin-bottom: 16px; display: flex; align-items: center; gap: 10px;">
                            <i class="bi bi-file-text-fill" style="color: #f59e0b;"></i> Deskripsi & Tujuan Pembinaan
                        </h2>
                        <div style="font-size: 0.92rem; color: #475569; line-height: 1.8; margin-bottom: 24px;">
                            <p>{{ $program->full_description ?? $program->short_description }}</p>
                        </div>

                        <!-- Silabus & Kurikulum -->
                        <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin-bottom: 16px; border-top: 1px solid #f1f5f9; padding-top: 24px;">
                            Silabus & Modul Pembelajaran Teknis
                        </h3>
                        <p style="font-size: 0.86rem; color: #64748b; margin-bottom: 18px;">
                            Kurikulum mengacu pada Standar Kompetensi Remote Pilot Drone Nasional, Regulasi Ruang Udara, Keselamatan Operasi Penerbangan UAV, dan Standar Asosiasi Pilot Drone Internasional:
                        </p>

                        <div style="display: flex; flex-direction: column; gap: 10px;">
                            @php
                                $cData = $program->curriculum ?? [];
                                if (is_string($cData)) {
                                    $cList = array_filter(array_map('trim', explode("\n", $cData)));
                                } elseif (is_array($cData)) {
                                    $cList = $cData;
                                } else {
                                    $cList = [];
                                }
                            @endphp
                            @foreach($cList as $idx => $item)
                                <div style="display: flex; align-items: flex-start; gap: 14px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 12px 16px;">
                                    <span style="width: 26px; height: 26px; background: #0f172a; color: #fde68a; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.75rem; font-weight: 800; flex-shrink: 0;">
                                        {{ $idx + 1 }}
                                    </span>
                                    <span style="font-size: 0.88rem; font-weight: 600; color: #1e293b; margin-top: 2px;">
                                        {{ $item }}
                                    </span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Persyaratan Peserta -->
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: var(--radius-xl); padding: 28px; box-shadow: 0 2px 8px rgba(0,0,0,0.03);">
                        <h3 style="font-size: 1.2rem; font-weight: 800; color: #0f172a; margin-bottom: 14px; display: flex; align-items: center; gap: 10px;">
                            <i class="bi bi-card-checklist" style="color: #f59e0b;"></i> Persyaratan Wajib Peserta
                        </h3>
                        <ul style="list-style: none; display: flex; flex-direction: column; gap: 10px; font-size: 0.88rem; color: #475569; padding: 0;">
                            @php
                                $rData = $program->requirements ?? [];
                                if (is_string($rData)) {
                                    $rList = array_filter(array_map('trim', explode("\n", $rData)));
                                } elseif (is_array($rData)) {
                                    $rList = $rData;
                                } else {
                                    $rList = [];
                                }
                            @endphp
                            @if(count($rList) > 0)
                                @foreach($rList as $req)
                                    <li style="display: flex; align-items: flex-start; gap: 10px;">
                                        <i class="bi bi-check2-circle" style="color: #f59e0b; font-size: 1.1rem; flex-shrink: 0;"></i>
                                        <span>{{ $req }}</span>
                                    </li>
                                @endforeach
                            @else
                                <li style="display: flex; align-items: flex-start; gap: 10px;">
                                    <i class="bi bi-check2-circle" style="color: #f59e0b; font-size: 1.1rem; flex-shrink: 0;"></i>
                                    <span>Pendidikan minimal SLTA/SMK/D3/S1 terbuka untuk semua jurusan teknik maupun umum.</span>
                                </li>
                                <li style="display: flex; align-items: flex-start; gap: 10px;">
                                    <i class="bi bi-check2-circle" style="color: #f59e0b; font-size: 1.1rem; flex-shrink: 0;"></i>
                                    <span>Sehat jasmani dan rohani, tidak memiliki gangguan penglihatan warna (bebas buta warna total).</span>
                                </li>
                                <li style="display: flex; align-items: flex-start; gap: 10px;">
                                    <i class="bi bi-check2-circle" style="color: #f59e0b; font-size: 1.1rem; flex-shrink: 0;"></i>
                                    <span>Fotokopi KTP dan pas foto resmi 3x4 latar belakang merah (4 lembar).</span>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>

                <!-- Sidebar Ringkasan -->
                <div>
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: var(--radius-xl); padding: 26px; position: sticky; top: 96px; box-shadow: 0 4px 16px rgba(0,0,0,0.04);">
                        <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin-bottom: 20px; border-bottom: 1px solid #f1f5f9; padding-bottom: 12px;">
                            Ringkasan Program
                        </h3>

                        <ul style="list-style: none; display: flex; flex-direction: column; gap: 16px; margin-bottom: 24px; padding: 0;">
                            <li style="display: flex; align-items: flex-start; gap: 12px;">
                                <i class="bi bi-clock-fill" style="color: #f59e0b; font-size: 1.15rem;"></i>
                                <div>
                                    <div style="font-size: 0.74rem; color: #94a3b8; text-transform: uppercase; font-weight: 700;">Durasi Pembinaan</div>
                                    <div style="font-size: 0.88rem; font-weight: 700; color: #0f172a;">{{ $program->duration ?? '3 Hari (24 Jam Pelajaran)' }}</div>
                                </div>
                            </li>

                            <li style="display: flex; align-items: flex-start; gap: 12px;">
                                <i class="bi bi-award-fill" style="color: #f59e0b; font-size: 1.15rem;"></i>
                                <div>
                                    <div style="font-size: 0.74rem; color: #94a3b8; text-transform: uppercase; font-weight: 700;">Badan Sertifikasi</div>
                                    <div style="font-size: 0.88rem; font-weight: 700; color: #0f172a;">{{ $program->certification_body ?? 'Sertifikasi Resmi Pilot Drone' }}</div>
                                </div>
                            </li>

                            <li style="display: flex; align-items: flex-start; gap: 12px;">
                                <i class="bi bi-shield-lock-fill" style="color: #f59e0b; font-size: 1.15rem;"></i>
                                <div>
                                    <div style="font-size: 0.74rem; color: #94a3b8; text-transform: uppercase; font-weight: 700;">Alat Praktik</div>
                                    <div style="font-size: 0.88rem; font-weight: 700; color: #0f172a;">Audiometer & Spirometer Kalibrasi Kemenkes & Gas Detector 4-in-1 300 Bar</div>
                                </div>
                            </li>
                        </ul>

                        <a href="{{ $waLink }}" target="_blank" class="btn-primary-green" style="width: 100%; justify-content: center; margin-bottom: 10px;">
                            <i class="bi bi-whatsapp"></i> Daftar Sekarang via WA
                        </a>

                        <a href="{{ route('contact') }}" class="btn-card-detail" style="width: 100%; display: block;">
                            <i class="bi bi-envelope"></i> Permohonan Proposal B2B
                        </a>
                    </div>
                </div>
            </div>

            <!-- 4 WHATSAPP HOTLINES (USER REQUIREMENT) -->
            <div class="wa-hotlines-box">
                <div class="wa-hotlines-header">
                    <h3><i class="bi bi-telephone-inbound-fill" style="color: var(--accent-mint); margin-right: 8px;"></i> 4 Nomor WhatsApp Resmi Layanan Pendaftaran & Konsultasi</h3>
                    <p>Hubungi hotline resmi kami di bawah ini untuk konsultasi langsung mengenai {{ $program->title }}:</p>
                </div>

                <div class="wa-hotlines-grid">
                    @foreach($waNumbers as $hotline)
                        <a href="{{ $hotline['url'] }}" target="_blank" class="wa-hotline-card">
                            <div class="wa-hotline-top">
                                <div class="wa-hotline-icon">
                                    <i class="bi {{ $hotline['icon'] }}"></i>
                                </div>
                                <span class="wa-hotline-badge">{{ $hotline['badge'] }}</span>
                            </div>
                            <div class="wa-hotline-title">{{ $hotline['title'] }}</div>
                            <div class="wa-hotline-desc">{{ $hotline['desc'] }}</div>
                            <div class="wa-hotline-phone">
                                <i class="bi bi-whatsapp"></i> {{ $hotline['number'] }}
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- REGIONAL SELECTOR (38 PROVINCES FOR THIS PROGRAM) -->
            <div id="wilayah-daerah" style="margin-top: 56px;">
                <div class="section-header">
                    <span class="section-tag">Direktori Wilayah</span>
                    <h2 class="section-title">Pilih Wilayah Pelatihan {{ $program->title }}</h2>
                    <p class="section-desc">
                        Klik provinsi tempat perusahaan atau tempat tinggal Anda untuk melihat jadwal dan panduan modul panduan di setiap daerah.
                    </p>
                </div>

                <div class="provinces-grid">
                    @foreach($provinces as $prov)
                        <a href="{{ route('wilayah.provinsi.program', [$prov['slug'], $program->slug]) }}" class="province-chip">
                            <span>{{ $prov['name'] }}</span>
                            <i class="bi bi-chevron-right" style="font-size: 0.9rem; color: #f59e0b;"></i>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
