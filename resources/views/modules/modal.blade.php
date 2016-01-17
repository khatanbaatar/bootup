<!-- Modal -->
<div class="modal fade" id="{{{$id}}}" tabindex="-1" role="dialog" aria-labelledby="{{{$id}}}ModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="{{{$id}}}ModalLabel">{{{$title}}}</h4>
      </div>
      <div class="modal-body">
        @include($body)
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Хаах</button>
      </div>
    </div>
  </div>
</div>