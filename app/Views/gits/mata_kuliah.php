<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<header class="hero bg-primary text-white py-5 position-relative overflow-hidden" style="background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url('<?= base_url('assets/img/hero-bg.jpg') ?>') center/cover no-repeat;">
    <div class="container text-center py-5 position-relative">
        <span class="badge bg-danger text-uppercase tracking-wider px-3 py-2 mb-3 fw-semibold"><?= lang('Gits.courses.badge') ?></span>
        <h1 class="display-5 fw-bold text-white mb-2"><?= lang('Gits.courses.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;"><?= lang('Gits.courses.hero_subtitle') ?></p>
    </div>
</header>

<!-- Main Content Section -->
<section class="py-5 bg-light">
    <div class="container">

        <div class="text-center mb-4">
            <h2 class="fw-bold text-dark mb-2"><?= lang('Gits.courses.section_title') ?></h2>
            <p class="text-muted"><?= lang('Gits.courses.section_subtitle') ?></p>
            <div class="divider mx-auto bg-danger mt-2" style="width: 50px; height: 3px;"></div>
        </div>

        <?php
        // Mengelompokkan mata kuliah berdasarkan kategori
        $kurikulum = [
            "Biblical Studies (BS)" => [
                ["code" => "BS 104", "name" => "Biblical Study Survey PL", "sks" => "3"],
                ["code" => "BS 105", "name" => "Biblical Study Survey PB", "sks" => "2"],
                ["code" => "BS 201", "name" => "Biblical Study Hermeneutika", "sks" => "2"],
                ["code" => "BS 202", "name" => "Biblical Study Riwayat Hidup Yesus", "sks" => "3"],
                ["code" => "BS 311", "name" => "Biblical Study Survey Pentatukh", "sks" => "3"],
                ["code" => "BS 312", "name" => "Biblical Study Survey Nabi-Nabi Besar 1", "sks" => "3"],
                ["code" => "BS 313", "name" => "Biblical Study Survey Nabi-Nabi Besar 2", "sks" => "3"],
                ["code" => "BS 314", "name" => "Biblical Study Survey Nabi-Nabi Kecil 1", "sks" => "3"],
                ["code" => "BS 315", "name" => "Biblical Study Survey Nabi-Nabi Kecil 2", "sks" => "3"],
                ["code" => "BS 321", "name" => "Biblical Study Pengantar PL", "sks" => "3"],
                ["code" => "BS 322", "name" => "Biblical Study Pengantar PL II (hipotetis)", "sks" => "3"],
                ["code" => "BS 411", "name" => "Biblical Study Survey Kitab-Kitab Sejarah 1", "sks" => "3"],
                ["code" => "BS 412", "name" => "Biblical Study Survey Kitab-Kitab Sejarah 2", "sks" => "3"],
                ["code" => "BS 421", "name" => "Biblical Study Pengantar PB", "sks" => "3"],
            ],
            "Eksegesis Perjanjian Lama (PL)" => [
                ["code" => "PL 401", "name" => "Eksegesis PL Eksegesis Kejadian 1-11", "sks" => "3"],
                ["code" => "PL 421", "name" => "Eksegesis PL Eksegesis Kejadian 12-50", "sks" => "2"],
                ["code" => "PL 402", "name" => "Eksegesis PL Eksegesis Keluaran", "sks" => "3"],
                ["code" => "PL 411", "name" => "Eksegesis PL Eksegesis Ezra, Nehemia, Ester", "sks" => "3"],
                ["code" => "PL 501", "name" => "Eksegesis PL Eksegesis Yesaya", "sks" => "3"],
                ["code" => "PL 502", "name" => "Eksegesis PL Eksegesis Yeremia", "sks" => "3"],
                ["code" => "PL 503", "name" => "Eksegesis PL Eksegesis Yehezkiel", "sks" => "3"],
                ["code" => "PL 601", "name" => "Eksegesis PL Eksegesis Daniel", "sks" => "3"],
                ["code" => "PL 602", "name" => "Eksegesis PL Eksegesis Kitab-Kitab Salomo", "sks" => "3"],
                ["code" => "PL 701", "name" => "Eksegesis PL Eksegesis Rut (Ibrani)", "sks" => "3"],
                ["code" => "PL 702", "name" => "Eksegesis PL Eksegesis Yunus (Ibrani)", "sks" => "3"],
            ],
            "Eksegesis Perjanjian Baru (PB)" => [
                ["code" => "PB 201", "name" => "Eksegesis PB Eksegesis Matius", "sks" => "3"],
                ["code" => "PB 202/602", "name" => "Eksegesis PB Eksegesis Roma", "sks" => "3"],
                ["code" => "PB 203/603", "name" => "Eksegesis PB Eksegesis Injil Yohanes", "sks" => "3"],
                ["code" => "PB 301", "name" => "Eksegesis PB Eksegesis Kisah Para Rasul", "sks" => "3"],
                ["code" => "PB 302", "name" => "Eksegesis PB Eksegesis 1 & 2 Petrus", "sks" => "2"],
                ["code" => "PB 303", "name" => "Eksegesis PB Eksegesis Galatia", "sks" => "2"],
                ["code" => "PB 401", "name" => "Eksegesis PB Eksegesis Yakobus", "sks" => "2"],
                ["code" => "PB 402", "name" => "Eksegesis PB Eksegesis Surat-Surat Penjara", "sks" => "3"],
                ["code" => "PB 403", "name" => "Eksegesis PB Eksegesis 1 & 2 Tesalonika", "sks" => "2"],
                ["code" => "PB 404", "name" => "Eksegesis PB Eksegesis Surat-Surat Penggembalaan", "sks" => "2"],
                ["code" => "PB 405", "name" => "Eksegesis PB Eksegesis Surat-Surat Yohanes", "sks" => "2"],
                ["code" => "PB 501", "name" => "Eksegesis PB Eksegesis Ibrani", "sks" => "3"],
                ["code" => "PB 502", "name" => "Eksegesis PB Eksegesis Surat-Surat Umum", "sks" => "2"],
                ["code" => "PB 503", "name" => "Eksegesis PB Eksegesis Wahyu", "sks" => "3"],
                ["code" => "PB 504", "name" => "Eksegesis PB Eksegesis 1 Korintus", "sks" => "3"],
                ["code" => "PB 505", "name" => "Eksegesis PB Eksegesis 2 Korintus", "sks" => "3"],
                ["code" => "PB 511", "name" => "Eksegesis PB Eksegesis Injil Lukas", "sks" => "3"],
                ["code" => "PB 651", "name" => "Eksegesis PB Eksegesis 1 Yohanes (Yunani)", "sks" => "3"],
                ["code" => "PB 652", "name" => "Eksegesis PB Eksegesis 2 & 3 Yohanes (Yunani)", "sks" => "2"],
                ["code" => "PB 751", "name" => "Eksegesis PB Eksegesis Yudas (Yunani)", "sks" => "2"],
                ["code" => "PB 752", "name" => "Eksegesis PB Eksegesis Filemon (Yunani)", "sks" => "2"],
            ],
            "Theology (TH)" => [
                ["code" => "TH 101", "name" => "Theology Survey Doktrin", "sks" => "3"],
                ["code" => "TH 102/701", "name" => "Theology Soteriology", "sks" => "3"],
                ["code" => "TH 103/702", "name" => "Theology Bibliology", "sks" => "3"],
                ["code" => "TH 104/703", "name" => "Theology Ecclesiology", "sks" => "3"],
                ["code" => "TH 192", "name" => "Theology Soteriology Block Class", "sks" => "-"],
                ["code" => "TH 193", "name" => "Theology Bibliology Block Class", "sks" => "-"],
                ["code" => "TH 194", "name" => "Theology Ecclesiology Block Class", "sks" => "-"],
                ["code" => "TH 199", "name" => "Theology Doktrin Dasar (3 Doktrin Utama)", "sks" => "3"],
                ["code" => "TH 201", "name" => "Theology Theology Proper", "sks" => "3"],
                ["code" => "TH 202", "name" => "Theology Angelology & Satanology", "sks" => "3"],
                ["code" => "TH 203", "name" => "Theology Anthropology & Hamartology", "sks" => "3"],
                ["code" => "TH 301", "name" => "Theology Eschatology", "sks" => "3"],
                ["code" => "TH 302", "name" => "Theology Christology", "sks" => "3"],
                ["code" => "TH 303", "name" => "Theology Pneumatology & Kharismatikisme", "sks" => "3"],
                ["code" => "TH 304", "name" => "Theology Theologi Kontemporer", "sks" => "2"],
                ["code" => "TH 401", "name" => "Theology Kalvinisme", "sks" => "3"],
                ["code" => "TH 402", "name" => "Theology Kharismatikisme", "sks" => "3"],
                ["code" => "TH 403", "name" => "Theology Missiologi 1", "sks" => "2"],
                ["code" => "TH 404", "name" => "Theology Missiologi 2", "sks" => "2"],
                ["code" => "TH 501", "name" => "Theology Theologi PL", "sks" => "3"],
                ["code" => "TH 502", "name" => "Theology Theologi PB", "sks" => "3"],
                ["code" => "TH 601", "name" => "Theology Bibliology Tekstual", "sks" => "3"],
                ["code" => "TH 602", "name" => "Theology Dispensationalism", "sks" => "3"],
            ],
            "History & Bahasa Asli (HT & BL)" => [
                ["code" => "HT 101", "name" => "Sejarah Baptis I", "sks" => "2"],
                ["code" => "HT 102", "name" => "Sejarah Baptis II", "sks" => "2"],
                ["code" => "HT 201", "name" => "Sejarah Denominasi", "sks" => "2"],
                ["code" => "HT 202", "name" => "Bidat-Bidat I", "sks" => "2"],
                ["code" => "HT 203", "name" => "Bidat-Bidat II", "sks" => "2"],
                ["code" => "HT 301", "name" => "Sejarah Kristen I", "sks" => "2"],
                ["code" => "HT 302", "name" => "Sejarah Kristen II", "sks" => "2"],
                ["code" => "BL 201", "name" => "Biblical Languages Yunani I", "sks" => "3"],
                ["code" => "BL 202", "name" => "Biblical Languages Yunani II", "sks" => "3"],
                ["code" => "BL 301", "name" => "Biblical Languages Yunani Syntax I", "sks" => "3"],
                ["code" => "BL 302", "name" => "Biblical Languages Yunani Syntax II", "sks" => "3"],
                ["code" => "BL 401", "name" => "Biblical Languages Ibrani I", "sks" => "3"],
                ["code" => "BL 402", "name" => "Biblical Languages Ibrani II", "sks" => "3"],
                ["code" => "BL 601", "name" => "Exegesis Ibrani I", "sks" => "3"],
                ["code" => "BL 602", "name" => "Exegesis Ibrani II", "sks" => "3"],
            ],
            "Practical Skills & Music (PT & MS)" => [
                ["code" => "PT 201", "name" => "PAK I (Sekolah Minggu)", "sks" => "2"],
                ["code" => "PT 202", "name" => "PAK II (Mendidik Anak)", "sks" => "2"],
                ["code" => "PT 221", "name" => "Homiletik I (Speech/Aklamasi)", "sks" => "2"],
                ["code" => "PT 222", "name" => "Homiletik II (Membangun Khotbah)", "sks" => "2"],
                ["code" => "PT 321", "name" => "Homiletik III (Khotbah)", "sks" => "2"],
                ["code" => "PT 322", "name" => "Homiletik IV (Advanced Preaching)", "sks" => "2"],
                ["code" => "PT 331", "name" => "Penginjilan I (Pribadi)", "sks" => "2"],
                ["code" => "PT 361", "name" => "Pastoral Practical", "sks" => "2"],
                ["code" => "PT 461", "name" => "Pastoral Counseling", "sks" => "2"],
                ["code" => "MS 111", "name" => "Music Skills Dasar Menyanyi 1", "sks" => "2"],
                ["code" => "MS 211", "name" => "Music Skills Himne 1", "sks" => "2"],
                ["code" => "MS 241", "name" => "Practical Skills Piano 1", "sks" => "2"],
            ]
        ];

        // Hitung total statistik
        $totalMatkul = 0;
        $totalSKS = 0;
        foreach ($kurikulum as $list) {
            $totalMatkul += count($list);
            foreach ($list as $item) {
                if (is_numeric($item['sks'])) {
                    $totalSKS += (int)$item['sks'];
                }
            }
        }
        ?>

        <!-- Filter & Search Bar -->
        <div class="row justify-content-between align-items-center mb-4 g-3">
            <div class="col-md-6 col-lg-4">
                <div class="input-group shadow-sm rounded-3">
                    <span class="input-group-text bg-white border-end-0 text-muted ps-3">
                        <i class="bi bi-search"></i>
                    </span>
                    <input type="text" id="searchMatkul" class="form-control border-start-0 ps-0" placeholder="<?= lang('Gits.courses.search_placeholder') ?>">
                </div>
            </div>
            <div class="col-md-6 text-md-end text-muted small">
                <span class="badge bg-white text-dark shadow-sm px-3 py-2 border me-2">
                    <i class="bi bi-book text-danger me-1"></i> <?= lang('Gits.courses.total_courses', [$totalMatkul]) ?>
                </span>
                <span class="badge bg-white text-dark shadow-sm px-3 py-2 border">
                    <i class="bi bi-award text-danger me-1"></i> <?= lang('Gits.courses.total_credits', [$totalSKS]) ?>
                </span>
            </div>
        </div>

        <!-- Container Card Per Kategori -->
        <div id="kurikulumContainer">
            <?php foreach ($kurikulum as $kategori => $matkulList): ?>
                <div class="card border-0 shadow-sm rounded-4 mb-4 overflow-hidden category-card">
                    <div class="card-header bg-white border-bottom py-3 px-4">
                        <h4 class="fw-bold text-dark m-0 d-flex align-items-center">
                            <i class="bi bi-journal-bookmark-fill text-danger me-2"></i>
                            <?= esc($kategori) ?>
                            <span class="badge bg-light text-secondary ms-auto fs-6 fw-normal border"><?= lang('Gits.courses.courses_count', [count($matkulList)]) ?></span>
                        </h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="bg-light text-secondary small">
                                    <tr>
                                        <th class="py-3 ps-4" style="width: 20%;"><?= lang('Gits.courses.col_code') ?></th>
                                        <th class="py-3" style="width: 70%;"><?= lang('Gits.courses.col_name') ?></th>
                                        <th class="py-3 pe-4 text-center" style="width: 10%;"><?= lang('Gits.courses.col_sks') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($matkulList as $m): ?>
                                    <tr class="matkul-row">
                                        <td class="ps-4 fw-bold text-danger matkul-code"><?= esc($m['code']) ?></td>
                                        <td class="text-dark matkul-name"><?= esc($m['name']) ?></td>
                                        <td class="pe-4 text-center">
                                            <?php if ($m['sks'] === '-'): ?>
                                                <span class="badge bg-light text-muted border px-2 py-1" title="Block Class"><?= lang('Gits.courses.non_sks') ?></span>
                                            <?php else: ?>
                                                <span class="badge bg-danger bg-opacity-10 text-danger px-2 py-1 fw-semibold"><?= lang('Gits.courses.sks_unit', [esc($m['sks'])]) ?></span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- State ketika pencarian tidak ditemukan -->
        <div id="noResult" class="text-center py-5 d-none">
            <i class="bi bi-search-heart display-1 text-muted opacity-50"></i>
            <h5 class="mt-3 text-secondary"><?= lang('Gits.courses.no_result_title') ?></h5>
            <p class="text-muted small"><?= lang('Gits.courses.no_result_desc') ?></p>
        </div>

    </div>
</section>

<!-- Script Pencarian Real-Time -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('searchMatkul');
    const categoryCards = document.querySelectorAll('.category-card');
    const noResult = document.getElementById('noResult');

    searchInput.addEventListener('input', function () {
        const query = this.value.toLowerCase().trim();
        let totalVisibleCards = 0;

        categoryCards.forEach(card => {
            const rows = card.querySelectorAll('.matkul-row');
            let visibleRowsInCard = 0;

            rows.forEach(row => {
                const code = row.querySelector('.matkul-code').textContent.toLowerCase();
                const name = row.querySelector('.matkul-name').textContent.toLowerCase();

                if (code.includes(query) || name.includes(query)) {
                    row.classList.remove('d-none');
                    visibleRowsInCard++;
                } else {
                    row.classList.add('d-none');
                }
            });

            if (visibleRowsInCard > 0) {
                card.classList.remove('d-none');
                totalVisibleCards++;
            } else {
                card.classList.add('d-none');
            }
        });

        if (totalVisibleCards === 0) {
            noResult.classList.remove('d-none');
        } else {
            noResult.classList.add('d-none');
        }
    });
});
</script>

<?= $this->endSection() ?>