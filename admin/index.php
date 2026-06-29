<!DOCTYPE html>
<html class="light" lang="en" style="">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WePass - Dashboard</title>
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
      <!-- Page Header -->
      <div class="flex flex-wrap items-end justify-between gap-4">
        <div class="space-y-1">
          <nav class="flex items-center gap-2 text-label-sm text-outline">
            <span class="material-symbols-outlined text-[14px] text-gray-500">home</span>
            <span class="text-gray-500 font-normal">Dashboard</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Dashboard</h2>
        </div>
      </div>

      <!-- Welcome / Hero Banner -->
      <div
        class="relative overflow-hidden rounded-3xl border border-primary/10 bg-gradient-to-br from-primary/10 via-surface to-surface p-8 lg:p-10">
        <!-- Decorative glows -->
        <div class="absolute -top-24 -right-16 w-72 h-72 bg-primary/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 left-1/3 w-72 h-72 bg-tertiary/5 rounded-full blur-3xl"></div>
        <div class="relative grid grid-cols-1 lg:grid-cols-5 gap-10 items-center">
          <!-- Intro -->
          <div class="lg:col-span-3 space-y-4">
            <span
              class="inline-flex items-center gap-2 bg-primary/10 text-primary text-label-sm font-bold px-3 py-1 rounded-full">
              <span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span> Platform Overview
            </span>
            <div class="space-y-2">
              <p class="text-primary font-bold text-body-lg flex items-center gap-2">
                <span class="text-[22px]">👋</span> Hi, Hardik Savani
              </p>
              <h1 class="font-display font-bold text-on-surface text-[30px] leading-tight tracking-tight">
                Digital Pass Management Platform
              </h1>
            </div>
            <p class="text-body-md text-gray-400 leading-relaxed max-w-2xl">
              Create, manage, and distribute digital passes for Apple Wallet and Google Pay. Our platform supports
              both <span class="text-gray-500 font-semibold">Personalized Unique</span> passes for individual customers
              and <span class="text-gray-500 font-semibold">Generic Advertising</span> passes for broad distribution.
            </p>
          </div>
          <!-- Quick Create -->
          <div class="lg:col-span-2 space-y-3">
            <p class="text-label-sm text-outline uppercase tracking-widest font-bold">Quick Create</p>
            <div class="grid grid-cols-2 gap-3">
              <?php
                $quickActions = [
                  ['Gift Cards',      'redeem',              'bg-rose-50 text-rose-500'],
                  ['Event Tickets',   'confirmation_number', 'bg-indigo-50 text-indigo-500'],
                  ['Boarding Passes', 'flight',              'bg-sky-50 text-sky-500'],
                  ['Loyalty Cards',   'loyalty',             'bg-amber-50 text-amber-500'],
                  ['Coupons',         'local_offer',         'bg-emerald-50 text-emerald-500'],
                  ['Memberships',     'workspace_premium',   'bg-purple-50 text-purple-500'],
                ];
                foreach ($quickActions as [$label, $icon, $chip]):
              ?>
              <a href="#"
                class="group flex items-center gap-3 bg-white/80 backdrop-blur border border-outline-variant rounded-xl px-3.5 py-3 hover:border-primary/40 hover:bg-white hover:shadow-md transition-all">
                <span class="w-9 h-9 rounded-lg flex items-center justify-center shrink-0 <?= $chip ?>">
                  <span class="material-symbols-outlined text-[20px]"><?= $icon ?></span>
                </span>
                <span class="text-label-md font-bold text-on-surface leading-tight group-hover:text-primary transition-colors"><?= $label ?></span>
              </a>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>

      <!-- Stat Cards -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <?php
          $stats = [
            // label, value, sublabel, icon, chip bg, sparkline color, trend, heights
            ['Pass Templates',   '129', 'vs 114 last month', 'description', 'bg-brand-gradient shadow-primary/20',     'bg-primary/30',  '+13.2%', [40,55,45,62,52,70,66]],
            ['Passes',           '261', 'vs 241 last month', 'credit_card', 'bg-brand-gradient shadow-primary/20',     'bg-primary/30',  '+8.3%',  [48,44,58,54,68,63,80]],
            ['Installed Passes', '220', 'vs 191 last month', 'download',    'bg-emerald-500 shadow-[#198754]/20',     'bg-emerald-400/40', '+15.2%', [34,48,44,55,64,60,76]],
          ];
          foreach ($stats as [$label, $value, $sub, $icon, $chip, $spark, $trend, $heights]):
        ?>
        <div
          class="group bg-white rounded-2xl border border-outline-variant p-6 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all">
          <div class="flex items-start justify-between">
            <div class="w-12 h-12 rounded-xl text-white flex items-center justify-center shadow-md shrink-0 <?= $chip ?>">
              <span class="material-symbols-outlined text-[26px]"><?= $icon ?></span>
            </div>
            <span class="flex items-center gap-0.5 text-emerald-600 bg-emerald-50 text-label-sm font-bold px-2 py-1 rounded-full">
              <span class="material-symbols-outlined text-[16px]">trending_up</span><?= $trend ?>
            </span>
          </div>
          <p class="mt-5 text-label-sm text-outline uppercase tracking-widest font-bold"><?= $label ?></p>
          <div class="flex items-end justify-between gap-3">
            <div>
              <p class="font-display font-bold text-[34px] leading-tight text-on-surface"><?= $value ?></p>
              <p class="text-label-sm text-secondary mt-0.5"><?= $sub ?></p>
            </div>
            <!-- Sparkline -->
            <div class="flex items-end gap-1 h-10">
              <?php foreach ($heights as $i => $h): $full = $i === count($heights) - 1; ?>
              <span class="w-1.5 rounded-full <?= $full ? str_replace('/30', '', str_replace('/40', '', $spark)) : $spark ?>"
                style="height: <?= $h ?>%;"></span>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </section>
    <?php include('footer.php'); ?>
  </main>
  <!-- Micro-interaction Scripts -->
   <?php include('script.php'); ?>
</body>

</html>
