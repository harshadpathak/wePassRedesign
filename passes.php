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
      <!-- Header Section -->
      <div class="flex items-end justify-between">
        <div class="space-y-1">
          <nav class="flex items-center gap-2 text-label-sm text-outline mb-1">
            <span class="material-symbols-outlined text-[14px] text-gray">home</span> <span class="text-gray font-normal">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray-500 font-normal">Passes</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Passes</h2>
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
      <!-- Summary Cards / Tabs -->
      <div class="border border-outline-variant rounded-2xl p-4 w-full bg-surface-container-lowest">
        <div class="flex flex-col md:flex-row items-stretch gap-6">
          <!-- Records Section -->
          <div class="flex-1 flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary shrink-0">
              <span class="material-symbols-outlined text-[24px]">mail</span>
            </div>
            <div class="flex flex-col">
              <h3 class="text-on-surface font-bold text-body-lg font-display mb-1">Records</h3>
              <p class="text-gray-400 text-label-md font-body-md">Email delivery logs for personalized passes</p>
            </div>
          </div>
          <!-- Divider -->
          <div class="hidden md:block w-px bg-outline-variant/30"></div>
          <!-- Installs Section -->
          <div class="flex-1 flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary shrink-0">
              <span class="material-symbols-outlined text-[24px]">inbox</span>
            </div>
            <div class="flex flex-col">
              <h3 class="text-on-surface font-bold text-body-lg font-display mb-1">Installs</h3>
              <p class="text-gray-400 text-label-md font-body-md">Installation events across wallet platforms</p>
            </div>
          </div>
          <!-- Divider -->
          <div class="hidden md:block w-px bg-outline-variant/30"></div>
          <!-- Analytics Section -->
          <div class="flex-1 flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary shrink-0">
              <span class="material-symbols-outlined text-[24px]">query_stats</span>
            </div>
            <div class="flex flex-col">
              <h3 class="text-on-surface font-bold text-body-lg font-display mb-1">Analytics</h3>
              <p class="text-gray-400 text-label-md font-body-md">Distribution and activity reports</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Table Container -->
      <div
        class="bg-white rounded-2xl border border-outline-variant p-6 mb-6 shadow-sm transition-all duration-300 overflow-hidden hidden"
        id="filter-panel">
        <div class="flex flex-col gap-2">
          <div class="flex flex-col gap-2">
            <h3 class="text-primary font-display font-bold text-headline-md">Filter Pass Templates</h3>
            <p class="text-gray-400 text-body-md">Refine your search to find specific templates</p>
          </div>
          <div class="border-t border-outline-variant/30"></div>
          <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-end">
            <!-- Date Range -->
            <div class="md:col-span-3 space-y-2">
              <label class="text-on-surface font-bold text-label-md">Date Range:</label>
              <div class="relative">
                <span
                  class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-primary text-[20px]">calendar_month</span>
                <input
                  class="js-daterange w-full bg-surface-container-low border-outline-variant rounded-lg pl-10 pr-4 py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                  placeholder="Select date range" readonly="" type="text">
              </div>
            </div>
            <!-- Template Type -->
            <div class="md:col-span-3 space-y-2">
              <label class="text-on-surface font-bold text-label-md">Template Type:</label>
              <div class="relative">
                <select class="w-full js-select2">
                  <option>All Types</option>
                  <option>Generic Pass</option>
                  <option>Advertising</option>
                  <option>Loyalty + Tier</option>
                  <option>Event Ticket</option>
                  <option>Loyalty Card</option>
                  <option>Gift Card</option>
                </select>
              </div>
            </div>
            <!-- Search -->
            <div class="md:col-span-3 space-y-2">
              <label class="text-on-surface font-bold text-label-md">Search:</label>
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
        $passes = [
          ['name' => 'boarding kg-1', 'type' => 'Gift Card',       'icon' => 'card_giftcard',       'records' => 1, 'installs' => 1],
          ['name' => 'loyalty-card-api-2',    'type' => 'Gift Card',       'icon' => 'card_giftcard',       'records' => 1, 'installs' => 1],
          ['name' => 'loyalty-card-api-1',     'type' => 'Membership Card', 'icon' => 'badge',               'records' => 2, 'installs' => 2],
          ['name' => 'Loyalty-Tier-19',  'type' => 'Loyalty Card',    'icon' => 'loyalty',             'records' => 5, 'installs' => 4],
          ['name' => 'Gift-Card-26',    'type' => 'Event Ticket',    'icon' => 'confirmation_number', 'records' => 8, 'installs' => 6],
          ['name' => 'Loyalty-Tier-jp-new','type' => 'Advertising',     'icon' => 'campaign',            'records' => 3, 'installs' => 2],
        ];
      ?>

      <!-- Main Card -->
      <div class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
        <!-- Card Header -->
        <div class="flex items-center justify-between gap-4 px-6 py-5 border-b border-outline-variant/60">
          <div class="flex items-center gap-3">
            <div class="w-9 h-9 bg-blue-50 text-primary rounded-lg flex items-center justify-center">
              <span class="material-symbols-outlined text-[20px]">style</span>
            </div>
            <h3 class="text-headline-md font-bold text-on-surface">Pass List</h3>
          </div>
          <span class="bg-primary/10 text-primary text-label-md font-bold px-4 py-1.5 rounded-full">793 Passes</span>
        </div>

        <!-- Pass Card Grid -->
        <div class="p-6 grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-5">
        <?php foreach ($passes as $pass): ?>
        <div class="group relative bg-surface-container-low/30 rounded-2xl border border-outline-variant hover:border-primary/50 hover:bg-white transition-colors duration-200 flex flex-col overflow-hidden [&:has(.js-menu-panel:not(.hidden))]:overflow-visible">
          <!-- Header -->
          <div class="flex items-center gap-4 p-5">
            <div class="w-12 h-12 rounded-xl bg-brand-gradient text-white flex items-center justify-center shrink-0 shadow-md shadow-primary/20">
              <span class="material-symbols-outlined text-[24px]"><?= htmlspecialchars($pass['icon']) ?></span>
            </div>
            <div class="min-w-0 flex-1">
              <p class="text-body-lg font-bold text-on-surface truncate uppercase"><?= htmlspecialchars($pass['name']) ?></p>
              <span class="inline-flex items-center gap-1 mt-0.5 bg-surface-container-low text-secondary text-label-sm font-semibold px-2 py-0.5 rounded-full">
                <span class="material-symbols-outlined text-[14px]">sell</span>
                <?= htmlspecialchars($pass['type']) ?>
              </span>
            </div>
            <!-- Action menu -->
            <div class="relative shrink-0 js-menu">
              <button type="button"
                class="js-menu-toggle w-9 h-9 rounded-full text-outline hover:bg-surface-container-low hover:text-on-surface flex items-center justify-center transition-all">
                <span class="material-symbols-outlined text-[20px]">more_vert</span>
              </button>
              <div class="js-menu-panel hidden absolute right-0 mt-1 w-48 bg-white border border-outline-variant rounded-xl shadow-lg py-1.5 z-20">
                <a href="passStatistics.php" class="w-full flex items-center gap-2.5 px-4 py-2 text-label-md text-on-surface hover:bg-surface-container-low transition-colors">
                  <span class="material-symbols-outlined text-[18px] text-primary">analytics</span> View Analytics
                </a>
              </div>
            </div>
          </div>

          <!-- Stats (main highlighted info, clickable) -->
          <div class="px-5 pb-5 mt-auto space-y-3">
            <!-- Records -->
            <a href="passRecords.php"
              class="group/stat w-full flex items-center gap-4 bg-amber-50 border border-amber-200 rounded-xl p-3 hover:bg-amber-100 hover:border-amber-300 transition-all">
              <span class="w-11 h-11 rounded-lg bg-amber-500/15 text-amber-600 flex items-center justify-center shrink-0">
                <span class="material-symbols-outlined text-[22px]">receipt_long</span>
              </span>
              <div class="text-left leading-tight">
                <p class="text-label-sm font-bold uppercase tracking-wider text-amber-600/90">Records</p>
                <p class="text-headline-md font-bold text-amber-700"><?= (int) $pass['records'] ?></p>
              </div>
              <span class="material-symbols-outlined ml-auto text-amber-500/70 text-[20px] group-hover/stat:translate-x-0.5 transition-transform">arrow_forward</span>
            </a>
            <!-- Installs -->
            <a href="passInstalls.php"
              class="group/stat w-full flex items-center gap-4 bg-emerald-50 border border-emerald-200 rounded-xl p-3 hover:bg-emerald-100 hover:border-emerald-300 transition-all">
              <span class="w-11 h-11 rounded-lg bg-emerald-500/15 text-emerald-600 flex items-center justify-center shrink-0">
                <span class="material-symbols-outlined text-[22px]">install_mobile</span>
              </span>
              <div class="text-left leading-tight">
                <p class="text-label-sm font-bold uppercase tracking-wider text-emerald-600/90">Installs</p>
                <p class="text-headline-md font-bold text-emerald-700"><?= (int) $pass['installs'] ?></p>
              </div>
              <span class="material-symbols-outlined ml-auto text-emerald-500/70 text-[20px] group-hover/stat:translate-x-0.5 transition-transform">arrow_forward</span>
            </a>
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
</body>

</html>