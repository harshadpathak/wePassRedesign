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
            <span class="material-symbols-outlined text-[14px] text-gray">home</span> 
            <span class="text-gray font-normal">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray-500 font-normal">Components</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Components</h2>
        </div>
      </div>

      <!-- Theme Components Index -->
      <?php
        $components = [
          ['name' => 'Alerts',            'icon' => 'notifications_active', 'desc' => 'Contextual dismissible messages', 'href' => '#alerts'],
          ['name' => 'Modals',            'icon' => 'web_asset',           'desc' => 'Confirm, info & form dialogs',     'href' => '#modals'],
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
          ['name' => 'File Upload',       'icon' => 'cloud_upload',        'desc' => 'Drag & drop dropzone',            'href' => 'importDistribution.php'],
          ['name' => 'QR Cards',          'icon' => 'qr_code_2',           'desc' => 'Shareable pass QR codes',         'href' => 'qrcodeShare.php'],
          ['name' => 'Tooltips',          'icon' => 'help',                'desc' => 'Hover hints',                     'href' => '#tooltips'],
          ['name' => 'Filter',            'icon' => 'filter_alt',          'desc' => 'Filters',                         'href' => '#filter'],
          ['name' => 'Wallet Icon',       'icon' => 'wallet',                'desc' => 'Wallet Icon',                     'href' => '#wallet_icon'],
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
              <p class="text-label-md text-gray-400">All UI components used across the project</p>
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
            <p class="text-label-md text-gray-400">Contextual feedback messages in theme colors</p>
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
            <p class="text-label-md text-gray-400">Outlined status pills in theme colors</p>
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
            <p class="text-label-md text-gray-400">Primary, success, outline, danger & icon</p>
          </div>
        </div>
        <div class="p-6 flex flex-wrap items-center gap-3">
          <button class="flex items-center gap-2 bg-brand-gradient text-on-primary px-4 py-2.5 rounded-lg text-[14px] shadow-lg shadow-primary/20 hover:shadow-xl hover:opacity-90 active:scale-[0.98] transition-all font-bold"><span class="material-symbols-outlined text-sm">add</span>Primary</button>
          <button type="submit" class="flex items-center gap-2 bg-[#198754] text-white px-7 py-2.5 rounded-lg text-[14px] font-bold shadow-lg shadow-[#198754]/20 hover:opacity-95 active:scale-[0.98] transition-all"><span class="material-symbols-outlined text-[19px]">save</span>Success</button>
          <button class="flex items-center gap-2 bg-white border border-outline-variant/50 text-on-surface px-6 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold shadow-sm"><span class="material-symbols-outlined text-[20px]">filter_alt</span><span class="">Outline</span></button>
          <button type="button" class="inline-flex items-center gap-2 bg-red-500 text-white px-5 py-2.5 rounded-lg text-[14px] shadow-lg shadow-red-500/20 hover:opacity-95 active:scale-[0.98] transition-all font-bold"><span class="material-symbols-outlined text-[20px]">delete</span>Danger</button>
          <button type="button" id="add-recipient" class="w-10 h-10 bg-primary text-white rounded-lg flex items-center justify-center hover:opacity-90 transition-all shadow-md shadow-primary/20"><span class="material-symbols-outlined">add</span></button>
          <button disabled class="inline-flex items-center gap-2 bg-surface-container-high text-outline px-5 py-2.5 rounded-lg text-[14px] font-bold opacity-60 cursor-not-allowed">Disabled</button>
        </div>
      </div>

      <!-- Info Banner -->
      <div id="info-banner" class="scroll-mt-24 bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
        <div class="flex items-center gap-3 px-6 py-5 border-b border-outline-variant/60">
          <div class="w-9 h-9 bg-blue-50 text-primary rounded-lg flex items-center justify-center"><span class="material-symbols-outlined text-[20px]">info</span></div>
          <div>
            <h3 class="text-headline-md font-bold text-on-surface">Info Banner</h3>
            <p class="text-label-md text-gray-400">Explanatory section header</p>
          </div>
        </div>
        <div class="p-6 space-y-5">
          <!-- Variant 1: banner with steps chips -->
          <div class="bg-white border border-outline-variant rounded-2xl p-6 flex flex-col gap-4">
            <div class="flex gap-6 items-start">
                <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center text-primary shrink-0">
                    <span class="material-symbols-outlined text-[28px]">info</span>
                </div>
                <div class="flex-1">
                    <h3 class="text-headline-md font-bold text-on-surface tracking-tight">How Manual Distribution
                        Works</h3>
                    <p class="text-body-md text-gray-400 leading-relaxed">Create and distribute
                        digital wallet passes to your recipients instantly. Select a template, fill in the required
                        fields, and add recipient details. Each recipient will receive their personalized pass via
                        email.
                    </p>
                    <!-- Steps -->
                    <div class="bg-primary/5 rounded-2xl p-2 flex flex-wrap items-center gap-3  mt-4">
                        <!-- Step 1 -->
                        <div class="flex items-center gap-2.5 bg-white rounded-full pl-2.5 pr-5 py-2 shadow-sm border border-outline-variant/40">
                            <span class="material-symbols-outlined text-emerald-500 text-[22px]" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                            <span class="text-body-md font-bold text-gray-600">Select Template</span>
                        </div>
                        <!-- Step 2 -->
                        <div class="flex items-center gap-2.5 bg-white rounded-full pl-2.5 pr-5 py-2 shadow-sm border border-outline-variant/40">
                            <span class="material-symbols-outlined text-emerald-500 text-[22px]" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                            <span class="text-body-md font-bold text-gray-600">Fill Pass Details</span>
                        </div>
                        <!-- Step 3 -->
                        <div class="flex items-center gap-2.5 bg-white rounded-full pl-2.5 pr-5 py-2 shadow-sm border border-outline-variant/40">
                            <span class="material-symbols-outlined text-emerald-500 text-[22px]" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                            <span class="text-body-md font-bold text-gray-600">Add Recipients</span>
                        </div>
                        <!-- Step 4 -->
                        <div class="flex items-center gap-2.5 bg-white rounded-full pl-2.5 pr-5 py-2 shadow-sm border border-outline-variant/40">
                            <span class="material-symbols-outlined text-emerald-500 text-[22px]" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                            <span class="text-body-md font-bold text-gray-600">Distribute</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

          <!-- Variant 2: header banner with gradient icon tile -->
          <div class="flex items-center gap-4 px-6 py-5 border-b border-outline-variant/60">
          <div class="w-12 h-12 rounded-2xl bg-brand-gradient text-white flex items-center justify-center shrink-0 shadow-md shadow-primary/20">
            <span class="material-symbols-outlined text-[26px]">credit_card</span>
          </div>
          <div>
            <h3 class="text-headline-md font-bold text-on-surface tracking-tight">Billing Overview</h3>
            <p class="text-body-md text-gray-400">Manage your plan details and track resource usage</p>
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
            <p class="text-label-md text-gray-400">Page hierarchy navigation</p>
          </div>
        </div>
        <div class="p-6">
          <nav class="flex items-center gap-2 text-label-sm text-outline mb-1">
            <span class="material-symbols-outlined text-[14px] text-gray">home</span> 
            <span class="text-gray font-normal">Dashboard</span>
            <span class="material-symbols-outlined text-[14px] text-gray">chevron_right</span>
            <span class="text-gray font-normal">Section</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray-500 font-normal">Current Page</span>
          </nav>
        </div>
      </div>

      <!-- Forms & Inputs -->
      <div id="forms" class="scroll-mt-24 bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
        <div class="flex items-center gap-3 px-6 py-5 border-b border-outline-variant/60">
          <div class="w-9 h-9 bg-blue-50 text-primary rounded-lg flex items-center justify-center"><span class="material-symbols-outlined text-[20px]">edit_note</span></div>
          <div>
            <h3 class="text-headline-md font-bold text-on-surface">Forms &amp; Inputs</h3>
            <p class="text-label-md text-gray-400">Text, textarea, select, date &amp; password</p>
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
              <!-- <div class="bg-surface-container-lowest p-4 rounded-xl border border-primary/40 shadow-sm flex items-center gap-4 cursor-pointer relative overflow-hidden group"> -->
                <div class="bg-brand-gradient text-on-primary p-2.5 rounded-lg shadow-sm flex items-center justify-center">
                  <span class="material-symbols-outlined" style="font-variation-settings: &quot;FILL&quot; 1;">apps</span>
                </div>
                <div class="relative z-10">
                  <p class="text-label-sm text-gray-400 font-medium">All Templates</p>
                  <p class="text-headline-md text-primary font-bold">793</p>
                </div>
            <!-- </div> -->
            </div>
            <div class="border border-outline-variant rounded-2xl p-4 flex items-center gap-3">
              <div class="bg-emerald-500 text-on-primary p-2.5 rounded-lg shadow-sm flex items-center justify-center">
                  <span class="material-symbols-outlined" style="font-variation-settings: &quot;FILL&quot; 1;">Install_mobile</span>
                </div>
                <div class="relative z-10">
                  <p class="text-label-sm text-gray-400 font-medium">Install</p>
                  <p class="text-headline-md font-bold">15</p>
                </div>
            </div>
          </div>
        </div>

      <!-- Avatar & Dropdown -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
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
              <div class="js-menu-panel absolute right-0 mt-2 w-48 border border-outline-variant/50 rounded-xl shadow-xl transition-all duration-200 z-50 overflow-hidden bg-white hidden">
                <div class="py-1.5">
                  <a class="flex items-center gap-3 px-4 py-2 text-body-md text-on-surface hover:bg-surface-container-low transition-colors" href="#"><span class="material-symbols-outlined text-secondary text-[20px]">visibility</span><span class="font-medium">View</span></a>
                  <a class="flex items-center gap-3 px-4 py-2 text-body-md text-on-surface hover:bg-surface-container-low transition-colors" href="#"><span class="material-symbols-outlined text-secondary text-[20px]">edit</span><span class="font-medium">Edit</span></a>
                  <div class="border-t border-outline-variant/30 my-1 mx-2"></div>
                  <a class="flex items-center gap-3 px-4 py-2 text-body-md text-error hover:bg-error-container/40 transition-colors" href="#"><span class="material-symbols-outlined text-[20px]">delete</span><span class="font-bold">Delete</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="wallet_icon" class="scroll-mt-24 bg-white rounded-2xl border border-outline-variant shadow-sm [&:has(.js-menu-panel:not(.hidden))]:overflow-visible overflow-hidden">
          <div class="flex items-center gap-3 px-6 py-5 border-b border-outline-variant/60">
            <div class="w-9 h-9 bg-blue-50 text-primary rounded-lg flex items-center justify-center">
              <span class="material-symbols-outlined text-[20px]">wallet</span></div>
            <h3 class="text-headline-md font-bold text-on-surface">Wallet icon</h3>
          </div>
          <div class="p-6">
            <div class="relative flex gap-3 js-menu">
              <div class="w-12 h-12 rounded-xl flex items-center justify-center shrink-0 bg-blue-50">
                <svg viewBox="0 0 24 24" class="w-6 h-6">
                    <rect x="2.5" y="2" width="19" height="20" rx="2.5" fill="#34A853"></rect>
                    <rect x="2.5" y="4" width="19" height="18" rx="2.5" fill="#FBBC05"></rect>
                    <rect x="2.5" y="6.5" width="19" height="15.5" rx="2.5" fill="#EA4335"></rect>
                    <path d="M2 12.2 C 5.5 10.2 8.5 13.8 12 14 C 15.5 14.2 18.5 10.5 22 10.8 L 22 19.5 Q 22 22 19.5 22 L 4.5 22 Q 2 22 2 19.5 Z" fill="#4285F4"></path>
                </svg>
            </div>
            <div class="w-12 h-12 rounded-xl flex items-center justify-center text-on-surface shrink-0 bg-surface-container-high">
              <svg viewBox="0 0 24 24" class="w-6 h-6" fill="currentColor" aria-hidden="true">
                <path d="M17.05 12.04c-.03-2.43 1.99-3.6 2.08-3.66-1.13-1.66-2.9-1.89-3.53-1.91-1.5-.15-2.93.88-3.69.88-.76 0-1.94-.86-3.19-.84-1.64.02-3.15.95-3.99 2.42-1.7 2.95-.43 7.32 1.22 9.71.81 1.17 1.77 2.48 3.03 2.43 1.22-.05 1.68-.79 3.15-.79 1.47 0 1.88.79 3.17.76 1.31-.02 2.14-1.19 2.94-2.37.93-1.36 1.31-2.68 1.33-2.75-.03-.01-2.55-.98-2.58-3.86zM14.6 4.86c.67-.81 1.12-1.94.99-3.06-.96.04-2.13.64-2.82 1.45-.62.72-1.16 1.87-1.02 2.97 1.07.08 2.17-.55 2.85-1.36z"></path>
              </svg>
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
          <p class="text-label-md text-secondary">Showing <span class="font-semibold text-on-surface">1</span> to<span class="font-semibold text-on-surface">10</span> of <span class="font-semibold text-on-surface">11</span> results</p>
          <nav class="flex items-center gap-1.5">
            <button type="button" class="w-9 h-9 rounded-lg border border-outline-variant text-outline flex items-center justify-center hover:bg-surface-container-low disabled:opacity-40 disabled:cursor-not-allowed transition-all" disabled="">
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
      <br>
    </div>
    <!-- Filter -->
    <div id="filter" class="w-full  scroll-mt-24 bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
      <div class="flex items-center gap-3 px-6 py-5 border-b border-outline-variant/60">
        <div class="w-9 h-9 bg-blue-50 text-primary rounded-lg flex items-center justify-center"><span class="material-symbols-outlined text-[20px]">filter_alt</span></div>
        <h3 class="text-headline-md font-bold text-on-surface">Filter</h3>
      </div>
      <div class="p-6 space-y-4">
        <button
          class="flex items-center gap-2 bg-white border border-outline-variant/50 text-on-surface px-6 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold shadow-sm"
          onclick="document.getElementById('filter-panel').classList.toggle('hidden')">
          <span class="material-symbols-outlined text-[20px]">filter_alt</span>
          <span class="">Filter</span>
        </button>
        <div
          class="bg-white rounded-2xl border border-outline-variant p-6 shadow-sm transition-all duration-300 overflow-hidden hidden"
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
      </div>
      <!-- Modals -->
      <div id="modals" class="scroll-mt-24 bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
        <div class="flex items-center gap-3 px-6 py-5 border-b border-outline-variant/60">
          <div class="w-9 h-9 bg-blue-50 text-primary rounded-lg flex items-center justify-center"><span class="material-symbols-outlined text-[20px]">web_asset</span></div>
          <div>
            <h3 class="text-headline-md font-bold text-on-surface">Modals</h3>
            <p class="text-label-md text-secondary">Confirmation, information &amp; form dialogs</p>
          </div>
        </div>
        <div class="p-6 flex flex-wrap items-center gap-3">
          <button type="button" data-modal-target="#modal-delete" class="flex items-center gap-2 bg-error text-white px-4 py-2.5 rounded-lg text-[14px] shadow-lg shadow-error/20 hover:shadow-xl hover:opacity-90 active:scale-[0.98] transition-all font-bold">
            <span class="material-symbols-outlined text-sm">delete</span> Delete Confirmation
          </button>
          <button type="button" data-modal-target="#modal-info" class="flex items-center gap-2 bg-brand-gradient text-on-primary px-4 py-2.5 rounded-lg text-[14px] shadow-lg shadow-primary/20 hover:shadow-xl hover:opacity-90 active:scale-[0.98] transition-all font-bold">
            <span class="material-symbols-outlined text-sm">info</span> Information
          </button>
          <button type="button" data-modal-target="#modal-form" class="flex items-center gap-2 bg-white border border-outline-variant/50 text-on-surface px-6 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold shadow-sm">
            <span class="material-symbols-outlined text-[20px]">edit_note</span> Form Modal
          </button>
        </div>
      </div>
    </section>
    <?php include('footer.php'); ?>
  </main>

  <!-- ============ MODALS ============ -->
  <!-- 1) Delete Confirmation (same as store page) -->
  <div id="modal-delete" class="js-modal hidden fixed inset-0 z-[100] flex items-center justify-center p-4">
    <div class="js-modal-close absolute inset-0 bg-black/50 backdrop-blur-sm"></div>
    <div class="relative w-full max-w-md bg-white rounded-2xl border border-outline-variant shadow-2xl overflow-hidden">
      <div class="p-6 text-center">
        <div class="w-14 h-14 rounded-full bg-error/10 text-error flex items-center justify-center mx-auto">
          <span class="material-symbols-outlined text-[30px]">delete</span>
        </div>
        <h3 class="text-headline-md font-bold text-on-surface mt-4">Delete Item</h3>
        <p class="text-body-md text-secondary mt-2 leading-relaxed">Are you sure you want to delete
          <span class="font-bold text-on-surface">this item</span>? This action cannot be undone.</p>
      </div>
      <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-outline-variant/60 bg-surface-container-low/30">
        <button type="button" class="js-modal-close flex items-center gap-2 bg-white border border-outline-variant/50 text-on-surface px-6 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold shadow-sm">Cancel</button>
        <button type="button" class="js-modal-close flex items-center gap-2 bg-error text-white px-4 py-2.5 rounded-lg text-[14px] shadow-lg shadow-error/20 hover:shadow-xl hover:opacity-90 active:scale-[0.98] transition-all font-bold">
          <span class="material-symbols-outlined text-sm">delete</span> Delete
        </button>
      </div>
    </div>
  </div>

  <!-- 2) Information Popup -->
  <div id="modal-info" class="js-modal hidden fixed inset-0 z-[100] flex items-center justify-center p-4">
    <div class="js-modal-close absolute inset-0 bg-black/50 backdrop-blur-sm"></div>
    <div class="relative w-full max-w-lg bg-white rounded-2xl border border-outline-variant shadow-2xl overflow-hidden">
      <div class="p-6 text-center">
        <div class="w-14 h-14 rounded-full bg-primary/10 text-primary flex items-center justify-center mx-auto">
          <span class="material-symbols-outlined text-[30px]">info</span>
        </div>
        <h3 class="text-headline-md font-bold text-on-surface mt-4">Heads up!</h3>
        <p class="text-body-md text-secondary mt-2 leading-relaxed">This is an informational message. Use it to
          explain a result, share a tip, or guide the user to the next step.</p>
      </div>
      <div class="flex items-center justify-center px-6 py-4 border-t border-outline-variant/60 bg-surface-container-low/30">
        <button type="button" class="js-modal-close flex items-center gap-2 bg-brand-gradient text-on-primary px-6 py-2.5 rounded-lg text-[14px] shadow-lg shadow-primary/20 hover:shadow-xl hover:opacity-90 active:scale-[0.98] transition-all font-bold">
          <span class="material-symbols-outlined text-sm">check</span> Got it
        </button>
      </div>
    </div>
  </div>

  <!-- 3) Form Modal -->
  <div id="modal-form" class="js-modal hidden fixed inset-0 z-[100] flex items-center justify-center p-4">
    <div class="js-modal-close absolute inset-0 bg-black/50 backdrop-blur-sm"></div>
    <div class="relative w-full max-w-2xl bg-white rounded-2xl border border-outline-variant shadow-2xl overflow-hidden">
      <div class="flex items-center justify-between gap-3 px-6 py-5 border-b border-outline-variant/60">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-xl bg-brand-gradient text-white flex items-center justify-center shrink-0 shadow-md shadow-primary/20">
            <span class="material-symbols-outlined text-[22px]">add</span>
          </div>
          <div>
            <h3 class="text-headline-md font-bold text-on-surface">Add New Item</h3>
            <p class="text-label-md text-secondary">Fill in the details below</p>
          </div>
        </div>
        <button type="button" class="js-modal-close w-9 h-9 rounded-lg text-outline hover:bg-surface-container-low hover:text-on-surface flex items-center justify-center transition-all">
          <span class="material-symbols-outlined text-[20px]">close</span>
        </button>
      </div>
      <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-5">
        <div class="space-y-2 md:col-span-2">
          <label class="text-on-surface font-bold text-label-md">Name <span class="text-error">*</span></label>
          <input type="text" placeholder="Enter name" class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
        </div>
        <div class="space-y-2">
          <label class="text-on-surface font-bold text-label-md">Status</label>
          <select class="w-full js-select2" data-allow-clear="false">
            <option>Active</option>
            <option>Inactive</option>
          </select>
        </div>
        <div class="space-y-2">
          <label class="text-on-surface font-bold text-label-md">Email</label>
          <input type="email" placeholder="name@example.com" class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
        </div>
        <div class="space-y-2 md:col-span-2">
          <label class="text-on-surface font-bold text-label-md">Notes</label>
          <textarea rows="3" placeholder="Optional notes" class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all resize-y"></textarea>
        </div>
      </div>
      <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-outline-variant/60 bg-surface-container-low/30">
        <button type="button" class="js-modal-close flex items-center gap-2 bg-white border border-outline-variant/50 text-on-surface px-6 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold shadow-sm">Cancel</button>
        <button type="button" class="js-modal-close flex items-center gap-2 bg-[#198754] text-white px-5 py-2.5 rounded-lg text-[14px] shadow-lg shadow-[#198754]/20 hover:opacity-95 active:scale-[0.98] transition-all font-bold">
          <span class="material-symbols-outlined text-[18px]">save</span> Save
        </button>
      </div>
    </div>
  </div>
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

      // Modals: open / close
      function openModal(sel) {
        var m = document.querySelector(sel);
        if (!m) return;
        m.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
      }
      function closeModal(m) {
        m.classList.add('hidden');
        if (!document.querySelector('.js-modal:not(.hidden)')) document.body.style.overflow = '';
      }
      document.querySelectorAll('[data-modal-target]').forEach(function (btn) {
        btn.addEventListener('click', function () { openModal(btn.getAttribute('data-modal-target')); });
      });
      document.querySelectorAll('.js-modal .js-modal-close').forEach(function (el) {
        el.addEventListener('click', function () { closeModal(el.closest('.js-modal')); });
      });
      document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
          document.querySelectorAll('.js-modal:not(.hidden)').forEach(closeModal);
        }
      });
    })();
  </script>
</body>

</html>