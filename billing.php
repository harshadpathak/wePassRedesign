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
    <?php
      $account = [
        'plan'    => 'Admin',
        'tier'    => 'Free Access',
        'name'    => 'wepass',
        'email'   => 'wepassdemo@wepass.com',
        'company' => 'Wepass Demo',
        'type'    => 'Company',
      ];
      $usage = [
        ['label' => 'Templates',     'icon' => 'view_quilt',   'icbg' => 'bg-blue-50',    'ic' => 'text-blue-600',    'bar' => 'bg-blue-500',    'used' => 64,  'total' => 300],
        ['label' => 'Passes',        'icon' => 'wallet',       'icbg' => 'bg-emerald-50',  'ic' => 'text-emerald-600', 'bar' => 'bg-emerald-500', 'used' => 113, 'total' => 300],
        ['label' => 'Notifications', 'icon' => 'notifications','icbg' => 'bg-amber-50',   'ic' => 'text-amber-600',   'bar' => 'bg-amber-500',   'used' => 73,  'total' => 300],
      ];
      $plan = [
        ['label' => 'Max Templates',          'value' => '300 templates'],
        ['label' => 'Max Passes',             'value' => '300 passes'],
        ['label' => 'Max Push Notifications', 'value' => '300 notifications'],
        ['label' => 'Plan Validity',          'value' => '300 days'],
      ];
    ?>
    <section class="p-margin-desktop space-y-stack-lg pb-16">
      <!-- Breadcrumbs and Header -->
      <div class="flex items-end justify-between">
        <div class="space-y-1">
          <nav class="flex items-center gap-2 text-label-sm text-outline mb-1">
            <span class="material-symbols-outlined text-[14px] text-gray">home</span> <span class="text-gray font-normal">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray-500 font-normal">Billing</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Billing</h2>
        </div>
      </div>

      <!-- Info banner -->
      <div class="bg-white border border-outline-variant/50 rounded-2xl p-6 shadow-sm flex gap-6 items-start">
        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center text-primary shrink-0">
          <span class="material-symbols-outlined text-[28px]">info</span>
        </div>
        <div class="flex-1">
          <h3 class="text-headline-md font-bold text-on-surface tracking-tight">How Billing Works</h3>
          <p class="text-body-md text-secondary leading-relaxed">Your plan limits are managed by your
            <a href="#" class="text-primary font-semibold">administrator</a>. If you need additional resources or want
            to upgrade your plan, please contact your <a href="#" class="text-primary font-semibold">account
            administrator</a>.</p>
        </div>
      </div>

      <!-- Overview Card -->
      <div class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
        <!-- Card header -->
        <div class="flex items-center gap-4 px-6 py-5 border-b border-outline-variant/60">
          <div class="w-12 h-12 rounded-2xl bg-brand-gradient text-white flex items-center justify-center shrink-0 shadow-md shadow-primary/20">
            <span class="material-symbols-outlined text-[26px]">credit_card</span>
          </div>
          <div>
            <h3 class="text-headline-md font-bold text-on-surface tracking-tight">Billing Overview</h3>
            <p class="text-body-md text-gray-500">Manage your plan details and track resource usage</p>
          </div>
        </div>

        <div class="p-6 space-y-6">
          <!-- Two columns: account | usage -->
          <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Account card -->
            <div class="lg:col-span-1 border border-outline-variant rounded-2xl p-6">
              <!-- Plan hero -->
              <div class="relative overflow-hidden rounded-2xl bg-brand-gradient p-6 text-center text-white shadow-lg shadow-primary/20">
                <!-- decorative circles -->
                <span class="absolute -top-8 -right-8 w-28 h-28 rounded-full bg-white/10"></span>
                <span class="absolute -bottom-10 -left-6 w-24 h-24 rounded-full bg-white/10"></span>
                <div class="relative">
                  <span class="inline-flex items-center gap-1.5 bg-white/20 backdrop-blur-sm text-white text-label-sm font-bold uppercase tracking-wider px-4 py-1.5 rounded-full">
                    <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span> Active Plan
                  </span>
                  <h4 class="text-display-md font-bold mt-4 leading-none"><?= htmlspecialchars($account['plan']) ?></h4>
                  <span class="inline-block mt-3 bg-white/20 backdrop-blur-sm text-white text-label-md font-semibold px-3 py-1 rounded-full"><?= htmlspecialchars($account['tier']) ?></span>
                </div>
              </div>

              <!-- Account details -->
              <div class="mt-6 divide-y divide-outline-variant/40">
                <div class="flex items-center gap-3 py-3.5">
                  <span class="w-9 h-9 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-[18px]">person</span>
                  </span>
                  <div class="min-w-0">
                    <p class="text-label-sm font-bold uppercase tracking-wider text-outline">Account Name</p>
                    <p class="text-body-md font-bold text-on-surface truncate"><?= htmlspecialchars($account['name']) ?></p>
                  </div>
                </div>
                <div class="flex items-center gap-3 py-3.5">
                  <span class="w-9 h-9 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-[18px]">mail</span>
                  </span>
                  <div class="min-w-0">
                    <p class="text-label-sm font-bold uppercase tracking-wider text-outline">Email</p>
                    <p class="text-body-md font-bold text-on-surface truncate"><?= htmlspecialchars($account['email']) ?></p>
                  </div>
                </div>
                <div class="flex items-center gap-3 py-3.5">
                  <span class="w-9 h-9 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-[18px]">apartment</span>
                  </span>
                  <div class="min-w-0">
                    <p class="text-label-sm font-bold uppercase tracking-wider text-outline">Company</p>
                    <p class="text-body-md font-bold text-on-surface truncate"><?= htmlspecialchars($account['company']) ?></p>
                  </div>
                </div>
                <div class="flex items-center gap-3 py-3.5">
                  <span class="w-9 h-9 rounded-lg bg-pink-50 text-pink-600 flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-[18px]">shield</span>
                  </span>
                  <div class="min-w-0">
                    <p class="text-label-sm font-bold uppercase tracking-wider text-outline">Account Type</p>
                    <span class="inline-block mt-0.5 bg-primary text-white text-label-sm font-bold px-3 py-0.5 rounded-full"><?= htmlspecialchars($account['type']) ?></span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Usage & Plan -->
            <div class="lg:col-span-2 space-y-6">
              <!-- Usage & Limits -->
              <div>
                <div class="flex items-center gap-3 mb-4">
                  <span class="w-9 h-9 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center">
                    <span class="material-symbols-outlined text-[20px]">bar_chart</span>
                  </span>
                  <h3 class="text-headline-md font-bold text-on-surface">Usage &amp; Limits</h3>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                  <?php foreach ($usage as $u):
                    $pct = $u['total'] > 0 ? round($u['used'] / $u['total'] * 100) : 0;
                    $left = $u['total'] - $u['used'];
                  ?>
                  <div class="border border-outline-variant rounded-2xl p-5 hover:border-primary/40 hover:shadow-sm transition-all">
                    <div class="flex items-center justify-between">
                      <span class="w-11 h-11 rounded-xl <?= $u['icbg'] ?> <?= $u['ic'] ?> flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-[22px]"><?= $u['icon'] ?></span>
                      </span>
                      <span class="text-label-sm font-bold <?= $u['ic'] ?> <?= $u['icbg'] ?> px-2 py-0.5 rounded-full"><?= $pct ?>%</span>
                    </div>
                    <p class="text-label-sm font-bold uppercase tracking-wider text-outline mt-4"><?= htmlspecialchars($u['label']) ?></p>
                    <p class="text-on-surface font-bold mt-0.5"><span class="text-headline-lg"><?= (int) $u['used'] ?></span> <span class="text-label-md text-outline">/ <?= (int) $u['total'] ?></span></p>
                    <div class="mt-3 h-2 rounded-full bg-surface-container-high overflow-hidden">
                      <div class="h-full rounded-full <?= $u['bar'] ?> transition-all" style="width: <?= $pct ?>%"></div>
                    </div>
                    <p class="text-label-sm text-outline mt-2"><span class="font-semibold text-secondary"><?= $left ?></span> remaining</p>
                  </div>
                  <?php endforeach; ?>

                  <!-- API Requests -->
                  <div class="sm:col-span-3 border border-outline-variant rounded-2xl p-5 flex items-center gap-4 hover:border-primary/40 hover:shadow-sm transition-all">
                    <span class="w-11 h-11 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center shrink-0">
                      <span class="material-symbols-outlined text-[22px]">dns</span>
                    </span>
                    <div class="flex-1">
                      <p class="text-label-sm font-bold uppercase tracking-wider text-outline">API Requests</p>
                      <p class="text-label-sm text-outline">All time usage across your organization</p>
                    </div>
                    <p class="text-display-sm font-bold text-on-surface leading-none">0</p>
                  </div>
                </div>
              </div>

              <!-- Plan Includes -->
              <div>
                <div class="flex items-center gap-3 mb-4">
                  <span class="w-9 h-9 rounded-lg bg-blue-50 text-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-[20px]">checklist</span>
                  </span>
                  <h3 class="text-headline-md font-bold text-on-surface">Plan Includes</h3>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                  <?php foreach ($plan as $p): ?>
                  <div class="flex items-center gap-3 bg-emerald-50/40 border border-emerald-100 rounded-2xl p-4 hover:bg-emerald-50 transition-colors">
                    <span class="w-8 h-8 rounded-full bg-emerald-500 text-white flex items-center justify-center shrink-0 shadow-sm shadow-emerald-500/30">
                      <span class="material-symbols-outlined text-[18px]">check</span>
                    </span>
                    <div>
                      <p class="text-label-sm font-semibold uppercase tracking-wider text-emerald-700/70"><?= htmlspecialchars($p['label']) ?></p>
                      <p class="text-body-md font-bold text-on-surface"><?= htmlspecialchars($p['value']) ?></p>
                    </div>
                  </div>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
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
