<!DOCTYPE html>
<html class="light" lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WePass - Passes</title>
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
      <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div class="space-y-1">
          <nav class="flex items-center gap-2 text-label-sm text-outline mb-1">
            <span class="material-symbols-outlined text-[14px] text-gray">home</span> <span class="text-gray font-normal">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray-500 font-normal">Passes</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Passes</h2>
        </div>
        <div class="flex items-center gap-3">
          <button
            class="flex items-center gap-2 bg-white border border-outline-variant/50 text-on-surface px-6 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold shadow-sm"
            onclick="document.getElementById('filter-panel').classList.toggle('hidden')">
            <span class="material-symbols-outlined text-[20px]">filter_alt</span>
            <span class="">Filter</span>
          </button>
        </div>
      </div>
      <!-- Summary Cards / Tabs -->
      <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
        <div
          class="bg-surface-container-lowest p-4 rounded-xl border border-primary/40 shadow-sm flex items-center gap-4 cursor-pointer relative overflow-hidden group">
          <div class="bg-brand-gradient text-on-primary p-2.5 rounded-lg shadow-sm flex items-center justify-center">
            <span class="material-symbols-outlined font-variation-fill">credit_card</span>
          </div>
          <div class="relative z-10">
            <p class="text-label-sm text-gray-400 font-medium">All Passes</p>
            <p class="text-headline-md text-primary font-bold">261</p>
          </div>
        </div>
        <div
          class="bg-white p-4 rounded-xl border border-outline-variant transition-colors flex items-center gap-4 cursor-pointer">
          <div class="bg-primary/10 text-primary p-2.5 rounded-lg flex items-center justify-center">
            <span class="material-symbols-outlined">person</span>
          </div>
          <div>
            <p class="text-label-sm text-gray-400 font-medium">Personalized</p>
            <p class="text-headline-md font-bold">188</p>
          </div>
        </div>
        <div
          class="bg-white p-4 rounded-xl border border-outline-variant transition-colors flex items-center gap-4 cursor-pointer">
          <div class="bg-tertiary-container/40 text-tertiary p-2.5 rounded-lg flex items-center justify-center">
            <span class="material-symbols-outlined">campaign</span>
          </div>
          <div>
            <p class="text-label-sm text-gray-400 font-medium">Advertising</p>
            <p class="text-headline-md font-bold">73</p>
          </div>
        </div>
      </div>
      <!-- Filter Panel -->
      <div
        class="bg-white rounded-2xl border border-outline-variant p-6 mb-6 shadow-sm transition-all duration-300 overflow-hidden hidden"
        id="filter-panel">
        <div class="flex flex-col gap-2">
          <div class="flex flex-col gap-2">
            <h3 class="text-primary font-display font-bold text-headline-md">Filter Pass Records</h3>
            <p class="text-gray-400 text-body-md">Refine your search to find specific passes globally</p>
          </div>
          <div class="border-t border-outline-variant/30"></div>
          <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-end">
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
      <?php
        $passes = [
          ['id' => '18551e100cd65ae8f39821cdfe8ff8ef', 'record' => 263, 'rtype' => 'Manual', 'type' => 'personalized', 'name' => 'Jp',       'email' => 'jenilv.aatmaninfo@gmail.com', 'company' => 'Aatman Infotech', 'template' => 'Gift-Card-28', 'category' => 'Gift Card', 'tpl_id' => 'db1e59e3ffc2c8daad5d2c6bf96d8068b4446334', 'created_by' => 'Hardik Savani', 'created_email' => 'savanihd@gmail.com', 'updated' => '25/06/2026 09:31:24'],
          ['id' => '23238c27da68914df50c47929d32d87d', 'record' => 262, 'rtype' => 'Manual', 'type' => 'personalized', 'name' => 'Jenil',    'email' => 'jenilv.aatmaninfo@gmail.com', 'company' => 'Aatman Infotech', 'template' => 'Gift-Card-27', 'category' => 'Gift Card', 'tpl_id' => '37a3d1d6ff5a215b4f477d12689250b8184cb493', 'created_by' => 'Hardik Savani', 'created_email' => 'savanihd@gmail.com', 'updated' => '25/06/2026 09:29:57'],
          ['id' => '1eecf35ae86a068ab58c3b3dba0c03e8', 'record' => 261, 'rtype' => 'Import', 'type' => 'personalized', 'name' => 'John Duo', 'email' => 'johnduo@gmail.com',           'company' => 'Aatman Infotech', 'template' => 'Gift-Card-27', 'category' => 'Gift Card', 'tpl_id' => '37a3d1d6ff5a215b4f477d12689250b8184cb493', 'created_by' => 'Hardik Savani', 'created_email' => 'savanihd@gmail.com', 'updated' => '22/06/2026 10:31:16'],
          ['id' => '7430491be3e4c9f7d918a5fe9b3d9333', 'record' => 260, 'rtype' => 'Import', 'type' => 'advertising',  'name' => 'John Duo', 'email' => 'johnduo@gmail.com',           'company' => 'Aatman Infotech', 'template' => 'Gift-Card-27', 'category' => 'Gift Card', 'tpl_id' => '37a3d1d6ff5a215b4f477d12689250b8184cb493', 'created_by' => 'Hardik Savani', 'created_email' => 'savanihd@gmail.com', 'updated' => '22/06/2026 04:46:17'],
          ['id' => '51f9c092e935a5babda140380064baf6', 'record' => 259, 'rtype' => 'Import', 'type' => 'personalized', 'name' => 'John Duo', 'email' => 'johnduo@gmail.com',           'company' => 'Aatman Infotech', 'template' => 'Gift-Card-27', 'category' => 'Gift Card', 'tpl_id' => '37a3d1d6ff5a215b4f477d12689250b8184cb493', 'created_by' => 'Hardik Savani', 'created_email' => 'savanihd@gmail.com', 'updated' => '22/06/2026 04:45:33'],
          ['id' => '87b6bdcc2e3421ff84793c517c61170f', 'record' => 258, 'rtype' => 'Manual', 'type' => 'personalized', 'name' => 'Jenil',    'email' => 'jenilv.aatmaninfo@gmail.com', 'company' => 'Aatman Infotech', 'template' => 'Gift-Card-27', 'category' => 'Gift Card', 'tpl_id' => '37a3d1d6ff5a215b4f477d12689250b8184cb493', 'created_by' => 'Hardik Savani', 'created_email' => 'savanihd@gmail.com', 'updated' => '18/06/2026 10:09:06'],
          ['id' => 'a65cfb4de67730e61aa7252f63ada1b9', 'record' => 257, 'rtype' => 'Import', 'type' => 'advertising',  'name' => 'John Duo', 'email' => 'johnduo@gmail.com',           'company' => 'Aatman Infotech', 'template' => 'Gift-Card-24', 'category' => 'Gift Card', 'tpl_id' => '26380112009e68386f3d39ed5e8ca3e7ea5a87c6', 'created_by' => 'Hardik Savani', 'created_email' => 'savanihd@gmail.com', 'updated' => '17/06/2026 12:15:47'],
          ['id' => 'f10a3d146807a6a4855717d67ff41aed', 'record' => 256, 'rtype' => 'Import', 'type' => 'personalized', 'name' => 'John Duo', 'email' => 'johnduo@gmail.com',           'company' => 'Aatman Infotech', 'template' => 'Gift-Card-21', 'category' => 'Gift Card', 'tpl_id' => 'c0a8011a8f3d39ed5e8ca3e7ea5a87c61b9e2f44', 'created_by' => 'Hardik Savani', 'created_email' => 'savanihd@gmail.com', 'updated' => '17/06/2026 11:53:14'],
        ];
      ?>
      <div class="bg-white rounded-2xl border border-outline-variant overflow-hidden shadow-sm [&:has(.js-menu-panel:not(.hidden))]:overflow-visible">
        <div class="overflow-x-auto [&:has(.js-menu-panel:not(.hidden))]:overflow-visible">
          <table class="responsive-table w-full text-left border-collapse">
            <thead class="bg-surface-container-low/50">
              <tr>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Pass ID</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Name</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Company</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Pass Template</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Created By</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Updated</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant text-right">Action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-outline-variant/30">
              <?php foreach ($passes as $p):
                $isAd = $p['type'] === 'advertising';
                $avatarBg   = $isAd ? 'bg-tertiary-container/40 text-tertiary' : 'bg-primary/10 text-primary';
                $avatarIcon = $isAd ? 'campaign' : 'person';
              ?>
              <tr class="hover:bg-surface-container-low transition-colors group">
                <!-- Pass ID -->
                <td class="cell-main px-6 py-4">
                  <div class="flex items-center gap-4">
                    <div class="relative shrink-0">
                      <div class="w-10 h-10 rounded-xl <?= $avatarBg ?> flex items-center justify-center">
                        <span class="material-symbols-outlined font-variation-fill"><?= $avatarIcon ?></span>
                      </div>
                      <span class="absolute -top-0.5 -right-0.5 w-3 h-3 rounded-full bg-emerald-500 ring-2 ring-white" title="Active"></span>
                    </div>
                    <div class="min-w-0">
                      <p class="text-body-md text-on-surface font-medium font-mono truncate" title="<?= htmlspecialchars($p['id']) ?>"><?= htmlspecialchars($p['id']) ?></p>
                      <p class="text-label-sm text-gray-400">Record ID: <?= htmlspecialchars($p['record']) ?> &nbsp;•&nbsp; Type: <?= htmlspecialchars($p['rtype']) ?></p>
                    </div>
                  </div>
                </td>
                <!-- Name -->
                <td class="px-6 py-4" data-label="Name">
                  <p class="text-body-md text-on-surface font-medium"><?= htmlspecialchars($p['name']) ?></p>
                  <p class="text-label-sm text-gray-400"><?= htmlspecialchars($p['email']) ?></p>
                </td>
                <!-- Company -->
                <td class="px-6 py-4" data-label="Company">
                  <span class="inline-flex items-center gap-1.5 bg-surface-container-low border border-outline-variant rounded-lg px-2.5 py-1.5 text-label-md font-semibold text-secondary whitespace-nowrap">
                    <span class="material-symbols-outlined text-[16px] text-outline">apartment</span>
                    <?= htmlspecialchars($p['company']) ?>
                  </span>
                </td>
                <!-- Pass Template -->
                <td class="px-6 py-4" data-label="Pass Template">
                  <div class="flex items-center gap-2 flex-wrap">
                    <span class="text-body-md text-on-surface font-medium"><?= htmlspecialchars($p['template']) ?></span>
                    <span class="inline-flex items-center py-1 px-2 rounded-full text-[10px] font-bold uppercase bg-error-container/40 text-error border border-error/10 whitespace-nowrap"><?= htmlspecialchars($p['category']) ?></span>
                  </div>
                  <p class="text-label-sm text-outline font-mono whitespace-nowrap font-medium" title="<?= htmlspecialchars($p['tpl_id']) ?>">ID: <?= htmlspecialchars($p['tpl_id']) ?></p>
                </td>
                <!-- Created By -->
                <td class="px-6 py-4" data-label="Created By">
                  <p class="text-body-md text-on-surface font-medium"><?= htmlspecialchars($p['created_by']) ?></p>
                  <p class="text-label-sm text-gray-400"><?= htmlspecialchars($p['created_email']) ?></p>
                </td>
                <!-- Updated -->
                <td class="px-6 py-4 text-label-md text-on-surface-variant" data-label="Updated"><?= htmlspecialchars($p['updated']) ?></td>
                <!-- Action -->
                <td class="cell-action px-6 py-4 text-right">
                  <div class="relative inline-block js-menu">
                    <button type="button" class="js-menu-toggle material-symbols-outlined text-outline group-hover:text-primary transition-colors p-1 rounded-lg hover:bg-surface-container-high">more_vert</button>
                    <div class="js-menu-panel hidden absolute right-0 mt-2 w-48 border border-outline-variant/50 rounded-xl shadow-xl transition-all duration-200 z-50 overflow-hidden bg-white">
                      <div class="py-1.5">
                        <a class="flex items-center gap-3 px-4 py-2 text-body-md text-on-surface hover:bg-surface-container-low transition-colors" href="passesDetails.php"><span class="material-symbols-outlined text-secondary text-[20px]">visibility</span><span class="font-medium">View</span></a>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- Pagination -->
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 px-6 py-4 border-t border-outline-variant/60 bg-surface-container-low/30">
          <p class="text-label-md text-secondary">Showing <span class="font-semibold text-on-surface">1</span> to
            <span class="font-semibold text-on-surface">10</span> of
            <span class="font-semibold text-on-surface">261</span> results</p>
          <nav class="flex items-center gap-1.5">
            <button type="button" class="w-9 h-9 rounded-lg border border-outline-variant text-outline flex items-center justify-center hover:bg-surface-container-low disabled:opacity-40 disabled:cursor-not-allowed transition-all" disabled>
              <span class="material-symbols-outlined text-[18px]">chevron_left</span>
            </button>
            <button type="button" class="w-9 h-9 rounded-lg bg-primary text-white font-bold text-label-md flex items-center justify-center shadow-sm">1</button>
            <button type="button" class="w-9 h-9 rounded-lg border border-outline-variant text-on-surface font-semibold text-label-md flex items-center justify-center hover:bg-surface-container-low transition-all">2</button>
            <button type="button" class="w-9 h-9 rounded-lg border border-outline-variant text-on-surface font-semibold text-label-md flex items-center justify-center hover:bg-surface-container-low transition-all">3</button>
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
