@section('scripts')

    <script src="{{ asset('backend/libs/select2/dist/js/select2.full.min.js') }}"></script>

    <script src="{{ asset('backend/libs/select2/dist/js/select2.min.js') }}"></script>

    <script src="{{ asset('backend/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>


    <script src="{{ asset('backend/libs/tinymce/tinymce.min.js') }}"></script>

    <script type="text/javascript">
        tinymce.init({
            selector: '.tinymce',
        });
    </script>


    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        //***********************************//
        // Date Picker
        //***********************************//
        jQuery('.datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true,
            format: 'yyyy/mm/dd',
        });


    </script>

    <script src="{{ asset('backend/libs/tag-editor/jquery.caret.min.js') }}"></script>
    <script src="{{ asset('backend/libs/tag-editor/jquery.tag-editor.min.js') }}"></script>
    <script type="text/javascript">
        

        $('input[name=post_tags]').tagEditor();        


    </script>


@endsection