<!-- Select2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<!-- jquery latest -->
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<!-- Select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<select class="js-data-example-ajax" id="search-select" multiple="multiple" style="width: 50%"></select>
<script>

let url = '<?= base_url(); ?>'

$('#search-select').select2({
  ajax: {
    url: url+'web/cari_novel',
    data: function (params) {
      return {
		search: params.term,
	  } 
    },processResults: function(data) {
		console.log(data)
		return {
			results: JSON.parse(data)	
		}
	}
  }
});

</script>
