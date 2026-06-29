<!DOCTYPE html>
<html class="light" lang="en" style="">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WePass - Users</title>
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
      // Role config: avatar tile + type pill styling per role
      $roleCfg = [
        'Agent'         => ['avatarBg' => 'bg-amber-50',   'iconColor' => 'text-amber-600',   'icon' => 'badge',           'pill' => 'bg-amber-50 text-amber-700 border border-amber-100',  'tag' => 'text-amber-600'],
        'Company Admin' => ['avatarBg' => 'bg-blue-50',    'iconColor' => 'text-blue-600',    'icon' => 'apartment',       'pill' => 'bg-blue-50 text-blue-700 border border-blue-100',    'tag' => 'text-primary'],
        'Manager'       => ['avatarBg' => 'bg-emerald-50', 'iconColor' => 'text-emerald-600', 'icon' => 'manage_accounts', 'pill' => 'bg-blue-50 text-blue-700 border border-blue-100',    'tag' => 'text-primary'],
        'Read Only'     => ['avatarBg' => 'bg-gray-100',   'iconColor' => 'text-gray-500',    'icon' => 'visibility',      'pill' => 'bg-surface-container-high text-on-surface-variant border border-outline-variant/60', 'tag' => 'text-outline'],
      ];
      $statusDot   = ['active' => 'bg-emerald-500', 'pending' => 'bg-amber-500', 'inactive' => 'bg-rose-500'];
      // Usage/limits pill icons (passes, templates, notifications, agents)
      $usageIcons  = ['wallet', 'style', 'notifications', 'group'];

      $users = [
        ['name' => 'VOUDRISLIS',        'email' => 'voudrislis@3ds.gr',                'tag' => '3ds',             'status' => 'pending', 'role' => 'Agent',         'agent' => false, 'usage' => null,                                  'created' => '12/06/2026 10:59:58', 'login' => '-'],
        ['name' => 'STELIOS USER',      'email' => 'stelios@wepass.io',               'tag' => 'Wepass Test',     'status' => 'active',  'role' => 'Company Admin', 'agent' => false, 'usage' => ['0/100','0/100','0/100','0/∞'],        'created' => '12/06/2026 10:59:58', 'login' => '-'],
        ['name' => 'KARTIK',            'email' => 'harshmakwana9327+2@gmail.com',     'tag' => 'Aatman Infotech', 'status' => 'pending', 'role' => 'Manager',       'agent' => false, 'usage' => null,                                  'created' => '17/04/2026 11:04:05', 'login' => '-'],
        ['name' => 'HARSH MAKWANA',     'email' => 'princemakwana291002@gmail.com',    'tag' => 'Aatman Infotech', 'status' => 'active',  'role' => 'Company Admin', 'agent' => true,  'usage' => ['2/8','0/50','0/5','0/∞'],             'created' => '10/04/2026 15:51:42', 'login' => '-'],
        ['name' => 'HARSH MAKWANA',     'email' => 'hpmakwana29@gmail.com',            'tag' => 'HM',              'status' => 'active',  'role' => 'Company Admin', 'agent' => false, 'usage' => ['0/8','0/50','0/5','0/∞'],             'created' => '09/04/2026 11:05:47', 'login' => '-'],
        ['name' => 'HARDIK SAVANI',     'email' => 'savanihd@gmail.com',               'tag' => 'Aatman Infotech', 'status' => 'active',  'role' => 'Company Admin', 'agent' => true,  'usage' => ['189/500','131/500','5/500','1/∞'],    'created' => '24/11/2025 18:20:23', 'login' => '29/06/2026 10:14:29'],
      ];
    ?>
    <section class="p-margin-desktop space-y-stack-lg pb-16">
      <!-- Breadcrumbs and Header -->
      <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4">
        <div class="space-y-1">
          <nav class="flex items-center gap-2 text-label-sm text-outline mb-1">
            <span class="material-symbols-outlined text-[14px] text-gray">home</span> <span class="text-gray font-normal">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray-500 font-normal">Users</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Users</h2>
        </div>
        <div class="flex items-center gap-3">
          <button
            class="flex items-center gap-2 bg-white border border-outline-variant/50 text-on-surface px-6 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold shadow-sm"
            onclick="document.getElementById('filter-panel').classList.toggle('hidden')">
            <span class="material-symbols-outlined text-[20px]">filter_alt</span>
            <span class="">Filter</span>
          </button>
          <div class="flex items-center gap-3">
            <a href ="createUser.php"
              class="flex items-center gap-2 bg-brand-gradient text-on-primary px-4 py-2.5 rounded-lg text-[14px] shadow-lg shadow-primary/20 hover:shadow-xl hover:opacity-90 active:scale-[0.98] transition-all font-bold">
              <span class="material-symbols-outlined text-sm">add</span>
              Create User
            </a>
          </div>
        </div>
      </div>

      <!-- Filter Panel -->
      <div
        class="bg-white rounded-2xl border border-outline-variant p-6 shadow-sm transition-all duration-300 overflow-hidden hidden"
        id="filter-panel">
        <div class="flex flex-col gap-2">
          <div class="flex flex-col gap-2">
            <h3 class="text-primary font-display font-bold text-headline-md">Filter Users</h3>
            <p class="text-gray-400 text-body-md">Refine your search to find specific users</p>
          </div>
          <div class="border-t border-outline-variant/30"></div>
          <!-- Fields: User Type / Status / Company / Search (4 columns) -->
          <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="space-y-2">
              <label class="text-on-surface font-semibold text-label-md">User Type</label>
              <select class="w-full js-select2">
                <option>All Types</option>
                <option>Company</option>
                <option>Agent</option>
                <option>User</option>
              </select>
            </div>
            <div class="space-y-2">
              <label class="text-on-surface font-semibold text-label-md">Status</label>
              <select class="w-full js-select2">
                <option>All Status</option>
                <option>Active</option>
                <option>Inactive</option>
                <option>Pending</option>
              </select>
            </div>
            <div class="space-y-2">
              <label class="text-on-surface font-semibold text-label-md">Company</label>
              <select class="w-full js-select2">
                <option>All Companies</option>
                <option>Aatman Infotech</option>
                <option>Wepass Test</option>
                <option>3ds</option>
              </select>
            </div>
            <div class="space-y-2">
              <label class="text-on-surface font-semibold text-label-md">Search</label>
              <input
                class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                placeholder="Search by name, email, or company..." type="text">
            </div>
          </div>
          <!-- Actions (aligned under the Search column) -->
          <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-4">
            <div class="md:col-start-4 flex items-center gap-3">
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

      <!-- Role Badges Info -->
      <div class="bg-primary/5 rounded-2xl p-2 flex flex-wrap items-center justify-end gap-3">
          <?php foreach (['Company Admin', 'Agent', 'Manager', 'Read Only'] as $roleName): $cfg = $roleCfg[$roleName]; ?>
          <div
              class="flex items-center gap-2.5 bg-white rounded-2xl pl-1 pr-4 py-1 shadow-sm border border-outline-variant/40">
              <div class="w-9 h-9 rounded-xl <?= $cfg['avatarBg'] ?> <?= $cfg['iconColor'] ?> flex items-center justify-center shrink-0">
                  <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;"><?= $cfg['icon'] ?></span>
              </div>
              <span class="text-body-md font-bold text-on-surface"><?= $roleName ?></span>
          </div>
          <?php endforeach; ?>
      </div>

      <!-- Main Card -->
      <div class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden [&:has(.js-menu-panel:not(.hidden))]:overflow-visible">
        <!-- Table -->
        <div class="overflow-x-auto [&:has(.js-menu-panel:not(.hidden))]:overflow-visible">
          <table class="w-full text-left border-collapse min-w-[1100px]">
            <thead class="bg-surface-container-low/50">
              <tr>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Company / User</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Type</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Usage / Limits</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Created</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Last Login</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant text-right">Action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-outline-variant/40">
              <?php foreach ($users as $u): $cfg = $roleCfg[$u['role']]; ?>
              <tr class="hover:bg-surface-container-low transition-colors group">
                <!-- Company / User -->
                <td class="px-6 py-4">
                  <div class="flex items-center gap-3.5">
                    <div class="relative shrink-0">
                      <span class="w-11 h-11 rounded-xl <?= $cfg['avatarBg'] ?> <?= $cfg['iconColor'] ?> flex items-center justify-center">
                        <span class="material-symbols-outlined text-[22px]" style="font-variation-settings: 'FILL' 1;"><?= $cfg['icon'] ?></span>
                      </span>
                      <span class="absolute -top-0.5 -right-0.5 w-3 h-3 rounded-full <?= $statusDot[$u['status']] ?> ring-2 ring-white"></span>
                    </div>
                    <div class="min-w-0">
                      <div class="flex items-center gap-2 flex-wrap">
                        <p class="text-body-md font-medium text-on-surface truncate uppercase"><?= htmlspecialchars($u['name']) ?></p>
                        <span class="inline-flex items-center gap-1 bg-surface-container-low border border-outline-variant/60 <?= $cfg['tag'] ?> text-[11px] font-bold px-2 py-0.5 rounded-full">
                          <span class="material-symbols-outlined text-[14px]">apartment</span><?= htmlspecialchars($u['tag']) ?>
                        </span>
                      </div>
                      <p class="text-label-sm text-outline font-medium mt-0.5"><?= htmlspecialchars($u['email']) ?></p>
                    </div>
                  </div>
                </td>
                <!-- Type -->
                <td class="px-6 py-4">
                  <div class="flex items-center gap-1.5">
                    <span class="inline-flex items-center py-1 px-2.5 rounded-full text-[10px] font-bold uppercase <?= $cfg['pill'] ?> whitespace-nowrap"><?= htmlspecialchars($u['role']) ?></span>
                    <?php if (!empty($u['agent'])): ?>
                    <span class="w-5 h-5 rounded-full bg-amber-100 text-amber-600 text-[11px] font-bold flex items-center justify-center" title="Agent">A</span>
                    <?php endif; ?>
                  </div>
                </td>
                <!-- Usage / Limits -->
                <td class="px-6 py-4">
                  <?php if (!empty($u['usage'])): ?>
                  <div class="flex flex-wrap items-center gap-1.5 max-w-[260px]">
                    <?php foreach ($u['usage'] as $i => $val): ?>
                    <span class="inline-flex items-center gap-1 bg-blue-50/70 text-blue-700 rounded-full px-2 py-1 text-[11px] font-semibold whitespace-nowrap">
                      <span class="material-symbols-outlined text-[13px]"><?= $usageIcons[$i] ?></span><?= htmlspecialchars($val) ?>
                    </span>
                    <?php endforeach; ?>
                  </div>
                  <?php else: ?>
                  <span class="text-label-md text-outline">—</span>
                  <?php endif; ?>
                </td>
                <!-- Created -->
                <td class="px-6 py-4 text-label-md text-on-surface-variant whitespace-nowrap"><?= htmlspecialchars($u['created']) ?></td>
                <!-- Last Login -->
                <td class="px-6 py-4 text-label-md text-on-surface-variant whitespace-nowrap"><?= htmlspecialchars($u['login']) ?></td>
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
                        <a href="viewUser.php"
                          class="flex items-center gap-3 px-4 py-2 text-body-md text-on-surface hover:bg-surface-container-low transition-colors" href="#">
                          <span class="material-symbols-outlined text-secondary text-[20px]">visibility</span>
                          <span class="font-medium">View</span>
                        </a>
                        <a class="flex items-center gap-3 px-4 py-2 text-body-md text-on-surface hover:bg-surface-container-low transition-colors" href="#">
                          <span class="material-symbols-outlined text-secondary text-[20px]">monitoring</span>
                          <span class="font-medium">Activity</span>
                        </a>
                        <div class="border-t border-outline-variant/30 my-1 mx-2"></div>
                        <a class="flex items-center gap-3 px-4 py-2 text-body-md text-on-surface hover:bg-surface-container-low transition-colors" href="#">
                          <span class="material-symbols-outlined text-secondary text-[20px]">login</span>
                          <span class="font-medium">Login As</span>
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

        <!-- Pagination -->
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 px-6 py-4 border-t border-outline-variant/60 bg-surface-container-low/30">
          <p class="text-label-md text-secondary">Showing <span class="font-semibold text-on-surface">1</span> to
            <span class="font-semibold text-on-surface"><?= count($users) ?></span> of
            <span class="font-semibold text-on-surface"><?= count($users) ?></span> results</p>
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
