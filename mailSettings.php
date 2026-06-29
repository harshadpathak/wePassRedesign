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
            <span class="material-symbols-outlined text-[14px] text-gray">home</span> <span class="text-gray font-normal">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray-500 font-normal">Mail Setting</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Mail Setting</h2>
        </div>
      </div>

      <form id="mail-settings-form">
        <div class="bg-white rounded-2xl border border-outline-variant shadow-sm p-6 lg:p-8">
          <!-- Delivery mode label -->
          <div class="flex items-center justify-end gap-4 mb-6">
            <span class="inline-flex items-center gap-2 rounded-lg border border-outline-variant bg-white px-3.5 py-1.5 text-label-md font-bold text-on-surface shadow-sm">
              <span class="material-symbols-outlined text-[15px] text-primary">mail</span>
              Delivery mode: <span id="active-mode-label">Default SMTP</span>
            </span>
          </div>

          <!-- Option cards -->
          <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Default SMTP -->
            <label data-mode-card="default"
              class="mode-card group relative flex flex-col overflow-hidden rounded-3xl border-2 border-primary bg-white p-6 cursor-pointer">
              <input type="radio" name="delivery_mode" value="default" class="sr-only peer" checked>
              <!-- Selected badge -->
              <span class="check-badge absolute top-4 right-4 w-7 h-7 rounded-full bg-primary flex items-center justify-center shadow-sm transition-all">
                <span class="material-symbols-outlined text-[18px] text-white">check</span>
              </span>

              <!-- Header: icon left, title + description -->
              <div class="flex items-start gap-3.5 mb-5 mt-1">
                <div class="w-12 h-12 rounded-2xl flex items-center justify-center shrink-0 bg-brand-gradient text-white shadow-md shadow-primary/20">
                  <span class="material-symbols-outlined text-[26px]">dns</span>
                </div>
                <div class="min-w-0">
                  <div class="flex items-center gap-2 flex-wrap">
                    <h4 class="text-headline-md font-bold text-on-surface">Default SMTP</h4>
                    <span class="rounded-full bg-emerald-50 border border-emerald-100 px-2 py-0.5 text-label-sm font-bold text-emerald-600">DEFAULT</span>
                  </div>
                  <p class="text-body-md text-gray-400 leading-relaxed mt-0.5">Uses WePass-managed mail servers for standard delivery.</p>
                </div>
              </div>

              <div class="border-t border-outline-variant/70 pt-5 mb-5">
                <ul class="space-y-3.5 text-body-md text-gray-400">
                  <li class="flex items-center gap-3">
                    <span class="w-7 h-7 rounded-lg bg-blue-50 flex items-center justify-center shrink-0"><span class="material-symbols-outlined text-[16px] text-primary">bolt</span></span>
                    No setup required
                  </li>
                  <li class="flex items-center gap-3">
                    <span class="w-7 h-7 rounded-lg bg-blue-50 flex items-center justify-center shrink-0"><span class="material-symbols-outlined text-[16px] text-primary">groups</span></span>
                    Suitable for low to medium volume
                  </li>
                  <li class="flex items-center gap-3">
                    <span class="w-7 h-7 rounded-lg bg-blue-50 flex items-center justify-center shrink-0"><span class="material-symbols-outlined text-[16px] text-primary">tune</span></span>
                    Limited customization
                  </li>
                </ul>
              </div>

              <div class="mt-auto flex items-center justify-center gap-2 rounded-xl bg-primary-fixed py-3 text-label-md font-bold text-primary">
                <span class="material-symbols-outlined text-[18px]">verified</span> Managed by WePass
              </div>
            </label>

            <!-- Email Provider (DISABLED) -->
            <div data-mode-card="provider" aria-disabled="true"
              class="mode-card relative flex flex-col overflow-hidden rounded-3xl border-2 border-dashed border-outline-variant bg-surface-container-low/40 p-6 select-none">
              <input type="radio" name="delivery_mode" value="provider" class="sr-only" disabled>
              <!-- Coming soon ribbon -->
              <span class="absolute top-4 right-4 inline-flex items-center gap-1 rounded-full bg-surface-container-high border border-outline-variant/60 px-2.5 py-0.5 text-label-sm font-bold text-outline">
                <span class="material-symbols-outlined text-[14px]">lock</span> Soon
              </span>

              <!-- Header: icon left, title + description -->
              <div class="flex items-start gap-3.5 mb-5">
                <div class="w-12 h-12 rounded-2xl flex items-center justify-center shrink-0 bg-surface-container-high">
                  <span class="material-symbols-outlined text-[26px] text-outline">hub</span>
                </div>
                <div class="min-w-0">
                  <h4 class="text-headline-md font-bold text-on-surface-variant">Email Provider</h4>
                  <p class="text-body-md text-gray-400 leading-relaxed mt-0.5">Connect your email securely — no SMTP credentials needed.</p>
                </div>
              </div>

              <div class="border-t border-outline-variant/70 pt-5 mb-5">
                <ul class="space-y-3.5 text-body-md text-gray-400">
                  <li class="flex items-center gap-3">
                    <span class="w-7 h-7 rounded-lg bg-surface-container-high flex items-center justify-center shrink-0"><span class="material-symbols-outlined text-[16px] text-outline">trending_up</span></span>
                    Uses your provider's sending reputation
                  </li>
                  <li class="flex items-center gap-3">
                    <span class="w-7 h-7 rounded-lg bg-surface-container-high flex items-center justify-center shrink-0"><span class="material-symbols-outlined text-[16px] text-outline">lock</span></span>
                    OAuth-based secure connection
                  </li>
                  <li class="flex items-center gap-3">
                    <span class="w-7 h-7 rounded-lg bg-surface-container-high flex items-center justify-center shrink-0"><span class="material-symbols-outlined text-[16px] text-outline">key_off</span></span>
                    No host, port, or passwords
                  </li>
                </ul>
              </div>

              <div class="mt-auto space-y-3">
                <div class="flex flex-wrap items-center justify-center gap-2 text-label-sm font-semibold text-outline">
                  <span class="inline-flex items-center gap-1.5 bg-white border border-outline-variant/60 rounded-full px-3 py-1">🐵 Mailchimp</span>
                  <span class="inline-flex items-center gap-1.5 bg-white border border-outline-variant/60 rounded-full px-3 py-1">⚡ SendGrid</span>
                  <span class="inline-flex items-center gap-1.5 bg-white border border-outline-variant/60 rounded-full px-3 py-1">☁️ Amazon SES</span>
                </div>
                <div class="flex items-center justify-center gap-2 rounded-xl bg-emerald-50 border border-emerald-100 py-3 text-label-md font-bold text-emerald-600">
                  <span class="material-symbols-outlined text-[18px]">recommend</span> Recommended for production use
                </div>
              </div>
            </div>

            <!-- Custom SMTP -->
            <label data-mode-card="custom" data-accent="tertiary"
              class="mode-card group relative flex flex-col overflow-hidden rounded-3xl border-2 border-outline-variant bg-white p-6 cursor-pointer">
              <input type="radio" name="delivery_mode" value="custom" class="sr-only peer">
              <span class="check-badge absolute top-4 right-4 w-7 h-7 rounded-full bg-surface-container-high flex items-center justify-center transition-all opacity-0">
                <span class="material-symbols-outlined text-[18px] text-white">check</span>
              </span>
              <!-- Header: icon left, title + description -->
              <div class="flex items-start gap-3.5 mb-5 mt-1">
                <div class="w-12 h-12 rounded-2xl flex items-center justify-center shrink-0 bg-tertiary text-white">
                  <span class="material-symbols-outlined text-[26px]">tune</span>
                </div>
                <div class="min-w-0">
                  <h4 class="text-headline-md font-bold text-on-surface">Custom SMTP</h4>
                  <p class="text-body-md text-gray-400 leading-relaxed mt-0.5">Configure Custom SMTP by adding your mail server details.</p>
                </div>
              </div>

              <div class="border-t border-outline-variant/70 pt-5 mb-5">
                <ul class="space-y-3.5 text-body-md text-gray-400">
                  <li class="flex items-center gap-3">
                    <span class="w-7 h-7 rounded-lg bg-orange-50 flex items-center justify-center shrink-0"><span class="material-symbols-outlined text-[16px] text-tertiary">settings_ethernet</span></span>
                    Full control over delivery
                  </li>
                  <li class="flex items-center gap-3">
                    <span class="w-7 h-7 rounded-lg bg-orange-50 flex items-center justify-center shrink-0"><span class="material-symbols-outlined text-[16px] text-tertiary">key</span></span>
                    Requires SMTP credentials
                  </li>
                  <li class="flex items-center gap-3">
                    <span class="w-7 h-7 rounded-lg bg-orange-50 flex items-center justify-center shrink-0"><span class="material-symbols-outlined text-[16px] text-tertiary">tune</span></span>
                    Advanced configuration
                  </li>
                </ul>
              </div>

              <div class="mt-auto flex items-center justify-center gap-2 rounded-xl bg-tertiary-container py-3 text-label-md font-bold text-tertiary">
                <span class="material-symbols-outlined text-[18px]">tune</span> Advanced / Manual setup
              </div>
            </label>
          </div>

          <!-- Submit (Default SMTP / general) -->
          <div id="default-actions" class="flex justify-center mt-8">
            <button type="submit"
              class="flex items-center gap-2 bg-[#198754] text-white px-8 py-3 rounded-lg text-[14px] font-bold shadow-lg shadow-[#198754]/20 hover:opacity-95 active:scale-[0.98] transition-all">
              <span class="material-symbols-outlined text-[18px]">save</span>
              Submit
            </button>
          </div>
        </div>

        <!-- SMTP Configuration Details (shown when Custom SMTP selected) -->
        <div id="panel-custom" class="config-panel hidden bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden mt-stack-lg">
          <!-- Panel header -->
          <div class="flex flex-wrap items-center justify-between gap-3 px-6 lg:px-8 pt-6">
            <div class="flex items-center gap-2.5">
              <span class="material-symbols-outlined text-[22px] text-secondary">settings</span>
              <h3 class="text-headline-md font-bold text-on-surface">SMTP Configuration Details</h3>
            </div>
          </div>

          <!-- Info banner -->
          <div class="px-6 lg:px-8 mt-4">
            <!-- <div class="w-4 h-4 rounded-lg bg-primary text-white flex items-center justify-center shrink-0">
              <span class="material-symbols-outlined text-[20px]">info</span>
            </div> -->
            <div class="flex items-center gap-2.5 rounded-lg bg-primary-fixed/40 border border-primary/15 px-2 py-2.5">
                <div class="w-6 h-6 rounded-lg bg-primary text-white flex items-center justify-center shrink-0">
                  <span class="material-symbols-outlined text-[16px]">info</span>
                </div>
                <p class="text-body-md text-gray-500">Changes affect all outgoing emails immediately.</p>
            </div>
          </div>

          <!-- Two-column body -->
          <div class="px-6 lg:px-8 py-6 grid grid-cols-1 lg:grid-cols-2 gap-x-10 gap-y-6">
            <!-- CONNECTION -->
            <div class="space-y-5">
              <!-- <h4 class="text-label-sm font-bold tracking-wider text-outline uppercase">Connection</h4> -->

              <div class="space-y-2">
                <label class="flex items-center text-on-surface font-semibold text-label-md">
                  Mail Mailer: <span class="text-error">*</span>
                  <span class="group relative inline-flex">
                    <span class="material-symbols-outlined text-[15px] text-outline">help</span>
                    <span class="pointer-events-none absolute bottom-full left-1/2 mb-2 -translate-x-1/2 w-max max-w-[240px] whitespace-normal text-center leading-snug rounded-lg border border-outline-variant/70 bg-surface-container-high/80 px-3 py-1.5 text-body-sm text-on-surface shadow-sm backdrop-blur-sm opacity-0 transition-opacity duration-150 group-hover:opacity-100 z-20">
                      Defines the email transport method used by the system. For most setups, SMTP is recommended.
                    </span>
                  </span>
                </label>
                <select class="w-full js-select2" data-allow-clear="false">
                  <option value="smtp">smtp (Standard SMTP)</option>
                  <option value="sendmail">sendmail</option>
                  <option value="mail">mail (PHP mail)</option>
                </select>
              </div>

              <div class="space-y-2">
                <label class="flex items-center text-on-surface font-semibold text-label-md">Mail Host: <span class="text-error">*</span></label>
                <input type="text" placeholder="smtp.gmail.com"
                  class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
              </div>

              <div class="space-y-2">
                <label class="flex items-center text-on-surface font-semibold text-label-md">Mail Encryption: <span class="text-error">*</span></label>
                <select class="w-full js-select2" data-placeholder="Select Encryption" data-allow-clear="false">
                  <option></option>
                  <option value="ssl">ssl</option>
                  <option value="tls">tls</option>
                  <option value="none">none</option>
                </select>
                <p class="text-label-md text-gray-400">Supported: ssl, tls, none</p>
              </div>

              <div class="space-y-2">
                <label class="flex items-center text-on-surface font-semibold text-label-md">Mail Port: <span class="text-error">*</span></label>
                <input type="text" placeholder="465"
                  class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                <p class="text-label-md text-gray-400">Common ports: 465 (SSL), 587 (TLS)</p>
              </div>
            </div>

            <!-- AUTHENTICATION + SENDER IDENTITY -->
            <div class="space-y-5">
              <!-- <h4 class="text-label-sm font-bold tracking-wider text-outline uppercase">Authentication</h4> -->

              <div class="space-y-2">
                <label class="flex items-center text-on-surface font-semibold text-label-md">
                  Mail Username: <span class="text-error">*</span>
                    <span class="group relative inline-flex">
                        <span class="material-symbols-outlined text-[15px] text-outline">help</span>
                        <span class="pointer-events-none absolute bottom-full left-1/2 mb-2 -translate-x-1/2 w-max max-w-[240px] whitespace-normal text-center leading-snug rounded-lg border border-outline-variant/70 bg-surface-container-high/80 px-3 py-1.5 text-body-sm text-on-surface shadow-sm backdrop-blur-sm opacity-0 transition-opacity duration-150 group-hover:opacity-100 z-20">
                        Usually an email address (Gmail, Outlook)
                    </span>
                  </span>
                </label>
                <input type="text" placeholder="savanihd@gmail.com"
                  class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                <p class="text-label-md text-gray-400">Your SMTP username (email address for Gmail/Outlook, or API username for services like SendGrid)</p>
              </div>

                <div class="space-y-2">
                    <label class="flex items-center text-on-surface font-semibold text-label-md">Mail Password: <span class="text-error">*</span></label>
                    <div class="relative">
                        <input type="password" id="confirm_password" placeholder="Enter Mail Password" class="w-full bg-surface-container-low border-outline-variant placeholder:text-slate-400 rounded-lg py-3 px-4 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        <button type="button" data-toggle-password="confirm_password" class="material-symbols-outlined text-[20px] text-outline absolute right-3.5 top-1/2 -translate-y-1/2 hover:text-on-surface transition-colors cursor-pointer">visibility</button>
                    </div>
                </div>
              <!-- <div class="space-y-2">
                <label class="flex items-center text-on-surface font-semibold text-label-md">Mail Password: <span class="text-error">*</span></label>
<div class="relative">
                        <input type="password" id="confirm_password" placeholder="Enter a New Confirm Password" class="w-full bg-surface-container-low border-outline-variant placeholder:text-slate-400 rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        <button type="button" data-toggle-password="confirm_password" class="material-symbols-outlined text-[20px] text-outline absolute right-3.5 top-1/2 -translate-y-1/2 hover:text-on-surface transition-colors cursor-pointer">visibility</button>
                    </div>
                <p class="flex items-center gap-1.5 text-label-md text-gray-400">
                  <span class="material-symbols-outlined text-[15px] text-emerald-600">verified_user</span>
                  Credentials are encrypted at rest and never exposed in logs
                </p>
              </div> -->

              <div class="flex items-center gap-3 pt-7">
                <span class="material-symbols-outlined text-[18px] text-secondary">badge</span>
                <h4 class="text-label-sm font-bold tracking-wider text-outline uppercase whitespace-nowrap">Sender Identity</h4>
                <span class="h-px flex-1 bg-outline-variant/70"></span>
              </div>

              <div class="space-y-2">
                <label class="flex items-center text-on-surface font-semibold text-label-md">Mail From Address: <span class="text-error">*</span></label>
                <input type="email" placeholder="example@gmail.com"
                  class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                <p class="text-label-md text-gray-400">This address appears as the sender in all outbound emails.</p>
              </div>
            </div>
          </div>

          <!-- Panel actions -->
          <div class="flex items-center justify-center gap-3 px-6 lg:px-8 pb-7 pt-6 border-t border-outline-variant/70 mx-6 lg:mx-8">
            <button type="button"
              class="flex items-center gap-2 bg-white border border-outline-variant text-on-surface px-6 py-3 rounded-lg text-[14px] font-bold hover:bg-surface-container-low transition-all shadow-sm">
              <span class="material-symbols-outlined text-[18px]">cable</span>
              Test Connection
            </button>
            <button type="submit"
              class="flex items-center gap-2 bg-[#198754] text-white px-8 py-3 rounded-lg text-[14px] font-bold shadow-lg shadow-[#198754]/20 hover:opacity-95 active:scale-[0.98] transition-all">
              <span class="material-symbols-outlined text-[18px]">save</span>
              Submit
            </button>
          </div>
        </div>
      </form>
    </section>

    <!-- Mail Settings interactions -->
    <script>
      (function () {
        var form = document.getElementById('mail-settings-form');
        if (!form) return;

        var radios = form.querySelectorAll('input[name="delivery_mode"]:not([disabled])');
        var labels = { default: 'Default SMTP', custom: 'Custom SMTP' };
        var activeLabel = document.getElementById('active-mode-label');

        function syncCard(card, checked) {
          if (card.getAttribute('aria-disabled') === 'true') return; // skip disabled provider card
          var badge = card.querySelector('.check-badge');
          var heading = card.querySelector('h4');
          var accent = card.getAttribute('data-accent') === 'tertiary' ? 'tertiary' : 'primary';
          var borderCls = 'border-' + accent;
          var badgeCls = 'bg-' + accent;
          if (checked) {
            card.classList.add(borderCls);
            card.classList.remove('border-outline-variant');
            if (heading) heading.classList.remove('text-on-surface-variant');
            if (heading) heading.classList.add('text-on-surface');
            if (badge) { badge.classList.remove('opacity-0', 'bg-surface-container-high'); badge.classList.add(badgeCls); }
          } else {
            card.classList.remove(borderCls);
            card.classList.add('border-outline-variant');
            if (badge) { badge.classList.add('opacity-0', 'bg-surface-container-high'); badge.classList.remove(badgeCls); }
          }
        }

        var customPanel = document.getElementById('panel-custom');
        var defaultActions = document.getElementById('default-actions');

        function update() {
          var selected = form.querySelector('input[name="delivery_mode"]:checked');
          var value = selected ? selected.value : 'default';
          form.querySelectorAll('.mode-card').forEach(function (card) {
            syncCard(card, card.getAttribute('data-mode-card') === value);
          });
          if (activeLabel) activeLabel.textContent = labels[value] || 'Default SMTP';

          var isCustom = value === 'custom';
          if (customPanel) customPanel.classList.toggle('hidden', !isCustom);
          if (defaultActions) defaultActions.classList.toggle('hidden', isCustom);
        }

        radios.forEach(function (r) { r.addEventListener('change', update); });
        update();
      })();
    </script>
    <?php include('footer.php'); ?>
  </main>
  <!-- Micro-interaction Scripts -->
   <?php include('script.php'); ?>
   <script>
     document.querySelectorAll('[data-toggle-password]').forEach(function (btn) {
       btn.addEventListener('click', function () {
         var input = document.getElementById(btn.getAttribute('data-toggle-password'));
         if (!input) return;
         var show = input.type === 'password';
         input.type = show ? 'text' : 'password';
         btn.textContent = show ? 'visibility_off' : 'visibility';
       });
     });
   </script>
</body>
 
</html>