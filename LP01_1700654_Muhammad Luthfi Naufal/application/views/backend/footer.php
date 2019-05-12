    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/jquery.min.js') ?>"></script>

    <script type="text/javascript">

    $(function(){

      $.ajaxSetup({
        type:"POST",
        url: "<?php echo base_url('index.php/C_select/ambil_data') ?>",
        cache: false,
      });

      $("#provinsi").change(function(){

        var value=$(this).val();
        if(value>0){
          $.ajax({
            data:{modul:'kabupaten',id:value},
            success: function(respond){
              $("#kabupaten-kota").html(respond);
            }
          })
        }
      });


      $("#kabupaten-kota").change(function(){
        var value=$(this).val();
        if(value>0){
          $.ajax({
            data:{modul:'kecamatan',id:value},
            success: function(respond){
              $("#kecamatan").html(respond);
            }
          })
        }
      })

      $("#kecamatan").change(function(){
        var value=$(this).val();
        if(value>0){
          $.ajax({
            data:{modul:'kelurahan',id:value},
            success: function(respond){
              $("#kelurahan-desa").html(respond);
            }
          })
        }
      })

    })
    </script>
  </body>
</html>
