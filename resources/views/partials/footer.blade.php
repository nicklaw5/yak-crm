</div>
  </div>
  <!-- / content -->

<!-- footer -->
  <footer id="footer" class="app-footer" role="footer">
        <div class="wrapper b-t bg-light">
      <span class="pull-right">2.0.0 <a href ui-scroll="app" class="m-l-sm text-muted"><i class="fa fa-long-arrow-up"></i></a></span>
    	&copy; 2015 Copyright.
    </div>
  </footer>
  <!-- / footer -->

</div>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/ui-load.js') }}"></script>
<script src="{{ asset('js/ui-jp.config.js') }}"></script>
<script src="{{ asset('js/ui-jp.js') }}"></script>
<script src="{{ asset('js/ui-nav.js') }}"></script>
<script src="{{ asset('js/ui-toggle.js') }}"></script>
<script src="{{ asset('js/footable/footable.all.min.js') }}"></script>
<script src="{{ asset('js/chosen/chosen.jquery.min.js') }}"></script>
<script src="{{ asset('js/wysiwyg/bootstrap-wysiwyg.js') }}"></script>
<script src="{{ asset('js/wysiwyg/jquery.hotkeys.js') }}"></script>
<script src="{{ asset('js/onload.js') }}"></script>

<script src="//cdn.ckeditor.com/4.4.6/full/ckeditor.js"></script>
<script>
	$(document).ready(function(){
		$('.disable-edit').click(function(evt) {
			evt.preventDefault();

			//alert( CKEDITOR.instances.editor1 ); // e.g. object
			CKEDITOR.instances.editor1.destroy();
			//alert( CKEDITOR.instances.editor1 ); // undefined	    
			alert('Editor Disabled!');
		});
		$('.enable-edit').click(function(evt) {
			evt.preventDefault();
			// // Turn off automatic editor creation first.
		    //CKEDITOR.disableAutoInline = true;
		    CKEDITOR.inline( 'editor1' );
		    alert('Editor Enabled!');
		});

		$('.save-edit').click(function(evt) {
			evt.preventDefault();
		    alert('Changes Saved!');
		});
	});
</script>
</body>
</html>