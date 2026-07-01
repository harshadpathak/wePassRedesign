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
            <span class="material-symbols-outlined text-[14px] text-gray">home</span>
            <span class="text-gray font-normal">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray-500 font-normal">Countries</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Countries</h2>
        </div>
        <div class="flex items-center gap-3">
          <button
            class="flex items-center gap-2 bg-white border border-outline-variant/50 text-on-surface px-6 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold shadow-sm"
            onclick="document.getElementById('filter-panel').classList.toggle('hidden')">
            <span class="material-symbols-outlined text-[20px]">filter_alt</span>
            <span class="">Filter</span>
          </button>
          <a href="createCountry.php"
            class="flex items-center gap-2 bg-brand-gradient text-on-primary px-4 py-2.5 rounded-lg text-[14px] shadow-lg shadow-primary/20 hover:shadow-xl hover:opacity-90 active:scale-[0.98] transition-all font-bold">
            <span class="material-symbols-outlined text-sm">add</span>
            Add Country
          </a>
        </div>
      </div>
      <div
          class="bg-white rounded-2xl border border-outline-variant p-6 shadow-sm transition-all duration-300 overflow-hidden hidden"
          id="filter-panel">
          <div class="flex flex-col gap-2">
            <div class="flex flex-col gap-2">
              <h3 class="text-primary font-display font-bold text-headline-md">Filter Countries</h3>
              <p class="text-gray-400 text-body-md">Refine your search to find specific templates</p>
            </div>
            <div class="border-t border-outline-variant/30"></div>
            <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-end">
              <!-- Search -->
              <div class="md:col-span-3 space-y-2">
                <label class="text-on-surface font-semibold text-label-md">Search:</label>
                <div class="relative">
                  <input
                    class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                    placeholder="Search by country name..." type="text">
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

      <!-- Table Card -->
      <div class="overflow-hidden rounded-2xl border border-outline-variant/60 bg-surface shadow-sm [&:has(.js-menu-panel:not(.hidden))]:overflow-visible">
        <!-- Table -->
        <div class="overflow-x-auto [&:has(.js-menu-panel:not(.hidden))]:overflow-visible">
          <table class="w-full border-collapse text-left">
            <thead>
              <tr class="bg-surface-container-low/60">
                <th class="w-16 px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">#</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Country</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Created</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant text-right">Action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-outline-variant/50">
              <?php
              $countries = [
                ['id' => 1,   'name' => 'Afghanistan',          'created' => '30/04/2026 06:12:01'],
                ['id' => 264, 'name' => 'Åland Islands',        'created' => '30/04/2026 06:12:02'],
                ['id' => 2,   'name' => 'Albania',              'created' => '30/04/2026 06:12:01'],
                ['id' => 3,   'name' => 'Algeria',              'created' => '30/04/2026 06:12:01'],
                ['id' => 4,   'name' => 'American Samoa',       'created' => '30/04/2026 06:12:01'],
                ['id' => 5,   'name' => 'Andorra',              'created' => '30/04/2026 06:12:01'],
              ];

              foreach ($countries as $i => $country):
              ?>
              <tr class="hover:bg-surface-container-low transition-colors group">
                <!-- # -->
                <td class="px-6 py-4">
                  <span class="text-body-md font-semibold text-outline"><?= $i + 1 ?></span>
                </td>
                <!-- Country -->
                <td class="px-6 py-4">
                  <div class="flex items-center gap-3">
                    <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-primary text-on-primary shadow-sm shadow-primary/30">
                      <span class="material-symbols-outlined text-[20px]">public</span>
                    </span>
                    <div class="min-w-0">
                      <p class="text-body-md text-on-surface font-medium"><?= htmlspecialchars($country['name']) ?></p>
                      <p class="text-label-sm text-outline font-mono whitespace-nowrap font-medium">ID:<?= htmlspecialchars($country['id']) ?></p>
                    </div>
                  </div>
                </td>
                <!-- Created -->
                <td class="px-6 py-4">
                  <span class="py-4 text-label-md text-on-surface-variant"><?= htmlspecialchars($country['created']) ?></span>
                </td>
                <!-- Action -->
                <td class="cell-action px-6 py-4 text-right">
                  <div class="relative inline-block js-menu">
                    <button type="button"
                      class="js-menu-toggle material-symbols-outlined text-outline group-hover:text-primary transition-colors p-1 rounded-lg hover:bg-surface-container-high">
                      more_vert
                    </button>
                    <div class="js-menu-panel hidden absolute right-0 mt-2 w-44 border border-outline-variant/50 rounded-xl shadow-xl transition-all duration-200 z-50 overflow-hidden bg-white">
                      <div class="py-1.5">
                        <a class="flex items-center gap-3 px-4 py-2 text-body-md text-on-surface hover:bg-surface-container-low transition-colors" href="editCountry.php">
                          <span class="material-symbols-outlined text-secondary text-[20px]">edit</span>
                          <span class="font-medium">Edit</span>
                        </a>
                        <a class="flex items-center gap-3 px-4 py-2 text-body-md text-error hover:bg-error-container/40 transition-colors" href="#">
                          <span class="material-symbols-outlined text-[20px]">delete</span>
                          <span class="font-medium">Delete</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>

        <!-- Footer / Pagination -->
        <div class="flex flex-col gap-4 border-t border-outline-variant/60 px-6 py-4 sm:flex-row sm:items-center sm:justify-between">
          <p class="text-label-md text-secondary">
            Showing <span class="font-semibold text-on-surface">1</span> to
            <span class="font-semibold text-on-surface">10</span> of
            <span class="font-semibold text-on-surface">11</span> results
          </p>
          <nav class="flex items-center gap-1" aria-label="Pagination">
            <button type="button"
              class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-outline-variant text-on-surface-variant transition-all hover:bg-surface-container-high disabled:cursor-not-allowed disabled:opacity-40"
              disabled aria-label="Previous page">
              <span class="material-symbols-outlined text-[20px]">chevron_left</span>
            </button>
            <button type="button" aria-current="page"
              class="inline-flex h-9 min-w-9 items-center justify-center rounded-lg bg-primary px-3 text-body-md font-semibold text-on-primary shadow-sm">1</button>
            <button type="button"
              class="inline-flex h-9 min-w-9 items-center justify-center rounded-lg border border-outline-variant px-3 text-body-md font-semibold text-on-surface-variant transition-all hover:bg-surface-container-high">2</button>
            <button type="button"
              class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-outline-variant text-on-surface-variant transition-all hover:bg-surface-container-high"
              aria-label="Next page">
              <span class="material-symbols-outlined text-[20px]">chevron_right</span>
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