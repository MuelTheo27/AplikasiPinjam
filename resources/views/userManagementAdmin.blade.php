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
  }

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
    margin: 0;
    font-size: 1em;
    font-weight: 400;
  }

  /* Tombol Save (Hijau) */
  .btn-action {
    font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #28a745;
    color: #ffffff;
    border: none;
    border-radius: 4px;
    padding: 10px 14px;
    font-size: 1em;
    font-weight: 400;
    box-shadow: 0 1px 2px rgba(66, 133, 244, 0.08);
    transition: background 0.2s ease;
    cursor: pointer;
  }

  .btn-action:hover {
    background: #218838;
  }

  /* Tombol Cancel (Merah) */
  .btn-action-cancel {
    font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #dc3545;
    color: #ffffff;
    border: none;
    border-radius: 4px;
    padding: 10px 14px;
    font-size: 1em;
    font-weight: 400;
    box-shadow: 0 1px 2px rgba(66, 133, 244, 0.08);
    transition: background 0.2s ease;
    cursor: pointer;
  }

  .btn-action-cancel:hover {
    background: #c82333;
  }

  .action.btn-holder {
    display: flex;
    justify-content: flex-end;
    gap: 20px;
    width: 40%;
  }

  .action.btn-group {
    width: 100%;
    height: 15%;
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
        <a href="{{ route('admin.userManage') }}">
          <button class="btn btn-action-cancel" type="button">
            <p class="btn-action-label">Cancel</p>
          </button>
        </a>
        <a href="#">
          <button class="btn btn-action" type="submit">
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
          <th></th>
          <th>Menu</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @php
            $mediaMenus = ['Admin Kendaraan', 'Admin Barang', 'Admin Ruangan'];
        @endphp
        @foreach($mediaMenus as $menu)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td class="submenu">{{ $menu }}</td>
          <td><input type="checkbox" checked></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
