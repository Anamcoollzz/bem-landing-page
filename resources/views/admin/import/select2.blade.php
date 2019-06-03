@push('js')
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('bower_components/select2/dist/js/select2.full.min.js') }}"></script>
@endpush

@push('css')
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="{{ asset('bower_components/select2/dist/css/select2.min.css') }}">
@endpush

@push('script')
<script>
	$(document).ready(function(){
	    $('.select2').select2()
	});
</script>
@endpush