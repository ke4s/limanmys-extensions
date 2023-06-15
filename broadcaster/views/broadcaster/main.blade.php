<div class="row">
    <div></div>
    <div class="col-12">
        @include("modal-button", [
        "text" => "Mesaj Yayınla",
        "class" => "btn btn-primary mb-2",
        "target_id" => "sendMessageModal"
    ])

    @component("modal-component", [
    "id" => "sendMessageModal",
    "title" => "Mesaj Yayınla",
    "notSized" => true,
    "modalDialogClasses" => "classExample",
    "footer" => [
        "class" => "btn-danger",
        "onclick" => "sendMessage()",
        "text" => "Mesajı Yayınla"
    ]
])    
    <textarea  type="text-area" name="message" id="message-area" class="form-control" rows="3"> </textarea>    
    <small>Yayınlamak istediğiniz mesajı giriniz.</small>

    <div class="mb-3"></div>

    <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" value="off">
        <label class="form-check-label" for="flexSwitchCheckDefault">Banner KAPALI/AÇIK</label>
    </div>

@endcomponent
    </div>
</div>

@include("broadcaster.scripts")