@extends('templateAdmin')

@section('content')
  <style>
    .content {
      overflow-y: hidden !important;
      display: flex;
      justify-content: center;
      align-items: center;
      height: calc(100vh - 68px); /* tinggi dikurangi navbar */
    }

    .form-container {
      background-color: white;
      width: 100%;
      max-width: 600px;
      padding: 24px 32px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }

    .form-group {
      margin-bottom: 16px;
    }

    .form-group label {
      display: block;
      margin-bottom: 6px;
      font-weight: 600;
      font-size: 14px;
    }

    .form-group input[type="text"],
    .form-group input[type="number"],
    .form-group input[type="file"] {
      width: 100%;
      padding: 10px;
      border-radius: 6px;
      border: 1px solid #ccc;
      font-size: 14px;
    }

    .form-actions {
      display: flex;
      justify-content: flex-end;
      gap: 10px;
      margin-top: 24px;
    }

    .discard-btn,
    .upload-btn {
      padding: 10px 24px;
      font-size: 14px;
      border-radius: 6px;
      cursor: pointer;
      border: none;
    }

    .discard-btn {
      background-color: #d3d3d3;
    }

    .upload-btn {
      background-color: #ff6600;
      color: white;
    }

    @media (max-width: 600px) {
      .form-actions {
        flex-direction: column;
        align-items: stretch;
      }
    }
  </style>

  <div class="form-container">
    <form method="POST" action="" enctype="multipart/form-data">
      @csrf

      <div class="form-group">
        <label>Nama Barang</label>
        <input type="text" name="nama_barang" placeholder="Contoh: Proyektor" required />
      </div>

      <div class="form-group">
        <label>Lokasi</label>
        <input type="text" name="lokasi" placeholder="Contoh: Wahana Visi Bintaro" required />
      </div>

      <div class="form-group">
        <label>Gambar Barang</label>
        <input type="file" name="gambar_barang" accept="image/png" required />
      </div>

      <div class="form-actions">
        <button type="reset" class="discard-btn">Discard</button>
        <button type="submit" class="upload-btn">Upload</button>
      </div>
    </form>
  </div>
@endsection
