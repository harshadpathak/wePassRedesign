<!DOCTYPE html>
<html class="light" lang="en">

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
            <span class="material-symbols-outlined text-[14px] text-gray">home</span> <span class="text-gray font-normal">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray-500 font-normal">Import Distribution</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Import Distribution Form</h2>
        </div>
      </div>

      <!-- Information Banner -->
      <div class="bg-white border border-outline-variant rounded-2xl p-6 flex flex-col gap-4">
        <div class="flex gap-6 items-start">
          <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center text-primary shrink-0">
            <span class="material-symbols-outlined text-[28px]">cloud_upload</span>
          </div>
          <div class="flex-1">
            <h3 class="text-headline-md font-bold text-on-surface tracking-tight">How Import Distribution Works</h3>
            <p class="text-body-md text-gray-400 leading-relaxed">Bulk distribute digital wallet passes by
              importing recipient data from CSV or Excel files. Upload your file with recipient information, map the
              columns to pass fields, and distribute passes to multiple recipients at once.
            </p>
            <!-- Steps -->
            <div class="bg-primary/5 rounded-2xl p-2 flex flex-wrap items-center gap-3 mt-4">
              <div class="flex items-center gap-2.5 bg-white rounded-full pl-2.5 pr-5 py-2 shadow-sm border border-outline-variant/40">
                <span class="material-symbols-outlined text-emerald-500 text-[22px] font-variation-fill">check_circle</span>
                <span class="text-body-md font-bold text-gray-600">Upload File</span>
              </div>
              <div class="flex items-center gap-2.5 bg-white rounded-full pl-2.5 pr-5 py-2 shadow-sm border border-outline-variant/40">
                <span class="material-symbols-outlined text-emerald-500 text-[22px] font-variation-fill">check_circle</span>
                <span class="text-body-md font-bold text-gray-600">Map Columns</span>
              </div>
              <div class="flex items-center gap-2.5 bg-white rounded-full pl-2.5 pr-5 py-2 shadow-sm border border-outline-variant/40">
                <span class="material-symbols-outlined text-emerald-500 text-[22px] font-variation-fill">check_circle</span>
                <span class="text-body-md font-bold text-gray-600">Preview Data</span>
              </div>
              <div class="flex items-center gap-2.5 bg-white rounded-full pl-2.5 pr-5 py-2 shadow-sm border border-outline-variant/40">
                <span class="material-symbols-outlined text-emerald-500 text-[22px] font-variation-fill">check_circle</span>
                <span class="text-body-md font-bold text-gray-600">Distribute</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Wizard Card -->
      <div class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
        <!-- Stepper -->
        <div class="grid grid-cols-1 md:grid-cols-3 border-b border-outline-variant/60">
          <!-- Step 1 -->
          <div id="ind-1" class="step-ind relative flex items-center gap-4 p-6">
            <div class="step-circle w-11 h-11 rounded-full flex items-center justify-center shrink-0" data-icon="cloud_upload">
              <span class="material-symbols-outlined text-[22px]">cloud_upload</span>
            </div>
            <div>
              <p class="step-title text-body-lg font-bold">Upload Your CSV File</p>
              <p class="text-label-md text-gray-400 mt-0.5 leading-snug">Select a template and upload your recipient data</p>
            </div>
            <span class="step-arrow hidden md:block absolute right-0 top-1/2 -translate-y-1/2 translate-x-1/2 z-10 w-3 h-3 rotate-45 bg-white border-t border-r border-outline-variant/60"></span>
          </div>
          <!-- Step 2 -->
          <div id="ind-2" class="step-ind relative flex items-center gap-4 p-6 border-t md:border-t-0 md:border-l border-outline-variant/60">
            <div class="step-circle w-11 h-11 rounded-full flex items-center justify-center shrink-0" data-icon="swap_horiz">
              <span class="material-symbols-outlined text-[22px]">swap_horiz</span>
            </div>
            <div>
              <p class="step-title text-body-lg font-bold">Map CSV Fields</p>
              <p class="text-label-md text-gray-400 mt-0.5 leading-snug">Match your CSV columns to the required fields</p>
            </div>
            <span class="step-arrow hidden md:block absolute right-0 top-1/2 -translate-y-1/2 translate-x-1/2 z-10 w-3 h-3 rotate-45 bg-white border-t border-r border-outline-variant/60"></span>
          </div>
          <!-- Step 3 -->
          <div id="ind-3" class="step-ind flex items-center gap-4 p-6 border-t md:border-t-0 md:border-l border-outline-variant/60">
            <div class="step-circle w-11 h-11 rounded-full flex items-center justify-center shrink-0" data-icon="download">
              <span class="material-symbols-outlined text-[22px]">download</span>
            </div>
            <div>
              <p class="step-title text-body-lg font-bold">Import</p>
              <p class="text-label-md text-gray-400 mt-0.5 leading-snug">Process and import your data</p>
            </div>
          </div>
        </div>

        <!-- Step 1 Body -->
        <div id="step-1" class="p-6 md:p-8 space-y-8">
          <!-- Info note -->
          <div class="flex items-start gap-4 bg-gradient-to-r from-blue-50 to-indigo-50/40 border border-primary/15 rounded-2xl p-5">
            <div class="w-9 h-9 rounded-lg bg-primary text-white flex items-center justify-center shrink-0">
              <span class="material-symbols-outlined text-[20px]">info</span>
            </div>
            <div class="flex-1">
              <p class="text-body-md font-bold text-on-surface">Before you upload</p>
              <p class="text-body-md text-gray-500 leading-relaxed mt-1">Upload a CSV file containing recipient
                information. Make sure your file includes columns for the following required fields:</p>
              <div class="flex flex-wrap gap-2 mt-3">
                <span class="inline-flex items-center gap-1.5 bg-white border border-primary/20 text-gray-600 text-label-md font-semibold px-3 py-1.5 rounded-full shadow-sm">
                  <span class="material-symbols-outlined text-primary text-[16px]">person</span> First Name
                </span>
                <span class="inline-flex items-center gap-1.5 bg-white border border-primary/20 text-gray-600 text-label-md font-semibold px-3 py-1.5 rounded-full shadow-sm">
                  <span class="material-symbols-outlined text-primary text-[16px]">badge</span> Last Name
                </span>
                <span class="inline-flex items-center gap-1.5 bg-white border border-primary/20 text-gray-600 text-label-md font-semibold px-3 py-1.5 rounded-full shadow-sm">
                  <span class="material-symbols-outlined text-primary text-[16px]">mail</span> Email Address
                </span>
              </div>
            </div>
          </div>

          <!-- Select Template -->
          <div class="space-y-2 max-w-md">
            <label class="text-on-surface font-semibold text-label-md">Select Template: <span class="text-error">*</span></label>
            <select id="template-select" class="w-full js-select2" data-placeholder="-- Select Template --">
              <option></option>
              <option value="GENERIC-PASS-6">GENERIC-PASS-6</option>
              <option value="ADVERTISING 34">ADVERTISING 34</option>
            </select>
          </div>

          <!-- Choose CSV File -->
          <div class="space-y-2">
            <label class="text-on-surface font-semibold text-label-md">Choose CSV File: <span class="text-error">*</span></label>

            <label id="dropzone" for="csv-input"
              class="group relative flex flex-col items-center justify-center text-center gap-3 border-2 border-dashed border-outline-variant rounded-2xl px-6 py-14 cursor-pointer bg-surface-container-low/40 hover:border-primary hover:bg-primary/5 transition-all">
              <div class="w-16 h-16 rounded-full bg-primary/10 text-primary flex items-center justify-center group-hover:scale-105 transition-transform">
                <span class="material-symbols-outlined text-[32px]">cloud_upload</span>
              </div>
              <div>
                <p class="text-body-lg font-bold text-on-surface">Drag &amp; drop your file here or
                  <span class="text-primary">click to browse</span>
                </p>
                <p class="text-label-md text-outline mt-1">Supported format: CSV (Max 10MB)</p>
              </div>
              <input id="csv-input" type="file" accept=".csv" class="hidden">
            </label>

            <!-- Selected file preview -->
            <div id="file-preview" class="hidden items-center justify-between gap-4 bg-emerald-50 border border-emerald-200 rounded-xl px-4 py-3">
              <div class="flex items-center gap-3 min-w-0">
                <span class="material-symbols-outlined text-emerald-600 shrink-0">description</span>
                <div class="min-w-0">
                  <p id="file-name" class="text-body-md font-semibold text-on-surface truncate"></p>
                  <p id="file-size" class="text-label-sm text-outline"></p>
                </div>
              </div>
              <button type="button" id="remove-file" class="w-8 h-8 rounded-lg text-error hover:bg-error/10 flex items-center justify-center transition-all shrink-0">
                <span class="material-symbols-outlined text-[20px]">close</span>
              </button>
            </div>

            <!-- Download sample -->
            <div class="flex justify-end pt-1">
              <a href="#" class="inline-flex items-center gap-1.5 bg-primary/5 hover:bg-primary/10 text-primary text-label-md font-semibold px-3.5 py-2 rounded-lg transition-all">
                <span class="material-symbols-outlined text-[18px]">download</span>
                Download Sample CSV
              </a>
            </div>
          </div>
        </div>

        <!-- Step 1 Footer -->
        <div id="step-1-footer" class="flex items-end justify-end gap-4 px-6 md:px-8 py-5 border-t border-outline-variant/60 bg-surface-container-low/30">
          <button type="button" onclick="goToStep(2)"
            class="inline-flex items-center gap-2 bg-brand-gradient text-on-primary px-5 py-2.5 rounded-lg text-[14px] shadow-lg shadow-primary/20 hover:shadow-xl hover:opacity-90 active:scale-[0.98] transition-all font-bold">
            Next
            <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
          </button>
        </div>

        <!-- Step 2 Body (Map CSV Fields) -->
        <div id="step-2" class="hidden">
          <div class="p-6 md:p-8 pt-0 md:pt-0 space-y-6">
            <!-- Info note -->
          <div class="flex items-start gap-3 mt-5 bg-gradient-to-r from-blue-50 to-indigo-50/40 border border-primary/15 rounded-xl p-4">
            <div class="w-9 h-9 rounded-lg bg-primary text-white flex items-center justify-center shrink-0">
              <span class="material-symbols-outlined text-[20px]">info</span>
            </div>
            <p class="text-body-md text-gray-500 leading-relaxed self-center">Map each field to the corresponding column from your CSV file. Required fields are marked with an asterisk (<span class="text-red-500">*</span>).</p>
          </div>

            <!-- Mapping Table -->
            <div class="border border-outline-variant rounded-2xl overflow-hidden">
              <!-- Head -->
              <div class="hidden sm:grid grid-cols-12 gap-4 bg-surface-container-low/60 px-5 py-3 border-b border-outline-variant/60">
                <div class="col-span-1 text-label-sm font-bold text-outline uppercase tracking-wider">#</div>
                <div class="col-span-6 text-label-sm font-bold text-outline uppercase tracking-wider">Field Name</div>
                <div class="col-span-5 text-label-sm font-bold text-outline uppercase tracking-wider">CSV Column</div>
              </div>
              <!-- Rows -->
              <div class="divide-y divide-outline-variant/40">
                <?php
                  $csvColumns = ['first_name','last_name','email','card_balance_value','currency_code','gift_card_number','pass_expiration_date','card_pin_value','event_number','barcode_value'];
                  $fields = [
                    ['label' => 'First Name',          'required' => true,  'map' => 'first_name'],
                    ['label' => 'Last Name',           'required' => false, 'map' => 'last_name'],
                    ['label' => 'Email',               'required' => true,  'map' => 'email'],
                    ['label' => 'Card Balance Value',  'required' => false, 'map' => 'card_balance_value'],
                    ['label' => 'Currency Code',       'required' => false, 'map' => ''],
                    ['label' => 'Gift Card Number',    'required' => false, 'map' => 'gift_card_number'],
                    ['label' => 'Pass Expiration Date','required' => false, 'map' => 'pass_expiration_date'],
                    ['label' => 'Card PIN Value',      'required' => false, 'map' => 'card_pin_value'],
                    ['label' => 'Event Number',        'required' => false, 'map' => 'event_number'],
                    ['label' => 'Barcode Value',       'required' => false, 'map' => 'barcode_value'],
                  ];
                  foreach ($fields as $i => $field):
                ?>
                <div class="grid grid-cols-1 sm:grid-cols-12 gap-2 sm:gap-4 sm:items-center px-5 py-3.5 hover:bg-primary/5 transition-colors">
                  <div class="hidden sm:flex col-span-1">
                    <span class="w-7 h-7 rounded-full bg-surface-container-low text-secondary text-label-sm font-bold flex items-center justify-center"><?= $i + 1 ?></span>
                  </div>
                  <div class="sm:col-span-6 flex items-center gap-2">
                    <span class="sm:hidden w-7 h-7 rounded-full bg-surface-container-low text-secondary text-label-sm font-bold flex items-center justify-center shrink-0"><?= $i + 1 ?></span>
                    <span class="text-body-md font-semibold text-on-surface"><?= htmlspecialchars($field['label']) ?></span>
                    <?php if ($field['required']): ?><span class="text-error font-bold">*</span><?php endif; ?>
                  </div>
                  <div class="sm:col-span-5 relative">
                    <select class="map-select w-full appearance-none bg-surface-container-low border-outline-variant rounded-lg py-3 pl-4 pr-10 text-body-md text-on-surface focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all cursor-pointer">
                      <option value="">-- Not mapped --</option>
                      <?php foreach ($csvColumns as $col): ?>
                      <option value="<?= htmlspecialchars($col) ?>" <?= $col === $field['map'] ? 'selected' : '' ?>><?= htmlspecialchars($col) ?></option>
                      <?php endforeach; ?>
                    </select>
                    <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-outline text-[20px] pointer-events-none">expand_more</span>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>

          <!-- Step 2 Footer -->
          <div class="flex items-center justify-between gap-4 px-6 md:px-8 py-5 border-t border-outline-variant/60 bg-surface-container-low/30">
            <button type="button" onclick="goToStep(1)"
              class="flex items-center gap-2 bg-white border border-outline-variant/50 text-on-surface px-6 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold shadow-sm">
              <span class="material-symbols-outlined text-[18px]">arrow_back</span>
              Previous
            </button>
            <button type="button" onclick="goToStep(3)"
              class="inline-flex items-center gap-2 bg-brand-gradient text-on-primary px-5 py-2.5 rounded-lg text-[14px] shadow-lg shadow-primary/20 hover:shadow-xl hover:opacity-90 active:scale-[0.98] transition-all font-bold">
              Next
              <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
            </button>
          </div>
        </div>

        <style>
          @keyframes pop { 0% { transform: scale(0); opacity: 0; } 60% { transform: scale(1.12); } 100% { transform: scale(1); opacity: 1; } }
          @keyframes rise { 0% { transform: translateY(12px); opacity: 0; } 100% { transform: translateY(0); opacity: 1; } }
          @keyframes ringGlow { 0%,100% { opacity: .35; } 50% { opacity: .7; } }
          .stage-row { transition: background-color .3s ease, border-color .3s ease; }
        </style>
        <!-- Step 3 Body (Import) -->
        <div id="step-3" class="hidden">
          <div class="p-6 md:p-10">

            <!-- ============ Processing State ============ -->
            <div id="import-processing" class="flex flex-col items-center justify-center text-center py-12 md:py-16">

              <!-- gradient progress ring -->
              <div class="flex flex-col items-center text-center">
                <div class="relative w-56 h-56">
                  <!-- soft glow -->
                  <div class="absolute inset-3 rounded-full bg-primary/10 blur-2xl" style="animation: ringGlow 2.4s ease-in-out infinite;"></div>
                  <svg class="relative w-full h-full -rotate-90" viewBox="0 0 120 120">
                    <defs>
                      <linearGradient id="ringGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#5573FF"></stop>
                        <stop offset="100%" stop-color="#3d5afe"></stop>
                      </linearGradient>
                    </defs>
                    <circle cx="60" cy="60" r="52" fill="none" stroke="#e2e8f0" stroke-width="9"></circle>
                    <circle id="progress-ring" cx="60" cy="60" r="52" fill="none" stroke="url(#ringGrad)" stroke-width="9" stroke-linecap="round"
                      class="transition-[stroke-dashoffset] duration-200 ease-linear"
                      stroke-dasharray="326.726" stroke-dashoffset="326.726"></circle>
                  </svg>
                  <div class="absolute inset-0 flex flex-col items-center justify-center">
                    <span id="progress-percent" class="text-4xl md:text-5xl font-display font-bold text-on-surface tracking-tight leading-none">0%</span>
                    <span class="mt-1 text-label-md font-semibold text-outline uppercase tracking-wider">Complete</span>
                  </div>
                </div>
                <div class="mt-7 flex items-center gap-2.5 text-primary">
                  <span class="material-symbols-outlined text-[20px] animate-spin">progress_activity</span>
                  <span class="text-body-lg font-bold">Importing your file…</span>
                </div>
                <p class="mt-1.5 text-body-md text-gray-400">Please wait, this may take a moment.</p>
              </div>
            </div>

            <!-- ============ Success State ============ -->
            <div id="import-success" class="hidden flex-col items-center justify-center text-center max-w-2xl mx-auto py-8 md:py-12">
              <div class="relative flex items-center justify-center w-36 h-36">
                <!-- soft glow -->
                <div class="absolute w-28 h-28 rounded-full bg-emerald-500/20 blur-2xl"></div>
                <!-- scalloped (curly) seal surface -->
                <svg viewBox="0 0 100 100" class="w-28 h-28 drop-shadow-xl">
                  <defs>
                    <linearGradient id="sealGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                      <stop offset="0%" stop-color="#34d399"></stop>
                      <stop offset="100%" stop-color="#059669"></stop>
                    </linearGradient>
                  </defs>
                  <path fill="url(#sealGrad)" stroke-linejoin="round" stroke-linecap="round"
                    d="M 50.0 2.0 L 56.41 9.5 L 64.83 4.35 L 68.61 13.47 L 78.21 11.17 L 78.99 21.01 L 88.83 21.79 L 86.53 31.39 L 95.65 35.17 L 90.5 43.59 L 98.0 50.0 L 90.5 56.41 L 95.65 64.83 L 86.53 68.61 L 88.83 78.21 L 78.99 78.99 L 78.21 88.83 L 68.61 86.53 L 64.83 95.65 L 56.41 90.5 L 50.0 98.0 L 43.59 90.5 L 35.17 95.65 L 31.39 86.53 L 21.79 88.83 L 21.01 78.99 L 11.17 78.21 L 13.47 68.61 L 4.35 64.83 L 9.5 56.41 L 2.0 50.0 L 9.5 43.59 L 4.35 35.17 L 13.47 31.39 L 11.17 21.79 L 21.01 21.01 L 21.79 11.17 L 31.39 13.47 L 35.17 4.35 L 43.59 9.5 Z"></path>
                </svg>
                <!-- check icon -->
                <span class="material-symbols-outlined absolute text-white text-[48px] font-variation-fill">check</span>
              </div>
              <h3 class="mt-6 text-headline-lg font-bold text-on-surface tracking-tight animate-[rise_0.5s_ease-out_0.1s_both]">Import Successful!</h3>
              <p class="mt-2 text-body-lg text-gray-500 leading-relaxed animate-[rise_0.5s_ease-out_0.15s_both]">Your passes have been imported and are ready to distribute. You can now view and manage them in your records.</p>

              <!-- Summary stat cards -->
              <div class="mt-7 grid grid-cols-3 gap-3 sm:gap-4 w-full animate-[rise_0.5s_ease-out_0.2s_both]">
                <div class="bg-white border border-outline-variant rounded-2xl p-4 flex flex-col items-center">
                  <span class="material-symbols-outlined text-primary text-[26px]">groups</span>
                  <span id="stat-records" class="mt-1.5 text-headline-md font-bold text-on-surface">0</span>
                  <span class="text-label-md text-gray-400 mt-0.5">Records Imported</span>
                </div>
                <div class="bg-white border border-outline-variant rounded-2xl p-4 flex flex-col items-center">
                  <span class="material-symbols-outlined text-emerald-500 text-[26px]">confirmation_number</span>
                  <span id="stat-passes" class="mt-1.5 text-headline-md font-bold text-on-surface">0</span>
                  <span class="text-label-md text-gray-400 mt-0.5">Passes Created</span>
                </div>
                <div class="bg-white border border-outline-variant rounded-2xl p-4 flex flex-col items-center">
                  <span class="material-symbols-outlined text-tertiary text-[26px]">mark_email_read</span>
                  <span id="stat-notified" class="mt-1.5 text-headline-md font-bold text-on-surface">0</span>
                  <span class="text-label-md text-gray-400 mt-0.5">Recipients Notified</span>
                </div>
              </div>

              <!-- Actions -->
              <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-3 w-full animate-[rise_0.5s_ease-out_0.25s_both]">
                <a href="passes.php"
                  class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-brand-gradient text-on-primary px-7 py-3 rounded-lg text-[14px] font-bold shadow-lg shadow-primary/25 hover:shadow-xl hover:opacity-95 active:scale-[0.98] transition-all">
                  <span class="material-symbols-outlined text-[20px]">list_alt</span>
                  Go to Records
                </a>
                <a href="importDistribution.php"
                  class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-white border border-outline-variant text-on-surface px-7 py-3 rounded-lg text-[14px] font-bold shadow-sm hover:bg-surface-container-low active:scale-[0.98] transition-all">
                  <span class="material-symbols-outlined text-[20px]">restart_alt</span>
                  Import Another File
                </a>
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
    // ---- Wizard step navigation ----
    var TOTAL_STEPS = 3;
    function goToStep(step) {
      // Toggle step bodies
      for (var i = 1; i <= TOTAL_STEPS; i++) {
        var body = document.getElementById('step-' + i);
        if (body) body.classList.toggle('hidden', i !== step);
      }
      // Step 1 footer only on step 1
      var step1Footer = document.getElementById('step-1-footer');
      if (step1Footer) step1Footer.classList.toggle('hidden', step !== 1);
      // Update stepper indicators
      for (var s = 1; s <= TOTAL_STEPS; s++) {
        var ind = document.getElementById('ind-' + s);
        if (!ind) continue;
        var circle = ind.querySelector('.step-circle');
        var title = ind.querySelector('.step-title');
        var arrow = ind.querySelector('.step-arrow');
        var icon = circle.querySelector('.material-symbols-outlined');
        var baseCircle = 'step-circle w-11 h-11 rounded-full flex items-center justify-center shrink-0';

        ind.classList.remove('bg-primary/5');
        if (arrow) arrow.classList.add('hidden');

        if (s < step) {
          // completed
          circle.className = baseCircle + ' bg-emerald-500 text-white shadow-md shadow-emerald-500/30';
          icon.textContent = 'check';
          title.className = 'step-title text-body-lg font-bold text-on-surface';
        } else if (s === step) {
          // active
          ind.classList.add('bg-primary/5');
          circle.className = baseCircle + ' bg-primary text-white shadow-md shadow-primary/30';
          icon.textContent = circle.getAttribute('data-icon');
          title.className = 'step-title text-body-lg font-bold text-on-surface';
          if (arrow) arrow.classList.remove('hidden');
        } else {
          // upcoming
          circle.className = baseCircle + ' border-2 border-outline-variant text-outline';
          icon.textContent = circle.getAttribute('data-icon');
          title.className = 'step-title text-body-lg font-bold text-outline';
        }
      }
      // Scroll wizard into view
      var card = document.getElementById('step-' + step);
      if (card && card.scrollIntoView) card.scrollIntoView({ behavior: 'smooth', block: 'start' });
      // Kick off import animation when entering step 3
      if (step === 3) startImport();
    }

    // ---- Step 3: import progress animation ----
    // Wire TOTAL_RECORDS to your real CSV row count when integrating the backend.
    var TOTAL_RECORDS = 300;
    function startImport() {
      var processing = document.getElementById('import-processing');
      var success = document.getElementById('import-success');
      var ring = document.getElementById('progress-ring');
      var percentEl = document.getElementById('progress-percent');
      var CIRCUMFERENCE = 326.726; // 2 * PI * r (r = 52)

      // Reset to processing state
      processing.classList.remove('hidden');
      processing.classList.add('flex');
      success.classList.add('hidden');
      success.classList.remove('flex');
      ring.style.strokeDashoffset = CIRCUMFERENCE;
      percentEl.textContent = '0%';

      var progress = 0;
      var timer = setInterval(function () {
        progress += Math.floor(Math.random() * 8) + 4;
        if (progress >= 100) progress = 100;

        percentEl.textContent = progress + '%';
        ring.style.strokeDashoffset = CIRCUMFERENCE * (1 - progress / 100);

        if (progress >= 100) {
          clearInterval(timer);
          setTimeout(showSuccess, 600);
        }
      }, 220);
    }

    // Count-up animation for the success stat cards
    function countUp(el, target, duration) {
      if (!el) return;
      var start = 0, t0 = null;
      function tick(ts) {
        if (t0 === null) t0 = ts;
        var p = Math.min(1, (ts - t0) / duration);
        el.textContent = Math.round(start + (target - start) * p).toLocaleString();
        if (p < 1) requestAnimationFrame(tick);
      }
      requestAnimationFrame(tick);
    }

    function showSuccess() {
      var processing = document.getElementById('import-processing');
      var success = document.getElementById('import-success');
      processing.classList.add('hidden');
      processing.classList.remove('flex');
      success.classList.remove('hidden');
      success.classList.add('flex');
      // Animate summary numbers (wire these to real backend results later)
      countUp(document.getElementById('stat-records'), TOTAL_RECORDS, 900);
      countUp(document.getElementById('stat-passes'), TOTAL_RECORDS, 1000);
      countUp(document.getElementById('stat-notified'), TOTAL_RECORDS, 1100);
    }
    // Initialize on first step
    document.addEventListener('DOMContentLoaded', function () { goToStep(1); });

    (function () {
      var input = document.getElementById('csv-input');
      var dropzone = document.getElementById('dropzone');
      var preview = document.getElementById('file-preview');
      var nameEl = document.getElementById('file-name');
      var sizeEl = document.getElementById('file-size');
      var removeBtn = document.getElementById('remove-file');

      function formatSize(bytes) {
        if (bytes < 1024) return bytes + ' B';
        if (bytes < 1024 * 1024) return (bytes / 1024).toFixed(1) + ' KB';
        return (bytes / (1024 * 1024)).toFixed(2) + ' MB';
      }

      function showFile(file) {
        nameEl.textContent = file.name;
        sizeEl.textContent = formatSize(file.size);
        preview.classList.remove('hidden');
        preview.classList.add('flex');
      }

      function clearFile() {
        input.value = '';
        preview.classList.add('hidden');
        preview.classList.remove('flex');
      }

      input.addEventListener('change', function () {
        if (input.files && input.files.length) {
          showFile(input.files[0]);
        }
      });

      removeBtn.addEventListener('click', clearFile);

      // Drag & drop styling + file capture
      ['dragenter', 'dragover'].forEach(function (evt) {
        dropzone.addEventListener(evt, function (e) {
          e.preventDefault();
          dropzone.classList.add('border-primary', 'bg-primary/5');
        });
      });
      ['dragleave', 'drop'].forEach(function (evt) {
        dropzone.addEventListener(evt, function (e) {
          e.preventDefault();
          dropzone.classList.remove('border-primary', 'bg-primary/5');
        });
      });
      dropzone.addEventListener('drop', function (e) {
        var files = e.dataTransfer && e.dataTransfer.files;
        if (files && files.length) {
          input.files = files;
          showFile(files[0]);
        }
      });

      // Mapping: toggle "Matched" / "Unmatched" badge per row based on selection
      document.querySelectorAll('.map-select').forEach(function (sel) {
        sel.addEventListener('change', function () {
          var row = sel.closest('.grid');
          if (!row) return;
          var matched = row.querySelector('.js-matched-badge');
          var unmatched = row.querySelector('.js-unmatched-badge');
          if (matched) matched.classList.toggle('hidden', !sel.value);
          if (unmatched) unmatched.classList.toggle('hidden', !!sel.value);
        });
      });
    })();
  </script>
</body>

</html>
