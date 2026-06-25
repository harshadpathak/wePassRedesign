<!DOCTYPE html>
<html class="light" lang="en" style="">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WePass - Create Store</title>
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
            <a href="stores.php" class="text-blue-600 font-semibold">Stores</a>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-on-surface font-semibold">Create Store</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Create Store</h2>
        </div>
        <a href="stores.php"
          class="flex items-center gap-2 bg-white border border-outline-variant/50 text-on-surface px-6 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold shadow-sm">
          <span class="material-symbols-outlined text-[18px]">arrow_back</span>
          Back
        </a>
      </div>

      <form class="space-y-stack-lg">
        <!-- ===== Store Form Card ===== -->
        <div class="bg-white rounded-2xl border border-outline-variant p-6 shadow-sm">
          <!-- Basic Information header -->
          <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4 mb-6">
            <div class="flex items-center gap-3">
              <div class="w-8 h-8 bg-blue-50 text-primary rounded-lg flex items-center justify-center">
                <span class="material-symbols-outlined text-[20px]">storefront</span>
              </div>
              <h3 class="text-headline-md font-bold text-on-surface">Basic Information</h3>
            </div>
            <div class="flex items-center gap-2.5">
              <!-- Default -->
              <label class="inline-flex items-center gap-2.5 bg-white border border-outline-variant/60 rounded-lg pl-3 pr-2.5 py-2 cursor-pointer select-none hover:border-primary/50 transition-colors">
                <span class="inline-flex items-center gap-1.5">
                  <span class="text-[13px] font-semibold text-on-surface">Default</span>
                </span>
                <input type="checkbox" class="sr-only peer">
                <span class="relative w-9 h-5 rounded-full bg-outline-variant peer-checked:bg-primary transition-colors after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:h-4 after:w-4 after:rounded-full after:bg-white after:shadow after:transition-all peer-checked:after:translate-x-4"></span>
              </label>
            </div>
          </div>

          <!-- Two-column grid -->
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-stretch">
            <!-- LEFT column -->
            <div class="flex flex-col gap-5">
              <!-- Store Name -->
              <div class="space-y-2">
                <label class="flex items-center text-on-surface font-semibold text-label-md">
                  Store Name:<span class="text-red-500">*</span></label>
                <input type="text" placeholder="e.g. Thermi Flagship Store" required
                  class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md text-on-surface placeholder:text-outline focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
              </div>

              <!-- Apple Wallet Location Message -->
              <div class="flex flex-col flex-1 space-y-2">
                <label class="flex items-center text-on-surface font-semibold text-label-md">
                  Apple Wallet Location Message: <span class="text-red-500">*</span>
                </label>
                <div class="relative flex-1">
                  <textarea id="walletMsg" maxlength="120" required
                    oninput="document.getElementById('walletMsgCount').textContent = this.value.length"
                    placeholder="e.g. You are near our Thermi store. Tap to view your pass."
                    class="w-full h-full min-h-[120px] bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md text-on-surface placeholder:text-outline focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all resize-none"></textarea>
                  <span class="absolute bottom-3 right-3 text-label-sm text-outline pointer-events-none">
                    <span id="walletMsgCount">0</span> / 120
                  </span>
                </div>
                <p class="text-label-md text-outline">This short text will be shown on the back of the Apple Wallet pass when the user is near this location.</p>
              </div>
            </div>

            <!-- RIGHT column -->
            <div class="flex flex-col gap-5">
              <!-- Store Image -->
              <div class="space-y-2">
                <label class="flex items-center gap-1.5 text-on-surface font-semibold text-label-md">
                  Store Image: <span class="text-outline font-medium">(Optional)</span>
                </label>
                <label class="group flex items-center gap-3 w-full h-[46px] bg-surface-container-low border border-outline-variant rounded-lg px-3 cursor-pointer hover:border-primary hover:bg-primary/5 transition-all">
                  <input type="file" id="storeImage" accept="image/png, image/jpeg" class="sr-only">
                  <span class="w-7 h-7 rounded-lg bg-primary/10 text-primary flex items-center justify-center shrink-0 overflow-hidden">
                    <span id="storeImageIcon" class="material-symbols-outlined text-[18px]">cloud_upload</span>
                    <img id="storeImagePreview" class="hidden w-full h-full object-cover" alt="Store image preview">
                  </span>
                  <span class="min-w-0 leading-tight flex-1">
                    <span id="storeImageTitle" class="block text-label-md font-bold text-on-surface truncate">Click to upload</span>
                    <span id="storeImageHint" class="block text-label-sm text-outline">JPG/PNG up to 2MB</span>
                  </span>
                  <span role="button" id="storeImageClear" class="hidden shrink-0 w-7 h-7 rounded-full text-outline hover:bg-rose-50 hover:text-rose-600 flex items-center justify-center transition-all">
                    <span class="material-symbols-outlined text-[18px]">close</span>
                  </span>
                </label>
              </div>

              <!-- Tips (spacer label aligns its top with the message textarea) -->
              <div class="space-y-2">
                <span class="block text-label-md font-semibold invisible select-none" aria-hidden="true">Tips</span>
                <div class="bg-primary/5 border border-primary/20 rounded-xl p-4">
                  <div class="flex items-center gap-2 text-primary mb-2">
                    <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">lightbulb</span>
                    <span class="text-body-md font-bold">Tips</span>
                  </div>
                  <p class="text-body-md text-on-surface-variant">Keep it short and action-focused.</p>
                  <p class="text-body-md text-on-surface mt-2"><span class="font-bold">Example:</span> &ldquo;You are near our store. Tap to view your pass.&rdquo;</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Divider -->
          <div class="border-t border-outline-variant/40 my-6"></div>
          <!-- Location header -->
          <div class="flex items-center gap-3 mb-6">
            <div class="w-8 h-8 bg-blue-50 text-primary rounded-lg flex items-center justify-center">
              <span class="material-symbols-outlined text-[20px]">location_on</span>
            </div>
            <h3 class="text-headline-md font-bold text-on-surface">Location</h3>
          </div>
          <div class="space-y-5">

          <!-- Search -->
          <div class="space-y-2">
            <label class="flex items-center text-on-surface font-semibold text-label-md">
              Search location: <span class="text-red-500">*</span>
            </label>
            <div class="relative">
              <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[20px]">search</span>
              <input type="text" placeholder="Search by address, store name, landmark, or place"
                class="w-full bg-surface-container-low border-outline-variant rounded-lg pl-11 pr-4 py-3 text-body-md text-on-surface placeholder:text-outline focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
              <p class="text-label-md text-outline">Examples: &ldquo;Leof. Georgikis Scholis 27, Thermi&rdquo;, &ldquo;Thermi Greece&rdquo;, &ldquo;Phoenix Centre Thermi&rdquo;</p>
              <button type="button" id="useMyLocation"
                class="self-start sm:self-auto inline-flex items-center gap-1.5 bg-white border border-outline-variant/60 text-primary px-3 py-1.5 rounded-lg text-label-md font-bold hover:bg-primary/5 transition-all shadow-sm shrink-0">
                <span class="material-symbols-outlined text-[18px]">my_location</span>
                Use my location
              </button>
            </div>
          </div>

          <!-- Status line (shows after a location is set) -->
          <div id="locStatus" class="hidden items-center gap-1.5 text-emerald-600 font-bold text-label-md">
            <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">check_circle</span>
            Location confirmed
          </div>

          <!-- Map + Selected details -->
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
            <!-- Map placeholder -->
            <div class="relative h-72 rounded-xl border border-outline-variant bg-surface-container-low/50 overflow-hidden flex items-center justify-center bg-[radial-gradient(circle_at_1px_1px,theme(colors.outline-variant)_1px,transparent_0)] [background-size:24px_24px]  hover:border-primary/50 transition-colors">
              <span id="mapHint" class="inline-flex items-center gap-2 bg-white border border-outline-variant/60 text-primary px-4 py-2.5 rounded-full text-label-md font-bold shadow-sm hover:shadow-md transition-shadow">
                <span class="material-symbols-outlined text-[18px]">search</span>
                Search an address to drop the pin
              </span>
              <!-- Pin (shown when a location is set) -->
              <div id="mapPin" class="hidden flex-col items-center">
                <div class="relative flex items-center justify-center">
                  <span class="absolute inline-flex h-12 w-12 rounded-full bg-primary/20 animate-ping"></span>
                  <span class="relative material-symbols-outlined text-primary text-[44px]" style="font-variation-settings: 'FILL' 1;">location_on</span>
                </div>
              </div>
            </div>

            <!-- Details panel -->
            <div class="h-72 rounded-xl border border-outline-variant bg-white p-5 overflow-hidden hover:border-primary/50 transition-colors">
              <!-- EMPTY state -->
              <div id="locEmpty" class="h-full flex-col justify-center">
                <div class="flex items-center gap-2 text-on-surface mb-2">
                  <span class="material-symbols-outlined text-outline text-[22px]">location_on</span>
                  <p class="text-body-lg font-bold">No location selected</p>
                </div>
                <p class="text-body-md text-secondary">Use the search box above to find your store. Once you pick a result, its address, postal code, city, country and exact coordinates appear here automatically &mdash; no need to look anything up.</p>
              </div>

              <!-- SELECTED state -->
              <div id="locSelected" class="hidden h-full flex flex-col">
                <!-- Header -->
                <div class="flex items-center gap-3 pb-3 border-b border-outline-variant/50">
                  <div class="w-11 h-11 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-[24px]" style="font-variation-settings: 'FILL' 1;">location_on</span>
                  </div>
                  <div class="min-w-0 flex-1">
                    <span class="inline-flex items-center gap-1 text-emerald-600 text-[10px] font-bold uppercase tracking-wider">
                      <span class="material-symbols-outlined text-[13px]" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                      Selected location
                    </span>
                    <h4 class="text-body-lg font-bold text-on-surface leading-tight">Dropped pin</h4>
                  </div>
                  <a id="gmapsLink" href="#" target="_blank" rel="noopener"
                    class="inline-flex items-center gap-1.5 bg-primary/10 text-primary font-bold text-label-sm px-3 py-1.5 rounded-lg hover:bg-primary/15 transition-colors shrink-0">
                    <span class="material-symbols-outlined text-[16px]">map</span> Maps
                  </a>
                </div>

                <!-- Coordinate cards (2x2) -->
                <div class="grid grid-cols-2 gap-2.5 mt-3 flex-1">
                  <!-- Latitude -->
                  <div class="rounded-xl border border-outline-variant/60 bg-surface-container-low/30 p-3 flex flex-col justify-center min-w-0 hover:border-primary/50 hover:bg-white transition-colors">
                    <div class="flex items-center gap-2">
                      <span class="w-6 h-6 rounded-md bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-[15px]">my_location</span>
                      </span>
                      <span class="text-label-sm text-outline font-bold uppercase tracking-wide">Latitude</span>
                    </div>
                    <p id="latVal" class="text-body-md font-semibold text-on-surface mt-1.5 truncate">&mdash;</p>
                  </div>
                  <!-- Longitude -->
                  <div class="rounded-xl border border-outline-variant/60 bg-surface-container-low/30 p-3 flex flex-col justify-center min-w-0 hover:border-primary/50 hover:bg-white transition-colors">
                    <div class="flex items-center gap-2">
                      <span class="w-6 h-6 rounded-md bg-indigo-50 text-indigo-600 flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-[15px]">explore</span>
                      </span>
                      <span class="text-label-sm text-outline font-bold uppercase tracking-wide">Longitude</span>
                    </div>
                    <p id="lngVal" class="text-body-md font-semibold text-on-surface mt-1.5 truncate">&mdash;</p>
                  </div>
                  <!-- Place ID -->
                  <div class="rounded-xl border border-outline-variant/60 bg-surface-container-low/30 p-3 flex flex-col justify-center min-w-0 hover:border-primary/50 hover:bg-white transition-colors">
                    <div class="flex items-center gap-2">
                      <span class="w-6 h-6 rounded-md bg-violet-50 text-violet-600 flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-[15px]">tag</span>
                      </span>
                      <span class="text-label-sm text-outline font-bold uppercase tracking-wide">Place ID</span>
                    </div>
                    <p id="placeVal" class="text-body-md font-semibold text-on-surface mt-1.5 truncate">&mdash;</p>
                  </div>
                  <!-- Source -->
                  <div class="rounded-xl border border-outline-variant/60 bg-surface-container-low/30 p-3 flex flex-col justify-center min-w-0 hover:border-primary/50 hover:bg-white transition-colors">
                    <div class="flex items-center gap-2">
                      <span class="w-6 h-6 rounded-md bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-[15px]">public</span>
                      </span>
                      <span class="text-label-sm text-outline font-bold uppercase tracking-wide">Source</span>
                    </div>
                    <p id="sourceVal" class="text-body-md font-semibold text-on-surface mt-1.5 truncate">&mdash;</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Advanced location fields (collapsible) -->
          <div class="pt-1">
            <button type="button" id="advancedToggle"
              onclick="document.getElementById('advancedPanel').classList.toggle('hidden'); this.querySelector('.chevron').classList.toggle('rotate-90')"
              class="flex items-center gap-1.5 text-primary font-bold text-body-lg">
              <span class="material-symbols-outlined chevron text-[22px] transition-transform duration-200">chevron_right</span>
              Advanced location fields
            </button>
            <p class="text-body-md text-secondary mt-1 ml-7">Auto-filled from your selection. You may adjust the address parts; coordinates are read-only.</p>

            <!-- Collapsible panel -->
            <div id="advancedPanel" class="hidden mt-4 space-y-4">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <!-- Address -->
                <div class="space-y-2">
                  <label class="flex items-center text-on-surface font-semibold text-label-md">Address: <span class="text-red-500">*</span></label>
                  <input type="text" id="advAddress" placeholder="Auto-filled from search"
                    class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md text-on-surface placeholder:text-outline focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                  <div id="addrHint" class="hidden">
                    <span class="inline-flex items-center gap-1.5 bg-primary/5 text-label-sm px-2.5 py-1 rounded-full">
                      <span class="material-symbols-outlined text-[14px] text-primary">public</span>
                      <span id="addrHintCountry" class="font-bold text-primary"></span>
                      <span class="text-outline">format: <span id="addrHintFormat" class="text-outline"></span></span>
                    </span>
                  </div>
                </div>
                <!-- Postal Code -->
                <div class="space-y-2">
                  <label class="flex items-center text-on-surface font-semibold text-label-md">Postal Code:</label>
                  <input type="text" placeholder="Postal code" disabled
                    class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md text-on-surface placeholder:text-outline focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                </div>
                <!-- Country -->
                <div class="space-y-2">
                  <label class="flex items-center text-on-surface font-semibold text-label-md">Country: <span class="text-red-500">*</span></label>
                  <select id="advCountry" class="w-full js-select2" data-placeholder="-- Select Country --">
                    <option></option>
                    <option value="India">India</option>
                    <option value="United States">United States</option>
                    <option value="Greece">Greece</option>
                  </select>
                </div>
                <!-- City -->
                <div class="space-y-2">
                  <label class="flex items-center text-on-surface font-semibold text-label-md">City: <span class="text-red-500">*</span></label>
                  <input type="text" id="advCity" placeholder="City"
                    class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md text-on-surface placeholder:text-outline focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                </div>
                <!-- Latitude -->
                <div class="space-y-2">
                  <label class="flex items-center text-on-surface font-semibold text-label-md">Latitude: <span class="text-red-500">*</span></label>
                  <input type="text" id="advLat" readonly value="&mdash;"
                    class="w-full bg-surface-container-high/60 border-outline-variant/60 rounded-lg py-3 px-4 text-body-md text-on-surface-variant cursor-not-allowed">
                </div>
                <!-- Longitude -->
                <div class="space-y-2">
                  <label class="flex items-center text-on-surface font-semibold text-label-md">Longitude: <span class="text-red-500">*</span></label>
                  <input type="text" id="advLng" readonly value="&mdash;"
                    class="w-full bg-surface-container-high/60 border-outline-variant/60 rounded-lg py-3 px-4 text-body-md text-on-surface-variant cursor-not-allowed">
                </div>
              </div>
              <!-- Coordinates helper -->
              <p class="flex items-center gap-1.5 text-label-md text-outline">
                <span class="material-symbols-outlined text-[16px]">lock</span>
                Latitude &amp; longitude are derived from the selected place &mdash; they can&rsquo;t be typed. Drag the map pin to fine-tune.
              </p>
            </div>
          </div>

          <!-- Location Summary -->
          <div class="bg-surface-container-low/60 border border-outline-variant/50 rounded-xl p-5 hover:border-primary/50 transition-colors">
            <div class="flex items-center gap-2 mb-4">
              <span class="material-symbols-outlined text-primary text-[20px]" style="font-variation-settings: 'FILL' 1;">location_on</span>
              <h4 class="text-body-lg font-bold text-on-surface">Location summary</h4>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-5 gap-y-4">
              <!-- Address -->
              <div class="flex items-start gap-3 min-w-0">
                <div class="w-9 h-9 rounded-lg bg-indigo-100 text-indigo-700 flex items-center justify-center shrink-0">
                  <span class="material-symbols-outlined text-[20px]">home_pin</span>
                </div>
                <div class="min-w-0">
                  <p class="text-label-sm text-outline font-medium">Address</p>
                  <p id="sumAddress" class="text-body-md font-semibold text-on-surface line-clamp-2">&mdash;</p>
                </div>
              </div>
              <!-- Country / City -->
              <div class="flex items-start gap-3 min-w-0">
                <div class="w-9 h-9 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center shrink-0">
                  <span class="material-symbols-outlined text-[20px]">public</span>
                </div>
                <div class="min-w-0">
                  <p class="text-label-sm text-outline font-medium">Country / City</p>
                  <p id="sumCountryCity" class="text-body-md font-semibold text-on-surface truncate">&mdash;</p>
                </div>
              </div>
              <!-- Coordinates -->
              <div class="flex items-start gap-3 min-w-0">
                <div class="w-9 h-9 rounded-lg bg-blue-100 text-blue-700 flex items-center justify-center shrink-0">
                  <span class="material-symbols-outlined text-[20px]">my_location</span>
                </div>
                <div class="min-w-0">
                  <p class="text-label-sm text-outline font-medium">Coordinates</p>
                  <p id="sumCoords" class="text-body-md font-semibold text-on-surface truncate">&mdash;</p>
                </div>
              </div>
              <!-- Wallet Message -->
              <div class="flex items-start gap-3 min-w-0">
                <div class="w-9 h-9 rounded-lg bg-amber-100 text-amber-700 flex items-center justify-center shrink-0">
                  <span class="material-symbols-outlined text-[20px]">chat</span>
                </div>
                <div class="min-w-0">
                  <p class="text-label-sm text-outline font-medium">Wallet Message</p>
                  <p id="sumWallet" class="text-body-md font-semibold text-on-surface line-clamp-2">&mdash;</p>
                </div>
              </div>
            </div>
          </div>
          </div>

          <!-- Footer -->
          <div class="flex justify-center mt-8 pt-6 border-t border-outline-variant/30">
            <button type="submit"
              class="flex items-center gap-2 bg-emerald-500 text-white px-8 py-3 rounded-lg text-[14px] font-bold shadow-lg shadow-emerald-500/20 hover:opacity-95 active:scale-[0.98] transition-all">
              <span class="material-symbols-outlined">save</span>
              Submit
            </button>
          </div>
        </div>
      </form>
    </section>
    <?php include('footer.php'); ?>
  </main>
  <!-- Micro-interaction Scripts -->
   <?php include('script.php'); ?>
  <script>
    (function () {
      var input   = document.getElementById('storeImage');
      var icon    = document.getElementById('storeImageIcon');
      var preview = document.getElementById('storeImagePreview');
      var title   = document.getElementById('storeImageTitle');
      var hint    = document.getElementById('storeImageHint');
      var clearBtn = document.getElementById('storeImageClear');
      if (!input) return;

      function reset() {
        input.value = '';
        preview.src = '';
        preview.classList.add('hidden');
        icon.classList.remove('hidden');
        title.textContent = 'Click to upload';
        hint.textContent = 'JPG/PNG up to 2MB';
        clearBtn.classList.add('hidden');
      }

      input.addEventListener('change', function () {
        var file = input.files && input.files[0];
        if (!file) { reset(); return; }
        var reader = new FileReader();
        reader.onload = function (e) {
          preview.src = e.target.result;
          preview.classList.remove('hidden');
          icon.classList.add('hidden');
          title.textContent = file.name;
          hint.textContent = (file.size / 1024 / 1024).toFixed(2) + ' MB';
          clearBtn.classList.remove('hidden');
        };
        reader.readAsDataURL(file);
      });

      clearBtn.addEventListener('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        reset();
      });
    })();

    // ---- Use my location ----
    (function () {
      var btn = document.getElementById('useMyLocation');
      if (!btn) return;
      var original = btn.innerHTML;

      function setLocation(lat, lng, source, placeId) {
        var latStr = lat.toFixed(8);
        var lngStr = lng.toFixed(8);

        // Status + map pin
        document.getElementById('locStatus').classList.remove('hidden');
        document.getElementById('locStatus').classList.add('flex');
        document.getElementById('mapHint').classList.add('hidden');
        var pin = document.getElementById('mapPin');
        pin.classList.remove('hidden');
        pin.classList.add('flex');

        // Details panel: swap empty -> selected
        document.getElementById('locEmpty').classList.add('hidden');
        document.getElementById('locSelected').classList.remove('hidden');
        document.getElementById('latVal').textContent = latStr;
        document.getElementById('lngVal').textContent = lngStr;
        document.getElementById('placeVal').textContent = placeId || '—';
        document.getElementById('sourceVal').textContent = source;
        document.getElementById('gmapsLink').href = 'https://www.google.com/maps?q=' + latStr + ',' + lngStr;

        // Advanced fields + summary
        document.getElementById('advLat').value = latStr;
        document.getElementById('advLng').value = lngStr;
        document.getElementById('sumCoords').textContent = latStr + ', ' + lngStr;
      }

      btn.addEventListener('click', function () {
        if (!navigator.geolocation) {
          setLocation(22.25802280, 70.78801820, 'Coordinates', null);
          return;
        }
        btn.disabled = true;
        btn.innerHTML = '<span class="material-symbols-outlined text-[18px] animate-spin">progress_activity</span> Locating…';
        navigator.geolocation.getCurrentPosition(
          function (pos) {
            setLocation(pos.coords.latitude, pos.coords.longitude, 'Coordinates', null);
            btn.disabled = false;
            btn.innerHTML = original;
          },
          function () {
            // Permission denied / unavailable — fall back to a sample pin
            setLocation(22.25802280, 70.78801820, 'Coordinates', null);
            btn.disabled = false;
            btn.innerHTML = original;
          },
          { enableHighAccuracy: true, timeout: 8000 }
        );
      });
    })();

    // ---- Live summary binding ----
    (function () {
      var addr    = document.getElementById('advAddress');
      var country = document.getElementById('advCountry');
      var city    = document.getElementById('advCity');
      var wallet  = document.getElementById('walletMsg');
      var DASH = '—';

      function bind(input, fn) {
        if (!input) return;
        input.addEventListener('input', fn);
        input.addEventListener('change', fn);
        input.addEventListener('keyup', fn);
      }

      function syncAddress() {
        document.getElementById('sumAddress').textContent = (addr.value.trim() || DASH);
      }
      // Address-format hint by country (falls back to a generic format)
      var ARROW = ' → ';
      var FORMATS = {
        'india': 'Number' + ARROW + 'Street',
        'united states': 'Number' + ARROW + 'Street',
        'greece': 'Street' + ARROW + 'Number'
      };

      function syncCountryCity() {
        var c = country.value.trim(), t = city.value.trim();
        var out = c && t ? (c + ' / ' + t) : (c || t || DASH);
        document.getElementById('sumCountryCity').textContent = out;

        // Address hint
        var hint = document.getElementById('addrHint');
        if (c) {
          document.getElementById('addrHintCountry').textContent = c;
          document.getElementById('addrHintFormat').textContent = FORMATS[c.toLowerCase()] || 'Number → Street';
          hint.classList.remove('hidden');
        } else {
          hint.classList.add('hidden');
        }
      }
      function syncWallet() {
        document.getElementById('sumWallet').textContent = (wallet.value.trim() || DASH);
      }

      bind(addr, syncAddress);
      bind(city, syncCountryCity);
      bind(wallet, syncWallet);

      // Country is a select2 dropdown — it emits a jQuery 'change' event
      // that native listeners miss, so hook it through jQuery.
      if (window.jQuery) {
        window.jQuery('#advCountry').on('change', syncCountryCity);
      }

      // Initial sync (covers pre-filled / autofilled values)
      syncAddress();
      syncCountryCity();
      syncWallet();
    })();
  </script>
</body>

</html>
