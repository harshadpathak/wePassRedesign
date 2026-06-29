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

// Submenu (accordion children) styling — clean dropdown with a left guide line
$subWrap   = 'relative ml-9 mt-1 mb-2 mr-2 pl-4 border-l border-outline-variant/60 space-y-0.5';
$subBase   = 'flex items-center gap-2.5 py-2 px-3 rounded-lg text-body-md font-semibold transition-colors hover:bg-surface-container-high hover:text-primary';
$subIdle   = 'text-on-surface-variant';
$subActive = 'bg-primary/10 text-primary';

// Which submenu (if any) contains the active page
$queueActive       = in_array($current, ['queueApple.php','queueGoogle.php','queueMail.php','queuePassClass.php','queuePassObject.php','webhookLogs.php'], true);
$passActivityActive = in_array($current, ['passLogs.php'], true);
$activityActive    = in_array($current, ['authLogs.php','apiLogs.php','userLogs.php','appleTestLogs.php','tempLogs.php'], true);
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
    <!-- Nav Items -->
    <nav class="flex-1 space-y-1 overflow-y-auto pb-24 text-body-md">
    <!-- Dashboard -->
    <a class="<?= $linkBase ?> <?= $current === 'index.php' ? $linkActive : $linkIdle ?>"
        href="index.php">
        <span class="material-symbols-outlined" <?= $current === 'index.php' ? $fill : '' ?>>home</span>
        <span>Dashboard</span>
    </a>
    <!-- Users -->
    <a class="<?= $linkBase ?> <?= $current === 'users.php' ? $linkActive : $linkIdle ?>"
        href="users.php">
        <span class="material-symbols-outlined" <?= $current === 'users.php' ? $fill : '' ?>>group</span>
        <span>Users</span>
    </a>
    <!-- Settings -->
    <a class="<?= $linkBase ?> <?= $current === 'setting.php' ? $linkActive : $linkIdle ?>"
        href="setting.php">
        <span class="material-symbols-outlined" <?= $current === 'settings.php' ? $fill : '' ?>>settings</span>
        <span>Settings</span>
    </a>
    <!-- Passes -->
    <a class="<?= $linkBase ?> <?= $current === 'passes.php' ? $linkActive : $linkIdle ?>"
        href="passes.php">
        <span class="material-symbols-outlined" <?= $current === 'passes.php' ? $fill : '' ?>>credit_card</span>
        <span>Passes</span>
    </a>
    <!-- Pass Templates -->
    <a class="<?= $linkBase ?> <?= $current === 'passTemplates.php' ? $linkActive : $linkIdle ?>"
        href="passTemplates.php">
        <span class="material-symbols-outlined" <?= $current === 'passTemplates.php' ? $fill : '' ?>>style</span>
        <span>Pass Templates</span>
    </a>
    <!-- Countries -->
    <a class="<?= $linkBase ?> <?= $current === 'countries.php' ? $linkActive : $linkIdle ?>"
        href="countries.php">
        <span class="material-symbols-outlined" <?= $current === 'countries.php' ? $fill : '' ?>>public</span>
        <span>Countries</span>
    </a>
    <!-- Queue -->
    <div class="group/nav mb-[30px] mb-4">
        <button
        class="<?= $navBtn ?> <?= $queueActive ? $linkActive : $linkIdle ?>"
        onclick="toggleSubmenu(this)">
        <span class="material-symbols-outlined">stacks</span>
        <span>Queue</span>
        <span
            class="ml-auto material-symbols-outlined text-sm transition-transform duration-200 chevron <?= $queueActive ? 'rotate-90' : '' ?>">chevron_right</span>
        </button>
        <div class="<?= $subWrap ?> <?= $queueActive ? '' : 'hidden' ?>">
        <a class="<?= $subBase ?> <?= $current === 'queueMail.php' ? $subActive : $subIdle ?>"
            href="queueMail.php">
            <span class="material-symbols-outlined text-[18px]">schedule</span>
            <span>Mail Queue</span>
        </a>
        <a class="<?= $subBase ?> <?= $current === 'queuePassClass.php' ? $subActive : $subIdle ?>"
            href="queuePassClass.php">
            <span class="material-symbols-outlined text-[18px]">category</span>
            <span>Pass Class Queue</span>
        </a>
        <a class="<?= $subBase ?> <?= $current === 'queuePassObject.php' ? $subActive : $subIdle ?>"
            href="queuePassObject.php">
            <span class="material-symbols-outlined text-[18px]">deployed_code</span>
            <span>Pass Object Queue</span>
        </a>
        <a class="<?= $subBase ?> <?= $current === 'queueApple.php' ? $subActive : $subIdle ?>"
            href="queueApple.php">
            <span class="material-symbols-outlined text-[18px]">phone_iphone</span>
            <span>Apple Queue Monitor</span>
        </a>
        <a class="<?= $subBase ?> <?= $current === 'queueGoogle.php' ? $subActive : $subIdle ?>"
            href="queueGoogle.php">
            <span class="material-symbols-outlined text-[18px]">android</span>
            <span>Google Queue Monitor</span>
        </a>
        <a class="<?= $subBase ?> <?= $current === 'webhookLogs.php' ? $subActive : $subIdle ?>"
            href="webhookLogs.php">
            <span class="material-symbols-outlined text-[18px]">webhook</span>
            <span>Webhook Logs</span>
        </a>
        </div>
    </div>
    <!-- Pass Activity Log -->
    <div class="group/nav mb-[30px] mb-4">
        <button
        class="<?= $navBtn ?> <?= $passActivityActive ? $linkActive : $linkIdle ?>"
        onclick="toggleSubmenu(this)">
        <span class="material-symbols-outlined">receipt_long</span>
        <span>Pass Activity Log</span>
        <span
            class="ml-auto material-symbols-outlined text-sm transition-transform duration-200 chevron <?= $passActivityActive ? 'rotate-90' : '' ?>">chevron_right</span>
        </button>
        <div class="<?= $subWrap ?> <?= $passActivityActive ? '' : 'hidden' ?>">
        <a class="<?= $subBase ?> <?= $current === 'passLogs.php' ? $subActive : $subIdle ?>"
            href="passLogs.php">
            <span class="material-symbols-outlined text-[18px]">receipt_long</span>
            <span>Pass Logs</span>
        </a>
        </div>
    </div>
    <!-- Activity Log -->
    <div class="group/nav mb-[30px] mb-4">
        <button
        class="<?= $navBtn ?> <?= $activityActive ? $linkActive : $linkIdle ?>"
        onclick="toggleSubmenu(this)">
        <span class="material-symbols-outlined">monitoring</span>
        <span>Activity Log</span>
        <span
            class="ml-auto material-symbols-outlined text-sm transition-transform duration-200 chevron <?= $activityActive ? 'rotate-90' : '' ?>">chevron_right</span>
        </button>
        <div class="<?= $subWrap ?> <?= $activityActive ? '' : 'hidden' ?>">
        <a class="<?= $subBase ?> <?= $current === 'authLogs.php' ? $subActive : $subIdle ?>"
            href="authLogs.php">
            <span class="material-symbols-outlined text-[18px]">login</span>
            <span>Auth Logs</span>
        </a>
        <a class="<?= $subBase ?> <?= $current === 'apiLogs.php' ? $subActive : $subIdle ?>"
            href="apiLogs.php">
            <span class="material-symbols-outlined text-[18px]">description</span>
            <span>API Logs</span>
        </a>
        <a class="<?= $subBase ?> <?= $current === 'userLogs.php' ? $subActive : $subIdle ?>"
            href="userLogs.php">
            <span class="material-symbols-outlined text-[18px]">person</span>
            <span>User Logs</span>
        </a>
        <a class="<?= $subBase ?> <?= $current === 'appleTestLogs.php' ? $subActive : $subIdle ?>"
            href="appleTestLogs.php">
            <svg viewBox="0 0 24 24" fill="currentColor" class="w-[18px] h-[18px] shrink-0">
                <path d="M16.365 1.43c0 1.14-.493 2.27-1.177 3.08-.744.9-1.99 1.57-2.987 1.57-.12 0-.23-.02-.3-.03-.01-.06-.04-.22-.04-.39 0-1.15.572-2.27 1.206-2.98.804-.94 2.142-1.64 3.248-1.68.03.13.05.28.05.43zm4.565 15.71c-.03.07-.463 1.58-1.518 3.12-.945 1.34-1.94 2.71-3.43 2.71-1.517 0-1.9-.88-3.63-.88-1.698 0-2.302.91-3.67.91-1.377 0-2.332-1.26-3.428-2.8-1.287-1.82-2.323-4.63-2.323-7.28 0-4.28 2.797-6.55 5.552-6.55 1.448 0 2.675.95 3.6.95.865 0 2.222-1.01 3.902-1.01.613 0 2.886.06 4.374 2.19-.13.09-2.383 1.37-2.383 4.19 0 3.26 2.854 4.42 2.955 4.45z"/>
            </svg>
            <span>Apple Test Logs</span>
        </a>
        <a class="<?= $subBase ?> <?= $current === 'tempLogs.php' ? $subActive : $subIdle ?>"
            href="tempLogs.php">
            <span class="material-symbols-outlined text-[18px]">description</span>
            <span>Temp Logs</span>
        </a>
        </div>
    </div>
    </nav>
    <!-- Footer Nav -->
    <div class="absolute bottom-0 left-0 w-full p-4 space-y-1 bg-surface">
    <!-- API Documentation -->
    <a class="flex items-center gap-3 px-4 py-2 hover:text-primary transition-colors group" href="apiDocumentation.php"
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
        <p class="font-display font-bold text-on-surface text-[12px] truncate">Super Admin</p>
        </div>
    </div>
    </div>
</div>
</aside>
<!-- Mobile backdrop (only shows when sidebar is open on mobile) -->
<div id="sidebar-backdrop" class="hidden fixed inset-0 bg-black/40 backdrop-blur-sm z-40 lg:hidden"></div>
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
