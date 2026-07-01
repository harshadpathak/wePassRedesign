<!DOCTYPE html>
<html class="light" lang="en">

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
            <span class="material-symbols-outlined text-[14px] text-gray">home</span> <span class="text-gray font-normal">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray-500 font-normal">Mail Templates</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Mail Templates</h2>
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
                    <h3 class="text-headline-md font-bold text-on-surface tracking-tight">About Mail Templates</h3>
                    <p class="text-body-md text-gray-400 leading-relaxed">Customize and manage email templates for each pass type. Set subject lines, sender titles, body content, and upload a branded logo for your email header.</p>
                    <!-- Steps -->
                    <div class="bg-primary/5 rounded-2xl p-2 flex flex-wrap items-center gap-3 mt-4">
                        <!-- Step 1 -->
                        <div
                            class="flex items-center gap-2.5 bg-white rounded-full pl-2.5 pr-5 py-2 shadow-sm border border-outline-variant/40 transition-transform">
                            <span class="material-symbols-outlined text-emerald-500 text-[22px]"
                                style="font-variation-settings: 'FILL' 1;">check_circle</span>
                            <span class="text-body-md font-bold text-gray-600">Mail Logo</span>
                        </div>
                        <!-- Step 2 -->
                        <div
                            class="flex items-center gap-2.5 bg-white rounded-full pl-2.5 pr-5 py-2 shadow-sm border border-outline-variant/40 transition-transform">
                            <span class="material-symbols-outlined text-emerald-500 text-[22px]"
                                style="font-variation-settings: 'FILL' 1;">check_circle</span>
                            <span class="text-body-md font-bold text-gray-600">Subject & Sender</span>
                        </div>
                        <!-- Step 3 -->
                        <div
                            class="flex items-center gap-2.5 bg-white rounded-full pl-2.5 pr-5 py-2 shadow-sm border border-outline-variant/40 transition-transform">
                            <span class="material-symbols-outlined text-emerald-500 text-[22px]"
                                style="font-variation-settings: 'FILL' 1;">check_circle</span>
                            <span class="text-body-md font-bold text-gray-600">Email Body</span>
                        </div>
                        <!-- Step 4 -->
                        <div
                            class="flex items-center gap-2.5 bg-white rounded-full pl-2.5 pr-5 py-2 shadow-sm border border-outline-variant/40 transition-transform">
                            <span class="material-symbols-outlined text-emerald-500 text-[22px]"
                                style="font-variation-settings: 'FILL' 1;">check_circle</span>
                            <span class="text-body-md font-bold text-gray-600">Download Button</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
          // Mail logo asset shown in the "Mail Logo" panel preview
          $mailLogo = 'https://drojrh3mlpzqs.cloudfront.net/9eda0c24-7ef8-4597-8d97-91cfa2d4d7d8/adminTheme/assets/images/logo-new.png';

          // Template categories rendered as the left navigation + matching content panels.
          // type: logo | template | footer  controls which editor body is shown.
          $mailTabs = [
            ['id' => 'mail-logo',       'label' => 'Mail Logo',       'icon' => 'image',                'type' => 'logo'],
            ['id' => 'gift-card',       'label' => 'Gift Card',       'icon' => 'redeem',               'type' => 'template'],
            ['id' => 'boarding-pass',   'label' => 'Boarding Pass',   'icon' => 'flight',               'type' => 'template'],
            ['id' => 'coupon',          'label' => 'Coupon',          'icon' => 'sell',                 'type' => 'template'],
            ['id' => 'event-ticket',    'label' => 'Event Ticket',    'icon' => 'confirmation_number',  'type' => 'template'],
            ['id' => 'loyalty-card',    'label' => 'Loyalty Card',    'icon' => 'favorite',             'type' => 'template'],
            ['id' => 'generic-pass',    'label' => 'Generic Pass',    'icon' => 'badge',                'type' => 'template'],
            ['id' => 'membership-card', 'label' => 'Membership Card', 'icon' => 'groups',               'type' => 'template'],
            ['id' => 'insurance-pass',  'label' => 'Insurance Pass',  'icon' => 'shield',               'type' => 'template'],
            ['id' => 'business-card',   'label' => 'Business Card',   'icon' => 'business_center',       'type' => 'template'],
            ['id' => 'warranty-pass',   'label' => 'Warranty Pass',   'icon' => 'workspace_premium',    'type' => 'template'],
            ['id' => 'loyalty-tier',    'label' => 'Loyalty Tier',    'icon' => 'emoji_events',         'type' => 'template'],
            ['id' => 'mail-footer',     'label' => 'Mail Footer',     'icon' => 'article',              'type' => 'footer'],
          ];
        ?>

        <!-- Mail Templates Editor -->
        <div class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
          <!-- Card header -->
          <div class="flex items-center gap-2.5 px-6 py-5 border-b border-outline-variant/70">
            <span class="w-9 h-9 rounded-xl bg-primary/10 flex items-center justify-center text-primary shrink-0">
              <span class="material-symbols-outlined text-[20px]">mail</span>
            </span>
            <h3 class="text-headline-md font-bold text-on-surface">Mail Templates</h3>
          </div>

          <div class="flex flex-col lg:flex-row">
            <!-- Left tab navigation -->
            <?php
              // Split the flat tab list into sections for the grouped sidebar.
              $generalTabs = array_filter($mailTabs, fn ($t) => $t['type'] !== 'template');
              $templateTabs = array_filter($mailTabs, fn ($t) => $t['type'] === 'template');

              // Renders a single tab button. The very first tab ('mail-logo') starts active.
              $renderTab = function (array $tab): void {
                $active = $tab['id'] === 'mail-logo';
                ?>
                <button type="button" data-tab="<?php echo $tab['id']; ?>"
                  class="mail-tab group relative w-full flex items-center gap-3 rounded-xl px-3.5 py-2.5 text-left text-body-md font-semibold transition-all
                    <?php echo $active
                      ? 'bg-primary/10 text-primary'
                      : 'text-secondary hover:bg-surface-container-high hover:text-on-surface'; ?>"
                  aria-selected="<?php echo $active ? 'true' : 'false'; ?>">
                  <span class="mail-tab-accent absolute left-0 top-1/2 -translate-y-1/2 w-1 rounded-r-full transition-all <?php echo $active ? 'h-6 bg-primary' : 'h-0 bg-primary/50 group-hover:h-6'; ?>"></span>
                  <span class="material-symbols-outlined text-[20px] shrink-0"><?php echo $tab['icon']; ?></span>
                  <span class="truncate"><?php echo $tab['label']; ?></span>
                </button>
                <?php
              };
            ?>
            <nav id="mail-tabs" class="lg:w-72 shrink-0 border-b lg:border-b-0 lg:border-r border-outline-variant/70 p-3 lg:p-4 bg-surface-container-low/40 flex flex-col gap-4">
              <!-- General: logo + footer -->
              <div class="space-y-1">
                <p class="px-3.5 pt-1 pb-1.5 text-label-sm font-bold tracking-wide text-outline uppercase">General</p>
                <?php foreach ($generalTabs as $tab) { $renderTab($tab); } ?>
              </div>

              <!-- Pass templates: scrollable group -->
              <div class="space-y-1 min-w-0">
                <div class="flex items-center justify-between px-3.5 pt-1 pb-1.5">
                  <p class="text-label-sm font-bold tracking-wide text-outline uppercase">Pass Templates</p>
                  <span class="inline-flex items-center justify-center min-w-5 h-5 px-1.5 rounded-full bg-primary/10 text-primary text-label-sm font-bold"><?php echo count($templateTabs); ?></span>
                </div>
                <div class="space-y-1 pr-1.5">
                  <?php foreach ($templateTabs as $tab) { $renderTab($tab); } ?>
                </div>
              </div>
            </nav>

            <!-- Content panels -->
            <div class="flex-1 min-w-0 p-6 lg:p-8">
              <?php foreach ($mailTabs as $i => $tab): $active = $i === 0; ?>
                <form class="mail-panel <?php echo $active ? '' : 'hidden'; ?>" data-panel="<?php echo $tab['id']; ?>">
                  <!-- Panel header -->
                  <div class="flex items-center gap-2.5 pb-4 mb-4 border-b border-outline-variant/70">
                    <span class="material-symbols-outlined text-[22px] text-primary"><?php echo $tab['icon']; ?></span>
                    <h4 class="text-headline-md font-bold text-on-surface"><?php echo $tab['type'] === 'template' ? $tab['label'] : $tab['label']; ?></h4>
                  </div>

                  <?php if ($tab['type'] === 'logo'): ?>
                    <!-- Mail Logo: live in-context email preview + editor -->
                    <div class="grid grid-cols-1 lg:grid-cols-[0.85fr_1.15fr] gap-6 items-start">

                      <!-- Editor controls -->
                      <div class="space-y-4">
                        <div>
                          <label class="text-on-surface font-semibold text-label-md">Logo Image</label>
                          <p class="text-label-md text-gray-400 mt-1">This appears at the top of every email you send.</p>
                        </div>

                        <input id="logo-input" type="file" accept="image/png,image/svg+xml,image/jpeg" class="hidden">

                        <div class="flex flex-wrap gap-2.5">
                          <label for="logo-input"
                            class="inline-flex items-center gap-2 cursor-pointer rounded-lg bg-primary px-4 py-2.5 text-label-md font-bold text-white shadow-sm shadow-primary/20 hover:opacity-95 active:scale-[0.98] transition-all">
                            <span class="material-symbols-outlined text-[18px]">upload</span>
                            Upload Logo
                          </label>
                        </div>

                        <!-- Spec list -->
                        <div class="rounded-xl border border-outline-variant bg-surface-container-low/50 divide-y divide-outline-variant/70 text-label-md">
                          <div class="flex items-center justify-between px-4 py-2.5">
                            <span class="text-on-surface-variant">Recommended size</span>
                            <span class="font-bold text-on-surface">400 × 120 px</span>
                          </div>
                          <div class="flex items-center justify-between px-4 py-2.5">
                            <span class="text-on-surface-variant">Formats</span>
                            <span class="font-bold text-on-surface">PNG · JPEG · JPG</span>
                          </div>
                          <div class="flex items-center justify-between px-4 py-2.5">
                            <span class="text-on-surface-variant">Max file size</span>
                            <span class="font-bold text-on-surface">2 MB</span>
                          </div>
                        </div>
                        <p class="flex items-start gap-1.5 text-label-md text-gray-400">
                          <span class="material-symbols-outlined text-[15px] text-emerald-600 shrink-0">tips_and_updates</span>
                          Use a transparent background so the logo blends with the email header.
                        </p>
                      </div>

                      <!-- Live email preview -->
                      <div>
                        <div class="flex items-center gap-2 mb-2.5">
                          <span class="material-symbols-outlined text-[18px] text-outline">visibility</span>
                          <span class="text-label-md font-bold tracking-wide text-outline uppercase">Live Preview</span>
                        </div>
                        <div class="rounded-2xl border border-outline-variant overflow-hidden shadow-sm bg-white">
                          <!-- Email body -->
                          <div class="bg-surface-container-low/60 p-4 sm:p-6">
                            <div class="mx-auto max-w-md rounded-xl overflow-hidden">
                              <!-- Logo header band (editable) -->
                              <!-- <div> -->
                                <div class="rounded-2xl border border-outline-variant bg-primary/5 px-6 py-10 flex items-center justify-center">
                                  <img src="<?php echo $mailLogo; ?>" alt="Mail logo preview" class="max-h-16 w-auto object-contain">
                                </div>
                              <!-- </div> -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  <?php elseif ($tab['type'] === 'footer'): ?>
                    <!-- Mail Footer: live in-context email-footer preview + editor -->
                    <div class="grid grid-cols-1 lg:grid-cols-[0.85fr_1.15fr] gap-6 items-start">

                      <!-- Editor controls -->
                      <div class="space-y-4">
                        <div>
                          <label class="text-on-surface font-semibold text-label-md">Footer Content</label>
                          <p class="text-label-md text-gray-400 mt-1">Shown at the bottom of every outgoing email.</p>
                        </div>
                        <input type="text" data-footer-input="content" placeholder="Copyright © WePASS. All rights reserved."
                          value="© 2026 WePass. All rights reserved."
                          class="w-full bg-surface-container-low border-outline-variant rounded-lg py-2.5 px-4 text-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all" />
                        <p class="flex items-start gap-1.5 text-label-md text-gray-400">
                          <span class="material-symbols-outlined text-[15px] text-emerald-600 shrink-0">tips_and_updates</span>
                          Keep it short — a copyright line and a support contact is all most recipients need.
                        </p>
                      </div>
                      <!-- Live footer preview -->
                      <div>
                        <div class="flex items-center gap-2 mb-2.5">
                          <span class="material-symbols-outlined text-[18px] text-outline">visibility</span>
                          <span class="text-label-md font-bold tracking-wide text-outline uppercase">Live Preview</span>
                        </div>
                        <div class="rounded-2xl border border-outline-variant overflow-hidden shadow-sm bg-white">
                          <div class="bg-surface-container-low/60 p-4 sm:p-6">
                            <div class="mx-auto max-w-md rounded-xl overflow-hidden">
                              <!-- Faux email body so the footer reads in context -->
                              <div class="bg-white rounded-t-2xl border border-outline-variant border-b-0 px-6 pt-6 pb-4 space-y-2">
                                <div class="h-2.5 w-2/3 rounded-full bg-surface-container-high"></div>
                                <div class="h-2.5 w-full rounded-full bg-surface-container-high"></div>
                                <div class="h-2.5 w-4/5 rounded-full bg-surface-container-high"></div>
                              </div>
                              <!-- Footer band (mirrors editor fields) -->
                              <div class="rounded-b-2xl border border-outline-variant bg-primary/5 px-6 py-6 text-center space-y-2">
                                <p data-footer-preview="content" class="text-label-md text-on-surface-variant leading-relaxed">© 2026 WePass. All rights reserved.</p>
                                <!-- <p class="text-label-md text-on-surface-variant">
                                  Need help? <a href="#" data-footer-preview="email" class="font-semibold text-primary">support@wepass.com</a>
                                </p> -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>                      
                    </div>

                  <?php else: ?>
                    <!-- Pass template editor: Subject & Sender, Email Body, Download Button -->
                    <div class="space-y-6">
                      <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-8 gap-y-6">
                        <div class="space-y-2">
                          <label class="text-on-surface font-semibold text-label-md">Subject:<span class="text-error">*</span></label>
                          <input type="text" placeholder="Your <?php echo $tab['label']; ?> is ready"
                            class="w-full bg-surface-container-low border-outline-variant placeholder:text-slate-400 rounded-lg py-3 px-4 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        </div>
                        <div class="space-y-2">
                          <label class="text-on-surface font-semibold text-label-md">Sender Title: <span class="text-error">*</span></label>
                          <input type="text" placeholder="WePASS Team"
                            class="w-full bg-surface-container-low border-outline-variant placeholder:text-slate-400 rounded-lg py-3 px-4 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        </div>
                      </div>

                      <div class="space-y-2">
                        <label class="text-on-surface font-semibold text-label-md">Body:<span class="text-error">*</span></label>
                        <textarea rows="6" placeholder="Write the message your recipients will see in the email body…"
                          class="w-full bg-surface-container-low border-outline-variant placeholder:text-slate-400 rounded-lg py-3 px-4 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all resize-y"></textarea>
                        <!-- <p class="flex items-center gap-1.5 text-label-md text-on-surface-variant">
                          <span class="material-symbols-outlined text-[15px]">code</span>
                          You can use placeholders like <code class="rounded bg-surface-container-high px-1 font-mono text-[12px]">{name}</code> and <code class="rounded bg-surface-container-high px-1 font-mono text-[12px]">{pass_link}</code>.
                        </p> -->
                      </div>

                      <div class="space-y-2 grid grid-cols-1">
                        <label class="text-on-surface font-semibold text-label-md">View Pass Button Name:<span class="text-error">*</span></label>
                        <input type="text" placeholder="Add to Wallet"
                          class="w-full max-w-md bg-surface-container-low border-outline-variant placeholder:text-slate-400 rounded-lg py-3 px-4 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                      </div>
                    </div>
                  <?php endif; ?>

                  <!-- Panel actions -->
                  <div class="flex flex-wrap items-center <?php echo $tab['type'] === 'template' ? 'justify-between' : 'justify-center'; ?> gap-3 mt-8 pt-6 border-t border-outline-variant/70">
                    <?php if ($tab['type'] === 'template'): ?>
                    <button type="button"
                      class="flex items-center gap-2 bg-white border border-outline-variant/70 text-on-surface px-8 py-3 rounded-lg text-[14px] font-bold shadow-sm hover:bg-surface-container-low active:scale-[0.98] transition-all">
                      <span class="material-symbols-outlined text-[18px]">forward_to_inbox</span>
                      Test Mail
                    </button>
                    <?php endif; ?>
                    <button type="submit"
                      class="<?php echo $tab['type'] === 'template' ? 'ml-auto' : ''; ?> flex items-center gap-2 bg-[#198754] text-white px-7 py-2.5 rounded-lg text-[14px] font-bold shadow-lg shadow-[#198754]/20 hover:opacity-95 active:scale-[0.98] transition-all">
                      <span class="material-symbols-outlined text-[19px]">save</span>
                      Submit
                    </button>
                  </div>
                </form>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
    </section>

    <!-- Mail Templates tab switching -->
    <script>
      (function () {
        var nav = document.getElementById('mail-tabs');
        if (!nav) return;
        var tabs = nav.querySelectorAll('.mail-tab');
        var panels = document.querySelectorAll('.mail-panel');

        function activate(id) {
          tabs.forEach(function (t) {
            var on = t.getAttribute('data-tab') === id;
            t.setAttribute('aria-selected', on ? 'true' : 'false');
            t.classList.toggle('bg-primary/10', on);
            t.classList.toggle('text-primary', on);
            t.classList.toggle('text-secondary', !on);
            t.classList.toggle('hover:bg-surface-container-high', !on);
            t.classList.toggle('hover:text-on-surface', !on);
            var accent = t.querySelector('.mail-tab-accent');
            if (accent) {
              // Active: fixed full-height solid bar. Idle: collapsed bar that grows on hover (mirrors the main sidebar).
              accent.classList.toggle('h-6', on);
              accent.classList.toggle('bg-primary', on);
              accent.classList.toggle('h-0', !on);
              accent.classList.toggle('bg-primary/50', !on);
              accent.classList.toggle('group-hover:h-6', !on);
            }
          });
          panels.forEach(function (p) {
            p.classList.toggle('hidden', p.getAttribute('data-panel') !== id);
          });
        }

        tabs.forEach(function (t) {
          t.addEventListener('click', function () { activate(t.getAttribute('data-tab')); });
        });

        // Mail Footer: live preview binding
        var footerPanel = document.querySelector('.mail-panel[data-panel="mail-footer"]');
        if (footerPanel) {
          var contentInput = footerPanel.querySelector('[data-footer-input="content"]');
          var emailInput = footerPanel.querySelector('[data-footer-input="email"]');
          var contentPreview = footerPanel.querySelector('[data-footer-preview="content"]');
          var emailPreview = footerPanel.querySelector('[data-footer-preview="email"]');

          function sync(input, preview, isEmail) {
            if (!input || !preview) return;
            var value = input.value.trim() || input.getAttribute('placeholder');
            preview.textContent = value;
            if (isEmail) preview.setAttribute('href', 'mailto:' + value);
          }

          if (contentInput) contentInput.addEventListener('input', function () { sync(contentInput, contentPreview, false); });
          if (emailInput) emailInput.addEventListener('input', function () { sync(emailInput, emailPreview, true); });
        }
      })();
    </script>
    <?php include('footer.php'); ?>
  </main>
  <!-- Micro-interaction Scripts -->
   <?php include('script.php'); ?>
</body>

</html>
