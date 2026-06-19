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
            <span class="text-on-surface font-semibold">Import Distribution</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Import Distribution Form</h2>
        </div>
      </div>

      <!-- Information Banner -->
      <div class="bg-white border border-outline-variant hover:border-primary/50 rounded-2xl p-6 flex flex-col gap-4">
        <div class="flex gap-6 items-start">
          <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center text-primary shrink-0">
            <span class="material-symbols-outlined text-[28px]">cloud_upload</span>
          </div>
          <div class="flex-1">
            <h3 class="text-headline-md font-bold text-on-surface tracking-tight">How Import Distribution Works</h3>
            <p class="text-body-md text-secondary mt-2 leading-relaxed">Bulk distribute digital wallet passes by
              importing recipient data from CSV or Excel files. Upload your file with recipient information, map the
              columns to pass fields, and distribute passes to multiple recipients at once.</p>
          </div>
        </div>
        <!-- Steps -->
        <div class="bg-primary/5 rounded-2xl p-3 flex flex-wrap items-center gap-3">
          <div class="flex items-center gap-2.5 bg-white rounded-full pl-2.5 pr-5 py-2 shadow-sm border border-outline-variant/40 transition-transform hover:-translate-y-0.5">
            <span class="material-symbols-outlined text-emerald-500 text-[22px]" style="font-variation-settings: 'FILL' 1;">check_circle</span>
            <span class="text-body-md font-bold text-on-surface">Upload File</span>
          </div>
          <div class="flex items-center gap-2.5 bg-white rounded-full pl-2.5 pr-5 py-2 shadow-sm border border-outline-variant/40 transition-transform hover:-translate-y-0.5">
            <span class="material-symbols-outlined text-emerald-500 text-[22px]" style="font-variation-settings: 'FILL' 1;">check_circle</span>
            <span class="text-body-md font-bold text-on-surface">Map Columns</span>
          </div>
          <div class="flex items-center gap-2.5 bg-white rounded-full pl-2.5 pr-5 py-2 shadow-sm border border-outline-variant/40 transition-transform hover:-translate-y-0.5">
            <span class="material-symbols-outlined text-emerald-500 text-[22px]" style="font-variation-settings: 'FILL' 1;">check_circle</span>
            <span class="text-body-md font-bold text-on-surface">Preview Data</span>
          </div>
          <div class="flex items-center gap-2.5 bg-white rounded-full pl-2.5 pr-5 py-2 shadow-sm border border-outline-variant/40 transition-transform hover:-translate-y-0.5">
            <span class="material-symbols-outlined text-emerald-500 text-[22px]" style="font-variation-settings: 'FILL' 1;">check_circle</span>
            <span class="text-body-md font-bold text-on-surface">Distribute</span>
          </div>
        </div>
      </div>

      <!-- Wizard Card -->
      <div class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
        <!-- Stepper -->
        <div class="grid grid-cols-1 md:grid-cols-3 border-b border-outline-variant/60">
          <!-- Step 1 (active) -->
          <div class="relative flex items-center gap-4 p-6 bg-primary/5">
            <div class="w-11 h-11 rounded-full bg-primary text-white flex items-center justify-center shrink-0 shadow-md shadow-primary/30">
              <span class="material-symbols-outlined text-[22px]">cloud_upload</span>
            </div>
            <div>
              <p class="text-body-lg font-bold text-on-surface">Upload Your CSV File</p>
              <p class="text-label-md text-secondary mt-0.5 leading-snug">Select a template and upload your recipient data</p>
            </div>
            <span class="hidden md:block absolute right-0 top-1/2 -translate-y-1/2 translate-x-1/2 z-10 w-3 h-3 rotate-45 bg-white border-t border-r border-outline-variant/60"></span>
          </div>
          <!-- Step 2 -->
          <div class="flex items-center gap-4 p-6 border-t md:border-t-0 md:border-l border-outline-variant/60">
            <div class="w-11 h-11 rounded-full border-2 border-outline-variant text-outline flex items-center justify-center shrink-0">
              <span class="material-symbols-outlined text-[22px]">swap_horiz</span>
            </div>
            <div>
              <p class="text-body-lg font-bold text-outline">Map CSV Fields</p>
              <p class="text-label-md text-secondary mt-0.5 leading-snug">Match your CSV columns to the required fields</p>
            </div>
          </div>
          <!-- Step 3 -->
          <div class="flex items-center gap-4 p-6 border-t md:border-t-0 md:border-l border-outline-variant/60">
            <div class="w-11 h-11 rounded-full border-2 border-outline-variant text-outline flex items-center justify-center shrink-0">
              <span class="material-symbols-outlined text-[22px]">download</span>
            </div>
            <div>
              <p class="text-body-lg font-bold text-outline">Import</p>
              <p class="text-label-md text-secondary mt-0.5 leading-snug">Process and import your data</p>
            </div>
          </div>
        </div>

        <!-- Step 1 Body -->
        <div class="p-6 md:p-8 space-y-8">
          <!-- Info note -->
          <div class="relative overflow-hidden flex items-start gap-4 bg-gradient-to-r from-blue-50 to-indigo-50/40 border border-primary/15 rounded-2xl p-5">
            <span class="absolute inset-y-0 left-0 w-1.5 bg-gradient-to-b from-primary to-indigo-500"></span>
            <div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0 ml-1">
              <span class="material-symbols-outlined text-[22px]">info</span>
            </div>
            <div class="flex-1">
              <p class="text-body-md font-bold text-on-surface">Before you upload</p>
              <p class="text-body-md text-secondary leading-relaxed mt-1">Upload a CSV file containing recipient
                information. Make sure your file includes columns for the following required fields:</p>
              <div class="flex flex-wrap gap-2 mt-3">
                <span class="inline-flex items-center gap-1.5 bg-white border border-primary/20 text-on-surface text-label-md font-semibold px-3 py-1.5 rounded-full shadow-sm">
                  <span class="material-symbols-outlined text-primary text-[16px]">person</span> First Name
                </span>
                <span class="inline-flex items-center gap-1.5 bg-white border border-primary/20 text-on-surface text-label-md font-semibold px-3 py-1.5 rounded-full shadow-sm">
                  <span class="material-symbols-outlined text-primary text-[16px]">badge</span> Last Name
                </span>
                <span class="inline-flex items-center gap-1.5 bg-white border border-primary/20 text-on-surface text-label-md font-semibold px-3 py-1.5 rounded-full shadow-sm">
                  <span class="material-symbols-outlined text-primary text-[16px]">mail</span> Email Address
                </span>
              </div>
            </div>
          </div>

          <!-- Select Template -->
          <div class="space-y-2 max-w-md">
            <label class="text-on-surface font-bold text-label-md">Select Template <span class="text-error">*</span></label>
            <select id="template-select" class="w-full js-select2" data-placeholder="-- Select Template --">
              <option></option>
              <option value="GENERIC-PASS-6">GENERIC-PASS-6</option>
              <option value="ADVERTISING 34">ADVERTISING 34</option>
            </select>
          </div>

          <!-- Choose CSV File -->
          <div class="space-y-2">
            <label class="text-on-surface font-bold text-label-md">Choose CSV File <span class="text-error">*</span></label>

            <label id="dropzone" for="csv-input"
              class="group relative flex flex-col items-center justify-center text-center gap-3 border-2 border-dashed border-outline-variant rounded-2xl px-6 py-14 cursor-pointer bg-surface-container-low/40 hover:border-primary hover:bg-primary/5 transition-all">
              <div class="w-16 h-16 rounded-full bg-primary/10 text-primary flex items-center justify-center group-hover:scale-105 transition-transform">
                <span class="material-symbols-outlined text-[32px]">cloud_upload</span>
              </div>
              <div>
                <p class="text-body-lg font-bold text-on-surface">Drag &amp; drop your file here or
                  <span class="text-primary">click to browse</span>
                </p>
                <p class="text-label-md text-outline mt-1">Supported format: CSV (Max 10MB)</p>
              </div>
              <input id="csv-input" type="file" accept=".csv" class="hidden">
            </label>

            <!-- Selected file preview -->
            <div id="file-preview" class="hidden items-center justify-between gap-4 bg-emerald-50 border border-emerald-200 rounded-xl px-4 py-3">
              <div class="flex items-center gap-3 min-w-0">
                <span class="material-symbols-outlined text-emerald-600 shrink-0">description</span>
                <div class="min-w-0">
                  <p id="file-name" class="text-body-md font-semibold text-on-surface truncate"></p>
                  <p id="file-size" class="text-label-sm text-outline"></p>
                </div>
              </div>
              <button type="button" id="remove-file" class="w-8 h-8 rounded-lg text-error hover:bg-error/10 flex items-center justify-center transition-all shrink-0">
                <span class="material-symbols-outlined text-[20px]">close</span>
              </button>
            </div>

            <!-- Download sample -->
            <div class="flex justify-end pt-1">
              <a href="#" class="inline-flex items-center gap-1.5 bg-primary/5 hover:bg-primary/10 text-primary text-label-md font-semibold px-3.5 py-2 rounded-lg transition-all">
                <span class="material-symbols-outlined text-[18px]">download</span>
                Download Sample CSV
              </a>
            </div>
          </div>
        </div>

        <!-- Footer Actions -->
        <div class="flex items-center justify-between gap-4 px-6 md:px-8 py-5 border-t border-outline-variant/60 bg-surface-container-low/30">
          <button type="button" class="hidden md:inline-flex items-center gap-1.5 text-secondary font-semibold text-label-md px-4 py-2.5 rounded-lg hover:bg-surface-container-low transition-all">
            <span class="material-symbols-outlined text-[18px]">arrow_back</span>
            Back
          </button>
          <button type="button"
            class="ml-auto inline-flex items-center gap-2 bg-brand-gradient text-on-primary px-4 py-2.5 rounded-lg text-[14px] shadow-lg shadow-primary/20 hover:shadow-xl hover:opacity-90 active:scale-[0.98] transition-all font-bold">
            Next
            <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
          </button>
        </div>
      </div>
    </section>
    <?php include('footer.php'); ?>
  </main>
  <!-- Micro-interaction Scripts -->
   <?php include('script.php'); ?>
  <script>
    (function () {
      var input = document.getElementById('csv-input');
      var dropzone = document.getElementById('dropzone');
      var preview = document.getElementById('file-preview');
      var nameEl = document.getElementById('file-name');
      var sizeEl = document.getElementById('file-size');
      var removeBtn = document.getElementById('remove-file');

      function formatSize(bytes) {
        if (bytes < 1024) return bytes + ' B';
        if (bytes < 1024 * 1024) return (bytes / 1024).toFixed(1) + ' KB';
        return (bytes / (1024 * 1024)).toFixed(2) + ' MB';
      }

      function showFile(file) {
        nameEl.textContent = file.name;
        sizeEl.textContent = formatSize(file.size);
        preview.classList.remove('hidden');
        preview.classList.add('flex');
      }

      function clearFile() {
        input.value = '';
        preview.classList.add('hidden');
        preview.classList.remove('flex');
      }

      input.addEventListener('change', function () {
        if (input.files && input.files.length) {
          showFile(input.files[0]);
        }
      });

      removeBtn.addEventListener('click', clearFile);

      // Drag & drop styling + file capture
      ['dragenter', 'dragover'].forEach(function (evt) {
        dropzone.addEventListener(evt, function (e) {
          e.preventDefault();
          dropzone.classList.add('border-primary', 'bg-primary/5');
        });
      });
      ['dragleave', 'drop'].forEach(function (evt) {
        dropzone.addEventListener(evt, function (e) {
          e.preventDefault();
          dropzone.classList.remove('border-primary', 'bg-primary/5');
        });
      });
      dropzone.addEventListener('drop', function (e) {
        var files = e.dataTransfer && e.dataTransfer.files;
        if (files && files.length) {
          input.files = files;
          showFile(files[0]);
        }
      });
    })();
  </script>
</body>

</html>
