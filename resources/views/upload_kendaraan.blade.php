<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Upload Kendaraan</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f6f6f6;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: white;
            padding: 20px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #eee;
        }

        .navbar img {
            height: 50px;
        }

        .navbar-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .logout-btn {
            border: 1px solid #000;
            background-color: white;
            padding: 8px 20px;
            border-radius: 6px;
            font-size: 14px;
            cursor: pointer;
        }

        .profile-icon {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            border: 1px solid black;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }

        .form-container {
            background-color: white;
            max-width: 800px;
            margin: 40px auto;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .form-group input[type="text"],
        .form-group input[type="number"] {
            width: 100%;
            padding: 12px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 14px;
        }

        .file-upload {
            padding: 10px 20px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            border-radius: 6px;
            cursor: pointer;
            width: fit-content;
            font-size: 14px;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 15px;
            margin-top: 40px;
        }

        .discard-btn {
            background-color: #d3d3d3;
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        .upload-btn {
            background-color: #ff6600;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        @media (max-width: 600px) {
            .form-actions {
                flex-direction: column;
                align-items: stretch;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <div class="navbar">
        <img src="{{ asset('image/image.png') }}" alt="Wahana Visi Logo" />
        <div class="navbar-right">
            <button class="logout-btn">Log out</button>
            <div class="profile-icon">👤</div>
        </div>
    </div>

    <!-- Form -->
    <div class="form-container">
        <div class="form-group">
            <label>Nama Kendaraan</label>
            <input type="text" placeholder="Ruangan NTT" />
        </div>

        <div class="form-group">
            <label>Total Kursi</label>
            <input type="number" placeholder="12" />
        </div>

        <div class="form-group">
            <label>Lokasi</label>
            <input type="text" placeholder="Wahana Visi Bintaro" />
        </div>

        <div class="form-group">
            <label>Kelengkapan</label>
            <input type="text" placeholder="Free wifi, Projector, Papan Tulis" />
        </div>

        <div class="form-group">
            <label>Plat Kendaraan</label>
            <input type="text" placeholder="B 1234 WBF" />
        </div>

        <div class="form-group">
            <label>Gambar Kendaraan</label>
            <label class="file-upload">Insert PNG</label>
        </div>

        <div class="form-actions">
            <button class="discard-btn">Discard</button>
            <button class="upload-btn">Upload</button>
        </div>
    </div>

</body>

</html>
