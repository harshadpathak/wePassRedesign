<!DOCTYPE html>
<html class="light" lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WePass - User Activity Logs</title>
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
      // Event type config: pill styling + icon per event
      $eventCfg = [
        'Login'          => ['pill' => 'bg-emerald-50 text-emerald-600 border-emerald-200', 'icon' => 'login',    'legend' => 'bg-emerald-50 text-emerald-600'],
        'Logout'         => ['pill' => 'bg-amber-50 text-amber-600 border-amber-200',       'icon' => 'logout',   'legend' => 'bg-amber-50 text-amber-600'],
        'Password Reset' => ['pill' => 'bg-rose-50 text-rose-600 border-rose-200',          'icon' => 'key',      'legend' => 'bg-rose-50 text-rose-600'],
      ];
      $statusCfg = [
        'Success' => ['pill' => 'bg-emerald-50 text-emerald-600 border-emerald-200', 'icon' => 'check_circle'],
        'Failed'  => ['pill' => 'bg-rose-50 text-rose-600 border-rose-200',          'icon' => 'cancel'],
      ];
      // Avatar tint palette, cycled per row
      $avatarColors = ['bg-blue-500', 'bg-rose-500', 'bg-orange-500', 'bg-violet-500', 'bg-emerald-500'];

      $logs = [
        ['n' => 1, 'event' => 'Logout', 'status' => 'Success', 'method' => '-',        'ip' => '182.237.14.173', 'ipv' => 'IPv4', 'device' => 'Desktop', 'location' => 'Rajkot, India', 'time' => '29/06/2026 05:11:55', 'ago' => '5 hours ago',
          'locationFull' => 'Rajkot, Gujarat, India', 'browser' => 'Chrome 149.0.0.0', 'os' => 'Linux 0', 'userAgent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'payload' => "{\n    \"email\": \"savanihd@gmail.com\",\n    \"info\": \"User logged out successfully.\"\n}"],
        ['n' => 2, 'event' => 'Login',  'status' => 'Success', 'method' => 'Password', 'ip' => '182.237.14.173', 'ipv' => 'IPv4', 'device' => 'Desktop', 'location' => 'Rajkot, India', 'time' => '29/06/2026 04:44:29', 'ago' => '5 hours ago',
          'locationFull' => 'Rajkot, Gujarat, India', 'browser' => 'Chrome 149.0.0.0', 'os' => 'Linux 0', 'userAgent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'payload' => "{\n    \"email\": \"savanihd@gmail.com\",\n    \"info\": \"User logged in successfully.\"\n}"],
        ['n' => 3, 'event' => 'Login',  'status' => 'Success', 'method' => 'Password', 'ip' => '182.237.14.173', 'ipv' => 'IPv4', 'device' => 'Desktop', 'location' => 'Rajkot, India', 'time' => '26/06/2026 04:28:47', 'ago' => '3 days ago',
          'locationFull' => 'Rajkot, Gujarat, India', 'browser' => 'Chrome 149.0.0.0', 'os' => 'Linux 0', 'userAgent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'payload' => "{\n    \"email\": \"savanihd@gmail.com\",\n    \"info\": \"User logged in successfully.\"\n}"],
        ['n' => 4, 'event' => 'Login',  'status' => 'Success', 'method' => 'Password', 'ip' => '182.237.14.173', 'ipv' => 'IPv4', 'device' => 'Desktop', 'location' => 'Rajkot, India', 'time' => '25/06/2026 04:22:38', 'ago' => '4 days ago',
          'locationFull' => 'Rajkot, Gujarat, India', 'browser' => 'Chrome 149.0.0.0', 'os' => 'Linux 0', 'userAgent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'payload' => "{\n    \"email\": \"savanihd@gmail.com\",\n    \"info\": \"User logged in successfully.\"\n}"],
        ['n' => 5, 'event' => 'Login',  'status' => 'Failed',  'method' => 'Password', 'ip' => '182.237.14.173', 'ipv' => 'IPv4', 'device' => 'Desktop', 'location' => 'Rajkot, India', 'time' => '24/06/2026 09:26:28', 'ago' => '5 days ago',
          'locationFull' => 'Rajkot, Gujarat, India', 'browser' => 'Chrome 149.0.0.0', 'os' => 'Linux 0', 'userAgent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'payload' => "{\n    \"email\": \"savanihd@gmail.com\",\n    \"info\": \"Invalid credentials provided.\"\n}"],
      ];

      // Last login summary cards
      $loginInfo = [
        ['label' => 'Date & Time', 'value' => '29/06/2026 04:44:29', 'icon' => 'calendar_month', 'bg' => 'bg-indigo-50',   'color' => 'text-indigo-600'],
        ['label' => 'Location',    'value' => 'Unknown',             'icon' => 'location_on',     'bg' => 'bg-amber-50',    'color' => 'text-amber-600'],
        ['label' => 'Device',      'value' => 'Chrome / Linux',      'icon' => 'computer',        'bg' => 'bg-emerald-50',  'color' => 'text-emerald-600'],
        ['label' => 'IP Address',  'value' => '127.0.0.1',           'icon' => 'public',          'bg' => 'bg-rose-50',     'color' => 'text-rose-600'],
      ];

      $tabs = [
        ['label' => 'Login Logs', 'icon' => 'shield',      'key' => 'login', 'active' => true],
        ['label' => 'API Logs',   'icon' => 'data_object', 'key' => 'api',   'active' => false],
        ['label' => 'User Logs',  'icon' => 'monitoring',  'key' => 'user',  'active' => false],
      ];

      // HTTP method badge styling (matches User Logs)
      $methodCfg = [
        'GET'    => 'bg-emerald-50 text-emerald-600 border-emerald-200',
        'POST'   => 'bg-amber-50 text-amber-600 border-amber-200',
        'PUT'    => 'bg-blue-50 text-blue-600 border-blue-200',
      ];

      $apiLogs = [
        ['n' => 1, 'activity' => 'Show Pass Template',   'method' => 'GET',  'endpoint' => 'https://dev.wepass.io/api/v1/templates/gift-card/ecdca288768c91e88674783ca4cffc675d51b092', 'status' => 'Success', 'code' => 200, 'time' => '29/06/2026 17:34:13', 'ago' => '20 seconds ago',
          'payload' => "{\n    \"id\": \"ecdca288768c91e88674783ca4cffc675d51b092\",\n    \"type\": \"gift-card\",\n    \"status\": \"active\"\n}"],
        ['n' => 2, 'activity' => 'Update Pass Template', 'method' => 'PUT',  'endpoint' => 'https://dev.wepass.io/api/v1/templates/gift-card/ecdca288768c91e88674783ca4cffc675d51b092', 'status' => 'Success', 'code' => 200, 'time' => '29/06/2026 17:34:02', 'ago' => '31 seconds ago',
          'payload' => "{\n    \"name\": \"Gift Card\",\n    \"status\": \"active\"\n}"],
        ['n' => 3, 'activity' => 'Create Pass Template', 'method' => 'POST', 'endpoint' => 'https://dev.wepass.io/api/v1/templates/gift-card', 'status' => 'Success', 'code' => 200, 'time' => '29/06/2026 17:33:42', 'ago' => '51 seconds ago',
          'payload' => "{\n    \"name\": \"Gift Card\",\n    \"type\": \"gift-card\",\n    \"status\": \"active\"\n}"],
        ['n' => 4, 'activity' => 'Create Pass Template', 'method' => 'POST', 'endpoint' => 'https://dev.wepass.io/api/v1/templates/advertising-pass', 'status' => 'Success', 'code' => 200, 'time' => '25/06/2026 15:24:01', 'ago' => '4 days ago',
          'payload' => "{\n    \"name\": \"Advertising Pass\",\n    \"type\": \"generic\",\n    \"status\": \"active\"\n}"],
      ];

      // User Logs (panel activity) — GET green, POST amber
      $userMethodCfg = [
        'GET'    => 'bg-emerald-50 text-emerald-600 border-emerald-200',
        'POST'   => 'bg-amber-50 text-amber-600 border-amber-200',
        'PUT'    => 'bg-blue-50 text-blue-600 border-blue-200',
      ];
      $userLogs = [
        ['n' => 1,  'ip' => '182.237.14.173', 'activity' => 'Create Pass Template',   'method' => 'GET',  'endpoint' => 'https://dev.wepass.io/panel/personalized-pass', 'time' => '29/06/2026 17:43:54', 'ago' => '10 minutes ago', 'data' => null],
        ['n' => 2,  'ip' => '182.237.14.173', 'activity' => 'Pass Template create',    'method' => 'GET',  'endpoint' => 'https://dev.wepass.io/panel/pass-template-create', 'time' => '29/06/2026 17:43:51', 'ago' => '10 minutes ago', 'data' => null],
        ['n' => 3,  'ip' => '182.237.14.173', 'activity' => 'Logout',                  'method' => 'GET',  'endpoint' => 'https://dev.wepass.io/panel/logout', 'time' => '29/06/2026 17:32:27', 'ago' => '22 minutes ago', 'data' => null],
        ['n' => 4,  'ip' => '182.237.14.173', 'activity' => 'Reveal API Key',          'method' => 'POST', 'endpoint' => 'https://dev.wepass.io/livewire/update', 'time' => '29/06/2026 17:32:22', 'ago' => '22 minutes ago', 'data' => "{\n    \"fingerprint\": {\n        \"id\": \"reveal-api-key\"\n    }\n}"],
        ['n' => 5,  'ip' => '182.237.14.173', 'activity' => 'API Key Settings',        'method' => 'GET',  'endpoint' => 'https://dev.wepass.io/panel/api-key-settings', 'time' => '29/06/2026 17:32:11', 'ago' => '22 minutes ago', 'data' => null],
        ['n' => 6,  'ip' => '182.237.14.173', 'activity' => 'Login',                   'method' => 'POST', 'endpoint' => 'https://dev.wepass.io/post-login', 'time' => '29/06/2026 17:32:06', 'ago' => '22 minutes ago', 'data' => null],
        ['n' => 7,  'ip' => '182.237.14.173', 'activity' => 'Dashboard',               'method' => 'GET',  'endpoint' => 'https://dev.wepass.io/panel/dashboard', 'time' => '29/06/2026 17:32:06', 'ago' => '22 minutes ago', 'data' => null],
        ['n' => 8,  'ip' => '182.237.14.173', 'activity' => 'Dashboard',               'method' => 'GET',  'endpoint' => 'https://dev.wepass.io/panel/dashboard', 'time' => '29/06/2026 17:32:06', 'ago' => '22 minutes ago', 'data' => null],
        ['n' => 9,  'ip' => '182.237.14.173', 'activity' => 'Manual Distribution',     'method' => 'GET',  'endpoint' => 'https://dev.wepass.io/panel/manual-distribution', 'time' => '29/06/2026 17:26:06', 'ago' => '28 minutes ago', 'data' => null],
        ['n' => 10, 'ip' => '182.237.14.173', 'activity' => 'Coupon Card Distribute',  'method' => 'POST', 'endpoint' => 'https://dev.wepass.io/livewire/update', 'time' => '29/06/2026 17:26:06', 'ago' => '28 minutes ago', 'data' => "{\n    \"coupon\": \"distribute\",\n    \"status\": \"queued\"\n}"],
      ];

      // Lightweight JSON syntax highlighter (keys, string values, braces, punctuation)
      function wp_json_highlight($json) {
        $esc = htmlspecialchars($json);
        // string values (after a colon)
        $esc = preg_replace('/(:\s*)(&quot;.*?&quot;)/', '$1<span class="text-emerald-600">$2</span>', $esc);
        // keys (before a colon)
        $esc = preg_replace('/(&quot;[^&]*?&quot;)(\s*:)/', '<span class="text-sky-600 font-semibold">$1</span>$2', $esc);
        // braces / brackets
        $esc = preg_replace('/([{}\[\]])/', '<span class="text-violet-500">$1</span>', $esc);
        return $esc;
      }
    ?>
    <section class="p-margin-desktop space-y-stack-lg pb-16">
      <!-- Breadcrumbs and Header -->
      <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4">
        <div class="space-y-1">
          <nav class="flex items-center gap-2 text-label-sm text-outline mb-1">
            <span class="material-symbols-outlined text-[14px] text-gray">home</span> <span class="text-gray font-normal">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <a href="users.php" class="text-gray font-normal hover:text-primary transition-colors">Users</a>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray-500 font-normal">User Activity Logs</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">User Activity Logs</h2>
        </div>
        <a href="users.php"
          class="inline-flex items-center gap-2 rounded-lg border border-outline-variant/50 bg-surface px-5 py-2.5 text-body-md font-bold text-on-surface transition-all hover:bg-surface-container-high active:scale-[0.98]">
          <span class="material-symbols-outlined text-[18px]">arrow_back</span>
          Back
        </a>
      </div>

      <!-- Main Card -->
      <div class="bg-white rounded-2xl border border-outline-variant overflow-hidden shadow-sm">
        <!-- Profile Header -->
        <div class="flex flex-col gap-4 px-6 py-5 border-b border-outline-variant/60 lg:flex-row lg:items-center lg:justify-between">
          <div class="flex items-center gap-4">
            <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-brand-gradient text-white text-body-lg font-bold tracking-wide">HA</span>
            <div class="min-w-0">
              <div class="flex items-center gap-2.5 flex-wrap">
                <h3 class="text-headline-md font-bold text-on-surface">Hardik Savani</h3>
                <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-2.5 py-0.5 text-[11px] font-bold uppercase tracking-wide text-emerald-600 ring-1 ring-emerald-500/20">
                  <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>Active
                </span>
              </div>
              <p class="mt-1 flex items-center gap-1.5 text-body-md text-gray-400 leading-none">
                <span class="material-symbols-outlined text-[16px] leading-none text-gray-400">mail</span>
                <span class="leading-none mb-1">savanihd@gmail.com</span>
              </p>
            </div>
          </div>
          <div class="flex flex-wrap items-center gap-2.5">
            <div class="inline-flex items-center gap-2.5 rounded-xl border border-outline-variant/60 bg-surface-container-low/60 px-3.5 py-2">
              <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-blue-50 text-primary">
                <span class="material-symbols-outlined text-[18px] font-variation-fill">apartment</span>
              </span>
              <div>
                <p class="text-label-sm uppercase tracking-wider text-outline font-bold">User Type</p>
                <p class="text-body-md font-bold text-on-surface leading-tight">Company</p>
              </div>
            </div>
            <div class="inline-flex items-center gap-2.5 rounded-xl border border-outline-variant/60 bg-surface-container-low/60 px-3.5 py-2">
              <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-indigo-50 text-indigo-600">
                <span class="material-symbols-outlined text-[18px] font-variation-fill">calendar_today</span>
              </span>
              <div>
                <p class="text-label-sm uppercase tracking-wider text-outline font-bold">Member Since</p>
                <p class="text-body-md font-bold text-on-surface leading-tight">24/11/2025</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Last Login Summary -->
        <div class="px-6 py-5 border-b border-outline-variant/60">
          <div class="flex items-center gap-2 mb-4">
            <span class="flex h-7 w-7 items-center justify-center rounded-lg bg-primary/10 text-primary">
              <span class="material-symbols-outlined text-[16px] font-variation-fill">history</span>
            </span>
            <h4 class="text-body-lg font-bold text-on-surface">Last Login Session</h4>
            <span class="inline-flex items-center rounded-full bg-surface-container-high px-2.5 py-0.5 text-label-sm font-semibold text-secondary">5 hours ago</span>
          </div>
          <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <?php foreach ($loginInfo as $info): ?>
            <div class="flex items-center gap-3.5 rounded-xl border border-outline-variant/50 bg-white p-4">
              <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl <?= $info['bg'] ?> <?= $info['color'] ?>">
                <span class="material-symbols-outlined text-[22px] font-variation-fill" ><?= $info['icon'] ?></span>
              </span>
              <div class="min-w-0">
                <p class="text-label-sm uppercase tracking-wider text-gray-400 font-semibold"><?= htmlspecialchars($info['label']) ?></p>
                <p class="truncate text-body-md font-semibold text-on-surface mt-0.5"><?= htmlspecialchars($info['value']) ?></p>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Tabs -->
        <div class="px-6 border-b border-outline-variant/60">
          <nav class="flex items-center gap-8 -mb-px">
            <?php foreach ($tabs as $tab): ?>
            <button type="button" data-tab="<?= $tab['key'] ?>"
              class="js-tab flex items-center gap-2 border-b-2 py-4 text-body-md font-bold transition-colors hover:border-primary hover:text-primary <?= $tab['active'] ? 'border-primary text-primary' : 'border-transparent text-outline' ?>">
              <span class="material-symbols-outlined text-[18px]"><?= $tab['icon'] ?></span><?= htmlspecialchars($tab['label']) ?>
            </button>
            <?php endforeach; ?>
          </nav>
        </div>

        <!-- Panel: Login Logs -->
        <div class="js-panel" data-panel="login">
        <!-- Table -->
        <div class="overflow-x-auto">
          <table class="w-full text-left border-collapse min-w-[1100px]">
            <thead class="bg-surface-container-low/50">
              <tr>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">#</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">User</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Event Type</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Status</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Method</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">IP Address</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Device</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Location</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Time</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant text-right"></th>
              </tr>
            </thead>
            <tbody class="divide-y divide-outline-variant/40">
              <?php foreach ($logs as $i => $log): $ev = $eventCfg[$log['event']]; $st = $statusCfg[$log['status']]; $av = $avatarColors[$i % count($avatarColors)]; ?>
              <tr class="js-log-row cursor-pointer hover:bg-surface-container-low transition-colors group" data-target="log-detail-<?= $log['n'] ?>">
                <!-- # -->
                <td class="px-6 py-4 text-body-md text-outline font-medium"><?= $log['n'] ?></td>
                <!-- User -->
                <td class="px-6 py-4">
                  <div class="flex items-center gap-3">
                    <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg <?= $av ?> text-white text-label-md font-bold">HS</span>
                    <div class="min-w-0">
                      <p class="text-body-md text-on-surface font-medium">Hardik Savani</p>
                      <p class="text-label-sm text-gray-400">savanihd@gmail.com</p>
                    </div>
                  </div>
                </td>
                <!-- Event Type -->
                <td class="px-6 py-4">
                  <span class="inline-flex items-center gap-1.5 rounded-full border px-3 py-1 text-label-md font-bold <?= $ev['pill'] ?>">
                    <span class="material-symbols-outlined text-[15px]"><?= $ev['icon'] ?></span><?= htmlspecialchars($log['event']) ?>
                  </span>
                </td>
                <!-- Status -->
                <td class="px-6 py-4">
                  <span class="inline-flex items-center gap-1.5 rounded-full border px-3 py-1 text-label-md font-bold <?= $st['pill'] ?>">
                    <span class="material-symbols-outlined text-[15px] font-variation-fill"><?= $st['icon'] ?></span><?= htmlspecialchars($log['status']) ?>
                  </span>
                </td>
                <!-- Method -->
                <td class="px-6 py-4">
                  <?php if ($log['method'] !== '-'): ?>
                  <span class="inline-flex items-center gap-1.5 rounded-full bg-surface-container-high border border-outline-variant/60 px-2.5 py-1 text-label-md font-semibold text-on-surface-variant">
                    <span class="material-symbols-outlined text-[15px] text-outline">key</span><?= htmlspecialchars($log['method']) ?>
                  </span>
                  <?php else: ?>
                  <span class="text-body-md text-outline">&ndash;</span>
                  <?php endif; ?>
                </td>
                <!-- IP Address -->
                <td class="px-6 py-4">
                  <div class="flex items-center gap-2">
                    <span class="font-mono text-label-md text-on-surface"><?= htmlspecialchars($log['ip']) ?></span>
                    <span class="inline-flex items-center rounded-full border border-blue-600 bg-blue-500 px-2 py-0.5 text-[10px] font-bold text-white"><?= htmlspecialchars($log['ipv']) ?></span>
                  </div>
                </td>
                <!-- Device -->
                <td class="px-6 py-4">
                  <span class="inline-flex items-center gap-1.5 text-body-md text-on-surface-variant font-medium">
                    <span class="material-symbols-outlined text-[18px] text-outline">desktop_windows</span><?= htmlspecialchars($log['device']) ?>
                  </span>
                </td>
                <!-- Location -->
                <td class="px-6 py-4">
                  <span class="inline-flex items-center gap-1.5 text-body-md text-on-surface-variant font-medium">
                    <span class="material-symbols-outlined text-[18px]">location_on</span><?= htmlspecialchars($log['location']) ?>
                  </span>
                </td>
                <!-- Time -->
                <td class="px-6 py-4 whitespace-nowrap">
                  <p class="text-label-md text-on-surface-variant whitespace-nowrapm"><?= htmlspecialchars($log['time']) ?></p>
                  <p class="text-label-sm text-gray-400"><?= htmlspecialchars($log['ago']) ?></p>
                </td>
                <!-- Expand -->
                <td class="px-6 py-4 text-right">
                  <span class="js-chevron material-symbols-outlined text-outline group-hover:text-primary transition-all duration-200 p-1 rounded-lg group-hover:bg-surface-container-high">expand_more</span>
                </td>
              </tr>
              <!-- Detail Row -->
              <tr id="log-detail-<?= $log['n'] ?>" class="js-log-detail hidden">
                <td colspan="10" class="p-0 border-b border-outline-variant/60">
                  <div class="bg-surface-container-low/40 px-6 py-6">
                    <div class="rounded-2xl border border-outline-variant/60 bg-white overflow-hidden">
                      <div class="p-5 space-y-5">
                        <!-- Meta grid -->
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                          <div class="flex items-center gap-3.5 rounded-xl border border-outline-variant/50 bg-white p-4">
                            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-amber-50 text-amber-600">
                              <span class="material-symbols-outlined text-[22px] font-variation-fill">location_on</span>
                            </span>
                            <div class="min-w-0">
                              <p class="text-label-sm uppercase tracking-wider text-gray-400 font-semibold">Location</p>
                              <p class="truncate text-body-md font-semibold text-on-surface mt-0.5"><?= htmlspecialchars($log['locationFull']) ?></p>
                            </div>
                          </div>
                          <div class="flex items-center gap-3.5 rounded-xl border border-outline-variant/50 bg-white p-4">
                            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                              <span class="material-symbols-outlined text-[22px] font-variation-fill">devices</span>
                            </span>
                            <div class="min-w-0">
                              <p class="text-label-sm uppercase tracking-wider text-gray-400 font-semibold">Device &amp; Browser</p>
                              <p class="truncate text-body-md font-semibold text-on-surface mt-0.5"><?= htmlspecialchars($log['device']) ?> &bull; <?= htmlspecialchars($log['browser']) ?></p>
                            </div>
                          </div>
                          <div class="flex items-center gap-3.5 rounded-xl border border-outline-variant/50 bg-white p-4">
                            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-indigo-50 text-indigo-600">
                              <span class="material-symbols-outlined text-[22px] font-variation-fill">memory</span>
                            </span>
                            <div class="min-w-0">
                              <p class="text-label-sm uppercase tracking-wider text-gray-400 font-semibold">Operating System</p>
                              <p class="truncate text-body-md font-semibold text-on-surface mt-0.5"><?= htmlspecialchars($log['os']) ?></p>
                            </div>
                          </div>
                          <div class="flex items-center gap-3.5 rounded-xl border border-outline-variant/50 bg-white p-4">
                            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                              <span class="material-symbols-outlined text-[22px] font-variation-fill">lock</span>
                            </span>
                            <div class="min-w-0">
                              <p class="text-label-sm uppercase tracking-wider text-gray-400 font-semibold">Auth Method</p>
                              <p class="truncate text-body-md font-semibold text-on-surface mt-0.5"><?= $log['method'] !== '-' ? htmlspecialchars($log['method']) : '&ndash;' ?></p>
                            </div>
                          </div>
                        </div>

                        <!-- User Agent -->
                        <div>
                          <p class="flex items-center gap-1.5 text-label-sm uppercase tracking-wider text-outline font-bold mb-2">
                            <span class="material-symbols-outlined text-[15px]">travel_explore</span>User Agent
                          </p>
                          <div class="rounded-xl border border-outline-variant/50 bg-surface-container-low/40 px-4 py-3">
                            <code class="font-mono text-label-md text-gray-500 break-all"><?= htmlspecialchars($log['userAgent']) ?></code>
                          </div>
                        </div>

                        <!-- Payloads -->
                        <div>
                          <p class="flex items-center gap-1.5 text-label-sm uppercase tracking-wider text-outline font-bold mb-2">
                            <span class="material-symbols-outlined text-[15px]">data_object</span>Payloads
                          </p>
                          <div class="rounded-xl border border-outline-variant/50 bg-gray-50 overflow-hidden shadow-sm">
                            <div class="flex overflow-x-auto">
                              <?php $payloadLines = explode("\n", $log['payload']); ?>
                              <!-- line numbers -->
                              <div class="select-none shrink-0 border-r border-outline-variant/50 bg-gray-100 px-4 py-4 text-right font-mono text-label-md leading-5 text-outline/60">
                                <?php foreach ($payloadLines as $ln => $line): ?><div><?= $ln + 1 ?></div><?php endforeach; ?>
                              </div>
                              <!-- code -->
                              <pre class="flex-1 px-5 py-4 font-mono text-label-md text-gray-500 overflow-x-auto leading-5"><?= htmlspecialchars($log['payload']) ?></pre>
                            </div>
                          </div>
                        </div>
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
            <span class="font-semibold text-on-surface">20</span> of
            <span class="font-semibold text-on-surface">202</span> entries</p>
          <nav class="flex items-center gap-1.5">
            <button type="button" class="w-9 h-9 rounded-lg border border-outline-variant text-outline flex items-center justify-center hover:bg-surface-container-low disabled:opacity-40 disabled:cursor-not-allowed transition-all" disabled>
              <span class="material-symbols-outlined text-[18px]">chevron_left</span>
            </button>
            <button type="button" class="w-9 h-9 rounded-lg bg-primary text-white font-bold text-label-md flex items-center justify-center">1</button>
            <button type="button" class="w-9 h-9 rounded-lg border border-outline-variant text-on-surface font-semibold text-label-md flex items-center justify-center hover:bg-surface-container-low transition-all">2</button>
            <button type="button" class="w-9 h-9 rounded-lg border border-outline-variant text-on-surface font-semibold text-label-md flex items-center justify-center hover:bg-surface-container-low transition-all">3</button>
            <span class="px-1 text-outline">&hellip;</span>
            <button type="button" class="w-9 h-9 rounded-lg border border-outline-variant text-on-surface font-semibold text-label-md flex items-center justify-center hover:bg-surface-container-low transition-all">11</button>
            <button type="button" class="w-9 h-9 rounded-lg border border-outline-variant text-outline flex items-center justify-center hover:bg-surface-container-low transition-all">
              <span class="material-symbols-outlined text-[18px]">chevron_right</span>
            </button>
          </nav>
        </div>

        <!-- Real-time note -->
        <div class="flex items-center justify-end gap-1.5 px-6 py-3">
          <span class="material-symbols-outlined text-[18px] text-amber-500">bolt</span>
          <p class="text-label-md text-gray-400">Data updates near real time</p>
        </div>
        </div>
        <!-- /Panel: Login Logs -->

        <!-- Panel: API Logs -->
        <div class="js-panel hidden" data-panel="api">
          <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse min-w-[900px]">
              <thead class="bg-surface-container-low/50">
                <tr>
                  <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">#</th>
                  <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Activity / Endpoint</th>
                  <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Status</th>
                  <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Time</th>
                  <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant text-right">Payload</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-outline-variant/40">
                <?php foreach ($apiLogs as $api): $mCls = $methodCfg[$api['method']] ?? 'bg-surface-container-high text-on-surface-variant'; $ok = $api['status'] === 'Success'; ?>
                <tr class="hover:bg-surface-container-low transition-colors group">
                  <!-- # -->
                  <td class="px-6 py-4 text-body-md text-outline font-medium align-top"><?= $api['n'] ?></td>
                  <!-- Activity / Endpoint -->
                  <td class="px-6 py-4">
                    <div class="flex items-center gap-2 flex-wrap">
                      <p class="text-body-md text-on-surface font-medium"><?= htmlspecialchars($api['activity']) ?></p>
                      <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-[10px] font-bold uppercase tracking-wide <?= $mCls ?>"><?= htmlspecialchars($api['method']) ?></span>
                    </div>
                    <code class="mt-1.5 inline-block rounded-md bg-gray-50 border border-gray-200 px-2.5 py-1.5 text-label-md font-mono text-gray-500 break-all"><?= htmlspecialchars($api['endpoint']) ?></code>
                  </td>
                  <!-- Status -->
                  <td class="px-6 py-4 align-top">
                      <span class="inline-flex items-center gap-1 rounded-full border px-2.5 py-0.5 text-label-sm font-bold <?= $ok ? 'bg-emerald-50 text-emerald-600 border-emerald-200' : 'bg-rose-50 text-rose-600 border-rose-200' ?>">
                        <span class="h-1.5 w-1.5 rounded-full <?= $ok ? 'bg-emerald-500' : 'bg-rose-500' ?>"></span><?= $api['code'] ?>
                      </span>
                      <p class="mt-1 text-label-md font-semibold <?= $ok ? 'text-emerald-600' : 'text-rose-600' ?>"><?= htmlspecialchars($api['status']) ?></p>
                  </td>
                  <!-- Time -->
                  <td class="px-6 py-4 align-top whitespace-nowrap">
                    <p class="text-label-md text-on-surface-variant whitespace-nowrap"><?= htmlspecialchars($api['time']) ?></p>
                    <p class="text-label-sm text-gray-400"><?= htmlspecialchars($api['ago']) ?></p>
                  </td>
                  <!-- Payload -->
                  <td class="px-6 py-4 text-right align-top">
                    <button type="button" class="inline-flex items-center gap-1.5 rounded-lg bg-brand-gradient px-3.5 py-1.5 text-label-md font-semibold text-white shadow-sm hover:opacity-90 active:scale-[0.98] transition">
                      <span class="material-symbols-outlined text-[16px]">data_object</span>View
                    </button>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <!-- Real-time note -->
          <div class="flex items-center justify-end gap-1.5 px-6 py-3">
            <span class="material-symbols-outlined text-[18px] text-amber-500">bolt</span>
            <p class="text-label-md text-gray-400">Data updates near real time</p>
          </div>
        </div>
        <!-- /Panel: API Logs -->

        <!-- Panel: User Logs -->
        <div class="js-panel hidden" data-panel="user">
          <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse min-w-[1000px]">
              <thead class="bg-surface-container-low/50">
                <tr>
                  <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">#</th>
                  <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">IP Address</th>
                  <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Activity</th>
                  <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Time</th>
                  <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant text-right">Data</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-outline-variant/40">
                <?php foreach ($userLogs as $u): $umCls = $userMethodCfg[$u['method']] ?? 'bg-surface-container-high text-on-surface-variant'; ?>
                <tr class="hover:bg-surface-container-low transition-colors group">
                  <!-- # -->
                  <td class="px-6 py-4 text-body-md text-outline font-medium align-top"><?= $u['n'] ?></td>
                  <!-- IP Address -->
                  <td class="px-6 py-4 align-top whitespace-nowrap">
                    <span class="font-mono text-label-md text-on-surface-variant whitespace-nowrap"><?= htmlspecialchars($u['ip']) ?></span>
                  </td>
                  <!-- Activity -->
                  <td class="px-6 py-4">
                    <div class="flex items-center gap-2 flex-wrap">
                      <p class="text-body-md text-on-surface font-medium"><?= htmlspecialchars($u['activity']) ?></p>
                      <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-[10px] font-bold uppercase tracking-wide <?= $umCls ?>"><?= htmlspecialchars($u['method']) ?></span>
                    </div>
                    <p class="mt-1 flex items-center gap-1 text-label-md font-mono text-gray-400">
                      <span class="material-symbols-outlined text-[14px]">link</span>
                      <span class="truncate max-w-[260px]"><?= htmlspecialchars($u['endpoint']) ?></span>
                    </p>
                  </td>
                  <!-- Time -->
                  <td class="px-6 py-4 align-top whitespace-nowrap">
                    <p class="text-label-md text-on-surface-variant whitespace-nowrap"><?= htmlspecialchars($u['time']) ?></p>
                    <p class="text-label-sm text-gray-400"><?= htmlspecialchars($u['ago']) ?></p>
                  </td>
                  <!-- Data -->
                  <td class="px-6 py-4 text-right align-top">
                    <?php if (!empty($u['data'])): ?>
                    <button type="button" class="js-api-toggle inline-flex items-center gap-1.5 rounded-lg bg-brand-gradient px-3.5 py-1.5 text-label-md font-semibold text-white shadow-sm hover:opacity-90 active:scale-[0.98] transition" data-target="user-detail-<?= $u['n'] ?>">
                      <span class="material-symbols-outlined text-[16px]">visibility</span>View
                    </button>
                    <?php else: ?>
                    <span class="text-body-md text-outline">&ndash;</span>
                    <?php endif; ?>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <!-- Real-time note -->
          <div class="flex items-center justify-end gap-1.5 px-6 py-3">
            <span class="material-symbols-outlined text-[18px] text-amber-500">bolt</span>
            <p class="text-label-md text-gray-400">Data updates near real time</p>
          </div>
        </div>
        <!-- /Panel: User Logs -->
      </div>
    </section>
    <?php include('footer.php'); ?>
  </main>
  <!-- Micro-interaction Scripts -->
   <?php include('script.php'); ?>
   <script>
     document.querySelectorAll('.js-log-row').forEach(function (row) {
       row.addEventListener('click', function () {
         var detail = document.getElementById(row.getAttribute('data-target'));
         if (!detail) return;
         var chevron = row.querySelector('.js-chevron');
         var isOpen = !detail.classList.contains('hidden');
         detail.classList.toggle('hidden');
         row.classList.toggle('bg-surface-container-low', !isOpen);
         if (chevron) chevron.classList.toggle('rotate-180', !isOpen);
       });
     });

     // Tab switching
     var tabs = document.querySelectorAll('.js-tab');
     var panels = document.querySelectorAll('.js-panel');
     tabs.forEach(function (tab) {
       tab.addEventListener('click', function () {
         var key = tab.getAttribute('data-tab');
         tabs.forEach(function (t) {
           var on = t === tab;
           t.classList.toggle('border-primary', on);
           t.classList.toggle('text-primary', on);
           t.classList.toggle('border-transparent', !on);
           t.classList.toggle('text-outline', !on);
         });
         panels.forEach(function (p) {
           p.classList.toggle('hidden', p.getAttribute('data-panel') !== key);
         });
       });
     });

     // API payload toggle
     document.querySelectorAll('.js-api-toggle').forEach(function (btn) {
       btn.addEventListener('click', function () {
         var detail = document.getElementById(btn.getAttribute('data-target'));
         if (detail) detail.classList.toggle('hidden');
       });
     });

     // Copy pass ID
     document.querySelectorAll('.js-copy-text').forEach(function (btn) {
       btn.addEventListener('click', function () {
         var icon = btn.querySelector('.material-symbols-outlined');
         navigator.clipboard.writeText(btn.getAttribute('data-copy') || '').then(function () {
           if (!icon) return;
           var prev = icon.textContent;
           icon.textContent = 'check';
           btn.classList.add('text-emerald-600');
           setTimeout(function () { icon.textContent = prev; btn.classList.remove('text-emerald-600'); }, 1200);
         });
       });
     });
   </script>
</body>

</html>
