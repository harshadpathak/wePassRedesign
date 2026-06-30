<!DOCTYPE html>
<html class="light" lang="en" style="">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WePass - Mail Queue</title>
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
      <!-- Page Header -->
      <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div class="space-y-1">
          <nav class="flex items-center gap-2 text-label-sm text-outline mb-1">
            <span class="material-symbols-outlined text-[14px] text-gray">home</span> <span class="text-gray font-normal">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray-500 font-normal">Mail Queue</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Mail Queue</h2>
        </div>
        <div class="flex items-center gap-3">
          <button
            class="flex items-center gap-2 bg-white border border-outline-variant/50 text-on-surface px-6 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold shadow-sm"
            onclick="document.getElementById('filter-panel').classList.toggle('hidden')">
            <span class="material-symbols-outlined text-[20px]">filter_alt</span>
            <span>Filter</span>
          </button>
        </div>
      </div>

      <!-- Summary Cards -->
      <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-5">
        <!-- Total Mails (active) -->
        <div class="bg-surface-container-lowest p-4 rounded-xl border border-primary/40 shadow-sm flex items-center gap-4 cursor-pointer relative overflow-hidden group">
          <div class="bg-primary/10 text-primary p-2.5 rounded-lg flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined">mail</span>
          </div>
          <div class="min-w-0">
            <p class="text-label-sm text-gray-400 font-medium">Total Mails</p>
            <p class="text-headline-md text-primary font-bold">35</p>
          </div>
        </div>
        <!-- Pending -->
        <div class="bg-white p-4 rounded-xl border border-outline-variant transition-all flex items-center gap-4 cursor-pointer group">
          <div class="bg-amber-100 text-amber-600 p-2.5 rounded-lg flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined">schedule</span>
          </div>
          <div class="min-w-0">
            <p class="text-label-sm text-gray-400 font-medium">Pending</p>
            <p class="text-headline-md font-bold">5</p>
          </div>
        </div>
        <!-- Processing -->
        <div class="bg-white p-4 rounded-xl border border-outline-variant transition-all flex items-center gap-4 cursor-pointer group">
          <div class="bg-secondary-container/40 text-secondary p-2.5 rounded-lg flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined">sync</span>
          </div>
          <div class="min-w-0">
            <p class="text-label-sm text-gray-400 font-medium">Processing</p>
            <p class="text-headline-md font-bold">1</p>
          </div>
        </div>
        <!-- Sent -->
        <div class="bg-white p-4 rounded-xl border border-outline-variant transition-all flex items-center gap-4 cursor-pointer group">
          <div class="bg-emerald-100 text-emerald-600 p-2.5 rounded-lg flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined">check_circle</span>
          </div>
          <div class="min-w-0">
            <p class="text-label-sm text-gray-400 font-medium">Sent</p>
            <p class="text-headline-md font-bold">28</p>
          </div>
        </div>
        <!-- Failed -->
        <div class="bg-white p-4 rounded-xl border border-outline-variant transition-all flex items-center gap-4 cursor-pointer group">
          <div class="bg-error-container/50 text-error p-2.5 rounded-lg flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined">cancel</span>
          </div>
          <div class="min-w-0">
            <p class="text-label-sm text-gray-400 font-medium">Failed</p>
            <p class="text-headline-md font-bold">1</p>
          </div>
        </div>
      </div>

      <!-- Filter Panel -->
      <div
        class="bg-white rounded-2xl border border-outline-variant p-6 shadow-sm transition-all duration-300 overflow-hidden hidden"
        id="filter-panel">
        <div class="flex flex-col gap-2">
          <div class="flex flex-col gap-2">
            <h3 class="text-primary font-display font-bold text-headline-md">Filter Mail Queue</h3>
            <p class="text-gray-400 text-body-md">Refine the queue by recipient, status or pass ID</p>
          </div>
          <div class="border-t border-outline-variant/30"></div>
          <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-end">
            <!-- Search -->
            <div class="md:col-span-4 space-y-2">
              <label class="text-on-surface font-semibold text-label-md">Search:</label>
              <div class="relative">
                <input
                  class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                  placeholder="Recipient, Pass ID, or template..." type="text">
              </div>
            </div>
            <!-- Status -->
            <div class="md:col-span-2 space-y-2">
              <label class="text-on-surface font-semibold text-label-md">Status:</label>
              <select class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                <option value="">All</option>
                <option value="pending">Pending</option>
                <option value="processing">Processing</option>
                <option value="sent">Sent</option>
                <option value="failed">Failed</option>
              </select>
            </div>
            <!-- Actions -->
            <div class="md:col-span-4 flex items-center gap-3">
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
        $mails = [
          ['no' => 1,  'email' => 'jenilv.aatmaninfo@gmail.com', 'pass' => '18551e100cd65ae8f39821cdfe8ff8ef', 'template' => 'Gift-Card-28',       'status' => 'sent',       'attempts' => 1, 'sent_at' => '25/06/2026 09:31'],
          ['no' => 2,  'email' => 'jenilv.aatmaninfo@gmail.com', 'pass' => '23238c27da68914df50c47929d32d87d', 'template' => 'Gift-Card-27',       'status' => 'failed',     'attempts' => 1, 'sent_at' => '25/06/2026 09:29'],
          ['no' => 3,  'email' => 'johnduo@gmail.com',           'pass' => '1eecf35ae86a068ab58c3b3dba0c03e8', 'template' => 'Gift-Card-27',       'status' => 'pending',    'attempts' => 0, 'sent_at' => ''],
          ['no' => 4,  'email' => 'johnduo@gmail.com',           'pass' => '7430491be3e4c9f7d918a5fe9b3d9333', 'template' => 'Gift-Card-27',       'status' => 'pending',    'attempts' => 0, 'sent_at' => ''],
          ['no' => 5,  'email' => 'johnduo@gmail.com',           'pass' => '51f9c092e935a5babda140380064baf6', 'template' => 'Gift-Card-27',       'status' => 'pending',    'attempts' => 0, 'sent_at' => ''],
          ['no' => 6,  'email' => 'jenilv.aatmaninfo@gmail.com', 'pass' => '87b6bdcc2e3421ff84793c517c61170f', 'template' => 'Gift-Card-27',       'status' => 'sent',       'attempts' => 1, 'sent_at' => '18/06/2026 10:09'],
          ['no' => 7,  'email' => 'johnduo@gmail.com',           'pass' => 'a65cfb4de67730e61aa7252f63ada1b9', 'template' => 'Gift-Card-24',       'status' => 'pending',    'attempts' => 0, 'sent_at' => ''],
          ['no' => 8,  'email' => 'johnduo@gmail.com',           'pass' => 'f10a3d146807a6a4855717d67ff41aed', 'template' => 'Gift-Card-21',       'status' => 'pending',    'attempts' => 0, 'sent_at' => ''],
          ['no' => 9,  'email' => 'example@gmail.com',           'pass' => 'b3f0dfe5b2a0b12c7147e398d43fbf68', 'template' => 'Aatman Coupon Card', 'status' => 'processing', 'attempts' => 1, 'sent_at' => '10/06/2026 04:42'],
          ['no' => 10, 'email' => 'xyz@wepass.io',               'pass' => 'dcdaaf9604c45d039ccfd8a396ec60ac', 'template' => 'insurance-pass-34',  'status' => 'sent',       'attempts' => 1, 'sent_at' => '09/06/2026 14:20'],
          ['no' => 11, 'email' => 'kartik@wepass.io',            'pass' => 'caff107be9ef9cc41e1259e7c0f64a8d', 'template' => 'insurance-pass-34',  'status' => 'sent',       'attempts' => 1, 'sent_at' => '09/06/2026 14:20'],
        ];

        $statusMeta = [
          'sent'       => ['label' => 'Sent',       'badge' => 'bg-emerald-100 text-emerald-700 border border-emerald-200',  'dot' => 'bg-emerald-500', 'icon' => 'check_circle'],
          'failed'     => ['label' => 'Failed',     'badge' => 'bg-error-container/50 text-error border border-error/20',     'dot' => 'bg-error',       'icon' => 'cancel'],
          'pending'    => ['label' => 'Pending',    'badge' => 'bg-amber-100 text-amber-700 border border-amber-200',        'dot' => 'bg-amber-500',   'icon' => 'schedule'],
          'processing' => ['label' => 'Processing', 'badge' => 'bg-orange-100 text-orange-700 border border-orange-200',     'dot' => 'bg-orange-500',  'icon' => 'sync'],
        ];
      ?>
      <!-- Mail Queue Table -->
      <div class="bg-white rounded-2xl border border-outline-variant overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
          <table class="responsive-table w-full text-left border-collapse">
            <thead class="bg-surface-container-low/50">
              <tr>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">#</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Recipient</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Pass ID</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Template</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Status</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant text-center">Attempts</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Sent At</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant text-right">Action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-outline-variant/30">
              <?php foreach ($mails as $m):
                $meta = $statusMeta[$m['status']];
                $initial = strtoupper(substr($m['email'], 0, 1));
              ?>
              <tr class="hover:bg-surface-container-low transition-colors group">
                <!-- # -->
                <td class="px-6 py-4 text-label-md text-gray-400 font-semibold tabular-nums" data-label="#"><?= $m['no'] ?></td>
                <!-- Recipient -->
                <td class="cell-main px-6 py-4 text-label-md text-on-surface-variant" data-label="Recipient">
                    <?= htmlspecialchars($m['email']) ?>
                </td>
                <!-- Pass ID -->
                <td class="px-6 py-4 text-label-md text-on-surface-variant" data-label="Pass ID">
                  <div class="flex items-center">
                    <span class="material-symbols-outlined text-[14px] shrink-0">tag</span>
                    <span><?= htmlspecialchars($m['pass']) ?></span>
                  </div>
                </td>
                <!-- Template -->
                <td class="px-6 py-4" data-label="Template">
                  <span class="inline-flex bg-surface-container-low border border-outline-variant rounded-full px-2.5 py-1.5 text-label-md font-semibold text-secondary whitespace-nowrap"><?= htmlspecialchars($m['template']) ?></span>
                </td>
                <!-- Status -->
                <td class="px-6 py-4" data-label="Status">
                  <span class="inline-flex items-center py-1 rounded-full text-[10px] font-bold uppercase bg-blue-50 text-blue-600 border-blue-100 border whitespace-nowrap px-2 <?= $meta['badge'] ?>">
                    <span class="material-symbols-outlined text-[14px] <?= $m['status'] === 'processing' ? 'animate-spin-slow' : '' ?>"><?= $meta['icon'] ?></span>
                    <?= $meta['label'] ?>
                  </span>
                </td>
                <!-- Attempts -->
                <td class="px-6 py-4 text-center" data-label="Attempts">
                  <span class="inline-flex items-center justify-center min-w-[28px] h-7 px-2 rounded-lg text-label-md font-semibold tabular-nums <?= $m['attempts'] > 0 ? 'bg-surface-container-low text-on-surface border border-outline-variant' : 'text-gray-300' ?>"><?= $m['attempts'] ?></span>
                </td>
                <!-- Sent At -->
                <td class="px-6 py-4 text-label-md text-on-surface-variant" data-label="Sent At">
                  <?= $m['sent_at'] !== '' ? htmlspecialchars($m['sent_at']) : '<span class="text-gray-300">—</span>' ?>
                </td>
                <!-- Action -->
                <td class="cell-action px-6 py-4 text-right" data-label="Action">
                  <?php if ($m['status'] === 'failed'): ?>
                    <button type="button" class="inline-flex items-center gap-1.5 bg-white border border-error/30 text-error px-3 py-1.5 rounded-lg text-label-md font-bold hover:bg-error-container/40 hover:border-error/50 transition-all shadow-sm">
                      <span class="material-symbols-outlined text-[18px]">refresh</span>
                      Retry
                    </button>
                  <?php else: ?>
                    <span class="text-gray-300">—</span>
                  <?php endif; ?>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- Pagination -->
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 px-6 py-4 border-t border-outline-variant/60 bg-surface-container-low/30">
          <p class="text-label-md text-secondary">Showing <span class="font-semibold text-on-surface">1</span> to
            <span class="font-semibold text-on-surface">11</span> of
            <span class="font-semibold text-on-surface">35</span> results</p>
          <nav class="flex items-center gap-1.5">
            <button type="button" class="w-9 h-9 rounded-lg border border-outline-variant text-outline flex items-center justify-center hover:bg-surface-container-low disabled:opacity-40 disabled:cursor-not-allowed transition-all" disabled>
              <span class="material-symbols-outlined text-[18px]">chevron_left</span>
            </button>
            <button type="button" class="w-9 h-9 rounded-lg bg-primary text-white font-bold text-label-md flex items-center justify-center shadow-sm">1</button>
            <button type="button" class="w-9 h-9 rounded-lg border border-outline-variant text-on-surface font-semibold text-label-md flex items-center justify-center hover:bg-surface-container-low transition-all">2</button>
            <button type="button" class="w-9 h-9 rounded-lg border border-outline-variant text-on-surface font-semibold text-label-md flex items-center justify-center hover:bg-surface-container-low transition-all">3</button>
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
</body>

</html>
