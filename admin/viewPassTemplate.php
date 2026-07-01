<!DOCTYPE html>
<html class="light" lang="en" style="">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WePass - View Pass Template</title>
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
      // Info cards for the template overview
      $infoCards = [
        ['label' => 'Created By',      'value' => 'Hardik Savani',       'sub' => 'savanihd@gmail.com',     'icon' => 'person',    'accent' => 'violet'],
        ['label' => 'Template Type',   'value' => 'Gift Card',           'sub' => 'Personalized Unique',    'icon' => 'style',     'accent' => 'amber'],
        ['label' => 'Company',         'value' => 'Aatman Infotech',     'sub' => '',                       'icon' => 'apartment', 'accent' => 'blue'],
        ['label' => 'Activity Period', 'value' => '12/06/2026 14:51:59',  'sub' => 'to 12/06/2026 15:01:00', 'icon' => 'event',     'accent' => 'rose'],
      ];

      // Pass list rows
      $passes = [
        ['updated' => '12/06/2026 10:39:56', 'generated' => '12/06/2026 10:39:34', 'genAgo' => '2 weeks ago', 'passId' => '5ccd2d2cd9131107572974808b1d5a91', 'user' => 'HP Makwana', 'email' => 'harsh@wepass.io', 'installed' => 1, 'uninstalled' => null],
        ['updated' => '10/06/2026 10:39:56', 'generated' => '10/06/2026 10:39:34', 'genAgo' => '2 weeks ago', 'passId' => '8ew4fd2cd9131107572974808b1q3t97', 'user' => 'Jenil Vora', 'email' => 'jenil@wepass.io', 'installed' => null, 'uninstalled' => 1],
      ];

      // Install / uninstall count pill — same markup as passInstalls.php
      // platform: 'apple' (installed) | 'google' (uninstalled)
      function wp_install_badge($count, $platform) {
        if (empty($count)) return '<span class="text-label-md text-on-surface-variant">-</span>';
        $svg = $platform === 'apple'
          ? '<svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-on-surface"><path d="M16.365 1.43c0 1.14-.493 2.27-1.177 3.08-.744.9-1.99 1.57-2.987 1.57-.12 0-.23-.02-.3-.03-.01-.06-.04-.22-.04-.39 0-1.15.572-2.27 1.206-2.98.804-.94 2.142-1.64 3.248-1.68.03.13.05.28.05.43zm4.565 15.71c-.03.07-.463 1.58-1.518 3.12-.945 1.34-1.94 2.71-3.43 2.71-1.517 0-1.9-.88-3.63-.88-1.698 0-2.302.91-3.67.91-1.377 0-2.332-1.26-3.428-2.8-1.287-1.82-2.323-4.63-2.323-7.28 0-4.28 2.797-6.55 5.552-6.55 1.448 0 2.675.95 3.6.95.865 0 2.222-1.01 3.902-1.01.613 0 2.886.06 4.374 2.19-.13.09-2.383 1.37-2.383 4.19 0 3.26 2.854 4.42 2.955 4.45z"/></svg>'
          : '<svg viewBox="0 0 24 24" class="w-5 h-5"><rect x="2.5" y="2" width="19" height="20" rx="2.5" fill="#34A853"/><rect x="2.5" y="4" width="19" height="18" rx="2.5" fill="#FBBC05"/><rect x="2.5" y="6.5" width="19" height="15.5" rx="2.5" fill="#EA4335"/><path d="M2 12.2 C 5.5 10.2 8.5 13.8 12 14 C 15.5 14.2 18.5 10.5 22 10.8 L 22 19.5 Q 22 22 19.5 22 L 4.5 22 Q 2 22 2 19.5 Z" fill="#4285F4"/></svg>';
        return '<span class="inline-flex items-center gap-1.5 bg-white border border-outline-variant rounded-full pl-1 pr-2 py-1 shadow-sm">'
             . '<span class="w-5 h-5 rounded-full bg-on-surface text-white text-[11px] font-bold flex items-center justify-center">' . (int) $count . '</span>'
             . $svg . '</span>';
      }
    ?>
    <section class="p-margin-desktop space-y-stack-lg pb-16">
      <!-- Breadcrumbs and Header -->
      <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4">
        <div class="space-y-1">
          <nav class="flex items-center gap-2 text-label-sm text-outline mb-1">
            <span class="material-symbols-outlined text-[14px] text-gray">home</span> <span class="text-gray font-normal">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <a href="passTemplates.php" class="text-gray font-normal hover:text-primary transition-colors">Pass Templates</a>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray-500 font-normal">Gift-Card-Update</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">View Pass Template</h2>
        </div>
        <a href="passTemplates.php"
          class="inline-flex items-center gap-2 rounded-lg border border-outline-variant/50 bg-surface px-5 py-2.5 text-body-md font-bold text-on-surface shadow-sm transition-all hover:bg-surface-container-high active:scale-[0.98]">
          <span class="material-symbols-outlined text-[18px]">arrow_back</span>
          Back
        </a>
      </div>

      <!-- Main Card -->
      <div class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
        <!-- Header -->
        <div class="px-6 py-5 border-b border-outline-variant/60">
          <div class="flex flex-col gap-4 lg:flex-row lg:items-start lg:justify-between">
            <!-- Identity -->
            <div class="flex items-center gap-4">
              <span class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-brand-gradient text-white">
                <span class="material-symbols-outlined text-[28px]" style="font-variation-settings: 'FILL' 1;">confirmation_number</span>
              </span>
              <div class="min-w-0">
                <h3 class="text-headline-md font-bold text-on-surface leading-tight">Gift-Card-Update</h3>
                <p class="text-body-md text-gray-400 mt-1">Gift Card &middot; 1 pass</p>
              </div>
            </div>
            <!-- Right: badges + template id -->
            <div class="flex flex-col gap-2.5 lg:items-end">
              <div class="flex flex-wrap items-center gap-2 lg:justify-end">
                <span class="inline-flex items-center gap-1.5 rounded-full border border-blue-200 bg-blue-50 px-3 py-1 text-label-md font-bold text-blue-600">
                  <span class="material-symbols-outlined text-[15px]" style="font-variation-settings: 'FILL' 1;">person</span>Personalized
                </span>
                <span class="inline-flex items-center rounded-full border border-blue-200 bg-white px-3 py-1 text-label-md font-bold text-blue-600">Gift Card</span>
                <span class="inline-flex items-center gap-1.5 rounded-full border border-emerald-200 bg-emerald-50 px-3 py-1 text-label-md font-bold text-emerald-600">
                  <span class="material-symbols-outlined text-[15px]" style="font-variation-settings: 'FILL' 1;">check_circle</span>Active
                </span>
              </div>
              <!-- Template ID -->
              <div class="flex flex-wrap items-center gap-2 lg:justify-end">
                <span class="text-label-sm uppercase tracking-wider text-outline font-bold">Template ID</span>
                <span class="h-3.5 w-px bg-outline-variant/60"></span>
                <code class="font-mono text-label-md text-on-surface break-all">69ab3dda52d0f7a1483c7f723f26d008fa5382a2</code>
              </div>
            </div>
          </div>
        </div>

        <!-- Body -->
        <div class="bg-surface-container-low/30 p-6 space-y-5">
          <!-- Info Cards -->
          <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <?php foreach ($infoCards as $card): $a = $card['accent']; ?>
            <div class="relative overflow-hidden rounded-2xl border border-<?= $a ?>-100 bg-gradient-to-br from-<?= $a ?>-50/70 to-white p-5 shadow-sm">
              <!-- watermark icon -->
              <span class="material-symbols-outlined pointer-events-none absolute -right-3 -bottom-4 text-[80px] leading-none text-<?= $a ?>-500/10 select-none" style="font-variation-settings: 'FILL' 1;"><?= $card['icon'] ?></span>
              <div class="relative">
                <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-<?= $a ?>-100 text-<?= $a ?>-600 shadow-sm">
                  <span class="material-symbols-outlined text-[20px] font-variation-fill"><?= $card['icon'] ?></span>
                </span>
                <p class="mt-3 text-label-sm uppercase tracking-wider font-semibold text-<?= $a ?>-700/70"><?= htmlspecialchars($card['label']) ?></p>
                <p class="text-body-lg font-semibold text-on-surface mt-1 truncate"><?= htmlspecialchars($card['value']) ?></p>
                <?php if (!empty($card['sub'])): ?>
                <p class="text-label-md text-gray-400 mt-0.5 truncate"><?= htmlspecialchars($card['sub']) ?></p>
                <?php endif; ?>
              </div>
            </div>
            <?php endforeach; ?>
          </div>

          <!-- Install Stats -->
          <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
            <!-- Total Installed -->
            <div class="flex items-center gap-4 rounded-2xl border border-outline-variant/50 bg-white p-4 shadow-sm">
              <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-primary/10 text-primary">
                <span class="material-symbols-outlined text-[24px]" style="font-variation-settings: 'FILL' 1;">download_done</span>
              </span>
              <div class="min-w-0">
                <p class="text-label-sm uppercase tracking-wider text-outline font-bold">Total Installed</p>
                <p class="text-headline-md font-bold text-on-surface leading-tight">0</p>
              </div>
            </div>
            <!-- Apple Wallet -->
            <div class="flex items-center gap-4 rounded-2xl border border-outline-variant/50 bg-white p-4 shadow-sm">
              <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-gray-100">
                <svg viewBox="0 0 384 512" class="h-6 w-6 fill-gray-900"><path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"/></svg>
              </span>
              <div class="min-w-0">
                <p class="text-label-sm uppercase tracking-wider text-outline font-bold">Apple Wallet</p>
                <p class="text-headline-md font-bold text-on-surface leading-tight">0</p>
              </div>
            </div>
            <!-- Google Wallet -->
            <div class="flex items-center gap-4 rounded-2xl border border-outline-variant/50 bg-white p-4 shadow-sm">
              <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-gray-100">
                <svg viewBox="0 0 24 24" class="h-6 w-6"><rect x="2.5" y="2" width="19" height="20" rx="2.5" fill="#34A853"/><rect x="2.5" y="4" width="19" height="18" rx="2.5" fill="#FBBC05"/><rect x="2.5" y="6.5" width="19" height="15.5" rx="2.5" fill="#EA4335"/><path d="M2 12.2 C 5.5 10.2 8.5 13.8 12 14 C 15.5 14.2 18.5 10.5 22 10.8 L 22 19.5 Q 22 22 19.5 22 L 4.5 22 Q 2 22 2 19.5 Z" fill="#4285F4"/></svg>
              </span>
              <div class="min-w-0">
                <p class="text-label-sm uppercase tracking-wider text-outline font-bold">Google Wallet</p>
                <p class="text-headline-md font-bold text-on-surface leading-tight">0</p>
              </div>
            </div>
          </div>

          <!-- Pass List -->
          <div class="rounded-2xl border border-outline-variant/60 bg-white shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
              <table class="w-full text-left border-collapse min-w-[900px]">
                <thead class="bg-surface-container-low/50">
                  <tr>
                    <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Last Updated</th>
                    <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">First Generated</th>
                    <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Pass ID</th>
                    <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">User</th>
                    <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant text-center">Installed</th>
                    <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant text-center">Uninstalled</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-outline-variant/40">
                  <?php foreach ($passes as $p): ?>
                  <tr class="hover:bg-surface-container-low transition-colors group">
                    <!-- Last Updated -->
                    <td class="px-6 py-4 align-top whitespace-nowrap">
                      <p class="text-label-md text-on-surface-variant whitespace-nowrap"><?= htmlspecialchars($p['updated']) ?></p>
                    </td>
                    <!-- First Generated -->
                    <td class="px-6 py-4 align-top whitespace-nowrap">
                      <p class="text-label-md text-on-surface-variant whitespace-nowrap"><?= htmlspecialchars($p['generated']) ?></p>
                      <p class="text-label-sm text-gray-400"><?= htmlspecialchars($p['genAgo']) ?></p>
                    </td>
                    <!-- Pass ID -->
                    <td class="px-6 py-4 align-top">
                      <code class="text-label-md font-mono text-on-surface"><?= htmlspecialchars($p['passId']) ?></code>
                    </td>
                    <!-- User -->
                    <td class="px-6 py-4 align-top">
                      <p class="text-body-md text-on-surface font-medium"><?= htmlspecialchars($p['user']) ?></p>
                      <p class="text-label-sm text-gray-400"><?= htmlspecialchars($p['email']) ?></p>
                    </td>
                    <!-- Installed -->
                    <td class="px-6 py-4 text-center align-top"><?= wp_install_badge($p['installed'], 'apple') ?></td>
                    <!-- Uninstalled -->
                    <td class="px-6 py-4 text-center align-top"><?= wp_install_badge($p['uninstalled'], 'google') ?></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php include('footer.php'); ?>
  </main>
</body>

</html>
