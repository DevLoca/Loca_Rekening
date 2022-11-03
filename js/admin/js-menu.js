const alertTambah 	= $('.flash-data-tambah').data('flashtambah');
const alertEdit 	= $('.flash-data-edit').data('flashedit');
const alertHapus 	= $('.flash-data-hapus').data('flashhapus');
const alertError 	= $('.flash-data-error').data('flasherror');

if(alertTambah ){
  Swal.fire({
    title: 'Success',
    text: alertTambah,
    icon: 'success'
  });
}
else if(alertEdit){
  Swal.fire({
    title: 'Success',
    text: alertEdit,
    icon: 'success'
  });
}
else if(alertHapus){
  Swal.fire({
    title: 'Success',
    text: alertHapus,
    icon: 'success'
  });
} 
else if(alertError){
  Swal.fire({
    title: 'Whoops',
    text: alertError,
    icon: 'error'
  });
}

$(document).on("click", '.tombol-action-aplikasi', function(e){

  var idpb          = $(this).data('idpb');
  var nama_aplikasi = $(this).data('namaaplikasi');

  $(".idpb").val(idpb);
  $(".nama_aplikasi").val(nama_aplikasi);

  $(".hapusAplikasi").html('Lakukan penghapusan data untuk ID Aplikasi :  <strong>"' + idpb + '"</strong> ?');

});

$(document).on("click", '.tombol-action-kategori', function(e){

  var idpb          = $(this).data('idpb');
  var idkpb         = $(this).data('idkpb');
  var nama_aplikasi = $(this).data('namaaplikasi');
  var nama_kategori = $(this).data('namakategori');
  var icon_kategori = $(this).data('iconkategori');

  $(".idpb").val(idpb);
  $(".idkpb").val(idkpb);
  $(".nama_aplikasi").val(nama_aplikasi);
  $(".nama_kategori").val(nama_kategori);

  $(".gambar-icon").attr("src", '//image.autovision.co.id/petunjuk/icon_kategori/'+icon_kategori);

  $(".hapusKategori").html('Lakukan penghapusan data untuk ID Kategori :  <strong>"' + idkpb + '"</strong> ?');

});

$(document).on("click", '.tombol-action-pertanyaan', function(e){

  var idpb            = $(this).data('idpb');
  var idkpb           = $(this).data('idkpb');
  var idppb           = $(this).data('idppb');
  var nama_aplikasi   = $(this).data('namaaplikasi');
  var nama_kategori   = $(this).data('namakategori');
  var nama_pertanyaan = $(this).data('namapertanyaan');
  var penjelasan      = $(this).data('penjelasan');
  var gambar1         = $(this).data('gambar1');
  var gambar2         = $(this).data('gambar2');
  var gambar3         = $(this).data('gambar3');


  $(".idpb").val(idpb);
  $(".idkpb").val(idkpb);
  $(".idppb").val(idppb);
  $(".nama_aplikasi").val(nama_aplikasi);
  $(".nama_kategori").val(nama_kategori);
  $(".nama_pertanyaan").val(nama_pertanyaan);

  $(".penjelasan-nya").html(penjelasan);

  $(".gambar1").attr("src", '//image.autovision.co.id/petunjuk/'+gambar1);
  $(".gambar2").attr("src", '//image.autovision.co.id/petunjuk/'+gambar2);
  $(".gambar3").attr("src", '//image.autovision.co.id/petunjuk/'+gambar3);

  CKEDITOR.instances['penjelasan-edit'].setData(penjelasan);

  $(".hapusPertanyaan").html('Lakukan penghapusan data untuk ID Pertanyaan :  <strong>"' + idppb + '"</strong> ?');

});

const inpFile1 = document.getElementById("inpFile1");
const previewContainer1 = document.getElementById("imagePreview-1");
const previewImage1 = previewContainer1.querySelector(".image-preview__image-1");
const previewDefaultText1 = previewContainer1.querySelector(".image-preview__default-text-1");

inpFile1.addEventListener("change", function(){
  
  const file1 = this.files[0];

  if(file1){
    const reader1 = new FileReader();

    previewDefaultText1.style.display = "none";
    previewImage1.style.display = "block";

    reader1.addEventListener("load", function(){
      previewImage1.setAttribute("src", this.result);
    });

    reader1.readAsDataURL(file1);
  }
  else {

    previewDefaultText1.style.display = null;
    previewImage1.style.display = null;
    previewImage1.setAttribute("src", "");
  
  }
});

const inpFile2 = document.getElementById("inpFile2");
const previewContainer2 = document.getElementById("imagePreview-2");
const previewImage2 = previewContainer2.querySelector(".image-preview__image-2");
const previewDefaultText2 = previewContainer2.querySelector(".image-preview__default-text-2");

inpFile2.addEventListener("change", function(){
  
  const file2 = this.files[0];

  if(file2){
    const reader2 = new FileReader();

    previewDefaultText2.style.display = "none";
    previewImage2.style.display = "block";

    reader2.addEventListener("load", function(){
      previewImage2.setAttribute("src", this.result);
    });

    reader2.readAsDataURL(file2);
  }
  else {

    previewDefaultText2.style.display = null;
    previewImage2.style.display = null;
    previewImage2.setAttribute("src", "");
  
  }
});

const inpFile3 = document.getElementById("inpFile3");
const previewContainer3 = document.getElementById("imagePreview-3");
const previewImage3 = previewContainer3.querySelector(".image-preview__image-3");
const previewDefaultText3 = previewContainer3.querySelector(".image-preview__default-text-3");

inpFile3.addEventListener("change", function(){
  
  const file3 = this.files[0];

  if(file3){
    const reader3 = new FileReader();

    previewDefaultText3.style.display = "none";
    previewImage3.style.display = "block";

    reader3.addEventListener("load", function(){
      previewImage3.setAttribute("src", this.result);
    });

    reader3.readAsDataURL(file3);
  }
  else {

    previewDefaultText3.style.display = null;
    previewImage3.style.display = null;
    previewImage3.setAttribute("src", "");
  
  }
});





const inpFileEdit1 = document.getElementById("inpFileEdit1");
const previewContainerEdit1 = document.getElementById("imagePreview-Edit1");
const previewImageEdit1 = previewContainerEdit1.querySelector(".image-preview__image-Edit1");
const previewDefaultTextEdit1 = previewContainerEdit1.querySelector(".image-preview__default-text-Edit1");

inpFileEdit1.addEventListener("change", function(){
  
  const fileEdit1 = this.files[0];

  if(fileEdit1){
    const readerEdit1 = new FileReader();

    previewDefaultTextEdit1.style.display = "none";
    previewImageEdit1.style.display = "block";

    readerEdit1.addEventListener("load", function(){
      previewImageEdit1.setAttribute("src", this.result);
    });

    readerEdit1.readAsDataURL(fileEdit1);
  }
  else {

    previewDefaultTextEdit1.style.display = null;
    previewImageEdit1.style.display = null;
    previewImageEdit1.setAttribute("src", "");
  
  }
});

const inpFileEdit2 = document.getElementById("inpFileEdit2");
const previewContainerEdit2 = document.getElementById("imagePreview-Edit2");
const previewImageEdit2 = previewContainerEdit2.querySelector(".image-preview__image-Edit2");
const previewDefaultTextEdit2 = previewContainerEdit2.querySelector(".image-preview__default-text-Edit2");

inpFileEdit2.addEventListener("change", function(){
  
  const fileEdit2 = this.files[0];

  if(fileEdit2){
    const readerEdit2 = new FileReader();

    previewDefaultTextEdit2.style.display = "none";
    previewImageEdit2.style.display = "block";

    readerEdit2.addEventListener("load", function(){
      previewImageEdit2.setAttribute("src", this.result);
    });

    readerEdit2.readAsDataURL(fileEdit2);
  }
  else {

    previewDefaultTextEdit2.style.display = null;
    previewImageEdit2.style.display = null;
    previewImageEdit2.setAttribute("src", "");
  
  }
});

const inpFileEdit3 = document.getElementById("inpFileEdit3");
const previewContainerEdit3 = document.getElementById("imagePreview-Edit3");
const previewImageEdit3 = previewContainerEdit3.querySelector(".image-preview__image-Edit3");
const previewDefaultTextEdit3 = previewContainerEdit3.querySelector(".image-preview__default-text-Edit3");

inpFileEdit3.addEventListener("change", function(){
  
  const fileEdit3 = this.files[0];

  if(fileEdit3){
    const readerEdit3 = new FileReader();

    previewDefaultTextEdit3.style.display = "none";
    previewImageEdit3.style.display = "block";

    readerEdit3.addEventListener("load", function(){
      previewImageEdit3.setAttribute("src", this.result);
    });

    readerEdit3.readAsDataURL(fileEdit3);
  }
  else {

    previewDefaultTextEdit3.style.display = null;
    previewImageEdit3.style.display = null;
    previewImageEdit3.setAttribute("src", "");
  
  }
});

