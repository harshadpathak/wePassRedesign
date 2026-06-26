<!DOCTYPE html>
<html class="light" lang="en" style="">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WePass - API Keys</title>
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
            <span class="text-gray-500 font-normal">API Keys</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">API Keys</h2>
        </div>
      </div>

      <?php
        // Demo data — one row per access key.
        $apiKeys = [
          [
            'name'      => 'WePass Testing',
            'prefix'    => 'wp_live_4o2DivUXgWNY........',
            'suffix'    => 'c4ec',
            'created'   => '12/06/2026 09:16:18',
            'lastUsed'  => '15/06/2026 04:59:06',
            'active'    => true,
          ],
        ];
      ?>

      <!-- About the WePass API -->
      <div class="bg-white border border-outline-variant rounded-2xl p-6 flex flex-col gap-5">
        <div class="flex gap-5 items-start">
        <div
            class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center text-primary shrink-0">
            <span class="material-symbols-outlined text-[28px]">info</span>
        </div>
          <div class="flex-1 min-w-0">
            <h3 class="text-headline-md font-bold text-on-surface tracking-tight">About the WePass API</h3>
            <p class="text-body-md text-gray-400 leading-relaxed">
              Our REST API lets you automate your entire pass workflow using your API key. You can <span class="font-bold text-gray-400">generate templates</span> to define the design and structure of your passes, <span class="font-bold text-gray-400">create passes</span> from those templates to issue them to your customers, and <span class="font-bold text-gray-400">update passes</span> at any time to change their content or keep information current. You can also configure a <span class="font-bold text-gray-400">webhook</span> to receive real-time notifications about pass events, so your application always stays in sync. Just include your API key with each request to securely authenticate and start integrating these features into your own application.
            </p>
            <!-- Base URL row + Documentation link, side by side -->
            <div class="flex flex-col lg:flex-row lg:items-stretch gap-3 mt-4">
              <div class="flex flex-col sm:flex-row sm:items-center gap-3 bg-surface-container-low rounded-xl border border-outline-variant/70 px-3 py-2 flex-1 min-w-0">
                <div class="flex items-center gap-3 flex-1 min-w-0">
                  <span class="text-label-sm font-bold uppercase tracking-wider text-primary bg-primary/10 px-2.5 py-1.5 rounded-lg shrink-0">Base URL</span>
                  <code id="base-url" class="text-body-md font-mono text-on-surface truncate">https://api.wepass.io/api/v1/</code>
                </div>
                <div class="flex items-center gap-2 shrink-0">
                  <button type="button" onclick="copyBaseUrl(this)"
                    class="inline-flex items-center gap-2 rounded-lg bg-white border border-outline-variant px-2.5 py-1 text-label-md font-bold text-secondary hover:bg-surface-container-high hover:text-on-surface active:scale-[0.98] transition-all">
                    <span class="material-symbols-outlined text-[18px]">content_copy</span>
                    <span class="copy-label">Copy URL</span>
                  </button>
                </div>
              </div>
              <a href="#"
                class="inline-flex items-center justify-center gap-2 rounded-lg border border-primary/30 bg-primary/5 px-3.5 py-2 text-label-md font-bold text-primary hover:bg-primary/10 active:scale-[0.98] transition-all shrink-0">
                <span class="material-symbols-outlined text-[18px]">menu_book</span>
                Read Documentation
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Access Keys -->
      <div class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden [&:has(.js-menu-panel:not(.hidden))]:overflow-visible">
        <!-- Card header -->
        <div class="flex items-center gap-3 px-6 py-5 border-b border-outline-variant/70">
          <span class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary shrink-0">
            <span class="material-symbols-outlined text-[22px]">key</span>
          </span>
          <div class="flex-1 min-w-0">
            <h3 class="text-headline-md font-bold text-on-surface">Access Keys</h3>
            <p class="text-label-md text-gray-400">Manage your API authentication keys</p>
          </div>
          <!-- Status legend -->
          <!-- <div class="hidden md:flex items-center gap-1.5 pr-1 shrink-0">
            <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 border border-emerald-200/70 px-2.5 py-1 text-label-sm font-bold text-emerald-700">
              <span class="relative flex w-2 h-2">
                <span class="absolute inline-flex w-full h-full rounded-full bg-emerald-400 opacity-60 animate-ping"></span>
                <span class="relative inline-flex w-2 h-2 rounded-full bg-emerald-500"></span>
              </span>
              Active
            </span>
            <span class="inline-flex items-center gap-1.5 rounded-full bg-surface-container-low border border-outline-variant px-2.5 py-1 text-label-sm font-bold text-on-surface-variant">
              <span class="w-2 h-2 rounded-full bg-outline"></span>
              Inactive
            </span>
          </div> -->
          <!-- <span class="hidden md:block w-px h-8 bg-outline-variant/70 shrink-0"></span> -->
          <button type="button"
            class="inline-flex items-center gap-2 bg-brand-gradient text-white px-4 py-2.5 rounded-lg text-label-md font-bold shadow-md shadow-primary/20 hover:opacity-95 active:scale-[0.98] transition-all shrink-0">
            <span class="material-symbols-outlined text-[20px]">add_circle</span>
            Create New Key
          </button>
        </div>

        <!-- Keys table -->
        <div class="overflow-x-auto [&:has(.js-menu-panel:not(.hidden))]:overflow-visible">
          <table class="w-full text-left border-collapse min-w-[1000px]">
            <thead>
              <tr class="text-label-sm font-bold uppercase tracking-wider text-outline bg-surface-container-low/40">
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Name</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Key Secret</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Created</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Last Used</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Status</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant text-right">Actions</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-outline-variant/70">
              <?php foreach ($apiKeys as $key): ?>
              <tr class="group hover:bg-surface-container-low transition-colors">
                <!-- Name -->
                <td class="px-6 py-4">
                  <span class="text-body-md text-on-surface-variant"><?php echo htmlspecialchars($key['name']); ?></span>
                </td>
                <!-- Key Secret -->
                <td class="px-6 py-4">
                  <div class="flex items-center gap-2">
                    <code class="font-mono text-body-md text-primary/90 font-semibold">
                      <?php echo htmlspecialchars($key['prefix']); ?><?php echo htmlspecialchars($key['suffix']); ?>
                    </code>
                    <button type="button" onclick="copyText('<?php echo htmlspecialchars($key['prefix'] . $key['suffix']); ?>', this)"
                      class="inline-flex items-center justify-center w-7 h-7 rounded-lg text-outline hover:bg-surface-container-high hover:text-primary transition-all"
                      title="Copy key">
                      <span class="material-symbols-outlined text-[16px]">content_copy</span>
                    </button>
                  </div>
                </td>
                <!-- Created -->
                <td class="px-6 py-4 text-label-md text-on-surface-variant">
                  <?php echo htmlspecialchars($key['created']); ?>
                </td>
                <!-- Last Used -->
                <td class="px-6 py-4 text-label-md text-on-surface-variant">
                  <?php echo htmlspecialchars($key['lastUsed']); ?>
                </td>
                <!-- Status -->
                <td class="px-6 py-4">
                  <label class="inline-flex items-center gap-2.5 cursor-pointer select-none">
                    <input type="checkbox" class="peer sr-only" <?php echo $key['active'] ? 'checked' : ''; ?>>
                    <span class="relative shrink-0 w-9 h-5 rounded-full bg-rose-500 peer-checked:bg-emerald-500 transition-colors
                                 after:absolute after:left-0.5 after:top-0.5 after:w-4 after:h-4 after:rounded-full after:bg-white after:shadow-sm after:transition-transform peer-checked:after:translate-x-4"></span>
                    <span class="inline-block w-16 text-label-md font-bold text-rose-700 peer-checked:hidden">Inactive</span>
                    <span class="inline-block w-16 text-label-md font-bold text-emerald-600 hidden peer-checked:inline">Active</span>
                  </label>
                </td>
                <!-- Actions -->
                <td class="px-6 py-4 text-right">
                    <div class="relative inline-block js-menu">
                        <button type="button" class="js-menu-toggle material-symbols-outlined text-outline hover:text-primary transition-colors p-1 rounded-lg hover:bg-surface-container-high">
                            more_vert
                        </button>
                        <div class="js-menu-panel hidden absolute right-0 mt-1 w-44 bg-white border border-outline-variant rounded-xl shadow-lg py-1.5 z-50">
                            <a class="flex items-center gap-3 px-4 py-2 text-body-md text-on-surface hover:bg-surface-container-low transition-colors" href="#">
                                <span class="material-symbols-outlined text-secondary text-[20px]">visibility</span>
                                <span class="font-medium">View</span>
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
            <span class="material-symbols-outlined text-[18px] text-primary">shield</span>
            Keep your keys secret and never expose them in client-side code.
          </p>
          <span class="flex items-center gap-1.5 text-label-md text-gray-400">
            <span class="material-symbols-outlined text-[16px] text-amber-500">bolt</span>
            Data updates near real time
          </span>
        </div>
      </div>
    </section>

    <!-- Clipboard helpers -->
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
      function copyBaseUrl(btn) {
        var url = document.getElementById('base-url').textContent.trim();
        navigator.clipboard.writeText(url).then(function () { flashCopied(btn, '.copy-label'); });
      }
    </script>
    <?php include('footer.php'); ?>
  </main>
  <!-- Micro-interaction Scripts -->
   <?php include('script.php'); ?>
</body>

</html>
