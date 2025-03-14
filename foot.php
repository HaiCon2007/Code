<!-- Core JS -->
<script src="./assets/vendor/libs/popper/popper.js"></script>
  <script src="./assets/vendor/js/bootstrap.js"></script>
  <script src="./assets/vendor/libs/node-waves/node-waves.js"></script>
  <script src="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="./assets/vendor/libs/hammer/hammer.js"></script>
  <script src="./assets/vendor/js/menu.js"></script>
  <script src="./assets/js/main.js"></script>
  <script>
  function showToastrNotification(status, message, title) {
    var toastrType = status === "success" ? "success" : "error";
    toastr.options = {
      positionClass: 'toast-top-right', 
      closeButton: true,
      progressBar: true,
    };
    toastr[toastrType](message, title);
  }
</script>
  <link rel="stylesheet" href="./assets/vendor/libs/animate-css/animate.css" />
  <link rel="stylesheet" href="./assets/vendor/libs/sweetalert2/sweetalert2.css" />
  <script src="./assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
  <script src="./assets/vendor/libs/toastr/toastr.js"></script>
   <footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl">
        <div class="footer-container d-flex align-items-center justify-content-between py-3 flex-md-row flex-column">
            <div class="mb-2 mb-md-0 text-center">
                © <script>document.write(new Date().getFullYear());</script> HẢI CON |  
                <a href="https://facebook.com" target="_blank" class="mx-2">
                    <i class="fab fa-facebook fa-lg"></i>
                </a>
                <a href="https://zalo.me" target="_blank" class="mx-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/Icon_of_Zalo.svg/32px-Icon_of_Zalo.svg.png" 
                         alt="Zalo" style="width: 24px; height: 24px;">
                </a>
                <a href="https://youtube.com" target="_blank" class="mx-2">
                    <i class="fab fa-youtube fa-lg"></i>
                </a>
            </div>
        </div>
    </div>
</footer>
<!-- Nhớ thêm FontAwesome nếu chưa có -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  </body>
</html>