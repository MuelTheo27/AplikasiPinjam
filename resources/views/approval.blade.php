<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Landing</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f6f6f6;
        }

        ::-webkit-scrollbar {
            display: none;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 8px 40px;
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            height: 68px;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar img {
            width: 200px;
            cursor: pointer;
        }

        .navbar-right {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logout-btn {
            border: 1px solid #bbb;
            /* Lighter border */
            background: white;
            padding: 8px 20px;
            /* More padding */
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            color: #333;
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

        .container {
            padding: 30px;
            max-width: 1200px;
            /* Constrain width for better look */
            margin: 20px auto;
            /* Center the container */
        }

        .filter-input {
            width: 300px;
            /* Wider filter input */
            padding: 10px 15px;
            /* More padding */
            margin-bottom: 30px;
            /* More space below filter */
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .booking-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            /* Stronger shadow */
            padding: 25px 30px;
            /* More padding */
            margin-bottom: 30px;
            /* More space between cards */
            display: flex;
            align-items: flex-start;
            /* Align items to the top */
            gap: 30px;
        }

        .booking-card img {
            width: 250px;
            /* Fixed width */
            height: 150px;
            /* Fixed height */
            object-fit: cover;
            border-radius: 8px;
            flex-shrink: 0;
            /* Prevent image from shrinking */
        }

        .booking-content {
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .booking-header {
            font-size: 20px;
            /* Larger heading */
            font-weight: bold;
            margin-bottom: 15px;
            /* More space below heading */
        }

        .booking-details-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(100px, 1fr));
            /* Three columns */
            gap: 15px 40px;
            /* Row and column gap */
            font-size: 14px;
            margin-bottom: 15px;
        }

        .detail-item strong {
            display: block;
            /* Make strong a block to put value on new line */
            margin-bottom: 5px;
            color: #555;
            font-weight: normal;
            /* Make labels less bold */
        }

        .detail-item span {
            font-weight: bold;
            /* Make values bold */
            color: #333;
        }

        .organization-name {
            font-size: 14px;
            color: #666;
            margin-bottom: 15px;
            /* Space below organization */
        }

        .note-display {
            background-color: #f0f0f0;
            /* Light grey background for note */
            border: 1px solid #ddd;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 14px;
            color: #333;
            min-height: 60px;
            /* Set a minimum height */
            display: flex;
            /* Use flex to align text nicely */
            align-items: center;
            /* Center text vertically if needed */
            margin-bottom: 20px;
            /* Space above buttons */
            max-width: 180px;
            /* Limit note width */


        }

        .action-buttons {
            display: flex;
            gap: 10px;
            justify-content: flex-end;
            /* Align buttons to the right */
            width: 100%;
            /* Ensure buttons take full width for alignment */
        }

        .reject-btn,
        .approve-btn {
            border: none;
            padding: 10px 25px;
            /* More padding */
            border-radius: 5px;
            cursor: pointer;
            font-size: 15px;
            font-weight: bold;
            transition: background-color 0.2s ease;
        }

        .reject-btn {
            background-color: #dc3545;
            /* Red color */
            color: white;
        }

        .reject-btn:hover {
            background-color: #c82333;
        }

        .approve-btn {
            background-color: #28a745;
            /* Green color */
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
             <button class="logout-btn" onclick="window.location.href='{{ route('Autentikasi') }}'">Log out</button>
            <div class="profile-icon"></div>
        </div>
    </div>

    <div class="container">
        <input type="text" class="filter-input" placeholder="Filter">

        <div class="booking-card">
            <img src="{{ asset('image/download.jpeg') }}" alt="Ruangan NTT" class="booking-image">
            <div class="booking-content">
                <div class="booking-header">Ruangan NTT</div>
                <div class="booking-details-grid">
                    <div class="detail-item"><strong>Tanggal Booking:</strong><span>17 Juni 2025</span></div>
                    <div class="detail-item"><strong>Jam Booking:</strong><span>9 AM – 3 PM</span></div>
                    <div class="detail-item"><strong>Nama Event:</strong><span>Meeting Bulanan</span></div>
                </div>
                <div class="organization-name">Wahana Visi Binatro</div>
                <div class="note-display">Pinjam Proyektor</div>
                <div class="action-buttons">
                    <button class="reject-btn">Reject</button>
                    <button class="approve-btn">Approve</button>
                </div>
            </div>
        </div>

        <div class="booking-card">
            <img src="{{ asset('image/mclaren.jpg') }}" alt="Kendaraan" class="booking-image">
            <div class="booking-content">
                <div class="booking-header">Avanza</div>
                <div class="booking-details-grid">
                    <div class="detail-item"><strong>Tanggal Booking:</strong><span>18 Juni 2025</span></div>
                    <div class="detail-item"><strong>Jam Booking:</strong><span>9 AM – 3 PM</span></div>
                    <div class="detail-item"><strong>Nama Event:</strong><span>Meeting Client</span></div>
                </div>
                <div class="organization-name">Wahana Visi Pusat</div>
                <div class="note-display">Bensin Full</div>
                <div class="action-buttons">
                    <button class="reject-btn">Reject</button>
                    <button class="approve-btn">Approve</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
