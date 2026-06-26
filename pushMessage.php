<!DOCTYPE html>
<html class="light" lang="en" style="">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WePass - Push Message</title>
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
      $messages = [
        ['title' => 'Event Updated', 'body' => 'The event has been postponed.',                    'author' => 'Hardik Savani', 'date' => '15 Jun, 2026 04:59', 'type' => 'Immediate', 'google' => 0, 'apple' => 0],
        ['title' => 'Event Updated', 'body' => 'Your Event Card limit has been updated for 6 Month.', 'author' => 'Hardik Savani', 'date' => '15 Jun, 2026 04:55', 'type' => 'Immediate', 'google' => 0, 'apple' => 0],
        ['title' => 'Event Updated', 'body' => 'Your Event Card limit has been updated for 6 Month.', 'author' => 'Hardik Savani', 'date' => '15 Jun, 2026 04:35', 'type' => 'Immediate', 'google' => 0, 'apple' => 0],
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
            <span class="text-gray font-normal">Pass installs</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray-500 font-normal">Push Message</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Push Message</h2>
        </div>
        <div class="flex items-center gap-3">
          <a href="#"
            class="flex items-center gap-2 bg-primary text-white px-6 py-2.5 rounded-lg text-[14px] hover:bg-primary/90 transition-all font-bold shadow-sm">
            <span class="material-symbols-outlined text-[20px]">notifications</span>
            <span>Send Push Notification</span>
          </a>
          <a href="passInstalls.php"
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

      <!-- Main Records Card -->
      <div class="bg-white rounded-2xl border border-outline-variant shadow-sm">
        <div class="p-6 space-y-6">
          <!-- Info note -->
          <div class="flex items-start gap-3 bg-gradient-to-r from-blue-50 to-indigo-50/40 border border-primary/15 rounded-xl p-4">
            <div class="w-9 h-9 rounded-lg bg-primary text-white flex items-center justify-center shrink-0">
              <span class="material-symbols-outlined text-[20px]">info</span>
            </div>
            <p class="text-body-md text-gray-500 leading-relaxed self-center">Below are all push notification messages sent for this pass template. Track the reach of each notification across Google and Apple wallet devices. Messages are delivered to users who have the pass installed on their devices.</p>
          </div>

          <!-- Message History -->
          <div class="space-y-4">
            <!-- Section header -->
            <div class="flex items-center justify-between gap-3">
              <div class="flex items-center gap-2.5">
                <span class="material-symbols-outlined text-[22px] text-primary">forum</span>
                <h3 class="text-headline-md font-bold text-on-surface">Message History</h3>
                <span class="bg-primary/10 text-primary text-label-sm font-bold px-2.5 py-0.5 rounded-full"><?= count($messages) ?></span>
              </div>
            </div>

            <!-- Message cards -->
            <div class="space-y-3">
              <?php foreach ($messages as $m): ?>
              <div class="relative bg-white border border-outline-variant rounded-2xl p-5 overflow-hidden hover:border-primary/50 transition-colors">
                <div class="flex flex-col lg:flex-row lg:items-center gap-4">
                  <!-- Icon + content -->
                  <div class="flex items-start gap-4 min-w-0 flex-1">
                    <span class="w-11 h-11 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0">
                      <span class="material-symbols-outlined text-[22px]">notifications_active</span>
                    </span>
                    <div class="min-w-0">
                      <h4 class="text-headline-md font-bold text-on-surface"><?= htmlspecialchars($m['title']) ?></h4>
                      <p class="text-body-md text-outline mt-0.5 line-clamp-2"><?= htmlspecialchars($m['body']) ?></p>
                      <div class="flex flex-wrap items-center gap-x-3 gap-y-1.5 mt-2.5 text-label-sm text-outline">
                        <span class="inline-flex items-center gap-1">
                          <span class="material-symbols-outlined text-[15px]">person</span><?= htmlspecialchars($m['author']) ?>
                        </span>
                        <span class="w-1 h-1 rounded-full bg-outline-variant"></span>
                        <span class="inline-flex items-center gap-1">
                          <span class="material-symbols-outlined text-[15px]">schedule</span><?= htmlspecialchars($m['date']) ?>
                        </span>
                        <span class="inline-flex items-center gap-1 bg-amber-50 text-amber-600 font-bold px-2 py-0.5 rounded-full">
                          <span class="material-symbols-outlined text-[14px]">bolt</span><?= htmlspecialchars($m['type']) ?>
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- Delivery stats + action -->
                  <div class="flex flex-col items-stretch gap-2.5 shrink-0 lg:pl-5 lg:border-l lg:border-outline-variant/60">
                    <!-- Counters -->
                    <div class="flex items-center justify-center gap-2.5">
                      <!-- Apple reach -->
                      <span class="inline-flex items-center justify-center gap-1 bg-surface-container-low border border-outline-variant rounded-lg px-2.5 py-1.5 leading-none hover:border-on-surface/40 transition-colors" title="Apple Wallet reach">
                        <svg viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 block shrink-0 text-on-surface">
                          <path d="M16.365 1.43c0 1.14-.493 2.27-1.177 3.08-.744.9-1.99 1.57-2.987 1.57-.12 0-.23-.02-.3-.03-.01-.06-.04-.22-.04-.39 0-1.15.572-2.27 1.206-2.98.804-.94 2.142-1.64 3.248-1.68.03.13.05.28.05.43zm4.565 15.71c-.03.07-.463 1.58-1.518 3.12-.945 1.34-1.94 2.71-3.43 2.71-1.517 0-1.9-.88-3.63-.88-1.698 0-2.302.91-3.67.91-1.377 0-2.332-1.26-3.428-2.8-1.287-1.82-2.323-4.63-2.323-7.28 0-4.28 2.797-6.55 5.552-6.55 1.448 0 2.675.95 3.6.95.865 0 2.222-1.01 3.902-1.01.613 0 2.886.06 4.374 2.19-.13.09-2.383 1.37-2.383 4.19 0 3.26 2.854 4.42 2.955 4.45z"/>
                        </svg>
                        <span class="text-label-md font-bold text-on-surface mt-[2px]"><?= (int) $m['apple'] ?></span>
                      </span>
                      <!-- Google reach -->
                      <span class="inline-flex items-center justify-center gap-1.5 bg-surface-container-low border border-outline-variant rounded-lg px-2.5 py-1.5 leading-none hover:border-primary/40 transition-colors" title="Google Wallet reach">
                        <svg viewBox="0 0 24 24" class="w-4 h-4 block shrink-0">
                          <rect x="2.5"   y="2"   width="19" height="20"   rx="2.5" fill="#34A853"/>
                          <rect x="2.5"   y="4"   width="19" height="18"   rx="2.5" fill="#FBBC05"/>
                          <rect x="2.5" y="6.5" width="19" height="15.5" rx="2.5" fill="#EA4335"/>
                          <path d="M2 12.2 C 5.5 10.2 8.5 13.8 12 14 C 15.5 14.2 18.5 10.5 22 10.8 L 22 19.5 Q 22 22 19.5 22 L 4.5 22 Q 2 22 2 19.5 Z" fill="#4285F4"/>
                        </svg>
                        <span class="text-label-md font-bold text-on-surface mt-[2px]"><?= (int) $m['google'] ?></span>
                      </span>
                    </div>
                    <!-- View -->
                    <a href="notificationDetails.php" class="inline-flex items-center justify-center gap-1.5 bg-primary text-white px-3.5 py-2 rounded-lg text-label-md font-bold hover:bg-primary/90 transition-all shadow-sm">
                      <span class="material-symbols-outlined text-[18px]">visibility</span>
                      View
                    </a>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
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
