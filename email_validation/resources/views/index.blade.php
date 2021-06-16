<div class="main-content">
    <h1>Ứng dụng kiểm tra email hợp lệ</h1>
    <form method="post" action="{{route('checkEmail')}}">
        @csrf

        <label for="email-input">Email:
            <input type="text" id="email-input" placeholder="Enter email" name="email">
            <input type="submit" value="check">
        </label>
    </form>
    @if(isset($isEmail))
        Result: {{$isEmail ? "Đúng định dạng" : "Sai định dạng"}}
    @endif
</div>
