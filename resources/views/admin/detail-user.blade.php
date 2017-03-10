@extends('default')

@section('content')

    <div class="section no-pad-bot" id="index-banner">

    <div class="container">

      <br><br>

      <h1 class="header center blue-text">Detail User</h1>

      <div class="row center">

        <h5 class="header col s12 light">Lorem ipsum dolor sit amet</h5>

      </div>

    </div>

  </div>



  <div class="container">

    <div class="section">

      <div class="row ">

        <div class="col s10 offset-s1">



          <h5>Identitas</h5>

          <p>Nama : {{ $identitas->nama }}</p>

          <p>Email : {{ $identitas->email }}</p>

          <p>No. Telepon : {{ $identitas->nomo }}</p>

          <div class="divider"></div>

          

          <h5>Detail Acara</h5>

          <p>Tema Acara : {{ $detail_acara->tema }}</p>

          <p>Jenis Acara : {{ $detail_acara->jenis }}</p>

          <p>Budget Umum (Rp) : {{ $detail_acara->budget }}</p>

          <p>Deskripsi Singkat : {{ $detail_acara->deskripsi }}</p>



	  @if ($tempat != null)

          <div class="divider"></div>

          <h5>Tempat</h5>

          <p>Lokasi Acara : {{ $tempat-> lokasi}}</p>

          <p>Tipe Lokasi : {{ $tempat->tipe }}</p>

          <p>Kapasitas Tamu : {{ $tempat->kapasitas_tamu }}</p>

          <p>Durasi Sewa (Jam) : {{ $tempat->sewa_jam }}</p>

          <h6><b>Fasilitas</b></h6>

          <div class="row">

              <div class="col s3"><p>Jumlah Bangku : {{ $tempat->j_bangku }}</p></div>

              <div class="col s3"><p>Jumlah AC : {{ $tempat->j_ac }}</p></div>

              <div class="col s3"><p>Jumlah Blower : {{ $tempat->j_blower }}</p></div>

              <div class="col s3"><p>Kapasitas Listrik : {{ $tempat->kapasitas_listrik_watt }}</p></div>

          </div>

          <p>Budget (Rp) : {{ $tempat->budget }}</p>

          <p>Keterangan Tambahan : {{ $tempat->keterangan }}</p>

	  @endif


	  @if ($pakaian != null)

          <div class="divider"></div>



          <h5>Pakaian</h5>

	  @foreach ($pakaian as $kostum)
	
          <p>Jenis Barang : {{ $kostum->jenis_pakaian }}</p>

          <h6><b>Jumlah Barang Berdasarkan Ukuran</b></h6>

          <div class="row">

              <div class="col s2"><p>S : {{ $kostum->s }}</p></div>

              <div class="col s2"><p>M : {{ $kostum->m }}</p></div>

              <div class="col s2"><p>L : {{ $kostum->l }}</p></div>

              <div class="col s2"><p>XL : {{ $kostum->xl }}</p></div>

              <div class="col s2"><p>XXL : {{ $kostum->xxl }}</p></div>

          </div>

          <p>Budget (Rp) : {{ $kostum->budget }}</p>

          <p>Keterangan : {{ $kostum->keterangan }}</p>

          <h6><b>Desain</b></h6>

          <div class="row">

            <div class="cols s2 offset-s2">

              <a href="{{ url($kostum->desain) }}" class="waves-effect waves-light btn">download</a>

            </div>

          </div>

	  @endforeach
	  @endif


	  @if ($percetakan != null)
          <div class="divider"></div>



          <h5>Percetakan</h5>

          <p>Jenis Barang : {{ $jenis_percetakan }}</p>

          <p>Jumlah Barang : {{ $percetakan->jumlah }}</p>

          <p>Lama Pekerjaan (hari ): {{ $percetakan->lama_pesanan }}</p>

          <p>Budget : {{ $percetakan->budget }}</p>

          <p>Keterangan : {{ $percetakan->keterangan }}</p>

          <h6><b>Desain</b></h6>

          <div class="row">

            <div class="cols s2 offset-s2">

              <a href="{{ url($percetakan->desain) }}" class="waves-effect waves-light btn">download</a>

            </div>

          </div>  

	  @endif

	  @if ($sound_lighting != null)

          <div class="divider"></div>



          <h5>Sound &amp; Lighting</h5>

          <p>Jenis Barang : {{ $jenis_sl }}</p>

          <h6><b>Detail Barang</b></h6>

          <div class="row">

              <div class="col s4"><p>Jumlah Barang : {{ $sound_lighting->jumlah }}</p></div>

              <div class="col s4"><p>Kapasitas Listrik (watt) : {{ $sound_lighting->kapasitas_listrik_watt }}</p></div>

              <div class="col s4"><p>Lama penyewaan (jam) : {{ $sound_lighting->lama_sewa }}</p></div>

          </div>

          <p>Budget (Rp) : {{ $sound_lighting->budget }}</p>

          <p>Keterangan Tambahan : {{ $sound_lighting->keterangan }}</p>


	  @endif

 	  @if ($merchandise != null)	

          <div class="divider"></div>



          <h5>Merchandise</h5>

          <p>Jenis Barang : {{ $jenis_merchandise }}</p>

          <h6><b>Detail Barang</b></h6>

          <div class="row">

            <div class="col s6"><p>Jumlah Barang : {{ $merchandise->jumlah }}</p></div>

            <div class="col s6"><p>Lama Pekerjaan (hari) : {{ $merchandise->lama_pengerjaan }}</p></div>

          </div>

          <p>Budget (Rp) : {{ $merchandise->budget }}</p>

          <p>Keterangan Tambahan : {{ $merchandise->keterangan }}</p>

          <div class="row">

            <div class="cols s2 offset-s2">

              <a href="{{ url($merchandise->desain) }}" class="waves-effect waves-light btn">download</a>

            </div>

          </div>

	  @endif

	  @if ($dekorasi != null)
          <div class="divider"></div>



          <h5>Dekorasi</h5>

          <p>Jenis Barang : {{ $jenis_dekorasi }}</p>

          <h6>Detail Dekorasi</h6>

          <div class="row">

              <div class="col s4">Jumlah Barang : {{ $dekorasi->jumlah }}</div>

              <div class="col s4">Lokasi Dekorasi : {{ $dekorasi->lokasi }}</div>

              <div class="col s4">Lama Pengerjaan (hari) : {{ $dekorasi->lama_pengerjaan }}</div>

          </div>

          <p>Budget (Rp) : {{ $dekorasi->budget }}</p>

          <p>Keterangan Tambahan : {{ $dekorasi->keterangan }}</p>

	  @endif

        </div>

      </div>



    </div>

  </div>

@stop