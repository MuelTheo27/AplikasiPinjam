@extends('templateAdmin')

@section('content')
  <style>
    body {
      background-color: #f6f6f6;
    }

    ::-webkit-scrollbar {
      display: none;
    }

    .container {
      padding: 30px;
      max-width: 1200px;
      margin: 20px auto;
    }

    .filter-wrapper {
      display: flex;
      justify-content: flex-start;
      margin-bottom: 30px;
    }

    .filter-select {
      padding: 12px 18px;
      font-size: 16px;
      border: none;
      outline: none;
      border-radius: 10px;
      background-color: #ffffff;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      width: 300px;
      appearance: none;
      background-image: url("data:image/svg+xml;charset=UTF8,%3Csvg fill='black' height='20' viewBox='0 0 24 24' width='20' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M7 10l5 5 5-5z'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: right 12px center;
      background-size: 16px;
      cursor: pointer;
    }

    .booking-card {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
      padding: 25px 30px;
      margin-bottom: 30px;
      display: flex;
      align-items: flex-start;
      gap: 30px;
    }

    .booking-card img {
      width: 250px;
      height: 150px;
      object-fit: cover;
      border-radius: 8px;
      flex-shrink: 0;
    }

    .booking-content {
      display: flex;
      flex-direction: column;
      flex-grow: 1;
    }

    .booking-header {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 15px;
    }

    .booking-details-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 15px 40px;
      font-size: 14px;
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
      font-size: 14px;
      color: #666;
      margin-bottom: 15px;
    }

    .note-display {
      display: inline-flex;
      align-items: center;
      padding: 10px 16px;
      font-size: 14px;
      font-weight: 500;
      color: #333;
      background-color: #f5f5f5;
      border-left: 4px solid #999;
      border-radius: 6px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.06);
      max-width: fit-content;
      margin-bottom: 20px;
    }

    .action-buttons {
      display: flex;
      gap: 10px;
      justify-content: flex-end;
      width: 100%;
    }

    .reject-btn,
    .approve-btn {
      border: none;
      padding: 10px 25px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 15px;
      font-weight: bold;
      transition: background-color 0.2s ease;
    }

    .reject-btn {
      background-color: #dc3545;
      color: white;
    }

    .reject-btn:hover {
      background-color: #c82333;
    }

    .approve-btn {
      background-color: #28a745;
      color: white;
    }

    .approve-btn:hover {
      background-color: #218838;
    }
  </style>

  <div class="container">

    <div class="filter-wrapper">
      <select class="filter-select" id="filterSelect">
        <option value="all">Semua Kategori</option>
        <option value="ruangan">Ruangan</option>
        <option value="kendaraan">Kendaraan</option>
      </select>
    </div>

    <!-- Booking Card: Ruangan -->
    <div class="booking-card" data-category="ruangan">
      <img src="{{ asset('image/download.jpeg') }}" alt="Ruangan NTT">
      <div class="booking-content">
        <div class="booking-header">Ruangan NTT</div>
        <div class="booking-details-grid">
          <div class="detail-item"><strong>Tanggal Booking:</strong><span>17 Juni 2025</span></div>
          <div class="detail-item"><strong>Jam Booking:</strong><span>9 AM – 3 PM</span></div>
          <div class="detail-item"><strong>Nama Event:</strong><span>Meeting Bulanan</span></div>
          <div class="detail-item"><strong>Category Type:</strong><span>Ruangan</span></div>
        </div>
        <div class="organization-name">Wahana Visi Binatro</div>
        <div class="note-display">Pinjam Proyektor</div>
        <div class="action-buttons">
          <button class="reject-btn">Reject</button>
          <button class="approve-btn">Approve</button>
        </div>
      </div>
    </div>

    <!-- Booking Card: Kendaraan -->
    <div class="booking-card" data-category="kendaraan">
      <img src="{{ asset('image/mclaren.jpg') }}" alt="Kendaraan">
      <div class="booking-content">
        <div class="booking-header">Avanza</div>
        <div class="booking-details-grid">
          <div class="detail-item"><strong>Tanggal Booking:</strong><span>18 Juni 2025</span></div>
          <div class="detail-item"><strong>Jam Booking:</strong><span>9 AM – 3 PM</span></div>
          <div class="detail-item"><strong>Nama Event:</strong><span>Meeting Client</span></div>
          <div class="detail-item"><strong>Category Type:</strong><span>Kendaraan</span></div>
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

  <script>
    const filterSelect = document.getElementById('filterSelect');
    const cards = document.querySelectorAll('.booking-card');

    filterSelect.addEventListener('change', function () {
      const selected = this.value;

      cards.forEach(card => {
        const category = card.dataset.category;

        if (selected === 'all' || selected === category) {
          card.style.display = 'flex';
        } else {
          card.style.display = 'none';
        }
      });
    });
  </script>
@endsection
