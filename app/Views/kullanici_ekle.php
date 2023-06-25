<!DOCTYPE html>
<html  lang="tr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Codeigniter 4 Kullanıcı Ekle</title>
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
    <form method="post" id="add_create" name="add_create" 
    action="<?= site_url('/kaydet') ?>">
      <div class="form-group">
        <label>İsim</label>
        <input type="text" name="isim" class="form-control">
      </div>
      <div class="form-group">
        <label>E-posta</label>
        <input type="text" name="eposta" class="form-control">
      </div>
      <div class="form-group">
        <label>Notlar</label>
        <input type="text" name="notlar" class="form-control">
      </div>
      <div class="form-group">
        <input type="hidden" name="<?= csrf_token(); ?>" value="<?= csrf_hash(); ?>">
        <button type="submit" class="btn btn-primary btn-block">Ekle</button>
      </div>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
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
            required: "E-posta gereklidir.",
            eposta: "Geçerli bir e-posta adresi girin",
            maxlength: "E-posta adresi en fazla 60 karakter olmalı",
          },
        },
      })
    }
  </script>
</body>
</html>