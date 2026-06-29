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
      <!-- Breadcrumbs and Header -->
      <div class="flex items-end justify-between">
        <div class="space-y-1">
          <nav class="flex items-center gap-2 text-label-sm text-outline mb-1">
            <span class="material-symbols-outlined text-[14px] text-blue-600">home</span> <span class="text-blue-600 font-semibold">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-on-surface font-semibold">Components</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Components</h2>
        </div>
      </div>

      <!-- Theme Components Index -->
      <?php
        $components = [
          ['name' => 'Alerts',            'icon' => 'notifications_active', 'desc' => 'Contextual dismissible messages', 'href' => '#alerts'],
          ['name' => 'Badges & Pills',    'icon' => 'label',               'desc' => 'Status pills & tags',             'href' => '#badges'],
          ['name' => 'Buttons',           'icon' => 'smart_button',        'desc' => 'Primary, success, outline, icon', 'href' => '#buttons'],
          ['name' => 'Cards',             'icon' => 'dashboard',           'desc' => 'Surfaces & containers',           'href' => 'billing.php'],
          ['name' => 'Tables',            'icon' => 'table_rows',          'desc' => 'Responsive data tables',          'href' => 'PassTemplates.php'],
          ['name' => 'Forms & Inputs',    'icon' => 'edit_note',           'desc' => 'Text, textarea, password',        'href' => '#forms'],
          ['name' => 'Select (Select2)',  'icon' => 'arrow_drop_down_circle','desc' => 'Searchable dropdowns',          'href' => '#select'],
          ['name' => 'Date Picker',       'icon' => 'calendar_month',      'desc' => 'Flatpickr date / range',          'href' => '#datepicker'],
          ['name' => 'Stepper / Wizard',  'icon' => 'linear_scale',        'desc' => 'Multi-step flows',                'href' => 'importDistribution.php'],
          ['name' => 'Dropdown Menu',     'icon' => 'more_vert',           'desc' => 'Row & action menus',              'href' => '#dropdown'],
          ['name' => 'Pagination',        'icon' => 'last_page',           'desc' => 'Paged navigation',                'href' => '#pagination'],
          ['name' => 'Breadcrumbs',       'icon' => 'chevron_right',       'desc' => 'Page hierarchy',                  'href' => '#breadcrumbs'],
          ['name' => 'Info Banner',       'icon' => 'info',                'desc' => 'Explanatory headers',             'href' => '#info-banner'],
          ['name' => 'Stat Tiles',        'icon' => 'leaderboard',         'desc' => 'KPI summary cards',               'href' => '#stats'],
          ['name' => 'Progress Bars',     'icon' => 'percent',             'desc' => 'Usage meters',                    'href' => '#progress'],
          ['name' => 'File Upload',       'icon' => 'cloud_upload',        'desc' => 'Drag & drop dropzone',            'href' => 'importDistribution.php'],
          ['name' => 'QR Cards',          'icon' => 'qr_code_2',           'desc' => 'Shareable pass QR codes',         'href' => 'qrcodeShare.php'],
          ['name' => 'Avatar',            'icon' => 'account_circle',      'desc' => 'User initials & profile',         'href' => '#avatar'],
          ['name' => 'Tooltips',          'icon' => 'help',                'desc' => 'Hover hints',                     'href' => '#tooltips'],
          ['name' => 'Sidebar Nav',       'icon' => 'menu_open',           'desc' => 'Collapsible navigation',          'href' => '#'],
        ];
      ?>
      <div class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
        <!-- Card header -->
        <div class="flex items-center justify-between gap-3 px-6 py-5 border-b border-outline-variant/60">
          <div class="flex items-center gap-3">
            <div class="w-9 h-9 bg-blue-50 text-primary rounded-lg flex items-center justify-center">
              <span class="material-symbols-outlined text-[20px]">widgets</span>
            </div>
            <div>
              <h3 class="text-headline-md font-bold text-on-surface">Theme Components</h3>
              <p class="text-label-md text-secondary">All UI components used across the project</p>
            </div>
          </div>
          <span class="bg-primary/10 text-primary text-label-sm font-bold px-3 py-1 rounded-full"><?= count($components) ?> Components</span>
        </div>
        <div class="p-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
          <?php foreach ($components as $c): ?>
          <a href="<?= htmlspecialchars($c['href']) ?>"
            class="group flex items-center gap-3 rounded-xl border border-outline-variant p-4 hover:border-primary/50 hover:bg-primary/5 transition-all">
            <span class="w-10 h-10 rounded-xl bg-blue-50 text-primary flex items-center justify-center shrink-0 group-hover:bg-primary group-hover:text-white transition-colors">
              <span class="material-symbols-outlined text-[20px]"><?= $c['icon'] ?></span>
            </span>
            <div class="min-w-0">
              <p class="text-body-md font-bold text-on-surface truncate"><?= htmlspecialchars($c['name']) ?></p>
              <p class="text-label-sm text-outline truncate"><?= htmlspecialchars($c['desc']) ?></p>
            </div>
          </a>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Alerts -->
      <?php
        $alertTypes = [
          ['title' => 'Success Alert', 'label' => 'Success Message', 'icon' => 'check_circle', 'border' => 'border-emerald-400', 'bg' => 'bg-emerald-50',  'ic' => 'text-emerald-600', 'tx' => 'text-emerald-700'],
          ['title' => 'Warning Alert', 'label' => 'Warning Message', 'icon' => 'info',         'border' => 'border-amber-400',   'bg' => 'bg-amber-50/70', 'ic' => 'text-amber-500',   'tx' => 'text-amber-700'],
          ['title' => 'Error Alert',   'label' => 'Error Message',   'icon' => 'error',        'border' => 'border-red-400',     'bg' => 'bg-red-50/70',   'ic' => 'text-red-500',     'tx' => 'text-red-700'],
          ['title' => 'Info Alert',    'label' => 'Info Message',    'icon' => 'info',         'border' => 'border-sky-400',     'bg' => 'bg-sky-50/70',   'ic' => 'text-sky-500',     'tx' => 'text-sky-700'],
        ];
        $alertDesc = 'You can insert a description for the message here. The text relates to the action that has been performed.';
      ?>
      <div id="alerts" class="scroll-mt-24 bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
        <!-- Card header -->
        <div class="flex items-center gap-3 px-6 py-5 border-b border-outline-variant/60">
          <div class="w-9 h-9 bg-blue-50 text-primary rounded-lg flex items-center justify-center">
            <span class="material-symbols-outlined text-[20px]">notifications_active</span>
          </div>
          <div>
            <h3 class="text-headline-md font-bold text-on-surface">Alerts</h3>
            <p class="text-label-md text-secondary">Contextual feedback messages in theme colors</p>
          </div>
        </div>
        <div class="p-6 space-y-4">
          <?php foreach ($alertTypes as $a): ?>
          <div class="js-alert flex items-center gap-3 rounded-xl border <?= $a['border'] ?> <?= $a['bg'] ?> px-4 py-3.5 transition-all duration-300">
            <span class="material-symbols-outlined text-[22px] <?= $a['ic'] ?> shrink-0"><?= $a['icon'] ?></span>
            <div class="min-w-0 flex-1">
              <p class="text-body-md font-semibold <?= $a['tx'] ?> truncate"><?= htmlspecialchars($alertDesc) ?></p>
            </div>
            <button type="button" data-dismiss-alert class="w-8 h-8 rounded-lg <?= $a['ic'] ?> hover:bg-black/5 flex items-center justify-center transition-colors shrink-0">
              <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Pill Bordered Badges -->
      <div id="badges" class="scroll-mt-24 bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
        <!-- Card header -->
        <div class="flex items-center gap-3 px-6 py-5 border-b border-outline-variant/60">
          <div class="w-9 h-9 bg-blue-50 text-primary rounded-lg flex items-center justify-center">
            <span class="material-symbols-outlined text-[20px]">label</span>
          </div>
          <div>
            <h3 class="text-headline-md font-bold text-on-surface">Pill Bordered Badges</h3>
            <p class="text-label-md text-secondary">Outlined status pills in theme colors</p>
          </div>
        </div>

        <div class="p-6 space-y-6">
          <!-- Plain bordered pills -->
          <div>
            <p class="text-label-sm font-bold uppercase tracking-wider text-outline mb-3">Default</p>
            <div class="flex flex-wrap gap-2.5">
              <span class="inline-flex items-center rounded-full border border-primary/30 bg-primary/5 text-primary text-label-md font-bold px-3.5 py-1">Primary</span>
              <span class="inline-flex items-center rounded-full border border-emerald-300 bg-emerald-50 text-emerald-700 text-label-md font-bold px-3.5 py-1">Success</span>
              <span class="inline-flex items-center rounded-full border border-amber-300 bg-amber-50 text-amber-700 text-label-md font-bold px-3.5 py-1">Warning</span>
              <span class="inline-flex items-center rounded-full border border-red-300 bg-red-50 text-red-700 text-label-md font-bold px-3.5 py-1">Error</span>
              <span class="inline-flex items-center rounded-full border border-teal-300 bg-teal-50 text-teal-700 text-label-md font-bold px-3.5 py-1">Teal</span>
              <span class="inline-flex items-center rounded-full border border-outline-variant bg-surface-container-low text-secondary text-label-md font-bold px-3.5 py-1">Neutral</span>
            </div>
          </div>

          <!-- With leading dot -->
          <div>
            <p class="text-label-sm font-bold uppercase tracking-wider text-outline mb-3">With status dot</p>
            <div class="flex flex-wrap gap-2.5">
              <span class="inline-flex items-center gap-1.5 rounded-full border border-primary/30 bg-primary/5 text-primary text-label-md font-bold px-3.5 py-1"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Active</span>
              <span class="inline-flex items-center gap-1.5 rounded-full border border-emerald-300 bg-emerald-50 text-emerald-700 text-label-md font-bold px-3.5 py-1"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Completed</span>
              <span class="inline-flex items-center gap-1.5 rounded-full border border-amber-300 bg-amber-50 text-amber-700 text-label-md font-bold px-3.5 py-1"><span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span> Pending</span>
              <span class="inline-flex items-center gap-1.5 rounded-full border border-red-300 bg-red-50 text-red-700 text-label-md font-bold px-3.5 py-1"><span class="w-1.5 h-1.5 rounded-full bg-red-500"></span> Failed</span>
              <span class="inline-flex items-center gap-1.5 rounded-full border border-outline-variant bg-surface-container-low text-secondary text-label-md font-bold px-3.5 py-1"><span class="w-1.5 h-1.5 rounded-full bg-outline"></span> Draft</span>
            </div>
          </div>

          <!-- With icon -->
          <div>
            <p class="text-label-sm font-bold uppercase tracking-wider text-outline mb-3">With icon</p>
            <div class="flex flex-wrap gap-2.5">
              <span class="inline-flex items-center gap-1 rounded-full border border-emerald-300 bg-emerald-50 text-emerald-700 text-label-md font-bold px-3 py-1"><span class="material-symbols-outlined text-[16px]">check_circle</span> Verified</span>
              <span class="inline-flex items-center gap-1 rounded-full border border-primary/30 bg-primary/5 text-primary text-label-md font-bold px-3 py-1"><span class="material-symbols-outlined text-[16px]">star</span> Featured</span>
              <span class="inline-flex items-center gap-1 rounded-full border border-amber-300 bg-amber-50 text-amber-700 text-label-md font-bold px-3 py-1"><span class="material-symbols-outlined text-[16px]">schedule</span> Scheduled</span>
              <span class="inline-flex items-center gap-1 rounded-full border border-red-300 bg-red-50 text-red-700 text-label-md font-bold px-3 py-1"><span class="material-symbols-outlined text-[16px]">block</span> Blocked</span>
            </div>
          </div>

          <!-- Outline only (transparent) -->
          <div>
            <p class="text-label-sm font-bold uppercase tracking-wider text-outline mb-3">Outline only</p>
            <div class="flex flex-wrap gap-2.5">
              <span class="inline-flex items-center rounded-full border border-primary text-primary text-label-md font-bold px-3.5 py-1">Primary</span>
              <span class="inline-flex items-center rounded-full border border-emerald-500 text-emerald-600 text-label-md font-bold px-3.5 py-1">Success</span>
              <span class="inline-flex items-center rounded-full border border-amber-500 text-amber-600 text-label-md font-bold px-3.5 py-1">Warning</span>
              <span class="inline-flex items-center rounded-full border border-red-500 text-red-600 text-label-md font-bold px-3.5 py-1">Error</span>
              <span class="inline-flex items-center rounded-full border border-outline text-secondary text-label-md font-bold px-3.5 py-1">Neutral</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Buttons -->
      <div id="buttons" class="scroll-mt-24 bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
        <div class="flex items-center gap-3 px-6 py-5 border-b border-outline-variant/60">
          <div class="w-9 h-9 bg-blue-50 text-primary rounded-lg flex items-center justify-center"><span class="material-symbols-outlined text-[20px]">smart_button</span></div>
          <div>
            <h3 class="text-headline-md font-bold text-on-surface">Buttons</h3>
            <p class="text-label-md text-secondary">Primary, success, outline, danger & icon</p>
          </div>
        </div>
        <div class="p-6 flex flex-wrap items-center gap-3">
          <button class="inline-flex items-center gap-2 bg-brand-gradient text-on-primary px-5 py-2.5 rounded-lg text-[14px] shadow-lg shadow-primary/20 hover:opacity-90 active:scale-[0.98] transition-all font-bold"><span class="material-symbols-outlined text-[18px]">add</span> Primary</button>
          <button class="inline-flex items-center gap-2 bg-[#198754] text-white px-5 py-2.5 rounded-lg text-[14px] shadow-lg shadow-[#198754]/20 hover:opacity-95 active:scale-[0.98] transition-all font-bold"><span class="material-symbols-outlined text-[18px]">save</span> Success</button>
          <button class="inline-flex items-center gap-2 bg-white border border-outline-variant text-on-surface px-5 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold shadow-sm"><span class="material-symbols-outlined text-[18px]">filter_alt</span> Outline</button>
          <button class="inline-flex items-center gap-2 bg-red-500 text-white px-5 py-2.5 rounded-lg text-[14px] shadow-lg shadow-red-500/20 hover:opacity-95 active:scale-[0.98] transition-all font-bold"><span class="material-symbols-outlined text-[18px]">delete</span> Danger</button>
          <button class="w-10 h-10 bg-primary text-white rounded-lg flex items-center justify-center hover:opacity-90 transition-all shadow-md shadow-primary/20"><span class="material-symbols-outlined">add</span></button>
          <button disabled class="inline-flex items-center gap-2 bg-surface-container-high text-outline px-5 py-2.5 rounded-lg text-[14px] font-bold opacity-60 cursor-not-allowed">Disabled</button>
        </div>
      </div>

      <!-- Info Banner -->
      <div id="info-banner" class="scroll-mt-24 bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
        <div class="flex items-center gap-3 px-6 py-5 border-b border-outline-variant/60">
          <div class="w-9 h-9 bg-blue-50 text-primary rounded-lg flex items-center justify-center"><span class="material-symbols-outlined text-[20px]">info</span></div>
          <div>
            <h3 class="text-headline-md font-bold text-on-surface">Info Banner</h3>
            <p class="text-label-md text-secondary">Explanatory section header</p>
          </div>
        </div>
        <div class="p-6 space-y-5">
          <!-- Variant 1: banner with steps chips -->
          <div class="bg-white border border-outline-variant/50 rounded-2xl p-6 shadow-sm flex flex-col gap-4">
            <div class="flex gap-6 items-start">
              <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center text-primary shrink-0">
                <span class="material-symbols-outlined text-[28px]">qr_code_2</span>
              </div>
              <div class="flex-1">
                <h3 class="text-headline-md font-bold text-on-surface tracking-tight">QR Code &amp; Link Share</h3>
                <p class="text-body-md text-secondary mt-2 leading-relaxed">Distribute your Generic Advertising Pass
                  effortlessly. Each pass template has a unique QR code and shareable link.</p>
              </div>
            </div>
            <div class="bg-primary/5 rounded-2xl p-3 flex flex-wrap items-center gap-3">
              <?php foreach (['Scan QR Code', 'Share Link', 'Add to Wallet'] as $step): ?>
              <div class="flex items-center gap-2.5 bg-white rounded-full pl-2.5 pr-5 py-2 shadow-sm border border-outline-variant/40">
                <span class="material-symbols-outlined text-emerald-500 text-[22px]" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                <span class="text-body-md font-bold text-on-surface"><?= $step ?></span>
              </div>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- Variant 2: header banner with gradient icon tile -->
          <div class="bg-white border border-outline-variant/50 rounded-2xl p-6 shadow-sm flex items-center gap-4">
            <div class="w-12 h-12 rounded-2xl bg-brand-gradient text-white flex items-center justify-center shrink-0 shadow-md shadow-primary/20">
              <span class="material-symbols-outlined text-[26px]">credit_card</span>
            </div>
            <div>
              <h3 class="text-headline-md font-bold text-on-surface tracking-tight">Billing Overview</h3>
              <p class="text-body-md text-secondary">Manage your plan details and track resource usage</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Breadcrumbs -->
      <div id="breadcrumbs" class="scroll-mt-24 bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
        <div class="flex items-center gap-3 px-6 py-5 border-b border-outline-variant/60">
          <div class="w-9 h-9 bg-blue-50 text-primary rounded-lg flex items-center justify-center"><span class="material-symbols-outlined text-[20px]">chevron_right</span></div>
          <div>
            <h3 class="text-headline-md font-bold text-on-surface">Breadcrumbs</h3>
            <p class="text-label-md text-secondary">Page hierarchy navigation</p>
          </div>
        </div>
        <div class="p-6">
          <nav class="flex items-center gap-2 text-label-sm text-outline">
            <span class="material-symbols-outlined text-[14px] text-blue-600">home</span> <span class="text-blue-600 font-semibold">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-blue-600 font-semibold">Section</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-on-surface font-semibold">Current Page</span>
          </nav>
        </div>
      </div>

      <!-- Forms & Inputs -->
      <div id="forms" class="scroll-mt-24 bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
        <div class="flex items-center gap-3 px-6 py-5 border-b border-outline-variant/60">
          <div class="w-9 h-9 bg-blue-50 text-primary rounded-lg flex items-center justify-center"><span class="material-symbols-outlined text-[20px]">edit_note</span></div>
          <div>
            <h3 class="text-headline-md font-bold text-on-surface">Forms &amp; Inputs</h3>
            <p class="text-label-md text-secondary">Text, textarea, select, date &amp; password</p>
          </div>
        </div>
        <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-5">
          <div class="space-y-2">
            <label class="text-on-surface font-bold text-label-md">Text Input</label>
            <input type="text" placeholder="Enter value" class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
          </div>
          <div class="space-y-2">
            <label class="text-on-surface font-bold text-label-md">Select (Select2)</label>
            <select id="select" class="w-full js-select2 scroll-mt-24" data-placeholder="-- Choose --">
              <option></option>
              <option>Option One</option>
              <option>Option Two</option>
              <option>Option Three</option>
            </select>
          </div>
          <div class="space-y-2">
            <label class="text-on-surface font-bold text-label-md">Date Picker</label>
            <div id="datepicker" class="relative scroll-mt-24">
              <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-primary text-[20px]">calendar_month</span>
              <input class="js-datetime w-full bg-surface-container-low border-outline-variant rounded-lg pl-10 pr-4 py-3 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all" placeholder="Select date" readonly type="text">
            </div>
          </div>
          <div class="space-y-2">
            <label class="text-on-surface font-bold text-label-md">Password</label>
            <div class="relative">
              <input type="password" id="demo-pw" placeholder="Enter password" class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 pl-4 pr-12 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
              <button type="button" data-toggle-pw="demo-pw" class="absolute right-3 top-1/2 -translate-y-1/2 text-outline hover:text-on-surface transition-colors"><span class="material-symbols-outlined text-[20px]">visibility</span></button>
            </div>
          </div>
          <div class="space-y-2 md:col-span-2">
            <label class="text-on-surface font-bold text-label-md">Textarea</label>
            <textarea rows="3" placeholder="Enter a longer message" class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all resize-y"></textarea>
          </div>
          <!-- Tooltip -->
          <div id="tooltips" class="space-y-2 scroll-mt-24">
            <label class="flex items-center gap-1.5 text-on-surface font-bold text-label-md">
              With Tooltip
              <span class="group relative inline-flex">
                <span class="material-symbols-outlined text-[15px] text-outline">help</span>
                <span class="pointer-events-none absolute bottom-full left-1/2 mb-2 -translate-x-1/2 w-max max-w-[220px] text-center leading-snug rounded-lg border border-outline-variant/70 bg-surface-container-high px-3 py-1.5 text-body-sm text-on-surface shadow-sm opacity-0 transition-opacity duration-150 group-hover:opacity-100 z-20">Hover hint text shown on the help icon.</span>
              </span>
            </label>
            <input type="text" placeholder="Hover the help icon" class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
          </div>
        </div>
      </div>

      <!-- Stat Tiles & Progress -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div id="stats" class="scroll-mt-24 bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
          <div class="flex items-center gap-3 px-6 py-5 border-b border-outline-variant/60">
            <div class="w-9 h-9 bg-blue-50 text-primary rounded-lg flex items-center justify-center"><span class="material-symbols-outlined text-[20px]">leaderboard</span></div>
            <h3 class="text-headline-md font-bold text-on-surface">Stat Tiles</h3>
          </div>
          <div class="p-6 grid grid-cols-2 gap-4">
            <div class="border border-outline-variant rounded-2xl p-4 flex items-center gap-3">
              <span class="w-10 h-10 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center shrink-0"><span class="material-symbols-outlined text-[20px]">database</span></span>
              <div><p class="text-headline-md font-bold text-on-surface leading-none">64</p><p class="text-label-md text-secondary font-semibold mt-1">Records</p></div>
            </div>
            <div class="border border-outline-variant rounded-2xl p-4 flex items-center gap-3">
              <span class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center shrink-0"><span class="material-symbols-outlined text-[20px]">install_mobile</span></span>
              <div><p class="text-headline-md font-bold text-on-surface leading-none">113</p><p class="text-label-md text-secondary font-semibold mt-1">Installs</p></div>
            </div>
          </div>
        </div>
        <div id="progress" class="scroll-mt-24 bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
          <div class="flex items-center gap-3 px-6 py-5 border-b border-outline-variant/60">
            <div class="w-9 h-9 bg-blue-50 text-primary rounded-lg flex items-center justify-center"><span class="material-symbols-outlined text-[20px]">percent</span></div>
            <h3 class="text-headline-md font-bold text-on-surface">Progress Bars</h3>
          </div>
          <div class="p-6 space-y-4">
            <div>
              <div class="flex justify-between text-label-md mb-1.5"><span class="font-semibold text-on-surface">Templates</span><span class="text-outline">21%</span></div>
              <div class="h-2 rounded-full bg-surface-container-high overflow-hidden"><div class="h-full rounded-full bg-blue-500" style="width:21%"></div></div>
            </div>
            <div>
              <div class="flex justify-between text-label-md mb-1.5"><span class="font-semibold text-on-surface">Passes</span><span class="text-outline">38%</span></div>
              <div class="h-2 rounded-full bg-surface-container-high overflow-hidden"><div class="h-full rounded-full bg-emerald-500" style="width:38%"></div></div>
            </div>
            <div>
              <div class="flex justify-between text-label-md mb-1.5"><span class="font-semibold text-on-surface">Notifications</span><span class="text-outline">73%</span></div>
              <div class="h-2 rounded-full bg-surface-container-high overflow-hidden"><div class="h-full rounded-full bg-amber-500" style="width:73%"></div></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Avatar & Dropdown -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div id="avatar" class="scroll-mt-24 bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
          <div class="flex items-center gap-3 px-6 py-5 border-b border-outline-variant/60">
            <div class="w-9 h-9 bg-blue-50 text-primary rounded-lg flex items-center justify-center"><span class="material-symbols-outlined text-[20px]">account_circle</span></div>
            <h3 class="text-headline-md font-bold text-on-surface">Avatar</h3>
          </div>
          <div class="p-6 flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-brand-gradient text-white flex items-center justify-center font-bold shadow-sm">HS</div>
            <div class="w-12 h-12 rounded-full bg-amber-400 text-white flex items-center justify-center font-bold shadow-sm">W</div>
            <img class="w-12 h-12 rounded-full object-cover ring-2 ring-white shadow-sm" alt="avatar" src="https://i.pravatar.cc/96?img=12">
            <span class="relative inline-block">
              <div class="w-12 h-12 rounded-full bg-emerald-500 text-white flex items-center justify-center font-bold shadow-sm">JD</div>
              <span class="absolute bottom-0 right-0 w-3.5 h-3.5 rounded-full bg-emerald-500 border-2 border-white"></span>
            </span>
          </div>
        </div>
        <div id="dropdown" class="scroll-mt-24 bg-white rounded-2xl border border-outline-variant shadow-sm [&:has(.js-menu-panel:not(.hidden))]:overflow-visible overflow-hidden">
          <div class="flex items-center gap-3 px-6 py-5 border-b border-outline-variant/60">
            <div class="w-9 h-9 bg-blue-50 text-primary rounded-lg flex items-center justify-center"><span class="material-symbols-outlined text-[20px]">more_vert</span></div>
            <h3 class="text-headline-md font-bold text-on-surface">Dropdown Menu</h3>
          </div>
          <div class="p-6">
            <div class="relative inline-block js-menu">
              <button type="button" class="js-menu-toggle inline-flex items-center gap-2 bg-white border border-outline-variant text-on-surface font-bold text-label-md px-4 py-2.5 rounded-lg shadow-sm hover:bg-surface-container-low transition-all">
                Actions <span class="material-symbols-outlined text-[18px]">expand_more</span>
              </button>
              <div class="js-menu-panel hidden absolute left-0 mt-1 w-48 bg-white border border-outline-variant rounded-xl shadow-lg py-1.5 z-20">
                <button class="w-full flex items-center gap-2.5 px-4 py-2 text-label-md text-on-surface hover:bg-surface-container-low transition-colors"><span class="material-symbols-outlined text-[18px] text-primary">visibility</span> View</button>
                <button class="w-full flex items-center gap-2.5 px-4 py-2 text-label-md text-on-surface hover:bg-surface-container-low transition-colors"><span class="material-symbols-outlined text-[18px] text-primary">edit</span> Edit</button>
                <div class="my-1 border-t border-outline-variant/50"></div>
                <button class="w-full flex items-center gap-2.5 px-4 py-2 text-label-md text-error hover:bg-error/5 transition-colors"><span class="material-symbols-outlined text-[18px]">delete</span> Delete</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Pagination -->
      <div id="pagination" class="scroll-mt-24 bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
        <div class="flex items-center gap-3 px-6 py-5 border-b border-outline-variant/60">
          <div class="w-9 h-9 bg-blue-50 text-primary rounded-lg flex items-center justify-center"><span class="material-symbols-outlined text-[20px]">last_page</span></div>
          <h3 class="text-headline-md font-bold text-on-surface">Pagination</h3>
        </div>
        <div class="p-6 flex flex-col sm:flex-row items-center justify-between gap-4">
          <p class="text-label-md text-secondary">Showing <span class="font-semibold text-on-surface">1</span> to <span class="font-semibold text-on-surface">10</span> of <span class="font-semibold text-on-surface">42</span> results</p>
          <nav class="flex items-center gap-1.5">
            <button class="w-9 h-9 rounded-lg border border-outline-variant text-outline flex items-center justify-center hover:bg-surface-container-low disabled:opacity-40 transition-all" disabled><span class="material-symbols-outlined text-[18px]">chevron_left</span></button>
            <button class="w-9 h-9 rounded-lg bg-primary text-white font-bold text-label-md flex items-center justify-center shadow-sm">1</button>
            <button class="w-9 h-9 rounded-lg border border-outline-variant text-on-surface font-semibold text-label-md flex items-center justify-center hover:bg-surface-container-low transition-all">2</button>
            <button class="w-9 h-9 rounded-lg border border-outline-variant text-on-surface font-semibold text-label-md flex items-center justify-center hover:bg-surface-container-low transition-all">3</button>
            <button class="w-9 h-9 rounded-lg border border-outline-variant text-outline flex items-center justify-center hover:bg-surface-container-low transition-all"><span class="material-symbols-outlined text-[18px]">chevron_right</span></button>
          </nav>
        </div>
      </div>
    </section>
    <?php include('footer.php'); ?>
  </main>
  <!-- Micro-interaction Scripts -->
   <?php include('script.php'); ?>
  <script>
    (function () {
      document.querySelectorAll('[data-dismiss-alert]').forEach(function (btn) {
        btn.addEventListener('click', function () {
          var alert = btn.closest('.js-alert');
          if (!alert) return;
          // Smooth collapse + fade out, then remove
          alert.style.maxHeight = alert.scrollHeight + 'px';
          requestAnimationFrame(function () {
            alert.style.maxHeight = '0px';
            alert.style.opacity = '0';
            alert.style.paddingTop = '0px';
            alert.style.paddingBottom = '0px';
            alert.style.marginTop = '0px';
            alert.style.overflow = 'hidden';
          });
          alert.addEventListener('transitionend', function () { alert.remove(); }, { once: true });
        });
      });
      // Password show/hide toggles
      document.querySelectorAll('[data-toggle-pw]').forEach(function (btn) {
        btn.addEventListener('click', function () {
          var input = document.getElementById(btn.getAttribute('data-toggle-pw'));
          if (!input) return;
          var icon = btn.querySelector('.material-symbols-outlined');
          if (input.type === 'password') { input.type = 'text'; if (icon) icon.textContent = 'visibility_off'; }
          else { input.type = 'password'; if (icon) icon.textContent = 'visibility'; }
        });
      });
    })();
  </script>
</body>

</html>