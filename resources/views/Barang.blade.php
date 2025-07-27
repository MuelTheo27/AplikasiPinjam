@extends('Template')

@section('content')
    <link rel="stylesheet" href="/css/barang.css">

    {{-- CONTAINER FILTER + SEARCH --}}
    <div
        style="display: flex; justify-content: space-between; align-items: center; margin-top: 1.5rem; margin-bottom: 1rem; gap: 1rem; flex-wrap: wrap; margin-left:10px">
        {{-- Form Filter (Kiri) --}}
        <form method="GET" action="" style="display: flex; gap: 0.5rem; align-items: center; flex-wrap: wrap;">
            <select name="timeFilter"
                style="padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.375rem; font-size: 0.875rem;">
                <option value="">Waktu: Semua</option>
                <option value="06:00-08:00"{{ request('timeFilter') == '06:00-08:00' ? ' selected' : '' }}>06:00 - 08:00
                </option>
                <option value="08:00-10:00"{{ request('timeFilter') == '08:00-10:00' ? ' selected' : '' }}>08:00 - 10:00
                </option>
                <option value="10:00-12:00"{{ request('timeFilter') == '10:00-12:00' ? ' selected' : '' }}>10:00 - 12:00
                </option>
                <option value="12:00-14:00"{{ request('timeFilter') == '12:00-14:00' ? ' selected' : '' }}>12:00 - 14:00
                </option>
                <option value="14:00-16:00"{{ request('timeFilter') == '14:00-16:00' ? ' selected' : '' }}>14:00 - 16:00
                </option>
                <option value="16:00-18:00"{{ request('timeFilter') == '16:00-18:00' ? ' selected' : '' }}>16:00 - 18:00
                </option>
                <option value="18:00-21:00"{{ request('timeFilter') == '18:00-21:00' ? ' selected' : '' }}>18:00 - 21:00
                </option>
            </select>

            <select name="kategoriFilter"
                style="padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.375rem; font-size: 0.875rem;">
                <option value="">Kategori: Semua</option>
                <option value="Laptop"{{ request('kategoriFilter') == 'Laptop' ? ' selected' : '' }}>Laptop</option>
                <option value="Projektor"{{ request('kategoriFilter') == 'Projektor' ? ' selected' : '' }}>Projektor
                </option>
            </select>

            <button type="submit"
                style="background-color: #FF5722; color: white; border: none; padding: 0.5rem 1rem; border-radius: 0.375rem; cursor: pointer;">
                Filter
            </button>
        </form>

        {{-- Form Search (Kanan) --}}
        <form method="GET" action="" autocomplete="off" style="display: flex; gap: 0.5rem; align-items: center; flex-wrap: wrap; margin-right:10px">
            <input type="text" name="search" placeholder="Search..." value="{{ request('search') }}"
                style="padding: 0.5rem 1rem; border: 1px solid #ccc; border-radius: 0.375rem; font-size: 0.875rem;">

            <button type="submit"
                style="background-color: #FF5722; color: white; border: none; padding: 0.5rem 1rem; border-radius: 0.375rem; cursor: pointer;">
                Search
            </button>
        </form>
    </div>

    {{-- TABEL (Sama seperti kode awal kamu) --}}
    <div class="table-container">
        <table class="styled-table">
            <thead>
                <tr>
                    <th><input type="checkbox" /></th>
                    <th>Header A</th>
                    <th>Header B</th>
                    <th>Header C</th>
                    <th>Header D</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-row">
                    <td><input type="checkbox" /></td>
                    <td>A1</td>
                    <td>B1</td>
                    <td>C1</td>
                    <td>1</td>
                </tr>
                <tr class="table-row">
                    <td><input type="checkbox" /></td>
                    <td>A2</td>
                    <td>B2</td>
                    <td>C2</td>
                    <td>2</td>
                </tr>
                <tr class="table-row">
                    <td><input type="checkbox" /></td>
                    <td>A3</td>
                    <td>B3</td>
                    <td>C3</td>
                    <td>3</td>
                </tr>
                <tr class="table-row">
                    <td><input type="checkbox" /></td>
                    <td>A4</td>
                    <td>B4</td>
                    <td>C4</td>
                    <td>4</td>
                </tr>
                <tr class="table-row">
                    <td><input type="checkbox" /></td>
                    <td>A5</td>
                    <td>B5</td>
                    <td>C5</td>
                    <td>5</td>
                </tr>
                <tr class="table-row">
                    <td><input type="checkbox" /></td>
                    <td>A6</td>
                    <td>B6</td>
                    <td>C6</td>
                    <td>6</td>
                </tr>
                <tr class="table-row">
                    <td><input type="checkbox" /></td>
                    <td>A7</td>
                    <td>B7</td>
                    <td>C7</td>
                    <td>7</td>
                </tr>
                <tr class="table-row">
                    <td><input type="checkbox" /></td>
                    <td>A8</td>
                    <td>B8</td>
                    <td>C8</td>
                    <td>8</td>
                </tr>
                <tr class="table-row">
                    <td><input type="checkbox" /></td>
                    <td>A9</td>
                    <td>B9</td>
                    <td>C9</td>
                    <td>9</td>
                </tr>
                <tr class="table-row">
                    <td><input type="checkbox" /></td>
                    <td>A10</td>
                    <td>B10</td>
                    <td>C10</td>
                    <td>10</td>
                </tr>
            </tbody>
        </table>

        {{-- Fake Pagination Manual --}}
        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">&raquo;</a>
        </div>
    </div>
@endsection
