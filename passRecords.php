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
    <?php
      $template = [
        'name'     => 'gift-card-1-api',
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
        ['pid' => 'ca5473d6e81a675c031841ed3ebd7656', 'user' => 'Kartik Doe', 'email' => 'hardik@wepass.io', 'updated' => '17/06/2026 13:35:50', 'updatedAgo' => 'updated 4 days ago', 'created' => '17/06/2026 13:35:50', 'pass' => 'Active', 'send' => 'Send', 'exp' => '25/03/2027 05:29:59', 'archive' => '-'],
        ['pid' => 'aedc8a5a01c8695d28087ed0b387630e', 'user' => 'Kartik Doe', 'email' => 'hardik@wepass.io', 'updated' => '17/06/2026 13:40:36', 'updatedAgo' => 'updated 4 days ago', 'created' => '17/06/2026 13:35:24', 'pass' => 'Active', 'send' => 'Send', 'exp' => '25/03/2027 05:29:59', 'archive' => '-'],
      ];
    ?>
    <section class="p-margin-desktop space-y-stack-lg pb-16">
      <!-- Breadcrumbs and Header -->
      <div class="flex items-end justify-between gap-4">
        <div class="space-y-1">
          <nav class="flex items-center gap-2 text-label-sm text-outline mb-1">
            <span class="material-symbols-outlined text-[14px] text-blue-600">home</span> <span class="text-blue-600 font-semibold">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-blue-600 font-semibold">Passes</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-on-surface font-semibold">Pass Records</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Pass Records</h2>
        </div>
        <div class="flex items-center gap-3">
          <button type="button"
            onclick="document.getElementById('filter-panel').classList.toggle('hidden')"
            class="inline-flex items-center gap-2 bg-white border border-outline-variant text-on-surface font-semibold text-label-md px-4 py-2.5 rounded-lg shadow-sm hover:bg-surface-container-low transition-all">
            <span class="material-symbols-outlined text-[18px]">filter_list</span>
            Filter
          </button>
          <a href="#"
            class="inline-flex items-center gap-2 bg-white border border-outline-variant text-on-surface font-semibold text-label-md px-4 py-2.5 rounded-lg shadow-sm hover:bg-surface-container-low transition-all">
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
            <div class="w-16 h-16 rounded-2xl bg-brand-gradient text-white flex items-center justify-center shrink-0 shadow-lg shadow-primary/20">
              <span class="material-symbols-outlined text-[32px]">cards</span>
            </div>
            <div>
              <h3 class="text-headline-lg font-bold text-on-surface tracking-tight"><?= htmlspecialchars($template['name']) ?></h3>
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
            <p class="flex items-center gap-1.5 text-label-sm font-bold uppercase tracking-wider text-outline mb-3">
              <span class="material-symbols-outlined text-[16px] text-primary">download</span> Active Installed Pass
            </p>
            <div class="flex items-center gap-3">
              <!-- Apple -->
              <div class="flex items-center gap-3 bg-white border border-outline-variant rounded-xl pl-3 pr-5 py-2.5 hover:border-on-surface/40 transition-colors">
                <span class="w-9 h-9 rounded-lg bg-on-surface text-white flex items-center justify-center shrink-0">
                  <span class="material-symbols-outlined text-[20px]">phone_iphone</span>
                </span>
                <div class="leading-tight">
                  <p class="text-label-sm font-semibold text-outline">Apple Wallet</p>
                  <p class="text-headline-md font-bold text-on-surface"><?= (int) $template['apple'] ?></p>
                </div>
              </div>
              <!-- Google -->
              <div class="flex items-center gap-3 bg-white border border-outline-variant rounded-xl pl-3 pr-5 py-2.5 hover:border-emerald-400/50 transition-colors">
                <span class="w-9 h-9 rounded-lg bg-emerald-500 text-white flex items-center justify-center shrink-0">
                  <span class="material-symbols-outlined text-[20px]">android</span>
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
        <div class="flex flex-wrap items-center gap-3 px-6 py-4 border-t border-outline-variant/60 bg-surface-container-low/30">
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
      <div id="filter-panel"
        class="bg-white rounded-2xl border border-outline-variant p-6 shadow-sm transition-all duration-300 overflow-hidden hidden">
        <h3 class="text-primary font-display font-bold text-headline-md">Filter Records</h3>
        <p class="text-secondary text-body-md mt-1">Search by name, email, or pass ID</p>
        <div class="border-t border-outline-variant/30 my-4"></div>
        <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-end">
          <div class="md:col-span-4 space-y-2">
            <label class="text-on-surface font-bold text-label-md">Search</label>
            <input class="w-full bg-surface-container-low border-outline-variant rounded-lg py-2.5 px-4 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
              placeholder="Name, email, or pass ID..." type="text">
          </div>
          <div class="md:col-span-3 space-y-2">
            <label class="text-on-surface font-bold text-label-md">Pass Status</label>
            <select class="w-full js-select2" data-allow-clear="false">
              <option>All Status</option>
              <option>Active</option>
              <option>Expired</option>
              <option>Archived</option>
            </select>
          </div>
          <div class="md:col-span-3 space-y-2">
            <label class="text-on-surface font-bold text-label-md">Send Status</label>
            <select class="w-full js-select2" data-allow-clear="false">
              <option>All</option>
              <option>Send</option>
              <option>Pending</option>
              <option>Failed</option>
            </select>
          </div>
          <div class="md:col-span-2 flex items-center gap-3">
            <button class="flex-1 flex items-center justify-center gap-2 bg-brand-gradient text-on-primary px-4 py-2.5 rounded-lg text-[14px] shadow-md shadow-primary/20 hover:opacity-95 transition-all font-bold">
              <span class="material-symbols-outlined text-[20px]">search</span>
            </button>
            <button class="flex-1 flex items-center justify-center gap-2 bg-surface border border-outline-variant text-secondary px-4 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold">
              <span class="material-symbols-outlined text-[20px]">cancel</span>
            </button>
          </div>
        </div>
      </div>

      <!-- Main Records Card -->
      <div class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
        <div class="p-6 space-y-6">
          <!-- Info note -->
          <div class="flex items-start gap-3 bg-gradient-to-r from-blue-50 to-indigo-50/40 border border-primary/15 rounded-xl p-4">
            <div class="w-9 h-9 rounded-lg bg-primary text-white flex items-center justify-center shrink-0">
              <span class="material-symbols-outlined text-[20px]">info</span>
            </div>
            <p class="text-body-md text-secondary leading-relaxed self-center">Below are all pass records created for
              this pass template. Track the status of each record, monitor email delivery, and manage individual passes
              across Google and Apple wallets. Use filters to search by name, email, or pass ID.</p>
          </div>

          <!-- Stat tiles + Import -->
          <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
            <?php foreach ($stats as $stat): ?>
            <div class="bg-white border border-outline-variant rounded-2xl p-3 flex items-center gap-3 hover:shadow-md hover:-translate-y-0.5 transition-all">
              <span class="w-10 h-10 rounded-xl <?= $stat['icbg'] ?> <?= $stat['ic'] ?> flex items-center justify-center shrink-0">
                <span class="material-symbols-outlined text-[20px]"><?= $stat['icon'] ?></span>
              </span>
              <div class="min-w-0">
                <p class="text-headline-md font-bold text-on-surface leading-none"><?= (int) $stat['value'] ?></p>
                <p class="text-label-md text-secondary font-semibold mt-1 truncate"><?= htmlspecialchars($stat['label']) ?></p>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- Import Records -->
            <div class="bg-white border border-outline-variant rounded-2xl p-3 flex flex-col justify-center">
              <div class="">
                <button type="button" class="w-full inline-flex items-center justify-center gap-1.5 bg-brand-gradient text-on-primary px-3 py-2 rounded-lg text-label-md font-bold shadow-md shadow-primary/20 hover:opacity-95 active:scale-[0.98] transition-all">
                  <span class="material-symbols-outlined text-[20px]">upload</span> Import Records
                </button>
                <p class="text-[10px] text-outline text-center mt-1.5">CSV only · Max 10,000 records</p>
              </div>
            </div>
          </div>

          <!-- Records Table -->
          <div class="border border-outline-variant rounded-2xl overflow-hidden">
            <div class="overflow-x-auto">
              <table class="w-full text-left border-collapse min-w-[1000px]">
                <thead>
                  <tr class="bg-surface-container-low/60 text-label-sm font-bold text-outline uppercase tracking-wider">
                    <th class="px-5 py-4">Pass ID</th>
                    <th class="px-5 py-4">Users</th>
                    <th class="px-5 py-4">Last Updated</th>
                    <th class="px-5 py-4">Record Created</th>
                    <th class="px-5 py-4">Pass Status</th>
                    <th class="px-5 py-4">Send Status</th>
                    <th class="px-5 py-4">Expiration Date</th>
                    <th class="px-5 py-4">Archive Date</th>
                    <th class="px-5 py-4 text-right">Action</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-outline-variant/40">
                  <?php foreach ($records as $r): ?>
                  <tr class="group hover:bg-primary/5 transition-colors">
                    <td class="px-5 py-4 align-middle">
                      <div class="flex items-center gap-2">
                        <code class="text-label-md font-mono text-on-surface"><?= htmlspecialchars($r['pid']) ?></code>
                        <button type="button" data-copy="<?= htmlspecialchars($r['pid']) ?>"
                          class="js-copy w-7 h-7 rounded-md text-outline hover:bg-blue-50 hover:text-primary flex items-center justify-center transition-all opacity-0 group-hover:opacity-100" title="Copy ID">
                          <span class="material-symbols-outlined text-[16px]">content_copy</span>
                        </button>
                      </div>
                    </td>
                    <td class="px-5 py-4 align-middle">
                      <p class="text-body-md font-bold text-on-surface"><?= htmlspecialchars($r['user']) ?></p>
                      <p class="text-label-sm text-outline"><?= htmlspecialchars($r['email']) ?></p>
                    </td>
                    <td class="px-5 py-4 align-middle">
                      <p class="text-body-md font-semibold text-on-surface whitespace-nowrap"><?= htmlspecialchars($r['updated']) ?></p>
                      <p class="text-label-sm text-primary/70"><?= htmlspecialchars($r['updatedAgo']) ?></p>
                    </td>
                    <td class="px-5 py-4 align-middle">
                      <p class="text-body-md text-secondary whitespace-nowrap"><?= htmlspecialchars($r['created']) ?></p>
                    </td>
                    <td class="px-5 py-4 align-middle">
                      <span class="inline-flex items-center gap-1 bg-blue-50 text-primary text-label-sm font-bold px-2.5 py-1 rounded-full">
                        <span class="w-1.5 h-1.5 rounded-full bg-primary"></span> <?= htmlspecialchars($r['pass']) ?>
                      </span>
                    </td>
                    <td class="px-5 py-4 align-middle">
                      <span class="inline-flex items-center gap-1 bg-emerald-50 text-emerald-600 text-label-sm font-bold px-2.5 py-1 rounded-full">
                        <span class="material-symbols-outlined text-[14px]">check</span> <?= htmlspecialchars($r['send']) ?>
                      </span>
                    </td>
                    <td class="px-5 py-4 align-middle">
                      <p class="text-body-md text-secondary whitespace-nowrap"><?= htmlspecialchars($r['exp']) ?></p>
                    </td>
                    <td class="px-5 py-4 align-middle text-secondary"><?= htmlspecialchars($r['archive']) ?></td>
                    <td class="px-5 py-4 align-middle text-right">
                      <div class="relative inline-block js-menu">
                        <button type="button" class="js-menu-toggle w-9 h-9 rounded-full text-outline hover:bg-surface-container-low hover:text-on-surface flex items-center justify-center transition-all">
                          <span class="material-symbols-outlined text-[20px]">more_vert</span>
                        </button>
                        <div class="js-menu-panel hidden absolute right-0 mt-1 w-44 bg-white border border-outline-variant rounded-xl shadow-lg py-1.5 z-20">
                          <button type="button" class="w-full flex items-center gap-2.5 px-4 py-2 text-label-md text-on-surface hover:bg-surface-container-low transition-colors">
                            <span class="material-symbols-outlined text-[18px] text-primary">visibility</span> View Pass
                          </button>
                          <button type="button" class="w-full flex items-center gap-2.5 px-4 py-2 text-label-md text-on-surface hover:bg-surface-container-low transition-colors">
                            <span class="material-symbols-outlined text-[18px] text-primary">forward_to_inbox</span> Resend Email
                          </button>
                          <button type="button" class="w-full flex items-center gap-2.5 px-4 py-2 text-label-md text-on-surface hover:bg-surface-container-low transition-colors">
                            <span class="material-symbols-outlined text-[18px] text-primary">archive</span> Archive
                          </button>
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
          <div class="flex items-center justify-end gap-1.5 text-label-md text-outline">
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

      // Action menus
      var menus = document.querySelectorAll('.js-menu');
      function closeAll(except) {
        menus.forEach(function (m) {
          if (m !== except) m.querySelector('.js-menu-panel').classList.add('hidden');
        });
      }
      menus.forEach(function (menu) {
        var toggle = menu.querySelector('.js-menu-toggle');
        var panel = menu.querySelector('.js-menu-panel');
        toggle.addEventListener('click', function (e) {
          e.stopPropagation();
          var isHidden = panel.classList.contains('hidden');
          closeAll(menu);
          panel.classList.toggle('hidden', !isHidden);
        });
      });
      document.addEventListener('click', function () { closeAll(null); });
    })();
  </script>
</body>

</html>
