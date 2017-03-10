<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Ajukan Acara - HaloAcara</title>

  <!-- CSS  -->
  <link href="{{ url('https://fonts.googleapis.com/icon?family=Material+Icons') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ asset('assets/css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ asset('assets/css/font-awesome.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>

  <!-- Compiled and minified CSS -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css"> -->
[]
</head>
<body>
@if(session('sukses'))
	<script>
		alert('Success!');
	</script>
@endif
  <nav class="customheader lighten-1 black z-depth-2" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" style="padding-top:10px;" href="#" class="brand-logo"><img class="responsive-img" id="logo-image" width="250px" src={{ asset('assets/img/haloacara-white.png') }} alt="Logo"></a>
      <ul class="right hide-on-med-and-down">
      	<li><a href="http://haloacara.com" class="waves-effect waves-light btn">Home</a></li>
      	<li><a class="waves-effect waves-light btn">Vendor Kami</a></li>
      	<li><a class="waves-effect waves-light btn">Jadi Vendor</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#" class="black-text text-darken-2">Back to HaloAcara.com</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="whole-container">
    <div class="section no-pad-bot" id="index-banner">
      <div class="container">
        <br><br>
        <h1 class="header center white-text">Ajukan Acara Anda</h1>
        <div class="row center">
          <h5 class="header col s12 light white-text">Ajukan kebutuhan seluruh acara Anda dalam form ini. Kami akan memberikan balasan rekomendasi kebutuhan Anda secara detail melalui email Anda. Haloacara juga memberikan diskon dan harga miring untuk setiap kebutuhan Anda. Jangan ragu untuk mengisi form ini!</h5>
        </div>
      </div>
    </div>
    <div class="container form-container">
    <div class="section">
      <div class="row">
        <form class="col s12" id="main-card" role="form" class="" method="POST" action="{{ url('/submit-form') }}" enctype="multipart/form-data">

          <h5>Identitas</h5>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">perm_identity</i>
              <input name="nama" id="nama" type="text" class="validate" required="" aria-required="true">
              <label for="nama">Nama Lengkap*</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">email</i>
              <input name="email" id="email" type="email" class="validate" required="" aria-required="true">
              <label for="email" data-error="Email format is wrong">Email*</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">phone</i>
              <input name="phone" id="phone" type="tel" class="validate" required="" aria-required="true">
              <label for="phone">No Telepon*</label>
            </div>
          </div>

          <h5>Detail Acara</h5>
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">lightbulb_outline</i>
              <input name="theme" id="theme" type="text" class="validate" required="" aria-required="true">
              <label for="theme">Tema Acara*</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">cake</i>
              <input name="event_type" id="event_type" type="text" class="validate" required="" aria-required="true">
              <label for="event_type">Jenis Acara*</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">account_balance_wallet</i>
              <input name="event_budget" id="event_budget" type="number" class="validate" required="" aria-required="true">
              <label for="event_budget">Budget Umum (Rp)*</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">comment</i>
              <textarea form="main-card" name="event_description" id="event_description" type="text" class="materialize-textarea validate" required="" aria-required="true"></textarea>
              <label for="event_description">Deskripsi Singkat*</label>
            </div>
          </div>

          <div class="row">
            <div class="col s12">
              <ul class="tabs z-depth-1" name="event-tab" id="event-tab">
                <li class="tab col s2"><a class="active" href="#tempat_detail">Tempat</a></li>
                <li class="tab col s2"><a href="#pakaian">Pakaian</a></li>
                <li class="tab col s2"><a href="#percetakan">Percetakan</a></li>
                <li class="tab col s2"><a href="#soundlighting">Sound &amp; Lighting</a></li>
                <li class="tab col s2"><a href="#merchandise">Merchandise</a></li>
                <li class="tab col s2"><a href="#dekorasi">Dekorasi</a></li>
              </ul>
            </div>
            <div id="tempat_detail" class="col s12">
              <h5>Tempat</h5>
              <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix">location_on</i>
                  <input name="location" id="location" type="text" class="validate tempat">
                  <label for="location">Lokasi Acara</label>
                </div>
                <div class="input-field col s6">
                  <i class="material-icons prefix">assistant_photo</i>
                  <select name="location_type" id="location_type" class="tempat">
                    <option value="0" selected>Pilih Lokasi</option>
                    <option value="1">Tertutup</option>
                    <option value="2">Terbuka</option>
                  </select>
                  <label for="location_type">Tipe Lokasi</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix">people</i>
                  <input name="capacity" id="capacity" type="number" class="validate tempat">
                  <label for="capacity">Kapasitas Tamu</label>
                </div>
                <div class="input-field col s6">
                  <i class="material-icons prefix">timer</i>
                  <input name="duration" id="duration" type="number" class="validate tempat">
                  <label for="duration">Durasi Sewa (Jam)</label>
                </div>
              </div>
              <h6>Fasilitas</h6>
              <div class="row">
                <div class="input-field col s3">
                  <i class="material-icons prefix">event_seat</i>
                  <input name="nChair" id="nChair" type="number" class="validate tempat">
                  <label for="nChair">Jumlah Bangku</label>
                </div>
                <div class="input-field col s3">
                  <i class="material-icons prefix">ac_unit</i>
                  <input name="nAC" id="nAC" type="number" class="validate tempat">
                  <label for="nAC">Jumlah AC</label>
                </div>
                <div class="input-field col s3">
                  <i class="material-icons prefix">slow_motion_video</i>
                  <input name="nBlower" id="nBlower" type="number" class="validate tempat">
                  <label for="nBlower">Jumlah Blower</label>
                </div>
                <div class="input-field col s3">
                  <i class="material-icons prefix">flash_on</i>
                  <input name="nElectricity" id="nElectricity" type="number" class="validate tempat">
                  <label for="nElectricity">Kapasitas Listrik (watt)</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">account_balance_wallet</i>
                  <input name="facility_budget" id="facility_budget" type="number" class="validate tempat">
                  <label for="facility_budget">Budget (Rp)</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">comment</i>
                  <textarea form="main-card" name="facility_description" id="facility_description" type="text" class="materialize-textarea validate tempat"></textarea>
                  <label for="facility_description">Keterangan Tambahan</label>
                </div>
              </div>
            </div>
            <div id="pakaian" class="col s12">
              <h5>Pakaian</h5>
              <div id="apparel-list">
                <div class="row apparel-instance">
                  <div class="col s12">
                    <div class="card-panel white">
                      <h6>Jenis Barang</h6>
                      <div class="row">
                        <div class="col s6">
                          <p>
                            <input class="pakaian" name="a_type_0" type="radio" value="1" id="a_typeid_0"/>
                            <label for="a_typeid_0">Kaos 20s Combed</label>
                          </p>
                          <p>
                            <input class="pakaian" name="a_type_0" type="radio" value="2" id="a_typeid_1"/>
                            <label for="a_typeid_1">Kaos 30s Combed</label>
                          </p>
                          <p>
                            <input class="pakaian" name="a_type_0" type="radio" value="3" id="a_typeid_2"/>
                            <label for="a_typeid_2">Jaket</label>
                          </p>
                          <p>
                            <input class="pakaian" name="a_type_0" type="radio" value="4" id="a_typeid_3"/>
                            <label for="a_typeid_3">Parka</label>
                          </p>
                        </div>
                        <div class="col s6">
                          <p>
                            <input class="pakaian" name="a_type_0" type="radio" value="5" id="a_typeid_4"/>
                            <label for="a_typeid_4">Hoodie</label>
                          </p>
                          <p>
                            <input class="pakaian" name="a_type_0" type="radio" value="6" id="a_typeid_5"/>
                            <label for="a_typeid_5">Polo Shirt</label>
                          </p>
                          <p>
                            <input class="pakaian" name="a_type_0" type="radio" value="7" id="a_typeid_6"/>
                            <label for="a_typeid_6">Celana</label>
                          </p>
                          <p>
                            <input class="pakaian" name="a_type_0" type="radio" value="8" id="a_typeid_7"/>
                            <label for="a_typeid_7">Sepatu</label>
                          </p>
                        </div>
                      </div>
                      <h6>Jumlah Barang Berdasarkan Ukuran</h6>
                      <div class="row">
                        <div class="input-field col s2">
                          <input name="nS[]" type="number" class="validate pakaian">
                          <label>S</label>
                        </div>
                        <div class="input-field col s2">
                          <input name="nM[]" type="number" class="validate pakaian">
                          <label>M</label>
                        </div>
                        <div class="input-field col s2">
                          <input name="nL[]" type="number" class="validate pakaian">
                          <label>L</label>
                        </div>
                        <div class="input-field col s2">
                          <input name="nXL[]" type="number" class="validate pakaian">
                          <label>XL</label>
                        </div>
                        <div class="input-field col s2">
                          <input name="nXXL[]" type="number" class="validate pakaian">
                          <label>XXL</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <h7>Upload Desain</h7>
                          <div class="file-field input-field">
                            <div class="btn">
                              <span>File</span>
                              <input name="desain_baju[]" type="file" class="pakaian">
                            </div>
                            <div class="file-path-wrapper">
                              <input class="file-path validate" type="text">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="material-icons prefix">account_balance_wallet</i>
                          <input name="apparel_budget[]" type="number" class="validate pakaian">
                          <label>Budget (Rp)</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="material-icons prefix">comment</i>
                          <textarea form="main-card" name="apparel_description[]" type="text" class="materialize-textarea validate pakaian"></textarea>
                          <label>Keterangan Tambahan</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col s12">
                  <a class="waves-effect waves-teal btn-flat" id="add-apparel"><i class="material-icons left">add</i>Tambah</a>
                  <a class="waves-effect waves-teal btn-flat" id="remove-apparel"><i class="material-icons left">clear</i>Hapus</a>
                </div>
              </div>
            </div>
            <div id="percetakan" class="col s12">
              <h5>Percetakan</h5>
              <div id="printing-list">
                <div class="row printing-instance">
                  <div class="col s12">
                    <div class="card-panel white">
                      <h6>Jenis Barang</h6>
                      <div class="row">
                        <div class="col s6">
                          <p>
                            <input class="percetakan" name="p_type_0" type="radio" value="1" id="p_typeid_0"/>
                            <label for="p_typeid_0">Spanduk</label>
                          </p>
                          <p>
                            <input class="percetakan" name="p_type_0" type="radio" value="2" id="p_typeid_1"/>
                            <label for="p_typeid_1">X-Banner</label>
                          </p>
                          <p>
                            <input class="percetakan" name="p_type_0" type="radio" value="3" id="p_typeid_2"/>
                            <label for="p_typeid_2">Y-Banner</label>
                          </p>
                          <p>
                            <input class="percetakan" name="p_type_0" type="radio" value="4" id="p_typeid_3"/>
                            <label for="p_typeid_3">Kartu Nama</label>
                          </p>
                        </div>
                        <div class="col s6">
                          <p>
                            <input class="percetakan" name="p_type_0" type="radio" value="5" id="p_typeid_4"/>
                            <label for="p_typeid_4">Kartu Panitia</label>
                          </p>
                          <p>
                            <input class="percetakan" name="p_type_0" type="radio" value="6" id="p_typeid_5"/>
                            <label for="p_typeid_5">Sertifikat</label>
                          </p>
                          <p>
                            <input class="percetakan" name="p_type_0" type="radio" value="7" id="p_typeid_6"/>
                            <label for="p_typeid_6">Plakat</label>
                          </p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s6">
                          <i class="material-icons prefix">assessment</i>
                          <input name="nPrint[]" type="number" class="validate percetakan">
                          <label>Jumlah Barang</label>
                        </div>
                        <div class="input-field col s6">
                          <i class="material-icons prefix">timer</i>
                          <input name="print_duration[]" type="number" class="validate percetakan">
                          <label>Lama Pekerjaan (hari)</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <h7>Upload Desain</h7>
                          <div class="file-field input-field">
                            <div class="btn">
                              <span>File</span>
                              <input name="desain_percetakan[]" type="file" class="percetakan">
                            </div>
                            <div class="file-path-wrapper">
                              <input class="file-path validate" type="text">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="material-icons prefix">account_balance_wallet</i>
                          <input name="print_budget[]" type="number" class="validate percetakan">
                          <label>Budget (Rp)</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="material-icons prefix">comment</i>
                          <textarea form="main-card" name="print_description[]" type="text" class="materialize-textarea validate percetakan"></textarea>
                          <label>Keterangan Tambahan</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col s12">
                  <a class="waves-effect waves-teal btn-flat" id="add-printing"><i class="material-icons left">add</i>Tambah</a>
                  <a class="waves-effect waves-teal btn-flat" id="remove-printing"><i class="material-icons left">clear</i>Hapus</a>
                </div>
              </div>
            </div>
            <div id="soundlighting" class="col s12">
              <h5>Sound &amp; Lighting</h5>
              <div id="sl-list">
                <div class="row sl-instance">
                  <div class="col s12">
                    <div class="card-panel white">
                      <h6>Jenis Barang</h6>
                      <div class="row">
                        <div class="col s6">
                          <p>
                            <input class="sound_light" name="sl_type_0" type="radio" value="1" id="sl_typeid_0"/>
                            <label for="sl_typeid_0">Sound Besar</label>
                          </p>
                          <p>
                            <input class="sound_light" name="sl_type_0" type="radio" value="2" id="sl_typeid_1"/>
                            <label for="sl_typeid_1">Speaker Besar</label>
                          </p>
                          <p>
                            <input class="sound_light" name="sl_type_0" type="radio" value="3" id="sl_typeid_2"/>
                            <label for="sl_typeid_2">Microphone</label>
                          </p>
                        </div>
                        <div class="col s6">
                          <p>
                            <input class="sound_light" name="sl_type_0" type="radio" value="4" id="sl_typeid_3"/>
                            <label for="sl_typeid_3">Mixer</label>
                          </p>
                          <p>
                            <input class="sound_light" name="sl_type_0" type="radio" value="5" id="sl_typeid_4"/>
                            <label for="sl_typeid_4">Lighting Panggung</label>
                          </p>
                          <p>
                            <input class="sound_light" name="sl_type_0" type="radio" value="6" id="sl_typeid_5"/>
                            <label for="sl_typeid_5">Peralatan Band</label>
                          </p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s4">
                          <i class="material-icons prefix">assessment</i>
                          <input name="nSL[]" type="number" class="validate sound_light">
                          <label>Jumlah Barang</label>
                        </div>
                        <div class="input-field col s4">
                          <i class="material-icons prefix">flash_on</i>
                          <input name="sl_watt[]" type="number" class="validate sound_light">
                          <label>Kapasitas Listrik (watt)</label>
                        </div>
                        <div class="input-field col s4">
                          <i class="material-icons prefix">timer</i>
                          <input name="sl_duration[]" type="number" class="validate sound_light">
                          <label>Lama Penyewaan (jam)</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="material-icons prefix">account_balance_wallet</i>
                          <input name="sl_budget[]" type="number" class="validate sound_light">
                          <label>Budget (Rp)</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="material-icons prefix">comment</i>
                          <textarea form="main-card" name="sl_description[]" type="text" class="materialize-textarea validate sound_light"></textarea>
                          <label>Keterangan Tambahan</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col s12">
                  <a class="waves-effect waves-teal btn-flat" id="add-sl"><i class="material-icons left">add</i>Tambah</a>
                  <a class="waves-effect waves-teal btn-flat" id="remove-sl"><i class="material-icons left">clear</i>Hapus</a>
                </div>
              </div>
            </div>
            <div id="merchandise" class="col s12">
              <h5>Merchandise</h5>
              <div id="merchandise-list">
                <div class="row merchandise-instance">
                  <div class="col s12">
                    <div class="card-panel white">
                      <h6>Jenis Barang</h6>
                      <div class="row">
                        <div class="col s6">
                          <p>
                            <input class="merchandise" name="m_type_0" type="radio" value="1" id="m_typeid_0"/>
                            <label for="m_typeid_0">Bunga</label>
                          </p>
                          <p>
                            <input class="merchandise" name="m_type_0" type="radio" value="2" id="m_typeid_1"/>
                            <label for="m_typeid_1">Boneka</label>
                          </p>
                          <p>
                            <input class="merchandise" name="m_type_0" type="radio" value="3" id="m_typeid_2"/>
                            <label for="m_typeid_2">Notes</label>
                          </p>
                          <p>
                            <input class="merchandise" name="m_type_0" type="radio" value="4" id="m_typeid_3"/>
                            <label for="m_typeid_3">Bantal</label>
                          </p>
                        </div>
                        <div class="col s6">
                          <p>
                            <input class="merchandise" name="m_type_0" type="radio" value="5" id="m_typeid_4"/>
                            <label for="m_typeid_4">Gantungan Kunci</label>
                          </p>
                          <p>
                            <input class="merchandise" name="m_type_0" type="radio" value="6" id="m_typeid_5"/>
                            <label for="m_typeid_5">Pin</label>
                          </p>
                          <p>
                            <input class="merchandise" name="m_type_0" type="radio" value="7" id="m_typeid_6"/>
                            <label for="m_typeid_6">Balon</label>
                          </p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s6">
                          <i class="material-icons prefix">assessment</i>
                          <input name="nMerchandise[]" type="number" class="validate merchandise">
                          <label>Jumlah Barang</label>
                        </div>
                        <div class="input-field col s6">
                          <i class="material-icons prefix">timer</i>
                          <input name="merchandise_duration[]" type="number" class="validate merchandise">
                          <label>Lama Pekerjaan (hari)</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <h7>Upload Desain</h7>
                          <div class="file-field input-field">
                            <div class="btn">
                              <span>File</span>
                              <input name="desain_merchandise[]" type="file" class="merchandise">
                            </div>
                            <div class="file-path-wrapper">
                              <input class="file-path validate" type="text">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="material-icons prefix">account_balance_wallet</i>
                          <input name="merchandise_budget[]" type="number" class="validate merchandise">
                          <label>Budget (Rp)</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="material-icons prefix">comment</i>
                          <textarea form="main-card" name="merchandise_description[]" type="text" class="materialize-textarea validate merchandise"></textarea>
                          <label>Keterangan Tambahan</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col s12">
                  <a class="waves-effect waves-teal btn-flat" id="add-merchandise"><i class="material-icons left">add</i>Tambah</a>
                  <a class="waves-effect waves-teal btn-flat" id="remove-merchandise"><i class="material-icons left">clear</i>Hapus</a>
                </div>
              </div>
            </div>
            <div id="dekorasi" class="col s12">
              <h5>Dekorasi</h5>
              <div id="decor-list">
                <div class="row decor-instance">
                  <div class="col s12">
                    <div class="card-panel white">
                      <h6>Jenis Barang</h6>
                      <div class="row">
                        <div class="col s6">
                          <p>
                            <input class="dekorasi" name="d_type_0" type="radio" value="1" id="d_typeid_0"/>
                            <label for="d_typeid_0">Pita</label>
                          </p>
                          <p>
                            <input class="dekorasi" name="d_type_0" type="radio" value="2" id="d_typeid_1"/>
                            <label for="d_typeid_1">Lampu</label>
                          </p>
                        </div>
                        <div class="col s6">
                          <p>
                            <input class="dekorasi" name="d_type_0" type="radio" value="3" id="d_typeid_2"/>
                            <label for="d_typeid_2">Balon</label>
                          </p>
                          <p>
                            <input class="dekorasi" name="d_type_0" type="radio" value="4" id="d_typeid_3"/>
                            <label for="d_typeid_3">Craft</label>
                          </p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s4">
                          <i class="material-icons prefix">assessment</i>
                          <input name="nDecor[]" type="number" class="validate dekorasi">
                          <label>Jumlah Barang</label>
                        </div>
                        <div class="input-field col s4">
                          <i class="material-icons prefix">assistant_photo</i>
                          <select name="type_decor[]" class="dekorasi">
                            <option value="0" selected>Pilih Lokasi</option>
                            <option value="1">Tertutup</option>
                            <option value="2">Terbuka</option>
                          </select>
                          <label>Lokasi Dekorasi</label>
                        </div>
                        <div class="input-field col s4">
                          <i class="material-icons prefix">timer</i>
                          <input name="decor_duration[]" type="number" class="validate dekorasi">
                          <label>Lama Pengerjaan (hari)</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="material-icons prefix">account_balance_wallet</i>
                          <input name="decor_budget[]" type="number" class="validate dekorasi">
                          <label>Budget (Rp)</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="material-icons prefix">comment</i>
                          <textarea form="main-card" name="decor_description[]" type="text" class="materialize-textarea validate dekorasi"></textarea>
                          <label>Keterangan Tambahan</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col s12">
                  <a class="waves-effect waves-teal btn-flat" id="add-decor"><i class="material-icons left">add</i>Tambah</a>
                  <a class="waves-effect waves-teal btn-flat" id="remove-decor"><i class="material-icons left">clear</i>Hapus</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row center">
            <button type="submit" class="btn-large waves-effect waves-light green">Kirim</button>
          </div>
        </form>
      </div>

    </div>
  </div>

  </div>


  <footer class="page-footer black">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <img class="responsive-img" id="logo-image" width="300px" src={{ asset('assets/img/haloacara-white.png') }} alt="Logo">
          <div class="grey-text text-lighten-4">
            <p>Jl Margonda Raya, Margonda Residence 2/J1616, Depok, Indonesia
              <br>Email: customer@haloacara.com
              <br>Telepon: 0878-8264-6420
              <br>Facebook: HaloAcara
              <br>Line: @ujt2911t
            </p>
          </div>

        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Peta Situs</h5>
          <ul>
            <li><a class="white-text" href="http://haloacara.com/how-to/">Petunjuk Penggunaan</a></li>
            <li><a class="white-text" href="http://haloacara.com/hubungi-kami/">Hubungi Kami</a></li>
            <li><a class="white-text" href="http://haloacara.com/tentang-kami/">Tentang Kami</a></li>
            <li><a class="white-text" href="http://haloacara.com/faq/">FAQ</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Peta Vendor</h5>
          <ul>
            <li><a class="white-text" href="http://haloacara.com/product-category/dekorasi/">Dekorasi</a></li>
            <li><a class="white-text" href="http://haloacara.com/product-category/merchandise/">Merchandise</a></li>
            <li><a class="white-text" href="http://haloacara.com/product-category/pakaian/">Pakaian</a></li>
            <li><a class="white-text" href="http://haloacara.com/product-category/percetakan/">Percetakan</a></li>
            <li><a class="white-text" href="http://haloacara.com/product-category/sound-lighting/">Sound &amp; Lighting</a></li>
            <li><a class="white-text" href="http://haloacara.com/product-category/tempat/">Tempat</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://mmcrajawali.com">MMC Rajawali</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="{{ asset('https://code.jquery.com/jquery-2.1.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/materialize.js') }}"></script>
  <script src="{{ asset('assets/js/init.js') }}"></script>
  <script type="text/javascript">
	{$(document).ready(function(){
		/*$(".tempat").click(function(){
			alert('1');
			if($(this).val() == '' || $(this).val() == null){
				$(".tempat").prop('required',false);
				$(".tempat").children(".select-dropdown").prop('required',false);
			}
			else{
				$(".tempat").prop('required',true);
				$(".tempat").children(".select-dropdown").prop('required',true);
			}
		});

		$(".select-dropdown").click(function(){
			alert('');
		});

		$(".tempat").bind('keyup change', function(){
			if($(this).val() == '' || $(this).val() == null){
				$(".tempat").prop('required',false);
				$(".tempat").children(".select-dropdown").prop('required',false);
			}
			else{
				$(".tempat").prop('required',true);
				$(".tempat").children(".select-dropdown").prop('required',true);
			}
		});

		$(".pakaian").click(function(){
			if($(this).val() == '' || $(this).val() == null){
				$(".pakaian").prop('required',false);
			}
			else{
				$(".pakaian").prop('required',true);
			}
		});

		$(".pakaian").keyup(function(){
			if($(this).val() == '' || $(this).val() == null){
				$(".pakaian").prop('required',false);
			}
			else{
				$(".pakaian").prop('required',true);
			}
		});

		$(".percetakan").click(function(){
			if($(this).val() == '' || $(this).val() == null){
				$(".percetakan").prop('required',false);
			}
			else{
				$(".percetakan").prop('required',true);
			}
		});

		$(".percetakan").keyup(function(){
			if($(this).val() == '' || $(this).val() == null){
				$(".percetakan").prop('required',false);
			}
			else{
				$(".percetakan").prop('required',true);
			}
		});

		$(".sound_light").click(function(){
			if($(this).val() == '' || $(this).val() == null){
				$(".sound_light").prop('required',false);
			}
			else{
				$(".sound_light").prop('required',true);
			}
		});

		$(".sound_light").keyup(function(){
			if($(this).val() == '' || $(this).val() == null){
				$(".sound_light").prop('required',false);
			}
			else{
				$(".sound_light").prop('required',true);
			}
		});

		$(".merchandise").click(function(){
			if($(this).val() == '' || $(this).val() == null){
				$(".merchandise").prop('required',false);
			}
			else{
				$(".merchandise").prop('required',true);
			}
		});

		$(".merchandise").keyup(function(){
			if($(this).val() == '' || $(this).val() == null){
				$(".merchandise").prop('required',false);
			}
			else{
				$(".merchandise").prop('required',true);
			}
		});

		$(".dekorasi").click(function(){
			if($(this).val() == '' || $(this).val() == null){
				$(".dekorasi").prop('required',false);
				$(".dekorasi").children(".select-dropdown").prop('required',false);
			}
			else{
				$(".dekorasi").prop('required',true);
				$(".dekorasi").children(".select-dropdown").prop('required',true);
			}
		});

		$(".dekorasi").keyup(function(){
			if($(this).val() == '' || $(this).val() == null){
				$(".dekorasi").prop('required',false);
				$(".dekorasi").children(".select-dropdown").prop('required',false);
			}
			else{
				$(".dekorasi").prop('required',true);
				$(".dekorasi").children(".select-dropdown").prop('required',true);
			}
		});*/

	});}
  </script>
  <!-- Compiled and minified JavaScript -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script> -->


  </body>
</html>
