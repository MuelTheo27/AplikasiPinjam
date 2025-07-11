<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Page - Wahana Visi</title>
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

        .content {
            text-align: center;
            margin-top: 80px;
        }

        .content h2 {
            font-weight: bold;
            margin-bottom: 40px;
        }

        .card {
            background-color: white;
            display: inline-block;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 8px rgba(0,0,0,0.1);
        }

        .admin-btn {
            display: block;
            background-color: #f4570a;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 12px 20px;
            margin: 10px auto;
            font-size: 16px;
            cursor: pointer;
            width: 250px;
            text-decoration: none;
        }

        .admin-btn:hover {
            background-color: #d84900;
        }
    </style>
</head>
<body>

<!-- Top Navbar -->
<div class="navbar">
    <img src="{{ asset('image/image.png') }}" alt="Wahana Visi Logo">
    <div class="navbar-right">
        <form method="post" action="logout.php" style="margin: 0;">
            <button class="logout-btn">Log out</button>
        </form>
        <div class="profile-icon"></div>
    </div>
</div>

<!-- Main Content -->
<div class="content">
    <h2>Admin</h2>
    <div class="card">
        <a href="{{ route('upload.category') }}" class="admin-btn">Upload Page</a>
        <a href="{{ route('admin.approval') }}" class="admin-btn">Approval Page</a>

    </div>
</div>

</body>
</html>
