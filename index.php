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
            <span class="material-symbols-outlined text-[14px] text-primary">home</span>
            <span class="text-on-surface font-semibold">Dashboard</span>
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
            <p class="text-body-md text-secondary leading-relaxed max-w-2xl">
              Create, manage, and distribute digital passes for Apple Wallet and Google Pay. Our platform supports
              both <span class="text-primary font-semibold">Personalized Unique</span> passes for individual customers
              and <span class="text-primary font-semibold">Generic Advertising</span> passes for broad distribution.
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
            ['Installed Passes', '220', 'vs 191 last month', 'download',    'bg-emerald-500 shadow-emerald-500/20',     'bg-emerald-400/40', '+15.2%', [34,48,44,55,64,60,76]],
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

      <!-- Pass Activity Calendar -->
      <div class="bg-white rounded-2xl border border-outline-variant p-6 shadow-sm">
        <div class="flex items-start justify-between gap-4 flex-wrap mb-6 pb-6 border-b border-outline-variant/60">
          <div class="flex items-center gap-3">
            <div class="w-11 h-11 bg-primary/10 text-primary rounded-xl flex items-center justify-center">
              <span class="material-symbols-outlined">calendar_month</span>
            </div>
            <div>
              <h3 class="text-headline-md font-bold text-on-surface">Pass Activity Calendar</h3>
              <p class="text-body-md text-secondary">Track issued and installed passes over time</p>
            </div>
          </div>
          <!-- Legend -->
          <div class="flex flex-wrap items-center gap-2">
            <?php
              $legend = [
                ['Pass Record',         '#a5f3fc'],
                ['Pass Install',        '#e3ddcd'],
                ['Campaign · Pending',  '#fde68a'],
                ['Campaign · Running',  '#86efac'],
                ['Campaign · Completed','#93c5fd'],
              ];
              foreach ($legend as [$label, $color]):
            ?>
            <span class="flex items-center gap-1.5 text-label-sm font-semibold text-secondary bg-surface-container-low border border-outline-variant/60 rounded-full px-3 py-1">
              <span class="w-2.5 h-2.5 rounded-full" style="background: <?= $color ?>;"></span><?= $label ?>
            </span>
            <?php endforeach; ?>
          </div>
        </div>
        <div id="activity-calendar"></div>
      </div>
    </section>
    <?php include('footer.php'); ?>
  </main>
  <!-- Micro-interaction Scripts -->
   <?php include('script.php'); ?>

  <!-- FullCalendar -->
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>
  <style>
    #activity-calendar {
      --fc-border-color: #eef0f4;
      --fc-today-bg-color: #fefce8;          /* light yellow for today */
      --fc-neutral-bg-color: #f8fafc;
      --fc-page-bg-color: #ffffff;
    }
    #activity-calendar .fc-toolbar-title { font-size: 22px; font-weight: 700; color: #0f172a; }
    #activity-calendar .fc .fc-toolbar.fc-header-toolbar { margin-bottom: 1.25rem; }
    /* Buttons */
    #activity-calendar .fc .fc-button {
      border: none; box-shadow: none; text-transform: capitalize;
      font-weight: 600; font-size: 13px; border-radius: 0.5rem; padding: 0.45rem 0.75rem;
    }
    #activity-calendar .fc .fc-today-button { background: #eef2ff; color: #3d5afe; }
    #activity-calendar .fc .fc-today-button:disabled { opacity: 0.5; }
    #activity-calendar .fc .fc-prev-button,
    #activity-calendar .fc .fc-next-button { background: #3d5afe; color: #fff; }
    #activity-calendar .fc .fc-prev-button:hover,
    #activity-calendar .fc .fc-next-button:hover { background: #3349d6; }
    #activity-calendar .fc .fc-button-group > .fc-button { border-radius: 0; }
    #activity-calendar .fc .fc-button-group > .fc-button:first-child { border-radius: 0.5rem 0 0 0.5rem; }
    #activity-calendar .fc .fc-button-group > .fc-button:last-child { border-radius: 0 0.5rem 0.5rem 0; }
    /* Grid */
    #activity-calendar .fc .fc-scrollgrid { border-radius: 12px; overflow: hidden; }
    #activity-calendar .fc .fc-col-header-cell-cushion {
      text-transform: uppercase; font-size: 11px; letter-spacing: 0.08em;
      color: #94a3b8; font-weight: 700; padding: 12px 6px;
    }
    #activity-calendar .fc .fc-col-header-cell { background: #f8fafc; }
    #activity-calendar .fc .fc-daygrid-day-number { font-size: 13px; color: #475569; font-weight: 600; padding: 8px 10px; }
    #activity-calendar .fc-day-other .fc-daygrid-day-number { color: #cbd5e1; }
    #activity-calendar .fc .fc-daygrid-day.fc-day-today .fc-daygrid-day-number { color: #ca8a04; font-weight: 800; }
    /* Events */
    #activity-calendar .fc-daygrid-event {
      border-radius: 6px; padding: 2px 7px; margin: 1px 5px;
      font-size: 11px; font-weight: 600; border: none;
    }
    #activity-calendar .fc-daygrid-event:hover { filter: brightness(0.96); }
    #activity-calendar .fc-daygrid-more-link {
      font-size: 11px; font-weight: 700; color: #64748b; margin: 2px 5px;
    }
  </style>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var C = {
        record:    { backgroundColor: '#cffafe', textColor: '#0e7490' },
        install:   { backgroundColor: '#e3ddcd', textColor: '#6b5e44' },
        pending:   { backgroundColor: '#fef9c3', textColor: '#854d0e' },
        running:   { backgroundColor: '#bbf7d0', textColor: '#166534' },
        completed: { backgroundColor: '#bfdbfe', textColor: '#1e40af' }
      };
      function ev(title, date, type, opts) {
        return Object.assign({ title: title, start: date, allDay: true }, C[type], opts || {});
      }

      var events = [
        // June 2
        ev('Hardik (4)', '2026-06-02', 'record'),
        ev('Hardik (4)', '2026-06-02', 'install'),
        ev('jaydeep (1)', '2026-06-02', 'record'),
        ev('jaydeep (2)', '2026-06-02', 'record'),
        ev('kartik (1)', '2026-06-02', 'record'),
        ev('Dixit (1)', '2026-06-02', 'install'),
        // June 3
        ev('hardik (5)', '2026-06-03', 'record'),
        ev('hardik (5)', '2026-06-03', 'install'),
        // June 4 — campaign completed (spans 4–5)
        ev('Celebration 2 Year Offer · Gift-Card-13 (Completed)', '2026-06-04', 'completed', { end: '2026-06-06' }),
        ev('Hardik (1)', '2026-06-04', 'record'),
        ev('Hardik (1)', '2026-06-04', 'install'),
        ev('hardik (2)', '2026-06-04', 'record'),
        ev('hardik (2)', '2026-06-04', 'install'),
        ev('jaydeep (1)', '2026-06-04', 'record'),
        ev('jaydeep (1)', '2026-06-04', 'install'),
        ev('kartik (2)', '2026-06-04', 'record'),
        ev('keval (1)', '2026-06-04', 'install'),
        // June 6
        ev('Dixit Patel (1)', '2026-06-06', 'record'),
        ev('Dixit Patel (1)', '2026-06-06', 'install'),
        ev('hardik (1)', '2026-06-06', 'record'),
        ev('hardik (1)', '2026-06-06', 'install'),
        ev('HP Makwana (1)', '2026-06-06', 'record'),
        ev('HP Makwana (1)', '2026-06-06', 'install'),
        ev('jaydeep (1)', '2026-06-06', 'record'),
        ev('kartik (1)', '2026-06-06', 'record'),
        // June 10
        ev('Dixit Patel (3)', '2026-06-10', 'record'),
        ev('Dixit Patel (3)', '2026-06-10', 'install'),
        ev('Hardik (2)', '2026-06-10', 'record'),
        ev('hardik (5)', '2026-06-10', 'record'),
        ev('hardik (5)', '2026-06-10', 'install'),
        ev('jaydeep (2)', '2026-06-10', 'record'),
        ev('jaydeep (2)', '2026-06-10', 'install'),
        ev('keval (3)', '2026-06-10', 'record'),
        ev('kartik (1)', '2026-06-10', 'install'),
        // June 11
        ev('Hardik (2)', '2026-06-11', 'record'),
        ev('Hardik (2)', '2026-06-11', 'install'),
        // June 12
        ev('jaydeep (1)', '2026-06-12', 'record'),
        ev('jaydeep (1)', '2026-06-12', 'install'),
        ev('keval (1)', '2026-06-12', 'record'),
        // June 13
        ev('hardik (1)', '2026-06-13', 'record'),
        ev('hardik (1)', '2026-06-13', 'install'),
        ev('Kartik Doe (1)', '2026-06-13', 'record'),
        ev('Kartik Doe (1)', '2026-06-13', 'install'),
        // June 16 — campaign pending (spans 16–20)
        ev('Summer Promo · Advertising 8 (Pending)', '2026-06-16', 'pending', { end: '2026-06-21' }),
        ev('Advertising 8 (1)', '2026-06-16', 'install'),
        // June 17
        ev('Hardik (2)', '2026-06-17', 'record'),
        ev('Hardik (2)', '2026-06-17', 'install'),
        ev('hardik (4)', '2026-06-17', 'record'),
        ev('hardik (4)', '2026-06-17', 'install'),
        ev('HP Makwana (1)', '2026-06-17', 'record'),
        ev('jaydeep (2)', '2026-06-17', 'install'),
        ev('keval (1)', '2026-06-17', 'record'),
        // June 18 (today)
        ev('Hardik (1)', '2026-06-18', 'record'),
        ev('Hardik (1)', '2026-06-18', 'install'),
        // June 23 — campaign running (spans 23–26)
        ev('Flash Sale · Loyalty (Running)', '2026-06-23', 'running', { end: '2026-06-27' })
      ];

      var calendar = new FullCalendar.Calendar(document.getElementById('activity-calendar'), {
        initialView: 'dayGridMonth',
        initialDate: '2026-06-01',
        now: '2026-06-18',
        firstDay: 0,
        height: 'auto',
        fixedWeekCount: true,
        dayMaxEvents: 5,
        headerToolbar: { left: 'title', center: '', right: 'today prev,next' },
        events: events
      });
      calendar.render();
    });
  </script>
</body>

</html>
