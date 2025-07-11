<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Landing</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f6f6f6;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: white;
            padding: 10px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #eee;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .navbar img {
            height: 40px;
            margin-left: 20px;
        }

        .navbar-right {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logout-btn {
            border: 1px solid #bbb;
            background: white;
            padding: 8px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            color: #333;
        }

        .profile-icon {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background-color: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            color: white;
            border: 1px solid #333;
            margin-right: 20px;
        }

        .container {
            padding: 30px;
            max-width: 1200px;
            margin: 20px auto;
        }

        .filter-input {
            width: 300px;
            padding: 10px 15px;
            margin-bottom: 30px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .booking-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
            padding: 25px 30px;
            margin-bottom: 30px;
            display: flex;
            gap: 30px;
            align-items: flex-start;
        }

        .booking-card img {
            width: 250px;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
            flex-shrink: 0;
        }

        .booking-content {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
            width: 100%;
        }

        .booking-header {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .booking-details-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(100px, 1fr));
            gap: 15px 40px;
            font-size: 18px;
            margin-bottom: 15px;
        }

        .detail-item strong {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: normal;
        }

        .detail-item span {
            font-weight: bold;
            color: #333;
        }

        .organization-name {
            font-size: 16px;
            color: #666;
            margin-bottom: 15px;
        }

        .right-side {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }

        .note-display {
            background-color: #f0f0f0;
            border: 1px solid #ddd;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 14px;
            color: #333;
            min-height: 60px;
            width: 100%;
            max-width: 200px;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .reject-btn, .approve-btn {
            border: none;
            padding: 10px 25px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 15px;
            font-weight: bold;
            transition: background-color 0.2s ease;
        }

        .reject-btn {
            background-color: #5D0000;
            color: white;
        }

        .reject-btn:hover {
            background-color: #c82333;
        }

        .approve-btn {
            background-color: #076003;
            color: white;
        }

        .approve-btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<div class="navbar">
    <img src="{{ asset('image/image.png') }}" alt="Logo">
    <div class="navbar-right">
        <form method="POST" action="/logout" style="margin: 0;">
            <button class="logout-btn">Log out</button>
        </form>
        <div class="profile-icon">👤</div>
    </div>
</div>

<div class="container">
    <input type="text" class="filter-input" placeholder="Filter">

    <div class="booking-card">
        <img src="{{ asset('image/download.jpeg') }}" alt="Ruangan NTT" class="booking-image">
        <div class="booking-content">
            <div>
                <div class="booking-header">Ruangan NTT</div>
                <div class="booking-details-grid">
                    <div class="detail-item"><strong>Tanggal Booking:</strong><span>17 Juni 2025</span></div>
                    <div class="detail-item"><strong>Jam Booking:</strong><span>9 AM – 3 PM</span></div>
                    <div class="detail-item"><strong>Nama Event:</strong><span>Meeting Bulanan</span></div>
                </div>
                <div class="organization-name">Wahana Visi Binatro</div>
            </div>
            <div class="right-side">
                <div class="note-display">Pinjam Proyektor</div>
                <div class="action-buttons">
                    <button class="reject-btn">Reject</button>
                    <button class="approve-btn">Approve</button>
                </div>
            </div>
        </div>
    </div>

    <div class="booking-card">
        <img src="{{ asset('image/mclaren.jpg') }}" alt="Kendaraan" class="booking-image">
        <div class="booking-content">
            <div>
                <div class="booking-header">Avanza</div>
                <div class="booking-details-grid">
                    <div class="detail-item"><strong>Tanggal Booking:</strong><span>18 Juni 2025</span></div>
                    <div class="detail-item"><strong>Jam Booking:</strong><span>9 AM – 3 PM</span></div>
                    <div class="detail-item"><strong>Nama Event:</strong><span>Meeting Client</span></div>
                </div>
                <div class="organization-name">Wahana Visi Pusat</div>
            </div>
            <div class="right-side">
                <div class="note-display">Bensin Full</div>
                <div class="action-buttons">
                    <button class="reject-btn">Reject</button>
                    <button class="approve-btn">Approve</button>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
