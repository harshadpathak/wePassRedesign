<!DOCTYPE html>
<html class="light" lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WePass - Webhook URLs</title>
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
            <span class="material-symbols-outlined text-[14px] text-gray">home</span> <span class="text-gray font-normal">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray-500 font-normal">Webhook URLs</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Webhook URLs</h2>
        </div>
      </div>

      <?php
        // Demo data — one row per configured webhook endpoint.
        $webhooks = [
          [
            'name'    => 'Webhook 1',
            'url'     => 'https://webhook.com/jenil',
            'created' => '15/06/2026 06:36:30',
            'active'  => true,
          ],
          [
            'name'    => 'Webhook 2',
            'url'     => 'https://webhook.com/harsh',
            'created' => '30/06/2026 03:03:30',
            'active'  => false,
          ],
        ];
      ?>

      <!-- About Webhooks -->
      <div class="bg-white border border-outline-variant rounded-2xl p-6 flex flex-col gap-5">
        <div class="flex gap-5 items-start">
          <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center text-primary shrink-0">
            <span class="material-symbols-outlined text-[28px]">webhook</span>
          </div>
          <div class="flex-1 min-w-0">
            <h3 class="text-headline-md font-bold text-on-surface tracking-tight">About Webhooks</h3>
            <p class="text-body-md text-gray-400 leading-relaxed">
              Webhooks let WePass notify your application in real time whenever a pass event occurs. WePass sends a <span class="font-bold text-gray-500">POST</span> request to your configured endpoint URL so your systems always stay in sync. Make sure your endpoint returns <span class="font-bold text-gray-500">HTTP 200</span> within 15 seconds to acknowledge each delivery.
            </p>
            <!-- Event types -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mt-4">
              <div class="flex items-center gap-3 bg-white rounded-xl border border-outline-variant/70 px-3 py-2">
                <span class="inline-flex items-center justify-center gap-1.5 rounded-full bg-emerald-50 border border-emerald-200/70 px-2.5 py-1 text-label-sm font-bold text-emerald-700 shrink-0">
                  <span class="material-symbols-outlined text-[16px]">add_circle</span>
                  Install
                </span>
                <p class="text-body-md text-gray-600 leading-snug">Fired when a user adds your pass to their Apple or Google Wallet.</p>
              </div>
              <div class="flex items-center gap-3 bg-white rounded-xl border border-outline-variant/70 px-3 py-2">
                <span class="inline-flex items-center justify-center gap-1.5 rounded-full bg-rose-50 border border-rose-200/70 px-2.5 py-1 text-label-sm font-bold text-rose-700 shrink-0">
                  <span class="material-symbols-outlined text-[16px]">do_not_disturb_on</span>
                  Uninstall
                </span>
                <p class="text-body-md text-gray-600 leading-snug">Fired when a user removes the pass from their wallet.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Webhook URLs -->
      <div class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden [&:has(.js-menu-panel:not(.hidden))]:overflow-visible">
        <!-- Card header -->
        <div class="flex items-center gap-3 px-6 py-5 border-b border-outline-variant/70">
          <span class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary shrink-0">
            <span class="material-symbols-outlined text-[22px]">link</span>
          </span>
          <div class="flex-1 min-w-0">
            <h3 class="text-headline-md font-bold text-on-surface">Webhook URLs</h3>
            <p class="text-label-md text-gray-400">Manage your webhook endpoint URLs</p>
          </div>
          <!-- <span class="hidden md:block w-px h-8 bg-outline-variant/70 shrink-0"></span> -->
          <button type="button"
            class="inline-flex items-center gap-2 bg-brand-gradient text-white px-4 py-2.5 rounded-lg text-label-md font-bold shadow-md shadow-primary/20 hover:opacity-95 active:scale-[0.98] transition-all shrink-0">
            <span class="material-symbols-outlined text-[20px]">add_circle</span>
            Add Webhook URL
          </button>
        </div>

        <!-- Security note + status legend -->
        <!-- <div class="flex items-center justify-between gap-4 px-6 py-3 bg-surface-container-low/40 border-b border-outline-variant/70">
          <p class="flex items-center gap-2 text-label-md text-on-surface-variant min-w-0">
            <span class="material-symbols-outlined text-[18px] text-primary shrink-0">shield</span>
            <span class="truncate">Only send webhooks to endpoints you control and trust.</span>
          </p>
          <div class="hidden md:flex items-center gap-3 shrink-0">
            <span class="inline-flex items-center gap-1.5 text-label-md font-bold text-on-surface-variant">
              <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
              Active
            </span>
            <span class="inline-flex items-center gap-1.5 text-label-md font-bold text-on-surface-variant">
              <span class="w-2 h-2 rounded-full bg-outline"></span>
              Inactive
            </span>
          </div>
        </div> -->

        <!-- Webhooks table -->
        <div class="overflow-x-auto [&:has(.js-menu-panel:not(.hidden))]:overflow-visible">
          <table class="w-full text-left border-collapse min-w-[800px]">
            <thead>
              <tr class="text-label-sm font-bold uppercase tracking-wider text-outline bg-surface-container-low/40">
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Name / URL</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Created</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Status</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant text-right">Action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-outline-variant/70">
              <?php foreach ($webhooks as $hook): ?>
              <tr class="group hover:bg-surface-container-low transition-colors">
                <!-- Name / URL -->
                <td class="px-6 py-3 align-middle">
                  <p class="text-body-md font-semiboldbold text-on-surface-variant"><?php echo htmlspecialchars($hook['name']); ?></p>
                  <div class="flex items-center gap-2">
                    <a href="<?php echo htmlspecialchars($hook['url']); ?>" target="_blank" rel="noopener noreferrer"
                      class="text-label-sm text-primary/70 truncate max-w-[360px]">
                      <?php echo htmlspecialchars($hook['url']); ?>
                    </a>
                    <button type="button" onclick="copyText('<?php echo htmlspecialchars($hook['url']); ?>', this)"
                      class="inline-flex items-center justify-center w-7 h-7 rounded-lg text-outline hover:bg-surface-container-high hover:text-primary transition-all"
                      title="Copy URL">
                      <span class="material-symbols-outlined text-[16px]">content_copy</span>
                    </button>
                  </div>
                </td>
                <!-- Created -->
                <td class="px-6 py-3 text-label-md text-on-surface-variant whitespace-nowrap">
                  <?php echo htmlspecialchars($hook['created']); ?>
                </td>
                <!-- Status -->
                <td class="px-6 py-3">
                  <label class="inline-flex items-center gap-2.5 cursor-pointer select-none">
                    <input type="checkbox" class="peer sr-only" <?php echo $hook['active'] ? 'checked' : ''; ?>>
                    <span class="relative shrink-0 w-9 h-5 rounded-full bg-rose-500 peer-checked:bg-emerald-500 transition-colors
                                 after:absolute after:left-0.5 after:top-0.5 after:w-4 after:h-4 after:rounded-full after:bg-white after:shadow-sm after:transition-transform peer-checked:after:translate-x-4"></span>
                    <span class="inline-block w-16 text-label-md font-bold text-rose-700 peer-checked:hidden">Inactive</span>
                    <span class="inline-block w-16 text-label-md font-bold text-emerald-600 hidden peer-checked:inline">Active</span>
                  </label>
                </td>
                <!-- Action -->
                <td class="px-6 py-3 text-right">
                    <div class="relative inline-block js-menu">
                        <button type="button" class="js-menu-toggle material-symbols-outlined text-outline hover:text-primary transition-colors p-1 rounded-lg hover:bg-surface-container-high">
                            more_vert
                        </button>
                        <div class="js-menu-panel hidden absolute right-0 mt-1 w-44 bg-white border border-outline-variant rounded-xl shadow-lg py-1.5 z-50">
                            <a class="flex items-center gap-3 px-4 py-2 text-body-md text-on-surface hover:bg-surface-container-low transition-colors" href="#">
                                <span class="material-symbols-outlined text-secondary text-[20px]">edit</span>
                                <span class="font-medium">Edit</span>
                            </a>
                            <div class="my-1 border-t border-outline-variant/50"></div>
                                <button type="button" class="w-full flex items-center gap-2.5 px-4 py-2 text-label-md text-error hover:bg-error/5 transition-colors">
                                <span class="material-symbols-outlined text-[18px]">delete</span> Delete
                            </button>
                        </div>
                    </div>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>

        <!-- Card footer -->
        <div class="flex items-center justify-end px-6 py-3.5 border-t border-outline-variant/70 bg-surface-container-low/40">
          <p class="flex items-center gap-2 text-label-md text-gray-400 flex-1">
            <span class="material-symbols-outlined text-[18px] text-primary">verified_user</span>
            Only send webhooks to endpoints you control and trust.
          </p>
          <span class="flex items-center gap-1.5 text-label-md text-gray-400">
            <span class="material-symbols-outlined text-[16px] text-amber-500">bolt</span>
            Data updates near real time
          </span>
        </div>
      </div>
    </section>

    <!-- Clipboard + menu helpers -->
    <script>
      function flashCopied(btn, labelSelector) {
        var label = labelSelector ? btn.querySelector(labelSelector) : null;
        var icon = btn.querySelector('.material-symbols-outlined');
        var prevLabel = label ? label.textContent : null;
        var prevIcon = icon ? icon.textContent : null;
        if (label) label.textContent = 'Copied!';
        if (icon) icon.textContent = 'check';
        setTimeout(function () {
          if (label && prevLabel !== null) label.textContent = prevLabel;
          if (icon && prevIcon !== null) icon.textContent = prevIcon;
        }, 1500);
      }
      function copyText(text, btn) {
        navigator.clipboard.writeText(text).then(function () { flashCopied(btn, null); });
      }
    </script>
    <?php include('footer.php'); ?>
  </main>
  <!-- Micro-interaction Scripts -->
   <?php include('script.php'); ?>
</body>

</html>
