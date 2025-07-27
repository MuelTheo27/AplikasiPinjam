@extends('templateAdmin')

@section('content')
    <style>
        body {
            background-color: #f6f6f6;
        }

        .container {
            padding: 30px;
            max-width: 1200px;
            margin: 20px auto;
        }

        .filter-wrapper {
            display: flex;
            justify-content: flex-start;
            margin-bottom: 30px;
        }

        .filter-select {
            padding: 10px 16px;
            font-size: 14px;
            border: none;
            outline: none;
            border-radius: 8px;
            background-color: #ffffff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            width: 250px;
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF8,%3Csvg fill='black' height='18' viewBox='0 0 24 24' width='18' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M7 10l5 5 5-5z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 12px center;
            background-size: 14px;
            cursor: pointer;
        }

        .summary-cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .summary-card {
            background-color: #ff5e00;
            color: white;
            padding: 16px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        }

        .summary-card h3 {
            font-size: 16px;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .summary-card p {
            font-size: 22px;
            margin: 0;
            font-weight: bold;
        }
    </style>

    <div class="container">
        <div class="filter-wrapper">
            <select class="filter-select" id="filterSelect">
                <option value="all">Semua Kategori</option>
                <option value="ruangan">Ruangan</option>
                <option value="kendaraan">Kendaraan</option>
            </select>
        </div>

        <div class="summary-cards">
            <div class="summary-card">
                <h3>Total Domains Expiring Soon</h3>
                <p>15</p>
            </div>
            <div class="summary-card">
                <h3>Total Bills Due Soon</h3>
                <p>15</p>
            </div>
            <div class="summary-card">
                <h3>Reminder Sent Today</h3>
                <p>15</p>
            </div>
        </div>
    </div>

    <script></script>
@endsection
