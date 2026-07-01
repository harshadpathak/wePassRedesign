<!DOCTYPE html>
<html class="light" lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WePass - Generic Advertising Pass Details</title>
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
        'name'    => 'Advertising 48',
        'passId'  => '6098d2d0e07d8b9b',
        'created' => 'Jun 25, 2026',
        'updated' => '5 days ago',
        'apple'   => 0,
        'google'  => 1,
        // Live preview fields (same shape as passUpdate.php)
        'brand'      => 'Titan Watches',
        'validTill'  => '25/06/2026',
        'cardNumber' => 'HARSH1234',
        'balance'    => '50% Off',
        'pin'        => '455',
        'event'      => '5436',
      ];
      // Wallet installation metrics
      $metrics = [
        ['label' => 'Total Installs',   'sub' => 'All-time installs',    'icon' => 'download',     'ic' => 'text-blue-600',    'icbg' => 'bg-blue-50',    'chip' => 'bg-blue-50 text-blue-700 border-blue-100',       'apple' => 0, 'google' => 1, 'total' => 1],
        ['label' => 'Active Installed', 'sub' => 'Currently on device',  'icon' => 'check_circle', 'ic' => 'text-emerald-600', 'icbg' => 'bg-emerald-50', 'chip' => 'bg-emerald-50 text-emerald-700 border-emerald-100','apple' => 0, 'google' => 1, 'total' => 1],
        ['label' => 'Uninstalled',      'sub' => 'Removed from wallet',  'icon' => 'cancel',       'ic' => 'text-rose-600',    'icbg' => 'bg-rose-50',    'chip' => 'bg-rose-50 text-rose-700 border-rose-100',       'apple' => 0, 'google' => 0, 'total' => 0],
      ];
      // Value chip with explicit color classes
      function wp_val_chip($v, $cls, $big = false) {
        $size = $big ? 'text-body-lg min-w-[44px] px-3' : 'text-body-md min-w-[40px] px-2.5';
        return '<span class="inline-flex items-center justify-center rounded-lg border py-1 font-bold ' . $size . ' ' . $cls . '">' . (int) $v . '</span>';
      }
    ?>
    <section class="p-margin-desktop space-y-stack-lg pb-16">
      <!-- Breadcrumbs and Header -->
      <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4">
        <div class="space-y-1">
          <nav class="flex items-center gap-2 text-label-sm text-outline mb-1">
            <span class="material-symbols-outlined text-[14px] text-gray">home</span> <span class="text-gray font-normal">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <a href="passes.php" class="text-gray font-normal hover:text-primary transition-colors">Passes</a>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray-500 font-normal">Generic Advertising Pass Details</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Generic Advertising Pass Details</h2>
        </div>
        <a href="passes.php"
          class="inline-flex items-center gap-2 rounded-lg border border-outline-variant/50 bg-surface px-5 py-2.5 text-body-md font-bold text-on-surface shadow-sm transition-all hover:bg-surface-container-high active:scale-[0.98]">
          <span class="material-symbols-outlined text-[18px]">arrow_back</span>
          Back
        </a>
      </div>

      <!-- Summary Banner -->
      <div class="bg-white border border-outline-variant rounded-2xl shadow-sm overflow-hidden">
        <!-- Top: identity -->
        <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6 p-6">
          <div class="flex items-center gap-5">
            <div class="w-16 h-16 rounded-2xl bg-surface-container-low border border-outline-variant/60 flex items-center justify-center shrink-0 p-2.5">
              <img src="google-logo.png" alt="WePass Logo" class="w-full h-full object-contain">
            </div>
            <div>
              <h3 class="text-headline-lg font-bold text-on-surface tracking-tight uppercase"><?= htmlspecialchars($pass['name']) ?></h3>
              <div class="flex flex-wrap items-center gap-2 mt-2">
                <span class="inline-flex items-center gap-1.5 bg-primary text-white text-label-sm font-bold px-3 py-1 rounded-full">
                  <span class="material-symbols-outlined text-[16px]">campaign</span> Generic Advertising
                </span>
                <span class="inline-flex items-center gap-1.5 bg-blue-50 text-blue-600 text-label-sm font-bold px-3 py-1 rounded-full">
                  <span class="material-symbols-outlined text-[16px]">sell</span> Coupon
                </span>
                <span class="inline-flex items-center gap-1.5 bg-emerald-50 text-emerald-600 text-label-sm font-bold px-3 py-1 rounded-full">
                  <span class="material-symbols-outlined text-[16px] font-variation-fill">check_circle</span> Active
                </span>
              </div>
            </div>
          </div>
          <!-- Wallet install counts -->
          <div class="shrink-0 w-full lg:w-auto">
            <div class="flex items-center gap-3">
              <!-- Apple -->
              <div class="flex items-center gap-3 bg-white border border-outline-variant rounded-xl pl-3 pr-5 py-2.5 hover:border-on-surface/40 transition-colors">
                <span class="w-9 h-9 rounded-lg bg-on-surface text-white flex items-center justify-center shrink-0">
                  <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                    <path d="M16.365 1.43c0 1.14-.493 2.27-1.177 3.08-.744.9-1.99 1.57-2.987 1.57-.12 0-.23-.02-.3-.03-.01-.06-.04-.22-.04-.39 0-1.15.572-2.27 1.206-2.98.804-.94 2.142-1.64 3.248-1.68.03.13.05.28.05.43zm4.565 15.71c-.03.07-.463 1.58-1.518 3.12-.945 1.34-1.94 2.71-3.43 2.71-1.517 0-1.9-.88-3.63-.88-1.698 0-2.302.91-3.67.91-1.377 0-2.332-1.26-3.428-2.8-1.287-1.82-2.323-4.63-2.323-7.28 0-4.28 2.797-6.55 5.552-6.55 1.448 0 2.675.95 3.6.95.865 0 2.222-1.01 3.902-1.01.613 0 2.886.06 4.374 2.19-.13.09-2.383 1.37-2.383 4.19 0 3.26 2.854 4.42 2.955 4.45z"/>
                  </svg>
                </span>
                <div class="leading-tight">
                  <p class="text-label-sm font-semibold text-outline">Apple Wallet</p>
                  <p class="text-headline-md font-bold text-on-surface"><?= (int) $pass['apple'] ?></p>
                </div>
              </div>
              <!-- Google -->
              <div class="flex items-center gap-3 bg-white border border-outline-variant rounded-xl pl-3 pr-5 py-2.5 hover:border-primary/40 transition-colors">
                <span class="w-10 h-10 rounded-xl bg-white border border-outline-variant/60 flex items-center justify-center shrink-0 shadow-sm">
                  <svg viewBox="0 0 24 24" class="w-6 h-6">
                    <rect x="2.5"   y="2"   width="19" height="20"   rx="2.5" fill="#34A853"/>
                    <rect x="2.5"   y="4"   width="19" height="18"   rx="2.5" fill="#FBBC05"/>
                    <rect x="2.5" y="6.5" width="19" height="15.5" rx="2.5" fill="#EA4335"/>
                    <path d="M2 12.2 C 5.5 10.2 8.5 13.8 12 14 C 15.5 14.2 18.5 10.5 22 10.8 L 22 19.5 Q 22 22 19.5 22 L 4.5 22 Q 2 22 2 19.5 Z" fill="#4285F4"/>
                  </svg>
                </span>
                <div class="leading-tight">
                  <p class="text-label-sm font-semibold text-outline">Google Wallet</p>
                  <p class="text-headline-md font-bold text-on-surface"><?= (int) $pass['google'] ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Bottom: meta strip -->
        <div class="flex flex-wrap items-center gap-3 px-6 py-4 pt-0">
          <span class="inline-flex items-center gap-2 bg-primary/5 border border-primary/15 rounded-lg px-3 py-2">
            <span class="material-symbols-outlined text-[18px] text-primary">tag</span>
            <span class="text-label-md text-outline">Pass ID</span>
            <code class="text-label-md font-mono font-bold text-on-surface"><?= htmlspecialchars($pass['passId']) ?></code>
          </span>
          <span class="inline-flex items-center gap-2 bg-primary/5 border border-primary/15 rounded-lg px-3 py-2">
            <span class="material-symbols-outlined text-[18px] text-primary">calendar_add_on</span>
            <span class="text-label-md text-outline">Created</span>
            <span class="text-label-md font-bold text-on-surface"><?= htmlspecialchars($pass['created']) ?></span>
          </span>
          <span class="inline-flex items-center gap-2 bg-primary/5 border border-primary/15 rounded-lg px-3 py-2">
            <span class="material-symbols-outlined text-[18px] text-primary">schedule</span>
            <span class="text-label-md text-outline">Updated</span>
            <span class="text-label-md font-bold text-on-surface"><?= htmlspecialchars($pass['updated']) ?></span>
          </span>
        </div>
      </div>

      <!-- Two-column layout -->
      <div class="grid grid-cols-1 gap-stack-lg lg:grid-cols-12 items-start">
        <!-- LEFT: Wallet Installation Overview -->
        <div class="lg:col-span-8">
          <div class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
            <!-- Header -->
            <div class="flex flex-col gap-4 px-6 py-5 border-b border-outline-variant/60 sm:flex-row sm:items-center sm:justify-between">
              <div class="flex items-center gap-3">
                <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-primary/10 text-primary">
                  <span class="material-symbols-outlined text-[22px] font-variation-fill">bar_chart</span>
                </span>
                <div>
                  <h4 class="text-headline-md font-bold text-on-surface leading-tight">Wallet Installation Overview</h4>
                  <p class="text-label-md text-gray-400">Aggregate installation and removal activity for this public campaign</p>
                </div>
              </div>
              <a href="pushMessage.php"
                class="inline-flex shrink-0 items-center justify-center gap-2 rounded-lg bg-brand-gradient px-5 py-2.5 text-[14px] font-bold text-on-primary shadow-md shadow-primary/20 hover:opacity-95 active:scale-[0.98] transition-all">
                <span class="material-symbols-outlined text-[18px]">send</span>Send Push Notification
              </a>
            </div>

            <!-- Metric Table -->
            <div class="overflow-x-auto">
              <table class="w-full text-left border-collapse min-w-[560px]">
                <thead class="bg-surface-container-low/50">
                  <tr>
                    <th class="px-6 py-3.5 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Metric</th>
                    <th class="px-6 py-3.5 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant text-center">
                      <span class="inline-flex items-center gap-1.5">
                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4 text-on-surface"><path d="M16.365 1.43c0 1.14-.493 2.27-1.177 3.08-.744.9-1.99 1.57-2.987 1.57-.12 0-.23-.02-.3-.03-.01-.06-.04-.22-.04-.39 0-1.15.572-2.27 1.206-2.98.804-.94 2.142-1.64 3.248-1.68.03.13.05.28.05.43zm4.565 15.71c-.03.07-.463 1.58-1.518 3.12-.945 1.34-1.94 2.71-3.43 2.71-1.517 0-1.9-.88-3.63-.88-1.698 0-2.302.91-3.67.91-1.377 0-2.332-1.26-3.428-2.8-1.287-1.82-2.323-4.63-2.323-7.28 0-4.28 2.797-6.55 5.552-6.55 1.448 0 2.675.95 3.6.95.865 0 2.222-1.01 3.902-1.01.613 0 2.886.06 4.374 2.19-.13.09-2.383 1.37-2.383 4.19 0 3.26 2.854 4.42 2.955 4.45z"/></svg>Apple
                      </span>
                    </th>
                    <th class="px-6 py-3.5 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant text-center">
                      <span class="inline-flex items-center gap-1.5">
                        <svg viewBox="0 0 24 24" class="h-4 w-4"><rect x="2.5" y="2" width="19" height="20" rx="2.5" fill="#34A853"/><rect x="2.5" y="4" width="19" height="18" rx="2.5" fill="#FBBC05"/><rect x="2.5" y="6.5" width="19" height="15.5" rx="2.5" fill="#EA4335"/><path d="M2 12.2 C 5.5 10.2 8.5 13.8 12 14 C 15.5 14.2 18.5 10.5 22 10.8 L 22 19.5 Q 22 22 19.5 22 L 4.5 22 Q 2 22 2 19.5 Z" fill="#4285F4"/></svg>Google
                      </span>
                    </th>
                    <th class="px-6 py-3.5 text-label-sm text-on-surface-variant uppercase tracking-widest border-b border-outline-variant text-center bg-surface-container-low/30 font-bold">Total</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-outline-variant/40">
                  <?php foreach ($metrics as $m): ?>
                  <tr class="hover:bg-surface-container-low/50 transition-colors">
                    <td class="px-6 py-4">
                      <div class="flex items-center gap-3">
                        <span class="flex h-10 w-10 items-center justify-center rounded-xl <?= $m['icbg'] ?> <?= $m['ic'] ?>">
                          <span class="material-symbols-outlined text-[20px] font-variation-fill"><?= $m['icon'] ?></span>
                        </span>
                        <div class="leading-tight">
                          <p class="text-body-md font-bold text-on-surface"><?= htmlspecialchars($m['label']) ?></p>
                          <p class="text-label-sm text-outline mt-0.5"><?= htmlspecialchars($m['sub']) ?></p>
                        </div>
                      </div>
                    </td>
                    <td class="px-6 py-4 text-center text-body-lg font-semibold text-on-surface-variant"><?= (int) $m['apple'] ?></td>
                    <td class="px-6 py-4 text-center text-body-lg font-semibold text-on-surface-variant"><?= (int) $m['google'] ?></td>
                    <td class="px-6 py-4 text-center bg-surface-container-low/30 text-body-lg font-bold text-on-surface"><?= (int) $m['total'] ?></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>

            <!-- Actions -->
            <div class="flex justify-end px-6 py-4 border-t border-outline-variant/40">
              <a href="passUpdate.php"
                class="inline-flex items-center gap-2 rounded-lg bg-primary px-5 py-2.5 text-[14px] font-bold text-white shadow-sm hover:bg-primary/90 active:scale-[0.98] transition-all">
                <span class="material-symbols-outlined text-[18px]">edit</span>Edit Pass Template
              </a>
            </div>

            <!-- How it works -->
            <div class="m-6 mt-0 rounded-2xl border border-primary/15 bg-primary/[0.04] p-5">
              <div class="flex items-start gap-3">
                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-brand-gradient text-white shadow-sm">
                  <span class="material-symbols-outlined text-[20px] font-variation-fill">lightbulb</span>
                </span>
                <div>
                  <h5 class="text-headline-md font-bold text-on-surface leading-tight">How Generic Advertising Pass Works</h5>
                  <p class="text-label-md text-gray-500 mt-0.5">This is a shared pass template &mdash; all users install the same pass. Content is managed from the Pass Template, not individual records.</p>
                  <ul class="mt-3 space-y-2">
                    <li class="flex items-start gap-2 text-label-md text-gray-500">
                      <span class="material-symbols-outlined text-[16px] text-emerald-600 shrink-0 font-variation-fill" >check_circle</span>
                      <span>Edit the <span class="font-bold text-gray-500">Pass Template</span> to update content &mdash; changes apply to all installed passes automatically.</span>
                    </li>
                    <li class="flex items-start gap-2 text-label-md text-gray-500">
                      <span class="material-symbols-outlined text-[16px] text-emerald-600 shrink-0 font-variation-fill">check_circle</span>
                      <span><span class="font-bold text-gray-500">Apple Wallet</span> receives silent updates &mdash; passes refresh on device without any notification.</span>
                    </li>
                    <li class="flex items-start gap-2 text-label-md text-gray-500">
                      <span class="material-symbols-outlined text-[16px] text-emerald-600 shrink-0 font-variation-fill">check_circle</span>
                      <span>Use <span class="font-bold text-gray-500">Push Messages</span> to send visible notifications to all installed passes for promotions.</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- RIGHT: Pass Preview -->
        <div class="lg:col-span-4">
          <div class="bg-white rounded-2xl border border-outline-variant shadow-sm p-6 flex flex-col items-center">
            <div class="pass-flip w-[260px]">
              <div class="pass-flip-inner">
                <!-- Front -->
                <div class="pass-face rounded-[22px] overflow-hidden shadow-xl bg-[#4F46E5] min-h-[350px]">
                  <div class="px-4 pt-3 pb-5 text-white">
                    <!-- Brand header -->
                    <div class="flex items-center gap-2 border-b border-white/50 pb-3 mb-4">
                      <img src="favicon-new.png" alt=""
                        class="h-10 w-10 rounded-full bg-white p-px object-contain shrink-0">
                      <h4 class="text-[15px] font-normal tracking-normal text-white"><?= htmlspecialchars($pass['brand']) ?></h4>
                    </div>
                    <!-- Balance -->
                    <p class="text-[17px] mb-4"><?= htmlspecialchars($pass['balance']) ?></p>
                    <!-- Valid till -->
                    <p class="text-[10px] tracking-[0.15em] text-white/90">VALID TILL</p>
                    <p class="text-xs font-bold mb-4"><?= htmlspecialchars($pass['validTill']) ?></p>
                    <!-- QR -->
                    <div class="bg-white rounded-lg p-2 w-[132px] mx-auto">
                      <img class="w-full h-full" alt="QR code"
                        src="https://api.qrserver.com/v1/create-qr-code/?size=240x240&margin=0&data=<?= urlencode($pass['cardNumber']) ?>">
                    </div>
                    <p class="text-center text-[13px] font-normal mt-2 truncate"><?= htmlspecialchars($pass['cardNumber']) ?>...</p>
                  </div>
                  <!-- Strip image -->
                  <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=400&q=60"
                    alt="" class="w-full h-32 object-cover">
                </div>
                <!-- Back -->
                <div class="pass-face pass-face-back rounded-[22px] overflow-hidden shadow-xl bg-white p-6">
                  <img src="favicon-new.png" alt=""
                    class="h-10 w-10 rounded-full bg-white p-px object-contain mb-3">
                  <h4 class="text-[22px] font-medium leading-tight text-black mb-4">
                    Gift Card: <span><?= htmlspecialchars($pass['currency'] . $pass['balance']) ?></span>
                  </h4>
                  <div class="space-y-3">
                    <div>
                      <strong class="text-sm font-medium text-black">Updated</strong><br>
                      <span class="text-xs font-normal text-black"><?= htmlspecialchars($pass['updated']) ?></span>
                    </div>
                    <div>
                      <strong class="text-sm font-medium text-black">Pin</strong><br>
                      <span class="break-words text-xs font-normal text-black"><?= htmlspecialchars($pass['pin']) ?></span>
                    </div>
                    <div>
                      <strong class="text-sm font-medium text-black">Event Number</strong><br>
                      <span class="break-words text-xs font-normal text-black"><?= htmlspecialchars($pass['event']) ?></span>
                    </div>
                    <div>
                      <strong class="text-sm font-medium text-black">VALID TILL</strong><br>
                      <span class="text-xs font-normal text-black"><?= htmlspecialchars($pass['validTill']) ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button type="button" id="flip-pass"
              class="mt-5 inline-flex items-center gap-1.5 border border-primary/40 text-primary text-[13px] font-bold rounded-lg px-5 py-2 hover:bg-primary/5 transition-colors">
              Flip <span class="material-symbols-outlined text-[18px]">cached</span>
            </button>
          </div>
        </div>
      </div>
    </section>
    <?php include('footer.php'); ?>
  </main>
  <!-- Micro-interaction Scripts -->
   <?php include('script.php'); ?>
  <style>
    /* 3D flip for the pass preview */
    .pass-flip { perspective: 1200px; }
    .pass-flip-inner {
      position: relative;
      transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
      transform-style: preserve-3d;
    }
    .pass-flip.is-flipped .pass-flip-inner { transform: rotateY(180deg); }
    .pass-face { backface-visibility: hidden; -webkit-backface-visibility: hidden; }
    .pass-face-back {
      position: absolute;
      inset: 0;
      transform: rotateY(180deg);
      background: #fff;
    }
  </style>
  <script>
    (function () {
      var flipBtn = document.getElementById('flip-pass');
      var card = document.querySelector('.pass-flip');
      if (flipBtn && card) {
        flipBtn.addEventListener('click', function () {
          card.classList.toggle('is-flipped');
        });
      }
    })();
  </script>
</body>

</html>
