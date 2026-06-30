<!DOCTYPE html>
<html class="light" lang="en" style="">
 
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WePass - Store</title>
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
            <span class="text-gray-500 font-normal">Stores</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Stores</h2>
        </div>
        <div class="flex items-center gap-3">
          <button
            class="flex items-center gap-2 bg-white border border-outline-variant/50 text-on-surface px-6 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold shadow-sm"
            onclick="document.getElementById('filter-panel').classList.toggle('hidden')">
            <span class="material-symbols-outlined text-[20px]">filter_alt</span>
            <span class="">Filter</span>
          </button>
          <div class="flex items-center gap-3">
            <a href ="createStore.php"
              class="flex items-center gap-2 bg-brand-gradient text-on-primary px-4 py-2.5 rounded-lg text-[14px] shadow-lg shadow-primary/20 hover:shadow-xl hover:opacity-90 active:scale-[0.98] transition-all font-bold">
              <span class="material-symbols-outlined text-sm">add</span>
              Create Store
            </a>
          </div>
        </div>
      </div>

      <!-- Summary Cards -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <!-- Total Stores -->
        <div class="bg-surface-container-lowest p-4 rounded-xl border border-primary/40 shadow-sm flex items-center gap-4 cursor-pointer relative overflow-hidden group">
          <div class="bg-primary/10 text-primary p-2.5 rounded-lg flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined">storefront</span>
          </div>
          <div class="min-w-0">
            <p class="text-label-sm text-gray-400 font-medium">Total Stores</p>
            <p class="text-headline-md text-primary font-bold">3</p>
          </div>
        </div>

        <!-- Status (Active / Inactive) -->
        <div class="bg-white rounded-xl border border-outline-variant shadow-sm p-4 flex items-center transition-colors">
          <!-- Active -->
          <div class="flex-1 flex items-center gap-2.5 min-w-0">
            <div class="bg-emerald-50 text-emerald-600 p-2.5 rounded-lg flex items-center justify-center shrink-0">
              <span class="material-symbols-outlined [font-variation-settings:'FILL'_1]">toggle_on</span>
            </div>
            <div class="min-w-0">
              <p class="text-label-sm text-gray-400 font-medium">Active</p>
              <p class="text-headline-md font-bold">2</p>
            </div>
          </div>
        </div>

        <!-- Default (Yes / No) -->
        <div class="bg-white rounded-xl border border-outline-variant shadow-sm p-4 flex items-center transition-colors">
          <!-- Inactive -->
          <div class="flex-1 flex items-center gap-2.5 min-w-0">
            <div class="bg-rose-50 text-rose-600 p-2.5 rounded-lg flex items-center justify-center shrink-0">
              <span class="material-symbols-outlined [font-variation-settings:'FILL'_1]">toggle_off</span>
            </div>
            <div class="min-w-0">
              <p class="text-label-sm text-gray-400 font-medium">Inactive</p>
              <p class="text-headline-md font-bold">1</p>
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
            <h3 class="text-primary font-display font-bold text-headline-md">Filter Stores</h3>
            <p class="text-gray-400 text-body-md">Refine your search to find specific stores</p>
          </div>
          <div class="border-t border-outline-variant/30"></div>
          <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-end">
            <div class="md:col-span-3 space-y-2">
              <label class="text-on-surface font-semibold text-label-md">Search:</label>
              <div class="relative">
                <input
                  class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                  placeholder="Search by store name or location..." type="text">
              </div>
            </div>
            <div class="md:col-span-3 space-y-2">
              <label class="text-on-surface font-semibold text-label-md">Status:</label>
              <select class="w-full js-select2">
                <option>All Status</option>
                <option>Active</option>
                <option>Inactive</option>
              </select>
            </div>
            <div class="md:col-span-3 space-y-2">
              <label class="text-on-surface font-semibold text-label-md">Default:</label>
              <select class="w-full js-select2">
                <option>All</option>
                <option>Yes</option>
                <option>No</option>
              </select>
            </div>
            <div class="md:col-span-3 flex items-center gap-3">
              <button class="flex-1 flex items-center justify-center gap-2 bg-brand-gradient text-on-primary px-4 py-3 rounded-lg text-[14px] shadow-md shadow-primary/20 hover:opacity-95 transition-all font-bold">
                <span class="material-symbols-outlined text-[20px]">search</span>
                Search
              </button>
              <button class="flex-1 flex items-center justify-center gap-2 bg-surface border border-outline-variant text-on-surface-variant px-4 py-3 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold">
                <span class="material-symbols-outlined text-[20px]">cancel</span>
                Clear
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Main Card -->
      <div class="bg-white rounded-2xl border border-outline-variant shadow-sm">
        <!-- Table -->
          <table class="w-full text-left border-collapse">
            <thead class="bg-surface-container-low/50">
              <tr>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Name</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Status</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Default</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Created</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant text-right">Action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-outline-variant/40">
              <!-- Row -->
              <tr class="hover:bg-surface-container-low transition-colors group">
                <!-- Name + location -->
                <td class="px-6 py-4">
                  <div class="flex items-center gap-3.5">
                    <img src="Apple_logo_grey.png"
                      alt="Apple Store"
                      class="w-11 h-11 rounded-xl object-contain bg-white border border-outline-variant/60 p-1.5 shrink-0">
                    <div class="min-w-0">
                      <p class="text-body-md font-medium text-on-surface truncate uppercase">Apple Store</p>
                      <p class="flex items-center gap-1 text-label-sm text-outline font-medium mt-0.5">
                        <span class="material-symbols-outlined text-[14px]">location_on</span>
                        Rajkot, India
                      </p>
                    </div>
                  </div>
                </td>
                <!-- Status -->
                <td class="px-6 py-4">
                  <span class="inline-flex items-center gap-1.5 py-1 px-2 rounded-full text-[10px] font-bold uppercase bg-emerald-50 text-emerald-700 border border-emerald-100 whitespace-nowrap">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Active
                  </span>
                </td>
                <!-- Default -->
                <td class="px-6 py-4">
                  <span class="inline-flex items-center gap-1 py-1 px-2 rounded-full text-[10px] font-bold uppercase bg-emerald-50 text-emerald-700 border border-emerald-100 whitespace-nowrap"><span class="material-symbols-outlined text-[14px] leading-none">check_circle</span><span class="leading-none">Yes</span>
                </td>
                <!-- Created -->
                <td class="px-6 py-4 text-label-md text-on-surface-variant">11/06/2026 09:52:34</td>
                <!-- Action -->
                <td class="px-6 py-4 text-right">
                  <div class="relative inline-block js-menu">
                    <button
                      type="button"
                      class="js-menu-toggle material-symbols-outlined text-outline hover:text-primary transition-colors p-1 rounded-lg hover:bg-surface-container-high">
                      more_vert
                    </button>
                    <div
                      class="js-menu-panel hidden absolute right-0 mt-2 w-48 border border-outline-variant/50 rounded-xl shadow-xl transition-all duration-200 z-50 overflow-hidden bg-white">
                      <div class="py-1.5">
                        <a class="flex items-center gap-3 px-4 py-2 text-body-md text-on-surface hover:bg-surface-container-low transition-colors"
                          href="editStore.php">
                          <span class="material-symbols-outlined text-secondary text-[20px]">edit</span>
                          <span class="font-medium">Edit</span>
                        </a>
                        <div class="border-t border-outline-variant/30 my-1 mx-2"></div>
                        <a class="flex items-center gap-3 px-4 py-2 text-body-md text-error hover:bg-error-container/40 transition-colors"
                          href="#">
                          <span class="material-symbols-outlined text-[20px]">delete</span>
                          <span class="font-bold">Delete</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <!-- Row -->
              <tr class="hover:bg-surface-container-low transition-colors group">
                <!-- Name + location -->
                <td class="px-6 py-4">
                  <div class="flex items-center gap-3.5">
                    <img src="Aatman Logo.png"
                      alt="Aatman Infotech"
                      class="w-11 h-11 rounded-xl object-contain bg-white border border-outline-variant/60 p-1.5 shrink-0">
                    <div class="min-w-0">
                      <p class="text-body-md font-medium text-on-surface truncate uppercase">Aatman Infotech</p>
                      <p class="flex items-center gap-1 text-label-sm text-outline font-medium mt-0.5">
                        <span class="material-symbols-outlined text-[14px]">location_on</span>
                        Rajkot, India
                      </p>
                    </div>
                  </div>
                </td>
                <!-- Status -->
                <td class="px-6 py-4">
                  <span class="inline-flex items-center gap-1.5 py-1 px-2 rounded-full text-[10px] font-bold uppercase bg-rose-50 text-rose-700 border border-rose-100 whitespace-nowrap">
                    <span class="w-1.5 h-1.5 rounded-full bg-rose-500"></span> Inactive
                  </span>
                </td>
                <!-- Default -->
                <td class="px-6 py-4">
                  <span class="inline-flex items-center gap-1 py-1 px-2 rounded-full text-[10px] font-bold uppercase bg-rose-50 text-rose-700 border border-rose-100 whitespace-nowrap"><span class="material-symbols-outlined text-[14px] leading-none">cancel</span><span class="leading-none">No</span>
                </td>
                <!-- Created -->
                <td class="px-6 py-4 text-label-md text-on-surface-variant">11/06/2026 07:02:12</td>
                <!-- Action -->
                <td class="px-6 py-4 text-right">
                  <div class="relative inline-block js-menu">
                    <button
                      type="button"
                      class="js-menu-toggle material-symbols-outlined text-outline hover:text-primary transition-colors p-1 rounded-lg hover:bg-surface-container-high">
                      more_vert
                    </button>
                    <div
                      class="js-menu-panel hidden absolute right-0 mt-2 w-48 border border-outline-variant/50 rounded-xl shadow-xl transition-all duration-200 z-50 overflow-hidden bg-white">
                      <div class="py-1.5">
                        <a class="flex items-center gap-3 px-4 py-2 text-body-md text-on-surface hover:bg-surface-container-low transition-colors"
                          href="editStore.php">
                          <span class="material-symbols-outlined text-secondary text-[20px]">edit</span>
                          <span class="font-medium">Edit</span>
                        </a>
                        <div class="border-t border-outline-variant/30 my-1 mx-2"></div>
                        <a class="flex items-center gap-3 px-4 py-2 text-body-md text-error hover:bg-error-container/40 transition-colors"
                          href="#">
                          <span class="material-symbols-outlined text-[20px]">delete</span>
                          <span class="font-bold">Delete</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <!-- Row -->
              <tr class="hover:bg-surface-container-low transition-colors group">
                <!-- Name + location -->
                <td class="px-6 py-4">
                  <div class="flex items-center gap-3.5">
                    <img src="aw_logo.png"
                      alt="Celsius"
                      class="w-11 h-11 rounded-xl object-contain bg-white border border-outline-variant/60 p-1.5 shrink-0">
                    <div class="min-w-0">
                      <p class="text-body-md font-medium text-on-surface truncate uppercase">Celsius</p>
                      <p class="flex items-center gap-1 text-label-sm text-outline font-medium mt-0.5">
                        <span class="material-symbols-outlined text-[14px]">location_on</span>
                        Ahmedabad, India
                      </p>
                    </div>
                  </div>
                </td>
                <!-- Status -->
                <td class="px-6 py-4">
                  <span class="inline-flex items-center gap-1.5 py-1 px-2 rounded-full text-[10px] font-bold uppercase bg-emerald-50 text-emerald-700 border border-emerald-100 whitespace-nowrap">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Active
                  </span>
                </td>
                <!-- Default -->
                <td class="px-6 py-4">
                  <span class="inline-flex items-center gap-1 py-1 px-2 rounded-full text-[10px] font-bold uppercase bg-rose-50 text-rose-700 border border-rose-100 whitespace-nowrap"><span class="material-symbols-outlined text-[14px] leading-none">cancel</span><span class="leading-none">No</span>
                </td>
                <!-- Created -->
                <td class="px-6 py-4 text-label-md text-on-surface-variant">15/05/2026 12:30:00</td>
                <!-- Action -->
                <td class="px-6 py-4 text-right">
                  <div class="relative inline-block js-menu">
                    <button
                      type="button"
                      class="js-menu-toggle material-symbols-outlined text-outline hover:text-primary transition-colors p-1 rounded-lg hover:bg-surface-container-high">
                      more_vert
                    </button>
                    <div
                      class="js-menu-panel hidden absolute right-0 mt-2 w-48 border border-outline-variant/50 rounded-xl shadow-xl transition-all duration-200 z-50 overflow-hidden bg-white">
                      <div class="py-1.5">
                        <a class="flex items-center gap-3 px-4 py-2 text-body-md text-on-surface hover:bg-surface-container-low transition-colors"
                          href="editStore.php">
                          <span class="material-symbols-outlined text-secondary text-[20px]">edit</span>
                          <span class="font-medium">Edit</span>
                        </a>
                        <div class="border-t border-outline-variant/30 my-1 mx-2"></div>
                        <a class="flex items-center gap-3 px-4 py-2 text-body-md text-error hover:bg-error-container/40 transition-colors"
                          href="#">
                          <span class="material-symbols-outlined text-[20px]">delete</span>
                          <span class="font-bold">Delete</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <!-- Row -->
              <tr class="hover:bg-surface-container-low transition-colors group">
                <!-- Name + location -->
                <td class="px-6 py-4">
                  <div class="flex items-center gap-3.5">
                    <img src="aw_logo.png"
                      alt="Celsius"
                      class="w-11 h-11 rounded-xl object-contain bg-white border border-outline-variant/60 p-1.5 shrink-0">
                    <div class="min-w-0">
                      <p class="text-body-md font-medium text-on-surface truncate uppercase">Bole to Vadapav</p>
                      <p class="flex items-center gap-1 text-label-sm text-outline font-medium mt-0.5">
                        <span class="material-symbols-outlined text-[14px]">location_on</span>
                        Rajkot, India
                      </p>
                    </div>
                  </div>
                </td>
                <!-- Status -->
                <td class="px-6 py-4">
                  <span class="inline-flex items-center gap-1.5 py-1 px-2 rounded-full text-[10px] font-bold uppercase bg-rose-50 text-rose-700 border border-rose-100 whitespace-nowrap">
                    <span class="w-1.5 h-1.5 rounded-full bg-rose-500"></span> Inactive
                  </span>
                </td>
                <!-- Default -->
                <td class="px-6 py-4">
                  <span class="inline-flex items-center gap-1 py-1 px-2 rounded-full text-[10px] font-bold uppercase bg-emerald-50 text-emerald-700 border border-emerald-100 whitespace-nowrap"><span class="material-symbols-outlined text-[14px] leading-none">check_circle</span><span class="leading-none">Yes</span>
                </td>
                <!-- Created -->
                <td class="px-6 py-4 text-label-md text-on-surface-variant">15/05/2026 12:30:00</td>
                <!-- Action -->
                <td class="px-6 py-4 text-right">
                  <div class="relative inline-block js-menu">
                    <button
                      type="button"
                      class="js-menu-toggle material-symbols-outlined text-outline hover:text-primary transition-colors p-1 rounded-lg hover:bg-surface-container-high">
                      more_vert
                    </button>
                    <div
                      class="js-menu-panel hidden absolute right-0 mt-2 w-48 border border-outline-variant/50 rounded-xl shadow-xl transition-all duration-200 z-50 overflow-hidden bg-white">
                      <div class="py-1.5">
                        <a class="flex items-center gap-3 px-4 py-2 text-body-md text-on-surface hover:bg-surface-container-low transition-colors"
                          href="editStore.php">
                          <span class="material-symbols-outlined text-secondary text-[20px]">edit</span>
                          <span class="font-medium">Edit</span>
                        </a>
                        <div class="border-t border-outline-variant/30 my-1 mx-2"></div>
                        <a class="flex items-center gap-3 px-4 py-2 text-body-md text-error hover:bg-error-container/40 transition-colors"
                          href="#">
                          <span class="material-symbols-outlined text-[20px]">delete</span>
                          <span class="font-bold">Delete</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>

        <!-- Pagination -->
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
      </div>
    </section>
    <?php include('footer.php'); ?>
  </main>
  <!-- Micro-interaction Scripts -->
   <?php include('script.php'); ?>
</body>
 
</html>