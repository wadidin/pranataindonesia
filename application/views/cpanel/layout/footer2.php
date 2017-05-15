  
  
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>All rights</b> reserved
    </div>
    <strong>Hak Cipta &copy; <?php echo date("Y"); ?> . <a href="<?php echo base_url(); ?>">STMIK Pranata Indonesia</a></strong>
  </footer>

</div>
<!-- ./wrapper -->


<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>assets/cpanel/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/cpanel/bootstrap/js/bootstrap.min.js"></script>


<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/cpanel/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/cpanel/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->


<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/cpanel/plugins/fastclick/fastclick.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>assets/cpanel/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>assets/cpanel/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url(); ?>assets/cpanel/plugins/iCheck/icheck.min.js"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>assets/cpanel/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<script src="<?php echo base_url();?>assets/cpanel/plugins/tinymce/js/tinymce/tinymce.dev.js"></script>
<script src="<?php echo base_url();?>assets/cpanel/plugins/tinymce/js/tinymce/plugins/table/plugin.dev.js"></script>
<script src="<?php echo base_url();?>assets/cpanel/plugins/tinymce/js/tinymce/plugins/paste/plugin.dev.js"></script>
<script src="<?php echo base_url();?>assets/cpanel/plugins/tinymce/js/tinymce/plugins/spellchecker/plugin.dev.js"></script>
<script>
  tinymce.init({
    selector: "textarea",
    theme: "modern",
    plugins: [
      "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
      "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
      "save table contextmenu directionality emoticons template paste textcolor importcss"
    ],
    content_css: "css/development.css",
    add_unload_trigger: false,

    toolbar1: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons table",
    toolbar2: "custompanelbutton textbutton spellchecker",

    image_advtab: true,

    style_formats: [
      {title: 'Bold text', format: 'h1'},
      {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
      {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
      {title: 'Example 1', inline: 'span', classes: 'example1'},
      {title: 'Example 2', inline: 'span', classes: 'example2'},
      {title: 'Table styles'},
      {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ],

    template_replace_values : {
      username : "Jack Black"
    },

    template_preview_replace_values : {
      username : "Preview user name"
    },

    //file_browser_callback: function() {},

    templates: [ 
      {title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'}, 
      {title: 'Some title 2', description: 'Some desc 2', url: 'development.html'} 
    ],

    setup: function(ed) {
      ed.addButton('custompanelbutton', {
        type: 'panelbutton',
        text: 'Panel',
        panel: {
          type: 'form',
          items: [
            {type: 'button', text: 'Ok'},
            {type: 'button', text: 'Cancel'}
          ]
        }
      });

      ed.addButton('textbutton', {
        type: 'button',
        text: 'Text'
      });
    },

    spellchecker_callback: function(method, words, callback) {
      if (method == "spellcheck") {
        var suggestions = {};

        for (var i = 0; i < words.length; i++) {
          suggestions[words[i]] = ["First", "second"];
        }

        callback(suggestions);
      }
    }
  });
</script>

<!-- Select2 -->
<script src="<?php echo base_url(); ?>assets/cpanel/plugins/select2/select2.full.min.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });
  });
</script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/cpanel/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>assets/cpanel/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url(); ?>assets/cpanel/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/cpanel/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>assets/cpanel/plugins/knob/jquery.knob.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url(); ?>assets/cpanel/plugins/morris/morris.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/cpanel/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/cpanel/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<!-- page script -->
<script>
  $("#success-alert").fadeTo(3000, 500).slideUp(500, function(){
    $("#success-alert").alert('close');
});
</script>

</body>
</html>

