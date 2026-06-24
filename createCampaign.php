<!DOCTYPE html>
<html class="light" lang="en" style="">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WePass - Create Campaign</title>
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
            <span class="material-symbols-outlined text-[14px] text-blue-600">home</span> <span class="text-blue-600 font-semibold">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <a href="campaigns.php" class="text-blue-600 font-semibold">Campaigns</a>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-on-surface font-semibold">Create Campaign</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Create Campaign</h2>
        </div>
        <a href="campaigns.php"
          class="flex items-center gap-2 bg-white border border-outline-variant/50 text-on-surface px-6 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold shadow-sm">
          <span class="material-symbols-outlined text-[18px]">arrow_back</span>
          Back
        </a>
      </div>

      <form class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
        <!-- ============ BASIC INFORMATION ============ -->
        <div class="p-6 space-y-6">
          <!-- Section bar -->
          <div class="flex items-center gap-3 bg-surface-container-low/60 border border-outline-variant/50 rounded-xl px-4 py-3">
            <div class="w-10 h-10 rounded-lg bg-primary/10 text-primary flex items-center justify-center shrink-0">
              <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">info</span>
            </div>
            <div class="min-w-0">
              <h4 class="text-body-lg font-bold text-on-surface leading-tight">Basic Information</h4>
              <p class="text-label-md text-secondary">Template, title and delivery schedule</p>
            </div>
          </div>

          <!-- Template + Title -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div class="space-y-2">
              <label class="flex items-center gap-1 text-on-surface font-semibold text-label-md">Pass Template: <span class="text-red-500">*</span></label>
              <select class="w-full js-select2" data-placeholder="Select pass template">
                <option></option>
                <option value="gift-card-49">Gift-Card-49</option>
                <option value="coupon-32">Coupon-32</option>
                <option value="business-card-53">Business-Card-53</option>
                <option value="gift-card-57">Gift-Card-57</option>
              </select>
            </div>
            <div class="space-y-2">
              <label class="flex items-center gap-1 text-on-surface font-semibold text-label-md">Title: <span class="text-red-500">*</span></label>
              <input type="text" placeholder="e.g. Winter Promo 2026" required
                class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md text-on-surface placeholder:text-outline focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
            </div>
          </div>

          <!-- Delivery + schedule fields -->
          <div class="rounded-xl border border-outline-variant/60 bg-surface-container-low/30 p-5 space-y-5">
            <div class="space-y-2">
              <label class="flex items-center gap-1 text-on-surface font-semibold text-label-md">Campaign Delivery: <span class="text-red-500">*</span></label>
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <!-- Send Now -->
                <label data-delivery-card class="relative flex items-start gap-3 rounded-xl border bg-white px-4 py-3.5 cursor-pointer border-outline-variant hover:border-primary/50 transition-colors">
                  <input type="radio" name="delivery" value="send_now" class="sr-only peer" checked>
                  <span class="mt-0.5 w-[18px] h-[18px] rounded-full border-2 border-outline-variant peer-checked:border-primary flex items-center justify-center shrink-0 after:content-[''] after:w-2.5 after:h-2.5 after:rounded-full after:bg-primary after:scale-0 peer-checked:after:scale-100 after:transition-transform"></span>
                  <span class="min-w-0">
                    <span class="block text-body-md font-bold text-on-surface">Send Now</span>
                    <span class="block text-label-md text-outline">Starts on the next scheduler run.</span>
                  </span>
                </label>
                <!-- Schedule -->
                <label data-delivery-card class="relative flex items-start gap-3 rounded-xl border bg-white px-4 py-3.5 cursor-pointer border-outline-variant hover:border-primary/50 transition-colors">
                  <input type="radio" name="delivery" value="schedule" class="sr-only peer">
                  <span class="mt-0.5 w-[18px] h-[18px] rounded-full border-2 border-outline-variant peer-checked:border-primary flex items-center justify-center shrink-0 after:content-[''] after:w-2.5 after:h-2.5 after:rounded-full after:bg-primary after:scale-0 peer-checked:after:scale-100 after:transition-transform"></span>
                  <span class="min-w-0">
                    <span class="block text-body-md font-bold text-on-surface">Schedule</span>
                    <span class="block text-label-md text-outline">Starts at a date &amp; time you choose.</span>
                  </span>
                </label>
              </div>
            </div>

            <!-- Timezone -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
              <div class="space-y-2">
                <label class="flex items-center gap-1 text-on-surface font-semibold text-label-md">Timezone: <span class="text-red-500">*</span></label>
                <select class="w-full js-select2" data-placeholder="Select timezone">
                  <option></option>
                  <option value="Asia/Kolkata">(GMT+5:30) Asia/Kolkata</option>
                  <option value="UTC">(GMT+0:00) UTC</option>
                  <option value="America/New_York">(GMT-5:00) America/New York</option>
                  <option value="Europe/Athens">(GMT+2:00) Europe/Athens</option>
                </select>
              </div>
              <div class="hidden md:block"></div>
              <!-- End Date -->
              <div class="space-y-2">
                <label class="flex items-center gap-1 text-on-surface font-semibold text-label-md">End Date: <span class="text-red-500">*</span></label>
                <div class="relative">
                  <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[20px] pointer-events-none">calendar_month</span>
                  <input type="date" placeholder="End Date"
                    class="w-full bg-surface-container-low border-outline-variant rounded-lg pl-11 pr-4 py-3 text-body-md text-on-surface focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                </div>
              </div>
              <!-- End Time -->
              <div class="space-y-2">
                <label class="flex items-center gap-1 text-on-surface font-semibold text-label-md">End Time: <span class="text-red-500">*</span></label>
                <select class="w-full js-select2" data-placeholder="Select end time">
                  <option></option>
                  <option value="09:00">09:00 AM</option>
                  <option value="12:00">12:00 PM</option>
                  <option value="15:00">03:00 PM</option>
                  <option value="18:00">06:00 PM</option>
                  <option value="21:00">09:00 PM</option>
                </select>
              </div>
            </div>
          </div>
        </div>

        <!-- ============ STORES ============ -->
        <?php
          $stores = [
            ['name' => 'Aatman Infotech', 'city' => 'Rajkot, India', 'tone' => 'bg-emerald-50 text-emerald-600'],
            ['name' => 'Apple Store',     'city' => 'Rajkot, India', 'tone' => 'bg-blue-50 text-blue-600'],
          ];
        ?>
        <div class="border-t border-outline-variant/60 p-6 space-y-5">
          <!-- Section bar -->
          <div class="flex items-center justify-between gap-3 bg-surface-container-low/60 border border-outline-variant/50 rounded-xl px-4 py-3">
            <div class="flex items-center gap-3 min-w-0">
              <div class="w-10 h-10 rounded-lg bg-primary/10 text-primary flex items-center justify-center shrink-0">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">storefront</span>
              </div>
              <div class="min-w-0">
                <h4 class="text-body-lg font-bold text-on-surface leading-tight">Stores</h4>
                <p class="text-label-md text-secondary">Choose where this campaign runs</p>
              </div>
            </div>
            <span id="storeCountTop" class="bg-primary/10 text-primary text-label-sm font-bold px-3 py-1 rounded-full whitespace-nowrap">0 / 10 selected</span>
          </div>

          <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
            <!-- Available Stores -->
            <div class="rounded-xl border border-outline-variant bg-white flex flex-col h-[420px]">
              <div class="flex items-center justify-between gap-3 px-4 py-3 border-b border-outline-variant/60">
                <p class="text-label-md font-bold uppercase tracking-wide text-outline">Available Stores</p>
                <button type="button" onclick="selectAllStores()" class="inline-flex items-center gap-1.5 text-primary font-bold text-label-md hover:underline">
                  <span class="material-symbols-outlined text-[16px]">done_all</span> Select all
                  <span class="bg-primary/10 text-primary text-[11px] font-bold px-1.5 py-0.5 rounded-full"><?= count($stores) ?></span>
                </button>
              </div>
              <div class="p-4 pb-2">
                <div class="relative">
                  <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[20px]">search</span>
                  <input type="text" id="storeSearch" onkeyup="filterStores(this.value)" placeholder="Search by store or city…"
                    class="w-full bg-surface-container-low border-outline-variant rounded-lg pl-11 pr-4 py-2.5 text-body-md text-on-surface placeholder:text-outline focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                </div>
              </div>
              <div id="availableList" class="flex-1 overflow-y-auto px-4 pb-4 space-y-2">
                <?php foreach ($stores as $i => $s): ?>
                <div data-store="<?= $i ?>" data-name="<?= htmlspecialchars($s['name']) ?>" data-city="<?= htmlspecialchars($s['city']) ?>" data-tone="<?= $s['tone'] ?>"
                  class="js-store-row flex items-center gap-3 rounded-lg border border-outline-variant/60 bg-surface-container-low/30 p-2.5 hover:border-primary/40 transition-colors">
                  <div class="w-9 h-9 rounded-lg <?= $s['tone'] ?> flex items-center justify-center font-bold font-display shrink-0"><?= htmlspecialchars(strtoupper(substr($s['name'], 0, 1))) ?></div>
                  <div class="min-w-0 flex-1">
                    <p class="text-body-md font-medium text-on-surface truncate"><?= htmlspecialchars($s['name']) ?></p>
                    <p class="flex items-center gap-1 text-label-sm text-outline"><span class="material-symbols-outlined text-[14px]">location_on</span><?= htmlspecialchars($s['city']) ?></p>
                  </div>
                  <button type="button" data-add onclick="addStore(this)" class="w-8 h-8 rounded-lg bg-primary/10 text-primary hover:bg-primary hover:text-white flex items-center justify-center shrink-0 transition-colors">
                    <span class="material-symbols-outlined text-[20px]">add</span>
                  </button>
                </div>
                <?php endforeach; ?>
                <p id="noAvailable" class="hidden text-center text-label-md text-outline py-6">No stores match your search.</p>
              </div>
            </div>

            <!-- Selected Stores -->
            <div class="rounded-xl border border-outline-variant bg-white flex flex-col h-[420px]">
              <div class="flex items-center justify-between gap-3 px-4 py-3 border-b border-outline-variant/60">
                <p class="text-label-md font-bold uppercase tracking-wide text-outline">Selected Stores <span class="text-red-500">*</span></p>
                <span id="storeCount" class="bg-primary text-white text-[11px] font-bold px-2.5 py-0.5 rounded-full">0 / 10</span>
              </div>
              <div id="selectedList" class="flex-1 overflow-y-auto p-4 space-y-2">
                <!-- Empty state -->
                <div id="selectedEmpty" class="h-full flex flex-col items-center justify-center text-center px-6">
                  <span class="material-symbols-outlined text-[40px] text-outline-variant">wrong_location</span>
                  <p class="text-body-md font-bold text-on-surface mt-2">No stores selected yet</p>
                  <p class="text-label-md text-outline mt-0.5">Pick stores from the left to add them here.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- ============ FOOTER ============ -->
        <div class="flex items-center justify-center gap-3 px-6 py-5 border-t border-outline-variant/60 bg-surface-container-low/30">
          <a href="campaigns.php"
            class="inline-flex items-center gap-2 bg-white border border-outline-variant text-on-surface-variant px-5 py-2.5 rounded-lg text-[14px] font-bold hover:bg-surface-container-low transition-all">
            <span class="material-symbols-outlined text-[20px]">close</span>
            Cancel
          </a>
          <button type="submit"
            class="inline-flex items-center gap-2 bg-emerald-500 text-white px-6 py-2.5 rounded-lg text-[14px] font-bold shadow-lg shadow-emerald-500/20 hover:opacity-95 active:scale-[0.98] transition-all">
            <span class="material-symbols-outlined text-[20px]">send</span>
            Submit
          </button>
        </div>
      </form>
    </section>
    <?php include('footer.php'); ?>
  </main>
  <!-- Micro-interaction Scripts -->
   <?php include('script.php'); ?>
  <script>
    // ---- Delivery radio cards ----
    (function () {
      var cards = document.querySelectorAll('[data-delivery-card]');
      function update() {
        cards.forEach(function (c) {
          var on = c.querySelector('input').checked;
          c.classList.toggle('border-primary', on);
          c.classList.toggle('bg-primary/5', on);
          c.classList.toggle('border-outline-variant', !on);
        });
      }
      cards.forEach(function (c) { c.querySelector('input').addEventListener('change', update); });
      update();
    })();

    // ---- Store picker ----
    (function () {
      var LIMIT = 10;
      var selectedList = document.getElementById('selectedList');
      var selectedEmpty = document.getElementById('selectedEmpty');
      var badge = document.getElementById('storeCount');
      var badgeTop = document.getElementById('storeCountTop');

      function count() { return selectedList.querySelectorAll('[data-selected-item]').length; }

      function update() {
        var n = count();
        badge.textContent = n + ' / ' + LIMIT;
        badgeTop.textContent = n + ' / ' + LIMIT + ' selected';
        selectedEmpty.classList.toggle('hidden', n > 0);
      }

      window.addStore = function (btn) {
        if (count() >= LIMIT) return;
        var row = btn.closest('[data-store]');
        row.classList.add('hidden');

        var item = document.createElement('div');
        item.setAttribute('data-selected-item', '');
        item.dataset.ref = row.dataset.store;
        item.className = 'flex items-center gap-3 rounded-lg border border-outline-variant/60 bg-surface-container-low/30 p-2.5';
        item.innerHTML =
          '<div class="w-9 h-9 rounded-lg ' + row.dataset.tone + ' flex items-center justify-center font-bold font-display shrink-0">' + row.dataset.name.charAt(0).toUpperCase() + '</div>' +
          '<div class="min-w-0 flex-1">' +
            '<p class="text-body-md font-medium text-on-surface truncate">' + row.dataset.name + '</p>' +
            '<p class="flex items-center gap-1 text-label-sm text-outline"><span class="material-symbols-outlined text-[14px]">location_on</span>' + row.dataset.city + '</p>' +
          '</div>' +
          '<button type="button" onclick="removeStore(this)" class="w-8 h-8 rounded-lg text-outline hover:bg-rose-50 hover:text-rose-600 flex items-center justify-center shrink-0 transition-colors"><span class="material-symbols-outlined text-[20px]">close</span></button>';
        selectedList.appendChild(item);
        update();
      };

      window.removeStore = function (btn) {
        var item = btn.closest('[data-selected-item]');
        var row = document.querySelector('[data-store="' + item.dataset.ref + '"]');
        if (row) row.classList.remove('hidden');
        item.remove();
        update();
      };

      window.selectAllStores = function () {
        document.querySelectorAll('[data-store]:not(.hidden)').forEach(function (row) {
          addStore(row.querySelector('[data-add]'));
        });
      };

      window.filterStores = function (q) {
        q = q.toLowerCase().trim();
        var visible = 0;
        document.querySelectorAll('.js-store-row').forEach(function (row) {
          if (row.classList.contains('hidden') && row.dataset.added === '1') return;
          var match = (row.dataset.name + ' ' + row.dataset.city).toLowerCase().indexOf(q) !== -1;
          // only toggle rows that are still available (not moved to selected)
          if (!document.querySelector('[data-selected-item][data-ref="' + row.dataset.store + '"]')) {
            row.classList.toggle('hidden', !match);
            if (match) visible++;
          }
        });
        document.getElementById('noAvailable').classList.toggle('hidden', visible > 0);
      };

      update();
    })();
  </script>
</body>

</html>
