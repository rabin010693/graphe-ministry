<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<?php 
    // Formatter tanggal sesuai locale aktif ('id' / 'en')
    $currentLocale = service('request')->getLocale();
    
    $rangeDateFormatter = new \IntlDateFormatter(
        $currentLocale,
        \IntlDateFormatter::MEDIUM,
        \IntlDateFormatter::NONE
    );

    $monthDateFormatter = new \IntlDateFormatter(
        $currentLocale,
        \IntlDateFormatter::NONE,
        \IntlDateFormatter::NONE,
        null,
        null,
        'MMM'
    );
?>

<!-- Header disesuaikan padding-nya agar tidak terlalu besar di mobile -->
<!-- <header class="hero py-4 py-md-5 bg-light border-bottom">
    <div class="container text-center py-3">
        <div class="eyebrow mb-2 text-danger fw-bold small tracking-wider" data-aos="fade-down"><?= lang('Events.eyebrow') ?></div>
        <h1 class="mx-auto fw-bold" style="max-width: 760px; font-size: clamp(1.8rem, 4vw, 2.5rem);" data-aos="fade-down" data-aos-delay="100">
            <?= lang('Events.title') ?>
        </h1>
    </div>
</header> -->

<header class="hero pb-5">
    <div class="container text-center pt-5 pb-5">
        <div class="eyebrow mb-3 text-uppercase" data-aos="fade-down" data-aos-duration="800"><?= lang('Events.eyebrow') ?></div>
        <h1 class="mx-auto" style="max-width:760px; font-size:2.2rem;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100"><?= lang('Events.title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"><?= lang('') ?></p>
    </div>
</header>

<section class="py-4 py-md-5">
    <div class="container" style="max-width: 800px;">

        <!-- Badge rentang tanggal dibuat agar teks panjang tidak merusak layout mobile -->
        <div class="mb-4 text-center" data-aos="fade-up">
            <span class="badge bg-danger px-3 py-2 fs-6 text-wrap lh-base">
                <i class="bi bi-calendar-week me-2"></i>
                <?= lang('Events.agenda_label') ?>: <?= $rangeDateFormatter->format(strtotime($startOfWeek)) ?> <?= lang('Events.to') ?> <?= $rangeDateFormatter->format(strtotime($endOfWeek)) ?>
            </span>
        </div>
        
        <div class="d-flex flex-column gap-3">
            <?php if (!empty($events)): ?>
                <?php 
                $delay = 100;
                foreach ($events as $item): 
                    $time  = strtotime($item['event_date']);
                    $day   = date('d', $time);
                    $month = strtoupper($monthDateFormatter->format($time));
                ?>
                    <!-- Kartu event -->
                    <div class="event-item d-flex align-items-start align-items-md-center gap-3 p-3 bg-white rounded-3 shadow-sm" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                        <!-- Kotak tanggal -->
                        <div class="event-date bg-dark text-white rounded-3 text-center d-flex flex-column justify-content-center align-items-center flex-shrink-0" style="width: 55px; height: 55px; min-width: 55px;">
                            <span class="day fw-bold fs-5 lh-1"><?= $day ?></span>
                            <span class="mon fw-semibold text-uppercase" style="font-size: 0.65rem;"><?= $month ?></span>
                        </div>
                        
                        <!-- Informasi Detail Event -->
                        <div class="flex-grow-1 overflow-hidden">
                            <h6 class="fw-bold mb-1 text-truncate-custom"><?= esc($item['title']) ?></h6>
                            
                            <!-- Waktu dan Lokasi -->
                            <div class="text-muted small d-flex flex-column flex-md-row align-items-start align-items-md-center gap-1 gap-md-2">
                                <span><i class="bi bi-clock me-1"></i><?= esc($item['event_time']) ?></span>
                                <?php if (!empty($item['location'])): ?>
                                    <span class="d-none d-md-inline">&bull;</span>
                                    <span><i class="bi bi-geo-alt me-1"></i><?= esc($item['location']) ?></span>
                                <?php endif; ?>
                            </div>

                            <?php if (!empty($item['description'])): ?>
                                <p class="text-secondary small mt-1 mb-0"><?= esc($item['description']) ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php 
                    $delay += 50;
                endforeach; 
                ?>
            <?php else: ?>
                <div class="text-center text-muted py-5" data-aos="fade-up" data-aos-delay="100">
                    <i class="bi bi-calendar-x fs-1 mb-2 d-block"></i>
                    <h5><?= lang('Events.empty') ?></h5>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?= $this->endSection() ?>