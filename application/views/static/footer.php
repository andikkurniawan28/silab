<!-- Page Footer-->
        <footer class="position-absolute bottom-0 bg-dash-dark-2 text-white text-center py-3 w-100 text-xs" id="footer">
          <div class="container-fluid text-center">
            <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
            <p class="mb-0 text-dash-gray">2023 &copy; PG Kebon Agung. Developed by <a href="https://github.com/andikkurniawan28">Andik Kurniawan</a>.</p>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="<?=base_url('assets/dark-admin/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url('assets/dark-admin/');?>vendor/just-validate/js/just-validate.min.js"></script>
    <script src="<?=base_url('assets/dark-admin/');?>vendor/chart.js/Chart.min.js"></script>
    <script src="<?=base_url('assets/dark-admin/');?>vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="<?=base_url('assets/dark-admin/');?>js/charts-home.js"></script>
    <!-- Main File-->
    <script src="<?=base_url('assets/dark-admin/');?>js/front.js"></script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
      
      
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    <!-- Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="logoutModalLabel">Logout</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Apakah Anda yakin logout ?
          </div>
          <div class="modal-footer">
            <a href="<?=base_url('auth/logout');?>" type="button" class="btn btn-warning">Ya</a>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>
          </div>
        </div>
      </div>
    </div>


  </body>
</html>