@extends('layouts.frontend')

@section('content')
    <div class="panel panel-default sell-product-panel">
        <div class="text-center">
            <h3><i class="fa fa-shopping-cart" style="margin-right: 12px;"></i>Manage Images</h3>
        </div>
            <div class="panel-body">
                <h5><strong>Note: </strong>Manage your images <span style="font-size: 13px;">(Do not forget to press upload button after selecting a photo)</span></h5>
                <div class="form-group">
                    <div class="file-loading">
                        <input id="multiple_input_image" type="file" name="product_image" multiple class="file" data-overwrite-initial="false" accept="image/*">
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{ route('frontend.home') }}" class="btn btn-success save-btn">Finish
                        <i class="fa fa-check"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('frontend-script')
    <script type="text/javascript">

        var productImagesUrls = {!! json_encode($productImagesUrls) !!};
        var productImagesInformations = {!! json_encode($productImagesInformations) !!};

        $("#multiple_input_image").fileinput({
            theme: 'fa',
            uploadUrl: "{{route('product-section.saveImages', $productId)}}",
            autoOrientImage: true,
            uploadAsync: false,
            uploadExtraData: function() {
                return {
                    _token: $("input[name='_token']").val(),
                };
            },
            allowedFileExtensions: ['jpg', 'jpeg', 'png', 'gif'],
            overwriteInitial: false,
            maxFileSize:10240,
            slugCallback: function (filename) {
                return filename.replace('(', '_').replace(']', '_');
            },
            'showUpload': false,
            'showRemove': false,
            fileActionSettings: {
                showDrag: false
            },
            initialPreview:  productImagesUrls,
            initialPreviewConfig: productImagesInformations,
            initialPreviewAsData: true,
            deleteExtraData: {_token: $("[name='_token']").val()}
        })

        $("#multiple_input_image").on("filepredelete", function(jqXHR) {
            var abort = true;
            if (confirm("Are you sure you want to delete this image?")) {
                abort = false;
            }
            return abort;
        });
    </script>
@endsection
