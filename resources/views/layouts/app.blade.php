<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LaporBanjir') | BPBD Kabupaten Bandung</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: Arial, Helvetica, sans-serif; background: #f4f7fb; color: #1f2937; }
        a { color: inherit; }
        .topbar { background: #0b5d79; color: white; box-shadow: 0 2px 12px rgba(15, 23, 42, .14); }
        .topbar-inner { max-width: 1080px; margin: 0 auto; padding: 16px 22px; display: flex; align-items: center; justify-content: space-between; gap: 22px; }
        .brand { display: flex; align-items: center; gap: 12px; text-decoration: none; }
        .brand-mark { width: 42px; height: 42px; border-radius: 10px; display: grid; place-items: center; background: #e8f5fb; color: #0b5d79; font-weight: 800; }
        .brand-title { font-size: 21px; font-weight: 800; letter-spacing: .2px; }
        .brand-sub { font-size: 11px; opacity: .78; margin-top: 2px; text-transform: uppercase; letter-spacing: .8px; }
        nav { display: flex; gap: 7px; flex-wrap: wrap; justify-content: flex-end; }
        nav a { text-decoration: none; padding: 9px 12px; border-radius: 8px; font-size: 13px; font-weight: 700; }
        nav a:hover, nav a.active { background: rgba(255,255,255,.16); }
        .container { max-width: 1080px; margin: 0 auto; padding: 32px 22px 44px; min-height: calc(100vh - 151px); }
        .page-heading { margin-bottom: 22px; }
        .page-heading h1 { margin: 0 0 8px; font-size: 28px; color: #12364a; }
        .page-heading p { margin: 0; color: #64748b; line-height: 1.6; }
        .card { background: white; border: 1px solid #dce5ec; border-radius: 12px; padding: 22px; box-shadow: 0 7px 20px rgba(15, 23, 42, .05); }
        .grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; }
        label { display: block; font-weight: 700; margin: 0 0 7px; color: #334155; }
        input, select, textarea { width: 100%; border: 1px solid #cbd5e1; border-radius: 8px; padding: 11px 12px; font: inherit; background: white; }
        input:focus, select:focus, textarea:focus { outline: 3px solid #d7eff8; border-color: #0b5d79; }
        .field { margin-bottom: 17px; }
        .error-text { color: #b91c1c; font-size: 13px; margin-top: 6px; }
        .btn { display: inline-flex; justify-content: center; align-items: center; padding: 11px 17px; border-radius: 8px; border: 0; cursor: pointer; text-decoration: none; font-weight: 700; font-size: 14px; }
        .btn-primary { background: #0b5d79; color: white; }
        .btn-secondary { background: #e8eef3; color: #273746; }
        .actions { display: flex; gap: 10px; flex-wrap: wrap; }
        .alert-box { display: flex; gap: 12px; align-items: flex-start; padding: 13px 14px; border-radius: 9px; margin-bottom: 18px; line-height: 1.45; }
        .alert-icon { width: 25px; height: 25px; border: 2px solid; border-radius: 50%; display: grid; place-items: center; font-weight: 800; flex: 0 0 auto; }
        .report-card { background: white; border: 1px solid #dbe5ec; border-radius: 11px; padding: 18px; }
        .report-card h3 { margin: 0 0 9px; font-size: 17px; color: #12364a; }
        .meta { color: #64748b; font-size: 13px; line-height: 1.55; }
        .status { display: inline-block; padding: 5px 9px; border-radius: 999px; font-size: 12px; font-weight: 800; margin-top: 10px; }
        .waspada { background: #fef3c7; color: #92400e; }
        .siaga { background: #ffedd5; color: #9a3412; }
        .awas { background: #fee2e2; color: #991b1b; }
        .confirmation { max-width: 650px; margin: 20px auto; text-align: center; }
        .confirm-value { font-size: 28px; font-weight: 800; color: #0b5d79; margin: 18px 0; }
        footer { background: #fff; border-top: 1px solid #dde5eb; color: #64748b; }
        footer .inner { max-width: 1080px; margin: 0 auto; padding: 17px 22px; display: flex; justify-content: space-between; gap: 16px; font-size: 12px; }
        @media (max-width: 760px) { .topbar-inner, footer .inner { align-items: flex-start; flex-direction: column; } .grid { grid-template-columns: 1fr; } nav { justify-content: flex-start; } }
    </style>
</head>
<body>
<header class="topbar">
    <div class="topbar-inner">
        <a class="brand" href="{{ route('banjir.form') }}">
            <div class="brand-mark">BP</div>
            <div>
                <div class="brand-title">LaporBanjir</div>
                <div class="brand-sub">BPBD Kabupaten Bandung</div>
            </div>
        </a>
        <nav>
            <a class="{{ request()->routeIs('banjir.form') ? 'active' : '' }}" href="{{ route('banjir.form') }}">Form Pelaporan</a>
            <a class="{{ request()->routeIs('banjir.index') ? 'active' : '' }}" href="{{ route('banjir.index') }}">Daftar Laporan</a>
            <a href="{{ route('smartresident.home') }}">SmartResident</a>
        </nav>
    </div>
</header>

<main class="container">
    @yield('content')
</main>

<footer>
    <div class="inner">
        <span>© 2026 LaporBanjir - Prototipe Praktikum Blade Laravel</span>
        <span>BPBD Kabupaten Bandung</span>
    </div>
</footer>
</body>
</html>
