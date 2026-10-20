@extends('layouts.front')

@section('title', 'Program Pelatihan & Sertifikasi Pilot Drone Profesional | Lisensi Remote Pilot Resmi')
@section('meta_description', 'Daftar 6 program resmi pelatihan Pilot Drone Profesional, Pemetaan Fotogrametri RTK, Inspeksi Termal Industri, Drone Sprayer Pertanian, Sinematografi FPV, dan Avionik Drone.')

@section('content')

    <!-- HERO PROGRAMS -->
    <section class="hero-section" style="padding: 56px 0 50px;">
        <div class="container">
            <div class="hero-badge">
                <i class="bi bi-airplane-engines"></i>
                Skema Sertifikasi Pilot Drone Resmi & Standar Aviasi
            </div>

            <h1 class="hero-title" style="font-size: 2.35rem;">
                Enam (6) Skema Resmi <span>Pelatihan Pilot Drone & Drone</span>
            </h1>

            <p class="hero-lead" style="max-width: 800px;">
                Tingkatkan kompetensi penerbangan drone dan sertifikasi keahlian Anda melalui kurikulum komprehensif, instruktur berlisensi resmi, dan unit praktik drone industri modern.
            </p>
        </div>
    </section>

    <!-- PROGRAM LIST -->
    <section class="section-py">
        <div class="container">
            <div class="programs-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 26px; margin-bottom: 50px;">
                @foreach($programs as $prog)
                    @php
                        $progObj = is_array($prog) ? (object)$prog : $prog;
                        $slug = $progObj->slug ?? '';
                        $detailUrl = route('program.detail', $slug);
                        $directWa = "https://api.whatsapp.com/send?phone=6281399810272&text=" . urlencode("Halo Admin Training Drone, saya ingin pendaftaran program {$progObj->title}.");
                    @endphp
                    <div class="program-card" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; display: flex; flex-direction: column; box-shadow: 0 4px 12px rgba(0,0,0,0.03);">
                        <div class="program-body" style="padding: 24px; display: flex; flex-direction: column; flex-grow: 1;">
                            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 12px;">
                                <span style="background: #fef3c7; color: #d97706; font-size: 0.72rem; font-weight: 800; padding: 4px 10px; border-radius: 6px; text-transform: uppercase;">
                                    {{ $progObj->badge ?? 'Sertifikasi BNSP RI' }}
                                </span>
                                <span style="font-size: 0.78rem; font-weight: 700; color: #64748b;">
                                    <i class="bi bi-clock-history" style="color: #f59e0b;"></i> {{ $progObj->duration ?? '3 Hari' }}
                                </span>
                            </div>

                            <h3 class="program-title" style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin-bottom: 10px; line-height: 1.4;">
                                <a href="{{ $detailUrl }}" style="color: inherit;">{{ $progObj->title }}</a>
                            </h3>

                            <p class="program-desc" style="font-size: 0.86rem; color: #64748b; line-height: 1.6; margin-bottom: 18px; flex-grow: 1;">
                                {{ Str::limit($progObj->short_description ?? ($progObj->full_description ?? ''), 130) }}
                            </p>

                            <div style="font-size: 0.78rem; color: #334155; background: #f8fafc; padding: 8px 12px; border-radius: 8px; margin-bottom: 18px;">
                                <strong><i class="bi bi-person-check-fill" style="color: #d97706;"></i> Sasaran:</strong> {{ Str::limit(is_array($progObj->target_audience) ? implode(', ', $progObj->target_audience) : ($progObj->target_audience ?? 'Pilot Drone, Surveyor Geodesi, Inspektur QA/QC, Operator Perkebunan, Safety Officer'), 75) }}
                            </div>

                            <div class="program-footer-btn" style="display: flex; gap: 8px; padding-top: 14px; border-top: 1px solid #f1f5f9;">
                                <a href="{{ $detailUrl }}" class="btn-card-detail" style="flex: 1; text-align: center; background: #f1f5f9; color: #1e293b; padding: 9px 12px; border-radius: 8px; font-size: 0.82rem; font-weight: 700; display: inline-flex; align-items: center; justify-content: center; gap: 6px;">
                                    <i class="bi bi-info-circle"></i> Detail & Daerah
                                </a>
                                <a href="{{ $directWa }}" target="_blank" class="btn-card-wa" style="flex: 1; text-align: center; background: #f59e0b; color: #ffffff; padding: 9px 12px; border-radius: 8px; font-size: 0.82rem; font-weight: 700; display: inline-flex; align-items: center; justify-content: center; gap: 6px;" title="Konsultasi WhatsApp">
                                    <i class="bi bi-whatsapp"></i> Chat WA
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- 4 WHATSAPP HOTLINES -->
            <div class="wa-hotlines-box" style="background: linear-gradient(145deg, #0a192f 0%, #0f2347 100%); border-radius: 18px; padding: 32px; color: #ffffff;">
                <div class="wa-hotlines-header" style="text-align: center; max-width: 680px; margin: 0 auto 26px;">
                    <h3 style="font-size: 1.35rem; font-weight: 800; color: #ffffff; margin-bottom: 8px;">
                        <i class="bi bi-headset" style="color: #fbbf24; margin-right: 8px;"></i> 4 Hotline WhatsApp Layanan Konsultasi & Pendaftaran
                    </h3>
                    <p style="font-size: 0.88rem; color: #cbd5e1;">Hubungi petugas spesialis kami untuk konfirmasi ketersediaan kuota, silabus rinci, atau in-house training perusahaan:</p>
                </div>

                <div class="wa-hotlines-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 16px;">
                    @foreach($waNumbers as $hotline)
                        <a href="{{ $hotline['url'] }}" target="_blank" class="wa-hotline-card" style="background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.14); border-radius: 12px; padding: 18px; color: #ffffff; display: flex; flex-direction: column;">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                <div style="width: 36px; height: 36px; background: rgba(251, 191, 36, 0.2); color: #fbbf24; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 1.1rem;">
                                    <i class="bi {{ $hotline['icon'] }}"></i>
                                </div>
                                <span style="font-size: 0.72rem; font-weight: 800; background: rgba(251, 191, 36, 0.2); color: #fbbf24; padding: 2px 8px; border-radius: 4px;">{{ $hotline['badge'] }}</span>
                            </div>
                            <div style="font-size: 0.95rem; font-weight: 800; margin-bottom: 4px;">{{ $hotline['title'] }}</div>
                            <div style="font-size: 0.78rem; color: #cbd5e1; margin-bottom: 14px; flex-grow: 1;">{{ $hotline['desc'] }}</div>
                            <div style="font-size: 0.88rem; font-weight: 800; color: #fbbf24; display: flex; align-items: center; gap: 6px; font-family: monospace;">
                                <i class="bi bi-whatsapp"></i> {{ $hotline['number'] }}
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- 38 PROVINCES SELECTOR -->
            <div style="margin-top: 56px;">
                <div class="section-header" style="text-align: center; max-width: 760px; margin: 0 auto 30px;">
                    <span class="section-tag" style="background: #fef3c7; color: #d97706; font-size: 0.76rem; font-weight: 800; padding: 4px 12px; border-radius: 20px; text-transform: uppercase;">Direktori Wilayah</span>
                    <h2 class="section-title" style="font-size: 1.85rem; font-weight: 800; color: #0f172a; margin: 8px 0;">Pilih Wilayah Pelatihan di 38 Provinsi</h2>
                    <p class="section-desc" style="color: #64748b; font-size: 0.92rem;">
                        Setiap wilayah memiliki jadwal pelatihan, direktori kabupaten/kota, dan panduan teknis Training Drone.
                    </p>
                </div>

                <div class="provinces-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(240px, 1fr)); gap: 12px;">
                    @foreach($provinces as $prov)
                        <a href="{{ route('wilayah.provinsi', $prov['slug']) }}" class="province-chip" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 12px 16px; display: flex; align-items: center; justify-content: space-between; font-size: 0.86rem; font-weight: 600; color: #1e293b; text-decoration: none; transition: all 0.2s ease;">
                            <span>{{ $prov['name'] }}</span>
                            <i class="bi bi-arrow-right-short" style="font-size: 1.25rem; color: #f59e0b;"></i>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
