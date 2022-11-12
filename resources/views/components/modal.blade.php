<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-dark">
            {{--  HEADER  --}}
            <div class="modal-header">
                {{ $encabezado }}
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            {{--  BODY  --}}
            <div class="modal-body">
                {{ $body }}
            </div>

            
            <div class="modal-footer">
                {{ $footer }}
                {{--  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>  --}}
            </div>
        </div>
    </div>
</div>