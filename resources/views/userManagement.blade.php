@extends('templateAdmin')

@section('content')
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        table.custom-bordered {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 1em;
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        form button.btn-action {
            border-left: none;
        }

        a.btn-action {
            border-right: none;
        }

        table.custom-bordered th,
        table.custom-bordered td {
            border: 1px solid #dee2e6;
            padding: 12px 16px;
            text-align: center;
        }

        table.custom-bordered th {
            background-color: #f8f9fa;
            font-weight: bold;
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

        .btn-primary {
            background: #007bff;
            color: #fff;
        }

        .btn-primary:hover {
            background: #0056b3;
        }

        .btn-warning {
            background: #ffc107;
            color: #212529;
        }

        .btn-warning:hover {
            background: #e0a800;
        }

        .btn-danger {
            background: #dc3545;
            color: #fff;
        }

        .btn-danger:hover {
            background: #a71d2a;
        }

        .btn-action {
            background: #f4570a;
            color: #fff;
            border: 1px solid #f4570a;
            border-radius: 4px;
            padding: 6px 8px;
            font-size: 1em;
            box-shadow: 0 1px 2px rgba(66, 133, 244, 0.08);
            transition: background 0.2s, color 0.2s;
        }

        .btn-action:hover {
            background: #d94f08;
            color: #fff;
        }
    </style>

    <div style="font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
        <table class="custom-bordered">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Level</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 5; $i++)
                    <tr>
                        <td>user{{ $i + 1 }}@example.com</td>
                        <td>Name</td>
                        <td>Active</td>
                        <td>Admin</td>
                        <td>
                            <!-- Tombol Edit -->
                            <a href="{{ route('admin.userManage.edit') }}">
                                <button class="btn btn-action">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('admin.userManage.destroy', $i + 1) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-action"
                                    onclick="return confirm('Yakin ingin menghapus user ini?')">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
@endsection
