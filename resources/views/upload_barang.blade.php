<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Upload Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f6f6f6;
        }

        .navbar {
            background-color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 30px;
            border-bottom: 1px solid #ddd;
        }

        .navbar img {
            height: 50px;
        }

        .navbar-right {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logout-btn {
            border: 1px solid black;
            background: white;
            padding: 5px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        .profile-icon {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background-color: black;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .profile-icon::after {
            content: "👤";
            font-size: 16px;
            color: white;
        }

        .form-container {
            max-width: 700px;
            background-color: white;
            padding: 40px;
            margin: 40px auto;
            border-radius: 10px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }

        .form-group input[type="text"],
        .form-group input[type="number"] {
            width: 100%;
            padding: 10px 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 14px;
        }

        .file-upload {
            display: inline-block;
            padding: 10px 20px;
            background-color: #eee;
            border: 1px dashed #ccc;
            border-radius: 5px;
            cursor: pointer;
            color: #777;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 15px;
        }

        .discard-btn {
            background-color: #d3d3d3;
            border: none;
            padding: 10px 25px;
            border-radius: 8px;
            font-size: 16px;
            color: #333;
            cursor: pointer;
        }

        .upload-btn {
            background-color: #ff4d00;
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        .upload-btn:hover {
            background-color: #e64500;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <div class="navbar">
        <img src="{{ asset('image/image.png') }}" alt="Wahana Visi Logo">
        <div class="navbar-right">
            <form method="POST" action="/logout" style="margin: 0;">
                @csrf
                <button class="logout-btn">Log out</button>
            </form>
            <div class="profile-icon"></div>
        </div>
    </div>

    <!-- Form Upload Barang -->
    <div class="form-container">
        <form method="POST" action="#" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" placeholder="Proyektor" name="nama_barang" />
            </div>


            <div class="form-group">
                <label>Lokasi</label>
                <input type="text" placeholder="Wahana Visi Bintaro" name="lokasi" />
            </div>




            <div class="form-actions">
                <button type="button" class="discard-btn">Discard</button>
                <button type="submit" class="upload-btn">Upload</button>
            </div>
        </form>
    </div>

</body>

</html>
