<?= $this->extend('layout/main'); ?>

<?= $this->section('page-Content'); ?>

<div class="container-fluid bg-primary my-5 py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h5 class="d-inline-block text-white text-uppercase border-bottom border-5">Chatbot</h5>
            <h1 class="display-5 mb-4">Temukan Solusi di sini</h1>
            <h5 class="text-white fw-normal">Halaman ini adalah halaman chatbot yang dapat membantu menjawab semua pertanyaanmu.</h5>
        </div>
        <div class="mx-auto" style="width: 100%; max-width: 600px;">
            <div class="input-group" id="messages">
                <input type="text" class="form-control border-primary w-50" placeholder="Tanyakan Sesuatu" id="msg">
                <button onclick="send()" class="btn btn-dark border-0 w-25">Kirim</button>
            </div>
        </div>
    </div>
</div>

<script>
    function send() {
        let msg = document.getElementById('msg').value;

        fetch('/chatbot', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    message: msg
                })
            })
            .then(res => res.json())
            .then(data => {
                document.getElementById('messages').innerHTML +=
                    `<div><b>Kamu:</b> ${msg}</div>
             <div><b>Bot:</b> ${data.messages[0].text}</div>`;
            });

        document.getElementById('msg').value = '';
    }
</script>

<?= $this->endSection(); ?>