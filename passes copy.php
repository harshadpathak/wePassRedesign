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
      <!-- Header Section -->
      <div class="flex items-end justify-between">
        <div class="space-y-1">
          <nav class="flex items-center gap-2 text-label-sm text-outline mb-1">
            <span class="material-symbols-outlined text-[14px] text-blue-600">home</span> <span class="text-blue-600 font-semibold">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-on-surface font-semibold">Passes</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Passes</h2>
        </div>
        <div class="flex items-center gap-3">
          <button
            class="flex items-center gap-2 bg-white border border-outline-variant/50 text-on-surface px-4 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold shadow-sm"
            onclick="document.getElementById('filter-panel').classList.toggle('hidden')">
            <span class="material-symbols-outlined text-[20px]">filter_alt</span>
            <span class="">Filter</span>
          </button>
        </div>
      </div>
      <!-- Summary Cards / Tabs -->
      <div class="border border-outline-variant/50 rounded-2xl p-4 w-full bg-surface-container-lowest">
        <div class="flex flex-col md:flex-row items-stretch gap-6">
          <!-- Records Section -->
          <div class="flex-1 flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary shrink-0">
              <span class="material-symbols-outlined text-[24px]">mail</span>
            </div>
            <div class="flex flex-col">
              <h3 class="text-on-surface font-bold text-body-lg font-display mb-1">Records</h3>
              <p class="text-outline text-label-md font-body-md">Email delivery logs for personalized passes</p>
            </div>
          </div>
          <!-- Divider -->
          <div class="hidden md:block w-px bg-outline-variant/30"></div>
          <!-- Installs Section -->
          <div class="flex-1 flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary shrink-0">
              <span class="material-symbols-outlined text-[24px]">inbox</span>
            </div>
            <div class="flex flex-col">
              <h3 class="text-on-surface font-bold text-body-lg font-display mb-1">Installs</h3>
              <p class="text-outline text-label-md font-body-md">Installation events across wallet platforms</p>
            </div>
          </div>
          <!-- Divider -->
          <div class="hidden md:block w-px bg-outline-variant/30"></div>
          <!-- Analytics Section -->
          <div class="flex-1 flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary shrink-0">
              <span class="material-symbols-outlined text-[24px]">query_stats</span>
            </div>
            <div class="flex flex-col">
              <h3 class="text-on-surface font-bold text-body-lg font-display mb-1">Analytics</h3>
              <p class="text-outline text-label-md font-body-md">Distribution and activity reports</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Table Container -->
      <div
        class="bg-white rounded-2xl border border-outline-variant p-6 mb-6 shadow-sm transition-all duration-300 overflow-hidden hidden"
        id="filter-panel">
        <div class="flex flex-col gap-2">
          <div class="flex flex-col gap-2">
            <h3 class="text-primary font-display font-bold text-headline-md">Filter Pass Templates</h3>
            <p class="text-on-surface-variant text-body-md">Refine your search to find specific templates</p>
          </div>
          <div class="border-t border-outline-variant/30"></div>
          <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-end">
            <!-- Date Range -->
            <div class="md:col-span-3 space-y-2">
              <label class="text-on-surface font-bold text-label-md">Date Range</label>
              <div class="relative">
                <span
                  class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-primary text-[20px]">calendar_month</span>
                <input
                  class="w-full bg-surface-container-low border-outline-variant rounded-lg py-2.5 pl-10 pr-4 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                  placeholder="Select date range" readonly="" type="text">
              </div>
            </div>
            <!-- Template Type -->
            <div class="md:col-span-3 space-y-2">
              <label class="text-on-surface font-bold text-label-md">Template Type</label>
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
              <label class="text-on-surface font-bold text-label-md">Search</label>
              <div class="relative">
                <input
                  class="w-full bg-surface-container-low border-outline-variant rounded-lg py-2.5 px-4 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                  placeholder="Search by name, ID, or keyword..." type="text">
              </div>
            </div>
            <!-- Actions -->
            <div class="md:col-span-3 flex items-center gap-3">
              <button
                class="flex-1 flex items-center justify-center gap-2 bg-brand-gradient text-on-primary px-4 py-2.5 rounded-lg text-[14px] shadow-md shadow-primary/20 hover:opacity-95 transition-all font-bold">
                <span class="material-symbols-outlined text-[20px]">search</span>
                Search
              </button>
              <button
                class="flex-1 flex items-center justify-center gap-2 bg-surface border border-outline-variant text-on-surface-variant px-4 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold">
                <span class="material-symbols-outlined text-[20px]">cancel</span>
                Clear
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-white rounded-2xl border border-outline-variant overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
          <table class="w-full text-left border-collapse">
            <thead class="bg-surface-container-low/50">
              <tr>
                <th
                  class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">
                  Pass Template</th>
                <th
                  class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">
                  Records</th>
                <th
                  class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">
                  Installs</th>
                <th
                  class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant text-right">
                  Analytics</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-outline-variant/30">
              <tr class="hover:bg-surface-container-low transition-colors group">
                <td class="px-6 py-4">
                  <div class="flex items-center gap-4">
                    <div class="w-10 h-10 rounded-lg bg-primary text-white flex items-center justify-center"><span
                        class="material-symbols-outlined">person</span></div>
                    <div>
                      <p class="text-body-md text-on-surface font-bold">GIFTCARDLENA</p>
                      <p class="text-label-sm text-outline">Gift Card</p>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <div
                    class="inline-flex flex-col items-center justify-center bg-amber-50 border border-amber-100 rounded-lg px-4 py-2 min-w-[100px]">
                    <div class="flex items-center gap-2 whitespace-nowrap text-amber-700">
                      <div class="flex flex-col items-center">
                        <div class="flex items-center gap-1">
                          <span class="material-symbols-outlined text-sm">receipt_long</span>
                          <span class="font-bold text-lg">1</span>
                        </div>
                        <span class="text-[10px] font-bold uppercase tracking-wider">Records</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <div
                    class="inline-flex flex-col items-center justify-center bg-emerald-50 border border-emerald-100 rounded-lg px-4 py-2 min-w-[100px]">
                    <div class="flex flex-col items-center gap-1 text-emerald-700">
                      <div class="flex items-center gap-1"><span
                          class="material-symbols-outlined text-sm">print</span><span class="font-bold text-lg">1</span>
                      </div><span class="text-[10px] font-bold uppercase tracking-wider">Installed</span>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 text-right"><button
                    class="inline-flex items-center gap-2 bg-primary text-white px-4 py-2 rounded-lg text-[14px] font-bold hover:opacity-90 transition-all"><span
                      class="material-symbols-outlined text-sm">analytics</span>Analytics</button></td>
              </tr>
              <tr class="hover:bg-surface-container-low transition-colors group">
                <td class="px-6 py-4">
                  <div class="flex items-center gap-4">
                    <div class="w-10 h-10 rounded-lg bg-primary text-white flex items-center justify-center"><span
                        class="material-symbols-outlined">person</span></div>
                    <div>
                      <p class="text-body-md text-on-surface font-bold">GIFTCARD1</p>
                      <p class="text-label-sm text-outline">Gift Card</p>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <div
                    class="inline-flex flex-col items-center justify-center bg-amber-50 border border-amber-100 rounded-lg px-4 py-2 min-w-[100px]">
                    <div class="flex items-center gap-2 whitespace-nowrap text-amber-700">
                      <div class="flex flex-col items-center">
                        <div class="flex items-center gap-1"><span
                            class="material-symbols-outlined text-sm">receipt_long</span><span
                            class="font-bold text-lg">1</span></div><span
                          class="text-[10px] font-bold uppercase tracking-wider">Records</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <div
                    class="inline-flex flex-col items-center justify-center bg-emerald-50 border border-emerald-100 rounded-lg px-4 py-2 min-w-[100px]">
                    <div class="flex flex-col items-center gap-1 text-emerald-700">
                      <div class="flex items-center gap-1"><span
                          class="material-symbols-outlined text-sm">print</span><span class="font-bold text-lg">1</span>
                      </div><span class="text-[10px] font-bold uppercase tracking-wider">Installed</span>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 text-right"><button
                    class="inline-flex items-center gap-2 bg-primary text-white px-4 py-2 rounded-lg text-[14px] font-bold hover:opacity-90 transition-all"><span
                      class="material-symbols-outlined text-sm">analytics</span>Analytics</button></td>
              </tr>
              <tr class="hover:bg-surface-container-low transition-colors group">
                <td class="px-6 py-4">
                  <div class="flex items-center gap-4">
                    <div class="w-10 h-10 rounded-lg bg-primary text-white flex items-center justify-center"><span
                        class="material-symbols-outlined">person</span></div>
                    <div>
                      <p class="text-body-md text-on-surface font-bold">MEMBER10</p>
                      <p class="text-label-sm text-outline">Membership Card</p>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <div
                    class="inline-flex flex-col items-center justify-center bg-amber-50 border border-amber-100 rounded-lg px-4 py-2 min-w-[100px]">
                    <div class="flex flex-col items-center gap-1 text-amber-700">
                      <div class="flex items-center gap-1"><span
                          class="material-symbols-outlined text-sm">receipt_long</span><span
                          class="font-bold text-lg">2</span></div><span
                        class="text-[10px] font-bold uppercase tracking-wider">Records</span>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <div
                    class="inline-flex flex-col items-center justify-center bg-emerald-50 border border-emerald-100 rounded-lg px-4 py-2 min-w-[100px]">
                    <div class="flex flex-col items-center gap-1 text-emerald-700">
                      <div class="flex items-center gap-1"><span
                          class="material-symbols-outlined text-sm">print</span><span class="font-bold text-lg">2</span>
                      </div><span class="text-[10px] font-bold uppercase tracking-wider">Installed</span>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 text-right"><button
                    class="inline-flex items-center gap-2 bg-primary text-white px-4 py-2 rounded-lg text-[14px] font-bold hover:opacity-90 transition-all"><span
                      class="material-symbols-outlined text-sm">analytics</span>Analytics</button></td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- Pagination -->
        <div
          class="px-6 py-4 flex items-center justify-between border-t border-outline-variant bg-surface-container-lowest">
          <p class="text-label-sm text-outline">Showing 1 to 5 of 793 entries</p>
          <div class="flex items-center gap-2">
            <button class="p-2 rounded-lg hover:bg-surface-container text-outline disabled:opacity-30" disabled="">
              <span class="material-symbols-outlined">first_page</span>
            </button>
            <button class="p-2 rounded-lg hover:bg-surface-container text-outline disabled:opacity-30" disabled="">
              <span class="material-symbols-outlined">chevron_left</span>
            </button>
            <div class="flex items-center gap-1">
              <button class="w-8 h-8 rounded-lg bg-brand-gradient text-on-primary text-[14px] shadow-sm">1</button>
              <button
                class="w-8 h-8 rounded-lg hover:bg-surface-container text-on-surface-variant text-[14px] font-bold transition-colors">2</button>
              <button
                class="w-8 h-8 rounded-lg hover:bg-surface-container text-on-surface-variant text-[14px] font-bold transition-colors">3</button>
              <span class="mx-1 text-outline">...</span>
              <button
                class="w-8 h-8 rounded-lg hover:bg-surface-container text-on-surface-variant text-[14px] font-bold transition-colors">159</button>
            </div>
            <button class="p-2 rounded-lg hover:bg-surface-container text-on-surface-variant">
              <span class="material-symbols-outlined">chevron_right</span>
            </button>
            <button class="p-2 rounded-lg hover:bg-surface-container text-on-surface-variant">
              <span class="material-symbols-outlined">last_page</span>
            </button>
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