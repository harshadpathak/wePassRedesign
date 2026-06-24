<?php
// Current page filename (works with `php -S localhost:8001`)
$current = basename($_SERVER['PHP_SELF']);

// Top-level nav items — soft pill with a left accent bar on the active item
$linkBase   = 'relative flex items-center gap-3 rounded-lg px-4 py-2.5 mx-3 mb-1 transition-all text-body-md font-semibold';
$navBtn     = 'group/btn relative w-[calc(100%-24px)] flex items-center gap-3 rounded-lg px-4 py-2.5 mx-3 mb-1 transition-all text-body-md font-semibold';
$linkActive = 'bg-primary/10 text-primary before:absolute before:-left-3 before:top-1/2 before:-translate-y-1/2 before:h-7 before:w-1 before:rounded-r-full before:bg-primary';
$linkIdle   = 'text-secondary hover:bg-surface-container-high hover:text-on-surface before:absolute before:-left-3 before:top-1/2 before:-translate-y-1/2 before:h-0 before:w-1 before:rounded-r-full before:bg-primary/50 before:transition-all hover:before:h-7';

// Filled icon style helper for the active item
$fill = "style=\"font-variation-settings: 'FILL' 1;\"";

// Submenu (accordion children) styling — connector-line / tree look
$subWrap   = 'relative ml-9 mt-1 mb-2 mr-2 pl-4 border-l border-outline-variant/60 space-y-0.5';
$subBase   = 'relative flex items-center gap-2.5 py-2 px-3 rounded-lg text-body-md font-semibold transition-colors hover:bg-surface-container-high hover:text-primary before:absolute before:-left-4 before:top-1/2 before:-translate-y-1/2 before:h-px before:w-3 before:rounded-full';
$subIdle   = 'text-on-surface-variant before:bg-outline-variant/60';
$subActive = 'text-primary before:bg-primary';

// Which submenu (if any) contains the active page
$settingsActive = in_array($current, ['mailSettings.php','mailTemplate.php'], true);
$distActive = in_array($current, ['manualDistribution.php','importDistribution.php','qrcodeShare.php','qrcodeShow.php'], true);
$companyActive = in_array($current, ['accountInfo.php','accountUsers.php'], true);
?>
<aside
class="fixed left-0 top-0 h-full w-[300px] flex flex-col border-r border-outline-variant dark:bg-inverse-surface z-50 transition-all duration-300 ease-in-out bg-surface">
<div class="flex flex-col h-full py-stack-lg pt-0">
    <!-- Brand Logo -->
    <div class="px-6 py-3 flex items-center gap-3 pr-4">
    <div class="flex flex-col gap-1 transition-all"><img alt="WePass Logo"
        class="w-[140px] h-auto object-contain transition-all duration-300"
        src="https://drojrh3mlpzqs.cloudfront.net/9eda0c24-7ef8-4597-8d97-91cfa2d4d7d8/adminTheme/assets/images/logo-new.png">
    </div><button
        class="ml-auto p-2 leading-none rounded-lg hover:bg-surface-container-high text-on-surface-variant transition-all"
        id="sidebar-toggle">
        <span class="material-symbols-outlined">menu_open</span>
    </button>
    </div>
    <!-- CTA -->
    <div class="px-4 mb-4 mt-2">
    <button
        class="w-full flex items-center justify-center gap-2 bg-brand-gradient text-on-primary px-2 py-3 rounded-lg text-sm hover:opacity-90 transition-all active:scale-[0.98] shadow-md shadow-primary/20 font-bold">
        <span class="material-symbols-outlined">add</span>
        <span class="">Create Pass Template</span>
    </button>
    </div>
    <!-- Nav Items -->
    <nav class="flex-1 space-y-1 overflow-y-auto pb-24 text-body-md"><!-- Dashboard -->
    <a class="<?= $linkBase ?> <?= $current === 'index.php' ? $linkActive : $linkIdle ?>"
        href="index.php">
        <span class="material-symbols-outlined" <?= $current === 'index.php' ? $fill : '' ?>>home</span>
        <span>Dashboard</span>
    </a>
    <!-- Pass Templates -->
    <a class="<?= $linkBase ?> <?= $current === 'PassTemplates.php' ? $linkActive : $linkIdle ?>"
        href="PassTemplates.php">
        <span class="material-symbols-outlined" <?= $current === 'PassTemplates.php' ? $fill : '' ?>>style</span>
        <span>Pass Templates</span>
        <span
        class="ml-auto text-white text-[10px] px-2 py-0.5 rounded-full bg-primary font-semibold">793</span>
    </a>
    <!-- Pass Distribution -->
    <div class="group/nav mb-[30px] mb-4">
        <button
        class="<?= $navBtn ?> <?= $distActive ? $linkActive : $linkIdle ?>"
        onclick="toggleSubmenu(this)">
        <span class="material-symbols-outlined">send</span>
        <span>Pass Distribution</span>
        <span
            class="ml-auto material-symbols-outlined text-sm transition-transform duration-200 chevron <?= $distActive ? 'rotate-90' : '' ?>">chevron_right</span>
        </button>
        <div class="<?= $subWrap ?> <?= $distActive ? '' : 'hidden' ?>">
        <a class="<?= $subBase ?> <?= $current === 'manualDistribution.php' ? $subActive : $subIdle ?>"
            href="manualDistribution.php">
            <span class="material-symbols-outlined text-[18px]">edit_square</span>
            <span>Manual Distribution</span>
        </a>
        <a class="<?= $subBase ?> <?= $current === 'importDistribution.php' ? $subActive : $subIdle ?>"
            href="importDistribution.php">
            <span class="material-symbols-outlined text-[18px]">upload</span>
            <span>Import Distribution</span>
        </a>
        <a class="<?= $subBase ?> <?= $current === 'qrcodeShare.php' ? $subActive : $subIdle ?>"
            href="qrcodeShare.php">
            <span class="material-symbols-outlined text-[18px]">grid_view</span>
            <span>QR Code Share</span>
        </a>
        </div>
    </div>
    <!-- Passes -->
    <a class="<?= $linkBase ?> <?= $current === 'passes.php' ? $linkActive : $linkIdle ?>"
        href="passes.php">
        <span class="material-symbols-outlined" <?= $current === 'passes.php' ? $fill : '' ?>>credit_card</span>
        <span>Passes</span>
    </a>
    <!-- GEO Locations -->
    <div class="group/nav mb-[30px] mb-4">
        <button
        class="<?= $navBtn ?> <?= $linkIdle ?>"
        onclick="toggleSubmenu(this)">
        <span class="material-symbols-outlined">location_on</span>
        <span>GEO Locations</span>
        <span
            class="ml-auto material-symbols-outlined text-sm transition-transform duration-200 chevron">chevron_right</span>
        </button>
        <div class="<?= $subWrap ?> hidden">
        <a class="<?= $subBase ?> <?= $subIdle ?>"
            href="#">
            <span class="material-symbols-outlined text-[18px]">store</span>
            <span>Stores</span>
        </a>
        <a class="<?= $subBase ?> <?= $subIdle ?>"
            href="#">
            <span class="material-symbols-outlined text-[18px]">campaign</span>
            <span>Campaigns</span>
        </a>
        </div>
    </div>
    <!-- Company -->
    <div class="group/nav mb-[30px] mb-4">
        <button
        class="<?= $navBtn ?> <?= $companyActive ? $linkActive : $linkIdle ?>"
        onclick="toggleSubmenu(this)">
        <span class="material-symbols-outlined">business_center</span>
        <span>Company</span>
        <span
            class="ml-auto material-symbols-outlined text-sm transition-transform duration-200 chevron <?= $companyActive ? 'rotate-90' : '' ?>">chevron_right</span>
        </button>
        <div class="<?= $subWrap ?> <?= $companyActive ? '' : 'hidden' ?>">
        <a class="<?= $subBase ?> <?= $current === 'accountInfo.php' ? $subActive : $subIdle ?>"
            href="accountInfo.php">
            <span class="material-symbols-outlined text-[18px]">person</span>
            <span>Account Info</span>
        </a>
        <a class="<?= $subBase ?> <?= $current === 'accountUsers.php' ? $subActive : $subIdle ?>"
            href="accountUsers.php">
            <span class="material-symbols-outlined text-[18px]">group</span>
            <span>Account Users</span>
        </a>
        </div>
    </div>
    <!-- Billing -->
    <a class="<?= $linkBase ?> <?= $current === 'billing.php' ? $linkActive : $linkIdle ?>"
        href="billing.php">
        <span class="material-symbols-outlined" <?= $current === 'billing.php' ? $fill : '' ?>>description</span>
        <span>Billing</span>
    </a>
    <!-- Settings -->
    <div class="group/nav mb-[30px] mb-4">
        <button
        class="<?= $navBtn ?> <?= $settingsActive ? $linkActive : $linkIdle ?>"
        onclick="toggleSubmenu(this)">
        <span class="material-symbols-outlined">settings</span>
        <span>Settings</span>
        <span
            class="ml-auto material-symbols-outlined text-sm transition-transform duration-200 chevron">chevron_right</span>
        </button>
        <div class="<?= $subWrap ?> <?= $settingsActive ? '' : 'hidden' ?>">
        <p class="-ml-4 pl-3 pr-2 py-1.5 text-[10px] font-bold uppercase tracking-widest text-outline bg-surface">Platform</p>
        <a class="<?= $subBase ?> <?= $subIdle ?>"
            href="#">
            <span class="material-symbols-outlined text-[18px]">credit_card</span>
            <span>Wallet API Settings</span>
        </a>
        <a class="<?= $subBase ?> <?= $subIdle ?>"
            href="#">
            <span class="material-symbols-outlined text-[18px]">key</span>
            <span>API Keys</span>
            <span
            class="ml-auto text-[9px] font-bold uppercase tracking-wider bg-amber-50 text-amber-700 px-1.5 py-0.5 rounded border border-amber-100">Sensitive</span>
        </a>
        <a class="<?= $subBase ?> <?= $subIdle ?>"
            href="#">
            <span class="material-symbols-outlined text-[18px]">link</span>
            <span>Webhook URLs</span>
        </a>
        <p class="-ml-4 pl-3 pr-2 py-1.5 mt-2 text-[10px] font-bold uppercase tracking-widest text-outline bg-surface">Communication</p>
        <a class="<?= $subBase ?> <?= $current === 'mailSettings.php' ? $subActive : $subIdle ?>"
            href="mailSettings.php">
            <span class="material-symbols-outlined text-[18px]">mail</span>
            <span>Mail Settings</span>
        </a>
        <a class="<?= $subBase ?> <?= $current === 'mailTemplate.php' ? $subActive : $subIdle ?>"
            href="mailTemplate.php">
            <span class="material-symbols-outlined text-[18px]">description</span>
            <span>Mail Templates</span>
        </a>
        </div>
    </div>
    <!-- PLATFORM Section -->
    <div class="space-y-1 mb-6">
    </div>
    <!-- COMMUNICATION Section -->
    <div class="space-y-1">
    </div>
    </nav>
    <!-- Footer Nav -->
    <div class="absolute bottom-0 left-0 w-full p-4 space-y-1 bg-surface">
    <!-- API Documentation -->
    <a class="flex items-center gap-3 px-4 py-2 hover:text-primary transition-colors group" href="#"
        style="color: #94a3b8;">
        <span class="material-symbols-outlined text-[18px]">menu_book</span>
        <span class="font-display text-[14px]">API Documentation</span>
    </a>

    <!-- Company Info Card -->
    <div
        class="relative bg-surface-container-low rounded-2xl flex items-center gap-3 border border-outline-variant/30 p-2.5">
        <!-- Status Indicator -->
        <div class="flex items-center justify-center">
        <span class="material-symbols-outlined text-[10px]"
            style="font-variation-settings: &quot;FILL&quot; 1, &quot;wght&quot; 700; color: rgb(76, 105, 255); padding-left: 5px;">circle</span>
        </div>

        <!-- Company Name -->
        <div class="flex-1">
        <p class="font-display font-bold text-on-surface text-[12px] truncate">Aatman Infotech</p>
        </div>

        <!-- Admin Badge -->
        <div class="absolute -right-2 -top-3">
        <span
            class="bg-blue-50 text-blue-600 text-[10px] font-bold px-3 py-1 rounded-full border border-blue-100 tracking-wider uppercase shadow-sm">Manager</span>
        </div>
    </div>
    </div>
</div>
</aside>
<script>
// Accordion: only one sidebar submenu open at a time
function toggleSubmenu(btn) {
    var panel = btn.nextElementSibling;
    var willOpen = panel.classList.contains('hidden');

    // Close every submenu and reset its chevron
    document.querySelectorAll('aside .group\\/nav > div').forEach(function (p) {
        p.classList.add('hidden');
        var b = p.previousElementSibling;
        var chev = b ? b.querySelector('.chevron') : null;
        if (chev) chev.classList.remove('rotate-90');
    });

    // Open the clicked one (if it was closed before)
    if (willOpen) {
        panel.classList.remove('hidden');
        var chevron = btn.querySelector('.chevron');
        if (chevron) chevron.classList.add('rotate-90');
    }
}
</script>
