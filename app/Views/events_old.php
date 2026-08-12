<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<?php 
$events = [
    [
        'day'   => '14',
        'mon'   => 'Aug',
        'title' => 'Ibadah Kebangunan Rohani',
        'time'  => '18:00 - 20:00, Auditorium Utama'
    ],
    [
        'day'   => '21',
        'mon'   => 'Aug',
        'title' => 'Bakti Sosial Komunitas',
        'time'  => '09:00 - 12:00, Aula Serbaguna'
    ],
    [
        'day'   => '30',
        'mon'   => 'Aug',
        'title' => 'Retreat Pemuda',
        'time'  => '07:00, Berangkat dari Gereja'
    ],
    [
        'day'   => '06',
        'mon'   => 'Sep',
        'title' => 'Sekolah Minggu Perdana',
        'time'  => '09:00 - 10:30, Ruang Anak'
    ],
];
?>

<header class="hero pb-5">
    <div class="container text-center pt-5 pb-5">
        <div class="eyebrow mb-3">MARK YOUR CALENDAR</div>
          <h1 class="mx-auto" style="max-width:760px; font-size:2.2rem;">Upcoming Events</h1>
    </div>
</header>

<section class="py-5">
    <div class="container" style="max-width: 800px;">
        <div class="d-flex flex-column gap-3">
            <?php foreach ($events as $row): ?>
                <div class="event-item d-flex align-items-center gap-3">
                    <div class="event-date">
                        <span class="day"><?= $row['day'] ?></span>
                        <span class="mon"><?= $row['mon'] ?></span>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1"><?= $row['title'] ?></h6>
                        <div class="text-muted small">
                            <i class="bi bi-clock me-1"></i><?= $row['time'] ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="footer-bottom d-flex justify-content-between flex-wrap">
            <div>&copy; 2026 Salvation Church. All rights reserved.</div>
            <div>Dibangun dengan Bootstrap 5</div>
        </div>
    </div>
</footer>

<?= $this->endSection() ?>