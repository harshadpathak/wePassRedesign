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
      $cityConfigEnabled = true;
      $cities = [
        ['name' => 'Rajkot', 'stores' => ['Gary Byrd', 'Jenil Vora']],
      ];
      // Stores available for the Add City modal
      $stores = [
        ['name' => 'Aatman Infotech', 'city' => 'Rajkot, India', 'logo' => 'Aatman Logo.png'],
        ['name' => 'Apple Store',     'city' => 'Rajkot, India', 'logo' => 'Apple_logo_grey.png'],
      ];
    ?>
    <!-- Canvas -->
    <section class="p-margin-desktop space-y-stack-lg pb-16">
      <!-- Breadcrumbs and Header -->
      <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div class="space-y-1">
          <nav class="flex items-center gap-2 text-label-sm text-outline mb-1">
            <span class="material-symbols-outlined text-[14px] text-gray">home</span> <span class="text-gray font-normal">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray font-normal">Pass Templates</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray-500 font-normal">GEO Location Settings</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">GEO Location Settings</h2>
        </div>
          <a href="PassTemplates.php"
            class="inline-flex self-start sm:self-auto items-center gap-2 bg-white border border-outline-variant/50 text-on-surface px-6 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold shadow-sm">
            <span class="material-symbols-outlined text-[18px]">arrow_back</span>
            Back
          </a>        
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

      <!-- City Configuration -->
      <div class="relative bg-white border border-outline-variant rounded-2xl shadow-sm overflow-hidden">
        <!-- Decorative accent -->
        <div class="relative flex flex-col lg:flex-row lg:items-center justify-between gap-6 p-6">
          <!-- Identity -->
          <div class="flex items-start gap-4">
            <div class="w-14 h-14 rounded-2xl bg-primary/10 text-primary flex items-center justify-center shrink-0">
              <span class="material-symbols-outlined text-[30px]" style="font-variation-settings: 'FILL' 1;">apartment</span>
            </div>
            <div class="space-y-1.5">
              <h3 class="text-title-md font-bold text-on-surface tracking-tight">City Configuration</h3>
              <p class="text-label-md text-gray-400">Restrict pass distribution to specific cities. When enabled, only the cities listed below can issue this template.</p>
            </div>
          </div>
          <!-- Toggle control -->
          <div class="flex items-center justify-center gap-4 shrink-0 lg:justify-start lg:pl-6 lg:border-l border-outline-variant/60">
            <button type="button"
              id="cityConfigToggle"
              role="switch"
              aria-checked="<?= $cityConfigEnabled ? 'true' : 'false' ?>"
              data-enabled="<?= $cityConfigEnabled ? '1' : '0' ?>"
              class="group w-[170px] flex items-center gap-3.5 rounded-2xl border px-4 py-3 transition-all active:scale-[0.99] <?= $cityConfigEnabled
                ? 'bg-emerald-50/60 border-emerald-200 hover:border-emerald-300'
                : 'bg-rose-50/60 border-rose-200 hover:border-rose-300' ?>">
              <!-- Switch track -->
              <span class="js-toggle-track relative inline-flex h-6 w-11 items-center rounded-full transition-colors duration-300 shrink-0 <?= $cityConfigEnabled ? 'bg-emerald-500 shadow-inner shadow-emerald/30' : 'bg-rose-400' ?>">
                <span class="js-toggle-knob absolute left-0.5 h-5 w-5 rounded-full bg-white shadow-md flex items-center justify-center transition-transform duration-300 <?= $cityConfigEnabled ? 'translate-x-5' : 'translate-x-0' ?>">
                  <span class="material-symbols-outlined text-[12px] leading-none <?= $cityConfigEnabled ? 'text-emerald' : 'text-rose-500' ?>"><?= $cityConfigEnabled ? 'check' : 'close' ?></span>
                </span>
              </span>
              <!-- Label -->
              <span class="text-left leading-tight">
                <span class="js-toggle-title block text-[14px] font-bold <?= $cityConfigEnabled ? 'text-emerald-700' : 'text-rose-700' ?>"><?= $cityConfigEnabled ? 'Enabled' : 'Disabled' ?></span>
                <span class="js-toggle-sub block text-label-sm font-medium text-outline"><?= $cityConfigEnabled ? 'Tap to disable' : 'Tap to enable' ?></span>
              </span>
            </button>
          </div>
        </div>
      </div>

      <!-- Cities -->
      <div class="bg-white border border-outline-variant rounded-2xl shadow-sm overflow-hidden [&:has(.js-menu-panel:not(.hidden))]:overflow-visible">
        <!-- Card header -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 px-6 py-5 border-b border-outline-variant/60">
          <div class="flex items-center gap-3">
            <span class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0">
              <span class="material-symbols-outlined text-[22px]">map</span>
            </span>
            <div>
              <h3 class="text-title-md font-bold text-on-surface tracking-tight">Cities</h3>
              <p class="text-label-md text-gray-400"><?= count($cities) ?> <?= count($cities) === 1 ? 'city' : 'cities' ?> configured</p>
            </div>
          </div>
          <button type="button" data-modal-target="#modal-add-city"
            class="flex items-center justify-center gap-2 bg-brand-gradient text-on-primary px-5 py-2.5 rounded-lg text-[14px] shadow-lg shadow-primary/20 hover:shadow-xl hover:opacity-90 active:scale-[0.98] transition-all font-bold">
            <span class="material-symbols-outlined text-[18px]">add_location_alt</span>
            Add City
          </button>
        </div>
        <!-- Table -->
        <div class="overflow-x-auto [&:has(.js-menu-panel:not(.hidden))]:overflow-visible">
          <table class="responsive-table geo-table w-full text-left border-collapse">
            <thead class="bg-surface-container-low/50">
              <tr>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant w-16">#</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">City</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Stores</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant text-right">Action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-outline-variant/30">
              <?php if (empty($cities)): ?>
              <tr>
                <td colspan="4" class="cell-empty px-6 py-16 text-center">
                  <div class="flex flex-col items-center gap-3 text-outline">
                    <span class="w-14 h-14 rounded-2xl bg-surface-container-high flex items-center justify-center">
                      <span class="material-symbols-outlined text-[28px]">location_off</span>
                    </span>
                    <div>
                      <p class="text-body-md font-bold text-on-surface">No cities configured yet</p>
                      <p class="text-label-md mt-0.5">Add a city to start restricting pass distribution.</p>
                    </div>
                  </div>
                </td>
              </tr>
              <?php else: foreach ($cities as $i => $city): ?>
              <tr class="hover:bg-surface-container-low transition-colors group">
                <!-- Index -->
                <td class="px-6 py-4">
                  <span class="inline-flex items-center justify-center w-8 h-8 rounded-lg bg-surface-container-high text-on-surface-variant text-label-md font-bold group-hover:bg-primary/10 group-hover:text-primary transition-colors"><?= $i + 1 ?></span>
                </td>
                <!-- City -->
                <td class="cell-main px-6 py-4">
                  <div class="flex items-center gap-3.5">
                    <div class="min-w-0">
                      <p class="text-body-md font-bold text-on-surface"><?= htmlspecialchars($city['name']) ?></p>
                      <p class="flex items-center gap-1 text-label-sm text-outline font-medium mt-0.5">
                        <span class="material-symbols-outlined text-[14px]">storefront</span>
                        <?= count($city['stores']) ?> <?= count($city['stores']) === 1 ? 'store' : 'stores' ?>
                      </p>
                    </div>
                  </div>
                </td>
                <!-- Stores -->
                <td class="cell-stack px-6 py-4" data-label="Stores">
                  <div class="flex flex-wrap items-center gap-2">
                    <?php foreach ($city['stores'] as $store): ?>
                    <span class="inline-flex items-center gap-1.5 bg-surface-container-low border border-outline-variant/60 text-on-surface text-label-md font-semibold px-3 py-1.5 rounded-full">
                      <span class="material-symbols-outlined text-[16px] text-primary">storefront</span>
                      <?= htmlspecialchars($store) ?>
                    </span>
                    <?php endforeach; ?>
                  </div>
                </td>
                <!-- Action -->
                <td class="cell-action px-6 py-4 text-right">
                  <div class="relative inline-block js-menu">
                    <button type="button"
                      class="js-menu-toggle material-symbols-outlined text-outline hover:text-primary transition-colors p-1 rounded-lg hover:bg-surface-container-high">
                      more_vert
                    </button>
                    <div class="js-menu-panel hidden absolute right-0 mt-2 w-48 border border-outline-variant/50 rounded-xl shadow-xl transition-all duration-200 z-50 overflow-hidden bg-white">
                      <div class="py-1.5">
                        <a class="flex items-center gap-3 px-4 py-2 text-body-md text-on-surface hover:bg-surface-container-low transition-colors" href="#" data-modal-target="#modal-edit-city">
                          <span class="material-symbols-outlined text-secondary text-[20px]">edit</span>
                          <span class="font-medium">Edit</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <?php endforeach; endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- ===== Add City Modal (Form Modal pattern from components.php) ===== -->
    <div id="modal-add-city" class="js-modal hidden fixed inset-0 z-[100] flex items-center justify-center p-4">
      <div class="js-modal-close absolute inset-0 bg-black/50 backdrop-blur-sm"></div>
      <div class="relative w-full max-w-4xl max-h-[92vh] flex flex-col bg-white rounded-2xl border border-outline-variant shadow-2xl overflow-hidden">
        <!-- Header -->
        <div class="flex items-center justify-between gap-3 px-6 py-5 border-b border-outline-variant/60 shrink-0">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-brand-gradient text-white flex items-center justify-center shrink-0 shadow-md shadow-primary/20">
              <span class="material-symbols-outlined text-[22px]">add_location_alt</span>
            </div>
            <div>
              <h3 class="text-headline-md font-bold text-on-surface">Add City</h3>
              <p class="text-body-md text-gray-400">Select up to 10 stores and set their relevant text.</p>
            </div>
          </div>
          <button type="button" class="js-modal-close w-9 h-9 rounded-lg text-outline hover:bg-surface-container-low hover:text-on-surface flex items-center justify-center transition-all">
            <span class="material-symbols-outlined text-[20px]">close</span>
          </button>
        </div>

        <!-- Body -->
        <div class="p-6 overflow-y-auto">
          <!-- Select City -->
          <div class="space-y-2">
            <label class="text-on-surface font-bold text-label-md">Select City: <span class="text-red-500">*</span></label>
            <select class="w-full js-select2" data-placeholder="Select city" data-allow-clear="false">
              <option value="Rajkot">All Cities</option>
              <option value="Rajkot" selected>Rajkot</option>
              <option value="Ahmedabad">Ahmedabad</option>
              <option value="Surat">Surat</option>
              <option value="Mumbai">Mumbai</option>
              <option value="Delhi">Delhi</option>
            </select>
          </div>

          <!-- Manage Your Store -->
          <p class="text-body-md font-bold text-on-surface mt-6 mb-3">Manage Your Store</p>
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
            <!-- Available Stores -->
            <div class="rounded-xl border border-outline-variant bg-white flex flex-col h-[360px] hover:border-primary/50 transition-colors">
              <div class="flex items-center justify-between gap-3 px-4 py-3 border-b border-outline-variant/60">
                <p class="text-label-md font-bold uppercase tracking-wide text-outline">Available Stores</p>
                <div class="flex items-center gap-1.5">
                  <button type="button" onclick="cityStoresSelectAll()" class="group inline-flex items-center gap-1 text-primary font-bold text-label-md">
                    <span class="material-symbols-outlined text-[16px]">done_all</span>
                    <span class="group-hover:underline">Select all</span>
                  </button>
                  <span class="bg-primary/10 text-primary text-[11px] font-bold px-1.5 py-0.5 rounded-full"><?= count($stores) ?></span>
                </div>
              </div>
              <div class="p-4 pb-2">
                <div class="relative">
                  <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[20px]">search</span>
                  <input type="text" id="cityStoreSearch" onkeyup="cityStoresFilter(this.value)" placeholder="Search by store or city…"
                    class="w-full bg-surface-container-low border-outline-variant rounded-lg pl-11 pr-4 py-2.5 text-body-md text-on-surface placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                </div>
              </div>
              <div id="cityAvailableList" class="flex-1 overflow-y-auto px-4 pb-4 space-y-2">
                <?php foreach ($stores as $i => $s): ?>
                <div data-city-store="<?= $i ?>" data-name="<?= htmlspecialchars($s['name']) ?>" data-city="<?= htmlspecialchars($s['city']) ?>" data-logo="<?= htmlspecialchars($s['logo']) ?>"
                  class="js-city-store-row flex items-center gap-3 rounded-lg border border-outline-variant/60 bg-surface-container-low/30 p-2.5 hover:border-primary/40 transition-colors">
                  <img src="<?= htmlspecialchars($s['logo']) ?>" alt="image" class="w-9 h-9 rounded-lg object-contain bg-white border border-outline-variant/60 p-1 shrink-0">
                  <div class="min-w-0 flex-1">
                    <p class="text-body-md font-medium text-on-surface truncate"><?= htmlspecialchars($s['name']) ?></p>
                    <p class="flex items-center gap-1 text-label-sm text-outline"><span class="material-symbols-outlined text-[14px]">location_on</span><?= htmlspecialchars($s['city']) ?></p>
                  </div>
                  <button type="button" data-add onclick="cityStoreAdd(this)" class="w-8 h-8 rounded-lg bg-primary/10 text-primary hover:bg-primary hover:text-white flex items-center justify-center shrink-0 transition-colors">
                    <span class="material-symbols-outlined text-[20px]">add</span>
                  </button>
                </div>
                <?php endforeach; ?>
                <p id="cityNoAvailable" class="hidden text-center text-label-md text-outline py-6">No stores match your search.</p>
              </div>
            </div>

            <!-- Selected Stores -->
            <div class="rounded-xl border border-outline-variant bg-white flex flex-col h-[360px] hover:border-primary/50 transition-colors">
              <div class="flex items-center justify-between gap-3 px-4 py-3 border-b border-outline-variant/60">
                <p class="text-label-md font-bold uppercase tracking-wide text-outline">Selected Stores <span class="text-red-500">*</span></p>
                <span id="cityStoreCount" class="bg-primary text-white text-[11px] font-bold px-2.5 py-0.5 rounded-full">0 / 10</span>
              </div>
              <div id="citySelectedList" class="flex-1 overflow-y-auto p-4 space-y-2">
                <div id="citySelectedEmpty" class="h-full flex flex-col items-center justify-center text-center px-6">
                  <span class="material-symbols-outlined text-[40px] text-outline-variant">wrong_location</span>
                  <p class="text-body-md font-bold text-on-surface mt-2">No stores selected yet</p>
                  <p class="text-label-md text-gray-400 mt-0.5">Pick stores from the left to add them here.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Footer -->
        <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-outline-variant/60 bg-surface-container-low/30 shrink-0">
          <button type="button" class="js-modal-close flex items-center gap-2 bg-white border border-outline-variant/50 text-on-surface px-6 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold shadow-sm">Cancel</button>
          <button type="button" class="js-modal-close flex items-center gap-2 bg-[#198754] text-white px-5 py-2.5 rounded-lg text-[14px] shadow-lg shadow-[#198754]/20 hover:opacity-95 active:scale-[0.98] transition-all font-bold">
            <span class="material-symbols-outlined text-[18px]">save</span> Save
          </button>
        </div>
      </div>
    </div>

    <!-- ===== Edit City Modal ===== -->
    <div id="modal-edit-city" class="js-modal hidden fixed inset-0 z-[100] flex items-center justify-center p-4">
      <div class="js-modal-close absolute inset-0 bg-black/50 backdrop-blur-sm"></div>
      <div class="relative w-full max-w-4xl max-h-[92vh] flex flex-col bg-white rounded-2xl border border-outline-variant shadow-2xl overflow-hidden">
        <!-- Header -->
        <div class="flex items-center justify-between gap-3 px-6 py-5 border-b border-outline-variant/60 shrink-0">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-brand-gradient text-white flex items-center justify-center shrink-0 shadow-md shadow-primary/20">
              <span class="material-symbols-outlined text-[22px]">location_on</span>
            </div>
            <div>
              <h3 class="text-headline-md font-bold text-on-surface">Edit City</h3>
              <p class="text-label-md text-gray-400">Update the stores linked to Rajkot.</p>
            </div>
          </div>
          <button type="button" class="js-modal-close w-9 h-9 rounded-lg text-outline hover:bg-surface-container-low hover:text-on-surface flex items-center justify-center transition-all">
            <span class="material-symbols-outlined text-[20px]">close</span>
          </button>
        </div>

        <!-- Body -->
        <div class="p-6 overflow-y-auto">
          <!-- Select City (read-only) -->
          <div class="space-y-2">
            <label class="text-on-surface font-bold text-label-md">Select City: <span class="text-red-500">*</span></label>
            <input type="text" value="Rajkot" readonly
              class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md text-gray font-normal cursor-not-allowed focus:outline-none">
          </div>

          <!-- Manage Your Store -->
          <p class="text-body-md font-bold text-on-surface mt-6 mb-3">Manage Your Store</p>
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
            <!-- Available Stores -->
            <div class="rounded-xl border border-outline-variant bg-white flex flex-col h-[360px] hover:border-primary/50 transition-colors">
              <div class="flex items-center justify-between gap-3 px-4 py-3 border-b border-outline-variant/60">
                <p class="text-label-md font-bold uppercase tracking-wide text-outline">Available Stores</p>
                <div class="flex items-center gap-1.5">
                  <button type="button" onclick="editCityStoresSelectAll()" class="group inline-flex items-center gap-1 text-primary font-bold text-label-md">
                    <span class="material-symbols-outlined text-[16px]">done_all</span>
                    <span class="group-hover:underline">Select all</span>
                  </button>
                  <span class="bg-primary/10 text-primary text-[11px] font-bold px-1.5 py-0.5 rounded-full"><?= count($stores) ?></span>
                </div>
              </div>
              <div class="p-4 pb-2">
                <div class="relative">
                  <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[20px]">search</span>
                  <input type="text" id="editCityStoreSearch" onkeyup="editCityStoresFilter(this.value)" placeholder="Search by store or city…"
                    class="w-full bg-surface-container-low border-outline-variant rounded-lg pl-11 pr-4 py-2.5 text-body-md text-on-surface placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                </div>
              </div>
              <div id="editCityAvailableList" class="flex-1 overflow-y-auto px-4 pb-4 space-y-2">
                <?php foreach ($stores as $i => $s): ?>
                <div data-edit-city-store="<?= $i ?>" data-name="<?= htmlspecialchars($s['name']) ?>" data-city="<?= htmlspecialchars($s['city']) ?>" data-logo="<?= htmlspecialchars($s['logo']) ?>"
                  class="js-edit-city-store-row flex items-center gap-3 rounded-lg border border-outline-variant/60 bg-surface-container-low/30 p-2.5 hover:border-primary/40 transition-colors">
                  <img src="<?= htmlspecialchars($s['logo']) ?>" alt="image" class="w-9 h-9 rounded-lg object-contain bg-white border border-outline-variant/60 p-1 shrink-0">
                  <div class="min-w-0 flex-1">
                    <p class="text-body-md font-medium text-on-surface truncate"><?= htmlspecialchars($s['name']) ?></p>
                    <p class="flex items-center gap-1 text-label-sm text-outline"><span class="material-symbols-outlined text-[14px]">location_on</span><?= htmlspecialchars($s['city']) ?></p>
                  </div>
                  <button type="button" data-add onclick="editCityStoreAdd(this)" class="w-8 h-8 rounded-lg bg-primary/10 text-primary hover:bg-primary hover:text-white flex items-center justify-center shrink-0 transition-colors">
                    <span class="material-symbols-outlined text-[20px]">add</span>
                  </button>
                </div>
                <?php endforeach; ?>
                <p id="editCityNoAvailable" class="hidden text-center text-label-md text-outline py-6">No stores match your search.</p>
              </div>
            </div>

            <!-- Selected Stores -->
            <div class="rounded-xl border border-outline-variant bg-white flex flex-col h-[360px] hover:border-primary/50 transition-colors">
              <div class="flex items-center justify-between gap-3 px-4 py-3 border-b border-outline-variant/60">
                <p class="text-label-md font-bold uppercase tracking-wide text-outline">Selected Stores <span class="text-red-500">*</span></p>
                <span id="editCityStoreCount" class="bg-primary text-white text-[11px] font-bold px-2.5 py-0.5 rounded-full">0 / 10</span>
              </div>
              <div id="editCitySelectedList" class="flex-1 overflow-y-auto p-4 space-y-2">
                <div id="editCitySelectedEmpty" class="h-full flex flex-col items-center justify-center text-center px-6">
                  <span class="material-symbols-outlined text-[40px] text-outline-variant">wrong_location</span>
                  <p class="text-body-md font-bold text-on-surface mt-2">No stores selected yet</p>
                  <p class="text-label-md text-gray-400 mt-0.5">Pick stores from the left to add them here.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Footer -->
        <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-outline-variant/60 bg-surface-container-low/30 shrink-0">
          <button type="button" class="js-modal-close flex items-center gap-2 bg-white border border-outline-variant/50 text-on-surface px-6 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold shadow-sm">Cancel</button>
          <button type="button" class="js-modal-close flex items-center gap-2 bg-[#198754] text-white px-5 py-2.5 rounded-lg text-[14px] shadow-lg shadow-[#198754]/20 hover:opacity-95 active:scale-[0.98] transition-all font-bold">
            <span class="material-symbols-outlined text-[18px]">save</span> Save
          </button>
        </div>
      </div>
    </div>

    <!-- ===== Disable City Configuration Confirmation ===== -->
    <div id="modal-disable-config" class="js-modal hidden fixed inset-0 z-[100] flex items-center justify-center p-4">
      <div class="js-modal-close absolute inset-0 bg-black/50 backdrop-blur-sm"></div>
      <div class="relative w-full max-w-2xl bg-white rounded-2xl border border-outline-variant shadow-2xl overflow-hidden">
        <div class="px-8 py-10 text-center">
          <div class="w-16 h-16 rounded-full bg-error/10 text-error flex items-center justify-center mx-auto">
            <span class="material-symbols-outlined text-[32px]">warning</span>
          </div>
          <h3 class="text-headline-md font-bold text-on-surface mt-5 max-w-md mx-auto leading-snug">Are you sure you want to disable city-based store configuration?</h3>
          <p class="text-body-md text-secondary mt-3 leading-relaxed max-w-md mx-auto">Once disabled, stores will no longer be managed city-wise for this pass. Existing city-wise store settings may no longer apply.</p>
        </div>
        <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-outline-variant/60 bg-surface-container-low/30">
          <button type="button" class="js-modal-close flex items-center gap-2 bg-white border border-outline-variant/50 text-on-surface px-6 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold shadow-sm">Cancel</button>
          <button type="button" id="confirmDisableConfig" class="js-modal-close flex items-center gap-2 bg-error text-white px-4 py-2.5 rounded-lg text-[14px] shadow-lg shadow-error/20 hover:shadow-xl hover:opacity-90 active:scale-[0.98] transition-all font-bold">
            <span class="material-symbols-outlined text-sm">power_settings_new</span> Disable
          </button>
        </div>
      </div>
    </div>

    <!-- ===== Enable City Configuration Confirmation ===== -->
    <div id="modal-enable-config" class="js-modal hidden fixed inset-0 z-[100] flex items-center justify-center p-4">
      <div class="js-modal-close absolute inset-0 bg-black/50 backdrop-blur-sm"></div>
      <div class="relative w-full max-w-2xl bg-white rounded-2xl border border-outline-variant shadow-2xl overflow-hidden">
        <div class="px-8 py-10 text-center">
          <div class="w-16 h-16 rounded-full bg-error/10 text-error flex items-center justify-center mx-auto">
            <span class="material-symbols-outlined text-[32px]">warning</span>
          </div>
          <h3 class="text-headline-md font-bold text-on-surface mt-5 max-w-md mx-auto leading-snug">Are you sure you want to enable city-wise store configuration?</h3>
          <p class="text-body-md text-secondary mt-3 leading-relaxed max-w-md mx-auto">Once enabled, you can add stores based on city and manage them separately for each pass.</p>
        </div>
        <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-outline-variant/60 bg-surface-container-low/30">
          <button type="button" class="js-modal-close flex items-center gap-2 bg-white border border-outline-variant/50 text-on-surface px-6 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold shadow-sm">Cancel</button>
          <button type="button" id="confirmEnableConfig" class="js-modal-close flex items-center gap-2 bg-brand-gradient text-on-primary px-4 py-2.5 rounded-lg text-[14px] shadow-lg shadow-primary/20 hover:shadow-xl hover:opacity-90 active:scale-[0.98] transition-all font-bold">
            <span class="material-symbols-outlined text-sm">power_settings_new</span> Enable
          </button>
        </div>
      </div>
    </div>

    <?php include('footer.php'); ?>
  </main>
  <!-- Micro-interaction Scripts -->
   <?php include('script.php'); ?>
  <script>
    (function () {
      const btn = document.getElementById('cityConfigToggle');
      if (!btn) return;
      const track = btn.querySelector('.js-toggle-track');
      const knob  = btn.querySelector('.js-toggle-knob');
      const icon  = knob.querySelector('.material-symbols-outlined');
      const title = btn.querySelector('.js-toggle-title');
      const sub   = btn.querySelector('.js-toggle-sub');

      const statusPill = document.getElementById('cityConfigStatus');
      const statusDot  = statusPill && statusPill.querySelector('.js-status-dot');
      const statusCore = statusPill && statusPill.querySelector('.js-status-core');
      const statusText = statusPill && statusPill.querySelector('.js-status-text');

      function applyState(enabled) {
        btn.dataset.enabled = enabled ? '1' : '0';
        btn.setAttribute('aria-checked', enabled ? 'true' : 'false');

        btn.classList.toggle('bg-emerald-50/60', enabled);
        btn.classList.toggle('border-emerald-200', enabled);
        btn.classList.toggle('hover:border-emerald-300', enabled);
        btn.classList.toggle('bg-rose-50/60', !enabled);
        btn.classList.toggle('border-rose-200', !enabled);
        btn.classList.toggle('hover:border-rose-300', !enabled);

        track.classList.toggle('bg-emerald-500', enabled);
        track.classList.toggle('shadow-inner', enabled);
        track.classList.toggle('shadow-primary/30', enabled);
        track.classList.toggle('bg-rose-400', !enabled);

        knob.classList.toggle('translate-x-5', enabled);
        knob.classList.toggle('translate-x-0', !enabled);

        icon.textContent = enabled ? 'check' : 'close';
        icon.classList.toggle('text-primary', enabled);
        icon.classList.toggle('text-rose-500', !enabled);

        title.textContent = enabled ? 'Enabled' : 'Disabled';
        title.classList.toggle('text-emerald-700', enabled);
        title.classList.toggle('text-rose-700', !enabled);

        sub.textContent = enabled ? 'Tap to disable' : 'Tap to enable';

        // Sync the header status pill
        if (statusPill) {
          statusPill.classList.toggle('bg-emerald-50', enabled);
          statusPill.classList.toggle('text-emerald-700', enabled);
          statusPill.classList.toggle('border-emerald-100', enabled);
          statusPill.classList.toggle('bg-rose-50', !enabled);
          statusPill.classList.toggle('text-rose-700', !enabled);
          statusPill.classList.toggle('border-rose-100', !enabled);

          statusCore.classList.toggle('bg-emerald-500', enabled);
          statusCore.classList.toggle('bg-rose-500', !enabled);

          // Re-create the pinging halo only when enabled
          const existingPing = statusDot.querySelector('.js-status-ping');
          if (enabled && !existingPing) {
            const ping = document.createElement('span');
            ping.className = 'js-status-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75 animate-ping';
            statusDot.insertBefore(ping, statusCore);
          } else if (!enabled && existingPing) {
            existingPing.remove();
          }

          statusText.textContent = enabled ? 'Enabled' : 'Disabled';
        }
      }

      btn.addEventListener('click', function () {
        var wantEnabled = btn.dataset.enabled !== '1';
        // Confirm either way with the matching modal
        var m = document.getElementById(wantEnabled ? 'modal-enable-config' : 'modal-disable-config');
        if (m) { m.classList.remove('hidden'); document.body.style.overflow = 'hidden'; }
      });

      var confirmDisable = document.getElementById('confirmDisableConfig');
      if (confirmDisable) confirmDisable.addEventListener('click', function () { applyState(false); });
      var confirmEnable = document.getElementById('confirmEnableConfig');
      if (confirmEnable) confirmEnable.addEventListener('click', function () { applyState(true); });
    })();

    // ---- Modals: open / close ----
    (function () {
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
        btn.addEventListener('click', function (e) { e.preventDefault(); openModal(btn.getAttribute('data-modal-target')); });
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

    // ---- Add City modal: store picker ----
    (function () {
      var LIMIT = 10;
      var selectedList = document.getElementById('citySelectedList');
      var selectedEmpty = document.getElementById('citySelectedEmpty');
      var badge = document.getElementById('cityStoreCount');
      if (!selectedList) return;

      function count() { return selectedList.querySelectorAll('[data-selected-item]').length; }
      function update() {
        var n = count();
        badge.textContent = n + ' / ' + LIMIT;
        selectedEmpty.classList.toggle('hidden', n > 0);
      }

      window.cityStoreAdd = function (btn) {
        if (count() >= LIMIT) return;
        var row = btn.closest('[data-city-store]');
        row.classList.add('hidden');
        var defaultMsg = 'You are near ' + row.dataset.name + '. Tap to view your pass.';
        var item = document.createElement('div');
        item.setAttribute('data-selected-item', '');
        item.dataset.ref = row.dataset.cityStore;
        item.className = 'rounded-xl border border-outline-variant bg-white shadow-sm p-3';
        item.innerHTML =
          '<div class="flex items-center gap-3">' +
            '<img src="' + row.dataset.logo + '" alt="' + row.dataset.name + '" class="w-10 h-10 rounded-lg object-contain bg-white border border-outline-variant/60 p-1 shrink-0">' +
            '<div class="min-w-0 flex-1">' +
              '<p class="text-body-md font-bold text-on-surface truncate">' + row.dataset.name + '</p>' +
              '<p class="flex items-center gap-1 text-label-sm text-outline"><span class="material-symbols-outlined text-[14px]">location_on</span>' + row.dataset.city + '</p>' +
            '</div>' +
            '<button type="button" data-edit-btn onclick="cityStoreToggleEdit(this)" title="Edit text" class="w-8 h-8 rounded-full text-outline hover:bg-primary/10 hover:text-primary flex items-center justify-center shrink-0 transition-colors"><span class="material-symbols-outlined text-[18px]">edit</span></button>' +
            '<button type="button" onclick="cityStoreRemove(this)" title="Remove" class="w-8 h-8 rounded-full text-outline hover:bg-rose-50 hover:text-rose-600 flex items-center justify-center shrink-0 transition-colors"><span class="material-symbols-outlined text-[20px]">close</span></button>' +
          '</div>' +
          '<div class="mt-3 rounded-lg border border-outline-variant/60 bg-surface-container-low/40 p-3 !pb-1">' +
            '<div class="flex items-center gap-1.5 mb-1.5">' +
              '<span class="inline-flex items-center gap-1.5 text-label-sm font-bold text-secondary"><span class="material-symbols-outlined text-[15px] text-primary">wallet</span>Relevant Text (Apple)</span>' +
            '</div>' +
            '<p data-view class="text-body-md text-on-surface leading-relaxed">' + defaultMsg + '</p>' +
            '<textarea data-edit name="relevant_text[' + row.dataset.cityStore + ']" rows="2" maxlength="120" placeholder="Message shown on the pass when the user is near this store" class="hidden w-full bg-white border border-outline-variant rounded-lg py-2 px-3 text-body-md text-on-surface placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all resize-none">' + defaultMsg + '</textarea>' +
          '</div>';
        selectedList.appendChild(item);
        update();
      };

      window.cityStoreRemove = function (btn) {
        var item = btn.closest('[data-selected-item]');
        var row = document.querySelector('[data-city-store="' + item.dataset.ref + '"]');
        if (row) row.classList.remove('hidden');
        item.remove();
        update();
      };

      window.cityStoreToggleEdit = function (btn) {
        var item = btn.closest('[data-selected-item]');
        var view = item.querySelector('[data-view]');
        var edit = item.querySelector('[data-edit]');
        var icon = btn.querySelector('.material-symbols-outlined');
        if (edit.classList.contains('hidden')) {
          view.classList.add('hidden');
          edit.classList.remove('hidden');
          edit.focus();
          icon.textContent = 'check';
          btn.title = 'Save';
        } else {
          view.textContent = edit.value.trim() || '—';
          edit.classList.add('hidden');
          view.classList.remove('hidden');
          icon.textContent = 'edit';
          btn.title = 'Edit text';
        }
      };

      window.cityStoresSelectAll = function () {
        document.querySelectorAll('[data-city-store]:not(.hidden)').forEach(function (row) {
          cityStoreAdd(row.querySelector('[data-add]'));
        });
      };

      window.cityStoresFilter = function (q) {
        q = q.toLowerCase().trim();
        var visible = 0;
        document.querySelectorAll('.js-city-store-row').forEach(function (row) {
          if (document.querySelector('[data-selected-item][data-ref="' + row.dataset.cityStore + '"]')) return;
          var match = (row.dataset.name + ' ' + row.dataset.city).toLowerCase().indexOf(q) !== -1;
          row.classList.toggle('hidden', !match);
          if (match) visible++;
        });
        document.getElementById('cityNoAvailable').classList.toggle('hidden', visible > 0);
      };

      update();
    })();

    // ---- Edit City modal: store picker (Aatman Infotech pre-selected) ----
    (function () {
      var LIMIT = 10;
      var selectedList = document.getElementById('editCitySelectedList');
      var selectedEmpty = document.getElementById('editCitySelectedEmpty');
      var badge = document.getElementById('editCityStoreCount');
      if (!selectedList) return;

      function count() { return selectedList.querySelectorAll('[data-selected-item]').length; }
      function update() {
        var n = count();
        badge.textContent = n + ' / ' + LIMIT;
        selectedEmpty.classList.toggle('hidden', n > 0);
      }

      window.editCityStoreAdd = function (btn) {
        if (count() >= LIMIT) return;
        var row = btn.closest('[data-edit-city-store]');
        row.classList.add('hidden');
        var defaultMsg = 'You are near ' + row.dataset.name + '. Tap to view your pass.';
        var item = document.createElement('div');
        item.setAttribute('data-selected-item', '');
        item.dataset.ref = row.dataset.editCityStore;
        item.className = 'rounded-xl border border-outline-variant bg-white shadow-sm p-3';
        item.innerHTML =
          '<div class="flex items-center gap-3">' +
            '<img src="' + row.dataset.logo + '" alt="' + row.dataset.name + '" class="w-10 h-10 rounded-lg object-contain bg-white border border-outline-variant/60 p-1 shrink-0">' +
            '<div class="min-w-0 flex-1">' +
              '<p class="text-body-md font-bold text-on-surface truncate">' + row.dataset.name + '</p>' +
              '<p class="flex items-center gap-1 text-label-sm text-outline"><span class="material-symbols-outlined text-[14px]">location_on</span>' + row.dataset.city + '</p>' +
            '</div>' +
            '<button type="button" data-edit-btn onclick="editCityStoreToggleEdit(this)" title="Edit text" class="w-8 h-8 rounded-full text-outline hover:bg-primary/10 hover:text-primary flex items-center justify-center shrink-0 transition-colors"><span class="material-symbols-outlined text-[18px]">edit</span></button>' +
            '<button type="button" onclick="editCityStoreRemove(this)" title="Remove" class="w-8 h-8 rounded-full text-outline hover:bg-rose-50 hover:text-rose-600 flex items-center justify-center shrink-0 transition-colors"><span class="material-symbols-outlined text-[20px]">close</span></button>' +
          '</div>' +
          '<div class="mt-3 rounded-lg border border-outline-variant/60 bg-surface-container-low/40 p-3 !pb-1">' +
            '<div class="flex items-center gap-1.5 mb-1.5">' +
              '<span class="inline-flex items-center gap-1.5 text-label-sm font-bold text-secondary"><span class="material-symbols-outlined text-[15px] text-primary">wallet</span>Relevant Text (Apple)</span>' +
            '</div>' +
            '<p data-view class="text-body-md text-on-surface leading-relaxed">' + defaultMsg + '</p>' +
            '<textarea data-edit name="edit_relevant_text[' + row.dataset.editCityStore + ']" rows="1" maxlength="120" placeholder="Message shown on the pass when the user is near this store" class="hidden w-full bg-white border border-outline-variant rounded-lg py-2 px-3 text-body-md text-on-surface placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all resize-none">' + defaultMsg + '</textarea>' +
          '</div>';
        selectedList.appendChild(item);
        update();
      };

      window.editCityStoreRemove = function (btn) {
        var item = btn.closest('[data-selected-item]');
        var row = document.querySelector('[data-edit-city-store="' + item.dataset.ref + '"]');
        if (row) row.classList.remove('hidden');
        item.remove();
        update();
      };

      window.editCityStoreToggleEdit = function (btn) {
        var item = btn.closest('[data-selected-item]');
        var view = item.querySelector('[data-view]');
        var edit = item.querySelector('[data-edit]');
        var icon = btn.querySelector('.material-symbols-outlined');
        if (edit.classList.contains('hidden')) {
          view.classList.add('hidden'); edit.classList.remove('hidden'); edit.focus();
          icon.textContent = 'check'; btn.title = 'Save';
        } else {
          view.textContent = edit.value.trim() || '—';
          edit.classList.add('hidden'); view.classList.remove('hidden');
          icon.textContent = 'edit'; btn.title = 'Edit text';
        }
      };

      window.editCityStoresSelectAll = function () {
        document.querySelectorAll('[data-edit-city-store]:not(.hidden)').forEach(function (row) {
          editCityStoreAdd(row.querySelector('[data-add]'));
        });
      };

      window.editCityStoresFilter = function (q) {
        q = q.toLowerCase().trim();
        var visible = 0;
        document.querySelectorAll('.js-edit-city-store-row').forEach(function (row) {
          if (document.querySelector('#editCitySelectedList [data-selected-item][data-ref="' + row.dataset.editCityStore + '"]')) return;
          var match = (row.dataset.name + ' ' + row.dataset.city).toLowerCase().indexOf(q) !== -1;
          row.classList.toggle('hidden', !match);
          if (match) visible++;
        });
        document.getElementById('editCityNoAvailable').classList.toggle('hidden', visible > 0);
      };

      // Pre-select the first store (Aatman Infotech) by default
      var firstRow = document.querySelector('[data-edit-city-store="0"]');
      if (firstRow) editCityStoreAdd(firstRow.querySelector('[data-add]'));

      update();
    })();
  </script>
</body>
 
</html>