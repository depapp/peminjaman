<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Form Peminjaman Barang Access Laboratory</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="<?php echo asset('css/cssform/default.css') ?>"/>
    </head>
    <body>    
        {!! Form::open(['url'=>'formLoan','class'=>'register'])!!}
            <h1>FORM PEMINJAMAN BARANG </h1>
            <fieldset class="row1">
                <legend>Informasi Peminjam
                </legend>
                <p>
                    <label>Nama *
                    </label>
                    <input type="text" name="nama" required="required"/>
                    <label>Keperluan peminjaman*
                    </label>
                    <input type="text" name="keperluan" required="required"/>
                </p>
                <p>
                    <label>Institusi*
                    </label>
                    <input type="text" name="institusi" required="required"/>
                    <label>List Barang utk dipinjam*
                    </label>
                    <input type="text" name="alat" required="required"/>
                    <label class="obinfo">* wajib diisi
                    </label>
                </p>
				<p>
                    <label>Jurusan *
                    </label>
                    <input type="text" name="jurusan" required="required"/>
					 <label>No. Telp *
                    </label>
                    <input type="text" name="tlp" required="required"/>
                </p>
				<p>
                    <label>Fakultas *
                    </label>
                    <input type="text" name="fakultas" required="required"/>
                </p>
				<p>
                    <label>NIM *
                    </label>
                    <input type="text" name="nim" required="required"/>
                </p>
				
            </fieldset>
            <fieldset class="row2">
                <legend>Tanggal Peminjaman
                </legend>
				<p>
                    <label>Tanggal Pinjam:
                    </label><input type="date" class="date" name="tgl_pinjam" required="required">
                </p>
               
                
            </fieldset>
            <fieldset class="row3">
                <legend>Tanggal Pengembalian
                </legend>
					<p>
                    <label>Tanggal Kembali: 
                    </label><input type="date" class="date" name="tgl_kembali" required="required">
                </p>
            
                <div class="infobox" ><h4>Penting</h4>
                    <p>Segala bentuk kerusakan maupun kehilangan merupakan tanggung jawab pihak peminjam, begitu pula dengan keterlambatan pengembelian, akan dikenakan sanksi.</p>
                </div>
            </fieldset>
            <fieldset class="row4">
                <legend>Syarat dan Ketentuan
                </legend>
                <p class="agreement">
                    <input type="checkbox" value=""/ required="required">
                    <label>*  Saya bertanggung jawab penuh akan adanya segala bentuk kerusakan maupun kehilangan, sesuai dengan <a href="#">Ketentuan yang berlaku.</a></label>
                </p>
              
            </fieldset>
            <div><button type="submit" class="button">Kirim &raquo;</button></div>
    {!! Form::close()!!}
    </body>
</html>





