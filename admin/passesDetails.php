<!DOCTYPE html>
<html class="light" lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WePass - Pass Details</title>
  <?php include('head.php'); ?>
</head>

<body class="bg-background text-on-surface selection:bg-primary-container/20 selection:text-primary">
  <!-- Sidebar Navigation -->
   <?php include('sidebar.php'); ?>
  <!-- Main Content Shell -->
  <main class="ml-[300px] min-h-screen flex flex-col transition-all duration-300 ease-in-out">
    <!-- Top App Bar -->
     <?php include('header.php'); ?>

    <?php
      // --- Pass data (would normally be fetched from the database) ---
      $pass = [
        'name'        => 'Jenil Patel',
        'id'          => '18551e100cd65ae8f39821cdfe8ff8ef',
        'status'      => 'Active',
        'type'        => 'Personalized',
        'category'    => 'Gift Card',
        'distribution'=> 'Manual',
        'last_updated'=> '2026-06-25 09:31:24',
        // Install summary
        'total_installs'   => 8,
        'total_uninstalls' => 3,
        'apple_total'      => 1,
        'apple_installs'   => 3,
        'apple_removed'    => 2,
        'google_total'     => 4,
        'google_installs'  => 5,
        'google_removed'   => 1,
        // Pass record
        'record_id'   => 263,
        'email'       => 'jenilv.aatmaninfo@gmail.com',
        'first_name'  => 'jp',
        'last_name'   => '',
        'apple_obj'   => 'cb3ba95812bd60699e175f842b8e699c707440aa',
        'google_obj'  => '3388000000022873057.48583b9712d338e76eb4022d719d6dde2eccd731',
        // Pass record detail
        'header'      => 'Titan Watches',
        'sub_header'  => '',
        'background'  => '#DD3D1F',
        'data' => [
          'Card balance value' => '100',
          'Currency code'      => 'EUR',
          'Gift card number'   => 'ABCD123456',
          'Expiry date'        => '2026-07-25 09:28:31',
          'Card pin value'     => '',
          'Event number value' => '',
          'Gw additional img'  => '',
          'Barcode value'      => '1246897531',
        ],
        // Pass install
        'install_id'  => 64,
        // Pass template
        'tpl_name'    => 'Gift-Card-28',
        'tpl_id'      => 'db1e59e3ffc2c8daad5d2c6bf96d8068b4446334',
        'tpl_type'    => 'Gift Card',
        'tpl_by'      => 'Hardik Savani',
        'tpl_by_email'=> 'savanihd@gmail.com',
        'tpl_title'   => 'GIFT CARD',
        'tpl_created' => '2026-06-25 09:29:02',
        'tpl_updated' => '2026-06-25 09:29:05',
      ];
      // Small helper: render a dash for empty values
      function val(?string $v): string { return ($v === '' || $v === null) ? '<span class="text-outline">&mdash;</span>' : htmlspecialchars($v); }
    ?>

    <!-- Canvas -->
    <section class="p-margin-desktop space-y-stack-lg pb-16">
      <!-- Page Header -->
      <div class="flex flex-wrap items-end justify-between gap-4">
        <div class="space-y-1">
          <nav class="flex items-center gap-2 text-label-sm text-outline mb-1">
            <span class="material-symbols-outlined text-[14px] text-gray">home</span> <span class="text-gray font-normal">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray font-normal">Passes</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray-500 font-normal">Details</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Pass Details</h2>
        </div>
        <a href="passes.php" class="flex items-center gap-2 bg-white border border-outline-variant/50 text-on-surface px-6 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold shadow-sm">
            <span class="material-symbols-outlined text-[18px]">arrow_back</span>
            Back
        </a>
      </div>

      <!-- Hero / Identity Card -->
      <div class="relative overflow-hidden rounded-2xl border border-outline-variant bg-white shadow-sm">
        <!-- Accent strip -->
        <!-- <div class="absolute inset-x-0 top-0 h-1 bg-brand-gradient"></div> -->
        <div class="p-6 sm:p-7">
          <!-- Identity row -->
          <div class="flex flex-col gap-5 lg:flex-row lg:items-center lg:justify-between">
            <div class="flex items-center gap-4 min-w-0">
              <div class="relative shrink-0">
                <div class="w-14 h-14 rounded-2xl bg-brand-gradient text-on-primary flex items-center justify-center shadow-md shadow-primary/20">
                  <span class="material-symbols-outlined text-[32px] font-variation-fill">how_to_reg</span>
                </div>
                <span class="absolute -bottom-0.5 -right-0.5 w-4 h-4 rounded-full bg-emerald-500 ring-[3px] ring-white" title="Active"></span>
              </div>
              <div class="min-w-0">
                <h3 class="text-headline-lg font-bold tracking-tight leading-tight"><?= htmlspecialchars($pass['name']) ?></h3>
                <p class="text-label-md text-outline font-mono truncate"># <?= htmlspecialchars($pass['id']) ?></p>
              </div>
            </div>
            <!-- Badges -->
            <div class="flex flex-wrap items-center gap-2">
              <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 border border-emerald-200 px-3 py-1.5 text-label-md font-bold text-emerald-600">
                <span class="material-symbols-outlined text-[16px] font-variation-fill">check_circle</span>
                <?= htmlspecialchars($pass['status']) ?>
              </span>
              <span class="inline-flex items-center gap-1.5 rounded-full bg-primary/10 border border-primary/20 px-3 py-1.5 text-label-md font-bold text-primary">
                <span class="material-symbols-outlined text-[16px]">person</span>
                <?= htmlspecialchars($pass['type']) ?>
              </span>
              <span class="inline-flex items-center gap-1.5 rounded-full bg-tertiary-container/50 border border-tertiary/20 px-3 py-1.5 text-label-md font-bold text-tertiary">
                <span class="material-symbols-outlined text-[16px]">card_giftcard</span>
                <?= htmlspecialchars($pass['category']) ?>
              </span>
              <span class="inline-flex items-center gap-1.5 rounded-full bg-surface-container-low border border-outline-variant px-3 py-1.5 text-label-md font-bold text-secondary">
                <span class="material-symbols-outlined text-[16px]">send</span>
                <?= htmlspecialchars($pass['distribution']) ?>
              </span>
            </div>
          </div>

          <!-- Stat tiles -->
          <div class="mt-6 grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">
            <!-- Total Installs -->
            <?php
              $tInstalls   = (int)$pass['total_installs'];
              $tUninstalls = (int)$pass['total_uninstalls'];
              $tActive     = max(0, $tInstalls - $tUninstalls);
              $tRetention  = $tInstalls > 0 ? round(($tActive / $tInstalls) * 100) : 0;
            ?>
            <div class="relative overflow-hidden rounded-xl border border-emerald-200/70 bg-gradient-to-br from-emerald-50 to-emerald-100/40 p-4">
              <span class="material-symbols-outlined pointer-events-none absolute -right-3 -top-3 text-[60px] text-emerald-500/10 leading-none">download</span>
              <div class="relative flex items-center gap-2 text-label-sm font-bold uppercase tracking-wider text-emerald-700">
                <span class="flex h-6 w-6 items-center justify-center rounded-md bg-emerald-500/15">
                  <span class="material-symbols-outlined text-[16px]">download</span>
                </span>
                Total Installs
              </div>
              <div class="relative mt-3">
                <div class="h-1.5 w-full overflow-hidden rounded-full bg-emerald-500/15">
                  <div class="h-full rounded-full bg-emerald-500" style="width: <?= $tRetention ?>%"></div>
                </div>
                <div class="mt-2 flex items-center justify-between text-label-sm font-medium text-emerald-700/80">
                  <span><?= number_format($tActive) ?> active</span>
                  <span><?= number_format($tUninstalls) ?> uninstalled</span>
                </div>
              </div>
            </div>
            <!-- Apple Wallet -->
            <?php
              $aInstalls = (int)$pass['apple_installs'];
              $aRemoved  = (int)$pass['apple_removed'];
              $aActive   = max(0, $aInstalls - $aRemoved);
              $aRate     = $aInstalls > 0 ? round(($aActive / $aInstalls) * 100) : 0;
            ?>
            <div class="relative overflow-hidden rounded-xl border border-sky-200/70 bg-gradient-to-br from-sky-50 to-sky-100/40 p-4">
              <svg viewBox="0 0 24 24" class="pointer-events-none absolute -right-3 -top-3 w-[60px] h-[60px] text-sky-500/10" fill="currentColor" aria-hidden="true"><path d="M17.05 12.04c-.03-2.43 1.99-3.6 2.08-3.66-1.13-1.66-2.9-1.89-3.53-1.91-1.5-.15-2.93.88-3.69.88-.76 0-1.94-.86-3.19-.84-1.64.02-3.15.95-3.99 2.42-1.7 2.95-.43 7.32 1.22 9.71.81 1.17 1.77 2.48 3.03 2.43 1.22-.05 1.68-.79 3.15-.79 1.47 0 1.88.79 3.17.76 1.31-.02 2.14-1.19 2.94-2.37.93-1.36 1.31-2.68 1.33-2.75-.03-.01-2.55-.98-2.58-3.86zM14.6 4.86c.67-.81 1.12-1.94.99-3.06-.96.04-2.13.64-2.82 1.45-.62.72-1.16 1.87-1.02 2.97 1.07.08 2.17-.55 2.85-1.36z"></path></svg>
              <div class="relative flex items-center gap-2 text-label-sm font-bold uppercase tracking-wider">
                <span class="flex h-6 w-6 items-center justify-center rounded-md bg-sky-500/15">
                    <svg viewBox="0 0 24 24" class="w-4 h-4" fill="currentColor" aria-hidden="true">
                        <path d="M17.05 12.04c-.03-2.43 1.99-3.6 2.08-3.66-1.13-1.66-2.9-1.89-3.53-1.91-1.5-.15-2.93.88-3.69.88-.76 0-1.94-.86-3.19-.84-1.64.02-3.15.95-3.99 2.42-1.7 2.95-.43 7.32 1.22 9.71.81 1.17 1.77 2.48 3.03 2.43 1.22-.05 1.68-.79 3.15-.79 1.47 0 1.88.79 3.17.76 1.31-.02 2.14-1.19 2.94-2.37.93-1.36 1.31-2.68 1.33-2.75-.03-.01-2.55-.98-2.58-3.86zM14.6 4.86c.67-.81 1.12-1.94.99-3.06-.96.04-2.13.64-2.82 1.45-.62.72-1.16 1.87-1.02 2.97 1.07.08 2.17-.55 2.85-1.36z"></path>
                    </svg>
                </span>
                <span class="text-sky-700"> Apple Wallet</span>
              </div>

              <div class="relative mt-3">
                <div class="h-1.5 w-full overflow-hidden rounded-full bg-sky-500/15">
                  <div class="h-full rounded-full bg-sky-500" style="width: <?= $aRate ?>%"></div>
                </div>
                <div class="mt-2 flex items-center justify-between text-label-sm font-medium text-sky-700/80">
                  <span><?= number_format($aActive) ?> active</span>
                  <span><?= number_format($aRemoved) ?> removed</span>
                </div>
              </div>
            </div>
            <!-- Google Wallet -->
            <?php
              $gInstalls = (int)$pass['google_installs'];
              $gRemoved  = (int)$pass['google_removed'];
              $gActive   = max(0, $gInstalls - $gRemoved);
              $gRate     = $gInstalls > 0 ? round(($gActive / $gInstalls) * 100) : 0;
            ?>
            <div class="relative overflow-hidden rounded-xl border border-violet-200/70 bg-gradient-to-br from-violet-50 to-violet-100/40 p-4">
              <svg viewBox="0 0 24 24" class="pointer-events-none absolute -right-3 -top-3 w-[60px] h-[60px] opacity-10" aria-hidden="true"><rect x="2.5" y="2" width="19" height="20" rx="2.5" fill="#34A853"></rect><rect x="2.5" y="4" width="19" height="18" rx="2.5" fill="#FBBC05"></rect><rect x="2.5" y="6.5" width="19" height="15.5" rx="2.5" fill="#EA4335"></rect><path d="M2 12.2 C 5.5 10.2 8.5 13.8 12 14 C 15.5 14.2 18.5 10.5 22 10.8 L 22 19.5 Q 22 22 19.5 22 L 4.5 22 Q 2 22 2 19.5 Z" fill="#4285F4"></path></svg>
              <div class="relative flex items-center gap-2 text-label-sm font-bold uppercase tracking-wider text-violet-700">
                <span class="flex h-6 w-6 items-center justify-center rounded-md bg-violet-500/15">
                  <svg viewBox="0 0 24 24" class="w-4 h-4">
                    <rect x="2.5" y="2" width="19" height="20" rx="2.5" fill="#34A853"></rect>
                    <rect x="2.5" y="4" width="19" height="18" rx="2.5" fill="#FBBC05"></rect>
                    <rect x="2.5" y="6.5" width="19" height="15.5" rx="2.5" fill="#EA4335"></rect>
                    <path d="M2 12.2 C 5.5 10.2 8.5 13.8 12 14 C 15.5 14.2 18.5 10.5 22 10.8 L 22 19.5 Q 22 22 19.5 22 L 4.5 22 Q 2 22 2 19.5 Z" fill="#4285F4"></path>
                </svg>
                </span>
                Google Wallet
              </div>

              <div class="relative mt-3">
                <div class="h-1.5 w-full overflow-hidden rounded-full bg-violet-500/15">
                  <div class="h-full rounded-full bg-violet-500" style="width: <?= $gRate ?>%"></div>
                </div>
                <div class="mt-2 flex items-center justify-between text-label-sm font-medium text-violet-700/80">
                  <span><?= number_format($gActive) ?> active</span>
                  <span><?= number_format($gRemoved) ?> removed</span>
                </div>
              </div>
            </div>
            <!-- Last Updated -->
            <div class="relative overflow-hidden rounded-xl border border-primary/20 bg-gradient-to-br from-primary/5 to-primary/10 p-4">
              <span class="material-symbols-outlined pointer-events-none absolute -right-3 -top-3 text-[60px] text-primary/10 leading-none">schedule</span>
              <div class="relative flex items-center gap-2 text-label-sm font-bold uppercase tracking-wider text-primary">
                <span class="flex h-6 w-6 items-center justify-center rounded-md bg-primary/15">
                  <span class="material-symbols-outlined text-[16px]">schedule</span>
                </span>
                Last Updated
              </div>
              <div class="relative mt-3">
                <p class="text-body-lg font-bold text-on-surface leading-tight"><?= htmlspecialchars($pass['last_updated']) ?></p>
                <p class="mt-1 text-label-sm font-medium text-primary/70">Last sync timestamp</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Two-column detail grid -->
      <div class="grid grid-cols-1 gap-stack-lg xl:grid-cols-2">
        <!-- Pass Record -->
        <div class="flex flex-col rounded-2xl border border-outline-variant bg-white shadow-sm transition-shadow">
          <!-- Header -->
          <div class="flex items-center justify-between gap-3 px-6 py-5">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                <span class="material-symbols-outlined text-[22px]">badge</span>
              </div>
              <div>
                <h4 class="text-body-lg font-bold text-on-surface truncate">Pass Record</h4>
                <p class="text-label-sm text-gray-400">Holder &amp; identity</p>
              </div>
            </div>
            <span class="inline-flex items-center gap-1 rounded-lg bg-surface-container-low border border-outline-variant px-2.5 py-1 text-label-sm font-bold text-secondary font-mono">
              <span class="material-symbols-outlined text-[14px]">tag</span><?= (int)$pass['record_id'] ?>
            </span>
          </div>

          <!-- Divided rows -->
          <dl class="px-6">
            <?php
              $recordRows = [
                ['Email',        val($pass['email'])],
                ['First Name',   val($pass['first_name'])],
                ['Last Name',    val($pass['last_name'])],
                ['Distribution', val($pass['distribution'])],
              ];
              foreach ($recordRows as $r): ?>
              <div class="flex items-baseline justify-between gap-6 py-3 border-t border-outline-variant/40">
                <dt class="text-label-sm font-bold uppercase tracking-wider text-outline"><?= $r[0] ?></dt>
                <dd class="text-body-md font-semibold text-on-surface truncate"><?= $r[1] ?></dd>
              </div>
            <?php endforeach; ?>
            <div class="flex items-center justify-between gap-6 py-3 border-t border-outline-variant/40">
              <dt class="text-label-sm font-bold uppercase tracking-wider text-outline">Status</dt>
              <dd>
                <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 border border-emerald-200 px-2.5 py-1 text-label-md font-bold text-emerald-600">
                  <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span><?= htmlspecialchars($pass['status']) ?>
                </span>
              </dd>
            </div>
            <div class="flex items-baseline justify-between gap-6 py-3 border-t border-outline-variant/40">
              <dt class="text-label-sm font-bold uppercase tracking-wider text-outline">Updated At</dt>
              <dd class="text-body-md font-semibold text-on-surface truncate"><?= val($pass['last_updated']) ?></dd>
            </div>
          </dl>

          <!-- Object IDs -->
          <div class="mt-auto px-6 pt-4 pb-6 space-y-2.5">
            <?php
              $appleIcon = '<svg viewBox="0 0 24 24" class="w-[18px] h-[18px]" fill="currentColor" aria-hidden="true"><path d="M17.05 12.04c-.03-2.43 1.99-3.6 2.08-3.66-1.13-1.66-2.9-1.89-3.53-1.91-1.5-.15-2.93.88-3.69.88-.76 0-1.94-.86-3.19-.84-1.64.02-3.15.95-3.99 2.42-1.7 2.95-.43 7.32 1.22 9.71.81 1.17 1.77 2.48 3.03 2.43 1.22-.05 1.68-.79 3.15-.79 1.47 0 1.88.79 3.17.76 1.31-.02 2.14-1.19 2.94-2.37.93-1.36 1.31-2.68 1.33-2.75-.03-.01-2.55-.98-2.58-3.86zM14.6 4.86c.67-.81 1.12-1.94.99-3.06-.96.04-2.13.64-2.82 1.45-.62.72-1.16 1.87-1.02 2.97 1.07.08 2.17-.55 2.85-1.36z"></path></svg>';
              $googleIcon = '<svg viewBox="0 0 24 24" class="w-[18px] h-[18px]" aria-hidden="true"><rect x="2.5" y="2" width="19" height="20" rx="2.5" fill="#34A853"></rect><rect x="2.5" y="4" width="19" height="18" rx="2.5" fill="#FBBC05"></rect><rect x="2.5" y="6.5" width="19" height="15.5" rx="2.5" fill="#EA4335"></rect><path d="M2 12.2 C 5.5 10.2 8.5 13.8 12 14 C 15.5 14.2 18.5 10.5 22 10.8 L 22 19.5 Q 22 22 19.5 22 L 4.5 22 Q 2 22 2 19.5 Z" fill="#4285F4"></path></svg>';
              $objIds = [
                ['Apple Pass Object ID',  $pass['apple_obj'],  $appleIcon,  '',    'bg-sky-50/60',    'border-sky-200/70'],
                ['Google Pass Object ID', $pass['google_obj'], $googleIcon, 'text-violet-600', 'bg-violet-50/60', 'border-violet-200/70'],
              ];
              foreach ($objIds as $o): ?>
              <div class="flex items-center gap-3 border hover:border-primary/50  rounded-xl border <?= $o[5] ?> <?= $o[4] ?> px-3 py-2.5">
                <span class="flex h-6 w-6 items-center justify-center rounded-md bg-sky-500/15 shrink-0 <?= $o[3] ?>"><?= $o[2] ?></span>
                <div class="min-w-0 flex-1">
                  <p class="text-label-sm font-bold uppercase tracking-wider text-outline"><?= $o[0] ?></p>
                  <code class="block truncate text-label-md font-mono text-secondary"><?= htmlspecialchars($o[1]) ?></code>
                </div>
                <button type="button"
                  onclick="navigator.clipboard.writeText('<?= htmlspecialchars($o[1]) ?>');this.querySelector('span').textContent='check';setTimeout(()=>this.querySelector('span').textContent='content_copy',1200)"
                  class="shrink-0 w-8 h-8 rounded-lg flex items-center justify-center text-outline hover:bg-white hover:text-primary transition-colors" title="Copy">
                  <span class="material-symbols-outlined text-[16px]">content_copy</span>
                </button>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Pass Record Detail -->
        <div class="flex flex-col rounded-2xl border border-outline-variant bg-white shadow-sm transition-shadow">
          <!-- Header -->
          <div class="flex items-center justify-between gap-3 px-6 py-5">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-xl bg-tertiary-container/50 text-tertiary flex items-center justify-center">
                <span class="material-symbols-outlined text-[22px]">description</span>
              </div>
              <div>
                <h4 class="text-body-lg font-bold text-on-surface truncate">Pass Record Detail</h4>
                <p class="text-label-sm text-gray-400">Card content &amp; fields</p>
              </div>
            </div>
          </div>

          <!-- Header / Sub Header rows -->
          <dl class="px-6">
            <div class="flex items-baseline justify-between gap-6 py-3 border-t border-outline-variant/40">
              <dt class=" text-label-sm font-bold uppercase tracking-wider text-outline">Header</dt>
              <dd class="text-body-md font-semibold text-on-surface truncate"><?= val($pass['header']) ?></dd>
            </div>
            <div class="flex items-baseline justify-between gap-6 py-3 border-t border-outline-variant/40">
              <dt class=" text-label-sm font-bold uppercase tracking-wider text-outline">Sub Header</dt>
              <dd class="text-body-md font-semibold text-on-surface truncate"><?= val($pass['sub_header']) ?></dd>
            </div>
            <div class="flex items-baseline justify-between gap-6 py-3 border-t border-outline-variant/40">
              <dt class=" text-label-sm font-bold uppercase tracking-wider text-outline">Background</dt>
                <div class="flex items-center gap-2 px-2.5 py-1">
                  <span class="w-4 h-4 rounded-md border border-black/10 shadow-sm" style="background-color: <?= htmlspecialchars($pass['background']) ?>;"></span>
                  <span class="text-body-md font-mono font-semibold text-on-surface truncate"><?= htmlspecialchars($pass['background']) ?></span>
                </div>
            </div>
          </dl>

          <!-- Data table -->
          <div class=" px-6 pt-4 pb-6">
            <!-- <p class="text-label-sm font-bold uppercase tracking-wider text-outline mb-2">Card Data</p> -->
            <div class="overflow-hidden rounded-xl border border-outline-variant hover:border-primary/50 ">
              <table class="w-full text-left border-collapse">
                <tbody class="divide-y divide-outline-variant/40">
                  <?php foreach ($pass['data'] as $field => $value): ?>
                  <tr class="hover:bg-surface-container-low/40 transition-colors">
                    <td class="w-2/5 px-4 py-2.5 text-label-sm font-bold uppercase tracking-wider text-outline"><?= htmlspecialchars($field) ?></td>
                    <td class="text-body-md font-semibold text-on-surface truncate"><?= val($value) ?></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- Pass Install -->
      <div class="overflow-hidden rounded-2xl border border-outline-variant bg-white shadow-sm">
        <div class="flex items-center justify-between gap-3 border-b border-outline-variant/60 px-6 py-4">
          <div class="flex items-center gap-3">
            <div class="w-9 h-9 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center">
              <span class="material-symbols-outlined text-[20px]">install_mobile</span>
            </div>
            <h4 class="text-body-lg font-bold text-on-surface truncate">Pass Install</h4>
          </div>
          <span class="inline-flex items-center rounded-full bg-surface-container-low border border-outline-variant px-3 py-1 text-label-sm font-bold text-secondary">Install ID #<?= (int)$pass['install_id'] ?></span>
        </div>

        <!-- Totals: install / uninstall -->
        <div class="grid grid-cols-2 divide-x divide-outline-variant/60 border-b border-outline-variant/60">
          <div class="flex items-center gap-3 px-6 py-5">
            <div class="w-10 h-10 shrink-0 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center">
              <span class="material-symbols-outlined text-[22px]">download_done</span>
            </div>
            <div class="min-w-0">
              <p class="text-label-sm font-bold uppercase tracking-wider text-emerald-700">Total Installs</p>
              <p class="text-headline-md font-bold text-on-surface"><?= number_format((int)$pass['total_installs']) ?></p>
            </div>
          </div>
          <div class="flex items-center gap-3 px-6 py-5">
            <div class="w-10 h-10 shrink-0 rounded-xl bg-error-container/40 text-error flex items-center justify-center">
              <span class="material-symbols-outlined text-[22px]">delete_sweep</span>
            </div>
            <div class="min-w-0">
              <p class="text-label-sm font-bold uppercase tracking-wider text-error">Total Uninstalls</p>
              <p class="text-headline-md font-bold text-on-surface"><?= number_format((int)$pass['total_uninstalls']) ?></p>
            </div>
          </div>
        </div>

        <!-- Platform breakdown -->
        <div class="p-6">
          <p class="text-label-sm font-bold uppercase tracking-wider text-outline mb-3">Platform Breakdown</p>
          <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <!-- Apple Wallet -->
            <div class="relative overflow-hidden hover:border-primary/40  rounded-xl border border-sky-200/70 bg-gradient-to-br from-sky-50 to-sky-100/40 p-4">
              <svg viewBox="0 0 24 24" class="pointer-events-none absolute -right-3 -top-3 w-[60px] h-[60px] text-sky-500/10" fill="currentColor" aria-hidden="true"><path d="M17.05 12.04c-.03-2.43 1.99-3.6 2.08-3.66-1.13-1.66-2.9-1.89-3.53-1.91-1.5-.15-2.93.88-3.69.88-.76 0-1.94-.86-3.19-.84-1.64.02-3.15.95-3.99 2.42-1.7 2.95-.43 7.32 1.22 9.71.81 1.17 1.77 2.48 3.03 2.43 1.22-.05 1.68-.79 3.15-.79 1.47 0 1.88.79 3.17.76 1.31-.02 2.14-1.19 2.94-2.37.93-1.36 1.31-2.68 1.33-2.75-.03-.01-2.55-.98-2.58-3.86zM14.6 4.86c.67-.81 1.12-1.94.99-3.06-.96.04-2.13.64-2.82 1.45-.62.72-1.16 1.87-1.02 2.97 1.07.08 2.17-.55 2.85-1.36z"></path></svg>
              <div class="relative flex items-center gap-2">
                <span class="flex h-6 w-6 items-center justify-center rounded-md bg-sky-500/15 text-sky-600">
                  <svg viewBox="0 0 24 24" class="w-4 h-4" fill="currentColor" aria-hidden="true"><path d="M17.05 12.04c-.03-2.43 1.99-3.6 2.08-3.66-1.13-1.66-2.9-1.89-3.53-1.91-1.5-.15-2.93.88-3.69.88-.76 0-1.94-.86-3.19-.84-1.64.02-3.15.95-3.99 2.42-1.7 2.95-.43 7.32 1.22 9.71.81 1.17 1.77 2.48 3.03 2.43 1.22-.05 1.68-.79 3.15-.79 1.47 0 1.88.79 3.17.76 1.31-.02 2.14-1.19 2.94-2.37.93-1.36 1.31-2.68 1.33-2.75-.03-.01-2.55-.98-2.58-3.86zM14.6 4.86c.67-.81 1.12-1.94.99-3.06-.96.04-2.13.64-2.82 1.45-.62.72-1.16 1.87-1.02 2.97 1.07.08 2.17-.55 2.85-1.36z"></path></svg>
                </span>
                <span class="text-label-sm font-bold uppercase tracking-wider text-sky-700">Apple Wallet</span>
                <span class="ml-auto rounded-full bg-white/70 px-2 py-0.5 text-label-sm font-bold text-sky-700">Active <?= number_format((int)$pass['apple_total']) ?></span>
              </div>
              <div class="relative mt-3 grid grid-cols-2 gap-3">
                <div class="rounded-lg bg-white/70 px-3 py-2">
                  <p class="text-label-sm font-bold uppercase tracking-wider text-sky-700/70">Installs</p>
                  <p class="mt-0.5 text-title-lg font-bold text-on-surface"><?= number_format((int)$pass['apple_installs']) ?></p>
                </div>
                <div class="rounded-lg bg-white/70 px-3 py-2">
                  <p class="text-label-sm font-bold uppercase tracking-wider text-sky-700/70">Uninstalls</p>
                  <p class="mt-0.5 text-title-lg font-bold text-on-surface"><?= number_format((int)$pass['apple_removed']) ?></p>
                </div>
              </div>
            </div>
            <!-- Google Wallet -->
            <div class="relative overflow-hidden rounded-xl border hover:border-primary/40  border-violet-200/70 bg-gradient-to-br from-violet-50 to-violet-100/40 p-4">
              <svg viewBox="0 0 24 24" class="pointer-events-none absolute -right-3 -top-3 w-[60px] h-[60px] opacity-10" aria-hidden="true"><rect x="2.5" y="2" width="19" height="20" rx="2.5" fill="#34A853"></rect><rect x="2.5" y="4" width="19" height="18" rx="2.5" fill="#FBBC05"></rect><rect x="2.5" y="6.5" width="19" height="15.5" rx="2.5" fill="#EA4335"></rect><path d="M2 12.2 C 5.5 10.2 8.5 13.8 12 14 C 15.5 14.2 18.5 10.5 22 10.8 L 22 19.5 Q 22 22 19.5 22 L 4.5 22 Q 2 22 2 19.5 Z" fill="#4285F4"></path></svg>
              <div class="relative flex items-center gap-2">
                <span class="flex h-6 w-6 items-center justify-center rounded-md bg-violet-500/15">
                  <svg viewBox="0 0 24 24" class="w-4 h-4" aria-hidden="true"><rect x="2.5" y="2" width="19" height="20" rx="2.5" fill="#34A853"></rect><rect x="2.5" y="4" width="19" height="18" rx="2.5" fill="#FBBC05"></rect><rect x="2.5" y="6.5" width="19" height="15.5" rx="2.5" fill="#EA4335"></rect><path d="M2 12.2 C 5.5 10.2 8.5 13.8 12 14 C 15.5 14.2 18.5 10.5 22 10.8 L 22 19.5 Q 22 22 19.5 22 L 4.5 22 Q 2 22 2 19.5 Z" fill="#4285F4"></path></svg>
                </span>
                <span class="text-label-sm font-bold uppercase tracking-wider text-violet-700">Google Wallet</span>
                <span class="ml-auto rounded-full bg-white/70 px-2 py-0.5 text-label-sm font-bold text-violet-700">Active <?= number_format((int)$pass['google_total']) ?></span>
              </div>
              <div class="relative mt-3 grid grid-cols-2 gap-3">
                <div class="rounded-lg bg-white/70 px-3 py-2">
                  <p class="text-label-sm font-bold uppercase tracking-wider text-violet-700/70">Installs</p>
                  <p class="mt-0.5 text-title-lg font-bold text-on-surface"><?= number_format((int)$pass['google_installs']) ?></p>
                </div>
                <div class="rounded-lg bg-white/70 px-3 py-2">
                  <p class="text-label-sm font-bold uppercase tracking-wider text-violet-700/70">Uninstalls</p>
                  <p class="mt-0.5 text-title-lg font-bold text-on-surface"><?= number_format((int)$pass['google_removed']) ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Pass Template -->
      <div class="relative overflow-hidden rounded-2xl border border-outline-variant bg-white shadow-sm">
        <!-- Header -->
        <div class="flex flex-wrap items-center justify-between gap-3 border-b border-outline-variant/60 px-6 py-5 pl-7">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
              <span class="material-symbols-outlined text-[22px]">layers</span>
            </div>
            <div>
              <h4 class="text-body-lg font-bold text-on-surface truncate">Pass Template</h4>
                <p class="text-label-sm text-gray-400"><?= val($pass['tpl_name']) ?>
                    <code class="text-label-sm font-mono text-gray-400 ms-2">#<?= htmlspecialchars($pass['tpl_id']) ?></code>
                </p>
            </div>
          </div>
          <span class="inline-flex items-center gap-1.5 rounded-full bg-tertiary-container/50 border border-tertiary/20 px-3 py-1 text-label-md font-bold text-tertiary">
            <span class="material-symbols-outlined text-[16px]">card_giftcard</span><?= htmlspecialchars($pass['tpl_type']) ?>
          </span>
        </div>

        <!-- Detail rows (two clean columns) -->
        <div class="grid grid-cols-1 gap-x-10 px-6 py-2 pl-7 md:grid-cols-2">
          <?php
            $tplRows = [
              ['Template Name', val($pass['tpl_name'])],
              ['Card Title',    val($pass['tpl_title'])],
              ['Header',        val($pass['header'])],
              ['Sub Header',    val($pass['sub_header'])],
              ['Created By',    htmlspecialchars($pass['tpl_by']) . ' &middot; <span class="text-gray-400 font-normal">' . htmlspecialchars($pass['tpl_by_email']) . '</span>'],
              ['Created At',    val($pass['tpl_created'])],
              ['Updated At',    val($pass['tpl_updated'])],
            ];
            foreach ($tplRows as $r): ?>
            <div class="flex items-baseline justify-between gap-6 border-b border-outline-variant/40 py-3.5">
              <dt class="text-label-sm font-bold uppercase tracking-wider text-outline"><?= $r[0] ?></dt>
              <dd class="text-body-md font-semibold text-on-surface truncate"><?= $r[1] ?></dd>
            </div>
          <?php endforeach; ?>
          <!-- Background row with swatch -->
          <div class="flex items-center justify-between gap-6 border-b border-outline-variant/40 py-3.5">
            <dt class="text-label-sm font-bold uppercase tracking-wider text-outline">Background</dt>
            <dd class="flex items-center gap-2">
              <span class="w-4 h-4 rounded-md border border-black/10 shadow-sm" style="background-color: <?= htmlspecialchars($pass['background']) ?>;"></span>
              <span class="text-body-md font-semibold text-on-surface truncate"><?= htmlspecialchars($pass['background']) ?></span>
            </dd>
          </div>
        </div>
      </div>

    </section>
    <?php include('footer.php'); ?>
  </main>
  <!-- Micro-interaction Scripts -->
   <?php include('script.php'); ?>
</body>

</html>
