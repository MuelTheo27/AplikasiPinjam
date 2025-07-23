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

    .left-form, .right-table {
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

    .form-control, select {
      width: 100%;
      padding: 10px;
      border-radius: 6px;
      border: 1px solid #ccc;
      font-size: 14px;
      box-sizing: border-box; /* supaya padding tidak bikin input melebar */
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

    table th, table td {
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
  </style>

  <div class="form-container">
    <div class="left-form">
      <h2 style="text-align: center;">Edit Administrator</h2>

      <form method="POST" action="#">
        @csrf

        <div class="form-group">
          <label for="eLabel">Email <span class="text-danger">*</span></label>
          <input type="email" name="email" class="form-control" value="ab@gmail.com" placeholder="Masukkan email" id="eLabel" required>
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
            <td></td><td></td><td></td>
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
            <td></td><td></td><td></td>
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
