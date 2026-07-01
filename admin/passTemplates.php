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
      <!-- Header Section -->
      <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div class="space-y-1">
          <nav class="flex items-center gap-2 text-label-sm text-outline mb-1">
            <span class="material-symbols-outlined text-[14px] text-gray">home</span> <span class="text-gray font-normal">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray-500 font-normal">Pass Templates</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Pass Templates</h2>
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
            <span class="material-symbols-outlined font-variation-fill">apps</span>
          </div>
          <div class="relative z-10">
            <p class="text-label-sm text-gray-400 font-medium">All Templates</p>
            <p class="text-headline-md text-primary font-bold">793</p>
          </div>
        </div>
        <div
          class="bg-white p-4 rounded-xl border border-outline-variant  transition-colors flex items-center gap-4 cursor-pointer">
          <div class="bg-blue-50 text-blue-600 p-2.5 rounded-lg flex items-center justify-center">
            <span class="material-symbols-outlined font-variation-fill">person</span>
          </div>
          <div>
            <p class="text-label-sm text-gray-400 font-medium">Personalized Unique</p>
            <p class="text-headline-md font-bold">542</p>
          </div>
        </div>
        <div
          class="bg-white p-4 rounded-xl border border-outline-variant transition-colors flex items-center gap-4 cursor-pointer">
          <div class="bg-tertiary-container/40 text-tertiary p-2.5 rounded-lg flex items-center justify-center">
            <span class="material-symbols-outlined font-variation-fill">campaign</span>
          </div>
          <div>
            <p class="text-label-sm text-gray-400 font-medium">Generic Advertising</p>
            <p class="text-headline-md font-bold">251</p>
          </div>
        </div>
      </div>
      <!-- Table Container -->
      <div
        class="bg-white rounded-2xl border border-outline-variant p-6 mb-6 shadow-sm transition-all duration-300 overflow-hidden hidden"
        id="filter-panel">
        <div class="flex flex-col gap-4">
          <div class="space-y-1">
            <h3 class="text-primary font-display font-bold text-headline-md">Filter Pass Templates</h3>
            <p class="text-gray-400 text-body-md">Refine your search to find specific templates globally</p>
          </div>
          <div class="border-t border-outline-variant/30"></div>
          <!-- Row 1: 4 fields -->
          <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <!-- Template Type -->
            <div class="space-y-2">
              <label class="text-on-surface font-semibold text-label-md">Template Type</label>
              <select class="w-full js-select2">
                <option>All Types</option>
                <option>Personalized Unique</option>
                <option>Generic Advertising</option>
              </select>
            </div>
            <!-- Created By -->
            <div class="space-y-2">
              <label class="text-on-surface font-semibold text-label-md">Created By</label>
              <input type="text" placeholder="Search by name or email..."
                class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
            </div>
            <!-- Template ID -->
            <div class="space-y-2">
              <label class="text-on-surface font-semibold text-label-md">Template ID</label>
              <input type="text" placeholder="Search Template ID..."
                class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
            </div>
            <!-- Template Name -->
            <div class="space-y-2">
              <label class="text-on-surface font-semibold text-label-md">Template Name</label>
              <input type="text" placeholder="Search by template name..."
                class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
            </div>
          </div>
          <!-- Row 2: Company Name + Search -->
          <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-end">
            <div class="space-y-2">
              <label class="text-on-surface font-semibold text-label-md">Company Name</label>
              <select class="w-full js-select2" data-placeholder="Search by company name...">
                <option value=""></option>
                <option>Aatman Infotech</option>
                <option>Wepass Test</option>
                <option>3ds</option>
              </select>
            </div>
            <div class="md:col-start-4 flex items-center gap-3">
              <button
                class="flex-1 flex items-center justify-center gap-2 bg-brand-gradient text-on-primary px-4 py-3 rounded-lg text-[14px] shadow-md shadow-primary/20 hover:opacity-95 active:scale-[0.98] transition-all font-bold">
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
        $templates = [
          ['name' => 'EVENT-TICKET-55',                    'id' => 'a7a7d8348370f19afe6e87dd1baea31edda914dc', 'type' => 'Event Ticket',    'kind' => 'personalized', 'created' => '22/06/2026 17:42:37', 'updated' => '22/06/2026 17:42:39', 'regen' => true],
          ['name' => 'GENERIC PASS TEMPLATE 1 UPDATE',     'id' => '9be9f26953a52d2545d83e5412e15f54b4c97ec8', 'type' => 'Generic Pass',    'kind' => 'personalized', 'created' => '22/06/2026 17:26:45', 'updated' => '22/06/2026 17:29:39', 'regen' => true],
          ['name' => 'GENERIC PASS TEMPLATE 01 UPDATE',    'id' => '41ad5d7b32845a5c54d456c7a1ad7e1caf17f762', 'type' => 'Generic Pass',    'kind' => 'personalized', 'created' => '22/06/2026 17:24:26', 'updated' => '22/06/2026 17:31:16', 'regen' => true],
          ['name' => 'GIFT-CARD',                          'id' => '38175e065f981274cab37a0b5a097426f99bc1d9', 'type' => 'Gift Card',       'kind' => 'personalized', 'created' => '19/06/2026 12:24:17', 'updated' => '19/06/2026 12:24:20', 'regen' => true],
          ['name' => 'AATMAN COUPON CARD UPDATE 22',       'id' => '2a40e36d3e8e4b219c2b9c0ea8aad038267d74e7', 'type' => 'Coupon',          'kind' => 'personalized', 'created' => '18/06/2026 18:25:38', 'updated' => '18/06/2026 18:26:52', 'regen' => true],
          ['name' => 'MEMBERSHIP-CARD-6',                  'id' => 'bec734d85f166a0924bd8dcc451accbd5f98bf33', 'type' => 'Membership Card', 'kind' => 'personalized', 'created' => '18/06/2026 15:38:06', 'updated' => '18/06/2026 15:38:08', 'regen' => false],
          ['name' => 'INSURANCE-PASS-2026',                'id' => '65eab1ceec8a7b5cd9315ec2a03cf511bdad18d9', 'type' => 'Insurance Pass',  'kind' => 'personalized', 'created' => '17/06/2026 18:38:45', 'updated' => '17/06/2026 18:38:46', 'regen' => false],
          ['name' => 'BUSINESS-CARD-1',                    'id' => '7f9c40c04d9b5af61750e8e2f4b7672e9a403711', 'type' => 'Business Card',   'kind' => 'personalized', 'created' => '17/06/2026 15:07:20', 'updated' => '17/06/2026 19:17:43', 'regen' => false],
          ['name' => 'WARRANTY-PASS-2',                    'id' => 'bba97644ed1ad915f45ae2618d55d3923fb63eca', 'type' => 'Warranty Pass',   'kind' => 'personalized', 'created' => '16/06/2026 18:16:08', 'updated' => '17/06/2026 12:28:41', 'regen' => false],
          ['name' => 'EVENT-TICKET',                       'id' => '9067e506b000807a756d3f13fbc193554e53b997', 'type' => 'Event Ticket',    'kind' => 'personalized', 'created' => '13/06/2026 12:10:16', 'updated' => '13/06/2026 12:10:25', 'regen' => false],
          ['name' => 'GIFT-CARD-UPDATE',                   'id' => '69ab3dda52d0f7a1483c7f723f26d008fa5382a2', 'type' => 'Gift Card',       'kind' => 'personalized', 'created' => '12/06/2026 14:51:59', 'updated' => '12/06/2026 15:01:00', 'regen' => false],
          ['name' => 'SHOES-STORE-ADVERTISING-PASS-UPDATE','id' => '424b204576af97ed0b12de1c1a21bed19b0b6eec', 'type' => 'Advertising',     'kind' => 'advertising',  'created' => '12/06/2026 11:30:46', 'updated' => '12/06/2026 12:22:56', 'regen' => false],
          ['name' => 'GENERIC PASS 02',                    'id' => 'a373a617cc08a2c0b20829c315c159deff1b67ce', 'type' => 'Generic Pass',    'kind' => 'personalized', 'created' => '10/06/2026 17:39:35', 'updated' => '10/06/2026 17:39:42', 'regen' => false],
        ];
      ?>
      <div class="bg-white rounded-2xl border border-outline-variant overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
          <table class="w-full text-left border-collapse min-w-[1200px]">
            <thead class="bg-surface-container-low/50">
              <tr>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Pass Template</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Company</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Type</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Created By</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Created</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Updated</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant text-right">Action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-outline-variant/30">
              <?php foreach ($templates as $t):
                $isAd = $t['kind'] === 'advertising';
                $iconBg = $isAd ? 'bg-amber-50 text-amber-600' : 'bg-blue-50 text-blue-600';
                $iconName = $isAd ? 'campaign' : 'person';
                $typeBadge = $isAd ? 'bg-amber-100 text-amber-700 border-amber-200' : 'bg-blue-100 text-blue-700 border-blue-200';
                $cd = explode(' ', $t['created']);
                $ud = explode(' ', $t['updated']);
              ?>
              <tr class="hover:bg-surface-container-low transition-colors group">
                <!-- Pass Template -->
                <td class="px-6 py-4">
                  <div class="flex items-center gap-3.5">
                    <div class="relative shrink-0">
                      <span class="flex h-10 w-10 items-center justify-center rounded-xl <?= $iconBg ?>">
                        <span class="material-symbols-outlined font-variation-fill"><?= $iconName ?></span>
                      </span>
                      <span class="absolute -top-0.5 -right-0.5 h-3 w-3 rounded-full bg-emerald-500 ring-2 ring-white"></span>
                    </div>
                    <div class="min-w-0">
                      <p class="text-body-md text-on-surface font-medium"><?= htmlspecialchars($t['name']) ?></p>
                      <p class="text-label-sm text-outline font-mono whitespace-nowrap font-medium">ID: <?= htmlspecialchars($t['id']) ?></p>
                    </div>
                  </div>
                </td>
                <!-- Company -->
                <td class="px-6 py-4">
                  <span class="inline-flex items-center gap-1.5 rounded-full bg-surface-container-low border border-outline-variant/60 px-2.5 py-1 text-label-md font-semibold text-on-surface-variant whitespace-nowrap">
                    <span class="material-symbols-outlined text-[15px] text-outline">apartment</span>Aatman Infotech
                  </span>
                </td>
                <!-- Type -->
                <td class="px-6 py-4">
                  <span class="inline-flex items-center rounded-full border px-3 py-1 text-label-sm font-bold <?= $typeBadge ?> whitespace-nowrap"><?= htmlspecialchars($t['type']) ?></span>
                </td>
                <!-- Created By -->
                <td class="px-6 py-4 whitespace-nowrap">
                  <p class="text-body-md font-semibold text-on-surface">Hardik Savani</p>
                  <p class="text-label-sm text-gray-400 mt-0.5">savanihd@gmail.com</p>
                </td>
                <!-- Created -->
                <td class="px-6 py-4 whitespace-nowrap">
                  <p class="text-label-md text-on-surface-variant whitespace-nowrap"><?= htmlspecialchars($cd[0]) ?></p>
                  <p class="text-label-sm text-gray-400 mt-0.5"><?= htmlspecialchars($cd[1] ?? '') ?></p>
                </td>
                <!-- Updated -->
                <td class="px-6 py-4 whitespace-nowrap">
                  <p class="text-label-md text-on-surface-variant whitespace-nowrap"><?= htmlspecialchars($ud[0]) ?></p>
                  <p class="text-label-sm text-gray-400 mt-0.5"><?= htmlspecialchars($ud[1] ?? '') ?></p>
                </td>
                <!-- Action -->
                <td class="px-6 py-4">
                  <div class="flex items-center justify-end gap-2">
                    <?php if ($t['regen']): ?>
                    <button type="button" class="inline-flex items-center gap-1.5 rounded-lg bg-violet-50 border border-violet-200 px-3 py-2 text-label-md font-semibold text-violet-600 hover:bg-violet-100 transition-colors whitespace-nowrap">
                      <span class="material-symbols-outlined text-[16px]">autorenew</span>Regenerate Class
                    </button>
                    <?php endif; ?>
                    <a href="viewPassTemplate.php" class="inline-flex h-9 w-9 items-center justify-center rounded-lg bg-brand-gradient text-white shadow-sm hover:opacity-90 active:scale-[0.98] transition" title="View">
                      <span class="material-symbols-outlined text-[18px] font-variation-fill">visibility</span>
                    </a>
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
          <span class="font-semibold text-on-surface">13</span> of
          <span class="font-semibold text-on-surface">793</span> results</p>
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