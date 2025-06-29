<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>
    <div class="container">
        <div class="box">
          <div class="halfKiri">
            <img src="/image/FotoAutentikasi.png" alt="Ilustrasi" style="width:90%;margin:auto;display:block;">
          </div>
          <div class="halfKanan">
            <h2>Login!</h2>
            <form id="formAja">
              <input type="text" placeholder="Your name" required />
              <input type="email" placeholder="Your e-mail" required />
              <input type="password" placeholder="Create password" required />
              <div class="password-strength">
                <span></span><span></span><span></span>
              </div>
              <div class="button-group">
                <button type="button" class="create-account">Create account</button>
                <button type="submit" class="sign-in" id="singin">Sign in</button>
              </div>
            </form>
          </div>
        </div>
      </div> 
      <script>
        const ruanganUrl = "{{ route('RuanganAku') }}";
    </script>
      <script src="/Js/Autentikasi.js"></script>    
</body>
</html>