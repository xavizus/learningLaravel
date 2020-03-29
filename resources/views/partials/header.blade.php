@push('scripts')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/opentype.js@latest/dist/opentype.min.js"></script>
    <script type="text/javascript">
        const APP_URL = {!! json_encode(url('/')) !!}
    </script>
    <script src="{{ URL::asset('js/app.js') }}"></script>
@endpush