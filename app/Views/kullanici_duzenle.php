<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter 4 CRUD - Kullanıcı düzenle</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 500px;
    }
    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
  
    <form method="post" id="update_user" name="update_user" 
    action="<?= site_url('/guncelle') ?>">
      <input type="hidden" name="id" id="id" value="<?php echo $user_obj['id']; ?>">
      <div class="form-group">
        <label>İsim</label>
        <input type="text" name="isim" class="form-control" value="<?php echo esc($user_obj['isim']); ?>">
      </div>
      <div class="form-group">
        <label>Eposta</label>
        <input type="email" name="eposta" class="form-control" value="<?php echo esc($user_obj['eposta']); ?>">
      </div>
      <div class="form-group">
        <label>Notlar</label>
        <input type="text" name="notlar" class="form-control" value="<?php echo esc($user_obj['notlar']); ?>">
      </div>
      <div class="form-group">
      <input type="hidden" name="<?= csrf_token(); ?>" value="<?= csrf_hash(); ?>">

        <button type="submit" class="btn btn-danger btn-block">Kaydet</button>
      </div>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#update_user").length > 0) {
      $("#update_user").validate({
        rules: {
          isim: {
            required: true,
          },
          eposta: {
            required: true,
            maxlength: 60,
            email: true,
          },
        },
        messages: {
          isim: {
            required: "İsim gereklidir.",
          },
          eposta: {
            required: "Eposta gereklidir.",
            email: "Geçerli bir eposta adresi girin.",
            maxlength: "Azami 60 karakter girin.",
          },
        },
      })
    }
  </script>
</body>
</html>