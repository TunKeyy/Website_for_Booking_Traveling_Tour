@if(session()->has('message'))
<div id="flash_message">
    <div class="flash_message_box">
        <p class="flash_message_text">
            {{session('message')}}
        </p>
    </div>
</div>
<script>
    setTimeout(() => {
        document.getElementById('flash_message').innerHTML=``
    }, 1000);
</script>
@endif