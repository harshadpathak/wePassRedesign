<!DOCTYPE html>
<html class="light" lang="en" style="">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WePass - Companies Users</title>
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
      <div class="flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
        <div class="space-y-1.5">
          <nav class="flex items-center gap-2 text-label-sm">
            <span class="material-symbols-outlined text-[14px] text-slate-400">home</span>
            <a href="index.php" class="font-normal text-slate-400">Dashboard</a>
            <span class="material-symbols-outlined text-[16px] text-outline">chevron_right</span>
            <span class="text-gray-500 font-normal">Companies Users</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold text-on-surface">Companies</h2>
        </div>
        <div class="flex items-center gap-3">
          <a href="invitecompany.php"
            class="inline-flex items-center justify-center gap-2 rounded-lg bg-teal-600 px-4 py-2.5 text-body-md font-semibold text-white shadow-sm shadow-teal-600/20 transition-all hover:bg-teal-700 active:scale-[0.98]">
            <span class="material-symbols-outlined text-[20px]">mail</span>
            <span>Invite Company</span>
          </a>
          <a href="companyusercreate.php"
            class="inline-flex items-center justify-center gap-2 rounded-lg bg-brand-gradient px-4 py-2.5 text-body-md font-bold text-on-primary shadow-md shadow-primary/20 transition-all hover:opacity-90 active:scale-[0.98]">
            <span class="material-symbols-outlined text-[20px]">add</span>
            <span>Create Company</span>
          </a>
        </div>
      </div>

      <!-- Stat Counters -->
      <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
        <!-- All Companies -->
        <div class="flex items-center gap-4 rounded-2xl border border-primary/30 bg-surface px-5 py-4 shadow-sm ring-1 ring-primary/5">
          <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-primary text-on-primary shadow-sm shadow-primary/30">
            <span class="material-symbols-outlined text-[24px]">domain</span>
          </span>
          <div class="min-w-0">
            <p class="text-label-sm text-gray-400 font-medium">All Companies</p>
            <p class="text-headline-md font-bold">793</p>
          </div>
        </div>
        <!-- Active -->
        <div class="flex items-center gap-4 rounded-2xl border border-outline-variant/60 bg-surface px-5 py-4 shadow-sm">
          <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-emerald-500/10 text-emerald-600">
            <span class="material-symbols-outlined text-[24px]">check_circle</span>
          </span>
          <div class="min-w-0">
            <p class="text-label-sm text-gray-400 font-medium">Active</p>
            <p class="text-headline-md font-bold text-on-surface">542</p>
          </div>
        </div>
        <!-- Inactive -->
        <div class="flex items-center gap-4 rounded-2xl border border-outline-variant/60 bg-surface px-5 py-4 shadow-sm">
          <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-rose-500/10 text-rose-600">
            <span class="material-symbols-outlined text-[24px]">do_not_disturb_on</span>
          </span>
          <div class="min-w-0">
            <p class="text-label-sm text-gray-400 font-medium">Inactive</p>
            <p class="text-headline-md font-bold text-on-surface">251</p>
          </div>
        </div>
        <!-- Pending -->
        <div class="flex items-center gap-4 rounded-2xl border border-outline-variant/60 bg-surface px-5 py-4 shadow-sm">
          <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-amber-500/10 text-amber-600">
            <span class="material-symbols-outlined text-[24px]">hourglass_top</span>
          </span>
          <div class="min-w-0">
            <p class="text-label-sm text-gray-400 font-medium">Pending</p>
            <p class="text-headline-md font-bold text-on-surface">87</p>
          </div>
        </div>
      </div>

      <!-- Table Card -->
      <div class="overflow-hidden rounded-2xl border border-outline-variant/60 bg-surface shadow-sm [&:has(.js-menu-panel:not(.hidden))]:overflow-visible">
        <!-- Toolbar -->
        <!-- <div class="flex flex-col gap-3 border-b border-outline-variant/60 p-4 sm:flex-row sm:items-center sm:justify-between">
          <div class="relative w-full sm:max-w-xs transition-transform">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-[20px] text-outline">search</span>
            <input
              class="w-full rounded-lg border border-outline-variant bg-surface-container-low py-2.5 pl-10 pr-4 text-body-md transition-all focus:border-primary focus:ring-2 focus:ring-primary/20"
              placeholder="Search companies..." type="text">
          </div>
          <div class="flex items-center gap-2">
            <button
              class="inline-flex items-center gap-2 rounded-lg border border-outline-variant bg-surface px-3 py-2.5 text-body-md font-semibold text-on-surface-variant transition-all hover:bg-surface-container-high">
              <span class="material-symbols-outlined text-[20px]">filter_list</span>
              <span>Status</span>
              <span class="material-symbols-outlined text-[18px]">expand_more</span>
            </button>
            <button
              class="inline-flex items-center gap-2 rounded-lg border border-outline-variant bg-surface px-3 py-2.5 text-body-md font-semibold text-on-surface-variant transition-all hover:bg-surface-container-high">
              <span class="material-symbols-outlined text-[20px]">download</span>
              <span class="hidden sm:inline">Export</span>
            </button>
          </div>
        </div> -->

        <!-- Table -->
        <div class="overflow-x-auto [&:has(.js-menu-panel:not(.hidden))]:overflow-visible">
          <table class="w-full border-collapse text-left">
            <thead>
              <tr class="bg-surface-container-low/60">
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Company</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Email</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Status</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Last Login</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Created</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant text-right">Action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-outline-variant/50">
              <?php
              $companies = [
                [
                  'name' => 'Hewitt and Copeland Trading',
                  'owner' => 'Lani Fisher',
                  'email' => 'dimaromy@mailinator.com',
                  'status' => 'active',
                  'last_login' => null,
                  'created' => '15/06/2026 06:41:53',
                ],
                [
                  'name' => 'Hewitt and Copeland Trading',
                  'owner' => 'Lani Fisher',
                  'email' => 'dimaromy@mailinator.com',
                  'status' => 'inactive',
                  'last_login' => null,
                  'created' => '15/06/2026 06:41:53',
                ],
                [
                  'name' => 'Hewitt and Copeland Trading',
                  'owner' => 'Lani Fisher',
                  'email' => 'dimaromy@mailinator.com',
                  'status' => 'pending',
                  'last_login' => null,
                  'created' => '15/06/2026 06:41:53',
                ],
              ];

              $statusStyles = [
                'active'   => ['label' => 'ACTIVE',   'class' => 'bg-emerald-50 text-emerald-700 border-emerald-300', 'dot' => 'bg-emerald-500'],
                'pending'  => ['label' => 'PENDING',  'class' => 'bg-amber-50 text-amber-700 border-amber-300',     'dot' => 'bg-amber-500'],
                'inactive' => ['label' => 'INACTIVE', 'class' => 'bg-rose-50 text-rose-700 border-rose-300',       'dot' => 'bg-rose-500'],
              ];

              foreach ($companies as $c):
                $s = $statusStyles[$c['status']];
              ?>
              <tr class="group transition-colors hover:bg-surface-container-low/60">
                <!-- Company -->
                <td class="px-6 py-4">
                  <div class="min-w-0">
                    <p class="truncate text-[14px] font-medium leading-[20px] text-on-surface text-slate-900"><?= htmlspecialchars(strtoupper($c['name'])) ?></p>
                    <p class="text-label-sm text-outline whitespace-nowrap font-medium">Companies Users <?= htmlspecialchars($c['owner']) ?></p>
                  </div>
                </td>
                <!-- Email -->
                <td class="px-6 py-4">
                  <span class="text-body-md text-[14px] font-medium text-on-surface-variant"><?= htmlspecialchars($c['email']) ?></span>
                </td>
                <!-- Status -->
                <td class="px-6 py-4">
                  <span class="inline-flex items-center gap-1.5 rounded-full border !text-[10px] text-label-md font-bold px-3.5 py-1 <?= $s['class'] ?>">
                    <span class="h-1.5 w-1.5 rounded-full <?= $s['dot'] ?>"></span>
                    <?= $s['label'] ?>
                  </span>
                </td>
                <!-- Last Login -->
                <td class="px-6 py-4">
                  <?php if ($c['last_login']): ?>
                    <span class=" py-4 text-label-md text-on-surface-variant">15/06/2026 06:41:53</span>
                  <?php else: ?>
                    <span class=" py-4 text-label-md text-on-surface-variant">-</span>
                  <?php endif; ?>
                </td>
                <!-- Created -->
                <td class="px-6 py-4">
                  <span class="py-4 text-label-md text-on-surface-variant"><?= htmlspecialchars($c['created']) ?></span>
                </td>
                <!-- Action -->
                <td class="px-6 py-4 text-right">
                  <div class="relative inline-block js-menu">
                    <button
                      type="button"
                      class="js-menu-toggle material-symbols-outlined text-outline hover:text-primary transition-colors p-1.5 rounded-lg hover:bg-surface-container-high">
                      more_vert
                    </button>
                    <div
                      class="js-menu-panel hidden absolute right-0 mt-2 w-48 border border-outline-variant/50 rounded-xl shadow-xl transition-all duration-200 z-50 overflow-hidden bg-white">
                      <div class="py-1.5">
                        <a class="flex items-center gap-3 px-4 py-2 text-body-md text-on-surface hover:bg-surface-container-low transition-colors"
                          href="companyusershow.php">
                          <span class="material-symbols-outlined text-secondary text-[20px]">visibility</span>
                          <span class="font-medium">View</span>
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
          <nav class="flex items-center gap-1.5" aria-label="Pagination">
            <button type="button"
              class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-outline-variant text-on-surface-variant transition-all hover:bg-surface-container-high disabled:cursor-not-allowed disabled:opacity-40"
              disabled aria-label="Previous page">
              <span class="material-symbols-outlined text-[20px]">chevron_left</span>
            </button>
            <button type="button" aria-current="page"
              class="inline-flex h-9 min-w-9 items-center justify-center rounded-lg bg-primary px-3 text-body-md font-semibold text-on-primary shadow-sm transition-all">
              1
            </button>
            <button type="button"
              class="inline-flex h-9 min-w-9 items-center justify-center rounded-lg border border-outline-variant px-3 text-body-md font-semibold text-on-surface-variant transition-all hover:bg-surface-container-high">
              2
            </button>
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
