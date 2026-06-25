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
    <section class="p-margin-desktop space-y-stack-lg pb-16"><!-- Breadcrumbs and Header -->
        <div class="flex items-end justify-between">
            <div class="space-y-1">
                <nav class="flex items-center gap-2 text-label-sm text-outline mb-1">
                    <span class="material-symbols-outlined text-[14px] text-gray">home</span> <span class="text-gray font-normal">Dashboard</span>
                    <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                    <span class="text-gray-500 font-normal">Manual Distribution</span>
                </nav>
                <h2 class="font-display tracking-tight text-headline-lg font-bold">Manual Distribution Form</h2>
            </div>
        </div>
        <!-- Information Banner -->
        <div class="bg-white border border-outline-variant rounded-2xl p-6 flex flex-col gap-4">
            <div class="flex gap-6 items-start">
                <div
                    class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center text-primary shrink-0">
                    <span class="material-symbols-outlined text-[28px]">info</span>
                </div>
                <div class="flex-1">
                    <h3 class="text-headline-md font-bold text-on-surface tracking-tight">How Manual Distribution
                        Works</h3>
                    <p class="text-body-md text-secondary leading-relaxed">Create and distribute
                        digital wallet passes to your recipients instantly. Select a template, fill in the required
                        fields, and add recipient details. Each recipient will receive their personalized pass via
                        email.
                    </p>
                    <!-- Steps -->
                    <div class="bg-primary/5 rounded-2xl p-2 flex flex-wrap items-center gap-3  mt-4">
                        <!-- Step 1 -->
                        <div
                            class="flex items-center gap-2.5 bg-white rounded-full pl-2.5 pr-5 py-2 shadow-sm border border-outline-variant/40">
                            <span class="material-symbols-outlined text-emerald-500 text-[22px]"
                                style="font-variation-settings: 'FILL' 1;">check_circle</span>
                            <span class="text-body-md font-bold text-on-surface">Select Template</span>
                        </div>
                        <!-- Step 2 -->
                        <div
                            class="flex items-center gap-2.5 bg-white rounded-full pl-2.5 pr-5 py-2 shadow-sm border border-outline-variant/40">
                            <span class="material-symbols-outlined text-emerald-500 text-[22px]"
                                style="font-variation-settings: 'FILL' 1;">check_circle</span>
                            <span class="text-body-md font-bold text-on-surface">Fill Pass Details</span>
                        </div>
                        <!-- Step 3 -->
                        <div
                            class="flex items-center gap-2.5 bg-white rounded-full pl-2.5 pr-5 py-2 shadow-sm border border-outline-variant/40">
                            <span class="material-symbols-outlined text-emerald-500 text-[22px]"
                                style="font-variation-settings: 'FILL' 1;">check_circle</span>
                            <span class="text-body-md font-bold text-on-surface">Add Recipients</span>
                        </div>
                        <!-- Step 4 -->
                        <div
                            class="flex items-center gap-2.5 bg-white rounded-full pl-2.5 pr-5 py-2 shadow-sm border border-outline-variant/40">
                            <span class="material-symbols-outlined text-emerald-500 text-[22px]"
                                style="font-variation-settings: 'FILL' 1;">check_circle</span>
                            <span class="text-body-md font-bold text-on-surface">Distribute</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Select Template Section -->
        <div class="bg-white rounded-2xl border border-outline-variant p-6 shadow-sm">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-8 h-8 bg-blue-50 text-primary rounded-lg flex items-center justify-center">
                    <span class="material-symbols-outlined text-[20px]">style</span>
                </div>
                <h3 class="text-headline-md font-bold text-on-surface">Select Template <span
                        class="text-error">*</span></h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="relative">
                    <select id="template-select" class="w-full js-select2" data-placeholder="-- Select Template --">
                        <option></option>
                        <option value="GENERIC-PASS-6">GENERIC-PASS-6</option>
                        <option value="ADVERTISING 34">ADVERTISING 34</option>
                    </select>
                </div>
            </div>
            <!-- Template Fields (hidden until a template is selected) -->
            <div id="template-fields" class="hidden">
            <!-- Divider -->
            <div class="border-t border-outline-variant/40 my-6"></div>
            <!-- Template Fields -->
            <div class="flex items-center gap-3 mb-6">
                <div class="w-8 h-8 bg-blue-50 text-primary rounded-lg flex items-center justify-center">
                    <span class="material-symbols-outlined text-[20px]">settings</span>
                </div>
                <h3 class="text-headline-md font-bold text-on-surface">Template Fields</h3>
            </div>

            <!-- Primary Fields -->
            <div class="space-y-4 mb-8">
                <div class="flex items-center gap-4">
                    <h4 class="text-headline-md font-bold text-on-surface whitespace-nowrap">Primary Fields</h4>
                    <div class="flex-1 border-t border-outline-variant/40"></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-start">
                    <!-- Balance -->
                    <div class="space-y-2">
                        <label class="text-on-surface font-semibold text-label-md">Balance:</label>
                        <input
                            class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                            type="text" value="100">
                    </div>
                    <!-- Currency Code -->
                    <div class="space-y-2">
                        <label class="text-on-surface font-semibold text-label-md">Currency Code:</label>
                        <select class="w-full js-select2" data-allow-clear="false">
                            <option value="USD">USD (US Dollar)</option>
                            <option value="EUR" selected>EUR (Euro)</option>
                            <option value="GBP">GBP (British Pound)</option>
                            <option value="INR">INR (Indian Rupee)</option>
                            <option value="AUD">AUD (Australian Dollar)</option>
                            <option value="CAD">CAD (Canadian Dollar)</option>
                            <option value="JPY">JPY (Japanese Yen)</option>
                        </select>
                    </div>
                    <!-- Gift Card Number -->
                    <div class="space-y-2">
                        <label class="text-on-surface font-semibold text-label-md">Gift Card Number:<span
                                class="text-error">*</span></label>
                        <input
                            class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                            type="text" value="ABCD123456">
                    </div>
                    <!-- Pass Expiration Date -->
                    <div class="space-y-2">
                        <label class="text-on-surface font-semibold text-label-md">Pass Expiration Date:<span
                                class="text-error">*</span></label>
                        <input
                            class="js-datetime w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                            placeholder="-Date-" type="text">
                    </div>
                    <!-- Barcode Value -->
                    <div class="space-y-2">
                        <label class="text-on-surface font-semibold text-label-md">Barcode Value:<span
                                class="text-error">*</span></label>
                        <textarea rows="2"
                            class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all resize-y">1246897531</textarea>
                    </div>
                </div>
            </div>

            <!-- Additional Fields -->
            <div class="space-y-4">
                <div class="flex items-center gap-4">
                    <h4 class="text-headline-md font-bold text-on-surface whitespace-nowrap">Additional Fields</h4>
                    <div class="flex-1 border-t border-outline-variant/40"></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-start">
                    <!-- Pin -->
                    <div class="space-y-2">
                        <label class="text-on-surface font-semibold text-label-md">Pin:</label>
                        <input
                            class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                            type="text" value="ddd">
                    </div>
                    <!-- Event Number -->
                    <div class="space-y-2">
                        <label class="text-on-surface font-semibold text-label-md">Event Number:</label>
                        <input
                            class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                            placeholder="Enter Event Number" type="text">
                    </div>
                    <!-- Country -->
                    <div class="space-y-2">
                        <label class="text-on-surface font-semibold text-label-md">Country:</label>
                        <select class="w-full js-select2" data-placeholder="-- Select Country --">
                            <option></option>
                            <option value="US">United States</option>
                            <option value="GB">United Kingdom</option>
                            <option value="IN">India</option>
                            <option value="DE">Germany</option>
                            <option value="FR">France</option>
                            <option value="AU">Australia</option>
                            <option value="CA">Canada</option>
                        </select>
                    </div>
                    <!-- City -->
                    <div class="space-y-2">
                        <label class="text-on-surface font-semibold text-label-md">City:</label>
                        <input
                            class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                            placeholder="Enter City" type="text">
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- Recipients Section -->
        <div class="bg-white rounded-2xl border border-outline-variant p-6 shadow-sm">
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-blue-50 text-primary rounded-lg flex items-center justify-center">
                        <span class="material-symbols-outlined text-[20px]">group</span>
                    </div>
                    <h3 class="text-headline-md font-bold text-on-surface">Recipients</h3>
                </div>
                <span id="recipient-count"
                    class="bg-primary/10 text-primary text-label-md font-bold px-4 py-1.5 rounded-full">1
                    Recipient</span>
            </div>
            <div class="flex items-center gap-2 bg-blue-50/50 border border-blue-100 rounded-lg px-3 py-2 mb-6">
                <span class="material-symbols-outlined text-blue-600 text-[18px]">info</span>
                <span class="text-sm font-medium" style="color: #1e40af;">You can add up to 10 recipients at a
                    time.</span>
            </div>
            <div id="recipients-list" class="space-y-4">
                <div class="recipient-row flex flex-col md:flex-row md:items-end gap-6">
                    <div class="flex-1 grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="space-y-2">
                            <label class="text-on-surface font-semibold text-label-md">First Name:<span
                                    class="text-error">*</span></label>
                            <input
                                class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                                placeholder="Enter first name" type="text">
                        </div>
                        <div class="space-y-2">
                            <label class="text-on-surface font-semibold text-label-md">Last Name:</label>
                            <input
                                class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                                placeholder="Enter last name" type="text">
                        </div>
                        <div class="space-y-2">
                            <label class="text-on-surface font-semibold text-label-md">Email:<span
                                    class="text-error">*</span></label>
                            <input
                                class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                                placeholder="Enter email address" type="email">
                        </div>
                    </div>
                    <div class="shrink-0">
                        <button type="button" id="add-recipient"
                            class="w-10 h-10 bg-primary text-white rounded-lg flex items-center justify-center hover:opacity-90 transition-all shadow-md shadow-primary/20">
                            <span class="material-symbols-outlined">add</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex justify-end mt-8 pt-6 border-t border-outline-variant/30">
                <button
                    class="flex items-center gap-2 bg-emerald-500 text-white px-8 py-3 rounded-lg text-[14px] font-bold shadow-lg shadow-emerald-500/20 hover:opacity-95 active:scale-[0.98] transition-all">
                    <span class="material-symbols-outlined">send</span>
                    Send Passes
                </button>
            </div>
        </div>
        <!-- Action Button -->
    </section>
    <?php include('footer.php'); ?>
  </main>
  <!-- Micro-interaction Scripts -->
   <?php include('script.php'); ?>
  <script>
    (function () {
      // Show/hide Template Fields based on template selection
      var templateSelect = document.getElementById('template-select');
      var templateFields = document.getElementById('template-fields');

      function toggleTemplateFields() {
        var hasValue = templateSelect && templateSelect.value;
        templateFields.classList.toggle('hidden', !hasValue);
      }

      if (templateSelect && templateFields) {
        toggleTemplateFields();
        // Native change (works for select2 too, which fires a native change event)
        templateSelect.addEventListener('change', toggleTemplateFields);
        // jQuery/select2 fallback
        if (window.jQuery) {
          window.jQuery(templateSelect).on('change select2:select select2:clear', toggleTemplateFields);
        }
      }

      var MAX_RECIPIENTS = 10;
      var list = document.getElementById('recipients-list');
      var counter = document.getElementById('recipient-count');

      function updateCounter() {
        var count = list.querySelectorAll('.recipient-row').length;
        if (counter) {
          counter.textContent = count + (count === 1 ? ' Recipient' : ' Recipients');
        }
      }

      function buildRow() {
        var row = list.querySelector('.recipient-row').cloneNode(true);

        // Clear input values in the cloned row
        row.querySelectorAll('input').forEach(function (input) {
          input.value = '';
        });

        // Replace the add button with a delete button
        var actionWrap = row.querySelector('.shrink-0');
        actionWrap.innerHTML =
          '<button type="button" class="remove-recipient w-10 h-10 bg-error/10 text-error rounded-lg flex items-center justify-center hover:bg-error/20 transition-all">' +
          '<span class="material-symbols-outlined">delete</span>' +
          '</button>';

        return row;
      }

      list.addEventListener('click', function (e) {
        var addBtn = e.target.closest('#add-recipient');
        if (addBtn) {
          if (list.querySelectorAll('.recipient-row').length >= MAX_RECIPIENTS) {
            return;
          }
          list.appendChild(buildRow());
          updateCounter();
          return;
        }

        var removeBtn = e.target.closest('.remove-recipient');
        if (removeBtn) {
          var row = removeBtn.closest('.recipient-row');
          if (row) {
            row.remove();
            updateCounter();
          }
        }
      });
    })();
  </script>
</body>

</html>