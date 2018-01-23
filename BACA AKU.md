# Tracer UCAC Uiversitas Semarang
			-> Desain
				-> View
					->Template.php 	=> Kerangka tampilan
					->sidebar.php 	=> Tampilan Menu utama
					->mini_menu.php	=> Tampilan Menu pendukung
					->>>>>Form register dan login<<<<<-
						->form.php		 => Kerangka tampilan awal
						->login_form.php => Tampilan Form login 
						-> register.php	 => Tampilan form registrasi

- Model						- View						- Controller
1. Biodata_model			1. User/					1. Kuis (khusus akses = 'Mahasiswa/Alumni')
2. Identitas_model			2. biodata/					2. Biodata		
3. Kuis_detail_model		3. identitas/				3. Home
4. Kuis_model				4. programstudi/			4. Login
5. Pilihan_model			5. home_view =>	Beranda		5. Kuis_detail
6. Respon_model											6. Programstudi
7. Programstudi_model									7. T_kuis
														
============ cetak laporan dengan MPDF ========================
			/third_party/mpdf
===============================================================
============ cetak library /libraries =========================
			Auth 		=> Autentifikasi Pengguna
			Datatables 	=> Penanganan isi tabel
			Pdf			=> Penanganan cetak laporan 
			Tamplate	=> Penanganan Kerangka  Tampilan
