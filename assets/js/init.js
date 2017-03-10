(function($){

  $(function(){
    var pakaian_counter = 1;
    $('.button-collapse').sideNav();
    $('select').material_select();
    $('ul.tabs').tabs();

    var a_id = 8;
    var p_id = 7;
    var sl_id = 6;
    var m_id = 7;
    var d_id = 4;

    var a_group = 1;
    var p_group = 1;
    var sl_group = 1;
    var m_group = 1;
    var d_group = 1;

    var newApparel, newPrinting, newSL, newMerchandise, newDecor;
    var _selectIndex = 1;
    var choices = ["Pilih Lokasi", "Tertutup", "Terbuka"];

    function addSelect(divName) {
        var newDiv = document.createElement('div');
        var selectHTML = "";
        selectHTML="<select>";
        for(i = 0; i < choices.length; i = i + 1) {
            selectHTML += "<option value='" + choices[i] + "'>" + choices[i] + "</option>";
        }
        selectHTML += "</select>";
        newDiv.innerHTML = selectHTML;
        document.getElementById(divName).appendChild(newDiv);
    }

		$("#add-apparel").click(function(){
      newApparel = '<div class="row apparel-instance"> <div class="col s12"> <div class="card-panel white"> <h6>Jenis Barang</h6> <div class="row"> <div class="col s6"> <p> <input class="pakaian" name="a_type_'+a_group+'" type="radio" value="1" id="a_typeid_'+a_id+'"/> <label for="a_typeid_'+(a_id++)+'">Kaos 20s Combed</label> </p><p> <input class="pakaian" name="a_type_'+a_group+'" type="radio" value="2" id="a_typeid_'+a_id+'"/> <label for="a_typeid_'+(a_id++)+'">Kaos 30s Combed</label> </p><p> <input class="pakaian" name="a_type_'+a_group+'" type="radio" value="3" id="a_typeid_'+a_id+'"/> <label for="a_typeid_'+(a_id++)+'">Jaket</label> </p><p> <input class="pakaian" name="a_type_'+a_group+'" type="radio" value="4" id="a_typeid_'+a_id+'"/> <label for="a_typeid_'+(a_id++)+'">Parka</label> </p></div><div class="col s6"> <p> <input class="pakaian" name="a_type_'+a_group+'" type="radio" value="5" id="a_typeid_'+a_id+'"/> <label for="a_typeid_'+(a_id++)+'">Hoodie</label> </p><p> <input class="pakaian" name="a_type_'+a_group+'" type="radio" value="6" id="a_typeid_'+a_id+'"/> <label for="a_typeid_'+(a_id++)+'">Polo Shirt</label> </p><p> <input class="pakaian" name="a_type_'+a_group+'" type="radio" value="7" id="a_typeid_'+a_id+'"/> <label for="a_typeid_'+(a_id++)+'">Celana</label> </p><p> <input class="pakaian" name="a_type_'+a_group+'" type="radio" value="8" id="a_typeid_'+a_id+'"/> <label for="a_typeid_'+(a_id++)+'">Sepatu</label> </p></div></div><h6>Jumlah Barang Berdasarkan Ukuran</h6> <div class="row"> <div class="input-field col s2"> <input name="nS[]" type="number" class="validate pakaian"> <label>S</label> </div><div class="input-field col s2"> <input name="nM[]" type="number" class="validate pakaian"> <label>M</label> </div><div class="input-field col s2"> <input name="nL[]" type="number" class="validate pakaian"> <label>L</label> </div><div class="input-field col s2"> <input name="nXL[]" type="number" class="validate pakaian"> <label>XL</label> </div><div class="input-field col s2"> <input name="nXXL[]" type="number" class="validate pakaian"> <label>XXL</label> </div></div><div class="row"> <div class="input-field col s12"> <h7>Upload Desain</h7> <div class="file-field input-field"> <div class="btn"> <span>File</span> <input name="desain_baju[]" type="file" class="pakaian"> </div><div class="file-path-wrapper"> <input class="file-path validate" type="text"> </div></div></div></div><div class="row"> <div class="input-field col s12"> <i class="material-icons prefix">account_balance_wallet</i> <input name="apparel_budget[]" type="number" class="validate pakaian"> <label>Budget (Rp)</label> </div></div><div class="row"> <div class="input-field col s12"> <i class="material-icons prefix">comment</i> <textarea form="main-card" name="apparel_description[]" type="text" class="materialize-textarea validate pakaian"></textarea> <label>Keterangan Tambahan</label> </div></div></div></div></div>';
			$("#apparel-list").append(newApparel);
      a_group++;
		});
    $("#remove-apparel").click(function(){
      $("#apparel-list .apparel-instance").last().remove();
      a_id -= 8;
      a_group--;
    });

    $("#add-printing").click(function(){
      newPrinting = '<div class="row printing-instance"> <div class="col s12"> <div class="card-panel white"> <h6>Jenis Barang</h6> <div class="row"> <div class="col s6"> <p> <input class="percetakan" name="p_type_'+p_group+'" type="radio" value="1" id="p_typeid_'+p_id+'"/> <label for="p_typeid_'+(p_id++)+'">Spanduk</label> </p><p> <input class="percetakan" name="p_type_'+p_group+'" type="radio" value="2" id="p_typeid_'+p_id+'"/> <label for="p_typeid_'+(p_id++)+'">X-Banner</label> </p><p> <input class="percetakan" name="p_type_'+p_group+'" type="radio" value="3" id="p_typeid_'+p_id+'"/> <label for="p_typeid_'+(p_id++)+'">Y-Banner</label> </p><p> <input class="percetakan" name="p_type_'+p_group+'" type="radio" value="4" id="p_typeid_'+p_id+'"/> <label for="p_typeid_'+(p_id++)+'">Kartu Nama</label> </p></div><div class="col s6"> <p> <input class="percetakan" name="p_type_'+p_group+'" type="radio" value="5" id="p_typeid_'+p_id+'"/> <label for="p_typeid_'+(p_id++)+'">Kartu Panitia</label> </p><p> <input class="percetakan" name="p_type_'+p_group+'" type="radio" value="6" id="p_typeid_'+p_id+'"/> <label for="p_typeid_'+(p_id++)+'">Sertifikat</label> </p><p> <input class="percetakan" name="p_type_'+p_group+'" type="radio" value="7" id="p_typeid_'+p_id+'"/> <label for="p_typeid_'+(p_id++)+'">Plakat</label> </p></div></div><div class="row"> <div class="input-field col s6"> <i class="material-icons prefix">assessment</i> <input name="nPrint[]" type="number" class="validate percetakan"> <label>Jumlah Barang</label> </div><div class="input-field col s6"> <i class="material-icons prefix">timer</i> <input name="print_duration[]" type="number" class="validate percetakan"> <label>Lama Pekerjaan (hari)</label> </div></div><div class="row"> <div class="input-field col s12"> <h7>Upload Desain</h7> <div class="file-field input-field"> <div class="btn"> <span>File</span> <input name="desain_percetakan[]" type="file" class="percetakan"> </div><div class="file-path-wrapper"> <input class="file-path validate" type="text"> </div></div></div></div><div class="row"> <div class="input-field col s12"> <i class="material-icons prefix">account_balance_wallet</i> <input name="print_budget[]" type="number" class="validate percetakan"> <label>Budget (Rp)</label> </div></div><div class="row"> <div class="input-field col s12"> <i class="material-icons prefix">comment</i> <textarea form="main-card" name="print_description[]" type="text" class="materialize-textarea validate percetakan"></textarea> <label>Keterangan Tambahan</label> </div></div></div></div></div>';
			$("#printing-list").append(newPrinting);
      p_group++;
		});
    $("#remove-printing").click(function(){
      $("#printing-list .printing-instance").last().remove();
      p_id -= 7;
      p_group--;
    });

    $("#add-sl").click(function(){
      newSL = '<div class="row sl-instance"> <div class="col s12"> <div class="card-panel white"> <h6>Jenis Barang</h6> <div class="row"> <div class="col s6"> <p> <input class="sound_light" name="sl_type_'+(sl_group)+'" type="radio" value="1" id="sl_typeid_'+sl_id+'"/> <label for="sl_typeid_'+(sl_id++)+'">Sound Besar</label> </p><p> <input class="sound_light" name="sl_type_'+(sl_group)+'" type="radio" value="2" id="sl_typeid_'+sl_id+'"/> <label for="sl_typeid_'+(sl_id++)+'">Speaker Besar</label> </p><p> <input class="sound_light" name="sl_type_'+(sl_group)+'" type="radio" value="3" id="sl_typeid_'+sl_id+'"/> <label for="sl_typeid_'+(sl_id++)+'">Microphone</label> </p></div><div class="col s6"> <p> <input class="sound_light" name="sl_type_'+(sl_group)+'" type="radio" value="4" id="sl_typeid_'+sl_id+'"/> <label for="sl_typeid_'+(sl_id++)+'">Mixer</label> </p><p> <input class="sound_light" name="sl_type_'+(sl_group)+'" type="radio" value="5" id="sl_typeid_'+sl_id+'"/> <label for="sl_typeid_'+(sl_id++)+'">Lighting Panggung</label> </p><p> <input class="sound_light" name="sl_type_'+(sl_group)+'" type="radio" value="6" id="sl_typeid_'+sl_id+'"/> <label for="sl_typeid_'+(sl_id++)+'">Peralatan Band</label> </p></div></div><div class="row"> <div class="input-field col s4"> <i class="material-icons prefix">assessment</i> <input name="nSL[]" type="number" class="validate sound_light"> <label>Jumlah Barang</label> </div><div class="input-field col s4"> <i class="material-icons prefix">flash_on</i> <input name="sl_watt[]" type="number" class="validate sound_light"> <label>Kapasitas Listrik (watt)</label> </div><div class="input-field col s4"> <i class="material-icons prefix">timer</i> <input name="sl_duration[]" type="number" class="validate sound_light"> <label>Lama Penyewaan (jam)</label> </div></div><div class="row"> <div class="input-field col s12"> <i class="material-icons prefix">account_balance_wallet</i> <input name="sl_budget[]" type="number" class="validate sound_light"> <label>Budget (Rp)</label> </div></div><div class="row"> <div class="input-field col s12"> <i class="material-icons prefix">comment</i> <textarea form="main-card" name="sl_description[]" type="text" class="materialize-textarea validate sound_light"></textarea> <label>Keterangan Tambahan</label> </div></div></div></div></div>';
			$("#sl-list").append(newSL);
      sl_group++;
		});
    $("#remove-sl").click(function(){
      $("#sl-list .sl-instance").last().remove();
      sl_id -= 6;
      sl_group--;
    });

    $("#add-merchandise").click(function(){
      newMerchandise = '<div class="row merchandise-instance"> <div class="col s12"> <div class="card-panel white"> <h6>Jenis Barang</h6> <div class="row"> <div class="col s6"> <p> <input class="merchandise" name="m_type_'+m_group+'" type="radio" value="1" id="m_typeid_'+m_id+'"/> <label for="m_typeid_'+(m_id++)+'">Bunga</label> </p><p> <input class="merchandise" name="m_type_'+m_group+'" type="radio" value="2" id="m_typeid_'+m_id+'"/> <label for="m_typeid_'+(m_id++)+'">Boneka</label> </p><p> <input class="merchandise" name="m_type_'+m_group+'" type="radio" value="3" id="m_typeid_'+m_id+'"/> <label for="m_typeid_'+(m_id++)+'">Notes</label> </p><p> <input class="merchandise" name="m_type_'+m_group+'" type="radio" value="4" id="m_typeid_'+m_id+'"/> <label for="m_typeid_'+(m_id++)+'">Bantal</label> </p></div><div class="col s6"> <p> <input class="merchandise" name="m_type_'+m_group+'" type="radio" value="5" id="m_typeid_'+m_id+'"/> <label for="m_typeid_'+(m_id++)+'">Gantungan Kunci</label> </p><p> <input class="merchandise" name="m_type_'+m_group+'" type="radio" value="6" id="m_typeid_'+m_id+'"/> <label for="m_typeid_'+(m_id++)+'">Pin</label> </p><p> <input class="merchandise" name="m_type_'+m_group+'" type="radio" value="7" id="m_typeid_'+m_id+'"/> <label for="m_typeid_'+(m_id++)+'">Balon</label> </p></div></div><div class="row"> <div class="input-field col s6"> <i class="material-icons prefix">assessment</i> <input name="nMerchandise[]" type="number" class="validate merchandise"> <label>Jumlah Barang</label> </div><div class="input-field col s6"> <i class="material-icons prefix">timer</i> <input name="merchandise_duration[]" type="number" class="validate merchandise"> <label>Lama Pekerjaan (hari)</label> </div></div><div class="row"> <div class="input-field col s12"> <h7>Upload Desain</h7> <div class="file-field input-field"> <div class="btn"> <span>File</span> <input name="desain_merchandise[]" type="file" class="merchandise"> </div><div class="file-path-wrapper"> <input class="file-path validate" type="text"> </div></div></div></div><div class="row"> <div class="input-field col s12"> <i class="material-icons prefix">account_balance_wallet</i> <input name="merchandise_budget[]" type="number" class="validate merchandise"> <label>Budget (Rp)</label> </div></div><div class="row"> <div class="input-field col s12"> <i class="material-icons prefix">comment</i> <textarea form="main-card" name="merchandise_description[]" type="text" class="materialize-textarea validate merchandise"></textarea> <label>Keterangan Tambahan</label> </div></div></div></div></div>';
			$("#merchandise-list").append(newMerchandise);
      m_group++;
		});
    $("#remove-merchandise").click(function(){
      $("#merchandise-list .merchandise-instance").last().remove();
      m_id -= 7;
      m_group--;
    });

    $("#add-decor").click(function(){
      newDecor = '<div class="row decor-instance"> <div class="col s12"> <div class="card-panel white"> <h6>Jenis Barang</h6> <div class="row"> <div class="col s6"> <p> <input class="dekorasi" name="d_type_'+d_group+'" type="radio" value="1" id="d_typeid_'+d_id+'"/> <label for="d_typeid_'+(d_id++)+'">Pita</label> </p><p> <input class="dekorasi" name="d_type_'+d_group+'" type="radio" value="2" id="d_typeid_'+d_id+'"/> <label for="d_typeid_'+(d_id++)+'">Lampu</label> </p></div><div class="col s6"> <p> <input class="dekorasi" name="d_type_'+d_group+'" type="radio" value="3" id="d_typeid_'+d_id+'"/> <label for="d_typeid_'+(d_id++)+'">Balon</label> </p><p> <input class="dekorasi" name="d_type_'+d_group+'" type="radio" value="4" id="d_typeid_'+d_id+'"/> <label for="d_typeid_'+(d_id++)+'">Craft</label> </p></div></div><div class="row"> <div class="input-field col s4"> <i class="material-icons prefix">assessment</i> <input name="nDecor[]" type="number" class="validate dekorasi"> <label>Jumlah Barang</label> </div><div class="input-field col s4"> <i class="material-icons prefix">assistant_photo</i> <select name="type_decor[]" class="dekorasi"> <option value="0" selected>Pilih Lokasi</option> <option value="1">Tertutup</option> <option value="2">Terbuka</option> </select> <label>Lokasi Dekorasi</label> </div><div class="input-field col s4"> <i class="material-icons prefix">timer</i> <input name="decor_duration[]" type="number" class="validate dekorasi"> <label>Lama Pengerjaan (hari)</label> </div></div><div class="row"> <div class="input-field col s12"> <i class="material-icons prefix">account_balance_wallet</i> <input name="decor_budget[]" type="number" class="validate dekorasi"> <label>Budget (Rp)</label> </div></div><div class="row"> <div class="input-field col s12"> <i class="material-icons prefix">comment</i> <textarea form="main-card" name="decor_description[]" type="text" class="materialize-textarea validate dekorasi"></textarea> <label>Keterangan Tambahan</label> </div></div></div></div></div>';
			$("#decor-list").append(newDecor);
      d_group++;
		});
    $("#remove-decor").click(function(){
      $("#decor-list .decor-instance").last().remove();
      d_id -= 4;
      d_group--;
    });

  }); // end of document ready
})(jQuery); // end of jQuery name space
