<!DOCTYPE html>
<html class="light" lang="en" style="">
 
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WePass - Pass Update</title>
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
      $template = [
        'name'     => 'boarding kg-1',
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
    ?>     
    <!-- Canvas -->
    <section class="p-margin-desktop space-y-stack-lg pb-16">
      <!-- Breadcrumbs and Header -->
      <div class="flex items-end justify-between">
        <div class="space-y-1">
          <nav class="flex items-center gap-2 text-label-sm text-outline mb-1">
            <span class="material-symbols-outlined text-[14px] text-gray">home</span> <span class="text-gray font-normal">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray font-normal">Passes</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray font-normal">Pass Install</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray-500 font-normal">Pass Update</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Pass Update</h2>
        </div>
        <div class="flex items-center gap-3">
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
              <img src="favicon-new.png" alt="<?= htmlspecialchars($template['name']) ?>" class="w-full h-full object-contain">
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
            <span class="material-symbols-outlined text-[18px] text-primary">tag</span>
            <span class="text-label-md text-outline">Pass ID:</span>
            <a href="#" class="text-label-md font-bold text-on-surface">0a15ce8788cd9d34a2114</a>
          </span>            
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

      <?php
        // ---- Pass data (drives both the form and the live preview) ----
        $pass = [
          'brand'      => 'Titan Watches',
          'giftLabel'  => 'ISK1004',
          'validTill'  => '25/06/2026',
          'cardNumber' => 'HARSH1234',
          'balance'    => '1004',
          'currency'   => 'ISK',
          'pin'        => '455',
          'event'      => '5436',
          'expiration' => '25/06/2026 07:22:06',
          'timezone'   => '(+02:00) Europe/Amsterdam',
          'updated'    => 'Jun 04, 2026, 08:32 AM',
        ];
      ?>

      <!-- Two-column: editor + live preview -->
      <form class="grid grid-cols-1 xl:grid-cols-3 gap-6 items-start">
        <!-- ============ LEFT: Editor ============ -->
        <div class="xl:col-span-2 space-y-6">

          <!-- Expiration -->
          <section class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
            <header class="flex items-center gap-3 px-6 py-5 border-b border-outline-variant/60 to-transparent">
              <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center shrink-0">
                <span class="material-symbols-outlined">event</span>
              </div>
              <div>
                <h3 class="text-headline-md font-bold text-on-surface leading-tight">Expiration</h3>
                <p class="text-label-md text-gray-400">Control when this pass is no longer valid</p>
              </div>
            </header>
            <div class="p-6">
              <div class="space-y-2 ">
                <div class="flex items-center gap-1.5">
                <label class="flex items-center gap-1.5 text-on-surface font-semibold text-label-md">
                  Expiration Timestamp: <span class="text-error">*</span>
                  <span class="group relative inline-flex">
                    <span class="material-symbols-outlined text-[15px] text-outline">help</span>
                    <span class="pointer-events-none absolute bottom-full left-1/2 mb-2 -translate-x-1/2 w-max max-w-[240px] whitespace-normal text-center leading-snug rounded-lg border border-outline-variant/70 bg-surface-container-high/80 px-3 py-1.5 text-body-sm text-on-surface shadow-sm backdrop-blur-sm opacity-0 transition-opacity duration-150 group-hover:opacity-100 z-20">
                      The expiration timestamp for the pass, which will take precedence over the expiration timestamp defined in the template.
                    </span>
                  </span>
                </label>                    
                </div>
                <p class="text-label-md text-gray-400">Please select the date/time value or enter in the format (MM/DD/YYYY HH:MM:SS)</p>
                <input id="exp-stamp"
                  class="js-datetime w-full md:w-1/2 bg-surface-container-low border border-outline-variant rounded-lg py-3 px-4 text-body-md font-semibold text-on-surface focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                  data-date-format="d/m/Y H:i" type="text" value="<?= htmlspecialchars($pass['expiration']) ?>">
                <p class="flex items-center gap-1.5 text-label-md text-gray-400 pt-1">
                  <span class="material-symbols-outlined text-[16px]">public</span>
                  <?= htmlspecialchars($pass['timezone']) ?>
                </p>
              </div>
            </div>
          </section>

          <!-- Primary Fields -->
          <section class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
            <header class="flex items-center gap-3 px-6 py-5 border-b border-outline-variant/60 to-transparent">
              <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center shrink-0">
                <span class="material-symbols-outlined">tune</span>
              </div>
              <div>
                <h3 class="text-headline-md font-bold text-on-surface leading-tight">Primary Fields</h3>
                <p class="text-label-md text-gray-400">The headline values shown on the pass</p>
              </div>
            </header>
            <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
              <!-- Balance -->
              <div class="space-y-2">
                <div class="flex items-center justify-between">
                  <label for="balance" class="text-on-surface font-semibold text-label-md">Balance: <span class="text-error">*</span></label>
                  <span class="text-label-sm text-gray-400">999999999999 chars max.</span>
                </div>
                <input id="balance" type="text" value="<?= htmlspecialchars($pass['balance']) ?>"
                  class="js-sync w-full bg-surface-container-low border border-outline-variant placeholder:text-slate-400 rounded-lg py-3 px-4 text-body-md text-on-surface focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
              </div>
              <!-- Currency Code -->
              <div class="space-y-2">
                <div class="flex items-center justify-between">
                  <label for="currency" class="text-on-surface font-semibold text-label-md">Currency Code: <span class="text-error">*</span></label>
                </div>
                <select id="currency" class="w-full js-select2" data-allow-clear="false">
                  <option value="ISK" selected>ISK (Icelandic Króna)</option>
                  <option value="USD">USD (US Dollar)</option>
                  <option value="EUR">EUR (Euro)</option>
                  <option value="GBP">GBP (British Pound)</option>
                  <option value="INR">INR (Indian Rupee)</option>
                  <option value="AUD">AUD (Australian Dollar)</option>
                  <option value="CAD">CAD (Canadian Dollar)</option>
                  <option value="JPY">JPY (Japanese Yen)</option>
                </select>
              </div>
            </div>
          </section>

          <!-- Additional Fields -->
          <section class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
            <header class="flex items-center gap-3 px-6 py-5 border-b border-outline-variant/60 to-transparent">
              <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center shrink-0">
                <span class="material-symbols-outlined">add_circle</span>
              </div>
              <div>
                <h3 class="text-headline-md font-bold text-on-surface leading-tight">Additional Fields</h3>
                <p class="text-label-md text-gray-400">Extra details stored on the pass</p>
              </div>
            </header>
            <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
              <!-- Pin -->
              <div class="space-y-2">
                <div class="flex items-center justify-between">
                  <label for="pin" class="text-on-surface font-semibold text-label-md">Pin:</label>
                  <span class="text-label-sm text-gray-500">50 chars max.</span>
                </div>
                <input id="pin" type="text" value="<?= htmlspecialchars($pass['pin']) ?>"
                  class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
              </div>
              <!-- Event Number -->
              <div class="space-y-2">
                <div class="flex items-center justify-between">
                  <label for="event" class="text-on-surface font-semibold text-label-md">Event Number:</label>
                  <span class="text-label-sm text-gray-500">50 chars max.</span>
                </div>
                <input id="event" type="text" value="<?= htmlspecialchars($pass['event']) ?>"
                  class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
              </div>
              <!-- Gift Card Number -->
              <div class="space-y-2 md:col-span-2">
                <label for="giftcard" class="text-on-surface font-semibold text-label-md">Gift Card Number: <span class="text-error">*</span></label>
                <input id="giftcard" type="text" value="<?= htmlspecialchars($pass['cardNumber']) ?>"
                  class="js-sync w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
              </div>
            </div>
          </section>

          <!-- Pass Update Notification -->
          <section class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
            <header class="flex items-center gap-3 px-6 py-5 border-b border-outline-variant/60 to-transparent">
              <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center shrink-0">
                <span class="material-symbols-outlined">notifications</span>
              </div>
              <div>
                <h3 class="text-headline-md font-bold text-on-surface leading-tight">Pass Update Notification</h3>
                <p class="text-label-md text-gray-400">Alert wallet holders about this change</p>
              </div>
            </header>
            <div class="p-6 space-y-5">
              <label for="notify" class="group relative flex items-center justify-between gap-4 overflow-hidden rounded-2xl border border-outline-variant bg-surface-container-low px-5 py-4 cursor-pointer transition-all hover:border-primary/50 hover:shadow-md hover:shadow-primary/5 has-[:checked]:border-primary has-[:checked]:bg-primary/5">
                <!-- decorative sweep -->
                <span class="pointer-events-none absolute inset-y-0 right-0 w-40 bg-gradient-to-l from-primary/5 to-transparent opacity-0 transition-opacity group-has-[:checked]:opacity-100"></span>
                <span class="relative flex items-center gap-4">
                  <!-- icon tile that lights up when active -->
                  <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-surface-container-highest text-outline transition-colors group-has-[:checked]:bg-primary group-has-[:checked]:text-white group-has-[:checked]:shadow-lg group-has-[:checked]:shadow-primary/30">
                    <span class="material-symbols-outlined">campaign</span>
                  </span>
                  <span class="flex flex-col">
                    <span class="text-body-md font-semibold text-on-surface">Do you want to send a notification?</span>
                    <!-- swap hint based on state -->
                    <span class="text-label-sm text-gray-400 group-has-[:checked]:hidden">Off — holders won't be alerted</span>
                    <span class="hidden items-center gap-1 text-label-sm font-semibold text-primary group-has-[:checked]:inline-flex">
                      <span class="material-symbols-outlined text-[14px]">check_circle</span>On — a push will be sent
                    </span>
                  </span>
                </span>
                <span class="relative inline-flex shrink-0 items-center">
                  <input id="notify" type="checkbox" class="peer sr-only"
                    onchange="document.getElementById('notify-fields').classList.toggle('hidden', !this.checked)">
                  <span class="w-12 h-7 rounded-full bg-surface-container-highest peer-checked:bg-primary transition-colors"></span>
                  <span class="absolute left-1 flex h-5 w-5 items-center justify-center rounded-full bg-white text-[13px] text-transparent shadow-sm transition-all peer-checked:translate-x-5 peer-checked:text-primary">
                    <span class="material-symbols-outlined text-[14px]">check</span>
                  </span>
                </span>
              </label>

              <!-- Reveal: notification fields (shown when toggle is on) -->
              <div id="notify-fields" class="hidden space-y-5 pt-5 border-t border-outline-variant/60">
                <!-- Title -->
                <div class="space-y-2">
                  <label for="notify-title" class="text-on-surface font-semibold text-label-md">Pass Update Notification Title:</label>
                  <input id="notify-title" type="text" placeholder="Enter notification title"
                    class="w-full bg-surface-container-low border border-outline-variant rounded-lg py-3 px-4 text-body-md font-semibold text-on-surface placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                </div>
                <!-- Message -->
                <div class="space-y-2">
                  <div class="flex items-center gap-1.5">
                    <label class="flex items-center gap-1.5 text-on-surface font-semibold text-label-md">
                    Pass Update Notification: <span class="text-error">*</span>
                    <span class="group relative inline-flex">
                        <span class="material-symbols-outlined text-[15px] text-outline">help</span>
                        <span class="pointer-events-none absolute bottom-full left-1/2 mb-2 -translate-x-1/2 w-max max-w-[240px] whitespace-normal text-center leading-snug rounded-lg border border-outline-variant/70 bg-surface-container-high/80 px-3 py-1.5 text-body-sm text-on-surface shadow-sm backdrop-blur-sm opacity-0 transition-opacity duration-150 group-hover:opacity-100 z-20">
                        This message will appear on the pass as a note to inform end users about the updated values.
                        </span>
                    </span>
                    </label>                     
                  </div>
                  <textarea id="notify-message" rows="4" placeholder="Enter notification message"
                    class="w-full bg-surface-container-low border border-outline-variant rounded-lg py-3 px-4 text-body-md font-semibold text-on-surface placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all resize-y"></textarea>
                </div>
              </div>
            </div>
          </section>

          <!-- Actions -->
          <div class="flex flex-col-reverse sm:flex-row items-center justify-center gap-3 pt-2">
            <button type="submit"
              class="flex items-center gap-2 bg-[#198754] text-white px-7 py-2.5 rounded-lg text-[14px] font-bold shadow-lg shadow-[#198754]/20 hover:opacity-95 active:scale-[0.98] transition-all">
              <span class="material-symbols-outlined text-[19px]">save</span>
              Update Pass
            </button>
          </div>
        </div>

        <!-- ============ RIGHT: Live preview (design preserved) ============ -->
        <aside class="xl:col-span-1">
          <div class="xl:sticky xl:top-6 space-y-4">
            <!-- Gift card preview -->
            <div class="bg-white rounded-2xl border border-outline-variant shadow-sm p-6 flex flex-col items-center">
              <div class="pass-flip w-[260px]">
                <div class="pass-flip-inner">
                  <!-- Front -->
                  <div class="pass-face rounded-[22px] overflow-hidden shadow-xl bg-[#DD3D1F] min-h-[350px]">
                    <div class="px-4 pt-3 pb-5 text-white">
                      <!-- Brand header -->
                      <div class="flex items-center gap-2 border-b border-white/50 pb-3 mb-4">
                        <img src="favicon-new.png" alt=""
                          class="h-10 w-10 rounded-full bg-white p-px object-contain shrink-0">
                        <h4 class="text-[15px] font-normal tracking-normal text-white"><?= htmlspecialchars($pass['brand']) ?></h4>
                      </div>
                      <!-- Balance -->
                      <p class="text-[17px] mb-4" data-prev="giftLabel">Gift card: <?= htmlspecialchars($pass['currency'] . $pass['balance']) ?></p>
                      <!-- Valid till -->
                      <p class="text-[10px] tracking-[0.15em] text-white/90">VALID TILL</p>
                      <p class="text-xs font-bold mb-4"><?= htmlspecialchars($pass['validTill']) ?></p>
                      <!-- QR -->
                      <div class="bg-white rounded-lg p-2 w-[132px] mx-auto">
                        <img class="w-full h-full" alt="QR code"
                          src="https://api.qrserver.com/v1/create-qr-code/?size=240x240&margin=0&data=<?= urlencode($pass['cardNumber']) ?>">
                      </div>
                      <p class="text-center text-[13px] font-normal mt-2 truncate" data-prev="cardNumber"><?= htmlspecialchars($pass['cardNumber']) ?>...</p>
                    </div>
                    <!-- Strip image -->
                    <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=400&q=60"
                      alt="" class="w-full h-32 object-cover">
                  </div>
                  <!-- Back -->
                  <div class="pass-face pass-face-back rounded-[22px] overflow-hidden shadow-xl bg-white p-6">
                    <img src="favicon-new.png" alt=""
                      class="h-10 w-10 rounded-full bg-white p-px object-contain mb-3">
                    <h4 class="text-[22px] font-medium leading-tight text-black mb-4">
                      Gift Card: <span data-prev="cardLabel"><?= htmlspecialchars($pass['currency'] . $pass['balance']) ?></span>
                    </h4>
                    <div class="space-y-3">
                      <div>
                        <strong class="text-sm font-medium text-black">Updated</strong><br>
                        <span class="text-xs font-normal text-black"><?= htmlspecialchars($pass['updated']) ?></span>
                      </div>
                      <div>
                        <strong class="text-sm font-medium text-black">Pin</strong><br>
                        <span class="break-words text-xs font-normal text-black" data-prev="pin"><?= htmlspecialchars($pass['pin']) ?></span>
                      </div>
                      <div>
                        <strong class="text-sm font-medium text-black">Event Number</strong><br>
                        <span class="break-words text-xs font-normal text-black" data-prev="event"><?= htmlspecialchars($pass['event']) ?></span>
                      </div>
                      <div>
                        <strong class="text-sm font-medium text-black">VALID TILL</strong><br>
                        <span class="text-xs font-normal text-black"><?= htmlspecialchars($pass['validTill']) ?></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <button type="button" id="flip-pass"
                class="mt-5 inline-flex items-center gap-1.5 border border-primary/40 text-primary text-[13px] font-bold rounded-lg px-5 py-2 hover:bg-primary/5 transition-colors">
                Flip <span class="material-symbols-outlined text-[18px]">cached</span>
              </button>
            </div>

            <!-- GEO Locations -->
            <div class="bg-white rounded-2xl border border-outline-variant shadow-sm px-5 py-4 flex items-center justify-between">
              <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary text-[20px]">location_on</span>
                <span class="text-body-md font-semibold text-on-surface">GEO Locations</span>
              </div>
              <span class="bg-primary/10 text-primary text-label-sm font-bold px-3 py-1 rounded-full">None</span>
            </div>
          </div>
        </aside>
      </form>
    </section>
    <?php include('footer.php'); ?>
  </main>
  <!-- Micro-interaction Scripts -->
   <?php include('script.php'); ?>
  <style>
    /* 3D flip for the pass preview */
    .pass-flip { perspective: 1200px; }
    .pass-flip-inner {
      position: relative;
      transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
      transform-style: preserve-3d;
    }
    .pass-flip.is-flipped .pass-flip-inner { transform: rotateY(180deg); }
    .pass-face { backface-visibility: hidden; -webkit-backface-visibility: hidden; }
    .pass-face-back {
      position: absolute;
      inset: 0;
      transform: rotateY(180deg);
      background: #fff;
    }
  </style>
  <script>
    (function () {
      // Flip the pass preview
      var flipBtn = document.getElementById('flip-pass');
      var card = document.querySelector('.pass-flip');
      if (flipBtn && card) {
        flipBtn.addEventListener('click', function () {
          card.classList.toggle('is-flipped');
        });
      }

      // Live-sync editable fields into the preview
      function bind(id, render) {
        var input = document.getElementById(id);
        if (!input) return;
        input.addEventListener('input', render);
        if (window.jQuery) window.jQuery(input).on('change', render);
      }
      function set(key, value) {
        document.querySelectorAll('[data-prev="' + key + '"]').forEach(function (el) {
          el.textContent = value;
        });
      }
      function cardCode() {
        return (document.getElementById('currency').value || '') + (document.getElementById('balance').value || '');
      }
      function syncLabels() {
        set('giftLabel', 'Gift card: ' + cardCode());
        set('cardLabel', cardCode());
      }
      bind('balance', function () { set('balance', this.value); syncLabels(); });
      bind('giftcard', function () { set('cardNumber', this.value + '...'); });
      bind('pin', function () { set('pin', this.value); });
      bind('event', function () { set('event', this.value); });
      bind('currency', function () { set('currency', this.value); syncLabels(); });
    })();
  </script>
</body>
 
</html>