<script>
    function sendMessage(){
// Metin alanından mesajı al
        //let message = $('#messageTextArea').val();

        // Toggle switch durumunu kontrol et
        //let toggleSwitch = $('#toggleSwitch').is(':checked');

        // İstek için gerekli verileri oluştur
        let data = new FormData();
        data.append('message',  $("#sendMessageModal").find("#message-area").val());
        data.append('banner',  $("#sendMessageModal").find("#flexSwitchCheckDefault").val());

        // İstek gönderme işlemi
       
        request("{{ API('broadcast') }}", data, function(response) {
            response = JSON.parse(response);
            showSwal(response.message, 'success');
            // İşlemler tamamlandıktan sonra sayfayı yenileme veya diğer işlemleri yapabilirsiniz.
        }, function(response) {
            response = JSON.parse(response);
            showSwal(response.message, 'error');
        });
    }
</script>