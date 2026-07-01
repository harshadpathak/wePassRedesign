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

            <!-- Empty State Row -->
            <tr>
              <td colspan="7" class="cell-empty px-6 py-16">
                <div class="flex flex-col items-center justify-center text-center max-w-md mx-auto">
                  <div class="relative mb-5">
                    <div class="absolute inset-0 bg-primary/10 rounded-full blur-xl"></div>
                    <div class="w-12 h-12 rounded-2xl bg-brand-gradient text-white flex items-center justify-center shrink-0 shadow-md shadow-primary/20">
                      <span class="material-symbols-outlined text-[26px]">campaign</span>
                    </div>
                  </div>
                  <h3 class="font-display text-headline-md font-bold text-on-surface">No campaigns yet</h3>
                  <p class="text-body-md text-gray-400 mt-2 mb-6">Launch your first campaign to start engaging your audience and growing your reach.</p>
                  <a href="createCampaign.php"
                    class="flex items-center gap-2 bg-brand-gradient text-on-primary px-4 py-2.5 rounded-lg text-[14px] shadow-lg shadow-primary/20 hover:shadow-xl hover:opacity-90 active:scale-[0.98] transition-all font-bold">
                    <span class="material-symbols-outlined text-sm">add</span>
                    Create your first campaign
                  </a>
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
    <?php include('footer.php'); ?>
  </main>
  <!-- Micro-interaction Scripts -->
   <?php include('script.php'); ?>
</body>

</html>

