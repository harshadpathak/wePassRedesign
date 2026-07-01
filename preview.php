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
            <span class="text-on-surface font-semibold">Card Preview</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Card Preview</h2>
        </div>
      </div>

      <?php
        $logoUrl = 'https://drojrh3mlpzqs.cloudfront.net/9eda0c24-7ef8-4597-8d97-91cfa2d4d7d8/adminTheme/assets/images/logo-new.png';
        // All available card types for the preview menu
        $cardTypes = [
          ['key' => 'loyalty', 'name' => 'Loyalty Card', 'icon' => 'badge',               'iconbg' => 'bg-primary/10 text-primary'],
          ['key' => 'loyalty-4filed', 'name' => 'Loyalty Card 4 Field', 'icon' => 'badge',               'iconbg' => 'bg-primary/10 text-primary'],
          ['key' => 'generic', 'name' => 'Generic Pass',  'icon' => 'person',              'iconbg' => 'bg-primary/10 text-primary'],
          ['key' => 'loyalty-tier', 'name' => 'Loyalty + Tier', 'icon' => 'loyalty',        'iconbg' => 'bg-primary/10 text-primary'],
          ['key' => 'event', 'name' => 'Event Ticket',   'icon' => 'confirmation_number', 'iconbg' => 'bg-primary/10 text-primary'],
          ['key' => 'gift', 'name' => 'Gift Card',       'icon' => 'card_giftcard',       'iconbg' => 'bg-primary/10 text-primary'],
          ['key' => 'boarding', 'name' => 'Boarding Pass',       'icon' => 'flight',       'iconbg' => 'bg-primary/10 text-primary'],
          ['key' => 'warranty', 'name' => 'Warranty Pass',       'icon' => 'workspace_premium',       'iconbg' => 'bg-primary/10 text-primary'],          
          ['key' => 'business', 'name' => 'Business Card',       'icon' => 'business_center',       'iconbg' => 'bg-primary/10 text-primary'],
          ['key' => 'insurance', 'name' => 'Insurance Pass',       'icon' => 'shield',       'iconbg' => 'bg-primary/10 text-primary'],
          ['key' => 'membership', 'name' => 'Membership Card',       'icon' => 'groups',       'iconbg' => 'bg-primary/10 text-primary'],
          ['key' => 'coupon', 'name' => 'Coupon',       'icon' => 'sell',       'iconbg' => 'bg-primary/10 text-primary'],
          ['key' => 'coupon-4filed', 'name' => 'Coupon Card 4 Field', 'icon' => 'sell',               'iconbg' => 'bg-primary/10 text-primary'],             
        ];
      ?>

      <!-- ============ Card Preview Layout: menu + preview ============ -->
      <div class="flex flex-col lg:flex-row gap-8 items-start">

        <!-- ---------- Card Type Menu ---------- -->
        <aside class="w-full lg:w-[280px] shrink-0">
          <div class="rounded-2xl border border-outline/15 bg-white p-2 shadow-sm">
            <p class="px-3 pt-2 pb-1 text-label-sm font-semibold uppercase tracking-wide text-outline">Card Types</p>
            <nav class="flex flex-col gap-1">
              <?php foreach ($cardTypes as $c): ?>
                <button type="button" data-card="<?= $c['key'] ?>"
                  class="card-menu-item group flex items-center gap-3 rounded-xl px-3 py-2.5 text-left text-[15px] font-medium text-on-surface transition-colors hover:bg-primary/5">
                  <span class="flex h-9 w-9 items-center justify-center rounded-lg <?= $c['iconbg'] ?>">
                    <span class="material-symbols-outlined text-[20px]"><?= $c['icon'] ?></span>
                  </span>
                  <span class="flex-1"><?= $c['name'] ?></span>
                  <span class="material-symbols-outlined text-[18px] text-outline opacity-0 transition-opacity group-[.is-active]:opacity-100">check_circle</span>
                </button>
              <?php endforeach; ?>
            </nav>
          </div>
        </aside>

        <!-- ---------- Preview Panel ---------- -->
        <div class="flex-1 w-full">

          <!-- ============ Generic Pass Preview ============ -->
          <div class="card-preview hidden" data-card="generic">
          <div class="w-full max-w-[350px] mx-auto flex flex-col items-center gap-6">

        <!-- Apple / Google platform tabs -->
        <div class="flex items-center gap-3">
          <button type="button" data-platform="apple"
            class="platform-tab flex items-center gap-2 rounded-full px-5 py-2 text-[15px] font-semibold transition-colors bg-slate-100 text-slate-500">
            <svg class="w-[18px] h-[18px]" viewBox="0 0 384 512" fill="currentColor" aria-hidden="true">
              <path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"/>
            </svg>
            Apple
          </button>
          <button type="button" data-platform="google"
            class="platform-tab flex items-center gap-2 rounded-full px-5 py-2 text-[15px] font-semibold transition-colors bg-slate-100 text-slate-500">
                <svg viewBox="0 0 24 24" class="w-[18px] h-[18px]">
                    <rect x="2.5" y="2" width="19" height="20" rx="2.5" fill="#34A853"></rect>
                    <rect x="2.5" y="4" width="19" height="18" rx="2.5" fill="#FBBC05"></rect>
                    <rect x="2.5" y="6.5" width="19" height="15.5" rx="2.5" fill="#EA4335"></rect>
                    <path d="M2 12.2 C 5.5 10.2 8.5 13.8 12 14 C 15.5 14.2 18.5 10.5 22 10.8 L 22 19.5 Q 22 22 19.5 22 L 4.5 22 Q 2 22 2 19.5 Z" fill="#4285F4"></path>
                </svg>
            Google
          </button>
        </div>

        <!-- Barcode type selector -->
        <div class="flex flex-wrap items-center justify-center gap-2">
          <button type="button" data-barcode="qr" class="barcode-tab rounded-full px-3 py-1.5 text-[13px] font-semibold transition-colors bg-slate-100 text-slate-500">QR Code</button>
          <button type="button" data-barcode="aztec" class="barcode-tab rounded-full px-3 py-1.5 text-[13px] font-semibold transition-colors bg-slate-100 text-slate-500">Aztec</button>
          <button type="button" data-barcode="pdf417" class="barcode-tab rounded-full px-3 py-1.5 text-[13px] font-semibold transition-colors bg-slate-100 text-slate-500">PDF417</button>
          <button type="button" data-barcode="code128" class="barcode-tab rounded-full px-3 py-1.5 text-[13px] font-semibold transition-colors bg-primary text-white">Code 128</button>
        </div>
        <!-- Flip card -->
        <div class="w-[320px] flip-perspective">

          <!-- ================= APPLE CARD ================= -->
          <div data-platform-card="apple" class="platform-card w-full h-[481px]">
            <div class="flip-inner w-full">

              <!-- ---------- Apple FRONT (purple) ---------- -->
              <div class="flip-face flip-front  h-[460px] w-full rounded-[7px] overflow-hidden shadow-[0_18px_45px_-12px_rgba(0,0,0,0.25)] bg-[#603780] text-white">
                <!-- Header: logo + generic pass / title -->
                <div class="flex items-start justify-between px-2.5 py-3 pb-2.5">
                  <div class="flex items-center">
                    <img src="<?= $logoUrl ?>" class="h-8 w-auto object-contain brightness-0 invert mt-0.5" alt="WePASS">
                  </div>
                  <div class="text-right">
                    <p class="text-[11px] font-normal text-white">GENERIC PASS</p>
                    <p class="text-[17px] font-medium text-white leading-[20px]">Green Card</p>
                  </div>
                </div>

                <!-- Name -->
                <div class="px-2.5 pt-2 mt-2">
                  <p class="text-[9px] font-medium text-white leading-[15px]">NAME</p>
                  <p class="text-[22px] font-light leading-[28px] text-white">Mike Johnson</p>
                </div>

                <!-- fields -->
                <div class="px-2.5 pt-3 mt-3">
                  <div class="flex justify-between items-start">
                    <div>
                      <p class="text-[9px] font-medium text-white leading-[15px]">DOB</p>
                      <p class="text-[14px] font-light leading-[17px] text-white">14/05/1985</p>
                    </div>
                    <div class="text-right">
                      <p class="text-[9px] font-medium text-white leading-[15px]">EMPLOYEED SINCE</p>
                      <p class="text-[14px] font-light leading-[17px] text-white">18/02/2005</p>
                    </div>
                  </div>
                  <div class="flex justify-between items-start pt-2">
                    <div>
                      <p class="text-[9px] font-medium text-white leading-[15px]">ADDRESS</p>
                      <p class="text-[14px] font-light leading-[17px] text-white">Sector 69, Oak, America.</p>
                    </div>
                    <div class="text-right">
                      <p class="text-[9px] font-medium text-white leading-[15px]">CURRENT POINTS</p>
                      <p class="text-[14px] font-light leading-[17px] text-white">20</p>
                    </div>
                  </div>
                </div>

                <!-- Barcode -->
                <div class="px-7 pt-7 mt-5 flex justify-center">
                  <div class="bg-white rounded-lg px-2 py-2">
                    <img class="barcode-img w-[260px] h-[70px] object-contain" src="barcode-code128.png" alt="Barcode">
                    <p class="text-center leading-[22px] text-[13px] text-black">1246897531</p>
                  </div>
                </div>
              </div>

              <!-- ---------- Apple BACK (grey) ---------- -->
              <div class="flip-face flip-back w-full rounded-[7px] overflow-hidden shadow-[0_18px_45px_-12px_rgba(0,0,0,0.25)] bg-[#eeeeee] text-black">
                <div class="pass-scroll h-full max-h-[560px] overflow-y-auto px-3 py-3">

                  <!-- Mini card preview (scaled replica of the Apple front) -->
                  <div class="flex justify-center">
                    <div class="overflow-hidden rounded-[7px] w-[115px] h-[72px] shadow-[0_4px_15px_rgba(0,0,0,0.35)]">
                      <div class="w-[378px] min-h-[235px] scale-[0.30625] origin-top-left bg-[#603780] text-white">
                        <!-- header -->
                        <div class="flex items-start justify-between px-3 pt-3 pb-2">
                          <img src="<?= $logoUrl ?>" class="h-8 w-auto object-contain brightness-0 invert" alt="">
                          <div class="text-right">
                            <p class="text-[11px] font-normal text-white leading-tight">GENERIC PASS</p>
                            <p class="text-[17px] font-medium text-white leading-tight">Green Card</p>
                          </div>
                        </div>
                        <!-- name + fields -->
                        <div class="px-3 pt-5 pb-5">
                          <p class="text-[10px] font-medium text-white leading-tight">NAME</p>
                          <p class="text-[20px] font-light leading-6 text-white">Mike Johnson</p>
                          <div class="flex justify-between pt-5">
                            <div>
                              <p class="text-[10px] font-medium text-white leading-tight">DOB</p>
                              <p class="text-[16px] font-light leading-5 text-white">14/05/1985</p>
                            </div>
                            <div class="text-right">
                              <p class="text-[10px] font-medium text-white leading-tight">EMPLOYEED SINCE</p>
                              <p class="text-[16px] font-light leading-5 text-white">18/02/2005</p>
                            </div>
                          </div>
                          <div class="flex justify-between pt-5">
                            <div>
                              <p class="text-[10px] font-medium text-white leading-tight">ADDRESS</p>
                              <p class="text-[16px] font-light leading-5 text-white">Sector 69, Oak, America.</p>
                            </div>
                            <div class="text-right">
                              <p class="text-[10px] font-medium text-white leading-tight">CURRENT POINTS</p>
                              <p class="text-[16px] font-light leading-5 text-white">20</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Title -->
                  <div class="text-center">
                    <h4 class="text-[18px] font-semibold text-black">Green Card</h4>
                    <span class="text-[#8c8c8c] text-[14px]">Updated 4 minutes ago</span>
                  </div>

                  <!-- Settings toggles -->
                  <div class="bg-white rounded-[10px] mt-4 px-3">
                    <div class="flex items-center justify-between py-2.5">
                      <span class="text-[14px] text-black">Automatic Updates</span>
                      <input type="checkbox" class="sr-only peer" checked="">
                      <span class="relative w-8 h-4 rounded-full bg-slate-300 peer-checked:!bg-[#34c759] transition-colors after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:h-3 after:w-3 after:rounded-full after:bg-white after:shadow after:transition-all peer-checked:after:translate-x-4"></span>
                    </div>
                    <div class="border-t border-gray-200"></div>
                    <div class="flex items-center justify-between py-2.5">
                      <span class="text-[14px] text-black">Allow Notification</span>
                      <input type="checkbox" class="sr-only peer" checked="">
                      <span class="relative w-8 h-4 rounded-full bg-slate-300 peer-checked:!bg-[#34c759] transition-colors after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:h-3 after:w-3 after:rounded-full after:bg-white after:shadow after:transition-all peer-checked:after:translate-x-4"></span>
                    </div>
                  </div>

                  <!-- Remove pass -->
                  <div class="bg-white rounded-[10px] mt-3 px-4 py-2">
                    <span class="text-[#ff0000] font-normal text-sm">Remove Pass</span>
                  </div>

                  <!-- Detail list -->
                  <div class="bg-white rounded-[10px] mt-3 px-3 divide-y divide-gray-200">
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Notification</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">-</span>
                    </div>
                    <div class="py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Learn more</p>
                      <p class="text-[13px] font-normal text-[#8f8888] leading-[20px]">For more information visit our
                        <a href="https://wepass.io/" class="text-primary">Website</a></p>
                    </div>
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Visit Us</p>
                      <a href="https://maps.app.goo.gl/5fNC1UgbTNp2KJvT9" class="text-[13px] text-primary">📍 Store</a>
                    </div>
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">E-mail</p>
                      <a href="mailto:info@wepass.io" class="text-[13px] text-primary">Contact us 📫</a>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>

          <!-- ================= GOOGLE CARD ================= -->
          <div data-platform-card="google" class="platform-card w-full hidden">
            <div class="flip-inner w-full">

            <!-- ============ FRONT (Google / purple) ============ -->
            <div class="flip-face flip-front w-full rounded-[25px] overflow-hidden shadow-[0_18px_45px_-12px_rgba(0,0,0,0.25)] bg-[#603780] text-white">
              <!-- Logo + title row -->
              <div class="flex items-center px-2.5 pt-3 mb-2.5 pb-2 border-b border-white/25">
                <span class="w-10 h-10 rounded-full bg-white flex items-center justify-center shrink-0 overflow-hidden p-px">
                  <img class="w-full h-full object-contain" src="favicon-new.png" alt="Logo">
                </span>
                <span class="text-[15px] font-normal leading-10 text-white ms-2.5">Green Card</span>
              </div>

              <!-- Name + fields -->
              <div class="px-2.5 pt-1 pb-2">
                <p class="text-[11px] font-medium leading-[16px] text-white/80">NAME</p>
                <p class="text-[14px] font-light leading-[17px] text-white mb-3">Mike Johnson</p>
                <div class="flex justify-between pt-2 items-start">
                  <div>
                    <p class="text-[11px] font-medium leading-[16px] text-white/80">DOB</p>
                    <p class="text-[14px] font-light leading-[17px] text-white">14/05/1985</p>
                  </div>
                  <div class="text-right">
                    <p class="text-[11px] font-medium leading-[16px] text-white/80">EMPLOYEED SINCE</p>
                    <p class="text-[14px] font-light leading-[17px] text-white">18/02/2005</p>
                  </div>
                </div>
                <div class="-mx-2.5 border-b border-white/25 mt-3"></div>
                <div class="flex justify-between items-start pt-3">
                  <div>
                    <p class="text-[11px] font-medium leading-[16px] text-white/80">ADDRESS</p>
                    <p class="text-[14px] font-light leading-[17px] text-white">Sector 69, Oak, America.</p>
                  </div>
                  <div class="text-right">
                    <p class="text-[11px] font-medium leading-[16px] text-white/80">CURRENT POINTS</p>
                    <p class="text-[14px] font-light leading-[17px] text-white">20</p>
                  </div>
                </div>

                <!-- Barcode -->
                <div class="mt-5 pt-3 flex justify-center">
                  <div class="bg-white rounded-lg px-2 py-2">
                    <img class="barcode-img w-[260px] h-[70px] object-contain" src="barcode-code128.png" alt="Barcode">
                  </div>
                </div>
              </div>

              <!-- Full-width strip image -->
              <img class="w-full h-[130px] object-cover" src="coupan-card-google.png" alt="Card strip">
            </div>

            <!-- ============ BACK (Google / white) ============ -->
            <div class="flip-face flip-back w-full h-[481px] rounded-[26px] overflow-hidden shadow-[0_18px_45px_-12px_rgba(0,0,0,0.25)] bg-white text-on-surface">
              <div class="pass-scroll h-full max-h-[585px] overflow-y-auto px-3 pt-3 pb-2.5">
                <!-- Logo -->
                <span class="inline-flex w-10 h-10 items-center justify-center mb-2.5">
                  <img class="w-9 h-9 object-contain" src="favicon-new.png" alt="Logo">
                </span>

                <h2 class="mt-2.5 text-[22px] font-medium leading-5 text-black mb-4">Mike Johnson</h2>

                <div class="mt-3 space-y-3">
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Learn more</p>
                    <p class="text-xs font-normal leading-[18px] text-black">For more information visit our
                      <a href="https://wepass.io/" class="text-primary underline">Website</a></p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">DOB</p>
                    <p class="text-xs font-normal leading-[18px] text-black">14/05/1985</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">EMPLOYEED SINCE</p>
                    <p class="text-xs font-normal leading-[18px] text-black">18/02/2005</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">ADDRESS</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Sector 69, Oak, America.</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">CURRENT POINTS</p>
                    <p class="text-xs font-normal leading-[18px] text-black">20</p>
                  </div>
                </div>

                <!-- Contact pills -->
                <div class="mt-4 space-y-2">
                  <p class="flex items-center gap-2 bg-slate-100 rounded-[10px] leading-[24px] px-3 py-2.5 text-[14px] text-black">
                    <span class="material-symbols-outlined text-[14px] text-[#6a6666]" style="font-variation-settings: 'FILL' 1;">location_on</span> Visit Us
                  </p>
                  <p class="flex items-center gap-2 bg-slate-100 rounded-[10px] leading-[24px] px-3 py-2.5 text-[14px] text-black">
                    <span class="material-symbols-outlined text-[14px] text-[#6a6666]" style="font-variation-settings: 'FILL' 1;">mail</span> E-mail
                  </p>
                </div>
              </div>
            </div>

            </div>
          </div>

        </div>

        <!-- Flip button -->
        <button type="button" data-flip
          class="inline-flex items-center gap-2 rounded-xl border border-primary/30 bg-white px-7 py-2.5 text-[15px] font-semibold text-primary shadow-sm hover:bg-primary/5 active:scale-[0.98] transition-all">
          Flip
          <span class="material-symbols-outlined text-[18px]">cached</span>
        </button>

          </div>
          </div>
          <!-- /Generic Pass Preview -->

          <!-- ============ Coupon Card Preview ============ -->
          <div class="card-preview hidden" data-card="coupon">
          <div class="w-full max-w-[350px] mx-auto flex flex-col items-center gap-6">

        <!-- Apple / Google platform tabs -->
        <div class="flex items-center gap-3">
          <button type="button" data-platform="apple"
            class="platform-tab flex items-center gap-2 rounded-full px-5 py-2 text-[15px] font-semibold transition-colors bg-slate-100 text-slate-500">
            <svg class="w-[18px] h-[18px]" viewBox="0 0 384 512" fill="currentColor" aria-hidden="true">
              <path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"/>
            </svg>
            Apple
          </button>
          <button type="button" data-platform="google"
            class="platform-tab flex items-center gap-2 rounded-full px-5 py-2 text-[15px] font-semibold transition-colors bg-slate-100 text-slate-500">
                <svg viewBox="0 0 24 24" class="w-[18px] h-[18px]">
                    <rect x="2.5" y="2" width="19" height="20" rx="2.5" fill="#34A853"></rect>
                    <rect x="2.5" y="4" width="19" height="18" rx="2.5" fill="#FBBC05"></rect>
                    <rect x="2.5" y="6.5" width="19" height="15.5" rx="2.5" fill="#EA4335"></rect>
                    <path d="M2 12.2 C 5.5 10.2 8.5 13.8 12 14 C 15.5 14.2 18.5 10.5 22 10.8 L 22 19.5 Q 22 22 19.5 22 L 4.5 22 Q 2 22 2 19.5 Z" fill="#4285F4"></path>
                </svg>
            Google
          </button>
        </div>

        <!-- Flip card -->
        <div class="w-[320px] flip-perspective">

          <!-- ================= APPLE CARD ================= -->
          <div data-platform-card="apple" class="platform-card w-full h-[481px]">
            <div class="flip-inner w-full">

              <!-- ---------- Apple FRONT (blue) ---------- -->
              <div class="flip-face flip-front w-full rounded-[7px] overflow-hidden shadow-[0_18px_45px_-12px_rgba(0,0,0,0.25)] bg-[#454DB8] text-white">
                <!-- Header: logo + coupon / title -->
                <div class="flex items-start justify-between px-2.5 py-3 pb-2.5">
                  <div class="flex items-center">
                    <img src="<?= $logoUrl ?>" class="h-8 w-auto object-contain brightness-0 invert mt-0.5" alt="WePASS">
                  </div>
                </div>

                <!-- Strip image with offer text overlay -->
                <div class="relative w-full h-[125px]">
                  <img class="w-full h-full object-cover" src="coupan-card.png" alt="Card strip">
                  <div class="absolute inset-0 flex flex-col justify-center px-2.5">
                    <p class="text-[34px] font-light text-white">50% off</p>
                    <p class="text-[14px] font-light leading-[8px] text-white">Shoes Store</p>
                  </div>
                </div>

                <!-- Valid till -->
                <div class="px-2.5 pt-2 mt-2">
                    <p class="text-[11px] font-medium text-white leading-[19px]">VALID TILL</p>
                    <p class="text-[19px] font-semibold leading-[23px]">30/07/2026 08:14:17</p>
                </div>

                <!-- QR -->
                <div class="px-4 pt-5 mt-5 pb-2 flex justify-center">
                  <div class="bg-white rounded-lg px-2 pt-2">
                    <div class="relative">
                      <img class="w-[125px] h-[125px] object-contain" src="barcode-qr.png" alt="QR code">
                    </div>
                    <p class="text-center leading-[22px] text-[13px] text-black my-1">1246897531</p>
                  </div>
                </div>
              </div>

              <!-- ---------- Apple BACK (grey) ---------- -->
              <div class="flip-face flip-back w-full rounded-[7px] overflow-hidden shadow-[0_18px_45px_-12px_rgba(0,0,0,0.25)] bg-[#eeeeee] text-black">
                <div class="pass-scroll h-full max-h-[560px] overflow-y-auto px-3 py-3">

                  <!-- Mini card preview (scaled replica of the Apple front) -->
                  <div class="flex justify-center">
                    <div class="overflow-hidden rounded-[7px] w-[115px] h-[82px] shadow-[0_4px_15px_rgba(0,0,0,0.35)]">
                      <div class="w-[330px] scale-[0.35] origin-top-left">
                        <div class="bg-[#454DB8] text-white">
                          <!-- header -->
                          <div class="flex items-start justify-between px-3 pt-3 pb-2">
                            <img src="<?= $logoUrl ?>" class="h-8 w-auto object-contain brightness-0 invert" alt="">
                            <div class="text-right">
                              <p class="text-[11px] font-normal text-white leading-tight">COUPON</p>
                              <p class="text-[17px] font-medium text-white leading-tight">Shoes Store</p>
                            </div>
                          </div>
                          <!-- strip with offer overlay -->
                          <div class="relative w-full h-[120px]">
                            <img class="w-full h-full object-cover" src="coupan-card.png" alt="">
                            <div class="absolute inset-0 flex flex-col justify-center px-3">
                              <p class="text-[24px] font-semibold leading-tight text-white drop-shadow">50% off</p>
                              <p class="text-[15px] font-normal leading-tight text-white/90 drop-shadow">Shoes Store</p>
                            </div>
                          </div>
                          <!-- Valid till -->
                          <div class="px-2.5 pt-2 pb-5">
                              <p class="text-[11px] font-medium text-white leading-[19px]">VALID TILL</p>
                              <p class="text-[19px] font-semibold leading-[23px]">30/07/2026 08:14:17</p>
                          </div>                          
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Title -->
                  <div class="text-center">
                    <h4 class="text-[18px] font-semibold text-black">Shoes Store</h4>
                    <span class="text-[#8c8c8c] text-[14px]">Updated 3 seconds ago</span>
                  </div>

                  <!-- Settings toggles -->
                  <div class="bg-white rounded-[10px] mt-4 px-3">
                    <div class="flex items-center justify-between py-2.5">
                      <span class="text-[14px] text-black">Automatic Updates</span>
                      <input type="checkbox" class="sr-only peer" checked="">
                      <span class="relative w-8 h-4 rounded-full bg-slate-300 peer-checked:!bg-[#3d5afe] transition-colors after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:h-3 after:w-3 after:rounded-full after:bg-white after:shadow after:transition-all peer-checked:after:translate-x-4"></span>
                    </div>
                    <div class="border-t border-gray-200"></div>
                    <div class="flex items-center justify-between py-2.5">
                      <span class="text-[14px] text-black">Allow Notification</span>
                      <input type="checkbox" class="sr-only peer" checked="">
                      <span class="relative w-8 h-4 rounded-full bg-slate-300 peer-checked:!bg-[#3d5afe] transition-colors after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:h-3 after:w-3 after:rounded-full after:bg-white after:shadow after:transition-all peer-checked:after:translate-x-4"></span>
                    </div>
                  </div>

                  <!-- Remove pass -->
                  <div class="bg-white rounded-[10px] mt-2 px-4 py-1">
                    <span class="text-[#ff0000] font-normal text-[12px]">Remove Pass</span>
                  </div>

                  <!-- Detail list -->
                  <div class="bg-white rounded-[10px] mt-3 px-3 divide-y divide-gray-200">
                    <div class="flex items-center justify-between py-1.5 flex-wrap">
                      <p class="text-[13px] leading-[22px] text-black">VALID TILL</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">01/08/2026 07:04:02</span>
                    </div>
                    <div class="flex items-center justify-between py-1.5 flex-wrap">
                      <p class="text-[13px] leading-[22px] text-black">DETAILS</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">Offer Details:</span>
                    </div>
                    <div class="flex items-center justify-between py-1.5 flex-wrap">
                      <p class="text-[13px] leading-[22px] text-black">Disclaimer</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">Fine Print Value:</span>
                    </div>
                    <div class="flex items-center justify-between py-1.5 flex-wrap">
                      <p class="text-[13px] leading-[22px] text-black">Message1 Label:</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">Message1 Value: </span>
                    </div>
                    <div class="flex items-center justify-between py-1.5 flex-wrap">
                      <p class="text-[13px] leading-[22px] text-black">Message2 Label:</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]"> Message2 Value: This is a very long content</span>
                    </div>
                    <div class="flex items-center justify-between py-1.5 flex-wrap">
                      <p class="text-[13px] leading-[22px] text-black">Message3 Label:</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">Message3 Value:</span>
                    </div>
                    <div class="flex items-center justify-between py-1.5 flex-wrap">
                      <p class="text-[13px] leading-[22px] text-black">Learn more</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">For more information visit our
                        <a href="https://wepass.io/" class="text-primary">Website</a></span>
                    </div>
                    <div class="flex items-center justify-between py-1.5 flex-wrap">
                      <p class="text-[13px] leading-[22px] text-black">Visit Us</p>
                      <a href="https://maps.app.goo.gl/5fNC1UgbTNp2KJvT9" class="text-[13px] text-primary">📍 Store</a>
                    </div>
                    <div class="flex items-center justify-between py-1.5 flex-wrap">
                      <p class="text-[13px] leading-[22px] text-black">E-mail</p>
                      <a href="mailto:info@wepass.io" class="text-[13px] text-primary">Contact us 📫</a>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>

          <!-- ================= GOOGLE CARD ================= -->
          <div data-platform-card="google" class="platform-card w-full hidden">
            <div class="flip-inner w-full">

            <!-- ============ FRONT (Google / blue) ============ -->
            <div class="flip-face flip-front w-full rounded-[25px] overflow-hidden shadow-[0_18px_45px_-12px_rgba(0,0,0,0.25)] bg-[#454DB8] text-white">
              <!-- Logo + title row -->
              <div class="flex items-center px-2.5 pt-3 mb-2.5 pb-2 border-b">
                <span class="w-10 h-10 rounded-full bg-white flex items-center justify-center shrink-0 overflow-hidden p-px">
                  <img class="w-full h-full object-contain" src="favicon-new.png" alt="Logo">
                </span>
                <span class="text-[15px] font-normal leading-10 text-white ms-2.5">Shoes Store</span>
              </div>

              <div class="px-2.5 pt-2.5 pb-2">
                <h2 class="text-[22px] font-normal leading-[37px] text-white">50% off</h2>

                <!-- QR -->
                <div class="mt-5 pt-5 flex justify-center">
                  <div class="bg-white rounded-lg p-2.5">
                    <div class="relative w-[125px] h-[125px]">
                      <img class="w-full h-full object-contain" src="barcode-qr.png" alt="QR code">
                    </div>
                  </div>
                </div>
                <p class="mt-[5px] text-center text-[13px] font-medium leading-[24px] text-white">1246897531</p>
              </div>

              <!-- Strip image -->
              <img class="w-full h-auto object-contain" src="coupan-card-google.png" alt="Card strip">
            </div>

            <!-- ============ BACK (Google / white) ============ -->
            <div class="flip-face flip-back w-full rounded-[26px] overflow-hidden shadow-[0_18px_45px_-12px_rgba(0,0,0,0.25)] bg-white text-on-surface">
              <div class="pass-scroll h-full max-h-[585px] overflow-y-auto px-3 pt-3 pb-2.5">
                <!-- Logo -->
                <span class="inline-flex w-10 h-10 items-center justify-center mb-2.5">
                  <img class="w-9 h-9 object-contain" src="favicon-new.png" alt="Logo">
                </span>

                <h2 class="mt-2.5 text-[22px] font-medium leading-5 text-black mb-4">50% off</h2>

                <div class="mt-3 space-y-3">
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">From</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Feb shoe store</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Details</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Offer Details:</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Disclaimer</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Fine Print Value:</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Message1 Label:</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Message1 Value:</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Message2 Label:</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Message2 Value:</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Message3 Label:</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Message3 Value:</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Message4 Label:</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Message4 Value:</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Message5 Label:</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Message5 Value:</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Learn more</p>
                    <p class="text-xs font-normal leading-[18px] text-black">For more information visit our
                      <a href="https://wepass.io/" class="text-primary underline">Website</a></p>
                  </div>
                </div>

                <!-- Contact pills -->
                <div class="mt-4 space-y-2">
                  <p class="flex items-center gap-2 bg-slate-100 rounded-[10px] leading-[24px] px-3 py-2.5 text-[14px] text-black">
                    <span class="material-symbols-outlined text-[14px] text-[#6a6666]" style="font-variation-settings: 'FILL' 1;">location_on</span> Visit Us
                  </p>
                  <p class="flex items-center gap-2 bg-slate-100 rounded-[10px] leading-[24px] px-3 py-2.5 text-[14px] text-black">
                    <span class="material-symbols-outlined text-[14px] text-[#6a6666]" style="font-variation-settings: 'FILL' 1;">mail</span> E-mail
                  </p>
                  <p class="flex items-center gap-2 bg-slate-100 rounded-[10px] leading-[24px] px-3 py-2.5 text-[14px] text-black">
                    <span class="material-symbols-outlined text-[14px] text-[#6a6666]" style="font-variation-settings: 'FILL' 1;">public</span> Created with Wepass
                  </p>
                  <p class="flex items-center gap-2 bg-slate-100 rounded-[10px] leading-[24px] px-3 py-2.5 text-[14px] text-black">
                    <span class="material-symbols-outlined text-[14px] text-[#6a6666]" style="font-variation-settings: 'FILL' 1;">public</span> Home Page URI Text:
                  </p>                  
                </div>
              </div>
            </div>

            </div>
          </div>

        </div>

        <!-- Flip button -->
        <button type="button" data-flip
          class="inline-flex items-center gap-2 rounded-xl border border-primary/30 bg-white mt-10 px-7 py-2.5 text-[15px] font-semibold text-primary shadow-sm hover:bg-primary/5 active:scale-[0.98] transition-all">
          Flip
          <span class="material-symbols-outlined text-[18px]">cached</span>
        </button>

          </div>
          </div>
          <!-- /Coupon Card Preview -->

          <!-- ============ Coupon Card 4 Field Preview ============ -->
          <div class="card-preview hidden" data-card="coupon-4filed">
          <div class="w-full max-w-[350px] mx-auto flex flex-col items-center gap-6">

        <!-- Apple / Google platform tabs -->
        <div class="flex items-center gap-3">
          <button type="button" data-platform="apple"
            class="platform-tab flex items-center gap-2 rounded-full px-5 py-2 text-[15px] font-semibold transition-colors bg-slate-100 text-slate-500">
            <svg class="w-[18px] h-[18px]" viewBox="0 0 384 512" fill="currentColor" aria-hidden="true">
              <path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"/>
            </svg>
            Apple
          </button>
          <button type="button" data-platform="google"
            class="platform-tab flex items-center gap-2 rounded-full px-5 py-2 text-[15px] font-semibold transition-colors bg-slate-100 text-slate-500">
                <svg viewBox="0 0 24 24" class="w-[18px] h-[18px]">
                    <rect x="2.5" y="2" width="19" height="20" rx="2.5" fill="#34A853"></rect>
                    <rect x="2.5" y="4" width="19" height="18" rx="2.5" fill="#FBBC05"></rect>
                    <rect x="2.5" y="6.5" width="19" height="15.5" rx="2.5" fill="#EA4335"></rect>
                    <path d="M2 12.2 C 5.5 10.2 8.5 13.8 12 14 C 15.5 14.2 18.5 10.5 22 10.8 L 22 19.5 Q 22 22 19.5 22 L 4.5 22 Q 2 22 2 19.5 Z" fill="#4285F4"></path>
                </svg>
            Google
          </button>
        </div>

        <!-- Flip card -->
        <div class="w-[320px] flip-perspective">

          <!-- ================= APPLE CARD ================= -->
          <div data-platform-card="apple" class="platform-card w-full h-[481px]">
            <div class="flip-inner w-full">

              <!-- ---------- Apple FRONT (blue) ---------- -->
              <div class="flip-face flip-front w-full rounded-[7px] overflow-hidden shadow-[0_18px_45px_-12px_rgba(0,0,0,0.25)] bg-[#454DB8] text-white">
                <!-- Header: logo + coupon / title -->
                <div class="flex items-start justify-between px-2.5 py-3 pb-2.5">
                  <div class="flex items-center">
                    <img src="<?= $logoUrl ?>" class="h-8 w-auto object-contain brightness-0 invert mt-0.5" alt="WePASS">
                  </div>
                </div>

                <!-- Strip image with offer text overlay -->
                <div class="relative w-full h-[125px]">
                  <img class="w-full h-full object-cover" src="coupan-card.png" alt="Card strip">
                  <div class="absolute inset-0 flex flex-col justify-center px-2.5">
                    <p class="text-[34px] font-light text-white">50% off</p>
                    <p class="text-[14px] font-light leading-[8px] text-white">Shoes Store</p>
                  </div>
                </div>

                <!-- fields -->
                <div class="px-2.5 pt-2">
                  <div class="grid grid-cols-3 gap-2 items-start">
                    <div>
                      <p class="text-[9px] font-medium text-white leading-[15px]">FROM</p>
                      <p class="text-[14px] font-light leading-[17px] text-white">Feb shoe store</p>
                    </div>
                    <div>
                      <p class="text-[9px] font-medium text-white leading-[15px]">VALID TILL</p>
                      <p class="text-[14px] font-light leading-[17px] text-white">01/08/2026 08:20:02</p>
                    </div>
                    <div>
                      <p class="text-[9px] font-medium text-white leading-[15px]">TYPE</p>
                      <p class="text-[14px] font-light leading-[17px] text-white">Sport Shoes</p>
                    </div>
                  </div>
                </div>

                <!-- QR -->
                <div class="px-4 pt-5 mt-5 pb-2 flex justify-center">
                  <div class="bg-white rounded-lg px-2 pt-2">
                    <div class="relative">
                      <img class="w-[125px] h-[125px] object-contain" src="barcode-qr.png" alt="QR code">
                    </div>
                    <p class="text-center leading-[22px] text-[13px] text-black my-1">1246897531</p>
                  </div>
                </div>
              </div>

              <!-- ---------- Apple BACK (grey) ---------- -->
              <div class="flip-face flip-back w-full rounded-[7px] overflow-hidden shadow-[0_18px_45px_-12px_rgba(0,0,0,0.25)] bg-[#eeeeee] text-black">
                <div class="pass-scroll h-full max-h-[560px] overflow-y-auto px-3 py-3">

                  <!-- Mini card preview (scaled replica of the Apple front) -->
                  <div class="flex justify-center">
                    <div class="overflow-hidden rounded-[7px] w-[115px] h-[82px] shadow-[0_4px_15px_rgba(0,0,0,0.35)]">
                      <div class="w-[330px] scale-[0.35] origin-top-left">
                        <div class="bg-[#454DB8] text-white">
                          <!-- header -->
                          <div class="flex items-start justify-between px-3 pt-3 pb-2">
                            <img src="<?= $logoUrl ?>" class="h-8 w-auto object-contain brightness-0 invert" alt="">
                            <div class="text-right">
                              <p class="text-[11px] font-normal text-white leading-tight">COUPON</p>
                              <p class="text-[17px] font-medium text-white leading-tight">Shoes Store</p>
                            </div>
                          </div>
                          <!-- strip with offer overlay -->
                          <div class="relative w-full h-[120px]">
                            <img class="w-full h-full object-cover" src="coupan-card.png" alt="">
                            <div class="absolute inset-0 flex flex-col justify-center px-3">
                              <p class="text-[24px] font-semibold leading-tight text-white drop-shadow">50% off</p>
                              <p class="text-[15px] font-normal leading-tight text-white/90 drop-shadow">Shoes Store</p>
                            </div>
                          </div>
                          <!-- Valid till -->
                          <div class="px-2.5 pt-2 pb-5">
                              <p class="text-[11px] font-medium text-white leading-[19px]">VALID TILL</p>
                              <p class="text-[19px] font-semibold leading-[23px]">30/07/2026 08:14:17</p>
                          </div>                          
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Title -->
                  <div class="text-center">
                    <h4 class="text-[18px] font-semibold text-black">Shoes Store</h4>
                    <span class="text-[#8c8c8c] text-[14px]">Updated 3 seconds ago</span>
                  </div>

                  <!-- Settings toggles -->
                  <div class="bg-white rounded-[10px] mt-4 px-3">
                    <div class="flex items-center justify-between py-2.5">
                      <span class="text-[14px] text-black">Automatic Updates</span>
                      <input type="checkbox" class="sr-only peer" checked="">
                      <span class="relative w-8 h-4 rounded-full bg-slate-300 peer-checked:!bg-[#3d5afe] transition-colors after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:h-3 after:w-3 after:rounded-full after:bg-white after:shadow after:transition-all peer-checked:after:translate-x-4"></span>
                    </div>
                    <div class="border-t border-gray-200"></div>
                    <div class="flex items-center justify-between py-2.5">
                      <span class="text-[14px] text-black">Allow Notification</span>
                      <input type="checkbox" class="sr-only peer" checked="">
                      <span class="relative w-8 h-4 rounded-full bg-slate-300 peer-checked:!bg-[#3d5afe] transition-colors after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:h-3 after:w-3 after:rounded-full after:bg-white after:shadow after:transition-all peer-checked:after:translate-x-4"></span>
                    </div>
                  </div>

                  <!-- Remove pass -->
                  <div class="bg-white rounded-[10px] mt-2 px-4 py-1">
                    <span class="text-[#ff0000] font-normal text-[12px]">Remove Pass</span>
                  </div>

                  <!-- Detail list -->
                  <div class="bg-white rounded-[10px] mt-3 px-3 divide-y divide-gray-200">
                    <div class="flex items-center justify-between py-1.5 flex-wrap">
                      <p class="text-[13px] leading-[22px] text-black">VALID TILL</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">01/08/2026 07:04:02</span>
                    </div>
                    <div class="flex items-center justify-between py-1.5 flex-wrap">
                      <p class="text-[13px] leading-[22px] text-black">DETAILS</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">Offer Details:</span>
                    </div>
                    <div class="flex items-center justify-between py-1.5 flex-wrap">
                      <p class="text-[13px] leading-[22px] text-black">Disclaimer</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">Fine Print Value:</span>
                    </div>
                    <div class="flex items-center justify-between py-1.5 flex-wrap">
                      <p class="text-[13px] leading-[22px] text-black">Message1 Label:</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">Message1 Value: </span>
                    </div>
                    <div class="flex items-center justify-between py-1.5 flex-wrap">
                      <p class="text-[13px] leading-[22px] text-black">Message2 Label:</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]"> Message2 Value: This is a very long content</span>
                    </div>
                    <div class="flex items-center justify-between py-1.5 flex-wrap">
                      <p class="text-[13px] leading-[22px] text-black">Message3 Label:</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">Message3 Value:</span>
                    </div>
                    <div class="flex items-center justify-between py-1.5 flex-wrap">
                      <p class="text-[13px] leading-[22px] text-black">Learn more</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">For more information visit our
                        <a href="https://wepass.io/" class="text-primary">Website</a></span>
                    </div>
                    <div class="flex items-center justify-between py-1.5 flex-wrap">
                      <p class="text-[13px] leading-[22px] text-black">Visit Us</p>
                      <a href="https://maps.app.goo.gl/5fNC1UgbTNp2KJvT9" class="text-[13px] text-primary">📍 Store</a>
                    </div>
                    <div class="flex items-center justify-between py-1.5 flex-wrap">
                      <p class="text-[13px] leading-[22px] text-black">E-mail</p>
                      <a href="mailto:info@wepass.io" class="text-[13px] text-primary">Contact us 📫</a>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>

          <!-- ================= GOOGLE CARD ================= -->
          <div data-platform-card="google" class="platform-card w-full hidden">
            <div class="flip-inner w-full">

            <!-- ============ FRONT (Google / blue) ============ -->
            <div class="flip-face flip-front w-full rounded-[25px] overflow-hidden shadow-[0_18px_45px_-12px_rgba(0,0,0,0.25)] bg-[#454DB8] text-white">
              <!-- Logo + title row -->
              <div class="flex items-center px-2.5 pt-3 mb-2.5 pb-2 border-b">
                <span class="w-10 h-10 rounded-full bg-white flex items-center justify-center shrink-0 overflow-hidden p-px">
                  <img class="w-full h-full object-contain" src="favicon-new.png" alt="Logo">
                </span>
                <span class="text-[15px] font-normal leading-10 text-white ms-2.5">Shoes Store</span>
              </div>

              <!-- Offer + FROM / VALID TILL -->
              <div class="px-2.5 pt-1 pb-3">
                <h2 class="text-[22px] font-normal leading-[37px] text-white mb-3">50% off</h2>
                <div class="flex justify-between items-start pb-2.5">
                  <div>
                    <p class="text-[11px] font-medium leading-[16px] text-white/80">FROM</p>
                    <p class="text-[14px] font-light leading-[17px] text-white">Feb shoe store</p>
                  </div>
                  <div class="text-right">
                    <p class="text-[11px] font-medium leading-[16px] text-white/80">VALID TILL</p>
                    <p class="text-[14px] font-light leading-[17px] text-white">01/08/2026 08:20:02</p>
                  </div>
                </div>
              </div>

              <!-- Full-width strip image -->
              <img class="w-full h-[130px] object-cover" src="coupan-card-google.png" alt="Card strip">

              <!-- Type + QR -->
              <div class="px-2.5 pt-3.5 pb-1">
                <div>
                  <p class="text-[11px] font-medium leading-[16px] text-white/80">Type</p>
                  <p class="text-[14px] font-light leading-[17px] text-white">Sport Shoes</p>
                </div>

                <!-- QR -->
                <div class="mt-4 pt-3 flex justify-center">
                  <div class="bg-white rounded-lg p-2.5">
                    <div class="relative w-[125px] h-[125px]">
                      <img class="w-full h-full object-contain" src="barcode-qr.png" alt="QR code">
                    </div>
                  </div>
                </div>
                <p class="mt-[5px] text-center text-[13px] font-medium leading-[24px] text-white">1246897531</p>
              </div>

            </div>

            <!-- ============ BACK (Google / white) ============ -->
            <div class="flip-face flip-back w-full rounded-[26px] overflow-hidden shadow-[0_18px_45px_-12px_rgba(0,0,0,0.25)] bg-white text-on-surface">
              <div class="pass-scroll h-full max-h-[585px] overflow-y-auto px-3 pt-3 pb-2.5">
                <!-- Logo -->
                <span class="inline-flex w-10 h-10 items-center justify-center mb-2.5">
                  <img class="w-9 h-9 object-contain" src="favicon-new.png" alt="Logo">
                </span>

                <h2 class="mt-2.5 text-[22px] font-medium leading-5 text-black mb-4">50% off</h2>

                <div class="mt-3 space-y-3">
                  <div>
                    <p class="text-sm font-medium leading-[21px] text-black">From</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Feb shoe store</p>
                  </div>
                  <div class="mb-4">
                    <img class="w-full h-[150px] object-cover" src="coupan-card-google.png" alt="Card hero">
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Details</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Offer Details:</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Disclaimer</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Fine Print Value:</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Message1 Label:</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Message1 Value:</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Message2 Label:</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Message2 Value:</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Message3 Label:</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Message3 Value:</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Message4 Label:</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Message4 Value:</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Message5 Label:</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Message5 Value:</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Learn more</p>
                    <p class="text-xs font-normal leading-[18px] text-black">For more information visit our
                      <a href="https://wepass.io/" class="text-primary underline">Website</a></p>
                  </div>
                </div>

                <!-- Contact pills -->
                <div class="mt-4 space-y-2">
                  <p class="flex items-center gap-2 bg-slate-100 rounded-[10px] leading-[24px] px-3 py-2.5 text-[14px] text-black">
                    <span class="material-symbols-outlined text-[14px] text-[#6a6666]" style="font-variation-settings: 'FILL' 1;">location_on</span> Visit Us
                  </p>
                  <p class="flex items-center gap-2 bg-slate-100 rounded-[10px] leading-[24px] px-3 py-2.5 text-[14px] text-black">
                    <span class="material-symbols-outlined text-[14px] text-[#6a6666]" style="font-variation-settings: 'FILL' 1;">mail</span> E-mail
                  </p>
                  <p class="flex items-center gap-2 bg-slate-100 rounded-[10px] leading-[24px] px-3 py-2.5 text-[14px] text-black">
                    <span class="material-symbols-outlined text-[14px] text-[#6a6666]" style="font-variation-settings: 'FILL' 1;">public</span> Created with Wepass
                  </p>
                  <p class="flex items-center gap-2 bg-slate-100 rounded-[10px] leading-[24px] px-3 py-2.5 text-[14px] text-black">
                    <span class="material-symbols-outlined text-[14px] text-[#6a6666]" style="font-variation-settings: 'FILL' 1;">public</span> Home Page URI Text:
                  </p>                  
                </div>
              </div>
            </div>

            </div>
          </div>

        </div>

        <!-- Flip button -->
        <button type="button" data-flip
          class="inline-flex items-center gap-2 rounded-xl border border-primary/30 bg-white mt-10 px-7 py-2.5 text-[15px] font-semibold text-primary shadow-sm hover:bg-primary/5 active:scale-[0.98] transition-all">
          Flip
          <span class="material-symbols-outlined text-[18px]">cached</span>
        </button>

          </div>
          </div>
          <!-- /Coupon Card 4 Field Preview -->
           
          <!-- ============ Gift Card Preview ============ -->
          <div class="card-preview hidden" data-card="gift">
          <div class="w-full max-w-[350px] mx-auto flex flex-col items-center gap-6">

        <!-- Apple / Google platform tabs -->
        <div class="flex items-center gap-3">
          <button type="button" data-platform="apple"
            class="platform-tab flex items-center gap-2 rounded-full px-5 py-2 text-[15px] font-semibold transition-colors bg-slate-100 text-slate-500">
            <svg class="w-[18px] h-[18px]" viewBox="0 0 384 512" fill="currentColor" aria-hidden="true">
              <path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"/>
            </svg>
            Apple
          </button>
          <button type="button" data-platform="google"
            class="platform-tab flex items-center gap-2 rounded-full px-5 py-2 text-[15px] font-semibold transition-colors bg-slate-100 text-slate-500">
                <svg viewBox="0 0 24 24" class="w-[18px] h-[18px]">
                    <rect x="2.5" y="2" width="19" height="20" rx="2.5" fill="#34A853"></rect>
                    <rect x="2.5" y="4" width="19" height="18" rx="2.5" fill="#FBBC05"></rect>
                    <rect x="2.5" y="6.5" width="19" height="15.5" rx="2.5" fill="#EA4335"></rect>
                    <path d="M2 12.2 C 5.5 10.2 8.5 13.8 12 14 C 15.5 14.2 18.5 10.5 22 10.8 L 22 19.5 Q 22 22 19.5 22 L 4.5 22 Q 2 22 2 19.5 Z" fill="#4285F4"></path>
                </svg>
            Google
          </button>
        </div>

        <!-- Flip card -->
        <div class="w-[320px] flip-perspective">

          <!-- ================= APPLE CARD ================= -->
          <div data-platform-card="apple" class="platform-card w-full h-[481px]">
            <div class="flip-inner w-full">

              <!-- ---------- Apple FRONT (red) ---------- -->
              <div class="flip-face flip-front w-full rounded-[7px] overflow-hidden shadow-[0_18px_45px_-12px_rgba(0,0,0,0.25)] bg-[#DD3D1F] text-white">
                <!-- Header: logo + gift card / title -->
                <div class="flex items-start justify-between px-2.5 py-3 pb-2.5">
                  <div class="flex items-center">
                    <img src="<?= $logoUrl ?>" class="h-8 w-auto object-contain brightness-0 invert mt-0.5" alt="WePASS">
                  </div>
                  <div class="text-right">
                    <p class="text-[11px] font-normal text-white">GIFT CARD</p>
                    <p class="text-[17px] font-medium  text-white leading-[20px]">Titan Watches</p>
                  </div>
                </div>

                <!-- Strip image -->
                <img class="w-full h-[125px] object-cover" src="gift-card-google.png" alt="Card strip">

                <!-- Balance / Valid till -->
                <div class="flex justify-between px-2.5 pt-3">
                  <div>
                    <p class="text-[11px] font-medium text-white leading-[19px]">BALANCE</p>
                    <p class="text-[19px] font-semibold leading-[23px]">EUR 100</p>
                  </div>
                  <div class="text-right">
                    <p class="text-[11px] font-medium text-white leading-[19px]">VALID TILL</p>
                    <p class="text-[19px] font-semibold leading-[23px]">30/07/2026<br>08:14:17</p>
                  </div>
                </div>

                <!-- QR -->
                <div class="px-4 pt-5 pb-2 mt-5 flex justify-center">
                  <div class="bg-white rounded-lg px-2 pt-2">
                    <div class="relative">
                      <img class="w-[125px] h-[125px] object-contain" src="barcode-qr.png" alt="QR code">
                    </div>
                    <p class="text-center leading-[22px] text-[13px] text-black my-1">ABCD123456...</p>
                  </div>
                </div>
              </div>

              <!-- ---------- Apple BACK (grey) ---------- -->
              <div class="flip-face flip-back w-full rounded-[7px] overflow-hidden shadow-[0_18px_45px_-12px_rgba(0,0,0,0.25)] bg-[#eeeeee] text-black">
                <div class="pass-scroll h-full max-h-[560px] overflow-y-auto px-3 py-3">

                  <!-- Mini card preview (full front scaled 0.35 into a 115.5 x 96.7 box) -->
                  <div class="flex justify-center">
                    <div class="overflow-hidden rounded-[7px] w-[115px] h-[90px] shadow-[0_4px_15px_rgba(0,0,0,0.35)]">
                      <div class="w-[330px] scale-[0.35] origin-top-left">
                        <div class="bg-[#DD3D1F] text-white">
                          <!-- header -->
                          <div class="flex items-start justify-between px-3 pt-3 pb-2">
                            <img src="<?= $logoUrl ?>" class="h-8 w-auto object-contain brightness-0 invert" alt="">
                            <div class="text-right">
                              <p class="text-[11px] font-normal text-white leading-tight">GIFT CARD</p>
                              <p class="text-[17px] font-medium text-white leading-tight">Titan Watches</p>
                            </div>
                          </div>
                          <!-- strip -->
                          <img class="w-full h-[120px] object-cover" src="gift-card-google.png" alt="">
                          <!-- balance / valid -->
                          <div class="flex justify-between px-3 pt-2.5 pb-3">
                            <div>
                              <p class="text-[11px] font-medium text-white leading-tight">BALANCE</p>
                              <p class="text-[19px] font-semibold leading-tight">EUR 100</p>
                            </div>
                            <div class="text-right">
                              <p class="text-[11px] text-white leading-tight">VALID TILL</p>
                              <p class="text-[19px] font-semibold leading-[23px]">30/07/2026<br>08:14:17</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Title -->
                  <div class="text-center">
                    <h4 class="text-[18px] font-semibold text-black">Titan Watches</h4>
                    <span class="text-[#8c8c8c] text-[14px]">Updated 3 hours ago</span>
                  </div>

                  <!-- Settings toggles -->
                  <div class="bg-white rounded-[10px] mt-8 px-3">
                    <div class="flex items-center justify-between pt-2 pb-1">
                      <span class="text-[12px] leading-[18px] text-black">Automatic Updates</span>
                      <span class="w-[35px] h-[24px]" role="switch" aria-checked="true"></span>
                    </div>
                    <div class="border-t border-gray-200"></div>
                    <div class="flex items-center justify-between py-2">
                      <span class="text-[12px] leading-[18px] text-black">Allow Notification</span>
                      <span class="toggle-on" role="switch" aria-checked="true"></span>
                    </div>
                  </div>

                  <!-- Remove pass -->
                  <div class="bg-white rounded-[10px] mt-3 px-4 py-2">
                    <span class="text-[#ff0000] font-normal text-sm">Remove Pass</span>
                  </div>

                  <!-- Detail list -->
                  <div class="bg-white rounded-[10px] mt-3 px-3 divide-y divide-gray-200">
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">PIN</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">360311</span>
                    </div>
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">EVENT NUMBER</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">2</span>
                    </div>
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Created with Wepass</p>
                      <a href="https://wepass.io/" class="text-[13px] text-primary">Details</a>
                    </div>
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Notification</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">-</span>
                    </div>
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Message1 Label:</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">Message1 Value:</span>
                    </div>
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Message2 Label:</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">Message2 Value:</span>
                    </div>
                    <div class="py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Learn more</p>
                      <p class="text-[13px] font-normal text-[#8f8888] leading-[20px]">For more information visit our
                        <a href="https://wepass.io/" class="text-primary">Website</a></p>
                    </div>
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Visit Us</p>
                      <a href="https://maps.app.goo.gl/5fNC1UgbTNp2KJvT9" class="text-[13px] text-primary">📍 Store</a>
                    </div>
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">E-mail</p>
                      <a href="mailto:info@wepass.io" class="text-[13px] text-primary">Contact us 📫</a>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>

          <!-- ================= GOOGLE CARD ================= -->
          <div data-platform-card="google" class="platform-card w-full hidden">
            <div class="flip-inner w-full">

            <!-- ============ FRONT (Google / red) ============ -->
            <div class="flip-face flip-front w-full rounded-[25px] overflow-hidden shadow-[0_18px_45px_-12px_rgba(0,0,0,0.25)] bg-[#DD3D1F] text-white">
              <!-- Logo + title row -->
              <div class="flex items-center px-2.5 pt-3 mb-2.5 pb-2 border-b">
                <span class="w-10 h-10 rounded-full bg-white flex items-center justify-center shrink-0 overflow-hidden p-px">
                  <img class="w-full h-full object-contain" src="favicon-new.png" alt="Logo">
                </span>
                <span class="text-[15px] font-normal leading-10 text-white ms-2.5">Titan Watches</span>
              </div>

              <div class="mx-6"></div>

              <div class="px-2.5 pt-2.5 pb-2">
                <h2 class="text-[19px] font-semibold leading-[23px] text-white">Gift card: EUR100</h2>

                <p class="mt-5 text-xs font-medium leading-5 text-white">VALID TILL</p>
                <p class="text-xs font-semibold leading-[14px] text-white">30/07/2026 08:14:17</p>

                <!-- QR -->
                <div class="mt-5 pt-5 flex justify-center">
                  <div class="bg-white rounded-lg p-2.5">
                    <div class="relative w-[125px] h-[125px]">
                      <img class="w-full h-full object-contain" src="barcode-qr.png" alt="QR code">
                    </div>
                  </div>
                </div>
                <p class="mt-[5px] text-center text-[13px] font-medium leading-[24px] text-white">ABCD123456...</p>
              </div>

              <!-- Strip image -->
              <img class="w-full h-auto object-contain" src="gift-card-google.png" alt="Card strip">
            </div>

            <!-- ============ BACK (Google / white) ============ -->
            <div class="flip-face flip-back w-full rounded-[26px] overflow-hidden shadow-[0_18px_45px_-12px_rgba(0,0,0,0.25)] bg-white text-on-surface">
              <div class="pass-scroll h-full max-h-[585px] overflow-y-auto px-3 pt-3 pb-2.5">
                <!-- Logo -->
                <span class="inline-flex w-10 h-10 items-center justify-center mb-2.5">
                  <img class="w-9 h-9 object-contain" src="favicon-new.png" alt="Logo">
                </span>

                <h2 class="mt-2.5 text-[22px] font-medium leading-5 text-black mb-4">Gift Card: EUR 100</h2>

                <div class="mt-3 space-y-3">
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Updated</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Jun 30, 2026, 06:17 AM</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">PIN</p>
                    <p class="text-xs font-normal leading-[18px] text-black">360311</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">EVENT NUMBER</p>
                    <p class="text-xs font-normal leading-[18px] text-black">2</p>
                  </div>
                </div>

                <!-- Hero image with Platinum badge -->
                <div class="relative mt-2 overflow-hidden mb-4">
                  <img class="w-full h-[150px] object-cover" src="gift-card-google.png" alt="Card hero">
                </div>

                <div class="mt-5 space-y-4">
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Message1 Label:</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Message1 Value:</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Message2 Label:</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Message2 Value:</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Learn more</p>
                    <p class="text-xs font-normal leading-[18px] text-black">For more information visit our
                      <a href="https://wepass.io/" class="text-primary underline">Website</a></p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">VALID TILL</p>
                    <p class="text-xs font-normal leading-[18px] text-black">30/07/2026 08:14:17</p>
                  </div>
                </div>

                <!-- Contact pills -->
                <div class="mt-4 space-y-2">
                  <p class="flex items-center gap-2 bg-slate-100 rounded-[10px] leading-[24px] px-3 py-2.5 text-[14px] text-black">
                    <span class="material-symbols-outlined text-[14px] text-[#6a6666]" style="font-variation-settings: 'FILL' 1;">location_on</span> Visit Us
                  </p>
                  <p class="flex items-center gap-2 bg-slate-100 rounded-[10px] leading-[24px] px-3 py-2.5 text-[14px] text-black">
                    <span class="material-symbols-outlined text-[14px] text-[#6a6666]" style="font-variation-settings: 'FILL' 1;">mail</span> E-mail
                  </p>
                  <p class="flex items-center gap-2 bg-slate-100 rounded-[10px] leading-[24px] px-3 py-2.5 text-[14px] text-black">
                    <span class="material-symbols-outlined text-[14px] text-[#6a6666]" style="font-variation-settings: 'FILL' 1;">public</span> Created with Wepass
                  </p>
                </div>
              </div>
            </div>

            </div>
          </div>

        </div>

        <!-- Flip button -->
        <button type="button" data-flip
          class="inline-flex items-center gap-2 rounded-xl border border-primary/30 bg-white mt-10 px-7 py-2.5 text-[15px] font-semibold text-primary shadow-sm hover:bg-primary/5 active:scale-[0.98] transition-all">
          Flip
          <span class="material-symbols-outlined text-[18px]">cached</span>
        </button>

          </div>
          </div>
          <!-- /Gift Card Preview -->

          <!-- ============ Event Ticket Preview ============ -->
          <div class="card-preview hidden" data-card="event">
          <div class="w-full max-w-[350px] mx-auto flex flex-col items-center gap-6">

        <!-- Apple / Google platform tabs -->
        <div class="flex items-center gap-3">
          <button type="button" data-platform="apple"
            class="platform-tab flex items-center gap-2 rounded-full px-5 py-2 text-[15px] font-semibold transition-colors bg-slate-100 text-slate-500">
            <svg class="w-[18px] h-[18px]" viewBox="0 0 384 512" fill="currentColor" aria-hidden="true">
              <path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"/>
            </svg>
            Apple
          </button>
          <button type="button" data-platform="google"
            class="platform-tab flex items-center gap-2 rounded-full px-5 py-2 text-[15px] font-semibold transition-colors bg-slate-100 text-slate-500">
                <svg viewBox="0 0 24 24" class="w-[18px] h-[18px]">
                    <rect x="2.5" y="2" width="19" height="20" rx="2.5" fill="#34A853"></rect>
                    <rect x="2.5" y="4" width="19" height="18" rx="2.5" fill="#FBBC05"></rect>
                    <rect x="2.5" y="6.5" width="19" height="15.5" rx="2.5" fill="#EA4335"></rect>
                    <path d="M2 12.2 C 5.5 10.2 8.5 13.8 12 14 C 15.5 14.2 18.5 10.5 22 10.8 L 22 19.5 Q 22 22 19.5 22 L 4.5 22 Q 2 22 2 19.5 Z" fill="#4285F4"></path>
                </svg>
            Google
          </button>
        </div>

        <!-- Flip card -->
        <div class="w-[320px] flip-perspective">

          <!-- ================= APPLE CARD ================= -->
          <div data-platform-card="apple" class="platform-card w-full h-[481px]">
            <div class="flip-inner w-full">

              <!-- ---------- Apple FRONT (green) ---------- -->
              <div class="flip-face flip-front w-full rounded-[7px] overflow-hidden shadow-[0_18px_45px_-12px_rgba(0,0,0,0.25)] bg-[#47AB8B] text-white">
                <!-- Header: logo + event / title -->
                <div class="flex items-start justify-between px-2.5 py-3 pb-2.5">
                  <div class="flex items-center">
                    <img src="<?= $logoUrl ?>" class="h-8 w-auto object-contain brightness-0 invert mt-0.5" alt="WePASS">
                  </div>
                  <div class="text-right">
                    <p class="text-[10px] font-medium text-white/80 leading-[12px]">EVENT</p>
                    <p class="text-[17px] font-medium text-white leading-[22px]">Music Concert</p>
                  </div>
                </div>

                <!-- Strip image -->
                <img class="w-full h-[110px] object-cover" src="event-card.png" alt="Event strip">

                <!-- Venue / Event time -->
                <div class="flex justify-between px-2.5 pt-3">
                  <div>
                    <p class="text-[10px] font-medium text-white/80 leading-[12px]">VENUE</p>
                    <p class="text-[18px] font-light leading-[22px] text-white">Belgium</p>
                  </div>
                  <div class="text-right">
                    <p class="text-[10px] font-medium text-white/80 leading-[12px]">EVENT TIME</p>
                    <p class="text-[18px] font-light leading-[22px] text-white">11 Jul, 2026, 11:37:10</p>
                  </div>
                </div>

                <!-- Gate / Section / Row / Seat -->
                <div class="grid grid-cols-4 gap-2 px-2.5 pt-3">
                  <div>
                    <p class="text-[10px] font-medium text-white/80 leading-[12px]">GATE</p>
                    <p class="text-[14px] font-light leading-[17px] text-white">A12</p>
                  </div>
                  <div>
                    <p class="text-[10px] font-medium text-white/80 leading-[12px]">SECTION</p>
                    <p class="text-[14px] font-light leading-[17px] text-white">A</p>
                  </div>
                  <div>
                    <p class="text-[10px] font-medium text-white/80 leading-[12px]">ROW</p>
                    <p class="text-[14px] font-light leading-[17px] text-white">12</p>
                  </div>
                  <div>
                    <p class="text-[10px] font-medium text-white/80 leading-[12px]">SEAT</p>
                    <p class="text-[14px] font-light leading-[17px] text-white">15</p>
                  </div>
                </div>

                <!-- QR -->
                <div class="px-4 pt-4 pb-2 flex justify-center">
                  <div class="bg-white rounded-lg px-2 pt-2">
                    <div class="relative">
                      <img class="w-[125px] h-[125px] object-contain" src="barcode-qr.png" alt="QR code">
                    </div>
                    <p class="text-center leading-[22px] text-[13px] text-black my-1">1246897531</p>
                  </div>
                </div>
              </div>

              <!-- ---------- Apple BACK (grey) ---------- -->
              <div class="flip-face flip-back w-full rounded-[7px] overflow-hidden shadow-[0_18px_45px_-12px_rgba(0,0,0,0.25)] bg-[#eeeeee] text-black">
                <div class="pass-scroll h-full max-h-[560px] overflow-y-auto px-3 py-3">

                  <!-- Mini card preview (scaled replica of the Apple front) -->
                  <div class="flex justify-center">
                    <div class="overflow-hidden rounded-[7px] w-[115px] h-[75px] shadow-[0_4px_15px_rgba(0,0,0,0.35)]">
                      <div class="w-[330px] scale-[0.35] origin-top-left">
                        <div class="bg-[#47AB8B] text-white">
                          <!-- header -->
                          <div class="flex items-start justify-between px-3 pt-3 pb-2">
                            <img src="<?= $logoUrl ?>" class="h-8 w-auto object-contain brightness-0 invert" alt="">
                            <div class="text-right">
                              <p class="text-[9px] font-medium leading-[15px] text-white/80">EVENT</p>
                              <p class="text-[17px] font-medium text-white leading-tight">Music Concert</p>
                            </div>
                          </div>
                          <!-- strip -->
                          <img class="w-full h-[70px] object-cover" src="event-card.png" alt="">
                          <!-- venue / time -->
                          <div class="flex justify-between px-3 pt-2">
                            <div>
                              <p class="text-[9px] font-medium leading-[15px] text-white/80">VENUE</p>
                              <p class="text-[14px] font-light leading-tight">Belgium</p>
                            </div>
                            <div class="text-right">
                              <p class="text-[9px] font-medium leading-[15px] text-white/80">EVENT TIME</p>
                              <p class="text-[14px] font-light leading-tight">11 Jul, 2026, 11:37:10</p>
                            </div>
                          </div>
                          <!-- gate / section / row / seat -->
                          <div class="grid grid-cols-4 gap-2 px-3 pt-2 pb-4">
                            <div>
                              <p class="text-[9px] font-medium leading-[15px] text-white/80">GATE</p>
                              <p class="text-[14px] font-light leading-tight">A12</p>
                            </div>
                            <div>
                              <p class="text-[9px] font-medium leading-[15px] text-white/80">SECTION</p>
                              <p class="text-[14px] font-light leading-tight">A</p>
                            </div>
                            <div>
                              <p class="text-[9px] font-medium leading-[15px] text-white/80">ROW</p>
                              <p class="text-[14px] font-light leading-tight">12</p>
                            </div>
                            <div>
                              <p class="text-[9px] font-medium leading-[15px] text-white/80">SEAT</p>
                              <p class="text-[14px] font-light leading-tight">15</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Title -->
                  <div class="text-center">
                    <h4 class="text-[18px] font-semibold text-black">Music Concert</h4>
                    <span class="text-[#8c8c8c] text-[14px]">Updated 20 seconds ago</span>
                  </div>

                  <!-- Settings toggles -->
                  <div class="bg-white rounded-[10px] mt-4 px-3">
                    <div class="flex items-center justify-between py-2.5">
                      <span class="text-[14px] text-black">Automatic Updates</span>
                      <input type="checkbox" class="sr-only peer" checked="">
                      <span class="relative w-8 h-4 rounded-full bg-slate-300 peer-checked:!bg-[#34c759] transition-colors after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:h-3 after:w-3 after:rounded-full after:bg-white after:shadow after:transition-all peer-checked:after:translate-x-4"></span>
                    </div>
                    <div class="border-t border-gray-200"></div>
                    <div class="flex items-center justify-between py-2.5">
                      <span class="text-[14px] text-black">Allow Notification</span>
                      <input type="checkbox" class="sr-only peer" checked="">
                      <span class="relative w-8 h-4 rounded-full bg-slate-300 peer-checked:!bg-[#34c759] transition-colors after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:h-3 after:w-3 after:rounded-full after:bg-white after:shadow after:transition-all peer-checked:after:translate-x-4"></span>
                    </div>
                  </div>

                  <!-- Remove pass -->
                  <div class="bg-white rounded-[10px] mt-3 px-4 py-2">
                    <span class="text-[#ff0000] font-normal text-sm">Remove Pass</span>
                  </div>

                  <!-- Detail list -->
                  <div class="bg-white rounded-[10px] mt-3 px-3 divide-y divide-gray-200">
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Ticket Holder</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">Mike Johnson</span>
                    </div>
                    <div class="py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Belgium</p>
                      <p class="text-[13px] font-normal text-[#8f8888] leading-[20px]">Lange Stationsstraat 352, 3000, LEUVEN</p>
                    </div>
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Doors Open</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">01 Jul, 2026, 03:07:53</span>
                    </div>
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Event Start Time</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">11 Jul, 2026, 11:37:10</span>
                    </div>
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Event End Time</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">02 Jul, 2026, 15:08:00</span>
                    </div>
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Ticket Type</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">General</span>
                    </div>
                    <div class="py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Learn more</p>
                      <p class="text-[13px] font-normal text-[#8f8888] leading-[20px]">For more information visit our
                        <a href="https://wepass.io/" class="text-primary">Website</a></p>
                    </div>
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Visit Us</p>
                      <a href="https://maps.app.goo.gl/5fNC1UgbTNp2KJvT9" class="text-[13px] text-primary">📍 Store</a>
                    </div>
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">E-mail</p>
                      <a href="mailto:info@wepass.io" class="text-[13px] text-primary">Contact us 📫</a>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>

          <!-- ================= GOOGLE CARD ================= -->
          <div data-platform-card="google" class="platform-card w-full hidden">
            <div class="flip-inner w-full">

            <!-- ============ FRONT (Google / green) ============ -->
            <div class="flip-face flip-front w-full rounded-[25px] overflow-hidden shadow-[0_18px_45px_-12px_rgba(0,0,0,0.25)] bg-[#47AB8B] text-white">
              <!-- Logo + title row -->
              <div class="flex items-center px-2.5 pt-3 mb-2.5 pb-2 border-b border-white/25">
                <span class="w-10 h-10 rounded-full bg-white flex items-center justify-center shrink-0 overflow-hidden p-px">
                  <img class="w-full h-full object-contain" src="favicon-new.png" alt="Logo">
                </span>
                <span class="text-[15px] font-normal leading-10 text-white ms-2.5">Music Concert</span>
              </div>

              <!-- Venue + title -->
              <div class="px-2.5 pt-2 pb-2">
                <p class="text-[13px] font-normal leading-[18px] text-white/90">Belgium</p>
                <h2 class="text-[22px] font-normal leading-[30px] text-white mb-3">Music Concert</h2>

                <!-- Date / Time -->
                <div class="flex justify-between items-start pt-1">
                  <div>
                    <p class="text-[9px] font-medium leading-[15px] text-white/80">DATE</p>
                    <p class="text-[14px] font-light leading-[17px] text-white">Jul 11,2026</p>
                  </div>
                  <div class="text-right">
                    <p class="text-[9px] font-medium leading-[15px] text-white/80">TIME</p>
                    <p class="text-[14px] font-light leading-[17px] text-white">11:37 AM</p>
                  </div>
                </div>
                <div class="-mx-2.5 border-b border-white/25 mt-3"></div>

                <!-- Gate / Section / Row-Seat -->
                <div class="flex justify-between items-start pt-3">
                  <div>
                    <p class="text-[9px] font-medium leading-[15px] text-white/80">GATE</p>
                    <p class="text-[14px] font-light leading-[17px] text-white">A12</p>
                  </div>
                  <div class="text-center">
                    <p class="text-[9px] font-medium leading-[15px] text-white/80">SECTION</p>
                    <p class="text-[14px] font-light leading-[17px] text-white">A</p>
                  </div>
                  <div class="text-right">
                    <p class="text-[9px] font-medium leading-[15px] text-white/80">ROW/SEAT</p>
                    <p class="text-[14px] font-light leading-[17px] text-white">12/15</p>
                  </div>
                </div>

                <!-- QR -->
                <div class="mt-5 pt-3 flex justify-center">
                  <div class="bg-white rounded-lg p-2.5">
                    <div class="relative w-[125px] h-[125px]">
                      <img class="w-full h-full object-contain" src="barcode-qr.png" alt="QR code">
                    </div>
                  </div>
                </div>
              </div>

              <!-- Full-width strip image -->
              <img class="w-full h-[130px] object-cover" src="event-card.png" alt="Event strip">
            </div>

            <!-- ============ BACK (Google / white) ============ -->
            <div class="flip-face flip-back w-full rounded-[26px] overflow-hidden shadow-[0_18px_45px_-12px_rgba(0,0,0,0.25)] bg-white text-on-surface">
              <div class="pass-scroll h-full max-h-[585px] overflow-y-auto px-3 pt-3 pb-2.5">
                <!-- Logo -->
                <span class="inline-flex w-10 h-10 items-center justify-center mb-2.5">
                  <img class="w-9 h-9 object-contain" src="favicon-new.png" alt="Logo">
                </span>

                <h2 class="mt-2.5 text-[22px] font-medium leading-5 text-black mb-4">Music Concert</h2>

                <div class="mt-3 space-y-3">
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Updated</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Jul 01, 2026, 09:39 AM</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Ticket Holder</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Mike Johnson</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Belgium</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Lange Stationsstraat 352, 3000, LEUVEN</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Doors Open</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Jul 01,2026 15:07 PM</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Event Start Time</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Jul 11,2026 11:37 AM</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Event End Time</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Jul 02,2026 15:08 PM</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Ticket Type</p>
                    <p class="text-xs font-normal leading-[18px] text-black">General</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Learn more</p>
                    <p class="text-xs font-normal leading-[18px] text-black">For more information visit our
                      <a href="https://wepass.io/" class="text-primary underline">Website</a></p>
                  </div>
                </div>

                <!-- Contact pills -->
                <div class="mt-4 space-y-2">
                  <p class="flex items-center gap-2 bg-slate-100 rounded-[10px] leading-[24px] px-3 py-2.5 text-[14px] text-black">
                    <span class="material-symbols-outlined text-[14px] text-[#6a6666]" style="font-variation-settings: 'FILL' 1;">location_on</span> Visit Us
                  </p>
                  <p class="flex items-center gap-2 bg-slate-100 rounded-[10px] leading-[24px] px-3 py-2.5 text-[14px] text-black">
                    <span class="material-symbols-outlined text-[14px] text-[#6a6666]" style="font-variation-settings: 'FILL' 1;">mail</span> E-mail
                  </p>
                  <p class="flex items-center gap-2 bg-slate-100 rounded-[10px] leading-[24px] px-3 py-2.5 text-[14px] text-black">
                    <span class="material-symbols-outlined text-[14px] text-[#6a6666]" style="font-variation-settings: 'FILL' 1;">public</span> Created with Wepass
                  </p>
                </div>
              </div>
            </div>

            </div>
          </div>

        </div>

        <!-- Flip button -->
        <button type="button" data-flip
          class="inline-flex items-center gap-2 rounded-xl border border-primary/30 bg-white mt-10 px-7 py-2.5 text-[15px] font-semibold text-primary shadow-sm hover:bg-primary/5 active:scale-[0.98] transition-all">
          Flip
          <span class="material-symbols-outlined text-[18px]">cached</span>
        </button>

          </div>
          </div>
          <!-- /Event Ticket Preview -->

          <!-- ============ Boarding Pass Preview ============ -->
          <div class="card-preview hidden" data-card="boarding">
          <div class="w-full max-w-[350px] mx-auto flex flex-col items-center gap-6">

        <!-- Apple / Google platform tabs -->
        <div class="flex items-center gap-3">
          <button type="button" data-platform="apple"
            class="platform-tab flex items-center gap-2 rounded-full px-5 py-2 text-[15px] font-semibold transition-colors bg-slate-100 text-slate-500">
            <svg class="w-[18px] h-[18px]" viewBox="0 0 384 512" fill="currentColor" aria-hidden="true">
              <path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"/>
            </svg>
            Apple
          </button>
          <button type="button" data-platform="google"
            class="platform-tab flex items-center gap-2 rounded-full px-5 py-2 text-[15px] font-semibold transition-colors bg-slate-100 text-slate-500">
                <svg viewBox="0 0 24 24" class="w-[18px] h-[18px]">
                    <rect x="2.5" y="2" width="19" height="20" rx="2.5" fill="#34A853"></rect>
                    <rect x="2.5" y="4" width="19" height="18" rx="2.5" fill="#FBBC05"></rect>
                    <rect x="2.5" y="6.5" width="19" height="15.5" rx="2.5" fill="#EA4335"></rect>
                    <path d="M2 12.2 C 5.5 10.2 8.5 13.8 12 14 C 15.5 14.2 18.5 10.5 22 10.8 L 22 19.5 Q 22 22 19.5 22 L 4.5 22 Q 2 22 2 19.5 Z" fill="#4285F4"></path>
                </svg>
            Google
          </button>
        </div>

        <!-- Flip card -->
        <div class="w-[320px] flip-perspective">

          <!-- ================= APPLE CARD ================= -->
          <div data-platform-card="apple" class="platform-card w-full h-[481px]">
            <div class="flip-inner w-full">

              <!-- ---------- Apple FRONT (indigo) ---------- -->
              <div class="flip-face flip-front w-full rounded-[7px] overflow-hidden shadow-[0_18px_45px_-12px_rgba(0,0,0,0.25)] bg-[#4A3F9E] text-white">
                <!-- Header: logo + flight number -->
                <div class="flex items-start justify-between px-2.5 py-3 pb-2.5">
                  <div class="flex items-center">
                    <img src="<?= $logoUrl ?>" class="h-8 w-auto object-contain brightness-0 invert mt-0.5" alt="WePASS">
                  </div>
                  <div class="text-right">
                    <p class="text-[11px] font-normal text-white">FLIGHT NUMBER</p>
                    <p class="text-[18px] font-medium text-white leading-[15px]">1001</p>
                  </div>
                </div>

                <!-- Origin / destination airports -->
                <div class="flex items-start justify-between px-2.5 pt-4">
                  <div class="max-w-[38%]">
                    <p class="text-[11px] font-medium text-white leading-[15px] truncate">ELEFTHERIOS VENIZ...</p>
                    <p class="text-[34px] font-light leading-[38px] text-white">ATH</p>
                  </div>
                  <div class="flex items-center pt-4">
                    <span class="material-symbols-outlined text-[26px] text-white rotate-90" style="font-variation-settings: 'FILL' 1;">flight</span>
                  </div>
                  <div class="text-right max-w-[38%]">
                    <p class="text-[11px] font-medium text-white leading-[15px] truncate">FRANKFURT AIRPORT</p>
                    <p class="text-[34px] font-light leading-[38px] text-white">FRA</p>
                  </div>
                </div>

                <!-- Terminal / Gate / Flight / Boarding -->
                <div class="grid grid-cols-4 gap-2 px-2.5 pt-5">
                  <div>
                    <p class="text-[9px] font-medium text-white leading-[15px]">TERMINAL</p>
                    <p class="text-[13px] font-light leading-[16px] text-white">1</p>
                  </div>
                  <div>
                    <p class="text-[9px] font-medium text-white leading-[15px]">GATE</p>
                    <p class="text-[13px] font-light leading-[16px] text-white">A1</p>
                  </div>
                  <div>
                    <p class="text-[9px] font-medium text-white leading-[15px]">AA</p>
                    <p class="text-[13px] font-light leading-[16px] text-white">1001</p>
                  </div>
                  <div>
                    <p class="text-[9px] font-medium text-white leading-[15px]">BOARDING</p>
                    <p class="text-[13px] font-light leading-[16px] text-white">03/07/2026 12:18:03</p>
                  </div>
                </div>

                <!-- Passenger / Position / Group / Seat -->
                <div class="grid grid-cols-4 gap-2 px-2.5 pt-3">
                  <div>
                    <p class="text-[9px] font-medium text-white leading-[15px]">PASSENGER</p>
                    <p class="text-[13px] font-light leading-[16px] text-white">John Dua</p>
                  </div>
                  <div>
                    <p class="text-[9px] font-medium text-white leading-[15px]">POSITION</p>
                    <p class="text-[13px] font-light leading-[16px] text-white">Economy</p>
                  </div>
                  <div>
                    <p class="text-[9px] font-medium text-white leading-[15px]">GROUP</p>
                    <p class="text-[13px] font-light leading-[16px] text-white">A1</p>
                  </div>
                  <div>
                    <p class="text-[9px] font-medium text-white leading-[15px]">SEAT</p>
                    <p class="text-[13px] font-light leading-[16px] text-white">B12</p>
                  </div>
                </div>

                <!-- QR -->
                <div class="px-4 pt-5 mt-7 pb-2 flex justify-center">
                  <div class="bg-white rounded-lg px-2 pt-2">
                    <div class="relative">
                      <img class="w-[125px] h-[125px] object-contain" src="barcode-qr.png" alt="QR code">
                    </div>
                    <p class="text-center leading-[22px] text-[13px] text-black my-1">1246897531</p>
                  </div>
                </div>
              </div>

              <!-- ---------- Apple BACK (grey) ---------- -->
              <div class="flip-face flip-back w-full rounded-[7px] overflow-hidden shadow-[0_18px_45px_-12px_rgba(0,0,0,0.25)] bg-[#eeeeee] text-black">
                <div class="pass-scroll h-full max-h-[560px] overflow-y-auto px-3 py-3">

                  <!-- Mini card preview (scaled replica of the Apple front) -->
                  <div class="flex justify-center">
                    <div class="overflow-hidden rounded-[7px] w-[115px] h-[68px] shadow-[0_4px_15px_rgba(0,0,0,0.35)]">
                      <div class="w-[330px] scale-[0.35] origin-top-left">
                        <div class="bg-[#4A3F9E] text-white">
                          <!-- header -->
                          <div class="flex items-start justify-between px-3 pt-3 pb-2">
                            <img src="<?= $logoUrl ?>" class="h-8 w-auto object-contain brightness-0 invert" alt="">
                            <div class="text-right">
                              <p class="text-[11px] font-normal text-white leading-tight">FLIGHT NUMBER</p>
                              <p class="text-[17px] font-medium text-white leading-tight">1001</p>
                            </div>
                          </div>
                          <!-- airports -->
                          <div class="flex items-start justify-between px-3 pt-1">
                            <div>
                              <p class="text-[11px] font-medium text-white leading-tight">ELEFTHERIOS...</p>
                              <p class="text-[30px] font-light leading-tight text-white">ATH</p>
                            </div>
                            <div class="flex items-center pt-3">
                              <span class="material-symbols-outlined text-[22px] text-white rotate-90" style="font-variation-settings: 'FILL' 1;">flight</span>
                            </div>
                            <div class="text-right">
                              <p class="text-[11px] font-medium text-white leading-tight">FRANKFURT...</p>
                              <p class="text-[30px] font-light leading-tight text-white">FRA</p>
                            </div>
                          </div>
                          <!-- terminal / gate / flight / boarding -->
                          <div class="grid grid-cols-4 gap-2 px-3 pt-2">
                            <div>
                              <p class="text-[10px] font-medium text-white leading-tight">TERMINAL</p>
                              <p class="text-[13px] font-light leading-tight text-white">1</p>
                            </div>
                            <div>
                              <p class="text-[10px] font-medium text-white leading-tight">GATE</p>
                              <p class="text-[13px] font-light leading-tight text-white">A1</p>
                            </div>
                            <div>
                              <p class="text-[10px] font-medium text-white leading-tight">AA</p>
                              <p class="text-[13px] font-light leading-tight text-white">1001</p>
                            </div>
                            <div class="text-right">
                              <p class="text-[10px] font-medium text-white leading-tight">BOARDING</p>
                              <p class="text-[13px] font-light leading-tight text-white">03/07/2026</p>
                            </div>
                          </div>
                          <!-- passenger / position / group / seat -->
                          <div class="grid grid-cols-4 gap-2 px-3 pt-2 pb-3">
                            <div>
                              <p class="text-[10px] font-medium text-white leading-tight">PASSENGER</p>
                              <p class="text-[13px] font-light leading-tight text-white">John Dua</p>
                            </div>
                            <div>
                              <p class="text-[10px] font-medium text-white leading-tight">POSITION</p>
                              <p class="text-[13px] font-light leading-tight text-white">Economy</p>
                            </div>
                            <div>
                              <p class="text-[10px] font-medium text-white leading-tight">GROUP</p>
                              <p class="text-[13px] font-light leading-tight text-white">A1</p>
                            </div>
                            <div class="text-right">
                              <p class="text-[10px] font-medium text-white leading-tight">SEAT</p>
                              <p class="text-[13px] font-light leading-tight text-white">B12</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Title -->
                  <div class="text-center">
                    <h4 class="text-[18px] font-semibold text-black">Emirates</h4>
                    <span class="text-[#8c8c8c] text-[14px]">Updated 43 seconds ago</span>
                  </div>

                  <!-- Settings toggles -->
                  <div class="bg-white rounded-[10px] mt-4 px-3">
                    <div class="flex items-center justify-between py-2.5">
                      <span class="text-[14px] text-black">Automatic Updates</span>
                      <input type="checkbox" class="sr-only peer" checked="">
                      <span class="relative w-8 h-4 rounded-full bg-slate-300 peer-checked:!bg-[#34c759] transition-colors after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:h-3 after:w-3 after:rounded-full after:bg-white after:shadow after:transition-all peer-checked:after:translate-x-4"></span>
                    </div>
                    <div class="border-t border-gray-200"></div>
                    <div class="flex items-center justify-between py-2.5">
                      <span class="text-[14px] text-black">Allow Notification</span>
                      <input type="checkbox" class="sr-only peer" checked="">
                      <span class="relative w-8 h-4 rounded-full bg-slate-300 peer-checked:!bg-[#34c759] transition-colors after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:h-3 after:w-3 after:rounded-full after:bg-white after:shadow after:transition-all peer-checked:after:translate-x-4"></span>
                    </div>
                  </div>

                  <!-- Remove pass -->
                  <div class="bg-white rounded-[10px] mt-3 px-4 py-2">
                    <span class="text-[#ff0000] font-normal text-sm">Remove Pass</span>
                  </div>

                  <!-- Detail list -->
                  <div class="bg-white rounded-[10px] mt-3 px-3 divide-y divide-gray-200">
                    <div class="flex items-center justify-between flex-wrap py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Boarding Door</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">Front</span>
                    </div>
                    <div class="flex items-center justify-between flex-wrap py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Flight Number</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">AA 1001</span>
                    </div>
                    <div class="flex items-center justify-between flex-wrap py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Confirmation Number</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">143</span>
                    </div>
                    <div class="flex items-center justify-between flex-wrap py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Gate Closes</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">03/07/2026 11:48:03</span>
                    </div>
                    <div class="flex items-center justify-between flex-wrap py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Scheduled Departure Time</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">03/07/2026 12:18:03</span>
                    </div>
                    <div class="flex items-center justify-between flex-wrap py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Sequence</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">S55</span>
                    </div>
                    <div class="flex items-center justify-between flex-wrap py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Ticket Number</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">23</span>
                    </div>
                    <div class="flex items-center justify-between flex-wrap py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Cabin</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">Economy</span>
                    </div>
                    <div class="flex items-center justify-between flex-wrap py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Sequence</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">S55</span>
                    </div>
                    <div class="flex items-center justify-between flex-wrap py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Arrival Gate</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">24</span>
                    </div>                                                                              
                    <div class="flex items-center justify-between flex-wrap py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Frequent Flyer Number</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">2</span>
                    </div>
                    <div class="py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Learn more</p>
                      <p class="text-[13px] font-normal text-[#8f8888] leading-[20px]">For more information visit our
                        <a href="https://wepass.io/" class="text-primary">Website</a></p>
                    </div>
                    <div class="flex items-center justify-between flex-wrap py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Visit Us</p>
                      <a href="https://maps.app.goo.gl/5fNC1UgbTNp2KJvT9" class="text-[13px] text-primary">📍 Store</a>
                    </div>
                    <div class="flex items-center justify-between flex-wrap py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">E-mail</p>
                      <a href="mailto:info@wepass.io" class="text-[13px] text-primary">Contact us 📫</a>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>

          <!-- ================= GOOGLE CARD ================= -->
          <div data-platform-card="google" class="platform-card w-full hidden">
            <div class="flip-inner w-full">

            <!-- ============ FRONT (Google / indigo) ============ -->
            <div class="flip-face flip-front w-full rounded-[25px] overflow-hidden shadow-[0_18px_45px_-12px_rgba(0,0,0,0.25)] bg-[#4A3F9E] text-white">
              <!-- Logo + airline + flight -->
              <div class="flex items-center justify-between px-2.5 pt-3 mb-2.5 pb-2 border-b border-white/25">
                <div class="flex items-center">
                  <span class="w-10 h-10 rounded-full bg-white flex items-center justify-center shrink-0 overflow-hidden p-px">
                    <img class="w-full h-full object-contain" src="favicon-new.png" alt="Logo">
                  </span>
                  <span class="text-[16px] font-medium text-white leading-[24px] ms-2.5">Emirates</span>
                </div>
                <span class="text-[16px] font-medium leading-[19px] text-white">AA 1001</span>
              </div>

              <div class="px-2.5 pt-1 pb-2">
                <!-- Route -->
                <p class="text-[13px] font-medium leading-[22px] text-white truncate">ELEFTHERIOS VEN... to FRANKFURT AIRPO..</p>
                <div class="flex items-center gap-2">
                  <span class="text-[35px] font-medium leading-[42px] text-white">ATH</span>
                  <span class="material-symbols-outlined text-[24px] text-white rotate-90" style="font-variation-settings: 'FILL' 1;">flight</span>
                  <span class="text-[35px] font-medium leading-[42px] text-white">FRA</span>
                </div>
                <!-- Terminal/Gate | Cabin | Boarding -->
                <div class="flex justify-between items-start pt-3">
                  <div>
                    <p class="text-[10px] font-medium leading-[12px] text-white">Terminal / Gate</p>
                    <p class="text-[14px] font-light leading-[17px] text-white">1 / A1</p>
                  </div>
                  <div>
                    <p class="text-[11px] font-medium leading-[16px] text-white">Cabin</p>
                    <p class="text-[14px] font-light leading-[17px] text-white">Economy</p>
                  </div>
                  <div>
                    <p class="text-[11px] font-medium leading-[16px] text-white">Boarding</p>
                    <p class="text-[14px] font-light leading-[17px] text-white">Jul 03,<br>12:18 PM</p>
                  </div>
                </div>

                <div class="-mx-2.5 border-b border-white/25 mt-3"></div>

                <!-- Passenger | Group / Seat -->
                <div class="flex justify-between items-start pt-3">
                  <div>
                    <p class="text-[11px] font-medium leading-[16px] text-white">Passenger</p>
                    <p class="text-[14px] font-light leading-[17px] text-white">John Dua</p>
                  </div>
                  <div class="text-right">
                    <p class="text-[11px] font-medium leading-[16px] text-white">Group / Seat</p>
                    <p class="text-[14px] font-light leading-[17px] text-white">A1 / B12</p>
                  </div>
                </div>

                <!-- QR -->
                <div class="mt-5 pt-3 pb-2 flex justify-center">
                  <div class="bg-white rounded-lg p-2.5">
                    <div class="relative w-[125px] h-[125px]">
                      <img class="w-full h-full object-contain" src="barcode-qr.png" alt="QR code">
                    </div>
                  </div>
                </div>
              </div>

              <!-- Full-width strip image -->
              <img class="w-full h-[130px] object-cover" src="coupan-card-google.png" alt="Card strip">
            </div>

            <!-- ============ BACK (Google / white) ============ -->
            <div class="flip-face flip-back w-full rounded-[26px] overflow-hidden shadow-[0_18px_45px_-12px_rgba(0,0,0,0.25)] bg-white text-on-surface">
              <div class="pass-scroll h-full max-h-[585px] overflow-y-auto px-3 pt-3 pb-2.5">
                <!-- Logo -->
                  <span class="w-10 h-10 rounded-full bg-white flex items-center justify-center shrink-0 overflow-hidden p-px">
                    <img class="w-full h-full object-contain" src="favicon-new.png" alt="Logo">
                  </span>

                <h2 class="mt-2.5 text-[22px] font-medium leading-5 text-black mb-4">ATH <span class="text-[15px] font-normal">to</span> FRA</h2>

                <div class="mt-3 space-y-3">
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Position</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Economy</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Sequence</p>
                    <p class="text-xs font-normal leading-[18px] text-black">S55</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Flight Number</p>
                    <p class="text-xs font-normal leading-[18px] text-black">AA 1001</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Confirmation Number</p>
                    <p class="text-xs font-normal leading-[18px] text-black">143</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Ticket Number</p>
                    <p class="text-xs font-normal leading-[18px] text-black">23</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Frequent Flyer Number</p>
                    <p class="text-xs font-normal leading-[18px] text-black">2</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Gate Closes</p>
                    <p class="text-xs font-normal leading-[18px] text-black">03/07/2026 11:48:03</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Scheduled Departure Time</p>
                    <p class="text-xs font-normal leading-[18px] text-black">03/07/2026 12:18:03</p>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-medium leading-[21px] text-black">Learn more</p>
                    <p class="text-xs font-normal leading-[18px] text-black">For more information visit our
                      <a href="https://wepass.io/" class="text-primary underline">Website</a></p>
                  </div>
                </div>

                <!-- Contact pills -->
                <div class="mt-4 space-y-2">
                  <p class="flex items-center gap-2 bg-slate-100 rounded-[10px] leading-[24px] px-3 py-2.5 text-[14px] text-black">
                    <span class="material-symbols-outlined text-[14px] text-[#6a6666]" style="font-variation-settings: 'FILL' 1;">location_on</span> Visit Us
                  </p>
                  <p class="flex items-center gap-2 bg-slate-100 rounded-[10px] leading-[24px] px-3 py-2.5 text-[14px] text-black">
                    <span class="material-symbols-outlined text-[14px] text-[#6a6666]" style="font-variation-settings: 'FILL' 1;">mail</span> E-mail
                  </p>
                  <p class="flex items-center gap-2 bg-slate-100 rounded-[10px] leading-[24px] px-3 py-2.5 text-[14px] text-black">
                    <span class="material-symbols-outlined text-[14px] text-[#6a6666]" style="font-variation-settings: 'FILL' 1;">public</span> Created with Wepass
                  </p>
                </div>
              </div>
            </div>

            </div>
          </div>

        </div>

        <!-- Flip button -->
        <button type="button" data-flip
          class="inline-flex items-center gap-2 rounded-xl border border-primary/30 bg-white mt-10 px-7 py-2.5 text-[15px] font-semibold text-primary shadow-sm hover:bg-primary/5 active:scale-[0.98] transition-all">
          Flip
          <span class="material-symbols-outlined text-[18px]">cached</span>
        </button>

          </div>
          </div>
          <!-- /Boarding Pass Preview -->

          <!-- ============ Loyalty Card Preview ============ -->
          <div class="card-preview hidden" data-card="loyalty">
          <div class="w-full max-w-[350px] mx-auto flex flex-col items-center gap-6">

        <!-- Apple / Google platform tabs -->
        <div class="flex items-center gap-3">
          <button type="button" data-platform="apple"
            class="platform-tab flex items-center gap-2 rounded-full px-5 py-2 text-[15px] font-semibold transition-colors bg-slate-100 text-slate-500">
            <svg class="w-[18px] h-[18px]" viewBox="0 0 384 512" fill="currentColor" aria-hidden="true">
              <path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"/>
            </svg>
            Apple
          </button>
          <button type="button" data-platform="google"
            class="platform-tab flex items-center gap-2 rounded-full px-5 py-2 text-[15px] font-semibold transition-colors bg-slate-100 text-slate-500">
                <svg viewBox="0 0 24 24" class="w-[18px] h-[18px]">
                    <rect x="2.5" y="2" width="19" height="20" rx="2.5" fill="#34A853"></rect>
                    <rect x="2.5" y="4" width="19" height="18" rx="2.5" fill="#FBBC05"></rect>
                    <rect x="2.5" y="6.5" width="19" height="15.5" rx="2.5" fill="#EA4335"></rect>
                    <path d="M2 12.2 C 5.5 10.2 8.5 13.8 12 14 C 15.5 14.2 18.5 10.5 22 10.8 L 22 19.5 Q 22 22 19.5 22 L 4.5 22 Q 2 22 2 19.5 Z" fill="#4285F4"></path>
                </svg>
            Google
          </button>
        </div>

        <!-- Flip card -->
        <div class="w-[320px] flip-perspective">

          <!-- ================= APPLE CARD ================= -->
          <div data-platform-card="apple" class="platform-card w-full h-[481px]">
            <div class="flip-inner w-full">

              <!-- ---------- Apple FRONT (green) ---------- -->
              <div class="flip-face flip-front w-full rounded-[7px] overflow-hidden shadow-[0_18px_45px_-12px_rgba(0,0,0,0.25)] bg-[#92AB25] text-white">
                <!-- Header: logo + loyalty card / title -->
                <div class="flex items-start justify-between px-2.5 py-3 pb-2.5">
                  <div class="flex items-center">
                    <img src="<?= $logoUrl ?>" class="h-8 w-auto object-contain brightness-0 invert mt-0.5" alt="WePASS">
                  </div>
                  <div class="text-right">
                    <p class="text-[9px] font-medium leading-[15px] text-white">LOYALTY CARD</p>
                    <p class="text-[17px] font-medium text-white leading-[20px]">Arke Company</p>
                  </div>
                </div>

                <!-- Brand strip (swap src for the merchant logo artwork) -->
                <!-- <div class="w-full h-[125px] bg-[#f3f8e2] flex items-center justify-center overflow-hidden">
                  <img class="block h-[125px] w-auto object-contain" src="loyalty-card.png" alt="Healthy Rewards">
                </div> -->
                <!-- Strip image -->
                <img class="w-full h-[125px] object-fit" src="loyalty-card.png" alt="Card strip">                

                <!-- Points / Title / Rewards -->
                <div class="flex justify-between items-start px-2.5 pt-2">
                  <div>
                    <p class="text-[10px] font-medium text-white leading-[17px]">POINTS</p>
                    <p class="text-[20px] font-light leading-6 text-white">150</p>
                  </div>
                  <div class="text-center pt-1">
                    <p class="text-[20px] font-light leading-6 text-white">Health Camp</p>
                  </div>
                  <div class="text-right">
                    <p class="text-[10px] font-medium text-white leading-[17px]">REWARDS</p>
                    <p class="text-[20px] font-light leading-6 text-white">200</p>
                  </div>
                </div>

                <!-- QR -->
                <div class="px-4 pt-5 pb-2 mt-3 flex justify-center">
                  <div class="bg-white rounded-lg px-2 pt-2">
                    <div class="relative">
                      <img class="w-[125px] h-[125px] object-contain" src="barcode-qr.png" alt="QR code">
                    </div>
                    <p class="text-center leading-[22px] text-[13px] text-black my-1">1246897531</p>
                  </div>
                </div>
              </div>

              <!-- ---------- Apple BACK (grey) ---------- -->
              <div class="flip-face flip-back w-full rounded-[7px] overflow-hidden shadow-[0_18px_45px_-12px_rgba(0,0,0,0.25)] bg-[#eeeeee] text-black">
                <div class="pass-scroll h-full max-h-[560px] overflow-y-auto px-3 py-3">

                  <!-- Mini card preview (scaled replica of the Apple front: 320 x 0.30625 = 98) -->
                  <div class="flex justify-center pt-2">
                    <div class="overflow-hidden rounded-[7px] w-[98px] h-[72px] shadow-[0_4px_15px_rgba(0,0,0,0.35)]">
                      <div class="w-[320px] scale-[0.30625] origin-top-left bg-[#92AB25] text-white">
                        <!-- header -->
                        <div class="flex items-start justify-between px-2.5 py-3 pb-2.5">
                          <img src="<?= $logoUrl ?>" class="h-8 w-auto object-contain brightness-0 invert mt-0.5" alt="">
                          <div class="text-right">
                            <p class="text-[9px] font-medium leading-[15px] text-white">LOYALTY CARD</p>
                            <p class="text-[17px] font-medium text-white leading-[20px]">Arke Company</p>
                          </div>
                        </div>
                        <!-- brand strip -->
                        <img class="w-full h-[120px] object-fit" src="loyalty-card.png" alt="Card strip">
                        <!-- points / title / rewards -->
                        <div class="flex justify-between items-start px-2.5 pb-5 pt-2">
                          <div>
                            <p class="text-[10px] font-medium text-white leading-[17px]">POINTS</p>
                            <p class="text-[20px] font-light leading-6 text-white">150</p>
                          </div>
                          <div class="text-center pt-1">
                            <p class="text-[20px] font-light leading-6 text-white">Health Camp</p>
                          </div>
                          <div class="text-right">
                            <p class="text-[10px] font-medium text-white leading-[17px]">REWARDS</p>
                            <p class="text-[20px] font-light leading-6 text-white">200</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Title -->
                  <div class="text-center">
                    <h4 class="text-[18px] font-semibold text-black">Arke Company</h4>
                    <span class="text-[#8c8c8c] text-[14px]">Updated 5 seconds ago</span>
                  </div>

                  <!-- Settings toggles -->
                  <div class="bg-white rounded-[10px] mt-4 px-3">
                    <div class="flex items-center justify-between py-2.5">
                      <span class="text-[14px] text-black">Automatic Updates</span>
                      <!-- <div class="block min-h-6 ps-6 mb-0.5"> -->
                        <!-- <input class="w-[1em] h-[1em] mt-1 align-top bg-white bg-no-repeat bg-center bg-contain border border-black/25 no-click" type="checkbox" checked=""> -->
                         <input type="checkbox" class="sr-only peer" checked="">
                         <span class="relative w-8 h-4 rounded-full  peer-checked:!bg-[#34c759] transition-colors after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:h-3 after:w-3 after:rounded-full after:bg-white after:shadow after:transition-all peer-checked:after:translate-x-4"></span>
                      <!-- </div> -->
                    </div>
                    <div class="border-t border-gray-200"></div>
                    <div class="flex items-center justify-between py-2.5">
                      <span class="text-[14px] text-black">Allow Notification</span>
                      <!-- <div class="form-check form-switch m-0 p-0"> -->
                        <!-- <input class="form-check-input no-click" type="checkbox" checked=""> -->
                          <input type="checkbox" class="sr-only peer" checked="">
                          <span class="relative w-8 h-4 rounded-full  peer-checked:!bg-[#34c759] transition-colors after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:h-3 after:w-3 after:rounded-full after:bg-white after:shadow after:transition-all peer-checked:after:translate-x-4"></span>                         
                      <!-- </div> -->
                    </div>
                  </div>

                  <!-- Remove pass -->
                  <div class="bg-white rounded-[10px] mt-2 py-1 px-4">
                    <span class="text-[#ff0000] font-normal text-[12px]">Remove Pass</span>
                  </div>

                  <!-- Detail list -->
                  <div class="bg-white rounded-[10px] mt-3 px-4 divide-y divide-gray-200">
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">MEMBER NAME</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">Arke Company</span>
                    </div>
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">MEMBER ID</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">631488</span>
                    </div>
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">REWARDS TIER</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">123</span>
                    </div>
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">REWARDS</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">200</span>
                    </div>
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Created with Wepass</p>
                      <a href="https://wepass.io/" class="text-[13px] text-primary">Details</a>
                    </div>
                    <div class="py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Learn more</p>
                      <p class="text-[13px] font-normal text-[#8f8888] leading-[20px]">For more information visit our
                        <a href="https://wepass.io/" class="text-primary">Website</a></p>
                    </div>
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Visit Us</p>
                      <a href="https://maps.app.goo.gl/5fNC1UgbTNp2KJvT9" class="text-[13px] text-primary">📍 Store</a>
                    </div>
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">E-mail</p>
                      <a href="mailto:info@wepass.io" class="text-[13px] text-primary">Contact us 📫</a>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>

          <!-- ================= GOOGLE CARD ================= -->
          <div data-platform-card="google" class="platform-card w-full hidden">
            <div class="flip-inner w-full">

            <!-- ============ FRONT (Google / green) ============ -->
            <div class="flip-face flip-front w-full rounded-[25px] overflow-hidden shadow-[0_18px_45px_-12px_rgba(0,0,0,0.25)] bg-[#92AB25] text-white">
              <!-- Logo + title row -->
              <div class="flex items-center px-2.5 pt-3 mb-2.5 pb-2 border-b">
                <span class="w-10 h-10 rounded-full bg-white flex items-center justify-center shrink-0 overflow-hidden p-px">
                  <img class="w-full h-full object-contain" src="favicon-new.png" alt="Logo">
                </span>
                <span class="text-[15px] font-normal leading-10 text-white ms-2.5">Arke Company</span>
              </div>

              <div class="px-2.5 pt-2.5 pb-2.5">
                <h2 class="text-[20px] font-light leading-[30px] text-white">Health Camp</h2>

                <div class="flex gap-12 mt-3 justify-between">
                  <div>
                    <p class="text-[10px] font-medium text-white leading-[17px]">POINTS</p>
                    <p class="text-[14px] font-light leading-[17px] text-white">150</p>
                  </div>
                  <div class="text-right">
                    <p class="text-[10px] font-medium text-white leading-[17px]">REWARDS</p>
                    <p class="text-[14px] font-light leading-[17px] text-white">200</p>
                  </div>
                </div>

                <!-- QR -->
                <div class="mt-5 pt-5 flex justify-center">
                  <div class="bg-white rounded-lg p-2.5">
                    <div class="relative">
                      <img class="w-[125px] h-[125px] object-contain" src="barcode-qr.png" alt="QR code">
                    </div>
                  </div>
                </div>
                <p class="mt-2.5 text-center text-[13px] font-normal leading-[22px] text-white">1246897531</p>
              </div>

              <!-- Brand strip -->
              <!-- <div class="w-full h-[125px] bg-[#f3f8e2] flex items-center justify-center overflow-hidden">
                <img class="block h-auto w-auto object-contain" src="loyalty-card.png" alt="Healthy Rewards">
              </div> -->
                  <!-- brand strip -->
                  <img class="w-full h-auto object-fit" src="loyalty-card.png" alt="Card strip">
            </div>

            <!-- ============ BACK (Google / white) ============ -->
            <div class="flip-face flip-back w-full rounded-[26px] overflow-hidden shadow-[0_18px_45px_-12px_rgba(0,0,0,0.25)] bg-white text-on-surface">
              <div class="pass-scroll h-full max-h-[585px] overflow-y-auto px-3 pt-3 pb-2.5">
                <!-- Logo -->
                <span class="inline-flex w-10 h-10 items-center justify-center ">
                  <img class="w-9 h-9 object-contain" src="favicon-new.png" alt="Logo">
                </span>

                <h2 class="mt-2.5 text-[22px] font-medium leading-[26px] text-black mb-4">Health Camp</h2>

                <div class="mt-3 space-y-3">
                  <div class="mt-3">
                    <p class="text-sm font-medium leading-[21px] text-black">Updated</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Jun 30, 2026, 06:17 AM</p>
                  </div>
                  <div class="mt-3">
                    <p class="text-sm font-medium leading-[21px] text-black">MEMBER NAME</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Arke Company</p>
                  </div>
                  <div class="mt-3">
                    <p class="text-sm font-medium leading-[21px] text-black">MEMBER ID</p>
                    <p class="text-xs font-normal leading-[18px] text-black">631488</p>
                  </div>
                </div>

                <!-- Hero image -->
                <div class="relative mt-2 overflow-hidden mt-3">
                  <!-- <div class="w-full h-[125px] bg-[#f3f8e2] flex items-center justify-center overflow-hidden">
                    <img class="block h-[125px] w-auto object-contain" src="loyalty-card.png" alt="Card hero">
                  </div> -->
                                          <!-- brand strip -->
                        <img class="w-full h-[120px] object-fit" src="loyalty-card.png" alt="Card strip">
                </div>

                <div class="mt-3 space-y-3">
                  <div class="mt-3">
                    <p class="text-sm font-medium leading-[21px] text-black">REWARDS TIER</p>
                    <p class="text-xs font-normal leading-[18px] text-black">123</p>
                  </div>
                  <div class="mt-3">
                    <p class="text-sm font-medium leading-[21px] text-black">REWARDS</p>
                    <p class="text-xs font-normal leading-[18px] text-black">200</p>
                  </div>
                  <div class="mt-3">
                    <p class="text-sm font-medium leading-[21px] text-black">Learn more</p>
                    <p class="text-xs font-normal leading-[18px] text-black">For more information visit our
                      <a href="https://wepass.io/" class="text-primary underline">Website</a></p>
                  </div>
                </div>

                <!-- Contact pills -->
                <div class="mt-4 space-y-2">
                  <p class="flex items-center gap-2 bg-slate-100 rounded-[10px] leading-[24px] px-3 py-2.5 text-[14px] text-black">
                    <span class="material-symbols-outlined text-[14px] text-[#6a6666]" style="font-variation-settings: 'FILL' 1;">location_on</span> Visit Us
                  </p>
                  <p class="flex items-center gap-2 bg-slate-100 rounded-[10px] leading-[24px] px-3 py-2.5 text-[14px] text-black">
                    <span class="material-symbols-outlined text-[14px] text-[#6a6666]" style="font-variation-settings: 'FILL' 1;">mail</span> E-mail
                  </p>
                  <p class="flex items-center gap-2 bg-slate-100 rounded-[10px] leading-[24px] px-3 py-2.5 text-[14px] text-black">
                    <span class="material-symbols-outlined text-[14px] text-[#6a6666]" style="font-variation-settings: 'FILL' 1;">public</span> Created with Wepass
                  </p>
                </div>
              </div>
            </div>

            </div>
          </div>

        </div>

        <!-- Flip button -->
        <button type="button" data-flip
          class="inline-flex items-center gap-2 rounded-xl border border-primary/30 bg-white mt-10 px-7 py-2.5 text-[15px] font-semibold text-primary shadow-sm hover:bg-primary/5 active:scale-[0.98] transition-all">
          Flip
          <span class="material-symbols-outlined text-[18px]">cached</span>
        </button>

          </div>
          </div>
          <!-- /Loyalty Card Preview -->

          <!-- ============ Loyalty Card 4 Field Preview ============ -->
          <div class="card-preview hidden" data-card="loyalty-4filed">
          <div class="w-full max-w-[350px] mx-auto flex flex-col items-center gap-6">

        <!-- Apple / Google platform tabs -->
        <div class="flex items-center gap-3">
          <button type="button" data-platform="apple"
            class="platform-tab flex items-center gap-2 rounded-full px-5 py-2 text-[15px] font-semibold transition-colors bg-slate-100 text-slate-500">
            <svg class="w-[18px] h-[18px]" viewBox="0 0 384 512" fill="currentColor" aria-hidden="true">
              <path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"/>
            </svg>
            Apple
          </button>
          <button type="button" data-platform="google"
            class="platform-tab flex items-center gap-2 rounded-full px-5 py-2 text-[15px] font-semibold transition-colors bg-slate-100 text-slate-500">
                <svg viewBox="0 0 24 24" class="w-[18px] h-[18px]">
                    <rect x="2.5" y="2" width="19" height="20" rx="2.5" fill="#34A853"></rect>
                    <rect x="2.5" y="4" width="19" height="18" rx="2.5" fill="#FBBC05"></rect>
                    <rect x="2.5" y="6.5" width="19" height="15.5" rx="2.5" fill="#EA4335"></rect>
                    <path d="M2 12.2 C 5.5 10.2 8.5 13.8 12 14 C 15.5 14.2 18.5 10.5 22 10.8 L 22 19.5 Q 22 22 19.5 22 L 4.5 22 Q 2 22 2 19.5 Z" fill="#4285F4"></path>
                </svg>
            Google
          </button>
        </div>

        <!-- Flip card -->
        <div class="w-[320px] flip-perspective">

          <!-- ================= APPLE CARD ================= -->
          <div data-platform-card="apple" class="platform-card w-full h-[481px]">
            <div class="flip-inner w-full">

              <!-- ---------- Apple FRONT (green) ---------- -->
              <div class="flip-face flip-front w-full rounded-[7px] overflow-hidden shadow-[0_18px_45px_-12px_rgba(0,0,0,0.25)] bg-[#92AB25] text-white">
                <!-- Header: logo + loyalty card / title -->
                <div class="flex items-start justify-between px-2.5 py-3 pb-2.5">
                  <div class="flex items-center">
                    <img src="<?= $logoUrl ?>" class="h-8 w-auto object-contain brightness-0 invert mt-0.5" alt="WePASS">
                  </div>
                  <div class="text-right">
                    <p class="text-[9px] font-medium leading-[15px] text-white">LOYALTY CARD</p>
                    <p class="text-[17px] font-medium text-white leading-[20px]">Arke Company</p>
                  </div>
                </div>

                <!-- Brand strip (swap src for the merchant logo artwork) -->
                <!-- <div class="w-full h-[125px] bg-[#f3f8e2] flex items-center justify-center overflow-hidden">
                  <img class="block h-[125px] w-auto object-contain" src="loyalty-card.png" alt="Healthy Rewards">
                </div> -->
                <!-- Strip image -->
                <img class="w-full h-[125px] object-fit" src="loyalty-card.png" alt="Card strip">                

                <!-- fields -->
                <div class="px-2.5 pt-2">
                  <div class="flex justify-between items-start">
                    <div>
                      <p class="text-[9px] font-medium text-white leading-[15px]">MEMBER NAME</p>
                      <p class="text-[14px] font-light leading-[17px] text-white">Monil Veknde</p>
                    </div>
                    <div>
                      <p class="text-[9px] font-medium text-white leading-[15px]">MEMBER ID</p>
                      <p class="text-[14px] font-light leading-[17px] text-white">125GG12</p>
                    </div>
                    <div>
                      <p class="text-[9px] font-medium text-white leading-[15px]">POINTS</p>
                      <p class="text-[14px] font-light leading-[17px] text-white">150</p>
                    </div>                  
                  </div>
                  <div class="pt-2">
                    <p class="text-[9px] font-medium text-white leading-[15px]">EXPIRATION</p>
                    <p class="text-[14px] font-light leading-[17px] text-white">01/08/2026 05:56:16</p>
                  </div>
                </div>

                <!-- QR -->
                <div class="px-4 pt-5 pb-2 mt-3 flex justify-center">
                  <div class="bg-white rounded-lg px-2 pt-2">
                    <div class="relative">
                      <img class="w-[125px] h-[125px] object-contain" src="barcode-qr.png" alt="QR code">
                    </div>
                    <p class="text-center leading-[22px] text-[13px] text-black my-1">1246897531</p>
                  </div>
                </div>
              </div>

              <!-- ---------- Apple BACK (grey) ---------- -->
              <div class="flip-face flip-back w-full rounded-[7px] overflow-hidden shadow-[0_18px_45px_-12px_rgba(0,0,0,0.25)] bg-[#eeeeee] text-black">
                <div class="pass-scroll h-full max-h-[560px] overflow-y-auto px-3 py-3">

                  <!-- Mini card preview (scaled replica of the Apple front: 320 x 0.30625 = 98) -->
                  <div class="flex justify-center pt-2">
                    <div class="overflow-hidden rounded-[7px] w-[98px] h-[72px] shadow-[0_4px_15px_rgba(0,0,0,0.35)]">
                      <div class="w-[320px] scale-[0.30625] origin-top-left bg-[#92AB25] text-white">
                        <!-- header -->
                        <div class="flex items-start justify-between px-2.5 py-3 pb-2.5">
                          <img src="<?= $logoUrl ?>" class="h-8 w-auto object-contain brightness-0 invert mt-0.5" alt="">
                          <div class="text-right">
                            <p class="text-[9px] font-medium leading-[15px] text-white">LOYALTY CARD</p>
                            <p class="text-[17px] font-medium text-white leading-[20px]">Arke Company</p>
                          </div>
                        </div>
                        <!-- brand strip -->
                        <img class="w-full h-[120px] object-fit" src="loyalty-card.png" alt="Card strip">
                        <!-- points / title / rewards -->
                        <div class="flex justify-between items-start px-2.5 pb-5 pt-2">
                          <div>
                            <p class="text-[10px] font-medium text-white leading-[17px]">POINTS</p>
                            <p class="text-[20px] font-light leading-6 text-white">150</p>
                          </div>
                          <div class="text-center pt-1">
                            <p class="text-[20px] font-light leading-6 text-white">Health Camp</p>
                          </div>
                          <div class="text-right">
                            <p class="text-[10px] font-medium text-white leading-[17px]">REWARDS</p>
                            <p class="text-[20px] font-light leading-6 text-white">200</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Title -->
                  <div class="text-center">
                    <h4 class="text-[18px] font-semibold text-black">Arke Company</h4>
                    <span class="text-[#8c8c8c] text-[14px]">Updated 5 seconds ago</span>
                  </div>

                  <!-- Settings toggles -->
                  <div class="bg-white rounded-[10px] mt-4 px-3">
                    <div class="flex items-center justify-between py-2.5">
                      <span class="text-[14px] text-black">Automatic Updates</span>
                      <!-- <div class="block min-h-6 ps-6 mb-0.5"> -->
                        <!-- <input class="w-[1em] h-[1em] mt-1 align-top bg-white bg-no-repeat bg-center bg-contain border border-black/25 no-click" type="checkbox" checked=""> -->
                         <input type="checkbox" class="sr-only peer" checked="">
                         <span class="relative w-8 h-4 rounded-full  peer-checked:!bg-[#34c759] transition-colors after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:h-3 after:w-3 after:rounded-full after:bg-white after:shadow after:transition-all peer-checked:after:translate-x-4"></span>
                      <!-- </div> -->
                    </div>
                    <div class="border-t border-gray-200"></div>
                    <div class="flex items-center justify-between py-2.5">
                      <span class="text-[14px] text-black">Allow Notification</span>
                      <!-- <div class="form-check form-switch m-0 p-0"> -->
                        <!-- <input class="form-check-input no-click" type="checkbox" checked=""> -->
                          <input type="checkbox" class="sr-only peer" checked="">
                          <span class="relative w-8 h-4 rounded-full  peer-checked:!bg-[#34c759] transition-colors after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:h-3 after:w-3 after:rounded-full after:bg-white after:shadow after:transition-all peer-checked:after:translate-x-4"></span>
                      <!-- </div> -->
                    </div>
                  </div>

                  <!-- Remove pass -->
                  <div class="bg-white rounded-[10px] mt-2 py-1 px-4">
                    <span class="text-[#ff0000] font-normal text-[12px]">Remove Pass</span>
                  </div>

                  <!-- Detail list -->
                  <div class="bg-white rounded-[10px] mt-3 px-4 divide-y divide-gray-200">
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">MEMBER NAME</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">Arke Company</span>
                    </div>
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">MEMBER ID</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">631488</span>
                    </div>
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">REWARDS TIER</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">123</span>
                    </div>
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">REWARDS</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">200</span>
                    </div>
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Message1 Label:</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">Message1 Value:</span>
                    </div>
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Message2 Label:</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">Message2 Value:</span>
                    </div>
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Message3 Label:</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">Message3 Value:</span>
                    </div>
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Message4 Label:</p>
                      <span class="text-[13px] font-normal text-[#8f8888] leading-[20px]">Message4 Value:</span>
                    </div>                                                                                
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Created with Wepass</p>
                      <a href="https://wepass.io/" class="text-[13px] text-primary">Details</a>
                    </div>
                    <div class="py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Learn more</p>
                      <p class="text-[13px] font-normal text-[#8f8888] leading-[20px]">For more information visit our
                        <a href="https://wepass.io/" class="text-primary">Website</a></p>
                    </div>
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">Visit Us</p>
                      <a href="https://maps.app.goo.gl/5fNC1UgbTNp2KJvT9" class="text-[13px] text-primary">📍 Store</a>
                    </div>
                    <div class="flex items-center justify-between gap-3 py-1.5">
                      <p class="text-[13px] leading-[22px] text-black">E-mail</p>
                      <a href="mailto:info@wepass.io" class="text-[13px] text-primary">Contact us 📫</a>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>

          <!-- ================= GOOGLE CARD ================= -->
          <div data-platform-card="google" class="platform-card w-full hidden">
            <div class="flip-inner w-full">

            <!-- ============ FRONT (Google / green) ============ -->
            <div class="flip-face flip-front w-full rounded-[25px] overflow-hidden shadow-[0_18px_45px_-12px_rgba(0,0,0,0.25)] bg-[#92AB25] text-white">
              <!-- Logo + title row -->
              <div class="flex items-center px-2.5 pt-3 mb-2.5 pb-2 border-b">
                <span class="w-10 h-10 rounded-full bg-white flex items-center justify-center shrink-0 overflow-hidden p-px">
                  <img class="w-full h-full object-contain" src="favicon-new.png" alt="Logo">
                </span>
                <span class="text-[15px] font-normal leading-10 text-white ms-2.5">Arke Company</span>
              </div>

              <div class="px-2.5 pt-2.5 pb-2.5">
                <h2 class="text-[20px] font-light leading-[30px] text-white">Health Camp</h2>

                <div class="flex gap-12 mt-3 justify-between">
                  <div>
                    <p class="text-[10px] font-medium text-white leading-[17px]">POINTS</p>
                    <p class="text-[14px] font-light leading-[17px] text-white">150</p>
                  </div>
                  <div class="text-right">
                    <p class="text-[10px] font-medium text-white leading-[17px]">REWARDS</p>
                    <p class="text-[14px] font-light leading-[17px] text-white">200</p>
                  </div>
                </div>

                <!-- QR -->
                <div class="mt-5 pt-5 flex justify-center">
                  <div class="bg-white rounded-lg p-2.5">
                    <div class="relative ">
                      <img class="w-[125px] h-[125px] object-contain" src="barcode-qr.png" alt="QR code">
                    </div>
                  </div>
                </div>
                <p class="mt-2.5 text-center text-[13px] font-normal leading-[22px] text-white">1246897531</p>
              </div>

              <!-- Brand strip -->
              <!-- <div class="w-full h-[125px] bg-[#f3f8e2] flex items-center justify-center overflow-hidden">
                <img class="block h-auto w-auto object-contain" src="loyalty-card.png" alt="Healthy Rewards">
              </div> -->
                  <!-- brand strip -->
                  <img class="w-full h-auto object-fit" src="loyalty-card.png" alt="Card strip">
            </div>

            <!-- ============ BACK (Google / white) ============ -->
            <div class="flip-face flip-back w-full rounded-[26px] overflow-hidden shadow-[0_18px_45px_-12px_rgba(0,0,0,0.25)] bg-white text-on-surface">
              <div class="pass-scroll h-full max-h-[585px] overflow-y-auto px-3 pt-3 pb-2.5">
                <!-- Logo -->
                <span class="inline-flex w-10 h-10 items-center justify-center ">
                  <img class="w-9 h-9 object-contain" src="favicon-new.png" alt="Logo">
                </span>

                <h2 class="mt-2.5 text-[22px] font-medium leading-[26px] text-black mb-4">Health Camp</h2>

                <div class="mt-3 space-y-3">
                  <div class="mt-3">
                    <p class="text-sm font-medium leading-[21px] text-black">Updated</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Jun 30, 2026, 06:17 AM</p>
                  </div>
                  <div class="mt-3">
                    <p class="text-sm font-medium leading-[21px] text-black">MEMBER NAME</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Arke Company</p>
                  </div>
                  <div class="mt-3">
                    <p class="text-sm font-medium leading-[21px] text-black">MEMBER ID</p>
                    <p class="text-xs font-normal leading-[18px] text-black">631488</p>
                  </div>
                </div>

                <!-- Hero image -->
                <div class="relative mt-2 overflow-hidden mt-3">
                  <!-- <div class="w-full h-[125px] bg-[#f3f8e2] flex items-center justify-center overflow-hidden">
                    <img class="block h-[125px] w-auto object-contain" src="loyalty-card.png" alt="Card hero">
                  </div> -->
                                          <!-- brand strip -->
                        <img class="w-full h-[120px] object-fit" src="loyalty-card.png" alt="Card strip">
                </div>

                <div class="mt-3 space-y-3">
                  <div class="mt-3">
                    <p class="text-sm font-medium leading-[21px] text-black">REWARDS TIER</p>
                    <p class="text-xs font-normal leading-[18px] text-black">123</p>
                  </div>
                  <div class="mt-3">
                    <p class="text-sm font-medium leading-[21px] text-black">REWARDS</p>
                    <p class="text-xs font-normal leading-[18px] text-black">200</p>
                  </div>
                  <div class="mt-3">
                    <p class="text-sm font-medium leading-[21px] text-black">Message1 Label:</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Message1 Value:</p>
                  </div>
                  <div class="mt-3">
                    <p class="text-sm font-medium leading-[21px] text-black">Message2 Label:</p>
                    <param class="text-xs font-normal leading-[18px] text-black">Message2 Value:</p>
                  </div>
                  <div class="mt-3">
                    <p class="text-sm font-medium leading-[21px] text-black">Message3 Label:</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Message3 Value:</p>
                  </div>
                  <div class="mt-3">
                    <p class="text-sm font-medium leading-[21px] text-black">Message4 Label:</p>
                    <p class="text-xs font-normal leading-[18px] text-black">Message4 Value:</p>
                  </div>                   
                  <div class="mt-3">
                    <p class="text-sm font-medium leading-[21px] text-black">Learn more</p>
                    <p class="text-xs font-normal leading-[18px] text-black">For more information visit our
                      <a href="https://wepass.io/" class="text-primary underline">Website</a></p>
                  </div>
                </div>

                <!-- Contact pills -->
                <div class="mt-4 space-y-2">
                  <p class="flex items-center gap-2 bg-slate-100 rounded-[10px] leading-[24px] px-3 py-2.5 text-[14px] text-black">
                    <span class="material-symbols-outlined text-[14px] text-[#6a6666]" style="font-variation-settings: 'FILL' 1;">location_on</span> Visit Us
                  </p>
                  <p class="flex items-center gap-2 bg-slate-100 rounded-[10px] leading-[24px] px-3 py-2.5 text-[14px] text-black">
                    <span class="material-symbols-outlined text-[14px] text-[#6a6666]" style="font-variation-settings: 'FILL' 1;">mail</span> E-mail
                  </p>
                  <p class="flex items-center gap-2 bg-slate-100 rounded-[10px] leading-[24px] px-3 py-2.5 text-[14px] text-black">
                    <span class="material-symbols-outlined text-[14px] text-[#6a6666]" style="font-variation-settings: 'FILL' 1;">public</span> Created with Wepass
                  </p>
                </div>
              </div>
            </div>

            </div>
          </div>

        </div>

        <!-- Flip button -->
        <button type="button" data-flip
          class="inline-flex items-center gap-2 rounded-xl border border-primary/30 bg-white mt-10 px-7 py-2.5 text-[15px] font-semibold text-primary shadow-sm hover:bg-primary/5 active:scale-[0.98] transition-all">
          Flip
          <span class="material-symbols-outlined text-[18px]">cached</span>
        </button>

          </div>
          </div>
          <!-- /Loyalty Card 4 Field Preview -->

        </div><!-- /Preview Panel -->
      </div><!-- /Card Preview Layout -->
    </section>
    <?php include('footer.php'); ?>
  </main>
  <!-- Micro-interaction Scripts -->
   <?php include('script.php'); ?>


  <!-- Card Preview: flip behaviour (scoped per .card-preview so multiple previews work) -->
  <script>
    (function () {
      document.querySelectorAll('.card-preview').forEach(function (root) {
        var flipBtn = root.querySelector('[data-flip]');
        var tabs = root.querySelectorAll('.platform-tab');
        var cards = {
          apple: root.querySelector('[data-platform-card="apple"]'),
          google: root.querySelector('[data-platform-card="google"]')
        };
        if (!flipBtn || !cards.apple || !cards.google) return;

        var current = 'apple';
        var order = { apple: 0, google: 1 };

        function paintTabs(platform) {
          tabs.forEach(function (t) {
            var active = t.dataset.platform === platform;
            // Active: white pill + dark text + colored ring (logos read clearly)
            t.classList.toggle('bg-primary/20', active);
            t.classList.toggle('text-slate-900', active);
            t.classList.toggle('shadow-sm', active);
            t.classList.toggle('ring-1', active);
            t.classList.toggle('ring-primary/50', active);
            // Inactive: light grey pill + muted text
            t.classList.toggle('bg-slate-100', !active);
            t.classList.toggle('text-slate-500', !active);
          });
        }

        function showPlatform(platform) {
          if (platform === current) return;
          // Direction: moving to a tab on the right slides in from the right, and vice versa
          var goingRight = order[platform] > order[current];
          current = platform;
          Object.keys(cards).forEach(function (key) {
            var card = cards[key];
            var show = key === platform;
            card.classList.toggle('hidden', !show);
            // reset each card to its front face
            card.querySelector('.flip-inner').classList.remove('is-flipped');
            card.classList.remove('slide-in-right', 'slide-in-left');
            if (show) {
              // restart the animation
              void card.offsetWidth;
              card.classList.add(goingRight ? 'slide-in-right' : 'slide-in-left');
            }
          });
          paintTabs(platform);
        }

        flipBtn.addEventListener('click', function () {
          var inner = cards[current].querySelector('.flip-inner');
          inner.classList.toggle('is-flipped');
        });

        tabs.forEach(function (t) {
          t.addEventListener('click', function () { showPlatform(t.dataset.platform); });
        });

        // Initial state (no animation on first load)
        paintTabs('apple');
      });
    })();
  </script>

  <!-- Card Preview: menu selection -->
  <script>
    (function () {
      var menuItems = document.querySelectorAll('.card-menu-item');
      var previews = document.querySelectorAll('.card-preview');
      var prompt = document.getElementById('cardPrompt');
      if (!menuItems.length) return;

      function selectCard(key) {
        // Toggle preview panels
        var matched = false;
        previews.forEach(function (p) {
          var show = p.dataset.card === key;
          p.classList.toggle('hidden', !show);
          if (show) matched = true;
        });
        if (prompt) prompt.classList.toggle('hidden', matched);

        // Highlight active menu item
        menuItems.forEach(function (item) {
          var active = item.dataset.card === key;
          item.classList.toggle('is-active', active);
          item.classList.toggle('bg-primary/10', active);
          item.classList.toggle('text-primary', active);
        });
      }

      menuItems.forEach(function (item) {
        item.addEventListener('click', function () { selectCard(item.dataset.card); });
      });
    })();
  </script>

  <!-- Generic Pass: barcode type switcher -->
  <script>
    (function () {
      var generic = document.querySelector('.card-preview[data-card="generic"]');
      if (!generic) return;

      var TYPES = {
        qr:      { src: 'barcode-qr.png',      w: 150, h: 150 },
        aztec:   { src: 'barcode-aztec.svg',   w: 150, h: 150 },
        pdf417:  { src: 'barcode-pdf417.png',  w: 250, h: 80 },
        code128: { src: 'barcode-code128.png', w: 250, h: 70 }
      };

      var tabs = generic.querySelectorAll('.barcode-tab');
      var imgs = generic.querySelectorAll('.barcode-img');

      function selectBarcode(type) {
        var t = TYPES[type];
        if (!t) return;
        imgs.forEach(function (img) {
          img.src = t.src;
          img.style.width = t.w + 'px';
          img.style.height = t.h + 'px';
        });
        tabs.forEach(function (b) {
          var active = b.dataset.barcode === type;
          b.classList.toggle('bg-primary', active);
          b.classList.toggle('text-white', active);
          b.classList.toggle('bg-slate-100', !active);
          b.classList.toggle('text-slate-500', !active);
        });
      }

      tabs.forEach(function (b) {
        b.addEventListener('click', function () { selectBarcode(b.dataset.barcode); });
      });
    })();
  </script>
</body>
 
</html>