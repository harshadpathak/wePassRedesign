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
      <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div class="space-y-1">
          <nav class="flex items-center gap-2 text-label-sm text-outline mb-1">
            <span class="material-symbols-outlined text-[14px] text-gray">home</span> <span class="text-gray font-normal">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray-500 font-normal">Pass Templates</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Pass Templates</h2>
        </div>
        <div class="flex items-center gap-3">
          <button
            class="flex items-center gap-2 bg-white border border-outline-variant/50 text-on-surface px-6 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold shadow-sm"
            onclick="document.getElementById('filter-panel').classList.toggle('hidden')">
            <span class="material-symbols-outlined text-[20px]">filter_alt</span>
            <span class="">Filter</span>
          </button>
          <button
            class="flex items-center gap-2 bg-brand-gradient text-on-primary px-4 py-2.5 rounded-lg text-[14px] shadow-lg shadow-primary/20 hover:shadow-xl hover:opacity-90 active:scale-[0.98] transition-all font-bold">
            <span class="material-symbols-outlined text-sm">add</span>
            Create Template
          </button>
        </div>
      </div>
      <!-- Summary Cards / Tabs -->
      <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
        <div
          class="bg-surface-container-lowest p-4 rounded-xl border border-primary/40 shadow-sm flex items-center gap-4 cursor-pointer relative overflow-hidden group">
          <div class="bg-brand-gradient text-on-primary p-2.5 rounded-lg shadow-sm flex items-center justify-center">
            <span class="material-symbols-outlined" style="font-variation-settings: &quot;FILL&quot; 1;">apps</span>
          </div>
          <div class="relative z-10">
            <p class="text-label-sm text-gray-400 font-medium">All Templates</p>
            <p class="text-headline-md text-primary font-bold">793</p>
          </div>
        </div>
        <div
          class="bg-white p-4 rounded-xl border border-outline-variant  transition-colors flex items-center gap-4 cursor-pointer">
          <div class="bg-secondary-container text-secondary p-2.5 rounded-lg flex items-center justify-center">
            <span class="material-symbols-outlined">person</span>
          </div>
          <div>
            <p class="text-label-sm text-gray-400 font-medium">Personalized Unique</p>
            <p class="text-headline-md font-bold">542</p>
          </div>
        </div>
        <div
          class="bg-white p-4 rounded-xl border border-outline-variant transition-colors flex items-center gap-4 cursor-pointer">
          <div class="bg-tertiary-container/40 text-tertiary p-2.5 rounded-lg flex items-center justify-center">
            <span class="material-symbols-outlined">campaign</span>
          </div>
          <div>
            <p class="text-label-sm text-gray-400 font-medium">Generic Advertising</p>
            <p class="text-headline-md font-bold">251</p>
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
              <label class="text-on-surface font-semibold text-label-md">Date Range:</label>
              <div class="relative">
                <span
                  class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-primary text-[20px]">calendar_month</span>
                <input
                  class="js-daterange w-full bg-surface-container-low border-outline-variant rounded-lg pl-10 pr-4 py-3 px-4 text-body-md font-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                  placeholder="Select date range" readonly="" type="text">
              </div>
            </div>
            <!-- Template Type -->
            <div class="md:col-span-3 space-y-2">
              <label class="text-on-surface font-semibold text-label-md">Template Type:</label>
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
              <label class="text-on-surface font-semibold text-label-md">Search:</label>
              <div class="relative">
                <input
                  class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
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
        $templates = [
          ['name' => 'GENERIC-PASS-6',       'id' => 'cc7b3c0875a4a2cb9071274afa4122b7aa0e6fa4', 'icon' => 'person',              'iconbg' => 'bg-primary/10 text-primary',          'type' => 'Generic Pass',  'badge' => 'bg-blue-50 text-blue-600 border-blue-100',          'created' => '22/05/2026 17:03:55', 'updated' => '04/06/2026 16:19:15'],
          ['name' => 'ADVERTISING 34',       'id' => '171f8c83fc297fdeda6eed32fee0a1cf2f503e15', 'icon' => 'campaign',            'iconbg' => 'bg-amber-100 text-amber-700',         'type' => 'Advertising',   'badge' => 'bg-slate-50 text-slate-600 border-slate-200',       'created' => '19/05/2026 23:25:14', 'updated' => '04/06/2026 16:19:15'],
          ['name' => 'LOYALTY-TIER-TEST-01', 'id' => '6ef7b13772f104c2533dd189814704ca5bc161a7', 'icon' => 'loyalty',             'iconbg' => 'bg-primary/10 text-primary',          'type' => 'Loyalty + Tier','badge' => 'bg-blue-100 text-blue-700 border-blue-200',         'created' => '19/05/2026 22:56:31', 'updated' => '04/06/2026 16:19:15'],
          ['name' => 'EVENT-TICKET-20',      'id' => '373b3ea3360feb6220dc003d74eb5630d6866b7d', 'icon' => 'confirmation_number', 'iconbg' => 'bg-emerald-100 text-emerald-700',     'type' => 'Event Ticket',  'badge' => 'bg-emerald-50 text-emerald-700 border-emerald-100', 'created' => '19/05/2026 21:59:10', 'updated' => '04/06/2026 16:19:15'],
          ['name' => 'LOYALTY-CARD-49',      'id' => '9d41f80ac36317a9ea842c491a31ded9d44c20ca', 'icon' => 'badge',               'iconbg' => 'bg-amber-100 text-amber-700',         'type' => 'Loyalty Card',  'badge' => 'bg-amber-50 text-amber-700 border-amber-100',       'created' => '18/05/2026 22:39:36', 'updated' => '04/06/2026 16:19:15'],
          ['name' => 'GIFT-CARD-43',         'id' => '2563bc42f3ca8df571d6562b15dcc2f16b8564da', 'icon' => 'person',              'iconbg' => 'bg-primary/10 text-primary',          'type' => 'Gift Card',     'badge' => 'bg-error-container/40 text-error border-error/10',  'created' => '18/05/2026 22:15:18', 'updated' => '04/06/2026 16:19:15'],
        ];
      ?>
      <div class="bg-white rounded-2xl border border-outline-variant overflow-hidden shadow-sm [&:has(.js-menu-panel:not(.hidden))]:overflow-visible">
        <div class="overflow-x-auto [&:has(.js-menu-panel:not(.hidden))]:overflow-visible">
          <table class="responsive-table w-full text-left border-collapse">
            <thead class="bg-surface-container-low/50">
              <tr>
                <th
                  class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">
                  Pass Template</th>
                <th
                  class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">
                  Pass Type</th>
                <th
                  class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">
                  Created</th>
                <th
                  class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">
                  Updated</th>
                <th
                  class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant text-right">
                  Action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-outline-variant/30">
              <?php foreach ($templates as $t): ?>
              <tr class="hover:bg-surface-container-low transition-colors group">
                <td class="cell-main px-6 py-4">
                  <div class="flex items-center gap-4">
                    <div class="w-10 h-10 rounded-xl <?= $t['iconbg'] ?> flex items-center justify-center">
                      <span class="material-symbols-outlined" style="font-variation-settings: &quot;FILL&quot; 1;"><?= $t['icon'] ?></span>
                    </div>
                    <div>
                      <p class="text-body-md text-on-surface font-medium"><?= htmlspecialchars($t['name']) ?></p>
                      <p class="text-label-sm text-outline font-mono whitespace-nowrap font-medium">ID: <?= htmlspecialchars($t['id']) ?></p>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4" data-label="Pass Type">
                  <span class="inline-flex items-center py-1 rounded-full text-[10px] font-bold uppercase <?= $t['badge'] ?> border whitespace-nowrap px-2"><?= htmlspecialchars($t['type']) ?></span>
                </td>
                <td class="px-6 py-4 text-label-md text-on-surface-variant" data-label="Created"><?= htmlspecialchars($t['created']) ?></td>
                <td class="px-6 py-4 text-label-md text-on-surface-variant" data-label="Updated"><?= htmlspecialchars($t['updated']) ?></td>
                <td class="cell-action px-6 py-4 text-right">
                  <div class="relative inline-block js-menu">
                    <button type="button" class="js-menu-toggle material-symbols-outlined text-outline hover:text-primary transition-colors p-1 rounded-lg hover:bg-surface-container-high">more_vert</button>
                    <div class="js-menu-panel hidden absolute right-0 mt-2 w-48 border border-outline-variant/50 rounded-xl shadow-xl transition-all duration-200 z-50 overflow-hidden bg-white">
                      <div class="py-1.5">
                        <a class="flex items-center gap-3 px-4 py-2 text-body-md text-on-surface hover:bg-surface-container-low transition-colors" href="#"><span class="material-symbols-outlined text-secondary text-[20px]">visibility</span><span class="font-medium">View</span></a>
                        <a class="flex items-center gap-3 px-4 py-2 text-body-md text-on-surface hover:bg-surface-container-low transition-colors" href="#"><span class="material-symbols-outlined text-secondary text-[20px]">edit</span><span class="font-medium">Edit</span></a>
                        <a class="flex items-center gap-3 px-4 py-2 text-body-md text-on-surface hover:bg-surface-container-low transition-colors" href="geoLocation.php"><span class="material-symbols-outlined text-secondary text-[20px]">location_on</span><span class="font-medium">GEO location</span></a>
                        <div class="border-t border-outline-variant/30 my-1 mx-2"></div>
                        <a class="flex items-center gap-3 px-4 py-2 text-body-md text-error hover:bg-error-container/40 transition-colors" href="#"><span class="material-symbols-outlined text-[20px]">delete</span><span class="font-bold">Delete</span></a>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
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