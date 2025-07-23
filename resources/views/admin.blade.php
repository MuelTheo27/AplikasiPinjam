@extends('templateAdmin')

@section('content')
  <style>
    body {
      background-color: #f6f6f6;
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
  </style>

  <div class="container">
    <div class="filter-wrapper">
      <select class="filter-select" id="filterSelect">
        <option value="all">Semua Kategori</option>
        <option value="ruangan">Ruangan</option>
        <option value="kendaraan">Kendaraan</option>
      </select>
    </div>

    @foreach ($bookings as $booking)
      @if ($booking->status === 'approved')
        <div class="booking-card" data-category="{{ strtolower($booking->category_type) }}">
          <img src="{{ asset('storage/' . $booking->image) }}" alt="{{ $booking->name }}">
          <div class="booking-content">
            <div class="booking-header">{{ $booking->name }}</div>
            <div class="booking-details-grid">
              <div class="detail-item"><strong>Tanggal Booking:</strong><span>{{ \Carbon\Carbon::parse($booking->tanggal)->translatedFormat('d F Y') }}</span></div>
              <div class="detail-item"><strong>Jam Booking:</strong><span>{{ $booking->jam_mulai }} – {{ $booking->jam_selesai }}</span></div>
              <div class="detail-item"><strong>Nama Event:</strong><span>{{ $booking->nama_event }}</span></div>
              <div class="detail-item"><strong>Category Type:</strong><span>{{ ucfirst($booking->category_type) }}</span></div>
            </div>
            <div class="organization-name">{{ $booking->organisasi }}</div>
            <div class="note-display">{{ $booking->note }}</div>
          </div>
        </div>
      @endif
    @endforeach
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
