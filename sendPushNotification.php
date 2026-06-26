<!DOCTYPE html>
<html class="light" lang="en" style="">
 
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WePass - Send Push Notification
</title>
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
    <!-- Canvas -->
    <section class="p-margin-desktop space-y-stack-lg pb-16">
      <!-- Breadcrumbs and Header -->
      <div class="flex items-end justify-between">
        <div class="space-y-1">
          <nav class="flex items-center gap-2 text-label-sm text-outline mb-1">
            <span class="material-symbols-outlined text-[14px] text-gray">home</span> <span class="text-gray text-normal">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray text-normal">Passes</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray text-normal">Push Messages</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray-500 font-normal">Send Push Notification</span>                        
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Send Push Notification</h2>
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

      <!-- Notification Wizard -->
      <div class="bg-white border border-outline-variant rounded-2xl shadow-sm overflow-hidden">
        <!-- Stepper -->
        <div class="border-b border-outline-variant/60 px-6 py-8 sm:px-10 bg-surface-container-low/20">
          <div class="flex items-start max-w-md mx-auto" data-stepper>
            <!-- Step 1 -->
            <div class="step-card flex flex-col items-center text-center shrink-0 w-40" data-step-indicator="1">
              <span class="step-dot w-12 h-12 rounded-full flex items-center justify-center shrink-0 font-bold transition-all duration-300 bg-primary text-white ring-4 ring-primary/15">
                <span class="step-num text-body-lg font-bold">1</span>
                <span class="step-check material-symbols-outlined text-[24px] hidden">check</span>
              </span>
              <p class="step-eyebrow text-label-sm font-bold uppercase tracking-wider mt-3 transition-colors text-primary">Step 01</p>
              <p class="step-label text-body-md font-bold leading-snug mt-0.5 whitespace-nowrap transition-colors text-on-surface">Segmentation Filters</p>
            </div>
            <!-- Connector -->
            <div class="flex-1 flex items-center h-12 px-2 sm:px-3" aria-hidden="true">
              <span class="relative block w-full h-1.5 rounded-full bg-surface-container-highest overflow-hidden">
                <span class="step-line absolute inset-y-0 left-0 rounded-full bg-primary transition-[width] duration-500 ease-out" style="width:0%"></span>
              </span>
            </div>
            <!-- Step 2 -->
            <div class="step-card flex flex-col items-center text-center shrink-0 w-40" data-step-indicator="2">
              <span class="step-dot w-12 h-12 rounded-full flex items-center justify-center shrink-0 font-bold transition-all duration-300 bg-white border-2 border-outline-variant text-outline">
                <span class="step-num text-body-lg font-bold">2</span>
                <span class="step-check material-symbols-outlined text-[24px] hidden">check</span>
              </span>
              <p class="step-eyebrow text-label-sm font-bold uppercase tracking-wider mt-3 transition-colors text-outline">Step 02</p>
              <p class="step-label text-body-md font-bold leading-snug mt-0.5 whitespace-nowrap transition-colors text-outline">Send Notification</p>
            </div>
          </div>
        </div>

        <!-- Step bodies -->
        <div class="p-6 sm:p-6">
        <div class="border p-3 rounded-2xl">
          <!-- Step 1: Choose Audience -->
          <div data-step-panel="1">
            <div class="flex items-center gap-4 mb-8 px-4 pb-4 -mx-3 border-b border-outline/20">
                <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary shrink-0">
                    <span class="material-symbols-outlined text-[24px]">filter_alt</span>
                </div>
                <div class="flex flex-col">
                    <h3 class="text-on-surface font-bold text-body-lg font-display mb-1">Choose Audience</h3>
                    <p class="text-outline text-label-md font-body-md">Select who should receive this push notification.</p>
                </div>
            </div>            

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 max-w-4xl mx-auto">
              <!-- All Passes -->
              <label class="audience-card group relative cursor-pointer rounded-2xl border border-outline-variant bg-white p-5 transition-all duration-200 hover:border-primary/50 hover:shadow-sm has-[:checked]:border-primary has-[:checked]:bg-primary/[0.03] has-[:checked]:ring-2 has-[:checked]:ring-primary/15">
                <input type="radio" name="audience" value="all" class="peer sr-only" checked>
                <div class="flex items-start gap-4">
                  <span class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0 transition-colors duration-200 group-has-[:checked]:bg-primary group-has-[:checked]:text-white">
                    <span class="material-symbols-outlined text-[26px]">groups</span>
                  </span>
                  <div class="min-w-0 flex-1">
                    <div class="flex items-start justify-between gap-3">
                      <h4 class="text-body-lg font-bold text-on-surface leading-tight">All Passes</h4>
                      <!-- radio indicator -->
                      <span class="mt-0.5 w-5 h-5 rounded-full border-2 border-outline-variant bg-white flex items-center justify-center shrink-0 transition-all group-has-[:checked]:border-primary group-has-[:checked]:bg-primary group-has-[:checked]:text-white">
                        <span class="material-symbols-outlined text-[13px] opacity-0 scale-50 transition-all group-has-[:checked]:opacity-100 group-has-[:checked]:scale-100">check</span>
                      </span>
                    </div>
                    <p class="text-label-md text-outline leading-snug mt-1">Reach everyone who installed this pass on any device.</p>
                    <span class="mt-3 inline-flex items-center gap-1.5 rounded-full bg-emerald-50 text-emerald-600 text-label-sm font-bold px-2.5 py-1">
                      <span class="material-symbols-outlined text-[15px]">bolt</span> 2 recipients
                    </span>
                  </div>
                </div>
              </label>

              <!-- With Segmentation -->
              <label class="audience-card group relative cursor-pointer rounded-2xl border border-outline-variant bg-white p-5 transition-all duration-200 hover:border-primary/50 hover:shadow-sm has-[:checked]:border-primary has-[:checked]:bg-primary/[0.03] has-[:checked]:ring-2 has-[:checked]:ring-primary/15">
                <input type="radio" name="audience" value="segment" class="peer sr-only">
                <div class="flex items-start gap-4">
                  <span class="w-12 h-12 rounded-xl bg-surface-container-high text-secondary flex items-center justify-center shrink-0 transition-colors duration-200 group-has-[:checked]:bg-primary group-has-[:checked]:text-white">
                    <span class="material-symbols-outlined text-[26px]">tune</span>
                  </span>
                  <div class="min-w-0 flex-1">
                    <div class="flex items-start justify-between gap-3">
                      <h4 class="text-body-lg font-bold text-on-surface leading-tight">With Segmentation</h4>
                      <!-- radio indicator -->
                      <span class="mt-0.5 w-5 h-5 rounded-full border-2 border-outline-variant bg-white flex items-center justify-center shrink-0 transition-all group-has-[:checked]:border-primary group-has-[:checked]:bg-primary group-has-[:checked]:text-white">
                        <span class="material-symbols-outlined text-[13px] opacity-0 scale-50 transition-all group-has-[:checked]:opacity-100 group-has-[:checked]:scale-100">check</span>
                      </span>
                    </div>
                    <p class="text-label-md text-outline leading-snug mt-1">Target specific groups by platform, location or activity.</p>
                    <span class="mt-3 inline-flex items-center gap-1.5 rounded-full bg-primary/10 text-primary text-label-sm font-bold px-2.5 py-1">
                      <span class="material-symbols-outlined text-[15px]">rule</span> Custom rules
                    </span>
                  </div>
                </div>
              </label>
            </div>

            <!-- Segmentation filter panel (revealed when "With Segmentation" is chosen) -->
            <div data-segment-panel class="hidden mt-8 max-w-4xl mx-auto">
              <div class="relative rounded-2xl border hover:border-primary/50 bg-white shadow-sm overflow-hidden">
                <!-- Panel header -->
                <div class="flex items-start gap-3.5 px-6 pt-6 pb-5">
                  <span class="w-11 h-11 rounded-xl bg-primary text-white flex items-center justify-center shrink-0 shadow-sm shadow-primary/30">
                    <span class="material-symbols-outlined text-[24px]">tune</span>
                  </span>
                  <div class="min-w-0">
                    <h4 class="text-body-lg font-bold text-on-surface leading-tight">Segmentation Rules</h4>
                    <p class="text-label-md text-outline mt-0.5">Only passes matching every rule below will receive this notification.</p>
                  </div>
                </div>

                <!-- Choose Wallet -->
                <div class="px-6 pb-5">
                  <div class="flex items-center gap-2 mb-3">
                    <span class="material-symbols-outlined text-[18px] text-primary">wallet</span>
                    <span class="text-body-md font-semibold text-on-surface whitespace-nowrap">Choose Wallet</span>
                    <div class="flex-1 border-t border-outline-variant/40"></div>
                  </div>
                  <div class="flex flex-wrap gap-2.5">
                    <!-- Both -->
                    <label class="cursor-pointer group">
                      <input type="radio" name="wallet" value="both" class="peer sr-only" checked>
                      <span class="relative flex items-center gap-2 rounded-lg border border-outline-variant bg-white pl-2 pr-3.5 py-1.5 text-label-md font-bold text-on-surface transition-all hover:border-primary/40 peer-checked:border-primary peer-checked:bg-primary/[0.05] peer-checked:text-primary">
                        <span class="w-5 h-5 flex items-center justify-center shrink-0">
                          <span class="material-symbols-outlined text-[20px] text-outline peer-checked:text-primary">smartphone</span>
                        </span>
                        Both
                        <span class="absolute -top-1.5 -right-1.5 w-4 h-4 rounded-full bg-primary text-white items-center justify-center ring-2 ring-white hidden group-has-[:checked]:flex">
                          <span class="material-symbols-outlined text-[11px] font-bold">check</span>
                        </span>
                      </span>
                    </label>
                    <!-- Apple Wallet -->
                    <label class="cursor-pointer group">
                      <input type="radio" name="wallet" value="apple" class="peer sr-only">
                      <span class="relative flex items-center gap-2 rounded-lg border border-outline-variant bg-white pl-2 pr-3.5 py-1.5 text-label-md font-bold text-on-surface transition-all hover:border-primary/40 peer-checked:border-primary peer-checked:bg-primary/[0.05]">
                        <span class="w-5 h-5 rounded-md bg-on-surface text-white flex items-center justify-center shrink-0">
                          <svg viewBox="0 0 24 24" fill="currentColor" class="w-3.5 h-3.5">
                            <path d="M16.365 1.43c0 1.14-.493 2.27-1.177 3.08-.744.9-1.99 1.57-2.987 1.57-.12 0-.23-.02-.3-.03-.01-.06-.04-.22-.04-.39 0-1.15.572-2.27 1.206-2.98.804-.94 2.142-1.64 3.248-1.68.03.13.05.28.05.43zm4.565 15.71c-.03.07-.463 1.58-1.518 3.12-.945 1.34-1.94 2.71-3.43 2.71-1.517 0-1.9-.88-3.63-.88-1.698 0-2.302.91-3.67.91-1.377 0-2.332-1.26-3.428-2.8-1.287-1.82-2.323-4.63-2.323-7.28 0-4.28 2.797-6.55 5.552-6.55 1.448 0 2.675.95 3.6.95.865 0 2.222-1.01 3.902-1.01.613 0 2.886.06 4.374 2.19-.13.09-2.383 1.37-2.383 4.19 0 3.26 2.854 4.42 2.955 4.45z"/>
                          </svg>
                        </span>
                        Apple Wallet
                        <span class="absolute -top-1.5 -right-1.5 w-4 h-4 rounded-full bg-primary text-white items-center justify-center ring-2 ring-white hidden group-has-[:checked]:flex">
                          <span class="material-symbols-outlined text-[11px] font-bold">check</span>
                        </span>
                      </span>
                    </label>
                    <!-- Google Wallet -->
                    <label class="cursor-pointer group">
                      <input type="radio" name="wallet" value="google" class="peer sr-only">
                      <span class="relative flex items-center gap-2 rounded-lg border border-outline-variant bg-white pl-2 pr-3.5 py-1.5 text-label-md font-bold text-on-surface transition-all hover:border-primary/40 peer-checked:border-primary peer-checked:bg-primary/[0.05]">
                        <span class="w-5 h-5 rounded-md bg-white border border-outline-variant/60 flex items-center justify-center shrink-0">
                          <svg viewBox="0 0 24 24" class="w-4 h-4">
                            <rect x="2.5"   y="2"   width="19" height="20"   rx="2.5" fill="#34A853"/>
                            <rect x="2.5"   y="4"   width="19" height="18"   rx="2.5" fill="#FBBC05"/>
                            <rect x="2.5" y="6.5" width="19" height="15.5" rx="2.5" fill="#EA4335"/>
                            <path d="M2 12.2 C 5.5 10.2 8.5 13.8 12 14 C 15.5 14.2 18.5 10.5 22 10.8 L 22 19.5 Q 22 22 19.5 22 L 4.5 22 Q 2 22 2 19.5 Z" fill="#4285F4"/>
                          </svg>
                        </span>
                        Google Wallet
                        <span class="absolute -top-1.5 -right-1.5 w-4 h-4 rounded-full bg-primary text-white items-center justify-center ring-2 ring-white hidden group-has-[:checked]:flex">
                          <span class="material-symbols-outlined text-[11px] font-bold">check</span>
                        </span>
                      </span>
                    </label>
                  </div>
                </div>

                <!-- Filters builder (inner section) -->
                <div class="border-t border-outline-variant/70 bg-white">
                  <div class="flex items-center justify-between px-6 py-3.5">
                    <div class="flex items-center gap-2">
                      <span class="material-symbols-outlined text-[18px] text-primary">filter_list</span>
                      <span class="text-label-md font-bold uppercase tracking-wider text-outline">Filters</span>
                      <span data-filter-count class="inline-flex items-center justify-center min-w-[1.5rem] h-6 px-1.5 rounded-full bg-primary/10 text-primary text-label-sm font-bold">0</span>
                    </div>
                    <button type="button" data-clear-filters class="inline-flex items-center gap-1 text-label-md font-bold text-red-500 hover:text-red-600 transition-colors">
                      <span class="material-symbols-outlined text-[18px]">close</span> Clear all
                    </button>
                  </div>
                  <div class="px-6 pb-6">
                    <div data-filter-rows class="space-y-3"></div>
                    <button type="button" data-add-filter class="mt-4 w-full flex items-center justify-center gap-1.5 rounded-xl border-2 border-dashed border-outline-variant bg-white/60 text-primary text-label-md font-bold py-3 hover:border-primary/50 hover:bg-primary/[0.04] transition-colors">
                      <span class="material-symbols-outlined text-[18px]">add_circle</span> Add Filter
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Footer actions -->
            <div class="flex justify-end mt-8">
              <button type="button" data-next class="inline-flex items-center gap-2 bg-primary text-white px-7 py-2.5 rounded-lg text-[14px] font-bold hover:bg-primary/90 transition-all shadow-sm shadow-primary/20">
                Next
                <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
              </button>
            </div>
          </div>

          <!-- Step 2: Send Notification -->
          <div data-step-panel="2" class="hidden">
            <?php
              $appleCount  = (int) $template['apple'];
              $googleCount = (int) $template['google'];
              $totalCount  = $appleCount + $googleCount;
            ?>
            <!-- Intro banner -->
            <div class="flex items-start gap-3 bg-gradient-to-r from-blue-50 to-indigo-50/40 border border-primary/15 rounded-xl p-4 mb-6">
              <span class="w-9 h-9 rounded-lg bg-primary text-white flex items-center justify-center shrink-0">
                <span class="material-symbols-outlined text-[20px]">info</span>
              </span>
              <p class="text-body-md text-gray-500 leading-relaxed self-center">Compose and send a push notification to all users who have this pass installed on their devices. The message will be delivered instantly to both Google Wallet and Apple Wallet users.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-[1fr_360px] gap-8 items-start">
              <!-- Left: composer -->
              <div class="space-y-6">
                <!-- Target Audience -->
                <div class="rounded-2xl border border-outline-variant hover:border-primary/50 bg-white overflow-hidden">
                  <div class="flex items-center justify-between px-5 py-3.5 border-b border-outline-variant bg-white">
                    <div class="flex items-center gap-2">
                      <span class="material-symbols-outlined text-[20px] text-primary">groups</span>
                      <span class="text-body-md font-bold text-on-surface">Target Audience</span>
                    </div>
                    <span class="inline-flex items-center bg-primary/10 text-primary text-label-sm font-bold px-2.5 py-1 rounded-full"><?= $totalCount ?> devices</span>
                  </div>
                  <div class="flex flex-wrap items-center gap-3 px-5 py-4">
                    <span class="inline-flex items-center gap-2 bg-white border border-outline-variant rounded-lg pl-2 pr-3.5 py-1.5">
                      <span class="w-6 h-6 rounded-md bg-on-surface text-white flex items-center justify-center shrink-0">
                        <svg viewBox="0 0 24 24" fill="currentColor" class="w-3.5 h-3.5"><path d="M16.365 1.43c0 1.14-.493 2.27-1.177 3.08-.744.9-1.99 1.57-2.987 1.57-.12 0-.23-.02-.3-.03-.01-.06-.04-.22-.04-.39 0-1.15.572-2.27 1.206-2.98.804-.94 2.142-1.64 3.248-1.68.03.13.05.28.05.43zm4.565 15.71c-.03.07-.463 1.58-1.518 3.12-.945 1.34-1.94 2.71-3.43 2.71-1.517 0-1.9-.88-3.63-.88-1.698 0-2.302.91-3.67.91-1.377 0-2.332-1.26-3.428-2.8-1.287-1.82-2.323-4.63-2.323-7.28 0-4.28 2.797-6.55 5.552-6.55 1.448 0 2.675.95 3.6.95.865 0 2.222-1.01 3.902-1.01.613 0 2.886.06 4.374 2.19-.13.09-2.383 1.37-2.383 4.19 0 3.26 2.854 4.42 2.955 4.45z"/></svg>
                      </span>
                      <span class="text-body-md font-bold text-on-surface"><?= $appleCount ?></span>
                    </span>
                    <span class="inline-flex items-center gap-2 bg-white border border-outline-variant rounded-lg pl-2 pr-3.5 py-1.5">
                      <span class="w-6 h-6 rounded-md bg-white border border-outline-variant/60 flex items-center justify-center shrink-0">
                        <svg viewBox="0 0 24 24" class="w-4 h-4"><rect x="2.5" y="2" width="19" height="20" rx="2.5" fill="#34A853"/><rect x="2.5" y="4" width="19" height="18" rx="2.5" fill="#FBBC05"/><rect x="2.5" y="6.5" width="19" height="15.5" rx="2.5" fill="#EA4335"/><path d="M2 12.2 C 5.5 10.2 8.5 13.8 12 14 C 15.5 14.2 18.5 10.5 22 10.8 L 22 19.5 Q 22 22 19.5 22 L 4.5 22 Q 2 22 2 19.5 Z" fill="#4285F4"/></svg>
                      </span>
                      <span class="text-body-md font-bold text-on-surface"><?= $googleCount ?></span>
                    </span>
                  </div>
                </div>

                <!-- Notification Details -->
                <div class="rounded-2xl border border-outline-variant hover:border-primary/50 bg-white overflow-hidden">
                  <div class="flex items-center gap-2 px-5 py-3.5 border-b border-outline-variant bg-white">
                    <span class="material-symbols-outlined text-[20px] text-primary">notifications_active</span>
                    <span class="text-body-md font-bold text-on-surface">Notification Details</span>
                  </div>
                  <div class="p-5 space-y-5">
                    <!-- Title -->
                    <div>
                      <div class="flex items-center justify-between mb-1.5">
                        <label class="text-label-md font-bold text-on-surface">Title:<span class="text-red-500">*</span></label>
                        <span class="flex items-center gap-1.5">
                          <span class="text-[11px] font-bold px-2 py-0.5 rounded-full bg-surface-container-high text-outline">Apple: ignored</span>
                          <span class="text-[11px] font-bold px-2 py-0.5 rounded-full bg-emerald-50 text-emerald-600">Google: shown</span>
                        </span>
                      </div>
                      <input data-field="title" type="text" maxlength="65" placeholder="Enter notification title" class="w-full placeholder:text-slate-400 bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                      <p class="flex items-center gap-1 text-label-sm text-gray-400 mt-1.5">
                        <span class="material-symbols-outlined text-[14px]">info</span>
                        This title is not used for Apple Pass. It will only appear in the background field on Android devices.
                      </p>
                    </div>
                    <!-- Message -->
                    <div>
                      <label class="block text-label-md font-bold text-on-surface mb-1.5">Message:<span class="text-red-500">*</span></label>
                      <div class="relative">
                        <textarea data-field="body" rows="4" maxlength="178" placeholder="Enter your notification message here…" class="w-full placeholder:text-slate-400 bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all resize-none"></textarea>
                        <span class="absolute bottom-2.5 right-2.5 text-[11px] font-bold px-2 py-0.5 rounded-full bg-amber-100 text-amber-700"><span data-count="body">0</span>/178</span>
                      </div>
                      <p class="flex items-center gap-1 text-label-sm text-gray-400 mt-1.5">
                        <span class="material-symbols-outlined text-[14px]">info</span>
                        The message field is used as the notification title on Apple and as the back field on Android.
                      </p>
                    </div>
                    <!-- Delivery scope -->
                    <div class="flex items-start gap-3 rounded-xl bg-white border border-primary/15 p-4">
                      <span class="w-9 h-9 rounded-lg bg-primary/10 text-primary flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-[20px]">send</span>
                      </span>
                      <div class="min-w-0">
                        <p class="text-body-md font-bold text-on-surface">Delivery Scope</p>
                        <p class="text-label-md text-gray-400 mt-0.5">This notification will be sent to <span class="font-bold text-on-surface"><?= $totalCount ?></span> users — <?= $appleCount ?> on Apple Wallet and <?= $googleCount ?> on Google Wallet. It will be delivered instantly to all devices.</p>
                        <div class="flex flex-wrap items-center gap-2 mt-3">
                          <span class="inline-flex items-center gap-1.5 bg-white border border-outline-variant rounded-full px-2.5 py-1 text-label-sm font-bold text-gray-600"><span class="material-symbols-outlined text-[15px] text-emerald-600">check_circle</span> <?= $totalCount ?> Installed Passes</span>
                          <span class="inline-flex items-center gap-1.5 bg-white border border-outline-variant rounded-full px-2.5 py-1 text-label-sm font-bold text-gray-600"><span class="material-symbols-outlined text-[15px] text-emerald-600">check_circle</span> Apple &amp; Google Wallet</span>
                          <span class="inline-flex items-center gap-1.5 bg-white border border-outline-variant rounded-full px-2.5 py-1 text-label-sm font-bold text-gray-600"><span class="material-symbols-outlined text-[15px] text-emerald-600">check_circle</span> Immediate Delivery</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Delivery Type -->
                <div class="rounded-2xl border border-outline-variant hover:border-primary/50 bg-white overflow-hidden">
                  <div class="flex items-center gap-2 px-5 py-3.5 border-b border-outline-variant bg-white">
                    <span class="material-symbols-outlined text-[20px] text-primary">schedule</span>
                    <span class="text-body-md font-bold text-on-surface">Delivery Type</span>
                  </div>
                  <div class="p-5">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                      <label class="group relative cursor-pointer rounded-xl border-2 border-outline-variant bg-white p-4 flex items-start gap-3 transition-all has-[:checked]:border-primary has-[:checked]:bg-primary/[0.04]">
                        <input type="radio" name="delivery" value="now" class="peer sr-only" checked>
                        <span class="w-5 h-5 mt-0.5 rounded-full border-2 border-outline-variant flex items-center justify-center shrink-0 transition-colors group-has-[:checked]:border-primary">
                          <span class="w-2.5 h-2.5 rounded-full bg-primary scale-0 transition-transform group-has-[:checked]:scale-100"></span>
                        </span>
                        <span class="min-w-0">
                          <span class="flex items-center gap-1.5 text-body-md font-bold text-on-surface group-has-[:checked]:text-primary">
                            Send Now
                          </span>
                          <span class="block text-label-sm text-gray-400 mt-0.5">The notification will be sent immediately to all targeted devices.</span>
                        </span>
                      </label>
                      <label class="group relative cursor-pointer rounded-xl border-2 border-outline-variant bg-white p-4 flex items-start gap-3 transition-all has-[:checked]:border-primary has-[:checked]:bg-primary/[0.04]">
                        <input type="radio" name="delivery" value="later" class="peer sr-only">
                        <span class="w-5 h-5 mt-0.5 rounded-full border-2 border-outline-variant flex items-center justify-center shrink-0 transition-colors group-has-[:checked]:border-primary">
                          <span class="w-2.5 h-2.5 rounded-full bg-primary scale-0 transition-transform group-has-[:checked]:scale-100"></span>
                        </span>
                        <span class="min-w-0">
                          <span class="flex items-center gap-1.5 text-body-md font-bold text-on-surface group-has-[:checked]:text-primary">
                            Schedule
                          </span>
                          <span class="block text-label-sm text-gray-400 mt-0.5">The notification will be queued and sent at the scheduled date and time.</span>
                        </span>
                      </label>
                    </div>

                    <!-- Schedule date/time (revealed when "Schedule" is selected) -->
                    <div data-schedule-panel class="hidden mt-4 rounded-xl border border-primary/15 bg-white p-4">
                      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                          <label class="block text-label-md font-bold text-on-surface mb-1.5">Date:<span class="text-red-500">*</span></label>
                          <div class="relative">
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-primary text-[20px] pointer-events-none z-10">calendar_month</span>
                            <input type="text" data-field="schedule-date" placeholder="dd-mm-yyyy" readonly class="w-full placeholder:text-slate-400 bg-surface-container-low border-outline-variant rounded-lg py-3 pl-10 px-4 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all cursor-pointer">
                          </div>
                        </div>
                        <div>
                          <label class="block text-label-md font-bold text-on-surface mb-1.5">Time:<span class="text-red-500">*</span></label>
                          <select data-field="schedule-time" disabled class="w-full js-select2 cursor-not-allowed" data-placeholder="Select date first">
                            <option></option>
                            <?php for ($m = 0; $m < 24 * 60; $m += 30): $t = sprintf('%02d:%02d', intdiv($m, 60), $m % 60); ?>
                              <option value="<?= $t ?>"><?= $t ?></option>
                            <?php endfor; ?>
                          </select>
                        </div>
                      </div>
                      <p class="flex items-center gap-1.5 text-label-sm text-gray-500 mt-3">
                        <span class="material-symbols-outlined text-[15px]">public</span>
                        Timezone: <span class="font-bold text-on-surface"><?= (function () { $o = (int) (date('Z') / 60); $s = $o < 0 ? '-' : '+'; $o = abs($o); return sprintf('(GMT%s%02d:%02d) %s', $s, intdiv($o, 60), $o % 60, date('T')); })() ?></span>
                      </p>
                      <p class="flex items-center gap-1 text-label-sm text-gray-400 mt-1.5">
                        <span class="material-symbols-outlined text-[14px]">info</span>
                        Please select a future date and time. Past dates are not allowed.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Right: live preview -->
              <div class="lg:sticky lg:top-6">
                <p class="text-center text-body-md font-bold text-on-surface mb-5">Live Preview</p>
                <!-- platform tabs -->
                <div class="flex items-center justify-center gap-2 mb-4">
                  <button type="button" data-preview-tab="apple" class="preview-tab inline-flex items-center gap-1.5 text-label-sm font-bold px-3 py-1.5 rounded-full border transition-colors bg-primary text-white border-primary">
                    <svg viewBox="0 0 24 24" fill="currentColor" class="w-3.5 h-3.5"><path d="M16.365 1.43c0 1.14-.493 2.27-1.177 3.08-.744.9-1.99 1.57-2.987 1.57-.12 0-.23-.02-.3-.03-.01-.06-.04-.22-.04-.39 0-1.15.572-2.27 1.206-2.98.804-.94 2.142-1.64 3.248-1.68.03.13.05.28.05.43zm4.565 15.71c-.03.07-.463 1.58-1.518 3.12-.945 1.34-1.94 2.71-3.43 2.71-1.517 0-1.9-.88-3.63-.88-1.698 0-2.302.91-3.67.91-1.377 0-2.332-1.26-3.428-2.8-1.287-1.82-2.323-4.63-2.323-7.28 0-4.28 2.797-6.55 5.552-6.55 1.448 0 2.675.95 3.6.95.865 0 2.222-1.01 3.902-1.01.613 0 2.886.06 4.374 2.19-.13.09-2.383 1.37-2.383 4.19 0 3.26 2.854 4.42 2.955 4.45z"/></svg>
                    Apple
                  </button>
                  <button type="button" data-preview-tab="google" class="preview-tab inline-flex items-center gap-1.5 text-label-sm font-bold px-3 py-1.5 rounded-full border transition-colors bg-white text-outline border-outline-variant">
                    <svg viewBox="0 0 24 24" class="w-3.5 h-3.5"><rect x="2.5" y="2" width="19" height="20" rx="2.5" fill="#34A853"/><rect x="2.5" y="4" width="19" height="18" rx="2.5" fill="#FBBC05"/><rect x="2.5" y="6.5" width="19" height="15.5" rx="2.5" fill="#EA4335"/><path d="M2 12.2 C 5.5 10.2 8.5 13.8 12 14 C 15.5 14.2 18.5 10.5 22 10.8 L 22 19.5 Q 22 22 19.5 22 L 4.5 22 Q 2 22 2 19.5 Z" fill="#4285F4"/></svg>
                    Google
                  </button>
                </div>

                <!-- Apple preview -->
                <div data-preview-device="apple" class="relative mx-auto w-full max-w-[280px]">
                  <img src="preview.jpg" alt="Apple lock screen preview" class="w-full block">
                  <!-- live notification overlay -->
                  <div class="absolute inset-x-0 top-[35%] p-2 mx-2">
                    <div class="backdrop-blur-xl rounded-md p-3 shadow-lg ring-1 ring-white/20" style="background: rgba(255, 255, 255, 0.4);">
                      <div class="flex items-center gap-2.5">
                        <span class="w-9 h-9 rounded-lg bg-white flex items-center justify-center overflow-hidden shrink-0 shadow-sm">
                          <img src="icon.png" alt="" class="w-full h-full object-contain">
                        </span>
                        <div class="min-w-0 flex-1">
                          <div class="flex items-center gap-2">
                            <span class="text-[13px] font-bold text-white truncate"><?= htmlspecialchars($template['name']) ?></span>
                            <span class="ml-auto text-[10px] text-white shrink-0">now</span>
                          </div>
                          <p data-preview="body" class="text-[12px] italic text-gray-400 leading-snug break-words">Your notification message</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Android preview -->
                <div data-preview-device="google" class="relative mx-auto w-full max-w-[280px] hidden">
                  <img src="push-notification-android.jpg" alt="Android lock screen preview" class="w-full block">
                  <!-- live notification overlay -->
                  <div class="absolute inset-x-0 top-[61%] px-[8%]">
                    <div class="rounded-2xl p-3 shadow-xl bg-white">
                      <div class="flex items-center gap-2 mb-1.5">
                        <span class="w-5 h-5 rounded-full bg-white border border-gray-200 flex items-center justify-center overflow-hidden shrink-0">
                          <svg viewBox="0 0 24 24" class="w-3.5 h-3.5"><rect x="2.5" y="2" width="19" height="20" rx="2.5" fill="#34A853"/><rect x="2.5" y="4" width="19" height="18" rx="2.5" fill="#FBBC05"/><rect x="2.5" y="6.5" width="19" height="15.5" rx="2.5" fill="#EA4335"/><path d="M2 12.2 C 5.5 10.2 8.5 13.8 12 14 C 15.5 14.2 18.5 10.5 22 10.8 L 22 19.5 Q 22 22 19.5 22 L 4.5 22 Q 2 22 2 19.5 Z" fill="#4285F4"/></svg>
                        </span>
                        <span class="text-[11px] font-semibold text-gray-700">Google Wallet</span>
                        <span class="text-[10px] text-gray-400">• now</span>
                      </div>
                      <div class="flex items-center justify-between gap-2">
                        <div class="min-w-0 flex-1">
                          <p data-preview="title" class="text-[13px] font-bold text-gray-900 leading-snug break-words opacity-60">Notification title</p>
                          <p data-preview="body" class="text-[12px] text-gray-600 leading-snug mt-0.5 break-words opacity-60">Your message preview will appear here as you type.</p>
                        </div>
                        <img src="favicon-new.png" alt="" class="w-10 h-10 rounded-lg object-contain shrink-0">
                      </div>
                      <div class="border-t border-gray-100 mt-2 pt-1.5">
                        <span class="text-[12px] font-medium text-red-500">Notification settings</span>
                      </div>
                    </div>
                  </div>
                </div>
                <p class="flex items-center justify-center gap-1.5 text-label-sm text-outline mt-3">
                  <span class="material-symbols-outlined text-[15px]">visibility</span>
                  Preview updates in real-time as you type
                </p>
              </div>
            </div>

            <!-- Footer actions -->
            <div class="flex justify-between items-center mt-8 pt-6 border-t border-outline-variant/60">
              <button type="button" data-back class="inline-flex items-center gap-2 bg-white border border-outline-variant text-on-surface px-6 py-2.5 rounded-lg text-[14px] font-bold hover:bg-surface-container-low transition-all">
                <span class="material-symbols-outlined text-[18px]">arrow_back</span>
                Back
              </button>
              <button type="button" class="inline-flex items-center gap-2 bg-primary text-white px-7 py-2.5 rounded-lg text-[14px] font-bold hover:bg-primary/90 transition-all shadow-sm shadow-primary/20">
                <span class="material-symbols-outlined text-[20px]">send</span>
                Send Now
              </button>
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
      var panels = document.querySelectorAll('[data-step-panel]');
      var indicators = document.querySelectorAll('[data-step-indicator]');
      var line = document.querySelector('.step-line');

      var TOTAL = indicators.length;

      // State-driven class sets for each element of a step (circular indicator)
      var CARD = {
        active:    '',
        completed: '',
        upcoming:  ''
      };
      var DOT = {
        active:    'bg-primary text-white border-2 border-transparent ring-4 ring-primary/15',
        completed: 'bg-primary text-white border-2 border-transparent ring-4 ring-primary/10',
        upcoming:  'bg-white text-outline border-2 border-outline-variant ring-0 ring-transparent'
      };
      var EYEBROW = { active: 'text-primary',    completed: 'text-primary',    upcoming: 'text-outline' };
      var LABEL   = { active: 'text-on-surface', completed: 'text-on-surface', upcoming: 'text-outline' };

      function applyState(el, map, state) {
        Object.keys(map).forEach(function (k) {
          map[k].split(' ').forEach(function (c) { if (c) el.classList.remove(c); });
        });
        map[state].split(' ').forEach(function (c) { if (c) el.classList.add(c); });
      }

      function setStep(n) {
        panels.forEach(function (p) {
          p.classList.toggle('hidden', p.getAttribute('data-step-panel') !== String(n));
        });
        indicators.forEach(function (card) {
          var step = parseInt(card.getAttribute('data-step-indicator'), 10);
          var dot = card.querySelector('.step-dot');
          var num = card.querySelector('.step-num');
          var check = card.querySelector('.step-check');
          var eyebrow = card.querySelector('.step-eyebrow');
          var label = card.querySelector('.step-label');
          var completed = step < n;
          var state = completed ? 'completed' : (step === n ? 'active' : 'upcoming');

          applyState(card, CARD, state);
          applyState(dot, DOT, state);
          applyState(eyebrow, EYEBROW, state);
          applyState(label, LABEL, state);

          // Number while pending/active, checkmark once completed
          num.classList.toggle('hidden', completed);
          check.classList.toggle('hidden', !completed);
        });
        if (line) {
          var pct = TOTAL > 1 ? ((n - 1) / (TOTAL - 1)) * 100 : 0;
          line.style.width = pct + '%';
        }
        window.scrollTo({ top: 0, behavior: 'smooth' });
      }

      // Initialise to step 1
      setStep(1);

      var nextBtn = document.querySelector('[data-next]');
      var backBtn = document.querySelector('[data-back]');
      if (nextBtn) nextBtn.addEventListener('click', function () { setStep(2); });
      if (backBtn) backBtn.addEventListener('click', function () { setStep(1); });
    })();
  </script>
  <script>
    // Step 1: reveal segmentation filter panel only when "With Segmentation" is chosen
    (function () {
      var panel = document.querySelector('[data-segment-panel]');
      if (!panel) return;
      document.querySelectorAll('input[name="audience"]').forEach(function (radio) {
        radio.addEventListener('change', function () {
          panel.classList.toggle('hidden', this.value !== 'segment');
        });
      });
    })();

    // Step 1: segmentation filter builder (add / remove / clear rows)
    (function () {
      var panel = document.querySelector('[data-segment-panel]');
      if (!panel) return;
      var rowsWrap = panel.querySelector('[data-filter-rows]');
      var addBtn = panel.querySelector('[data-add-filter]');
      var clearBtn = panel.querySelector('[data-clear-filters]');
      var countEl = panel.querySelector('[data-filter-count]');

      var FIELD_GROUPS = [
        { label: 'Pass Activity', items: ['Installed Date', 'Updated Date', 'Expiry Date', 'Active Pass', 'Fresh Device'] },
        { label: 'Gift Card', items: ['Balance', 'Unused Balance'] }
      ];
      var OPS = ['Select operator…', 'is', 'is not', 'contains', 'before', 'after'];

      function plainOpts(arr) {
        return arr.map(function (o, i) {
          return '<option' + (i === 0 ? ' value="" disabled selected' : '') + '>' + o + '</option>';
        }).join('');
      }

      function fieldOpts() {
        var html = '<option value="" disabled selected>Select field…</option>';
        FIELD_GROUPS.forEach(function (g) {
          html += '<optgroup label="' + g.label + '">' +
            g.items.map(function (o) { return '<option>' + o + '</option>'; }).join('') +
            '</optgroup>';
        });
        return html;
      }

      function selectHTML(inner, extra) {
        return '<div class="relative flex-1">' +
          '<select class="w-full appearance-none bg-white border border-outline-variant rounded-lg pl-3.5 pr-9 py-2.5 text-body-md text-on-surface focus:border-primary focus:ring-2 focus:ring-primary/20 focus:outline-none transition-all ' + (extra || '') + '">' + inner + '</select>' +
          '<span class="material-symbols-outlined text-[20px] text-outline absolute right-2.5 top-1/2 -translate-y-1/2 pointer-events-none">expand_more</span>' +
          '</div>';
      }

      function rowHTML() {
        return '<div class="filter-row flex items-center gap-3">' +
          '<div class="conj w-20 shrink-0"></div>' +
          selectHTML(fieldOpts(), 'bg-white text-outline') +
          selectHTML(plainOpts(OPS), 'bg-surface-container-low text-outline') +
          '<button type="button" data-remove-row class="w-9 h-9 shrink-0 rounded-full border border-outline-variant text-red-500 flex items-center justify-center hover:bg-red-50 hover:border-red-200 transition-colors"><span class="material-symbols-outlined text-[18px]">close</span></button>' +
          '</div>';
      }

      function refresh() {
        var rows = rowsWrap.querySelectorAll('.filter-row');
        rows.forEach(function (row, i) {
          var conj = row.querySelector('.conj');
          if (i === 0) {
            conj.innerHTML = '<span class="inline-flex items-center justify-center w-full text-label-md font-bold text-outline">Where</span>';
          } else {
            conj.innerHTML = '<div class="relative">' +
              '<select class="w-full appearance-none bg-surface-container-high border border-outline-variant rounded-lg pl-3 pr-7 py-2 text-label-md font-bold text-on-surface focus:outline-none focus:border-primary"><option>AND</option><option>OR</option></select>' +
              '</div>';
          }
        });
        countEl.textContent = rows.length;
      }

      function addRow() {
        rowsWrap.insertAdjacentHTML('beforeend', rowHTML());
        refresh();
      }

      rowsWrap.addEventListener('click', function (e) {
        var btn = e.target.closest('[data-remove-row]');
        if (btn) { btn.closest('.filter-row').remove(); refresh(); }
      });

      // Field & operator selects: muted placeholder, dark text once a real value is chosen
      rowsWrap.addEventListener('change', function (e) {
        var sel = e.target.closest('.filter-row select');
        if (!sel) return;
        var chosen = !!sel.value;
        sel.classList.toggle('text-outline', !chosen);
        sel.classList.toggle('text-on-surface', chosen);
      });
      if (addBtn) addBtn.addEventListener('click', addRow);
      if (clearBtn) clearBtn.addEventListener('click', function () {
        rowsWrap.innerHTML = '';
        addRow();
      });

      // Seed two starter rows to match the default state
      addRow();
      addRow();
    })();

    // Step 2: live notification preview + character counters
    (function () {
      var titleField = document.querySelector('[data-field="title"]');
      var bodyField = document.querySelector('[data-field="body"]');
      var titlePreviews = document.querySelectorAll('[data-preview="title"]');
      var bodyPreviews = document.querySelectorAll('[data-preview="body"]');
      var titleCount = document.querySelector('[data-count="title"]');
      var bodyCount = document.querySelector('[data-count="body"]');
      var TITLE_PLACEHOLDER = 'Notification title';
      var BODY_PLACEHOLDER = 'Your notification message';

      function sync() {
        if (!titleField || !bodyField) return;
        var t = titleField.value.trim();
        var b = bodyField.value.trim();
        titlePreviews.forEach(function (el) {
          el.textContent = t || TITLE_PLACEHOLDER;
          el.classList.toggle('opacity-60', !t);
        });
        bodyPreviews.forEach(function (el) {
          el.textContent = b || BODY_PLACEHOLDER;
          el.classList.toggle('opacity-60', !b);
        });
        if (titleCount) titleCount.textContent = titleField.value.length;
        if (bodyCount) bodyCount.textContent = bodyField.value.length;
      }

      if (titleField && bodyField) {
        titleField.addEventListener('input', sync);
        bodyField.addEventListener('input', sync);
        sync();
      }
    })();

    // Step 2: switch Apple / Android preview via platform tabs
    (function () {
      var tabs = document.querySelectorAll('[data-preview-tab]');
      var devices = document.querySelectorAll('[data-preview-device]');
      if (!tabs.length) return;

      function activate(name) {
        devices.forEach(function (d) {
          d.classList.toggle('hidden', d.getAttribute('data-preview-device') !== name);
        });
        tabs.forEach(function (t) {
          var on = t.getAttribute('data-preview-tab') === name;
          t.classList.toggle('bg-primary', on);
          t.classList.toggle('text-white', on);
          t.classList.toggle('border-primary', on);
          t.classList.toggle('bg-white', !on);
          t.classList.toggle('text-outline', !on);
          t.classList.toggle('border-outline-variant', !on);
        });
      }

      tabs.forEach(function (t) {
        t.addEventListener('click', function () { activate(t.getAttribute('data-preview-tab')); });
      });
    })();

    // Step 2: reveal date/time fields only when "Schedule" is selected
    (function () {
      var panel = document.querySelector('[data-schedule-panel]');
      var radios = document.querySelectorAll('input[name="delivery"]');
      if (!panel || !radios.length) return;

      // Time stays disabled until a date is chosen; the date picker enables it.
      var dateEl = panel.querySelector('[data-field="schedule-date"]');
      var timeEl = panel.querySelector('[data-field="schedule-time"]');

      function setTimeEnabled(enabled) {
        if (!timeEl) return;
        timeEl.disabled = !enabled;
        if (window.jQuery) {
          window.jQuery(timeEl)
            .attr('data-placeholder', enabled ? 'Select time' : 'Select date first')
            .prop('disabled', !enabled)
            .trigger('change.select2');
        }
      }

      if (typeof flatpickr !== 'undefined' && dateEl) {
        flatpickr(dateEl, {
          dateFormat: 'd-m-Y',
          minDate: 'today',
          monthSelectorType: 'static',
          disableMobile: true,
          onChange: function (dates) { setTimeEnabled(dates.length > 0); }
        });
      }

      function sync() {
        var later = document.querySelector('input[name="delivery"]:checked');
        panel.classList.toggle('hidden', !later || later.value !== 'later');
      }

      radios.forEach(function (r) { r.addEventListener('change', sync); });
      sync();
    })();
  </script>
</body>
 
</html>