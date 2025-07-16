@extends('Template')

@section('content')
    <link rel="stylesheet" href="/css/barang.css">
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
