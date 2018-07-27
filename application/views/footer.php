    <script src="<?= base_url('assets/pjax/jquery.js')?>"></script>
    <script src="<?= base_url('assets/bootstrap4/popper.js')?>"></script>
    <script src="<?= base_url('assets/FA/js/all.js')?>"></script>
    <script src="<?= base_url('assets/bootstrap4/bootstrap.min.js')?>"></script>
    <script src="<?= base_url('assets/Chart.min.js')?>"></script>
    <script src="<?= base_url('assets/pjax/jquery.pjax.js')?>"></script>
    
<!-- PJAX Script -->
    <script type="text/javascript">
    var direction = "right";
    $(document).ready(function(){
        $(document).pjax('a', '#main');
        $(document).on('pjax:start', function() {
            $(this).addClass('loading')
        });
        $(document).on('pjax:end', function() {
            $(this).removeClass('loading')
        });
    });
    </script>

<!-- Graph Script -->
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Januari", "Februari", "Maret", "April", "May", "June", "July", "Agustus", "September", "Oktober", "November", "Desember"],
          datasets: [{
            data: [45643, 48125, 45654, 91785, 49616, 41966, 65645, 41661, 41671, 91498, 64144, 68148],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  </body>
</html>