<!DOCTYPE html>
<html class="light" lang="en" style="">
 
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WePass - Pass Logs</title>
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
      <!-- Breadcrumbs and Header -->
      <div class="flex items-end justify-between">
        <div class="space-y-1">
          <nav class="flex items-center gap-2 text-label-sm text-outline mb-1">
            <span class="material-symbols-outlined text-[14px] text-gray">home</span>
            <span class="text-gray font-normal">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray-500 font-normal">Pass Logs</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Pass Logs</h2>
        </div>
        <div class="flex items-center gap-3">
          <button
            class="flex items-center gap-2 bg-white border border-outline-variant/50 text-on-surface px-6 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold shadow-sm"
            onclick="document.getElementById('filter-panel').classList.toggle('hidden')">
            <span class="material-symbols-outlined text-[20px]">filter_alt</span>
            <span class="">Filter</span>
          </button>
        </div>
      </div>
      <div
          class="bg-white rounded-2xl border border-outline-variant p-6 shadow-sm transition-all duration-300 overflow-hidden hidden"
          id="filter-panel">
          <div class="flex flex-col gap-4">
            <div class="flex flex-col gap-1">
              <h3 class="text-primary font-display font-bold text-headline-md">Filter Pass Logs</h3>
              <p class="text-gray-400 text-body-md">Refine your search to find specific pass activity logs</p>
            </div>
            <div class="border-t border-outline-variant/30"></div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 items-end">
              <!-- User -->
              <div class="space-y-2">
                <label class="text-on-surface font-bold text-label-md">User:</label>
                <input
                  class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                  placeholder="Search by name or email..." type="text">
              </div>
              <!-- Pass ID -->
              <div class="space-y-2">
                <label class="text-on-surface font-bold text-label-md">Pass ID:</label>
                <input
                  class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                  placeholder="Search Pass ID..." type="text">
              </div>
              <!-- Record ID -->
              <div class="space-y-2">
                <label class="text-on-surface font-bold text-label-md">Record ID:</label>
                <input
                  class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                  placeholder="Search Record ID..." type="text">
              </div>
              <!-- Install ID -->
              <div class="space-y-2">
                <label class="text-on-surface font-bold text-label-md">Install ID:</label>
                <input
                  class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                  placeholder="Search Install ID..." type="text">
              </div>
              <!-- Serial No. -->
              <div class="space-y-2">
                <label class="text-on-surface font-bold text-label-md">Serial No:</label>
                <input
                  class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                  placeholder="Search Apple Serial No..." type="text">
              </div>
              <!-- Object ID -->
              <div class="space-y-2">
                <label class="text-on-surface font-bold text-label-md">Object ID:</label>
                <input
                  class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                  placeholder="Search Google Object ID..." type="text">
              </div>
              <!-- Device ID -->
              <div class="space-y-2">
                <label class="text-on-surface font-bold text-label-md">Device ID:</label>
                <input
                  class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                  placeholder="Search Apple Device ID..." type="text">
              </div>
              <!-- Status -->
              <div class="space-y-2">
                <label class="text-on-surface font-bold text-label-md">Status:</label>
                <div class="relative">
                  <select
                    class="w-full js-select2">
                    <option>All</option>
                    <option>Active</option>
                    <option>Inactive</option>
                  </select>
                </div>
              </div>
              <!-- Action Type -->
              <div class="space-y-2">
                <label class="text-on-surface font-bold text-label-md">Action Type:</label>
                <div class="relative">
                  <select
                    class="w-full js-select2">
                    <option>All</option>
                    <option>Register</option>
                    <option>Unregister</option>
                    <option>Update</option>
                  </select>
                </div>
              </div>
              <!-- API Status -->
              <div class="space-y-2">
                <label class="text-on-surface font-bold text-label-md">API Status:</label>
                <div class="relative">
                  <select
                    class="w-full js-select2">
                    <option>All</option>
                    <option>Success</option>
                    <option>Failed</option>
                  </select>
                </div>
              </div>
              <!-- Date Range -->
              <div class="space-y-2">
                <label class="text-on-surface font-bold text-label-md">Date Range:</label>
                <div class="relative">
                <span
                  class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-primary text-[20px]">calendar_month</span>
                <input
                  class="js-daterange w-full bg-surface-container-low border-outline-variant rounded-lg pl-10 pr-4 py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                  placeholder="Select date range" readonly="" type="text">
              </div>
              </div>
              <!-- Actions -->
              <div class="flex items-center gap-3">
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

      <!-- Table Card -->
      <div class="overflow-hidden rounded-2xl border border-outline-variant/60 bg-surface shadow-sm [&:has(.js-menu-panel:not(.hidden))]:overflow-visible">
        <!-- Legend Bar -->
        <div class="flex justify-end flex-wrap items-center gap-x-6 gap-y-2 border-b border-outline-variant/60 bg-surface-container-low/60 px-6 py-3">
          <span class="inline-flex items-center gap-1.5 text-label-md text-secondary font-semibold">
            <span class="material-symbols-outlined text-[18px] text-blue-500">add_circle</span> New Pass
          </span>
          <span class="inline-flex items-center gap-1.5 text-label-md text-secondary font-semibold">
            <span class="material-symbols-outlined text-[18px] text-amber-500">sync</span> Update
          </span>
          <span class="inline-flex items-center gap-1.5 text-label-md text-secondary font-semibold">
            <span class="material-symbols-outlined text-[18px] text-rose-500">notifications</span> Push Notification
          </span>
          <span class="inline-flex items-center gap-1.5 text-label-md text-secondary font-semibold">
            <span class="material-symbols-outlined text-[18px] text-rose-500">delete</span> Uninstall
          </span>
          <span class="inline-flex items-center gap-1.5 text-label-md text-secondary font-semibold">
            <span class="material-symbols-outlined text-[18px] text-emerald-500">check_circle</span> Success
          </span>
          <span class="inline-flex items-center gap-1.5 text-label-md text-secondary font-semibold">
            <span class="material-symbols-outlined text-[18px] text-rose-500">cancel</span> Failed
          </span>
          <span class="text-label-md text-outline">Showing 71–80 of 351 entries</span>
        </div>
        <!-- Table -->
        <div class="overflow-x-auto [&:has(.js-menu-panel:not(.hidden))]:overflow-visible">
          <table class="responsive-table w-full border-collapse text-left">
            <thead>
              <tr class="bg-surface-container-low/60">
                <th class="w-16 px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">#</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Template / Record</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Pass Receiver</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Platform</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Object ID / Serial No.</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Action</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Status / API</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Created At</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant text-right">Action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-outline-variant/50">
              <?php
              // Badge palette helpers (action + status chips)
              $actionStyles = [
                'blue'   => 'bg-blue-50 text-blue-600',
                'yellow' => 'bg-amber-100 text-amber-700',
              ];
              $statusStyles = [
                'amber'  => 'bg-amber-100 text-amber-700',
                'indigo' => 'bg-indigo-50 text-indigo-600',
                'green'  => 'bg-emerald-100 text-emerald-700',
                'teal'   => 'bg-teal-100 text-teal-700',
              ];

              $logs = [
                [
                  'num' => 71, 'template' => 'Loyalty-Card-62', 'pass' => null, 'record' => null, 'install' => null,
                  'receiver' => null, 'platform' => 'google',
                  'ids' => [['CI', '3388000000022825640.51ae39eda385ebed085dba261611ea8e3dee77a9']],
                  'action' => 'Templete Class Update', 'action_color' => 'blue',
                  'status' => 'Updated', 'status_color' => 'amber', 'api' => false,
                  'created' => '26/06/2026 11:02:08', 'ago' => '3 days ago',
                ],
                [
                  'num' => 72, 'template' => 'Loyalty-Card-62', 'pass' => '3983aaba656b683a', 'record' => '2210', 'install' => null,
                  'receiver' => ['hardik', 'hardik@wepass.io'], 'platform' => 'apple',
                  'ids' => [['SN', '91169bdefe2dbcceaa29d6caac94437d33ead573']],
                  'action' => 'New Pass', 'action_color' => 'blue',
                  'status' => 'Generate', 'status_color' => 'indigo', 'api' => true,
                  'created' => '26/06/2026 10:58:53', 'ago' => '3 days ago',
                ],
                [
                  'num' => 73, 'template' => 'Loyalty-Card-62', 'pass' => '3983aaba656b683a', 'record' => '2210', 'install' => null,
                  'receiver' => ['hardik', 'hardik@wepass.io'], 'platform' => 'google',
                  'ids' => [['OI', '3388000000022825640.cb99711739aa5eaa3abe7f725107dc0f05a80b78']],
                  'action' => 'New Pass', 'action_color' => 'blue',
                  'status' => 'Generate', 'status_color' => 'indigo', 'api' => true,
                  'created' => '26/06/2026 10:58:26', 'ago' => '3 days ago',
                ],
                [
                  'num' => 74, 'template' => 'Loyalty-Card-62', 'pass' => null, 'record' => null, 'install' => null,
                  'receiver' => null, 'platform' => 'google',
                  'ids' => [['CI', '3388000000022825640.51ae39eda385ebed085dba261611ea8e3dee77a9']],
                  'action' => 'Templete Class Create', 'action_color' => 'blue',
                  'status' => 'Created', 'status_color' => 'green', 'api' => true,
                  'created' => '26/06/2026 10:57:24', 'ago' => '3 days ago',
                ],
                [
                  'num' => 75, 'template' => 'Gift-Card-66', 'pass' => 'f85545931013002a', 'record' => '2209', 'install' => null,
                  'receiver' => ['hardik', 'hardik@wepass.io'], 'platform' => 'apple',
                  'ids' => [['SN', 'd3fc7742e4fe49815175e7687c8464bf37c6dd2b']],
                  'action' => 'New Pass', 'action_color' => 'blue',
                  'status' => 'Generate', 'status_color' => 'indigo', 'api' => true,
                  'created' => '26/06/2026 09:58:52', 'ago' => '3 days ago',
                ],
                [
                  'num' => 76, 'template' => 'Gift-Card-66', 'pass' => 'f85545931013002a', 'record' => '2209', 'install' => null,
                  'receiver' => ['hardik', 'hardik@wepass.io'], 'platform' => 'google',
                  'ids' => [['OI', '3388000000022825640.e71849308a1e5add09a6d51e3378f825000f4e70']],
                  'action' => 'New Pass', 'action_color' => 'blue',
                  'status' => 'Generate', 'status_color' => 'indigo', 'api' => true,
                  'created' => '26/06/2026 09:58:12', 'ago' => '3 days ago',
                ],
                [
                  'num' => 77, 'template' => 'Gift-Card-66', 'pass' => null, 'record' => null, 'install' => null,
                  'receiver' => null, 'platform' => 'google',
                  'ids' => [['CI', '3388000000022825640.561298168422529d78c82800bc129e2ecbbe9390']],
                  'action' => 'Templete Class Update', 'action_color' => 'blue',
                  'status' => 'Updated', 'status_color' => 'amber', 'api' => true,
                  'created' => '26/06/2026 09:57:04', 'ago' => '3 days ago',
                ],
                [
                  'num' => 78, 'template' => 'Gift-Card-66', 'pass' => null, 'record' => null, 'install' => null,
                  'receiver' => null, 'platform' => 'google',
                  'ids' => [['CI', '3388000000022825640.561298168422529d78c82800bc129e2ecbbe9390']],
                  'action' => 'Templete Class Create', 'action_color' => 'blue',
                  'status' => 'Created', 'status_color' => 'green', 'api' => true,
                  'created' => '26/06/2026 09:56:24', 'ago' => '3 days ago',
                ],
                [
                  'num' => 79, 'template' => 'Gift-Card-65', 'pass' => '0844bf71d59565bc', 'record' => '2208', 'install' => '1553',
                  'receiver' => ['hardik', 'hardik@wepass.io'], 'platform' => 'apple',
                  'ids' => [
                    ['SN', '5524087323254e711f1ac62a9b3f85c0dc5c0984'],
                    ['PTI', 'pass.com.example.laravel'],
                    ['DI', 'f8a8f3b6e5d456946dc1daed5f79d90a04035ac02ff47b3ba01a0d5456d0e057'],
                  ],
                  'action' => 'Update', 'action_color' => 'yellow',
                  'status' => 'Template APS Alert', 'status_color' => 'teal', 'api' => true,
                  'created' => '26/06/2026 08:48:36', 'ago' => '3 days ago',
                ],
                [
                  'num' => 80, 'template' => 'Gift-Card-65', 'pass' => null, 'record' => null, 'install' => null,
                  'receiver' => null, 'platform' => 'google',
                  'ids' => [['CI', '3388000000022825640.5e3d8d75326e885b679b5dc05349d76f8660762a']],
                  'action' => 'Templete Class Update', 'action_color' => 'blue',
                  'status' => 'Updated', 'status_color' => 'amber', 'api' => true,
                  'created' => '26/06/2026 08:48:36', 'ago' => '3 days ago',
                ],
              ];

              foreach ($logs as $log):
              ?>
              <tr class="hover:bg-surface-container-low transition-colors group align-top">
                <!-- # -->
                <td class="px-6 py-4" data-label="#">
                  <span class="text-body-md font-semibold text-outline"><?= $log['num'] ?></span>
                </td>
                <!-- Template / Record -->
                <td class="cell-main px-6 py-4" data-label="Template / Record">
                  <div class="flex items-start gap-3">
                    <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-primary-fixed text-primary shadow-sm">
                      <span class="material-symbols-outlined text-[20px]">badge</span>
                    </span>
                    <div class="min-w-0">
                      <p class="text-body-md text-on-surface font-semibold whitespace-nowrap"><?= htmlspecialchars($log['template']) ?></p>
                      <?php if ($log['pass']): ?>
                        <p class="mt-0.5 text-label-sm text-outline font-mono whitespace-nowrap">
                          <span class="rounded bg-surface-container-high px-1.5 py-0.5 text-secondary">#Pass:</span> <?= htmlspecialchars($log['pass']) ?>
                        </p>
                      <?php endif; ?>
                      <?php if ($log['record']): ?>
                        <p class="mt-0.5 text-label-sm text-outline font-mono whitespace-nowrap">
                          <span class="text-secondary">#Record: <?= htmlspecialchars($log['record']) ?></span>
                          <?php if ($log['install']): ?> &nbsp;|&nbsp; <span class="text-secondary">#Install: <?= htmlspecialchars($log['install']) ?></span><?php endif; ?>
                        </p>
                      <?php endif; ?>
                    </div>
                  </div>
                </td>
                <!-- Pass Receiver -->
                <td class="px-6 py-4" data-label="Pass Receiver">
                  <?php if ($log['receiver']): ?>
                    <p class="text-body-md text-on-surface font-medium"><?= htmlspecialchars($log['receiver'][0]) ?></p>
                    <p class="text-label-sm text-outline italic"><?= htmlspecialchars($log['receiver'][1]) ?></p>
                  <?php else: ?>
                    <span class="text-body-md text-outline">-</span>
                  <?php endif; ?>
                </td>
                <!-- Platform -->
                <td class="px-6 py-4" data-label="Platform">
                  <?php if ($log['platform'] === 'google'): ?>
                    <!-- <span class="w-11 h-11 rounded-xl bg-surface-container-low border border-outline-variant/70 flex items-center justify-center shrink-0"> -->
                        <svg viewBox="0 0 24 24" class="w-8 h-8">
                            <rect x="2.5"   y="2"   width="19" height="20"   rx="2.5" fill="#34A853"/>
                            <rect x="2.5"   y="4"   width="19" height="18"   rx="2.5" fill="#FBBC05"/>
                            <rect x="2.5" y="6.5" width="19" height="15.5" rx="2.5" fill="#EA4335"/>
                            <path d="M2 12.2 C 5.5 10.2 8.5 13.8 12 14 C 15.5 14.2 18.5 10.5 22 10.8 L 22 19.5 Q 22 22 19.5 22 L 4.5 22 Q 2 22 2 19.5 Z" fill="#4285F4"/>
                        </svg>
                    <!-- </span> -->
                  <?php else: ?>
                    <!-- <span class="w-11 h-11 rounded-xl bg-surface-container-low border border-outline-variant/70 flex items-center justify-center text-on-surface shrink-0"> -->
                        <svg viewBox="0 0 384 512" class="w-8 h-8 fill-current">
                            <path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"/>
                        </svg>
                    <!-- </span> -->
                  <?php endif; ?>
                </td>
                <!-- Object ID / Serial No. -->
                <td class="px-6 py-4" data-label="Object ID / Serial No.">
                  <div class="space-y-1 max-w-[360px]">
                    <?php foreach ($log['ids'] as $id): ?>
                      <div class="flex items-start gap-2">
                        <span class="shrink-0 rounded bg-surface-container-high px-1.5 py-0.5 text-label-sm font-bold text-secondary">#<?= htmlspecialchars($id[0]) ?></span>
                        <span class="text-label-md text-on-surface-variant font-mono break-all"><?= htmlspecialchars($id[1]) ?></span>
                      </div>
                    <?php endforeach; ?>
                  </div>
                </td>
                <!-- Action -->
                <td class="px-6 py-4" data-label="Action">
                  <span class="inline-flex items-center rounded-lg px-3 py-1 text-label-md font-semibold whitespace-nowrap <?= $actionStyles[$log['action_color']] ?>"><?= htmlspecialchars($log['action']) ?></span>
                </td>
                <!-- Status / API -->
                <td class="px-6 py-4" data-label="Status / API">
                  <div class="flex items-center gap-2">
                    <span class="inline-flex items-center rounded-lg px-3 py-1 text-label-md font-semibold whitespace-nowrap <?= $statusStyles[$log['status_color']] ?>"><?= htmlspecialchars($log['status']) ?></span>
                    <?php if ($log['api']): ?>
                      <span class="material-symbols-outlined text-[20px] text-emerald-500" title="API Success">check_circle</span>
                    <?php else: ?>
                      <span class="material-symbols-outlined text-[20px] text-rose-500" title="API Failed">cancel</span>
                    <?php endif; ?>
                  </div>
                </td>
                <!-- Created At -->
                <td class="px-6 py-4" data-label="Created At">
                  <p class="text-label-md text-on-surface-variant whitespace-nowrap"><?= htmlspecialchars($log['created']) ?></p>
                  <p class="text-label-sm text-outline"><?= htmlspecialchars($log['ago']) ?></p>
                </td>
                <!-- Action (view) -->
                <td class="cell-action px-6 py-4 text-right">
                  <a href="#" title="View details"
                    class="inline-flex h-9 w-9 items-center justify-center rounded-lg bg-primary text-on-primary shadow-sm shadow-primary/30 hover:opacity-90 transition-all">
                    <span class="material-symbols-outlined text-[20px]">visibility</span>
                  </a>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>

        <!-- Footer / Pagination -->
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
        <div class="flex items-center justify-end gap-1.5 border-t border-outline-variant/60 px-6 py-3 text-label-sm text-outline">
          <span class="material-symbols-outlined text-[16px] text-amber-500">bolt</span>
          Data updates near real time
        </div>
      </div>
    </section>
    <?php include('footer.php'); ?>
  </main>
  <!-- Micro-interaction Scripts -->
   <?php include('script.php'); ?>
</body>
 
</html>