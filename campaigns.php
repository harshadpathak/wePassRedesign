<!DOCTYPE html>
<html class="light" lang="en" style="">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WePass - Campaigns</title>
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
      <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4">
        <div class="space-y-1">
          <nav class="flex items-center gap-2 text-label-sm text-outline mb-1">
            <span class="material-symbols-outlined text-[14px] text-gray">home</span> <span class="text-gray font-normal">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray-500 font-normal">Campaigns</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Campaigns</h2>
        </div>
        <div class="flex items-center gap-3">
          <button
            class="flex items-center gap-2 bg-white border border-outline-variant/50 text-on-surface px-6 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold shadow-sm"
            onclick="document.getElementById('filter-panel').classList.toggle('hidden')">
            <span class="material-symbols-outlined text-[20px]">filter_alt</span>
            <span class="">Filter</span>
          </button>
          <div class="flex items-center gap-3">
            <a href ="createCampaign.php"
              class="flex items-center gap-2 bg-brand-gradient text-on-primary px-4 py-2.5 rounded-lg text-[14px] shadow-lg shadow-primary/20 hover:shadow-xl hover:opacity-90 active:scale-[0.98] transition-all font-bold">
              <span class="material-symbols-outlined text-sm">add</span>
              Create Campaign
            </a>
          </div>
        </div>
      </div>

      <!-- Summary Cards -->
      <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <!-- Total Campaigns -->
        <div class="bg-surface-container-lowest p-4 rounded-xl border border-primary/40 shadow-sm flex items-center gap-4 cursor-pointer relative overflow-hidden group">
          <div class="bg-primary/10 text-primary p-2.5 rounded-lg flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined">storefront</span>
          </div>
          <div class="min-w-0">
            <p class="text-label-sm text-gray-400 font-medium">Total Campaigns</p>
            <p class="text-headline-md text-primary font-bold">5</p>
          </div>
        </div>

        <!-- Complete -->
        <div class="bg-white rounded-xl border border-outline-variant shadow-sm p-4 flex items-center transition-colors">
          <!-- Complete -->
          <div class="flex-1 flex items-center gap-2.5 min-w-0">
            <div class="bg-indigo-50 text-indigo-600 p-2.5 rounded-lg flex items-center justify-center shrink-0">
              <span class="material-symbols-outlined [font-variation-settings:'FILL'_1]">check_circle</span>
            </div>
            <div class="min-w-0">
              <p class="text-label-sm text-gray-400 font-medium">Completed</p>
              <p class="text-headline-md font-bold">5</p>
            </div>
          </div>
        </div>

        <!-- Running -->
        <div class="bg-white rounded-xl border border-outline-variant shadow-sm p-4 flex items-center transition-colors">
          <!-- Running -->
          <div class="flex-1 flex items-center gap-2.5 min-w-0">
            <div class="bg-emerald-50 text-emerald-600 p-2.5 rounded-lg flex items-center justify-center shrink-0">
              <span class="material-symbols-outlined [font-variation-settings:'FILL'_1]">play_circle</span>
            </div>
            <div class="min-w-0">
              <p class="text-label-sm text-gray-400 font-medium">Running</p>
              <p class="text-headline-md font-bold">5</p>
            </div>            
          </div>
        </div>

        <!-- Pending -->
        <div class="bg-white rounded-xl border border-outline-variant shadow-sm p-4 flex items-center transition-colors">
          <!-- Pending -->
          <div class="flex-1 flex items-center gap-2.5 min-w-0">
            <div class="bg-amber-50 text-amber-600 p-2.5 rounded-lg flex items-center justify-center shrink-0">
              <span class="material-symbols-outlined [font-variation-settings:'FILL'_1]">hourglass_top</span>
            </div>
            <div class="min-w-0">
              <p class="text-label-sm text-gray-400 font-medium">Pending</p>
              <p class="text-headline-md font-bold">5</p>
            </div>            
          </div>
        </div>        
      </div>

      <!-- Filter Panel -->
      <div
        class="bg-white rounded-2xl border border-outline-variant p-6 shadow-sm transition-all duration-300 overflow-hidden hidden"
        id="filter-panel">
        <div class="flex flex-col gap-2">
          <div class="flex flex-col gap-2">
            <h3 class="text-primary font-display font-bold text-headline-md">Filter Campaigns</h3>
            <p class="text-gray-400 text-body-md">Refine your search to find specific campaigns</p>
          </div>
          <div class="border-t border-outline-variant/30"></div>
          <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-end">
            <div class="md:col-span-3 space-y-2">
              <label class="text-on-surface font-bold text-label-md">Search:</label>
              <div class="relative">
                <input
                  class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                  placeholder="Search by campaign title" type="text">
              </div>
            </div>
            <div class="md:col-span-3 space-y-2">
              <label class="text-on-surface font-bold text-label-md">Status:</label>
              <select class="w-full js-select2">
                <option>All Status</option>
                <option>Pending</option>
                <option>Running</option>
                <option>Completed</option>
              </select>
            </div>
            <div class="md:col-span-3 space-y-2">
              <label class="text-on-surface font-bold text-label-md">Active:</label>
              <select class="w-full js-select2">
                <option>All</option>
                <option>Active</option>
                <option>Inactive</option>
              </select>
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

      <!-- Main Card -->
      <div class="bg-white rounded-2xl border border-outline-variant shadow-sm [&:has(.js-menu-panel:not(.hidden))]:overflow-visible">
        <!-- Table -->
        <table class="w-full text-left border-collapse">
          <thead class="bg-surface-container-low/50">
            <tr>
              <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Title</th>
              <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Template</th>
              <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Created</th>
              <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Status</th>
              <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Timeline</th>
              <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Enabled</th>
              <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant text-right">Action</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-outline-variant/40">

            <!-- Row: Demo 3 (Disabled) -->
            <tr class="hover:bg-surface-container-low transition-colors group">
              <td class="px-6 py-4">
                <div class="flex items-center gap-3.5">
                  <div class="w-11 h-11 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-[22px]">bolt</span>
                  </div>
                  <div class="min-w-0">
                    <p class="text-body-md font-medium text-on-surface truncate uppercase">Demo 3</p>
                    <p class="flex items-center gap-1 text-label-sm text-outline font-medium mt-0.5">
                      <span class="material-symbols-outlined text-[14px]">calendar_month</span>
                      18/06/2026 &rarr; 18/06/2026
                    </p>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4">
                <div class="flex items-center gap-2">
                  <span class="text-body-md text-on-surface">Gift-Card-49</span>
                  <span class="inline-flex items-center gap-1 bg-surface-container-high text-secondary text-[11px] font-bold px-2 py-0.5 rounded-full"><span class="material-symbols-outlined text-[14px]">store</span> 2</span>
                </div>
              </td>
              <td class="px-6 py-4 text-label-md text-on-surface-variant">18/06/2026 16:55:26</td>
              <td class="px-6 py-4"><span class="text-outline">&ndash;</span></td>
              <td class="px-6 py-4 text-label-md text-on-surface-variant">&ndash;</td>
              <td class="px-6 py-4"><span class="inline-flex items-center gap-1 py-1 px-2 rounded-full text-[10px] font-bold uppercase bg-rose-50 text-rose-700 border border-rose-100 whitespace-nowrap"><span class="material-symbols-outlined text-[14px] leading-none">cancel</span><span class="leading-none">Disabled</span></td>
              <td class="px-6 py-4 text-right">
                <div class="relative inline-block js-menu">
                  <button type="button" class="js-menu-toggle material-symbols-outlined text-outline hover:text-primary transition-colors p-1 rounded-lg hover:bg-surface-container-high">more_vert</button>
                  <div class="js-menu-panel hidden absolute right-0 mt-2 w-48 border border-outline-variant/50 rounded-xl shadow-xl transition-all duration-200 z-50 overflow-hidden bg-white">
                    <div class="py-1.5">
                      <a class="flex items-center gap-3 px-4 py-2 text-body-md text-on-surface hover:bg-surface-container-low transition-colors" href="#" data-modal-target="#modal-campaign-disabled"><span class="material-symbols-outlined text-secondary text-[20px]">edit</span><span class="font-medium">Edit</span></a>
                      <div class="border-t border-outline-variant/30 my-1 mx-2"></div>
                      <a class="flex items-center gap-3 px-4 py-2 text-body-md text-error hover:bg-error-container/40 transition-colors" href="#"><span class="material-symbols-outlined text-[20px]">delete</span><span class="font-bold">Delete</span></a>
                    </div>
                  </div>
                </div>
              </td>
            </tr>

            <!-- Row: Demo 3 (Completed) -->
            <tr class="hover:bg-surface-container-low transition-colors group">
              <td class="px-6 py-4">
                <div class="flex items-center gap-3.5">
                  <div class="w-11 h-11 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-[22px]">bolt</span>
                  </div>
                  <div class="min-w-0">
                    <p class="text-body-md font-medium text-on-surface truncate uppercase">Demo 3</p>
                    <p class="flex items-center gap-1 text-label-sm text-outline font-medium mt-0.5">
                      <span class="material-symbols-outlined text-[14px]">calendar_month</span>
                      18/06/2026 &rarr; 18/06/2026
                    </p>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4">
                <div class="flex items-center gap-2">
                  <span class="text-body-md text-on-surface">Gift-Card-54</span>
                  <span class="inline-flex items-center gap-1 bg-surface-container-high text-secondary text-[11px] font-bold px-2 py-0.5 rounded-full"><span class="material-symbols-outlined text-[14px]">store</span> 2</span>
                </div>
              </td>
              <td class="px-6 py-4 text-label-md text-on-surface-variant">18/06/2026 16:17:02</td>
              <td class="px-6 py-4"><span class="inline-flex items-center gap-1.5 py-1 px-2.5 rounded-full text-[10px] font-bold uppercase bg-indigo-50 text-indigo-700 border border-indigo-100 whitespace-nowrap"><span class="material-symbols-outlined text-[13px] leading-none [font-variation-settings:'FILL'_1]">check_circle</span><span class="leading-none">Completed</span></span></td>
              <td class="px-6 py-4 text-label-md text-on-surface-variant">&ndash;</td>
              <td class="px-6 py-4">
                <span class="inline-flex items-center gap-1 py-1 px-2 rounded-full text-[10px] font-bold uppercase bg-emerald-50 text-emerald-700 border border-emerald-100 whitespace-nowrap"><span class="material-symbols-outlined text-[14px] leading-none">check_circle</span><span class="leading-none">Enabled</span>
              </td>
              <td class="px-6 py-4 text-right">
                <div class="relative inline-block js-menu">
                  <button type="button" class="js-menu-toggle material-symbols-outlined text-outline hover:text-primary transition-colors p-1 rounded-lg hover:bg-surface-container-high">more_vert</button>
                  <div class="js-menu-panel hidden absolute right-0 mt-2 w-48 border border-outline-variant/50 rounded-xl shadow-xl transition-all duration-200 z-50 overflow-hidden bg-white">
                    <div class="py-1.5">
                      <a class="flex items-center gap-3 px-4 py-2 text-body-md text-on-surface hover:bg-surface-container-low transition-colors" href="#" data-modal-target="#modal-campaign-completed"><span class="material-symbols-outlined text-secondary text-[20px]">edit</span><span class="font-medium">Edit</span></a>
                      <div class="border-t border-outline-variant/30 my-1 mx-2"></div>
                      <a class="flex items-center gap-3 px-4 py-2 text-body-md text-error hover:bg-error-container/40 transition-colors" href="#"><span class="material-symbols-outlined text-[20px]">delete</span><span class="font-bold">Delete</span></a>
                    </div>
                  </div>
                </div>
              </td>
            </tr>

            <!-- Row: 70 % -->
            <tr class="hover:bg-surface-container-low transition-colors group">
              <td class="px-6 py-4">
                <div class="flex items-center gap-3.5">
                  <div class="w-11 h-11 rounded-xl bg-indigo-100 text-indigo-700 flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-[22px]">calendar_month</span>
                  </div>
                  <div class="min-w-0">
                    <p class="text-body-md font-medium text-on-surface truncate uppercase">70 %</p>
                    <p class="flex items-center gap-1 text-label-sm text-outline font-medium mt-0.5">
                      <span class="material-symbols-outlined text-[14px]">calendar_month</span>
                      18/06/2026 &rarr; 18/06/2026
                    </p>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4">
                <div class="flex items-center gap-2">
                  <span class="text-body-md text-on-surface">Gift-Card-57</span>
                  <span class="inline-flex items-center gap-1 bg-surface-container-high text-secondary text-[11px] font-bold px-2 py-0.5 rounded-full"><span class="material-symbols-outlined text-[14px]">store</span> 2</span>
                </div>
              </td>
              <td class="px-6 py-4 text-label-md text-on-surface-variant">18/06/2026 12:59:14</td>
              <td class="px-6 py-4"><span class="inline-flex items-center gap-1.5 py-1 px-2.5 rounded-full text-[10px] font-bold uppercase bg-amber-50 text-amber-700 border border-amber-100 whitespace-nowrap"><span class="material-symbols-outlined text-[13px] leading-none [font-variation-settings:'FILL'_1]">hourglass_top</span><span class="leading-none">Pending</span></span></td>
              <td class="px-6 py-4">
                <div class="flex items-center gap-2.5">
                  <span class="w-8 h-8 rounded-lg bg-indigo-100 text-indigo-700 flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-[18px]">hourglass_top</span>
                  </span>
                  <div class="leading-tight">
                    <p class="text-[10px] font-normal uppercase tracking-wider text-outline">Starts in</p>
                    <p class="text-label-md font-bold text-indigo-600">2d 9h 47m</p>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4">
                <span class="inline-flex items-center gap-1 py-1 px-2 rounded-full text-[10px] font-bold uppercase bg-emerald-50 text-emerald-700 border border-emerald-100 whitespace-nowrap"><span class="material-symbols-outlined text-[14px] leading-none">check_circle</span><span class="leading-none">Enabled</span>
              </td>
              <td class="px-6 py-4 text-right">
                <div class="relative inline-block js-menu">
                  <button type="button" class="js-menu-toggle material-symbols-outlined text-outline hover:text-primary transition-colors p-1 rounded-lg hover:bg-surface-container-high">more_vert</button>
                  <div class="js-menu-panel hidden absolute right-0 mt-2 w-48 border border-outline-variant/50 rounded-xl shadow-xl transition-all duration-200 z-50 overflow-hidden bg-white">
                    <div class="py-1.5">
                      <a class="flex items-center gap-3 px-4 py-2 text-body-md text-on-surface hover:bg-surface-container-low transition-colors" href="editCampaign.php"><span class="material-symbols-outlined text-secondary text-[20px]">edit</span><span class="font-medium">Edit</span></a>
                      <div class="border-t border-outline-variant/30 my-1 mx-2"></div>
                      <a class="flex items-center gap-3 px-4 py-2 text-body-md text-error hover:bg-error-container/40 transition-colors" href="#"><span class="material-symbols-outlined text-[20px]">delete</span><span class="font-bold">Delete</span></a>
                    </div>
                  </div>
                </div>
              </td>
            </tr>

            <!-- Row: Flat 20% Discount -->
            <tr class="hover:bg-surface-container-low transition-colors group">
              <td class="px-6 py-4">
                <div class="flex items-center gap-3.5">
                  <div class="w-11 h-11 rounded-xl bg-indigo-100 text-indigo-700 flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-[22px]">calendar_month</span>
                  </div>
                  <div class="min-w-0">
                    <p class="text-body-md font-medium text-on-surface truncate uppercase">Flat 20% Discount</p>
                    <p class="flex items-center gap-1 text-label-sm text-outline font-medium mt-0.5">
                      <span class="material-symbols-outlined text-[14px]">calendar_month</span>
                      04/06/2026 &rarr; 06/06/2026
                    </p>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4">
                <div class="flex items-center gap-2">
                  <span class="text-body-md text-on-surface">Gift-Card-50</span>
                  <span class="inline-flex items-center gap-1 bg-surface-container-high text-secondary text-[11px] font-bold px-2 py-0.5 rounded-full"><span class="material-symbols-outlined text-[14px]">store</span> 1</span>
                </div>
              </td>
              <td class="px-6 py-4 text-label-md text-on-surface-variant">03/06/2026 16:20:19</td>
              <td class="px-6 py-4"><span class="inline-flex items-center gap-1.5 py-1 px-2.5 rounded-full text-[10px] font-bold uppercase bg-amber-50 text-amber-700 border border-amber-100 whitespace-nowrap"><span class="material-symbols-outlined text-[13px] leading-none [font-variation-settings:'FILL'_1]">hourglass_top</span><span class="leading-none">Pending</span></span></td>
              <td class="px-6 py-4">
                <div class="flex items-center gap-2.5">
                  <span class="w-8 h-8 rounded-lg bg-indigo-100 text-indigo-700 flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-[18px]">hourglass_top</span>
                  </span>
                  <div class="leading-tight">
                    <p class="text-[10px] font-bold uppercase tracking-wider text-outline">Starting Soon</p>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4">
                <span class="inline-flex items-center gap-1 py-1 px-2 rounded-full text-[10px] font-bold uppercase bg-emerald-50 text-emerald-700 border border-emerald-100 whitespace-nowrap"><span class="material-symbols-outlined text-[14px] leading-none">check_circle</span><span class="leading-none">Enabled</span>
              </td>
              <td class="px-6 py-4 text-right">
                <div class="relative inline-block js-menu">
                  <button type="button" class="js-menu-toggle material-symbols-outlined text-outline hover:text-primary transition-colors p-1 rounded-lg hover:bg-surface-container-high">more_vert</button>
                  <div class="js-menu-panel hidden absolute right-0 mt-2 w-48 border border-outline-variant/50 rounded-xl shadow-xl transition-all duration-200 z-50 overflow-hidden bg-white">
                    <div class="py-1.5">
                      <a class="flex items-center gap-3 px-4 py-2 text-body-md text-on-surface hover:bg-surface-container-low transition-colors" href="editCampaign.php"><span class="material-symbols-outlined text-secondary text-[20px]">edit</span><span class="font-medium">Edit</span></a>
                      <div class="border-t border-outline-variant/30 my-1 mx-2"></div>
                      <a class="flex items-center gap-3 px-4 py-2 text-body-md text-error hover:bg-error-container/40 transition-colors" href="#"><span class="material-symbols-outlined text-[20px]">delete</span><span class="font-bold">Delete</span></a>
                    </div>
                  </div>
                </div>
              </td>
            </tr>

            <!-- Row: 50 % Off -->
            <tr class="hover:bg-surface-container-low transition-colors group">
              <td class="px-6 py-4">
                <div class="flex items-center gap-3.5">
                  <div class="w-11 h-11 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-[22px]">bolt</span>
                  </div>
                  <div class="min-w-0">
                    <p class="text-body-md font-medium text-on-surface truncate uppercase">50 % Off</p>
                    <p class="flex items-center gap-1 text-label-sm text-outline font-medium mt-0.5">
                      <span class="material-symbols-outlined text-[14px]">calendar_month</span>
                      18/06/2026 &rarr; 18/06/2026
                    </p>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4">
                <div class="flex items-center gap-2">
                  <span class="text-body-md text-on-surface">Gift-Card-59</span>
                  <span class="inline-flex items-center gap-1 bg-surface-container-high text-secondary text-[11px] font-bold px-2 py-0.5 rounded-full"><span class="material-symbols-outlined text-[14px]">store</span> 2</span>
                </div>
              </td>
              <td class="px-6 py-4 text-label-md text-on-surface-variant">18/06/2026 12:57:08</td>
              <td class="px-6 py-4"><span class="inline-flex items-center gap-1.5 py-1 px-2.5 rounded-full text-[10px] font-bold uppercase bg-emerald-50 text-emerald-700 border border-emerald-100 whitespace-nowrap"><span class="material-symbols-outlined text-[13px] leading-none [font-variation-settings:'FILL'_1]">play_circle</span><span class="leading-none">Running</span></span></td>
              <td class="px-6 py-4">
                <div class="flex items-center gap-2.5">
                  <span class="w-8 h-8 rounded-lg bg-amber-100 text-amber-700 flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">flag</span>
                  </span>
                  <div class="leading-tight">
                    <p class="text-[10px] font-normal uppercase tracking-wider text-outline">Ends in</p>
                    <p class="text-label-md font-bold text-amber-700">0d 0h 13m</p>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4">
                <span class="inline-flex items-center gap-1 py-1 px-2 rounded-full text-[10px] font-bold uppercase bg-emerald-50 text-emerald-700 border border-emerald-100 whitespace-nowrap"><span class="material-symbols-outlined text-[14px] leading-none">check_circle</span><span class="leading-none">Enabled</span>
              </td>
              <td class="px-6 py-4 text-right">
                <div class="relative inline-block js-menu">
                  <button type="button" class="js-menu-toggle material-symbols-outlined text-outline hover:text-primary transition-colors p-1 rounded-lg hover:bg-surface-container-high">more_vert</button>
                  <div class="js-menu-panel hidden absolute right-0 mt-2 w-48 border border-outline-variant/50 rounded-xl shadow-xl transition-all duration-200 z-50 overflow-hidden bg-white">
                    <div class="py-1.5">
                      <a class="flex items-center gap-3 px-4 py-2 text-body-md text-on-surface hover:bg-surface-container-low transition-colors" href="editCampaign.php"><span class="material-symbols-outlined text-secondary text-[20px]">edit</span><span class="font-medium">Edit</span></a>
                      <div class="border-t border-outline-variant/30 my-1 mx-2"></div>
                      <a class="flex items-center gap-3 px-4 py-2 text-body-md text-error hover:bg-error-container/40 transition-colors" href="#"><span class="material-symbols-outlined text-[20px]">delete</span><span class="font-bold">Delete</span></a>
                    </div>
                  </div>
                </div>
              </td>
            </tr>

            <!-- Row: Test Campaign -->
            <tr class="hover:bg-surface-container-low transition-colors group">
              <td class="px-6 py-4">
                <div class="flex items-center gap-3.5">
                  <div class="w-11 h-11 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-[22px]">bolt</span>
                  </div>
                  <div class="min-w-0">
                    <p class="text-body-md font-medium text-on-surface truncate uppercase">Test Campaign</p>
                    <p class="flex items-center gap-1 text-label-sm text-outline font-medium mt-0.5">
                      <span class="material-symbols-outlined text-[14px]">calendar_month</span>
                      19/06/2026 &rarr; 19/06/2026
                    </p>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4">
                <div class="flex items-center gap-2">
                  <span class="text-body-md text-on-surface">Gift-Card-66</span>
                  <span class="inline-flex items-center gap-1 bg-surface-container-high text-secondary text-[11px] font-bold px-2 py-0.5 rounded-full"><span class="material-symbols-outlined text-[14px]">store</span> 2</span>
                </div>
              </td>
              <td class="px-6 py-4 text-label-md text-on-surface-variant">19/06/2026 02:57:08</td>
              <td class="px-6 py-4"><span class="inline-flex items-center gap-1.5 py-1 px-2.5 rounded-full text-[10px] font-bold uppercase bg-emerald-50 text-emerald-700 border border-emerald-100 whitespace-nowrap"><span class="material-symbols-outlined text-[13px] leading-none [font-variation-settings:'FILL'_1]">play_circle</span><span class="leading-none">Running</span></span></td>
              <td class="px-6 py-4">
                <div class="flex items-center gap-2.5">
                  <span class="w-8 h-8 rounded-lg bg-amber-100 text-amber-700 flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">flag</span>
                  </span>
                  <div class="leading-tight">
                    <p class="text-[10px] font-bold uppercase tracking-wider text-outline">Ending Soon</p>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4">
                <span class="inline-flex items-center gap-1 py-1 px-2 rounded-full text-[10px] font-bold uppercase bg-emerald-50 text-emerald-700 border border-emerald-100 whitespace-nowrap"><span class="material-symbols-outlined text-[14px] leading-none">check_circle</span><span class="leading-none">Enabled</span>
              </td>
              <td class="px-6 py-4 text-right">
                <div class="relative inline-block js-menu">
                  <button type="button" class="js-menu-toggle material-symbols-outlined text-outline hover:text-primary transition-colors p-1 rounded-lg hover:bg-surface-container-high">more_vert</button>
                  <div class="js-menu-panel hidden absolute right-0 mt-2 w-48 border border-outline-variant/50 rounded-xl shadow-xl transition-all duration-200 z-50 overflow-hidden bg-white">
                    <div class="py-1.5">
                      <a class="flex items-center gap-3 px-4 py-2 text-body-md text-on-surface hover:bg-surface-container-low transition-colors" href="editCampaign.php"><span class="material-symbols-outlined text-secondary text-[20px]">edit</span><span class="font-medium">Edit</span></a>
                      <div class="border-t border-outline-variant/30 my-1 mx-2"></div>
                      <a class="flex items-center gap-3 px-4 py-2 text-body-md text-error hover:bg-error-container/40 transition-colors" href="#"><span class="material-symbols-outlined text-[20px]">delete</span><span class="font-bold">Delete</span></a>
                    </div>
                  </div>
                </div>
              </td>
            </tr>

          </tbody>
        </table>

        <!-- Footer / Pagination -->
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 px-6 py-4 border-t border-outline-variant/60 bg-surface-container-low/30">
          <p class="text-label-md text-secondary">Showing <span class="font-semibold text-on-surface">1</span> to
            <span class="font-semibold text-on-surface">5</span> of
            <span class="font-semibold text-on-surface">10</span> results</p>
          <div class="flex items-center gap-1.5">
            <button class="w-9 h-9 rounded-lg border border-outline-variant text-outline flex items-center justify-center hover:bg-surface-container-low disabled:opacity-40 disabled:cursor-not-allowed transition-all" disabled>
              <span class="material-symbols-outlined text-[18px]">chevron_left</span>
            </button>
            <button class="w-9 h-9 rounded-lg bg-primary text-white font-bold text-label-md flex items-center justify-center shadow-sm">1</button>
            <button class="w-9 h-9 rounded-lg border border-outline-variant text-on-surface font-semibold text-label-md flex items-center justify-center hover:bg-surface-container-low transition-all">2</button>
            <button class="w-9 h-9 rounded-lg border border-outline-variant text-outline flex items-center justify-center hover:bg-surface-container-low transition-all">
              <span class="material-symbols-outlined text-[18px]">chevron_right</span>
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== Campaign Disabled Modal (Information modal pattern) ===== -->
    <div id="modal-campaign-disabled" class="js-modal hidden fixed inset-0 z-[100] flex items-center justify-center p-4">
      <div class="js-modal-close absolute inset-0 bg-black/50 backdrop-blur-sm"></div>
      <div class="relative w-full max-w-lg bg-white rounded-2xl border border-outline-variant shadow-2xl overflow-hidden">
        <div class="p-6 text-center">
          <div class="w-16 h-16 rounded-full bg-primary/10 text-primary flex items-center justify-center mx-auto">
            <span class="material-symbols-outlined text-[32px]">block</span>
          </div>
          <h3 class="text-headline-md font-bold text-on-surface mt-4">Campaign Disabled</h3>
          <p class="text-body-md text-secondary mt-2 leading-relaxed">This campaign has been disabled and can no longer be edited.</p>
        </div>
        <div class="flex items-center justify-center px-6 py-4 border-t border-outline-variant/60 bg-surface-container-low/30">
          <button type="button" class="js-modal-close flex items-center gap-2 bg-brand-gradient text-on-primary px-6 py-2.5 rounded-lg text-[14px] shadow-lg shadow-primary/20 hover:shadow-xl hover:opacity-90 active:scale-[0.98] transition-all font-bold">
            <span class="material-symbols-outlined text-sm">check</span> Got it
          </button>
        </div>
      </div>
    </div>

    <!-- ===== Campaign Completed Modal (Information modal pattern) ===== -->
    <div id="modal-campaign-completed" class="js-modal hidden fixed inset-0 z-[100] flex items-center justify-center p-4">
      <div class="js-modal-close absolute inset-0 bg-black/50 backdrop-blur-sm"></div>
      <div class="relative w-full max-w-lg bg-white rounded-2xl border border-outline-variant shadow-2xl overflow-hidden">
        <div class="p-6 text-center">
          <div class="w-16 h-16 rounded-full bg-primary/10 text-primary flex items-center justify-center mx-auto">
            <span class="material-symbols-outlined text-[32px]">check_circle</span>
          </div>
          <h3 class="text-headline-md font-bold text-on-surface mt-4">Campaign Completed</h3>
          <p class="text-body-md text-secondary mt-2 leading-relaxed">This campaign has been completed and can no longer be edited.</p>
        </div>
        <div class="flex items-center justify-center px-6 py-4 border-t border-outline-variant/60 bg-surface-container-low/30">
          <button type="button" class="js-modal-close flex items-center gap-2 bg-brand-gradient text-on-primary px-6 py-2.5 rounded-lg text-[14px] shadow-lg shadow-primary/20 hover:shadow-xl hover:opacity-90 active:scale-[0.98] transition-all font-bold">
            <span class="material-symbols-outlined text-sm">check</span> Got it
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
      document.querySelectorAll('[data-modal-target]').forEach(function (el) {
        el.addEventListener('click', function (e) {
          e.preventDefault();
          openModal(el.getAttribute('data-modal-target'));
        });
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
