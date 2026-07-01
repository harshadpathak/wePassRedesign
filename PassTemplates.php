<!DOCTYPE html>
<html class="light" lang="en">

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
            <span class="material-symbols-outlined text-[14px] text-gray">home</span> 
            <span class="text-gray font-normal">Dashboard</span>
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
            <span class="material-symbols-outlined font-variation-fill">apps</span>
          </div>
          <div class="relative z-10">
            <p class="text-label-sm text-gray-400 font-medium">All Templates</p>
            <p class="text-headline-md text-primary font-bold">793</p>
          </div>
        </div>
        <div
          class="bg-white p-4 rounded-xl border border-outline-variant  transition-colors flex items-center gap-4 cursor-pointer">
          <div class="bg-primary/10 text-primary p-2.5 rounded-lg flex items-center justify-center">
            <span class="material-symbols-outlined font-variation-fill">how_to_reg</span>
          </div>
          <div>
            <p class="text-label-sm text-gray-400 font-medium">Personalized Unique</p>
            <p class="text-headline-md font-bold">542</p>
          </div>
        </div>
        <div
          class="bg-white p-4 rounded-xl border border-outline-variant transition-colors flex items-center gap-4 cursor-pointer">
          <div class="bg-amber-100 text-amber-700 p-2.5 rounded-lg flex items-center justify-center">
            <span class="material-symbols-outlined font-variation-fill">campaign</span>
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
                  class="js-daterange w-full bg-surface-container-low border-outline-variant rounded-lg pl-10 pr-4 py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
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
        $templates = [
          ['name' => 'ADVERTISING 34',       'id' => '171f8c83fc297fdeda6eed32fee0a1cf2f503e15', 'icon' => 'campaign',       'iconbg' => 'bg-orange-50 text-orange-600',   'type' => 'Advertising',    'badge' => 'bg-orange-50 text-orange-600 border-orange-100',   'created' => '19/05/2026 23:25:14', 'updated' => '04/06/2026 16:19:15'],
          ['name' => 'GIFT-CARD-43',         'id' => '2563bc42f3ca8df571d6562b15dcc2f16b8564da', 'icon' => 'how_to_reg',     'iconbg' => 'bg-primary/10 text-primary',       'type' => 'Gift Card',      'badge' => 'bg-rose-50 text-rose-600 border-rose-100',         'created' => '18/05/2026 22:15:18', 'updated' => '04/06/2026 16:19:15'],
          ['name' => 'LOYALTY-CARD-49',      'id' => '9d41f80ac36317a9ea842c491a31ded9d44c20ca', 'icon' => 'how_to_reg',     'iconbg' => 'bg-primary/10 text-primary',     'type' => 'Loyalty Card',   'badge' => 'bg-amber-50 text-amber-600 border-amber-100',      'created' => '18/05/2026 22:39:36', 'updated' => '04/06/2026 16:19:15'],
          ['name' => 'LOYALTY-TIER-TEST-01', 'id' => '6ef7b13772f104c2533dd189814704ca5bc161a7', 'icon' => 'how_to_reg',     'iconbg' => 'bg-primary/10 text-primary',   'type' => 'Loyalty + Tier', 'badge' => 'bg-violet-50 text-violet-600 border-violet-100',   'created' => '19/05/2026 22:56:31', 'updated' => '04/06/2026 16:19:15'],
          ['name' => 'GENERIC-PASS-6',       'id' => 'cc7b3c0875a4a2cb9071274afa4122b7aa0e6fa4', 'icon' => 'how_to_reg',     'iconbg' => 'bg-primary/10 text-primary',       'type' => 'Generic Pass',   'badge' => 'bg-blue-50 text-blue-600 border-blue-100',         'created' => '22/05/2026 17:03:55', 'updated' => '04/06/2026 16:19:15'],
          ['name' => 'COUPON-1',             'id' => 'a4a2cb0875a4a2cb9071274afa4122b7aa0704ca', 'icon' => 'how_to_reg',     'iconbg' => 'bg-primary/10 text-primary',       'type' => 'Coupon',         'badge' => 'bg-teal-50 text-teal-600 border-teal-100',         'created' => '22/05/2026 17:03:55', 'updated' => '04/06/2026 16:19:15'],
          ['name' => 'EVENT-TICKET-20',      'id' => '373b3ea3360feb6220dc003d74eb5630d6866b7d', 'icon' => 'how_to_reg',     'iconbg' => 'bg-primary/10 text-primary', 'type' => 'Event Ticket',   'badge' => 'bg-emerald-50 text-emerald-600 border-emerald-100','created' => '19/05/2026 21:59:10', 'updated' => '04/06/2026 16:19:15'],
          ['name' => 'BOARDING-PASS-3',      'id' => '8a1c2d3e4f5061728394a5b6c7d8e9f0a1b2c3d4', 'icon' => 'how_to_reg',     'iconbg' => 'bg-primary/10 text-primary',         'type' => 'Boarding Pass',  'badge' => 'bg-sky-50 text-sky-600 border-sky-100',           'created' => '19/05/2026 21:59:10', 'updated' => '04/06/2026 16:19:15'],
          ['name' => 'MEMBERSHIP-CARD-7',    'id' => '2b3c4d5e6f708192a3b4c5d6e7f8091a2b3c4d5e', 'icon' => 'how_to_reg',     'iconbg' => 'bg-primary/10 text-primary',   'type' => 'Membership Card','badge' => 'bg-indigo-50 text-indigo-600 border-indigo-100',   'created' => '19/05/2026 21:59:10', 'updated' => '04/06/2026 16:19:15'],
          ['name' => 'INSURANCE-PASS-5',     'id' => '3c4d5e6f708192a3b4c5d6e7f8091a2b3c4d5e6f', 'icon' => 'how_to_reg',     'iconbg' => 'bg-primary/10 text-primary',       'type' => 'Insurance Pass', 'badge' => 'bg-lime-50 text-lime-600 border-lime-100',         'created' => '19/05/2026 21:59:10', 'updated' => '04/06/2026 16:19:15'],
          ['name' => 'BUSINESS-CARD-10',     'id' => '4d5e6f708192a3b4c5d6e7f8091a2b3c4d5e6f70', 'icon' => 'how_to_reg',     'iconbg' => 'bg-primary/10 text-primary',    'type' => 'Business Card',  'badge' => 'bg-slate-50 text-slate-600 border-slate-200',      'created' => '19/05/2026 21:59:10', 'updated' => '04/06/2026 16:19:15'],
          ['name' => 'WARRANTY-PASS-70',     'id' => '5e6f708192a3b4c5d6e7f8091a2b3c4d5e6f7081', 'icon' => 'how_to_reg',     'iconbg' => 'bg-primary/10 text-primary',         'type' => 'Warranty Pass',  'badge' => 'bg-red-50 text-red-600 border-red-100',           'created' => '19/05/2026 21:59:10', 'updated' => '04/06/2026 16:19:15'],
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
                      <span class="material-symbols-outlined font-variation-fill"><?= $t['icon'] ?></span>
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
                        <a class="js-drawer-open flex items-center gap-3 px-4 py-2 text-body-md text-on-surface hover:bg-surface-container-low transition-colors" href="#" data-drawer-target="#drawer-pass-preview" data-drawer-name="<?= htmlspecialchars($t['name']) ?>" data-drawer-icon="<?= $t['type'] === 'Advertising' ? 'campaign' : 'how_to_reg' ?>"><span class="material-symbols-outlined text-secondary text-[20px]">visibility</span><span class="font-medium">View</span></a>
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

    <!-- ===== Pass Preview Drawer (slides in from left) ===== -->
    <div id="drawer-pass-preview" class="js-drawer hidden fixed inset-0 z-[100]">
      <div class="js-drawer-close absolute inset-0 bg-black/40 backdrop-blur-sm"></div>
      <aside class="js-drawer-panel absolute left-0 top-0 h-full w-full max-w-[820px] bg-white shadow-2xl flex flex-col -translate-x-full transition-transform duration-300 ease-out">
        <!-- Header -->
        <div class="flex items-center justify-between gap-3 px-6 py-5 border-b border-outline-variant/60 shrink-0">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-brand-gradient text-white flex items-center justify-center shrink-0 shadow-md shadow-primary/20">
              <span class="js-drawer-icon material-symbols-outlined text-[22px]">how_to_reg</span>
            </div>
            <div>
              <h3 class="js-drawer-title text-headline-md font-bold text-on-surface">Gift-Card-01</h3>
              <p class="text-body-md text-gray-400">Pass preview</p>
            </div>
          </div>
          <button type="button" class="js-drawer-close w-9 h-9 rounded-lg text-outline hover:bg-surface-container-low hover:text-on-surface flex items-center justify-center transition-all">
            <span class="material-symbols-outlined text-[20px]">close</span>
          </button>
        </div>

        <!-- Body -->
        <div class="flex-1 overflow-y-auto px-6 pt-12 pb-10 flex flex-col items-center">
          <!-- Platform tabs -->
          <div class="flex items-center gap-2 mb-5">
            <button type="button" class="inline-flex items-center gap-1.5 rounded-full bg-primary text-white px-3.5 py-1.5 text-label-md font-bold shadow-sm">
              <svg viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4"><path d="M16.365 1.43c0 1.14-.493 2.27-1.177 3.08-.744.9-1.99 1.57-2.987 1.57-.12 0-.23-.02-.3-.03-.01-.06-.04-.22-.04-.39 0-1.15.572-2.27 1.206-2.98.804-.94 2.142-1.64 3.248-1.68.03.13.05.28.05.43zm4.565 15.71c-.03.07-.463 1.58-1.518 3.12-.945 1.34-1.94 2.71-3.43 2.71-1.517 0-1.9-.88-3.63-.88-1.698 0-2.302.91-3.67.91-1.377 0-2.332-1.26-3.428-2.8-1.287-1.82-2.323-4.63-2.323-7.28 0-4.28 2.797-6.55 5.552-6.55 1.448 0 2.675.95 3.6.95.865 0 2.222-1.01 3.902-1.01.613 0 2.886.06 4.374 2.19-.13.09-2.383 1.37-2.383 4.19 0 3.26 2.854 4.42 2.955 4.45z"/></svg>Apple
            </button>
            <button type="button" class="inline-flex items-center gap-1.5 rounded-full bg-surface-container-low border border-outline-variant text-secondary px-3.5 py-1.5 text-label-md font-bold">
              <svg viewBox="0 0 24 24" class="h-4 w-4"><rect x="2.5" y="2" width="19" height="20" rx="2.5" fill="#34A853"/><rect x="2.5" y="4" width="19" height="18" rx="2.5" fill="#FBBC05"/><rect x="2.5" y="6.5" width="19" height="15.5" rx="2.5" fill="#EA4335"/><path d="M2 12.2 C 5.5 10.2 8.5 13.8 12 14 C 15.5 14.2 18.5 10.5 22 10.8 L 22 19.5 Q 22 22 19.5 22 L 4.5 22 Q 2 22 2 19.5 Z" fill="#4285F4"/></svg>Google
            </button>
          </div>

          <!-- Pass card (flip) -->
          <div class="pass-flip w-[260px]">
            <div class="pass-flip-inner">
              <!-- Front -->
              <div class="pass-face rounded-[22px] overflow-hidden shadow-xl bg-[#DD3D1F] min-h-[350px]">
                <div class="px-4 pt-3 pb-5 text-white">
                  <!-- Brand header -->
                  <div class="flex items-center gap-2 border-b border-white/50 pb-3 mb-4">
                    <img src="favicon-new.png" alt="" class="h-10 w-10 rounded-full bg-white p-px object-contain shrink-0">
                    <h4 class="text-[15px] font-normal tracking-normal text-white">Titan Watches</h4>
                  </div>
                  <!-- Balance -->
                  <p class="text-[17px] mb-4">Gift card: ISK1004</p>
                  <!-- Valid till -->
                  <p class="text-[10px] tracking-[0.15em] text-white/90">VALID TILL</p>
                  <p class="text-xs font-bold mb-4">25/06/2026</p>
                  <!-- QR -->
                  <div class="bg-white rounded-lg p-2 w-[132px] mx-auto">
                    <img class="w-full h-full" alt="QR code" src="https://api.qrserver.com/v1/create-qr-code/?size=240x240&margin=0&data=HARSH1234">
                  </div>
                  <p class="text-center text-[13px] font-normal mt-2 truncate">HARSH1234...</p>
                </div>
                <!-- Strip image -->
                <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=400&q=60" alt="" class="w-full h-32 object-cover">
              </div>
              <!-- Back -->
              <div class="pass-face pass-face-back rounded-[22px] overflow-hidden shadow-xl bg-white p-6">
                <img src="favicon-new.png" alt="" class="h-10 w-10 rounded-full bg-white p-px object-contain mb-3">
                <h4 class="text-[22px] font-medium leading-tight text-black mb-4">Gift Card: <span>ISK1004</span></h4>
                <div class="space-y-3">
                  <div>
                    <strong class="text-sm font-medium text-black">Updated</strong><br>
                    <span class="text-xs font-normal text-black">Jun 04, 2026, 08:32 AM</span>
                  </div>
                  <div>
                    <strong class="text-sm font-medium text-black">Pin</strong><br>
                    <span class="break-words text-xs font-normal text-black">455</span>
                  </div>
                  <div>
                    <strong class="text-sm font-medium text-black">Event Number</strong><br>
                    <span class="break-words text-xs font-normal text-black">5436</span>
                  </div>
                  <div>
                    <strong class="text-sm font-medium text-black">VALID TILL</strong><br>
                    <span class="text-xs font-normal text-black">25/06/2026</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Flip -->
          <button type="button" id="flip-pass" class="mt-5 inline-flex items-center gap-1.5 rounded-lg border border-primary/40 text-primary text-[13px] font-bold px-5 py-2 hover:bg-primary/5 transition-colors">
            Flip <span class="material-symbols-outlined text-[18px]">cached</span>
          </button>
        </div>
      </aside>
    </div>

    <?php include('footer.php'); ?>
  </main>
  <style>
    /* 3D flip for the pass preview */
    .pass-flip { perspective: 1200px; }
    .pass-flip-inner {
      position: relative;
      transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
      transform-style: preserve-3d;
    }
    .pass-flip.is-flipped .pass-flip-inner { transform: rotateY(180deg); }
    .pass-face { backface-visibility: hidden; -webkit-backface-visibility: hidden; }
    .pass-face-back { position: absolute; inset: 0; transform: rotateY(180deg); background: #fff; }
  </style>
  <!-- Micro-interaction Scripts -->
   <?php include('script.php'); ?>
  <script>
    (function () {
      // Flip the pass preview
      var flipBtn = document.getElementById('flip-pass');
      var card = document.querySelector('.pass-flip');
      if (flipBtn && card) {
        flipBtn.addEventListener('click', function () { card.classList.toggle('is-flipped'); });
      }

      function openDrawer(sel) {
        var d = document.querySelector(sel);
        if (!d) return;
        d.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
        // next frame → slide in
        requestAnimationFrame(function () {
          var panel = d.querySelector('.js-drawer-panel');
          if (panel) panel.classList.remove('-translate-x-full');
        });
      }
      function closeDrawer(d) {
        var panel = d.querySelector('.js-drawer-panel');
        if (panel) panel.classList.add('-translate-x-full');
        setTimeout(function () {
          d.classList.add('hidden');
          if (!document.querySelector('.js-drawer:not(.hidden)')) document.body.style.overflow = '';
        }, 300);
      }
      document.querySelectorAll('[data-drawer-target]').forEach(function (el) {
        el.addEventListener('click', function (e) {
          e.preventDefault();
          var target = el.getAttribute('data-drawer-target');
          var d = document.querySelector(target);
          if (d) {
            var name = el.getAttribute('data-drawer-name');
            var icon = el.getAttribute('data-drawer-icon');
            var titleEl = d.querySelector('.js-drawer-title');
            var iconEl = d.querySelector('.js-drawer-icon');
            if (name && titleEl) titleEl.textContent = name;
            if (icon && iconEl) iconEl.textContent = icon;
          }
          openDrawer(target);
        });
      });
      document.querySelectorAll('.js-drawer .js-drawer-close').forEach(function (el) {
        el.addEventListener('click', function () { closeDrawer(el.closest('.js-drawer')); });
      });
      document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') { document.querySelectorAll('.js-drawer:not(.hidden)').forEach(closeDrawer); }
      });
    })();
  </script>
</body>

</html>