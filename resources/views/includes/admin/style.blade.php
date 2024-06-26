{{-- cdn datatable css --}}
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
{{-- style css --}}
<link href="{{ url('backend/css/styles.css') }}" rel="stylesheet" />
{{-- foontawesome js --}}
<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
<script src="{{ url('backend/js/dselect.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<style>
    .slide-container {
        position: relative;
        overflow: hidden;
    }
    .slide-content {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }
    .slide-item {
        min-width: 100%;
        flex: 0 0 auto;
        margin-right: 15px;
    }
    .rata-atas {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: #f0f0f0;
        padding: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        z-index: 1000;
    }
</style>