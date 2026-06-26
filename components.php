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
      <!-- Breadcrumbs and Header -->
      <div class="flex items-end justify-between">
        <div class="space-y-1">
          <nav class="flex items-center gap-2 text-label-sm text-outline mb-1">
            <span class="material-symbols-outlined text-[14px] text-blue-600">home</span> <span class="text-blue-600 font-semibold">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-on-surface font-semibold">Components</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Components</h2>
        </div>
      </div>

      <!-- Dismissing Alerts -->
      <div class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
        <!-- Card header -->
        <div class="flex items-center gap-3 px-6 py-5 border-b border-outline-variant/60">
          <div class="w-9 h-9 bg-blue-50 text-primary rounded-lg flex items-center justify-center">
            <span class="material-symbols-outlined text-[20px]">notifications_active</span>
          </div>
          <div>
            <h3 class="text-headline-md font-bold text-on-surface">Dismissing Alerts</h3>
            <p class="text-label-md text-secondary">Contextual feedback messages with a close action</p>
          </div>
        </div>

        <div class="p-6 space-y-4">
          <!-- Success -->
          <div class="js-alert flex items-start gap-3 rounded-xl border border-emerald-200 bg-emerald-50 p-4 transition-all duration-300">
            <span class="w-9 h-9 rounded-lg bg-emerald-500 text-white flex items-center justify-center shrink-0">
              <span class="material-symbols-outlined text-[20px]">check_circle</span>
            </span>
            <div class="flex-1 min-w-0 leading-snug">
              <p class="text-body-md font-bold leading-none mt-1 text-emerald-800">Success</p>
              <p class="text-[13px] text-emerald-700/90">Your changes have been saved successfully.</p>
            </div>
            <button type="button" data-dismiss-alert class="w-8 h-9 rounded-lg text-emerald-600 hover:bg-emerald-500/10 flex items-center justify-center transition-colors shrink-0">
              <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
          </div>

          <!-- Info -->
          <div class="js-alert flex items-start gap-3 rounded-xl border border-primary/20 bg-primary/5 p-4 transition-all duration-300">
            <span class="w-9 h-9 rounded-lg bg-primary text-white flex items-center justify-center shrink-0">
              <span class="material-symbols-outlined text-[20px]">info</span>
            </span>
            <div class="flex-1 min-w-0 leading-snug">
              <p class="text-body-md font-bold leading-none mt-1 text-on-surface">Information</p>
              <p class="text-[13px] text-secondary">A new template version is available to preview.</p>
            </div>
            <button type="button" data-dismiss-alert class="w-8 h-9 rounded-lg text-primary hover:bg-primary/10 flex items-center justify-center transition-colors shrink-0">
              <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
          </div>

          <!-- Warning -->
          <div class="js-alert flex items-start gap-3 rounded-xl border border-amber-200 bg-amber-50 p-4 transition-all duration-300">
            <span class="w-9 h-9 rounded-lg bg-amber-500 text-white flex items-center justify-center shrink-0">
              <span class="material-symbols-outlined text-[20px]">warning</span>
            </span>
            <div class="flex-1 min-w-0 leading-snug">
              <p class="text-body-md font-bold leading-none mt-1 text-amber-800">Warning</p>
              <p class="text-[13px] text-amber-700/90">Your plan is nearing its monthly pass limit.</p>
            </div>
            <button type="button" data-dismiss-alert class="w-8 h-9 rounded-lg text-amber-600 hover:bg-amber-500/10 flex items-center justify-center transition-colors shrink-0">
              <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
          </div>

          <!-- Error -->
          <div class="js-alert flex items-start gap-3 rounded-xl border border-red-200 bg-red-50 p-4 transition-all duration-300">
            <span class="w-9 h-9 rounded-lg bg-red-500 text-white flex items-center justify-center shrink-0">
              <span class="material-symbols-outlined text-[20px]">error</span>
            </span>
            <div class="flex-1 min-w-0 leading-snug">
              <p class="text-body-md font-bold leading-none mt-1 text-red-800">Error</p>
              <p class="text-[13px] text-red-700/90">Something went wrong while sending your passes. Please try again.</p>
            </div>
            <button type="button" data-dismiss-alert class="w-8 h-9 rounded-lg text-red-600 hover:bg-red-500/10 flex items-center justify-center transition-colors shrink-0">
              <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
          </div>
        </div>
      </div>

      <!-- Pill Bordered Badges -->
      <div class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
        <!-- Card header -->
        <div class="flex items-center gap-3 px-6 py-5 border-b border-outline-variant/60">
          <div class="w-9 h-9 bg-blue-50 text-primary rounded-lg flex items-center justify-center">
            <span class="material-symbols-outlined text-[20px]">label</span>
          </div>
          <div>
            <h3 class="text-headline-md font-bold text-on-surface">Pill Bordered Badges</h3>
            <p class="text-label-md text-secondary">Outlined status pills in theme colors</p>
          </div>
        </div>

        <div class="p-6 space-y-6">
          <!-- Plain bordered pills -->
          <div>
            <p class="text-label-sm font-bold uppercase tracking-wider text-outline mb-3">Default</p>
            <div class="flex flex-wrap gap-2.5">
              <span class="inline-flex items-center rounded-full border border-primary/30 bg-primary/5 text-primary text-label-md font-bold px-3.5 py-1">Primary</span>
              <span class="inline-flex items-center rounded-full border border-emerald-300 bg-emerald-50 text-emerald-700 text-label-md font-bold px-3.5 py-1">Success</span>
              <span class="inline-flex items-center rounded-full border border-amber-300 bg-amber-50 text-amber-700 text-label-md font-bold px-3.5 py-1">Warning</span>
              <span class="inline-flex items-center rounded-full border border-red-300 bg-red-50 text-red-700 text-label-md font-bold px-3.5 py-1">Error</span>
              <span class="inline-flex items-center rounded-full border border-teal-300 bg-teal-50 text-teal-700 text-label-md font-bold px-3.5 py-1">Teal</span>
              <span class="inline-flex items-center rounded-full border border-outline-variant bg-surface-container-low text-secondary text-label-md font-bold px-3.5 py-1">Neutral</span>
            </div>
          </div>

          <!-- With leading dot -->
          <div>
            <p class="text-label-sm font-bold uppercase tracking-wider text-outline mb-3">With status dot</p>
            <div class="flex flex-wrap gap-2.5">
              <span class="inline-flex items-center gap-1.5 rounded-full border border-primary/30 bg-primary/5 text-primary text-label-md font-bold px-3.5 py-1"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Active</span>
              <span class="inline-flex items-center gap-1.5 rounded-full border border-emerald-300 bg-emerald-50 text-emerald-700 text-label-md font-bold px-3.5 py-1"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Completed</span>
              <span class="inline-flex items-center gap-1.5 rounded-full border border-amber-300 bg-amber-50 text-amber-700 text-label-md font-bold px-3.5 py-1"><span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span> Pending</span>
              <span class="inline-flex items-center gap-1.5 rounded-full border border-red-300 bg-red-50 text-red-700 text-label-md font-bold px-3.5 py-1"><span class="w-1.5 h-1.5 rounded-full bg-red-500"></span> Failed</span>
              <span class="inline-flex items-center gap-1.5 rounded-full border border-outline-variant bg-surface-container-low text-secondary text-label-md font-bold px-3.5 py-1"><span class="w-1.5 h-1.5 rounded-full bg-outline"></span> Draft</span>
            </div>
          </div>

          <!-- With icon -->
          <div>
            <p class="text-label-sm font-bold uppercase tracking-wider text-outline mb-3">With icon</p>
            <div class="flex flex-wrap gap-2.5">
              <span class="inline-flex items-center gap-1 rounded-full border border-emerald-300 bg-emerald-50 text-emerald-700 text-label-md font-bold px-3 py-1"><span class="material-symbols-outlined text-[16px]">check_circle</span> Verified</span>
              <span class="inline-flex items-center gap-1 rounded-full border border-primary/30 bg-primary/5 text-primary text-label-md font-bold px-3 py-1"><span class="material-symbols-outlined text-[16px]">star</span> Featured</span>
              <span class="inline-flex items-center gap-1 rounded-full border border-amber-300 bg-amber-50 text-amber-700 text-label-md font-bold px-3 py-1"><span class="material-symbols-outlined text-[16px]">schedule</span> Scheduled</span>
              <span class="inline-flex items-center gap-1 rounded-full border border-red-300 bg-red-50 text-red-700 text-label-md font-bold px-3 py-1"><span class="material-symbols-outlined text-[16px]">block</span> Blocked</span>
            </div>
          </div>

          <!-- Outline only (transparent) -->
          <div>
            <p class="text-label-sm font-bold uppercase tracking-wider text-outline mb-3">Outline only</p>
            <div class="flex flex-wrap gap-2.5">
              <span class="inline-flex items-center rounded-full border border-primary text-primary text-label-md font-bold px-3.5 py-1">Primary</span>
              <span class="inline-flex items-center rounded-full border border-emerald-500 text-emerald-600 text-label-md font-bold px-3.5 py-1">Success</span>
              <span class="inline-flex items-center rounded-full border border-amber-500 text-amber-600 text-label-md font-bold px-3.5 py-1">Warning</span>
              <span class="inline-flex items-center rounded-full border border-red-500 text-red-600 text-label-md font-bold px-3.5 py-1">Error</span>
              <span class="inline-flex items-center rounded-full border border-outline text-secondary text-label-md font-bold px-3.5 py-1">Neutral</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php include('footer.php'); ?>
  </main>
  <!-- Micro-interaction Scripts -->
   <?php include('script.php'); ?>
  <script>
    (function () {
      document.querySelectorAll('[data-dismiss-alert]').forEach(function (btn) {
        btn.addEventListener('click', function () {
          var alert = btn.closest('.js-alert');
          if (!alert) return;
          // Smooth collapse + fade out, then remove
          alert.style.maxHeight = alert.scrollHeight + 'px';
          requestAnimationFrame(function () {
            alert.style.maxHeight = '0px';
            alert.style.opacity = '0';
            alert.style.paddingTop = '0px';
            alert.style.paddingBottom = '0px';
            alert.style.marginTop = '0px';
            alert.style.overflow = 'hidden';
          });
          alert.addEventListener('transitionend', function () { alert.remove(); }, { once: true });
        });
      });
    })();
  </script>
</body>

</html>