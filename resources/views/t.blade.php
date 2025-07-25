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
        text-align: left;
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
                <td>Admin Barang</td>
                <td>
                    <a href="{{ route('admin.userManage.edit') }}">
                    <button class="btn btn-action"><p class="btn-action-label">Action</p></button>
                    </a>
                </td>
            </tr>
            <tr>
                <td>user@example.com</td>
                <td>Active</td>
                <td>Admin Kendaraan</td>
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


@extends('templateAdmin')

@section('content')
  <style>
    .content {
    overflow-y: auto;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    height: calc(100vh - 68px);
    padding: 40px;
    background-color: #f9f9f9;
    }

    .form-container {
    background-color: white;
    width: 100%;
    max-width: 1200px;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    display: flex;
    gap: 40px;
    }

    .left-form,
    .right-table {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    }

    .left-form h2 {
    margin-bottom: 20px;
    font-size: 24px;
    color: #333;
    }

    .form-group {
    margin-bottom: 20px;
    }

    label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #444;
    }

    .form-control,
    select {
    width: 100%;
    padding: 10px;
    border-radius: 6px;
    border: 1px solid #ccc;
    font-size: 14px;
    box-sizing: border-box;
    /* supaya padding tidak bikin input melebar */
    }

    /* Placeholder transparan */
    .form-control::placeholder {
    color: rgba(0, 0, 0, 0.3);
    }

    table {
    width: 100%;
    border-collapse: collapse;
    font-size: 14px;
    }

    table th,
    table td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: center;
    }

    table th {
    background-color: #f4570a;
    color: white;
    }

    .submenu {
    padding-left: 20px;
    text-align: left;
    }

    input[type="checkbox"] {
    width: 16px;
    height: 16px;
    }

    .btn-action-label {
    font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    font-size: 1em;
    font-weight: 400;

    }

       .btn-action {
    font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background:  #f4570a;
    color: #ffffff;
    border:none;
    border-radius: 4px;
    padding: 10px 14px;
    font-size: 1em;
    font-weight: 400;
    box-shadow: 0 1px 2px rgba(66,133,244,0.08);
    transition: background 0.2s, color 0.2s;
}


       .btn-action-cancel {
    font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #dc3545;
    color: #ffffff;
    border:none;
    border-radius: 4px;
    padding: 10px 14px;
    font-size: 1em;
    font-weight: 400;
    box-shadow: 0 1px 2px rgba(66,133,244,0.08);
    transition: background 0.2s, color 0.2s;
}
    .action.btn-holder {
    display: flex;
    justify-content : flex-end;
    gap : 20px;
    width: 40%;
    
    }

    .action.btn-group {
      width : 100%;
      height : 15%;
      align-items: center;
      display: flex;
      justify-content: flex-end;
    }
  </style>

  <div class="form-container">
    <div class="left-form">
    <h2 style="text-align: center;">Edit Administrator</h2>

    <form method="POST" action="#">
      @csrf

      <div class="form-group">
      <label for="eLabel">Email <span class="text-danger">*</span></label>
      <input type="email" name="email" class="form-control" value="ab@gmail.com" placeholder="Masukkan email"
        id="eLabel" required>
      </div>

      <div class="form-group">
      <label for="pLabel">Password</label>
      <input type="password" name="password" class="form-control" id="pLabel">
      </div>

      <div class="form-group">
      <label for="sLabel">Status</label>
      <select name="status" class="form-control" id="sLabel">
        <option value="" disabled>Pilih status</option>
        <option value="active">Active</option>
        <option value="notActive" selected>Not Active</option>
      </select>
      </div>

      <div class="form-group">
      <label for="lLabel">Level</label>
      <select name="level" class="form-control" id="lLabel">
        <option value="" disabled>Pilih level</option>
        <option value="admin" selected>Admin</option>
        <option value="superAdmin">Super Admin</option>
      </select>
      </div>
    </form>

      <div class="action btn-group">
        <div class="action btn-holder">
          <a href="{{ route('admin.userManage.edit') }}">
          <button class="btn btn-action-cancel">
            <p class="btn-action-label">Cancel</p>
          </button>
          </a>
          <a href="">
          <button class="btn btn-action">
            <p class="btn-action-label">Save</p>
          </button>
          </a>
        </div>
      </div>
    </div>

    <div class="right-table">
    <table>
      <thead>
      <tr>
        <th>#</th>
        <th>Menu</th>
        <th>List</th>
        <th>Add</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>1</td>
        <td>Media Setting</td>
        <td><input type="checkbox"></td> <!-- checkbox tidak disabled agar bisa dipencet -->
        <td></td>
        <td></td>
        <td></td>
      </tr>
      @php
      $mediaMenus = ['Banner Page', 'Slider Homepage', 'Gallery Our Supporter', 'Home Pop Up', 'Magazine Pop Up', 'Floating Button'];
      @endphp
      @foreach($mediaMenus as $menu)
      <tr>
      <td></td>
      <td class="submenu">Media Setting > {{ $menu }}</td>
      <td><input type="checkbox" checked></td>
      <td><input type="checkbox" checked></td>
      <td><input type="checkbox" checked></td>
      <td><input type="checkbox" checked></td>
      </tr>
    @endforeach

      <tr>
        <td>2</td>
        <td>Portal General</td>
        <td><input type="checkbox" checked></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>

      <tr>
        <td></td>
        <td class="submenu">Portal General > Sponsor Child</td>
        <td><input type="checkbox"></td>
        <td><input type="checkbox" checked></td>
        <td><input type="checkbox" checked></td>
        <td><input type="checkbox" checked></td>
      </tr>

      <tr>
        <td></td>
        <td class="submenu">Portal General > Sponsor Child > About Child Sponsorship</td>
        <td><input type="checkbox"></td>
        <td><input type="checkbox" checked></td>
        <td><input type="checkbox" checked></td>
        <td><input type="checkbox" checked></td>
      </tr>

      <tr>
        <td></td>
        <td class="submenu">Portal General > Sponsor Child > Sponsor a Child</td>
        <td><input type="checkbox"></td>
        <td><input type="checkbox" checked></td>
        <td><input type="checkbox" checked></td>
        <td><input type="checkbox" checked></td>
      </tr>
      </tbody>
    </table>
    </div>


  </div>
@endsection