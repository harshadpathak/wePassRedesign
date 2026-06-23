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
      $pass = [
        'name' => 'Advertising 10',
        'id'   => '5e8f3c4ecbcc8d65f9813e81aa6d254672d9abf8',
        'pass' => '61e2711d1df5a9e1b80529b4b1411fee',
        'date' => '17/06/2026 05:00:20',
      ];
      $link  = 'https://app.wepass.io/wallet/pass/' . $pass['pass'];
      $embed = '<iframe src="https://app.wepass.io/panel/embed-code/' . $pass['pass'] . '" title="Wallet Pass" width="100%" height="200" frameborder="0" style="border: none; border-radius: 12px;"></iframe>';
    ?>
    <section class="p-margin-desktop space-y-stack-lg pb-16">
      <!-- Breadcrumbs and Header -->
      <div class="flex items-end justify-between gap-4">
        <div class="space-y-1">
          <nav class="flex items-center gap-2 text-label-sm text-outline mb-1">
            <span class="material-symbols-outlined text-[14px] text-blue-600">home</span> <span class="text-blue-600 font-semibold">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-blue-600 font-semibold">Pass Distribution</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-on-surface font-semibold">Pass View</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Pass View</h2>
        </div>
        <a href="#"
          class="flex items-center gap-2 bg-white border border-outline-variant/50 text-on-surface px-6 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold shadow-sm">
          <span class="material-symbols-outlined text-[18px]">arrow_back</span>
          Back
        </a>
      </div>

      <!-- Pass Info Bar -->
      <div class="bg-white rounded-2xl border border-outline-variant shadow-sm p-5 flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div class="flex items-center gap-4">
          <div class="w-12 h-12 rounded-xl bg-brand-gradient text-white flex items-center justify-center shrink-0 shadow-md shadow-primary/20">
            <span class="material-symbols-outlined text-[26px]">wallet</span>
          </div>
          <div>
            <h3 class="text-headline-md font-bold text-on-surface tracking-tight"><?= htmlspecialchars($pass['name']) ?></h3>
            <div class="flex items-center gap-2 mt-1">
              <span class="text-label-md text-outline font-semibold">ID:</span>
              <code class="text-label-md font-mono text-secondary bg-primary/10 px-2 py-0.5 rounded-md"><?= htmlspecialchars($pass['id']) ?></code>
            </div>
          </div>
        </div>
        <div class="inline-flex items-center gap-2 bg-white border border-outline-variant/60 rounded-lg px-4 py-2.5 self-start md:self-auto">
          <span class="material-symbols-outlined text-outline text-[18px]">calendar_today</span>
          <span class="text-label-md text-secondary">Created: <span class="font-bold text-on-surface"><?= htmlspecialchars($pass['date']) ?></span></span>
        </div>
      </div>

      <!-- Share Your Pass Card -->
      <div class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
        <!-- Card Header -->
        <div class="flex items-center gap-3 px-6 md:px-8 py-5 border-b border-outline-variant/60">
          <div class="w-9 h-9 bg-blue-50 text-primary rounded-lg flex items-center justify-center">
            <span class="material-symbols-outlined text-[20px]">share</span>
          </div>
          <div>
            <h3 class="text-headline-md font-bold text-on-surface tracking-tight">Share Your Pass</h3>
            <p class="text-label-md text-secondary">Choose how you'd like to distribute this pass</p>
          </div>
        </div>

        <div class="p-6 md:p-8 grid grid-cols-1 lg:grid-cols-5 gap-6">
          <!-- QR Code Feature (left) -->
          <div class="lg:col-span-2">
            <div class="h-full flex flex-col items-center text-center bg-gradient-to-b from-emerald-50 to-white border border-emerald-200/70 rounded-2xl p-6">
              <span class="inline-flex items-center gap-1.5 bg-emerald-500/10 text-emerald-600 text-label-sm font-bold uppercase tracking-wider px-3 py-1 rounded-full">
                <span class="material-symbols-outlined text-[16px]">qr_code_2</span> Scan QR
              </span>
              <div class="mt-5 p-4 rounded-2xl bg-white border border-outline-variant/60 shadow-sm">
                <img alt="QR code for <?= htmlspecialchars($pass['name']) ?>" class="w-44 h-44 rounded-lg"
                  src="https://api.qrserver.com/v1/create-qr-code/?size=260x260&margin=0&data=<?= urlencode($link) ?>">
              </div>
              <p class="text-body-md text-secondary mt-5 leading-relaxed">Point your smartphone camera at this code for instant wallet access</p>
              <div class="w-full mt-5 pt-5 border-t border-emerald-200/60 space-y-2.5 text-left">
                <div class="flex items-center gap-2.5">
                  <span class="w-6 h-6 rounded-full bg-emerald-500/15 text-emerald-700 text-label-sm font-bold flex items-center justify-center shrink-0">1</span>
                  <span class="text-label-md text-on-surface">Open your phone's camera app</span>
                </div>
                <div class="flex items-center gap-2.5">
                  <span class="w-6 h-6 rounded-full bg-emerald-500/15 text-emerald-700 text-label-sm font-bold flex items-center justify-center shrink-0">2</span>
                  <span class="text-label-md text-on-surface">Point at the QR code</span>
                </div>
                <div class="flex items-center gap-2.5">
                  <span class="w-6 h-6 rounded-full bg-emerald-500/15 text-emerald-700 text-label-sm font-bold flex items-center justify-center shrink-0">3</span>
                  <span class="text-label-md text-on-surface">Tap the notification to add pass</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Link + Embed (right) -->
          <div class="lg:col-span-3 space-y-6">
            <!-- Share via Link -->
            <div class="border border-outline-variant rounded-2xl p-5 hover:border-primary/50 transition-colors">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0">
                  <span class="material-symbols-outlined text-[20px]">link</span>
                </div>
                <div>
                  <h4 class="text-body-lg font-bold text-on-surface">Share via Link</h4>
                  <p class="text-label-md text-secondary">Copy and share this unique URL via email, SMS, or social media</p>
                </div>
              </div>
              <div class="flex flex-col sm:flex-row sm:items-center gap-3 mt-4 bg-surface-container-low/50 border border-outline-variant/60 rounded-xl p-2.5">
                <code class="flex-1 min-w-0 text-body-md font-mono text-secondary truncate px-2"><?= htmlspecialchars($link) ?></code>
                <button type="button" data-copy="<?= htmlspecialchars($link) ?>"
                  class="js-copy inline-flex items-center justify-center gap-2 bg-primary text-white px-5 py-2.5 rounded-lg text-label-md font-bold shadow-md shadow-primary/20 hover:opacity-95 active:scale-[0.98] transition-all shrink-0">
                  <span class="material-symbols-outlined text-[18px]">content_copy</span>
                  <span class="js-copy-label">Copy Link</span>
                </button>
              </div>
            </div>

            <!-- Embed Code -->
            <div class="border border-outline-variant rounded-2xl p-5 hover:border-purple-400/60 transition-colors">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-purple-500/10 text-purple-600 flex items-center justify-center shrink-0">
                  <span class="material-symbols-outlined text-[20px]">code</span>
                </div>
                <div>
                  <h4 class="text-body-lg font-bold text-on-surface">Embed Code</h4>
                  <p class="text-label-md text-secondary">Add this code snippet to your website HTML to embed the pass</p>
                </div>
              </div>
              <div class="mt-4 bg-[#1e1b2e] rounded-xl p-4 overflow-x-auto">
                <code id="embed-code" class="block text-label-md font-mono text-purple-200 leading-relaxed break-all"><?= htmlspecialchars($embed) ?></code>
              </div>
              <button type="button" data-copy="<?= htmlspecialchars($embed) ?>"
                class="js-copy inline-flex items-center justify-center gap-2 mt-4 bg-purple-500 text-white px-5 py-2.5 rounded-lg text-label-md font-bold shadow-md shadow-purple-500/20 hover:opacity-95 active:scale-[0.98] transition-all">
                <span class="material-symbols-outlined text-[18px]">content_copy</span>
                <span class="js-copy-label">Copy Code</span>
              </button>
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
      document.querySelectorAll('.js-copy').forEach(function (btn) {
        btn.addEventListener('click', function () {
          var text = btn.getAttribute('data-copy');
          if (!text) return;
          var label = btn.querySelector('.js-copy-label');
          var done = function () {
            if (!label) return;
            var prev = label.textContent;
            label.textContent = 'Copied!';
            setTimeout(function () { label.textContent = prev; }, 1500);
          };
          if (navigator.clipboard && navigator.clipboard.writeText) {
            navigator.clipboard.writeText(text).then(done).catch(done);
          } else {
            var ta = document.createElement('textarea');
            ta.value = text; document.body.appendChild(ta); ta.select();
            try { document.execCommand('copy'); } catch (e) {}
            document.body.removeChild(ta); done();
          }
        });
      });
    })();
  </script>
</body>

</html>
