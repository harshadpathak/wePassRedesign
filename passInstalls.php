<!DOCTYPE html>
<html class="light" lang="en" style="">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WePass - Pass Installs</title>
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
    <?php
      $template = [
        'name'     => 'Gift-Card-Test',
        'mode'     => 'Personalized Unique',
        'type'     => 'Gift Card',
        'created'  => 'Jun 17, 2026',
        'updated'  => '4 days ago',
        'geo'      => 2,
        'apple'    => 0,
        'google'   => 0,
      ];
      $stats = [
        ['label' => 'Total Records', 'value' => 2, 'icon' => 'database',     'icbg' => 'bg-blue-100',    'ic' => 'text-blue-600',    'bar' => 'bg-blue-500'],
        ['label' => 'Email Sent',    'value' => 2, 'icon' => 'send',         'icbg' => 'bg-indigo-100',  'ic' => 'text-indigo-600',  'bar' => 'bg-indigo-500'],
        ['label' => 'Processing',    'value' => 0, 'icon' => 'sync',         'icbg' => 'bg-sky-100',     'ic' => 'text-sky-600',     'bar' => 'bg-sky-500'],
        ['label' => 'Failed',        'value' => 0, 'icon' => 'warning',      'icbg' => 'bg-red-100',     'ic' => 'text-red-600',     'bar' => 'bg-red-500'],
        ['label' => 'Active Passes', 'value' => 2, 'icon' => 'check_circle', 'icbg' => 'bg-emerald-100', 'ic' => 'text-emerald-600', 'bar' => 'bg-emerald-500'],
      ];
      $records = [
        ['updated' => '15/06/2026 04:57:36', 'updatedAgo' => '1 week ago', 'generated' => '15/06/2026 04:57:36', 'generatedAgo' => '1 week ago', 'pid' => 'c96e3bb8b10ea42682d3b2d88195c12f', 'user' => 'Harsh',    'email' => 'harsh@wepass.io',   'installed' => 1,    'uninstalled' => null],
        ['updated' => '13/06/2026 06:45:57', 'updatedAgo' => '1 week ago', 'generated' => '13/06/2026 06:45:57', 'generatedAgo' => '1 week ago', 'pid' => '0ef89b17f04d2370d242764f461a6092', 'user' => 'John Doe', 'email' => 'example@gmail.com', 'installed' => null, 'uninstalled' => 1],
      ];
    ?>
    <section class="p-margin-desktop space-y-stack-lg pb-16">
      <!-- Breadcrumbs and Header -->
      <div class="flex items-end justify-between gap-4">
        <div class="space-y-1">
          <nav class="flex items-center gap-2 text-label-sm text-outline mb-1">
            <span class="material-symbols-outlined text-[14px] text-gray">home</span> <span class="text-gray font-normal">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray font-normal">Passes</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray-500 font-normal">Pass Installs</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Pass Installs</h2>
        </div>
        <div class="flex items-center gap-3">
          <a href="pushMessage.php"
            class="flex items-center gap-2 bg-primary text-white px-6 py-2.5 rounded-lg text-[14px] hover:bg-primary/90 transition-all font-bold shadow-sm">
            <span class="material-symbols-outlined text-[20px]">notifications</span>
            <span>Send Notifications</span>
          </a>
          <button
            class="flex items-center gap-2 bg-white border border-outline-variant/50 text-on-surface px-6 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold shadow-sm"
            onclick="document.getElementById('filter-panel').classList.toggle('hidden')">
            <span class="material-symbols-outlined text-[20px]">filter_alt</span>
            <span class="">Filter</span>
          </button>
          <a href="passes.php"
            class="flex items-center gap-2 bg-white border border-outline-variant/50 text-on-surface px-6 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold shadow-sm">
            <span class="material-symbols-outlined text-[18px]">arrow_back</span>
            Back
          </a>
        </div>
      </div>

      <!-- Template Summary Banner -->
      <div class="bg-white border border-outline-variant rounded-2xl shadow-sm overflow-hidden">
        <!-- Top: identity -->
        <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6 p-6">
          <div class="flex items-center gap-5">
            <div class="w-16 h-16 rounded-2xl bg-surface-container-low border border-outline-variant/60 flex items-center justify-center shrink-0 p-2">
              <img src="google-logo.png" alt="<?= htmlspecialchars($template['name']) ?>" class="w-full h-full object-contain">
            </div>

            <div>
              <h3 class="text-headline-lg font-bold text-on-surface tracking-tight uppercase"><?= htmlspecialchars($template['name']) ?></h3>
              <div class="flex flex-wrap items-center gap-2 mt-2">
                <span class="inline-flex items-center gap-1.5 bg-primary text-white text-label-sm font-bold px-3 py-1 rounded-full">
                  <span class="material-symbols-outlined text-[16px]">badge</span> <?= htmlspecialchars($template['mode']) ?>
                </span>
                <span class="inline-flex items-center gap-1.5 bg-red-50 text-red-500 text-label-sm font-bold px-3 py-1 rounded-full">
                  <span class="material-symbols-outlined text-[16px]">sell</span> <?= htmlspecialchars($template['type']) ?>
                </span>
              </div>
            </div>
          </div>
          <!-- Installed passes -->
          <div class="shrink-0 w-full lg:w-auto">
            <div class="flex items-center gap-3">
              <!-- Apple -->
              <div class="flex items-center gap-3 bg-white border border-outline-variant rounded-xl pl-3 pr-5 py-2.5 hover:border-on-surface/40 transition-colors">
                <span class="w-9 h-9 rounded-lg bg-on-surface text-white flex items-center justify-center shrink-0">
                  <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                    <path d="M16.365 1.43c0 1.14-.493 2.27-1.177 3.08-.744.9-1.99 1.57-2.987 1.57-.12 0-.23-.02-.3-.03-.01-.06-.04-.22-.04-.39 0-1.15.572-2.27 1.206-2.98.804-.94 2.142-1.64 3.248-1.68.03.13.05.28.05.43zm4.565 15.71c-.03.07-.463 1.58-1.518 3.12-.945 1.34-1.94 2.71-3.43 2.71-1.517 0-1.9-.88-3.63-.88-1.698 0-2.302.91-3.67.91-1.377 0-2.332-1.26-3.428-2.8-1.287-1.82-2.323-4.63-2.323-7.28 0-4.28 2.797-6.55 5.552-6.55 1.448 0 2.675.95 3.6.95.865 0 2.222-1.01 3.902-1.01.613 0 2.886.06 4.374 2.19-.13.09-2.383 1.37-2.383 4.19 0 3.26 2.854 4.42 2.955 4.45z"/>
                  </svg>
                </span>
                <div class="leading-tight">
                  <p class="text-label-sm font-semibold text-outline">Apple Wallet</p>
                  <p class="text-headline-md font-bold text-on-surface"><?= (int) $template['apple'] ?></p>
                </div>
              </div>
              <!-- Google -->
              <div class="flex items-center gap-3 bg-white border border-outline-variant rounded-xl pl-3 pr-5 py-2.5 hover:border-primary/40 transition-colors">
                <span class="w-10 h-10 rounded-xl bg-white border border-outline-variant/60 flex items-center justify-center shrink-0 shadow-sm">
                  <svg viewBox="0 0 24 24" class="w-6 h-6">
                    <rect x="2.5"   y="2"   width="19" height="20"   rx="2.5" fill="#34A853"/>
                    <rect x="2.5"   y="4"   width="19" height="18"   rx="2.5" fill="#FBBC05"/>
                    <rect x="2.5" y="6.5" width="19" height="15.5" rx="2.5" fill="#EA4335"/>
                    <path d="M2 12.2 C 5.5 10.2 8.5 13.8 12 14 C 15.5 14.2 18.5 10.5 22 10.8 L 22 19.5 Q 22 22 19.5 22 L 4.5 22 Q 2 22 2 19.5 Z" fill="#4285F4"/>
                  </svg>
                </span>
                <div class="leading-tight">
                  <p class="text-label-sm font-semibold text-outline">Google Wallet</p>
                  <p class="text-headline-md font-bold text-on-surface"><?= (int) $template['google'] ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Bottom: meta strip -->
        <div class="flex flex-wrap items-center gap-3 px-6 py-4 pt-0">
          <span class="inline-flex items-center gap-2 bg-primary/5 border border-primary/15 rounded-lg px-3 py-2">
            <span class="material-symbols-outlined text-[18px] text-primary">calendar_add_on</span>
            <span class="text-label-md text-outline">Created</span>
            <span class="text-label-md font-bold text-on-surface"><?= htmlspecialchars($template['created']) ?></span>
          </span>
          <span class="inline-flex items-center gap-2 bg-primary/5 border border-primary/15 rounded-lg px-3 py-2">
            <span class="material-symbols-outlined text-[18px] text-primary">schedule</span>
            <span class="text-label-md text-outline">Updated</span>
            <span class="text-label-md font-bold text-on-surface"><?= htmlspecialchars($template['updated']) ?></span>
          </span>
          <span class="inline-flex items-center gap-2 bg-primary/5 border border-primary/15 rounded-lg px-3 py-2">
            <span class="material-symbols-outlined text-[18px] text-primary">location_on</span>
            <span class="text-label-md text-outline">GEO Locations</span>
            <a href="#" class="text-label-md font-bold text-primary">Manual</a>
            <span class="bg-primary text-white text-label-sm font-bold px-2 py-0.5 rounded-full"><?= (int) $template['geo'] ?></span>
          </span>
        </div>
      </div>

      <!-- Filter Panel -->
      <!-- Table Container -->
      <div
        class="bg-white rounded-2xl border border-outline-variant p-6 mb-6 shadow-sm transition-all duration-300 overflow-hidden hidden"
        id="filter-panel">
        <div class="flex flex-col gap-2">
          <div class="flex flex-col gap-2">
            <h3 class="text-primary font-display font-bold text-headline-md">Filter Pass Records</h3>
            <p class="text-gray-400 text-body-md">Refine your search to find specific pass records</p>
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
                  class="js-daterange w-full bg-surface-container-low border-outline-variant rounded-lg pl-10 pr-4 py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all cursor-pointer"
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

      <!-- Main Records Card -->
      <div class="bg-white rounded-2xl border border-outline-variant shadow-sm">
        <div class="p-6 space-y-6">
          <!-- Info note -->
          <div class="flex items-start gap-3 bg-gradient-to-r from-blue-50 to-indigo-50/40 border border-primary/15 rounded-xl p-4">
            <div class="w-9 h-9 rounded-lg bg-primary text-white flex items-center justify-center shrink-0">
              <span class="material-symbols-outlined text-[20px]">info</span>
            </div>
            <p class="text-body-md text-gray-500 leading-relaxed self-center">Below are all pass install records for this template. Track how many devices have installed or uninstalled the pass across Google and Apple wallets. Use the actions menu to view or edit individual passes.</p>
          </div>

          <!-- Records Table -->
          <div class="border border-outline-variant rounded-2xl">
            <div class="overflow-x-auto [&:has(.js-menu-panel:not(.hidden))]:overflow-visible">
              <table class="w-full text-left border-collapse min-w-[1000px]">
                <thead>
                  <tr class="px-5 py-4 text-outline uppercase tracking-widest border-b border-outline-variant">
                    <th class="px-5 py-4 text-label-sm">Last Updated</th>
                    <th class="px-5 py-4 text-label-sm">First Generated</th>
                    <th class="px-5 py-4 text-label-sm">Pass ID</th>
                    <th class="px-5 py-4 text-label-sm">User</th>
                    <th class="px-5 py-4 text-label-sm">Installed</th>
                    <th class="px-5 py-4 text-label-sm">Uninstalled</th>
                    <th class="px-5 py-4 text-label-sm text-right">Action</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-outline-variant/40">
                  <?php foreach ($records as $r): ?>
                  <tr class="group hover:bg-primary/5 transition-colors">
                    <td class="px-5 py-4 align-middle">
                      <p class="text-label-md text-on-surface-variant whitespace-nowrap"><?= htmlspecialchars($r['updated']) ?></p>
                      <p class="text-label-sm text-primary/70"><?= htmlspecialchars($r['updatedAgo']) ?></p>
                    </td>
                    <td class="px-5 py-4 align-middle">
                      <p class="text-label-md text-on-surface-variant whitespace-nowrap"><?= htmlspecialchars($r['generated']) ?></p>
                      <p class="text-label-sm text-primary/70"><?= htmlspecialchars($r['generatedAgo']) ?></p>
                    </td>
                    <td class="px-5 py-4 align-middle">
                      <div class="flex items-center gap-2">
                        <code class="text-label-md font-mono text-on-surface"><?= htmlspecialchars($r['pid']) ?></code>
                        <button type="button" data-copy="<?= htmlspecialchars($r['pid']) ?>"
                          class="js-copy w-7 h-7 rounded-md text-outline hover:bg-blue-50 hover:text-primary flex items-center justify-center transition-all" title="Copy ID">
                          <span class="material-symbols-outlined text-[16px]">content_copy</span>
                        </button>
                      </div>
                    </td>
                    <td class="px-5 py-4 align-middle">
                      <p class="text-body-md font-bold text-on-surface"><?= htmlspecialchars($r['user']) ?></p>
                      <p class="text-label-sm text-outline"><?= htmlspecialchars($r['email']) ?></p>
                    </td>
                    <td class="px-5 py-4 align-middle whitespace-nowrap">
                      <?php if (!empty($r['installed'])): ?>
                      <span class="inline-flex items-center gap-1.5 bg-white border border-outline-variant rounded-full pl-1 pr-2 py-1 shadow-sm">
                        <span class="w-5 h-5 rounded-full bg-on-surface text-white text-[11px] font-bold flex items-center justify-center"><?= (int) $r['installed'] ?></span>
                        <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-on-surface">
                          <path d="M16.365 1.43c0 1.14-.493 2.27-1.177 3.08-.744.9-1.99 1.57-2.987 1.57-.12 0-.23-.02-.3-.03-.01-.06-.04-.22-.04-.39 0-1.15.572-2.27 1.206-2.98.804-.94 2.142-1.64 3.248-1.68.03.13.05.28.05.43zm4.565 15.71c-.03.07-.463 1.58-1.518 3.12-.945 1.34-1.94 2.71-3.43 2.71-1.517 0-1.9-.88-3.63-.88-1.698 0-2.302.91-3.67.91-1.377 0-2.332-1.26-3.428-2.8-1.287-1.82-2.323-4.63-2.323-7.28 0-4.28 2.797-6.55 5.552-6.55 1.448 0 2.675.95 3.6.95.865 0 2.222-1.01 3.902-1.01.613 0 2.886.06 4.374 2.19-.13.09-2.383 1.37-2.383 4.19 0 3.26 2.854 4.42 2.955 4.45z"/>
                        </svg>
                      </span>
                      <?php else: ?>
                      <span class="text-label-md text-on-surface-variant">-</span>
                      <?php endif; ?>
                    </td>
                    <td class="px-5 py-4 align-middle whitespace-nowrap">
                      <?php if (!empty($r['uninstalled'])): ?>
                      <span class="inline-flex items-center gap-1.5 bg-white border border-outline-variant rounded-full pl-1 pr-2 py-1 shadow-sm">
                        <span class="w-5 h-5 rounded-full bg-on-surface text-white text-[11px] font-bold flex items-center justify-center"><?= (int) $r['uninstalled'] ?></span>
                        <svg viewBox="0 0 24 24" class="w-4 h-4">
                          <rect x="2.5"   y="2"   width="19" height="20"   rx="2.5" fill="#34A853"/>
                          <rect x="2.5"   y="4"   width="19" height="18"   rx="2.5" fill="#FBBC05"/>
                          <rect x="2.5" y="6.5" width="19" height="15.5" rx="2.5" fill="#EA4335"/>
                          <path d="M2 12.2 C 5.5 10.2 8.5 13.8 12 14 C 15.5 14.2 18.5 10.5 22 10.8 L 22 19.5 Q 22 22 19.5 22 L 4.5 22 Q 2 22 2 19.5 Z" fill="#4285F4"/>
                        </svg>
                      </span>
                      <?php else: ?>
                      <span class="text-label-md text-on-surface-variant">-</span>
                      <?php endif; ?>
                    </td>
                    <td class="px-5 py-4 align-middle text-right">
                      <div class="relative inline-block js-menu">
                        <button type="button" class="js-menu-toggle w-9 h-9 rounded-full text-outline hover:bg-surface-container-low hover:text-on-surface flex items-center justify-center transition-all">
                          <span class="material-symbols-outlined text-[20px]">more_vert</span>
                        </button>
                        <div class="js-menu-panel hidden absolute right-0 mt-1 w-44 bg-white border border-outline-variant rounded-xl shadow-lg py-1.5 z-50">
                          <a class="flex items-center gap-3 px-4 py-2 text-body-md text-on-surface hover:bg-surface-container-low transition-colors"
                            href="#">
                            <span class="material-symbols-outlined text-secondary text-[20px]">visibility</span>
                            <span class="font-medium">View</span>
                          </a>
                          <a class="flex items-center gap-3 px-4 py-2 text-body-md text-on-surface hover:bg-surface-container-low transition-colors"
                            href="passUpdate.php">
                            <span class="material-symbols-outlined text-secondary text-[20px]">edit</span>
                            <span class="font-medium">Edit</span>
                          </a>
                          <div class="my-1 border-t border-outline-variant/50"></div>
                          <button type="button" class="w-full flex items-center gap-2.5 px-4 py-2 text-label-md text-error hover:bg-error/5 transition-colors">
                            <span class="material-symbols-outlined text-[18px]">delete</span> Delete
                          </button>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>

          <!-- Realtime note -->
          <div class="flex items-center justify-end gap-1.5 text-label-md text-gray-400">
            <span class="material-symbols-outlined text-[16px] text-amber-500">bolt</span>
            Data updates near real time
          </div>
        </div>
      </div>
    </section>
    <?php include('footer.php'); ?>
  </main>
  <!-- Micro-interaction Scripts -->
   <?php include('script.php'); ?>
  <script>
    (function () {
      // Copy pass ID
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
