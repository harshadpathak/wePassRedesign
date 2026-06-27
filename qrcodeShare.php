<!DOCTYPE html>
<html class="light" lang="en" style="">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WePass - Pass Templates Management</title>
  <?php include('head.php'); ?>
</head>

<body class="bg-background text-on-surface selection:bg-primary-container/20 selection:text-primary">
  <!-- Sidebar Navigation -->
   <?php include('sidebar.php'); ?>
  <!-- Main Content Shell -->
  <main class="ml-[300px] min-h-screen flex flex-col transition-all duration-300 ease-in-out">
    <!-- Top App Bar -->
     <?php include('header.php'); ?>
    <!-- Canvas -->
    <section class="p-margin-desktop space-y-stack-lg pb-16">
      <!-- Breadcrumbs and Header -->
      <div class="flex items-end justify-between gap-4">
        <div class="space-y-1">
          <nav class="flex items-center gap-2 text-label-sm text-outline mb-1">
            <span class="material-symbols-outlined text-[14px] text-gray">home</span> <span class="text-gray font-normal">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray-500 font-normal">QR Code Share</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">QR Code Share</h2>
        </div>
        <div class="flex items-center gap-3">
          <button
            class="flex items-center gap-2 bg-white border border-outline-variant/50 text-on-surface px-4 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold shadow-sm"
            onclick="document.getElementById('filter-panel').classList.toggle('hidden')">
            <span class="material-symbols-outlined text-[20px]">filter_alt</span>
            <span class="">Filter</span>
          </button>
        </div>
      </div>

      <!-- Information Banner -->
      <div class="bg-white border border-outline-variant rounded-2xl p-6 flex flex-col gap-4">
        <div class="flex gap-6 items-start">
          <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center text-primary shrink-0">
            <span class="material-symbols-outlined text-[28px]">qr_code_2</span>
          </div>
          <div class="flex-1">
            <h3 class="text-headline-md font-bold text-on-surface tracking-tight">QR Code &amp; Link Share</h3>
            <p class="text-body-md text-gray-400 leading-relaxed">Distribute your Generic Advertising Pass
              effortlessly. Each pass template listed below has a unique QR code and shareable link. Copy the link or
              let recipients scan the QR code to add the pass directly to their wallet.
            </p>
            <!-- Steps -->
            <div class="bg-primary/5 rounded-2xl p-2 flex flex-wrap items-center gap-3 mt-4">
              <div class="flex items-center gap-2.5 bg-white rounded-full pl-2.5 pr-5 py-2 shadow-sm border border-outline-variant/40">
                <span class="material-symbols-outlined text-emerald-500 text-[22px]" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                <span class="text-body-md font-bold text-gray-600">Scan QR Code</span>
              </div>
              <div class="flex items-center gap-2.5 bg-white rounded-full pl-2.5 pr-5 py-2 shadow-sm border border-outline-variant/40">
                <span class="material-symbols-outlined text-emerald-500 text-[22px]" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                <span class="text-body-md font-bold text-gray-600">Share Link</span>
              </div>
              <div class="flex items-center gap-2.5 bg-white rounded-full pl-2.5 pr-5 py-2 shadow-sm border border-outline-variant/40">
                <span class="material-symbols-outlined text-emerald-500 text-[22px]" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                <span class="text-body-md font-bold text-gray-600 ">Add to Wallet</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Filter Panel -->
      <div
        class="bg-white rounded-2xl border border-outline-variant p-6 shadow-sm transition-all duration-300 overflow-hidden hidden"
        id="filter-panel">
        <div class="flex flex-col gap-2">
          <div class="flex flex-col gap-2">
            <h3 class="text-primary font-display font-bold text-headline-md">Filter QR Code Share</h3>
            <p class="text-gray-400 text-body-md">Refine your search to find specific passes</p>
          </div>
          <div class="border-t border-outline-variant/30"></div>
          <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-end">
            <!-- Date Range -->
            <div class="md:col-span-3 space-y-2">
              <label class="text-on-surface font-semibold text-label-md">Date Range:</label>
              <div class="relative">
                <span
                  class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-primary text-[20px]">calendar_month</span>
                <input
                  class="js-daterange w-full bg-surface-container-low border-outline-variant rounded-lg pl-10 pr-4 py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                  placeholder="Select date range" readonly="" type="text">
              </div>
            </div>
            <!-- Search -->
            <div class="md:col-span-3 space-y-2">
              <label class="text-on-surface font-semibold text-label-md">Search:</label>
              <div class="relative">
                <input
                  class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                  placeholder="Search by name, ID, or keyword..." type="text">
              </div>
            </div>
            <!-- Actions -->
            <div class="md:col-span-3 flex items-center gap-3">
              <button
                class="flex-1 flex items-center justify-center gap-2 bg-brand-gradient text-on-primary px-4 py-3 rounded-lg text-[14px] shadow-md shadow-primary/20 hover:opacity-95 transition-all font-bold">
                <span class="material-symbols-outlined text-[20px]">search</span>
                Search
              </button>
              <button
                class="flex-1 flex items-center justify-center gap-2 bg-surface border border-outline-variant text-on-surface-variant px-4 py-3 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold">
                <span class="material-symbols-outlined text-[20px]">cancel</span>
                Clear
              </button>
            </div>
          </div>
        </div>
      </div>

      <?php
        $rows = [
          ['name' => 'ADVERTISING 10', 'id' => '5e8f3c4ecbcc8d65f9813e81aa6d254672d9abf8', 'pass' => '61e2711d1df5a9e1b80529b4b1411fee', 'date' => '17/06/2026 05:00:20'],
          ['name' => 'ADVERTISING 9',  'id' => '835632a51a30b78c32b0446c6bead37788abbbc1', 'pass' => '1a93596a6e888f4b540f252660ce7f12', 'date' => '17/06/2026 04:58:25'],
          ['name' => 'ADVERTISING 8',  'id' => '9ae94ae46ec00a1d2fc4eae5133df9edf02823ce', 'pass' => 'f057e83884231e30c484cf12278adacd', 'date' => '16/06/2026 11:19:25'],
          ['name' => 'ADVERTISING 7',  'id' => '769583dc200724cc01b1f49945b68c70104b28aa', 'pass' => '132e690c7b21c5f094656',            'date' => '22/05/2026 05:50:47'],
          ['name' => 'ADVERTISING 6',  'id' => 'b4c96520f7a6ead9a3ae733eaae6e50237559b41', 'pass' => '605aa7c5a4f726d2cbfe5',            'date' => '08/05/2026 04:55:07'],
          ['name' => 'ADVERTISING 5',  'id' => '4ef576bc50a550f7341139b13a631d25d678a7c0', 'pass' => '836d15d927d72cb2b3a4a',            'date' => '07/05/2026 07:26:33'],
          ['name' => 'ADVERTISING-2',  'id' => '04fac92ade322189a0b05a9beb3f6255302b76b5', 'pass' => '60f76aafc401415978222',           'date' => '05/05/2026 09:48:12'],
          ['name' => 'ADVERTISING 4',  'id' => '476a414a7fb4968c67b1204486175f51d23aefca', 'pass' => 'c4b2b4b5b07103af30ee8',           'date' => '05/05/2026 06:43:26'],
          ['name' => 'ADVERTISING-1',  'id' => 'dc3eefe5f94317a5294e0123d0f7112762775520', 'pass' => '28f47d4274daf97b489a2',           'date' => '04/05/2026 06:10:48'],
          ['name' => 'ADVERTISING 3',  'id' => 'cbdc2bf11ca3bbdae73fa2b8bef495f4d9f50fe7', 'pass' => 'e8a2ee436ab78051e7730',           'date' => '01/05/2026 12:51:37'],
        ];
      ?>

      <!-- Main Card -->
      <div class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
        <!-- Toolbar / Card Header -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 px-6 py-5 border-b border-outline-variant/60">
          <div class="flex items-center gap-3">
            <div class="w-9 h-9 bg-blue-50 text-primary rounded-lg flex items-center justify-center">
              <span class="material-symbols-outlined text-[20px]">qr_code_scanner</span>
            </div>
            <h3 class="text-headline-md font-bold text-on-surface">QR Code Share</h3>
            <span class="bg-primary/10 text-primary text-label-sm font-bold px-3 py-1 rounded-full">11 Passes</span>
          </div>
          <div class="relative w-full sm:max-w-xs">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[20px]">search</span>
            <input type="text" placeholder="Search pass template..."
              class="w-full bg-surface-container-low border-outline-variant rounded-lg py-2.5 pl-10 pr-4 text-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
          </div>
        </div>

        <!-- QR Card Grid -->
        <div class="p-6 grid grid-cols-1 sm:grid-cols-3 xl:grid-cols-4 gap-5">
        <?php foreach ($rows as $row):
          $link = 'https://app.wepass.io/wallet/pass/' . $row['pass'];
        ?>
        <div class="group relative bg-surface-container-low/30 rounded-2xl border border-outline-variant hover:border-primary/50 hover:bg-white transition-colors duration-200 flex flex-col overflow-hidden [&:has(.js-menu-panel:not(.hidden))]:overflow-visible">
          <!-- Card Header -->
          <div class="flex items-center gap-3 p-5 pb-3 min-w-0">
            <div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0">
              <span class="material-symbols-outlined text-[20px]">style</span>
            </div>
            <div class="min-w-0">
              <p class="text-body-lg font-bold text-on-surface truncate"><?= htmlspecialchars($row['name']) ?></p>
              <p class="text-label-sm text-outline font-mono truncate font-medium">ID: <?= htmlspecialchars($row['id']) ?></p>
            </div>
          </div>

          <!-- QR Code -->
          <div class="px-5 flex justify-center">
            <div class="relative p-3 rounded-2xl bg-surface-container-low/40 border border-outline-variant/60 group-hover:border-primary/30 transition-colors">
              <img alt="QR code for <?= htmlspecialchars($row['name']) ?>" class="w-36 h-36 rounded-lg"
                src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&margin=0&data=<?= urlencode($link) ?>">
            </div>
          </div>

          <!-- Link row -->
          <div class="p-5 pt-4 mt-auto space-y-4">
            <div class="flex items-center gap-2 bg-surface-container-low/60 border border-outline-variant/60 rounded-lg pl-3 pr-1.5 py-1.5">
              <span class="material-symbols-outlined text-outline text-[18px] shrink-0">link</span>
              <code class="text-label-sm text-secondary break-all flex-1"><?= htmlspecialchars($link) ?></code>
              <button type="button" data-copy="<?= htmlspecialchars($link) ?>"
                class="js-copy w-8 h-8 rounded-md bg-blue-50 text-primary flex items-center justify-center hover:bg-primary hover:text-white transition-all shrink-0"
                title="Copy link">
                <span class="material-symbols-outlined text-[16px]">content_copy</span>
              </button>
            </div>

            <!-- Footer meta -->
            <div class="flex items-center justify-between gap-2 pt-3 border-t border-outline-variant/40">
              <div class="flex items-center gap-1.5 text-label-md text-outline">
                <span class="material-symbols-outlined text-[16px]">schedule</span>
                <?= htmlspecialchars($row['date']) ?>
              </div>
              <!-- Action menu -->
              <div class="relative shrink-0 js-menu">
                <button type="button"
                  class="js-menu-toggle w-9 h-9 rounded-full text-outline hover:bg-surface-container-low hover:text-on-surface flex items-center justify-center transition-all">
                  <span class="material-symbols-outlined text-[20px]">more_vert</span>
                </button>
                <div class="js-menu-panel hidden absolute right-0 bottom-full mb-1 w-44 bg-white border border-outline-variant rounded-xl shadow-lg py-1.5 z-20">
                  <a href="qrcodeShow.php" class="w-full flex items-center gap-2.5 px-4 py-2 text-label-md text-on-surface hover:bg-surface-container-low transition-colors">
                    <span class="material-symbols-outlined text-[18px] text-primary">visibility</span> View Pass
                  </a>
                  <button type="button" class="w-full flex items-center gap-2.5 px-4 py-2 text-label-md text-on-surface hover:bg-surface-container-low transition-colors">
                    <span class="material-symbols-outlined text-[18px] text-primary">download</span> Download QR
                  </button>
                  <button type="button" data-copy="<?= htmlspecialchars($link) ?>" class="js-copy w-full flex items-center gap-2.5 px-4 py-2 text-label-md text-on-surface hover:bg-surface-container-low transition-colors">
                    <span class="material-symbols-outlined text-[18px] text-primary">link</span> Copy Link
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        </div>

        <!-- Pagination -->
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 px-6 py-4 border-t border-outline-variant/60 bg-surface-container-low/30">
        <p class="text-label-md text-secondary">Showing <span class="font-semibold text-on-surface">1</span> to
          <span class="font-semibold text-on-surface">10</span> of
          <span class="font-semibold text-on-surface">11</span> results</p>
        <nav class="flex items-center gap-1.5">
          <button type="button" class="w-9 h-9 rounded-lg border border-outline-variant text-outline flex items-center justify-center hover:bg-surface-container-low disabled:opacity-40 disabled:cursor-not-allowed transition-all" disabled>
            <span class="material-symbols-outlined text-[18px]">chevron_left</span>
          </button>
          <button type="button" class="w-9 h-9 rounded-lg bg-primary text-white font-bold text-label-md flex items-center justify-center shadow-sm">1</button>
          <button type="button" class="w-9 h-9 rounded-lg border border-outline-variant text-on-surface font-semibold text-label-md flex items-center justify-center hover:bg-surface-container-low transition-all">2</button>
          <button type="button" class="w-9 h-9 rounded-lg border border-outline-variant text-outline flex items-center justify-center hover:bg-surface-container-low transition-all">
            <span class="material-symbols-outlined text-[18px]">chevron_right</span>
          </button>
        </nav>
        </div>
      </div>
    </section>
    <?php include('footer.php'); ?>
  </main>
  <!-- Micro-interaction Scripts -->
   <?php include('script.php'); ?>
  <script>
    (function () {
      // Copy link to clipboard
      document.querySelectorAll('.js-copy').forEach(function (btn) {
        btn.addEventListener('click', function () {
          var text = btn.getAttribute('data-copy');
          if (!text) return;
          var done = function () {
            var icon = btn.querySelector('.material-symbols-outlined');
            if (!icon) return;
            var prev = icon.textContent;
            icon.textContent = 'check';
            setTimeout(function () { icon.textContent = prev; }, 1500);
          };
          if (navigator.clipboard && navigator.clipboard.writeText) {
            navigator.clipboard.writeText(text).then(done).catch(done);
          } else {
            var ta = document.createElement('textarea');
            ta.value = text; document.body.appendChild(ta); ta.select();
            try { document.execCommand('copy'); } catch (e) {}
            document.body.removeChild(ta); done();
          }
        });
      });
    })();
  </script>
</body>

</html>