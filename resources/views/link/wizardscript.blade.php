<!-- jQuery -->
    <script src="{{asset('dashboard/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('dashboard/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('dashboard/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('dashboard/vendors/nprogress/nprogress.js')}}"></script>
    <!-- Datatables -->
    <!-- jQuery Tags Input -->
    <script src="{{asset('dashboard/vendors/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
    <script src="{{asset('dashboard/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('dashboard/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('dashboard/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('dashboard/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('dashboard/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('dashboard/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('dashboard/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('dashboard/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('dashboard/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('dashboard/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('dashboard/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('dashboard/vendors/datatables.net-scroller/js/datatables.scroller.min.js')}}"></script>
    <script src="{{asset('dashboard/vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('dashboard/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('dashboard/vendors/pdfmake/build/vfs_fonts.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('dashboard/build/js/custom.min.js')}}"></script>

     <!-- CK Editor -->
    <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
    
    <script>
      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor
       
      });
    </script>

     <!-- jQuery Tags Input -->
    <script>
      function onAddTag(tag) {
        alert("Added a tag: " + tag);
      }

      function onRemoveTag(tag) {
        alert("Removed a tag: " + tag);
      }

      function onChangeTag(input, tag) {
        alert("Changed a tag: " + tag);
      }

      $(document).ready(function() {
        $('#tags_1').tagsInput({
          width: 'auto'
        });
      });
    </script>
    <!-- /jQuery Tags Input -->

    <!-- Datatables -->
    <script type="text/javascript">


function openTab(evt, tabName) {
  var i, x, tablinks,state;
  x = document.getElementsByClassName("myTab");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-green", "");
     tablinks[i].className = tablinks[i].className.replace(" w3-blue", "");
     tablinks[i].className = tablinks[i].className.replace(" w3-grey", "");  
     tablinks[i].className = tablinks[i].className.replace(" w3-xlarge", ""); 
     tablinks[i].className = tablinks[i].className.replace(" w3-large", "");
     tablinks[i].className = tablinks[i].className.replace(" w3-disabled", "");
     tablinks[i].className = tablinks[i].className.replace(" w3-bottombar", ""); 
     tablinks[i].className = tablinks[i].className.replace(" w3-border-green", "");

    }

  if(tabName == "First")
  {
    document.getElementById(tabName).style.display = "block";
    document.getElementById("firstTab").className += " w3-blue";
    document.getElementById("firstTab").className += " w3-xlarge";
    document.getElementById("secondTab").className += " w3-grey";
    document.getElementById("secondTab").className += " w3-large";
    document.getElementById("secondTab").className += " w3-disabled";
    document.getElementById("thirdTab").className += " w3-grey";
    document.getElementById("thirdTab").className += " w3-large";  
    document.getElementById("thirdTab").className += " w3-disabled";        
    state = 1;
    console.log(state);
  }
  if(tabName == "Second")
  {   
    document.getElementById(tabName).style.display = "block";
    document.getElementById("firstTab").className += " w3-green";
    document.getElementById("firstTab").className += " w3-xlarge";
    document.getElementById("firstTab").className += " w3-bottombar";
    document.getElementById("firstTab").className += " w3-border-green";
    document.getElementById("secondTab").className += " w3-blue";
    document.getElementById("secondTab").className += " w3-xlarge";    
    document.getElementById("thirdTab").className += " w3-grey";
    document.getElementById("thirdTab").className += " w3-large";  
    document.getElementById("thirdTab").className += " w3-disabled";
        
    state = 2;
    console.log(state);
  }
  if(tabName == "Third")
  {
    document.getElementById(tabName).style.display = "block";
    document.getElementById("firstTab").className += " w3-green";
    document.getElementById("firstTab").className += " w3-xlarge";
    document.getElementById("firstTab").className += " w3-bottombar";
    document.getElementById("firstTab").className += " w3-border-green";
    document.getElementById("secondTab").className += " w3-green";
    document.getElementById("secondTab").className += " w3-xlarge"; 
    document.getElementById("secondTab").className += " w3-bottombar"; 
    document.getElementById("secondTab").className += " w3-border-green";    
    document.getElementById("thirdTab").className += " w3-blue";
    document.getElementById("thirdTab").className += " w3-xlarge";  
    
    state = 3;
    console.log(state);
  } 
  
  
}



$(function() {

  // We can attach the `fileselect` event to all file inputs on the page
  $(document).on('change', ':file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
  });

  // We can watch for our custom `fileselect` event like this
  $(document).ready( function() {
      $(':file').on('fileselect', function(event, numFiles, label) {

          var input = $(this).parents('.input-group').find(':text'),
              log = numFiles > 1 ? numFiles + ' files selected' : label;

          if( input.length ) {
              input.val(log);
          } else {
              if( log ) alert(log);
          }

      });
  });
  
});







    $('#cat').on('change', function(e){
        console.log(e);
        var state_id = e.target.value;
 
        $.get('{{ url('information') }}/create/ajax-state?state_id=' + state_id, function(data) {
            console.log(data);
            $('#subcat').empty();
            data.forEach( function(item) { 
              console.log(item.category_name);
               var optn = document.createElement("OPTION");
                optn.text = item.category_name;
                optn.value = item.id;
               document.getElementById("subcat").appendChild(optn);
            });
        });
    });


  $(document).ready(function () {
    
  var navListItems = $('div.setup-panel div a'),
      allWells = $('.setup-content'),
      allNextBtn = $('.nextBtn');

  allWells.hide();

  navListItems.click(function (e) {
    e.preventDefault();
    var $target = $($(this).attr('href')),
        $item = $(this);

    if (!$item.hasClass('disabled')) {
      navListItems.removeClass('btn-primary').addClass('btn-default');
      $item.addClass('btn-primary');
      allWells.hide();
      $target.show();
      $target.find('input:eq(0)').focus();
    }
  });

  allNextBtn.click(function(){
    var curStep = $(this).closest(".setup-content"),
      curStepBtn = curStep.attr("id"),
      nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
      curInputs = curStep.find("input[type='text'],input[type='url'],textarea,select,input[type='file']"),
      isValid = true;

    $(".form-group").removeClass("has-error");
    for(var i=0; i<curInputs.length; i++){
      if (!curInputs[i].validity.valid){
        isValid = false;
        $(curInputs[i]).closest(".form-group").addClass("has-error");
      }
    }

    if (isValid)
      nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');
});


   
  </script>