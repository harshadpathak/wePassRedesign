<!DOCTYPE html>
<html class="light" lang="en" style="">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WePass - Pass Statistics</title>
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
        'apple'    => 1,
        'google'   => 1,
      ];
      $stats = [
        ['label' => 'Total Records', 'value' => 2, 'icon' => 'database',     'icbg' => 'bg-blue-100',    'ic' => 'text-blue-600',    'bar' => 'bg-blue-500'],
        ['label' => 'Email Sent',    'value' => 2, 'icon' => 'send',         'icbg' => 'bg-indigo-100',  'ic' => 'text-indigo-600',  'bar' => 'bg-indigo-500'],
        ['label' => 'Processing',    'value' => 0, 'icon' => 'sync',         'icbg' => 'bg-sky-100',     'ic' => 'text-sky-600',     'bar' => 'bg-sky-500'],
        ['label' => 'Failed',        'value' => 0, 'icon' => 'warning',      'icbg' => 'bg-red-100',     'ic' => 'text-red-600',     'bar' => 'bg-red-500'],
        ['label' => 'Active Passes', 'value' => 2, 'icon' => 'check_circle', 'icbg' => 'bg-emerald-100', 'ic' => 'text-emerald-600', 'bar' => 'bg-emerald-500'],
      ];
      // KPI cards (label, value, icon, trend, accent color + tint, sparkline points)
      $kpis = [
        ['label' => 'Total Records',       'value' => 1, 'icon' => 'database',         'trend' => '+100%', 'tint' => 'bg-violet-50',  'ic' => 'text-violet-600',  'color' => '#7c3aed', 'spark' => [1,1,2,1,2,3,2,4]],
        ['label' => 'Installed Passes',    'value' => 2, 'icon' => 'download',          'trend' => '+100%', 'tint' => 'bg-blue-50',    'ic' => 'text-blue-600',    'color' => '#2563eb', 'spark' => [1,2,1,3,2,3,4,5]],
        ['label' => 'Active Passes',       'value' => 2, 'icon' => 'check_circle',      'trend' => '+100%', 'tint' => 'bg-emerald-50', 'ic' => 'text-emerald-600', 'color' => '#10b981', 'spark' => [1,1,2,2,3,3,4,5]],
        ['label' => 'Uninstalled Passes',  'value' => 0, 'icon' => 'cancel',            'trend' => null,    'tint' => 'bg-red-50',     'ic' => 'text-red-600',     'color' => '#ef4444', 'spark' => [0,0,0,0,0,0,0,0]],
        ['label' => 'Expired Passes',      'value' => 0, 'icon' => 'hourglass_empty',   'trend' => null,    'tint' => 'bg-amber-50',   'ic' => 'text-amber-600',   'color' => '#f59e0b', 'spark' => [0,0,0,0,0,0,0,0]],
        ['label' => 'Total Notifications', 'value' => 0, 'icon' => 'notifications',     'trend' => null,    'tint' => 'bg-cyan-50',    'ic' => 'text-cyan-600',    'color' => '#06b6d4', 'spark' => [0,0,0,0,0,0,0,0]],
      ];

      // Current Counts line chart
      $ccDates  = ['2 Jun','4 Jun','6 Jun','8 Jun','10 Jun','12 Jun','14 Jun','16 Jun','18 Jun','20 Jun','22 Jun','24 Jun','26 Jun','28 Jun','30 Jun'];
      $ccSeries = [
        ['name' => 'Current Records',      'color' => '#3b82f6', 'data' => [0,0,0,0,0,0,0,0,0,0,0,0,1,0,0]],
        ['name' => 'Current Installed',    'color' => '#10b981', 'data' => [0,0,0,0,0,0,0,0,0,0,0,0,2,0,0]],
        ['name' => 'Google Notifications', 'color' => '#f59e0b', 'data' => [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]],
        ['name' => 'Apple Notifications',  'color' => '#8b5cf6', 'data' => [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]],
      ];
      $ccMax = 2;

      // Wallet split + recent records + push + countries
      $wallet  = ['apple' => 1, 'google' => 1];
      $recent  = [
        ['user' => 'hardik', 'email' => 'hardik@wepass.io', 'pid' => 'bbbfe3998b1655d3', 'installed' => 2, 'uninstalled' => 0, 'date' => '25/06/2026 10:58:53'],
      ];
      $push = [
        ['label' => 'Immediate Sent',    'value' => 0, 'pct' => 0, 'dot' => 'bg-blue-500'],
        ['label' => 'Scheduled Sent',    'value' => 0, 'pct' => 0, 'dot' => 'bg-emerald-500'],
        ['label' => 'Scheduled Pending', 'value' => 0, 'pct' => 0, 'dot' => 'bg-amber-500'],
      ];
      $countries = [
        ['name' => 'India', 'flag' => '🇮🇳', 'value' => 2, 'pct' => 100],
      ];

      // Smooth a list of [x,y] points into an SVG path (Catmull-Rom -> cubic bezier)
      if (!function_exists('wp_smooth')) {
        function wp_smooth(array $P): string {
          $n = count($P);
          if ($n === 0) return '';
          $d = 'M ' . $P[0][0] . ' ' . $P[0][1];
          for ($i = 0; $i < $n - 1; $i++) {
            $p0 = $P[$i > 0 ? $i - 1 : 0];
            $p1 = $P[$i];
            $p2 = $P[$i + 1];
            $p3 = $P[$i + 2 < $n ? $i + 2 : $n - 1];
            $c1x = round($p1[0] + ($p2[0] - $p0[0]) / 6, 2);
            $c1y = round($p1[1] + ($p2[1] - $p0[1]) / 6, 2);
            $c2x = round($p2[0] - ($p3[0] - $p1[0]) / 6, 2);
            $c2y = round($p2[1] - ($p3[1] - $p1[1]) / 6, 2);
            $d .= " C $c1x $c1y, $c2x $c2y, {$p2[0]} {$p2[1]}";
          }
          return $d;
        }
      }

      // Build an SVG sparkline (smooth area + line) from a list of points
      if (!function_exists('wp_sparkline')) {
        function wp_sparkline(array $pts, string $color): string {
          $w = 100; $h = 30; $pad = 3; $n = count($pts); $max = max(max($pts), 1);
          $P = [];
          foreach ($pts as $i => $v) {
            $x = $n > 1 ? round(($i / ($n - 1)) * $w, 2) : 0;
            $y = round($h - $pad - ($v / $max) * ($h - 2 * $pad), 2);
            $P[] = [$x, $y];
          }
          $line = wp_smooth($P);
          $area = $line . " L $w,$h L 0,$h Z";
          $id = 'sk' . substr(md5($color . implode(',', $pts)), 0, 6);
          return '<svg viewBox="0 0 ' . $w . ' ' . $h . '" preserveAspectRatio="none" class="w-full h-8">'
            . '<defs><linearGradient id="' . $id . '" x1="0" y1="0" x2="0" y2="1">'
            . '<stop offset="0%" stop-color="' . $color . '" stop-opacity="0.22"/>'
            . '<stop offset="100%" stop-color="' . $color . '" stop-opacity="0"/></linearGradient></defs>'
            . '<path d="' . $area . '" fill="url(#' . $id . ')"/>'
            . '<path d="' . $line . '" fill="none" stroke="' . $color . '" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" vector-effect="non-scaling-stroke"/>'
            . '</svg>';
        }
      }
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
            <span class="text-gray-500 font-normal">Pass Statistics</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Pass Statistics</h2>
        </div>
        <div class="flex items-center gap-3">
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
            <p class="text-gray-400 text-body-md">Select a date range to filter pass statistics</p>
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
                  class="js-daterange w-full bg-surface-container-low border-outline-variant rounded-lg pl-10 pr-4 py-3 px-4 text-body-md font-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all cursor-pointer"
                  placeholder="Select date range" readonly="" type="text">
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

      <!-- ===== Analytics (single card) ===== -->
      <div class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden p-6 space-y-6">
        <!-- Info banner -->
        <div class="flex items-start gap-3 bg-gradient-to-r from-blue-50 to-indigo-50/40 border border-primary/15 rounded-xl p-4">
            <div class="w-9 h-9 rounded-lg bg-primary text-white flex items-center justify-center shrink-0">
                <span class="material-symbols-outlined text-[20px]">info</span>
            </div>
            <p class="text-body-md text-gray-500 leading-relaxed self-center">Track your pass performance with <span class="text-gray-500 font-semibold">daily activity</span> and <span class="text-gray-500 font-semibold">real-time totals</span> across Google Wallet & Apple Wallet. Use filters to analyze specific date ranges.</p>
        </div>

        <!-- KPI cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-6 gap-4">
          <?php foreach ($kpis as $k): ?>
          <div class="group rounded-2xl border border-outline-variant bg-white overflow-hidden">
            <div class="p-5 pb-0">
              <!-- top: icon + trend -->
              <div class="flex items-center justify-between gap-2">
                <span class="w-10 h-10 rounded-xl <?= $k['tint'] ?> <?= $k['ic'] ?> flex items-center justify-center shrink-0">
                  <span class="material-symbols-outlined text-[22px]"><?= $k['icon'] ?></span>
                </span>
                <?php if ($k['trend']): ?>
                <span class="inline-flex items-center gap-0.5 text-emerald-600 bg-emerald-50 text-label-sm font-bold px-2 py-0.5 rounded-full">
                  <span class="material-symbols-outlined text-[15px]">trending_up</span><?= $k['trend'] ?>
                </span>
                <?php else: ?>
                <span class="text-label-sm font-semibold text-outline">—</span>
                <?php endif; ?>
              </div>
              <!-- value + label -->
              <p class="font-display font-bold text-[34px] leading-none text-on-surface mt-4 pl-1"><?= (int) $k['value'] ?></p>
              <div class="flex items-center justify-between gap-2 mt-1.5">
                <p class="text-label-sm font-bold uppercase tracking-wider text-outline truncate"><?= htmlspecialchars($k['label']) ?></p>
                <p class="text-label-sm text-outline/80 whitespace-nowrap shrink-0">30d</p>
              </div>
            </div>
            <!-- sparkline strip -->
            <div class="mt-3"><?= wp_sparkline($k['spark'], $k['color']) ?></div>
          </div>
          <?php endforeach; ?>
        </div>

        <!-- Current Counts + Wallet Donut -->
        <div class="grid grid-cols-1 xl:grid-cols-3 gap-stack-lg items-stretch">
            <!-- Current Counts (line chart) -->
            <div class="xl:col-span-2 rounded-2xl border border-outline-variant p-6 flex flex-col hover:border-primary/40 transition-all">
                <div class="flex items-center gap-3 mb-5">
                    <span class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-[22px]">show_chart</span>
                    </span>
                    <div>
                    <h3 class="text-headline-md font-bold text-on-surface">Current Counts</h3>
                    <p class="text-label-md text-gray-400">Daily activity over the selected range</p>
                    </div>
                </div>
                <!-- Legend -->
                <div class="flex flex-wrap items-center gap-x-5 gap-y-2 mb-2">
                    <?php foreach ($ccSeries as $s): ?>
                    <span class="inline-flex items-center gap-1.5 text-label-md font-semibold text-secondary">
                    <span class="w-2.5 h-2.5 rounded-full" style="background: <?= $s['color'] ?>;"></span><?= htmlspecialchars($s['name']) ?>
                    </span>
                    <?php endforeach; ?>
                </div>
                <div class="flex-1 flex items-stretch min-h-[360px]">
                    <div id="cc-chart" class="w-full"></div>
                </div>
            </div>

            <!-- Wallet Installation Statistics (donut) -->
            <div class="rounded-2xl border border-outline-variant p-6 flex flex-col hover:border-primary/40 transition-all">
                <div class="flex items-center gap-3 mb-5">
                    <span class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-[22px]">donut_large</span>
                    </span>
                    <div>
                    <h3 class="text-headline-md font-bold text-on-surface">Wallet Installation Statistics</h3>
                    <p class="text-label-md text-gray-400">All installs by wallet type</p>
                    </div>
                </div>
                <div class="flex-1 flex flex-col items-center justify-center gap-6">
                    <!-- legend: color key -->
                    <div class="flex items-center justify-center gap-7">
                    <span class="inline-flex items-center gap-2 text-label-md font-bold text-on-surface"><span class="w-3 h-3 rounded-full bg-[#4f46e5]"></span>Apple Wallet</span>
                    <span class="inline-flex items-center gap-2 text-label-md font-bold text-on-surface"><span class="w-3 h-3 rounded-full bg-[#10b981]"></span>Google Wallet</span>
                    </div>
                    <!-- donut + static center -->
                    <div class="relative w-[320px] h-[320px] max-w-full">
                    <div id="wallet-chart"></div>
                    <div class="absolute inset-0 flex flex-col items-center justify-center pointer-events-none">
                        <span class="text-label-md text-outline">Total Installs</span>
                        <span class="font-display font-bold text-[44px] leading-none text-on-surface"><?= (int) ($wallet['apple'] + $wallet['google']) ?></span>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== Recent Records + Push Overview ===== -->
        <div class="grid grid-cols-1 xl:grid-cols-3 gap-stack-lg items-stretch">
            <!-- Recent Pass Records -->
            <div class="xl:col-span-2 rounded-2xl border border-outline-variant overflow-hidden flex flex-col hover:border-primary/40 transition-all">
                <div class="flex items-center gap-3 px-6 py-5 border-b border-outline-variant/60">
                    <span class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-[22px]">contacts</span>
                    </span>
                    <div>
                    <h3 class="text-headline-md font-bold text-on-surface">Recent Pass Records</h3>
                    <p class="text-label-md text-gray-400">Last 10 days</p>
                    </div>
                </div>
                <div class="flex-1 overflow-x-auto [&:has(.js-menu-panel:not(.hidden))]:overflow-visible">
                    <table class="w-full text-left border-collapse min-w-[640px]">
                    <thead>
                        <tr class="px-5 py-4 text-outline uppercase tracking-widest border-b border-outline-variant">
                        <th class="px-5 py-4 text-label-sm">Receiver</th>
                        <th class="px-5 py-4 text-label-sm">Pass ID</th>
                        <th class="px-5 py-4 text-label-sm text-center">Active Installed</th>
                        <th class="px-5 py-4 text-label-sm text-center">Uninstalled</th>
                        <th class="px-5 py-4 text-label-sm text-right">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($recent as $r): ?>
                        <tr class="group border-b border-outline-variant/40 hover:bg-primary/5 transition-colors">
                        <td class="px-5 py-4 align-middle">
                            <p class="text-body-md font-bold text-on-surface"><?= htmlspecialchars($r['user']) ?></p>
                            <p class="text-label-sm text-outline"><?= htmlspecialchars($r['email']) ?></p>
                        </td>
                        <td class="px-5 py-4 align-middle">
                            <code class="text-label-md font-mono text-on-surface"><?= htmlspecialchars($r['pid']) ?></code>
                        </td>
                        <td class="px-5 py-4 align-middle text-center">
                            <span class="inline-flex items-center justify-center min-w-7 px-2 py-0.5 rounded-full bg-emerald-50 text-emerald-600 text-label-md font-bold"><?= (int) $r['installed'] ?></span>
                        </td>
                        <td class="px-5 py-4 align-middle text-center">
                            <span class="inline-flex items-center justify-center min-w-7 px-2 py-0.5 rounded-full bg-red-50 text-red-600 text-label-md font-bold"><?= (int) $r['uninstalled'] ?></span>
                        </td>
                        <td class="px-5 py-4 align-middle text-right whitespace-nowrap text-label-md text-on-surface-variant"><?= htmlspecialchars($r['date']) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    </table>
                </div>
            </div>

            <!-- Push Notification Overview -->
            <div class="rounded-2xl border border-outline-variant p-6 flex flex-col hover:border-primary/40 transition-all">
                <div class="flex items-center gap-3 mb-5">
                    <span class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-[22px]">notifications_active</span>
                    </span>
                    <div>
                    <h3 class="text-headline-md font-bold text-on-surface">Push Notifications</h3>
                    <p class="text-label-md text-gray-400">Immediate &amp; scheduled delivery</p>
                    </div>
                </div>
                <!-- Total block -->
                <div class="flex items-center gap-4 rounded-xl bg-primary/5 border border-primary/10 p-4 mb-5">
                    <span class="w-12 h-12 rounded-xl bg-white border border-primary/15 text-primary flex items-center justify-center shrink-0 shadow-sm">
                    <span class="material-symbols-outlined text-[24px]">campaign</span>
                    </span>
                    <div>
                    <p class="font-display font-bold text-[28px] leading-none text-on-surface"><?= array_sum(array_column($push, 'value')) ?></p>
                    <p class="text-label-sm text-outline mt-1">Total Notifications</p>
                    </div>
                </div>
                <!-- Delivery breakdown -->
                <div class="flex-1 flex flex-col justify-center space-y-5">
                    <?php foreach ($push as $p): ?>
                    <div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="inline-flex items-center gap-2 text-body-md font-semibold text-on-surface"><span class="w-2.5 h-2.5 rounded-full <?= $p['dot'] ?>"></span><?= htmlspecialchars($p['label']) ?></span>
                        <span class="text-body-md font-bold text-on-surface"><?= (int) $p['value'] ?></span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="flex-1 h-2 rounded-full bg-surface-container-high overflow-hidden">
                        <div class="h-full rounded-full <?= $p['dot'] ?> transition-all" style="width: <?= (int) $p['pct'] ?>%;"></div>
                        </div>
                        <span class="text-label-sm font-semibold text-outline w-9 text-right"><?= (int) $p['pct'] ?>%</span>
                    </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- ===== Country-wise + Insights ===== -->
        <div class="grid grid-cols-1 xl:grid-cols-3 gap-stack-lg items-stretch">
            <!-- Country-wise Passes -->
            <div class="xl:col-span-2 rounded-2xl border border-outline-variant p-6 hover:border-primary/40 transition-all">
              <div class="flex items-center justify-between gap-3 mb-5">
                <div class="flex items-center gap-3">
                  <span class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-[22px]">public</span>
                  </span>
                  <div>
                    <h3 class="text-headline-md font-bold text-on-surface">Country-wise Passes</h3>
                    <p class="text-label-md text-gray-400">Top countries by wallet installs</p>
                  </div>
                </div>
                <span class="w-9 h-9 rounded-lg bg-surface-container-low text-outline flex items-center justify-center shrink-0">
                  <span class="material-symbols-outlined text-[20px]">travel_explore</span>
                </span>
              </div>
              <!-- World map -->
              <div class="relative rounded-xl bg-surface-container-low/30 overflow-hidden">
                <div id="world-map" class="w-full aspect-[5/2] min-h-[320px]"></div>
                <!-- country chips overlay -->
                <div class="absolute bottom-4 left-4 flex flex-col gap-2">
                  <?php foreach ($countries as $co): ?>
                  <span class="inline-flex items-center gap-2 bg-white/90 backdrop-blur-sm border border-outline-variant rounded-lg pl-2.5 pr-3 py-1.5 shadow-sm">
                    <span class="text-[18px] leading-none"><?= $co['flag'] ?></span>
                    <span class="text-label-md font-semibold text-on-surface"><?= htmlspecialchars($co['name']) ?></span>
                    <span class="inline-flex items-center justify-center min-w-5 px-1.5 h-5 rounded-full bg-primary text-white text-label-sm font-bold"><?= (int) $co['value'] ?></span>
                  </span>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>

            <!-- Insights -->
            <div class="rounded-2xl border border-outline-variant p-6 hover:border-primary/40 transition-all">
                <div class="flex items-center gap-3 mb-5">
                    <span class="w-10 h-10 rounded-xl bg-amber-50 text-amber-500 flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-[22px]" style="font-variation-settings: 'FILL' 1;">lightbulb</span>
                    </span>
                    <div>
                    <h3 class="text-headline-md font-bold text-on-surface">Insights</h3>
                    <p class="text-label-md text-gray-400">Key takeaways from your data</p>
                    </div>
                </div>
                <div class="space-y-3">
                  <div class="flex items-start gap-3 rounded-xl bg-surface-container-low/40 border border-outline-variant p-4 hover:border-primary/30 transition-colors">
                    <span class="w-9 h-9 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0">
                      <span class="material-symbols-outlined text-[20px]">trending_up</span>
                    </span>
                    <p class="text-body-md text-on-surface self-center">Active passes increased by <span class="font-bold text-emerald-600">100%</span> vs last 30 days.</p>
                  </div>
                  <div class="flex items-start gap-3 rounded-xl bg-surface-container-low/40 border border-outline-variant p-4 hover:border-primary/30 transition-colors">
                    <span class="w-9 h-9 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                      <span class="material-symbols-outlined text-[20px]">location_on</span>
                    </span>
                    <p class="text-body-md text-on-surface self-center">Most installs are from <span class="font-bold text-primary">India</span> (100%).</p>
                  </div>
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

  <!-- Current Counts chart (ApexCharts) -->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.49.1/dist/apexcharts.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var el = document.getElementById('cc-chart');
      if (!el || typeof ApexCharts === 'undefined') return;
      var series = <?= json_encode(array_map(fn ($s) => ['name' => $s['name'], 'data' => $s['data']], $ccSeries)) ?>;
      var colors = <?= json_encode(array_column($ccSeries, 'color')) ?>;
      var categories = <?= json_encode($ccDates) ?>;
      var chart = new ApexCharts(el, {
        chart: { type: 'area', height: '100%', fontFamily: 'inherit', toolbar: { show: false }, zoom: { enabled: false } },
        series: series,
        colors: colors,
        dataLabels: { enabled: false },
        stroke: { curve: 'smooth', width: 2.5, lineCap: 'round' },
        fill: { type: 'gradient', gradient: { shadeIntensity: 1, opacityFrom: 0.25, opacityTo: 0, stops: [0, 95] } },
        legend: { show: false },
        grid: { borderColor: '#eef0f4', strokeDashArray: 4, padding: { left: 8, right: 8 } },
        xaxis: {
          categories: categories,
          axisBorder: { show: false }, axisTicks: { show: false },
          labels: { style: { colors: '#94a3b8', fontSize: '11px' } }
        },
        yaxis: { min: 0, max: <?= (int) $ccMax ?>, tickAmount: <?= (int) $ccMax ?>, labels: { style: { colors: '#94a3b8', fontSize: '11px' } } },
        tooltip: {
          theme: 'light', shared: true, intersect: false,
          x: {
            formatter: function (val, opts) {
              var label = (opts && categories && categories[opts.dataPointIndex] != null) ? categories[opts.dataPointIndex] : val;
              return label + ' ' + new Date().getFullYear();
            }
          }
        },
        markers: { size: 0, hover: { size: 5 } }
      });
      chart.render();

      // Wallet Installation donut
      var wel = document.getElementById('wallet-chart');
      if (wel) {
        var donut = new ApexCharts(wel, {
          chart: { type: 'donut', height: 320, width: 320, fontFamily: 'inherit' },
          series: [<?= (int) $wallet['apple'] ?>, <?= (int) $wallet['google'] ?>],
          labels: ['Apple Wallet', 'Google Wallet'],
          colors: ['#4f46e5', '#10b981'],
          stroke: { width: 3, colors: ['#ffffff'] },
          dataLabels: { enabled: false },
          legend: { show: false },
          plotOptions: { pie: { donut: { size: '76%', labels: { show: false } } } },
          states: { hover: { filter: { type: 'darken', value: 0.92 } } },
          tooltip: { theme: 'light', fillSeriesColor: false }
        });
        donut.render();
      }
    });
  </script>

  <!-- Country map (jsVectorMap) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var mapEl = document.getElementById('world-map');
      if (!mapEl || typeof jsVectorMap === 'undefined') return;
      var worldMap = new jsVectorMap({
        selector: '#world-map',
        map: 'world',
        backgroundColor: 'transparent',
        zoomButtons: false,
        zoomOnScroll: false,
        regionsSelectable: false,
        selectedRegions: ['IN'],
        regionStyle: {
          initial: { fill: '#e2e8f0', stroke: '#ffffff', strokeWidth: 0.4 },
          hover: { fill: '#cbd5e1', fillOpacity: 1 },
          selected: { fill: '#1e293b' }
        },
        showTooltip: true
      });
      // Re-fit to the container once the layout has settled.
      function fitMap() { try { worldMap.updateSize(); } catch (e) {} }
      setTimeout(fitMap, 80);
      setTimeout(fitMap, 400);
      window.addEventListener('resize', fitMap);
    });
  </script>
</body>

</html>
