@extends('templateAdmin')

@section('content')
</style>
<!-- Google Fonts: Inter -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800&display=swap" rel="stylesheet">
</style>
<style>
    table.custom-bordered {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        font-size: 1em;
    font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #fff;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }
    table.custom-bordered th, table.custom-bordered td {
        font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        border: 1px solid #dee2e6;
        padding: 12px 16px;
        text-align: center;
    }
    table.custom-bordered th {
        background-color: #f8f9fa;
        font-weight: bold;
    }
    table.custom-bordered tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    table.custom-bordered tr:hover {
        background-color: #e9ecef;
    }
    .btn {
        font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        padding: 4px 12px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 0.95em;
        margin-right: 4px;
        transition: background 0.2s;
    }
    .btn-primary { background: #007bff; color: #fff; }
    .btn-primary:hover { background: #0056b3; }
    .btn-warning { background: #ffc107; color: #212529; }
    .btn-warning:hover { background: #e0a800; }
    .btn-danger { background: #dc3545; color: #fff; }
    .btn-danger:hover { background: #a71d2a; }
    .btn-action {
    font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background:  #f4570a;
    color:  #fff;
    border: 1px solid  #f4570a;
    border-radius: 4px;
    padding: 6px 8px;
    font-size: 1em;
    font-weight: 400;
    box-shadow: 0 1px 2px rgba(66,133,244,0.08);
    transition: background 0.2s, color 0.2s;
}
.btn-action:hover {
    background:  #f4570a;
    color: #fff;
}

    .btn-action-label {
        font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        font-size: 1em;
        font-weight: 400;
        
    }
</style>
<div style="font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <table class="custom-bordered">
        <thead>
            <tr>
                <th>Email</th>
                <th>Status</th>
                <th>Level</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>user@example.com</td>
                <td>Active</td>
                <td>Admin</td>
                <td>
                    <a href="{{ route('admin.userManage.edit') }}">
                    <button class="btn btn-action"><p class="btn-action-label">Action</p></button>
                    </a>
                </td>
            </tr>
            <tr>
                <td>user@example.com</td>
                <td>Active</td>
                <td>Admin</td>
                <td>
                    <a href="{{ route('admin.userManage.edit') }}">
                    <button class="btn btn-action"><p class="btn-action-label">Action</p></button>
                    </a>
                </td>
            </tr>
            <tr>
                <td>user@example.com</td>
                <td>Active</td>
                <td>Admin</td>
                <td>
                    <a href="{{ route('admin.userManage.edit') }}">
                    <button class="btn btn-action"><p class="btn-action-label">Action</p></button>
                    </a>
                </td>
            </tr>
            <tr>
                <td>user@example.com</td>
                <td>Active</td>
                <td>Admin</td>
                <td>
                    <a href="{{ route('admin.userManage.edit') }}">
                    <button class="btn btn-action"><p class="btn-action-label">Action</p></button>
                    </a>
                </td>
            </tr>
            <tr>
                <td>user@example.com</td>
                <td>Active</td>
                <td>Admin</td>
                <td>
                    <a href="{{ route('admin.userManage.edit') }}">
                    <button class="btn btn-action"><p class="btn-action-label">Action</p></button>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection