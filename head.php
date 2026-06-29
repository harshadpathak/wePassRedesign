<!-- Google Fonts: Plus Jakarta Sans -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap"
rel="stylesheet">
<!-- Material Symbols Outlined -->
<link
href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
rel="stylesheet">
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
tailwind.config = {
    darkMode: "class",
    theme: {
    extend: {
        "colors": {
        "on-primary-container": "#ffffff",
        "inverse-surface": "#1e293b",
        "primary-container": "#5573FF",
        "on-primary": "#ffffff",
        "secondary-fixed-dim": "#cbd5e1",
        "primary-fixed-dim": "#94a3b8",
        "on-error": "#ffffff",
        "on-secondary": "#ffffff",
        "on-surface-variant": "#64748b",
        "on-secondary-fixed-variant": "#475569",
        "on-tertiary": "#ffffff",
        "primary": "#3d5afe",
        "surface-container-low": "#f8fafc",
        "on-secondary-fixed": "#0f172a",
        "on-secondary-container": "#64748b",
        "error": "#ef4444",
        "error-container": "#fee2e2",
        "surface-container-lowest": "#ffffff",
        "tertiary-container": "#ffedd5",
        "on-tertiary-fixed-variant": "#9a3412",
        "on-tertiary-container": "#7c2d12",
        "secondary-container": "#f1f5f9",
        "outline": "#94a3b8",
        "surface-dim": "#f1f5f9",
        "secondary-fixed": "#e2e8f0",
        "primary-fixed": "#dbeafe",
        "surface-container": "#f1f5f9",
        "on-background": "#0f172a",
        "secondary": "#475569",
        "on-surface": "#0f172a",
        "surface-container-high": "#f1f5f9",
        "on-tertiary-fixed": "#431407",
        "surface-bright": "#ffffff",
        "inverse-on-surface": "#f8fafc",
        "surface": "#ffffff",
        "inverse-primary": "#94a3b8",
        "background": "#f8fafc",
        "surface-tint": "#3d5afe",
        "tertiary-fixed-dim": "#ffedd5",
        "tertiary-fixed": "#ffedd5",
        "outline-variant": "#e2e8f0",
        "on-primary-fixed": "#1e1b4b",
        "tertiary": "#ea580c",
        "on-primary-fixed-variant": "#3730a3",
        "on-error-container": "#991b1b",
        "surface-container-highest": "#e2e8f0",
        "surface-variant": "#f1f5f9"
        },
        "borderRadius": {
        "DEFAULT": "0.25rem",
        "lg": "0.5rem",
        "xl": "0.75rem",
        "full": "9999px"
        },
        "spacing": {
        "stack-md": "16px",
        "stack-sm": "8px",
        "margin-desktop": "30px",
        "base": "4px",
        "container-padding": "24px",
        "margin-mobile": "16px",
        "stack-lg": "24px",
        "gutter": "16px"
        },
        "fontFamily": {
        "body-md": ["'Plus Jakarta Sans'", "-apple-system", "BlinkMacSystemFont", "Segoe UI", "Helvetica Neue", "Arial", "sans-serif"],
        "label-md": ["'Plus Jakarta Sans'", "-apple-system", "BlinkMacSystemFont", "Segoe UI", "Helvetica Neue", "Arial", "sans-serif"],
        "body-lg": ["'Plus Jakarta Sans'", "-apple-system", "BlinkMacSystemFont", "Segoe UI", "Helvetica Neue", "Arial", "sans-serif"],
        "headline-lg": ["'Plus Jakarta Sans'", "-apple-system", "BlinkMacSystemFont", "Segoe UI", "Helvetica Neue", "Arial", "sans-serif"],
        "headline-lg-mobile": ["'Plus Jakarta Sans'", "-apple-system", "BlinkMacSystemFont", "Segoe UI", "Helvetica Neue", "Arial", "sans-serif"],
        "headline-md": ["'Plus Jakarta Sans'", "-apple-system", "BlinkMacSystemFont", "Segoe UI", "Helvetica Neue", "Arial", "sans-serif"],
        "display": ["'Plus Jakarta Sans'", "-apple-system", "BlinkMacSystemFont", "Segoe UI", "Helvetica Neue", "Arial", "sans-serif"],
        "label-sm": ["'Plus Jakarta Sans'", "-apple-system", "BlinkMacSystemFont", "Segoe UI", "Helvetica Neue", "Arial", "sans-serif"]
        },
        "fontSize": {
        "body-md": ["14px", { "lineHeight": "20px", "fontWeight": "400" }],
        "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.01em", "fontWeight": "500" }],
        "body-lg": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
        "headline-lg": ["22px", { "lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
        "headline-lg-mobile": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
        "headline-md": ["16px", { "lineHeight": "28px", "fontWeight": "600" }],
        "display": ["36px", { "lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
        "label-sm": ["11px", { "lineHeight": "14px", "fontWeight": "600" }]
        },
        "backgroundImage": {
        "primary-gradient": "linear-gradient(135deg, #5573FF 0%, #3d5afe 100%)"
        }
    },
    },
}
</script>
<style>
.material-symbols-outlined {
    font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
}

body {
    font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif;
}

.bg-brand-gradient {
    background: linear-gradient(135deg, #5573FF 0%, #3d5afe 100%);
}
</style>
<style>
/* ---------- Mobile sidebar (off-canvas drawer) ---------- */
@media (max-width: 1023px) {
    /* Content takes full width on mobile */
    main {
        margin-left: 0 !important;
    }
    /* Sidebar slides off-screen by default */
    aside {
        transform: translateX(-100%);
    }
    /* Open state (toggled via JS) */
    aside.mobile-open {
        transform: translateX(0);
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.25);
    }
    /* Ignore the desktop 80px-rail collapse on mobile */
    aside.sidebar-collapsed {
        width: 300px !important;
    }
    .sidebar-collapsed ~ main {
        margin-left: 0 !important;
    }
}
</style>
<style>
/* ---------- Collapsed sidebar (80px rail) ---------- */
.sidebar-collapsed {
    width: 80px !important;
}

.sidebar-collapsed ~ main {
    margin-left: 80px !important;
}

/* Logo row: hide wordmark, center the toggle */
.sidebar-collapsed .px-6.mb-4 {
    padding-left: 0;
    padding-right: 0;
    justify-content: center;
}

.sidebar-collapsed img {
    display: none;
}

.sidebar-collapsed #sidebar-toggle {
    margin-left: 0;
}

.sidebar-collapsed #sidebar-toggle span {
    transform: rotate(180deg);
}

/* CTA: collapse to a circular icon button */
.sidebar-collapsed .px-4.mb-4 {
    padding-left: 0;
    padding-right: 0;
}

.sidebar-collapsed .px-4.mb-4 button {
    width: 48px;
    height: 48px;
    padding: 0;
    border-radius: 9999px;
    margin: 0 auto;
}

.sidebar-collapsed .px-4.mb-4 button span:not(.material-symbols-outlined) {
    display: none;
}

/* Nav: hide text labels, badges and chevrons; center the icons */
.sidebar-collapsed nav a > span:not(.material-symbols-outlined),
.sidebar-collapsed nav > div > button > span:not(.material-symbols-outlined),
.sidebar-collapsed nav .chevron {
    display: none;
}

.sidebar-collapsed nav a,
.sidebar-collapsed nav > div > button {
    justify-content: center;
    width: calc(100% - 1rem);
    margin-left: 0.5rem;
    margin-right: 0.5rem;
    padding-left: 0;
    padding-right: 0;
}

/* Drop the active accent bar while collapsed */
.sidebar-collapsed nav a::before,
.sidebar-collapsed nav > div > button::before {
    display: none;
}

/* Hide expandable submenu panels entirely while collapsed */
.sidebar-collapsed nav .group\/nav > div {
    display: none !important;
}

/* Footer: keep only the API-docs icon, hide its label and the company card */
.sidebar-collapsed .absolute.bottom-0 {
    padding-left: 0.5rem;
    padding-right: 0.5rem;
}

.sidebar-collapsed .absolute.bottom-0 > a {
    justify-content: center;
}

.sidebar-collapsed .absolute.bottom-0 > a span:not(.material-symbols-outlined) {
    display: none;
}

.sidebar-collapsed .absolute.bottom-0 > div {
    display: none;
}
</style>

<!-- Select2 (shared across pages) -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<style>
/* Match Select2 to the theme's text inputs (rounded-lg, surface-container-low, 14px) */
.select2-container--default .select2-selection--single {
    height: 46.22px;
    display: flex;
    align-items: center;
    background-color: #f8fafc;        /* surface-container-low */
    border: 1px solid #e2e8f0;        /* outline-variant */
    border-radius: 0.5rem;            /* rounded-lg */
    padding: 0.75rem 1rem;            /* py-3 px-4 */
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #0f172a;                   /* on-surface */
    font-size: 14px;                  /* text-body-md */
    line-height: 1.5;
    padding: 0;
    font-weight: 400;
}
.select2-container--default .select2-selection--single .select2-selection__placeholder {
    color: #94a3b8;                   /* muted placeholder */
}
.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 45px;
    right: 12px;
}
.select2-container--default .select2-selection--single .select2-selection__arrow b {
    border-color: #64748b transparent transparent transparent;
}
.select2-container--default.select2-container--open .select2-selection__arrow b {
    border-color: transparent transparent #64748b transparent;
}
/* Focus / open ring like the inputs */
.select2-container--default.select2-container--focus .select2-selection--single,
.select2-container--default.select2-container--open .select2-selection--single {
    border-color: #5573ff;            /* primary */
    box-shadow: 0 0 0 2px rgba(85, 115, 255, 0.2);
}
/* Dropdown panel */
.select2-dropdown {
    border-color: #e2e8f0;
    border-radius: 0.5rem;
    box-shadow: 0 8px 24px rgba(15, 23, 42, 0.08);
    overflow: hidden;
}
.select2-container--default .select2-results__option {
    font-size: 14px;
    color: #0f172a;
    padding: 0.625rem 1rem;
}
.select2-container--default .select2-results__option--highlighted[aria-selected] {
    background-color: #5573ff;        /* primary */
}
.select2-container--default .select2-results__option[aria-selected="true"] {
    background-color: #eef2ff;
    color: #5573ff;
}
/* Search box inside the dropdown */
.select2-container--default .select2-search--dropdown .select2-search__field {
    border: 1px solid #e2e8f0;
    border-radius: 0.5rem;
    padding: 0.5rem 0.75rem;
    font-size: 14px;
}
.select2-container--default .select2-selection--single .select2-selection__clear {
    cursor: pointer;
    float: right;
    font-weight: bold;
    height: 26px;
    margin-top: -5px;
    margin-right: 12px;
    padding-right: 0px;
}
.select2-container--default .select2-search--dropdown .select2-search__field:focus {
    outline: none;
    border-color: #5573ff;
    box-shadow: 0 0 0 2px rgba(85, 115, 255, 0.2);
}                    
[data-schedule-panel] .select2-container--disabled .select2-selection,
[data-schedule-panel] .select2-container--disabled .select2-selection__rendered { 
    cursor: not-allowed !important; 
    }
</style>

<!-- Mobile view -->
 <style>
        /* Mobile: turn the templates table into stacked cards (desktop unchanged) */
        @media (max-width: 1023px) {
          .responsive-table thead { display: none; }
          .responsive-table, .responsive-table tbody { display: block; width: 100%; }
          .responsive-table tbody { padding: 0.75rem; }
          .responsive-table tr {
            display: block;
            position: relative;
            border: 1px solid rgba(120, 130, 150, 0.22) !important;
            border-radius: 1rem;
            padding: 1rem;
            margin-bottom: 0.75rem;
            background: #fff;
          }
          .responsive-table tr:last-child { margin-bottom: 0; }
          .responsive-table td {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            padding: 0.4rem 0 !important;
            border: none !important;
            text-align: left !important;
          }
          .responsive-table td[data-label]::before {
            content: attr(data-label);
            font-weight: 700;
            text-transform: uppercase;
            font-size: 11px;
            letter-spacing: 0.05em;
            color: #94a3b8;
            flex-shrink: 0;
          }
          .responsive-table td.cell-main {
            display: block;
            padding-right: 2.75rem !important;
            padding-bottom: 0.75rem !important;
            margin-bottom: 0.5rem;
            border-bottom: 1px solid rgba(120, 130, 150, 0.15) !important;
          }
          .responsive-table td.cell-main .font-mono { white-space: normal; word-break: break-all; }
          .responsive-table td.cell-action {
            position: absolute;
            top: 0.85rem;
            right: 0.85rem;
            width: auto;
            padding: 0 !important;
          }

            /* Mobile: turn the templates table into stacked cards (desktop unchanged) */
          .responsive-table td.cell-stack {
            display: block;
            padding-bottom: 0.4rem !important;
          }
          .responsive-table td.cell-stack[data-label]::before {
            display: block;
            margin-bottom: 0.5rem;
          }
          /* Empty-state row keeps its centered card look instead of the stacked layout */
          .responsive-table td.cell-empty {
            display: block;
            padding: 2.5rem 1rem !important;
            text-align: center !important;
          }
          .responsive-table td.cell-empty::before { content: none; }

          .responsive-table.geo-table tr {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 0.5rem 0.75rem;
          }
          .responsive-table.geo-table td[data-label="#"] {
            order: 1;
            width: auto;
            padding: 0 !important;
          }
          .responsive-table.geo-table td[data-label="#"]::before { content: none; }
          .responsive-table.geo-table td.cell-main {
            order: 2;
            flex: 1 1 auto;
            min-width: 0;
            padding: 0 !important;
            margin-bottom: 0;
            border-bottom: none !important;
          }
          .responsive-table.geo-table td.cell-action {
            position: static;
            order: 3;
            width: auto;
            margin-left: auto;
            padding: 0 !important;
          }
          .responsive-table.geo-table td.cell-stack {
            order: 4;
            flex-basis: 100%;
            border-top: 1px solid rgba(120, 130, 150, 0.15) !important;
            padding-top: 0.75rem !important;
            margin-top: 0.25rem;
          }
          .responsive-table.geo-table td.cell-empty { flex-basis: 100%; }
        }
      </style>
<!-- Mobile view End-->
<script>
// Auto-initialise any <select class="js-select2"> on the page.
// Options via data-attributes: data-placeholder, data-allow-clear="false".
$(function () {
    $('.js-select2').each(function () {
        var $el = $(this);
        var placeholder = $el.data('placeholder') || '';
        $el.select2({
            placeholder: placeholder,
            width: '100%',
            allowClear: placeholder !== '' && $el.data('allow-clear') !== false
        });
    });
});
</script>

<!-- Flatpickr date/time picker (shared across pages) -->
<link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<style>
/* Match flatpickr accents to the theme */
.flatpickr-day.selected,
.flatpickr-day.selected:hover,
.flatpickr-day.startRange,
.flatpickr-day.endRange {
    background: #3d5afe;
    border-color: #3d5afe;
}
.flatpickr-day.today { border-color: #3d5afe; }
.flatpickr-day:hover { background: #eef2ff; border-color: #eef2ff; }
.flatpickr-months .flatpickr-month,
.flatpickr-current-month .flatpickr-monthDropdown-months,
.flatpickr-weekday { color: #0f172a; }
.flatpickr-calendar { border-radius: 0.75rem; box-shadow: 0 8px 24px rgba(15, 23, 42, 0.12); }
span.flatpickr-day.selected { font-weight: 700; }
</style>
<script>
// Auto-initialise any <input class="js-datetime"> as a date + time picker.
// Options via data-attributes: data-date-format (default "Y-m-d H:i").
document.addEventListener('DOMContentLoaded', function () {
    if (typeof flatpickr === 'undefined') return;
    var now = new Date();
    document.querySelectorAll('.js-datetime').forEach(function (el) {
        flatpickr(el, {
            enableTime: true,
            dateFormat: el.dataset.dateFormat || 'Y-m-d H:i',
            time_24hr: false,
            allowInput: true,
            minuteIncrement: 1,
            defaultHour: now.getHours(),
            defaultMinute: now.getMinutes()
        });
    });
    // Date-only variant: <input class="js-date">
    document.querySelectorAll('.js-date').forEach(function (el) {
        flatpickr(el, { dateFormat: el.dataset.dateFormat || 'Y-m-d', allowInput: true });
    });
});
</script>

<!-- Date Range picker — custom, Tailwind-styled, no dependencies -->
<script>
// Auto-initialises any <input class="js-daterange"> into a date-range picker
// with preset shortcuts, a dual-month calendar and Apply / Clear actions.
(function () {
  var DAYS = ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'];
  var MONTHS = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

  function pad(n) { return (n < 10 ? '0' : '') + n; }
  function fmt(d) { return pad(d.getDate()) + '/' + pad(d.getMonth() + 1) + '/' + d.getFullYear(); }
  function dOnly(d) { return new Date(d.getFullYear(), d.getMonth(), d.getDate()); }
  function addMonths(d, n) { return new Date(d.getFullYear(), d.getMonth() + n, 1); }
  function same(a, b) { return a && b && a.getTime() === b.getTime(); }

  function presets() {
    var t = dOnly(new Date());
    var y = new Date(t); y.setDate(t.getDate() - 1);
    var l7 = new Date(t); l7.setDate(t.getDate() - 6);
    var l30 = new Date(t); l30.setDate(t.getDate() - 29);
    var mStart = new Date(t.getFullYear(), t.getMonth(), 1);
    var mEnd = new Date(t.getFullYear(), t.getMonth() + 1, 0);
    var lmStart = new Date(t.getFullYear(), t.getMonth() - 1, 1);
    var lmEnd = new Date(t.getFullYear(), t.getMonth(), 0);
    return [
      ['Today', t, t],
      ['Yesterday', y, y],
      ['Last 7 Days', l7, t],
      ['Last 30 Days', l30, t],
      ['This Month', mStart, mEnd],
      ['Last Month', lmStart, lmEnd],
      ['Custom Range', null, null]
    ];
  }

  function init(input) {
    var state = { start: null, end: null, view: new Date(), open: false };
    state.view.setDate(1);

    var panel = document.createElement('div');
    panel.className = 'hidden absolute z-[60] bg-white rounded-xl border border-outline-variant shadow-2xl overflow-hidden';
    panel.style.minWidth = '720px';
    document.body.appendChild(panel);

    function inRange(d) { return state.start && state.end && d > state.start && d < state.end; }

    function dayCell(d, otherMonth) {
      var base = 'w-9 h-9 flex items-center justify-center text-body-md rounded-lg cursor-pointer select-none transition-colors';
      if (otherMonth) return '<div class="w-9 h-9"></div>';
      var isEdge = same(d, state.start) || same(d, state.end);
      var cls = base;
      if (isEdge) cls += ' bg-primary text-white font-bold';
      else if (inRange(d)) cls += ' bg-primary/10 text-on-surface';
      else cls += ' text-on-surface hover:bg-primary/10';
      return '<div class="' + cls + '" data-day="' + d.getFullYear() + '-' + d.getMonth() + '-' + d.getDate() + '">' + d.getDate() + '</div>';
    }

    function calendar(month, side) {
      var first = new Date(month.getFullYear(), month.getMonth(), 1);
      var offset = first.getDay();
      var daysIn = new Date(month.getFullYear(), month.getMonth() + 1, 0).getDate();
      var head = '<div class="flex items-center justify-between mb-3 h-8">' +
        (side === 'left' ? '<button type="button" data-nav="-1" class="w-8 h-8 flex items-center justify-center rounded-lg text-outline hover:bg-surface-container-high"><span class="material-symbols-outlined text-[20px]">chevron_left</span></button>' : '<span class="w-8"></span>') +
        '<span class="font-bold text-on-surface uppercase tracking-wide">' + MONTHS[month.getMonth()] + ' ' + month.getFullYear() + '</span>' +
        (side === 'right' ? '<button type="button" data-nav="1" class="w-8 h-8 flex items-center justify-center rounded-lg text-outline hover:bg-surface-container-high"><span class="material-symbols-outlined text-[20px]">chevron_right</span></button>' : '<span class="w-8"></span>') +
        '</div>';
      var wd = '<div class="grid grid-cols-7 mb-1">' + DAYS.map(function (d) {
        return '<div class="w-9 h-8 flex items-center justify-center text-label-sm font-bold text-outline">' + d + '</div>';
      }).join('') + '</div>';
      var cells = '';
      for (var i = 0; i < offset; i++) cells += dayCell(null, true);
      for (var day = 1; day <= daysIn; day++) cells += dayCell(new Date(month.getFullYear(), month.getMonth(), day), false);
      return '<div>' + head + wd + '<div class="grid grid-cols-7 gap-y-1">' + cells + '</div></div>';
    }

    function render() {
      var ps = presets();
      var rangesHtml = ps.map(function (p, i) {
        var active = p[1] && state.start && state.end && same(state.start, p[1]) && same(state.end, p[2]);
        var cls = 'px-4 py-2 rounded-lg text-body-md font-semibold cursor-pointer transition-colors ' +
          (active ? 'bg-primary text-white' : 'text-secondary hover:bg-primary/10');
        return '<div class="' + cls + '" data-preset="' + i + '">' + p[0] + '</div>';
      }).join('');

      var label = state.start ? (fmt(state.start) + ' - ' + fmt(state.end || state.start)) : 'No range selected';

      panel.innerHTML =
        '<div class="flex">' +
          '<div class="w-44 border-r border-outline-variant/60 p-2 space-y-1">' + rangesHtml + '</div>' +
          '<div class="p-4"><div class="flex gap-8">' + calendar(state.view, 'left') + calendar(addMonths(state.view, 1), 'right') + '</div></div>' +
        '</div>' +
        '<div class="flex items-center gap-3 border-t border-outline-variant/60 px-4 py-3">' +
          '<span class="text-label-sm text-outline mr-auto" data-role="label">' + label + '</span>' +
          '<button type="button" data-role="clear" class="px-4 py-2 rounded-lg text-[14px] font-bold text-secondary hover:bg-surface-container-high transition-colors">Clear</button>' +
          '<button type="button" data-role="apply" class="px-5 py-2 rounded-lg text-[14px] font-bold bg-primary text-white hover:opacity-95 transition-all shadow-sm">Apply</button>' +
        '</div>';
    }

    function position() {
      var r = input.getBoundingClientRect();
      panel.style.top = (window.scrollY + r.bottom + 8) + 'px';
      var left = window.scrollX + r.left;
      var maxLeft = window.scrollX + document.documentElement.clientWidth - panel.offsetWidth - 12;
      panel.style.left = Math.max(8, Math.min(left, maxLeft)) + 'px';
    }

    function open() { render(); panel.classList.remove('hidden'); position(); state.open = true; }
    function close() { panel.classList.add('hidden'); state.open = false; }

    function pickDay(d) {
      if (!state.start || (state.start && state.end)) { state.start = d; state.end = null; }
      else if (d < state.start) { state.start = d; }
      else { state.end = d; }
      render();
    }

    input.addEventListener('click', function () { state.open ? close() : open(); });

    panel.addEventListener('click', function (e) {
      var nav = e.target.closest('[data-nav]');
      if (nav) { state.view = addMonths(state.view, parseInt(nav.dataset.nav, 10)); render(); return; }
      var day = e.target.closest('[data-day]');
      if (day) { var p = day.dataset.day.split('-'); pickDay(new Date(+p[0], +p[1], +p[2])); return; }
      var preset = e.target.closest('[data-preset]');
      if (preset) {
        var sel = presets()[+preset.dataset.preset];
        if (sel[1]) { state.start = sel[1]; state.end = sel[2]; state.view = new Date(sel[1].getFullYear(), sel[1].getMonth(), 1); render(); }
        return;
      }
      if (e.target.closest('[data-role="clear"]')) { state.start = state.end = null; input.value = ''; close(); return; }
      if (e.target.closest('[data-role="apply"]')) {
        if (state.start) input.value = fmt(state.start) + ' - ' + fmt(state.end || state.start);
        close();
        return;
      }
    });

    document.addEventListener('click', function (e) {
      if (state.open && !panel.contains(e.target) && e.target !== input) close();
    });
    window.addEventListener('resize', function () { if (state.open) position(); });
  }

  document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.js-daterange').forEach(init);
  });
})();
</script>